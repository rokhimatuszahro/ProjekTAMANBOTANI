<?php 
require 'fungsi.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lupa Password</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="lupapassword.css">
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
		<div class="konten container">
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
					<h1 class="text-center">Lupa Password</h1>
					<form method="POST" action="fungsi.php">
						<div class="form-group">
							<label for="pin">Pin</label>
							<input type="text" class="form-control rounded-pill" id="pin" name="pin">
						</div>
						<div class="form-group">
							<label for="passbaru">Password Baru</label>
							<input type="text" class="form-control rounded-pill" id="passbaru" name="passbaru">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="Email" class="form-control rounded-pill" id="email" name="email">
						</div>
						<div class="form-group">
							<br><hr>
							<div >
								<button class="btn btn-primary rounded-pill" type="submit" name="reset">Ganti Password</button>
							</div>
							<br><br>
							<div class="text-left">
								<a href="login.php">Masuk</a>
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