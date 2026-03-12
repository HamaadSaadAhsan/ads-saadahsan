@extends('layouts.landing')

@section('meta_title', 'Citizenship by Investment | Legal Second Citizenship Programs for Global Mobility')
@section('meta_description', 'Explore government-approved Citizenship by Investment programs offering legal second citizenship, visa-free travel access, and family inclusion through regulated investment pathways.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/citizenship-by-investment">
<meta property="og:url" content="https://ads.saadahsan.com/citizenship-by-investment">
<meta property="og:type" content="website">
<meta property="og:title" content="Citizenship by Investment | Legal Second Citizenship Programs for Global Mobility">
<meta property="og:description" content="Explore government-approved Citizenship by Investment programs offering legal second citizenship, visa-free travel access, and family inclusion through regulated investment pathways.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Citizenship by Investment | Legal Second Citizenship Programs for Global Mobility">
<meta name="twitter:description" content="Explore government-approved Citizenship by Investment programs offering legal second citizenship, visa-free travel access, and family inclusion through regulated investment pathways.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Citizenship by Investment | Legal Second Citizenship Programs for Global Mobility","description":"Explore government-approved Citizenship by Investment programs offering legal second citizenship, visa-free travel access, and family inclusion through regulated investment pathways.","url":"https://ads.saadahsan.com/citizenship-by-investment","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"What is Citizenship by Investment?","acceptedAnswer":{"@@type":"Answer","text":"It is a government-approved program that grants second citizenship in exchange for a qualifying investment."}},
    {"@@type":"Question","name":"Is Citizenship by Investment legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. These programs operate under national legislation and are regulated by sovereign governments."}},
    {"@@type":"Question","name":"How long does Citizenship by Investment take?","acceptedAnswer":{"@@type":"Answer","text":"Processing timelines vary depending on the issuing country and due diligence procedures."}},
    {"@@type":"Question","name":"Can families apply together under Citizenship by Investment?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Most programs allow inclusion of immediate family members under one structured application."}}
  ]
}
</script>
@endpush

@section('content')
<style>
/* ===== CBI PAGE — UNIQUE DESIGN SYSTEM ===== */

/* Decorative divider */
.cbi-divider {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 16px;
    margin: 0 auto 48px;
}
.cbi-divider::before,
.cbi-divider::after {
    content: '';
    height: 1px;
    width: 60px;
    background: linear-gradient(90deg, transparent, var(--gold));
}
.cbi-divider::after {
    background: linear-gradient(90deg, var(--gold), transparent);
}
.cbi-divider-diamond {
    width: 10px;
    height: 10px;
    background: var(--gold);
    transform: rotate(45deg);
    flex-shrink: 0;
}

/* ===== HERO — Editorial Magazine Style ===== */
.cbi-hero {
    min-height: 100vh;
    padding: 140px 0 100px;
    position: relative;
    display: flex;
    align-items: center;
    background: var(--charcoal);
    overflow: hidden;
}
.cbi-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
        radial-gradient(ellipse 80% 60% at 20% 50%, rgba(128,0,32,.25) 0%, transparent 70%),
        radial-gradient(ellipse 60% 50% at 80% 30%, rgba(201,169,98,.1) 0%, transparent 60%);
}
.cbi-hero::after {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M40 0L80 40L40 80L0 40Z' fill='none' stroke='%23C9A962' stroke-opacity='0.04'/%3E%3C/svg%3E");
    pointer-events: none;
}
.cbi-hero .container {
    position: relative;
    z-index: 1;
}
.cbi-hero-grid {
    display: grid;
    grid-template-columns: 1fr 460px;
    gap: 60px;
    align-items: center;
}
.cbi-hero-badge {
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
.cbi-hero-badge::before {
    content: '';
    width: 6px;
    height: 6px;
    background: var(--gold);
    border-radius: 50%;
    animation: pulse 2s infinite;
}
.cbi-hero h1 {
    color: var(--white);
    font-size: clamp(2.8rem, 5.5vw, 4.2rem);
    line-height: 1.1;
    margin-bottom: 16px;
}
.cbi-hero h1 span {
    display: block;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-light) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}
