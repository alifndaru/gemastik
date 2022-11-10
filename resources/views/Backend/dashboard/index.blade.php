@extends('Backend.layouts.app')
  @section('content')
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-stats">
            <div class="card-stats-title">Statistik Pengaduan
            </div>
            <div class="card-stats-items">
              <div class="card-stats-item">
                <div class="card-stats-item-count">24</div>
                <div class="card-stats-item-label">unprocess</div>
              </div>
              <div class="card-stats-item">
                <div class="card-stats-item-count">12</div>
                <div class="card-stats-item-label">pending</div>
              </div>
              <div class="card-stats-item">
                <div class="card-stats-item-count">23</div>
                <div class="card-stats-item-label">Completed</div>
              </div>
            </div>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-archive"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total pengaduan</h4>
            </div>
            <div class="card-body">
              59
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-stats">
            <div class="card-stats-title">Statistik users
            </div>
            <div class="card-stats-items">
              <div class="card-stats-item">
                <div class="card-stats-item-count">24</div>
                <div class="card-stats-item-label">Petugas</div>
              </div>
              <div class="card-stats-item">
                <div class="card-stats-item-count">12</div>
                <div class="card-stats-item-label">Admin</div>
              </div>
              <div class="card-stats-item">
                <div class="card-stats-item-count">23</div>
                <div class="card-stats-item-label">Masyarakat</div>
              </div>
            </div>
          </div>
          <div class="card-icon shadow-primary bg-primary">
            <i class="fas fa-archive"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Tanggapan</h4>
            </div>
            <div class="card-body">
              59
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>

    </div>
    <div class="card-body">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No.Tiket</th>
            <th scope="col">Nama Pelapor/th>
            <th scope="col">Judul Laporan</th>
            <th scope="col">Isi Laporan</th>
            <th scope="col">Tanggal Kejadian</th>
            <th scope="col">Alamat Kejadian</th>
            <th scope="col">Kategori Laporan</th>
            <th scope="col">Status laporan</th>
            <th scope="col">Keterangan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>150721001</td>
            <td>Helmi Faizi</td>
            <td>Kebakaran di Pakubuwono</td>
            <td>Kebakaran yang terjadi akibat listrik konslet</td>
            <td>15/07/2021</td>
            <td>Ruko Gardenia, Jl. Gatot Subroto, Jakarta Pusat</td>
            <td>Bencana Non Alam</td>
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
            <td>Laporan yang dilapor sedang dalam proses peninjauan</td>
            {{-- <td><a href="{{route('cetak')}}" class="btn btn-secondary">lihat</a></td> --}}
          </tr>
          <tr>
            <td>21022202</td>
            <td>Naufal Afif </td>
            <td>Keributan yang terjadi di Manggarai</td>
            <td>Keributan yang terjadi di Manggarai</td>
            <td>21/02/2022</td>
            <td>Manggarai, Underpass Manggarai, Jakarta..</td>
            <td>Manggarai, Underpass Manggarai, Jakarta..</td>
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
            <td>Laporan yang dilapor sedang dalam proses pengecekan</td>
            {{-- <td><a href="{{route('cetak')}}" class="btn btn-secondary">lihat</a></td> --}}
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection