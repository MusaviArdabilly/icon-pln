@extends('layouts.user')
@section('content')
  
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('navbar').classList.remove('sticky-top');
    document.getElementById('navbar').classList.add('fixed-top');
    document.getElementById('footer').classList.add('fixed-bottom');
  });
</script>

  <div class="min-vh-100 d-flex justify-content-center align-items-center">
    <div class="col-12 col-md-4 mx-auto shadow rounded mb-5 p-3 p-md-5">
      <h1 class="fs-36 fw-700 text-center">LOGIN</h1>
      <form method="POST" >
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <div class="input-group">
            <input type="password" name="password" class="form-control" id="inputPassword" value="">
            <button class="btn btn-outline-secondary" type="button" onclick="showLoginPassword()">
              <svg id="eye-open" class="d-none" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
              <svg id="eye-slash" class="" xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zm151 118.3C226 97.7 269.5 80 320 80c65.2 0 118.8 29.6 159.9 67.7C518.4 183.5 545 226 558.6 256c-12.6 28-36.6 66.8-70.9 100.9l-53.8-42.2c9.1-17.6 14.2-37.5 14.2-58.7c0-70.7-57.3-128-128-128c-32.2 0-61.7 11.9-84.2 31.5l-46.1-36.1zM394.9 284.2l-81.5-63.9c4.2-8.5 6.6-18.2 6.6-28.3c0-5.5-.7-10.9-2-16c.7 0 1.3 0 2 0c44.2 0 80 35.8 80 80c0 9.9-1.8 19.4-5.1 28.2zm51.3 163.3l-41.9-33C378.8 425.4 350.7 432 320 432c-65.2 0-118.8-29.6-159.9-67.7C121.6 328.5 95 286 81.4 256c8.3-18.4 21.5-41.5 39.4-64.8L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5zm-88-69.3L302 334c-23.5-5.4-43.1-21.2-53.7-42.3l-56.1-44.2c-.2 2.8-.3 5.6-.3 8.5c0 70.7 57.3 128 128 128c13.3 0 26.1-2 38.2-5.8z"/></svg>
            </button>
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label">Captcha</label>
          <div class="form-group">
            <div class="captcha d-flex">
              <img id="captcha-image" src="{{ captcha_src(); }}" alt="Captcha" class="me-2">
              <button onclick="reloadCaptcha()" class="btn btn-outline-secondary me-2" type="button">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M386.3 160H336c-17.7 0-32 14.3-32 32s14.3 32 32 32H464c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L414.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L386.3 160z"/></svg>
              </button>
              <input type="text" name="captcha" class="form-control">
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center mb-3">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <div class="d-flex justify-content-center">
          <div class="form-text">Belum mempunyai akun? <a href="/register" class="text-decoration-none">Daftar sekarang</a></div>
      </div>
      </form>
    </div>
  </div>

  <script>
    // Show Password
    function showLoginPassword() {
      var x = document.getElementById("inputPassword");
      if (x.type === "password") {
          x.type = "text";
          $('#eye-open').removeClass('d-none');
          $('#eye-slash').addClass('d-none');
      } else {
          x.type = "password";
          $('#eye-slash').removeClass('d-none');
          $('#eye-open').addClass('d-none');
      }
    }

    function reloadCaptcha() {
      fetch('/reload-captcha-url')
        .then(response => response.json())
        .then(data => {
            document.getElementById('captcha-image').src = data.captcha_url;
        })
        .catch(error => {
            console.error('Error while reloading captcha', error);
        });
    }
  </script>

@endsection