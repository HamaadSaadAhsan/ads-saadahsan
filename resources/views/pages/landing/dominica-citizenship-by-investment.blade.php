@extends('layouts.landing')

@section('meta_title', 'Dominica Citizenship by Investment | Government-Approved Second Citizenship Program')
@section('meta_description', 'Learn about the Dominica Citizenship by Investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/dominica-citizenship-by-investment">
<meta property="og:url" content="https://ads.saadahsan.com/dominica-citizenship-by-investment">
<meta property="og:type" content="website">
<meta property="og:title" content="Dominica Citizenship by Investment | Government-Approved Second Citizenship Program">
<meta property="og:description" content="Learn about the Dominica Citizenship by Investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Dominica Citizenship by Investment | Government-Approved Second Citizenship Program">
<meta name="twitter:description" content="Learn about the Dominica Citizenship by Investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Dominica Citizenship by Investment | Government-Approved Second Citizenship Program","description":"Learn about the Dominica Citizenship by Investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.","url":"https://ads.saadahsan.com/dominica-citizenship-by-investment","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"Is Dominica citizenship by investment legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. The program operates under national legislation and is administered by authorized government bodies in Dominica."}},
    {"@@type":"Question","name":"Does approval depend on government review?","acceptedAnswer":{"@@type":"Answer","text":"Yes. All applications undergo due diligence and must receive formal government approval before citizenship is granted."}},
    {"@@type":"Question","name":"Can families apply together under the program?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Eligible applicants may include immediate family members under one structured application."}},
    {"@@type":"Question","name":"Is the passport issued after citizenship approval?","acceptedAnswer":{"@@type":"Answer","text":"Yes. A Dominican passport is issued once citizenship has been officially conferred."}}
  ]
}
</script>
@endpush

@section('content')
<style>
/* ===== DOMINICA PAGE — NATURE ISLE DESIGN ===== */

/* Hero */
.dom-hero {
    min-height: 100vh;
    padding: 140px 0 100px;
    position: relative;
    display: flex;
    align-items: center;
    background: var(--charcoal);
    overflow: hidden;
}
.dom-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 80% 50% at 20% 60%, rgba(128,0,32,.2) 0%, transparent 70%),
        radial-gradient(ellipse 60% 40% at 75% 25%, rgba(201,169,98,.08) 0%, transparent 60%);
}
.dom-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='120' height='60' viewBox='0 0 120 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 30 Q30 0 60 30 Q90 60 120 30' fill='none' stroke='%23C9A962' stroke-opacity='0.03' stroke-width='1.5'/%3E%3C/svg%3E");
    pointer-events: none;
}
.dom-hero .container { position: relative; z-index: 1; }
.dom-hero-grid {
    display: grid;
    grid-template-columns: 1fr 460px;
    gap: 60px;
    align-items: center;
}
.dom-hero-badge {
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
.dom-hero-badge::before {
    content: '';
    width: 6px;
    height: 6px;
    background: var(--gold);
    border-radius: 50%;
    animation: pulse 2s infinite;
}
.dom-hero h1 {
    color: var(--white);
    font-size: clamp(2.8rem, 5.5vw, 4.2rem);
    line-height: 1.1;
    margin-bottom: 16px;
}
.dom-hero h1 span {
    display: block;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.dom-hero-subtitle {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.35rem;
    font-weight: 500;
    font-style: italic;
    color: var(--gold-light);
    margin-bottom: 20px;
    opacity: .9;
}
.dom-hero-lead {
    font-size: 1rem;
    line-height: 1.85;
    color: rgba(255,255,255,.8);
    max-width: 540px;
    margin-bottom: 0;
}
.dom-hero-highlights {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 40px;
    padding-top: 36px;
    border-top: 1px solid rgba(201,169,98,.15);
}
.dom-highlight {
    text-align: center;
    padding: 20px 12px;
    background: rgba(201,169,98,.06);
    border: 1px solid rgba(201,169,98,.12);
    border-radius: 20px;
    transition: all .3s ease;
}
.dom-highlight:hover {
    background: rgba(201,169,98,.12);
    border-color: rgba(201,169,98,.25);
    transform: translateY(-3px);
}
.dom-highlight-icon {
    width: 44px;
    height: 44px;
    margin: 0 auto 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 50%;
}
.dom-highlight-icon svg { width: 22px; height: 22px; color: var(--charcoal); }
.dom-highlight-label {
    font-size: 12px;
    font-weight: 600;
    color: var(--white);
    letter-spacing: .5px;
    line-height: 1.4;
}

/* ===== PROCESS — Zigzag Alternating ===== */
.dom-process {
    padding: 100px 0;
    background: var(--white);
}
.dom-process .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 70px;
}
.dom-process .section-header h2 { color: var(--charcoal); margin-bottom: 16px; }
.dom-zigzag {
    max-width: 900px;
    margin: 0 auto;
    position: relative;
}
.dom-zigzag::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background: linear-gradient(180deg, var(--gold), var(--burgundy), var(--gold));
    opacity: .25;
    transform: translateX(-50%);
}
.dom-zigzag-step {
    display: grid;
    grid-template-columns: 1fr 80px 1fr;
    align-items: center;
    margin-bottom: 32px;
}
.dom-zigzag-step:last-child { margin-bottom: 0; }
.dom-zigzag-content {
    padding: 28px 32px;
    background: var(--cream);
    border-radius: 20px;
    border: 1px solid rgba(152,131,88,.1);
    transition: all .3s ease;
}
.dom-zigzag-content:hover {
    box-shadow: 0 12px 32px rgba(0,0,0,.08);
    transform: translateY(-2px);
}
.dom-zigzag-step:nth-child(odd) .dom-zigzag-content { grid-column: 1; }
.dom-zigzag-step:nth-child(even) .dom-zigzag-content { grid-column: 3; }
.dom-zigzag-number {
    grid-column: 2;
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--white);
    border: 2px solid rgba(152,131,88,.25);
    border-radius: 50%;
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--burgundy);
    z-index: 1;
    margin: 0 auto;
    transition: all .4s ease;
}
.dom-zigzag-step:hover .dom-zigzag-number {
    background: var(--burgundy);
    color: var(--white);
    border-color: var(--burgundy);
    box-shadow: 0 8px 24px rgba(128,0,32,.2);
}
.dom-zigzag-step:nth-child(odd) .dom-zigzag-spacer { grid-column: 3; }
.dom-zigzag-step:nth-child(even) .dom-zigzag-spacer { grid-column: 1; }
.dom-zigzag-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.15rem;
    font-weight: 600;
    color: var(--charcoal);
    margin-bottom: 6px;
}
.dom-zigzag-desc {
    font-size: 14px;
    color: var(--text-muted);
    line-height: 1.6;
    margin: 0;
}

