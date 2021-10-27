<?php
if ( isset($_POST["masuk"]) ) {
	if ($_POST["username"] == "admin" && $_POST["pass"] == "root") {
	header("Location: index.html");
	exit;
	} else {
		//jika salah maka muncul peringatan
	$eror = true; }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pemograman web</title>
	<link rel="stylesheet" href="cobastyleTGR.css">
</head>
<body>

	<div class="boxutama">
		<div class="atas">
			<h1>TEGAR SUSILO.COM</h1> <br>
			<h4>Selamat Datang</h4>

		</div>
		<div class="tengah">
		<div id="menukiri">
		<ul>
			<li><a href="index.html"> Home</a></li>
			<li><a href="cobalogin.php">Masuk</a></li>
			<li><a href="https://www.youtube.com/channel/UCKdDcI35b2RXp8JBa_-G-gg">Kontak</a></li>
		</ul>
	</div>
	<div id="artikel">
		<?php
	if (isset($eror)) : ?>
		<p style="color:yellow; font-style:italic;">ID atau Password anda SALAH </p>
	<?php endif; ?>
	
	
		<ul>
	<form action="" method="post"> <!-- "action" dikosongkan agar inputan di proses terlebih dahulu di form ini -->
		<li>
			<label for="iduser"><p>Username : </p></label>
			<input type="text" name="username" id="iduser">
		</li>
		<li>
			<label for="idpass"><p>Password : </p></label>
			<input type="Password" name="pass" id="idpass">
		</li>
		<li>
			<button type="submit" name="masuk">LOGIN</button>
		</li>
	</form>
</ul>
	</div>
</div>
<div class="bawah">
	<b>Copyright &copy; 2021 By : Tegar Susilo</b>
</div>

	</div>

	

</body>
</html>