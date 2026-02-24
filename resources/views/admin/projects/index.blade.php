@extends('admin.master')

@section('content')
<div class="content">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Projects</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary"><i class="fa fa-plus me-1"></i>Add Project</a>
  </div>

  @if(session('status'))
    <div class="alert alert-success">{{ session('status') }}</div>
  @endif

  <div class="block block-rounded">
    <div class="block-content block-content-full">
      <table class="table table-bordered table-striped js-dataTable-full">
        <thead>
          <tr>
            <th>Name</th>
            <th>Client</th>
            <th>Status</th>
            <th>Created</th>
            <th style="width: 180px;">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($projects as $project)
            <tr>
              <td>{{ $project->name }}</td>
              <td>{{ $project->client_name }}</td>
              <td>{{ ucfirst($project->status) }}</td>
              <td>{{ $project->created_at->format('Y-m-d') }}</td>
              <td>
                <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-alt-primary">Edit</a>
                <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-alt-danger" onclick="return confirm('Delete this project?')">Delete</button>
                </form>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
