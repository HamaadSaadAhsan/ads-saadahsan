@extends('layouts.landing')

@section('meta_title', 'St Kitts Citizenship by Investment | Government-Approved Second Citizenship Program')
@section('meta_description', 'Learn about the St Kitts citizenship by investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/st-kitts-citizenship-by-investment">
<meta property="og:url" content="https://ads.saadahsan.com/st-kitts-citizenship-by-investment">
<meta property="og:type" content="website">
<meta property="og:title" content="St Kitts Citizenship by Investment | Government-Approved Second Citizenship Program">
<meta property="og:description" content="Learn about the St Kitts citizenship by investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="St Kitts Citizenship by Investment | Government-Approved Second Citizenship Program">
<meta name="twitter:description" content="Learn about the St Kitts citizenship by investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"St Kitts Citizenship by Investment | Government-Approved Second Citizenship Program","description":"Learn about the St Kitts citizenship by investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.","url":"https://ads.saadahsan.com/st-kitts-citizenship-by-investment","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"Is St Kitts citizenship by investment legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. The program operates under national legislation and is administered by authorized government bodies."}},
    {"@@type":"Question","name":"Does approval depend on government review?","acceptedAnswer":{"@@type":"Answer","text":"Yes. All applications undergo due diligence and must receive formal government approval before citizenship is granted."}},
    {"@@type":"Question","name":"Can families apply together under the program?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Eligible applicants may include immediate family members under one structured application."}},
    {"@@type":"Question","name":"Is the passport issued after citizenship approval?","acceptedAnswer":{"@@type":"Answer","text":"Yes. A passport is issued once citizenship has been officially conferred."}}
  ]
}
</script>
@endpush

@section('content')
<style>
/* ===== ST KITTS PAGE — HERITAGE PIONEER DESIGN ===== */

/* Hero */
.stk-hero {
    min-height: 100vh;
    padding: 140px 0 100px;
    position: relative;
    display: flex;
    align-items: center;
    background: var(--charcoal);
    overflow: hidden;
}
.stk-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 70% 50% at 25% 50%, rgba(128,0,32,.22) 0%, transparent 70%),
        radial-gradient(ellipse 50% 40% at 80% 35%, rgba(201,169,98,.1) 0%, transparent 60%);
}
.stk-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='10' y='10' width='40' height='40' fill='none' stroke='%23C9A962' stroke-opacity='0.03'/%3E%3C/svg%3E");
    pointer-events: none;
}
.stk-hero .container { position: relative; z-index: 1; }
.stk-hero-grid {
    display: grid;
    grid-template-columns: 1fr 460px;
    gap: 60px;
    align-items: center;
}
.stk-hero-badge {
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
.stk-hero-badge::before {
    content: '';
    width: 6px;
    height: 6px;
    background: var(--gold);
    border-radius: 50%;
    animation: pulse 2s infinite;
}
/* Decorative rule */
.stk-hero-rule {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 24px;
}
.stk-hero-rule::before,
.stk-hero-rule::after {
    content: '';
    flex: 1;
    height: 1px;
    background: linear-gradient(90deg, var(--gold), transparent);
}
.stk-hero-rule::after {
    background: linear-gradient(90deg, transparent, var(--gold));
}
.stk-hero-rule-crest {
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid rgba(201,169,98,.4);
    border-radius: 50%;
}
.stk-hero-rule-crest svg { width: 16px; height: 16px; color: var(--gold); }
.stk-hero h1 {
    color: var(--white);
    font-size: clamp(2.8rem, 5.5vw, 4.2rem);
    line-height: 1.1;
    margin-bottom: 16px;
}
.stk-hero h1 span {
    display: block;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.stk-hero-subtitle {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.35rem;
    font-weight: 500;
    font-style: italic;
    color: var(--gold-light);
    margin-bottom: 20px;
    opacity: .9;
}
.stk-hero-lead {
    font-size: 1rem;
    line-height: 1.85;
    color: rgba(255,255,255,.8);
    max-width: 540px;
    margin-bottom: 0;
}
.stk-hero-highlights {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 40px;
    padding-top: 36px;
    border-top: 1px solid rgba(201,169,98,.15);
}
.stk-highlight {
    text-align: center;
    padding: 20px 12px;
    background: rgba(201,169,98,.06);
    border: 1px solid rgba(201,169,98,.12);
    border-radius: 16px;
    transition: color .3s ease, background .3s ease, border-color .3s ease, transform .3s ease, box-shadow .3s ease, opacity .3s ease;
}
.stk-highlight:hover {
    background: rgba(201,169,98,.12);
    border-color: rgba(201,169,98,.25);
    transform: translateY(-3px);
}
.stk-highlight-icon {
    width: 44px;
    height: 44px;
    margin: 0 auto 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 12px;
}
.stk-highlight-icon svg { width: 22px; height: 22px; color: var(--charcoal); }
.stk-highlight-label {
    font-size: 12px;
    font-weight: 600;
    color: var(--white);
    letter-spacing: .5px;
    line-height: 1.4;
}

/* ===== PROCESS — Grid Cards ===== */
.stk-process {
    padding: 100px 0;
    background: var(--white);
}
.stk-process .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 60px;
}
.stk-process .section-header h2 { color: var(--charcoal); margin-bottom: 16px; }
.stk-process-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    max-width: 1000px;
    margin: 0 auto;
}
.stk-process-card {
    padding: 36px 28px;
    background: var(--cream);
    border: 1px solid rgba(152,131,88,.12);
    border-radius: 20px;
    text-align: center;
    transition: color .4s ease, background .4s ease, border-color .4s ease, transform .4s ease, box-shadow .4s ease, opacity .4s ease;
    position: relative;
}
.stk-process-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(0,0,0,.1);
    border-color: rgba(152,131,88,.3);
}
.stk-process-num {
    font-family: 'Cormorant Garamond', serif;
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--burgundy);
    line-height: 1;
    margin-bottom: 16px;
    opacity: .8;
}
.stk-process-card:hover .stk-process-num { opacity: 1; }
.stk-process-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.15rem;
    font-weight: 600;
    color: var(--charcoal);
    margin-bottom: 10px;
}
.stk-process-desc {
    font-size: 13px;
    color: var(--text-muted);
    line-height: 1.65;
    margin: 0;
}