.cbi-hero-subtitle {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.35rem;
    font-weight: 500;
    font-style: italic;
    color: var(--gold-light);
    margin-bottom: 20px;
    opacity: .9;
}
.cbi-hero-lead {
    font-size: 1rem;
    line-height: 1.85;
    color: rgba(255,255,255,.8);
    max-width: 540px;
    margin-bottom: 0;
}
.cbi-hero-highlights {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-top: 40px;
    padding-top: 36px;
    border-top: 1px solid rgba(201,169,98,.15);
}
.cbi-highlight {
    text-align: center;
    padding: 20px 12px;
    background: rgba(201,169,98,.06);
    border: 1px solid rgba(201,169,98,.12);
    border-radius: 16px;
    transition: all .3s ease;
}
.cbi-highlight:hover {
    background: rgba(201,169,98,.12);
    border-color: rgba(201,169,98,.25);
    transform: translateY(-3px);
}
.cbi-highlight-icon {
    width: 44px;
    height: 44px;
    margin: 0 auto 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 12px;
}
.cbi-highlight-icon svg {
    width: 22px;
    height: 22px;
    color: var(--charcoal);
}
.cbi-highlight-label {
    font-size: 12px;
    font-weight: 600;
    color: var(--white);
    letter-spacing: .5px;
    line-height: 1.4;
}

/* ===== PROCESS SECTION — Horizontal Timeline ===== */
.cbi-process {
    padding: 100px 0;
    background: var(--white);
    position: relative;
}
.cbi-process .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 70px;
}
.cbi-process .section-header h2 {
    color: var(--charcoal);
    margin-bottom: 16px;
}
.cbi-process-timeline {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 0;
    position: relative;
    max-width: 1100px;
    margin: 0 auto;
}
.cbi-process-timeline::before {
    content: '';
    position: absolute;
    top: 44px;
    left: 10%;
    right: 10%;
    height: 2px;
    background: linear-gradient(90deg, var(--gold), var(--burgundy), var(--gold));
    opacity: .3;
}
.cbi-step {
    text-align: center;
    position: relative;
    padding: 0 12px;
}
.cbi-step-number {
    width: 88px;
    height: 88px;
    margin: 0 auto 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--cream);
    border: 2px solid rgba(152,131,88,.2);
    border-radius: 50%;
    font-family: 'Cormorant Garamond', serif;
    font-size: 2rem;
    font-weight: 700;
    color: var(--burgundy);
    position: relative;
    z-index: 1;
    transition: all .4s ease;
}
.cbi-step:hover .cbi-step-number {
    background: var(--burgundy);
    color: var(--white);
    border-color: var(--burgundy);
    transform: scale(1.08);
    box-shadow: 0 12px 30px rgba(128,0,32,.25);
}
.cbi-step-title {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--charcoal);
    margin-bottom: 8px;
}
.cbi-step-desc {
    font-size: 13px;
    color: var(--text-muted);
    line-height: 1.6;
    margin: 0;
}

/* ===== ABOUT CBI — Split Content ===== */
.cbi-about {
    padding: 100px 0;
    background: var(--cream);
    position: relative;
    overflow: hidden;
}
.cbi-about::before {
    content: '';
    position: absolute;
    top: -200px;
    right: -200px;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, rgba(128,0,32,.04) 0%, transparent 70%);
    border-radius: 50%;
}
.cbi-about-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
}
.cbi-about-content h2 {
    color: var(--charcoal);
    margin-bottom: 24px;
}
.cbi-about-content p {
    font-size: 1rem;
    line-height: 1.85;
}
.cbi-about-sidebar {
    background: var(--white);
    border-radius: 24px;
    padding: 44px 36px;
    box-shadow: 0 20px 60px rgba(0,0,0,.06);
    border: 1px solid rgba(152,131,88,.1);
    position: relative;
}
.cbi-about-sidebar::before {
    content: '';
    position: absolute;
    top: 0;
    left: 32px;
    right: 32px;
    height: 4px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold));
    border-radius: 0 0 4px 4px;
}
.cbi-about-sidebar h3 {
    color: var(--charcoal);
    margin-bottom: 28px;
    font-size: 1.5rem;
}
.cbi-benefit-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 18px 0;
    border-bottom: 1px solid rgba(152,131,88,.1);
}
.cbi-benefit-item:last-child {
    border-bottom: none;
    padding-bottom: 0;
}
.cbi-benefit-icon {
    flex-shrink: 0;
    width: 36px;
    height: 36px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--burgundy) 0%, var(--burgundy-dark) 100%);
    border-radius: 10px;
}
.cbi-benefit-icon svg {
    width: 18px;
    height: 18px;
    color: var(--white);
}
.cbi-benefit-text {
    font-size: 15px;
    color: var(--text-dark);
    line-height: 1.6;
    font-weight: 500;
}

