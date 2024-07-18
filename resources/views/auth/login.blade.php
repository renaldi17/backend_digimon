<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            background-color: #4E775B; /* Latar belakang halaman berwarna hijau army */
        }
        .card {
            width: 100%;
            max-width: 500px;
            border: none;
        }
        .card-header {
            background-color: transparent;
            border-bottom: none; /* Menghilangkan garis di bawah header card */
            text-align: center;
        }
        .logo {
            height: 100px; /* Ukuran logo yang lebih kecil */
            width: auto;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card">
            <div class="card-header">
                <img class="logo" src="{{ asset('assets/img/desaTegalManggung.png') }}" alt="Logo TegalManggung" />
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                    <div class="text-center mt-3">
                        <a href="{{ route('register') }}">Belum punya akun?</a>
                    </div>
                </form>
            </div>
            <div class="card-footer text-center">
                <a href="{{ url('/') }}" class="btn btn-secondary">Back</a> <!-- Tombol Back ke Dashboard -->
            </div>
        </div>
    </div>
</body>
</html>
