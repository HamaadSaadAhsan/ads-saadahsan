@extends('layouts.landing')

@section('meta_title', 'Investment Citizenship | Legal Second Citizenship Through Government Programs')
@section('meta_description', 'Explore investment citizenship programs that provide legal second citizenship through government-approved economic contribution pathways.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/investment-citizenship">
<meta property="og:url" content="https://ads.saadahsan.com/investment-citizenship">
<meta property="og:type" content="website">
<meta property="og:title" content="Investment Citizenship | Legal Second Citizenship Through Government Programs">
<meta property="og:description" content="Explore investment citizenship programs that provide legal second citizenship through government-approved economic contribution pathways.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Investment Citizenship | Legal Second Citizenship Through Government Programs">
<meta name="twitter:description" content="Explore investment citizenship programs that provide legal second citizenship through government-approved economic contribution pathways.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Investment Citizenship | Legal Second Citizenship Through Government Programs","description":"Explore investment citizenship programs that provide legal second citizenship through government-approved economic contribution pathways.","url":"https://ads.saadahsan.com/investment-citizenship","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"What is investment citizenship?","acceptedAnswer":{"@@type":"Answer","text":"It is a government-approved program that grants citizenship in exchange for a qualifying economic contribution."}},
    {"@@type":"Question","name":"Is investment citizenship legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. These programs operate under national legislation and are regulated by sovereign governments."}},
    {"@@type":"Question","name":"How long does investment citizenship take?","acceptedAnswer":{"@@type":"Answer","text":"Processing timelines vary depending on the issuing country and due diligence procedures."}},
    {"@@type":"Question","name":"Can families apply under investment citizenship programs?","acceptedAnswer":{"@@type":"Answer","text":"Many programs allow inclusion of immediate family members under one structured application."}}
  ]
}
</script>
@endpush

@section('content')
<style>
/* ===== INVESTMENT CITIZENSHIP — CAPITAL BRIDGE ===== */
.icz-hero{min-height:100vh;padding:140px 0 100px;position:relative;display:flex;align-items:center;background:var(--charcoal);overflow:hidden}
.icz-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 60% 55% at 18% 55%,rgba(128,0,32,.18) 0%,transparent 65%),radial-gradient(ellipse 50% 45% at 82% 28%,rgba(201,169,98,.1) 0%,transparent 55%)}
.icz-hero::after{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M50 0 Q75 50 50 100 Q25 50 50 0Z' fill='none' stroke='%23C9A962' stroke-opacity='0.02' stroke-width='0.5'/%3E%3C/svg%3E");pointer-events:none}
.icz-hero .container{position:relative;z-index:1}
.icz-hero-grid{display:grid;grid-template-columns:1fr 460px;gap:60px;align-items:center}
.icz-hero-badge{display:inline-flex;align-items:center;gap:10px;padding:8px 20px;background:rgba(201,169,98,.1);border:1px solid rgba(201,169,98,.25);border-radius:50px;font-size:11px;font-weight:600;letter-spacing:2.5px;text-transform:uppercase;color:var(--gold);margin-bottom:28px}
.icz-hero-badge::before{content:'';width:6px;height:6px;background:var(--gold);border-radius:50%;animation:pulse 2s infinite}
.icz-hero h1{color:var(--white);font-size:clamp(2.8rem,5.5vw,4.2rem);line-height:1.1;margin-bottom:16px}
.icz-hero h1 span{display:block;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-light) 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.icz-hero-subtitle{font-family:'Cormorant Garamond','Cormorant Garamond Fallback',Georgia,serif;font-size:1.35rem;font-weight:500;font-style:italic;color:var(--gold-light);margin-bottom:20px;opacity:.9}
.icz-hero-lead{font-size:1rem;line-height:1.85;color:rgba(255,255,255,.8);max-width:540px;margin-bottom:0}
.icz-hero-highlights{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:40px;padding-top:36px;border-top:1px solid rgba(201,169,98,.15)}
.icz-highlight{text-align:center;padding:20px 12px;background:rgba(201,169,98,.06);border:1px solid rgba(201,169,98,.12);border-radius:16px;transition:color .3s ease,background .3s ease,border-color .3s ease,transform .3s ease,box-shadow .3s ease,opacity .3s ease}
.icz-highlight:hover{background:rgba(201,169,98,.12);border-color:rgba(201,169,98,.25);transform:translateY(-3px)}
.icz-highlight-icon{width:44px;height:44px;margin:0 auto 12px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-dark) 100%);border-radius:12px}
.icz-highlight-icon svg{width:22px;height:22px;color:var(--charcoal)}
.icz-highlight-label{font-size:12px;font-weight:600;color:var(--white);letter-spacing:.5px;line-height:1.4}

