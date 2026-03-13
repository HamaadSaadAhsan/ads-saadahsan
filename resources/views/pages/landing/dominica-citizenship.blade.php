@extends('layouts.landing')

@section('meta_title', 'Dominica Citizenship | Legal Pathways to Obtain Nationality')
@section('meta_description', 'Learn about Dominica citizenship, including legal pathways to acquire nationality under the laws of the Commonwealth of Dominica.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/dominica-citizenship">
<meta property="og:url" content="https://ads.saadahsan.com/dominica-citizenship">
<meta property="og:type" content="website">
<meta property="og:title" content="Dominica Citizenship | Legal Pathways to Obtain Nationality">
<meta property="og:description" content="Learn about Dominica citizenship, including legal pathways to acquire nationality under the laws of the Commonwealth of Dominica.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Dominica Citizenship | Legal Pathways to Obtain Nationality">
<meta name="twitter:description" content="Learn about Dominica citizenship, including legal pathways to acquire nationality under the laws of the Commonwealth of Dominica.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Dominica Citizenship | Legal Pathways to Obtain Nationality","description":"Learn about Dominica citizenship, including legal pathways to acquire nationality under the laws of the Commonwealth of Dominica.","url":"https://ads.saadahsan.com/dominica-citizenship","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"Is Dominica citizenship legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Citizenship is granted under the national laws and constitutional framework of Dominica."}},
    {"@@type":"Question","name":"Can citizenship be acquired by different legal pathways?","acceptedAnswer":{"@@type":"Answer","text":"Yes. The country recognizes multiple lawful pathways depending on eligibility and circumstances."}},
    {"@@type":"Question","name":"Does citizenship automatically result in a passport?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Once citizenship is officially granted, individuals may apply for a Dominican passport."}},
    {"@@type":"Question","name":"Is government approval required?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Citizenship is conferred only after formal approval under the applicable legal framework."}}
  ]
}
</script>
@endpush

@section('content')
<style>
/* ===== DOMINICA CITIZENSHIP — EMERALD REPUBLIC DESIGN ===== */

/* Diamond SVG pattern for hero & final CTA */
.dmc-hero::after,
.dmc-final-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 5L55 30L30 55L5 30Z' fill='none' stroke='%23C9A962' stroke-opacity='0.05'/%3E%3Cpath d='M30 15L45 30L30 45L15 30Z' fill='none' stroke='%23C9A962' stroke-opacity='0.03'/%3E%3C/svg%3E");
    pointer-events: none;
}

