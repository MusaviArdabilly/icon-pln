@extends('layouts.user')
@section('content')
<section class="title_idea container-xxl mt-5 " style="position: relative;">
  <div class="title_idea_head w-100 text-center d-flex flex-column justify-items-center" style="position: relative;">
    <h2 data-aos="fade-zoom-in" class="fs-3" style="color: #c1bee2;">INNOVATION </h2>
    <div class="d-flex justify-content-center mx-auto" style="position: relative; width: fit-content;">
      <h1 data-aos="fade-up" data-aos-delay="800" style="color: #182958; font-size: 4em;">Realisasikan Inovasi Kamu!
      </h1>
      <lottie-player data-aos="fade-zoom-in" data-aos-delay="1800" class="lamp-animation d-none d-sm-block"
        src="https://lottie.host/4bccb2e2-d0a4-439c-9c67-e74b87f32faf/VS7x2mrJRd.json" background="##fff" speed="1"
        style="width: 150px; height: 150px; position: absolute; right: -7em; top: -2em;" loop autoplay direction="1"
        mode="normal"></lottie-player>
    </div>
    <p data-aos="fade-up" data-aos-delay="1000">Jadikan bagian dalam ekosistem inovasi <br /> dengan berperan aktif
      dalam <br /> perkembangan idea inovasi.</p>
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

  <h3 class="me-auto mt-5">List Innovation</h3>
  <div class="mt-3 row row-cols-4 gap-5 w-100 justify-content-center justify-content-sm-start">
    <div data-aos="fade-up"
      class="card d-flex flex-column align-items-center py-4 px-2 shadow border-0 animation-hover-card rounded-4"
      style="width: 18rem;">
      <div data-aos="fade-up" data-aos-delay="200" style="width: 80%;" class="overflow-hidden rounded-4">
        <img src="{{ asset('assets/image/tumbnail/iconpln2.jpg') }}"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div data-aos="fade-up" data-aos-delay="300" class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>

    <div data-aos="fade-up"
      class="card d-flex flex-column align-items-center py-4 px-2 shadow border-0 animation-hover-card rounded-4"
      style="width: 18rem;">
      <div data-aos="fade-up" data-aos-delay="200" style="width: 80%;" class="overflow-hidden rounded-4">
        <img src="{{ asset('assets/image/tumbnail/icon pln.jpeg') }}"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div data-aos="fade-up" data-aos-delay="300" class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan ide dan innovasi PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>
  </div>

  <div aria-label="Page navigation example" class="pagination-container mt-5 d-flex me-sm-auto">
    <button class="pagination-previous border border-1 rounded-circle py-2 px-3 me-3"><i
        class="bi bi-chevron-left fs-3"></i></button>
    <button class="pagination-next border border-1 rounded-circle py-2 px-3"><i class="bi bi-chevron-right fs-3"></i>
  </div>
  </div>

</section>

<section class="container-xxl mb-5">
  <h1 class="fs-3 mb-4" data-aos="bounce-in" data-aos-delay=""="1000">Kenapa Harus berinovasi ?</h1>
  <div class="card shadow border-0" data-aos="bounce-in" data-aos-delay="2000">
    <div class="card-body">
      <blockquote class="blockquote">
        Inovasi membantu memecahkan masalah, meningkatkan efisiensi, dan membuka peluang baru, Proses inovasi melibatkan
        identifikasi peluang, pengembangan ide, implementasi solusi, dan penyesuaian berkelanjutan. ayo ciptakan perubahan yang positif
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