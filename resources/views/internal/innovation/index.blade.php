@extends('layouts.user')
@section('content')
<section class="title_idea container-xxl mt-5">
  <div class="title_idea_head w-100 text-center">
    <h2 class="fs-3" style="color: #c1bee2;">INNOVATION </h2>
    <h1 style="color: #9aca28;">Realisasikan Inovasi Kamu!</h1>
    <p>Jadikan bagian dalam ekosistem inovasi dengan berperan <br/> aktif dalam perkembangan idea inovasi.</p>
  </div>
</section>

<section class="container-xxl mt-5 d-flex flex-column align-items-center my-5">
  <div class="form_search d-flex align-items-center">
    <i class="bi bi-search"></i>
    <input type="text" class="form-control form_search-input" placeholder="Search anything...">
  </div>
  <h3 class="me-auto mt-5">List Innovasi</h3>
  <div class="mt-3 row row-cols-4 gap-5">
    <div class="card d-flex flex-column align-items-center py-3 px-2 shadow border-0" style="width: 18rem;">
      <div style="width: 80%;" class="overflow-hidden rounded-3">
        <img src="https://digitalamoeba.id/wp-content/uploads/2022/04/20220401-154841-1024x512.png"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>

    <div class="card d-flex flex-column align-items-center py-3 px-2 shadow border-0" style="width: 18rem;">
      <div style="width: 80%;" class="overflow-hidden rounded-3">
        <img src="https://digitalamoeba.id/wp-content/uploads/2022/04/20220401-154841-1024x512.png"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>

    <div class="card d-flex flex-column align-items-center py-3 px-2 shadow border-0" style="width: 18rem;">
      <div style="width: 80%;" class="overflow-hidden rounded-3">
        <img src="https://digitalamoeba.id/wp-content/uploads/2022/04/20220401-154841-1024x512.png"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>

    <div class="card d-flex flex-column align-items-center py-3 px-2 shadow border-0" style="width: 18rem;">
      <div style="width: 80%;" class="overflow-hidden rounded-3">
        <img src="https://digitalamoeba.id/wp-content/uploads/2022/04/20220401-154841-1024x512.png"
          style="width: 100%; aspect-ratio: 1/1; object-fit: cover;" class="card-img-top" alt="idea-banner">
      </div>
      <div class="card-body text-center">
        <h5 class="card-title mt-2">Peningkatan Jaringan PLN ICON</h5>
        <a href="#" class="d-flex align-items-center justify-content-center mt-3 fs-5 text-decoration-none"> Lihat
          Detail <i class="bi bi-arrow-right-circle ms-2"></i></a>
      </div>
    </div>
  </div>
</section>
@endsection