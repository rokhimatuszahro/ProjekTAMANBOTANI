<?php 
session_start();
require 'fungsi.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Pembeli</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="homepembeli.css">
	<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>

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

<section>
<content>
	<div class="container">    
	    <div class="card-deck">
		 	<!-- Card Pesanan -->
	        <div class="pesan card" style="background-color: rgba(136,228,182,0.6);">
	            <div class="card-body" id="1">
	                <a href="#1"><h2 class="text-center">Pemesanan</h2></a>
	                    <form method="POST" action="detailpembayaran.php">
	                    	<div class="form-group">
	                          	<label for="tanggal">Tanggal</label>
	                            <input type="date" value="dd" class="form-control rounded-pill" id="tanggal" name="tanggal">
	                        </div>
	                        <div class="form-group">
	                        	<label for="jumlahtiket">Jumlah Tiket</label>
	                         	<input type="jumlahtiket" required class="form-control rounded-pill" id="jumlahtiket" name="jumlahtiket">
	                        </div>
	                        <div class="form-group">
	                        		<br><hr class="w-75">
	                        	<div >
	                            	<button class="btn btn-success rounded-pill w-25" style="background-color: rgb(57, 126, 99);" type="submit" name="submit">Ok</button>
									<a href="detailpembayaran.php" ></a>

								</div>
	                        </div>
                        </form>
                </div>
	        </div>
	        <!-- Card Sarana -->
	        <div class="sarana card" id="2">
	            <div class="card-body">
	                <a href="#2"><h2 class="text-center">Sarana</h2></a>
	                	<form method="POST" action="fungsi.php">
	                        <div>
	                            <button class="tombol1 btn btn-primary rounded-pill" style="background-color: rgb(57, 126, 99);" type="submit" name="submit">Belajar</button>
	                        </div>
	                            <br><br>
	                        <div >
	                        	<button class="tombol2 btn btn-primary rounded-pill" style="background-color: rgb(57, 126, 99);" type="submit" name="submit">Rekreasi</button>
	                        </div>
	                    </form>
                </div>
            </div>
            <!-- Card Informasi -->
	        <div class="card" style="background-color: rgba(136,228,182,0.6); margin-right: 40px;">
	            <div class="card-body text-left" id="#3">
	                <a href="#3"><h2 class="text-center">informasi tiket</h2></a>
	                    <form method="POST" action="fungsi.php">
	                        <div class="form-group p-3 rounded" style="background-color:silver; height: 120px;>
	                            <h4 style="text-align: center;">HARGA TIKET</h4>
	                            <h4>Senin - Kamis : Rp. 12.000</h4>
	                            <h4>Sabtu Minggu : Rp. 20.000</h4>
	                        </div>
	                        <div class="form-group p-3 rounded" style="background-color: silver; height: 200px;">
	                            <label for="jmlpengunjung">JUMLAH PENGUNJUNG PER HARI</label>
									<br><br>
								<div>	                            
									<input type="text" class="form-control rounded-pill m-auto w-75" id="jmlpengunjung" name="jmlpengunjung">
								</div>

	                        </div>
	                        <div class="form-group p-3 rounded" style="background-color: silver;">
	                            <h4 style="text-align: center;">JAM KERJA</h4>
	                            <h4>Senin - Kamis </h4>
	                            <h4>Sabtu - Minggu : Jam 07.00 - 16.00</h4>
	                                <br>
	                            <h4 style="text-align: center;">Hari JUMAT LIBUR</h4>
	                        </div>
	                    </form>
	            </div>
	        </div>
	    </div>  
	    </div>
	</div>
</div>
</content>
</section>

<div class = "content">
    <div class= "content1 text-white">
        <label for="buktipembayaran">Bukti Pembayaran</label>
        <button class="btn btn-primary rounded-pill" style="background-color: rgb(57, 126, 99);" type="submit" name="submit">Unggah</button>
        <a href="unggah.php" ></a>
        
    </div>
    <br><br>
    <div class = "content2 text-white">
        <label for="buktipemesanan">Bukti Pemesanan</label>
        <button class="btn btn-primary rounded-pill" style="background-color: rgb(57, 126, 99);" type="submit" name="submit"> <a href="cetak.php" target="_blank">CETAK</a></button>
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