@extends('layouts.user')
@section('content')
<section class="title_idea container-xxl mt-5">
  <div class="title_idea_head w-100 text-center">
    <h2 class="fs-3" style="color: #c1bee2;">IDEABOX </h2>
    <h1 style="color: #9aca28;">Berikan Idemu!</h1>
    <p>Jangan ragu untuk submit idea kamu kapan saja <br /> dan untuk siapa saja!</p>
  </div>
</section>

<section class="container-xxl w-100 d-flex flex-column align-items-center">
  <button class="d-flex align-items-center button_create_idea" onclick="show(this)">
    <p class="m-0 fw-normal">Create Your Idea</p>
    <i class="bi bi-chevron-down ms-auto fw-bold"></i>
  </button>

  <div class="card w-100 text-center px-3 py-3 hidden_idea_form mt-3 border-0 shadow" style="display: none;">
    <h3 class="mx-auto">Ideabox</h3>
    <!-- image upload -->
    <div class="row input_item">
      <p class="col-3">Banner</p>
      <div class="col-9">
        <form id="file-upload-form" class="uploader">
          <input id="file-upload" type="file" name="fileUpload" accept="image/*" style="display:none" />
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
        </form>
      </div>
    </div>
    <div class="row input_item">
      <p class="col-3">Judul/Topik</p>
      <div class="col-9">
        <div id="quillEditorJudul">
        </div>
      </div>
    </div>
    <div class="row input_item">
      <p class="col-3">Abstrak</p>
      <div class="col-9">
        <div id="quillEditorAbstrak">
        </div>
      </div>
    </div>
    <div class="row input_item">
      <p class="col-3">Latar Belakang</p>
      <div class="col-9">
        <div id="quillEditorLatarBelakang">
        </div>
      </div>
    </div>
    <div class="row input_item">
      <p class="col-3">Isi</p>
      <div class="col-9">
        <div id="quillEditorIsi">
        </div>
      </div>
    </div>
    <div class="row input_item">
      <p class="col-3">Solusi</p>
      <div class="col-9">
        <div id="quillEditorSolusi">
        </div>
      </div>
    </div>
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
    <!-- attachmen -->
    <div class="row input_item">
      <p class="col-3">Attachmen</p>
      <div class="col-9 d-flex justify-content-center">
        <p class="d-flex">
          <label for="attachment">
            <a class="btn btn-primary text-light" role="button" aria-disabled="false">+ Add</a>
          </label>
          <input type="file" name="file[]" accept=".pdf" id="attachment" style="visibility: hidden; position: absolute;"
            multiple />
        </p>
        <p id="files-area">
          <span id="filesList" >
            <span id="files-names"></span>
          </span>
        </p>
      </div>
    </div>

  </div>
  </div>

</section>

<section class="container-xxl mt-5 d-flex flex-column align-items-center my-5">
  <div class="form_search d-flex align-items-center">
    <i class="bi bi-search"></i>
    <input type="text" class="form-control form_search-input" placeholder="Search anything...">
  </div>
  <h3 class="me-auto mt-5">List Idea</h3>
  <div class="mt-3 row row-cols-4 gap-5">
    <div class="card d-flex flex-column align-items-center py-3 px-2 shadow border-0" style="width: 18rem;">
      <div style="width: 80%;" class="overflow-hidden rounded-3">
        <img src="https://digitalamoeba.id/wp-content/uploads/2022/04/20220401-154841-1024x512.png"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>

    <div class="card d-flex flex-column align-items-center py-3 px-2 shadow border-0" style="width: 18rem;">
      <div style="width: 80%;" class="overflow-hidden rounded-3">
        <img src="https://digitalamoeba.id/wp-content/uploads/2022/04/20220401-154841-1024x512.png"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>

    <div class="card d-flex flex-column align-items-center py-3 px-2 shadow border-0" style="width: 18rem;">
      <div style="width: 80%;" class="overflow-hidden rounded-3">
        <img src="https://digitalamoeba.id/wp-content/uploads/2022/04/20220401-154841-1024x512.png"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>

    <div class="card d-flex flex-column align-items-center py-3 px-2 shadow border-0" style="width: 18rem;">
      <div style="width: 80%;" class="overflow-hidden rounded-3">
        <img src="https://digitalamoeba.id/wp-content/uploads/2022/04/20220401-154841-1024x512.png"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>
  </div>
</section>

<script>
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
  var quillEditorAbstrak = new Quill('#quillEditorAbstrak', {
    theme: 'snow'
  });
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
      console.log(file)
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
        document.getElementById("file-upload-form").reset();
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

  // attachmen
  const dt = new DataTransfer();

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

</script>
@endsection