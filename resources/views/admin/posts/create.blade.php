@extends('admin.master')
@section('content')
<form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">@csrf @include('admin.posts.form')<button class="btn btn-primary">Save</button></form>
@endsection
