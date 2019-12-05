<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();

echo "<script>
		document.location.href='homepembeli2.php';
		</script>";
exit;

?>