<!DOCTYPE html>
<html>
<head>
	<title>Laporan Penjualan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Penjualan Kendaraan</h4>
		<h6><a></a></h5>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
                <th>No</th>
				<th>tipe kendaraan</th>
				<th>tahun</th>
				<th>warna</th>
				<th>harga</th>
				<th>stok</th>
				<th>terjual</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($kendaraans as $k)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$k->tipe_kendaraan}}</td>
				<td>{{$k->tahun_keluaran}}</td>
				<td>{{$k->warna}}</td>
				<td>{{$k->harga}}</td>
				<td>{{$k->stok}}</td>
                <td>{{$k->terjual}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>