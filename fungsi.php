<?php 
//koneksi database
$conn = mysqli_connect("localhost","root","","taman_botani");

//fungsi untuk menampilkan data dari database
function tampil($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row  = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
		return $rows;
	}
	
//fungsi untuk menyimpan data registrasi pembeli ke dalam database
function registrasi($data){
	global $conn;
 	$nama = htmlspecialchars($data["nama"]);
 	$jenkel = htmlspecialchars($data["jeniskelamin"]);
 	$email = htmlspecialchars($data["email"]);
 	$password = htmlspecialchars($data["pwd"]);
 	$pin = htmlspecialchars($data["pin"]);

 	//query insert data
 	$query = "INSERT INTO users values ('','$nama','$jenkel','$email','$password','$pin','1')";
 	mysqli_query($conn,$query);
 	return mysqli_affected_rows($conn);
 }

//fungsi untuk menyimpan data registrasi admin ke dalam database
function registrasiadmin($data){
	global $conn;
 	$nama = htmlspecialchars($data["nama"]);
 	$jenkel = htmlspecialchars($data["jeniskelamin"]);
 	$email = htmlspecialchars($data["email"]);
 	$password = htmlspecialchars($data["pwd"]);
 	$pin = htmlspecialchars($data["pin"]);

 	//query insert data
 	$query = "INSERT INTO users values ('','$nama','$jenkel','$email','$password','$pin','2')";
 	mysqli_query($conn,$query);
 	return mysqli_affected_rows($conn);
 }

 // untuk lupa password
 if (isset($_POST['reset'])) {
		$email = $_POST['email'];
		$passbaru = $_POST['passbaru'];
		$pin = $_POST['pin'];
		$query = "SELECT * FROM users WHERE email = '$email'";
		$result = mysqli_query($conn,$query);
		$cek = mysqli_num_rows($result);
		if ($cek === 1) {
			$data = mysqli_fetch_array($result);
			$pindb = $data['pin'];
			if ($pin == $pindb){
			$pass = $data['password'];

			$ganti = mysqli_query($conn,"UPDATE users SET
			password = REPLACE(password,'$pass','$passbaru')");
			session_start();

			$_SESSION['email'] = true;
			$_SESSION['email1'] = $email;
			$_SESSION['pass_reset'] = $passbaru;

			echo "<script>
				alert('password berhasil diganti');
				document.location.href='login.php';
			</script>";
			}
			echo "<script>
				alert('Pin salah!!!');
				document.location.href='lupapassword.php';
			</script>";
		}else{
		echo "<script>
				alert('Email salah!!!');
				document.location.href='lupapassword.php';
			</script>";}
			exit;
		}

 ?>