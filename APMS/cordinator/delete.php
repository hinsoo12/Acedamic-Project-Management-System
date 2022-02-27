<?php
include "../conn.php";
$id=$_GET["id"];
mysqli_query($conn,  "delete from post_noticee where id = '$id' ");
?>
<script type="text/javascript">
	alert("successfully deleted");
</script>
<script type="text/javascript">
	window.location = "managenotif.php";
</script>