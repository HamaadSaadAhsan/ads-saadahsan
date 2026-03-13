@extends('layouts.landing')

@section('meta_title', 'Turkey Citizenship by Investment | Government-Approved Second Citizenship Program')
@section('meta_description', 'Learn about the Turkey citizenship by investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/turkey-citizenship-by-investment">
<meta property="og:url" content="https://ads.saadahsan.com/turkey-citizenship-by-investment">
<meta property="og:type" content="website">
<meta property="og:title" content="Turkey Citizenship by Investment | Government-Approved Second Citizenship Program">
<meta property="og:description" content="Learn about the Turkey citizenship by investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Turkey Citizenship by Investment | Government-Approved Second Citizenship Program">
<meta name="twitter:description" content="Learn about the Turkey citizenship by investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Turkey Citizenship by Investment | Government-Approved Second Citizenship Program","description":"Learn about the Turkey citizenship by investment program, a government-approved pathway to obtain second citizenship through regulated economic contribution.","url":"https://ads.saadahsan.com/turkey-citizenship-by-investment","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"Is Turkey citizenship by investment legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. The program operates under Turkish nationality law and is administered by authorized government bodies."}},
    {"@@type":"Question","name":"Does approval depend on government review?","acceptedAnswer":{"@@type":"Answer","text":"Yes. All applications undergo verification and must receive formal government approval before citizenship is granted."}},
    {"@@type":"Question","name":"Can families apply together under the program?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Eligible applicants may include immediate family members under one structured application."}},
    {"@@type":"Question","name":"Is the passport issued after citizenship approval?","acceptedAnswer":{"@@type":"Answer","text":"Yes. A Turkish passport is issued once citizenship has been officially conferred."}}
  ]
}
</script>
@endpush

@section('content')
<style>
/* ===== TURKEY PAGE — EURASIAN CROSSROADS DESIGN ===== */

.trk-hero {
    min-height: 100vh;
    padding: 140px 0 100px;
    position: relative;
    display: flex;
    align-items: center;
    background: var(--charcoal);
    overflow: hidden;
}
.trk-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 70% 50% at 20% 50%, rgba(128,0,32,.25) 0%, transparent 70%),
        radial-gradient(ellipse 50% 40% at 85% 30%, rgba(201,169,98,.1) 0%, transparent 60%);
}
.trk-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M40 5 A35 35 0 0 1 40 75' fill='none' stroke='%23C9A962' stroke-opacity='0.03'/%3E%3Cpath d='M40 5 A35 35 0 0 0 40 75' fill='none' stroke='%23C9A962' stroke-opacity='0.03'/%3E%3C/svg%3E");
    pointer-events: none;
}
.trk-hero .container { position: relative; z-index: 1; }
.trk-hero-grid {
    display: grid;
    grid-template-columns: 1fr 460px;
    gap: 60px;
    align-items: center;
}
.trk-hero-badge {
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
    margin-bottom: 20px;
}
.trk-hero-badge::before {
    content: '';
    width: 6px;
    height: 6px;
    background: var(--gold);
    border-radius: 50%;
    animation: pulse 2s infinite;
}
/* Ornamental divider */
.trk-ornament {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 24px;
    max-width: 300px;
}
.trk-ornament::before,
.trk-ornament::after {
    content: '';
    flex: 1;
    height: 1px;
    background: var(--gold);
    opacity: .4;
}
.trk-ornament-dot {
    width: 8px;
    height: 8px;
    background: var(--gold);
    transform: rotate(45deg);
    flex-shrink: 0;
}
.trk-hero h1 {
    color: var(--white);
    font-size: clamp(2.8rem, 5.5vw, 4.2rem);
    line-height: 1.1;
    margin-bottom: 16px;
}
.trk-hero h1 span {
    display: block;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.trk-hero-subtitle {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.35rem;
    font-weight: 500;
    font-style: italic;
    color: var(--gold-light);
    margin-bottom: 20px;
    opacity: .9;
}
.trk-hero-lead {
    font-size: 1rem;
    line-height: 1.85;
    color: rgba(255,255,255,.8);
    max-width: 540px;
    margin-bottom: 0;
}
.trk-hero-highlights {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 40px;
    padding-top: 36px;
    border-top: 1px solid rgba(201,169,98,.15);
}
.trk-highlight {
    text-align: center;
    padding: 20px 12px;
    background: rgba(201,169,98,.06);
    border: 1px solid rgba(201,169,98,.12);
    border-radius: 16px;
    transition: color .3s ease, background .3s ease, border-color .3s ease, transform .3s ease, box-shadow .3s ease, opacity .3s ease;
}
.trk-highlight:hover {
    background: rgba(201,169,98,.12);
    transform: translateY(-3px);
}
.trk-highlight-icon {
    width: 44px;
    height: 44px;
    margin: 0 auto 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 12px;
}
.trk-highlight-icon svg { width: 22px; height: 22px; color: var(--charcoal); }
.trk-highlight-label { font-size: 12px; font-weight: 600; color: var(--white); letter-spacing: .5px; line-height: 1.4; }

/* Process — Mosaic Grid */
.trk-process {
    padding: 100px 0;
    background: var(--white);
}
.trk-process .section-header { text-align: center; max-width: 680px; margin: 0 auto 60px; }
.trk-process .section-header h2 { color: var(--charcoal); margin-bottom: 16px; }
.trk-mosaic {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    max-width: 960px;
    margin: 0 auto;
}
.trk-mosaic-card {
    padding: 36px 24px;
    background: var(--cream);
    border: 1px solid rgba(152,131,88,.12);
    border-radius: 20px;
    text-align: center;
    transition: color .4s ease, background .4s ease, border-color .4s ease, transform .4s ease, box-shadow .4s ease, opacity .4s ease;
    position: relative;
    overflow: hidden;
}
.trk-mosaic-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold));
    opacity: 0;
    transition: opacity .4s ease;
}
.trk-mosaic-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(0,0,0,.1);
    border-color: rgba(152,131,88,.3);
}
.trk-mosaic-card:hover::before { opacity: 1; }
.trk-mosaic-num {
    width: 56px;
    height: 56px;
    margin: 0 auto 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--white);
    border: 2px solid rgba(152,131,88,.2);
    border-radius: 14px;
    transform: rotate(45deg);
    transition: color .4s ease, background .4s ease, border-color .4s ease, transform .4s ease, box-shadow .4s ease, opacity .4s ease;
}
.trk-mosaic-num span {
    transform: rotate(-45deg);
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--burgundy);
}
.trk-mosaic-card:hover .trk-mosaic-num {
    background: var(--burgundy);
    border-color: var(--burgundy);
}
.trk-mosaic-card:hover .trk-mosaic-num span { color: var(--white); }
.trk-mosaic-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--charcoal);
    margin-bottom: 8px;
}
.trk-mosaic-desc { font-size: 13px; color: var(--text-muted); line-height: 1.6; margin: 0; }

/* About + Features */
.trk-about {
    padding: 100px 0;
    background: var(--cream);
    position: relative;
    overflow: hidden;
}
.trk-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
}
.trk-about-content h2 { color: var(--charcoal); margin-bottom: 24px; }
.trk-about-content p { font-size: 1rem; line-height: 1.85; }
.trk-features-card {
    background: var(--white);
    border-radius: 24px;
    padding: 44px 36px;
    box-shadow: 0 20px 60px rgba(0,0,0,.06);
    border: 1px solid rgba(152,131,88,.1);
    position: relative;
}
/* Mosaic border top */
.trk-features-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: repeating-linear-gradient(90deg, var(--gold) 0px, var(--gold) 20px, var(--burgundy) 20px, var(--burgundy) 40px);
    border-radius: 24px 24px 0 0;
}
.trk-features-card h3 { color: var(--charcoal); margin-bottom: 28px; font-size: 1.5rem; }
.trk-feature-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 18px 0;
    border-bottom: 1px solid rgba(152,131,88,.1);
}
.trk-feature-item:last-child { border-bottom: none; padding-bottom: 0; }
.trk-feature-icon {
    flex-shrink: 0;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--burgundy) 0%, var(--burgundy-dark) 100%);
    border-radius: 10px;
}
.trk-feature-icon svg { width: 18px; height: 18px; color: var(--white); }
.trk-feature-text { font-size: 15px; color: var(--text-dark); line-height: 1.6; font-weight: 500; }

