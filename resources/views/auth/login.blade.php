<!doctype html>
<html lang="en" class="remember-theme">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Bishop Dashboard Login</title>
    <link rel="stylesheet" id="css-main" href="{{ asset('admin/assets/css/dashmix.min.css') }}">
    <script src="{{ asset('admin/assets/js/setTheme.js') }}"></script>
  </head>
  <body>
    <div id="page-container">
      <main id="main-container">
        <div class="bg-image" style="background-image: url('{{ asset('admin/assets/media/photos/photo19@2x.jpg') }}');">
          <div class="row g-0 justify-content-center bg-primary-dark-op">
            <div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
              <div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
                <div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
                  <div class="mb-4 text-center">
                    <a class="d-inline-block" href="{{ route('front.home') }}">
                      <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" style="max-height: 60px;">
                    </a>
                    <p class="text-uppercase fw-bold fs-sm text-muted mt-3">Sign In</p>
                  </div>

                  <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                      <div class="input-group input-group-lg">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>
                        <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                      </div>
                      @error('username') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-4">
                      <div class="input-group input-group-lg">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
                        <span class="input-group-text"><i class="fa fa-asterisk"></i></span>
                      </div>
                      @error('password') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                    </div>

                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-start mb-4">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">Remember Me</label>
                      </div>
                    </div>

                    <div class="text-center mb-4">
                      <button type="submit" class="btn btn-hero btn-primary">
                        <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <script src="{{ asset('admin/assets/js/dashmix.app.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/pages/op_auth_signin.min.js') }}"></script>
  </body>
</html>
