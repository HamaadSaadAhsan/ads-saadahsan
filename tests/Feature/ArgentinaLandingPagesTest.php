<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Http;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class ArgentinaLandingPagesTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        Http::preventStrayRequests();
        Http::fake(['*' => Http::response([], 500)]);
    }

    /**
     * @return array<string, array{string, string, string, string}>
     */
    public static function argentinaPagesProvider(): array
    {
        return [
            'argentina passport' => ['/argentina-passport', 'Argentina Passport, Citizenship, Eligibility and Application', 'Argentina Passport and Citizenship Overview', 'Explore Your Argentina Citizenship Options'],
            'argentina nationality' => ['/argentina-nationality', 'Argentina Nationality, Eligibility, Requirements and Pathways', 'Argentina Nationality for Foreign Applicants', 'Check Your Argentina Citizenship Eligibility'],
            'argentina citizenship by investment' => ['/argentina-citizenship-by-investment', 'Argentina Citizenship by Investment Program 2026', 'Argentina Citizenship by Investment Program', 'Check Eligibility for Argentina Citizenship by Investment'],
            'argentina citizenship' => ['/argentina-citizenship', 'Argentina Citizenship, Requirements and Application Pathways', 'Argentina Citizenship for Foreign Applicants', 'Explore Argentina Citizenship Pathways'],
            'argentine passport' => ['/argentine-passport', 'Argentine Passport, Citizenship and Eligibility Guide', 'Argentine Passport and Citizenship Pathways', 'Explore Argentine Citizenship Eligibility'],
            'argentinian passport' => ['/argentinian-passport', 'Argentinian Passport, Eligibility and Citizenship Pathways', 'Argentinian Passport Eligibility and Citizenship', 'Check Your Citizenship Options'],
            'argentina immigration' => ['/argentina-immigration', 'Argentina Immigration, Residency and Citizenship Pathways', 'Argentina Immigration and Citizenship Pathways', 'Explore Your Argentina Immigration Options'],
            'argentina citizenship requirements' => ['/argentina-citizenship-requirements', 'Argentina Citizenship Requirements and Eligibility 2026', 'Argentina Citizenship Requirements', 'Check Argentina Citizenship Requirements'],
        ];
    }

    #[DataProvider('argentinaPagesProvider')]
    public function test_argentina_page_renders_with_its_content(string $uri, string $metaTitle, string $heading, string $callToAction): void
    {
        $response = $this->get($uri);

        $response->assertOk();
        $response->assertSee("<title>{$metaTitle}</title>", false);
        $response->assertSee("<h1>{$heading}</h1>", false);
        $response->assertSee($callToAction);
        $response->assertSee('landing_source: \''.ltrim($uri, '/').'\'', false);
        $response->assertSee('<link rel="canonical" href="https://ads.saadahsan.com'.$uri.'">', false);
    }

    public function test_unknown_argentina_page_returns_not_found(): void
    {
        $this->get('/argentina-golden-visa')->assertNotFound();
    }
}
