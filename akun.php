<!DOCTYPE html>
<html>
<head>
	<title>Akun</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="akun.css">
	<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>

<!-- Header -->

<section>
	<header class="transparan" >
		<div class="container" >
			<nav class="navbar navbar-expand-lg navbar-dark mt-auto mb-2">
			  	<a href="#">
			  		<img src="foto/2Logo-Botani-1.png" height="100" width="100">
			  	</a>
			  	<div class="nav-item">
				  	<h1 class="text-white text-uppercase font-weight-bolder ml-4 shadow-sm">taman botani</h1>
			  	</div>
			  	<form class="form-inline ml-auto">
                    <button class="btn btn-light rounded-pill " style="background-color: rgba(136,228,182,0.6);" type="submit">Daftar Akun <i  class="fas fa-user"></i></button>
                    <a href= "registrasi.php" ></a>
			  	</form>
			</nav>
		</div>
	</header>
	<div class="transparan2">
			<h1></h1>
	</div>
</section>

<!-- Header Akhir -->


<!-- Content -->

	<div class="content">
		<div class="konten container" style="background-color: rgba(136,228,182,0.6);">
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
				<div class="right col-md-6">
					
					<h1 class="text-center text-white">Akun</h1>
					<form method="POST" action="">
						
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control rounded-pill" id="nama" name="nama">
						</div>

						<div class="form-group">
							<label for="jeniskelamin">Jenis Kelamin</label>
							<input type="radio" id="Laki-laki" value="Laki - Laki" name="jeniskelamin">
							<label for="Laki-laki" >Laki-laki</label>
							<input type="radio" id="perempuan" value="Perempuan" name="jeniskelamin">
							<label for="perempuan">Perempuan</label>
						</div>
						
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control rounded-pill" id="email" name="email">
						</div>

						<div class="form-group">
							<label for="pwd">Password</label>
							<input type="password" class="form-control rounded-pill" id="pwd" name="pwd">
						</div>

						<button class="btn btn-success rounded-pill w-25" style="background-color: rgb(57, 126, 99);" type="submit" name="submit">Ubah</button>
					</form>		
				
				</div>
			</div>
		</div>
	</div>

<section>
	<footer>
		<div class="container text-center text-white">
			<div class="row">
				<div class="col-md-4">
					<div class="mt-3">
					  Kontak Kami  
					  <i class="fab fa-whatsapp"></i>
					  <i class="fas fa-phone-square-alt"></i>
					  <i class="fas fa-envelope-square"></i>
					</div>
				</div>
				<div class="col-md-4">
					<div class="mt-3">
						<h4>Taman Botani</h4>
					</div>
				 </div>
				<div class="col-md-4">
					<div class="mt-3">
					  Ikuti Kami
					  <i class="fab fa-facebook-f"></i>
					  <i class="fab fa-instagram"></i>
					</div>
				</div>			
			</div>
		</div>
	</footer>
</section>	
</body>
</html>