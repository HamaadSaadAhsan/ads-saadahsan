@extends('layouts.landing')

@section('meta_title', 'Portugal Golden Visa Pakistan | Residency by Investment for Pakistani Applicants')
@section('meta_description', 'Learn how Pakistani nationals can apply for the Portugal Golden Visa, a government-approved residency by investment program under Portuguese law.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/portugal-golden-visa-pakistan">
<meta property="og:url" content="https://ads.saadahsan.com/portugal-golden-visa-pakistan">
<meta property="og:type" content="website">
<meta property="og:title" content="Portugal Golden Visa Pakistan | Residency by Investment for Pakistani Applicants">
<meta property="og:description" content="Learn how Pakistani nationals can apply for the Portugal Golden Visa, a government-approved residency by investment program under Portuguese law.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Portugal Golden Visa Pakistan | Residency by Investment for Pakistani Applicants">
<meta name="twitter:description" content="Learn how Pakistani nationals can apply for the Portugal Golden Visa, a government-approved residency by investment program under Portuguese law.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Portugal Golden Visa Pakistan | Residency by Investment for Pakistani Applicants","description":"Learn how Pakistani nationals can apply for the Portugal Golden Visa, a government-approved residency by investment program under Portuguese law.","url":"https://ads.saadahsan.com/portugal-golden-visa-pakistan","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"FAQPage","mainEntity":[{"@@type":"Question","name":"Is the Portugal Golden Visa available to Pakistani nationals?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Pakistani applicants may apply if they meet eligibility requirements under Portuguese law."}},{"@@type":"Question","name":"Does the Golden Visa grant citizenship?","acceptedAnswer":{"@@type":"Answer","text":"No. It grants residency. Citizenship may require separate naturalization requirements under Portuguese law."}},{"@@type":"Question","name":"Is government approval required?","acceptedAnswer":{"@@type":"Answer","text":"Yes. All applications undergo formal review and approval by Portuguese authorities."}},{"@@type":"Question","name":"Can family members be included?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Eligible applicants may include immediate family members under one structured application."}}]}</script>
@endpush

@section('content')
<style>
.pgp-hero{min-height:100vh;padding:140px 0 100px;position:relative;display:flex;align-items:center;background:var(--charcoal);overflow:hidden}
.pgp-hero::before{content:'';position:absolute;inset:0;background:radial-gradient(ellipse 55% 50% at 25% 60%,rgba(128,0,32,.16) 0%,transparent 65%),radial-gradient(ellipse 45% 40% at 75% 30%,rgba(201,169,98,.1) 0%,transparent 55%)}
.pgp-hero::after{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='120' height='120' viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 60 Q35 20 60 60 Q85 100 110 60' fill='none' stroke='%23C9A962' stroke-opacity='0.03' stroke-width='0.8'/%3E%3C/svg%3E");pointer-events:none}
.pgp-hero .container{position:relative;z-index:1}
.pgp-hero-grid{display:grid;grid-template-columns:1fr 460px;gap:60px;align-items:center}
.pgp-hero-badge{display:inline-flex;align-items:center;gap:10px;padding:8px 20px;background:rgba(201,169,98,.1);border:1px solid rgba(201,169,98,.25);border-radius:50px;font-size:11px;font-weight:600;letter-spacing:2.5px;text-transform:uppercase;color:var(--gold);margin-bottom:28px}
.pgp-hero-badge::before{content:'';width:6px;height:6px;background:var(--gold);border-radius:50%;animation:pulse 2s infinite}
.pgp-hero h1{color:var(--white);font-size:clamp(2.6rem,5vw,3.8rem);line-height:1.1;margin-bottom:16px}
.pgp-hero h1 span{display:block;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-light) 100%);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text}
.pgp-hero-subtitle{font-family:'Cormorant Garamond',serif;font-size:1.3rem;font-weight:500;font-style:italic;color:var(--gold-light);margin-bottom:20px;opacity:.9}
.pgp-hero-lead{font-size:1rem;line-height:1.85;color:rgba(255,255,255,.8);max-width:540px;margin-bottom:0}
.pgp-route{display:flex;align-items:center;gap:16px;margin-top:40px;padding-top:36px;border-top:1px solid rgba(201,169,98,.15)}
.pgp-route-node{display:flex;flex-direction:column;align-items:center;gap:8px;flex:0 0 auto}
.pgp-route-dot{width:44px;height:44px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-dark) 100%);border-radius:50%;box-shadow:0 0 20px rgba(201,169,98,.25)}
.pgp-route-dot svg{width:20px;height:20px;color:var(--charcoal)}
.pgp-route-label{font-size:11px;font-weight:600;color:var(--white);letter-spacing:.5px;text-align:center;line-height:1.3;max-width:80px}
.pgp-route-line{flex:1;height:2px;background:linear-gradient(90deg,rgba(201,169,98,.4),rgba(201,169,98,.15));position:relative}
.pgp-route-line::after{content:'';position:absolute;top:50%;left:0;width:30%;height:2px;background:var(--gold);transform:translateY(-50%);animation:routePulse 3s ease-in-out infinite}
@@keyframes routePulse{0%{left:0;opacity:.6}50%{left:70%;opacity:1}100%{left:0;opacity:.6}}
.pgp-process{padding:100px 0;background:var(--white)}
.pgp-process .pgp-section-header{text-align:center;max-width:700px;margin:0 auto 60px}
.pgp-process .pgp-section-header h2{color:var(--charcoal);margin-bottom:16px}
.pgp-process .pgp-section-header p{font-size:1rem;line-height:1.85;color:var(--text-muted)}
.pgp-pathway{max-width:900px;margin:0 auto;position:relative;padding:0 40px}
.pgp-pathway::before{content:'';position:absolute;top:0;bottom:0;left:50%;width:2px;background:linear-gradient(180deg,var(--gold),rgba(201,169,98,.2));transform:translateX(-50%)}
.pgp-step{display:flex;align-items:flex-start;gap:40px;margin-bottom:40px;position:relative}
.pgp-step:last-child{margin-bottom:0}
.pgp-step:nth-child(even){flex-direction:row-reverse}
.pgp-step-content{flex:1;background:var(--cream);border-radius:20px;padding:32px 28px;border:1px solid rgba(152,131,88,.1);transition:all .4s ease;position:relative}
.pgp-step-content::after{content:'';position:absolute;bottom:0;left:0;right:0;height:3px;background:linear-gradient(90deg,var(--burgundy),var(--gold));opacity:0;transition:opacity .3s ease;border-radius:0 0 20px 20px}
.pgp-step-content:hover{transform:translateY(-3px);box-shadow:0 12px 36px rgba(0,0,0,.07)}
.pgp-step-content:hover::after{opacity:1}
.pgp-step-marker{flex-shrink:0;width:52px;height:52px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--burgundy),#5a0016);border-radius:50%;font-family:'Cormorant Garamond',serif;font-size:1.2rem;font-weight:700;color:var(--white);z-index:1;box-shadow:0 4px 16px rgba(128,0,32,.3)}
.pgp-step-title{font-family:'Cormorant Garamond',serif;font-size:1.15rem;font-weight:600;color:var(--charcoal);margin-bottom:0}
.pgp-eligible{padding:100px 0;background:var(--cream);position:relative;overflow:hidden}
.pgp-eligible::before{content:'';position:absolute;top:-100px;right:-100px;width:360px;height:360px;background:radial-gradient(circle,rgba(128,0,32,.04) 0%,transparent 70%);border-radius:50%}
.pgp-eligible-grid{display:grid;grid-template-columns:1fr 1fr;gap:80px;align-items:start}
.pgp-eligible-content h2{color:var(--charcoal);margin-bottom:20px}
.pgp-eligible-content p{font-size:1rem;line-height:1.85;color:var(--text-muted)}
.pgp-eligible-card{background:var(--white);border-radius:24px;padding:44px 36px;box-shadow:0 20px 60px rgba(0,0,0,.06);border:1px solid rgba(152,131,88,.1);position:relative}
.pgp-eligible-card::before{content:'';position:absolute;top:0;left:32px;right:32px;height:4px;background:linear-gradient(90deg,var(--burgundy),var(--gold));border-radius:0 0 4px 4px}
.pgp-eligible-card h3{color:var(--charcoal);margin-bottom:24px;font-size:1.4rem}
.pgp-eligible-card p.pgp-eligible-closing{font-size:14px;color:var(--text-muted);line-height:1.7;margin-top:8px;margin-bottom:0;padding-top:16px;border-top:1px solid rgba(152,131,88,.1)}
.pgp-invest{padding:100px 0;background:var(--white)}
.pgp-invest .pgp-section-header{text-align:center;max-width:700px;margin:0 auto 60px}
.pgp-invest .pgp-section-header h2{color:var(--charcoal);margin-bottom:16px}
.pgp-invest .pgp-section-header p{font-size:1rem;line-height:1.85;color:var(--text-muted)}
.pgp-invest-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:24px;max-width:860px;margin:0 auto}
.pgp-invest-card{background:var(--cream);border-radius:20px;padding:36px 28px;border:1px solid rgba(152,131,88,.1);transition:all .4s ease;position:relative;overflow:hidden;display:flex;align-items:flex-start;gap:20px}
.pgp-invest-card::before{content:'';position:absolute;top:0;left:0;width:4px;height:100%;background:linear-gradient(180deg,var(--burgundy),var(--gold));opacity:0;transition:opacity .3s ease}
.pgp-invest-card:hover{transform:translateY(-4px);box-shadow:0 16px 40px rgba(0,0,0,.08)}
.pgp-invest-card:hover::before{opacity:1}
.pgp-invest-icon{flex-shrink:0;width:48px;height:48px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-dark) 100%);border-radius:14px}
.pgp-invest-icon svg{width:24px;height:24px;color:var(--charcoal)}
.pgp-invest-text{font-size:15px;color:var(--text-dark);line-height:1.65;font-weight:500}
.pgp-invest-note{text-align:center;max-width:600px;margin:36px auto 0;font-size:15px;color:var(--text-muted);line-height:1.7}
.pgp-consider{padding:100px 0;background:var(--cream)}
.pgp-consider-wrap{max-width:800px;margin:0 auto}
.pgp-consider-wrap h2{color:var(--charcoal);text-align:center;margin-bottom:16px}
.pgp-consider-intro{text-align:center;font-size:1rem;line-height:1.85;color:var(--text-muted);margin-bottom:40px}
.pgp-checklist{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-bottom:32px}
.pgp-check-item{background:var(--white);border-radius:16px;padding:24px;border:1px solid rgba(152,131,88,.12);display:flex;align-items:flex-start;gap:16px;transition:all .3s ease}
.pgp-check-item:hover{border-color:rgba(152,131,88,.3);box-shadow:0 8px 24px rgba(0,0,0,.06);transform:translateY(-2px)}
.pgp-check-icon{flex-shrink:0;width:32px;height:32px;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,var(--burgundy),#5a0016);border-radius:50%}
.pgp-check-icon svg{width:16px;height:16px;color:var(--white)}
.pgp-check-text{font-size:15px;color:var(--text-dark);line-height:1.6;font-weight:500}
.pgp-consider-closing{text-align:center;font-size:15px;color:var(--text-muted);line-height:1.7}
.pgp-faq{padding:100px 0;background:var(--white)}
.pgp-faq .pgp-section-header{text-align:center;max-width:680px;margin:0 auto 60px}
.pgp-faq .pgp-section-header h2{color:var(--charcoal);margin-bottom:16px}
.pgp-faq-list{max-width:800px;margin:0 auto}
.pgp-faq-item{background:var(--cream);border-radius:16px;margin-bottom:16px;overflow:hidden;border:1px solid rgba(152,131,88,.12);transition:all .3s ease;box-shadow:0 2px 8px rgba(0,0,0,.03)}
.pgp-faq-item:hover{border-color:rgba(152,131,88,.3);box-shadow:0 8px 24px rgba(0,0,0,.06)}
.pgp-faq-question{padding:24px 30px;font-family:'Cormorant Garamond',serif;font-size:1.2rem;font-weight:600;color:var(--charcoal);cursor:pointer;display:flex;justify-content:space-between;align-items:center;transition:color .3s ease}
.pgp-faq-question:hover{color:var(--burgundy)}
.pgp-faq-toggle{width:36px;height:36px;flex-shrink:0;position:relative;background:var(--white);border-radius:50%;transition:all .3s ease}
.pgp-faq-toggle::before{content:'';position:absolute;top:50%;left:50%;width:14px;height:2px;background:var(--burgundy);transform:translate(-50%,-50%)}
.pgp-faq-toggle::after{content:'';position:absolute;top:50%;left:50%;width:2px;height:14px;background:var(--burgundy);transform:translate(-50%,-50%);transition:all .3s ease}
.pgp-faq-item.active .pgp-faq-toggle{background:var(--burgundy);transform:rotate(45deg)}
.pgp-faq-item.active .pgp-faq-toggle::before,.pgp-faq-item.active .pgp-faq-toggle::after{background:var(--white)}
.pgp-faq-answer{max-height:0;overflow:hidden;transition:max-height .4s ease}
.pgp-faq-answer-inner{padding:0 30px 24px;color:var(--text-muted);font-size:15px;line-height:1.85}
.pgp-faq-item.active .pgp-faq-answer{max-height:300px}
.pgp-cta-mid{padding:80px 0;background:var(--charcoal);position:relative;overflow:hidden;text-align:center}
.pgp-cta-mid::before{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='120' height='120' viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 60 Q35 20 60 60 Q85 100 110 60' fill='none' stroke='%23C9A962' stroke-opacity='0.03' stroke-width='0.8'/%3E%3C/svg%3E");pointer-events:none}
.pgp-cta-mid .container{position:relative;z-index:1}
.pgp-cta-mid h2{color:var(--white);margin-bottom:16px}
.pgp-final-cta{padding:80px 0;background:var(--burgundy);position:relative;overflow:hidden;text-align:center}
.pgp-final-cta::before{content:'';position:absolute;inset:0;background:url("data:image/svg+xml,%3Csvg width='120' height='120' viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 60 Q35 20 60 60 Q85 100 110 60' fill='none' stroke='%23ffffff' stroke-opacity='0.03' stroke-width='0.8'/%3E%3C/svg%3E");pointer-events:none}
.pgp-final-cta .container{position:relative;z-index:1}
.pgp-final-cta h2{color:var(--white);margin-bottom:16px}
@media(max-width:1024px){.pgp-hero-grid{grid-template-columns:1fr;gap:48px;text-align:center}.pgp-hero-lead{margin:0 auto}.hero-form{max-width:520px;margin:0 auto}.pgp-route{justify-content:center}.pgp-eligible-grid{grid-template-columns:1fr;gap:48px}.pgp-pathway::before{left:26px}.pgp-step,.pgp-step:nth-child(even){flex-direction:row}.pgp-step-content{flex:1}.pgp-pathway{padding:0 0 0 10px}}
@media(max-width:768px){.pgp-hero{min-height:auto;padding:110px 0 60px}.pgp-process,.pgp-eligible,.pgp-invest,.pgp-consider,.pgp-faq,.pgp-cta-mid,.pgp-final-cta{padding:60px 0}.pgp-route{flex-wrap:wrap;gap:12px;justify-content:center}.pgp-route-line{display:none}.hero-form{padding:28px 20px}.form-row{grid-template-columns:1fr}.pgp-invest-grid{grid-template-columns:1fr}.pgp-checklist{grid-template-columns:1fr}.pgp-eligible-card{padding:32px 24px}.pgp-step{gap:20px}.pgp-step-marker{width:44px;height:44px;font-size:1rem}.pgp-step-content{padding:24px 20px}}
@media(max-width:480px){.pgp-hero h1{font-size:2.2rem}.pgp-route-dot{width:36px;height:36px}.pgp-route-dot svg{width:16px;height:16px}.pgp-route-label{font-size:10px}}
</style>

<section class="pgp-hero"><div class="container"><div class="pgp-hero-grid"><div class="pgp-hero-content">
<div class="pgp-hero-badge">Residency by Investment</div>
<h1>Portugal Golden Visa<span>for Applicants from Pakistan</span></h1>
<p class="pgp-hero-subtitle">Residency by Investment Pathway in Portugal for Pakistani Nationals</p>
<p class="pgp-hero-lead">The Portugal Golden Visa is a government-regulated residency by investment program that allows eligible foreign nationals, including applicants from Pakistan, to obtain legal residence in Portugal through a qualifying investment. The program operates under Portuguese immigration law and is administered by authorized authorities.</p>
<p class="pgp-hero-lead" style="margin-top:12px">Residency is granted only after documentation review, compliance screening, and formal approval by the relevant Portuguese authorities.</p>
<div class="pgp-route">
    <div class="pgp-route-node"><div class="pgp-route-dot"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg></div><span class="pgp-route-label">Pakistan</span></div>
    <div class="pgp-route-line"></div>
    <div class="pgp-route-node"><div class="pgp-route-dot"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z"/></svg></div><span class="pgp-route-label">Application</span></div>
    <div class="pgp-route-line"></div>
    <div class="pgp-route-node"><div class="pgp-route-dot"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg></div><span class="pgp-route-label">Approval</span></div>
    <div class="pgp-route-line"></div>
    <div class="pgp-route-node"><div class="pgp-route-dot"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zM5 15h14v2H5z"/></svg></div><span class="pgp-route-label">Portugal Residency</span></div>
</div></div>
<x-landing-form
                source="portugal-golden-visa-pakistan"
                consultancy="portugal-golden-visa"
                title="Check Eligibility for Portugal Residency by Investment"
                subtitle="Share your details and our experts will assess your eligibility."
            >Check Eligibility</x-landing-form></div></div></section>

<section class="pgp-eligible"><div class="container"><div class="pgp-eligible-grid">
<div class="pgp-eligible-content">
    <h2>Can Pakistani Nationals Apply for the Portugal Golden Visa?</h2>
    <p>Yes. Pakistani nationals may apply for the Portugal Golden Visa provided they meet the eligibility criteria defined under Portuguese immigration legislation. Applications are assessed individually and must comply with legal and regulatory standards.</p>
    <p>Approval depends on fulfilling all documentation, investment, and compliance requirements.</p>
</div>
<div class="pgp-eligible-card">
    <h3>Investment Categories Available</h3>
    <div style="font-size:15px;color:var(--text-muted);line-height:1.7;margin-bottom:20px">Approved investment categories may include:</div>
    <div class="pgp-check-item" style="margin-bottom:12px;background:var(--cream)"><div class="pgp-check-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div><span class="pgp-check-text">Regulated investment funds</span></div>
    <div class="pgp-check-item" style="margin-bottom:12px;background:var(--cream)"><div class="pgp-check-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div><span class="pgp-check-text">Business or entrepreneurial activity</span></div>
    <div class="pgp-check-item" style="margin-bottom:12px;background:var(--cream)"><div class="pgp-check-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div><span class="pgp-check-text">Cultural or research contributions</span></div>
    <div class="pgp-check-item" style="background:var(--cream)"><div class="pgp-check-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div><span class="pgp-check-text">Other routes defined by current Portuguese legislation</span></div>
    <p class="pgp-eligible-closing">Eligibility and investment requirements are determined by law.</p>
</div></div></div></section>

<section class="pgp-process"><div class="container">
<div class="pgp-section-header"><h2>How the Portugal Golden Visa Process Works for Applicants in Pakistan</h2></div>
<div class="pgp-pathway">
    <div class="pgp-step"><div class="pgp-step-marker">01</div><div class="pgp-step-content"><div class="pgp-step-title">Initial eligibility assessment</div></div></div>
    <div class="pgp-step"><div class="pgp-step-marker">02</div><div class="pgp-step-content"><div class="pgp-step-title">Selection of an approved investment category</div></div></div>
    <div class="pgp-step"><div class="pgp-step-marker">03</div><div class="pgp-step-content"><div class="pgp-step-title">Preparation and submission of required documentation</div></div></div>
    <div class="pgp-step"><div class="pgp-step-marker">04</div><div class="pgp-step-content"><div class="pgp-step-title">Government compliance and background checks</div></div></div>
    <div class="pgp-step"><div class="pgp-step-marker">05</div><div class="pgp-step-content"><div class="pgp-step-title">Completion of qualifying investment</div></div></div>
    <div class="pgp-step"><div class="pgp-step-marker">06</div><div class="pgp-step-content"><div class="pgp-step-title">Issuance of residence permit</div></div></div>
</div>
<p style="text-align:center;max-width:600px;margin:40px auto 0;font-size:15px;color:var(--text-muted);line-height:1.7">Applications are processed in accordance with Portuguese immigration regulations.</p>
</div></section>

<section class="pgp-consider"><div class="container">
<div class="pgp-consider-wrap">
    <h2>Key Considerations for Applicants from Pakistan</h2>
    <p class="pgp-consider-intro">Applicants residing in Pakistan must:</p>
    <div class="pgp-checklist">
        <div class="pgp-check-item"><div class="pgp-check-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div><span class="pgp-check-text">Provide verified documentation and identification</span></div>
        <div class="pgp-check-item"><div class="pgp-check-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div><span class="pgp-check-text">Demonstrate lawful source of funds</span></div>
        <div class="pgp-check-item"><div class="pgp-check-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div><span class="pgp-check-text">Comply with financial and compliance checks</span></div>
        <div class="pgp-check-item"><div class="pgp-check-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg></div><span class="pgp-check-text">Submit required documents according to official standards</span></div>
    </div>
    <p class="pgp-consider-closing">All applications remain subject to government review and final approval.</p>
</div></div></section>

<section class="pgp-cta-mid"><div class="container"><h2>Check Eligibility for Portugal Residency by Investment</h2><a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a></div></section>

<section class="pgp-faq"><div class="container">
<div class="pgp-section-header"><h2>Portugal Golden Visa Pakistan FAQs</h2></div>
<div class="pgp-faq-list">
    <div class="pgp-faq-item faq-item active"><div class="pgp-faq-question faq-question">Is the Portugal Golden Visa available to Pakistani nationals?<span class="pgp-faq-toggle"></span></div><div class="pgp-faq-answer"><div class="pgp-faq-answer-inner">Yes. Pakistani applicants may apply if they meet eligibility requirements under Portuguese law.</div></div></div>
    <div class="pgp-faq-item faq-item"><div class="pgp-faq-question faq-question">Does the Golden Visa grant citizenship?<span class="pgp-faq-toggle"></span></div><div class="pgp-faq-answer"><div class="pgp-faq-answer-inner">No. It grants residency. Citizenship may require separate naturalization requirements under Portuguese law.</div></div></div>
    <div class="pgp-faq-item faq-item"><div class="pgp-faq-question faq-question">Is government approval required?<span class="pgp-faq-toggle"></span></div><div class="pgp-faq-answer"><div class="pgp-faq-answer-inner">Yes. All applications undergo formal review and approval by Portuguese authorities.</div></div></div>
    <div class="pgp-faq-item faq-item"><div class="pgp-faq-question faq-question">Can family members be included?<span class="pgp-faq-toggle"></span></div><div class="pgp-faq-answer"><div class="pgp-faq-answer-inner">Yes. Eligible applicants may include immediate family members under one structured application.</div></div></div>
</div></div></section>

<section class="pgp-final-cta"><div class="container"><h2>Check Eligibility for Portugal Residency by Investment</h2><a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Check Eligibility</a></div></section>

<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
@endsection
