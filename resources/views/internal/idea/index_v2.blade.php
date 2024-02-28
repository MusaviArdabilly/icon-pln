@extends('layouts.user')
@section('content')

<script type="text/javascript">
  document.getElementById('nav-idea').classList.add('active');
</script>

<section class="title_idea container-xxl mt-5" style="position: relative;">
  <div class="title_idea_head w-100 text-center d-flex flex-column justify-items-center" style="position: relative;">
    <div class="d-none d-sm-block" style="position: absolute; top: 7em;" data-aos="fade-left" data-aos-delay="600">
      <lottie-player src="https://lottie.host/b2ff9005-051c-4d7d-8082-e72438480eb7/CJiqYViFfI.json"
        background="##FFFFFF" speed="1" style="width: 400px; height: 400px;" loop autoplay direction="1"
        mode="normal"></lottie-player>
    </div>
    <h2 data-aos="fade-zoom-in" class="fs-3" style="color: #c1bee2;">IDEABOX </h2>
    <div class="d-flex justify-content-center mx-auto" style="position: relative; width: fit-content;">
      <h1 data-aos="fade-up" data-aos-delay="800" style="color: #182958; font-size: 4em;">Berikan Idemu!</h1>
      <div class="" style="position: absolute; left: 0; top: 0;" data-aos="fade-in" data-aos-delay="1800">
        <lottie-player src="https://lottie.host/497756f7-db22-4876-93ce-3f1e0ff799f7/fB5gp7edM9.json"
          background="transparent" speed="1" style="width: 400px; height: 400px" loop autoplay direction="1"
          mode="normal"></lottie-player>
      </div>
      <lottie-player data-aos="bounce-in" data-aos-delay="2500" class="lamp-animation d-none d-sm-block"
        src="https://lottie.host/4bccb2e2-d0a4-439c-9c67-e74b87f32faf/VS7x2mrJRd.json" background="##fff" speed="1"
        style="width: 150px; height: 150px; position: absolute; right: -7em; top: -2em;" loop autoplay direction="1"
        mode="normal"></lottie-player>
    </div>
    <p data-aos="fade-up" data-aos-delay="1000">Jangan ragu untuk submit idea kamu kapan saja <br /> dan untuk siapa
      saja!</p>
  </div>
</section>

<section class="container w-100 d-flex flex-column align-items-center bounce-in"
  style="position: relative; margin-bottom: 5em; margin-top: 5em;">

  <div class="center" onclick="show(this)">
    <a href="#"><span data-attr="Create">Create</span><span data-attr="Idea">Idea</span></a>
  </div>


  <div class="card w-100 text-center px-3 py-3 hidden_idea_form mt-3 border-0 shadow bounce-in" style="display: none;">
    <h3 class="mx-auto">Ideabox</h3>
    <form id="ideabox-submit">
      <!-- image upload -->
      @csrf
      <div class="row input_item">
        <p class="col-3">Thumbnail</p>
        <div class="uploader">
          <div class="col-9">
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
        <p class="col-3">Latar Belakang Masalah</p>
        <div class="col-9">
          <div id="quillEditorLatarBelakang" class="quillCustom shadow border-0 radius-3">
          </div>
        </div>
      </div>
      <div class="row input_item">
        <p class="col-3">Tujuan</p>
        <div class="col-9">
          <div id="quillEditorIsi" class="quillCustom shadow border-0 radius-3">
          </div>
        </div>
      </div>
      <div class="row input_item">
        <p class="col-3">Usulan Solusi</p>
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
          <input type="text" id="txt_chips" placeholder="type and Enter ...">
        </div>
      </div>
    </div>
    <!-- attachment -->
    <div class="row input_item">
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
    </div>
    <div class="d-flex ms-auto w-0" style="width: fit-content;">
      <button type="submit" class="btn btn-primary me-3" onclick="onSubmit()">Submit</button>
      <button type="button" class="btn btn-danger" onclick="show(this)">Cencel</button>
    </div>

  </div>
  </div>

</section>

