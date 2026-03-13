<!DOCTYPE html>
<html>
<head>
<title>Tambah Event</title>
</head>
<body>

<h1>Tambah Event</h1>

<form method="POST" action="/event/store">
@csrf

<label>Judul Event</label><br>
<input type="text" name="judul"><br><br>

<label>Deskripsi</label><br>
<textarea name="deskripsi"></textarea><br><br>

<label>Tanggal</label><br>
<input type="date" name="tanggal"><br><br>

<label>Lokasi</label><br>
<input type="text" name="lokasi"><br><br>

<button type="submit">Simpan</button>

</form>

</body>
</html>