@extends('front.layout.master')

@section('content')
<section class="page-title-area">
  <div class="container large">
    <div class="page-title-area-inner section-spacing-top">
      <div class="page-title-wrapper">
        <h2 class="page-title fade-anim">{{ $serviceName }}</h2>
      </div>
    </div>
  </div>
</section>

<section class="work-details-area">
  <div class="work-details-area-inner section-spacing-bottom">
    <div class="container large">
      <div class="section-details fade-anim">
        <div class="details-info">
          <h3 class="title">Projects Under This Service</h3>
          <p class="text">{{ $projects->count() }} project(s)</p>
        </div>
        <div class="details-info">
          <h3 class="title">Technologies</h3>
          <p class="text">{{ $technologies->implode(' • ') ?: 'Not specified yet' }}</p>
        </div>
      </div>

      <div class="blogs-wrapper">
        @foreach($projects as $project)
          <article class="blog-box fade-anim mb-4">
            <div class="thumb">
              <a href="{{ route('front.projects.show', $project) }}">
                <img src="{{ $project->featured_image ? asset('storage/'.$project->featured_image) : asset('assets/imgs/project/project-1.webp') }}" alt="{{ $project->title }}">
              </a>
            </div>
            <div class="content">
              <h3 class="title"><a href="{{ route('front.projects.show', $project) }}">{{ $project->title }}</a></h3>
              <p class="text">{{ $project->client ?: 'Client not specified' }}</p>
            </div>
          </article>
        @endforeach
      </div>
    </div>
  </div>
</section>
@endsection
