<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
        .card-body {
            text-align: center;
        }
        .logo {
            max-height: 100px; /* Ukuran logo lebih kecil */
            margin-bottom: 20px; /* Jarak antara logo dengan judul */
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card">
            <div class="card-body">
                <img class="logo" src="{{ asset('assets/img/desaTegalManggung.png') }}" alt="Logo TegalManggung" />
                {{-- <h2 class="text-center mb-4">Register</h2> --}}
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                            name="username" value="{{ old('username') }}" required autocomplete="username">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                            autocomplete="new-password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                    <div class="text-center mt-3">
                        <a href="{{ route('login') }}">Sudah punya akun?</a>
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
