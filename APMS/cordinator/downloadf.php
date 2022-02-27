<?php
include "../conn.php";
$dow=$_GET["UID"];


$query = mysqli_query($conn, "select * from title where group_uid = '$dow'");
while ($ros = mysqli_fetch_array($query)) {
	$path = $ros['firstprojprop'];
	header('content-Disposition: attachment; filename = '.$path.'');
	header('content-type:application/octet-stream');
	header('content-length='.filesize($path));
}
?>