/* ===== ABOUT + KEY FEATURES ===== */
.dom-about {
    padding: 100px 0;
    background: var(--cream);
    position: relative;
    overflow: hidden;
}
.dom-about::before {
    content: '';
    position: absolute;
    bottom: -150px;
    left: -150px;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(201,169,98,.06) 0%, transparent 70%);
    border-radius: 50%;
}
.dom-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
}
.dom-about-content h2 { color: var(--charcoal); margin-bottom: 24px; }
.dom-about-content p { font-size: 1rem; line-height: 1.85; }
.dom-features-card {
    background: var(--white);
    border-radius: 28px;
    padding: 44px 36px;
    box-shadow: 0 20px 60px rgba(0,0,0,.06);
    border: 1px solid rgba(152,131,88,.1);
    position: relative;
}
.dom-features-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 32px;
    right: 32px;
    height: 4px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold));
    border-radius: 0 0 4px 4px;
}
.dom-features-card h3 { color: var(--charcoal); margin-bottom: 28px; font-size: 1.5rem; }
.dom-feature-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 18px 0;
    border-bottom: 1px solid rgba(152,131,88,.1);
}
.dom-feature-item:last-child { border-bottom: none; padding-bottom: 0; }
.dom-feature-icon {
    flex-shrink: 0;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--burgundy) 0%, var(--burgundy-dark) 100%);
    border-radius: 50%;
}
.dom-feature-icon svg { width: 18px; height: 18px; color: var(--white); }
.dom-feature-text { font-size: 15px; color: var(--text-dark); line-height: 1.6; font-weight: 500; }

/* ===== ELIGIBILITY ===== */
.dom-eligibility {
    padding: 100px 0;
    background: var(--white);
}
.dom-eligibility-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}
.dom-eligibility-content h2 { color: var(--charcoal); margin-bottom: 20px; }
.dom-eligibility-list {
    list-style: none;
    padding: 0;
    margin: 32px 0 0;
}
.dom-eligibility-list li {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 16px 0;
    border-bottom: 1px solid rgba(152,131,88,.12);
}
.dom-eligibility-list li:last-child { border-bottom: none; }
.dom-eligibility-check {
    flex-shrink: 0;
    width: 28px;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 50%;
}
.dom-eligibility-check svg { width: 14px; height: 14px; color: var(--charcoal); }
.dom-eligibility-text { font-size: 15px; color: var(--text-dark); line-height: 1.65; }
.dom-cta-card {
    background: linear-gradient(135deg, var(--charcoal) 0%, var(--charcoal-light) 100%);
    border-radius: 28px;
    padding: 52px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.dom-cta-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold), var(--burgundy));
}
.dom-cta-card::after {
    content: '';
    position: absolute;
    bottom: -80px;
    right: -80px;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(201,169,98,.08) 0%, transparent 70%);
    border-radius: 50%;
}
.dom-cta-card h3 { color: var(--white); font-size: 1.75rem; margin-bottom: 16px; }
.dom-cta-card .btn { position: relative; z-index: 1; }

