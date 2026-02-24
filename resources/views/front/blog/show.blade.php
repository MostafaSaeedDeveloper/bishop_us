@extends('front.layout.master')

@section('content')
<section class="breadcrumb-area"><div class="container large"><div class="section-spacing"><h1 class="section-title">{{ $post->title }}</h1></div></div></section>
<section class="blog-details-area"><div class="container large"><div class="section-spacing">
  @if($post->featured_image)<img src="{{ asset('storage/'.$post->featured_image) }}" alt="{{ $post->title }}" class="mb-4">@endif
  <div>{!! $post->content !!}</div>
</div></div></section>
@endsection
