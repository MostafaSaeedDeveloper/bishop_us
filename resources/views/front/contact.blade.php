@extends('front.layout.master')

@section('content')

        <!-- page title area start  -->
        <section class="page-title-area">
          <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
              <div class="page-title-wrapper">
                <h2 class="page-title fade-anim">Contact</h2>
              </div>
            </div>
          </div>
        </section>
        <!-- page title area end  -->

        <!-- contact area start  -->
        <section class="contact-area-contact-page">
          <div class="container large">
            <div class="contact-area-contact-page-inner section-spacing-top">
              <div class="section-header fade-anim">
                <div class="section-title-wrapper">
                  <div class="subtitle-wrapper">
                    <span class="section-subtitle">Contact</span>
                  </div>
                  <div class="title-wrapper">
                    <h2 class="section-title font-sequelsans-romanbody">Let's build something great together.</h2>
                  </div>
                </div>
              </div>
              <div class="section-content-wrapper fade-anim">
                <div class="section-content">
                  <div class="contact-mail">
                    <p class="title">Get in touch</p>
                    <p class="text">Reach us through the details below and our team will get back to you shortly.<br>
                      <a href="mailto:info@bishop-solutions.com">info@bishop-solutions.com</a>
                    </p>
                  </div>
                  <div class="contact-social">
                    <p class="title">Contact Information</p>
                    <div class="social-links">
                      <a href="tel:+2035864443">035864443 (2+)</a>
                      <a href="tel:+201555665776">01555665776</a>
                      <a href="https://maps.google.com/?q=Ahmed+Bin+Hanbal+Street+Al+Naseem+Al+Gharbi+Riyadh" target="_blank" rel="noopener">Riyadh - Saudi Arabia</a>
                      <a href="https://maps.google.com/?q=78+Abdel+Salam+Aref+Street+Glim+Alexandria" target="_blank" rel="noopener">Alexandria - Egypt</a>
                    </div>
                  </div>
                </div>
                <div class="contact-wrap">
                  @if (session('status'))
                    <p class="text-success mb-3">{{ session('status') }}</p>
                  @endif

                  @if ($errors->any())
                    <div class="mb-3">
                      @foreach ($errors->all() as $error)
                        <p class="text-danger mb-1">{{ $error }}</p>
                      @endforeach
                    </div>
                  @endif

                  <form id="contact__form" method="POST" action="{{ route('front.contact.store') }}">
                    @csrf
                    <div class="contact-formwrap">
                      <div class="contact-formfield">
                        <input type="text" name="name" id="name" placeholder="Name*" value="{{ old('name') }}">
                      </div>
                      <div class="contact-formfield">
                        <input type="email" name="email" id="email" placeholder="Email*" value="{{ old('email') }}">
                      </div>
                      <div class="contact-formfield">
                        <input type="text" name="phone" id="phone" placeholder="Phone*" value="{{ old('phone') }}">
                      </div>
                      <div class="contact-formfield">
                        <input type="text" name="company" id="company" placeholder="Company" value="{{ old('company') }}">
                      </div>
                      <div class="contact-formfield">
                        <select name="budget" id="budget">
                          <option value="" disabled {{ old('budget') ? '' : 'selected' }}>Budget*</option>
                          <option value="5,000 - 10,000" @selected(old('budget') === '5,000 - 10,000')>5,000 - 10,000</option>
                          <option value="10,000 - 15,000" @selected(old('budget') === '10,000 - 15,000')>10,000 - 15,000</option>
                          <option value="15,000 - 20,000" @selected(old('budget') === '15,000 - 20,000')>15,000 - 20,000</option>
                          <option value="20,000 - 25,000" @selected(old('budget') === '20,000 - 25,000')>20,000 - 25,000</option>
                          <option value="25,000+" @selected(old('budget') === '25,000+')>25,000+</option>
                        </select>
                      </div>
                      <div class="contact-formfield">
                        <input type="text" name="solution" id="solution" placeholder="Needed solution*" value="{{ old('solution') }}">
                      </div>
                      <div class="contact-formfield message">
                        <input type="text" name="message" id="message" placeholder="Message*" value="{{ old('message') }}">
                      </div>
                    </div>
                    <div class="submit-btn">
                      <button type="submit" class="rr-btn">
                        <span class="btn-wrap">
                          <span class="text-one">Send Message</span>
                          <span class="text-two">Send Message</span>
                        </span>
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- contact area end  -->

@endsection