/* ===== FAQ — Dark Theme ===== */
.dom-faq {
    padding: 100px 0;
    background: var(--charcoal);
    position: relative;
}
.dom-faq::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--gold), transparent);
}
.dom-faq .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 60px;
}
.dom-faq .section-header h2 { color: var(--white); margin-bottom: 16px; }
.dom-faq-list { max-width: 800px; margin: 0 auto; }
.dom-faq-item {
    background: var(--charcoal-light);
    border-radius: 16px;
    margin-bottom: 16px;
    overflow: hidden;
    border: 1px solid rgba(201,169,98,.1);
    transition: all .3s ease;
}
.dom-faq-item:hover { border-color: rgba(201,169,98,.3); }
.dom-faq-question {
    padding: 24px 30px;
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.2rem;
    font-weight: 600;
    color: var(--white);
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: color .3s ease;
}
.dom-faq-question:hover { color: var(--gold); }
.dom-faq-toggle {
    width: 36px;
    height: 36px;
    flex-shrink: 0;
    position: relative;
    background: rgba(201,169,98,.1);
    border-radius: 50%;
    transition: all .3s ease;
}
.dom-faq-toggle::before {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 14px; height: 2px;
    background: var(--gold);
    transform: translate(-50%, -50%);
}
.dom-faq-toggle::after {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 2px; height: 14px;
    background: var(--gold);
    transform: translate(-50%, -50%);
    transition: all .3s ease;
}
.dom-faq-item.active .dom-faq-toggle {
    background: var(--gold);
    transform: rotate(45deg);
}
.dom-faq-item.active .dom-faq-toggle::before,
.dom-faq-item.active .dom-faq-toggle::after { background: var(--charcoal); }
.dom-faq-answer { max-height: 0; overflow: hidden; transition: max-height .4s ease; }
.dom-faq-answer-inner {
    padding: 0 30px 24px;
    color: rgba(255,255,255,.7);
    font-size: 15px;
    line-height: 1.85;
}
.dom-faq-item.active .dom-faq-answer { max-height: 300px; }

/* ===== FINAL CTA ===== */
.dom-final-cta {
    padding: 80px 0;
    background: var(--burgundy);
    position: relative;
    overflow: hidden;
    text-align: center;
}
.dom-final-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='120' height='60' viewBox='0 0 120 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 30 Q30 0 60 30 Q90 60 120 30' fill='none' stroke='%23ffffff' stroke-opacity='0.04' stroke-width='1.5'/%3E%3C/svg%3E");
    pointer-events: none;
}
.dom-final-cta .container { position: relative; z-index: 1; }
.dom-final-cta h2 { color: var(--white); margin-bottom: 16px; }

/* ===== RESPONSIVE ===== */
@@media (max-width: 1024px) {
    .dom-hero-grid { grid-template-columns: 1fr; gap: 48px; text-align: center; }
    .dom-hero-lead { margin: 0 auto; }
    .hero-form { max-width: 520px; margin: 0 auto; }
    .dom-about-grid,
    .dom-eligibility-grid { grid-template-columns: 1fr; gap: 48px; }
    .dom-zigzag::before { display: none; }
    .dom-zigzag-step {
        display: flex;
        flex-direction: row;
        gap: 20px;
        align-items: flex-start;
    }
    .dom-zigzag-step:nth-child(odd) .dom-zigzag-content,
    .dom-zigzag-step:nth-child(even) .dom-zigzag-content { grid-column: auto; }
    .dom-zigzag-number { flex-shrink: 0; width: 56px; height: 56px; font-size: 1.2rem; }
    .dom-zigzag-spacer { display: none; }
}
@@media (max-width: 768px) {
    .dom-hero { min-height: auto; padding: 110px 0 60px; }
    .dom-process, .dom-about, .dom-eligibility, .dom-faq, .dom-final-cta { padding: 60px 0; }
    .dom-hero-highlights { grid-template-columns: 1fr; gap: 12px; }
    .dom-highlight { flex-direction: row; display: flex; align-items: center; gap: 14px; text-align: left; padding: 14px 18px; }
    .dom-highlight-icon { margin: 0; }
    .hero-form { padding: 28px 20px; }
    .form-row { grid-template-columns: 1fr; }
    .dom-features-card { padding: 32px 24px; }
    .dom-cta-card { padding: 40px 24px; }
}
@@media (max-width: 480px) {
    .dom-zigzag-content { padding: 20px; }
    .dom-zigzag-number { width: 48px; height: 48px; font-size: 1.1rem; }
}
</style>

