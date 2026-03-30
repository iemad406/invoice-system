<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact US</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600&family=Jost:wght@300;400;500&display=swap" rel="stylesheet"/>
   <link rel="stylesheet" href="{{ asset('/css/contactUS/contact.css') }}">
</head>
<body>

<section class="hero">


  <svg class="dots-arc-top dots" viewBox="0 0 460 200" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <path id="arc1" d="M460,10 Q340,-30 200,60 Q80,140 10,190" fill="none"/>
    <circle r="2" fill="#c9a96e">
      <animateMotion dur="8s" repeatCount="indefinite" keyPoints="0;1" keyTimes="0;1" calcMode="linear">
        <mpath href="#arc1"/>
      </animateMotion>
    </circle>
    <circle cx="440" cy="18"  r="1.8" fill="#c9a96e" opacity=".9"/>
    <circle cx="410" cy="12"  r="1.6" fill="#c9a96e" opacity=".8"/>
    <circle cx="375" cy="10"  r="1.6" fill="#c9a96e" opacity=".75"/>
    <circle cx="340" cy="14"  r="1.4" fill="#c9a96e" opacity=".7"/>
    <circle cx="305" cy="24"  r="1.4" fill="#c9a96e" opacity=".65"/>
    <circle cx="270" cy="38"  r="1.4" fill="#c9a96e" opacity=".65"/>
    <circle cx="235" cy="55"  r="1.3" fill="#c9a96e" opacity=".6"/>
    <circle cx="200" cy="73"  r="1.3" fill="#c9a96e" opacity=".6"/>
    <circle cx="168" cy="94"  r="1.2" fill="#c9a96e" opacity=".55"/>
    <circle cx="138" cy="116" r="1.2" fill="#c9a96e" opacity=".55"/>
    <circle cx="110" cy="138" r="1.1" fill="#c9a96e" opacity=".5"/>
    <circle cx="84"  cy="158" r="1.1" fill="#c9a96e" opacity=".45"/>
    <circle cx="58"  cy="175" r="1"   fill="#c9a96e" opacity=".4"/>
    <circle cx="34"  cy="187" r="1"   fill="#c9a96e" opacity=".35"/>
    <circle cx="12"  cy="196" r="1"   fill="#c9a96e" opacity=".3"/>
  </svg>
  <svg class="dots-arc-bottom dots" viewBox="0 0 320 160" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <circle cx="10"  cy="140" r="1.8" fill="#c9a96e" opacity=".7"/>
    <circle cx="38"  cy="128" r="1.6" fill="#c9a96e" opacity=".65"/>
    <circle cx="68"  cy="112" r="1.6" fill="#c9a96e" opacity=".6"/>
    <circle cx="100" cy="94"  r="1.4" fill="#c9a96e" opacity=".55"/>
    <circle cx="134" cy="76"  r="1.4" fill="#c9a96e" opacity=".5"/>
    <circle cx="170" cy="58"  r="1.3" fill="#c9a96e" opacity=".45"/>
    <circle cx="208" cy="42"  r="1.2" fill="#c9a96e" opacity=".4"/>
    <circle cx="246" cy="28"  r="1.1" fill="#c9a96e" opacity=".35"/>
    <circle cx="285" cy="16"  r="1"   fill="#c9a96e" opacity=".3"/>
    <circle cx="315" cy="8"   r="1"   fill="#c9a96e" opacity=".25"/>
  </svg>
  <svg class="starburst" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <g transform="translate(32,32)">
      <line x1="0" y1="-28" x2="0"   y2="28"  stroke="#c9a96e" stroke-width="1.2" opacity=".9"/>
      <line x1="-28" y1="0" x2="28"  y2="0"   stroke="#c9a96e" stroke-width="1.2" opacity=".9"/>
      <line x1="-20" y1="-20" x2="20" y2="20" stroke="#c9a96e" stroke-width="0.9" opacity=".7"/>
      <line x1="20"  y1="-20" x2="-20" y2="20" stroke="#c9a96e" stroke-width="0.9" opacity=".7"/>
      <line x1="-10" y1="-26" x2="10" y2="26" stroke="#c9a96e" stroke-width="0.7" opacity=".5"/>
      <line x1="26"  y1="-10" x2="-26" y2="10" stroke="#c9a96e" stroke-width="0.7" opacity=".5"/>
      <line x1="-26" y1="-10" x2="26" y2="10" stroke="#c9a96e" stroke-width="0.7" opacity=".5"/>
      <line x1="10"  y1="-26" x2="-10" y2="26" stroke="#c9a96e" stroke-width="0.7" opacity=".5"/>
      <circle cx="0" cy="0" r="3" fill="#c9a96e"/>
    </g>
  </svg>
  <div class="left-col">
    <h1 class="page-title">Contact<br>Me</h1>
    <p class="page-description">
      Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta.
    </p>
  </div>
 
  <div class="right-col">
    <h2 class="form-heading">Send a Message</h2>
    <form class="contact-form" method="POST" action="{{ route('guess.contactUS') }}">
        @csrf
      <input type="text"  name="name"    placeholder="Name"          autocomplete="name"/>
      <input type="email" name="email"   placeholder="Email Address"  autocomplete="email"/>
      <input type="text" name="subject"   placeholder="Subject"  autocomplete="subject"/>
      <textarea           name="message" placeholder="Message"        rows="6"></textarea>
      <div class="submit-row">
        <button type="submit" class="btn-submit">Submit</button>
      </div>
    </form>
  </div>