/* ===== PROGRAMS — Card Showcase ===== */
.cbi-programs {
    padding: 100px 0;
    background: var(--charcoal);
    position: relative;
}
.cbi-programs::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--gold), transparent);
}
.cbi-programs .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 60px;
}
.cbi-programs .section-header h2 {
    color: var(--white);
    margin-bottom: 16px;
}
.cbi-programs .section-header p {
    color: rgba(255,255,255,.65);
}
.cbi-programs-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}
.cbi-program-card {
    background: var(--charcoal-light);
    border: 1px solid rgba(201,169,98,.1);
    border-radius: 20px;
    padding: 40px 32px;
    position: relative;
    overflow: hidden;
    transition: all .4s ease;
}
.cbi-program-card::before {
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
.cbi-program-card:hover {
    border-color: rgba(201,169,98,.3);
    transform: translateY(-6px);
    box-shadow: 0 20px 50px rgba(0,0,0,.3);
}
.cbi-program-card:hover::before {
    opacity: 1;
}
.cbi-program-region {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--gold);
    margin-bottom: 16px;
}
.cbi-program-card h3 {
    color: var(--white);
    margin-bottom: 14px;
    font-size: 1.4rem;
}
.cbi-program-card p {
    color: rgba(255,255,255,.6);
    font-size: 14px;
    line-height: 1.7;
    margin-bottom: 24px;
}
.cbi-program-features {
    list-style: none;
    padding: 0;
    margin: 0 0 28px;
}
.cbi-program-features li {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px 0;
    font-size: 13px;
    color: rgba(255,255,255,.75);
}
.cbi-program-features li svg {
    width: 16px;
    height: 16px;
    color: var(--gold);
    flex-shrink: 0;
}

/* ===== ELIGIBILITY SECTION ===== */
.cbi-eligibility {
    padding: 100px 0;
    background: var(--white);
}
.cbi-eligibility-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}
.cbi-eligibility-content h2 {
    color: var(--charcoal);
    margin-bottom: 20px;
}
.cbi-eligibility-list {
    list-style: none;
    padding: 0;
    margin: 32px 0 0;
}
.cbi-eligibility-list li {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    padding: 16px 0;
    border-bottom: 1px solid rgba(152,131,88,.12);
}
.cbi-eligibility-list li:last-child {
    border-bottom: none;
}
.cbi-eligibility-check {
    flex-shrink: 0;
    width: 28px;
    height: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--gold) 0%, var(--gold-dark) 100%);
    border-radius: 50%;
}
.cbi-eligibility-check svg {
    width: 14px;
    height: 14px;
    color: var(--charcoal);
}
.cbi-eligibility-text {
    font-size: 15px;
    color: var(--text-dark);
    line-height: 1.65;
}
/* CTA Card inside eligibility */
.cbi-cta-card {
    background: linear-gradient(135deg, var(--charcoal) 0%, var(--charcoal-light) 100%);
    border-radius: 24px;
    padding: 52px 40px;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.cbi-cta-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, var(--burgundy), var(--gold), var(--burgundy));
}
.cbi-cta-card::after {
    content: '';
    position: absolute;
    bottom: -80px;
    right: -80px;
    width: 200px;
    height: 200px;
    background: radial-gradient(circle, rgba(201,169,98,.08) 0%, transparent 70%);
    border-radius: 50%;
}
.cbi-cta-card h3 {
    color: var(--white);
    font-size: 1.75rem;
    margin-bottom: 16px;
}
.cbi-cta-card p {
    color: rgba(255,255,255,.7);
    font-size: 15px;
    max-width: 320px;
    margin: 0 auto 32px;
}
.cbi-cta-card .btn {
    position: relative;
    z-index: 1;
}

