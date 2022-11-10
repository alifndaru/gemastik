@extends('Backend.layouts.app')
@section('content')
<section class="section">
  <div class="section-header">
    <h3>Detail Laporan</h3>
  </div>
  <div>
    <button type="button" class="btn btn-primary mb-3">Eksport pdf</button>
  </div>
  <div class="card">
    <div class="card-header">
      Detail laporan
    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No tiket</th>
            <th scope="col">Judul Laporan</th>
            <th scope="col">Tanggal kejadian</th>
            <th scope="col">Kategori Laporan</th>
            <th scope="col">Isi laporan</th>
            <th scope="col">Alamat kejadian</th>
            <th scope="col">Bukti laporan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1021020120</th>
            <td>Kebakaran di pakubuwono</td>
            <td>15/10/2022</td>
            <td>Bencana non alam</td>
            <td>Kebakaran yang terjadi akibat konslet</td>
            <td>Ruko gerdenia, jl.gatot subroto, jakarta pusat</td>
            <td><a href="{{route('cetak')}}" class="btn btn-secondary">lihat</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection