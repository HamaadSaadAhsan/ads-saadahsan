@extends('layouts.landing')

@section('meta_title', 'Citizenship by Investment Dominica | Government-Approved Second Citizenship Program')
@section('meta_description', 'Learn about citizenship by investment Dominica, a government-approved program offering legal second citizenship through regulated economic contribution.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/citizenship-by-investment-dominica">
<meta property="og:url" content="https://ads.saadahsan.com/citizenship-by-investment-dominica">
<meta property="og:type" content="website">
<meta property="og:title" content="Citizenship by Investment Dominica | Government-Approved Second Citizenship Program">
<meta property="og:description" content="Learn about citizenship by investment Dominica, a government-approved program offering legal second citizenship through regulated economic contribution.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Citizenship by Investment Dominica | Government-Approved Second Citizenship Program">
<meta name="twitter:description" content="Learn about citizenship by investment Dominica, a government-approved program offering legal second citizenship through regulated economic contribution.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Citizenship by Investment Dominica | Government-Approved Second Citizenship Program","description":"Learn about citizenship by investment Dominica, a government-approved program offering legal second citizenship through regulated economic contribution.","url":"https://ads.saadahsan.com/citizenship-by-investment-dominica","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"Is citizenship by investment Dominica legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. The program operates under national legislation and is administered by authorized government bodies in Dominica."}},
    {"@@type":"Question","name":"Does approval depend on government review?","acceptedAnswer":{"@@type":"Answer","text":"Yes. All applications undergo due diligence and must receive formal government approval before citizenship is granted."}},
    {"@@type":"Question","name":"Can families apply together under the program?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Eligible applicants may include immediate family members under one structured application."}},
    {"@@type":"Question","name":"Is the passport issued after citizenship approval?","acceptedAnswer":{"@@type":"Answer","text":"Yes. A Dominican passport is issued once citizenship has been officially conferred."}}
  ]
}
</script>
@endpush

@section('content')
<style>
/* ===== DOMINICA CBI — VERDANT PATH DESIGN ===== */

