@extends('layouts.admin')
@section('content')
  
  <script type="text/javascript">
    document.getElementById('nav-innovation').classList.add('active');
  </script>

  
<div class="min-vh-100 mb-3">
  <div class="detail px-5 py-2 rounded shadow bg-white">
    
    <div class="card w-100 text-center px-3 py-3 hidden_idea_form mt-3 border-0 shadow bounce-in" style="display: none;">
      <h3 class="mx-auto fw-600 mb-4">Edit Data</h3>
      <form id="ideabox-submit">
        <!-- image upload -->
        @csrf
        <div class="row input_item">
          <p class="col-3">Thumbnail</p>
          <div class="col-9 uploader">
            <div class="d-flex">
              <img height="156px" class="mr-3" src="{{ asset('storage/' . $idea->thumbnail) }}" alt="">
              <input id="file-upload" type="file" name="thumbnail" accept="image/*" style="display:none" />
              <label for="file-upload" id="file-drag">
                <img id="file-image" src="#" alt="Preview" class="hidden">
                <div id="start">
                  <i class="bi bi-download" aria-hidden="true"></i>
                  <div>Select a file or drag here</div>
                  <div id="notimage" class="hidden">Please select an image</div>
                  <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                </div>
                <div id="response" class="hidden">
                  <div id="messages"></div>
                </div>
              </label>
            </div>
          </div>
        </div>
        <div class="row input_item">
          <p class="col-3">Judul/Topik</p>
          <div class="col-9">
            <div id="quillEditorJudul" class="quillCustom shadow border-0 radius-3">
            </div>
          </div>
        </div>
        {{-- <div class="row input_item">
          <p class="col-3">Abstrak</p>
          <div class="col-9">
            <div id="quillEditorAbstrak" class="quillCustom shadow border-0 radius-3">
            </div>
          </div>
        </div> --}}
        <div class="row input_item">
          <p class="col-3">Latar Belakang</p>
          <div class="col-9">
            <div id="quillEditorLatarBelakang" class="quillCustom shadow border-0 radius-3">
            </div>
          </div>
        </div>
        <div class="row input_item">
          <p class="col-3">Isi</p>
          <div class="col-9">
            <div id="quillEditorIsi" class="quillCustom shadow border-0 radius-3">
            </div>
          </div>
        </div>
        <div class="row input_item">
          <p class="col-3">Usulan</p>
          <div class="col-9">
            <div id="quillEditorSolusi" class="quillCustom shadow border-0 radius-3">
            </div>
          </div>
        </div>
      </form>
      <!-- chips input -->
      <div class="row input_item">
        <p class="col-3">Team</p>
        <div class="col-9">
          <div class="container_chips_input">
            <ul id="list_chips"></ul>
            <input class="border border-primary rounded" type="text" id="txt_chips" placeholder="Ketik dan tekan enter ...">
          </div>
        </div>
      </div>
      <!-- attachment -->
      {{-- <div class="row input_item">
        <p class="col-3">Lampiran</p>
        <div class="col-9 d-flex justify-content-center">
          <p class="d-flex">
            <label for="attachment">
              <a class="btn btn-primary text-light shadow" role="button" aria-disabled="false">+ Tambah</a>
            </label>
            <input type="file" name="file[]" accept=".jpg, .jpeg, .png, .pdf, .ppt, .pptx" id="attachment" style="visibility: hidden; position: absolute;"
              multiple />
          </p>
          <p id="files-area">
            <span id="filesList">
              <span id="files-names"></span>
            </span>
          </p>
        </div>
      </div> --}}
      <div class="d-flex ml-auto w-0" style="width: fit-content;">
        <button type="submit" class="btn btn-primary mr-3" onclick="onSubmit({{ $idea->id }})">Simpan</button>
        <button type="button" class="btn btn-danger" onclick="show(this)">Batal</button>
      </div>
    </div>

    <div class="d-flex justify-content-between my-3">
      <a href="/admin/idea" class="text-decoration-none font-weight-bold d-flex align-items-center">
        <i class="fas fa-fw fa-angle-left"></i>&nbsp;Kembali
      </a>
      <div class="dropdown">
        <div class="dropdown-toggle text-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
        </div>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
          <div class="dropdown-item cursor-pointer" onclick="show(this)">Ubah Data</div>
        </div>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-12 d-md-none">
        <div class="tumbnail-desktop">
          <img src="{{ asset('storage/' . $idea->thumbnail) }}" alt="">
        </div>
      </div>
      <div class="col-12 col-md-9 d-flex flex-column justify-content-between">
        <div>
          <h2 class="d-none d-md-block font-weight-bold" data-mdb-toggle="popover" title="{{ strip_tags($idea->title) }}">{!! $idea->title !!}</h2>
          <h2 class="d-md-none font-weight-bold">{!! $idea->title !!}</h2>
          {{-- max 500 character abstraksi --}}
          {{-- <p class="abstraction fs-16 fw-400 lh-24">{!! $idea->abstract !!}</p> --}}
          {{-- <hr> --}}
        </div>
        <div>
          <h5 class="font-weight-bold m-0">Oleh:</h5>
          <div class="d-flex">
            @php
              $team = $idea->team;
              $teamArray = explode(', ', $team);
            @endphp
            <label class="fs-16 fw-400">
              <strong class="font-weight-bold">{{ $teamArray[0] }}</strong>@if (count($teamArray) > 1),@endif
              @for ($i = 1; $i < count($teamArray); $i++)
                {{ $teamArray[$i] }}
                @if ($i < count($teamArray) - 1)
                    ,
                @endif
              @endfor
            </label>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3 d-none d-md-block">
        <div class="d-flex justify-content-end h-100 align-items-center">
          <div class="tumbnail">
            <img src="{{ asset('storage/' . $idea->thumbnail) }}" alt="">
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
            <hr>
            <p class="fs-16 fw-400 lh-24 mt-3 mb-0">{!! $idea->background !!}</p>
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
            <hr>
            <p class="fs-16 fw-400 lh-24 mb-0 mt-3">{!! $idea->content !!}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col-12">
        <div class="shadow rounded p-3">
          <div class="d-flex justify-content-between align-items-center">
            <h2 class="fs-28 fw-600 m-0">Usulan</h2>
            <div id="toggleHide3" onclick="toggleContent('content3', 'toggleShow3', 'toggleHide3')" class="toggle">
              <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
            </div>
            <div id="toggleShow3" onclick="toggleContent('content3', 'toggleShow3', 'toggleHide3')" class="toggle d-none">
              <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
            </div>
          </div>
          <div id="content3" class="transition-height">
            <hr>
            <p class="fs-16 fw-400 lh-24 mb-0 mt-3">{!! $idea->solution !!}</p>
          </div>
        </div>
      </div>
    </div>
    <hr class="dashed mb-4">
    <div class="row">
      <h3 class="fs-20 fw-600">Lampiran</h3>
    </div>
    <div class="row mb-4">
      @foreach ($idea->attachment as $item)
        @php
          $filePath = $item; 
          $fileInfo = pathinfo($filePath);
          $fileExtension = $fileInfo['extension'];
        @endphp
        <div class="col-6 col-md-2 p-3 attachment">
          @if (in_array($fileExtension, ['png', 'jpg', 'jpeg']))
          <div class="position-relative shadow rounded attachment-tumbnail rounded">
            <img class="position-absolute relative-center attachment-image" src="{{ asset('storage/' . $item) }}" alt="">
            <a href="{{ url('download/'.$item) }}" class="position-absolute relative-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="36px"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
            </a>
          </div>
          @elseif ($fileExtension == 'pdf')
          <div class="position-relative shadow rounded attachment-tumbnail rounded">
            <img class="position-absolute relative-center" src="{{ asset('assets/image/icon/pdf-icon.png') }}" alt="" height="100px">
            <a href="{{ url('download/'.$item) }}" class="position-absolute relative-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="36px"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
            </a>
          </div>
          @elseif (in_array($fileExtension, ['ppt', 'pptx']))
          <div class="position-relative shadow rounded attachment-tumbnail rounded">
            <img class="position-absolute relative-center" src="{{ asset('assets/image/icon/ppt-icon.png') }}" alt="" height="100px">
            <a href="{{ url('download/'.$item) }}" class="position-absolute relative-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="36px"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#ffffff" d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/></svg>
            </a>
          </div>
          @endif
          <label class="fs-14 fw-500 mt-2 two-rows-text">{{ str_replace('attachments/', '', $item) }}</label>
        </div>
      @endforeach
    </div>
    <hr class="mb-4">
    <div class="comment mb-4">
      <label class="fs-20 fw-600 mt-0 mb-2">Komentar <label class="fs-16 fw-400">sebagai: {{ Auth::user()->name }}</label></label>
      <form action="/idea/{{ $idea->id }}/comment/post" method="POST" class="d-flex align-items-center">
        @csrf
        <img class="profil rounded" src="{{ asset('assets/image/tumbnail/default_ava.png') }}" alt="">
        <input type="text" name="content" class="input_comment">
        <button type="submit" class="btn btn-sm btn-outline-secondary ms-2">Kirim</button>
      </form>
      <hr class="dashed my-4">
      <ul>
        @forelse ($comments as $comment)
          @if (!$comment->parent_id)
            <li>
              <div class="d-flex">
                <img class="profil rounded" src="{{ asset('assets/image/tumbnail/default_ava.png') }}" alt="">
                <div class="comment-container rounded p-3">
                  <div class="diamond"></div>
                  <div class="comment-content mx-2 pt-1">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                      <h2 class="fs-16 fw-600 m-0">{{ $comment->user->name }}</h2>
                      <div class="fs-14 ms-5 cursor-pointer" onclick="showComment({{ $comment->user->id }}, {{ $idea->id }}, {{ $comment->id }})">
                        <div class="ml-5">
                          <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#858796" d="M205 34.8c11.5 5.1 19 16.6 19 29.2v64H336c97.2 0 176 78.8 176 176c0 113.3-81.5 163.9-100.2 174.1c-2.5 1.4-5.3 1.9-8.1 1.9c-10.9 0-19.7-8.9-19.7-19.7c0-7.5 4.3-14.4 9.8-19.5c9.4-8.8 22.2-26.4 22.2-56.7c0-53-43-96-96-96H224v64c0 12.6-7.4 24.1-19 29.2s-25 3-34.4-5.4l-160-144C3.9 225.7 0 217.1 0 208s3.9-17.7 10.6-23.8l160-144c9.4-8.5 22.9-10.6 34.4-5.4z"/></svg>
                          Balas
                        </div>
                      </div>
                    </div>
                    <p class="fs-14 mb-0">{{ $comment->content }}</p>
                  </div>
                </div>
              </div>
              <ul id="replyComment" class="reply">
                @foreach ($comments as $reply)
                  @if ($reply->parent_id == $comment->id)
                  <li>
                    <div class="d-flex">
                      <img class="profil rounded" src="{{ asset('assets/image/tumbnail/default_ava.png') }}" alt="">
                      <div class="comment-container rounded p-3">
                        <div class="diamond"></div>
                        <div class="comment-content mx-2 pt-1">
                          <div class="d-flex justify-content-between align-items-center">
                            <h2 class="fs-16 fw-600 m-0">{{ $reply->user->name }}</h2>
                            <a href="/admin/idea/{{ $idea->id }}/comment/{{ $reply->id }}/delete" class="ml-5 cursor-pointer" onclick="deleteComment(event, '{{ $comment->user->name }}')">
                              <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#e74a3b" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                            </a>
                          </div>
                          <p class="fs-14 mb-0">{{ $reply->content }}</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  @endif
                @endforeach
              </ul>
            </li>
          @endif
        @empty
          <div class="alert alert-light w-100 text-center" role="alert">
            Belum ada komentar
          </div>
        @endforelse
      </ul>
    </div>
  </div>
