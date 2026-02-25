@extends('front.layout.master')


@section('content')
       <!-- page title area start  -->
        <section class="page-title-area">
          <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
              <div class="page-title-wrapper">
                <h2 class="page-title fade-anim">Our Services</h2>
              </div>
            </div>
          </div>
        </section>
        <!-- page title area end  -->

        <!-- service area start  -->
        <section class="service-area-service-page">
          <div class="container large">
            <div class="service-area-service-page-inner">
              <div class="section-header fade-anim">
                <div class="section-title-wrapper">
                  <div class="subtitle-wrapper">
                    <span class="section-subtitle">What We're Offering</span>
                  </div>
                  <div class="title-wrapper">
                    <h2 class="section-title font-sequelsans-romanbody">Bishop Integrated Solutions is specialized in website development, ecommerce, digital marketing, and SEO services.</h2>
                  </div>
                </div>
              </div>
              <div class="services-wrapper-box fade-anim">
                <div class="services-wrapper-1">
                  @foreach ($services as $index => $service)
                    <div class="service-box fade-anim">
                      <div class="count">
                        <span class="number">({{ sprintf('%02d', $index + 1) }})</span>
                      </div>

                      <div class="content">
                        <h3 class="title"><a href="{{ route('front.services.show', $service['slug']) }}">{{ $service['title'] }}</a></h3>
                        <ul class="service-list">
                          @foreach ($service['features'] as $feature)
                            <li><a href="{{ route('front.services.show', $service['slug']) }}">{{ $feature }}</a></li>
                          @endforeach
                        </ul>
                      </div>
                      <div class="thumb">
                        <img class="grow" src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}">
                      </div>
                    </div>
                  @endforeach
                </div>
              </div>
              <div class="service-content-wrapper section-spacing-top">
                <div class="service-content">
                  <div class="section-info-wrapper fade-anim" data-direction="left">
                    <div class="thumb parallax-view">
                      <img src="assets/imgs/gallery/image-10.webp" alt="image" data-speed="0.9">
                    </div>
                    <div class="text-wrapper">
                      <p class="text text-invert">We build practical digital solutions that match your business goals, strengthen your online presence, and deliver measurable growth.</p>
                      <p class="text text-invert">From planning to launch and optimization, our team focuses on quality, performance, and long-term value for every project.</p>
                    </div>
                  </div>
                  <div class="section-thumb-wrapper fade-anim" data-delay="0.45" data-direction="right">
                    <div class="thumb parallax-view">
                      <img src="assets/imgs/gallery/image-11.webp" alt="image" data-speed="0.8">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- service area end  -->

        <!-- client area start  -->
        <section class="client-area-service-page">
          <div class="container large">
            <div class="client-area-inner section-spacing-top">
              <div class="section-content fade-anim">
                <div class="section-title-wrapper">
                  <div class="title-wrapper">
                    <h2 class="section-title font-sequelsans-romanbody"><span>Our Clients:</span> Helping brands grow and share their success stories with confidence.</h2>
                  </div>
                </div>
                <div class="text-wrapper">
                  <p class="text">We provide customized solutions for each client, backed by experienced professionals and a quality-first mindset that delivers successful outcomes.</p>
                </div>
              </div>
              <div class="client-capsule-wrapper-box fade-anim" data-t-throwable-scene="true">
                <div class="client-capsule-wrapper">
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="{{ asset('assets/clients/client_1-1-1.png') }}" alt="Client logo">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box bg-theme">
                      <img src="{{ asset('assets/clients/client_3-1.png') }}" alt="Client logo">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box bg-theme">
                      <img src="{{ asset('assets/clients/client_10-1.png') }}" alt="Client logo">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="{{ asset('assets/clients/client_12-1.png') }}" alt="Client logo">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box bg-theme">
                      <img src="{{ asset('assets/clients/client_14-1.png') }}" alt="Client logo">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="{{ asset('assets/clients/client_15-1.png') }}" alt="Client logo">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="{{ asset('assets/clients/client_17-1.png') }}" alt="Client logo">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="{{ asset('assets/clients/client_18-1.png') }}" alt="Client logo">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box bg-theme">
                      <img src="{{ asset('assets/clients/client_19-1.png') }}" alt="Client logo">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="{{ asset('assets/clients/client_25-1.png') }}" alt="Client logo">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box bg-theme">
                      <img src="{{ asset('assets/clients/client_27-1-1.png') }}" alt="Client logo">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="{{ asset('assets/clients/client_28-1.png') }}" alt="Client logo">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="{{ asset('assets/clients/Prime-1-1.png') }}" alt="Client logo">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box bg-theme">
                      <img src="{{ asset('assets/clients/United-1-1.png') }}" alt="Client logo">
                    </span>
                  </p>
                </div>
              </div>
              <div class="lines-wrapper">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
              </div>
            </div>
          </div>
        </section>
        <!-- client area end  -->


@endsection
