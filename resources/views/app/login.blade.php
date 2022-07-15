<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $page }}</title>
    <link rel="stylesheet" href="{{ asset('assets/style/register.css')}}">
</head>
<body>
    
    <div class="container">
    <h1>LOG IN</h1>
                   
        <form method="POST" action="{{ route('proses-login') }}" enctype="multipart/form-data">
            @csrf
          
            <label for="">Email</label><br>
            <input type="text" name="email" required value="{{ old('email')}}"><br>
            @error('email')
            <p style=" color:red; font-size: small;">{{ $message }}</p>
            @enderror

            <label for="">Password</label><br>
            <input type="password" value="" name="password" required><br>

            @error('password')
               <p style="color:red; font-size:small;"> {{ $message}}</p>
            @enderror
            <button type="submit">Log In</button><br>
            <p>Belum Punya Akun ?
                <a href="{{ route('register')}}">Daftar Di sini ?</a>
            </p>
            
        
        </form>
    </div>

</body>
</html>