/* ===== ABOUT + FEATURES (Dark Certificate Card) ===== */
.stk-about {
    padding: 100px 0;
    background: var(--cream);
    position: relative;
    overflow: hidden;
}
.stk-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
}
.stk-about-content h2 { color: var(--charcoal); margin-bottom: 24px; }
.stk-about-content p { font-size: 1rem; line-height: 1.85; }
.stk-features-card {
    background: linear-gradient(135deg, var(--charcoal) 0%, var(--charcoal-light) 100%);
    border-radius: 24px;
    padding: 44px 36px;
    position: relative;
    overflow: hidden;
}
.stk-features-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--gold), var(--burgundy), var(--gold));
}
.stk-features-card::after {
    content: '';
    position: absolute;
    bottom: -60px;
    right: -60px;
    width: 180px;
    height: 180px;
    background: radial-gradient(circle, rgba(201,169,98,.06) 0%, transparent 70%);
    border-radius: 50%;
}
.stk-features-card h3 {
    color: var(--white);
    margin-bottom: 28px;
    font-size: 1.5rem;
}
.stk-feature-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 16px 0;
    border-bottom: 1px solid rgba(201,169,98,.12);
}
.stk-feature-item:last-child { border-bottom: none; padding-bottom: 0; }
.stk-feature-icon {
    flex-shrink: 0;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 10px;
}
.stk-feature-icon svg { width: 18px; height: 18px; color: var(--charcoal); }
.stk-feature-text { font-size: 15px; color: rgba(255,255,255,.85); line-height: 1.6; font-weight: 500; }

/* ===== ELIGIBILITY ===== */
.stk-eligibility {
    padding: 100px 0;
    background: var(--white);
}
.stk-eligibility-inner {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}
.stk-eligibility-inner h2 { color: var(--charcoal); margin-bottom: 20px; }
.stk-eligibility-inner > p { max-width: 600px; margin: 0 auto 40px; }
.stk-eligibility-list {
    list-style: none;
    padding: 0;
    margin: 0 0 48px;
    text-align: left;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}
