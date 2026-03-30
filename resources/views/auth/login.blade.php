<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('/css/auth/login.css')}}">
</head>
<body>
    <div class="container">
        <div class="form-card">
            <h2>Welcome Back</h2>
            <p>Please enter your details to sign in.</p>
            
            <form action="/user_login" method="POST">
                 @csrf
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="user_email" placeholder="email@example.com">
                </div>

                <div class="input-group">
                    <div class="label-wrapper">
                        <label for="password">Password</label>
                        <a href="#" class="forgot-link">Forgot?</a>
                    </div>
                    <input type="password" id="password" name="user_password" placeholder="••••••••">
                </div>

                <div class="options">
                    <label class="remember-me">
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                </div>

                <button type="submit" class="btn-login">Sign In</button>
                @if(session('error'))
                    <div class="alert alert-error" style="margin-top:5.6px;">
                        {{ session('error') }}
                    </div>
                @endif
            </form>

            <div class="footer-text">
                Don't have an account? <a href="/register">Create one</a>
            </div>
        </div>
    </div>
</body>
</html>