<section class="container mt-5 d-flex flex-column align-items-center my-5">

  <button type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"
    style="border: transparent !important; background-color: transparent !important;">
    <div class="form_search d-flex align-items-center shadow-sm">
      <i class="bi bi-search"></i>
      <input type="text" class="form-control form_search-input" placeholder="Search anything...">
    </div>
  </button>

  <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background: transparent !important; border: transparent !important;">
        <div class="form_search d-flex align-items-center w-100">
          <i class="bi bi-search"></i>
          <input type="text" class="form-control form_search-input" placeholder="Search anything...">
        </div>
      </div>
    </div>
  </div>

  <h3 class="me-auto fw-600 mt-5">List Idea</h3>
  <div class="filter-buttons">
    <button onclick="filterItems('popular')">Popular</button>
    <button onclick="filterItems('newest')">Newest</button>
  </div>
  <div id="itemList" class="mt-3 row w-100 justify-content-center justify-content-sm-start">
    @forelse ($idea as $item)
    <div class="col-12 col-md-3 p-2" data-popularity="{{ $item->popularity }}" data-date="{{ $item->created_at }}">
      <div data-aos="fade-up"
        class="card h-100 p-2 shadow border-0 animation-hover-card rounded-4">
        <div class="mx-auto rounded-4">
          <img src="{{ asset('storage/' . $item->thumbnail) }}"
            style="height: 100%; width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="rounded-3" alt="idea-banner">
        </div>
        <div class="d-flex flex-column justify-content-between h-100 p-2">
          <div class=" card-title mt-2">
            @php
              $team = $item->team;
              $teamArray = explode(', ', $team);
            @endphp
            <h6 class="fs-12 fw-400 mt-2 mb-2 text-secondary"><label class="fw-500">Team: </label> {{ $teamArray[0] }}, dkk</h6>
            <h5 class="fs-16 three-rows-text">{!! $item->title !!} </h5>
          </div>
          <div class="d-flex justify-content-center align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#212529" d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"/></svg>
            <label style="color: #212529" class="ms-1 me-2">{{ $item->total_views }}</label>&nbsp;
            <svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#212529" d="M88.2 309.1c9.8-18.3 6.8-40.8-7.5-55.8C59.4 230.9 48 204 48 176c0-63.5 63.8-128 160-128s160 64.5 160 128s-63.8 128-160 128c-13.1 0-25.8-1.3-37.8-3.6c-10.4-2-21.2-.6-30.7 4.2c-4.1 2.1-8.3 4.1-12.6 6c-16 7.2-32.9 13.5-49.9 18c2.8-4.6 5.4-9.1 7.9-13.6c1.1-1.9 2.2-3.9 3.2-5.9zM0 176c0 41.8 17.2 80.1 45.9 110.3c-.9 1.7-1.9 3.5-2.8 5.1c-10.3 18.4-22.3 36.5-36.6 52.1c-6.6 7-8.3 17.2-4.6 25.9C5.8 378.3 14.4 384 24 384c43 0 86.5-13.3 122.7-29.7c4.8-2.2 9.6-4.5 14.2-6.8c15.1 3 30.9 4.5 47.1 4.5c114.9 0 208-78.8 208-176S322.9 0 208 0S0 78.8 0 176zM432 480c16.2 0 31.9-1.6 47.1-4.5c4.6 2.3 9.4 4.6 14.2 6.8C529.5 498.7 573 512 616 512c9.6 0 18.2-5.7 22-14.5c3.8-8.8 2-19-4.6-25.9c-14.2-15.6-26.2-33.7-36.6-52.1c-.9-1.7-1.9-3.4-2.8-5.1C622.8 384.1 640 345.8 640 304c0-94.4-87.9-171.5-198.2-175.8c4.1 15.2 6.2 31.2 6.2 47.8l0 .6c87.2 6.7 144 67.5 144 127.4c0 28-11.4 54.9-32.7 77.2c-14.3 15-17.3 37.6-7.5 55.8c1.1 2 2.2 4 3.2 5.9c2.5 4.5 5.2 9 7.9 13.6c-17-4.5-33.9-10.7-49.9-18c-4.3-1.9-8.5-3.9-12.6-6c-9.5-4.8-20.3-6.2-30.7-4.2c-12.1 2.4-24.7 3.6-37.8 3.6c-61.7 0-110-26.5-136.8-62.3c-16 5.4-32.8 9.4-50 11.8C279 439.8 350 480 432 480z"/></svg>
            <label style="color: #212529" class="ms-1 me-2">{{ $item->total_comments }}</label>
            <a href="/idea/{{ $item->id }}" class="fs-16 fw-400 ms-auto text-decoration-none">
              Lihat Detail <i class="bi bi-arrow-bar-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    @empty
      <div class="alert alert-danger w-100 text-center" role="alert">
        Tidak ada Data
      </div>
    @endforelse
  </div>

  {{-- <div aria-label="Page navigation example" class="pagination-container mt-5 d-flex me-sm-auto ">
    <button class="pagination-previous border border-1 rounded-circle py-2 px-3 me-3"><i class="bi bi-chevron-left fs-3"></i></button>
    <button class="pagination-next border border-1 rounded-circle py-2 px-3"><i class="bi bi-chevron-right fs-3"></i>
  </div> --}}
    
  {{ $idea->links() }} 

  {{-- <div class="pagination-buttons">
    <button id="prevButton">Previous</button>
    <button id="nextButton">Next</button>
  </div> --}}
