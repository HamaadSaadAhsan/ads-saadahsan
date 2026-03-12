@extends('layouts.landing')

@section('meta_title', 'Dominica Passport by Investment | Legal Second Passport Through Citizenship')
@section('meta_description', 'Learn how a Dominica passport by investment is obtained through the government-approved citizenship program under Dominican law.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/dominica-passport-by-investment">
<meta property="og:url" content="https://ads.saadahsan.com/dominica-passport-by-investment">
<meta property="og:type" content="website">
<meta property="og:title" content="Dominica Passport by Investment | Legal Second Passport Through Citizenship">
<meta property="og:description" content="Learn how a Dominica passport by investment is obtained through the government-approved citizenship program under Dominican law.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Dominica Passport by Investment | Legal Second Passport Through Citizenship">
<meta name="twitter:description" content="Learn how a Dominica passport by investment is obtained through the government-approved citizenship program under Dominican law.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Dominica Passport by Investment | Legal Second Passport Through Citizenship","description":"Learn how a Dominica passport by investment is obtained through the government-approved citizenship program under Dominican law.","url":"https://ads.saadahsan.com/dominica-passport-by-investment","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"Can a Dominica passport be purchased directly?","acceptedAnswer":{"@@type":"Answer","text":"No. A passport is issued only after citizenship has been legally granted under the investment program."}},
    {"@@type":"Question","name":"Is the Dominica passport by investment legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. It is issued under national legislation after formal government approval."}},
    {"@@type":"Question","name":"Does approval require government review?","acceptedAnswer":{"@@type":"Answer","text":"Yes. All applications undergo due diligence and regulatory screening before citizenship and passport issuance."}},
    {"@@type":"Question","name":"Can family members obtain a passport under the same application?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Eligible applicants may include immediate family members under one structured citizenship application."}}
  ]
}
</script>
@endpush

@section('content')
<style>
/* ===== DOMINICA PASSPORT — GATEWAY SEAL ===== */

.dpi-hero {
    min-height: 100vh;
    padding: 140px 0 100px;
    position: relative;
    display: flex;
    align-items: center;
    background: var(--charcoal);
    overflow: hidden;
}
.dpi-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 55% 55% at 25% 55%, rgba(128,0,32,.18) 0%, transparent 65%),
        radial-gradient(ellipse 45% 40% at 75% 25%, rgba(201,169,98,.1) 0%, transparent 55%);
}
.dpi-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='10' y='10' width='40' height='40' rx='4' fill='none' stroke='%23C9A962' stroke-opacity='0.025' stroke-width='0.5'/%3E%3Cline x1='30' y1='10' x2='30' y2='50' stroke='%23C9A962' stroke-opacity='0.015' stroke-width='0.5'/%3E%3C/svg%3E");
    pointer-events: none;
}
.dpi-hero .container { position: relative; z-index: 1; }
.dpi-hero-grid {
    display: grid;
    grid-template-columns: 1fr 460px;
    gap: 60px;
    align-items: center;
}
.dpi-hero-badge {
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
.dpi-hero-badge::before {
    content: '';
    width: 6px;
    height: 6px;
    background: var(--gold);
    border-radius: 50%;
    animation: pulse 2s infinite;
}
.dpi-hero h1 {
    color: var(--white);
    font-size: clamp(2.8rem, 5.5vw, 4.2rem);
    line-height: 1.1;
    margin-bottom: 16px;
}
.dpi-hero h1 span {
    display: block;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.dpi-hero-subtitle {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.35rem;
    font-weight: 500;
    font-style: italic;
    color: var(--gold-light);
    margin-bottom: 20px;
    opacity: .9;
}
.dpi-hero-lead {
    font-size: 1rem;
    line-height: 1.85;
    color: rgba(255,255,255,.8);
    max-width: 540px;
    margin-bottom: 0;
}
.dpi-hero-highlights {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 40px;
    padding-top: 36px;
    border-top: 1px solid rgba(201,169,98,.15);
}
.dpi-highlight {
    text-align: center;
    padding: 20px 12px;
    background: rgba(201,169,98,.06);
    border: 1px solid rgba(201,169,98,.12);
    border-radius: 16px;
    transition: all .3s ease;
}
.dpi-highlight:hover {
    background: rgba(201,169,98,.12);
    border-color: rgba(201,169,98,.25);
    transform: translateY(-3px);
}
.dpi-highlight-icon {
    width: 44px;
    height: 44px;
    margin: 0 auto 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 12px;
}
.dpi-highlight-icon svg { width: 22px; height: 22px; color: var(--charcoal); }
.dpi-highlight-label {
    font-size: 12px;
    font-weight: 600;
    color: var(--white);
    letter-spacing: .5px;
    line-height: 1.4;
}

/* ===== PROCESS — Passport Stages ===== */
.dpi-process {
    padding: 100px 0;
    background: var(--white);
}
.dpi-process .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 60px;
}
.dpi-process .section-header h2 {
    color: var(--charcoal);
    margin-bottom: 16px;
}
.dpi-stages {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    max-width: 960px;
    margin: 0 auto;
}
.dpi-stage {
    background: var(--cream);
    border-radius: 20px;
    padding: 36px 28px;
    position: relative;
    border: 1px solid rgba(152,131,88,.1);
    transition: all .4s ease;
}
.dpi-stage:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 40px rgba(0,0,0,.08);
    border-color: rgba(152,131,88,.25);
}
.dpi-stage-num {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, var(--burgundy), var(--burgundy-dark));
    border-radius: 14px;
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--white);
    margin-bottom: 20px;
}
.dpi-stage-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.15rem;
    font-weight: 600;
    color: var(--charcoal);
    margin-bottom: 8px;
}
.dpi-stage-desc {
    font-size: 14px;
    color: var(--text-muted);
    line-height: 1.65;
    margin: 0;
}