/* Process */
.icz-process{padding:100px 0;background:var(--white)}
.icz-process .section-header{text-align:center;max-width:680px;margin:0 auto 60px}
.icz-process .section-header h2{color:var(--charcoal);margin-bottom:16px}
.icz-cards{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;max-width:960px;margin:0 auto}
.icz-card{background:var(--cream);border-radius:20px;padding:36px 28px;border:1px solid rgba(152,131,88,.1);transition:color .4s ease,background .4s ease,border-color .4s ease,transform .4s ease,box-shadow .4s ease,opacity .4s ease;position:relative;overflow:hidden}
.icz-card::after{content:'';position:absolute;bottom:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--burgundy),var(--gold));opacity:0;transition:opacity .3s ease}
.icz-card:hover{transform:translateY(-4px);box-shadow:0 16px 40px rgba(0,0,0,.08)}
.icz-card:hover::after{opacity:1}
.icz-card-num{display:inline-flex;align-items:center;justify-content:center;width:48px;height:48px;background:linear-gradient(135deg,var(--burgundy),var(--burgundy-dark));border-radius:14px;font-family:'Cormorant Garamond','Cormorant Garamond Fallback',Georgia,serif;font-size:1.3rem;font-weight:700;color:var(--white);margin-bottom:20px}
.icz-card-title{font-family:'Cormorant Garamond','Cormorant Garamond Fallback',Georgia,serif;font-size:1.15rem;font-weight:600;color:var(--charcoal);margin-bottom:8px}
.icz-card-desc{font-size:14px;color:var(--text-muted);line-height:1.65;margin:0}

/* About */
.icz-about{padding:100px 0;background:var(--cream);position:relative;overflow:hidden}
.icz-about::before{content:'';position:absolute;top:-120px;right:-120px;width:400px;height:400px;background:radial-gradient(circle,rgba(128,0,32,.04) 0%,transparent 70%);border-radius:50%}
.icz-about-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start}
.icz-about-content h2{color:var(--charcoal);margin-bottom:24px}
.icz-about-content p{font-size:1rem;line-height:1.85}
.icz-benefits-card{background:var(--white);border-radius:24px;padding:44px 36px;box-shadow:0 20px 60px rgba(0,0,0,.06);border:1px solid rgba(152,131,88,.1);position:relative}
.icz-benefits-card::before{content:'';position:absolute;top:0;left:32px;right:32px;height:4px;background:linear-gradient(90deg,var(--burgundy),var(--gold));border-radius:0 0 4px 4px}
.icz-benefits-card h3{color:var(--charcoal);margin-bottom:28px;font-size:1.5rem}
.icz-ben-item{display:flex;align-items:flex-start;gap:16px;padding:18px 0;border-bottom:1px solid rgba(152,131,88,.1)}
.icz-ben-item:last-child{border-bottom:none;padding-bottom:0}
.icz-ben-icon{flex-shrink:0;width:36px;height:36px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--burgundy) 0%,var(--burgundy-dark) 100%);border-radius:10px}
.icz-ben-icon svg{width:18px;height:18px;color:var(--white)}
.icz-ben-text{font-size:15px;color:var(--text-dark);line-height:1.6;font-weight:500}