/* Eligibility — 4 Column Cards */
.trk-eligibility {
    padding: 100px 0;
    background: var(--white);
    text-align: center;
}
.trk-eligibility h2 { color: var(--charcoal); margin-bottom: 20px; }
.trk-eligibility > .container > p { max-width: 600px; margin: 0 auto 40px; }
.trk-eligibility-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    max-width: 960px;
    margin: 0 auto 40px;
}
.trk-eligibility-card {
    padding: 28px 20px;
    background: var(--cream);
    border-radius: 16px;
    border: 1px solid rgba(152,131,88,.12);
    transition: color .3s ease, background .3s ease, border-color .3s ease, transform .3s ease, box-shadow .3s ease, opacity .3s ease;
}
.trk-eligibility-card:hover {
    border-color: rgba(152,131,88,.3);
    transform: translateY(-3px);
    box-shadow: 0 8px 24px rgba(0,0,0,.06);
}
.trk-eligibility-card-icon {
    width: 40px;
    height: 40px;
    margin: 0 auto 14px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 50%;
}
.trk-eligibility-card-icon svg { width: 20px; height: 20px; color: var(--charcoal); }
.trk-eligibility-card-text { font-size: 13px; color: var(--text-dark); line-height: 1.55; font-weight: 500; }
.trk-eligibility-note { font-size: 14px; color: var(--text-muted); font-style: italic; margin-bottom: 24px; }
.trk-cta-card {
    background: linear-gradient(135deg, var(--charcoal) 0%, var(--charcoal-light) 100%);
    border-radius: 24px;
    padding: 48px 40px;
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
}
.trk-cta-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: repeating-linear-gradient(90deg, var(--gold) 0px, var(--gold) 20px, var(--burgundy) 20px, var(--burgundy) 40px);
}
.trk-cta-card h3 { color: var(--white); font-size: 1.6rem; margin-bottom: 20px; }
.trk-cta-card .btn { position: relative; z-index: 1; }

/* FAQ */
.trk-faq {
    padding: 100px 0;
    background: var(--cream);
}
.trk-faq .section-header { text-align: center; max-width: 680px; margin: 0 auto 60px; }
.trk-faq .section-header h2 { color: var(--charcoal); margin-bottom: 16px; }
.trk-faq-list { max-width: 800px; margin: 0 auto; }
.trk-faq-item {
    background: var(--white);
    border-radius: 16px;
    margin-bottom: 16px;
    overflow: hidden;
    border: 1px solid rgba(152,131,88,.12);
    transition: color .3s ease, background .3s ease, border-color .3s ease, transform .3s ease, box-shadow .3s ease, opacity .3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,.03);
}
.trk-faq-item:hover { border-color: rgba(152,131,88,.3); box-shadow: 0 8px 24px rgba(0,0,0,.06); }
.trk-faq-question {
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
.trk-faq-question:hover { color: var(--burgundy); }
.trk-faq-toggle {
    width: 36px;
    height: 36px;
    flex-shrink: 0;
    position: relative;
    background: var(--cream);
    border-radius: 50%;
    transition: color .3s ease, background .3s ease, border-color .3s ease, transform .3s ease, box-shadow .3s ease, opacity .3s ease;
}
.trk-faq-toggle::before {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 14px; height: 2px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
}
.trk-faq-toggle::after {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 2px; height: 14px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
    transition: color .3s ease, background .3s ease, border-color .3s ease, transform .3s ease, box-shadow .3s ease, opacity .3s ease;
}
.trk-faq-item.active .trk-faq-toggle { background: var(--burgundy); transform: rotate(45deg); }
.trk-faq-item.active .trk-faq-toggle::before,
.trk-faq-item.active .trk-faq-toggle::after { background: var(--white); }
.trk-faq-answer { max-height: 0; overflow: hidden; transition: max-height .4s ease; }
.trk-faq-answer-inner { padding: 0 30px 24px; color: var(--text-muted); font-size: 15px; line-height: 1.85; }
.trk-faq-item.active .trk-faq-answer { max-height: 300px; }

/* Final CTA — Charcoal with arch pattern */
.trk-final-cta {
    padding: 80px 0;
    background: var(--charcoal);
    text-align: center;
    position: relative;
    overflow: hidden;
}
.trk-final-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M40 5 A35 35 0 0 1 40 75' fill='none' stroke='%23C9A962' stroke-opacity='0.04'/%3E%3Cpath d='M40 5 A35 35 0 0 0 40 75' fill='none' stroke='%23C9A962' stroke-opacity='0.04'/%3E%3C/svg%3E");
    pointer-events: none;
}
.trk-final-cta::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--gold), transparent);
}
.trk-final-cta .container { position: relative; z-index: 1; }
.trk-final-cta h2 { color: var(--white); margin-bottom: 16px; }

