@extends('layouts.user')
@section('content')
  
  <script type="text/javascript">
    document.getElementById('nav-home').classList.add('active');
    document.getElementById('navbar').classList.remove('var-bg-primary', 'shadow', 'sticky-top');
    document.getElementById('navbar').classList.add('fixed-top');
    document.getElementById('nav-brand-logo').classList.add('filter-invert');
  </script>

  <div class="hero-video hero-video-v3">
    <video autoplay loop muted plays-inline class="z-0">
      <source src="{{ asset('assets/video/valorant_vid.mp4') }}" type="video/mp4">
    </video>
    <div class="container">
      <div class="overlay min-vh-100 d-flex align-items-center z-1">
        {{-- <h1 class="d-flex align-items-center fw-700 mb-3 text-black">IC<img src="{{ asset('assets/image/icon/landing-page/box.png') }}" alt="" height="64px" class="mx-1">NIC</h1> --}}
        <h1 class="fs-28 fw-500 mb-0 text-light" data-aos="fade-left" data-aos-duration="1000">
          Terangi Harimu dengan Ide Brilian! Berkolaborasi, Ciptakan Solusi Positif!
        </h1>
      </div>
      <div class=" absolute min-vh-100 d-flex justify-content-center align-items-end pb-5">
        <div class="py-2 px-3 z-2 rounded border border-white border-2 mb-5 btn-hero bounce" onclick="skipHero()">
          <svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-heading d-flex align-items-center justify-content-center">
    <div>
      <div class="d-flex align-items-center justify-content-center">
        <h1 data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200" class="title d-flex align-items-center shadow mb-3">IC<img src="{{ asset('assets/image/icon/landing-page/box.png') }}" alt="" height="64px" class="filter-invert mx-1">NIC</h1>
        {{-- <img data-aos="fade-left" data-aos-duration="1500" src="{{ asset('assets/image/logo/pln-logo.png') }}" alt="" height="80px"> --}}
      </div>
      <div data-aos="fade-down" data-aos-duration="500" class="heading-content-wrapper shadow text-center">
        <img data-aos="zoom-in-left" data-aos-duration="1500" data-aos-delay="200" id="led-lamp" src="{{ asset('assets/image/icon/landing-page/led-lamp.png') }}" alt="" height="128px">
        <h2 data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200" class="sub-title bg-light shadow">Merupakan singkatan dari <strong>Icon Innovation Center</strong>, yang digunakan sebagai media sosial inovasi bagi karyawan PLN untuk dapat menyampaikan ide dan berkolaborasi mengembangkannya</h2>
        <img data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="200" id="atom" src="{{ asset('assets/image/icon/landing-page/atom.png') }}" alt="" height="128px">
      </div>
    </div>
  </div>

  <div class="min-vh-100 var-bg-x d-flex">
    <div class="container d-flex align-items-center">
      <div class="mb-120px mt-120px">
        <div data-aos="zoom-in-down" data-aos-duration="2000" class="col-12 title-landing text-center mb-40px">
          <h1 class="text-wrap">
            Berpartisipasi di ICONIC
          </h1>
        </div>
        <div class="row gx-0">
          <div class="col-12 col-md-3 text-center p-3">
            <div data-aos="zoom-out-down" data-aos-duration="2000" class="shadow rounded-4 p-3 bg-light">
              <img src="{{ asset('assets/image/icon/landing-page/idea.png') }}" alt="Icon" class="mb-3">
              <h3 class="fs-20">Buat ide mu</h3>
              <h3 class="fs-16 fw-400">Submit ide mu tanpa ragu, untuk semua orang, kapan pun! Inspirasi tak mengenal batas.</h3>
            </div>
          </div>
          <div class="col-12 col-md-3 text-center p-3">
            <div data-aos="zoom-in-up" data-aos-duration="1500" class="shadow rounded-4 p-3 bg-light">
              <img src="{{ asset('assets/image/icon/landing-page/collab.png') }}" alt="Icon" class="mb-3">
              <h3 class="fs-20">Mari Berkoaborasi</h3>
              <h3 class="fs-16 fw-400">Kamu dapat berkolaborasi untuk membuat idea kamu semakin berkembang.</h3>
            </div>
          </div>
          <div class="col-12 col-md-3 text-center p-3">
            <div data-aos="zoom-in-up" data-aos-duration="1500" class="shadow rounded-4 p-3 bg-light">
              <img src="{{ asset('assets/image/icon/landing-page/environment.png') }}" alt="Icon" class="mb-3">
              <h3 class="fs-20">Bangun Inovasi</h3>
              <h3 class="fs-16 fw-400">Jadilah bagian dari ekosistem inovasi dengan berperan aktif dalam perkembangan ide.</h3>
            </div>
          </div>
          <div class="col-12 col-md-3 text-center p-3">
            <div data-aos="zoom-in-left" data-aos-duration="1500" class="shadow rounded-4 p-3 bg-light">
              <img src="{{ asset('assets/image/icon/landing-page/dream.png') }}" alt="Icon" class="mb-3">
              <h3 class="fs-20">Wujudkan Idemu</h3>
              <h3 class="fs-16 fw-400">Mari kita wujudkan ide yang dimiliki melalui program inovasi yang diselenggarakan oleh PLN.</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div data-aos="zoom-in-down" data-aos-duration="2000" class="container min-vh-100 d-flex align-items-center justify-content-center">
    <div class="row w-100">
      <div class="col-12">
        <div class="shadow rounded-4 p-3 bg-light">
          <div class="body">
            <div class="cd-horizontal-timeline loaded">
              <div data-aos="zoom-in-left" data-aos-duration="1500" class="timeline">
                <div class="events-wrapper">
                  <div class="events">
                    <ol>
                      <li><a href="#0" data-date="01/01/2024" class="fs-24 fw-600 text-decoration-none older-event">Problem</a></li>
                      <li><a href="#0" data-date="08/01/2024" class="fs-24 fw-600 text-decoration-none older-event">Design</a></li>
                      <li><a href="#0" data-date="16/01/2024" class="fs-24 fw-600 text-decoration-none selected">Prototype</a></li>
                      <li><a href="#0" data-date="24/01/2024" class="fs-24 fw-600 text-decoration-none">Evaluasi</a></li>
                      <li><a href="#0" data-date="31/01/2024" class="fs-24 fw-600 text-decoration-none">Report</a></li>
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
                      <li class="" data-date="01/01/2024">
                          <p class="text-center">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                          </p>
                      </li>
                      <li data-date="08/01/2024" class="">
                          <p class="text-center">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                          </p>
                      </li>
                      <li data-date="16/01/2024" class="selected">
                          <p class="text-center">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                          </p>
                      </li>
                      <li data-date="24/01/2024">
                          <p class="text-center">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                          </p>
                      </li>
                      <li data-date="31/01/2024">
                          <p class="text-center">
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                          </p>
                      </li>
                  </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const heroVideoHeight = document.querySelector('.hero-video').offsetHeight;
    const navbarHeight = document.querySelector('.navbar').offsetHeight;
    const targetElement = document.getElementById('navbar');
    
    window.addEventListener('scroll', function() {
      if (window.scrollY > (heroVideoHeight - navbarHeight)) {
        targetElement.classList.add('var-bg-primary', 'shadow');
      } else {
        targetElement.classList.remove('var-bg-primary', 'shadow');
      }
    });
  </script>
  
  <script>
    function skipHero() {
      var heroHeight = document.querySelector('.hero-video').offsetHeight;

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