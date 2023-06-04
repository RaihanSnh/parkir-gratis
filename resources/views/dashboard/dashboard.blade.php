@include('partials.top')

<h3 class="page-header p-3 fw-bold">Dashboard</h3>

<div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="card">
        <div class="card-header">
          <h4>Data Kendaraan</h4>
        </div>
        <div class="card-body">
          <p>
            Total ada {{ $kendaraan->count() }} kendaraan siswa yang sudah terdaftar di Website ini. Dan ada {{ $siswa->count() }}
            siswa yang belum di daftarkan di tabel kendaraan.
          </p>
        </div>
        <div class="card-footer">
          <a href="/kendaraan" class="btn btn-dark" role="button">
            <span class="fa fa-book"></span> Detail »
          </a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="card">
        <div class="card-header">
          <h4>Data Siswa</h4>
        </div>
        <div class="card-body">
          <p>Total ada {{ $siswa->count() }} siswa yang terdaftar di web ini. Dan baru ada {{ $kendaraan->count() }}
            kendaraan siswa yang sudah di masukkan ke tabel kendaraan.</p>
        </div>
        <div class="card-footer">
          <a href="/siswa" class="btn btn-dark" role="button">
            <span class="fa fa-inbox"></span> Detail »
          </a>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="card">
        <div class="card-header">
          <h4>Tentang Web Ini</h4>
        </div>
        <div class="card-body">
          <p>
            Baca informasi lebih tentang web ini.
          </p>
        </div>
        <div class="card-footer">
          <a href="/about" class="btn btn-dark" role="button">
            <span class="fa fa-info-circle"></span> Detail »
          </a>
        </div>
      </div>
    </div>
  </div>

  @include('partials.bottom')