/* Responsive */
@@media (max-width: 1024px) {
    .trk-hero-grid { grid-template-columns: 1fr; gap: 48px; text-align: center; }
    .trk-hero-lead { margin: 0 auto; }
    .trk-ornament { margin: 0 auto 24px; }
    .hero-form { max-width: 520px; margin: 0 auto; }
    .trk-about-grid { grid-template-columns: 1fr; gap: 48px; }
    .trk-eligibility-grid { grid-template-columns: repeat(2, 1fr); }
}
@@media (max-width: 768px) {
    .trk-hero { min-height: auto; padding: 110px 0 60px; }
    .trk-process, .trk-about, .trk-eligibility, .trk-faq, .trk-final-cta { padding: 60px 0; }
    .trk-mosaic { grid-template-columns: repeat(2, 1fr); }
    .trk-hero-highlights { grid-template-columns: 1fr; gap: 12px; }
    .trk-highlight { flex-direction: row; display: flex; align-items: center; gap: 14px; text-align: left; padding: 14px 18px; }
    .trk-highlight-icon { margin: 0; }
    .hero-form { padding: 28px 20px; }
    .form-row { grid-template-columns: 1fr; }
    .trk-features-card { padding: 32px 24px; }
    .trk-cta-card { padding: 36px 24px; }
}
@@media (max-width: 480px) {
    .trk-mosaic { grid-template-columns: 1fr; max-width: 320px; margin: 0 auto; }
    .trk-eligibility-grid { grid-template-columns: 1fr; max-width: 320px; margin: 0 auto 40px; }
}
</style>

<!-- ===== HERO ===== -->
<section class="trk-hero">
    <div class="container">
        <div class="trk-hero-grid">
            <div class="trk-hero-content">
                <div class="trk-hero-badge">Government-Approved Citizenship Program</div>
                <div class="trk-ornament">
                    <span class="trk-ornament-dot"></span>
                    <span class="trk-ornament-dot"></span>
                    <span class="trk-ornament-dot"></span>
                </div>
                <h1>Turkey Citizenship by<span>Investment Program</span></h1>
                <p class="trk-hero-subtitle">A Government-Regulated Pathway to Second Citizenship in Turkey</p>
                <p class="trk-hero-lead">The Turkey citizenship by investment program is a government-established initiative that allows eligible foreign applicants to acquire Turkish citizenship through a qualifying economic contribution. The program operates under national legislation and is administered by authorized government authorities.</p>
                <p class="trk-hero-lead" style="margin-top:-8px">Citizenship is granted only after regulatory review, documentation verification, and formal approval by the Government of Turkey.</p>
                <div class="trk-hero-highlights">
                    <div class="trk-highlight">
                        <div class="trk-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                        </div>
                        <span class="trk-highlight-label">Government-Established Program</span>
                    </div>
                    <div class="trk-highlight">
                        <div class="trk-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                        </div>
                        <span class="trk-highlight-label">Turkish Nationality Law</span>
                    </div>
                    <div class="trk-highlight">
                        <div class="trk-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                        </div>
                        <span class="trk-highlight-label">Family Inclusion Eligible</span>
                    </div>
                </div>
            </div>
            <x-landing-form
                source="turkey-citizenship-by-investment"
                consultancy="turkey-citizenship-by-investment"
                title="Check Eligibility for the Turkey Citizenship Program"
                subtitle="Share your details and our experts will assess your eligibility."
            >Check Eligibility</x-landing-form>
        </div>
    </div>
</section>

<!-- ===== PROCESS — Mosaic Grid ===== -->
<section class="trk-process">
    <div class="container">
        <div class="section-header">
            <h2>How Turkey Citizenship by Investment Works</h2>
            <p>Each application is reviewed individually under national legislation.</p>
        </div>
        <div class="trk-mosaic">
            <div class="trk-mosaic-card">
                <div class="trk-mosaic-num"><span>01</span></div>
                <div class="trk-mosaic-title">Eligibility Assessment</div>
                <p class="trk-mosaic-desc">Initial eligibility assessment</p>
            </div>
            <div class="trk-mosaic-card">
                <div class="trk-mosaic-num"><span>02</span></div>
                <div class="trk-mosaic-title">Investment Selection</div>
                <p class="trk-mosaic-desc">Selection of an approved investment category</p>
            </div>
            <div class="trk-mosaic-card">
                <div class="trk-mosaic-num"><span>03</span></div>
                <div class="trk-mosaic-title">Documentation</div>
                <p class="trk-mosaic-desc">Submission of required documentation</p>
            </div>
            <div class="trk-mosaic-card">
                <div class="trk-mosaic-num"><span>04</span></div>
                <div class="trk-mosaic-title">Verification</div>
                <p class="trk-mosaic-desc">Government verification and compliance review</p>
            </div>
            <div class="trk-mosaic-card">
                <div class="trk-mosaic-num"><span>05</span></div>
                <div class="trk-mosaic-title">Investment</div>
                <p class="trk-mosaic-desc">Completion of the qualifying investment</p>
            </div>
            <div class="trk-mosaic-card">
                <div class="trk-mosaic-num"><span>06</span></div>
                <div class="trk-mosaic-title">Citizenship</div>
                <p class="trk-mosaic-desc">Issuance of citizenship certificate and Turkish passport</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== ABOUT + KEY FEATURES ===== -->
