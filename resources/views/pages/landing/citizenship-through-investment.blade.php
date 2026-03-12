@extends('layouts.landing')

@section('meta_title', 'Citizenship Through Investment | Legal Second Citizenship Programs')
@section('meta_description', 'Explore Citizenship Through Investment programs that provide legal second citizenship through regulated government-approved investment pathways.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/citizenship-through-investment">
<meta property="og:url" content="https://ads.saadahsan.com/citizenship-through-investment">
<meta property="og:type" content="website">
<meta property="og:title" content="Citizenship Through Investment | Legal Second Citizenship Programs">
<meta property="og:description" content="Explore Citizenship Through Investment programs that provide legal second citizenship through regulated government-approved investment pathways.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Citizenship Through Investment | Legal Second Citizenship Programs">
<meta name="twitter:description" content="Explore Citizenship Through Investment programs that provide legal second citizenship through regulated government-approved investment pathways.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Citizenship Through Investment | Legal Second Citizenship Programs","description":"Explore Citizenship Through Investment programs that provide legal second citizenship through regulated government-approved investment pathways.","url":"https://ads.saadahsan.com/citizenship-through-investment","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"What is citizenship through investment?","acceptedAnswer":{"@@type":"Answer","text":"It is a government-approved program that grants citizenship in exchange for a qualifying investment."}},
    {"@@type":"Question","name":"Is citizenship through investment legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. These programs operate under national legislation and are regulated by sovereign governments."}},
    {"@@type":"Question","name":"How long does citizenship through investment take?","acceptedAnswer":{"@@type":"Answer","text":"Processing timelines vary depending on the country and regulatory procedures."}},
    {"@@type":"Question","name":"Can families apply together?","acceptedAnswer":{"@@type":"Answer","text":"Most programs allow inclusion of immediate family members under one structured application."}}
  ]
}
</script>
@endpush

@section('content')
<style>
/* ===== CITIZENSHIP THROUGH INVESTMENT — GLOBAL PATHWAY ===== */

.cti-hero {
    min-height: 100vh;
    padding: 140px 0 100px;
    position: relative;
    display: flex;
    align-items: center;
    background: var(--charcoal);
    overflow: hidden;
}
.cti-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 65% 55% at 20% 55%, rgba(128,0,32,.18) 0%, transparent 65%),
        radial-gradient(ellipse 50% 45% at 80% 25%, rgba(201,169,98,.1) 0%, transparent 55%);
}
.cti-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='120' height='120' viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='60' cy='60' r='2' fill='%23C9A962' fill-opacity='0.04'/%3E%3Ccircle cx='20' cy='20' r='1.5' fill='%23C9A962' fill-opacity='0.03'/%3E%3Ccircle cx='100' cy='40' r='1' fill='%23C9A962' fill-opacity='0.03'/%3E%3Ccircle cx='40' cy='100' r='1.5' fill='%23C9A962' fill-opacity='0.025'/%3E%3C/svg%3E");
    pointer-events: none;
}
.cti-hero .container { position: relative; z-index: 1; }
.cti-hero-grid {
    display: grid;
    grid-template-columns: 1fr 460px;
    gap: 60px;
    align-items: center;
}
.cti-hero-badge {
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
.cti-hero-badge::before {
    content: '';
    width: 6px;
    height: 6px;
    background: var(--gold);
    border-radius: 50%;
    animation: pulse 2s infinite;
}
.cti-hero h1 {
    color: var(--white);
    font-size: clamp(2.8rem, 5.5vw, 4.2rem);
    line-height: 1.1;
    margin-bottom: 16px;
}
.cti-hero h1 span {
    display: block;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.cti-hero-subtitle {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.35rem;
    font-weight: 500;
    font-style: italic;
    color: var(--gold-light);
    margin-bottom: 20px;
    opacity: .9;
}
.cti-hero-lead {
    font-size: 1rem;
    line-height: 1.85;
    color: rgba(255,255,255,.8);
    max-width: 540px;
    margin-bottom: 0;
}
.cti-hero-highlights {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 40px;
    padding-top: 36px;
    border-top: 1px solid rgba(201,169,98,.15);
}
.cti-highlight {
    text-align: center;
    padding: 20px 12px;
    background: rgba(201,169,98,.06);
    border: 1px solid rgba(201,169,98,.12);
    border-radius: 16px;
    transition: all .3s ease;
}
.cti-highlight:hover {
    background: rgba(201,169,98,.12);
    border-color: rgba(201,169,98,.25);
    transform: translateY(-3px);
}
.cti-highlight-icon {
    width: 44px;
    height: 44px;
    margin: 0 auto 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 12px;
}
.cti-highlight-icon svg { width: 22px; height: 22px; color: var(--charcoal); }
.cti-highlight-label {
    font-size: 12px;
    font-weight: 600;
    color: var(--white);
    letter-spacing: .5px;
    line-height: 1.4;
}

/* ===== PROCESS — Pillar Cards ===== */
.cti-process {
    padding: 100px 0;
    background: var(--white);
}
.cti-process .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 60px;
}
.cti-process .section-header h2 {
    color: var(--charcoal);
    margin-bottom: 16px;
}
.cti-pillars {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    max-width: 960px;
    margin: 0 auto;
}
.cti-pillar {
    background: var(--cream);
    border-radius: 20px;
    padding: 36px 28px;
    border: 1px solid rgba(152,131,88,.1);
    transition: all .4s ease;
    position: relative;
    overflow: hidden;
}
.cti-pillar::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold));
    opacity: 0;
    transition: opacity .3s ease;
}
.cti-pillar:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 40px rgba(0,0,0,.08);
}
.cti-pillar:hover::after { opacity: 1; }
.cti-pillar-num {
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
.cti-pillar-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.15rem;
    font-weight: 600;
    color: var(--charcoal);
    margin-bottom: 8px;
}
.cti-pillar-desc {
    font-size: 14px;
    color: var(--text-muted);
    line-height: 1.65;
    margin: 0;
}

