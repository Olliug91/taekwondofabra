<?php

namespace Tests\Feature;

use Tests\TestCase;

class WelcomeGuideTest extends TestCase
{
    public function test_welcome_guide_pdf_route_serves_inline_pdf(): void
    {
        $response = $this->get(route('guide.welcome'));

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'application/pdf');
        $this->assertStringContainsString(
            'inline; filename="Guia_Bienvenida_Taekwondo_Fabra.pdf"',
            (string) $response->headers->get('Content-Disposition')
        );
    }

    public function test_home_and_faq_pages_display_welcome_guide_link(): void
    {
        $guideUrl = route('guide.welcome');

        $this->get(route('home'))
            ->assertStatus(200)
            ->assertSee($guideUrl, false);

        $this->get(route('faq'))
            ->assertStatus(200)
            ->assertSee($guideUrl, false);
    }
}
