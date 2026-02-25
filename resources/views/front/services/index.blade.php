@extends('front.layout.master')


@section('content')
       <!-- page title area start  -->
        <section class="page-title-area">
          <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
              <div class="page-title-wrapper">
                <h2 class="page-title fade-anim">Expertise</h2>
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
                    <span class="section-subtitle">Capabilities</span>
                  </div>
                  <div class="title-wrapper">
                    <h2 class="section-title font-sequelsans-romanbody">We think out of the
                      box when it comes
                      to creative</h2>
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
                      <p class="text text-invert">A practical guide explaining how and why Redox should be part of
                        every
                        project to
                        ensure its high quality and seamless user experience.</p>
                      <p class="text text-invert">If you already understand ask to continue
                        scrolling; otherwise, click the link below to explore more.</p>
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
                    <h2 class="section-title font-sequelsans-romanbody"><span>Client:</span> Helping brands to grow
                      and say their success stories to
                      the world.</h2>
                  </div>
                </div>
                <div class="text-wrapper">
                  <p class="text">We’re a great team of creatives with a strongest capabilities to helping progressive
                    fields achieve their goals. With the best talent on every project done successfully</p>
                </div>
              </div>
              <div class="client-capsule-wrapper-box fade-anim" data-t-throwable-scene="true">
                <div class="client-capsule-wrapper">
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="assets/imgs/client/client-9.webp" alt="image">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="assets/imgs/client/client-10.webp" alt="image">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="assets/imgs/client/client-11.webp" alt="image">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="assets/imgs/client/client-12.webp" alt="image">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="assets/imgs/client/client-13.webp" alt="image">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="assets/imgs/client/client-14.webp" alt="image">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="assets/imgs/client/client-15.webp" alt="image">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="assets/imgs/client/client-16.webp" alt="image">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="assets/imgs/client/client-17.webp" alt="image">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="assets/imgs/client/client-18.webp" alt="image">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="assets/imgs/client/client-19.webp" alt="image">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="assets/imgs/client/client-20.webp" alt="image">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="assets/imgs/client/client-21.webp" alt="image">
                    </span>
                  </p>
                  <p data-t-throwable-el="">
                    <span class="client-box">
                      <img src="assets/imgs/client/client-22.webp" alt="image">
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
