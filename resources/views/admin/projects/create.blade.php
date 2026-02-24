@extends('admin.master')
@section('content')
<form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data">@csrf @include('admin.projects.form')<button class="btn btn-primary">Save</button></form>
@endsection
