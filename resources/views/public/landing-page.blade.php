@extends('layouts.user')
@section('content')
  
  <script type="text/javascript">
    document.getElementById('navbar').classList.remove('var-bg-primary', 'sticky-top');
    document.getElementById('navbar').classList.add('fixed-top');
  </script>

  <div class="hero-video">
    <video autoplay loop muted plays-inline>
      <source src="{{ asset('assets/video/valorant_vid.mp4') }}" type="video/mp4">
    </video>
  </div>

  <div class="hero-heading d-flex align-items-center justify-content-center">
    <div data-aos="fade-down" data-aos-duration="500" class="heading-content-wrapper shadow text-center">
      <img data-aos="zoom-in-left" data-aos-duration="1500" data-aos-delay="200" id="led-lamp" src="{{ asset('assets/image/icon/landing-page/led-lamp.png') }}" alt="" height="128px">
      <h1 data-aos="fade-down" data-aos-duration="2000" data-aos-delay="200" class="title">IDEABOX</h1>
      <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" class="sub-title bg-light shadow">Single platform yang digunakan sebagai media sosial inovasi bagi karyawan BUMN untuk dapat menyampaikan idea dan berkolaborasi mengembangkannya</h2>
      <img data-aos="zoom-in-right" data-aos-duration="1500" data-aos-delay="200" id="atom" src="{{ asset('assets/image/icon/landing-page/atom.png') }}" alt="" height="128px">
    </div>
  </div>

  <div class="var-bg-x d-flex">
    <div class="mb-120px mt-120px">
      <div data-aos="zoom-in-down" data-aos-duration="2000" class="col-12 title-landing text-center mb-40px">
        <h1>
          Let's Participate on IDEABOX
        </h1>
      </div>
      <div class="row gx-0">
        <div class="col-12 col-md-3 text-center p-3">
          <div data-aos="zoom-out-down" data-aos-duration="2000" class="shadow rounded-4 p-3 bg-light">
            <img src="{{ asset('assets/image/icon/landing-page/idea.png') }}" alt="Icon" class="mb-3">
            <h3 class="fs-20">Create your idea</h3>
            <h3 class="fs-16 fw-400">Jangan ragu untuk submit idea kamu, kapan saja dan untuk siapa saja!</h3>
          </div>
        </div>
        <div class="col-12 col-md-3 text-center p-3">
          <div data-aos="zoom-in-up" data-aos-duration="1500" class="shadow rounded-4 p-3 bg-light">
            <img src="{{ asset('assets/image/icon/landing-page/collab.png') }}" alt="Icon" class="mb-3">
            <h3 class="fs-20">Let's collaborate</h3>
            <h3 class="fs-16 fw-400">Kamu dapat berkolaborasi untuk membuat idea kamu semakin berkembang.</h3>
          </div>
        </div>
        <div class="col-12 col-md-3 text-center p-3">
          <div data-aos="zoom-in-up" data-aos-duration="1500" class="shadow rounded-4 p-3 bg-light">
            <img src="{{ asset('assets/image/icon/landing-page/environment.png') }}" alt="Icon" class="mb-3">
            <h3 class="fs-20">Build innovation</h3>
            <h3 class="fs-16 fw-400">Jadilah bagian dari ekosistem inovasi dengan berperan aktif dalam perkembangan ide.</h3>
          </div>
        </div>
        <div class="col-12 col-md-3 text-center p-3">
          <div data-aos="zoom-in-left" data-aos-duration="1500" class="shadow rounded-4 p-3 bg-light">
            <img src="{{ asset('assets/image/icon/landing-page/dream.png') }}" alt="Icon" class="mb-3">
            <h3 class="fs-20">Make your dream come true</h3>
            <h3 class="fs-16 fw-400">Ayo realisasikan idea kamu melalui program inovasi BUMN!</h3>
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
        targetElement.classList.add('var-bg-primary');
      } else {
        targetElement.classList.remove('var-bg-primary');
      }
    });
  </script>

  <script>
    AOS.init();
  </script>
@endsection