@extends('layouts.admin')
@section('content')
  
  <script type="text/javascript">
    document.getElementById('nav-idea').classList.add('active');
  </script>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ide</h6>
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
                  @forelse ($idea as $index => $item)
                    <tr>
                      <th>{{ $index + 1 }}</th>
                      <td>{{ $item->title }}</td>
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
                      <td class="text-center"><label class="btn btn-sm bg-primary text-white" style="cursor:auto">Ide</label></td>
                      <td class="text-center nowrap">
                        <a href="/admin/idea/{{ $item->id }}" class="btn btn-sm btn-secondary mb-1"><i class="fas fa-fw fa-eye"></i></a>
                        <a href="/admin/idea/{{ $item->id }}/delete" class="btn btn-sm btn-danger mb-1"
                          onclick="deleteIdea(event)"><i class="fas fa-fw fa-trash"></i></a>
                      </td>
                    </tr>
                  @empty
                      
                  @endforelse
                </tbody>
            </table>
        </div>
    </div>
  </div>

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