/* ===== ABOUT + LEGAL FRAMEWORK ===== */
.dpi-about {
    padding: 100px 0;
    background: var(--cream);
    position: relative;
    overflow: hidden;
}
.dpi-about::before {
    content: '';
    position: absolute;
    top: -100px;
    right: -100px;
    width: 350px;
    height: 350px;
    background: radial-gradient(circle, rgba(128,0,32,.04) 0%, transparent 70%);
    border-radius: 50%;
}
.dpi-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
}
.dpi-about-content h2 {
    color: var(--charcoal);
    margin-bottom: 24px;
}
.dpi-about-content p {
    font-size: 1rem;
    line-height: 1.85;
}
.dpi-legal-card {
    background: var(--white);
    border-radius: 24px;
    padding: 44px 36px;
    box-shadow: 0 20px 60px rgba(0,0,0,.06);
    border: 1px solid rgba(152,131,88,.1);
    position: relative;
}
.dpi-legal-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 32px;
    right: 32px;
    height: 4px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold));
    border-radius: 0 0 4px 4px;
}
.dpi-legal-card h3 {
    color: var(--charcoal);
    margin-bottom: 28px;
    font-size: 1.5rem;
}
.dpi-legal-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 18px 0;
    border-bottom: 1px solid rgba(152,131,88,.1);
}
.dpi-legal-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}
.dpi-legal-icon {
    flex-shrink: 0;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--burgundy) 0%, var(--burgundy-dark) 100%);
    border-radius: 10px;
}
.dpi-legal-icon svg { width: 18px; height: 18px; color: var(--white); }
.dpi-legal-text {
    font-size: 15px;
    color: var(--text-dark);
    line-height: 1.6;
    font-weight: 500;
}

/* ===== ELIGIBILITY ===== */
.dpi-eligibility {
    padding: 100px 0;
    background: var(--white);
}
.dpi-eligibility-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}
.dpi-eligibility-content h2 {
    color: var(--charcoal);
    margin-bottom: 20px;
}
.dpi-eligibility-list {
    list-style: none;
    padding: 0;
    margin: 32px 0 0;
}
.dpi-eligibility-list li {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 16px 0;
    border-bottom: 1px solid rgba(152,131,88,.12);
}
.dpi-eligibility-list li:last-child { border-bottom: none; }
.dpi-eligibility-check {
    flex-shrink: 0;
    width: 28px;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 50%;
}
.dpi-eligibility-check svg { width: 14px; height: 14px; color: var(--charcoal); }
.dpi-eligibility-text {
    font-size: 15px;
    color: var(--text-dark);
    line-height: 1.65;
}
.dpi-cta-card {
    background: linear-gradient(135deg, var(--charcoal) 0%, var(--charcoal-light) 100%);
    border-radius: 24px;
    padding: 52px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.dpi-cta-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold), var(--burgundy));
}
.dpi-cta-card::after {
    content: '';
    position: absolute;
    bottom: -80px;
    right: -80px;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(201,169,98,.08) 0%, transparent 70%);
    border-radius: 50%;
}
.dpi-cta-card h3 {
    color: var(--white);
    font-size: 1.75rem;
    margin-bottom: 16px;
}
.dpi-cta-card .btn { position: relative; z-index: 1; }

