@extends('layouts.admin')
@section('content')
  
  <script type="text/javascript">
    document.getElementById('nav-innovation').classList.add('active');
  </script>

  
<div class="min-vh-100 mb-3">
  <div class="detail px-5 py-2 rounded shadow bg-white">

    <div class="d-flex justify-content-between my-3">
      <a href="/admin/idea" class="text-decoration-none font-weight-bold d-flex align-items-center">
        <i class="fas fa-fw fa-angle-left"></i>&nbsp;Kembali
      </a>
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
            <img class="rounded" src="{{ asset('storage/' . $idea->thumbnail) }}" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 p-0">
        <div class="body">
          <div class="cd-horizontal-timeline loaded">
            <div class="timeline shadow rounded-4 bg-light">
              <div class="events-wrapper">
                <div class="events mt-3">
                  <ol>
                    <li><a href="#0" data-date="01/01/2024" class="fs-20 fw-600 text-decoration-none">{!! $flow_position[0]->name !!}</a></li>
                    <li><a href="#0" data-date="08/01/2024" class="fs-20 fw-600 text-decoration-none {{ $idea->flow_position === 2 ? 'selected' : '' }}">{!! $flow_position[1]->name !!}</a></li>
                    <li><a href="#0" data-date="16/01/2024" class="fs-20 fw-600 text-decoration-none {{ $idea->flow_position === 3 ? 'selected' : '' }}">{!! $flow_position[2]->name !!}</a></li>
                    <li><a href="#0" data-date="24/01/2024" class="fs-20 fw-600 text-decoration-none {{ $idea->flow_position === 4 ? 'selected' : '' }}">{!! $flow_position[3]->name !!}</a></li>
                    <li><a href="#0" data-date="31/01/2024" class="fs-20 fw-600 text-decoration-none {{ $idea->flow_position === 5 ? 'selected' : '' }}">{!! $flow_position[4]->name !!}</a></li>
                  </ol>
                  <span class="filling-line" aria-hidden="true" style="transform: scaleX(0.281506);"></span>
                </div>
                <!-- .events -->
                <ul class="cd-timeline-navigation d-block d-md-none">
                  <li><a href="#0" class="prev inactive">Prev</a></li>
                  <li><a href="#0" class="next">Next</a></li>
                </ul>
              </div>
              
            </div>
            
            <!-- .timeline -->
            <div class="events-content">
              <ol class="m-0 p-0">
                <li class="" data-date="01/01/2024">
                  <div class="row my-4">
                    <div class="col-12">
                      <div class="shadow rounded p-3">
                        <div class="d-flex justify-content-between align-items-center">
                          <h2 class="fs-28 fw-600 m-0">Latar Belakang Masalah</h2>
                          <div id="toggleHide1" onclick="toggleContent('content1', 'toggleShow1', 'toggleHide1')" class="toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
                          </div>
                          <div id="toggleShow1" onclick="toggleContent('content1', 'toggleShow1', 'toggleHide1')" class="toggle d-none">
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
                          <h2 class="fs-28 fw-600 m-0">Tujuan</h2>
                          <div id="toggleHide2" onclick="toggleContent('content2', 'toggleShow2', 'toggleHide2')" class="toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
                          </div>
                          <div id="toggleShow2" onclick="toggleContent('content2', 'toggleShow2', 'toggleHide2')" class="toggle d-none">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                          </div>
                        </div>
                        <div id="content2" class="transition-height">
                          <hr>
                          <p class="fs-16 fw-400 lh-24 mb-0 mt-3">{!! $idea->purpose !!}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-12">
                      <div class="shadow rounded p-3">
                        <div class="d-flex justify-content-between align-items-center">
                          <h2 class="fs-28 fw-600 m-0">Usulan Solusi</h2>
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
                </li>
                <li data-date="08/01/2024" class="{{ $idea->flow_position === 2 ? 'selected' : '' }}">
                  <div class="d-flex justify-content-center my-4">
                    <div class="shadow rounded p-3 px-md-5">
                      <p class="fs-20 fw-600">Download template dokumen berikut dan isi sesuai dengan petunjuk dan upload</p>
                      <a href="{{ asset('assets/document/Template_file_1.pdf') }}" download><button class="btn btn-outline-primary">Dokumen 1</button></a>
                      <a href="{{ asset('assets/document/Template_file_2.pdf') }}" download><button class="btn btn-outline-primary">Dokumen 2</button></a>
                      <hr>
                      <p class="fs-20 fw-600">Upload Dokumen</p>
                      <form action="/user/upload-attachment/position-2/{{ $idea->id }}" method="POST" enctype="multipart/form-data" class="mb-4">
                        @csrf
                        <div class="row mb-3">
                          <div class="col-12">
                            <div class="form-group">
                              <input type="file" name="attachment[]" multiple class="form-control-file" id="exampleFormControlFile1" accept=".pdf, .ppt, .pptx, .jpg, .jpeg, .png">
                              <small id="uploadHelp" class="form-text text-muted d-block">Harap upload file dengan ekstensi .pdf, .ppt, .pptx, .jpg, .jpeg, .png</small>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-end">
                          <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                      </form>
                      <hr>
                      <p class="fs-20 fw-600">Dokumen</p>
                      <div class="row">
                        @forelse ($idea->attachment_flow_position_2 as $item)
                          @php
                            $filePath = $item; 
                            $fileInfo = pathinfo($filePath);
                            $fileExtension = $fileInfo['extension'];
                          @endphp
                          <div class="col-6 col-md-4 px-3 py-0 attachment">
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
                            <label class="fs-14 fw-500 mt-2 two-rows-text">{{ str_replace('attachments_position_2/'.$idea->user_id.'_'.$idea->id.'_', '', $item) }}</label>
                          </div>
                        @empty
                        <div class="col mt-n3">
                          <small class="form-text text-muted d-block">Belum ada dokumen</small>
                        </div>
                        @endforelse
                      </div>
                    </div>
                  </div>
                </li>
                <li data-date="16/01/2024" class="{{ $idea->flow_position === 3 ? 'selected' : '' }}">
                  <div class="d-flex justify-content-center my-4">
                    <div class="shadow rounded p-3 px-md-5">
                      <p class="fs-20 fw-600">Download template dokumen berikut dan isi sesuai dengan petunjuk dan upload</p>
                      <a href="{{ asset('assets/document/Template_file_3.pdf') }}" download><button class="btn btn-outline-primary">Dokumen 1</button></a>
                      <a href="{{ asset('assets/document/Template_file_4.pdf') }}" download><button class="btn btn-outline-primary">Dokumen 2</button></a>
                      <hr>
                      <p class="fs-20 fw-600">Upload Dokumen</p>
                      <form action="/user/upload-attachment/position-3/{{ $idea->id }}" method="POST" enctype="multipart/form-data" class="mb-4">
                        @csrf
                        <div class="row mb-3">
                          <div class="col-12">
                            <div class="form-group">
                              <input type="file" name="attachment[]" multiple class="form-control-file" id="exampleFormControlFile1" accept=".pdf, .ppt, .pptx, .jpg, .jpeg, .png">
                              <small id="uploadHelp" class="form-text text-muted d-block">Harap upload file dengan ekstensi .pdf, .ppt, .pptx, .jpg, .jpeg, .png</small>
                            </div>
                          </div>
                        </div>
                        <div class="d-flex justify-content-end">
                          <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                      </form>
                      <hr>
                      <p class="fs-20 fw-600">Dokumen</p>
                      <div class="row">
                        @forelse ($idea->attachment_flow_position_3 as $item)
                          @php
                            $filePath = $item; 
                            $fileInfo = pathinfo($filePath);
                            $fileExtension = $fileInfo['extension'];
                          @endphp
                          <div class="col-6 col-md-4 px-3 py-0 attachment">
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
                            <label class="fs-14 fw-500 mt-2 two-rows-text">{{ str_replace('attachments_position_3/'.$idea->user_id.'_'.$idea->id.'_', '', $item) }}</label>
                          </div>
                        @empty
                        <div class="col mt-n3">
                          <small class="form-text text-muted d-block">Belum ada dokumen</small>
                        </div>
                        @endforelse
                    </div>
                  </div>
                </li>
                <li data-date="24/01/2024" class="{{ $idea->flow_position === 4 ? 'selected' : '' }}">
                  <div class="row my-4">
                    <div class="col-12">
                      <div class="shadow rounded p-3">
                        <div class="d-flex justify-content-between align-items-center">
                          <h2 class="fs-28 fw-600 m-0">Latar Belakang Masalah</h2>
                          <div id="toggleHide4" onclick="toggleContent('content4', 'toggleShow4', 'toggleHide4')" class="toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
                          </div>
                          <div id="toggleShow4" onclick="toggleContent('content4', 'toggleShow4', 'toggleHide4')" class="toggle d-none">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                          </div>
                        </div>
                        <div id="content4" class="transition-height">
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
                          <h2 class="fs-28 fw-600 m-0">Tujuan</h2>
                          <div id="toggleHide5" onclick="toggleContent('content5', 'toggleShow5', 'toggleHide5')" class="toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
                          </div>
                          <div id="toggleShow5" onclick="toggleContent('content5', 'toggleShow5', 'toggleHide5')" class="toggle d-none">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                          </div>
                        </div>
                        <div id="content5" class="transition-height">
                          <hr>
                          <p class="fs-16 fw-400 lh-24 mb-0 mt-3">{!! $idea->purpose !!}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-12">
                      <div class="shadow rounded p-3">
                        <div class="d-flex justify-content-between align-items-center">
                          <h2 class="fs-28 fw-600 m-0">Usulan Solusi</h2>
                          <div id="toggleHide6" onclick="toggleContent('content6', 'toggleShow6', 'toggleHide6')" class="toggle">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
                          </div>
                          <div id="toggleShow6" onclick="toggleContent('content6', 'toggleShow6', 'toggleHide6')" class="toggle d-none">
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
                          </div>
                        </div>
                        <div id="content6" class="transition-height">
                          <hr>
                          <p class="fs-16 fw-400 lh-24 mb-0 mt-3">{!! $idea->solution !!}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-12">
                      <div class="shadow rounded p-3 px-md-5">
                        <p class="fs-20 fw-600">{{ $flow_position[3]->name }}</p>
                        <p class="fs-16">{{ $idea->evaluation == null ? 'Belum ada evaluasi' : $idea->evaluation }}</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li data-date="31/01/2024" class="{{ $idea->flow_position === 5 ? 'selected' : '' }}">
                  <div class="d-flex justify-content-center my-4 px-3 px-md-5">
                    <div class="w-100 shadow rounded p-3 px-md-5">
                      <p class="fs-20 fw-600">{{ $flow_position[4]->name }}</p>
                      <p class="fs-16">{{ $idea->result == null ? 'Belum ada penilaian' : $idea->result }}</p>
                    </div>
                  </div>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="dashed mb-4 mt-0">
    <div class="row">
      <div class="col-12">
        <h3 class="fs-20 fw-600">Lampiran</h3>
      </div>
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
          <label class="fs-14 fw-500 mt-2 two-rows-text">{{ str_replace('attachments/'.Auth::user()->id.'_'.$idea->id.'_', '', $item) }}</label>
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
  showContent('content1', 'toggleShow1', 'toggleHide1');
  showContent('content2', 'toggleShow2', 'toggleHide2');
  showContent('content3', 'toggleShow3', 'toggleHide3');
  showContent('content4', 'toggleShow4', 'toggleHide4');
  showContent('content5', 'toggleShow5', 'toggleHide5');
  showContent('content6', 'toggleShow6', 'toggleHide6');
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