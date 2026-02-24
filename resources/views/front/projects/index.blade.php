@extends('front.layout.master')

@section('content')
<section class="page-title-area">
  <div class="container large">
    <div class="page-title-area-inner section-spacing-top">
      <div class="page-title-wrapper">
        <h2 class="page-title fade-anim">Projects</h2>
      </div>
    </div>
  </div>
</section>

<section class="blog-area-page">
  <div class="container large">
    <div class="blog-area-page-inner section-spacing-top">
      <div class="blogs-wrapper-box">
        <div class="blogs-wrapper">
          @forelse($projects as $project)
            <article class="blog-box fade-anim">
              <div class="thumb">
                <a href="{{ route('front.projects.show', $project) }}">
                  <img src="{{ $project->featured_image ? asset('storage/'.$project->featured_image) : asset('assets/imgs/project/project-1.webp') }}" alt="{{ $project->title }}">
                </a>
              </div>
              <div class="content">
                <h3 class="title"><a href="{{ route('front.projects.show', $project) }}">{{ $project->title }}</a></h3>
                <ul class="meta">
                  <li>{{ $project->service ?: 'General Service' }}</li>
                  @if($project->client)<li>{{ $project->client }}</li>@endif
                </ul>
              </div>
            </article>
          @empty
            <p>No projects added yet.</p>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
