@extends('front.layout.master')

@section('content')
  <!-- hero area start  -->
  <section class="hero-area-service-details">
    <div class="container large">
      <div class="hero-area-service-details-inner section-spacing-top">
        <div class="service-meta fade-anim">
          <span class="serial">[SL: {{ $service['serial'] }}]</span>
          <span class="tag">[{{ $service['tag'] }}]</span>
          <span class="next-item"><a href="{{ route('front.services.show', $nextService['slug']) }}">[Next: {{ $nextService['title'] }}]</a></span>
        </div>
        <div class="section-header fade-anim">
          <div class="section-title-wrapper">
            <div class="title-wrapper">
              <h2 class="section-title font-sequelsans-romanbody">{{ $service['title'] }}</h2>
            </div>
          </div>
        </div>
        <div class="section-content-wrapper fade-anim">
          <div class="section-content">
            <div class="text-wrapper">
              <p class="text">{{ $service['summary'] }}</p>
            </div>
            <div class="feature-list">
              <ul>
                @foreach ($service['features'] as $feature)
                  <li>{{ $feature }}</li>
                @endforeach
              </ul>
            </div>
          </div>
          <div class="section-thumb parallax-view">
            <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" data-speed="0.8">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- hero area end  -->

  <!-- approach area start  -->
  <section class="approach-area-service-details-page">
    <div class="container large">
      <div class="approach-area-service-details-page-inner section-spacing">
        <div class="section-header">
          <div class="section-title-wrapper">
            <div class="subtitle-wrapper fade-anim" data-direction="left">
              <span class="section-subtitle">{!! $service['process_subtitle'] !!}</span>
            </div>
            <div class="title-wrapper fade-anim" data-direction="right">
              <h2 class="section-title font-sequelsans-romanbody">{{ $service['process_title'] }}</h2>
            </div>
          </div>
        </div>
        <div class="approach-wrapper-box">
          <span class="steps fade-anim">{{ sprintf('%02d', count($service['process_steps'])) }}</span>
          <div class="approach-wrapper fade-anim" data-direction="right">
            @foreach ($service['process_steps'] as $index => $step)
              <div class="approach-box">
                <span class="number">{{ sprintf('%02d', $index + 1) }}</span>
                <h3 class="title">{{ $step['title'] }}</h3>
                <p class="text">{{ $step['text'] }}</p>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- approach area end  -->

  <!-- feature area start  -->
  <section class="feature-area">
    <div class="container large">
      <div class="feature-area-inner section-spacing-top">
        <div class="features-wrapper-box fade-anim">
          <div class="features-wrapper">
            @foreach ($service['benefits'] as $benefit)
              <div class="feature-box">
                <div class="thumb">
                  <img src="{{ asset('assets/imgs/shape/shape-15.webp') }}" alt="shape">
                </div>
                <div class="content">
                  <h3 class="title">{{ $benefit['title'] }}</h3>
                  <p class="text">{{ $benefit['text'] }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- feature area end  -->

  <!-- value area start -->
  <section class="value-area">
    <div class="container large">
      <div class="value-area-inner section-spacing-top">
        <div class="section-header fade-anim">
          <div class="section-title-wrapper">
            <div class="title-wrapper">
              <h2 class="section-title font-sequelsans-romanbody">{{ $service['value_title'] }}</h2>
            </div>
          </div>
        </div>
        <div class="value-box-wrapper fade-anim">
          @foreach ($service['value_cards'] as $card)
            <div class="value-box">
              <h3 class="number">{{ $card['number'] }}</h3>
              <p class="text">{{ $card['text'] }}</p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- value area end -->

  <!-- faq area start  -->
  <section class="faq-area">
    <div class="container large">
      <div class="faq-area-inner section-spacing-top">
        <div class="section-header fade-anim">
          <div class="section-title-wrapper">
            <div class="subtitle-wrapper">
              <span class="section-subtitle">FAQ</span>
            </div>
            <div class="title-wrapper">
              <h2 class="section-title font-sequelsans-romanbody">Common questions about {{ $service['title'] }}</h2>
            </div>
          </div>
        </div>
        <div class="accordion-wrapper fade-anim">
          <div class="accordion" id="accordionExample">
            @foreach ($service['faqs'] as $index => $faq)
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse"
                    data-bs-target="#faqCollapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="faqCollapse{{ $index }}">
                    {{ $faq['question'] }}
                  </button>
                </h2>
                <div id="faqCollapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    {{ $faq['answer'] }}
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- faq area end  -->
@endsection
