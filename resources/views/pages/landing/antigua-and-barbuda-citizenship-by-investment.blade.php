@extends('layouts.landing')

@section('meta_title', 'Antigua and Barbuda Citizenship by Investment | Government-Approved Program')
@section('meta_description', 'Learn about the Antigua and Barbuda citizenship by investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/antigua-and-barbuda-citizenship-by-investment">
<meta property="og:url" content="https://ads.saadahsan.com/antigua-and-barbuda-citizenship-by-investment">
<meta property="og:type" content="website">
<meta property="og:title" content="Antigua and Barbuda Citizenship by Investment | Government-Approved Program">
<meta property="og:description" content="Learn about the Antigua and Barbuda citizenship by investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Antigua and Barbuda Citizenship by Investment | Government-Approved Program">
<meta name="twitter:description" content="Learn about the Antigua and Barbuda citizenship by investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Antigua and Barbuda Citizenship by Investment | Government-Approved Program","description":"Learn about the Antigua and Barbuda citizenship by investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.","url":"https://ads.saadahsan.com/antigua-and-barbuda-citizenship-by-investment","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"Is Antigua and Barbuda citizenship by investment legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. The program operates under national legislation and is administered by authorized government bodies."}},
    {"@@type":"Question","name":"Does approval depend on government review?","acceptedAnswer":{"@@type":"Answer","text":"Yes. All applications undergo due diligence and must receive formal government approval before citizenship is granted."}},
    {"@@type":"Question","name":"Can families apply together under the program?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Eligible applicants may include immediate family members under one structured application."}},
    {"@@type":"Question","name":"Is the passport issued after citizenship approval?","acceptedAnswer":{"@@type":"Answer","text":"Yes. A passport is issued once citizenship has been officially conferred."}}
  ]
}
</script>
@endpush

@section('content')
<style>
/* ===== ANTIGUA PAGE — PARADISE SHORES DESIGN ===== */

.atg-hero {
    min-height: 100vh;
    padding: 140px 0 100px;
    position: relative;
    display: flex;
    align-items: center;
    background: var(--charcoal);
    overflow: hidden;
}
.atg-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(circle 600px at 15% 50%, rgba(128,0,32,.2) 0%, transparent 70%),
        radial-gradient(circle 400px at 80% 30%, rgba(201,169,98,.1) 0%, transparent 60%),
        radial-gradient(circle 300px at 50% 80%, rgba(201,169,98,.05) 0%, transparent 50%);
}
.atg-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='40' cy='40' r='30' fill='none' stroke='%23C9A962' stroke-opacity='0.02'/%3E%3Ccircle cx='40' cy='40' r='20' fill='none' stroke='%23C9A962' stroke-opacity='0.02'/%3E%3C/svg%3E");
    pointer-events: none;
}
.atg-hero .container { position: relative; z-index: 1; }
.atg-hero-grid {
    display: grid;
    grid-template-columns: 1fr 460px;
    gap: 60px;
    align-items: center;
}
.atg-hero-badge {
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
.atg-hero-badge::before {
    content: '';
    width: 6px;
    height: 6px;
    background: var(--gold);
    border-radius: 50%;
    animation: pulse 2s infinite;
}
.atg-hero h1 {
    color: var(--white);
    font-size: clamp(2.6rem, 5vw, 3.8rem);
    line-height: 1.1;
    margin-bottom: 16px;
}
.atg-hero h1 span {
    display: block;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.atg-hero-subtitle {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.3rem;
    font-weight: 500;
    font-style: italic;
    color: var(--gold-light);
    margin-bottom: 20px;
    opacity: .9;
}
.atg-hero-lead {
    font-size: 1rem;
    line-height: 1.85;
    color: rgba(255,255,255,.8);
    max-width: 540px;
    margin-bottom: 0;
}
.atg-hero-highlights {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 40px;
    padding-top: 36px;
    border-top: 1px solid rgba(201,169,98,.15);
}
.atg-highlight {
    text-align: center;
    padding: 20px 12px;
    background: rgba(201,169,98,.06);
    border: 1px solid rgba(201,169,98,.12);
    border-radius: 16px;
    transition: all .3s ease;
}
.atg-highlight:hover {
    background: rgba(201,169,98,.12);
    transform: translateY(-3px);
}
.atg-highlight-icon {
    width: 44px;
    height: 44px;
    margin: 0 auto 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 12px;
}
.atg-highlight-icon svg { width: 22px; height: 22px; color: var(--charcoal); }
.atg-highlight-label { font-size: 12px; font-weight: 600; color: var(--white); letter-spacing: .5px; line-height: 1.4; }

/* Process — Itinerary Cards */
.atg-process {
    padding: 100px 0;
    background: var(--cream);
}
.atg-process .section-header { text-align: center; max-width: 680px; margin: 0 auto 60px; }
.atg-process .section-header h2 { color: var(--charcoal); margin-bottom: 16px; }
.atg-itinerary {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 16px;
    max-width: 1100px;
    margin: 0 auto;
}
.atg-itinerary-card {
    background: var(--white);
    border: 1px solid rgba(152,131,88,.12);
    border-radius: 16px;
    padding: 32px 16px;
    text-align: center;
    position: relative;
    transition: all .4s ease;
}
.atg-itinerary-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(0,0,0,.08);
    border-color: rgba(152,131,88,.3);
}
.atg-itinerary-num {
    font-family: 'Cormorant Garamond', serif;
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--burgundy);
    line-height: 1;
    margin-bottom: 12px;
}
.atg-itinerary-line {
    width: 30px;
    height: 2px;
    background: linear-gradient(90deg, var(--gold), var(--gold-dark));
    margin: 0 auto 12px;
}
.atg-itinerary-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1rem;
    font-weight: 600;
    color: var(--charcoal);
    margin-bottom: 8px;
}
.atg-itinerary-desc { font-size: 12px; color: var(--text-muted); line-height: 1.5; margin: 0; }

