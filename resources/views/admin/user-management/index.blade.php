@extends('layouts.admin')
@section('content')

  <script type="text/javascript">
    document.getElementById('nav-user').classList.add('active');
  </script>

  <div class="row">
    <div class="col-12 col-md-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">User</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered display" id="userDataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th class="text-center">Aksi</th>
                </tr>
              </tfoot>
              <tbody id="userContainer">
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Admin</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered display" id="adminDataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody id="adminContainer">

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(function () {
      loadUser();
    });
  </script>

  <script>
    function loadUser() {
      $.ajax({
        url: 'user-management/get-data',
        type: 'GET',
        success: function(response){
          $('#userContainer').empty();
          if (response.users.length === 0) {
            $('#userContainer').append('<tr><td colspan="4" class="text-center">Tidak ada data</td></tr>');
          } else {
            $.each(response.users, function(index, item){
              var newRowUser = `
              <tr>
                <td>${index + 1}</td>
                <td>${item.name}</td>
                <td>${item.email}</td>
                <td class="text-center"><button class="btn btn-sm btn-outline-primary" onclick="makeAdmin(${item.id})">Jadikan Admin</button></td>
              </tr>
              `;
    
              $('#userContainer').append(newRowUser);
            });
          }
  
          $('#adminContainer').empty();
          if (response.admins.length === 0) {
            $('#adminContainer').append('<tr><td colspan="4" class="text-center">Tidak ada data</td></tr>');
          } else {
            $.each(response.admins, function(index, item){
              var newRowAdmin = `
              <tr>
                <td>${index + 1}</td>
                <td>${item.name}</td>
                <td>${item.email}</td>
                <td class="text-center"><button class="btn btn-sm btn-outline-primary" onclick="makeUser(${item.id})">Jadikan User</button></td>
              </tr>
              `;
    
              $('#adminContainer').append(newRowAdmin);
            });
          }
          $('#userDataTable').DataTable();
          $('#adminDataTable').DataTable();
        },
        error: function(xhr, status, error) {
          console.error("Error loading user data:", error);
        }
      });
    }
  </script>

  <script>
    function makeAdmin(id){
      $.ajax({
        url: 'user-management/make-admin/' + id,
        type: 'GET',
        success: function(response){
          $('#userDataTable').DataTable().destroy();
          $('#adminDataTable').DataTable().destroy();
          loadUser();
        }
      })
    }

    function makeUser(id){
      $.ajax({
        url: 'user-management/make-user/' + id,
        type: 'GET',
        success: function(response){
          $('#userDataTable').DataTable().destroy();
          $('#adminDataTable').DataTable().destroy();
          loadUser();
        }
      })
    }
  </script>
@endsection