<section class="trk-about">
    <div class="container">
        <div class="trk-about-grid">
            <div class="trk-about-content">
                <h2>What Is the Turkey Citizenship by Investment Program?</h2>
                <p>The Turkey citizenship by investment program enables foreign nationals to obtain citizenship by completing an approved investment under a structured legal framework. The program is enacted under Turkish nationality laws and is designed to attract foreign capital while maintaining compliance and due diligence standards.</p>
                <p>Applicants must meet eligibility criteria and pass required background checks before citizenship status is conferred.</p>
            </div>
            <div class="trk-features-card">
                <h3>Key Features of the Turkey Citizenship by Investment Program</h3>
                <div class="trk-feature-item">
                    <div class="trk-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                    </div>
                    <span class="trk-feature-text">Government-established second citizenship program</span>
                </div>
                <div class="trk-feature-item">
                    <div class="trk-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <span class="trk-feature-text">Regulated investment categories defined by law</span>
                </div>
                <div class="trk-feature-item">
                    <div class="trk-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </div>
                    <span class="trk-feature-text">Citizenship granted under Turkish nationality legislation</span>
                </div>
                <div class="trk-feature-item">
                    <div class="trk-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <span class="trk-feature-text">Eligibility to include immediate family members</span>
                </div>
                <div class="trk-feature-item">
                    <div class="trk-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                    </div>
                    <span class="trk-feature-text">Official passport issued upon approval</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== ELIGIBILITY ===== -->
<section class="trk-eligibility">
    <div class="container">
        <h2>Who Can Apply for Turkey Citizenship by Investment?</h2>
        <p>Eligibility is determined under the legal framework governing the program. Applicants are generally required to:</p>
        <div class="trk-eligibility-grid">
            <div class="trk-eligibility-card">
                <div class="trk-eligibility-card-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg>
                </div>
                <div class="trk-eligibility-card-text">Meet financial qualification standards</div>
            </div>
            <div class="trk-eligibility-card">
                <div class="trk-eligibility-card-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                </div>
                <div class="trk-eligibility-card-text">Provide verified documentation related to the investment</div>
            </div>
            <div class="trk-eligibility-card">
                <div class="trk-eligibility-card-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                </div>
                <div class="trk-eligibility-card-text">Demonstrate lawful source of funds</div>
            </div>
            <div class="trk-eligibility-card">
                <div class="trk-eligibility-card-icon">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                </div>
                <div class="trk-eligibility-card-text">Comply with official application procedures</div>
            </div>
        </div>
        <p class="trk-eligibility-note">All approvals are subject to final review and decision by the Government of Turkey.</p>
        <div class="trk-cta-card">
            <h3>Check Eligibility for the Turkey Citizenship Program</h3>
            <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="trk-faq">
    <div class="container">
        <div class="section-header">
            <h2>Turkey Citizenship by Investment FAQs</h2>
        </div>
        <div class="trk-faq-list">
            <div class="trk-faq-item faq-item active">
                <div class="trk-faq-question faq-question">Is Turkey citizenship by investment legal?<span class="trk-faq-toggle"></span></div>
                <div class="trk-faq-answer"><div class="trk-faq-answer-inner">Yes. The program operates under Turkish nationality law and is administered by authorized government bodies.</div></div>
            </div>
            <div class="trk-faq-item faq-item">
                <div class="trk-faq-question faq-question">Does approval depend on government review?<span class="trk-faq-toggle"></span></div>
                <div class="trk-faq-answer"><div class="trk-faq-answer-inner">Yes. All applications undergo verification and must receive formal government approval before citizenship is granted.</div></div>
            </div>
            <div class="trk-faq-item faq-item">
                <div class="trk-faq-question faq-question">Can families apply together under the program?<span class="trk-faq-toggle"></span></div>
                <div class="trk-faq-answer"><div class="trk-faq-answer-inner">Yes. Eligible applicants may include immediate family members under one structured application.</div></div>
            </div>
            <div class="trk-faq-item faq-item">
                <div class="trk-faq-question faq-question">Is the passport issued after citizenship approval?<span class="trk-faq-toggle"></span></div>
                <div class="trk-faq-answer"><div class="trk-faq-answer-inner">Yes. A Turkish passport is issued once citizenship has been officially conferred.</div></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="trk-final-cta">
    <div class="container">
        <h2>Check Eligibility for the Turkey Citizenship Program</h2>
        <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
    </div>
</section>

<!-- ===== WhatsApp Float ===== -->
<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
@endsection
