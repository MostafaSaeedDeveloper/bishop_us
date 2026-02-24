@extends('front.layout.master')

@section('content')
<section class="work-details-area">
  <div class="container large">
    <div class="section-spacing-top">
      <h1 class="section-title">{{ $project->name }}</h1>
      <p class="text">{{ $project->short_description }}</p>
      <ul>
        <li><strong>Client:</strong> {{ $project->client_name }}</li>
        <li><strong>Category:</strong> {{ $project->category ?? 'General' }}</li>
        <li><strong>Execution Date:</strong> {{ optional($project->execution_date)->format('Y-m-d') ?? '-' }}</li>
      </ul>
    </div>

    <div class="gallery-wrapper fade-anim">
      <div class="image">
        <img src="{{ $project->featuredImageUrl() ?: asset('assets/imgs/project/image-19.webp') }}" alt="{{ $project->name }}">
      </div>

      @foreach($project->getMedia('gallery_images') as $image)
        <div class="image">
          <img src="{{ $image->getUrl() }}" alt="{{ $project->name }} gallery image">
        </div>
      @endforeach
    </div>

    <div class="section-details fade-anim">
      <div class="details-info">
        <h3 class="title">Project Description</h3>
        <p class="text">{{ $project->description }}</p>
      </div>
    </div>

    <div class="section-spacing-top">
      <h3>Similar Projects</h3>
      <div class="works-wrapper-8">
        @forelse($similarProjects as $related)
          <div class="work-box">
            <div class="thumb">
              <div class="image scale" data-cursor-text="View Project">
                <a href="{{ route('front.projects.show', $related) }}">
                  <img src="{{ $related->featuredImageUrl() ?: asset('assets/imgs/project/image-20.webp') }}" alt="{{ $related->name }}">
                </a>
              </div>
            </div>
            <div class="content">
              <h3 class="title"><a href="{{ route('front.projects.show', $related) }}">{{ $related->name }}</a></h3>
            </div>
          </div>
        @empty
          <p>No similar projects found.</p>
        @endforelse
      </div>
    </div>
  </div>
</section>
@endsection