/* ===== FAQ ===== */
.dpi-faq {
    padding: 100px 0;
    background: var(--cream);
}
.dpi-faq .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 60px;
}
.dpi-faq .section-header h2 {
    color: var(--charcoal);
    margin-bottom: 16px;
}
.dpi-faq-list {
    max-width: 800px;
    margin: 0 auto;
}
.dpi-faq-item {
    background: var(--white);
    border-radius: 16px;
    margin-bottom: 16px;
    overflow: hidden;
    border: 1px solid rgba(152,131,88,.12);
    transition: all .3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,.03);
}
.dpi-faq-item:hover {
    border-color: rgba(152,131,88,.3);
    box-shadow: 0 8px 24px rgba(0,0,0,.06);
}
.dpi-faq-question {
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
.dpi-faq-question:hover { color: var(--burgundy); }
.dpi-faq-toggle {
    width: 36px;
    height: 36px;
    flex-shrink: 0;
    position: relative;
    background: var(--cream);
    border-radius: 50%;
    transition: all .3s ease;
}
.dpi-faq-toggle::before {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 14px; height: 2px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
}
.dpi-faq-toggle::after {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 2px; height: 14px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
    transition: all .3s ease;
}
.dpi-faq-item.active .dpi-faq-toggle {
    background: var(--burgundy);
    transform: rotate(45deg);
}
.dpi-faq-item.active .dpi-faq-toggle::before,
.dpi-faq-item.active .dpi-faq-toggle::after { background: var(--white); }
.dpi-faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height .4s ease;
}
.dpi-faq-answer-inner {
    padding: 0 30px 24px;
    color: var(--text-muted);
    font-size: 15px;
    line-height: 1.85;
}
.dpi-faq-item.active .dpi-faq-answer { max-height: 300px; }

/* ===== FINAL CTA ===== */
.dpi-final-cta {
    padding: 80px 0;
    background: var(--burgundy);
    position: relative;
    overflow: hidden;
    text-align: center;
}
.dpi-final-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Crect x='10' y='10' width='40' height='40' rx='4' fill='none' stroke='%23ffffff' stroke-opacity='0.03' stroke-width='0.5'/%3E%3C/svg%3E");
    pointer-events: none;
}
.dpi-final-cta .container { position: relative; z-index: 1; }
.dpi-final-cta h2 { color: var(--white); margin-bottom: 16px; }
.dpi-final-cta p {
    color: rgba(255,255,255,.8);
    font-size: 1.05rem;
    max-width: 560px;
    margin: 0 auto 32px;
}

/* ===== RESPONSIVE ===== */
@@media (max-width: 1024px) {
    .dpi-hero-grid { grid-template-columns: 1fr; gap: 48px; text-align: center; }
    .dpi-hero-lead { margin: 0 auto; }
    .dpi-hero-highlights { justify-content: center; }
    .hero-form { max-width: 520px; margin: 0 auto; }
    .dpi-about-grid,
    .dpi-eligibility-grid { grid-template-columns: 1fr; gap: 48px; }
    .dpi-stages { grid-template-columns: repeat(2, 1fr); }
}
@@media (max-width: 768px) {
    .dpi-hero { min-height: auto; padding: 110px 0 60px; }
    .dpi-process, .dpi-about, .dpi-eligibility, .dpi-faq, .dpi-final-cta { padding: 60px 0; }
    .dpi-hero-highlights { grid-template-columns: 1fr; gap: 12px; }
    .dpi-highlight { flex-direction: row; display: flex; align-items: center; gap: 14px; text-align: left; padding: 14px 18px; }
    .dpi-highlight-icon { margin: 0; }
    .hero-form { padding: 28px 20px; }
    .form-row { grid-template-columns: 1fr; }
    .dpi-legal-card { padding: 32px 24px; }
    .dpi-cta-card { padding: 40px 24px; }
    .dpi-stages { grid-template-columns: 1fr; }
}
</style>

