<?php 
session_start();
require 'fungsi.php';
  if (!isset($_SESSION['login'])) {
   echo "<script>
  alert('Akun tidak ada');
  document.location.href='login.php';
  </script>";
  }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Pembayaran</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="detailbayar.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>
<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img src="foto/2Logo-Botani-1.png" class="img-fluid" height="140" width="s140">
					<h1>Taman Botani</h1>
					<div class="float-right dropdown">
                        <i class="btn fas fa-user justify-content-between" id="dropdownMenuButton" data-toggle="dropdown">
                        </i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Profil</a>
                                <a class="dropdown-item" href="#">Keluar</a>
                            </div>
                        </div>  
				</div>
			</div>	
		</div>
    </div>
    
	<div class="header1 text-center text-white pt-2" style="background-color: black;">
			<h3>DETAIL PEMBAYARAN</h3>
	</div>

	<div class="content">
	<div class="container">
		<div class="row dua">
			<div class="col-md-4">
        	</div>
        	<div class="col-md-4">
				<div class="card" style="background-color: rgba(136,228,182,0.6);">
                      <div class="card-body">
							<table>
								<tr>
									<th>Tanggal Pemesanan</th>
									<th>:</th>
									<th>
										<?php
										if(isset($_POST['submit'])){
										echo $_POST['tanggal'];}?>
									</th>
								</tr>
								<tr>
									<th>Jumlah Tiket</th>
									<th>:</th>
									<th>
									<?php
										if(isset($_POST['submit'])){
										echo $_POST['jumlahtiket'];}?>
									</th>
								</tr>
								<td colspan="3"><hr class="border border-dark"></td>
								<tr>
									<th>Total</th>
									<th>:</th>
									<th>
									<?php
										if($_POST['tanggal']== "Fri"){
											echo "Libur";
										}else{
											$jumlah = $_POST['jumlahtiket'];
											$total = $jumlah * 25000;
											echo $total;
										}
									?>
									</th>
								</tr>
							</table>
                      </div>
                </div>
        	</div>
        	<div class="col-md-4">
				<div class="card" style="background-color: rgba(136,228,182,0.6);">
                      <div class="card-body">
					  <form method="POST" action="detailpembayaran.php" style="margin: 40px auto 0px;">
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control rounded-pill" id="nama" name="nama">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control rounded-pill" id="alamat" name="alamat">
                                </div>
								<div class="form-group">
                                    <label for="no.telp">No.Telp</label>
                                    <input type="text" class="form-control rounded-pill" id="no.telp" name="no.telp">
                                </div>
                                <div class="form-group">
                                    <br><hr>
									
                                        <button class="btn btn-primary rounded-pill w-25" type="submit" name="submit"><a href="homepembeli.php">Batal</a></button>
									
										<button class="float-right btn btn-primary rounded-pill w-25" type="submit" name="submit"><a href="detailpemesanan.php">Pesan</a></button>
								
                                    <br><br>
                                </div>
                            </form>
                      </div>
                </div>
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