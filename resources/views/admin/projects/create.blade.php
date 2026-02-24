@extends('admin.master')

@section('content')
<div class="content">
  <div class="block block-rounded">
    <div class="block-header block-header-default"><h3 class="block-title">Add Project</h3></div>
    <div class="block-content">
      <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @include('admin.projects._form')
      </form>
    </div>
  </div>
</div>
@endsection
