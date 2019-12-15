<?php 
session_start();
require 'fungsi.php';

if (isset($_POST['submit'])) {

$email = $_POST['email'];
$password = $_POST['pwd'];

$result = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");

if (mysqli_num_rows($result) === 1) {

  $data = mysqli_fetch_array($result);
  $nama = $data['nama'];
  $pass = $data['password'];

if ($password === $pass) {

  $_SESSION['login'] = true;
  $_SESSION['nama'] = $nama;


  echo "<script>
  alert('Login Berhasil');
  document.location.href='homepembeli.php';
  </script>";
  exit;
}
}
$error = true;
echo "<script>
  alert('Login Gagal');
  document.location.href='login.php';
  </script>";
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img src="foto/2Logo-Botani-1.png" class="img-fluid" height="140" width="s140">
					<h1>Taman Botani</h1>
				</div>
			</div>	
		</div>
	</div>

	<div class="content">
		<div class="conten container">
			<div class="row">
				<div class="left col-md-6">
					<div class="row">
						<div class="col-md-12"><img src="foto/taman-botani-sukorambi.png" class="gambar1 img-fluid">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12"><img src="foto/2444221531.jpg" class="gambar2 img-fluid">
						</div>
					</div>
				</div>
				<div class="right col-md-6 p-5">
					<h1 class="text-center">Masuk</h1>
					<form method="POST" action="">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control rounded-pill" id="email" name="email">
						</div>
						<div class="form-group">
							<label for="pwd">Kata Sandi</label>
							<input type="password" class="form-control rounded-pill" id="pwd" name="pwd">
						</div>
						<div class="form-group">
							<br><hr>
							<div >
								<button class="btn btn-primary rounded-pill" type="submit" name="submit">Masuk</button>
							</div>
							<br><br>
							<div class="text-left">
								<a href="lupapassword.php">Lupa Password?</a>
							<div class="text-right float-right">
								<a href="registrasi.php">Registrasi</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="container text-center text-white">
			<div class="row">
				<div class="col-md-4">
						<div class="mt-3">
							Kontak Kami  <i class="fab fa-whatsapp"></i>  <i class="fas fa-phone-square-alt"></i>  <i class="fas fa-envelope-square"></i>
						</div>
				</div>
				<div class="col-md-4">
						<div class="mt-3">
							<h4>Taman Botani</h4>
						</div>
				</div>
				<div class="col-md-4">
						<div class="mt-3">
							Ikuti Kami  <i class="fab fa-facebook-f"></i>  <i class="fab fa-instagram"></i>
						</div>
				</div>			
			</div>
		</div>
	</div>

</body>
</html>