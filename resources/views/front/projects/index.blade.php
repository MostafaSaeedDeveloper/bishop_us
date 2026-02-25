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
        <div class="pagination project-list-pagination fade-anim mt-4">
            @if($projects->onFirstPage())
              <span class="is-disabled">Prev</span>
            @else
              <a href="{{ $projects->previousPageUrl() }}">Prev</a>
            @endif

            <span class="pagination-info">Page {{ $projects->currentPage() }} of {{ $projects->lastPage() }}</span>

            @if($projects->hasMorePages())
              <a href="{{ $projects->nextPageUrl() }}">Next</a>
            @else
              <span class="is-disabled">Next</span>
            @endif
        </div>
      @endif
    </div>
  </div>
</section>
@endsection


<style>
  .project-list-pagination {
    justify-content: center;
    align-items: center;
    gap: 18px;
    flex-wrap: wrap;
    margin-top: 42px;
  }

  .project-list-pagination a,
  .project-list-pagination span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 58px;
    height: 58px;
    padding: 0 24px;
    border-radius: 999px;
    border: 1px solid rgba(255, 204, 0, 0.45);
    background: rgba(255, 204, 0, 0.08);
    color: #ffcc00;
    font-size: 20px;
    font-weight: 600;
    line-height: 1;
    transition: all 0.25s ease;
  }

  .project-list-pagination a:hover {
    background: #ffcc00;
    color: #111;
    border-color: #ffcc00;
  }

  .project-list-pagination .pagination-info {
    color: #fff;
    border-color: rgba(255, 255, 255, 0.22);
    background: rgba(255, 255, 255, 0.06);
    min-width: auto;
    padding: 0 26px;
  }

  .project-list-pagination .is-disabled {
    color: #aaa;
    border-color: rgba(255, 255, 255, 0.16);
    background: rgba(255, 255, 255, 0.03);
  }

  @media (max-width: 767px) {
    .project-list-pagination {
      gap: 10px;
    }

    .project-list-pagination a,
    .project-list-pagination span {
      min-width: 46px;
      height: 46px;
      padding: 0 16px;
      font-size: 16px;
    }
  }
</style>
