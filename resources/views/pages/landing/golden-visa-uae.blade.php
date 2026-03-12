@extends('layouts.landing')

@section('meta_title', 'Golden Visa UAE | Legal Long-Term Residency Program in the United Arab Emirates')
@section('meta_description', 'Understand the UAE Golden Visa, a government-approved long-term residency program that provides lawful residence in Dubai and across the UAE for eligible individuals.')

@push('preload')
<link rel="preload" as="image" href="{{ asset('images/800/uae-golden-visa-800.webp') }}" type="image/webp" fetchpriority="high">
@endpush

@push('meta')
<meta property="og:title" content="Golden Visa UAE | Legal Long-Term Residency Program in the United Arab Emirates">
<meta property="og:description" content="Understand the UAE Golden Visa, a government-approved long-term residency program that provides lawful residence in Dubai and across the UAE for eligible individuals.">
<meta property="og:image" content="{{ asset('images/800/uae-golden-visa-800.webp') }}">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Golden Visa UAE | Legal Long-Term Residency Program in the United Arab Emirates","description":"Understand the UAE Golden Visa, a government-approved long-term residency program that provides lawful residence in Dubai and across the UAE for eligible individuals.","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship"}}</script>
@endpush

@section('content')
<section class="hero" style="background-image:url('{{ asset('images/800/uae-golden-visa-800.webp') }}')">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <div class="hero-eyebrow">Government-Approved Program</div>
                <h1>Golden Visa <span>UAE</span></h1>
                <p class="hero-subtitle">Legal Long-Term Residency in the United Arab Emirates</p>
                <p class="hero-lead">Secure your future with the UAE's premier residency program. The Golden Visa provides eligible individuals with lawful, long-term residence under a regulated immigration framework with government oversight.</p>
                <div class="hero-features">
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        10 Year Residency
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        Family Inclusion
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        No Sponsor Required
                    </div>
                </div>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="hero-stat-value">10</div>
                        <div class="hero-stat-label">Year Validity</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-value">100%</div>
                        <div class="hero-stat-label">Legal Program</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-value">1000+</div>
                        <div class="hero-stat-label">Clients Served</div>
                    </div>
                </div>
            </div>

            <x-landing-form
                source="golden-visa-uae"
                consultancy="golden-visa"
                title="Check Your Eligibility"
                subtitle="Share your details and our experts will assess your eligibility for the UAE Golden Visa."
            >Check Eligibility</x-landing-form>
        </div>
    </div>
</section>

<section class="trust-section">
    <div class="container">
        <div class="trust-grid">
            <div class="trust-item">
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                </div>
                <span class="trust-text">Government Regulated</span>
            </div>
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
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <span class="trust-text">No Sponsor Required</span>
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Program Overview</span>
            <h2>What Is the UAE Golden Visa?</h2>
            <p>A residency permit issued under federal immigration regulations to individuals who meet defined eligibility criteria, offering extended validity and greater residency stability.</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                </div>
                <h3>Long-Term Residency</h3>
                <p>Structured residency pathway under UAE immigration policy with up to 10 years validity.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M15 11V5l-3-3-3 3v2H3v14h18V11h-6zm-8 8H5v-2h2v2zm0-4H5v-2h2v2zm0-4H5V9h2v2zm6 8h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V9h2v2zm0-4h-2V5h2v2zm6 12h-2v-2h2v2zm0-4h-2v-2h2v2z"/></svg>
                </div>
                <h3>Golden Visa Dubai</h3>
                <p>Dubai is a principal jurisdiction for obtaining residency under the UAE Golden Visa framework.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                </div>
                <h3>Family Residency</h3>
                <p>Include immediate family members under the same residency structure.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                </div>
                <h3>Regulatory Compliance</h3>
                <p>Applications reviewed by authorities to ensure eligibility and documentation accuracy.</p>
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="content-grid">
            <div>
                <h2>Key Features of the UAE Golden Visa</h2>
                <p>The UAE Golden Visa provides several advantages for eligible individuals seeking long-term residence in the Emirates.</p>
                <ul class="checklist">
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Government-regulated long-term residency status</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Legal right to reside in Dubai and across the UAE</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Residency continuity without frequent renewals</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Eligibility for family inclusion under approved categories</span>
                    </li>
                </ul>
            </div>
            <div>
                <h2>Who Can Apply?</h2>
                <p>Eligibility is determined by criteria set by UAE authorities. Applications are assessed individually based on qualification category and compliance with residency regulations.</p>
                <ul class="checklist">
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Investors with qualifying real estate or business investments</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Entrepreneurs and business owners</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Skilled professionals and specialists</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Outstanding students and graduates</span>
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
            <h2>UAE Golden Visa FAQs</h2>
        </div>
        <div class="faq-list">
            <div class="faq-item active">
                <div class="faq-question">What is the UAE Golden Visa?<span class="faq-toggle"></span></div>
                <div class="faq-answer"><div class="faq-answer-inner">It is a government-approved long-term residency permit issued under UAE immigration regulations. The program provides eligible individuals with extended residency status without reliance on short-term visa renewals.</div></div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Is the UAE Golden Visa a legal residency program?<span class="faq-toggle"></span></div>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. The UAE Golden Visa is fully regulated and issued by UAE authorities. It operates under government oversight and provides lawful residence in Dubai and across the UAE.</div></div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Does the UAE Golden Visa provide long-term residence?<span class="faq-toggle"></span></div>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. The UAE Golden Visa offers extended residency validity compared to standard visas, with options for up to 10 years of residency status.</div></div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Can family members be included?<span class="faq-toggle"></span></div>
                <div class="faq-answer"><div class="faq-answer-inner">Eligible applicants may include immediate family members under the residency framework, subject to applicable immigration rules and category requirements.</div></div>
            </div>
        </div>
    </div>
</section>
@endsection
