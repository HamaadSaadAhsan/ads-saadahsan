<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class LandingPageResponseTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Http::preventStrayRequests();
        Http::fake(['*' => Http::response([], 500)]);
    }

    public function test_https_landing_page_sends_security_headers(): void
    {
        $response = $this->get('https://ads.saadahsan.com/argentina-citizenship-requirements');

        $response->assertOk();
        $response->assertHeader('Strict-Transport-Security', 'max-age=31536000');
        $response->assertHeader('Cross-Origin-Opener-Policy', 'same-origin');
        $response->assertHeader('Referrer-Policy', 'strict-origin-when-cross-origin');
    }

    public function test_http_landing_page_does_not_send_hsts(): void
    {
        $response = $this->get('http://ads.saadahsan.com/argentina-citizenship-requirements');

        $response->assertOk();
        $response->assertHeaderMissing('Strict-Transport-Security');
    }

    public function test_landing_stylesheet_is_inlined_instead_of_render_blocking(): void
    {
        $response = $this->get('/argentina-citizenship-requirements');

        $response->assertOk();
        $response->assertDontSee('rel="stylesheet"', false);
        $response->assertSee('.hero-form', false);
    }

    public function test_google_reviews_map_is_not_loaded_until_scrolled_into_view(): void
    {
        $response = $this->get('/argentina-citizenship-requirements');

        $response->assertSee('id="gr-embed"', false);
        $response->assertSee('data-src="https://www.google.com/maps/embed/v1/place', false);
        $response->assertDontSee(' src="https://www.google.com/maps/embed', false);
        $response->assertSee('class="gr-stars-overall" role="img"', false);
    }

    public function test_google_tag_manager_loads_only_after_user_interaction(): void
    {
        $response = $this->get('/argentina-citizenship-requirements');

        $response->assertSee('document.addEventListener(e, loadGTM, {once: true, passive: true})', false);
        $response->assertDontSee('setTimeout(loadGTM', false);
        $response->assertSee("['mousedown', 'keydown', 'scroll', 'touchstart', 'click']", false);
        $response->assertDontSee("'mousemove'", false);
    }
}
