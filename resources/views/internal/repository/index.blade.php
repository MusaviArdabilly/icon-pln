@extends('layouts.user')
@section('content')
  
  <script type="text/javascript">
    document.getElementById('nav-repository').classList.add('active');
  </script>
  
  <div class="container min-vh-100">
    <div class="fw-600 my-3">
      <a href="/idea" class="text-decoration-none text-dark d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
        &nbsp;Kembali
      </a>
    </div>
    <h1 class="fs-36 fw-600 mb-4">Pustaka Inovasi</h1>
    <div class="row">
      {{-- foeach --}}
      <div class="col-12 col-md-4">
        <h2 class="fs-16 fw-600 mb-2">2024 (10)</h2>
        <h2 class="fs-16 fw-600 mb-2">2023 (19)</h2>
        <h2 class="fs-16 fw-600 mb-2">2022 (14)</h2>
        <h2 class="fs-16 fw-600 mb-2">2021 (22)</h2>
        <h2 class="fs-16 fw-600 mb-2">2020 (32)</h2>
      </div>
      <div class="col-12 col-md-4">
        <h2 class="fs-16 fw-600 mb-2">2019 (29)</h2>
        <h2 class="fs-16 fw-600 mb-2">2018 (36)</h2>
        <h2 class="fs-16 fw-600 mb-2">2017 (13)</h2>
        <h2 class="fs-16 fw-600 mb-2">2016 (17)</h2>
        <h2 class="fs-16 fw-600 mb-2">2015 (21)</h2>
      </div>
      <div class="col-12 col-md-4">
        <h2 class="fs-16 fw-600 mb-2">2014 (40)</h2>
        <h2 class="fs-16 fw-600 mb-2">2013 (32)</h2>
        <h2 class="fs-16 fw-600 mb-2">2012 (22)</h2>
        <h2 class="fs-16 fw-600 mb-2">2011 (12)</h2>
        <h2 class="fs-16 fw-600 mb-2">2010 (32)</h2>
      </div>
    </div>
  </div>
@endsection