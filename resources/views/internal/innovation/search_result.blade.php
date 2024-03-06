<p class="list-group-item fs-12 text-muted text-center mb-0">
  <span class="fw-600">Menampilkan {{ $total_data }} Inovasi</span>
  {{-- @if ($total_data > $result->count())
    <br>Gunakan kalimat yang lebih spesifik
  @endif --}}
</p>
@foreach ($result as $item)
  <a href="innovation/{{ $item->id }}" class="list-group-item list-group-item-action">
    <p id="title" class="m-0">{{ strip_tags($item->title) }}</p>
    <div class="d-flex justify-content-between w-100 text-muted">
      <p class="fs-12 fw-500 d-inline m-0">
        {{ $item->user->name }}, dkk
      </p>
      <p class="fs-12 d-inline m-0">
        {{ $item->created_at->format('d/M/Y') }}
      </p>
    </div>
  </a>
@endforeach