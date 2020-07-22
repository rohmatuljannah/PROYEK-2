@extends('layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin-dashboard')}}}">Home</a></li>
              <li class="breadcrumb-item active">Profil Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <div class="container">
 	@if (session('sukses'))
 	<div class="alert alert-success" role="alert">
  		{{session('sukses')}}
	</div>
	@endif

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('/img/users/'.$admin->foto)}}"
                       alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">{{$admin->nama}}</h3>
                <p class="text-muted text-center">{{$admin->jabatan}}</p>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Alamat</b> <a class="float-right">{{$admin->alamat}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Kontak</b> <a class="float-right">{{$admin->kontak}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right">{{$admin->email}}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Password</b> <a class="float-right">{{$admin->password}}</a>
                  </li>
                </ul>
                <a href="#" class="btn btn-primary btn-block"><b>Edit Profil</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

@endsection