/* ===== ABOUT + ADVANTAGES ===== */
.cti-about {
    padding: 100px 0;
    background: var(--cream);
    position: relative;
    overflow: hidden;
}
.cti-about::before {
    content: '';
    position: absolute;
    top: -120px;
    right: -120px;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(128,0,32,.04) 0%, transparent 70%);
    border-radius: 50%;
}
.cti-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
}
.cti-about-content h2 {
    color: var(--charcoal);
    margin-bottom: 24px;
}
.cti-about-content p {
    font-size: 1rem;
    line-height: 1.85;
}
.cti-advantages-card {
    background: var(--white);
    border-radius: 24px;
    padding: 44px 36px;
    box-shadow: 0 20px 60px rgba(0,0,0,.06);
    border: 1px solid rgba(152,131,88,.1);
    position: relative;
}
.cti-advantages-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 32px;
    right: 32px;
    height: 4px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold));
    border-radius: 0 0 4px 4px;
}
.cti-advantages-card h3 {
    color: var(--charcoal);
    margin-bottom: 28px;
    font-size: 1.5rem;
}
.cti-adv-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 18px 0;
    border-bottom: 1px solid rgba(152,131,88,.1);
}
.cti-adv-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}
.cti-adv-icon {
    flex-shrink: 0;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--burgundy) 0%, var(--burgundy-dark) 100%);
    border-radius: 10px;
}
.cti-adv-icon svg { width: 18px; height: 18px; color: var(--white); }
.cti-adv-text {
    font-size: 15px;
    color: var(--text-dark);
    line-height: 1.6;
    font-weight: 500;
}

/* ===== PROGRAMS WORLDWIDE ===== */
.cti-programs {
    padding: 100px 0;
    background: var(--white);
}
.cti-programs .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 40px;
}
.cti-programs .section-header h2 {
    color: var(--charcoal);
    margin-bottom: 16px;
}
.cti-programs-text {
    max-width: 760px;
    margin: 0 auto;
    text-align: center;
}
.cti-programs-text p {
    font-size: 1rem;
    line-height: 1.85;
    color: var(--text-muted);
}

/* ===== ELIGIBILITY ===== */
.cti-eligibility {
    padding: 100px 0;
    background: var(--cream);
}
.cti-eligibility-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}
.cti-eligibility-content h2 {
    color: var(--charcoal);
    margin-bottom: 20px;
}
.cti-eligibility-list {
    list-style: none;
    padding: 0;
    margin: 32px 0 0;
}
.cti-eligibility-list li {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 16px 0;
    border-bottom: 1px solid rgba(152,131,88,.12);
}
.cti-eligibility-list li:last-child { border-bottom: none; }
.cti-eligibility-check {
    flex-shrink: 0;
    width: 28px;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 50%;
}
.cti-eligibility-check svg { width: 14px; height: 14px; color: var(--charcoal); }
.cti-eligibility-text {
    font-size: 15px;
    color: var(--text-dark);
    line-height: 1.65;
}
.cti-cta-card {
    background: linear-gradient(135deg, var(--charcoal) 0%, var(--charcoal-light) 100%);
    border-radius: 24px;
    padding: 52px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.cti-cta-card::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold), var(--burgundy));
}
.cti-cta-card::after {
    content: '';
    position: absolute;
    bottom: -80px; right: -80px;
    width: 200px; height: 200px;
    background: radial-gradient(circle, rgba(201,169,98,.08) 0%, transparent 70%);
    border-radius: 50%;
}
.cti-cta-card h3 {
    color: var(--white);
    font-size: 1.75rem;
    margin-bottom: 16px;
}
.cti-cta-card .btn { position: relative; z-index: 1; }