/* About — Asymmetric */
.atg-about {
    padding: 100px 0;
    background: var(--white);
}
.atg-about-grid {
    display: grid;
    grid-template-columns: 1.5fr 1fr;
    gap: 60px;
    align-items: start;
}
.atg-about-content h2 { color: var(--charcoal); margin-bottom: 24px; }
.atg-about-content p { font-size: 1rem; line-height: 1.85; }
.atg-features-stack { display: flex; flex-direction: column; gap: 12px; }
.atg-feature-mini {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 18px 20px;
    background: var(--cream);
    border-radius: 14px;
    border: 1px solid rgba(152,131,88,.1);
    transition: all .3s ease;
}
.atg-feature-mini:hover {
    border-color: rgba(152,131,88,.3);
    box-shadow: 0 6px 20px rgba(0,0,0,.06);
}
.atg-feature-mini-icon {
    flex-shrink: 0;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--burgundy) 0%, var(--burgundy-dark) 100%);
    border-radius: 10px;
}
.atg-feature-mini-icon svg { width: 18px; height: 18px; color: var(--white); }
.atg-feature-mini-text { font-size: 14px; color: var(--text-dark); font-weight: 500; line-height: 1.5; }

/* Eligibility — Pill Grid */
.atg-eligibility {
    padding: 100px 0;
    background: var(--cream);
    text-align: center;
}
.atg-eligibility h2 { color: var(--charcoal); margin-bottom: 20px; }
.atg-eligibility > .container > p { max-width: 600px; margin: 0 auto 40px; }
.atg-pills {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    max-width: 700px;
    margin: 0 auto 40px;
}
.atg-pill {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 22px 24px;
    background: var(--white);
    border-radius: 16px;
    border: 1px solid rgba(152,131,88,.12);
    text-align: left;
    transition: all .3s ease;
}
.atg-pill:hover {
    border-color: rgba(152,131,88,.3);
    box-shadow: 0 8px 24px rgba(0,0,0,.06);
    transform: translateY(-2px);
}
.atg-pill-check {
    flex-shrink: 0;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 50%;
}
.atg-pill-check svg { width: 16px; height: 16px; color: var(--charcoal); }
.atg-pill-text { font-size: 14px; color: var(--text-dark); font-weight: 500; line-height: 1.5; }
.atg-eligibility-note { font-size: 14px; color: var(--text-muted); margin-bottom: 24px; font-style: italic; }

