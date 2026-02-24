@extends('front.layout.master')

@section('content')
<section class="breadcrumb-area"><div class="container large"><div class="section-spacing"><h1 class="section-title">{{ $project->title }}</h1></div></div></section>
<section class="project-details-area"><div class="container large"><div class="section-spacing">
  @if($project->featured_image)<img src="{{ asset('storage/'.$project->featured_image) }}" alt="{{ $project->title }}" class="mb-4">@endif
  <p><strong>Service:</strong> {{ $project->service }}</p>
  <p><strong>Client:</strong> {{ $project->client }}</p>
  <p><strong>Technology:</strong> {{ $project->technology }}</p>
  <div>{!! $project->description !!}</div>
</div></div></section>
@endsection