/* ===== FAQ — Override for CBI branding ===== */
.cbi-faq {
    padding: 100px 0;
    background: var(--cream);
}
.cbi-faq .section-header {
    text-align: center;
    max-width: 680px;
    margin: 0 auto 60px;
}
.cbi-faq .section-header h2 {
    color: var(--charcoal);
    margin-bottom: 16px;
}
.cbi-faq-list {
    max-width: 800px;
    margin: 0 auto;
}
.cbi-faq-item {
    background: var(--white);
    border-radius: 16px;
    margin-bottom: 16px;
    overflow: hidden;
    border: 1px solid rgba(152,131,88,.12);
    transition: all .3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,.03);
}
.cbi-faq-item:hover {
    border-color: rgba(152,131,88,.3);
    box-shadow: 0 8px 24px rgba(0,0,0,.06);
}
.cbi-faq-question {
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
.cbi-faq-question:hover {
    color: var(--burgundy);
}
.cbi-faq-toggle {
    width: 36px;
    height: 36px;
    flex-shrink: 0;
    position: relative;
    background: var(--cream);
    border-radius: 50%;
    transition: all .3s ease;
}
.cbi-faq-toggle::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 14px;
    height: 2px;
    background: var(--burgundy);
    transform: translate(-50%, -50%);
}
.cbi-faq-toggle::after {
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
.cbi-faq-item.active .cbi-faq-toggle {
    background: var(--burgundy);
    transform: rotate(45deg);
}
.cbi-faq-item.active .cbi-faq-toggle::before,
.cbi-faq-item.active .cbi-faq-toggle::after {
    background: var(--white);
}
.cbi-faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height .4s ease;
}
.cbi-faq-answer-inner {
    padding: 0 30px 24px;
    color: var(--text-muted);
    font-size: 15px;
    line-height: 1.85;
}
.cbi-faq-item.active .cbi-faq-answer {
    max-height: 300px;
}

/* ===== FINAL CTA BAND ===== */
.cbi-final-cta {
    padding: 80px 0;
    background: var(--burgundy);
    position: relative;
    overflow: hidden;
    text-align: center;
}
.cbi-final-cta::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M40 0L80 40L40 80L0 40Z' fill='none' stroke='%23ffffff' stroke-opacity='0.05'/%3E%3C/svg%3E");
    pointer-events: none;
}
.cbi-final-cta .container {
    position: relative;
    z-index: 1;
}
.cbi-final-cta h2 {
    color: var(--white);
    margin-bottom: 16px;
}
.cbi-final-cta p {
    color: rgba(255,255,255,.8);
    font-size: 1.05rem;
    max-width: 560px;
    margin: 0 auto 32px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 1024px) {
    .cbi-hero-grid {
        grid-template-columns: 1fr;
        gap: 48px;
        text-align: center;
    }
    .cbi-hero-lead { margin: 0 auto; }
    .cbi-hero-highlights { justify-content: center; }
    .hero-form { max-width: 520px; margin: 0 auto; }
    .cbi-about-grid,
    .cbi-eligibility-grid { grid-template-columns: 1fr; gap: 48px; }
    .cbi-programs-grid { grid-template-columns: repeat(2, 1fr); }
    .cbi-process-timeline { grid-template-columns: repeat(3, 1fr); gap: 24px; }
    .cbi-process-timeline::before { display: none; }
    .cbi-step:nth-child(4),
    .cbi-step:nth-child(5) { margin-top: 24px; }
}
@media (max-width: 768px) {
    .cbi-hero { min-height: auto; padding: 110px 0 60px; }
    .cbi-process,
    .cbi-about,
    .cbi-programs,
    .cbi-eligibility,
    .cbi-faq,
    .cbi-final-cta { padding: 60px 0; }
    .cbi-programs-grid { grid-template-columns: 1fr; }
    .cbi-process-timeline { grid-template-columns: repeat(2, 1fr); }
    .cbi-step:nth-child(5) { grid-column: 1 / -1; }
    .cbi-hero-highlights { grid-template-columns: 1fr; gap: 12px; }
    .cbi-highlight { flex-direction: row; display: flex; align-items: center; gap: 14px; text-align: left; padding: 14px 18px; }
    .cbi-highlight-icon { margin: 0; }
    .hero-form { padding: 28px 20px; }
    .form-row { grid-template-columns: 1fr; }
    .cbi-about-sidebar { padding: 32px 24px; }
    .cbi-cta-card { padding: 40px 24px; }
}
@media (max-width: 480px) {
    .cbi-process-timeline { grid-template-columns: 1fr; }
    .cbi-step:nth-child(4),
    .cbi-step:nth-child(5) { margin-top: 0; }
    .cbi-step { padding: 0; }
}
</style>

