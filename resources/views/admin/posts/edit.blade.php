@extends('admin.master')
@section('content')
<form method="POST" action="{{ route('admin.posts.update',$post) }}" enctype="multipart/form-data">@csrf @method('PUT') @include('admin.posts.form')<button class="btn btn-primary">Update</button></form>
@endsection
