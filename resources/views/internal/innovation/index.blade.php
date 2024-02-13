@extends('layouts.user')
@section('content')
  
  <script type="text/javascript">
    document.getElementById('nav-innovation').classList.add('active');
  </script>

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

  <div class="d-flex justify-content-between w-100 mt-5">
    <h3 class="fw-600">Daftar Inovasi</h3>
    <div>
      <button id="btn-filter-newest" class="btn btn-outline-primary active" onclick="loadIdeas(1)">
        <img height="20px" src="{{ asset('assets/image/icon/new.png') }}" alt="">
        Terbaru
      </button>
      <button id="btn-filter-popular" class="btn btn-outline-primary" onclick="loadPopularIdeas()">
        <img height="20px" src="{{ asset('assets/image/icon/trending.png') }}" alt="">
        Terpopuler
      </button>
    </div>
  </div>
  <div id="itemList" class="mt-3 row w-100 justify-content-center justify-content-sm-start"></div>

  <div id="pagination" class="d-flex justify-content-end w-100 mt-5">
    <button class="btn btn-outline-primary me-3" id="prevBtn" onclick="loadIdeas('prev')" disabled><</button>
    <button class="btn btn-outline-primary" id="nextBtn" onclick="loadIdeas('next')" disabled>></button>
  </div>

</section>

<script>
  AOS.init()
</script>

<script>
  var currentPage = 1; // Initial page
  var lastPage = 1;   // Initialize lastPage variable

  function loadIdeas(direction) {
      if (direction === 'prev' && currentPage > 1) {
          currentPage--;
      } else if (direction === 'next') {
          currentPage++;
      } else if (direction === 1) {
        currentPage = 1
      }

      var animationDirection = direction === 'prev' ? '100%' : '-100%';

      $.ajax({
          url: '/get-innovation?page=' + currentPage,
          type: 'GET',
          success: function(response) {
              lastPage = response.lastPage;
              $("#itemList").animate({ marginLeft: animationDirection, opacity: 0 }, 400, function() {
                $(this).css({ marginLeft: '0', opacity: 1 }).html(response.ideas);
              });
              $("#btn-filter-popular").removeClass('active');
              $("#btn-filter-newest").addClass('active');
              $("#pagination").addClass('d-flex').removeClass('d-none');
              updatePaginationButtons();
              console.log('total innovation:', response.totalInnovation)
              console.log('current page:', currentPage)
              console.log('last page:', response.lastPage)
              console.log(response)
          }
      });
  }

  function updatePaginationButtons() {
      // Enable or disable the Previous and Next buttons based on the current page
      $('#prevBtn').prop('disabled', currentPage <= 1);
      // Assuming you have the last page information from the server
      $('#nextBtn').prop('disabled', currentPage >= lastPage);
  }

  $(document).ready(function() {
      loadIdeas(currentPage);

      // The rest of your document ready code...
  });
</script>

<script>
  const pagination = document.getElementById('pagination');

  function loadPopularIdeas() {
    $.ajax({
      url: '/get-popular-innovation',
      type: 'GET',
      success: function(response) {
        $("#itemList").animate({ marginTop: '-100%', opacity: 0 }, 400, function() {
          $(this).css({ marginTop: '0', opacity: 1 }).html(response);
        });
        $("#btn-filter-popular").addClass('active');
        $("#btn-filter-newest").removeClass('active');
        $("#pagination").addClass('d-none').removeClass('d-flex');
      }
    })
  }
</script>
@endsection