<?php

namespace Tests\Feature;

use App\Services\InstagramService;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class InstagramServiceConfigTest extends TestCase
{
    public function test_instagram_service_reads_credentials_from_config(): void
    {
        config()->set('services.instagram.access_token', 'fake-token');
        config()->set('services.instagram.page_id', '123456');

        Http::fake([
            'https://graph.facebook.com/v24.0/me/accounts*' => Http::response([
                'data' => [
                    [
                        'id' => '123456',
                        'name' => 'Taekwondo Fabra',
                        'access_token' => 'fake-page-token',
                        'instagram_business_account' => [
                            'id' => 'ig-999',
                        ],
                    ],
                ],
            ]),
            'https://graph.facebook.com/v24.0/ig-999/media*' => Http::response([
                'data' => [
                    [
                        'id' => 'post-1',
                        'caption' => 'Entreno',
                        'media_type' => 'IMAGE',
                        'media_url' => 'https://example.com/photo.jpg',
                        'permalink' => 'https://instagram.com/p/test',
                        'timestamp' => '2026-11-19T10:00:00+0000',
                    ],
                ],
            ]),
        ]);

        $posts = (new InstagramService)->getLatestPosts(4);

        $this->assertCount(1, $posts);
        $this->assertSame('post-1', $posts[0]['id']);
    }
}
