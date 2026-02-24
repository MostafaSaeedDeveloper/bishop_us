@extends('admin.master')

@section('content')
<div class="content">
  <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
    <div>
      <h1 class="h3 mb-1">Dashboard</h1>
      <p class="fw-medium mb-0 text-muted">Overview of projects, services and users.</p>
    </div>
    <div class="mt-4 mt-md-0">
      <a class="btn btn-sm btn-primary" href="{{ route('admin.projects.create') }}">
        <i class="fa fa-plus me-1"></i> Add Project
      </a>
    </div>
  </div>
</div>

<div class="content">
  <div class="row items-push">
    <div class="col-sm-6 col-xl-4">
      <div class="block block-rounded d-flex flex-column h-100 mb-0">
        <div class="block-content block-content-full text-center">
          <div class="fs-1 fw-bold">{{ $projectsCount }}</div>
          <div class="text-muted">Projects</div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-4">
      <div class="block block-rounded d-flex flex-column h-100 mb-0">
        <div class="block-content block-content-full text-center">
          <div class="fs-1 fw-bold">{{ $servicesCount }}</div>
          <div class="text-muted">Services</div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-4">
      <div class="block block-rounded d-flex flex-column h-100 mb-0">
        <div class="block-content block-content-full text-center">
          <div class="fs-1 fw-bold">{{ $usersCount }}</div>
          <div class="text-muted">Users</div>
        </div>
      </div>
    </div>
  </div>

  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Latest Projects</h3>
    </div>
    <div class="block-content">
      <div class="table-responsive">
        <table class="table table-striped table-vcenter">
          <thead>
            <tr>
              <th>Name</th>
              <th>Client</th>
              <th>Category</th>
              <th>Status</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            @forelse($latestProjects as $project)
              <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->client_name }}</td>
                <td>{{ $project->category ?? '-' }}</td>
                <td><span class="badge bg-primary">{{ ucfirst($project->status) }}</span></td>
                <td>{{ $project->created_at->format('Y-m-d') }}</td>
              </tr>
            @empty
              <tr><td colspan="5" class="text-center">No projects found.</td></tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
