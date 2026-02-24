@extends('admin.master')
@section('title', 'Dashboard')
@section('content')
<div class="row">
  <div class="col-md-6"><div class="block block-rounded"><div class="block-content"><h3>Projects</h3><p class="fs-2 fw-bold">{{ $projectsCount }}</p></div></div></div>
  <div class="col-md-6"><div class="block block-rounded"><div class="block-content"><h3>Posts</h3><p class="fs-2 fw-bold">{{ $postsCount }}</p></div></div></div>
</div>
@endsection
