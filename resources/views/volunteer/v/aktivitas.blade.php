@extends('layouts/v')

@section('title', 'Aktivitasmu')

@section ('container')

<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/4.jpg')">
        <div class="container">
            <div class="row align-items-center ">

                <div class="col-md-5 mt-5 pt-5">
                    <span class="text-cursive h5 text-red">Dashboard</span>
                    <h1 class="mb-3 font-weight-bold text-teal" style="font-size: 40px">Aktivitas Volunteer!</h1>
                    <p><a href="index.html" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Aktivitasmu</strong></p>
                </div>

            </div>
        </div>
    </div>
</div>
<br>

          <div class="col-sm-6 offset-6">
            <ol class="breadcrumb float-sm-right" style="font-size: 18px; font-weight: bold;">
              <li class="breadcrumb-item"><a href="/dashboardvolunteer">Dashboard</a></li>
              <li class="breadcrumb-item active">Aktivitas Volunteer</li>
            </ol>
          </div>
<br>
<br>
<br>

  <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header bg-primary ">
                                    <h4 class="card-title" style="color: white; font-family: consolas" align="center">Tabel Aktivitas</h4>
                                    <p class="card-category" style="color: white; font-family: consolas" align="center">Aktivitas dimana Anda sebagai Volunteer atau Sukarelawan .</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th style="font-weight: bold;">No</th>
                                            <th style="font-weight: bold;"> Nama Kegiatan</th>
                                            <th style="font-weight: bold;"> Tanggal</th>
                                            <th style="font-weight: bold;">Tempat</th>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            @foreach($data_aktivitas as $aktivitas)
                                            <?php $no++; ?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{$aktivitas->nama_aktivitas}}</td>
                                                <td>{{$aktivitas->tanggal}}</td>
                                                <td>{{$aktivitas->tempat}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <br>
                                    <a class="btn btn-primary" href="/cetak_pdf">Cetak Laporan</a>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>

<div class="site-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <span class="text-cursive h5 text-red d-block">Our Gallery</span>
                <h2 class="text-black"  style="font-weight: bolder; font-size: 40px; font-family: Consolas">Gallery Of The Volunteers</h2>
            </div>
        </div>
        <div class="row">
                  <div class="col-md-3 mb-4">
        <a href="images/a.jpg" data-fancybox="gal"><img src="images/a.jpg" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-md-3 mb-4">
        <a href="images/b.jpg" data-fancybox="gal"><img src="images/b.jpg" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-md-3 mb-4">
        <a href="images/c.jpg" data-fancybox="gal"><img src="images/c.jpg" alt="Image" class="img-fluid"></a>
      </div>
       <div class="col-md-3 mb-4">
        <a href="images/a.jpg" data-fancybox="gal"><img src="images/a.jpg" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-md-3 mb-4">
        <a href="images/b.jpg" data-fancybox="gal"><img src="images/b.jpg" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-md-3 mb-4">
        <a href="images/c.jpg" data-fancybox="gal"><img src="images/c.jpg" alt="Image" class="img-fluid"></a>
      </div>
       <div class="col-md-3 mb-4">
        <a href="images/a.jpg" data-fancybox="gal"><img src="images/a.jpg" alt="Image" class="img-fluid"></a>
      </div>
      <div class="col-md-3 mb-4">
        <a href="images/b.jpg" data-fancybox="gal"><img src="images/b.jpg" alt="Image" class="img-fluid"></a>
      </div>
        </div>
    </div>
</div>

<div class="site-section py-5 bg-warning">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 d-flex">
                <h2 class="text-white m-0">Dari Relawan, Jadi banyak Kawan</h2>
                <a href="#" class="btn btn-primary btn-custom-1 py-3 px-5 ml-auto">Get Started</a>
            </div>
        </div>
    </div>
</div>  

            


@endsection





