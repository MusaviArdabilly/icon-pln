@extends('layouts.admin')
@section('content')
  
  <script type="text/javascript">
    document.getElementById('nav-repository').classList.add('active');
  </script>

  <div class="row">
    <div class="col-12 col-md-8">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Pustaka Inovasi</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered display" id="repositoryDataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th width="5px">No</th>
                  <th>Judul</th>
                  <th width="60px">Dibuat</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th width="5px">No</th>
                  <th>Judul</th>
                  <th width="60px">Dibuat</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </tfoot>
              <tbody id="repositoryContainer">

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
        </div>
        <div class="card-body">
          <form action="repository/add-data" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Judul</label>
              <textarea name="title" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group mb-4">
              <label for="team">Team</label>
              <input type="text" name="team" class="form-control" id="team" aria-describedby="teamHelp">
              <small id="teamHelp" class="form-text text-muted">Gunakan tanda koma untuk menginput lebih dari satu</small>
            </div>
            <div class="form-group mb-4">
              <label>Tanggal dibuat</label>
              <div class="datepicker date input-group">
                <input type="text" placeholder="Pilih Tanggal" class="form-control" id="fecha1">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                </div>
              </div>
            </div>
            <div class="form-group mb-4">
              <label>Lampiran</label>
              <p class="d-flex">
                <label for="attachment">
                  <a class="btn btn-sm btn-outline-primary" role="button" aria-disabled="false">+ Tambah</a>
                </label>
                <input type="file" name="attachment[]" accept=".jpg, .jpeg, .png, .pdf, .ppt, .pptx" id="attachment" style="visibility: hidden; position: absolute;"
                  multiple />
              </p>
              <p id="files-area">
                <span id="filesList">
                  <span id="files-names"></span>
                </span>
              </p>
            </div>
            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <script>
    setInterval(function() {
        location.reload(true); // true forces a reload from the server, not from the cache
    }, 900000);
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  <script>
    $(document).ready(function () {
      loadRepository();
      $(function () {
        $('.datepicker').datepicker({
          language: "id",
          autoclose: true,
          format: "yyyy-mm-dd",
          uiLibrary: 'bootstrap4'
        });
      });
    });
  </script>

  <script>
    function loadRepository() {
      $.ajax({
        url: 'repository/get-data',
        type: 'GET',
        success: function(response){
          $('#repositoryContainer').empty();
          $.each(response, function(index, item){
            var createdAtDate = new Date(item.created_at);
            var formattedDate = createdAtDate.toLocaleDateString('id-ID');
            var newRowRepository = `
              <tr>
                <td>${index + 1}</td>
                <td>
                  <span class="mb-2">${item.title}</span>
                  <span class="fs-12">Oleh: ${item.team}</span>
                </td>
                <td>${formattedDate}</td>
                <td class="text-center">
                  <button class="btn btn-sm btn-outline-danger" onclick="deleteRepository('${item.encryptedId}')"><i class="fa fa-trash-alt" aria-hidden="true"></i></button>  
                </td>
              </tr>
            `
            $('#repositoryContainer').append(newRowRepository);
          });
          $('#repositoryDataTable').DataTable();
        }
      })
    }

    async function deleteRepository(id) {
      var urlTarget = 'repository/delete-data/' + id;
      await reloadCaptcha();
      const { value: captchaResponse } = await window.Swal.fire({
        title: 'Hapus Data Pustaka',
        input: 'text',
        html: `
          <div>
            <label class="form-label">Masukkan captha berikut untuk menghapus data pustaka</label>
            <div class="form-group">
              <div class="captcha d-flex justify-content-center">
                <img id="captcha-image" src="{{ captcha_src(); }}" alt="Captcha" class="rounded mr-2">
                <button onclick="reloadCaptcha()" class="btn btn-outline-secondary" type="button">
                  <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M386.3 160H336c-17.7 0-32 14.3-32 32s14.3 32 32 32H464c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32s-32 14.3-32 32v51.2L414.4 97.6c-87.5-87.5-229.3-87.5-316.8 0s-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3s163.8-62.5 226.3 0L386.3 160z"/></svg>
                </button>
              </div>
            </div>
          </div>
          `, 
        inputValidator: (value) => {
          if(!value){
            return 'Harap mengisi Captcha';
          }
        },
        showCancelButton: true,
        cancelButtonText: 'Batal',
        confirmButtonText: 'Verifikasi',
      });

      if(captchaResponse){
        $.ajax({
          url: urlTarget,
          type: 'POST',
          data: { 
            '_token': '{{ csrf_token() }}',
            'captcha': captchaResponse 
          },
          success: function(response) {
            Swal.fire('Berhasil', 'Data berhasil dihapus', 'success');
            location.reload();
          },
          error: function(xhr, status, error) {
            var errorMessage = "Gagal menghapus data";
            var responseJson = JSON.parse(xhr.responseText);
            if (responseJson && responseJson.message) {
              errorMessage = responseJson.message;
            }
            Swal.fire('Gagal', errorMessage, 'error');
          }
        })
      }
    }

    function reloadCaptcha() {
      fetch('/reload-captcha-url')
        .then(response => response.json())
        .then(data => {
            document.getElementById('captcha-image').src = data.captcha_url;
        })
        .catch(error => {
            console.error('Error while reloading captcha', error);
        });
    }
  </script>

  <script>
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
  </script>

@endsection