/* FAQ */
.atg-faq {
    padding: 100px 0;
    background: var(--white);
}
.atg-faq .section-header { text-align: center; max-width: 680px; margin: 0 auto 60px; }
.atg-faq .section-header h2 { color: var(--charcoal); margin-bottom: 16px; }
.atg-faq-list { max-width: 800px; margin: 0 auto; }
.atg-faq-item {
    background: var(--cream);
    border-radius: 16px;
    margin-bottom: 16px;
    overflow: hidden;
    border: 1px solid rgba(152,131,88,.12);
    transition: all .3s ease;
}
.atg-faq-item:hover { border-color: rgba(152,131,88,.3); }
.atg-faq-question {
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
.atg-faq-question:hover { color: var(--burgundy); }
.atg-faq-toggle {
    width: 36px;
    height: 36px;
    flex-shrink: 0;
    position: relative;
    background: var(--white);
    border-radius: 50%;
    transition: all .3s ease;
}
.atg-faq-toggle::before {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 14px; height: 2px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
}
.atg-faq-toggle::after {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 2px; height: 14px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
    transition: all .3s ease;
}
.atg-faq-item.active .atg-faq-toggle { background: var(--burgundy); transform: rotate(45deg); }
.atg-faq-item.active .atg-faq-toggle::before,
.atg-faq-item.active .atg-faq-toggle::after { background: var(--white); }
.atg-faq-answer { max-height: 0; overflow: hidden; transition: max-height .4s ease; }
.atg-faq-answer-inner { padding: 0 30px 24px; color: var(--text-muted); font-size: 15px; line-height: 1.85; }
.atg-faq-item.active .atg-faq-answer { max-height: 300px; }

/* Final CTA */
.atg-final-cta {
    padding: 80px 0;
    background: linear-gradient(135deg, var(--burgundy) 0%, var(--burgundy-dark) 100%);
    text-align: center;
    position: relative;
    overflow: hidden;
}
.atg-final-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='40' cy='40' r='30' fill='none' stroke='%23ffffff' stroke-opacity='0.04'/%3E%3C/svg%3E");
    pointer-events: none;
}
.atg-final-cta .container { position: relative; z-index: 1; }
.atg-final-cta h2 { color: var(--white); margin-bottom: 16px; }

/* Responsive */
@@media (max-width: 1024px) {
    .atg-hero-grid { grid-template-columns: 1fr; gap: 48px; text-align: center; }
    .atg-hero-lead { margin: 0 auto; }
    .hero-form { max-width: 520px; margin: 0 auto; }
    .atg-about-grid { grid-template-columns: 1fr; gap: 48px; }
    .atg-itinerary { grid-template-columns: repeat(3, 1fr); }
}
@@media (max-width: 768px) {
    .atg-hero { min-height: auto; padding: 110px 0 60px; }
    .atg-process, .atg-about, .atg-eligibility, .atg-faq, .atg-final-cta { padding: 60px 0; }
    .atg-itinerary { grid-template-columns: repeat(2, 1fr); }
    .atg-hero-highlights { grid-template-columns: 1fr; gap: 12px; }
    .atg-highlight { flex-direction: row; display: flex; align-items: center; gap: 14px; text-align: left; padding: 14px 18px; }
    .atg-highlight-icon { margin: 0; }
    .hero-form { padding: 28px 20px; }
    .form-row { grid-template-columns: 1fr; }
    .atg-pills { grid-template-columns: 1fr; }
}
@@media (max-width: 480px) {
    .atg-itinerary { grid-template-columns: 1fr; max-width: 280px; margin: 0 auto; }
}
</style>

