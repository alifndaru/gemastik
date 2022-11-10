@extends('Backend.layouts.app')
@section('content')
<section class="section">
  <div class="section-header">
    <h1>Smart Monitoring</h1>
  </div>
  <img src="{{asset('assets/images/cctv2.jpeg')}}" class="mb-4" alt="">
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