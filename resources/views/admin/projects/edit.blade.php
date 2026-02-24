@extends('admin.master')

@section('content')
<div class="content">
  <div class="block block-rounded">
    <div class="block-header block-header-default"><h3 class="block-title">Edit Project</h3></div>
    <div class="block-content">
      <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('admin.projects._form')
      </form>
    </div>
  </div>
</div>
@endsection
