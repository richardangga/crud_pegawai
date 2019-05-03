<!DOCTYPE html>
<html>
<head>
<title>CRUD Pegawai</title>
</head>
<body>
<h3>Data Pegawai</h3>
<a href="/pegawai/tambah"> Tambah Pegawai Baru</a>
<br/>
<br/>
<table border = "1">
<tr>
<th>Nama</th>
<th>Jabatan</th>
<th>Umur</th>
<th>Alamat</th>
<th>Opsi</th>
</tr>
@foreach($pegawai as $peg)
<tr>
<td>{{$peg->pegawai_nama}}</td>
<td>{{$peg->pegawai_jabatan}}</td>
<td>{{$peg->pegawai_umur}}</td>
<td>{{$peg->pegawai_alamat}}</td>
<td>
<a href="/pegawai/edit/{{$peg->pegawai_id}}">Edit</a>
<a href="/pegawai/hapus/{{$peg->pegawai_id}}">Hapus</a>
</td>
</tr>
@endforeach
</table>
</body>
</html>