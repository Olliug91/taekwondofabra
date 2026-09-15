<?php

namespace Tests\Feature;

use Tests\TestCase;

class ScheduleWhatsAppLinksTest extends TestCase
{
    public function test_home_displays_whatsapp_group_links_for_all_classes(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $groups = config('taekwondo.whatsapp_groups');
        $this->assertNotEmpty($groups);
        $this->assertCount(4, $groups);

        foreach ($groups as $group) {
            $response->assertSee($group['whatsapp_url'], false);
        }
    }
}
