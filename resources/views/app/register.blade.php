<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$page}}</title>
    <link rel="stylesheet" href="{{ asset('assets/style/register.css')}}">
</head>
<body>
    
    <div class="container">
    <h1>Register</h1>
                    @if (session('success'))
                    <p style="color:aliceblue; font-size: large;">
                        {{ session('success') }}
                    </p>
                    @endif
        <form method="POST" action="{{ route('proses-register') }}" enctype="multipart/form-data">
            @csrf
            <label for="">Nama</label><br>
            <input type="text" value="{{ old('nama')}}" name="nama" required><br>
            @error('nama')
            <p style="color:red">{{ $message }}</p>
            @enderror
            <label for="">Username</label><br>
            <input type="text" value="{{ old('username')}}" name="username" required><br>
            <label for="">Email</label><br>
            <input type="text" name="email" value="{{ old('email')}}" required><br>
            @error('email')
            <p style="color:red">{{ $message }}</p>
            @enderror
            <label for="">Password</label><br>
            <input type="password" value="{{ old('password')}}" name="password" required><br>
            <button type="submit">Register</button><br>
            <p>Sudah Punya Akun ?
                <a href="{{ route('login')}}">Login Di sini ?</a>
            </p>
            
        
        </form>
    </div>

</body>
</html>