<!-- ===== HERO ===== -->
<section class="cbi-hero">
    <div class="container">
        <div class="cbi-hero-grid">
            <div class="cbi-hero-content">
                <div class="cbi-hero-badge">Government-Approved Investment Programs for Acquiring Second Citizenship</div>
                <h1>Citizenship by<span>Investment</span></h1>
                <p class="cbi-hero-subtitle">A Legal Path to Second Citizenship</p>
                <p class="cbi-hero-lead">Citizenship by Investment is a government-regulated pathway that allows eligible individuals and families to obtain legal second citizenship through a qualifying economic contribution. These programs are established by national authorities and operate under defined legislative frameworks.</p>
                <p class="cbi-hero-lead" style="margin-top:-8px">Citizenship is granted only after regulatory review, due diligence, and approval by the respective government.</p>
                <div class="cbi-hero-highlights">
                    <div class="cbi-highlight">
                        <div class="cbi-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                        </div>
                        <span class="cbi-highlight-label">Legal Second Citizenship</span>
                    </div>
                    <div class="cbi-highlight">
                        <div class="cbi-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                        </div>
                        <span class="cbi-highlight-label">Visa-Free Travel Access</span>
                    </div>
                    <div class="cbi-highlight">
                        <div class="cbi-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                        </div>
                        <span class="cbi-highlight-label">Family Inclusion</span>
                    </div>
                </div>
            </div>
            <x-landing-form
                source="citizenship-by-investment"
                consultancy="citizenship-by-investment"
                title="Check Eligibility for Citizenship by Investment Programs"
                subtitle="Share your details and our experts will assess your eligibility."
            >Check Eligibility</x-landing-form>
        </div>
    </div>
</section>


<!-- ===== HOW IT WORKS — Timeline ===== -->
<section class="cbi-process">
    <div class="container">
        <div class="section-header">
            <h2>How Citizenship by Investment Programs Operate</h2>
            <p>Citizenship by Investment programs typically follow a structured framework. Each country defines its own regulatory standards and approval procedures.</p>
        </div>
        <div class="cbi-process-timeline">
            <div class="cbi-step">
                <div class="cbi-step-number">01</div>
                <div class="cbi-step-title">Documentation</div>
                <p class="cbi-step-desc">Submission of eligibility documentation</p>
            </div>
            <div class="cbi-step">
                <div class="cbi-step-number">02</div>
                <div class="cbi-step-title">Due Diligence</div>
                <p class="cbi-step-desc">Government due diligence and background verification</p>
            </div>
            <div class="cbi-step">
                <div class="cbi-step-number">03</div>
                <div class="cbi-step-title">Approval</div>
                <p class="cbi-step-desc">Approval in principle by the issuing authority</p>
            </div>
            <div class="cbi-step">
                <div class="cbi-step-number">04</div>
                <div class="cbi-step-title">Investment</div>
                <p class="cbi-step-desc">Completion of qualifying investment</p>
            </div>
            <div class="cbi-step">
                <div class="cbi-step-number">05</div>
                <div class="cbi-step-title">Citizenship</div>
                <p class="cbi-step-desc">Issuance of citizenship certificate and passport</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== ABOUT CBI + BENEFITS ===== -->
<section class="cbi-about">
    <div class="container">
        <div class="cbi-about-grid">
            <div class="cbi-about-content">
                <h2>What Is Citizenship by Investment and How Does It Work?</h2>
                <p>Citizenship by Investment refers to programs enacted by sovereign states that enable foreign applicants to acquire citizenship in exchange for an approved investment. The investment may be directed toward national development funds, real economy initiatives, or other government-approved structures.</p>
                <p>Applicants undergo strict background checks, compliance screening, and documentation verification before citizenship is granted.</p>
            </div>
            <div class="cbi-about-sidebar">
                <h3>Benefits of Citizenship by Investment for Global Families</h3>
                <div class="cbi-benefit-item">
                    <div class="cbi-benefit-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg>
                    </div>
                    <span class="cbi-benefit-text">Legal acquisition of second citizenship under government legislation</span>
                </div>
                <div class="cbi-benefit-item">
                    <div class="cbi-benefit-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </div>
                    <span class="cbi-benefit-text">Access to additional international travel privileges</span>
                </div>
                <div class="cbi-benefit-item">
                    <div class="cbi-benefit-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <span class="cbi-benefit-text">Family inclusion under one structured application</span>
                </div>
                <div class="cbi-benefit-item">
                    <div class="cbi-benefit-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <span class="cbi-benefit-text">Diversification of nationality for long-term planning</span>
                </div>
                <div class="cbi-benefit-item">
                    <div class="cbi-benefit-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                    </div>
                    <span class="cbi-benefit-text">Sovereign citizenship status issued by the approving country</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== PROGRAMS SHOWCASE ===== -->
