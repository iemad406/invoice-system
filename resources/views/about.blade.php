<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>

<div class="container">

    <section class="hero">
        <h1>About Our Invoice System</h1>
        <p>Smart, simple, and efficient invoicing for modern businesses.</p>
    </section>

    <section class="content">

        <div class="card">
            <h2>🚀 Our Mission</h2>
            <p>
                We aim to simplify invoice management by providing a fast, secure, and user-friendly platform
                that helps businesses manage their billing processes efficiently.
            </p>
        </div>

        <div class="card">
            <h2>💡 What We Offer</h2>
            <ul>
                <li>Create and manage invoices بسهولة</li>
                <li>Track payments and due dates</li>
                <li>Organize customers and products</li>
                <li>Generate reports and analytics</li>
                <li>Secure authentication system</li>
            </ul>
        </div>

        <div class="card">
            <h2>⚙️ Technology</h2>
            <p>
                This system is built using modern technologies including Laravel for backend development,
                and responsive frontend design to ensure usability across all devices.
            </p>
        </div>

    </section>

    <footer class="footer">
        <p>© {{ date('Y') }} Invoice App. All rights reserved.</p>
    </footer>

</div>

</body>
</html>