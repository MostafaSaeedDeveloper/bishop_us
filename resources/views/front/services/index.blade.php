@extends('front.layout.master')

@section('content')
<section class="page-title-area">
  <div class="container large">
    <div class="page-title-area-inner section-spacing-top">
      <div class="page-title-wrapper">
        <h2 class="page-title fade-anim">Services</h2>
      </div>
    </div>
  </div>
</section>

<section class="service-area-service-page">
  <div class="container large">
    <div class="service-area-service-page-inner">
      <div class="section-header fade-anim">
        <div class="section-title-wrapper">
          <div class="subtitle-wrapper"><span class="section-subtitle">Capabilities</span></div>
          <div class="title-wrapper"><h2 class="section-title font-sequelsans-romanbody">Services from your real projects</h2></div>
        </div>
      </div>

      <div class="services-wrapper-box fade-anim">
        <div class="services-wrapper-1">
          @forelse($services as $index => $service)
            <div class="service-box fade-anim">
              <div class="count"><span class="number">({{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }})</span></div>
              <div class="content">
                <h3 class="title">
                  <a href="{{ route('front.services.show', \Illuminate\Support\Str::slug($service['name'])) }}">{{ $service['name'] }}</a>
                </h3>
                <ul class="service-list">
                  @forelse($service['technologies'] as $tech)
                    <li><a href="{{ route('front.services.show', \Illuminate\Support\Str::slug($service['name'])) }}">{{ $tech }}</a></li>
                  @empty
                    <li><a href="{{ route('front.services.show', \Illuminate\Support\Str::slug($service['name'])) }}">{{ $service['projects_count'] }} Projects</a></li>
                  @endforelse
                </ul>
              </div>
              <div class="thumb"><img class="grow" src="{{ asset('assets/imgs/gallery/image-3.webp') }}" alt="{{ $service['name'] }}"></div>
            </div>
          @empty
            <p>No services found. Please add projects with service names.</p>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
