@extends('admin.master')

@section('content')
<div class="content">
  <div class="d-md-flex justify-content-md-between align-items-md-center py-3 pt-md-3 pb-md-0 text-center text-md-start">
    <div>
      <h1 class="h3 mb-1">Contact Submissions</h1>
      <p class="fw-medium mb-0 text-muted">All data sent through the contact form.</p>
    </div>
  </div>
</div>

<div class="content">
  <div class="block block-rounded">
    <div class="block-content">
      <div class="table-responsive">
        <table class="table table-striped table-vcenter">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Company</th>
              <th>Budget</th>
              <th>Solution</th>
              <th>Message</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            @forelse($submissions as $submission)
              <tr>
                <td>{{ $submission->name }}</td>
                <td>{{ $submission->email }}</td>
                <td>{{ $submission->phone }}</td>
                <td>{{ $submission->company ?: '-' }}</td>
                <td>{{ $submission->budget }}</td>
                <td>{{ $submission->solution }}</td>
                <td style="min-width: 260px; white-space: normal;">{{ $submission->message }}</td>
                <td>{{ $submission->created_at->format('Y-m-d H:i') }}</td>
              </tr>
            @empty
              <tr>
                <td colspan="8" class="text-center">No contact submissions found yet.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

      <div class="mt-3">
        {{ $submissions->links() }}
      </div>
    </div>
  </div>
</div>
@endsection
