<?php
if(isset($_POST['importFile'])){
  $MIME_types = array(
                      'text/x-comma-separated-values', 
                      'text/comma-separated-values', 
                      'application/octet-stream', 
                      'application/vnd.ms-excel', 
                      'application/x-csv', 
                      'text/x-csv', 
                      'text/csv', 
                      'application/csv', 
                      'application/excel', 
                      'application/vnd.msexcel', 
                      'text/plain'
                     );
  if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$MIME_types)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
           $dbhost='localhost';
           $dbuser='root';
           $dbpass='';
           $dbname='petshop';
           $db=new mysqli($dbhost,$dbuser,$dbpass,$dbname);
           $sql="LOAD DATA LOCAL INFILE '".addslashes($_FILES['file']['tmp_name'])."' "
               ."INTO TABLE pertanyaan "
               ."FIELDS TERMINATED BY ',' "
               ."LINES TERMINATED BY '\n' ";
           $db->query($sql) or 
           die("Fail to import data file to db, error number [".$db->errno."] : ".$db->error." {$sql}");
           echo 'import data successfully';
        }
  }
} ?><!DOCTYPE html>
<html>
<head>
	<title>Detail Pembayaran</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="unggahbuktipembayaran.css">
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
		<div class="col-md-6">

		</div>
		<div class="col-md-6">
			<h3 class="text-left">DETAIL PEMBAYARAN</h3>
		</div>

	</div>

	<div class="content">
	<div class="container">
		<div class="row dua">
			<div class="col-md-6">
        	</div>
        	<div class="col-md-6">
				<div class="card" style="background-color: rgba(136,228,182,0.6);">
                      <div class="card-body">
                      	<div class="row">
                      		
                      	</div>
                      	<div class="row1 left">
                      		<button class="btn btn-primary rounded-pill w-25" type="file" file="submit">Cari...</button>
                      	</div>
                      	<div class="row2 pt-20">
                      		<button class="float-left btn btn-primary rounded-pill w-25" type="submit" name="submit" value="import">Unggah</button>
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