.stk-eligibility-list li {
    display: flex;
    align-items: center;
    gap: 20px;
    padding: 20px 0;
    border-bottom: 1px solid rgba(152,131,88,.12);
}
.stk-eligibility-list li:last-child { border-bottom: none; }
.stk-eligibility-num {
    flex-shrink: 0;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 50%;
    font-family: 'Cormorant Garamond', serif;
    font-size: 1rem;
    font-weight: 700;
    color: var(--charcoal);
}
.stk-eligibility-text { font-size: 15px; color: var(--text-dark); line-height: 1.65; }
.stk-eligibility-note {
    font-size: 14px;
    color: var(--text-muted);
    margin-bottom: 32px;
    font-style: italic;
}
.stk-cta-band {
    background: linear-gradient(135deg, var(--charcoal) 0%, var(--charcoal-light) 100%);
    border-radius: 24px;
    padding: 48px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.stk-cta-band::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold), var(--burgundy));
}
.stk-cta-band h3 { color: var(--white); font-size: 1.6rem; margin-bottom: 20px; }
.stk-cta-band .btn { position: relative; z-index: 1; }

/* ===== FAQ ===== */
.stk-faq {
    padding: 100px 0;
    background: var(--cream);
}
.stk-faq .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 60px;
}
.stk-faq .section-header h2 { color: var(--charcoal); margin-bottom: 16px; }
.stk-faq-list { max-width: 800px; margin: 0 auto; }
.stk-faq-item {
    background: var(--white);
    border-radius: 16px;
    margin-bottom: 16px;
    overflow: hidden;
    border: 1px solid rgba(152,131,88,.12);
    transition: color .3s ease, background .3s ease, border-color .3s ease, transform .3s ease, box-shadow .3s ease, opacity .3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,.03);
}
.stk-faq-item:hover {
    border-color: rgba(152,131,88,.3);
    box-shadow: 0 8px 24px rgba(0,0,0,.06);
}
.stk-faq-question {
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
.stk-faq-question:hover { color: var(--burgundy); }
.stk-faq-toggle {
    width: 36px;
    height: 36px;
    flex-shrink: 0;
    position: relative;
    background: var(--cream);
    border-radius: 50%;
    transition: color .3s ease, background .3s ease, border-color .3s ease, transform .3s ease, box-shadow .3s ease, opacity .3s ease;
}
.stk-faq-toggle::before {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 14px; height: 2px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
}
.stk-faq-toggle::after {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 2px; height: 14px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
    transition: color .3s ease, background .3s ease, border-color .3s ease, transform .3s ease, box-shadow .3s ease, opacity .3s ease;
}
.stk-faq-item.active .stk-faq-toggle {
    background: var(--burgundy);
    transform: rotate(45deg);
}
.stk-faq-item.active .stk-faq-toggle::before,
.stk-faq-item.active .stk-faq-toggle::after { background: var(--white); }
.stk-faq-answer { max-height: 0; overflow: hidden; transition: max-height .4s ease; }
.stk-faq-answer-inner {
    padding: 0 30px 24px;
    color: var(--text-muted);
    font-size: 15px;
    line-height: 1.85;
}
.stk-faq-item.active .stk-faq-answer { max-height: 300px; }

/* ===== FINAL CTA — Charcoal ===== */
.stk-final-cta {
    padding: 80px 0;
    background: var(--charcoal);
    position: relative;
    overflow: hidden;
    text-align: center;
}
.stk-final-cta::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--gold), transparent);
}
.stk-final-cta .container { position: relative; z-index: 1; }
.stk-final-cta h2 { color: var(--white); margin-bottom: 16px; }

/* ===== RESPONSIVE ===== */
@@media (max-width: 1024px) {
    .stk-hero-grid { grid-template-columns: 1fr; gap: 48px; text-align: center; }
    .stk-hero-lead { margin: 0 auto; }
    .hero-form { max-width: 520px; margin: 0 auto; }
    .stk-about-grid { grid-template-columns: 1fr; gap: 48px; }
    .stk-process-grid { grid-template-columns: repeat(2, 1fr); }
}
@@media (max-width: 768px) {
    .stk-hero { min-height: auto; padding: 110px 0 60px; }
    .stk-process, .stk-about, .stk-eligibility, .stk-faq, .stk-final-cta { padding: 60px 0; }
    .stk-process-grid { grid-template-columns: 1fr; max-width: 400px; }
    .stk-hero-highlights { grid-template-columns: 1fr; gap: 12px; }
    .stk-highlight { flex-direction: row; display: flex; align-items: center; gap: 14px; text-align: left; padding: 14px 18px; }
    .stk-highlight-icon { margin: 0; }
    .hero-form { padding: 28px 20px; }
    .form-row { grid-template-columns: 1fr; }
    .stk-features-card { padding: 32px 24px; }
    .stk-cta-band { padding: 36px 24px; }
}
</style>

