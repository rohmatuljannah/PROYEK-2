<!DOCTYPE html>
<html>
<head>
	<title>Laporan Aktivitas</title>
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h3>LAPORAN AKTIVITAS</h3>
		<h3>E - VOLUNTEER SOCIAL CLASS</h3>
		<h4>Jatibarang, Indramayu. JawaB Barat</h4>
		<hr>
	</center>
	<br>

	<table class='table table-bordered' border="1" cellspacing="0" cellpadding="20px">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Aktivitas</th>
				<th>Tempat</th>
				<th>Tanggal</th>
				<th>Waktu</th>
				<th>Deskripsi</th>
			</tr>
		</thead>
		<tbody>
			 <?php $no = 0; ?>
            @foreach($data_aktivitas as $aktivitas)
            <?php $no++; ?>
            <tr>
                <td>{{ $no }}</td>
                <td>{{$aktivitas->nama_aktivitas}}</td>
                <td>{{$aktivitas->tempat}}</td>
                <td>{{$aktivitas->tanggal}}</td>
                <td>{{$aktivitas->waktu}}</td>
                <td>{{$aktivitas->deskripsi}}</td>
			@endforeach
		</tbody>
	</table>

</body>
</html>