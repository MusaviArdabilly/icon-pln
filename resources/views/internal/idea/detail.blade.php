@extends('layouts.user')
@section('content')
  
  <script type="text/javascript">
    // document.getElementById('navbar').classList.remove('sticky-top');
    // document.getElementById('navbar').classList.add('fixed-top');
  </script>
  
  <div class="min-vh-100">
    <div class="container detail">
      <div class="d-flex align-items-center fw-600 my-3">
        <a href="/idea" class="text-decoration-none text-dark">
          <svg xmlns="http://www.w3.org/2000/svg" height="16" width="10" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg>
          &nbsp;Kembali
        </a>
      </div>
      <div class="row mb-5">
        <div class="col-12 col-md-9">
          <h1 class="fs-36 fw-600 text-overflow-hidden" data-mdb-toggle="popover" title="Penggunaan Sistem Otomasi Pintar">Penggunaan Sistem Otomasi Pintar</h1>
          {{-- max 650 character abstraksi --}}
          <p class="abstraction fs-16 fw-400 lh-24">Ini abstraksi Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. including versions of Lorem Ipsum. including versions of Lore</p>
          <h2 class="fs-16 fw-600 m-0">Oleh:</h2>
          <div class="d-flex">
            <label class="fs-16 fw-600">Musavi Ardabilly,&#160;</label>
            <label class="fs-16 fw-400"> John Petruci, John Doe, Andrea Galaxy, Seilal Farah</label>
          </div>
        </div>
        <div class="col-12 col-md-3">
          <div class="d-flex justify-content-end h-100 align-items-center">
            <div class="tumbnail">
              <img src="{{ asset('assets/image/tumbnail/iot.jpg') }}" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-12">
          <div class="shadow rounded p-3">
            <div class="d-flex justify-content-between align-items-center">
              <h2 class="fs-28 fw-600 m-0">Latar Belakang</h2>
              <div id="toggleHide1" onclick="toggleContent('content1', 'toggleShow1', 'toggleHide1')" class="toggle">
              {{-- <div id="toggleHide1" onclick="toggleContent('content1', 'toggleShow1', 'toggleHide1')"> --}}
                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
              </div>
              <div id="toggleShow1" onclick="toggleContent('content1', 'toggleShow1', 'toggleHide1')" class="toggle d-none">
                {{-- <div id="toggleShow1" onclick="toggleContent('content1', 'toggleShow1', 'toggleHide1')" class="d-none"> --}}
                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
              </div>
            </div>
            <div id="content1" class="transition-height">
              <p class="fs-16 fw-400 lh-24 mt-3 mb-0">Ini latar belakang Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-12">
          <div class="shadow rounded p-3">
            <div class="d-flex justify-content-between align-items-center">
              <h2 class="fs-28 fw-600 m-0">Isi</h2>
              <div id="toggleHide2" onclick="toggleContent('content2', 'toggleShow2', 'toggleHide2')" class="toggle">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
              </div>
              <div id="toggleShow2" onclick="toggleContent('content2', 'toggleShow2', 'toggleHide2')" class="toggle d-none">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
              </div>
            </div>
            <div id="content2" class="transition-height">
              <p class="fs-16 fw-400 lh-24 mb-0 mt-3">Ini latar belakang Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.Ini latar belakang Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-12">
          <div class="shadow rounded p-3">
            <div class="d-flex justify-content-between align-items-center">
              <h2 class="fs-28 fw-600 m-0">Solusi</h2>
              <div id="toggleHide3" onclick="toggleContent('content3', 'toggleShow3', 'toggleHide3')" class="toggle">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
              </div>
              <div id="toggleShow3" onclick="toggleContent('content3', 'toggleShow3', 'toggleHide3')" class="toggle d-none">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
              </div>
            </div>
            <div id="content3" class="transition-height">
              <p class="fs-16 fw-400 lh-24 mb-0 mt-3">Ini latar belakang Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            </div>
          </div>
        </div>
      </div>
      <hr class="dashed mb-4">
      <div class="row">
        <h3 class="fs-20 fw-600">Lampiran</h3>
      </div>
      <div class="row mb-4">
        <div class="col-6 col-md-2 p-3">
          <img src="{{ asset('assets/image/icon/landing-page/atom.png') }}" alt="" class="shadow rounded attachment-tumbnail rounded">
          <label class="fs-16 fw-500 mt-2">Blueprint.png</label>
        </div>
        <div class="col-6 col-md-2 p-3">
          <img src="{{ asset('assets/image/tumbnail/asd.jpg') }}" alt="" class="shadow rounded attachment-tumbnail rounded">
          <label class="fs-16 fw-500 mt-2">Grand Plan.jpg</label>
        </div>
        <div class="col-6 col-md-2 p-3">
          <img src="{{ asset('assets/image/icon/landing-page/led-lamp.png') }}" alt="" class="shadow rounded attachment-tumbnail rounded">
          <label class="fs-16 fw-500 mt-2">Bonus.pdf</label>
        </div>
      </div>
    </div>
  </div>

  {{-- <script>
    function toggleContent(contentId, toggleShowId, toggleHideId) {
      const content = document.getElementById(contentId);
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
  </script> --}}

  {{-- <script>
    function hideContent1(){
      document.getElementById('content1').classList.add('d-none');
      document.getElementById('toggleShow1').classList.remove('d-none');
      document.getElementById('toggleHide1').classList.add('d-none');
    }
    function showContent1(){
      document.getElementById('content1').classList.remove('d-none');
      document.getElementById('toggleShow1').classList.add('d-none');
      document.getElementById('toggleHide1').classList.remove('d-none');
    }
    function hideContent2(){
      document.getElementById('content2').classList.add('d-none');
      document.getElementById('toggleShow2').classList.remove('d-none');
      document.getElementById('toggleHide2').classList.add('d-none');
    }
    function showContent2(){
      document.getElementById('content2').classList.remove('d-none');
      document.getElementById('toggleShow2').classList.add('d-none');
      document.getElementById('toggleHide2').classList.remove('d-none');
    }
    function hideContent3(){
      document.getElementById('content3').classList.add('d-none');
      document.getElementById('toggleShow3').classList.remove('d-none');
      document.getElementById('toggleHide3').classList.add('d-none');
    }
    function showContent3(){
      document.getElementById('content3').classList.remove('d-none');
      document.getElementById('toggleShow3').classList.add('d-none');
      document.getElementById('toggleHide3').classList.remove('d-none');
    }
  </script> --}}

  
  <script>
    window.onload = function() {
      showContent('content1', 'toggleShow1', 'toggleHide1');
      showContent('content2', 'toggleShow2', 'toggleHide2');
      showContent('content3', 'toggleShow3', 'toggleHide3');
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