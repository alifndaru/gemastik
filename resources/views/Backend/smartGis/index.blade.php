@extends('Backend.layouts.app')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Smart GIS</h1>
  </div>
  <img src="{{asset('assets/images/savi2.jpeg')}}" width="900px" class="mb-3" alt="">
  <div class="row">
    <div class="col-12 col-md-6 col-lg-6">
      <div class="card">
        <form>
          <div class="card-header">
            <h4>Pencarian</h4>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label>Input No. tiket</label>
              <input type="text" class="form-control" required="">
            </div>
            <div class="form-group mb-0">
              <label>ekstrasi fitur</label>
              <div class="card">
                <div class="card-body">
                  <div class="btn-group">
                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    pilih fitur
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Savi</a>
                      <a class="dropdown-item" href="#">NBR</a>
                      <a class="dropdown-item" href="#">NDWI</a>
                      <a class="dropdown-item" href="#">NDVI</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group mb-0">
              <label>Input hasil navigasi</label>
              <textarea class="form-control" required=""></textarea>
            </div>
          </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
  </div>
</section>
@endsection