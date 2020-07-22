@extends('layouts/main')

@section('title', 'Aktivitas')

@section ('container')
         <div class="ftco-blocks-cover-1">
       <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/3.jpg')">
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
            <h2 class="text-white" style="font-weight: bolder; font-size: 40px; font-family: Consolas">Aktivitas Kami</h2>
          </div>
        </div>

        <br>

        <div class="row">
        @foreach ($data_aktivitas as $akt)
          <div class="col-lg-4">
            <div class="package text-center bg-white">
              <span class="img-wrap"><img src="images/a.jpg" alt="Image" class="img-fluid"></span>
                  <table>
                       <tr>
                         <td style="font-size: 20px; font-weight: bold; text-align: center; color: #000000; font-family: Bell MT">{{ $akt->nama_aktivitas }}</td>
                       </tr>
                       <tr>
                         <td></td>
                       </tr>
                       <tr>
                         <td>{{ $akt->tanggal }}</td>
                       </tr>
                  </table>
              <br>
              <p><a href="/detailaktivitas/{{ $akt -> id}} " class="btn btn-primary">Detail</a></p>
            </div>
          </div>
          @endforeach
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

      