/* ===== HERO — Charcoal with Fern/Leaf SVG Pattern ===== */
.cbd-hero {
    min-height: 100vh;
    padding: 140px 0 100px;
    position: relative;
    display: flex;
    align-items: center;
    background: var(--charcoal);
    overflow: hidden;
}
.cbd-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 70% 55% at 15% 55%, rgba(128,0,32,.22) 0%, transparent 70%),
        radial-gradient(ellipse 55% 45% at 80% 30%, rgba(201,169,98,.1) 0%, transparent 60%);
}
.cbd-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M50 10 C55 25 65 35 80 40 C65 42 55 52 50 70 C45 52 35 42 20 40 C35 35 45 25 50 10Z' fill='none' stroke='%23C9A962' stroke-opacity='0.035' stroke-width='0.8'/%3E%3C/svg%3E");
    pointer-events: none;
}
.cbd-hero .container { position: relative; z-index: 1; }
.cbd-hero-grid {
    display: grid;
    grid-template-columns: 1fr 460px;
    gap: 60px;
    align-items: center;
}
.cbd-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 8px 20px;
    background: rgba(201,169,98,.1);
    border: 1px solid rgba(201,169,98,.25);
    border-radius: 50px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 28px;
}
.cbd-hero-badge::before {
    content: '';
    width: 6px;
    height: 6px;
    background: var(--gold);
    border-radius: 50%;
    animation: pulse 2s infinite;
}
.cbd-hero h1 {
    color: var(--white);
    font-size: clamp(2.8rem, 5.5vw, 4.2rem);
    line-height: 1.1;
    margin-bottom: 16px;
}
.cbd-hero h1 span {
    display: block;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.cbd-hero-subtitle {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.35rem;
    font-weight: 500;
    font-style: italic;
    color: var(--gold-light);
    margin-bottom: 20px;
    opacity: .9;
}
.cbd-hero-lead {
    font-size: 1rem;
    line-height: 1.85;
    color: rgba(255,255,255,.8);
    max-width: 540px;
    margin-bottom: 0;
}
.cbd-hero-highlights {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 40px;
    padding-top: 36px;
    border-top: 1px solid rgba(201,169,98,.15);
}
.cbd-highlight {
    text-align: center;
    padding: 20px 12px;
    background: rgba(201,169,98,.06);
    border: 1px solid rgba(201,169,98,.12);
    border-radius: 16px;
    transition: all .3s ease;
}
.cbd-highlight:hover {
    background: rgba(201,169,98,.12);
    border-color: rgba(201,169,98,.25);
    transform: translateY(-3px);
}
.cbd-highlight-icon {
    width: 44px;
    height: 44px;
    margin: 0 auto 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 12px;
}
.cbd-highlight-icon svg {
    width: 22px;
    height: 22px;
    color: var(--charcoal);
}
.cbd-highlight-label {
    font-size: 12px;
    font-weight: 600;
    color: var(--white);
    letter-spacing: .5px;
    line-height: 1.4;
}

/* ===== PROCESS — Vertical Accordion ===== */
.cbd-process {
    padding: 100px 0;
    background: var(--white);
    position: relative;
}
.cbd-process .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 60px;
}
.cbd-process .section-header h2 {
    color: var(--charcoal);
    margin-bottom: 16px;
}
.cbd-accordion {
    max-width: 780px;
    margin: 0 auto;
}
.cbd-accordion-item {
    background: var(--cream);
    border: 1px solid rgba(152,131,88,.12);
    border-radius: 16px;
    margin-bottom: 16px;
    overflow: hidden;
    transition: all .3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,.03);
}
.cbd-accordion-item:hover {
    border-color: rgba(152,131,88,.3);
    box-shadow: 0 8px 24px rgba(0,0,0,.06);
}
.cbd-accordion-item.active {
    border-color: var(--burgundy);
    box-shadow: 0 8px 30px rgba(128,0,32,.1);
}
.cbd-accordion-trigger {
    padding: 24px 30px;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 20px;
    transition: all .3s ease;
}
.cbd-accordion-trigger:hover {
    background: rgba(152,131,88,.04);
}
.cbd-step-num {
    flex-shrink: 0;
    width: 52px;
    height: 52px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--white);
    border: 2px solid rgba(152,131,88,.2);
    border-radius: 50%;
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.35rem;
    font-weight: 700;
    color: var(--burgundy);
    transition: all .4s ease;
}
.cbd-accordion-item.active .cbd-step-num {
    background: var(--burgundy);
    color: var(--white);
    border-color: var(--burgundy);
    box-shadow: 0 6px 20px rgba(128,0,32,.25);
}
.cbd-step-title {
    flex: 1;
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--charcoal);
    line-height: 1.3;
}
.cbd-accordion-item.active .cbd-step-title {
    color: var(--burgundy);
}
.cbd-step-arrow {
    flex-shrink: 0;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--white);
    border-radius: 50%;
    transition: all .3s ease;
}
.cbd-step-arrow svg {
    width: 16px;
    height: 16px;
    color: var(--burgundy);
    transition: transform .3s ease;
}
.cbd-accordion-item.active .cbd-step-arrow {
    background: var(--burgundy);
}
.cbd-accordion-item.active .cbd-step-arrow svg {
    color: var(--white);
    transform: rotate(180deg);
}
.cbd-accordion-body {
    max-height: 0;
    overflow: hidden;
    transition: max-height .4s ease;
}
.cbd-accordion-body-inner {
    padding: 0 30px 24px 102px;
    color: var(--text-muted);
    font-size: 15px;
    line-height: 1.85;
}
.cbd-accordion-item.active .cbd-accordion-body {
    max-height: 200px;
}

