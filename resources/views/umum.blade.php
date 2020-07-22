@extends('layouts/main')

@section('title', 'E-Volunteer Social Class')

@section ('container')
<div class="ftco-blocks-cover-1">
  <div class="site-section-cover overlay" data-stellar-background-ratio="0.3" style="background-image: url('images/6.jpg')">
    <div class="container">
      <div class="row align-items-center ">

        <div class="col-md-5 mt-5 pt-5">
          <span class="text-cursive h3 text-red">Home</span>
          <h1 class="mb-2 font-weight-bold text-teal" style="font-size: 40px">Ayo Jadi Volunteer!</h1>
          <p><a href="index.html" class="text-white" style="font-size: 25px">Home</a>
          </p>
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
        <h2 class="text-black"  style="font-weight: bolder; font-size: 40px; font-family: Consolas">Gallery Of The Kids</h2>
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