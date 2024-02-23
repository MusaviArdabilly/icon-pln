@extends('layouts.user')
@section('content')
  
  <script type="text/javascript">
    document.getElementById('nav-repository').classList.add('active');
  </script>

  <div class="container repository min-vh-100">
    <div class="d-flex justify-content-between align-items-center pt-5 mb-4">
      <h1 class="fs-36 fw-600">Pustaka Iconic</h1>
      <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#searchRepositoryModal">
        <i class="bi bi-search"></i>
      </button>
    </div>
    <div class="modal fade" id="searchRepositoryModal" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" style="background: transparent !important; border: transparent !important;">
          <div class="form_search d-flex align-items-center w-100">
            <i class="bi bi-search"></i>
            <input type="text" id="searchRepositoryInput" class="form-control form_search-input" placeholder="Cari Repositori berdasarkan judul atau nama pengirim">
          </div>
          <div id="searchResult" class="list-group">

          </div>
        </div>
      </div>
    </div>

    @forelse ($repositoryByYears as $year => $monthGroup)
      <div class="shadow rounded p-3 mb-3">
        <div class="row">
          <div class="col-12 d-flex justify-content-between align-items-center">
            <h1 class="fs-28 fw-500 mb-0">{{ $year }}</h1>
            <div id="toggleHide{{ $year }}" onclick="toggleContent('content{{ $year }}', 'toggleShow{{ $year }}', 'toggleHide{{ $year }}')" class="toggle">
              <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M38.8 5.1C28.4-3.1 13.3-1.2 5.1 9.2S-1.2 34.7 9.2 42.9l592 464c10.4 8.2 25.5 6.3 33.7-4.1s6.3-25.5-4.1-33.7L525.6 386.7c39.6-40.6 66.4-86.1 79.9-118.4c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C465.5 68.8 400.8 32 320 32c-68.2 0-125 26.3-169.3 60.8L38.8 5.1zM223.1 149.5C248.6 126.2 282.7 112 320 112c79.5 0 144 64.5 144 144c0 24.9-6.3 48.3-17.4 68.7L408 294.5c8.4-19.3 10.6-41.4 4.8-63.3c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3c0 10.2-2.4 19.8-6.6 28.3l-90.3-70.8zM373 389.9c-16.4 6.5-34.3 10.1-53 10.1c-79.5 0-144-64.5-144-144c0-6.9 .5-13.6 1.4-20.2L83.1 161.5C60.3 191.2 44 220.8 34.5 243.7c-3.3 7.9-3.3 16.7 0 24.6c14.9 35.7 46.2 87.7 93 131.1C174.5 443.2 239.2 480 320 480c47.8 0 89.9-12.9 126.2-32.5L373 389.9z"/></svg>
            </div>
            <div id="toggleShow{{ $year }}" onclick="toggleContent('content{{ $year }}', 'toggleShow{{ $year }}', 'toggleHide{{ $year }}')" class="toggle d-none">
              <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z"/></svg>
            </div>
          </div>
          <div id="content{{ $year }}" class="transition-height">
            <div class="row mt-2">
              @if ($year == $currentYear)
                @for ($i = 1; $i <= $currentMonth; $i++)
                  <?php
                      $monthData = date("F", mktime(0, 0, 0, $i, 1, 2000));
                      // Indonesian month names
                      $monthNamesIndonesian = array(
                          'Januari', 'Februari', 'Maret', 'April',
                          'Mei', 'Juni', 'Juli', 'Agustus',
                          'September', 'Oktober', 'November', 'Desember'
                      );
              
                      $month = $monthNamesIndonesian[$i - 1];
                      $innovationOfMonth = $monthGroup->get($monthData, collect());
                  ?>
                  <div class="col-12 col-md-4">
                    <div class="text-decoration-none pointer" data-bs-toggle="modal" data-bs-target="#exampleModal" data-year="{{ $year }}" data-month="{{ $month }}" onclick="showRepository({{ $year }}, '{{ $monthData }}')">
                      <h2 class="fs-16 fw-400 mb-2">{{ $month }} ({{ $innovationOfMonth->count() }})</h2>
                    </div>
                  </div>
                @endfor
              @else
                @for ($i = 1; $i <= 12; $i++)
                  <?php
                      $monthData = date("F", mktime(0, 0, 0, $i, 1, 2000));
                      // Indonesian month names
                      $monthNamesIndonesian = array(
                          'Januari', 'Februari', 'Maret', 'April',
                          'Mei', 'Juni', 'Juli', 'Agustus',
                          'September', 'Oktober', 'November', 'Desember'
                      );
              
                      $month = $monthNamesIndonesian[$i - 1];
                      $innovationOfMonth = $monthGroup->get($monthData, collect());
                  ?>
                  <div class="col-12 col-md-4">
                    <div class="text-decoration-none pointer" data-bs-toggle="modal" data-bs-target="#exampleModal" data-year="{{ $year }}" data-month="{{ $month }}" onclick="showRepository({{ $year }}, '{{ $monthData }}')">
                      <h2 class="fs-16 fw-400 mb-2">{{ $month }} ({{ $innovationOfMonth->count() }})</h2>
                    </div>
                  </div>
                @endfor
              @endif
            </div>
          </div>
        </div>
      </div>
    @empty
      <div class="w-100 text-center alert alert-danger" role="alert">
        Belum ada data
      </div>
    @endforelse
  </div>

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-year="2027" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex align-items-center">
            <div class="position-sticky ms-3 mb-3">
              <div class="swiper-button-prev position-sticky me-3"></div>
            </div>
            <div class="swiper">
              <div id="itemContainer" class="swiper-wrapper">
              </div>
            </div>
            <div class="position-sticky ms-3 mb-3">
              <div class="swiper-button-next position-sticky"></div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function debounce(func, delay) {
      let timer;
      return function () {
        const context = this;
        const args = arguments;
        clearTimeout(timer);
        timer = setTimeout(() => {
          func.apply(context, args);
        }, delay);
      };
    }
  
    function searchRepository(query) {
      console.log(query)
      $.ajax({
        url: '/searchRepository?query=' + encodeURIComponent(query),
        type: 'GET',
        success: function(response) {
          console.log(response)
          $('#searchResult').html(response);
        }
      })
    }
  
    const debounceSearch = debounce(function(){
      const query = document.getElementById('searchRepositoryInput').value;
      searchRepository(query);
    }, 300);
  
    document.getElementById('searchRepositoryInput').addEventListener('input', debounceSearch);
  
  </script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <script>
    const swiper = new Swiper('.swiper', {
      pagination: {
        el: '.swiper-pagination',
      },

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      
      breakpoints: {
        200: {
          slidesPerView: 1,
          spaceBetween: 10,
        },
        500: {
          slidesPerView: 3,
          spaceBetween: 15,
        }
      },
    });
  </script>

  <script>
    function showRepository(year, month) {
      console.log('month:', month);
      $.ajax({
        url: `/get-detail-repository/${year}/${month}`,
        type: 'GET',
        success: function(response) {
          console.log(response)
          $('#itemContainer').html(response)
        }
      })
    }
  </script>

  <script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var year = button.data('year'); // Extract value from data-year attribute
        var month = button.data('month'); // Extract value from data-year attribute
        var modal = $(this);

        // Update the modal title with the year value
        modal.find('.modal-title').text('Inovasi pada tahun ' + year + ' bulan ' + month);
    });
  </script>

  <script>
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();

    window.onload = function() {
      showContent(`content${currentYear}`, `toggleShow${currentYear}`, `toggleHide1${currentYear}`);
    };

    function toggleContent(elementId, toggleShowId, toggleHideId) {
      const content = document.getElementById(elementId);
      const toggleShow = document.getElementById(toggleShowId);
      const toggleHide = document.getElementById(toggleHideId);
  
      if (content.style.maxHeight) {
        content.style.maxHeight = null;
        toggleShow.classList.remove('d-none');
        toggleHide.classList.add('d-none');
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
        toggleShow.classList.add('d-none');
        toggleHide.classList.remove('d-none');
      }
    }

    function showContent(elementId, toggleShowId, toggleHideId) {
      const content = document.getElementById(elementId);
      const toggleShow = document.getElementById(toggleShowId);
      const toggleHide = document.getElementById(toggleHideId);

      content.style.maxHeight = content.scrollHeight + "px";
      toggleShow.classList.add('d-none');
      toggleHide.classList.remove('d-none');
    }
  </script>
@endsection