<!-- ===== HERO ===== -->
<section class="dpi-hero">
    <div class="container">
        <div class="dpi-hero-grid">
            <div class="dpi-hero-content">
                <div class="dpi-hero-badge">Government-Approved Passport Program</div>
                <h1>Dominica Passport by Investment<span>Through Legal Citizenship</span></h1>
                <p class="dpi-hero-subtitle">Government-Approved Pathway to Obtain a Dominican Passport</p>
                <p class="dpi-hero-lead">A Dominica passport by investment is issued after an individual legally acquires citizenship of Dominica through the country's government-regulated citizenship by investment program. The passport itself is not purchased directly; it is granted only after citizenship has been formally approved under Dominican national law.</p>
                <p class="dpi-hero-lead" style="margin-top:-8px">All applications undergo due diligence, regulatory review, and official authorization before citizenship and passport issuance.</p>
                <div class="dpi-hero-highlights">
                    <div class="dpi-highlight">
                        <div class="dpi-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                        </div>
                        <span class="dpi-highlight-label">Official Passport Issuance</span>
                    </div>
                    <div class="dpi-highlight">
                        <div class="dpi-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        </div>
                        <span class="dpi-highlight-label">Legal Citizenship Framework</span>
                    </div>
                    <div class="dpi-highlight">
                        <div class="dpi-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                        </div>
                        <span class="dpi-highlight-label">Family Inclusion Eligible</span>
                    </div>
                </div>
            </div>
            <x-landing-form
                source="dominica-passport-by-investment"
                consultancy="dominica-passport-by-investment"
                title="Request Information About the Dominica Passport by Investment Program"
                subtitle="Share your details and our experts will assess your eligibility."
            >Request Information</x-landing-form>
        </div>
    </div>
</section>

<!-- ===== PROCESS — Passport Stages ===== -->
<section class="dpi-process">
    <div class="container">
        <div class="section-header">
            <h2>How the Dominica Passport Is Obtained</h2>
            <p>The passport is issued only after formal citizenship approval.</p>
        </div>
        <div class="dpi-stages">
            <div class="dpi-stage">
                <div class="dpi-stage-num">01</div>
                <div class="dpi-stage-title">Eligibility Assessment</div>
                <p class="dpi-stage-desc">Eligibility assessment under the citizenship program</p>
            </div>
            <div class="dpi-stage">
                <div class="dpi-stage-num">02</div>
                <div class="dpi-stage-title">Documentation & Verification</div>
                <p class="dpi-stage-desc">Submission of documentation and identity verification</p>
            </div>
            <div class="dpi-stage">
                <div class="dpi-stage-num">03</div>
                <div class="dpi-stage-title">Due Diligence & Background</div>
                <p class="dpi-stage-desc">Government due diligence and background checks</p>
            </div>
            <div class="dpi-stage">
                <div class="dpi-stage-num">04</div>
                <div class="dpi-stage-title">Approval in Principle</div>
                <p class="dpi-stage-desc">Approval in principle by Dominican authorities</p>
            </div>
            <div class="dpi-stage">
                <div class="dpi-stage-num">05</div>
                <div class="dpi-stage-title">Qualifying Contribution</div>
                <p class="dpi-stage-desc">Completion of the qualifying contribution</p>
            </div>
            <div class="dpi-stage">
                <div class="dpi-stage-num">06</div>
                <div class="dpi-stage-title">Citizenship & Passport</div>
                <p class="dpi-stage-desc">Issuance of citizenship certificate and Dominican passport</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== ABOUT + LEGAL FRAMEWORK ===== -->
