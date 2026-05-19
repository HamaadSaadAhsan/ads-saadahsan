@php
    $data = app(\App\Services\GooglePlacesService::class)->getReviews();
    $rating = $data['rating'];
    $total = $data['total'];
    $reviews = $data['reviews'];
@endphp

@if(!empty($reviews))
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
                <div class="gr-stars-overall">
                    <svg width="0" height="0" style="position:absolute">
                        <defs>
                            @for($i = 1; $i <= 5; $i++)
                                @php
                                    $fill = min(max($rating - ($i - 1), 0), 1);
                                    $pct = round($fill * 100);
                                @endphp
                                <linearGradient id="gr-grad-{{ $i }}" x1="0" x2="1" y1="0" y2="0">
                                    <stop offset="{{ $pct }}%" stop-color="#C9A962"/>
                                    <stop offset="{{ $pct }}%" stop-color="rgba(201,169,98,0.25)"/>
                                </linearGradient>
                            @endfor
                        </defs>
                    </svg>
                    @for($i = 1; $i <= 5; $i++)
                        <svg viewBox="0 0 24 24" class="gr-star" aria-hidden="true">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" fill="url(#gr-grad-{{ $i }})"/>
                        </svg>
                    @endfor
                </div>
                <span class="gr-total">{{ number_format($total) }} reviews</span>
            </div>
        </div>

        <div class="gr-grid">
            @foreach($reviews as $review)
            <div class="gr-card">
                <div class="gr-card-top">
                    <div class="gr-avatar">
                        @if($review['photo'])
                            <img src="{{ $review['photo'] }}" alt="{{ $review['author'] }}" width="40" height="40" loading="lazy">
                        @else
                            <span>{{ mb_strtoupper(mb_substr($review['author'], 0, 1)) }}</span>
                        @endif
                    </div>
                    <div class="gr-author-info">
                        <span class="gr-author-name">{{ $review['author'] }}</span>
                        <span class="gr-time">{{ $review['relative_time'] }}</span>
                    </div>
                    <svg class="gr-google-icon gr-google-icon--sm" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                        <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                        <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
                        <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                    </svg>
                </div>
                <div class="gr-stars">
                    @for($i = 1; $i <= 5; $i++)
                        <svg viewBox="0 0 24 24" class="gr-star {{ $i <= $review['rating'] ? 'gr-star--filled' : 'gr-star--empty' }}" aria-hidden="true">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    @endfor
                </div>
                @if($review['text'])
                <p class="gr-text">{{ $review['text'] }}</p>
                @endif
            </div>
            @endforeach
        </div>

        <div class="gr-footer">
            <a href="https://www.google.com/maps/place/?q=place_id:{{ config('services.google_places.place_id') }}" target="_blank" rel="noopener noreferrer" class="gr-view-all">
                View all {{ number_format($total) }} reviews on Google
                <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"/></svg>
            </a>
        </div>
    </div>
</section>

<style>
.gr-section{padding:80px 0;background:var(--charcoal);position:relative;overflow:hidden}
.gr-section::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 50% 100%,rgba(201,169,98,.07) 0%,transparent 70%);pointer-events:none}
.gr-header{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:24px;margin-bottom:48px;position:relative}
.gr-badge{display:inline-flex;align-items:center;gap:10px;padding:8px 20px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);border-radius:50px;font-size:13px;font-weight:600;letter-spacing:1.5px;text-transform:uppercase;color:rgba(255,255,255,.7)}
.gr-google-icon{width:20px;height:20px;flex-shrink:0}
.gr-google-icon--sm{width:18px;height:18px;margin-left:auto;flex-shrink:0}
.gr-overall{display:flex;align-items:center;gap:16px}
.gr-score{font-family:'Cormorant Garamond','Cormorant Garamond Fallback',Georgia,serif;font-size:3rem;font-weight:700;color:var(--gold);line-height:1}
.gr-stars-overall{display:flex;gap:3px}
.gr-star{width:20px;height:20px}
.gr-star--filled{fill:var(--gold)}
.gr-star--empty{fill:rgba(201,169,98,.25)}
.gr-total{font-size:14px;color:rgba(255,255,255,.5)}
.gr-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;position:relative}
@media(max-width:1024px){.gr-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:640px){.gr-grid{grid-template-columns:1fr}.gr-header{flex-direction:column;align-items:flex-start}}
.gr-card{background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.08);border-radius:16px;padding:24px;display:flex;flex-direction:column;gap:12px;transition:border-color .3s,background .3s}
.gr-card:hover{background:rgba(255,255,255,.07);border-color:rgba(201,169,98,.25)}
.gr-card-top{display:flex;align-items:center;gap:12px}
.gr-avatar{width:40px;height:40px;border-radius:50%;overflow:hidden;flex-shrink:0;background:var(--burgundy);display:flex;align-items:center;justify-content:center;font-size:16px;font-weight:600;color:#fff}
.gr-avatar img{width:100%;height:100%;object-fit:cover}
.gr-author-info{display:flex;flex-direction:column;gap:2px;min-width:0}
.gr-author-name{font-size:14px;font-weight:600;color:#fff;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.gr-time{font-size:12px;color:rgba(255,255,255,.4)}
.gr-stars{display:flex;gap:2px}
.gr-star{width:16px;height:16px}
.gr-text{font-size:13px;line-height:1.7;color:rgba(255,255,255,.65);margin:0;display:-webkit-box;-webkit-line-clamp:4;-webkit-box-orient:vertical;overflow:hidden}
.gr-footer{text-align:center;margin-top:40px}
.gr-view-all{display:inline-flex;align-items:center;gap:8px;font-size:14px;font-weight:500;color:var(--gold);border:1px solid rgba(201,169,98,.3);padding:12px 28px;border-radius:50px;transition:background .3s,border-color .3s}
.gr-view-all:hover{background:rgba(201,169,98,.1);border-color:var(--gold)}
.gr-view-all svg{width:16px;height:16px}
</style>
@endif
