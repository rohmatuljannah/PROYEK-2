@extends('layouts/v')

@section('title', 'Dashboard Volunteer')

@section ('container')

<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/v1.jpg')">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-5 mt-5 pt-5">
                    <span class="text-cursive h5 text-red">Dashboard</span>
                    <h1 class="mb-3 font-weight-bold text-teal" style="font-size: 40px">Dashboard Volunteer!</h1>
                    <p><a href="/dashboardvolunteer" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Dashboard</strong></p>
                </div>

            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    @if (session('sukses'))
    <div class="alert alert-success" role="alert">
    {{session('sukses')}}
    </div>
    @endif
</div>


          <div class="col-sm-6 offset-6">
            <ol class="breadcrumb float-sm-right" style="font-size: 18px; font-weight: bold;">
              <li class="breadcrumb-item"><a href="/dashboardvolunteer">Dashboard</a></li>
              <li class="breadcrumb-item active">Start Page</li>
            </ol>
          </div>
<br>
<br>
<br>
<br>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-primary">
                            <span class="info-box-icon"><i class="fa fa-balance-scale"></i></span>
                            <div class="info-box-content" align="center">
                                <span class="info-box-text" style="color: white; font-family: consolas; text-align: center;">Volunteer</span>
                                <hr color="white" width="200px">
                                <span class="info-box-text" style="color: white; font-family: consolas;">Seseorang yang tanpa dibayar dengan sukarela menyediakan waktu dan kemampuannya untuk tujuan tertentu, misalnya di bidang kemanusiaan, lingkungan, pendidikan, dan sosial.</span>
                            </div>
                      
                        </div>
                    
                    </div>
             
                    
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-success">
                            <span class="info-box-icon"><i class="fa fa-money"></i></span>
                            <div class="info-box-content" align="center">
                                <span class="info-box-text" style="color: white; font-family: consolas; text-align: center;">Social Class</span>
                                <hr color="white" width="200px">
                                <span class="info-box-text" style="color: white; font-family: consolas; text-align:center;">Komunitas Sosial yang didirikan pada tahun .... oleh ..... Dibangun dengan tujuan ............ dan konsisten bergerak dibidang pendidikan untuk anak-anak dan remaja</span>
                            </div>
                            
                        </div>
                        
                    </div>
                   
                    
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-info">
                            <span class="info-box-icon"><i class="fa fa-bell-o"></i></span>
                            <div class="info-box-content" align="center">
                                <span class="info-box-text" style="color: white; font-family: consolas; text-align: center;">E-Volunteer Social Class</span>
                            <hr color="white" width="200px">
                                <span class="info-box-text" style="color: white; font-family: consolas; text-align:center;">Elektronik Volunteer Social Class merupakan website resmi dari Social Class dengan tujuan yaitu memperkenalkan Social Class kepada masyarakat luas. </span>
                            </div>
                            
                        </div>
                       
                    </div>
                   
                    
                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-primary">
                            <span class="info-box-icon"><i class="fa fa-minus-square"></i></span>
                            <div class="info-box-content" align="center">
                                <span class="info-box-text" style="color: white; font-family: consolas; text-align: center;"> Dari Kami yang Belajar</span>
                            <hr color="white" width="200px">
                                <span class="info-box-text" style="color: white; font-family: consolas; text-align:center;">Terimakasih kepada Social Class yang menjadi tempat bagi kami untuk belajar dan berkembang, Terimakasih Social Class, panjang umur untuk semua hal baik:)</span>
                            </div>
                            
                        </div>
                       
                    </div>
                  
                </div>

                
                <br>
                <br>
                <br>
                    <div class="card mb-12" style="border-color: black">
                      <div class="card-body" >
                        <a href="/vprofil"><h5 class="card-title" style="font-family: consolas; font-weight: bold; font-size: 25px; color: black">Profil  <img src="/images/baseline_visibility_black_18dp.png"></h5></a>
                        <hr color="black">
                        <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>
                    </div>
                <br>
                <br>
                <div class="card mb-12" style="border-color: black">
                      <div class="card-body">
                        <a href="/vaktivitas"><h5 class="card-title" style="font-family: consolas; font-weight: bold; font-size: 25px; color: black">Aktivitas <img src="/images/baseline_visibility_black_18dp.png"></h5></a>
                        <hr color="black">
                        <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>
                    </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <!-- AREA CHART -->
                        <div class="card card-primary">
                            <div class="card-header bg-primary">
                                <h3 class="card-title" style="color: white; font-family: consolas; text-align: center;">Laporan Aktivitas</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">
                        <!-- AREA CHART -->
                        <div class="card card-primary" >
                            <div class="card-header  bg-primary">
                                <h3 class="card-title" style="color: white; font-family: consolas; text-align: center;">Cetak Profil</h3>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <div id="barchart_material2" style="width: 900px; height: 500px;"></div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

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





