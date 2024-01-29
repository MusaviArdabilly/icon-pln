@extends('layouts.user')
@section('content')
  
  <script type="text/javascript">
    document.getElementById('nav-repository').classList.add('active');
  </script>

  <div class="container repository min-vh-100">
    <h1 class="fs-36 fw-600 pt-5 mb-4">Pustaka Inovasi</h1>
    <div class="shadow rounded p-3 mb-3">
      <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
          <h1 class="fs-28 fw-500 mb-0">2024</h1>
          <div id="toggleHide1" onclick="toggleContent('content1', 'toggleShow1', 'toggleHide1')" class="toggle">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
          </div>
          <div id="toggleShow1" onclick="toggleContent('content1', 'toggleShow1', 'toggleHide1')" class="toggle d-none">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
          </div>
        </div>
        <div id="content1" class="transition-height">
          <div class="row mt-2">
            <div class="col-12 col-md-4">
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Januari (3)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Februari (17)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Maret (12)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">April (10)</h2>
              </a> 
            </div>
            <div class="col-12 col-md-4">
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Mei (3)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Juni (17)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Juli (12)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Agustus (10)</h2>
              </a> 
            </div>
            <div class="col-12 col-md-4">
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">September (3)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Oktober (17)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">November (12)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Desember (10)</h2>
              </a> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="shadow rounded p-3 mb-3">
      <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
          <h1 class="fs-28 fw-500 mb-0">2023</h1>
          <div id="toggleHide2" onclick="toggleContent('content2', 'toggleShow2', 'toggleHide2')" class="toggle">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
          </div>
          <div id="toggleShow2" onclick="toggleContent('content2', 'toggleShow2', 'toggleHide2')" class="toggle d-none">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
          </div>
        </div>
        <div id="content2" class="transition-height">
          <div class="row mt-2">
            <div class="col-12 col-md-4">
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Januari (3)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Februari (17)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Maret (12)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">April (10)</h2>
              </a> 
            </div>
            <div class="col-12 col-md-4">
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Mei (3)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Juni (17)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Juli (12)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Agustus (10)</h2>
              </a> 
            </div>
            <div class="col-12 col-md-4">
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">September (3)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Oktober (17)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">November (12)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Desember (10)</h2>
              </a> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="shadow rounded p-3 mb-3">
      <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
          <h1 class="fs-28 fw-500 mb-0">2022</h1>
          <div id="toggleHide3" onclick="toggleContent('content3', 'toggleShow3', 'toggleHide3')" class="toggle">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
          </div>
          <div id="toggleShow3" onclick="toggleContent('content3', 'toggleShow3', 'toggleHide3')" class="toggle d-none">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
          </div>
        </div>
        <div id="content3" class="transition-height">
          <div class="row mt-2">
            <div class="col-12 col-md-4">
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Januari (3)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Februari (17)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Maret (12)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">April (10)</h2>
              </a> 
            </div>
            <div class="col-12 col-md-4">
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Mei (3)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Juni (17)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Juli (12)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Agustus (10)</h2>
              </a> 
            </div>
            <div class="col-12 col-md-4">
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">September (3)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Oktober (17)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">November (12)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Desember (10)</h2>
              </a> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="shadow rounded p-3 mb-3">
      <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
          <h1 class="fs-28 fw-500 mb-0">2023</h1>
          <div id="toggleHide4" onclick="toggleContent('content4', 'toggleShow4', 'toggleHide4')" class="toggle">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
          </div>
          <div id="toggleShow4" onclick="toggleContent('content4', 'toggleShow4', 'toggleHide4')" class="toggle d-none">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
          </div>
        </div>
        <div id="content4" class="transition-height">
          <div class="row mt-2">
            <div class="col-12 col-md-4">
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Januari (3)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Februari (17)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Maret (12)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">April (10)</h2>
              </a> 
            </div>
            <div class="col-12 col-md-4">
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Mei (3)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Juni (17)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Juli (12)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Agustus (10)</h2>
              </a> 
            </div>
            <div class="col-12 col-md-4">
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">September (3)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Oktober (17)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">November (12)</h2>
              </a> 
              <a href="/idea/12" class="text-decoration-none pointer">
                <h2 class="fs-16 fw-400 mb-2">Desember (10)</h2>
              </a> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    window.onload = function() {
      showContent('content1', 'toggleShow1', 'toggleHide1');
      showContent('content2', 'toggleShow2', 'toggleHide2');
      showContent('content3', 'toggleShow3', 'toggleHide3');
      showContent('content4', 'toggleShow4', 'toggleHide4');
    };

    function toggleContent(elementId, toggleShowId, toggleHideId) {
      const content = document.getElementById(elementId);
      const toggleShow = document.getElementById(toggleShowId);
      const toggleHide = document.getElementById(toggleHideId);
  
      if (content.style.maxHeight) {
        content.style.maxHeight = null;
        toggleShow.classList.remove('d-none');
        toggleHide.classList.add('d-none');
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
        toggleShow.classList.add('d-none');
        toggleHide.classList.remove('d-none');
      }
    }

    function showContent(elementId, toggleShowId, toggleHideId) {
      const content = document.getElementById(elementId);
      const toggleShow = document.getElementById(toggleShowId);
      const toggleHide = document.getElementById(toggleHideId);

      content.style.maxHeight = content.scrollHeight + "px";
      toggleShow.classList.add('d-none');
      toggleHide.classList.remove('d-none');
    }
  </script>
@endsection