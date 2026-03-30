<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activate Your Account</title>
    <link rel="stylesheet" href="{{ asset('css/auth/activate.css') }}">
</head>
<body>
    <div class="activation-wrapper">
        <div class="activation-card">
            <div class="icon-header">
                <div class="circle-check">✓</div>
            </div>
            
            <h1>Hello, {{ $user_email ?? 'Valued Member' }}!</h1>
            <p>Thank you for joining our platform. We're excited to have you on board. To get started with managing your invoices and tasks, please confirm your email address.</p>

            <div class="action-area">
                <a href="{{ $url }}" class="btn-activate">
                    Activate Account
                </a>
            </div>

            <p class="expiry-text">
                This link will expire in 24 hours for your security.
            </p>

            <div class="footer">
                <p>If you didn't create an account, you can safely ignore this email.</p>
                <hr>
                <p class="brand">© 2026 InvoFlow</p>
            </div>
        </div>
    </div>
</body>
</html>