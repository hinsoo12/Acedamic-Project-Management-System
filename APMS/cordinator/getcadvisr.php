<?php
include "../conn.php";
if(!empty($_POST["studid2"])) 
{
	$usrt = 'co-advisor';
	
 $sql=mysqli_query($conn,"select * from advosorandco where usertype='".$usrt."' &&  coandadvcode ='".$_POST['studid2']."' ");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo $row['coandadvcode'];?>"><?php echo $row['firstname']; echo " "; echo $row['middlename']; echo " "; echo $row['lastname']; ?></option>
  <?php
}
}

?>