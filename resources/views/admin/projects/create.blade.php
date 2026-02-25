@extends('admin.master')

@section('content')
<!-- Hero -->
<div class="bg-image" style="background-image: url('{{ asset('admin/assets/media/photos/photo13@2x.jpg') }}');">
  <div class="bg-black-50">
    <div class="content content-full d-flex justify-content-between align-items-center">
      <h1 class="fs-2 text-white my-2">
        <i class="fa fa-plus text-white-50 me-1"></i> New Project
      </h1>
      <a class="btn btn-alt-light" href="{{ route('admin.projects.index') }}">
        <i class="fa fa-arrow-left me-1"></i> Back
      </a>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  <div class="block block-rounded block-bordered">
    <div class="block-content block-content-full">
      <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        <h2 class="content-heading pt-0">Project Details</h2>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted mb-0">Fill in the information below to publish a new project in your portfolio.</p>
          </div>
          <div class="col-lg-8">
            @include('admin.projects._form')
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END Page Content -->
@endsection
