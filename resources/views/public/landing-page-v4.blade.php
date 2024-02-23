@extends('layouts.user')
@section('content')
  
  <script type="text/javascript">
    document.getElementById('nav-home').classList.add('active');
    // document.getElementById('navbar').classList.remove('var-bg-primary', 'shadow', 'sticky-top');
    document.getElementById('navbar').classList.add('d-none');
    document.getElementById('navbar').classList.add('animation-pop-down-navbar');
    // document.getElementById('nav-brand-logo').classList.add('filter-invert');
  </script>

  <div class="hero-video-v5 position-relative">
    <video autoplay loop muted plays-inline class="z-0">
      <source src="{{ asset('assets/video/compro.mp4') }}" type="video/mp4">
    </video>
    <div class="position-absolute d-none d-sm-flex justify-content-center w-100" style="bottom: 40px">
      <div class="py-2 px-3 z-2 rounded border border-white border-2 btn-hero bounce mb-120px" onclick="skipHero()">
        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
      </div>
    </div>
    <div class="d-block ascent-1 full-width var-bg-primary"></div>
    <div class="d-block ascent-2 full-width var-bg-secondary"></div>
  </div>

  {{-- <div class="relative">
    <div class="hero-video hero-video-v4">
      <video autoplay loop muted plays-inline class="z-0">
        <source src="{{ asset('assets/video/compro.mp4') }}" type="video/mp4">
      </video>
      <div class="container">
        <div class="overlay min-vh-100 d-flex align-items-center z-1"> --}}
          {{-- <h1 class="d-flex align-items-center fw-700 mb-3 text-black">IC<img src="{{ asset('assets/image/icon/landing-page/box.png') }}" alt="" height="64px" class="mx-1">NIC</h1> --}}
          {{-- <h1 class="fs-28 fw-500 mb-0 text-light" data-aos="fade-left" data-aos-duration="1000">
            Terangi Harimu dengan Ide Brilian! Berkolaborasi, Ciptakan Solusi Positif!
          </h1> --}}
        {{-- </div>
        <div class="min-vh-100 d-flex justify-content-center align-items-end pb-5">
          <div class="py-2 px-3 z-2 rounded border border-white border-2 mb-120px btn-hero bounce" onclick="skipHero()">
            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
          </div>
        </div>
        <div class="full-width var-bg-primary" style="height: 50px; bottom: 80px; z-index: 100"></div>
        <div class="full-width var-bg-secondary" style="height: 80px; bottom: 0px; z-index: 100"></div>
      </div>
    </div>
  </div> --}}

  <div class="hero-heading d-flex align-items-center justify-content-center">
    <div>
      <div class="d-flex align-items-center justify-content-center">
        {{-- IC<img src="{{ asset('assets/image/icon/landing-page/box.png') }}" alt="" height="64px" class="filter-invert mx-1">NIC --}}
        <h1 data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200" class="title d-flex align-items-center shadow mb-3">{!! $data->section1_title !!}</h1>
        {{-- <img data-aos="fade-left" data-aos-duration="1500" src="{{ asset('assets/image/logo/pln-logo.png') }}" alt="" height="80px"> --}}
      </div>
      <div data-aos="fade-down" data-aos-duration="500" class="heading-content-wrapper shadow text-center">
        <img data-aos="zoom-in-left" data-aos-duration="1500" data-aos-delay="200" id="led-lamp" src="{{ asset('assets/image/icon/landing-page/led-lamp.png') }}" alt="" height="128px">
        <h2 data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200" class="sub-title bg-light shadow">{!! $data->section1_content !!}</h2>
        <img data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="200" id="atom" src="{{ asset('assets/image/icon/landing-page/atom.png') }}" alt="" height="128px">
      </div>
    </div>
  </div>

  <div class="min-vh-100 var-bg-x d-flex">
    <div class="container d-flex align-items-center">
      <div class="mb-120px mt-120px position-relative">
        <img id="item-lp-1" data-aos="zoom-in-up" data-aos-duration="2000" src="{{ asset('assets/image/icon/landing-page/itemLP1.png') }}" alt="">
        <div data-aos="zoom-in-down" data-aos-duration="2000" class="col-12 title-landing text-center mb-40px">
          <h1 class="text-wrap">{!! $data->section2_title !!}</h1>
        </div>
        <div class="row gx-0">
          <div class="col-12 col-md-3 text-center p-3">
            <div data-aos="zoom-out-down" data-aos-duration="2000" class="shadow rounded-4 p-3 bg-light">
              <img src="{{ asset('assets/image/icon/landing-page/idea.png') }}" alt="Icon" class="mb-3">
              <h3 class="fs-20">{!! $data->section2_subtitle1 !!}</h3>
              <h3 class="fs-16 fw-400">{!! $data->section2_subtitle1_content !!}</h3>
            </div>
          </div>
          <div class="col-12 col-md-3 text-center p-3">
            <div data-aos="zoom-in-up" data-aos-duration="1500" class="shadow rounded-4 p-3 bg-light">
              <img src="{{ asset('assets/image/icon/landing-page/collab.png') }}" alt="Icon" class="mb-3">
              <h3 class="fs-20">{!! $data->section2_subtitle2 !!}</h3>
              <h3 class="fs-16 fw-400">{!! $data->section2_subtitle2_content !!}</h3>
            </div>
          </div>
          <div class="col-12 col-md-3 text-center p-3">
            <div data-aos="zoom-in-up" data-aos-duration="1500" class="shadow rounded-4 p-3 bg-light">
              <img src="{{ asset('assets/image/icon/landing-page/environment.png') }}" alt="Icon" class="mb-3">
              <h3 class="fs-20">{!! $data->section2_subtitle3 !!}</h3>
              <h3 class="fs-16 fw-400">{!! $data->section2_subtitle3_content !!}</h3>
            </div>
          </div>
          <div class="col-12 col-md-3 text-center p-3">
            <div data-aos="zoom-in-left" data-aos-duration="1500" class="shadow rounded-4 p-3 bg-light">
              <img src="{{ asset('assets/image/icon/landing-page/dream.png') }}" alt="Icon" class="mb-3">
              <h3 class="fs-20">{!! $data->section2_subtitle4 !!}</h3>
              <h3 class="fs-16 fw-400">{!! $data->section2_subtitle4_content !!}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container min-vh-100 d-flex align-items-center justify-content-center mb-5">
    <div class="w-100 position-relative">
      <img id="item-lp-2" data-aos="zoom-in-right" data-aos-duration="2000" src="{{ asset('assets/image/icon/landing-page/itemLP2.png') }}" alt="">
      <div data-aos="zoom-in-down" data-aos-duration="2000" class="col-12 title-landing text-center mb-40px">
        <h1 class="text-wrap">{!! $data->section3_title !!}</h1>
      </div>
      <div class="d-flex justify-content-center">
        <div data-aos="zoom-in-down" data-aos-duration="2000" class="row w-100">
          <div class="col-12">
            <div class="shadow rounded-4 p-3 bg-light">
              <div class="body">
                <div class="cd-horizontal-timeline loaded">
                  <div data-aos="zoom-in-left" data-aos-duration="1500" class="timeline">
                    <div class="events-wrapper">
                      <div class="events">
                        <ol>
                          <li><a href="#0" data-date="01/01/2024" class="fs-24 fw-600 text-decoration-none selected">{!! $flow_position[0]->name !!}</a></li>
                          <li><a href="#0" data-date="08/01/2024" class="fs-24 fw-600 text-decoration-none">{!! $flow_position[1]->name !!}</a></li>
                          <li><a href="#0" data-date="16/01/2024" class="fs-24 fw-600 text-decoration-none">{!! $flow_position[2]->name !!}</a></li>
                          <li><a href="#0" data-date="24/01/2024" class="fs-24 fw-600 text-decoration-none">{!! $flow_position[3]->name !!}</a></li>
                          <li><a href="#0" data-date="31/01/2024" class="fs-24 fw-600 text-decoration-none">{!! $flow_position[4]->name !!}</a></li>
                        </ol>
                        <span class="filling-line" aria-hidden="true" style="transform: scaleX(0.281506);"></span>
                      </div>
                      <!-- .events -->
                    </div>
                    <!-- .events-wrapper -->
                    <ul class="cd-timeline-navigation d-block d-md-none">
                      <li><a href="#0" class="prev inactive">Prev</a></li>
                      <li><a href="#0" class="next">Next</a></li>
                    </ul>
                    <!-- .cd-timeline-navigation -->
                  </div>
                  <!-- .timeline -->
                  <div data-aos="zoom-in-up" data-aos-duration="1500" class="events-content">
                      <ol>
                          <li class="selected" data-date="01/01/2024">
                            <div class="d-flex flex-column flex-sm-row gap-5">
                              <img style="flex: 1; max-width: 128px; height: auto; align-self: center;"
                               class="mx-auto" src="{{ asset('assets/image/icon/landing-page/problem.png') }}" alt="">
                              <p style="flex: 1;" class="d-inline-block text-center">{!! $data->section3_subtitle1_content !!}</p>
                            </div>
                          </li>
                          <li data-date="08/01/2024" class="">
                            <div class="d-flex flex-column flex-sm-row gap-5">
                              <img style="flex: 1; max-width: 128px; height: auto; align-self: center;"
                               class="mx-auto" src="{{ asset('assets/image/icon/landing-page/design.png') }}" alt="">
                              <p style="flex: 1;" class="d-inline-block text-center">{!! $data->section3_subtitle2_content !!}</p>
                            </div>
                          </li>
                          <li data-date="16/01/2024" class="">
                            <div class="d-flex flex-column flex-sm-row gap-5">
                              <img style="flex: 1; max-width: 128px; height: auto; align-self: center;"
                               class="mx-auto" src="{{ asset('assets/image/icon/landing-page/prototype.png') }}" alt="">
                              <p style="flex: 1;" class="d-inline-block text-center">{!! $data->section3_subtitle3_content !!}</p>
                            </div>
                          </li>
                          <li data-date="24/01/2024">
                            <div class="d-flex flex-column flex-sm-row gap-5">
                              <img style="flex: 1; max-width: 128px; height: auto; align-self: center;"
                               class="mx-auto" src="{{ asset('assets/image/icon/landing-page/evaluation.png') }}" alt="">
                              <p style="flex: 1;" class="d-inline-block text-center">{!! $data->section3_subtitle4_content !!}</p>
                            </div>
                          </li>
                          <li data-date="31/01/2024">
                            <div class="d-flex flex-column flex-sm-row gap-5">
                              <img style="flex: 1; max-width: 128px; height: auto; align-self: center;"
                               class="mx-auto" src="{{ asset('assets/image/icon/landing-page/report.png') }}" alt="">
                              <p style="flex: 1;" class="d-inline-block text-center">{!! $data->section3_subtitle5_content !!}</p>
                            </div>
                          </li>
                      </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

  <script>
    // const heroVideoHeight = document.querySelector('.hero-video').offsetHeight;
    const heroVideoHeight = document.querySelector('.hero-video-v5').offsetHeight;
    // const navbarHeight = document.querySelector('.navbar').offsetHeight;
    const targetElement = document.getElementById('navbar');
    
    window.addEventListener('scroll', function() {
      if (window.scrollY > (heroVideoHeight - 150)) {
        targetElement.classList.remove('d-none');
      } else {
        targetElement.classList.add('d-none');
      }
    });
  </script>
  
  <script>
    function skipHero() {
      var heroHeight = document.querySelector('.hero-video-v5').offsetHeight;

      window.scrollTo({
        top: heroHeight,
        behavior: 'smooth'
      });
    }
  </script>

  <script>
    AOS.init();
  </script>
@endsection