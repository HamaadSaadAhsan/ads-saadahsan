<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GooglePlacesService
{
    private string $apiKey;

    private string $placeId;

    private string $baseUrl = 'https://places.googleapis.com/v1/places';

    public function __construct()
    {
        $this->apiKey = config('services.google_places.api_key');
        $this->placeId = config('services.google_places.place_id');
    }

    public function getReviews(): array
    {
        return Cache::remember('google_place_reviews', now()->addHours(24), function (): array {
            $response = Http::withHeaders([
                'X-Goog-Api-Key' => $this->apiKey,
                'X-Goog-FieldMask' => 'id,rating,userRatingCount,reviews',
                'Referer' => 'https://ads.saadahsan.com/',
            ])->get("{$this->baseUrl}/{$this->placeId}");

            if (! $response->successful()) {
                return $this->fallback();
            }

            $data = $response->json();

            return [
                'rating' => $data['rating'] ?? 4.3,
                'total' => $data['userRatingCount'] ?? 94,
                'reviews' => $this->normalizeReviews($data['reviews'] ?? []),
            ];
        });
    }

    /** @param array<int, array<string, mixed>> $reviews */
    private function normalizeReviews(array $reviews): array
    {
        $normalized = array_map(function (array $review): array {
            return [
                'author' => $review['authorAttribution']['displayName'] ?? 'Anonymous',
                'photo' => $review['authorAttribution']['photoUri'] ?? null,
                'rating' => $review['rating'] ?? 5,
                'text' => $review['text']['text'] ?? '',
                'relative_time' => $review['relativePublishTimeDescription'] ?? '',
            ];
        }, $reviews);

        $filtered = array_filter($normalized, fn (array $r): bool => $r['rating'] >= 4);

        usort($filtered, fn (array $a, array $b): int => $b['rating'] <=> $a['rating']);

        return array_values($filtered);
    }

    /** @return array<string, mixed> */
    private function fallback(): array
    {
        return ['rating' => 4.3, 'total' => 94, 'reviews' => []];
    }
}