/* ===== ABOUT + FEATURES — Cream bg, 2-col ===== */
.cbd-about {
    padding: 100px 0;
    background: var(--cream);
    position: relative;
    overflow: hidden;
}
.cbd-about::before {
    content: '';
    position: absolute;
    top: -200px;
    right: -200px;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(128,0,32,.04) 0%, transparent 70%);
    border-radius: 50%;
}
.cbd-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
}
.cbd-about-content h2 {
    color: var(--charcoal);
    margin-bottom: 24px;
}
.cbd-about-content p {
    font-size: 1rem;
    line-height: 1.85;
}
/* Features card — white bg, rounded, gradient top bar */
.cbd-features-card {
    background: var(--white);
    border-radius: 24px;
    padding: 44px 36px;
    box-shadow: 0 20px 60px rgba(0,0,0,.06);
    border: 1px solid rgba(152,131,88,.1);
    position: relative;
}
.cbd-features-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 32px;
    right: 32px;
    height: 4px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold));
    border-radius: 0 0 4px 4px;
}
.cbd-features-card h3 {
    color: var(--charcoal);
    margin-bottom: 28px;
    font-size: 1.5rem;
}
.cbd-feature-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 18px 0;
    border-bottom: 1px solid rgba(152,131,88,.1);
}
.cbd-feature-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}
.cbd-feature-icon {
    flex-shrink: 0;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--burgundy) 0%, var(--burgundy-dark) 100%);
    border-radius: 10px;
}
.cbd-feature-icon svg {
    width: 18px;
    height: 18px;
    color: var(--white);
}
.cbd-feature-text {
    font-size: 15px;
    color: var(--text-dark);
    line-height: 1.6;
    font-weight: 500;
}
.cbd-features-note {
    margin-top: 24px;
    padding-top: 20px;
    border-top: 1px solid rgba(152,131,88,.12);
    font-size: 13px;
    color: var(--text-muted);
    font-style: italic;
    line-height: 1.7;
}

/* ===== ELIGIBILITY — White bg, 2-col ===== */
.cbd-eligibility {
    padding: 100px 0;
    background: var(--white);
}
.cbd-eligibility-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}
.cbd-eligibility-content h2 {
    color: var(--charcoal);
    margin-bottom: 20px;
}
.cbd-eligibility-list {
    list-style: none;
    padding: 0;
    margin: 32px 0 0;
}
.cbd-eligibility-list li {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 16px 0;
    border-bottom: 1px solid rgba(152,131,88,.12);
}
.cbd-eligibility-list li:last-child {
    border-bottom: none;
}
.cbd-eligibility-check {
    flex-shrink: 0;
    width: 28px;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 50%;
}
.cbd-eligibility-check svg {
    width: 14px;
    height: 14px;
    color: var(--charcoal);
}
.cbd-eligibility-text {
    font-size: 15px;
    color: var(--text-dark);
    line-height: 1.65;
}
.cbd-eligibility-note {
    margin-top: 24px;
    font-size: 14px;
    color: var(--text-muted);
    font-style: italic;
}
/* CTA Card inside eligibility */
.cbd-cta-card {
    background: linear-gradient(135deg, var(--charcoal) 0%, var(--charcoal-light) 100%);
    border-radius: 24px;
    padding: 52px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.cbd-cta-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold), var(--burgundy));
}
.cbd-cta-card::after {
    content: '';
    position: absolute;
    bottom: -80px;
    right: -80px;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(201,169,98,.08) 0%, transparent 70%);
    border-radius: 50%;
}
.cbd-cta-card h3 {
    color: var(--white);
    font-size: 1.75rem;
    margin-bottom: 16px;
}
.cbd-cta-card p {
    color: rgba(255,255,255,.7);
    font-size: 15px;
    max-width: 320px;
    margin: 0 auto 32px;
}
.cbd-cta-card .btn {
    position: relative;
    z-index: 1;
}

/* ===== FAQ — Cream bg, white card accordion ===== */
.cbd-faq {
    padding: 100px 0;
    background: var(--cream);
}
.cbd-faq .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 60px;
}
.cbd-faq .section-header h2 {
    color: var(--charcoal);
    margin-bottom: 16px;
}
.cbd-faq-list {
    max-width: 800px;
    margin: 0 auto;
}
.cbd-faq-item {
    background: var(--white);
    border-radius: 16px;
    margin-bottom: 16px;
    overflow: hidden;
    border: 1px solid rgba(152,131,88,.12);
    transition: all .3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,.03);
}
.cbd-faq-item:hover {
    border-color: rgba(152,131,88,.3);
    box-shadow: 0 8px 24px rgba(0,0,0,.06);
}
.cbd-faq-question {
    padding: 24px 30px;
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--charcoal);
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: color .3s ease;
}
.cbd-faq-question:hover {
    color: var(--burgundy);
}
.cbd-faq-toggle {
    width: 36px;
    height: 36px;
    flex-shrink: 0;
    position: relative;
    background: var(--cream);
    border-radius: 50%;
    transition: all .3s ease;
}
.cbd-faq-toggle::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 14px;
    height: 2px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
}
.cbd-faq-toggle::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 2px;
    height: 14px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
    transition: all .3s ease;
}
.cbd-faq-item.active .cbd-faq-toggle {
    background: var(--burgundy);
    transform: rotate(45deg);
}
.cbd-faq-item.active .cbd-faq-toggle::before,
.cbd-faq-item.active .cbd-faq-toggle::after {
    background: var(--white);
}
.cbd-faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height .4s ease;
}
.cbd-faq-answer-inner {
    padding: 0 30px 24px;
    color: var(--text-muted);
    font-size: 15px;
    line-height: 1.85;
}
.cbd-faq-item.active .cbd-faq-answer {
    max-height: 300px;
}

