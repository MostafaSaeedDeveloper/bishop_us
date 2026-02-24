@extends('admin.master')
@section('content')
<div class="block block-rounded"><div class="block-header"><h3 class="block-title">Projects</h3><a class="btn btn-primary" href="{{ route('admin.projects.create') }}">Add</a></div>
<div class="block-content"><table class="table"><tr><th>Title</th><th>Service</th><th></th></tr>
@foreach($projects as $project)<tr><td>{{ $project->title }}</td><td>{{ $project->service }}</td><td class="text-end"><a href="{{ route('admin.projects.edit',$project) }}" class="btn btn-sm btn-alt-primary">Edit</a>
<form method="POST" action="{{ route('admin.projects.destroy',$project) }}" class="d-inline">@csrf @method('DELETE')<button class="btn btn-sm btn-alt-danger">Delete</button></form></td></tr>@endforeach
</table>{{ $projects->links() }}</div></div>
@endsection