/* ===== FAQ ===== */
.cti-faq {
    padding: 100px 0;
    background: var(--white);
}
.cti-faq .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 60px;
}
.cti-faq .section-header h2 {
    color: var(--charcoal);
    margin-bottom: 16px;
}
.cti-faq-list {
    max-width: 800px;
    margin: 0 auto;
}
.cti-faq-item {
    background: var(--cream);
    border-radius: 16px;
    margin-bottom: 16px;
    overflow: hidden;
    border: 1px solid rgba(152,131,88,.12);
    transition: all .3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,.03);
}
.cti-faq-item:hover {
    border-color: rgba(152,131,88,.3);
    box-shadow: 0 8px 24px rgba(0,0,0,.06);
}
.cti-faq-question {
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
.cti-faq-question:hover { color: var(--burgundy); }
.cti-faq-toggle {
    width: 36px;
    height: 36px;
    flex-shrink: 0;
    position: relative;
    background: var(--white);
    border-radius: 50%;
    transition: all .3s ease;
}
.cti-faq-toggle::before {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 14px; height: 2px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
}
.cti-faq-toggle::after {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    width: 2px; height: 14px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
    transition: all .3s ease;
}
.cti-faq-item.active .cti-faq-toggle {
    background: var(--burgundy);
    transform: rotate(45deg);
}
.cti-faq-item.active .cti-faq-toggle::before,
.cti-faq-item.active .cti-faq-toggle::after { background: var(--white); }
.cti-faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height .4s ease;
}
.cti-faq-answer-inner {
    padding: 0 30px 24px;
    color: var(--text-muted);
    font-size: 15px;
    line-height: 1.85;
}
.cti-faq-item.active .cti-faq-answer { max-height: 300px; }

/* ===== FINAL CTA ===== */
.cti-final-cta {
    padding: 80px 0;
    background: var(--burgundy);
    position: relative;
    overflow: hidden;
    text-align: center;
}
.cti-final-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='120' height='120' viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='60' cy='60' r='2' fill='%23ffffff' fill-opacity='0.03'/%3E%3Ccircle cx='20' cy='20' r='1.5' fill='%23ffffff' fill-opacity='0.02'/%3E%3C/svg%3E");
    pointer-events: none;
}
.cti-final-cta .container { position: relative; z-index: 1; }
.cti-final-cta h2 { color: var(--white); margin-bottom: 16px; }
.cti-final-cta p {
    color: rgba(255,255,255,.8);
    font-size: 1.05rem;
    max-width: 560px;
    margin: 0 auto 32px;
}

/* ===== RESPONSIVE ===== */
@@media (max-width: 1024px) {
    .cti-hero-grid { grid-template-columns: 1fr; gap: 48px; text-align: center; }
    .cti-hero-lead { margin: 0 auto; }
    .cti-hero-highlights { justify-content: center; }
    .hero-form { max-width: 520px; margin: 0 auto; }
    .cti-about-grid,
    .cti-eligibility-grid { grid-template-columns: 1fr; gap: 48px; }
    .cti-pillars { grid-template-columns: repeat(2, 1fr); }
}
@@media (max-width: 768px) {
    .cti-hero { min-height: auto; padding: 110px 0 60px; }
    .cti-process, .cti-about, .cti-programs, .cti-eligibility, .cti-faq, .cti-final-cta { padding: 60px 0; }
    .cti-hero-highlights { grid-template-columns: 1fr; gap: 12px; }
    .cti-highlight { flex-direction: row; display: flex; align-items: center; gap: 14px; text-align: left; padding: 14px 18px; }
    .cti-highlight-icon { margin: 0; }
    .hero-form { padding: 28px 20px; }
    .form-row { grid-template-columns: 1fr; }
    .cti-advantages-card { padding: 32px 24px; }
    .cti-cta-card { padding: 40px 24px; }
    .cti-pillars { grid-template-columns: 1fr; }
}
</style>

