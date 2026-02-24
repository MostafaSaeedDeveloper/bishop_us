@extends('front.layout.master')

@section('content')
<section class="breadcrumb-area"><div class="container large"><div class="section-spacing"><h1 class="section-title">Projects</h1></div></div></section>
<section class="work-area-page">
  <div class="container large"><div class="section-spacing"><div class="row g-4">
    @forelse($projects as $project)
      <div class="col-lg-4 col-md-6"><div class="blog-item">
        @if($project->featured_image)<img src="{{ asset('storage/'.$project->featured_image) }}" alt="{{ $project->title }}">@endif
        <h3><a href="{{ route('front.projects.show',$project) }}">{{ $project->title }}</a></h3>
        <p>{{ $project->service }}</p>
      </div></div>
    @empty <p>No projects yet.</p> @endforelse
  </div></div></div>
</section>
@endsection
