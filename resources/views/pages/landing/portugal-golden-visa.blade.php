@extends('layouts.landing')

@section('meta_title', 'Portugal Golden Visa | Legal Residency by Investment Program')
@section('meta_description', 'Learn about the Portugal Golden Visa program, a government-approved residency by investment pathway offering legal residence in Portugal.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/portugal-golden-visa">
<meta property="og:url" content="https://ads.saadahsan.com/portugal-golden-visa">
<meta property="og:type" content="website">
<meta property="og:title" content="Portugal Golden Visa | Legal Residency by Investment Program">
<meta property="og:description" content="Learn about the Portugal Golden Visa program, a government-approved residency by investment pathway offering legal residence in Portugal.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Portugal Golden Visa | Legal Residency by Investment Program">
<meta name="twitter:description" content="Learn about the Portugal Golden Visa program, a government-approved residency by investment pathway offering legal residence in Portugal.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Portugal Golden Visa | Legal Residency by Investment Program","description":"Learn about the Portugal Golden Visa program, a government-approved residency by investment pathway offering legal residence in Portugal.","url":"https://ads.saadahsan.com/portugal-golden-visa","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"Is the Portugal Golden Visa legal?","acceptedAnswer":{"@@type":"Answer","text":"Yes. It is a government-regulated residency by investment program established under Portuguese law."}},
    {"@@type":"Question","name":"Does the Portugal Golden Visa grant citizenship?","acceptedAnswer":{"@@type":"Answer","text":"No. It grants residency. Citizenship may require separate naturalization requirements under Portuguese law."}},
    {"@@type":"Question","name":"Can family members be included?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Eligible applicants may include immediate family members under one structured application."}},
    {"@@type":"Question","name":"Is government approval required?","acceptedAnswer":{"@@type":"Answer","text":"Yes. All applications are subject to official review and approval."}}
  ]
}
</script>
@endpush

@section('content')
<style>
/* ===== PGV PAGE — IBERIAN GATEWAY DESIGN ===== */
.pgv-hero{min-height:100vh;padding:140px 0 100px;position:relative;display:flex;align-items:center;background:var(--charcoal);overflow:hidden}
.pgv-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 70% 55% at 25% 45%,rgba(128,0,32,.22) 0%,transparent 65%),radial-gradient(ellipse 55% 45% at 75% 35%,rgba(201,169,98,.1) 0%,transparent 55%)}
.pgv-hero::after{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='120' height='160' viewBox='0 0 120 160' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M60 0 C60 0 120 50 120 100 C120 133 93 160 60 160 C27 160 0 133 0 100 C0 50 60 0 60 0Z' fill='none' stroke='%23C9A962' stroke-opacity='0.035'/%3E%3C/svg%3E");pointer-events:none}
.pgv-hero .container{position:relative;z-index:1}
.pgv-hero-grid{display:grid;grid-template-columns:1fr 460px;gap:60px;align-items:center}
.pgv-hero-badge{display:inline-flex;align-items:center;gap:10px;padding:8px 22px;background:rgba(201,169,98,.1);border:1px solid rgba(201,169,98,.25);border-radius:50px;font-size:11px;font-weight:600;letter-spacing:2.5px;text-transform:uppercase;color:var(--gold);margin-bottom:28px}
.pgv-hero-badge::before{content:'';width:6px;height:6px;background:var(--gold);border-radius:50%;animation:pulse 2s infinite}
@@keyframes pulse{0%,100%{opacity:1}50%{opacity:.4}}
.pgv-hero h1{color:var(--white);font-size:clamp(2.6rem,5vw,3.8rem);line-height:1.1;margin-bottom:16px}
.pgv-hero h1 span{display:block;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-light) 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.pgv-hero-subtitle{font-family:'Cormorant Garamond','Cormorant Garamond Fallback',Georgia,serif;font-size:1.3rem;font-weight:500;font-style:italic;color:var(--gold-light);margin-bottom:20px;opacity:.9}
.pgv-hero-lead{font-size:1rem;line-height:1.85;color:rgba(255,255,255,.8);max-width:540px;margin-bottom:12px}
.pgv-hero-highlights{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:36px;padding-top:32px;border-top:1px solid rgba(201,169,98,.15)}
.pgv-highlight{text-align:center;padding:20px 12px;background:rgba(201,169,98,.06);border:1px solid rgba(201,169,98,.12);border-radius:16px;transition:color .3s ease,background .3s ease,border-color .3s ease,transform .3s ease,box-shadow .3s ease,opacity .3s ease}
.pgv-highlight:hover{background:rgba(201,169,98,.12);border-color:rgba(201,169,98,.25);transform:translateY(-3px)}
.pgv-highlight-icon{width:44px;height:44px;margin:0 auto 12px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-dark) 100%);border-radius:12px}
.pgv-highlight-icon svg{width:22px;height:22px;color:var(--charcoal)}
.pgv-highlight-label{font-size:12px;font-weight:600;color:var(--white);letter-spacing:.5px;line-height:1.4}