</section>

<footer>

  <span class="footer-diamond" aria-hidden="true">✦</span>

  <svg class="footer-palm" viewBox="0 0 180 180" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    <g transform="translate(160,170)">
      <line x1="0" y1="0" x2="-80"  y2="-140" stroke="#c9a96e" stroke-width="1.5" opacity=".6"/>
      <line x1="0" y1="0" x2="-110" y2="-90"  stroke="#c9a96e" stroke-width="1.5" opacity=".55"/>
      <line x1="0" y1="0" x2="-130" y2="-40"  stroke="#c9a96e" stroke-width="1.5" opacity=".5"/>
      <line x1="0" y1="0" x2="-50"  y2="-155" stroke="#c9a96e" stroke-width="1"   opacity=".4"/>
      <line x1="0" y1="0" x2="-95"  y2="-120" stroke="#c9a96e" stroke-width="1"   opacity=".4"/>
      <line x1="0" y1="0" x2="-140" y2="-65"  stroke="#c9a96e" stroke-width="1"   opacity=".4"/>
      <line x1="0" y1="0" x2="-30"  y2="-160" stroke="#c9a96e" stroke-width="0.7" opacity=".3"/>
      <line x1="0" y1="0" x2="-155" y2="-20"  stroke="#c9a96e" stroke-width="0.7" opacity=".3"/>
    </g>
  </svg>

  <div class="footer-col">
    <h3 class="footer-col-title">About</h3>
    <p class="footer-body">
      Tiam pulvinar vestibulum mollis. In molestie, neque eu luctus consectetur, est dolor lacinia metus, vitae euismod
    </p>
  </div>

  <div class="footer-col">
    <h3 class="footer-col-title">Sign Up For Shop Updates</h3>
    <form class="newsletter-form" action="#">
      <input type="email" placeholder="Email" autocomplete="email"/>
      <button type="submit" class="btn-subscribe">Subscribe</button>
    </form>
  </div>

  <div class="footer-col">
    <h3 class="footer-col-title">Contact</h3>
    <a href="mailto:ibrahimshakhatreh06@gmail.com" class="contact-email">ibrahimshakhatreh06@gmail.com</a>
    <div class="social-icons">
   
      <a href="#" aria-label="Facebook">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
          <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
        </svg>
      </a>
     
      {{-- <a href="#" aria-label="TikTok">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
          <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V9.05a8.16 8.16 0 0 0 4.78 1.52V7.12a4.85 4.85 0 0 1-1.01-.43z"/>
        </svg>
      </a> --}}
      
      <a href="#" aria-label="Instagram">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
          <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
          <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
        </svg>
      </a>
    </div>
  </div>

</footer>

</body>
</html>