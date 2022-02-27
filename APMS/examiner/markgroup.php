<?php 
include "header.php";
include "sidebar.php";
$id = $_GET["id"];
$ch =mysqli_query($conn, "select * from advosorandco where username= '$_SESSION[username]'");
                                            while ($roww = mysqli_fetch_array($ch)) {
                                                $coandadvcode = $roww["coandadvcode"];
                                            }

                                             $ch =mysqli_query($conn, "select * from project where id = '$id'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $ide= $rowww["id"];
                                                $grusrnm = $rowww["goupusername"];
                                                $projcd = $rowww["projcode"];
                                                 $sntdt = $rowww["sentdate"];
                                                 $grpid = $rowww["groupid"];
                                                 $prjtt = $rowww["projecttitl"];
                                                 $prjprog = $rowww["projectprogress"];
                                                 
                                                
                                             }
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
                        <div class="row">
                            <div class="col-md-12">
                 <div class="card">
                            <div class="card-body">
                                <?php
                                 $ch =mysqli_query($conn, "select * from advosorandco where username = '$_SESSION[username]'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $depp = $rowww["department"];
                                                 $fname = $rowww["firstname"];
                                                 $mname = $rowww["middlename"];
                                                 $lname = $rowww["lastname"];
                                                 $advcd = $rowww["coandadvcode"];
                                                 $advtyp = $rowww["usertype"];

                                            }
                                            $ch =mysqli_query($conn, "select * from studgrad where id = '$id'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $idd = $rowww["id"];
                                                $fullname = $rowww["fullname"];
                                                $studid = $rowww["stud_id"];
                                                 $documentgrd = $rowww["documentgrd"];
                                                 $attendace = $rowww["attendace"];
                                                 $unders = $rowww["unders"];
                                                 $documentation = $rowww["documentation"];
                                                 $answering = $rowww["answering"];
                                                 $confidence = $rowww["confidence"];
                                                 $grpid = $rowww['groupuid'];}
                                            ?>
                                
                               <center> <h5 class="card-title">Send Commented Document For Group</h5></center>
                               <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">  
                                <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Student Fullname</label>
                                   <div class="col-lg-7">
                                       <input type="text"  name="stud1fullname" class="form-control" value="<?php echo $fullname; ?>">
                                       <input type="hidden" name="dd" value="<?php echo $documentgrd; ?>">
                                       <input type="hidden" name="uu" value="<?php echo $unders; ?>">
                                       <input type="hidden" name="aa" value="<?php echo $attendace; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Student ID</label>
                                   <div class="col-lg-7">
                                       <input type="text" name="stud1id" class="form-control" value="<?php echo $studid; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Documentation 40</label>
                                   <div class="col-lg-7">
                                       <input type="text" data-parsley-max="40" required="" name="dcupma1" class="form-control" >
                                    </div>
                                </div>
                                 <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Answering 20</label>
                                   <div class="col-lg-7">
                                       <input type="text" data-parsley-max="20" required="" name="atten1" class="form-control" >
                                    </div>
                                </div>
                                 <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Confidence 10</label>
                                   <div class="col-lg-7">
                                       <input type="text" data-parsley-max="10" required="" name="under1" class="form-control" >
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"></label>
                                        <div class="col-lg-7">
                                            <input type="Submit" name="advi" class="form-control btn-success" value="Send File">
                                        </div>
                                    </div>
                                </form>
                                <?php
                                if (isset($_POST["advi"])) {
             $one =$_POST["dd"];
             $two = $_POST["uu"];
             $tree = $_POST["aa"];
             $for = $_POST["dcupma1"];
             $fiv = $_POST["atten1"];
             $six = $_POST["under1"];
             $total = $one + $two + $tree + $for + $fiv + $six;
             if ($total < 30) {
                 $grade ="F";
             }else if($total >=30 && $total < 40){
                 $grade = "FX";
             
         }else if($total >=40 && $total < 45){
                 $grade = "D";
         }else if($total >=45 && $total < 50){
                 $grade = "C-";
         }else{
            $grade = "C+";
         }
   $dt = date("Y-m-y");
                                mysqli_query($conn, "update studgrad set documentation = '$_POST[dcupma1]', answering= '$_POST[atten1]', confidence = '$_POST[under1]', total = '$total', grade = '$grade' where id = '$idd'");
                                  ?>
                                  <div class="form-group row alert alert-success">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"></label>
                                        <div class="col-lg-7">
                                            <script type="text/javascript">
                                                alert("Grade Successfully Given?>");
                                            </script>
                                        </div>
                                        
                                    </div>
                                  
                                  <?php
                            }
                                ?>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Student Fullname</th>
                                                <th>Documentation</th>
                                                <th>Answering</th>
                                                <th>Confidence</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                   $sql= mysqli_query($conn, "select * from studgrad where id = '$id'");
                                         while ($rowww = mysqli_fetch_array($sql)){
                                                 $idd = $rowww["id"];
                                                $fullname = $rowww["fullname"];
                                                $studid = $rowww["stud_id"];
                                                 $documentation = $rowww["documentation"];
                                                 $answering = $rowww["answering"];
                                                 $confidence = $rowww["confidence"];
                                                 $grpid = $rowww['groupuid'];

?>
                                            <tr>
                                                <td><?php echo  $idd; ?></td>
                                                <td><?php echo $fullname; ?></td>
                                                <td><?php echo $documentation; ?></td>
                                                <td><?php echo $answering; ?></td>
                                                <td><?php echo $confidence; ?></td>
                                                
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                    </div>
                </div>
            </div>
        </div>




                            </div>
                        </div>
                    </div>
<?php
include "footer.php";
?>            