/* ===== FINAL CTA — Burgundy bg ===== */
.cbd-final-cta {
    padding: 80px 0;
    background: var(--burgundy);
    position: relative;
    overflow: hidden;
    text-align: center;
}
.cbd-final-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M50 10 C55 25 65 35 80 40 C65 42 55 52 50 70 C45 52 35 42 20 40 C35 35 45 25 50 10Z' fill='none' stroke='%23ffffff' stroke-opacity='0.04' stroke-width='0.8'/%3E%3C/svg%3E");
    pointer-events: none;
}
.cbd-final-cta .container {
    position: relative;
    z-index: 1;
}
.cbd-final-cta h2 {
    color: var(--white);
    margin-bottom: 16px;
}
.cbd-final-cta p {
    color: rgba(255,255,255,.8);
    font-size: 1.05rem;
    max-width: 560px;
    margin: 0 auto 32px;
}

/* ===== RESPONSIVE ===== */
@@media (max-width: 1024px) {
    .cbd-hero-grid {
        grid-template-columns: 1fr;
        gap: 48px;
        text-align: center;
    }
    .cbd-hero-lead { margin: 0 auto; }
    .cbd-hero-highlights { justify-content: center; }
    .hero-form { max-width: 520px; margin: 0 auto; }
    .cbd-about-grid,
    .cbd-eligibility-grid { grid-template-columns: 1fr; gap: 48px; }
}
@@media (max-width: 768px) {
    .cbd-hero { min-height: auto; padding: 110px 0 60px; }
    .cbd-process,
    .cbd-about,
    .cbd-eligibility,
    .cbd-faq,
    .cbd-final-cta { padding: 60px 0; }
    .cbd-hero-highlights { grid-template-columns: 1fr; gap: 12px; }
    .cbd-highlight { flex-direction: row; display: flex; align-items: center; gap: 14px; text-align: left; padding: 14px 18px; }
    .cbd-highlight-icon { margin: 0; }
    .hero-form { padding: 28px 20px; }
    .form-row { grid-template-columns: 1fr; }
    .cbd-features-card { padding: 32px 24px; }
    .cbd-cta-card { padding: 40px 24px; }
    .cbd-accordion-body-inner { padding-left: 30px; }
}
@@media (max-width: 480px) {
    .cbd-accordion-trigger { padding: 20px 20px; gap: 14px; }
    .cbd-step-num { width: 42px; height: 42px; font-size: 1.1rem; }
    .cbd-accordion-body-inner { padding: 0 20px 20px 76px; }
}
</style>

<!-- ===== HERO ===== -->
<section class="cbd-hero">
    <div class="container">
        <div class="cbd-hero-grid">
            <div class="cbd-hero-content">
                <div class="cbd-hero-badge">Government-Approved Program</div>
                <h1>Citizenship by Investment<span>Dominica Program Overview</span></h1>
                <p class="cbd-hero-subtitle">A Government-Regulated Pathway to Second Citizenship in Dominica</p>
                <p class="cbd-hero-lead">Citizenship by investment Dominica refers to the official program established by the Government of Dominica that allows eligible foreign applicants to acquire Dominican citizenship through a qualifying economic contribution. The program operates under national legislation and is administered by authorized government authorities.</p>
                <p class="cbd-hero-lead" style="margin-top:-8px">Citizenship is granted only after due diligence checks, background verification, and formal government approval.</p>
                <div class="cbd-hero-highlights">
                    <div class="cbd-highlight">
                        <div class="cbd-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                        </div>
                        <span class="cbd-highlight-label">Government-Established Program</span>
                    </div>
                    <div class="cbd-highlight">
                        <div class="cbd-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        </div>
                        <span class="cbd-highlight-label">Regulated Due Diligence</span>
                    </div>
                    <div class="cbd-highlight">
                        <div class="cbd-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                        </div>
                        <span class="cbd-highlight-label">Family Inclusion</span>
                    </div>
                </div>
            </div>
            <x-landing-form
                source="citizenship-by-investment-dominica"
                consultancy="dominica-citizenship-by-investment"
                title="Check Eligibility for the Dominica Citizenship Program"
                subtitle="Share your details and our experts will assess your eligibility."
            >Check Eligibility</x-landing-form>
        </div>
    </div>
