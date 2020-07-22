<!DOCTYPE html>
<html>
<head>
	<title>Laporan Volunteer</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h3>LAPORAN DATA VOLUNTEER</h3>
		<h3>E - VOLUNTEER SOCIAL CLASS</h3>
		<h4>Jatibarang, Indramayu. Jawa Barat</h4>
		<hr>
	</center>
	<br>


	<table class='table table-bordered' border="1" cellspacing="0" cellpadding="20px">
		<thead>
			<tr>
				<th>No</th>
				<th>ID Volunteer</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Desa</th>
				<th>Kecamatan</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Kontak</th>
				<th>Profesk</th>
				<th>Bidang</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			 <?php $no = 0; ?>
            @foreach($data_volunteer as $v)
            <?php $no++; ?>
            <tr>
                <td>{{ $no }}</td>
                <td>{{$v->id}}</td>
                <td>{{$v->nama}}</td>
                <td>{{$v->alamat}}</td>
                <td>{{$v->desa}}</td>
                <td>{{$v->kecamatan}}</td>
                <td>{{$v->tgl_lahir}}</td>
                <td>{{$v->jk}}</td>
                <td>{{$v->kontak}}</td>
                <td>{{$v->profesi}}</td>
                <td>{{$v->bidang}}</td>
                <td>{{$v->email}}</td>

			@endforeach
		</tbody>
	</table>

</body>
</html>