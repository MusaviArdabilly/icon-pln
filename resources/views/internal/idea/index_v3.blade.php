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
      <button type="submit" class="btn btn-primary me-3" onclick="onSubmit()">Simpan</button>
      <button type="button" class="btn btn-danger" onclick="show(this)">Batal</button>
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

  <div class="d-flex justify-content-between w-100 mt-5">
    <h3 class="fw-600">Daftar Ide v3</h3>
    <div>
      <button id="btn-filter-newest" class="btn btn-sm btn-outline-primary active" onclick="filterItems('newest')">Terbaru</button>
      <button id="btn-filter-popular" class="btn btn-sm btn-outline-primary" onclick="filterItems('popular')">Terpopuler</button>
    </div>
  </div>
  <div id="itemList" class="mt-3 row w-100 justify-content-center justify-content-sm-start">
    @include('internal.idea.card_idea')
  </div>
    
  <div class="d-flex justify-content-start w-100 mt-5">
    {{-- <button id="prevBtn" onclick="getData({{ $currentPage - 1 }})" {{ $disablePrev ? 'disabled' : '' }}>Previous</button>
    <button id="nextBtn" onclick="getData({{ $currentPage + 1 }})" {{ $disableNext ? 'disabled' : '' }}>Next</button> --}}
    {{ $idea->links() }}
  </div>
  {{-- <div class="pagination">
    <button class="btn-prev" {{ $disablePrev ? 'disabled' : '' }}>Previous</button>
    <button class="btn-next" {{ $disableNext ? 'disabled' : '' }}>Next</button>
  </div>   --}}

</section>

{{-- <script>
  $(document).ready(function () {
      $('.pagination button').on('click', function () {
          var page = $(this).hasClass('btn-prev') ? {{ $currentPage - 1 }} : {{ $currentPage + 1 }};
          console.log('btn pag clicked')
          
          $.ajax({
              url: "idea?page=" + page,
              type: 'GET',
              dataType: 'html',
              success: function (response) {
                  // Update the content with the new paginated data$("#itemList").fadeOut(200, function() {
                $("#itemList").html(response);
                $("#itemList").fadeIn(200);
              },
              error: function () {
                  console.log('Error fetching data');
              }
          });
      });
  });
</script> --}}

{{-- <script>
  function getData(page) {
    $.ajax({
      url: '?page=' + page,
      type: "get",
      dataType: 'html',
    })
    .done(function(response) {
      $("#itemList").fadeOut(200, function() {
        $("#itemList").html(response);
        $("#itemList").fadeIn(200);
        location.hash = page;
      });

      // Enable or disable Previous button
      $("#prevBtn").prop('disabled', page === 1);

      // Enable or disable Next button
      $("#nextBtn").prop('disabled', page === {{ $totalPages }} || {{ $totalPages }} === 0);
    })
    .fail(function(jqXHR, ajaxOptions, thrownError) {
      alert('No response from server');
    });
  }
</script> --}}



<script>
  const originalOrder = []; // Store the original order of items
  const pagination = document.getElementsByClassName('pagination')[0];//Get pagination class
  const btnNewest = document.getElementById('btn-filter-newest');
  const btnPopular = document.getElementById('btn-filter-popular');

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
      btnNewest.classList.remove('active');
      btnPopular.classList.add('active');
    } else if (filterType === 'newest') {
      items.sort((a, b) => {
        const dateA = new Date(a.getAttribute('data-date'));
        const dateB = new Date(b.getAttribute('data-date'));
        return dateB - dateA;
      });
      pagination.style.display = 'flex';
      btnNewest.classList.add('active');
      btnPopular.classList.remove('active');
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