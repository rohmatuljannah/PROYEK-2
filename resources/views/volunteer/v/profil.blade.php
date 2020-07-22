@extends('layouts/v')

@section('title', 'Profil Volunteer')

@section ('container')

<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('/images/4.jpg')">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-5 mt-5 pt-5">
                    <span class="text-cursive h5 text-red">Dashboard</span>
                    <h1 class="mb-3 font-weight-bold text-teal" style="font-size: 40px">Profil Volunteer!</h1>
                    <p><a href="#" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Profil</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

          <div class="col-sm-6 offset-6">
            <ol class="breadcrumb float-sm-right" style="font-size: 18px; font-weight: bold;">
              <li class="breadcrumb-item"><a href="/dashboardvolunteer">Dashboard</a></li>
              <li class="breadcrumb-item active">Profil Volunteer</li>
            </ol>
          </div>
<br>
<br>
<br>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-primary">
                                <h4 class="card-title" align="center" style="color: white; font-size: 23px; font-weight: bold; font-family:Consolas; ">Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label for="InputNama" style="font-weight: bold;">Nama</label>
                                                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="InputNama" value="{{$data_volunteer->name}}" disabled="disabled">
                                                </div>
                                            </div>


                                            <div class="col-md-7 pl-1">
                                                <div class="form-group">
                                                    <label for="InputAlamat" style="font-weight: bold;">Alamat</label>
                                                    <input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="InputAlamat" value="{{$data_volunteer->alamat}}" disabled="disabled">
                                                </div>
                                            </div>
                                    </div>


                                        <div class="row">
                                           <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label for="InputDesa" style="font-weight: bold;">Desa</label>
                                                    <input name="desa" type="text" class="form-control @error('desa') is-invalid @enderror" id="InputDesa" value="{{$data_volunteer->desa}}" disabled="disabled">
                                                </div>
                                            </div>

                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label for="InputKecamatan" style="font-weight: bold;">Kecamatan</label>
                                                    <input name="kecamatan" type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="InputKecamatan" value="{{$data_volunteer->kecamatan}}" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                          <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label for="InputTanggalLahir" style="font-weight: bold;">Tanggal Lahir</label>
                                                    <input name="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="InputTanggalLahir" value="{{$data_volunteer->tgl_lahir}}" disabled="disabled">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1" style="font-weight: bold;">Jenis Kelamin</label>
                                                    <select name ="jk" class="form-control @error('jk') is-invalid @enderror" id="exampleFormControlSelect1" disabled="disabled">
                                                        <option value="Laki-Laki" @if($data_volunteer->jk == 'Laki-Laki') selected @endif>Laki-Laki</option>
                                                        <option value="Perempuan" @if($data_volunteer->jk == 'Perempuan') selected @endif>Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                   <label for="InputKontak" style="font-weight: bold;">Kontak</label>
                                                    <input name="kontak" type="text" class="form-control @error('kontak') is-invalid @enderror" id="InputKontak" value="{{$data_volunteer->kontak}}" disabled="disabled">
                                                </div>
                                            </div>


                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label for="InputProfesi" style="font-weight: bold;">Profesi</label>
                                                    <input name="profesi" type="text" class="form-control @error('profesi') is-invalid @enderror" id="InputProfesi" value="{{$data_volunteer->profesi}}" disabled="disabled">
                                                </div>
                                            </div>


                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="InputBidang" style="font-weight: bold;">Bidang</label>
                                                    <select name ="bidang" class="form-control @error('bidang') is-invalid @enderror" id="exampleFormControlSelect1" disabled="disabled">
                                                            <option value="Bahasa Inggris" @if($data_volunteer->bidang == 'Bahasa Inggris') selected @endif>Bahasa Inggris</option>
                                                            <option value="Bahasa Indramayu Krama" @if($data_volunteer->bidang == 'Bahasa Indramayu Krama') selected @endif>Bahasa Indramayu Krama</option>
                                                            <option value="Seni Budaya dan Keterampilan" @if($data_volunteer->bidang == 'Seni Budaya dan Keterampilan') selected @endif>Seni Budaya dan Keterampilan</option>
                                                            <option value="Pengembangan Anak-anak" @if($data_volunteer->bidang == 'Pengembangan Anak-anak') selected @endif>Pengembangan Anak-anak</option>
                                                            <option value="Kesehatan" @if($data_volunteer->bidang == 'Kesehatan') selected @endif>Kesehatan</option>
                                                            <option value="Lain-lain" @if($data_volunteer->bidang == 'Lain-lain') selected @endif>Lain-lain</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="InputEmail" style="font-weight: bold;">Email</label>
                                                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="InputEmail" value="{{$data_volunteer->email}}" disabled="disabled">
                                                </div>
                                            </div>
                                        
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                   <label for="InputPassword" style="font-weight: bold;">Password</label>
                                                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="InputPassword" value="{{$data_volunteer->password}}" disabled="disabled">
                                                </div>
                                            </div>
                                        </div>  
                                     
                                        
                                        <a class="btn btn-info btn-fill pull-right" href="{{url('/profil_edit')}}">Edit Profil</a>
                                        <a class="btn btn-primary btn-fill pull-right" href="/profil_pdf">Cetak Data Profil</a>
                                        <div class="clearfix"></div>
                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
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





