@extends('layouts.landing')

@section('meta_title', 'Argentina Immigration, Residency and Citizenship Pathways')
@section('meta_description', 'Explore Argentina immigration, residency, naturalization and investment based citizenship options for qualifying foreign nationals.')

@push('meta')
<link rel="canonical" href="https://ads.saadahsan.com/argentina-immigration">
<meta property="og:url" content="https://ads.saadahsan.com/argentina-immigration">
<meta property="og:type" content="website">
<meta property="og:title" content="Argentina Immigration, Residency and Citizenship Pathways">
<meta property="og:description" content="Explore Argentina immigration, residency, naturalization and investment based citizenship options for qualifying foreign nationals.">
<meta property="og:site_name" content="Saad Ahsan Residency & Citizenship">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="Argentina Immigration, Residency and Citizenship Pathways">
<meta name="twitter:description" content="Explore Argentina immigration, residency, naturalization and investment based citizenship options for qualifying foreign nationals.">
<script type="application/ld+json">{"@@context":"https://schema.org","@@type":"WebPage","name":"Argentina Immigration, Residency and Citizenship Pathways","description":"Explore Argentina immigration, residency, naturalization and investment based citizenship options for qualifying foreign nationals.","url":"https://ads.saadahsan.com/argentina-immigration","publisher":{"@@type":"Organization","name":"Saad Ahsan Residency & Citizenship","url":"https://saadahsan.com"}}</script>
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@@type": "FAQPage",
  "mainEntity": [
    {"@@type":"Question","name":"Can foreigners immigrate to Argentina?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Argentina has legal immigration and residence pathways for eligible foreign nationals."}},
    {"@@type":"Question","name":"Can residents later apply for citizenship?","acceptedAnswer":{"@@type":"Answer","text":"Eligible foreign residents may apply for naturalization after satisfying the applicable requirements."}},
    {"@@type":"Question","name":"Is there a separate pathway for investors?","acceptedAnswer":{"@@type":"Answer","text":"Yes. Argentina's citizenship legislation provides a separate route based on relevant investment."}}
  ]
}
</script>
@endpush

@section('hero')
<x-argentina-styles />

<!-- ===== HERO ===== -->
<section class="arg-hero">
    <div class="container">
        <div class="arg-hero-grid">
            <div class="arg-hero-content">
                <div class="arg-stripes" aria-hidden="true"><span></span><span></span><span></span></div>
                <h1>Argentina Immigration and Citizenship Pathways</h1>
                <h2 class="arg-hero-subtitle">Understanding Immigration, Residency and Citizenship in Argentina</h2>
                <p class="arg-hero-lead">Argentina immigration encompasses the legal processes through which foreign nationals enter, reside and establish longer term status in the country.</p>
                <p class="arg-hero-lead">Depending on an individual's circumstances and objectives, the appropriate pathway may involve temporary or permanent residence, naturalization, or an investment based citizenship application.</p>
            </div>
            <x-landing-form
                source="argentina-immigration"
                consultancy="argentina-citizenship-by-investment"
                title="Explore Your Argentina Immigration Options"
            />
        </div>
    </div>
</section>

@endsection

@section('content')

<!-- ===== ARGENTINA RESIDENCY AND NATURALIZATION ===== -->
<section class="arg-block">
    <div class="container">
        <div class="arg-block-grid">
            <div class="arg-block-head">
                <div class="arg-block-num" aria-hidden="true">01</div>
                <h3>Argentina Residency and Naturalization</h3>
            </div>
            <div class="arg-block-body">
                <p>Foreign nationals who establish qualifying legal residence may eventually become eligible to pursue Argentine citizenship through naturalization.</p>
                <p>Under the current naturalization framework, an adult foreign national generally needs two years of continuous and legal residence immediately before applying for citizenship.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== ARGENTINA IMMIGRATION FOR INVESTORS ===== -->
<section class="arg-block arg-block--cream">
    <div class="container">
        <div class="arg-block-grid">
            <div class="arg-block-head">
                <div class="arg-block-num" aria-hidden="true">02</div>
                <h3>Argentina Immigration for Investors</h3>
            </div>
            <div class="arg-block-body">
                <p>Argentina has also created a citizenship route specifically connected with relevant investment.</p>
                <p>Under this framework, a qualifying foreign investor may apply for citizenship regardless of the length of residence, distinguishing this route from standard residence based naturalization.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== CITIZENSHIP BY INVESTMENT REVIEW PROCESS ===== -->
<section class="arg-block">
    <div class="container">
        <div class="arg-block-grid">
            <div class="arg-block-head">
                <div class="arg-block-num" aria-hidden="true">03</div>
                <h3>Citizenship by Investment Review Process</h3>
            </div>
            <div class="arg-block-body">
                <p>The Citizenship by Investment Programs Agency assesses whether an investment meets the required classification and coordinates the review of the applicant.</p>
                <p>Government security, financial intelligence, criminal records and identity authorities may participate in the assessment before a final decision is made.</p>
            </div>
        </div>
    </div>
</section>

<!-- ===== FAQ ===== -->
<section class="arg-faq">
    <div class="container">
        <div class="arg-faq-header">
            <div class="arg-stripes" aria-hidden="true"><span></span><span></span><span></span></div>
            <h3>Argentina Immigration FAQs</h3>
        </div>
        <div class="arg-faq-list">
            <div class="arg-faq-item faq-item active">
                <div class="arg-faq-question faq-question">Can foreigners immigrate to Argentina?<span class="arg-faq-toggle"></span></div>
                <div class="arg-faq-answer"><div class="arg-faq-answer-inner">Yes. Argentina has legal immigration and residence pathways for eligible foreign nationals.</div></div>
            </div>
            <div class="arg-faq-item faq-item">
                <div class="arg-faq-question faq-question">Can residents later apply for citizenship?<span class="arg-faq-toggle"></span></div>
                <div class="arg-faq-answer"><div class="arg-faq-answer-inner">Eligible foreign residents may apply for naturalization after satisfying the applicable requirements.</div></div>
            </div>
            <div class="arg-faq-item faq-item">
                <div class="arg-faq-question faq-question">Is there a separate pathway for investors?<span class="arg-faq-toggle"></span></div>
                <div class="arg-faq-answer"><div class="arg-faq-answer-inner">Yes. Argentina's citizenship legislation provides a separate route based on relevant investment.</div></div>
            </div>
        </div>
    </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section class="arg-final-cta">
    <div class="container">
        <a href="#top" class="btn btn-gold" onclick="document.querySelector('.hero-form input[name=name]').focus();return false;">Explore Your Argentina Immigration Options</a>
    </div>
</section>

<!-- ===== WhatsApp Float ===== -->
<a href="https://wa.me/+923099992229" target="_blank" class="btn btn-whatsapp whatsapp-float" aria-label="Chat on WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
@endsection