<!-- ===== HERO ===== -->
<section class="atg-hero">
    <div class="container">
        <div class="atg-hero-grid">
            <div class="atg-hero-content">
                <div class="atg-hero-badge">Government-Approved Citizenship Program</div>
                <h1>Antigua and Barbuda<span>Citizenship by Investment Program</span></h1>
                <p class="atg-hero-subtitle">A Government-Regulated Pathway to Second Citizenship in Antigua and Barbuda</p>
                <p class="atg-hero-lead">The Antigua and Barbuda citizenship by investment program is a government-established initiative that allows eligible foreign applicants to acquire citizenship of Antigua and Barbuda through a qualifying economic contribution. The program operates under national legislation and is administered by authorized government authorities.</p>
                <p class="atg-hero-lead" style="margin-top:-8px">Citizenship is granted only after due diligence screening, background verification, and formal approval by the government.</p>
                <div class="atg-hero-highlights">
                    <div class="atg-highlight">
                        <div class="atg-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                        </div>
                        <span class="atg-highlight-label">Government-Established Program</span>
                    </div>
                    <div class="atg-highlight">
                        <div class="atg-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                        </div>
                        <span class="atg-highlight-label">Citizenship Under National Law</span>
                    </div>
                    <div class="atg-highlight">
                        <div class="atg-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                        </div>
                        <span class="atg-highlight-label">Family Inclusion Eligible</span>
                    </div>
                </div>
            </div>
            <x-landing-form
                source="antigua-and-barbuda-citizenship-by-investment"
                consultancy="antigua-and-barbuda-citizenship-by-investment"
                title="Check Eligibility for the Antigua and Barbuda Citizenship Program"
                subtitle="Share your details and our experts will assess your eligibility."
            >Check Eligibility</x-landing-form>
        </div>
    </div>
</section>

<!-- ===== PROCESS — Itinerary Cards ===== -->
<section class="atg-process">
    <div class="container">
        <div class="section-header">
            <h2>How Antigua and Barbuda Citizenship by Investment Works</h2>
            <p>Each application is reviewed individually in accordance with national legislation.</p>
        </div>
        <div class="atg-itinerary">
            <div class="atg-itinerary-card">
                <div class="atg-itinerary-num">01</div>
                <div class="atg-itinerary-line"></div>
                <div class="atg-itinerary-title">Eligibility</div>
                <p class="atg-itinerary-desc">Initial eligibility assessment</p>
            </div>
            <div class="atg-itinerary-card">
                <div class="atg-itinerary-num">02</div>
                <div class="atg-itinerary-line"></div>
                <div class="atg-itinerary-title">Documentation</div>
                <p class="atg-itinerary-desc">Preparation and submission of required documentation</p>
            </div>
            <div class="atg-itinerary-card">
                <div class="atg-itinerary-num">03</div>
                <div class="atg-itinerary-line"></div>
                <div class="atg-itinerary-title">Due Diligence</div>
                <p class="atg-itinerary-desc">Government due diligence and compliance screening</p>
            </div>
            <div class="atg-itinerary-card">
                <div class="atg-itinerary-num">04</div>
                <div class="atg-itinerary-line"></div>
                <div class="atg-itinerary-title">Approval</div>
                <p class="atg-itinerary-desc">Approval in principle by national authorities</p>
            </div>
            <div class="atg-itinerary-card">
                <div class="atg-itinerary-num">05</div>
                <div class="atg-itinerary-line"></div>
                <div class="atg-itinerary-title">Contribution</div>
                <p class="atg-itinerary-desc">Completion of the qualifying economic contribution</p>
            </div>
            <div class="atg-itinerary-card">
                <div class="atg-itinerary-num">06</div>
                <div class="atg-itinerary-line"></div>
                <div class="atg-itinerary-title">Citizenship</div>
                <p class="atg-itinerary-desc">Issuance of citizenship certificate and passport</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== ABOUT + FEATURES ===== -->
