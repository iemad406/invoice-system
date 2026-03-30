<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <title>Inquiry — Divi Jewelry</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="{{ asset('/css/contactUS/mailBodyContent/mail_body_content.css') }}"> 
</head>
<body>

<div class="email-wrapper">

  <p class="pre-header">✦ &nbsp; InvoFlow &nbsp; · &nbsp; Handcrafted with Intention &nbsp; ✦</p>

  <header class="email-header">
    <div class="logo-area">
     
      <svg class="logo-mark" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="19" cy="19" r="18" stroke="#c9a96e" stroke-width="0.8" opacity="0.5"/>
        <g transform="translate(19,19)">
          <line x1="0" y1="-13" x2="0"   y2="13"  stroke="#c9a96e" stroke-width="1"/>
          <line x1="-13" y1="0" x2="13"  y2="0"   stroke="#c9a96e" stroke-width="1"/>
          <line x1="-9" y1="-9" x2="9"   y2="9"   stroke="#c9a96e" stroke-width="0.7" opacity="0.6"/>
          <line x1="9"  y1="-9" x2="-9"  y2="9"   stroke="#c9a96e" stroke-width="0.7" opacity="0.6"/>
          <circle cx="0" cy="0" r="2.5" fill="#c9a96e"/>
        </g>
      </svg>
      <span class="logo-text">Invo <span>Flow</span></span>
    </div>
    <span class="header-tag">New Inquiry</span>
  </header>

  <section class="hero-banner">
    <div class="hero-ornament">
      <span class="ornament-line"></span>
      <span class="ornament-diamond">✦</span>
      <span class="ornament-line right"></span>
    </div>
    <p class="hero-eyebrow">Customer Inquiry Received</p>
    <h1 class="hero-headline">We Received<br><em>Your Message</em></h1>
    <p class="hero-sub">Thank you for reaching out — we'll be in touch shortly.</p>
  </section>

  <main class="body-card">

    <p class="greeting">Dear [{{ $name }}],</p>

    <p class="body-text">
      Thank you for contacting InvoFlow. We are delighted to hear from you and appreciate the time you've taken to reach out. Your inquiry is important to us and has been received by our team.
    </p>

    <p class="body-text">
      Below is a summary of the details you submitted. A member of our team will review your message and respond within <strong style="color: var(--gold-light); font-weight: 400;">1–2 business days</strong>.
    </p>

    <div class="inquiry-block">
      <p class="inquiry-block-label">Inquiry Summary</p>

      <div class="inquiry-row">
        <span class="inquiry-key">Reference&nbsp;No.</span>
        <span class="inquiry-val">{{ $refrence_number }}</span>
      </div>
      <div class="inquiry-row">
        <span class="inquiry-key">Submitted</span>
        <span class="inquiry-val">{{ $date }} &nbsp;·&nbsp; {{ $time }}</span>
      </div>
      <div class="inquiry-row">
        <span class="inquiry-key">Subject</span>
        <span class="inquiry-val">[{{ $mail_subject }}]</span>
      </div>
      <div class="inquiry-row">
        <span class="inquiry-key">Message</span>
        <span class="inquiry-val" style="font-style: italic; color: #b0a090;">"[{{ $mail_message }}…]"</span>
      </div>
    </div>

    <p class="body-text">
      In the meantime, feel free to browse our latest collections or visit our studio. If your matter is urgent, you may also reach us directly at
      <a href="mailto:hello@divijewelry.com" style="color: var(--gold); text-decoration: none; font-weight: 400;">hello@divijewelry.com</a>.
    </p>

    <div class="divider"></div>

    <div class="cta-wrapper">
      <a href="#" class="cta-button">View Our Collections</a>
      <p class="cta-note">Discover handcrafted pieces made with intention</p>
    </div>

    <div class="divider"></div>

    <div class="signature">
      <p class="body-text" style="margin-bottom: 18px;">Warm regards,</p>
      <p class="signature-name">The Divi Jewelry Team</p>
      <p class="signature-title">Studio &amp; Atelier &nbsp;·&nbsp; hello@divijewelry.com</p>
    </div>

  </main>

  <footer class="email-footer">
    <div class="footer-inner">
      <div>
        <p class="footer-brand">Divi Jewelry</p>
        <p class="footer-address">
          123 Atelier Lane, Studio 4<br/>
          New York, NY 10001<br/>
          United States
        </p>
      </div>
      <div class="footer-links">
        <a href="#">Our Story</a>
        <a href="#">Collections</a>
        <a href="#">Care Guide</a>
        <a href="#">Unsubscribe</a>
      </div>
    </div>
    <p class="footer-bottom">
      © 2026 InvoFlow &nbsp;·&nbsp; All rights reserved &nbsp;·&nbsp; You received this because you submitted an inquiry via our website.
    </p>
  </footer>

</div>

</body>
</html>