<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>
 
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
            <th>Nama pemesanan</th>
            <th>Alamat</th>
            <th>Tanggal Berkunjung</th>
            <th>Jumlah tiket</th>
            <th>No. Telepon
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from pemesanan");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['namapemesanan']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tanggal_berkunjung']; ?></td>
            <td><?php echo $data['jumlah_tiket']; ?></td>
            <td><?php echo $data['no_telp']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>