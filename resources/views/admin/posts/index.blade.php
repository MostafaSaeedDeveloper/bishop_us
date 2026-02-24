@extends('admin.master')
@section('content')
<div class="block block-rounded"><div class="block-header"><h3 class="block-title">Posts</h3><a class="btn btn-primary" href="{{ route('admin.posts.create') }}">Add</a></div>
<div class="block-content"><table class="table"><tr><th>Title</th><th>Slug</th><th></th></tr>
@foreach($posts as $post)<tr><td>{{ $post->title }}</td><td>{{ $post->slug }}</td><td class="text-end"><a href="{{ route('admin.posts.edit',$post) }}" class="btn btn-sm btn-alt-primary">Edit</a>
<form method="POST" action="{{ route('admin.posts.destroy',$post) }}" class="d-inline">@csrf @method('DELETE')<button class="btn btn-sm btn-alt-danger">Delete</button></form></td></tr>@endforeach
</table>{{ $posts->links() }}</div></div>
@endsection
