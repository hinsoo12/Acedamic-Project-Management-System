<?php
include "../conn.php";
$uid = $_GET['uid'];
mysqli_query($conn, "update groupcrt set status = 'Approved' where group_uid ='$uid' ");
?>
<script type="text/javascript">
    alert("Approved Successfully");
</script>

<script type="text/javascript">
    window.location = "maggroup.php";
</script>