<!-- ===== HERO ===== -->
<section class="dom-hero">
    <div class="container">
        <div class="dom-hero-grid">
            <div class="dom-hero-content">
                <div class="dom-hero-badge">Government-Approved Citizenship Program</div>
                <h1>Dominica Citizenship by<span>Investment Program</span></h1>
                <p class="dom-hero-subtitle">A Government-Regulated Pathway to Second Citizenship in Dominica</p>
                <p class="dom-hero-lead">The Dominica Citizenship by Investment program is a government-established initiative that allows eligible foreign applicants to obtain citizenship of Dominica through a qualifying economic contribution. The program operates under national legislation and is administered by authorized government bodies.</p>
                <p class="dom-hero-lead" style="margin-top:-8px">Citizenship is granted only after due diligence screening, background verification, and formal approval by the government of Dominica.</p>
                <div class="dom-hero-highlights">
                    <div class="dom-highlight">
                        <div class="dom-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                        </div>
                        <span class="dom-highlight-label">Government-Regulated Program</span>
                    </div>
                    <div class="dom-highlight">
                        <div class="dom-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        </div>
                        <span class="dom-highlight-label">Due Diligence & Compliance</span>
                    </div>
                    <div class="dom-highlight">
                        <div class="dom-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                        </div>
                        <span class="dom-highlight-label">Family Inclusion Eligible</span>
                    </div>
                </div>
            </div>
            <x-landing-form
                source="dominica-citizenship-by-investment"
                consultancy="dominica-citizenship-by-investment"
                title="Check Eligibility for the Dominica Citizenship Program"
                subtitle="Share your details and our experts will assess your eligibility."
            >Check Eligibility</x-landing-form>
        </div>
    </div>
</section>

<!-- ===== PROCESS — Zigzag ===== -->
<section class="dom-process">
    <div class="container">
        <div class="section-header">
            <h2>How Dominica Citizenship by Investment Works</h2>
            <p>The program generally follows a regulated process. Each application is reviewed individually under the program's legislative framework.</p>
        </div>
        <div class="dom-zigzag">
            <div class="dom-zigzag-step">
                <div class="dom-zigzag-content">
                    <div class="dom-zigzag-title">Initial Eligibility Assessment</div>
                    <p class="dom-zigzag-desc">Initial eligibility assessment</p>
                </div>
                <div class="dom-zigzag-number">01</div>
                <div class="dom-zigzag-spacer"></div>
            </div>
            <div class="dom-zigzag-step">
                <div class="dom-zigzag-spacer"></div>
                <div class="dom-zigzag-number">02</div>
                <div class="dom-zigzag-content">
                    <div class="dom-zigzag-title">Documentation Submission</div>
                    <p class="dom-zigzag-desc">Submission of required documentation</p>
                </div>
            </div>
            <div class="dom-zigzag-step">
                <div class="dom-zigzag-content">
                    <div class="dom-zigzag-title">Due Diligence & Background Checks</div>
                    <p class="dom-zigzag-desc">Government due diligence and background checks</p>
                </div>
                <div class="dom-zigzag-number">03</div>
                <div class="dom-zigzag-spacer"></div>
            </div>
            <div class="dom-zigzag-step">
                <div class="dom-zigzag-spacer"></div>
                <div class="dom-zigzag-number">04</div>
                <div class="dom-zigzag-content">
                    <div class="dom-zigzag-title">Approval in Principle</div>
                    <p class="dom-zigzag-desc">Approval in principle by Dominican authorities</p>
                </div>
            </div>
            <div class="dom-zigzag-step">
                <div class="dom-zigzag-content">
                    <div class="dom-zigzag-title">Economic Contribution</div>
                    <p class="dom-zigzag-desc">Completion of the qualifying economic contribution</p>
                </div>
                <div class="dom-zigzag-number">05</div>
                <div class="dom-zigzag-spacer"></div>
            </div>
            <div class="dom-zigzag-step">
                <div class="dom-zigzag-spacer"></div>
                <div class="dom-zigzag-number">06</div>
                <div class="dom-zigzag-content">
                    <div class="dom-zigzag-title">Citizenship & Passport</div>
                    <p class="dom-zigzag-desc">Issuance of citizenship certificate and passport</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== ABOUT + KEY FEATURES ===== -->
