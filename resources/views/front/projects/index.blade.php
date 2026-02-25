@extends('front.layout.master')

@section('content')
<section class="page-title-area">
  <div class="container large">
    <div class="page-title-area-inner section-spacing-top">
      <div class="page-title-wrapper"><h2 class="page-title fade-anim">Portfolio</h2></div>
    </div>
  </div>
</section>

<section class="work-area-work-page">
  <div class="work-area-work-page-inner">
    <div class="container large">
      <div class="works-wrapper-8">
        @forelse($projects as $project)
          <div class="work-box">
            <div class="thumb">
              <div class="image scale" data-cursor-text="View Project">
                <a href="{{ route('front.projects.show', $project) }}">
                  <img src="{{ $project->primaryImageUrl() ?: asset('assets/imgs/project/image-19.webp') }}" alt="{{ $project->name }}">
                </a>
              </div>
            </div>
            <div class="content">
              <h3 class="title"><a href="{{ route('front.projects.show', $project) }}">{{ $project->name }}</a></h3>
              <div class="meta">
                <span class="date">{{ optional($project->execution_date)->format('Y') ?? $project->created_at->format('Y') }}</span>
                <span class="tag">{{ $project->category ?? 'General' }}</span>
              </div>
            </div>
          </div>
        @empty
          <p>No projects available.</p>
        @endforelse
      </div>
      @if($projects->hasPages())
        <div class="pagination fade-anim mt-4">
            @if($projects->onFirstPage())
              <span>Prev</span>
            @else
              <a href="{{ $projects->previousPageUrl() }}">Prev</a>
            @endif

            <span>Page {{ $projects->currentPage() }} of {{ $projects->lastPage() }}</span>

            @if($projects->hasMorePages())
              <a href="{{ $projects->nextPageUrl() }}">Next</a>
            @else
              <span>Next</span>
            @endif
        </div>
      @endif
    </div>
  </div>
</section>
@endsection
