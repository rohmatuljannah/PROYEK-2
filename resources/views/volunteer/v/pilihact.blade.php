@extends('layouts/v2')

@section('title', 'Aktivitas')

@section ('container')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

         <div class="ftco-blocks-cover-1">
       <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('/images/3.jpg')">
        <div class="container">
          <div class="row align-items-center ">

            <div class="col-md-5 mt-5 pt-5">
              <span class="text-cursive h3 text-red">Aktivitas</span>
              <h1 class="mb-3 font-weight-bold text-teal" style="font-size: 40px">Aktivitas Social Class :) </h1>
              <p><a href="/" class="text-white" style="font-size: 20px">Home</a> <span class="mx-3">/</span> <strong style="font-size: 20px">Aktivitas</strong></p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <div class="site-section bg-info">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <span class="text-cursive h5 text-white d-block">Packages You Like</span>
            <h2 class="text-white" style="font-weight: bolder; font-size: 40px; font-family: Consolas">Detail Aktivitas</h2>
          </div>
        </div>
        <br>
        <div class="row row-cols-1 row-cols-md-3">
      
            <div class="card" style="width: 70rem;">
              <div class="card-body">
                <div class="package text-left bg-white">
                <span class="img-wrap"><img src="/images/a.jpg" alt="Image" class="img-fluid"></span>
                <form action="" method="post" class="d-inline">
                @csrf
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="hidden" readonly class="form-control-plaintext" name="id_aktivitas" value="{{$detail_aktivitas->id_aktivitas}}">
                        </div>
                </div>
                <h3>AKTIVITAS INI</h3>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama Aktivitas</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" name="judul" value="{{$detail_aktivitas->judul}}">
                        </div>
                </div><br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="hidden" readonly class="form-control-plaintext" name="id_volunteer" value="{{$detail_aktivitas->id_volunteer}}">
                        </div>
                </div>
                <h3>AKAN DIIKUTI OLEH</h3>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama Volunteer</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" name="nama" value="{{$detail_aktivitas->nama}}">
                        </div>
                </div>
                </form>
                <a href="/homeact" type="button" class="btn btn-primary">Back</a>
              </div>
            </div>
          </div>
        <br>
        </div>
      </div>
      </div>
    <br>
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

      