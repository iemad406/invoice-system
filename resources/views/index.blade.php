<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('./css/index.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>InvoFlow — Smart Invoice Processing</title>
    <style>
       
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f7f8fa;
            color: #1a1d23;
            line-height: 1.6;
        }

        .hero {
            background: #ffffff;
            padding: 90px 24px 80px;
            text-align: center;
            border-bottom: 1px solid #e8eaed;
        }

        .hero-tag {
            display: inline-block;
            background: #eef7f4;
            color: #1a8c6a;
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            padding: 5px 14px;
            border-radius: 100px;
            margin-bottom: 24px;
        }

        .hero h1 {
            font-size: clamp(2rem, 5vw, 3.2rem);
            font-weight: 700;
            line-height: 1.2;
            color: #1a1d23;
            margin-bottom: 18px;
            letter-spacing: -0.02em;
        }

        .hero h1 span { color: #1a8c6a; }

        .hero p {
            max-width: 520px;
            margin: 0 auto 36px;
            color: #5c6370;
            font-size: 1.05rem;
        }

        .hero-btns {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn-main {
            background: #1a8c6a;
            color: #fff;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            transition: background 0.2s;
        }

        .btn-main:hover { background: #157a5b; }

        .btn-outline {
            background: transparent;
            color: #1a1d23;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.95rem;
            text-decoration: none;
            border: 1px solid #d0d3d9;
            transition: border-color 0.2s;
        }

        .btn-outline:hover { border-color: #9aa0aa; }

        .stats-bar {
            background: #fff;
            border-bottom: 1px solid #e8eaed;
            padding: 28px 24px;
        }

        .stats-inner {
            max-width: 800px;
            margin: 0 auto;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
        }

        .stat-item { text-align: center; }

        .stat-num {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1a8c6a;
            line-height: 1;
        }

        .stat-txt {
            font-size: 0.8rem;
            color: #7a8090;
            margin-top: 4px;
        }

        .section {
            max-width: 1100px;
            margin: 0 auto;
            padding: 72px 24px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 48px;
        }

        .section-header h2 {
            font-size: clamp(1.6rem, 3.5vw, 2.2rem);
            font-weight: 700;
            letter-spacing: -0.02em;
            margin-bottom: 12px;
        }

        .section-header p {
            color: #5c6370;
            font-size: 1rem;
            max-width: 480px;
            margin: 0 auto;
        }

        /* ── STEPS ── */
        .steps-bg {
            background: #fff;
            border-top: 1px solid #e8eaed;
            border-bottom: 1px solid #e8eaed;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 32px;
        }

        .step { text-align: center; padding: 8px; }

        .step-circle {
            width: 52px; height: 52px;
            border-radius: 50%;
            background: #eef7f4;
            color: #1a8c6a;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
        }

        .step h3 { font-size: 1rem; font-weight: 600; margin-bottom: 8px; }
        .step p  { color: #5c6370; font-size: 0.875rem; }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .feature-card {
            background: #fff;
            border: 1px solid #e8eaed;
            border-radius: 12px;
            padding: 28px 24px;
            transition: box-shadow 0.2s, border-color 0.2s;
        }

        .feature-card:hover {
            box-shadow: 0 4px 20px rgba(0,0,0,0.06);
            border-color: #c8ebe0;
        }

        .feat-icon { font-size: 1.5rem; margin-bottom: 14px; display: block; }

        .feature-card h3 { font-size: 1rem; font-weight: 600; margin-bottom: 8px; }
        .feature-card p  { color: #5c6370; font-size: 0.875rem; line-height: 1.6; }

        .demo-bg {
            background: #fff;
            border-top: 1px solid #e8eaed;
            border-bottom: 1px solid #e8eaed;
        }

        .demo-wrap {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 48px;
            align-items: center;
        }

        .demo-text h2 {
            font-size: clamp(1.5rem, 3vw, 2rem);
            font-weight: 700;
            letter-spacing: -0.02em;
            margin-bottom: 14px;
        }

        .demo-text p { color: #5c6370; font-size: 0.95rem; margin-bottom: 20px; }

        .check-list { list-style: none; display: flex; flex-direction: column; gap: 10px; }

        .check-list li {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.9rem;
            color: #3a3f4a;
        }

        .check-list li::before {
            content: '✓';
            width: 20px; height: 20px;
            background: #eef7f4;
            color: #1a8c6a;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            font-weight: 700;
            flex-shrink: 0;
        }

        .invoice-mock {
            background: #f7f8fa;
            border: 1px solid #e8eaed;
            border-radius: 14px;
            padding: 24px;
        }

        .mock-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 16px;
            border-bottom: 1px solid #e8eaed;
        }

        .mock-title      { font-weight: 700; font-size: 0.95rem; }
        .mock-title small { display: block; color: #7a8090; font-size: 0.75rem; font-weight: 400; margin-top: 2px; }

        .mock-badge {
            background: #eef7f4;
            color: #1a8c6a;
            font-size: 0.7rem;
            font-weight: 600;
            padding: 3px 10px;
            border-radius: 6px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .mock-row {
            display: flex;
            justify-content: space-between;
            padding: 9px 0;
            border-bottom: 1px solid #f0f1f3;
            font-size: 0.85rem;
        }

        .mock-row:last-child { border-bottom: none; }
        .mock-label { color: #7a8090; }
        .mock-val   { font-weight: 500; }
        .mock-val.green { color: #1a8c6a; font-weight: 700; }

        .cta-section {
            background: #1a8c6a;
            padding: 72px 24px;
            text-align: center;
        }

        .cta-section h2 {
            font-size: clamp(1.6rem, 3.5vw, 2.2rem);
            font-weight: 700;
            color: #fff;
            margin-bottom: 12px;
            letter-spacing: -0.02em;
        }

        .cta-section p { color: rgba(255,255,255,0.75); font-size: 1rem; margin-bottom: 32px; }

        .cta-btns { display: flex; gap: 12px; justify-content: center; flex-wrap: wrap; }

        .btn-white {
            background: #fff;
            color: #1a8c6a;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            transition: opacity 0.2s;
        }

        .btn-white:hover { opacity: 0.9; }

        .btn-ghost {
            background: transparent;
            color: #fff;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 0.95rem;
            text-decoration: none;
            border: 1px solid rgba(255,255,255,0.35);
            transition: border-color 0.2s;
        }

        .btn-ghost:hover { border-color: rgba(255,255,255,0.7); }

        footer {
            background: #fff;
            border-top: 1px solid #e8eaed;
            padding: 28px 24px;
            text-align: center;
        }

        footer p { color: #9aa0aa; font-size: 0.85rem; }

        @media (max-width: 700px) {
            .demo-wrap      { grid-template-columns: 1fr; }
            .invoice-mock   { display: none; }
        }

        @media (max-width: 480px) {
            .section { padding: 52px 20px; }
            .hero    { padding: 72px 20px 60px; }
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <div class="logo">InvoFlow</div>
            <nav>
                <div class="menu-toggle" onclick="toggleMenu()">☰</div>
                <ul id="navMenu">
                    <li><a href="/about">About</a></li>
                    <li><a href="{{ route('contactUS') }}">Contact</a></li>
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="/register">Register</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="hero-tag">Invoice Processing, Automated</div>
        <h1>Upload Invoices.<br>Get <span>Clean Data</span> Instantly.</h1>
        <p>InvoFlow extracts vendor details, dates, line items, and totals from any invoice — PDF, image, or scan — in seconds.</p>
        <div class="hero-btns">
            <a href="/register" class="btn-main">Get Started Free</a>
            <a href="/about"    class="btn-outline">Learn More</a>
        </div>
    </section>

    <div class="stats-bar">
        <div class="stats-inner">
            <div class="stat-item">
                <div class="stat-num">99%</div>
                <div class="stat-txt">Extraction Accuracy</div>
            </div>
            <div class="stat-item">
                <div class="stat-num">10x</div>
                <div class="stat-txt">Faster Than Manual</div>
            </div>
            <div class="stat-item">
                <div class="stat-num">50+</div>
                <div class="stat-txt">Supported Formats</div>
            </div>
            <div class="stat-item">
                <div class="stat-num">&lt;2s</div>
                <div class="stat-txt">Average Process Time</div>
            </div>
        </div>
    </div>

    <div class="steps-bg">
        <div class="section">
            <div class="section-header">
                <h2>How It Works</h2>
                <p>Three simple steps to turn any invoice into structured, usable data.</p>
            </div>
            <div class="steps-grid">
                <div class="step">
                    <div class="step-circle">📤</div>
                    <h3>Upload Invoice</h3>
                    <p>Drop your PDF, JPG, or PNG invoice into the uploader. Any format, any layout.</p>
                </div>
                <div class="step">
                    <div class="step-circle">🔍</div>
                    <h3>AI Reads It</h3>
                    <p>Our engine scans every field — vendor, date, amounts, line items, and tax.</p>
                </div>
                <div class="step">
                    <div class="step-circle">📋</div>
                    <h3>Data Extracted</h3>
                    <p>Review clean, structured results and export to CSV, JSON, or your ERP system.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section-header">
            <h2>Everything You Need</h2>
            <p>Built for finance teams who want accuracy, speed, and simplicity.</p>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <span class="feat-icon">🧠</span>
                <h3>Smart OCR</h3>
                <p>Handles scanned documents, low-resolution images, skewed pages, and mixed layouts accurately.</p>
            </div>
            <div class="feature-card">
                <span class="feat-icon">📊</span>
                <h3>Structured Output</h3>
                <p>Every extracted field is labeled and organized — vendor, invoice number, dates, totals, and taxes.</p>
            </div>
            <div class="feature-card">
                <span class="feat-icon">🔒</span>
                <h3>Secure Uploads</h3>
                <p>Files are encrypted in transit and at rest. Processed in isolated sandboxes for full privacy.</p>
            </div>
            <div class="feature-card">
                <span class="feat-icon">⚡</span>
                <h3>Instant Results</h3>
                <p>Most invoices are processed in under 2 seconds. No waiting, no queues.</p>
            </div>
            <div class="feature-card">
                <span class="feat-icon">🔗</span>
                <h3>Easy Export</h3>
                <p>Download as CSV or JSON, or connect to your accounting software via our REST API.</p>
            </div>
            <div class="feature-card">
                <span class="feat-icon">📁</span>
                <h3>Any Format</h3>
                <p>PDF, PNG, JPG, TIFF — upload whatever you have. InvoFlow handles the rest.</p>
            </div>
        </div>
    </div>

    <div class="demo-bg">
        <div class="section">
            <div class="demo-wrap">
                <div class="demo-text">
                    <h2>See What Gets Extracted</h2>
                    <p>InvoFlow pulls every important field from your invoices automatically — no templates, no manual setup required.</p>
                    <ul class="check-list">
                        <li>Vendor name, address &amp; tax ID</li>
                        <li>Invoice number &amp; issue / due date</li>
                        <li>Line items with quantity and unit price</li>
                        <li>Subtotal, tax amount &amp; total due</li>
                        <li>Payment terms and bank details</li>
                    </ul>
                </div>
                <div class="invoice-mock">
                    <div class="mock-top">
                        <div class="mock-title">Acme Corp Ltd.<small>Tax ID: AE-2024-88912</small></div>
                        <div class="mock-badge">✓ Extracted</div>
                    </div>
                    <div class="mock-row"><span class="mock-label">Invoice No.</span><span class="mock-val">#INV-20240831</span></div>
                    <div class="mock-row"><span class="mock-label">Issue Date</span><span class="mock-val">Aug 31, 2024</span></div>
                    <div class="mock-row"><span class="mock-label">Due Date</span><span class="mock-val">Sep 15, 2024</span></div>
                    <div class="mock-row"><span class="mock-label">Vendor Email</span><span class="mock-val">billing@acme.com</span></div>
                    <div class="mock-row"><span class="mock-label">Subtotal</span><span class="mock-val">$4,200.00</span></div>
                    <div class="mock-row"><span class="mock-label">Tax (15%)</span><span class="mock-val">$630.00</span></div>
                    <div class="mock-row"><span class="mock-label">Total Due</span><span class="mock-val green">$4,830.00</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="cta-section">
        <h2>Start Processing Invoices Today</h2>
        <p>Free to get started. No credit card required.</p>
        <div class="cta-btns">
            <a href="/register"             class="btn-white">Create Free Account</a>
            <a href="{{ route('login') }}"  class="btn-ghost">Sign In</a>
        </div>
    </div>

    <footer>
        <p>© {{ date('Y') }} InvoFlow. All rights reserved.</p>
    </footer>

    <script>
        function toggleMenu() {
            document.getElementById("navMenu").classList.toggle("active");
        }
    </script>

</body>
</html>