</section>

<!-- ===== PROCESS — Vertical Accordion ===== -->
<section class="cbd-process">
    <div class="container">
        <div class="section-header">
            <h2>How Citizenship by Investment in Dominica Works</h2>
            <p>Each application is reviewed individually in accordance with national legislation.</p>
        </div>
        <div class="cbd-accordion">
            <div class="cbd-accordion-item active">
                <div class="cbd-accordion-trigger">
                    <span class="cbd-step-num">01</span>
                    <span class="cbd-step-title">Initial Eligibility Assessment</span>
                    <span class="cbd-step-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></span>
                </div>
                <div class="cbd-accordion-body">
                    <div class="cbd-accordion-body-inner">A preliminary review of the applicant's background and financial standing to determine eligibility for the Dominica citizenship by investment program.</div>
                </div>
            </div>
            <div class="cbd-accordion-item">
                <div class="cbd-accordion-trigger">
                    <span class="cbd-step-num">02</span>
                    <span class="cbd-step-title">Preparation and Submission of Required Documentation</span>
                    <span class="cbd-step-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></span>
                </div>
                <div class="cbd-accordion-body">
                    <div class="cbd-accordion-body-inner">Compilation and formal submission of all required application materials, personal documents, and supporting financial records as prescribed by Dominican authorities.</div>
                </div>
            </div>
            <div class="cbd-accordion-item">
                <div class="cbd-accordion-trigger">
                    <span class="cbd-step-num">03</span>
                    <span class="cbd-step-title">Government Due Diligence and Compliance Screening</span>
                    <span class="cbd-step-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></span>
                </div>
                <div class="cbd-accordion-body">
                    <div class="cbd-accordion-body-inner">A thorough government-administered due diligence process including background verification, compliance screening, and security checks conducted by authorized bodies.</div>
                </div>
            </div>
            <div class="cbd-accordion-item">
                <div class="cbd-accordion-trigger">
                    <span class="cbd-step-num">04</span>
                    <span class="cbd-step-title">Approval in Principle by Dominican Authorities</span>
                    <span class="cbd-step-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></span>
                </div>
                <div class="cbd-accordion-body">
                    <div class="cbd-accordion-body-inner">Upon successful completion of due diligence, the applicant receives formal approval in principle from the relevant Dominican government authority.</div>
                </div>
            </div>
            <div class="cbd-accordion-item">
                <div class="cbd-accordion-trigger">
                    <span class="cbd-step-num">05</span>
                    <span class="cbd-step-title">Completion of the Qualifying Economic Contribution</span>
                    <span class="cbd-step-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></span>
                </div>
                <div class="cbd-accordion-body">
                    <div class="cbd-accordion-body-inner">The approved applicant completes the required qualifying economic contribution as defined by the program's legislative framework.</div>
                </div>
            </div>
            <div class="cbd-accordion-item">
                <div class="cbd-accordion-trigger">
                    <span class="cbd-step-num">06</span>
                    <span class="cbd-step-title">Issuance of Citizenship Certificate and Dominican Passport</span>
                    <span class="cbd-step-arrow"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></span>
                </div>
                <div class="cbd-accordion-body">
                    <div class="cbd-accordion-body-inner">Following completion of all requirements, the citizenship certificate is issued and the applicant receives an official Dominican passport.</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== ABOUT + FEATURES ===== -->
