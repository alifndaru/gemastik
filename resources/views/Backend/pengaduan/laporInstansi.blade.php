@extends('Backend.layouts.app')
@section('content')
    <section class="section">
      <div class="section-header">
        <h3>Laporan instansi</h3>
      </div>
      <div class="card">
        <div class="card-header">
          Detail laporan
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No.Tiket</th>
                <th scope="col">Kategori Laporan</th>
                <th scope="col">Tanggal Kejadian</th>
                <th scope="col">Alamat Kejadian</th>
                <th scope="col">Hasil Investigasi</th>
                <th scope="col">Status Laporan</th>
                <th scope="col">Pilih Instansi</th>
                <th scope="col">Email Instansi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>150721001</td>
                <td>Bencana Non Alam</td>
                <td>15/07/2021</td>
                <td>Ruko Gardenia, Jl. Gatot Subroto, Jakarta Pusat</td>
                <td>Investigasi pada Ruko Gardenia, di Jl. Gatot Subroto, Jakarta Pusat. Akibat konsleting arus listrik yang menghahnguskan 5 unit ruko dengan total kerugian 200 Juta.</td>
                <td>Diterima</td>
                <td>
                  <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Pilih</span>
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                  </div>
                </td>
                <td>sekkojakbar@Jakarta.go.id</td>
                {{-- <td><a href="{{route('cetak')}}" class="btn btn-secondary">lihat</a></td> --}}
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
@endsection