</div>

<script>
  // all data form
  var items = [];
  var imageUpload;
  var attachment;

  // AOS.init();
  function show() {
    var paragraph = document.querySelector(".hidden_idea_form");
    if (paragraph.style.display == "none") {
      paragraph.style.display = "block";
    } else {
      paragraph.style.display = "none";
    }
  }

  // Function to apply styles to Quill editor
  function applyStyles(quillInstance, text, styles) {
    // Your logic to convert styles from the database to inline styles
    var inlineStyles = ''; // Modify this based on your actual styles

    // Use Quill's API to insert formatted text
    quillInstance.clipboard.dangerouslyPasteHTML(0, `<span style="${inlineStyles}">${text}</span>`);
  }

  // Initialize Quill editors
  var quillEditorJudul = new Quill('#quillEditorJudul', {
    theme: 'snow'
  });
  applyStyles(quillEditorJudul, "{!! $idea->title !!}", /* Styles from your database */);

  var quillEditorLatarBelakang = new Quill('#quillEditorLatarBelakang', {
    theme: 'snow'
  });
  applyStyles(quillEditorLatarBelakang, "{!! $idea->background !!}", /* Styles from your database */);

  var quillEditorIsi = new Quill('#quillEditorIsi', {
    theme: 'snow'
  });
  applyStyles(quillEditorIsi, "{!! $idea->content !!}", /* Styles from your database */);

  var quillEditorSolusi = new Quill('#quillEditorSolusi', {
    theme: 'snow'
  });
  applyStyles(quillEditorSolusi, "{!! $idea->solution !!}", /* Styles from your database */);

  // chips input
  var txt = document.getElementById('txt_chips');
  var list = document.getElementById('list_chips');
  var items = {!! json_encode(explode(',', $idea->team)) !!} || [];

  txt.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
      let val = txt.value;
      if (val !== '') {
        if (items.indexOf(val) >= 0) {
          alert('Tag name is a duplicate');
        } else {
          items.push(val);
          render();
          txt.value = '';
          txt.focus();
        }
      } else {
        alert('Please type a tag Name');
      }
    }
  });

  function render() {
    list.innerHTML = '';
    items.map((item, index) => {
      list.innerHTML += `<li><span>${item}</span><a href="javascript: remove(${index})">X</a></li>`;
    });
  }

  function remove(i) {
    items = items.filter(item => items.indexOf(item) != i);
    render();
  }

  window.onload = function () {
    render();
    txt.focus();
  }

  // dropzone image upload
  function ekUpload() {
    function Init() {
      var fileSelect = document.getElementById('file-upload'),
        fileDrag = document.getElementById('file-drag'),
        submitButton = document.getElementById('submit-button');

      fileSelect.addEventListener('change', fileSelectHandler, false);

      // Is XHR2 available?
      var xhr = new XMLHttpRequest();
      if (xhr.upload) {
        // File Drop
        fileDrag.addEventListener('dragover', fileDragHover, false);
        fileDrag.addEventListener('dragleave', fileDragHover, false);
        fileDrag.addEventListener('drop', fileSelectHandler, false);
      }
    }

    function fileDragHover(e) {
      var fileDrag = document.getElementById('file-drag');

      e.stopPropagation();
      e.preventDefault();

      fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
    }

    function fileSelectHandler(e) {
      // Fetch FileList object
      var files = e.target.files || e.dataTransfer.files;

      // Cancel event and hover styling
      fileDragHover(e);

      // Process all File objects
      for (var i = 0, f; f = files[i]; i++) {
        parseFile(f);
      }
    }

    // Output
    function output(msg) {
      // Response
      var m = document.getElementById('messages');
      m.innerHTML = msg;
    }

    function parseFile(file) {

      console.log(file.name);
      output(
        '<strong>' + encodeURI(file.name) + '</strong>'
      );

      // var fileType = file.type;
      // console.log(fileType);
      var imageName = file.name;
      imageUpload = file
      var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
      if (isGood) {
        document.getElementById('start').classList.add("hidden");
        document.getElementById('response').classList.remove("hidden");
        document.getElementById('notimage').classList.add("hidden");
        // Thumbnail Preview
        document.getElementById('file-image').classList.remove("hidden");
        document.getElementById('file-image').src = URL.createObjectURL(file);
      }
      else {
        document.getElementById('file-image').classList.add("hidden");
        document.getElementById('notimage').classList.remove("hidden");
        document.getElementById('start').classList.remove("hidden");
        document.getElementById('response').classList.add("hidden");
      }
    }

    function setProgressMaxValue(e) {
      var pBar = document.getElementById('file-progress');

      if (e.lengthComputable) {
        pBar.max = e.total;
      }
    }

    function updateFileProgress(e) {
      var pBar = document.getElementById('file-progress');

      if (e.lengthComputable) {
        pBar.value = e.loaded;
      }
    }
    // Check for the various File API support.
    if (window.File && window.FileList && window.FileReader) {
      Init();
    } else {
      document.getElementById('file-drag').style.display = 'none';
    }
  }
  ekUpload();

  // attachment
  const dt = new DataTransfer();
  attachment = dt

  $("#attachment").on('change', function (e) {
    for (var i = 0; i < this.files.length; i++) {
      let fileBloc = $('<span/>', { class: 'file-block' }),
        fileName = $('<span/>', { class: 'name', text: this.files.item(i).name });
      fileBloc.append('<span class="file-delete"><span>+</span></span>')
        .append(fileName);
      $("#filesList > #files-names").append(fileBloc);
    };

    for (let file of this.files) {
      dt.items.add(file);
    }

    this.files = dt.files;

    $('span.file-delete').click(function () {
      let name = $(this).next('span.name').text();

      $(this).parent().remove();
      for (let i = 0; i < dt.items.length; i++) {

        if (name === dt.items[i].getAsFile().name) {

          dt.items.remove(i);
          continue;
        }
      }
      document.getElementById('attachment').files = dt.files;
    });
  });

   // submit form
   function onSubmit(id) {
    const valueIdea = {
      title: quillEditorJudul.root.innerHTML,
      // abstract: quillEditorAbstrak.root.innerHTML,
      background: quillEditorLatarBelakang.root.innerHTML,
      content: quillEditorIsi.root.innerHTML,
      solution: quillEditorSolusi.root.innerHTML,
      team: items.join(', ')
    }

    var formData = new FormData();
    formData.append('title', valueIdea.title);
    // formData.append('abstract', valueIdea.abstract);
    formData.append('background', valueIdea.background);
    formData.append('content', valueIdea.content);
    formData.append('solution', valueIdea.solution);
    formData.append('team', valueIdea.team);
    
    // Append the file(s) to the FormData object
    for (let file of attachment.files) {
      formData.append('attachment[]', file);
    }
    formData.append('thumbnail', imageUpload);

    $.ajax({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      type: 'POST',
      url: `/idea-edit/${id}`,
      data: formData,
      contentType: false,
      processData: false,
      success: function (response) {
        console.log('Data successfully stored');
        show(); // hide
        setTimeout(function() {
          window.Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Data berhasil disimpan',
            timer: 3000,
            showConfirmButton: false,
          });
        }, 500);
        location.reload();
      },
      error: function (error) {
        console.log(error);
      }
    });
  }