<section class="dom-about">
    <div class="container">
        <div class="dom-about-grid">
            <div class="dom-about-content">
                <h2>What Is the Dominica Citizenship by Investment Program?</h2>
                <p>The Dominica Citizenship by Investment program enables foreign nationals to acquire Dominican citizenship by making an approved contribution under a structured legal framework. The program is enacted under the laws of Dominica and is designed to support national development through regulated investment.</p>
                <p>Applicants must meet eligibility standards and successfully pass government due diligence procedures before citizenship is conferred.</p>
            </div>
            <div class="dom-features-card">
                <h3>Key Features of Dominica Citizenship by Investment</h3>
                <div class="dom-feature-item">
                    <div class="dom-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                    </div>
                    <span class="dom-feature-text">Government-regulated second citizenship program</span>
                </div>
                <div class="dom-feature-item">
                    <div class="dom-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <span class="dom-feature-text">Structured due diligence and compliance procedures</span>
                </div>
                <div class="dom-feature-item">
                    <div class="dom-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </div>
                    <span class="dom-feature-text">Citizenship issued under Dominican national law</span>
                </div>
                <div class="dom-feature-item">
                    <div class="dom-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <span class="dom-feature-text">Eligibility for inclusion of immediate family members</span>
                </div>
                <div class="dom-feature-item">
                    <div class="dom-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                    </div>
                    <span class="dom-feature-text">Official passport issued upon approval</span>
                </div>
                <p style="margin-top:24px;padding:16px 20px;background:var(--cream);border-radius:12px;border-left:3px solid var(--gold);font-size:13px;color:var(--text-muted);line-height:1.65;font-style:italic">All approvals are subject to regulatory review and final government decision.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== ELIGIBILITY ===== -->
<section class="dom-eligibility">
    <div class="container">
        <div class="dom-eligibility-grid">
            <div class="dom-eligibility-content">
                <h2>Who Can Apply for Dominica Citizenship by Investment?</h2>
                <p>Eligibility is determined by the laws governing the program. Applicants are generally required to:</p>
                <ul class="dom-eligibility-list">
                    <li>
                        <span class="dom-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="dom-eligibility-text">Meet financial qualification standards</span>
                    </li>
                    <li>
                        <span class="dom-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="dom-eligibility-text">Provide verified source of funds documentation</span>
                    </li>
                    <li>
                        <span class="dom-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="dom-eligibility-text">Pass strict background and due diligence checks</span>
                    </li>
                    <li>
                        <span class="dom-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="dom-eligibility-text">Comply with official application procedures</span>
                    </li>
                </ul>
                <p style="margin-top:24px">Final approval is granted solely by the relevant government authority in Dominica.</p>
            </div>
            <div class="dom-cta-card">
                <h3>Check Eligibility for the Dominica Citizenship Program</h3>
                <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="dom-faq">
    <div class="container">
        <div class="section-header">
            <h2>Dominica Citizenship by Investment FAQs</h2>
        </div>
        <div class="dom-faq-list">
            <div class="dom-faq-item faq-item active">
                <div class="dom-faq-question faq-question">Is Dominica citizenship by investment legal?<span class="dom-faq-toggle"></span></div>
                <div class="dom-faq-answer"><div class="dom-faq-answer-inner">Yes. The program operates under national legislation and is administered by authorized government bodies in Dominica.</div></div>
            </div>
            <div class="dom-faq-item faq-item">
                <div class="dom-faq-question faq-question">Does approval depend on government review?<span class="dom-faq-toggle"></span></div>
                <div class="dom-faq-answer"><div class="dom-faq-answer-inner">Yes. All applications undergo due diligence and must receive formal government approval before citizenship is granted.</div></div>
            </div>
            <div class="dom-faq-item faq-item">
                <div class="dom-faq-question faq-question">Can families apply together under the program?<span class="dom-faq-toggle"></span></div>
                <div class="dom-faq-answer"><div class="dom-faq-answer-inner">Yes. Eligible applicants may include immediate family members under one structured application.</div></div>
            </div>
            <div class="dom-faq-item">
                <div class="dom-faq-question faq-question">Is the passport issued after citizenship approval?<span class="dom-faq-toggle"></span></div>
                <div class="dom-faq-answer"><div class="dom-faq-answer-inner">Yes. A Dominican passport is issued once citizenship has been officially conferred.</div></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="dom-final-cta">
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
