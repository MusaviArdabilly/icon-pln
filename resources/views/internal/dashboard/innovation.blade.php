@extends('layouts.admin')
@section('content')
  
  <script type="text/javascript">
    document.getElementById('nav-innovation').classList.add('active');
  </script>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Inovasi</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Tim</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Tim</th>
                      <th>Status</th>
                      <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                  @forelse ($idea as $index => $item)
                    <tr>
                      <th>{{ $index + 1 }}</th>
                      <td>{!! $item->title !!}</td>
                      @php
                        $team = $item->team;
                        $teamArray = explode(', ', $team);
                      @endphp
                      <td>
                        <strong class="font-weight-bold">{{ $teamArray[0] }},</strong>
                        @for ($i = 1; $i < count($teamArray); $i++)
                          {{ $teamArray[$i] }}
                          @if ($i < count($teamArray) - 1)
                              ,
                          @endif
                        @endfor
                      </td>
                      <td class="text-center">
                        <div>
                          <label class="d-block btn btn-sm bg-success text-white" style="cursor: auto">Inovasi</label>
                          <label class="d-block rounded border p-1 fs-14 text-secondary" style="cursor: auto">{{ $item->get_flow_position->name }}</label>
                        </div>
                      </td>
                      <td class="text-center nowrap">
                        <div class="d-flex">
                          <a href="/user/innovation/{{ $item->id }}" class="btn btn-sm btn-secondary mb-1 mr-2"><i class="fas fa-fw fa-eye"></i></a>
                          <a href="/user/innovation/{{ $item->id }}/delete" class="btn btn-sm btn-danger mb-1"
                            onclick="deleteIdea(event)"><i class="fas fa-fw fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td class="text-center" colspan="5">
                          Tidak ada data
                      </td>
                    </tr>
                  @endforelse
                </tbody>
            </table>
        </div>
    </div>
  </div>

  <script>
    setInterval(function() {
        location.reload(true); // true forces a reload from the server, not from the cache
    }, 900000);
  </script>

  <script>
    function deleteIdea(event) {
      event.preventDefault();
      var redirectTo = event.currentTarget.getAttribute('href');  
      window.Swal.fire({
        title: 'Hapus ide',
        text: 'Apakah anda yakin untuk menghapus ide terkait?',
        icon: 'warning',
        reverseButtons: true,
        showCancelButton: true,
        cancelButtonText: 'Batal',
        confirmButtonText: 'Ya'
      }).then(function(result) {
        if (result.isConfirmed) {
          location.assign(redirectTo);
        }
      });
    }
  </script>

@endsection