/* Eligibility */
.icz-eligibility{padding:100px 0;background:var(--white)}
.icz-eligibility-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
.icz-eligibility-content h2{color:var(--charcoal);margin-bottom:20px}
.icz-eligibility-list{list-style:none;padding:0;margin:32px 0 0}
.icz-eligibility-list li{display:flex;align-items:flex-start;gap:16px;padding:16px 0;border-bottom:1px solid rgba(152,131,88,.12)}
.icz-eligibility-list li:last-child{border-bottom:none}
.icz-eligibility-check{flex-shrink:0;width:28px;height:28px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-dark) 100%);border-radius:50%}
.icz-eligibility-check svg{width:14px;height:14px;color:var(--charcoal)}
.icz-eligibility-text{font-size:15px;color:var(--text-dark);line-height:1.65}
.icz-cta-card{background:linear-gradient(135deg,var(--charcoal) 0%,var(--charcoal-light) 100%);border-radius:24px;padding:52px 40px;text-align:center;position:relative;overflow:hidden}
.icz-cta-card::before{content:'';position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,var(--burgundy),var(--gold),var(--burgundy))}
.icz-cta-card::after{content:'';position:absolute;bottom:-80px;right:-80px;width:200px;height:200px;background:radial-gradient(circle,rgba(201,169,98,.08) 0%,transparent 70%);border-radius:50%}
.icz-cta-card h3{color:var(--white);font-size:1.75rem;margin-bottom:16px}
.icz-cta-card .btn{position:relative;z-index:1}

/* FAQ */
.icz-faq{padding:100px 0;background:var(--cream)}
.icz-faq .section-header{text-align:center;max-width:680px;margin:0 auto 60px}
.icz-faq .section-header h2{color:var(--charcoal);margin-bottom:16px}
.icz-faq-list{max-width:800px;margin:0 auto}
.icz-faq-item{background:var(--white);border-radius:16px;margin-bottom:16px;overflow:hidden;border:1px solid rgba(152,131,88,.12);transition:color .3s ease,background .3s ease,border-color .3s ease,transform .3s ease,box-shadow .3s ease,opacity .3s ease;box-shadow:0 2px 8px rgba(0,0,0,.03)}
.icz-faq-item:hover{border-color:rgba(152,131,88,.3);box-shadow:0 8px 24px rgba(0,0,0,.06)}
.icz-faq-question{padding:24px 30px;font-family:'Cormorant Garamond','Cormorant Garamond Fallback',Georgia,serif;font-size:1.2rem;font-weight:600;color:var(--charcoal);cursor:pointer;display:flex;justify-content:space-between;align-items:center;transition:color .3s ease}
.icz-faq-question:hover{color:var(--burgundy)}
.icz-faq-toggle{width:36px;height:36px;flex-shrink:0;position:relative;background:var(--cream);border-radius:50%;transition:color .3s ease,background .3s ease,border-color .3s ease,transform .3s ease,box-shadow .3s ease,opacity .3s ease}
.icz-faq-toggle::before{content:'';position:absolute;top:50%;left:50%;width:14px;height:2px;background:var(--burgundy);transform:translate(-50%,-50%)}
.icz-faq-toggle::after{content:'';position:absolute;top:50%;left:50%;width:2px;height:14px;background:var(--burgundy);transform:translate(-50%,-50%);transition:color .3s ease,background .3s ease,border-color .3s ease,transform .3s ease,box-shadow .3s ease,opacity .3s ease}
.icz-faq-item.active .icz-faq-toggle{background:var(--burgundy);transform:rotate(45deg)}
.icz-faq-item.active .icz-faq-toggle::before,.icz-faq-item.active .icz-faq-toggle::after{background:var(--white)}
.icz-faq-answer{max-height:0;overflow:hidden;transition:max-height .4s ease}
.icz-faq-answer-inner{padding:0 30px 24px;color:var(--text-muted);font-size:15px;line-height:1.85}
.icz-faq-item.active .icz-faq-answer{max-height:300px}