<!-- ===== HERO ===== -->
<section class="stk-hero">
    <div class="container">
        <div class="stk-hero-grid">
            <div class="stk-hero-content">
                <div class="stk-hero-badge">Government-Approved Citizenship Program</div>
                <div class="stk-hero-rule">
                    <span class="stk-hero-rule-crest">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </span>
                </div>
                <h1>St Kitts Citizenship by<span>Investment Program</span></h1>
                <p class="stk-hero-subtitle">A Government-Regulated Pathway to Second Citizenship in St. Kitts and Nevis</p>
                <p class="stk-hero-lead">The St Kitts citizenship by investment program is a government-established initiative that allows eligible foreign applicants to acquire citizenship of St. Kitts and Nevis through a qualifying economic contribution. The program operates under national legislation and is administered by authorized government authorities.</p>
                <p class="stk-hero-lead" style="margin-top:-8px">Citizenship is granted only after due diligence screening, background verification, and formal approval by the government.</p>
                <div class="stk-hero-highlights">
                    <div class="stk-highlight">
                        <div class="stk-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                        </div>
                        <span class="stk-highlight-label">Government-Established Program</span>
                    </div>
                    <div class="stk-highlight">
                        <div class="stk-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                        </div>
                        <span class="stk-highlight-label">Citizenship Under National Law</span>
                    </div>
                    <div class="stk-highlight">
                        <div class="stk-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                        </div>
                        <span class="stk-highlight-label">Family Inclusion Eligible</span>
                    </div>
                </div>
            </div>
            <x-landing-form
                source="st-kitts-citizenship-by-investment"
                consultancy="st-kitts-citizenship-by-investment"
                title="Check Eligibility for the St Kitts Citizenship Program"
                subtitle="Share your details and our experts will assess your eligibility."
            >Check Eligibility</x-landing-form>
        </div>
    </div>
</section>

<!-- ===== PROCESS — Grid Cards ===== -->
<section class="stk-process">
    <div class="container">
        <div class="section-header">
            <h2>How St Kitts Citizenship by Investment Works</h2>
            <p>Each application is reviewed individually in accordance with national legislation.</p>
        </div>
        <div class="stk-process-grid">
            <div class="stk-process-card">
                <div class="stk-process-num">01</div>
                <div class="stk-process-title">Eligibility Assessment</div>
                <p class="stk-process-desc">Initial eligibility assessment</p>
            </div>
            <div class="stk-process-card">
                <div class="stk-process-num">02</div>
                <div class="stk-process-title">Documentation</div>
                <p class="stk-process-desc">Preparation and submission of required documentation</p>
            </div>
            <div class="stk-process-card">
                <div class="stk-process-num">03</div>
                <div class="stk-process-title">Due Diligence</div>
                <p class="stk-process-desc">Government due diligence and compliance screening</p>
            </div>
            <div class="stk-process-card">
                <div class="stk-process-num">04</div>
                <div class="stk-process-title">Approval</div>
                <p class="stk-process-desc">Approval in principle by national authorities</p>
            </div>
            <div class="stk-process-card">
                <div class="stk-process-num">05</div>
                <div class="stk-process-title">Investment</div>
                <p class="stk-process-desc">Completion of the qualifying economic contribution</p>
            </div>
            <div class="stk-process-card">
                <div class="stk-process-num">06</div>
                <div class="stk-process-title">Citizenship</div>
                <p class="stk-process-desc">Issuance of citizenship certificate and passport</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== ABOUT + KEY FEATURES ===== -->