<!-- ===== HERO ===== -->
<section class="cti-hero">
    <div class="container">
        <div class="cti-hero-grid">
            <div class="cti-hero-content">
                <div class="cti-hero-badge">Legal Second Citizenship Programs</div>
                <h1>Citizenship Through Investment<span>A Legal Route to Second Citizenship</span></h1>
                <p class="cti-hero-subtitle">Government-Regulated Investment Programs for Acquiring Citizenship</p>
                <p class="cti-hero-lead">Citizenship through investment is a lawful process established by sovereign governments that allows eligible individuals and families to obtain second citizenship by making a qualifying investment. These programs operate under national legislation and grant citizenship only after regulatory review, background checks, and official approval.</p>
                <p class="cti-hero-lead" style="margin-top:-8px">Second citizenship obtained through investment is issued by the respective country in accordance with its legal framework.</p>
                <div class="cti-hero-highlights">
                    <div class="cti-highlight">
                        <div class="cti-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                        </div>
                        <span class="cti-highlight-label">Government-Regulated Programs</span>
                    </div>
                    <div class="cti-highlight">
                        <div class="cti-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                        </div>
                        <span class="cti-highlight-label">Sovereign Legal Framework</span>
                    </div>
                    <div class="cti-highlight">
                        <div class="cti-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                        </div>
                        <span class="cti-highlight-label">Family Inclusion Eligible</span>
                    </div>
                </div>
            </div>
            <x-landing-form
                source="citizenship-through-investment"
                consultancy="citizenship-by-investment"
                title="Check Eligibility for Citizenship Through Investment Programs"
                subtitle="Share your details and our experts will assess your eligibility."
            >Check Eligibility</x-landing-form>
        </div>
    </div>
</section>

<!-- ===== PROCESS — Pillar Cards ===== -->
<section class="cti-process">
    <div class="container">
        <div class="section-header">
            <h2>How Citizenship Through Investment Works</h2>
            <p>Each country defines its own legal standards and processing procedures.</p>
        </div>
        <div class="cti-pillars">
            <div class="cti-pillar">
                <div class="cti-pillar-num">01</div>
                <div class="cti-pillar-title">Initial Eligibility Assessment</div>
                <p class="cti-pillar-desc">Initial eligibility assessment</p>
            </div>
            <div class="cti-pillar">
                <div class="cti-pillar-num">02</div>
                <div class="cti-pillar-title">Documentation Submission</div>
                <p class="cti-pillar-desc">Submission of required documentation</p>
            </div>
            <div class="cti-pillar">
                <div class="cti-pillar-num">03</div>
                <div class="cti-pillar-title">Due Diligence & Verification</div>
                <p class="cti-pillar-desc">Government due diligence and background verification</p>
            </div>
            <div class="cti-pillar">
                <div class="cti-pillar-num">04</div>
                <div class="cti-pillar-title">Approval in Principle</div>
                <p class="cti-pillar-desc">Approval in principle from authorities</p>
            </div>
            <div class="cti-pillar">
                <div class="cti-pillar-num">05</div>
                <div class="cti-pillar-title">Qualifying Investment</div>
                <p class="cti-pillar-desc">Completion of the qualifying investment</p>
            </div>
            <div class="cti-pillar">
                <div class="cti-pillar-num">06</div>
                <div class="cti-pillar-title">Citizenship & Passport</div>
                <p class="cti-pillar-desc">Issuance of citizenship certificate and passport</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== WORLDWIDE ===== -->
<section style="padding:80px 0;background:var(--cream)">
    <div class="container" style="max-width:800px;text-align:center">
        <h2 style="color:var(--charcoal);margin-bottom:20px">Citizenship Through Investment Programs Worldwide</h2>
        <p style="font-size:1rem;line-height:1.85;color:var(--text-muted);margin-bottom:16px">Several countries operate legally established citizenship through investment programs. These programs are enacted under national law and are designed to attract foreign capital in exchange for citizenship status.</p>
        <p style="font-size:1rem;line-height:1.85;color:var(--text-muted)">Programs differ in eligibility criteria, investment structure, and processing timelines, but all operate under defined legislative frameworks.</p>
    </div>
</section>

