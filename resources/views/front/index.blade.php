@extends('front.layout.master')


@section('content')

        <!-- hero area start  -->
        <section class="hero-area">
          <div class="container large">
            <div class="hero-area-inner section-spacing-top">
              <div class="hero-content section-spacing-bottom">
                <div class="award-wrapper fade-anim" data-delay="0.90" data-direction="left" data-ease="back.out(4)">
                  <div class="circle-text-wrapper">
                    <div class="circle-text">
                      <img src="assets/imgs/shape/shape-3.webp" alt="image" class="text">
                      <img src="assets/imgs/shape/shape-2.webp" alt="image" class="icon">
                    </div>
                  </div>
                </div>
                <div class="section-header">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title font-instrumentsans-medium char-anim" data-delay="0.45">Make Your Next Move
                        <span><img class="title-shape-1 fade-anim" src="assets/imgs/shape/shape-1.webp" alt="image"
                            data-direction="right" data-delay="1.80"></span><span style="color:#FFCC00">CheckMate..</span></h2>
                    </div>
                  </div>
                </div>
                <div class="section-content">
                  <div class="features-wrapper-box fade-anim" data-delay="0.75">
                  <div class="text-wrapper fade-anim" data-delay="0.75">
                    <p class="text">Bishop Integrated Solutions Company is one of the leading companies in web design and development across the Kingdom of Saudi Arabia (Riyadh – Jeddah – Dammam – Khobar – Qassim – Hail), besides our existing business in Egypt and the Arabian Gulf region.</p>
                  </div>
                  </div>

                  <div class="text-wrapper fade-anim" data-delay="0.75">
                    <p class="text">We offer web development, Odoo systems, SEO, and digital marketing solutions tailored to your business goals.</p>
                  </div>
                </div>
              </div>
              <div class="big-text-wrapper">
                <h2 class="big-text">Bishop
                </h2>
              </div>

            </div>
          </div>
        </section>
        <!-- hero area end  -->

        <!-- about area start  -->
        <section class="about-area ">
          <div class="container large">
            <div class="about-area-inner section-spacing">
              <div class="section-content">
                <div class="shape-1"></div>
                <div class="shape-2"></div>
                <div class="shape-3"></div>
                <div class="shape-4"></div>
                <div class="section-title-wrapper">
                  <div class="title-wrapper">
                    <h2 class="section-title font-instrumentsans-medium">WE’RE READY TO GROW YOUR BUSINESS WITH US</h2>
                  </div>
                </div>
                <div class="text-wrapper">
                  <p class="text">Our team has more than 10 years of experience in the field of designing, programming and hosting websites as well as the field of e-marketing. The company is characterized by a technical support team at a high level of competence, experience and commitment to serve customers. We are available 24 hours / 7 days a week.</p>
                </div>
                <div class="btn-wrapper ">
                  <a href="{{ route('front.about') }}" class="rr-btn  btn-text-fli hover-bg-theme">
                    <span class="btn-wrap">
                      <span class="text-one">About Us</span>
                      <span class="text-two">About Us</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- about area end  -->

        <!-- video-box start -->
        <div class="video-box">
          <video class="video-area" loop="" muted="" autoplay="" playsinline="">
            <source src="{{asset('assets/video.mp4')}}" type="video/mp4">
          </video>
        </div>
        <!-- video-box end -->

        <!-- work area start  -->
        <section class="work-area">

          <!-- text slider area start  -->
          <div class="text-slider-box fade-anim">
            <div class="text-slider">
              <div class="swiper text-slider-active">
                <div class="swiper-wrapper">
                  @for ($i = 0; $i < 7; $i++)
                    <div class="swiper-slide">
                      <div class="text-slider-item">
                        <h2 class="title"><span class="dot"></span>Featured work
                        </h2>
                      </div>
                    </div>
                  @endfor
                </div>
              </div>
            </div>
          </div>
          <!-- /text slider area end -->

          <div class="container large">
            <div class="work-area-inner">
              <div class="section-header fade-anim">
                <div class="section-title-wrapper">
                  <div class="title-wrapper">
                    <h2 class="section-title font-instrumentsans-medium">Featured Work</h2>
                  </div>
                </div>
                <div class="text-wrapper">
                  <p class="text">Excellency in creative designs</p>
                </div>
                <div class="total-count">
                  <span class="number">({{ $featuredProjects->count() }})</span>
                </div>
              </div>
              <div class="works-wrapper-box">
                <div class="works-wrapper-1 fade-anim">
                  @forelse($featuredProjects as $project)
                    <div class="work-box">
                      <div class="thumb">
                        <div class="image scale" data-cursor-text="View Project">
                          <a href="{{ route('front.projects.show', $project) }}"><img src="{{ $project->primaryImageUrl() ?: asset('assets/imgs/project/image-1.webp') }}" alt="{{ $project->name }}"></a>
                        </div>
                      </div>
                      <div class="content">
                        <h3 class="title"><a href="{{ route('front.projects.show', $project) }}">{{ $project->name }}</a></h3>
                        <div class="meta">
                          <span class="tag">{{ $project->category ?: 'General' }}</span>
                          <span class="date">{{ optional($project->execution_date)->format('Y') ?? $project->created_at->format('Y') }}</span>
                        </div>

                      </div>
                    </div>
                  @empty
                    <div class="work-box">
                      <div class="content">
                        <h3 class="title">No projects available right now.</h3>
                      </div>
                    </div>
                  @endforelse
                </div>
              </div>
              <div class="all-btn-wrapper fade-anim">
                <a href="{{ route('front.projects.index') }}" class="rr-btn btn-border hover-bg-theme">
                  <span class="btn-wrap">
                    <span class="text-one">View All Work</span>
                    <span class="text-two">View All Work</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- work area end  -->

        <!-- service area start  -->
        <section class="service-area">
          <div class="container large">
            <div class="service-area-inner section-spacing">
              <div class="section-header">
                <div class="section-title-wrapper fade-anim">
                  <div class="title-wrapper">
                    <h2 class="section-title font-instrumentsans-medium word-anim">WHAT WE’RE <br>
                      OFFERING</h2>
                  </div>
                </div>
              </div>
              <div class="services-wrapper-box">
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
            </div>
          </div>
        </section>
        <!-- service area end  -->

        <!-- funfact area start  -->
        <section class="funfact-area fade-anim">
          <div class="container large">
            <div class="funfact-area-inner pin-area">
              <div class="section-header section-spacing-top pin-element">
                <div class="section-title-wrapper">
                  <div class="title-wrapper">
                    <h2 class="section-title font-instrumentsans-medium word-anim">WHY <br>
                      CHOOSE US?</h2>
                  </div>
                </div>
              </div>
              <div class="funfact-wrapper-box section-spacing">
                <span class="line-1"></span>
                <span class="line-2"></span>
                <span class="line-3"></span>
                <span class="line-4"></span>
                <div class="funfact-wrapper">
                  <div class="funfact-item go-visible">
                    <span class="number">Creativity and Innovation</span>
                    <p class="text">We do not believe in one-size-fits-all. Our solutions are customized to your business needs.</p>
                  </div>
                  <div class="funfact-item go-visible">
                    <span class="number">Experienced Team</span>
                    <p class="text">We have professionals with experience on our team. Each project benefits from their expertise and enthusiasm.</p>
                  </div>
                  <div class="funfact-item go-visible">
                    <span class="number">Competitive Pricing</span>
                    <p class="text">We take quality seriously. It is essential to our workflow, ensuring high-quality deliverables.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- funfact area end  -->

        <!-- client area start  -->
        <section class="client-area">
          <div class="container large">
            <div class="client-area-inner section-spacing-top">
              <div class="section-content">
                <div class="section-title-wrapper">
                  <div class="title-wrapper">
                    <h2 class="section-title font-instrumentsans-medium word-anim"><span>Client:</span> Helping brands
                      to grow
                      and say their success stories to
                      the world.</h2>
                  </div>
                </div>
                <div class="text-wrapper fade-anim">
                  <p class="text">We’re a great team of creatives with a strongest capabilities to helping progressive
                    fields achieve their goals. With the best talent on every project done successfully</p>
                </div>
              </div>
              <div class="client-capsule-wrapper-box" data-t-throwable-scene="true">
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

        <!-- cta area start  -->
        <div class="p-relative overflow-hidden">
          <section class="cta-area">
            <div class="cta-area-inner section-spacing">
              <div class="area-bg"></div>
              <div class="container large">
                <div class="section-content">
                  <div class="section-title-wrapper">
                    <div class="title-wrapper">
                      <h2 class="section-title font-instrumentsans-medium char-anim"><a href="contact.html">Let’s
                          Work</a></h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <!-- cta area end  -->

        <!-- productivity area start  -->
        <section class="productivity-area">
          <div class="container large">
            <div class="productivity-area-inner section-spacing">
              <div class="section-content">
                <div class="section-title-wrapper">
                  <div class="title-wrapper">
                    <h2 class="section-title font-instrumentsans-medium word-anim">It’s all about the <br>
                      unique <span class="shape-1">thinking</span> with
                      <span class="shape-2">creativity</span> and <span class="shape-3">quality</span> for
                      complex solution in <br>
                      easy way
                    </h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- productivity area end  -->

        <div class="image-wrapper parallax-view">
          <img class="w-100" src="assets/imgs/gallery/image-7.html" alt="image" data-speed="0.1">
        </div>

@endsection
