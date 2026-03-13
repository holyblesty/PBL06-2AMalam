<!DOCTYPE html>
<html>
<head>
<title>Tiket</title>
</head>
<body>

<h1>Jenis Tiket</h1>

<form method="POST" action="/ticket/store">
@csrf

<label>Nama Tiket</label><br>
<input type="text" name="nama_tiket"><br><br>

<label>Harga</label><br>
<input type="number" name="harga"><br><br>

<label>Kuota</label><br>
<input type="number" name="kuota"><br><br>

<button type="submit">Tambah Tiket</button>

</form>

</body>
</html>