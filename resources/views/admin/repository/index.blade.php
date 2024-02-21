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
                <td>${item.title}</td>
                <td>${formattedDate}</td>
                <td class="text-center">
                  <button class="btn btn-sm btn-outline-danger" onclick="deleteRepository(${item.id})"><i class="fa fa-trash-alt" aria-hidden="true"></i></button>  
                </td>
              </tr>
            `
            $('#repositoryContainer').append(newRowRepository);
          });
          $('#repositoryDataTable').DataTable();
        }
      })
    }

    function deleteRepository(id){
      $.ajax({
        url: 'repository/delete-data/' + id,
        type: 'GET',
        success: function(response){
          loadRepository();
        }
      })
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