/* ===== HERO — Charcoal with diamond/gem pattern ===== */
.dmc-hero {
    min-height: 100vh;
    padding: 140px 0 100px;
    position: relative;
    display: flex;
    align-items: center;
    background: var(--charcoal);
    overflow: hidden;
}
.dmc-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 70% 50% at 15% 40%, rgba(39,103,73,.2) 0%, transparent 70%),
        radial-gradient(ellipse 50% 40% at 85% 60%, rgba(201,169,98,.08) 0%, transparent 60%),
        radial-gradient(ellipse 40% 30% at 50% 20%, rgba(128,0,32,.12) 0%, transparent 50%);
}
.dmc-hero .container {
    position: relative;
    z-index: 1;
}
.dmc-hero-grid {
    display: grid;
    grid-template-columns: 1fr 460px;
    gap: 60px;
    align-items: center;
}
.dmc-hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 8px 20px;
    background: rgba(39,103,73,.15);
    border: 1px solid rgba(39,103,73,.3);
    border-radius: 50px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: #5ab88a;
    margin-bottom: 28px;
}
.dmc-hero-badge::before {
    content: '';
    width: 6px;
    height: 6px;
    background: #5ab88a;
    border-radius: 50%;
    animation: pulse 2s infinite;
}
.dmc-hero h1 {
    color: var(--white);
    font-size: clamp(2.8rem, 5.5vw, 4.2rem);
    line-height: 1.1;
    margin-bottom: 16px;
}
.dmc-hero h1 span {
    display: block;
    background: linear-gradient(135deg, #5ab88a 0%, var(--gold-light) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.dmc-hero-subtitle {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.35rem;
    font-weight: 500;
    font-style: italic;
    color: var(--gold-light);
    margin-bottom: 20px;
    opacity: .9;
}
.dmc-hero-lead {
    font-size: 1rem;
    line-height: 1.85;
    color: rgba(255,255,255,.8);
    max-width: 540px;
    margin-bottom: 0;
}
.dmc-hero-highlights {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 40px;
    padding-top: 36px;
    border-top: 1px solid rgba(39,103,73,.25);
}
.dmc-highlight {
    text-align: center;
    padding: 20px 12px;
    background: rgba(39,103,73,.08);
    border: 1px solid rgba(39,103,73,.15);
    border-radius: 16px;
    transition: color .3s ease, background .3s ease, border-color .3s ease, transform .3s ease, box-shadow .3s ease, opacity .3s ease;
}
.dmc-highlight:hover {
    background: rgba(39,103,73,.16);
    border-color: rgba(39,103,73,.3);
    transform: translateY(-3px);
}
.dmc-highlight-icon {
    width: 44px;
    height: 44px;
    margin: 0 auto 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #5ab88a 0%, #3d8b63 100%);
    border-radius: 12px;
}
.dmc-highlight-icon svg {
    width: 22px;
    height: 22px;
    color: var(--white);
}
.dmc-highlight-label {
    font-size: 12px;
    font-weight: 600;
    color: var(--white);
    letter-spacing: .5px;
    line-height: 1.4;
}

/* ===== PROCESS — Layered Card Stack ===== */
.dmc-process {
    padding: 100px 0;
    background: var(--white);
    position: relative;
}
.dmc-process .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 70px;
}
.dmc-process .section-header h2 {
    color: var(--charcoal);
    margin-bottom: 16px;
}
.dmc-card-stack {
    max-width: 720px;
    margin: 0 auto;
    position: relative;
    padding-bottom: 20px;
}
.dmc-card-item {
    background: var(--white);
    border: 1px solid rgba(152,131,88,.12);
    border-radius: 20px;
    padding: 36px 40px;
    margin-bottom: 20px;
    position: relative;
    box-shadow: 0 4px 20px rgba(0,0,0,.04);
    transition: color .4s ease, background .4s ease, border-color .4s ease, transform .4s ease, box-shadow .4s ease, opacity .4s ease;
    display: flex;
    align-items: flex-start;
    gap: 28px;
}
.dmc-card-item:hover {
    transform: translateX(8px);
    box-shadow: 0 12px 40px rgba(0,0,0,.08);
    border-color: rgba(39,103,73,.3);
}
.dmc-card-item::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(180deg, #5ab88a, var(--gold));
    border-radius: 20px 0 0 20px;
    opacity: 0;
    transition: opacity .4s ease;
}
.dmc-card-item:hover::before {
    opacity: 1;
}
.dmc-card-number {
    flex-shrink: 0;
    width: 56px;
    height: 56px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #5ab88a 0%, #3d8b63 100%);
    border-radius: 16px;
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--white);
}
.dmc-card-content h3 {
    font-size: 1.2rem;
    color: var(--charcoal);
    margin-bottom: 6px;
}
.dmc-card-content p {
    font-size: 14px;
    color: var(--text-muted);
    line-height: 1.7;
    margin: 0;
}
.dmc-card-note {
    text-align: center;
    font-size: 15px;
    color: var(--text-muted);
    font-style: italic;
    margin-top: 12px;
}

/* ===== ABOUT + FEATURES — Cream bg, 2-col ===== */
.dmc-about {
    padding: 100px 0;
    background: var(--cream);
    position: relative;
    overflow: hidden;
}
.dmc-about::before {
    content: '';
    position: absolute;
    top: -200px;
    right: -200px;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(39,103,73,.05) 0%, transparent 70%);
    border-radius: 50%;
}
.dmc-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
}
.dmc-about-content h2 {
    color: var(--charcoal);
    margin-bottom: 24px;
}
.dmc-about-content p {
    font-size: 1rem;
    line-height: 1.85;
}
/* Features card — white bg, rounded, gradient top bar */
.dmc-features-card {
    background: var(--white);
    border-radius: 24px;
    padding: 44px 36px;
    box-shadow: 0 20px 60px rgba(0,0,0,.06);
    border: 1px solid rgba(152,131,88,.1);
    position: relative;
}
.dmc-features-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 32px;
    right: 32px;
    height: 4px;
    background: linear-gradient(90deg, #5ab88a, var(--gold));
    border-radius: 0 0 4px 4px;
}
.dmc-features-card h3 {
    color: var(--charcoal);
    margin-bottom: 28px;
    font-size: 1.5rem;
}
.dmc-feature-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 18px 0;
    border-bottom: 1px solid rgba(152,131,88,.1);
}
.dmc-feature-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}
.dmc-feature-icon {
    flex-shrink: 0;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, #5ab88a 0%, #3d8b63 100%);
    border-radius: 10px;
}
.dmc-feature-icon svg {
    width: 18px;
    height: 18px;
    color: var(--white);
}
.dmc-feature-text {
    font-size: 15px;
    color: var(--text-dark);
    line-height: 1.6;
    font-weight: 500;
}
.dmc-feature-note {
    font-size: 14px;
    color: var(--text-muted);
    font-style: italic;
    margin-top: 24px;
    padding-top: 20px;
    border-top: 1px solid rgba(152,131,88,.1);
}

