<!doctype html>
<html lang="en" class="remember-theme">
<head>
  <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>@yield('title', 'Bishop CMS')</title>
  <link rel="stylesheet" id="css-main" href="{{ asset('admin/assets/css/dashmix.min.css') }}">
  <script src="{{ asset('admin/assets/js/setTheme.js') }}"></script>
</head>
<body>
<div id="page-container" class="sidebar-o sidebar-dark enable-page-overlay side-scroll page-header-fixed">
  <nav id="sidebar" aria-label="Main Navigation">
    <div class="content-header bg-body-dark"><a class="fw-semibold text-dual" href="{{ route('admin.dashboard') }}">Bishop CMS</a></div>
    <div class="content-side"><ul class="nav-main">
      <li class="nav-main-item"><a class="nav-main-link" href="{{ route('admin.dashboard') }}"><span class="nav-main-link-name">Dashboard</span></a></li>
      <li class="nav-main-item"><a class="nav-main-link" href="{{ route('admin.projects.index') }}"><span class="nav-main-link-name">Projects</span></a></li>
      <li class="nav-main-item"><a class="nav-main-link" href="{{ route('admin.posts.index') }}"><span class="nav-main-link-name">Posts</span></a></li>
    </ul></div>
  </nav>
  <header id="page-header"><div class="content-header"><div class="d-flex align-items-center"><button type="button" class="btn btn-sm btn-alt-secondary me-2" data-toggle="layout" data-action="sidebar_toggle"><i class="fa fa-fw fa-bars"></i></button></div><div>
    <form method="POST" action="{{ route('logout') }}">@csrf<button class="btn btn-sm btn-danger">Logout</button></form>
  </div></div></header>
  <main id="main-container"><div class="content">@if(session('success'))<div class="alert alert-success">{{ session('success') }}</div>@endif @yield('content')</div></main>
</div>
<script src="{{ asset('admin/assets/js/dashmix.app.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
@stack('scripts')
</body>
</html>
