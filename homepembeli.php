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
	<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="homepembeli.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img src="foto/2Logo-Botani-1.png" class="img-fluid" height="140" width="140">
					<h1>Taman Botani</h1>
                        <div class="float-right dropdown">
                        <i class="btn fas fa-user justify-content-between" id="dropdownMenuButton" data-toggle="dropdown">
                        </i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Profil</a>
                                <a class="dropdown-item" href="logout.php">Keluar</a>
                            </div>
                        </div>  
				</div>
			</div>
		</div>
    </div>
    
    <div class= "header1 ">
    </div>
<div class="content">
<div class="container">    
            <div class="card-deck">
                    <div class="card" style="background-color: rgba(136,228,182,0.6); height: 450px; margin-left: 40px;">
                      <div class="card-body text-left">
                            <h1 class="text-center">Pemesanan</h1>
                            <form method="POST" action="detailpembayaran.php" style="margin: 40px auto 0px;">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" value="dd" class="form-control rounded-pill" id="tanggal" name="tanggal">
                                </div>
                                <div class="form-group">
                                    <label for="jumlahtiket">Jumlah Tiket</label>
                                    <input type="jumlahtiket" class="form-control rounded-pill" id="jumlahtiket" name="jumlahtiket">
                                </div>
                                <div class="form-group">
                                    <br><hr>
                                    <div >
                                        <button class="btn btn-primary rounded-pill" type="submit" name="submit">Ok</button>
                                    </div>
                                    <br><br>
                                </div>
                            </form>
                      </div>
                    </div>
                    <div class="card" style="background-color: rgba(136,228,182,0.6); height: 350px;">
                      <div class="card-body text-left">
                            <h1 class="text-center">Sarana</h1>
                            <form method="POST" action="fungsi.php" style="margin: 70px auto 0px;">
                                    <div >
                                            <button class="btn btn-primary rounded-pill" type="submit" name="submit">Belajar</button>
                                        </div>
                                        <br><br>
                                        <div >
                                                <button class="btn btn-primary rounded-pill" type="submit" name="submit">Rekreasi</button>
                                            </div>
                            </form>
                      </div>
                    </div>
                    <div class="card" style="background-color: rgba(136,228,182,0.6); margin-right: 40px;">
                      <div class="card-body text-left">
                            <h1 class="text-center">Informasi</h1>
                            <form method="POST" action="fungsi.php" style="margin-top: 40px;">
                                <div class="form-group p-3 rounded" style="background-color:silver; height: 120px; margin-left: 25px;">
                                    <h4 style="text-align: center;">HARGA TIKET</h4>
                                    <h4>Senin - Kamis : Rp. 12.000</h4>
                                    <h4>Sabtu Minggu : Rp. 20.000</h4>
                                </div>
                                <div class="form-group p-3 rounded" style="background-color: silver; height: 100px; margin-left: 25px;">
                                        <label for="jmlpengunjung">JUMLAH PENGUNJUNG PER HARI</label>
                                        <br><br>
                                        <input type="text" class="form-control rounded-pill m-auto w-75" id="jmlpengunjung" name="jmlpengunjung">
                                    </div>
                                    <div class="form-group p-3 rounded" style="background-color: silver; margin-left: 25px;">
                                            <h4 style="text-align: center;">JAM KERJA</h4>
                                            <h4>Senin - Kamis </h4>
                                            <h4>Sabtu - Minggu : Jam 07.00 - 16.00</h4>
                                            <br>
                                            <h4 style="text-align: center;">Hari JUMAT LIBUR</h4>
                                        </div>
                                </div>
                            </form>
                      </div>
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