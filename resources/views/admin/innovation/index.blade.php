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
                      <th class="text-center">Status</th>
                      <th class="text-center">Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                  @forelse ($innovation as $index => $item)
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
                      <td class="text-center">
                        <div class="d-flex">
                          <a href="/admin/innovation/{{ $item->id }}" class="btn btn-sm btn-secondary mb-1 mr-2"><i class="fas fa-fw fa-eye"></i></a>
                          <a href="/admin/innovation/{{ $item->id }}/delete" class="btn btn-sm btn-danger mb-1 mr-2" onclick="deleteIdea(event)">
                            <i class="fas fa-fw fa-trash"></i>
                          </a>
                          <button class="btn btn-sm btn-primary mb-1 mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-fw fa-ellipsis-v"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/admin/innovation/{{ $item->id }}/transfer-to-idea" onclick="moveIdea(event)">kembalikan ke Ide</a>
                            <hr class="my-1 {{ $item->flow_position == 5 ? 'd-none' : '' }}">
                            <a class="dropdown-item {{ $item->flow_position == 2 ? '' : 'd-none' }}" href="/admin/innovation/{{ $item->id }}/approve-step-2">
                              Setujui {{ $flow_position[1]->name }}
                            </a>
                            <a class="dropdown-item {{ $item->flow_position == 3 ? '' : 'd-none' }}" href="/admin/innovation/{{ $item->id }}/approve-step-3">
                              Setujui {{ $flow_position[2]->name }}
                            </a>
                            @if ($item->evaluation)
                              <a class="dropdown-item {{ $item->flow_position == 4 ? '' : 'd-none' }}" href="/admin/innovation/{{ $item->id }}/approve-step-4">
                                Setujui {{ $flow_position[3]->name }}
                              </a>
                            @else
                              <a class="dropdown-item {{ $item->flow_position == 4 ? '' : 'd-none' }}" href="/admin/innovation/{{ $item->id }}/#evaluation-input">
                                Berikan {{ $flow_position[3]->name }}
                              </a>
                            @endif
                          </div>
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
        title: 'Hapus Inovasi',
        text: 'Apakah anda yakin untuk menghapus inovasi terkait?',
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