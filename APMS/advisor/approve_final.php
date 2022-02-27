<?php
include "../conn.php";
$id=$_GET["id"];
mysqli_query($conn,  "update project set status ='cordact' where id = '$id' ");
?>
<script type="text/javascript">
	alert("successfully updated");
</script>
<script type="text/javascript">
	window.location = "markprjct.php";
</script>