/* ===== PROCESS — Cascading Cards ===== */
.pgv-process{padding:100px 0;background:var(--white);position:relative}
.pgv-process .pgv-section-header{text-align:center;max-width:700px;margin:0 auto 70px}
.pgv-process .pgv-section-header h2{color:var(--charcoal);margin-bottom:16px}
.pgv-process .pgv-section-header p{color:var(--text-muted);font-size:1rem;line-height:1.75}
.pgv-cascade{display:grid;grid-template-columns:repeat(3,1fr);gap:28px;max-width:1100px;margin:0 auto}
.pgv-cascade-card{background:var(--cream);border:1px solid rgba(152,131,88,.12);border-radius:20px;padding:36px 28px;position:relative;overflow:hidden;transition:color .4s ease,background .4s ease,border-color .4s ease,transform .4s ease,box-shadow .4s ease,opacity .4s ease}
.pgv-cascade-card::before{content:'';position:absolute;top:0;left:0;width:4px;height:100%;background:linear-gradient(180deg,var(--burgundy),var(--gold));opacity:.5;transition:opacity .4s ease}
.pgv-cascade-card:hover{transform:translateY(-6px);box-shadow:0 16px 44px rgba(0,0,0,.08);border-color:rgba(152,131,88,.25)}
.pgv-cascade-card:hover::before{opacity:1}
.pgv-cascade-card:nth-child(2){transform:translateY(20px)}
.pgv-cascade-card:nth-child(4){transform:translateY(20px)}
.pgv-cascade-card:nth-child(6){transform:translateY(20px)}
.pgv-cascade-card:nth-child(2):hover{transform:translateY(14px)}
.pgv-cascade-card:nth-child(4):hover{transform:translateY(14px)}
.pgv-cascade-card:nth-child(6):hover{transform:translateY(14px)}
.pgv-cascade-num{font-family:'Cormorant Garamond','Cormorant Garamond Fallback',Georgia,serif;font-size:2.4rem;font-weight:700;color:var(--burgundy);opacity:.25;line-height:1;margin-bottom:14px}
.pgv-cascade-title{font-family:'Cormorant Garamond','Cormorant Garamond Fallback',Georgia,serif;font-size:1.15rem;font-weight:600;color:var(--charcoal);margin-bottom:8px}
.pgv-cascade-desc{font-size:13.5px;color:var(--text-muted);line-height:1.65;margin:0}
.pgv-process-closing{text-align:center;margin-top:48px;font-size:15px;color:var(--text-muted);font-style:italic}

/* ===== ABOUT — Split Content + Features Card ===== */
.pgv-about{padding:100px 0;background:var(--cream);position:relative;overflow:hidden}
.pgv-about::before{content:'';position:absolute;top:-150px;right:-150px;width:400px;height:400px;background:radial-gradient(circle,rgba(128,0,32,.04) 0%,transparent 70%);border-radius:50%}
.pgv-about-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start}
.pgv-about-content h3{color:var(--charcoal);margin-bottom:24px;font-size:1.75rem}
.pgv-about-content p{font-size:1rem;line-height:1.85;color:var(--text-dark);margin-bottom:16px}
.pgv-about-sidebar{background:var(--white);border-radius:24px;padding:44px 36px;box-shadow:0 20px 60px rgba(0,0,0,.06);border:1px solid rgba(152,131,88,.1);position:relative}
.pgv-about-sidebar::before{content:'';position:absolute;top:0;left:32px;right:32px;height:4px;background:linear-gradient(90deg,var(--burgundy),var(--gold));border-radius:0 0 4px 4px}
.pgv-about-sidebar h3{color:var(--charcoal);margin-bottom:28px;font-size:1.5rem}
.pgv-feature-item{display:flex;align-items:flex-start;gap:16px;padding:16px 0;border-bottom:1px solid rgba(152,131,88,.1)}
.pgv-feature-item:last-child{border-bottom:none;padding-bottom:0}
.pgv-feature-icon{flex-shrink:0;width:36px;height:36px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--burgundy) 0%,var(--burgundy-dark) 100%);border-radius:10px}
.pgv-feature-icon svg{width:18px;height:18px;color:var(--white)}
.pgv-feature-text{font-size:15px;color:var(--text-dark);line-height:1.6;font-weight:500}
.pgv-feature-note{margin-top:20px;padding-top:16px;border-top:1px solid rgba(152,131,88,.1);font-size:13px;color:var(--text-muted);font-style:italic}

