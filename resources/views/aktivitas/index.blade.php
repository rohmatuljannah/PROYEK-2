@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="content-header">
				<div class="row">
				<div class="col-md-12">
					<div class="col-sm-6 offset-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="/admin-dashboard">Home</a></li>
							<li class="breadcrumb-item active">Aktivitas</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<div class="row">
			<div class="col-md-12">

				<div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Data Aktivitas</h3>
                            </div>
					@if (session('status'))
					<div class="alert alert-success">
						{{ session('status')}}
					</div>
					@endif
				</div>
					<button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
						Tambah Data Aktivitas
					</button>
				<br>
				
				<!-- /.card-header -->
				<div class="card-body">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>NO</th>
								<th>NAMA AKTIVITAS</th>
								<th>TANGGAL</th>
								<th>STATUS</th>
								<th>AKSI</th>
							</tr>
							<?php $no = 0; ?>
							@foreach($data_aktivitas as $aktivitas)
							<?php $no++; ?>
							<tr>
								<td>{{ $no }}</td>
								<td>{{$aktivitas->nama_aktivitas}}</td>
								<td>{{$aktivitas->tanggal}}</td>
								<td>{{$aktivitas->status}}</td>
								<td>
									<!-- <a href="/aktivitas/{{$aktivitas->id}} " class="btn btn-info btn-sm">Detail</a>
									<a href="/aktivitas/{{$aktivitas->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
									<a href="/aktivitas/{{$aktivitas->id}}/destroy" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus ?')">Delete</a> -->

									 <a href="/admin/aktivitas/{{$aktivitas->id}}" class="btn btn-success">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                     </a>
                                    <a href="/admin/aktivitas/{{$aktivitas->id}}/edit" class="btn btn-info">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="/admin/aktivitas/{{$aktivitas->id}}/destroy" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus ?')">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                       
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<br>
					<br>
					<a href="/laporan_aktivitas" class="btn btn-primary">Cetak Data Aktivitas</a>
				</div>
				<!-- /.card-body -->


			</div>
		</div>
	</div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Aktivitas</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
					<form action="/admin/aktivitas/create" method="POST">
						{{csrf_field()}} 
					<div class="form-group">
						<label for="InputNamaAktivitas">Nama Aktivitas</label>
						<input name="nama_aktivitas" type="text" class="form-control @error('nama_aktivitas') is-invalid @enderror" id="InputNamaAktivitas" placeholder="Masukan Judul Aktivitas">
						@error('nama_aktivitas')<div class="invalid-feedback">{{$message}}</div> @enderror
					</div>


					<div class="form-group">
						<label for="InputTanggal">Tanggal</label>
						<input name="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" id="InputTanggal" placeholder="Masukan Tanggal">
						@error('tanggal')<div class="invalid-feedback">{{$message}}</div> @enderror
					</div>
					

					<div class="form-group">
						<label for="exampleInputPassword1">Waktu</label>
						<input name="waktu" type="text" class="form-control @error('waktu') is-invalid @enderror" id="exampleInputPassword1" placeholder="Masukan Waktu">
						@error('waktu')<div class="invalid-feedback">{{$message}}</div> @enderror
					</div>
					

					<div class="form-group">
						<label for="InputTempat">Tempat</label>
						<input name="tempat" type="text" class="form-control @error('tempat') is-invalid @enderror" id="InputTempat" placeholder="Masukan Tempat">
						@error('tempat')<div class="invalid-feedback">{{$message}}</div> @enderror
					</div>
					

					<div class="form-group">
						<label for="InputDeskripsi">Deskripsi</label>
						<textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="InputDeskripsi" rows="3" placeholder="Masukan Deskripsi"></textarea>
						@error('deskripsi')<div class="invalid-feedback">{{$message}}</div> @enderror
					</div>

					<!-- <div class="form-group">
						<label>Gambar</label>
						<div class="input-group">
					     <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror" id="InputPhoto" rows="3" placeholder="Masukan Gambar">
                         @error('photo')<div class="invalid-feedback">{{$message}}</div> @enderror
					</div> -->
					</div>

					<div class="form-group">
						<label for="exampleFormControlSelect1">Status</label>
						<select name="status" class="form-control @error('status') is-invalid @enderror" id="exampleFormControlSelect1">
							<option>Belum</option>
							<option>Selesai</option>
						</select>
						@error('status')<div class="invalid-feedback">{{$message}}</div> @enderror
					</div>
					<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
			</div>
			
			</form>
		</div>

	</div>

	@stop