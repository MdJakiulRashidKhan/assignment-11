<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - AdminLTE</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
    <!-- FontAwesome CDN -->
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  </head>
  <body class="register-page bg-light">
    <div class="register-box">
      <div class="register-logo">
        <a href="#"><b>Admin</b>LTE</a>
      </div>

      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Register a new membership</p>

          <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="input-group mb-3">
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus placeholder="Full Name">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
            </div>
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <!-- Email Address -->
            <div class="input-group mb-3">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
            </div>
            @error('email')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <!-- Password -->
            <div class="input-group mb-3">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
              </div>
            </div>
            @error('password')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <!-- Confirm Password -->
            <div class="input-group mb-3">
              <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
              </div>
            </div>

            <div class="row">
              <div class="col-8">
                <a href="{{ route('login') }}" class="text-center">Already have an account? Login</a>
              </div>
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>

    <!-- AdminLTE JS -->
    <script src="{{ asset('assets/js/adminlte.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
