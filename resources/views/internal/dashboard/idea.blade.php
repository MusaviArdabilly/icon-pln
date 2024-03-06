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
                      <td class="text-center"><label class="btn btn-sm bg-primary text-white" style="cursor:auto">Ide</label></td>
                      <td class="text-center nowrap">
                        <div class="d-flex">
                          <a href="/user/idea/{{ $item->encryptedId }}" class="btn btn-sm btn-secondary mb-1 mr-2"><i class="fas fa-fw fa-eye"></i></a>
                          <a href="/user/idea/{{ $item->encryptedId }}/delete" class="btn btn-sm btn-danger mb-1"
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
    // Refresh the page every 15 minutes (900,000 milliseconds)
    setInterval(function() {
        location.reload(true); // true forces a reload from the server, not from the cache
    }, 900000);
  </script>

  <script>
    async function deleteIdea(event) {
      event.preventDefault();
      var urlTarget = event.currentTarget.getAttribute('href');
      await reloadCaptcha();
      const { value: captchaResponse } = await window.Swal.fire({
        title: 'Hapus Ide',
        input: 'text',
        html: `
          <div>
            <label class="form-label">Masukkan captha berikut untuk menghapus inovasi</label>
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
            Swal.fire('Berhasil', 'Konten berhasil dihapus', 'success');
            location.reload();
          },
          error: function(xhr, status, error) {
            var errorMessage = "Gagal menghapus konten";
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

@endsection