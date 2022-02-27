<?php
include "../conn.php";
$id = $_GET['id'];
mysqli_query($conn, "update user set status = 'deactivated' where user_id = '$id'");
?>
<script type="text/javascript">
	alert("Deactivated Successfully Done");
	window.location = "managecord.php";
</script>