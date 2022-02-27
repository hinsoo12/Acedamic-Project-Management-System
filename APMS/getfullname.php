<?php
session_start();
include "conn.php";
$res=mysqli_query($conn, "select * from department where id = '$_SESSION[deppnma]'");
							while ($row = mysqli_fetch_array($res)) {
							$id =$row["id"];
							$depname = $row["name"];	}
							

if(!empty($_POST["studid1"])) 
{
 $sql=mysqli_query($conn,"select * from student where department='".$depname."' && stud_id='".$_POST['studid1']."' ");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo $row['firstname']; echo " "; echo $row['lastname'];?>"><?php echo $row['firstname']; echo " "; echo $row['lastname']; ?></option>
  <?php
}
}

if(!empty($_POST["studid2"])) 
{
	
 $sql=mysqli_query($conn,"select * from student where department='".$depname."' && stud_id ='".$_POST['studid2']."' ");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo $row['firstname']; echo " "; echo $row['lastname'];?>"><?php echo $row['firstname']; echo " "; echo $row['lastname']; ?></option>
  <?php
}
}

if(!empty($_POST["studid3"])) 
{
 $sql=mysqli_query($conn,"select * from student where department='".$depname."' && stud_id='".$_POST['studid3']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo $row['firstname']; echo " "; echo $row['lastname'];?>"><?php echo $row['firstname']; echo " "; echo $row['lastname']; ?></option>
  <?php
}
}
if(!empty($_POST["studid4"])) 
{
 $sql=mysqli_query($conn,"select * from student where department='".$depname."' && stud_id='".$_POST['studid4']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo $row['firstname']; echo " "; echo $row['lastname'];?>"><?php echo $row['firstname']; echo " "; echo $row['lastname']; ?></option>
  <?php
}
}
if(!empty($_POST["studid5"])) 
{
 $sql=mysqli_query($conn,"select * from student where department='".$depname."' && stud_id='".$_POST['studid5']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo $row['firstname']; echo " "; echo $row['lastname'];?>"><?php echo $row['firstname']; echo " "; echo $row['lastname']; ?></option>
  <?php
}
}
?>