<section class="cbd-about">
    <div class="container">
        <div class="cbd-about-grid">
            <div class="cbd-about-content">
                <h2>What Is the Dominica Citizenship by Investment Program?</h2>
                <p>The Dominica citizenship by investment program enables foreign nationals to obtain Dominican citizenship by making an approved contribution under a structured legal framework. The program is enacted under the laws of Dominica and is designed to support national development through regulated investment.</p>
                <p>Applicants must satisfy eligibility criteria and pass comprehensive due diligence procedures before citizenship status is conferred.</p>
            </div>
            <div class="cbd-features-card">
                <h3>Key Features of Citizenship by Investment Dominica</h3>
                <div class="cbd-feature-item">
                    <div class="cbd-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                    </div>
                    <span class="cbd-feature-text">Government-established second citizenship program</span>
                </div>
                <div class="cbd-feature-item">
                    <div class="cbd-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <span class="cbd-feature-text">Regulated due diligence and compliance procedures</span>
                </div>
                <div class="cbd-feature-item">
                    <div class="cbd-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                    </div>
                    <span class="cbd-feature-text">Citizenship granted under Dominican national law</span>
                </div>
                <div class="cbd-feature-item">
                    <div class="cbd-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <span class="cbd-feature-text">Eligibility to include immediate family members</span>
                </div>
                <div class="cbd-feature-item">
                    <div class="cbd-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </div>
                    <span class="cbd-feature-text">Official passport issued upon approval</span>
                </div>
                <p class="cbd-features-note">All approvals are subject to final review and decision by the Government of Dominica.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== ELIGIBILITY + CTA CARD ===== -->
<section class="cbd-eligibility">
    <div class="container">
        <div class="cbd-eligibility-grid">
            <div class="cbd-eligibility-content">
                <h2>Who Can Apply for Citizenship by Investment Dominica?</h2>
                <p>Eligibility is determined under the legal framework governing the program. Applicants are generally required to:</p>
                <ul class="cbd-eligibility-list">
                    <li>
                        <span class="cbd-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="cbd-eligibility-text">Meet financial qualification standards</span>
                    </li>
                    <li>
                        <span class="cbd-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="cbd-eligibility-text">Provide verified source of funds documentation</span>
                    </li>
                    <li>
                        <span class="cbd-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="cbd-eligibility-text">Pass strict background and due diligence checks</span>
                    </li>
                    <li>
                        <span class="cbd-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="cbd-eligibility-text">Comply with official application procedures</span>
                    </li>
                </ul>
                <p class="cbd-eligibility-note">Final approval is granted solely by the relevant government authority.</p>
            </div>
            <div class="cbd-cta-card">
                <h3>Check Eligibility for the Dominica Citizenship Program</h3>
                <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="cbd-faq">
    <div class="container">
        <div class="section-header">
            <h2>Citizenship by Investment Dominica FAQs</h2>
        </div>
        <div class="cbd-faq-list">
            <div class="cbd-faq-item faq-item active">
                <div class="cbd-faq-question faq-question">Is citizenship by investment Dominica legal?<span class="cbd-faq-toggle"></span></div>
                <div class="cbd-faq-answer"><div class="cbd-faq-answer-inner">Yes. The program operates under national legislation and is administered by authorized government bodies in Dominica.</div></div>
            </div>
            <div class="cbd-faq-item faq-item">
                <div class="cbd-faq-question faq-question">Does approval depend on government review?<span class="cbd-faq-toggle"></span></div>
                <div class="cbd-faq-answer"><div class="cbd-faq-answer-inner">Yes. All applications undergo due diligence and must receive formal government approval before citizenship is granted.</div></div>
            </div>
            <div class="cbd-faq-item faq-item">
                <div class="cbd-faq-question faq-question">Can families apply together under the program?<span class="cbd-faq-toggle"></span></div>
                <div class="cbd-faq-answer"><div class="cbd-faq-answer-inner">Yes. Eligible applicants may include immediate family members under one structured application.</div></div>
            </div>
            <div class="cbd-faq-item faq-item">
                <div class="cbd-faq-question faq-question">Is the passport issued after citizenship approval?<span class="cbd-faq-toggle"></span></div>
                <div class="cbd-faq-answer"><div class="cbd-faq-answer-inner">Yes. A Dominican passport is issued once citizenship has been officially conferred.</div></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="cbd-final-cta">
    <div class="container">
        <h2>Check Eligibility for the Dominica Citizenship Program</h2>
        <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
    </div>
</section>

<!-- ===== WhatsApp Float ===== -->
<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
@endsection
