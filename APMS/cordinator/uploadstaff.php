<?php 
include "header.php";
include "sidebar.php";
?>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <!-- your code-->
            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
  <div class="col-lg-6">
      <center>
          <h3>Upload Teachers File:</h3>
  <br>
  <input type="file" required="" name="respfile" class="form-control" name="firstname"><br>
  <br>
  <input type="submit" class="form-control btn-success" name="submfile">
      </center>
  </div>
</form>
<?php
 if(isset($_POST["submfile"])){

echo $filename=$_FILES["respfile"]["tmp_name"];

if($_FILES["respfile"]["size"] > 0)
{

$file = fopen($filename, "r");
while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
{

//It wiil insert a row to our subject table from our csv file`
$result=mysqli_query($conn, "insert into teachers values('','$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]')");

if(! $result )
{
?>
<script type="text/javascript">
  alert("Invalid File:Please Upload respfile File.");
</script>
<script type="text/javascript">
  window.location = "uploadstaff.php"
</script>
<?php
}
}
fclose($file);
//throws a message if data successfully imported to mysql database from excel file
}
}
?>
                </div>
            </div>


                            </div>
                        </div>
                    </div>
<?php
include "footer.php";
?>            