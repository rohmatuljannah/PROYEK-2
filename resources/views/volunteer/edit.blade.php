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
								<li class="breadcrumb-item"><a href="/datavolunteer">Volunteer</a></li>
								<li class="breadcrumb-item active">Edit Data Volunteer</li>
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
							<h3 class="card-title">Edit Data Volunteer</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->

						<div class="card-body">
							<form action="/admin/datavolunteer/{{$data_volunteer->id}}" method="POST">
								@method ('patch')
								{{csrf_field()}}
								<div class="form-group">
									<label for="InputNama">Nama</label>
									<input name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" id="InputNama" value="{{$data_volunteer->nama}}">
									@error('nama')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>

								
								<div class="form-group">
									<label for="InputAlamat">Alamat</label>
									<input name="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" id="InputAlamat" value="{{$data_volunteer->alamat}}">
									@error('alamat')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>

								
								<div class="form-group">
									<label for="InputDesa">Desa</label>
									<input name="desa" type="text" class="form-control @error('desa') is-invalid @enderror" id="InputDesa" value="{{$data_volunteer->desa}}">
									@error('desa')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>


								<div class="form-group">
									<label for="InputKecamatan">Kecamatan</label>
									<input name="kecamatan" type="text" class="form-control @error('kecamatan') is-invalid @enderror" id="InputKecamatan" value="{{$data_volunteer->kecamatan}}">
									@error('kecamatan')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>


								<div class="form-group">
									<label for="InputTanggalLahir">Tanggal Lahir</label>
									<input name="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="InputTanggalLahir" value="{{$data_volunteer->tgl_lahir}}">
									@error('tgl_lahir')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>


								<div class="form-group">
									<label for="exampleFormControlSelect1">Jenis Kelamin</label>
										<select name ="jk" class="form-control @error('jk') is-invalid @enderror" id="exampleFormControlSelect1">
										    <option value="Laki-Laki" @if($data_volunteer->jk == 'Laki-Laki') selected @endif>Laki-Laki</option>
										    <option value="Perempuan" @if($data_volunteer->jk == 'Perempuan') selected @endif>Perempuan</option>
										</select>
										@error('jk')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>
								

								<div class="form-group">
									<label for="InputKontak">Kontak</label>
									<input name="kontak" type="text" class="form-control @error('kontak') is-invalid @enderror" id="InputKontak" value="{{$data_volunteer->kontak}}">
									@error('kontak')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>
								

								<div class="form-group">
									<label for="InputProfesi">Profesi</label>
									<input name="profesi" type="text" class="form-control @error('profesi') is-invalid @enderror" id="InputProfesi" value="{{$data_volunteer->profesi}}">
									@error('profesi')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>
								

								<div class="form-group">
									<label for="InputBidang">Bidang</label>
									<select name ="bidang" class="form-control @error('bidang') is-invalid @enderror" id="exampleFormControlSelect1">
										    <option value="Bahasa Inggris" @if($data_volunteer->bidang == 'Bahasa Inggris') selected @endif>Bahasa Inggris</option>
										    <option value="Bahasa Indramayu Krama" @if($data_volunteer->bidang == 'Bahasa Indramayu Krama') selected @endif>Bahasa Indramayu Krama</option>
										    <option value="Seni Budaya dan Keterampilan" @if($data_volunteer->bidang == 'Seni Budaya dan Keterampilan') selected @endif>Seni Budaya dan Keterampilan</option>
										    <option value="Pengembangan Anak-anak" @if($data_volunteer->bidang == 'Pengembangan Anak-anak') selected @endif>Pengembangan Anak-anak</option>
										    <option value="Kesehatan" @if($data_volunteer->bidang == 'Kesehatan') selected @endif>Kesehatan</option>
										    <option value="Lain-lain" @if($data_volunteer->bidang == 'Lain-lain') selected @endif>Lain-lain</option>
										    
									</select>
									@error('bidang')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>
								

								<div class="form-group">
									<label for="InputEmail">Email</label>
									<input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="InputEmail" value="{{$data_volunteer->email}}">
									@error('email')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>
								

								<div class="form-group">
									<label for="InputPassword">Password</label>
									<input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="InputPassword" value="{{$data_volunteer->password}}">
									@error('password')<div class="invalid-feedback">{{$message}}</div> @enderror 
								</div>


								<!-- /.card-body -->
								<button type="submit" class="btn btn-warning">Update</button>
							</form>
						</div>
						<!-- /.card -->

					</div>
				</div>
			</div>
		</div>

		@endsection