@extends('layouts.landing')

@section('meta_title', 'How to Apply for UAE Golden Visa | Step-by-Step Golden Visa Process')
@section('meta_description', 'Learn how to apply for the UAE Golden Visa. Understand the official Golden Visa application process, steps involved, and how residency approval works in the UAE.')

@push('preload')
<link rel="preload" as="image" href="{{ asset('images/800/uae-golden-visa-800.webp') }}" type="image/webp" fetchpriority="high">
@endpush

@push('meta')
<meta property="og:title" content="How to Apply for UAE Golden Visa | Step-by-Step Golden Visa Process">
<meta property="og:description" content="Learn how to apply for the UAE Golden Visa. Understand the official Golden Visa application process, steps involved, and how residency approval works in the UAE.">
<meta property="og:image" content="{{ asset('images/800/uae-golden-visa-800.webp') }}">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"How to Apply for UAE Golden Visa | Step-by-Step Golden Visa Process","description":"Learn how to apply for the UAE Golden Visa. Understand the official Golden Visa application process, steps involved, and how residency approval works in the UAE.","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship"}}</script>
@endpush

@section('content')
<section class="hero" style="background-image:url('{{ asset('images/800/uae-golden-visa-800.webp') }}')">
    <div class="container">
        <div class="hero-grid">
            <div class="hero-content">
                <div class="hero-eyebrow">Official Application Process</div>
                <h1>How to Apply for <span>Golden Visa</span></h1>
                <p class="hero-subtitle">Understanding the UAE Golden Visa Application Process</p>
                <p class="hero-lead">The UAE Golden Visa application process is defined by federal immigration authorities and follows a structured pathway for eligible applicants seeking long-term residency. Understanding how to apply helps applicants prepare documentation and ensure compliance.</p>
                <div class="hero-features">
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        Step-by-Step Guide
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        Official Process
                    </div>
                    <div class="hero-feature">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                        Expert Assistance
                    </div>
                </div>
                <div class="hero-stats">
                    <div class="hero-stat">
                        <div class="hero-stat-value">4</div>
                        <div class="hero-stat-label">Step Process</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-value">Expert</div>
                        <div class="hero-stat-label">Guidance</div>
                    </div>
                    <div class="hero-stat">
                        <div class="hero-stat-value">Official</div>
                        <div class="hero-stat-label">Process</div>
                    </div>
                </div>
            </div>
            <x-landing-form
                source="how-to-apply-golden-visa-uae"
                consultancy="golden-visa"
                title="Start Your Application"
                subtitle="Share your details and our experts will guide you through the UAE Golden Visa application process."
            >Start Application Process</x-landing-form>
        </div>
    </div>
</section>

<section class="trust-section">
    <div class="container">
        <div class="trust-grid">
            <div class="trust-item">
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                </div>
                <span class="trust-text">Step-by-Step Guide</span>
            </div>
            <div class="trust-item">
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                </div>
                <span class="trust-text">Official Process</span>
            </div>
            <div class="trust-item">
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                </div>
                <span class="trust-text">Expert Assistance</span>
            </div>
            <div class="trust-item">
                <div class="trust-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                </div>
                <span class="trust-text">Compliance Support</span>
            </div>
        </div>
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Application Steps</span>
            <h2>Golden Visa UAE Application Process</h2>
            <p>The Golden Visa process follows structured stages defined by UAE immigration authorities. Each application is reviewed individually before residency approval is granted.</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon" style="background:linear-gradient(135deg,#800020,#a00030);color:#fff;font-weight:700;font-size:1.25rem;">1</div>
                <h3>Category Identification</h3>
                <p>Identification of the appropriate Golden Visa category based on your qualifications and eligibility.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon" style="background:linear-gradient(135deg,#800020,#a00030);color:#fff;font-weight:700;font-size:1.25rem;">2</div>
                <h3>Documentation</h3>
                <p>Preparation and submission of required documentation through authorized channels.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon" style="background:linear-gradient(135deg,#800020,#a00030);color:#fff;font-weight:700;font-size:1.25rem;">3</div>
                <h3>Application Review</h3>
                <p>Application review by relevant UAE authorities with regulatory verification and compliance checks.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon" style="background:linear-gradient(135deg,#800020,#a00030);color:#fff;font-weight:700;font-size:1.25rem;">4</div>
                <h3>Approval Decision</h3>
                <p>Residency approval or decision issuance following successful completion of all requirements.</p>
            </div>
        </div>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <div class="content-grid">
            <div>
                <h2>How to Get the Golden Visa in the UAE</h2>
                <p>Getting the Golden Visa in the UAE involves submitting an application through approved channels and meeting the procedural requirements established by immigration authorities.</p>
                <ul class="checklist">
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Determine your eligibility category</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Prepare required documentation</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Submit through authorized channels</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Await regulatory review and approval</span>
                    </li>
                </ul>
            </div>
            <div>
                <h2>Golden Visa Application in Dubai</h2>
                <p>Applicants seeking residency in Dubai follow the same federal Golden Visa process applicable across the UAE. Dubai-based applications are processed under national immigration rules.</p>
                <ul class="checklist">
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Same federal process applies</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">National immigration rules</span>
                    </li>
                    <li>
                        <span class="checklist-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="checklist-text">Expert guidance available</span>
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
            <h2>UAE Golden Visa Application FAQs</h2>
        </div>
        <div class="faq-list">
            <div class="faq-item active">
                <div class="faq-question">How to apply for the UAE Golden Visa?<span class="faq-toggle"></span></div>
                <div class="faq-answer"><div class="faq-answer-inner">Applications are submitted through approved channels and reviewed by UAE immigration authorities following a defined process. The steps include category identification, documentation, submission, and regulatory review.</div></div>
            </div>
            <div class="faq-item">
                <div class="faq-question">How to get Golden Visa UAE approval?<span class="faq-toggle"></span></div>
                <div class="faq-answer"><div class="faq-answer-inner">Approval is granted after successful review, verification, and compliance assessment by relevant authorities. Meeting eligibility criteria and submitting complete documentation is essential.</div></div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Is the Golden Visa process the same across the UAE?<span class="faq-toggle"></span></div>
                <div class="faq-answer"><div class="faq-answer-inner">Yes. The application process follows federal immigration regulations and applies across all emirates, including Dubai.</div></div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Does applying guarantee Golden Visa approval?<span class="faq-toggle"></span></div>
                <div class="faq-answer"><div class="faq-answer-inner">No. All applications are subject to regulatory assessment and official approval. Meeting requirements allows your application to be considered.</div></div>
            </div>
        </div>
    </div>
</section>
@endsection
