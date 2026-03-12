@extends('layouts.landing')

@section('meta_title', 'UAE Golden Visa Benefits | 10 Year Residency and Key Rules')
@section('meta_description', 'Explore the benefits of the UAE Golden Visa, including 10-year long-term residency, stability, and key residency rules for eligible individuals and families.')

@push('preload')
<link rel="preload" as="image" href="{{ asset('images/800/uae-golden-visa-800.webp') }}" type="image/webp" fetchpriority="high">
@endpush

@push('meta')
<meta property="og:title" content="UAE Golden Visa Benefits | 10 Year Residency and Key Rules">
<meta property="og:description" content="Explore the benefits of the UAE Golden Visa, including 10-year long-term residency, stability, and key residency rules for eligible individuals and families.">
<meta property="og:image" content="{{ asset('images/800/uae-golden-visa-800.webp') }}">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"UAE Golden Visa Benefits | 10 Year Residency and Key Rules","description":"Explore the benefits of the UAE Golden Visa, including 10-year long-term residency, stability, and key residency rules for eligible individuals and families.","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship"}}</script>
@endpush

@section('content')
<section class="hero" style="background-image:url('{{ asset('images/800/uae-golden-visa-800.webp') }}')">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <div class="hero-eyebrow">Long-Term Residency Advantages</div>
                <h1>Golden Visa <span>Benefits</span></h1>
                <p class="hero-subtitle">10 Year Residency and Key Advantages</p>
                <p class="hero-lead">The UAE Golden Visa offers long-term residency benefits to eligible individuals under a government-approved immigration framework. Designed to provide stability and continuity, this residency program allows approved applicants to live in the United Arab Emirates for extended periods.</p>
                <div class="hero-features">
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        10 Year Validity
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        Family Inclusion
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        Residency Stability
                    </div>
                </div>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="hero-stat-value">10</div>
                        <div class="hero-stat-label">Year Validity</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-value">Family</div>
                        <div class="hero-stat-label">Inclusion</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-value">Stable</div>
                        <div class="hero-stat-label">Residency</div>
                    </div>
                </div>
            </div>
            <x-landing-form
                source="uae-golden-visa-benefits"
                consultancy="golden-visa"
                title="Explore Benefits in Detail"
                subtitle="Share your details and our experts will explain how the UAE Golden Visa benefits apply to your situation."
            >Get Detailed Information</x-landing-form>
        </div>
    </div>
</section>

<section class="trust-section">
    <div class="container">
        <div class="trust-grid">
            <div class="trust-item">
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                </div>
                <span class="trust-text">10 Year Validity</span>
            </div>
            <div class="trust-item">
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                </div>
                <span class="trust-text">Family Inclusion</span>
            </div>
            <div class="trust-item">
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                </div>
                <span class="trust-text">Residency Stability</span>
            </div>
            <div class="trust-item">
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                </div>
                <span class="trust-text">UAE-Wide Access</span>
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Program Advantages</span>
            <h2>Key Benefits of the UAE Golden Visa</h2>
            <p>The benefits of the UAE Golden Visa are structured to support long-term planning, lawful residence, and regulated immigration status in the United Arab Emirates.</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                </div>
                <h3>Extended Residency</h3>
                <p>Extended residency validity under a government-approved program with up to 10 years duration.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                </div>
                <h3>Legal Right to Reside</h3>
                <p>Legal right to reside in Dubai and across the UAE without frequent visa renewals.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
                </div>
                <h3>Work & Study</h3>
                <p>Ability to live, work, and study under a single residency status throughout the UAE.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                </div>
                <h3>Family Benefits</h3>
                <p>Family inclusion under eligible Golden Visa categories for spouse, children, and parents.</p>
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="content-grid">
            <div>
                <h2>10 Year Golden Visa UAE Residency</h2>
                <p>One of the core benefits of the UAE Golden Visa is long-term residency validity. Eligible applicants may be granted residency for up to 10 years, subject to applicable regulations and category approval.</p>
                <ul class="checklist">
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Extended residency validity under a government-approved program</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Legal right to reside in Dubai and across the UAE</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Residency stability without frequent visa renewals</span>
                    </li>
                </ul>
            </div>
            <div>
                <h2>Additional Residency Benefits</h2>
                <p>Beyond long-term validity, the Golden Visa offers additional advantages for approved residents in the UAE.</p>
                <ul class="checklist">
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Ability to live, work, and study under a single residency status</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Family inclusion under eligible Golden Visa categories</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Access to all UAE emirates under one residency</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="faq">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Common Questions</span>
            <h2>UAE Golden Visa Benefits FAQs</h2>
        </div>
        <div class="faq-list">
            <div class="faq-item active">
                <div class="faq-question">What are the main benefits of the UAE Golden Visa?<span class="faq-toggle"></span></div>
                <div class="faq-answer"><div class="faq-answer-inner">The main benefits include long-term residency up to 10 years, legal residence across the UAE, residency stability without frequent renewals, and eligibility for family inclusion.</div></div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Is the UAE Golden Visa valid for 10 years?<span class="faq-toggle"></span></div>
                <div class="faq-answer"><div class="faq-answer-inner">Eligible applicants may receive residency validity of up to 10 years, depending on category and approval by UAE immigration authorities.</div></div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Are there specific rules for Golden Visa holders?<span class="faq-toggle"></span></div>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. Golden Visa holders must comply with residency rules and UAE immigration regulations during the validity period to maintain their status.</div></div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Do Golden Visa benefits apply across all emirates?<span class="faq-toggle"></span></div>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. The Golden Visa is a federal residency program and applies across the UAE, including Dubai, Abu Dhabi, and all other emirates.</div></div>
            </div>
        </div>
    </div>
</section>
@endsection
