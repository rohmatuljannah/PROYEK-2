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
							<li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
							<li class="breadcrumb-item active">Volunteer</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<div class="row">
			<div class="col-md-12">

				<div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Laporan Aktivitas</h3>
                            </div>
					@if (session('status'))
					<div class="alert alert-success">
						{{ session('status')}}
					</div>
					@endif
				</div>
				
				<br>
				<!-- /.card-header -->
				<div class="card-body">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Nama Volunteer</th>
							</tr>
							<tr>
								<?php $no = 0; ?>
								@foreach($detail_act as $d)
								<?php $no++; ?>
							<tr>
								<td>{{$no}}</td>
								<td>{{$d->judul}}</td>
								<td>{{$d->nama}}</td>
								<!-- <td>
									<a href="" class="btn btn-success">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                     </a>
                                    <a href="" class="btn btn-info">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="" class="btn btn-danger" onclick="return confirm('Yakin mau dihapus ?')">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
								</td> -->
							</tr>
							@endforeach
						</tbody>
					</table>
					<!-- <br>
					<br>
					<a href="/laporan_volunteer" class="btn btn-primary"> Cetak Data Volunteer</a> -->
				</div>
				<!-- /.card-body -->


			</div>
		</div>
	</div>
</div>
</div>



@stop