/* ===== EU RESIDENCE SECTION ===== */
.pgv-eu{padding:100px 0;background:var(--charcoal);position:relative;overflow:hidden}
.pgv-eu::before{content:'';position:absolute;top:0;left:0;right:0;height:1px;background:linear-gradient(90deg,transparent,var(--gold),transparent)}
.pgv-eu::after{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='120' height='160' viewBox='0 0 120 160' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M60 0 C60 0 120 50 120 100 C120 133 93 160 60 160 C27 160 0 133 0 100 C0 50 60 0 60 0Z' fill='none' stroke='%23ffffff' stroke-opacity='0.025'/%3E%3C/svg%3E");pointer-events:none}
.pgv-eu .container{position:relative;z-index:1}
.pgv-eu-inner{max-width:780px;margin:0 auto;text-align:center}
.pgv-eu-inner h2{color:var(--white);margin-bottom:24px}
.pgv-eu-inner p{color:rgba(255,255,255,.75);font-size:1.05rem;line-height:1.85;margin-bottom:16px}

/* ===== ELIGIBILITY ===== */
.pgv-eligibility{padding:100px 0;background:var(--white)}
.pgv-eligibility-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:center}
.pgv-eligibility-content h2{color:var(--charcoal);margin-bottom:20px}
.pgv-eligibility-content>p{font-size:1rem;line-height:1.8;color:var(--text-dark)}
.pgv-eligibility-list{list-style:none;padding:0;margin:28px 0 0}
.pgv-eligibility-list li{display:flex;align-items:flex-start;gap:16px;padding:16px 0;border-bottom:1px solid rgba(152,131,88,.12)}
.pgv-eligibility-list li:last-child{border-bottom:none}
.pgv-eligibility-check{flex-shrink:0;width:28px;height:28px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-dark) 100%);border-radius:50%}
.pgv-eligibility-check svg{width:14px;height:14px;color:var(--charcoal)}
.pgv-eligibility-text{font-size:15px;color:var(--text-dark);line-height:1.65}
.pgv-eligibility-closing{margin-top:20px;font-size:15px;color:var(--text-muted);font-style:italic}
.pgv-cta-card{background:linear-gradient(135deg,var(--charcoal) 0%,var(--charcoal-light) 100%);border-radius:24px;padding:52px 40px;text-align:center;position:relative;overflow:hidden}
.pgv-cta-card::before{content:'';position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,var(--burgundy),var(--gold),var(--burgundy))}
.pgv-cta-card::after{content:'';position:absolute;bottom:-80px;right:-80px;width:200px;height:200px;background:radial-gradient(circle,rgba(201,169,98,.08) 0%,transparent 70%);border-radius:50%}
.pgv-cta-card h3{color:var(--white);font-size:1.65rem;margin-bottom:24px}
.pgv-cta-card .btn{position:relative;z-index:1}

