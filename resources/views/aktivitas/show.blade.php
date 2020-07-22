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
                            <li class="breadcrumb-item"><a href="admin/aktivitas">Aktivitas</a></li>
                            <li class="breadcrumb-item active">Detail Aktivitas</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Detail Aktivitas</h3>
                    </div>
                </div>
                    
                <br>
                <!-- /.card-header -->

                <div class="card">
                    <div class="card-body">
                        <div class="package text-left bg-white">
                            <table class="table" border="1" style="border-color: white">
                                <tr>
                                    <th style="color:#696969">Nama Aktivitas</th>
                                    <td style="font-size: 20px;  color: #000000;">{{ $data_aktivitas->nama_aktivitas }}</td>
                                </tr>
                                <tr>
                                    <th style="color:#696969">Tanggal</th>
                                    <td style="font-size: 20px; color: #000000;">{{ $data_aktivitas->tanggal }}</td>
                                </tr>

                                <tr>
                                    <th style="color:#696969">waktu</th>
                                    <td style="font-size: 20px; color: #000000;">{{ $data_aktivitas->waktu }}</td>
                                </tr>

                                <tr>
                                    <th style="color:#696969">Tempat</th>
                                    <td style="font-size: 20px; color: #000000;">{{ $data_aktivitas->tempat }}</td>
                                </tr>
                                <tr>
                                    <th style="color:#696969">Deskripsi</th>
                                    <td style="font-size: 20px; color: #000000;">{{ $data_aktivitas->deskripsi }}</td>
                                </tr>

                                <tr>
                                    <th style="color:#696969">Status</th>
                                    <td style="font-size: 20px;color: #000000;">{{ $data_aktivitas->status }}</td>
                                </tr>

                            </table>
                            <a href="/admin/aktivitas" class="btn btn-primary btn-sm">Back</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
</div>


@stop