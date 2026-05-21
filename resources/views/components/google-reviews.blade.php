@php
    $data = app(\App\Services\GooglePlacesService::class)->getReviews();
    $rating = $data['rating'];
    $total = $data['total'];
    $placeId = config('services.google_places.place_id');
    $apiKey = config('services.google_places.api_key');
    $mapsUrl = 'https://www.google.com/maps/place/?q=place_id:' . $placeId;
    $embedUrl = 'https://www.google.com/maps/embed/v1/place?key=' . $apiKey . '&q=place_id:' . $placeId;
@endphp

<section class="gr-section">
    <div class="container">
        <div class="gr-header">
            <div class="gr-badge">
                <svg class="gr-google-icon" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                </svg>
                <span>Google Reviews</span>
            </div>

            <div class="gr-overall">
                <span class="gr-score">{{ number_format($rating, 1) }}</span>
                <div class="gr-stars-overall" aria-label="{{ number_format($rating, 1) }} out of 5 stars">
                    @for($i = 1; $i <= 5; $i++)
                        @php $fill = min(max($rating - ($i - 1), 0), 1); $pct = round($fill * 100); @endphp
                        <svg viewBox="0 0 24 24" class="gr-star" aria-hidden="true">
                            <defs>
                                <linearGradient id="gr-grad-hdr-{{ $i }}" x1="0" x2="1" y1="0" y2="0">
                                    <stop offset="{{ $pct }}%" stop-color="#C9A962"/>
                                    <stop offset="{{ $pct }}%" stop-color="rgba(201,169,98,0.25)"/>
                                </linearGradient>
                            </defs>
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" fill="url(#gr-grad-hdr-{{ $i }})"/>
                        </svg>
                    @endfor
                </div>
                <span class="gr-total">{{ number_format($total) }} reviews</span>
            </div>
        </div>

        <div class="gr-embed-wrapper">
            <iframe
                src="{{ $embedUrl }}"
                width="100%"
                height="480"
                style="border:0"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade"
                title="Our Google Reviews"
            ></iframe>
        </div>

        <div class="gr-footer">
            <a href="{{ $mapsUrl }}" target="_blank" rel="noopener noreferrer" class="gr-view-all">
                View all {{ number_format($total) }} reviews on Google
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
            </a>
        </div>
    </div>
</section>

<style>
.gr-section{padding:80px 0;background:var(--charcoal);position:relative;overflow:hidden}
.gr-section::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 50% 100%,rgba(201,169,98,.07) 0%,transparent 70%);pointer-events:none}
.gr-header{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:24px;margin-bottom:40px;position:relative}
.gr-badge{display:inline-flex;align-items:center;gap:10px;padding:8px 20px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);border-radius:50px;font-size:13px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;color:rgba(255,255,255,.7)}
.gr-google-icon{width:20px;height:20px;flex-shrink:0}
.gr-overall{display:flex;align-items:center;gap:16px}
.gr-score{font-family:'Cormorant Garamond','Cormorant Garamond Fallback',Georgia,serif;font-size:3rem;font-weight:700;color:var(--gold);line-height:1}
.gr-stars-overall{display:flex;gap:3px}
.gr-star{width:20px;height:20px}
.gr-total{font-size:14px;color:rgba(255,255,255,.5)}
.gr-embed-wrapper{border-radius:16px;overflow:hidden;border:1px solid rgba(255,255,255,.08);position:relative}
.gr-embed-wrapper iframe{display:block}
.gr-footer{text-align:center;margin-top:32px}
.gr-view-all{display:inline-flex;align-items:center;gap:8px;font-size:14px;font-weight:500;color:var(--gold);border:1px solid rgba(201,169,98,.3);padding:12px 28px;border-radius:50px;transition:background .3s,border-color .3s;text-decoration:none}
.gr-view-all:hover{background:rgba(201,169,98,.1);border-color:var(--gold)}
.gr-view-all svg{width:16px;height:16px}
@media(max-width:640px){.gr-header{flex-direction:column;align-items:flex-start}.gr-embed-wrapper iframe{height:380px}}
</style>
