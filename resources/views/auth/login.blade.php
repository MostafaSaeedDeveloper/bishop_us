<!doctype html>
<html lang="en" class="remember-theme">
<head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" id="css-main" href="{{ asset('admin/assets/css/dashmix.min.css') }}">
  <script src="{{ asset('admin/assets/js/setTheme.js') }}"></script>
  <style>
    :root { --bs-primary: #FFCC00; }
    .btn-primary { background-color:#FFCC00; border-color:#FFCC00; color:#111; }
    .btn-primary:hover { background-color:#e6b800; border-color:#e6b800; color:#111; }
    .text-primary { color:#FFCC00 !important; }
  </style>
</head>
<body>
<div id="page-container"><main id="main-container">
<div class="bg-image" style="background-image: url('{{ asset('admin/assets/media/photos/photo19@2x.jpg') }}');">
<div class="row g-0 justify-content-center bg-primary-dark-op"><div class="hero-static col-sm-8 col-md-6 col-xl-4 d-flex align-items-center p-2 px-sm-0">
<div class="block block-transparent block-rounded w-100 mb-0 overflow-hidden">
<div class="block-content block-content-full px-lg-5 px-xl-6 py-4 py-md-5 py-lg-6 bg-body-extra-light">
<div class="mb-4 text-center"><a href="{{ route('front.home') }}"><img src="{{ asset('assets/imgs/logo/logo-light.png') }}" alt="Bishop" style="max-width:180px;background:#111;padding:8px 12px;border-radius:6px"></a><p class="text-uppercase fw-bold fs-sm text-muted mt-3">Sign In</p></div>
<form method="POST" action="{{ route('login') }}">@csrf
<div class="mb-4"><div class="input-group input-group-lg"><input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus><span class="input-group-text"><i class="fa fa-user-circle"></i></span></div>@error('username')<small class="text-danger">{{ $message }}</small>@enderror</div>
<div class="mb-4"><div class="input-group input-group-lg"><input type="password" class="form-control" name="password" placeholder="Password" required><span class="input-group-text"><i class="fa fa-asterisk"></i></span></div>@error('password')<small class="text-danger">{{ $message }}</small>@enderror</div>
<div class="d-sm-flex justify-content-sm-between align-items-sm-center text-center text-sm-start mb-4"><div class="form-check"><input type="checkbox" class="form-check-input" name="remember" id="remember"><label class="form-check-label" for="remember">Remember Me</label></div></div>
<div class="text-center mb-4"><button type="submit" class="btn btn-hero btn-primary"><i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Sign In</button></div>
</form>
</div></div></div></div></div>
</main></div>
<script src="{{ asset('admin/assets/js/dashmix.app.min.js') }}"></script>
</body></html>