<section class="stk-about">
    <div class="container">
        <div class="stk-about-grid">
            <div class="stk-about-content">
                <h2>What Is the St Kitts Citizenship by Investment Program?</h2>
                <p>The St Kitts citizenship by investment program enables foreign nationals to obtain citizenship by making an approved contribution under a structured legal framework. The program is enacted under the laws of St. Kitts and Nevis and is designed to support national development through regulated investment.</p>
                <p>Applicants must satisfy eligibility standards and successfully pass government due diligence procedures before citizenship status is conferred.</p>
            </div>
            <div class="stk-features-card">
                <h3>Key Features of the St Kitts Citizenship by Investment Program</h3>
                <div class="stk-feature-item">
                    <div class="stk-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                    </div>
                    <span class="stk-feature-text">Government-established second citizenship program</span>
                </div>
                <div class="stk-feature-item">
                    <div class="stk-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <span class="stk-feature-text">Regulated due diligence and compliance procedures</span>
                </div>
                <div class="stk-feature-item">
                    <div class="stk-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </div>
                    <span class="stk-feature-text">Citizenship granted under national law</span>
                </div>
                <div class="stk-feature-item">
                    <div class="stk-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <span class="stk-feature-text">Eligibility to include immediate family members</span>
                </div>
                <div class="stk-feature-item">
                    <div class="stk-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                    </div>
                    <span class="stk-feature-text">Official passport issued upon approval</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== ELIGIBILITY ===== -->
<section class="stk-eligibility">
    <div class="container">
        <div class="stk-eligibility-inner">
            <h2>Who Can Apply for St Kitts Citizenship by Investment?</h2>
            <p>Eligibility is determined under the legal framework governing the program. Applicants are generally required to:</p>
            <ul class="stk-eligibility-list">
                <li>
                    <span class="stk-eligibility-num">01</span>
                    <span class="stk-eligibility-text">Meet financial qualification standards</span>
                </li>
                <li>
                    <span class="stk-eligibility-num">02</span>
                    <span class="stk-eligibility-text">Provide verified source of funds documentation</span>
                </li>
                <li>
                    <span class="stk-eligibility-num">03</span>
                    <span class="stk-eligibility-text">Pass strict background and due diligence checks</span>
                </li>
                <li>
                    <span class="stk-eligibility-num">04</span>
                    <span class="stk-eligibility-text">Comply with official application procedures</span>
                </li>
            </ul>
            <p class="stk-eligibility-note">All approvals are subject to final review and decision by the government of St. Kitts and Nevis.</p>
            <div class="stk-cta-band">
                <h3>Check Eligibility for the St Kitts Citizenship Program</h3>
                <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="stk-faq">
    <div class="container">
        <div class="section-header">
            <h2>St Kitts Citizenship by Investment FAQs</h2>
        </div>
        <div class="stk-faq-list">
            <div class="stk-faq-item faq-item active">
                <div class="stk-faq-question faq-question">Is St Kitts citizenship by investment legal?<span class="stk-faq-toggle"></span></div>
                <div class="stk-faq-answer"><div class="stk-faq-answer-inner">Yes. The program operates under national legislation and is administered by authorized government bodies.</div></div>
            </div>
            <div class="stk-faq-item faq-item">
                <div class="stk-faq-question faq-question">Does approval depend on government review?<span class="stk-faq-toggle"></span></div>
                <div class="stk-faq-answer"><div class="stk-faq-answer-inner">Yes. All applications undergo due diligence and must receive formal government approval before citizenship is granted.</div></div>
            </div>
            <div class="stk-faq-item faq-item">
                <div class="stk-faq-question faq-question">Can families apply together under the program?<span class="stk-faq-toggle"></span></div>
                <div class="stk-faq-answer"><div class="stk-faq-answer-inner">Yes. Eligible applicants may include immediate family members under one structured application.</div></div>
            </div>
            <div class="stk-faq-item faq-item">
                <div class="stk-faq-question faq-question">Is the passport issued after citizenship approval?<span class="stk-faq-toggle"></span></div>
                <div class="stk-faq-answer"><div class="stk-faq-answer-inner">Yes. A passport is issued once citizenship has been officially conferred.</div></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="stk-final-cta">
    <div class="container">
        <h2>Check Eligibility for the St Kitts Citizenship Program</h2>
        <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
    </div>
</section>

<!-- ===== WhatsApp Float ===== -->
<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
@endsection
