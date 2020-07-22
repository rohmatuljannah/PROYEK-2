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

 <!-- Content Header (Page header) -->
      <div class="row">
        <div class="col-lg-12">
        <form action="/aktivitas/{{$aktivitas->id}}/update" method="POST">
        {{csrf_field()}}
        <div class="form-group">
          <label for="exampleInputEmail1">Foto</label>
          <input type="file" class="form-control-file" name="foto" id="exampleFormControlFile1" value="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$aktivitas->Waktu}}">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Pekerjaan</label>
          <input name="pekerjaan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$aktivitas->Tempat}}">
        </div>

        <div class="form-group">
          <label for="exampleInputTextarea1">Alamat</label>
         <textarea name="alamat" class="form-control" id="exampleInputTextarea1" rows="3">{{$aktivitas->Deskripsi}}</textarea>
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
      </form>
      </div>
    </div>    
                     
      </div>

 
    </div>
    </div>
  </div>
</div>

@endsection
      