/* ===== FAQ ===== */
.pgv-faq{padding:100px 0;background:var(--cream)}
.pgv-faq .pgv-section-header{text-align:center;max-width:680px;margin:0 auto 60px}
.pgv-faq .pgv-section-header h2{color:var(--charcoal);margin-bottom:16px}
.pgv-faq-list{max-width:800px;margin:0 auto}
.pgv-faq-item{background:var(--white);border-radius:16px;margin-bottom:16px;overflow:hidden;border:1px solid rgba(152,131,88,.12);transition:color .3s ease,background .3s ease,border-color .3s ease,transform .3s ease,box-shadow .3s ease,opacity .3s ease;box-shadow:0 2px 8px rgba(0,0,0,.03)}
.pgv-faq-item:hover{border-color:rgba(152,131,88,.3);box-shadow:0 8px 24px rgba(0,0,0,.06)}
.pgv-faq-question{padding:24px 30px;font-family:'Cormorant Garamond','Cormorant Garamond Fallback',Georgia,serif;font-size:1.2rem;font-weight:600;color:var(--charcoal);cursor:pointer;display:flex;justify-content:space-between;align-items:center;transition:color .3s ease}
.pgv-faq-question:hover{color:var(--burgundy)}
.pgv-faq-toggle{width:36px;height:36px;flex-shrink:0;position:relative;background:var(--cream);border-radius:50%;transition:color .3s ease,background .3s ease,border-color .3s ease,transform .3s ease,box-shadow .3s ease,opacity .3s ease}
.pgv-faq-toggle::before{content:'';position:absolute;top:50%;left:50%;width:14px;height:2px;background:var(--burgundy);transform:translate(-50%,-50%)}
.pgv-faq-toggle::after{content:'';position:absolute;top:50%;left:50%;width:2px;height:14px;background:var(--burgundy);transform:translate(-50%,-50%);transition:color .3s ease,background .3s ease,border-color .3s ease,transform .3s ease,box-shadow .3s ease,opacity .3s ease}
.pgv-faq-item.active .pgv-faq-toggle{background:var(--burgundy);transform:rotate(45deg)}
.pgv-faq-item.active .pgv-faq-toggle::before,.pgv-faq-item.active .pgv-faq-toggle::after{background:var(--white)}
.pgv-faq-answer{max-height:0;overflow:hidden;transition:max-height .4s ease}
.pgv-faq-answer-inner{padding:0 30px 24px;color:var(--text-muted);font-size:15px;line-height:1.85}
.pgv-faq-item.active .pgv-faq-answer{max-height:300px}