</script>

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
  async function showComment(userId, ideaId, parentId) {
    const { value: reply } = await window.Swal.fire({
      title: `Balas komentar`,
      input: "textarea",
      reverseButtons: true,
      showCancelButton: true,
      cancelButtonText: 'Tutup',
      confirmButtonText: 'Kirim',
      inputValidator: (value) => {
        if (!value) {
          return "Komentar tidak boleh kosong";
        }
      }
    });

    if(reply){
      console.log('submited')
      console.log(reply);
      var formData = new FormData();
      formData.append('_token', '{{ csrf_token() }}'); 
      formData.append('user_id', userId);
      formData.append('idea_id', ideaId);
      formData.append('parent_id', parentId);
      formData.append('content', reply);

      $.ajax({
        type: 'POST',
        // headers: {
        //   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        // },
        url: `/idea/${ideaId}/comment/post`,
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
          window.Swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Balasan komentar berhasil disimpan',
            timer: 5000,
            showConfirmButton: false,
          });
          location.reload();
        },
        error: function(error) {
          window.Swal.fire({
            icon: 'error',
            title: 'Gagal',
            text: 'Gagal menyimpan balasan komentar',
            timer: 5000,
            showConfirmButton: false,
          });
          console.log(error);
        }
      });
    }
  }
</script>

@endsection