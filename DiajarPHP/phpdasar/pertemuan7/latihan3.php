<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
<?php if (isset($_POST["submit"])) : ?>
<h1>Hallo <?= $_POST["tipe"]; ?></h1>
<?php endif; ?>
<!-- lamun actionna kosong berarti dikirim ka halaman ieu deui -->
<form action="" method="post">
	Masukkan Tipe :
	<input type="text" name="tipe">
	<br>
	<button type="submit" name="submit">Kirim!</button>
</form>


</body>
</html>