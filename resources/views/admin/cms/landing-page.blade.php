@extends('layouts.admin')
@section('content')
  
  <script type="text/javascript">
    document.getElementById('nav-landing-page').classList.add('active');
  </script>

  
<div class="min-vh-100 mb-3">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Landing Page</h6>
    </div>
    <div class="card-body">
      <form action="landing-page/edit/post" method="POST">
        @csrf
        <div class="mb-4">
          <h6 class="font-weight-bold">Bagian 1</h6>
          <div class="form-group">
            <label for="exampleFormControlInput1">Judul</label>
            <input type="text" name="section1_title" value="{{ $data->section1_title }}" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Konten</label>
            <textarea name="section1_content" class="form-control" id="exampleFormControlTextarea1" rows="2">{{ $data->section1_content }}</textarea>
          </div> 
        </div>
        <div class="mb-4">
          <h6 class="font-weight-bold">Bagian 2</h6>
          <div class="form-group">
            <label for="exampleFormControlInput2">Judul</label>
            <input type="text" name="section2_title" value="{{ $data->section2_title }}" class="form-control" id="exampleFormControlInput2">
          </div>
          <div class="row">
            <div class="col-12 col-md-3">
              <div class="form-group">
                <label for="exampleFormControlInput2">Sub judul 1</label>
                <input type="text" name="section2_subtitle1" value="{{ $data->section2_subtitle1 }}" class="form-control" id="exampleFormControlInput2">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea2">Konten</label>
                <textarea name="section2_subtitle1_content" class="form-control" id="exampleFormControlTextarea2" rows="3">{{ $data->section2_subtitle1_content }}</textarea>
              </div>
            </div>
            <div class="col-12 col-md-3">
              <div class="form-group">
                <label for="exampleFormControlInput2">Sub judul 2</label>
                <input type="text" name="section2_subtitle2" value="{{ $data->section2_subtitle2 }}" class="form-control" id="exampleFormControlInput2">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea2">Konten</label>
                <textarea name="section2_subtitle2_content" class="form-control" id="exampleFormControlTextarea2" rows="3">{{ $data->section2_subtitle2_content }}</textarea>
              </div>
            </div>
            <div class="col-12 col-md-3">
              <div class="form-group">
                <label for="exampleFormControlInput2">Sub judul 3</label>
                <input type="text" name="section2_subtitle3" value="{{ $data->section2_subtitle3 }}" class="form-control" id="exampleFormControlInput2">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea2">Konten</label>
                <textarea name="section2_subtitle3_content" class="form-control" id="exampleFormControlTextarea2" rows="3">{{ $data->section2_subtitle3_content }}</textarea>
              </div>
            </div>
            <div class="col-12 col-md-3">
              <div class="form-group">
                <label for="exampleFormControlInput2">Sub judul 4</label>
                <input type="text" name="section2_subtitle4" value="{{ $data->section2_subtitle4 }}" class="form-control" id="exampleFormControlInput2">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea2">Konten</label>
                <textarea name="section2_subtitle4_content" class="form-control" id="exampleFormControlTextarea2" rows="3">{{ $data->section2_subtitle4_content }}</textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="mb-4">
          <h6 class="font-weight-bold">Bagian 3</h6>
          <div class="form-group">
            <label for="exampleFormControlInput3">Judul</label>
            <input type="text" name="section3_title" value="{{ $data->section3_title }}" class="form-control" id="exampleFormControlInput3">
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="exampleFormControlInput2">Sub judul 1</label>
                <input type="text" name="section3_subtitle1" value="{{ $data->section3_subtitle1 }}" class="form-control" id="exampleFormControlInput2">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea2">Konten</label>
                <textarea name="section3_subtitle1_content" class="form-control" id="exampleFormControlTextarea2" rows="3">{{ $data->section3_subtitle1_content }}</textarea>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleFormControlInput2">Sub judul 2</label>
                <input type="text" name="section3_subtitle2" value="{{ $data->section3_subtitle2 }}" class="form-control" id="exampleFormControlInput2">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea2">Konten</label>
                <textarea name="section3_subtitle2_content" class="form-control" id="exampleFormControlTextarea2" rows="3">{{ $data->section3_subtitle2_content }}</textarea>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleFormControlInput2">Sub judul 3</label>
                <input type="text" name="section3_subtitle3" value="{{ $data->section3_subtitle3 }}" class="form-control" id="exampleFormControlInput2">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea2">Konten</label>
                <textarea name="section3_subtitle3_content" class="form-control" id="exampleFormControlTextarea2" rows="3">{{ $data->section3_subtitle3_content }}</textarea>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleFormControlInput2">Sub judul 4</label>
                <input type="text" name="section3_subtitle4" value="{{ $data->section3_subtitle4 }}" class="form-control" id="exampleFormControlInput2">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea2">Konten</label>
                <textarea name="section3_subtitle4_content" class="form-control" id="exampleFormControlTextarea2" rows="3">{{ $data->section3_subtitle4_content }}</textarea>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleFormControlInput2">Sub judul 5</label>
                <input type="text" name="section3_subtitle5" value="{{ $data->section3_subtitle5 }}" class="form-control" id="exampleFormControlInput2">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea2">Konten</label>
                <textarea class="form-control" name="section3_subtitle5_content" id="exampleFormControlTextarea2" rows="3">{{ $data->section3_subtitle5_content }}</textarea>
              </div>
            </div>
          </div>    
        </div>
        <div class="w-100 d-flex justify-content-end">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection