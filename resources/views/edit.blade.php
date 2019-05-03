<!DOCTYPE html>
<html>
<head>
<title>Edit Pegawai</title>
</head>
<body>
<h3>Edit Pegawai</h3>
<br/>
<br/>
@foreach($pegawai as $peg)
<form action="/pegawai/update" method="post">
{{csrf_field()}}
<input type="hidden" name="id" value="{{$peg->pegawai_id}}"><br/>
Nama<input type="text" name="nama" required="required" value="{{$peg->pegawai_nama}}"><br/>
Jabatan<input type="text" name="jabatan" required="required" value="{{$peg->pegawai_jabatan}}"><br/>
Umur<input type="text" name="umur" required="required" value="{{$peg->pegawai_umur}}"><br/>
Alamat<textarea type="text" name="alamat" required="required">{{$peg->pegawai_alamat}}</textarea><br/>
<input type="submit" value="Simpan Data">
</form>
@endforeach
</body>
</html>