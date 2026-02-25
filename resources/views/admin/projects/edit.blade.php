@extends('admin.master')

@section('content')
<!-- Hero -->
<div class="bg-image" style="background-image: url('{{ asset('admin/assets/media/photos/photo13@2x.jpg') }}');">
  <div class="bg-black-50">
    <div class="content content-full d-flex justify-content-between align-items-center">
      <h1 class="fs-2 text-white my-2">
        <i class="fa fa-pencil-alt text-white-50 me-1"></i> Edit Project
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
      <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        <h2 class="content-heading pt-0">{{ $project->name }}</h2>
        <div class="row push">
          <div class="col-lg-4">
            <p class="text-muted mb-0">Update project information and media while keeping the same dashboard style.</p>
          </div>
          <div class="col-lg-8">
            @include('admin.projects._form', ['project' => $project])
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- END Page Content -->
@endsection
