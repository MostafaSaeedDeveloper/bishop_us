@extends('admin.master')
@section('content')
<form method="POST" action="{{ route('admin.projects.update',$project) }}" enctype="multipart/form-data">@csrf @method('PUT') @include('admin.projects.form')<button class="btn btn-primary">Update</button></form>
@endsection
