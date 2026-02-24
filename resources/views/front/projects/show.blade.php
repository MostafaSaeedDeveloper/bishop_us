@extends('front.layout.master')

@section('content')
<section class="page-title-area">
  <div class="container large">
    <div class="page-title-area-inner section-spacing-top">
      <div class="page-title-wrapper">
        <h2 class="page-title fade-anim">{{ $project->title }}</h2>
      </div>
    </div>
  </div>
</section>

<section class="work-details-area">
  <div class="work-details-area-inner section-spacing-bottom">
    <div class="thumb-main fade-anim">
      <img src="{{ $project->featured_image ? asset('storage/'.$project->featured_image) : asset('assets/imgs/project/project-1.webp') }}" alt="{{ $project->title }}">
    </div>

    <div class="container large">
      <div class="project-overview fade-anim">
        <h3 class="title">Overview</h3>
        <p class="text">{!! $project->description ?: 'Project details will be available soon.' !!}</p>
      </div>

      <div class="section-details fade-anim">
        <div class="details-info"><h3 class="title">Service</h3><p class="text">{{ $project->service ?: '-' }}</p></div>
        <div class="details-info"><h3 class="title">Client</h3><p class="text">{{ $project->client ?: '-' }}</p></div>
        <div class="details-info"><h3 class="title">Technology</h3><p class="text">{{ $project->technology ?: '-' }}</p></div>
      </div>

      @if(!empty($project->gallery))
      <div class="gallery-wrapper-2 fade-anim">
        @foreach($project->gallery as $image)
          <div class="image parallax-view mb-4">
            <img src="{{ asset('storage/'.$image) }}" alt="{{ $project->title }}" data-speed="0.8">
          </div>
        @endforeach
      </div>
      @endif
    </div>
  </div>
</section>
@endsection
