@extends('layouts.master')

@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="content-header">
				<div class="col-md-12">
					<div class="row">
						<div class="col-sm-6 offset-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="/aktivitas">Aktivitas</a></li>
								<li class="breadcrumb-item active">Edit Data Aktivitas</li>
							</ol>
						</div><!-- /.col -->
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Edit Data Aktivitas</h3>
						</div>
					
						<!-- /.card-header -->
						<!-- form start -->

						<div class="card-body">
							<form action="/admin/aktivitas/{{$data_aktivitas->id}}" method="POST">
								@method ('patch')
								{{csrf_field()}}


								<div class="form-group">
									<label for="InputNamaAktivitas">Nama Aktivitas</label>
									<input name="nama_aktivitas" type="text" class="form-control @error('nama_aktivitas') is-invalid @enderror" id="InputNamaAktivitas" placeholder="Nama Aktivitas" value="{{$data_aktivitas->nama_aktivitas}}">
									@error('nama_aktivitas')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>


								<div class="form-group">
									<label for="InputTanggal">Tanggal</label>
									<input name="tanggal" type="date" class="form-control @error('tanggal') is-invalid @enderror" id="InputTanggal" value="{{$data_aktivitas->tanggal}}">
									@error('tanggal')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>


								<div class="form-group">
									<label for="exampleInputWaktu">Waktu</label>
									<input name="waktu" type="text" class="form-control @error('waktu') is-invalid @enderror" id="exampleInputWaktu" value="{{$data_aktivitas->waktu}}">
									@error('waktu')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>


								<div class="form-group">
									<label for="InputTempat">Tempat</label>
									<input name="tempat" type="data" class="form-control @error('tempat') is-invalid @enderror" id="InputTempat" value="{{$data_aktivitas->tempat}}">
									@error('tempat')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>


								<div class="form-group">
									<label for="InputDeskripsi">Deskripsi</label>
									<textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="InputDeskripsi" rows="3">{{$data_aktivitas->deskripsi}}</textarea>
									@error('deskripsi')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>


								<div class="form-group">
									<label for="exampleFormControlSelect1">Status</label>
										<select name ="status" class="form-control @error('status') is-invalid @enderror" id="exampleFormControlSelect1">
										    <option value="Belum" @if($data_aktivitas->status == 'Belum') selected @endif>Belum</option>
										    <option value="Selesai" @if($data_aktivitas->status == 'Selesai') selected @endif>Selesai</option>
										</select> 
								</div>

								<button type="submit" class="btn btn-primary">Update</button>
							</form>
						</div>
						<!-- /.card -->

					</div>
				</div>
			</div>
		</div>
	</div>



		@endsection