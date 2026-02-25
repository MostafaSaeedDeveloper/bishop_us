@extends('admin.master')

@section('content')
<!-- Hero -->
<div class="bg-body-light">
  <div class="content content-full">
    <div class="d-flex justify-content-between align-items-center">
      <div>
        <h1 class="fs-3 fw-semibold mb-1">Projects Dashboard</h1>
        <p class="text-muted mb-0">Manage your projects with the current dashboard theme.</p>
      </div>
      <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">
        <i class="fa fa-plus me-1"></i> New Project
      </a>
    </div>
  </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
  @if(session('status'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
      <i class="fa fa-check-circle me-2"></i>
      <p class="mb-0">{{ session('status') }}</p>
    </div>
  @endif

  <div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">All Projects</h3>
      <div class="block-options">
        <span class="badge bg-primary">{{ $projects->total() }}</span>
      </div>
    </div>

    <div class="block-content block-content-full">
      <div class="table-responsive">
        <table class="table table-borderless table-striped table-vcenter fs-sm">
          <thead>
            <tr>
              <th>Name</th>
              <th>Client</th>
              <th>Category</th>
              <th>Status</th>
              <th>Execution Date</th>
              <th class="text-end">Actions</th>
            </tr>
          </thead>
          <tbody>
            @forelse($projects as $project)
              <tr>
                <td class="fw-semibold">{{ $project->name }}</td>
                <td>{{ $project->client_name }}</td>
                <td>{{ $project->category ?: '-' }}</td>
                <td>
                  @php
                    $statusClass = match($project->status) {
                        'published' => 'bg-success',
                        'archived' => 'bg-danger',
                        default => 'bg-warning'
                    };
                  @endphp
                  <span class="badge rounded-pill {{ $statusClass }}">{{ ucfirst($project->status) }}</span>
                </td>
                <td>{{ optional($project->execution_date)->format('Y-m-d') ?: '-' }}</td>
                <td class="text-end">
                  <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-alt-secondary" title="Edit">
                    <i class="fa fa-pencil-alt"></i>
                  </a>
                  <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this project?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-alt-danger" title="Delete">
                      <i class="fa fa-trash"></i>
                    </button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="6" class="text-center text-muted py-4">No projects found.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      <div class="mt-3 admin-projects-pagination">
        {{ $projects->links('pagination::bootstrap-5') }}
      </div>
    </div>
  </div>
</div>
<!-- END Page Content -->
@endsection


<style>
  .admin-projects-pagination nav {
    display: flex;
    justify-content: center;
  }

  .admin-projects-pagination .pagination {
    gap: 10px;
    align-items: center;
    flex-wrap: wrap;
    margin-bottom: 0;
  }

  .admin-projects-pagination .page-link {
    min-width: 48px;
    height: 48px;
    border-radius: 999px !important;
    border: 1px solid rgba(255, 204, 0, 0.35);
    background-color: rgba(255, 204, 0, 0.08);
    color: #b88b00;
    font-weight: 700;
    font-size: 16px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 0 16px;
  }

  .admin-projects-pagination .page-item.active .page-link {
    background-color: #ffcc00;
    border-color: #ffcc00;
    color: #111;
  }

  .admin-projects-pagination .page-item.disabled .page-link {
    background-color: rgba(0, 0, 0, 0.04);
    border-color: rgba(0, 0, 0, 0.08);
    color: #999;
  }

  .admin-projects-pagination .page-link:hover {
    background-color: #ffcc00;
    border-color: #ffcc00;
    color: #111;
  }
</style>