/* Final CTA */
.icz-final-cta{padding:80px 0;background:var(--burgundy);position:relative;overflow:hidden;text-align:center}
.icz-final-cta::before{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M50 0 Q75 50 50 100 Q25 50 50 0Z' fill='none' stroke='%23ffffff' stroke-opacity='0.03' stroke-width='0.5'/%3E%3C/svg%3E");pointer-events:none}
.icz-final-cta .container{position:relative;z-index:1}
.icz-final-cta h2{color:var(--white);margin-bottom:16px}
.icz-final-cta p{color:rgba(255,255,255,.8);font-size:1.05rem;max-width:560px;margin:0 auto 32px}

/* Responsive */
@media(max-width:1024px){.icz-hero-grid{grid-template-columns:1fr;gap:48px;text-align:center}.icz-hero-lead{margin:0 auto}.icz-hero-highlights{justify-content:center}.hero-form{max-width:520px;margin:0 auto}.icz-about-grid,.icz-eligibility-grid{grid-template-columns:1fr;gap:48px}.icz-cards{grid-template-columns:repeat(2,1fr)}}
@media(max-width:768px){.icz-hero{min-height:auto;padding:110px 0 60px}.icz-process,.icz-about,.icz-eligibility,.icz-faq,.icz-final-cta{padding:60px 0}.icz-hero-highlights{grid-template-columns:1fr;gap:12px}.icz-highlight{flex-direction:row;display:flex;align-items:center;gap:14px;text-align:left;padding:14px 18px}.icz-highlight-icon{margin:0}.hero-form{padding:28px 20px}.form-row{grid-template-columns:1fr}.icz-benefits-card{padding:32px 24px}.icz-cta-card{padding:40px 24px}.icz-cards{grid-template-columns:1fr}}
</style>

<!-- ===== HERO ===== -->
<section class="icz-hero">
    <div class="container">
        <div class="icz-hero-grid">
            <div class="icz-hero-content">
                <div class="icz-hero-badge">Legal Government Programs</div>
                <h1>Investment Citizenship<span>Through Legal Government Programs</span></h1>
                <p class="icz-hero-subtitle">Structured Citizenship Programs Based on Regulated Investment</p>
                <p class="icz-hero-lead">Investment citizenship refers to government-established programs that grant citizenship to eligible applicants in exchange for a qualifying economic contribution. These programs operate under national legislation and are administered by sovereign authorities.</p>
                <p class="icz-hero-lead" style="margin-top:-8px">Citizenship is issued only after regulatory review, due diligence screening, and formal government approval.</p>
                <div class="icz-hero-highlights">
                    <div class="icz-highlight">
                        <div class="icz-highlight-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg></div>
                        <span class="icz-highlight-label">Government-Established Programs</span>
                    </div>
                    <div class="icz-highlight">
                        <div class="icz-highlight-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg></div>
                        <span class="icz-highlight-label">National Legal Framework</span>
                    </div>
                    <div class="icz-highlight">
                        <div class="icz-highlight-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg></div>
                        <span class="icz-highlight-label">Family Inclusion Eligible</span>
                    </div>
                </div>
            </div>
            <x-landing-form
                source="investment-citizenship"
                consultancy="citizenship-by-investment"
                title="Check Eligibility for Investment Citizenship Programs"
                subtitle="Share your details and our experts will assess your eligibility."
            >Check Eligibility</x-landing-form>
        </div>
    </div>
</section>

<!-- ===== PROCESS ===== -->
<section class="icz-process">
    <div class="container">
        <div class="section-header"><h2>How Investment Citizenship Programs Work</h2><p>Each country defines its own regulatory standards and approval procedures.</p></div>
        <div class="icz-cards">
            <div class="icz-card"><div class="icz-card-num">01</div><div class="icz-card-title">Initial Eligibility Assessment</div><p class="icz-card-desc">Initial eligibility assessment</p></div>
            <div class="icz-card"><div class="icz-card-num">02</div><div class="icz-card-title">Documentation & Verification</div><p class="icz-card-desc">Submission of documentation and identity verification</p></div>
            <div class="icz-card"><div class="icz-card-num">03</div><div class="icz-card-title">Due Diligence & Compliance</div><p class="icz-card-desc">Government due diligence and compliance review</p></div>
            <div class="icz-card"><div class="icz-card-num">04</div><div class="icz-card-title">Approval in Principle</div><p class="icz-card-desc">Approval in principle by national authorities</p></div>
            <div class="icz-card"><div class="icz-card-num">05</div><div class="icz-card-title">Required Investment</div><p class="icz-card-desc">Completion of the required investment</p></div>
            <div class="icz-card"><div class="icz-card-num">06</div><div class="icz-card-title">Citizenship & Passport</div><p class="icz-card-desc">Issuance of citizenship certificate and passport</p></div>
        </div>
    </div>
</section>

<!-- ===== WORLDWIDE ===== -->
<section style="padding:80px 0;background:var(--cream)">
    <div class="container" style="max-width:800px;text-align:center">
        <h2 style="color:var(--charcoal);margin-bottom:20px">Investment Citizenship Programs Worldwide</h2>
        <p style="font-size:1rem;line-height:1.85;color:var(--text-muted);margin-bottom:16px">Several sovereign states operate legally established investment citizenship programs. These programs are enacted under national law and are designed to attract foreign capital while maintaining strict compliance and due diligence procedures.</p>
        <p style="font-size:1rem;line-height:1.85;color:var(--text-muted)">Program structure, processing timelines, and eligibility criteria vary by country.</p>
    </div>
</section>

<!-- ===== ABOUT + BENEFITS ===== -->
<section class="icz-about">
    <div class="container">
        <div class="icz-about-grid">
            <div class="icz-about-content">
                <h2>What Is Investment Citizenship?</h2>
                <p>Investment citizenship is a legal framework that allows foreign nationals to obtain citizenship of a country by completing an approved investment. The contribution is typically directed toward national development initiatives or other government-authorized economic structures.</p>
                <p>Applicants must satisfy eligibility requirements and pass strict background checks before citizenship status is granted.</p>
            </div>
            <div class="icz-benefits-card">
                <h3>Benefits of Investment Citizenship</h3>
                <div class="icz-ben-item"><div class="icz-ben-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg></div><span class="icz-ben-text">Legal acquisition of second citizenship under national legislation</span></div>
                <div class="icz-ben-item"><div class="icz-ben-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg></div><span class="icz-ben-text">Citizenship status issued by a sovereign government</span></div>
                <div class="icz-ben-item"><div class="icz-ben-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg></div><span class="icz-ben-text">Diversification of nationality for long-term planning</span></div>
                <div class="icz-ben-item"><div class="icz-ben-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg></div><span class="icz-ben-text">Family inclusion under structured applications</span></div>
                <div class="icz-ben-item"><div class="icz-ben-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg></div><span class="icz-ben-text">Regulated and transparent approval process</span></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== ELIGIBILITY ===== -->
<section class="icz-eligibility">
    <div class="container">
        <div class="icz-eligibility-grid">
            <div class="icz-eligibility-content">
                <h2>Who Is Eligible for Investment Citizenship?</h2>
                <p>Eligibility depends on the legal framework of the issuing country. Applicants are generally required to:</p>
                <ul class="icz-eligibility-list">
                    <li><span class="icz-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="icz-eligibility-text">Meet financial qualification thresholds</span></li>
                    <li><span class="icz-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="icz-eligibility-text">Demonstrate lawful source of funds</span></li>
                    <li><span class="icz-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="icz-eligibility-text">Pass comprehensive background screening</span></li>
                    <li><span class="icz-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span><span class="icz-eligibility-text">Comply with official citizenship application procedures</span></li>
                </ul>
                <p style="margin-top:24px">Citizenship is granted only after formal approval by the relevant government authority.</p>
            </div>
            <div class="icz-cta-card">
                <h3>Check Eligibility for Investment Citizenship Programs</h3>
                <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="icz-faq">
    <div class="container">
        <div class="section-header"><h2>Investment Citizenship FAQs</h2></div>
        <div class="icz-faq-list">
            <div class="icz-faq-item faq-item active"><div class="icz-faq-question faq-question">What is investment citizenship?<span class="icz-faq-toggle"></span></div><div class="icz-faq-answer"><div class="icz-faq-answer-inner">It is a government-approved program that grants citizenship in exchange for a qualifying economic contribution.</div></div></div>
            <div class="icz-faq-item faq-item"><div class="icz-faq-question faq-question">Is investment citizenship legal?<span class="icz-faq-toggle"></span></div><div class="icz-faq-answer"><div class="icz-faq-answer-inner">Yes. These programs operate under national legislation and are regulated by sovereign governments.</div></div></div>
            <div class="icz-faq-item faq-item"><div class="icz-faq-question faq-question">How long does investment citizenship take?<span class="icz-faq-toggle"></span></div><div class="icz-faq-answer"><div class="icz-faq-answer-inner">Processing timelines vary depending on the issuing country and due diligence procedures.</div></div></div>
            <div class="icz-faq-item faq-item"><div class="icz-faq-question faq-question">Can families apply under investment citizenship programs?<span class="icz-faq-toggle"></span></div><div class="icz-faq-answer"><div class="icz-faq-answer-inner">Many programs allow inclusion of immediate family members under one structured application.</div></div></div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="icz-final-cta">
    <div class="container">
        <h2>Check Eligibility for Investment Citizenship Programs</h2>
        <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
    </div>
</section>

<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
@endsection
