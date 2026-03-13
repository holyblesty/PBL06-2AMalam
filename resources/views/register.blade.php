<!DOCTYPE html>
<html>
<head>
<title>Pendaftaran Event</title>
</head>
<body>

<h1>Pendaftaran Event</h1>

<form method="POST" action="/register/store">
@csrf

<label>Nama Peserta</label><br>
<input type="text" name="nama"><br><br>

<label>Pilih Tiket</label><br>
<select name="tiket">
<option>Early Bird</option>
<option>Normal</option>
<option>VIP</option>
</select><br><br>

<button type="submit">Daftar</button>

</form>

</body>
</html>