/* ===== PASSPORT + ELIGIBILITY — White bg, 2-col ===== */
.dmc-passport {
    padding: 100px 0;
    background: var(--white);
}
.dmc-passport-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
    margin-bottom: 80px;
}
.dmc-passport-content h2 {
    color: var(--charcoal);
    margin-bottom: 20px;
}
.dmc-passport-content p {
    font-size: 1rem;
    line-height: 1.85;
}
.dmc-eligibility-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}
.dmc-eligibility-content h2 {
    color: var(--charcoal);
    margin-bottom: 20px;
}
.dmc-eligibility-content p {
    font-size: 1rem;
    line-height: 1.85;
}
/* CTA card */
.dmc-cta-card {
    background: linear-gradient(135deg, var(--charcoal) 0%, var(--charcoal-light) 100%);
    border-radius: 24px;
    padding: 52px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.dmc-cta-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, #5ab88a, var(--gold), #5ab88a);
}
.dmc-cta-card::after {
    content: '';
    position: absolute;
    bottom: -80px;
    right: -80px;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(39,103,73,.1) 0%, transparent 70%);
    border-radius: 50%;
}
.dmc-cta-card h3 {
    color: var(--white);
    font-size: 1.75rem;
    margin-bottom: 24px;
}
.dmc-cta-card .btn {
    position: relative;
    z-index: 1;
}

/* ===== FAQ — Cream bg, accordion ===== */
.dmc-faq {
    padding: 100px 0;
    background: var(--cream);
}
.dmc-faq .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 60px;
}
.dmc-faq .section-header h2 {
    color: var(--charcoal);
    margin-bottom: 16px;
}
.dmc-faq-list {
    max-width: 800px;
    margin: 0 auto;
}
.dmc-faq-item {
    background: var(--white);
    border-radius: 16px;
    margin-bottom: 16px;
    overflow: hidden;
    border: 1px solid rgba(152,131,88,.12);
    transition: color .3s ease, background .3s ease, border-color .3s ease, transform .3s ease, box-shadow .3s ease, opacity .3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,.03);
}
.dmc-faq-item:hover {
    border-color: rgba(152,131,88,.3);
    box-shadow: 0 8px 24px rgba(0,0,0,.06);
}
.dmc-faq-question {
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
.dmc-faq-question:hover {
    color: var(--burgundy);
}
.dmc-faq-toggle {
    width: 36px;
    height: 36px;
    flex-shrink: 0;
    position: relative;
    background: var(--cream);
    border-radius: 50%;
    transition: color .3s ease, background .3s ease, border-color .3s ease, transform .3s ease, box-shadow .3s ease, opacity .3s ease;
}
.dmc-faq-toggle::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 14px;
    height: 2px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
}
.dmc-faq-toggle::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 2px;
    height: 14px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
    transition: color .3s ease, background .3s ease, border-color .3s ease, transform .3s ease, box-shadow .3s ease, opacity .3s ease;
}
.dmc-faq-item.active .dmc-faq-toggle {
    background: var(--burgundy);
    transform: rotate(45deg);
}
.dmc-faq-item.active .dmc-faq-toggle::before,
.dmc-faq-item.active .dmc-faq-toggle::after {
    background: var(--white);
}
.dmc-faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height .4s ease;
}
.dmc-faq-answer-inner {
    padding: 0 30px 24px;
    color: var(--text-muted);
    font-size: 15px;
    line-height: 1.85;
}
.dmc-faq-item.active .dmc-faq-answer {
    max-height: 300px;
}

/* ===== FINAL CTA — Burgundy bg with diamond pattern ===== */
.dmc-final-cta {
    padding: 80px 0;
    background: var(--burgundy);
    position: relative;
    overflow: hidden;
    text-align: center;
}
.dmc-final-cta::before {
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 5L55 30L30 55L5 30Z' fill='none' stroke='%23ffffff' stroke-opacity='0.05'/%3E%3Cpath d='M30 15L45 30L30 45L15 30Z' fill='none' stroke='%23ffffff' stroke-opacity='0.03'/%3E%3C/svg%3E") !important;
}
.dmc-final-cta .container {
    position: relative;
    z-index: 1;
}
.dmc-final-cta h2 {
    color: var(--white);
    margin-bottom: 16px;
}
.dmc-final-cta p {
    color: rgba(255,255,255,.8);
    font-size: 1.05rem;
    max-width: 560px;
    margin: 0 auto 32px;
}