</section>

<section class="container-xxl mb-5">
  <h1 class="fs-3 mb-4" data-aos="bounce-in" data-aos-delay=""="1000">Kenapa Harus Menggunakan Ideabox ?</h1>
  <div class="card shadow border-0" data-aos="bounce-in" data-aos-delay="2000">
    <div class="card-body">
      <blockquote class="blockquote">
        Ideabox menyedikan kemudahan pengelolaan ide dan kemudahan proses tahap selanjutnya untuk menghasilkan inovasi
        dan
        juga terdapat berbagai benefit yang ada. Ideabox dapat digunakan oleh bisnis di semua jenis industri dan skala
        apa
        pun. Untuk segala instansi, terlebih yang sudah memulai untuk membangun Innovation Culture di
        instansi/perusahaanya.
      </blockquote>
    </div>
  </div>
</section>

<script>
  const originalOrder = []; // Store the original order of items
  const pagination = document.getElementsByClassName('pagination')[0]; //Get pagination class

  // Initialize original order when the page loads
  document.addEventListener('DOMContentLoaded', () => {
    const itemList = document.getElementById('itemList');
    originalOrder.push(...Array.from(itemList.children));
  });

  function filterItems(filterType) {
    const itemList = document.getElementById('itemList');
    const items = originalOrder.slice(); // Create a copy of the original order

    // Sort items based on the chosen filter
    if (filterType === 'popular') {
      items.sort((a, b) => {
        const popularityA = parseInt(a.getAttribute('data-popularity'));
        const popularityB = parseInt(b.getAttribute('data-popularity'));
        return popularityB - popularityA;
      });

      // Limit to 4 items for the "Popular" filter
      items.splice(4);
      pagination.style.display = 'none';
    } else if (filterType === 'newest') {
      items.sort((a, b) => {
        const dateA = new Date(a.getAttribute('data-date'));
        const dateB = new Date(b.getAttribute('data-date'));
        return dateB - dateA;
      });
      pagination.style.display = 'flex';
    }

    // Remove existing items from the list
    while (itemList.firstChild) {
      itemList.removeChild(itemList.firstChild);
    }

    // Append sorted items back to the list
    items.forEach(item => {
      itemList.appendChild(item);
    });
  }
</script>

<script>
  // all data form
  var items = [];
  var imageUpload;
  var attachment;

  AOS.init();
  function show() {
    var paragraph = document.querySelector(".hidden_idea_form");
    if (paragraph.style.display == "none") {
      paragraph.style.display = "block";
    } else {
      paragraph.style.display = "none";
    }
  }

  // quill js text editor
  var quillEditorJudul = new Quill('#quillEditorJudul', {
    theme: 'snow'
  });
  // var quillEditorAbstrak = new Quill('#quillEditorAbstrak', {
  //   theme: 'snow'
  // });
  var quillEditorLatarBelakang = new Quill('#quillEditorLatarBelakang', {
    theme: 'snow'
  });
  var quillEditorIsi = new Quill('#quillEditorIsi', {
    theme: 'snow'
  });
  var quillEditorSolusi = new Quill('#quillEditorSolusi', {
    theme: 'snow'
  });

  // chips input
  var txt = document.getElementById('txt_chips');
  var list = document.getElementById('list_chips');
  var items = [];

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
   function onSubmit() {
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
      type: 'POST',
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url: "/idea-submit",
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
@endsection