/* ===== FINAL CTA ===== */
.pgv-final-cta{padding:80px 0;background:var(--burgundy);position:relative;overflow:hidden;text-align:center}
.pgv-final-cta::before{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='120' height='160' viewBox='0 0 120 160' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M60 0 C60 0 120 50 120 100 C120 133 93 160 60 160 C27 160 0 133 0 100 C0 50 60 0 60 0Z' fill='none' stroke='%23ffffff' stroke-opacity='0.05'/%3E%3C/svg%3E");pointer-events:none}
.pgv-final-cta .container{position:relative;z-index:1}
.pgv-final-cta h2{color:var(--white);margin-bottom:24px}

/* ===== RESPONSIVE ===== */
@media(max-width:1024px){
.pgv-hero-grid{grid-template-columns:1fr;gap:48px;text-align:center}
.pgv-hero-lead{margin:0 auto 12px}
.pgv-hero-highlights{justify-content:center}
.hero-form{max-width:520px;margin:0 auto}
.pgv-about-grid,.pgv-eligibility-grid{grid-template-columns:1fr;gap:48px}
.pgv-cascade{grid-template-columns:repeat(2,1fr)}
.pgv-cascade-card:nth-child(2),.pgv-cascade-card:nth-child(4),.pgv-cascade-card:nth-child(6){transform:translateY(0)}
.pgv-cascade-card:nth-child(2):hover,.pgv-cascade-card:nth-child(4):hover,.pgv-cascade-card:nth-child(6):hover{transform:translateY(-6px)}
}
@media(max-width:768px){
.pgv-hero{min-height:auto;padding:110px 0 60px}
.pgv-process,.pgv-about,.pgv-eu,.pgv-eligibility,.pgv-faq,.pgv-final-cta{padding:60px 0}
.pgv-cascade{grid-template-columns:1fr;gap:16px}
.pgv-cascade-card:nth-child(2),.pgv-cascade-card:nth-child(4),.pgv-cascade-card:nth-child(6){transform:none}
.pgv-cascade-card:nth-child(2):hover,.pgv-cascade-card:nth-child(4):hover,.pgv-cascade-card:nth-child(6):hover{transform:translateY(-4px)}
.pgv-hero-highlights{grid-template-columns:1fr;gap:12px}
.pgv-highlight{flex-direction:row;display:flex;align-items:center;gap:14px;text-align:left;padding:14px 18px}
.pgv-highlight-icon{margin:0}
.hero-form{padding:28px 20px}
.form-row{grid-template-columns:1fr}
.pgv-about-sidebar{padding:32px 24px}
.pgv-cta-card{padding:40px 24px}
}
@media(max-width:480px){
.pgv-cascade-card{padding:28px 20px}
}
</style>

<!-- ===== HERO ===== -->
<section class="pgv-hero">
    <div class="container">
        <div class="pgv-hero-grid">
            <div class="pgv-hero-content">
                <div class="pgv-hero-badge">Residency by Investment Program</div>
                <h1>Portugal Golden Visa<span>Residency Program</span></h1>
                <p class="pgv-hero-subtitle">A Government-Regulated Pathway to Legal Residence in Portugal</p>
                <p class="pgv-hero-lead">The Portugal Golden Visa is a government-established residency by investment program that allows eligible foreign nationals to obtain legal residence in Portugal through a qualifying investment. The program operates under national immigration legislation and is administered by authorized authorities.</p>
                <p class="pgv-hero-lead">Residency is granted only after documentation review, regulatory compliance checks, and formal approval under Portuguese law.</p>
                <div class="pgv-hero-highlights">
                    <div class="pgv-highlight">
                        <div class="pgv-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                        </div>
                        <span class="pgv-highlight-label">Government-Regulated Program</span>
                    </div>
                    <div class="pgv-highlight">
                        <div class="pgv-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                        </div>
                        <span class="pgv-highlight-label">Legal Residence in Portugal</span>
                    </div>
                    <div class="pgv-highlight">
                        <div class="pgv-highlight-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                        </div>
                        <span class="pgv-highlight-label">Family Inclusion Eligible</span>
                    </div>
                </div>
            </div>
            <x-landing-form
                source="portugal-golden-visa"
                consultancy="portugal-golden-visa"
                title="Check Eligibility for Portugal Residency by Investment"
                subtitle="Share your details and our experts will assess your eligibility."
            >Check Eligibility</x-landing-form>
        </div>
    </div>
</section>

<!-- ===== WHAT IS THE PORTUGAL GOLDEN VISA ===== -->
<section class="pgv-about">
    <div class="container">
        <div class="pgv-about-grid">
            <div class="pgv-about-content">
                <h3>What Is the Portugal Golden Visa?</h3>
                <p>The Portugal Golden Visa is a residency program designed to attract foreign investment while granting approved applicants the right to reside in Portugal. It does not automatically grant Portuguese citizenship but may create a pathway toward naturalization if legal requirements are met over time.</p>
                <p>Applicants must comply with program rules and immigration regulations.</p>
            </div>
            <div class="pgv-about-sidebar">
                <h3>Key Features of the Portugal Golden Visa</h3>
                <div class="pgv-feature-item">
                    <div class="pgv-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
                    </div>
                    <span class="pgv-feature-text">Government-regulated residency program</span>
                </div>
                <div class="pgv-feature-item">
                    <div class="pgv-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    </div>
                    <span class="pgv-feature-text">Legal right to reside in Portugal</span>
                </div>
                <div class="pgv-feature-item">
                    <div class="pgv-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                    </div>
                    <span class="pgv-feature-text">Defined residency validity periods subject to renewal</span>
                </div>
                <div class="pgv-feature-item">
                    <div class="pgv-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                    </div>
                    <span class="pgv-feature-text">Eligibility to include immediate family members</span>
                </div>
                <div class="pgv-feature-item">
                    <div class="pgv-feature-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm2 16H8v-2h8v2zm0-4H8v-2h8v2zm-3-5V3.5L18.5 9H13z"/></svg>
                    </div>
                    <span class="pgv-feature-text">Compliance with national immigration legislation</span>
                </div>
                <p class="pgv-feature-note">All approvals remain subject to formal government review.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== HOW IT WORKS — Cascading Cards ===== -->
<section class="pgv-process">
    <div class="container">
        <div class="pgv-section-header">
            <h2>How the Portugal Golden Visa Works</h2>
        </div>
        <div class="pgv-cascade">
            <div class="pgv-cascade-card">
                <div class="pgv-cascade-num">01</div>
                <div class="pgv-cascade-title">Eligibility Assessment</div>
                <p class="pgv-cascade-desc">Initial eligibility assessment</p>
            </div>
            <div class="pgv-cascade-card">
                <div class="pgv-cascade-num">02</div>
                <div class="pgv-cascade-title">Investment Route</div>
                <p class="pgv-cascade-desc">Selection of an approved investment route</p>
            </div>
            <div class="pgv-cascade-card">
                <div class="pgv-cascade-num">03</div>
                <div class="pgv-cascade-title">Documentation</div>
                <p class="pgv-cascade-desc">Submission of required documentation</p>
            </div>
            <div class="pgv-cascade-card">
                <div class="pgv-cascade-num">04</div>
                <div class="pgv-cascade-title">Government Review</div>
                <p class="pgv-cascade-desc">Government review and compliance verification</p>
            </div>
            <div class="pgv-cascade-card">
                <div class="pgv-cascade-num">05</div>
                <div class="pgv-cascade-title">Investment Completion</div>
                <p class="pgv-cascade-desc">Completion of qualifying investment</p>
            </div>
            <div class="pgv-cascade-card">
                <div class="pgv-cascade-num">06</div>
                <div class="pgv-cascade-title">Residence Permit</div>
                <p class="pgv-cascade-desc">Issuance of residence permit</p>
            </div>
        </div>
        <p class="pgv-process-closing">Each application is assessed individually in accordance with Portuguese immigration laws.</p>
    </div>
</section>

<!-- ===== EU RESIDENCE ===== -->
<section class="pgv-eu">
    <div class="container">
        <div class="pgv-eu-inner">
            <h2>Portugal Golden Visa and EU Residence</h2>
            <p>Residency granted under the Portugal Golden Visa allows individuals to legally reside in Portugal, which is a member state of the European Union. Residence rights are governed by Portuguese law and EU regulations applicable to residents.</p>
            <p>Residency status does not automatically grant EU citizenship.</p>
        </div>
    </div>
</section>

<!-- ===== ELIGIBILITY ===== -->
<section class="pgv-eligibility">
    <div class="container">
        <div class="pgv-eligibility-grid">
            <div class="pgv-eligibility-content">
                <h2>Who Can Apply for the Portugal Golden Visa?</h2>
                <p>Eligibility is determined under the legal framework governing the program. Applicants are generally required to:</p>
                <ul class="pgv-eligibility-list">
                    <li>
                        <span class="pgv-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="pgv-eligibility-text">Meet financial qualification thresholds</span>
                    </li>
                    <li>
                        <span class="pgv-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="pgv-eligibility-text">Select an approved investment category</span>
                    </li>
                    <li>
                        <span class="pgv-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="pgv-eligibility-text">Provide verified documentation and lawful source of funds</span>
                    </li>
                    <li>
                        <span class="pgv-eligibility-check"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></span>
                        <span class="pgv-eligibility-text">Comply with immigration and compliance requirements</span>
                    </li>
                </ul>
                <p class="pgv-eligibility-closing">Final approval is granted by relevant Portuguese authorities.</p>
            </div>
            <div class="pgv-cta-card">
                <h3>Check Eligibility for Portugal Residency by Investment</h3>
                <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="pgv-faq">
    <div class="container">
        <div class="pgv-section-header">
            <h2>Portugal Golden Visa FAQs</h2>
        </div>
        <div class="pgv-faq-list">
            <div class="pgv-faq-item faq-item active">
                <div class="pgv-faq-question faq-question">Is the Portugal Golden Visa legal?<span class="pgv-faq-toggle"></span></div>
                <div class="pgv-faq-answer"><div class="pgv-faq-answer-inner">Yes. It is a government-regulated residency by investment program established under Portuguese law.</div></div>
            </div>
            <div class="pgv-faq-item faq-item">
                <div class="pgv-faq-question faq-question">Does the Portugal Golden Visa grant citizenship?<span class="pgv-faq-toggle"></span></div>
                <div class="pgv-faq-answer"><div class="pgv-faq-answer-inner">No. It grants residency. Citizenship may require separate naturalization requirements under Portuguese law.</div></div>
            </div>
            <div class="pgv-faq-item faq-item">
                <div class="pgv-faq-question faq-question">Can family members be included?<span class="pgv-faq-toggle"></span></div>
                <div class="pgv-faq-answer"><div class="pgv-faq-answer-inner">Yes. Eligible applicants may include immediate family members under one structured application.</div></div>
            </div>
            <div class="pgv-faq-item faq-item">
                <div class="pgv-faq-question faq-question">Is government approval required?<span class="pgv-faq-toggle"></span></div>
                <div class="pgv-faq-answer"><div class="pgv-faq-answer-inner">Yes. All applications are subject to official review and approval.</div></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="pgv-final-cta">
    <div class="container">
        <h2>Check Eligibility for Portugal Residency by Investment</h2>
        <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a>
    </div>
</section>

<!-- ===== WhatsApp Float ===== -->
<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
@endsection