/* ===== RESPONSIVE ===== */
@@media (max-width: 1024px) {
    .dmc-hero-grid {
        grid-template-columns: 1fr;
        gap: 48px;
        text-align: center;
    }
    .dmc-hero-lead { margin: 0 auto; }
    .dmc-hero-highlights { justify-content: center; }
    .hero-form { max-width: 520px; margin: 0 auto; }
    .dmc-about-grid,
    .dmc-passport-grid,
    .dmc-eligibility-grid { grid-template-columns: 1fr; gap: 48px; }
}
@@media (max-width: 768px) {
    .dmc-hero { min-height: auto; padding: 110px 0 60px; }
    .dmc-process,
    .dmc-about,
    .dmc-passport,
    .dmc-faq,
    .dmc-final-cta { padding: 60px 0; }
    .dmc-hero-highlights { grid-template-columns: 1fr; gap: 12px; }
    .dmc-highlight { flex-direction: row; display: flex; align-items: center; gap: 14px; text-align: left; padding: 14px 18px; }
    .dmc-highlight-icon { margin: 0; }
    .hero-form { padding: 28px 20px; }
    .form-row { grid-template-columns: 1fr; }
    .dmc-card-item { padding: 28px 24px; gap: 20px; }
    .dmc-features-card { padding: 32px 24px; }
    .dmc-cta-card { padding: 40px 24px; }
}
@@media (max-width: 480px) {
    .dmc-card-item { flex-direction: column; gap: 12px; }
    .dmc-card-number { width: 44px; height: 44px; font-size: 1.2rem; border-radius: 12px; }
}
</style>

<!-- ===== HERO ===== -->
<section class="dmc-hero">
    <div class="container">
        <div class="dmc-hero-grid">
            <div class="dmc-hero-content">
                <div class="dmc-hero-badge">Commonwealth of Dominica</div>
                <h1>Dominica Citizenship and<span>Legal Nationality Pathways</span></h1>
                <p class="dmc-hero-subtitle">Understanding Citizenship Laws of the Commonwealth of Dominica</p>
                <p class="dmc-hero-lead">Dominica citizenship refers to the legal nationality granted by the Commonwealth of Dominica under its constitutional and legislative framework. Citizenship provides individuals with recognized national status, legal rights, and responsibilities defined by Dominican law.</p>
                <p class="dmc-hero-lead" style="margin-top:-8px">Citizenship is conferred only through lawful procedures established by the government of Dominica.</p>
                <div class="dmc-hero-highlights">
                    <div class="dmc-highlight">
                        <div class="dmc-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                        </div>
                        <span class="dmc-highlight-label">Constitutional Framework</span>
                    </div>
                    <div class="dmc-highlight">
                        <div class="dmc-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        </div>
                        <span class="dmc-highlight-label">Government Approved</span>
                    </div>
                    <div class="dmc-highlight">
                        <div class="dmc-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                        </div>
                        <span class="dmc-highlight-label">Passport Eligibility</span>
                    </div>
                </div>
            </div>
            <x-landing-form
                source="dominica-citizenship"
                consultancy="dominica-citizenship-by-investment"
                title="Check Eligibility for Legal Citizenship Pathways in Dominica"
                subtitle="Share your details and our experts will assess your eligibility."
            >Check Eligibility</x-landing-form>
        </div>
    </div>
</section>

<!-- ===== PROCESS — Layered Card Stack ===== -->
<section class="dmc-process">
    <div class="container">
        <div class="section-header">
            <h2>How Can Dominica Citizenship Be Acquired?</h2>
            <p>Dominica citizenship may be acquired through lawful pathways defined by national legislation. These typically include:</p>
        </div>
        <div class="dmc-card-stack">
            <div class="dmc-card-item">
                <div class="dmc-card-number">01</div>
                <div class="dmc-card-content">
                    <h3>Citizenship by Birth</h3>
                </div>
            </div>
            <div class="dmc-card-item">
                <div class="dmc-card-number">02</div>
                <div class="dmc-card-content">
                    <h3>Citizenship by Descent</h3>
                </div>
            </div>
            <div class="dmc-card-item">
                <div class="dmc-card-number">03</div>
                <div class="dmc-card-content">
                    <h3>Citizenship by Registration or Naturalization</h3>
                </div>
            </div>
            <div class="dmc-card-item">
                <div class="dmc-card-number">04</div>
                <div class="dmc-card-content">
                    <h3>Citizenship Through Legally Established Government Programs</h3>
                </div>
            </div>
        </div>
        <p class="dmc-card-note">Each pathway is subject to eligibility requirements and government approval.</p>
    </div>
