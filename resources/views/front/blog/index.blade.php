@extends('front.layout.master')

@section('content')
<section class="breadcrumb-area"><div class="container large"><div class="section-spacing"><h1 class="section-title">Blog</h1></div></div></section>
<section class="blog-area-page"><div class="container large"><div class="section-spacing"><div class="row g-4">
  @forelse($posts as $post)
    <div class="col-lg-4 col-md-6"><article class="blog-item">
      @if($post->featured_image)<img src="{{ asset('storage/'.$post->featured_image) }}" alt="{{ $post->title }}">@endif
      <h3><a href="{{ route('front.blog.show',$post) }}">{{ $post->title }}</a></h3>
    </article></div>
  @empty <p>No posts yet.</p> @endforelse
</div>{{ $posts->links() }}</div></div></section>
@endsection
