<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>

 
		<h2>CETAK PRINT DATA DARI DATABASE DENGAN PHP<br/><a href="https://www.malasngoding.com">WWW.MALASNGODING.COM</a></h2>
 
 
		<?php 
		include 'fungsi.php';
		?>
 
		<table border ="1">
			<tr>
				<th>Tanggal</th>
				<th>JumlahTiket</th>
			</tr>
			<?php 
			$no = 1;
			$sql = mysqli_query($koneksi,"select * from coba_booking");
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
				<td><?php echo $data['jumlahtiket']; ?></td>
			</tr>
			<?php 
			}
			?>
		</table>
 
		<br/>
 
		<a href="cetak.php" target="_blank">CETAK</a>
 
 
</body>
</html>