</section>

<!-- ===== ABOUT + FEATURES ===== -->
<section class="dmc-about">
    <div class="container">
        <div class="dmc-about-grid">
            <div class="dmc-about-content">
                <h2>What Is Dominica Citizenship?</h2>
                <p>Dominica citizenship represents the full legal nationality of the Commonwealth of Dominica. Citizens are recognized under national law and may be issued an official Dominican passport.</p>
                <p>Citizenship status is governed by the country's constitutional provisions and nationality legislation.</p>
            </div>
            <div class="dmc-features-card">
                <h3>Rights and Responsibilities of Dominican Citizens</h3>
                <p style="font-size:15px;color:var(--text-muted);line-height:1.65;margin-bottom:20px">Dominican citizens are entitled to rights provided under national law, including:</p>
                <div class="dmc-feature-item">
                    <div class="dmc-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </div>
                    <span class="dmc-feature-text">Legal recognition as a national of Dominica</span>
                </div>
                <div class="dmc-feature-item">
                    <div class="dmc-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                    </div>
                    <span class="dmc-feature-text">Eligibility for a Dominican passport</span>
                </div>
                <div class="dmc-feature-item">
                    <div class="dmc-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <span class="dmc-feature-text">Rights and protections defined by the Constitution</span>
                </div>
                <div class="dmc-feature-item">
                    <div class="dmc-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                    </div>
                    <span class="dmc-feature-text">Responsibilities under Dominican legal and civic obligations</span>
                </div>
                <p class="dmc-feature-note">All rights and duties are governed by domestic legislation.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== PASSPORT + ELIGIBILITY ===== -->
<section class="dmc-passport">
    <div class="container">
        <div class="dmc-passport-grid">
            <div class="dmc-passport-content">
                <h2>Dominica Passport and Citizenship Status</h2>
                <p>A Dominican passport is issued to individuals who hold recognized citizenship of Dominica. The passport serves as an official travel document and proof of nationality.</p>
                <p>Passport issuance follows formal approval of citizenship status by relevant authorities.</p>
            </div>
            <div class="dmc-passport-content">
                <h2>Who Is Eligible for Dominica Citizenship?</h2>
                <p>Eligibility depends on the specific legal pathway under which citizenship is sought. Applicants must comply with the laws governing nationality, submit required documentation, and satisfy any applicable due diligence or verification procedures.</p>
                <p>Final approval is granted only by authorized government bodies.</p>
            </div>
        </div>
        <div class="dmc-eligibility-grid">
            <div></div>
            <div class="dmc-cta-card">
                <h3>Check Eligibility for Legal Citizenship Pathways in Dominica</h3>
                <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="dmc-faq">
    <div class="container">
        <div class="section-header">
            <h2>Dominica Citizenship FAQs</h2>
        </div>
        <div class="dmc-faq-list">
            <div class="dmc-faq-item faq-item active">
                <div class="dmc-faq-question faq-question">Is Dominica citizenship legal?<span class="dmc-faq-toggle"></span></div>
                <div class="dmc-faq-answer"><div class="dmc-faq-answer-inner">Yes. Citizenship is granted under the national laws and constitutional framework of Dominica.</div></div>
            </div>
            <div class="dmc-faq-item faq-item">
                <div class="dmc-faq-question faq-question">Can citizenship be acquired by different legal pathways?<span class="dmc-faq-toggle"></span></div>
                <div class="dmc-faq-answer"><div class="dmc-faq-answer-inner">Yes. The country recognizes multiple lawful pathways depending on eligibility and circumstances.</div></div>
            </div>
            <div class="dmc-faq-item faq-item">
                <div class="dmc-faq-question faq-question">Does citizenship automatically result in a passport?<span class="dmc-faq-toggle"></span></div>
                <div class="dmc-faq-answer"><div class="dmc-faq-answer-inner">Yes. Once citizenship is officially granted, individuals may apply for a Dominican passport.</div></div>
            </div>
            <div class="dmc-faq-item faq-item">
                <div class="dmc-faq-question faq-question">Is government approval required?<span class="dmc-faq-toggle"></span></div>
                <div class="dmc-faq-answer"><div class="dmc-faq-answer-inner">Yes. Citizenship is conferred only after formal approval under the applicable legal framework.</div></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="dmc-final-cta">
    <div class="container">
        <h2>Check Eligibility for Legal Citizenship Pathways in Dominica</h2>
        <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
    </div>
</section>

<!-- ===== WhatsApp Float ===== -->
<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
@endsection
