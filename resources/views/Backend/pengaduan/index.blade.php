@extends('Backend.layouts.app')
  @section('content')
  <section class="section">
    <div class="section-header">
      <h1>Laporan</h1>
    </div>  
        <div class="card">
          <div class="card-header">
            <h4>Management laporan</h4>
          </div>
          <div class="card-body p-0">
            <div class="table-responsive">
              <table class="table table-striped table-md">
                <tr>
                  <td>No.tiket</td>
                  <td>Judul Laporan</td>
                  <td>Tanggal kejadian</td>
                  <td>Status Laporan</td>
                  <td>Detail</td>
                </tr>
                <tr>
                  <td>1021020120</td>
                  <td>Kebakaran</td>
                  <td>15/07/2021</td>
                  <td>Open</td>
                  <td><a href="{{route('detail-pengaduan')}}" class="btn btn-secondary">Detail</a></td>
                </tr>
                {{-- @foreach ($pengaduan as $item)    
                <tr>
                  <td>{{ $item->image }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->created_at->format('l, d F Y - H:i:s') }}</td>
                  <td>{{ $item->status }}</td>
                  <td><a href="{{route('detail-pengaduan', $item->id_pengaduan)}}" class="btn btn-secondary">Detail</a></td>
                </tr>
                @endforeach --}}
              </table>
            </div>
          </div>
          <div class="card-footer text-right">
            <nav class="d-inline-block">
              <ul class="pagination mb-0">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>  
  </section>
@endsection