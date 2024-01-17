@extends('layouts.user')
@section('content')
<section class="title_idea container-xxl mt-5" style="position: relative;">
  <div class="title_idea_head w-100 text-center d-flex flex-column justify-items-center" style="position: relative;">
    <div class="d-none d-sm-block" style="position: absolute; top: 7em;" data-aos="fade-left"
      data-aos-delay="600">
      <lottie-player src="https://lottie.host/b2ff9005-051c-4d7d-8082-e72438480eb7/CJiqYViFfI.json"
        background="##FFFFFF" speed="1" style="width: 400px; height: 400px;" loop autoplay direction="1"
        mode="normal"></lottie-player>
    </div>
    <h2 data-aos="fade-zoom-in" class="fs-3" style="color: #c1bee2;">IDEABOX </h2>
    <div class="d-flex justify-content-center mx-auto" style="position: relative; width: fit-content;">
      <h1 data-aos="fade-up" data-aos-delay="800" style="color: #9aca28; font-size: 4em;">Berikan Idemu!</h1>
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

<section class="container-xxl w-100 d-flex flex-column align-items-center bounce-in"
  style="position: relative; margin-bottom: 5em; margin-top: 5em;">

  <div class="center" onclick="show(this)">
    <a href="#"><span data-attr="Create">Create</span><span data-attr="Idea">Idea</span></a>
  </div>


  <div class="card w-100 text-center px-3 py-3 hidden_idea_form mt-3 border-0 shadow bounce-in" style="display: none;">
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
          <span id="filesList">
            <span id="files-names"></span>
          </span>
        </p>
      </div>
    </div>
    <div class="d-flex ms-auto w-0" style="width: fit-content;">
      <button type="button" class="btn btn-primary me-3" onclick="submitForm()">Submit</button>
      <button type="button" class="btn btn-danger" onclick="show(this)">Cencel</button>
    </div>

  </div>
  </div>

</section>

<section class="container-xxl mt-5 d-flex flex-column align-items-center my-5">

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

  <h3 class="me-auto mt-5">List Idea</h3>
  <div class="mt-3 row row-cols-4 gap-5 w-100 justify-content-center justify-content-sm-start">
    <div data-aos="fade-up"
      class="card d-flex flex-column align-items-center py-3 px-2 shadow border-0 animation-hover-card"
      style="width: 18rem;">
      <div data-aos="fade-up" data-aos-delay="200" style="width: 80%;" class="overflow-hidden rounded-3">
        <img src="https://digitalamoeba.id/wp-content/uploads/2022/04/20220401-154841-1024x512.png"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div data-aos="fade-up" data-aos-delay="300" class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>

    <div data-aos="fade-up"
      class="card d-flex flex-column align-items-center py-3 px-2 shadow border-0 animation-hover-card"
      style="width: 18rem;">
      <div data-aos="fade-up" data-aos-delay="200" style="width: 80%;" class="overflow-hidden rounded-3">
        <img src="https://digitalamoeba.id/wp-content/uploads/2022/04/20220401-154841-1024x512.png"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div data-aos="fade-up" data-aos-delay="300" class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>
    <div data-aos="fade-up"
      class="card d-flex flex-column align-items-center py-3 px-2 shadow border-0 animation-hover-card"
      style="width: 18rem;">
      <div data-aos="fade-up" data-aos-delay="200" style="width: 80%;" class="overflow-hidden rounded-3">
        <img src="https://digitalamoeba.id/wp-content/uploads/2022/04/20220401-154841-1024x512.png"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div data-aos="fade-up" data-aos-delay="300" class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>

    <div data-aos="fade-up"
      class="card d-flex flex-column align-items-center py-3 px-2 shadow border-0 animation-hover-card"
      style="width: 18rem;">
      <div data-aos="fade-up" data-aos-delay="200" style="width: 80%;" class="overflow-hidden rounded-3">
        <img src="https://digitalamoeba.id/wp-content/uploads/2022/04/20220401-154841-1024x512.png"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div data-aos="fade-up" data-aos-delay="300" class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>

    <div data-aos="fade-up"
      class="card d-flex flex-column align-items-center py-3 px-2 shadow border-0 animation-hover-card"
      style="width: 18rem;">
      <div data-aos="fade-up" data-aos-delay="200" style="width: 80%;" class="overflow-hidden rounded-3">
        <img src="https://digitalamoeba.id/wp-content/uploads/2022/04/20220401-154841-1024x512.png"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div data-aos="fade-up" data-aos-delay="300" class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>

    <div data-aos="fade-up"
      class="card d-flex flex-column align-items-center py-3 px-2 shadow border-0 animation-hover-card"
      style="width: 18rem;">
      <div data-aos="fade-up" data-aos-delay="200" style="width: 80%;" class="overflow-hidden rounded-3">
        <img src="https://digitalamoeba.id/wp-content/uploads/2022/04/20220401-154841-1024x512.png"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div data-aos="fade-up" data-aos-delay="300" class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>
  </div>
  <div aria-label="Page navigation example" class="mt-5 ">
    <ul class="pagination pagination-lg">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </div>
</section>

<section class="container-xxl">
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
  // all data form
  var items = [];
  var imageUpload;
  var attachmen;

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
  attachmen = dt

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
  function submitForm() {
    console.log(JSON.stringify(quillEditorJudul.root.innerHTML), items, attachmen, imageUpload)
  }

</script>
@endsection