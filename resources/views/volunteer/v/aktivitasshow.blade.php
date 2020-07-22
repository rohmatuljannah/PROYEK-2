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
                 <table class="table" border="1" style="border-color: white">
                   <tr>
                     <th style="color:#696969">Aktivitas</th>
                     <td style="font-size: 20px; font-weight: bold; color: #000000; font-family: Bell MT">{{$data_aktivitas->nama_aktivitas }}</td>
                   </tr>
                    <tr>
                     <th style="color:#696969">Tempat</th>
                     <td style="font-size: 20px; font-weight: bold; color: #000000; font-family: Bell MT">{{ $data_aktivitas->tempat }}</td>
                   </tr>
                   <tr>
                     <th style="color:#696969">Tanggal</th>
                     <td style="font-size: 20px; font-weight: bold; color: #000000; font-family: Bell MT">{{ $data_aktivitas->tanggal }}</td>
                   </tr>
                   <tr>
                     <th style="color:#696969">Waktu</th>
                     <td style="font-size: 20px; font-weight: bold; color: #000000; font-family: Bell MT">{{ $data_aktivitas->waktu }}</td>
                   </tr>
                  
                    <tr>
                     <th style="color:#696969">Deskripsi</th>
                     <td style="font-size: 20px; font-weight: bold; color: #000000; font-family: Bell MT">{{ $data_aktivitas->deskripsi }}</td>
                   </tr>
                  </table>
                <form action="{{ route('pilihact') }}" method="post" class="d-inline">
                @csrf
                <input type="hidden" name="id_aktivitas" value="{{ $data_aktivitas->id }}">
                <input type="hidden" name="judul" value="{{ $data_aktivitas->nama_aktivitas }}">
                <button type="submit" class="btn btn-warning" onclick="return confirm('Anda akan menambahkan aktivitas ?')"> Jadi Relawan </button>
                </form>
                <a href="/homeact" class="btn btn-primary balik">Back</a>
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

      