<section class="atg-about">
    <div class="container">
        <div class="atg-about-grid">
            <div class="atg-about-content">
                <h2>What Is the Antigua and Barbuda Citizenship by Investment Program?</h2>
                <p>The program enables foreign nationals to obtain citizenship by making an approved contribution under a structured legal framework. It is enacted under the laws of Antigua and Barbuda and is designed to support national development through regulated investment.</p>
                <p>Applicants must meet eligibility standards and pass comprehensive government due diligence procedures before citizenship status is conferred.</p>
            </div>
            <div class="atg-features-stack">
                <div class="atg-feature-mini">
                    <div class="atg-feature-mini-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                    </div>
                    <span class="atg-feature-mini-text">Government-established second citizenship program</span>
                </div>
                <div class="atg-feature-mini">
                    <div class="atg-feature-mini-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <span class="atg-feature-mini-text">Regulated due diligence and compliance procedures</span>
                </div>
                <div class="atg-feature-mini">
                    <div class="atg-feature-mini-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </div>
                    <span class="atg-feature-mini-text">Citizenship granted under national law</span>
                </div>
                <div class="atg-feature-mini">
                    <div class="atg-feature-mini-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <span class="atg-feature-mini-text">Eligibility to include immediate family members</span>
                </div>
                <div class="atg-feature-mini">
                    <div class="atg-feature-mini-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                    </div>
                    <span class="atg-feature-mini-text">Official passport issued upon approval</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== ELIGIBILITY ===== -->
<section class="atg-eligibility">
    <div class="container">
        <h2>Who Can Apply for Antigua and Barbuda Citizenship by Investment?</h2>
        <p>Eligibility is determined under the legal framework governing the program. Applicants are generally required to:</p>
        <div class="atg-pills">
            <div class="atg-pill">
                <span class="atg-pill-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                <span class="atg-pill-text">Meet financial qualification standards</span>
            </div>
            <div class="atg-pill">
                <span class="atg-pill-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                <span class="atg-pill-text">Provide verified source of funds documentation</span>
            </div>
            <div class="atg-pill">
                <span class="atg-pill-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                <span class="atg-pill-text">Pass strict background and due diligence checks</span>
            </div>
            <div class="atg-pill">
                <span class="atg-pill-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                <span class="atg-pill-text">Comply with official application procedures</span>
            </div>
        </div>
        <p class="atg-eligibility-note">All approvals are subject to final review and decision by the government of Antigua and Barbuda.</p>
        <a href="#top" class="btn btn-primary" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="atg-faq">
    <div class="container">
        <div class="section-header">
            <h2>Antigua and Barbuda Citizenship by Investment FAQs</h2>
        </div>
        <div class="atg-faq-list">
            <div class="atg-faq-item faq-item active">
                <div class="atg-faq-question faq-question">Is Antigua and Barbuda citizenship by investment legal?<span class="atg-faq-toggle"></span></div>
                <div class="atg-faq-answer"><div class="atg-faq-answer-inner">Yes. The program operates under national legislation and is administered by authorized government bodies.</div></div>
            </div>
            <div class="atg-faq-item faq-item">
                <div class="atg-faq-question faq-question">Does approval depend on government review?<span class="atg-faq-toggle"></span></div>
                <div class="atg-faq-answer"><div class="atg-faq-answer-inner">Yes. All applications undergo due diligence and must receive formal government approval before citizenship is granted.</div></div>
            </div>
            <div class="atg-faq-item faq-item">
                <div class="atg-faq-question faq-question">Can families apply together under the program?<span class="atg-faq-toggle"></span></div>
                <div class="atg-faq-answer"><div class="atg-faq-answer-inner">Yes. Eligible applicants may include immediate family members under one structured application.</div></div>
            </div>
            <div class="atg-faq-item faq-item">
                <div class="atg-faq-question faq-question">Is the passport issued after citizenship approval?<span class="atg-faq-toggle"></span></div>
                <div class="atg-faq-answer"><div class="atg-faq-answer-inner">Yes. A passport is issued once citizenship has been officially conferred.</div></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="atg-final-cta">
    <div class="container">
        <h2>Check Eligibility for the Antigua and Barbuda Citizenship Program</h2>
        <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
    </div>
</section>

<!-- ===== WhatsApp Float ===== -->
<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
@endsection