<section class="dpi-about">
    <div class="container">
        <div class="dpi-about-grid">
            <div class="dpi-about-content">
                <h2>What Is a Dominica Passport by Investment?</h2>
                <p>The term Dominica passport by investment refers to the passport issued to individuals who have successfully obtained Dominican citizenship through a qualifying economic contribution under the country's legal framework.</p>
                <p>Citizenship is granted under legislation enacted by the Government of Dominica, and the passport serves as official proof of nationality.</p>
            </div>
            <div class="dpi-legal-card">
                <h3>Legal Framework Governing Passport Issuance</h3>
                <div class="dpi-legal-item">
                    <div class="dpi-legal-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                    </div>
                    <span class="dpi-legal-text">Governed by national legislation</span>
                </div>
                <div class="dpi-legal-item">
                    <div class="dpi-legal-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <span class="dpi-legal-text">Administered by authorized government departments</span>
                </div>
                <div class="dpi-legal-item">
                    <div class="dpi-legal-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </div>
                    <span class="dpi-legal-text">Strict compliance and financial transparency requirements</span>
                </div>
                <div class="dpi-legal-item">
                    <div class="dpi-legal-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                    </div>
                    <span class="dpi-legal-text">Comprehensive background screening required</span>
                </div>
                <div class="dpi-legal-item">
                    <div class="dpi-legal-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <span class="dpi-legal-text">Subject to final government decision</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== ELIGIBILITY ===== -->
<section class="dpi-eligibility">
    <div class="container">
        <div class="dpi-eligibility-grid">
            <div class="dpi-eligibility-content">
                <h2>Who Can Apply for a Dominica Passport by Investment?</h2>
                <p>Eligibility depends on the legal requirements of the citizenship program. Applicants are generally required to:</p>
                <ul class="dpi-eligibility-list">
                    <li>
                        <span class="dpi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="dpi-eligibility-text">Meet financial qualification standards</span>
                    </li>
                    <li>
                        <span class="dpi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="dpi-eligibility-text">Demonstrate lawful source of funds</span>
                    </li>
                    <li>
                        <span class="dpi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="dpi-eligibility-text">Pass thorough due diligence and background checks</span>
                    </li>
                    <li>
                        <span class="dpi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="dpi-eligibility-text">Comply with official application procedures</span>
                    </li>
                </ul>
                <p style="margin-top:24px">Final approval is granted solely by the relevant government authority in Dominica.</p>
            </div>
            <div class="dpi-cta-card">
                <h3>Request Information About the Dominica Passport by Investment Program</h3>
                <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Request Information</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="dpi-faq">
    <div class="container">
        <div class="section-header">
            <h2>Dominica Passport by Investment FAQs</h2>
        </div>
        <div class="dpi-faq-list">
            <div class="dpi-faq-item faq-item active">
                <div class="dpi-faq-question faq-question">Can a Dominica passport be purchased directly?<span class="dpi-faq-toggle"></span></div>
                <div class="dpi-faq-answer"><div class="dpi-faq-answer-inner">No. A passport is issued only after citizenship has been legally granted under the investment program.</div></div>
            </div>
            <div class="dpi-faq-item faq-item">
                <div class="dpi-faq-question faq-question">Is the Dominica passport by investment legal?<span class="dpi-faq-toggle"></span></div>
                <div class="dpi-faq-answer"><div class="dpi-faq-answer-inner">Yes. It is issued under national legislation after formal government approval.</div></div>
            </div>
            <div class="dpi-faq-item faq-item">
                <div class="dpi-faq-question faq-question">Does approval require government review?<span class="dpi-faq-toggle"></span></div>
                <div class="dpi-faq-answer"><div class="dpi-faq-answer-inner">Yes. All applications undergo due diligence and regulatory screening before citizenship and passport issuance.</div></div>
            </div>
            <div class="dpi-faq-item faq-item">
                <div class="dpi-faq-question faq-question">Can family members obtain a passport under the same application?<span class="dpi-faq-toggle"></span></div>
                <div class="dpi-faq-answer"><div class="dpi-faq-answer-inner">Yes. Eligible applicants may include immediate family members under one structured citizenship application.</div></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="dpi-final-cta">
    <div class="container">
        <h2>Request Information About the Dominica Passport by Investment Program</h2>
        <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Request Information</a>
    </div>
</section>

<!-- ===== WhatsApp Float ===== -->
<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
@endsection
