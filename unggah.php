<?php 

include 'fungsi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$email = $_POST['email'];
$pwd = $pwd ['pwd'];


mysql_query("UPDATE user SET nama='$nama', jeniskelamin ='$jeniskelamin', email='$email', pwd = '$pwd' WHERE id='$id'");

header("location:akun.php?pesan=update");
?>