<!-- ===== ABOUT + ADVANTAGES ===== -->
<section class="cti-about">
    <div class="container">
        <div class="cti-about-grid">
            <div class="cti-about-content">
                <h2>What Is Citizenship Through Investment?</h2>
                <p>Citizenship through investment refers to structured government programs that grant citizenship status to foreign applicants who complete an approved economic contribution. The investment may be directed toward national development initiatives or other state-authorized economic channels.</p>
                <p>Applicants must meet eligibility criteria and pass strict due diligence procedures before citizenship is granted.</p>
            </div>
            <div class="cti-advantages-card">
                <h3>Advantages of Citizenship Through Investment</h3>
                <div class="cti-adv-item">
                    <div class="cti-adv-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                    </div>
                    <span class="cti-adv-text">Legal acquisition of second citizenship under government legislation</span>
                </div>
                <div class="cti-adv-item">
                    <div class="cti-adv-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </div>
                    <span class="cti-adv-text">Diversification of nationality for long-term planning</span>
                </div>
                <div class="cti-adv-item">
                    <div class="cti-adv-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <span class="cti-adv-text">Family inclusion under a structured application</span>
                </div>
                <div class="cti-adv-item">
                    <div class="cti-adv-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <span class="cti-adv-text">Regulated and documented approval process</span>
                </div>
                <div class="cti-adv-item">
                    <div class="cti-adv-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                    </div>
                    <span class="cti-adv-text">Citizenship issued by sovereign authority</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== PROGRAMS WORLDWIDE ===== -->
<section class="cti-programs">
    <div class="container">
        <div class="section-header">
            <h2>Citizenship Through Investment Programs Worldwide</h2>
        </div>
        <div class="cti-programs-text">
            <p>Several countries operate legally established citizenship through investment programs. These programs are enacted under national law and are designed to attract foreign capital in exchange for citizenship status.</p>
            <p>Programs differ in eligibility criteria, investment structure, and processing timelines, but all operate under defined legislative frameworks.</p>
        </div>
    </div>
</section>

<!-- ===== ELIGIBILITY ===== -->
<section class="cti-eligibility">
    <div class="container">
        <div class="cti-eligibility-grid">
            <div class="cti-eligibility-content">
                <h2>Who Can Apply for Citizenship Through Investment?</h2>
                <p>Eligibility depends on the issuing country's laws. Applicants are typically required to:</p>
                <ul class="cti-eligibility-list">
                    <li>
                        <span class="cti-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="cti-eligibility-text">Meet financial qualification standards</span>
                    </li>
                    <li>
                        <span class="cti-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="cti-eligibility-text">Demonstrate lawful source of funds</span>
                    </li>
                    <li>
                        <span class="cti-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="cti-eligibility-text">Pass comprehensive background checks</span>
                    </li>
                    <li>
                        <span class="cti-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="cti-eligibility-text">Comply with official application procedures</span>
                    </li>
                </ul>
                <p style="margin-top:24px">Citizenship is granted only after formal approval by the relevant government authority.</p>
            </div>
            <div class="cti-cta-card">
                <h3>Check Eligibility for Citizenship Through Investment Programs</h3>
                <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="cti-faq">
    <div class="container">
        <div class="section-header">
            <h2>Citizenship Through Investment FAQs</h2>
        </div>
        <div class="cti-faq-list">
            <div class="cti-faq-item faq-item active">
                <div class="cti-faq-question faq-question">What is citizenship through investment?<span class="cti-faq-toggle"></span></div>
                <div class="cti-faq-answer"><div class="cti-faq-answer-inner">It is a government-approved program that grants citizenship in exchange for a qualifying investment.</div></div>
            </div>
            <div class="cti-faq-item faq-item">
                <div class="cti-faq-question faq-question">Is citizenship through investment legal?<span class="cti-faq-toggle"></span></div>
                <div class="cti-faq-answer"><div class="cti-faq-answer-inner">Yes. These programs operate under national legislation and are regulated by sovereign governments.</div></div>
            </div>
            <div class="cti-faq-item faq-item">
                <div class="cti-faq-question faq-question">How long does citizenship through investment take?<span class="cti-faq-toggle"></span></div>
                <div class="cti-faq-answer"><div class="cti-faq-answer-inner">Processing timelines vary depending on the country and regulatory procedures.</div></div>
            </div>
            <div class="cti-faq-item faq-item">
                <div class="cti-faq-question faq-question">Can families apply together?<span class="cti-faq-toggle"></span></div>
                <div class="cti-faq-answer"><div class="cti-faq-answer-inner">Most programs allow inclusion of immediate family members under one structured application.</div></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="cti-final-cta">
    <div class="container">
        <h2>Check Eligibility for Citizenship Through Investment Programs</h2>
        <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
    </div>
</section>

<!-- ===== WhatsApp Float ===== -->
<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
@endsection
