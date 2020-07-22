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
                            <li class="breadcrumb-item"><a href="/admin/datavolunteer">Volunteer</a></li>
                            <li class="breadcrumb-item active">Detail Volunteer</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Detail Volunteer</h3>
                    </div>
                </div>
                    
                <br>

                <div class="card">
                    <div class="card-body">
                        <div class="package text-left bg-white">
                            
                            <table class="table" border="1" style="border-color: white">
                                <tr>
                                    <th style="color:#696969">Nama</th>
                                    <td style="font-size: 20px; color: #000000;">{{ $data_volunteer->name}}</td>
                                </tr>
                                <tr>
                                    <th style="color:#696969">Alamat</th>
                                    <td style="font-size: 20px; color: #000000;">{{ $data_volunteer->alamat}}</td>
                                </tr>
                                <tr>
                                    <th style="color:#696969">Desa</th>
                                    <td style="font-size: 20px; color: #000000;">{{ $data_volunteer->desa}}</td>
                                </tr>
                                <tr>
                                    <th style="color:#696969">Kecamatan</th>
                                    <td style="font-size: 20px; color: #000000;">{{ $data_volunteer->kecamatan}}</td>
                                </tr>
                                <tr>
                                    <th style="color:#696969">Jenis Kelamin</th>
                                    <td style="font-size: 20px; color: #000000;">{{ $data_volunteer->jk}}</td>
                                </tr>
                                <tr>
                                    <th style="color:#696969">Tanggal Lahir</th>
                                    <td style="font-size: 20px; color: #000000;">{{ $data_volunteer->tgl_lahir}}</td>
                                </tr>
                                <tr>
                                    <th style="color:#696969">Kontak</th>
                                    <td style="font-size: 20px; color: #000000;">{{ $data_volunteer->kontak}}</td>
                                </tr>
                                <tr>
                                    <th style="color:#696969">Profesi</th>
                                    <td style="font-size: 20px; color: #000000;">{{ $data_volunteer->profesi}}</td>
                                </tr>
                                <tr>
                                    <th style="color:#696969">Bidang</th>
                                    <td style="font-size: 20px;  color: #000000;">{{ $data_volunteer->bidang}}</td>
                                </tr>
                                <tr>
                                    <th style="color:#696969">Email</th>
                                    <td style="font-size: 20px; color: #000000;">{{ $data_volunteer->email}}</td>
                                </tr>


                            </table>
                            <a href="/admin/datavolunteer" class="btn btn-primary btn-sm">Back</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
</div>



@stop