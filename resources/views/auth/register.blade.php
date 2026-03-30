<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('/css/auth/register.css')}}">
</head>
<body>
    <div class="container">
        <div class="form-card">
            <h2>Create Account</h2>
            <p>Join our platform to start organizing your invoices.</p>
             @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{ route('user.register') }}" method="POST" autocomplete="off">
                @csrf
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="@error('email') is-invalid @enderror" placeholder="name@company.com">
                    @error('email')
                     <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" value="{{ old('password') }}" class="@error('password') is-invalid @enderror" placeholder="••••••••">
                </div>

                <div class="input-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" placeholder="••••••••">
                    @error('password')
                       <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn-register">Register</button>
            </form>

            <div class="footer-text">
                Already have an account? <a href="/login">Login here</a>
            </div>
        </div>
    </div>
</body>
</html>
