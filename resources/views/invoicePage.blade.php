<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/invoice.css') }}">
    <title>Upload Invoice</title>
</head>
<body>
<div class="container">

    @auth('auth_user')
        @php
            $username=explode( '@',auth('auth_user')->user()->email)[0];
            $url=route('uploadInvoice',['id'=>auth('auth_user')->user()->user_id,'name'=>$username]);
            
        @endphp
        <div class="top-bar">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
       </div>
        <h2>Upload Invoice</h2>
          <div class="welcome-box">
        👋 Hello {{ $username }},
        <br>
        <small>Upload your invoice securely.</small>
    </div> 
    <form  action="{{ $url }}" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="file-input">
            <input type="file" id="invoiceFile" name="invoiceFile">
            @error('invoiceFile')
               <p class="error-text">{{ $message }}</p>
            @enderror

             @if(session('noUploadedFile'))
                <p class="error-text">{{ session('noUploadedFile') }}</p>
             @endif

              @if(session('inoiceNotAdded'))
                <p class="error-text">{{ session('inoiceNotAdded') }}</p>
             @endif

        </div>

        <button type="submit">Upload</button>
    </form>
    @endauth
    
    @guest('auth_user')
          <p class="welcome-text">
           👋 Please login to upload invoices.
           </p>
           <script>
               setTimeout(() => {
                   window.location.href="/login"
               }, 5000);
           </script>
    @endguest
</div>

</body>
</html>