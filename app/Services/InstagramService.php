<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class InstagramService
{
    protected string|null $userAccessToken;
    protected string|null $pageId;

    public function __construct()
    {
        $this->userAccessToken = env('INSTAGRAM_ACCESS_TOKEN'); // User token (Facebook Login)
        $this->pageId = env('INSTAGRAM_PAGE_ID'); // Optional but recommended
    }

    public function getLatestPosts(int $limit = 4): array
    {
        if (!$this->userAccessToken) {
            return [];
        }

        try {
            // 1) Resolve IG user id + page access token (cache it)
            $resolved = Cache::remember('instagram_resolved_account', 60 * 60 * 12, function () {
                $resp = Http::get("https://graph.facebook.com/v24.0/me/accounts", [
                    'access_token' => $this->userAccessToken,
                    'fields' => 'id,name,instagram_business_account,access_token',
                    'limit' => 100,
                ]);

                if (!$resp->successful()) {
                    Log::error('Instagram API (me/accounts) Error: ' . $resp->body());
                    return null;
                }

                $pages = $resp->json('data') ?? [];

                // Pick page: by env PAGE_ID if provided, else first with IG business account
                $page = null;

                if ($this->pageId) {
                    $page = collect($pages)->firstWhere('id', $this->pageId);
                }

                if (!$page) {
                    $page = collect($pages)->first(function ($p) {
                        return isset($p['instagram_business_account']['id']);
                    });
                }

                if (!$page) {
                    Log::error('Instagram API Error: No page found with instagram_business_account. Raw: ' . json_encode($resp->json()));
                    return null;
                }

                $igUserId = $page['instagram_business_account']['id'] ?? null;
                $pageAccessToken = $page['access_token'] ?? null;

                if (!$igUserId) {
                    Log::error('Instagram API Error: Page has no instagram_business_account. Page: ' . json_encode($page));
                    return null;
                }

                if (!$pageAccessToken) {
                    // Fallback (usually works, but page token is preferred)
                    $pageAccessToken = $this->userAccessToken;
                }

                return [
                    'page_id' => $page['id'],
                    'page_name' => $page['name'] ?? null,
                    'ig_user_id' => $igUserId,
                    'page_access_token' => $pageAccessToken,
                ];
            });

            if (!$resolved) {
                return [];
            }

            // 2) Fetch IG media (cache posts)
            $cacheKey = "instagram_posts_{$resolved['ig_user_id']}_{$limit}";

            return Cache::remember($cacheKey, 60 * 15, function () use ($resolved, $limit) {
                $mediaResp = Http::get("https://graph.facebook.com/v24.0/{$resolved['ig_user_id']}/media", [
                    'access_token' => $resolved['page_access_token'],
                    'fields' => 'id,caption,media_type,media_url,thumbnail_url,permalink,timestamp',
                    'limit' => $limit,
                ]);

                if (!$mediaResp->successful()) {
                    Log::error('Instagram API (IG Media) Error: ' . $mediaResp->body());
                    return [];
                }

                return $mediaResp->json('data') ?? [];
            });

        } catch (\Throwable $e) {
            Log::error('Instagram API Exception: ' . $e->getMessage());
            return [];
        }
    }
}
