@extends('layouts.admin')
@section('content')
  
  <script type="text/javascript">
    document.getElementById('nav-innvation').classList.add('active');
  </script>

  
  <div class="min-vh-100 mb-3">
    <div class="container detail px-5 py-2 rounded shadow bg-white">
      <div class="d-flex justify-content-between my-3">
        <a href="/admin/innovation" class="text-decoration-none font-weight-bold d-flex align-items-center">
          <i class="fas fa-fw fa-angle-left"></i>&nbsp;Kembali
        </a>
        <div class="dropdown">
          <div class="dropdown-toggle text-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
          </div>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/admin/innovation/{{ $innovation->id }}/transfer-to-idea" onclick="moveIdea(event)">Kembalikan ke Ide</a>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-12 d-md-none">
          <div class="tumbnail-desktop">
            <img src="{{ asset('assets/image/tumbnail/iot.jpg') }}" alt="">
          </div>
        </div>
        <div class="col-12 col-md-9">
          <h2 class="d-none d-md-block font-weight-bold text-overflow-hidden" data-mdb-toggle="popover" title="{{ $innovation->title }}">{{ $innovation->title }}</h2>
          <h2 class="d-md-none font-weight-bold">{{ $innovation->title }}</h2>
          {{-- max 650 character abstraksi --}}
          <p class="abstraction fs-16 fw-400 lh-24">{{ $innovation->abstract }}</p>
          <h5 class="font-weight-bold m-0">Oleh:</h5>
          <div class="d-flex">
            @php
              $team = $innovation->team;
              $teamArray = explode(', ', $team);
            @endphp
            <label class="fs-16 fw-400">
              <strong class="font-weight-bold">{{ $teamArray[0] }},</strong>
              @for ($i = 1; $i < count($teamArray); $i++)
                {{ $teamArray[$i] }}
                @if ($i < count($teamArray) - 1)
                    ,
                @endif
              @endfor
            </label>
          </div>
        </div>
        <div class="col-12 col-md-3 d-none d-md-block">
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
              <h4 class="fs-28 font-weight-bold m-0">Latar Belakang</h4>
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
              <p class="fs-16 fw-400 lh-24 mt-3 mb-0">{{ $innovation->background }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-12">
          <div class="shadow rounded p-3">
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="fs-28 font-weight-bold m-0">Isi</h4>
              <div id="toggleHide2" onclick="toggleContent('content2', 'toggleShow2', 'toggleHide2')" class="toggle">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
              </div>
              <div id="toggleShow2" onclick="toggleContent('content2', 'toggleShow2', 'toggleHide2')" class="toggle d-none">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
              </div>
            </div>
            <div id="content2" class="transition-height">
              <p class="fs-16 fw-400 lh-24 mb-0 mt-3">{{ $innovation->content }}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mb-4">
        <div class="col-12">
          <div class="shadow rounded p-3">
            <div class="d-flex justify-content-between align-items-center">
              <h4 class="fs-28 font-weight-bold m-0">Solusi</h4>
              <div id="toggleHide3" onclick="toggleContent('content3', 'toggleShow3', 'toggleHide3')" class="toggle">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
              </div>
              <div id="toggleShow3" onclick="toggleContent('content3', 'toggleShow3', 'toggleHide3')" class="toggle d-none">
                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
              </div>
            </div>
            <div id="content3" class="transition-height">
              <p class="fs-16 fw-400 lh-24 mb-0 mt-3">{{ $innovation->solution }}</p>
            </div>
          </div>
        </div>
      </div>
      <hr class="dashed mb-4">
      <div class="row">
        <h4 class="fs-20 font-weight-bold">Lampiran</h4>
      </div>
      <div class="row mb-4">
        @foreach ($innovation->attachment as $item)
          <div class="col-6 col-md-2 p-3">
            <img src="{{ asset('assets/image/icon/landing-page/atom.png') }}" alt="" class="shadow rounded attachment-tumbnail rounded">
            <label class="fs-16 fw-500 mt-2">{{ $item }}</label>
          </div>
        @endforeach
      </div>
      <hr class="mb-4">
      <div class="comment mb-4">
        <h4 class=" font-weight-bold mt-0 mb-4">Komentar</h4>
        <form action="" class="d-flex align-items-center">
          <img class="profil rounded" src="{{ asset('assets/image/tumbnail/default_ava.png') }}" alt="">
          <input type="text" class="input_comment">
          <button type="submit" class="btn btn-sm btn-outline-secondary ml-2">Kirim</button>
        </form>
        <hr class="dashed my-4">
        <ul>
          <li>
            <div class="d-flex">
              <img class="profil rounded" src="{{ asset('assets/image/tumbnail/default_ava.png') }}" alt="">
              <div class="comment-container rounded p-3">
                <div class="diamond"></div>
                <div class="comment-content mx-2">
                  <h5 class="fs-20 font-weight-bold">Musavi Ardabilly</h5>
                  <p class="fs-16 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
                </div>
              </div>
            </div>
            <ul class="reply">
              <li>
                <div class="d-flex">
                  <img class="profil rounded" src="{{ asset('assets/image/tumbnail/default_ava.png') }}" alt="">
                  <div class="comment-container rounded p-3">
                    <div class="diamond"></div>
                    <div class="comment-content mx-2">
                      <h5 class="fs-20 font-weight-bold">John Doe</h5>
                      <p class="fs-16 mb-0">Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="d-flex">
                  <img class="profil rounded" src="{{ asset('assets/image/tumbnail/default_ava.png') }}" alt="">
                  <div class="comment-container rounded p-3">
                    <div class="diamond"></div>
                    <div class="comment-content mx-2">
                      <h5 class="fs-20 font-weight-bold">Alexander Grahambel</h5>
                      <p class="fs-16 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>

    </div>
  </div>
  
  <script>
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
  
  <script>
    function moveIdea(event) {
      event.preventDefault();
      var redirectTo = event.currentTarget.getAttribute('href');  
      window.Swal.fire({
        title: 'Ubah inovasi menjadi ide',
        text: 'Apakah anda ingin mengubah inovasi ini kembali menjadi ide?',
        icon: 'question',
        reverseButtons: true,
        showCancelButton: true,
        cancelButtonText: 'Batal',
        confirmButtonText: 'Ya'
      }).then(function(result) {
        if (result.isConfirmed) {
          location.assign(redirectTo);
        }
      });
    }
  </script>

@endsection