<section class="cbi-programs">
    <div class="container">
        <div class="section-header">
            <h2>Popular Citizenship by Investment Programs Worldwide</h2>
        </div>
        <div class="cbi-programs-grid">
            <div class="cbi-program-card">
                <div class="cbi-program-region">Caribbean</div>
                <h3>Caribbean Citizenship by Investment Programs</h3>
                <p>Several Caribbean nations operate legally established Citizenship by Investment programs that provide second citizenship following approved economic contribution and due diligence clearance.</p>
            </div>
            <div class="cbi-program-card">
                <div class="cbi-program-region">Global</div>
                <h3>Citizenship by Investment for Global Mobility</h3>
                <p>Second citizenship obtained through investment may provide expanded travel access and international mobility, depending on the issuing country.</p>
            </div>
            <div class="cbi-program-card">
                <div class="cbi-program-region">Family</div>
                <h3>Citizenship by Investment for Families</h3>
                <p>Most programs allow inclusion of immediate family members under a single application, subject to eligibility and regulatory conditions.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== ELIGIBILITY ===== -->
<section class="cbi-eligibility">
    <div class="container">
        <div class="cbi-eligibility-grid">
            <div class="cbi-eligibility-content">
                <h2>Who Is Eligible for Citizenship by Investment Programs?</h2>
                <p>Eligibility is determined by the laws of the issuing country. Applicants are typically required to:</p>
                <ul class="cbi-eligibility-list">
                    <li>
                        <span class="cbi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="cbi-eligibility-text">Meet financial qualification thresholds</span>
                    </li>
                    <li>
                        <span class="cbi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="cbi-eligibility-text">Provide verified source of funds documentation</span>
                    </li>
                    <li>
                        <span class="cbi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="cbi-eligibility-text">Pass strict due diligence and background screening</span>
                    </li>
                    <li>
                        <span class="cbi-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="cbi-eligibility-text">Comply with application procedures defined by the government</span>
                    </li>
                </ul>
                <p style="margin-top:24px">Approval is granted only after regulatory review and official confirmation.</p>
            </div>
            <div class="cbi-cta-card">
                <h3>Check Eligibility for Citizenship by Investment Programs</h3>
                <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="cbi-faq">
    <div class="container">
        <div class="section-header">
            <h2>Citizenship by Investment FAQs</h2>
        </div>
        <div class="cbi-faq-list">
            <div class="faq-item cbi-faq-item active">
                <div class="faq-question cbi-faq-question">What is Citizenship by Investment?<span class="cbi-faq-toggle"></span></div>
                <div class="cbi-faq-answer"><div class="cbi-faq-answer-inner">It is a government-approved program that grants second citizenship in exchange for a qualifying investment.</div></div>
            </div>
            <div class="cbi-faq-item faq-item">
                <div class="cbi-faq-question faq-question">Is Citizenship by Investment legal?<span class="cbi-faq-toggle"></span></div>
                <div class="cbi-faq-answer"><div class="cbi-faq-answer-inner">Yes. These programs operate under national legislation and are regulated by sovereign governments.</div></div>
            </div>
            <div class="cbi-faq-item faq-item">
                <div class="cbi-faq-question faq-question">How long does Citizenship by Investment take?<span class="cbi-faq-toggle"></span></div>
                <div class="cbi-faq-answer"><div class="cbi-faq-answer-inner">Processing timelines vary depending on the issuing country and due diligence procedures.</div></div>
            </div>
            <div class="cbi-faq-item faq-item">
                <div class="cbi-faq-question faq-question">Can families apply together under Citizenship by Investment?<span class="cbi-faq-toggle"></span></div>
                <div class="cbi-faq-answer"><div class="cbi-faq-answer-inner">Yes. Most programs allow inclusion of immediate family members under one structured application.</div></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="cbi-final-cta">
    <div class="container">
        <h2>Check Eligibility for Citizenship by Investment Programs</h2>
        <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
    </div>
</section>

<!-- ===== WhatsApp Float ===== -->
<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
@endsection
