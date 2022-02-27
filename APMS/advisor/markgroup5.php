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
                                                $id = $rowww["id"];
                                                $grusrnm = $rowww["goupusername"];
                                                $projcd = $rowww["projcode"];
                                                 $sntdt = $rowww["sentdate"];
                                                 $grpid = $rowww["groupid"];
                                                 $prjtt = $rowww["projecttitl"];
                                                 $prjprog = $rowww["projectprogress"];
                                                 
                                                
                                             }
 $ch =mysqli_query($conn, "select * from approvedttl where group_uid = '$id'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $excd = $rowww["examinercode"];}
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
                                            $ch =mysqli_query($conn, "select * from groupcrt where group_uid = '$id'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $id = $rowww["id"];
                                                $std1id = $rowww["stud1id"];
                                                $std1fullname = $rowww["stud1fullname"];
                                                 $std2id = $rowww["stud2id"];
                                                $std2fullname = $rowww["stud2fullname"];
                                                 $std3id = $rowww["stud3id"];
                                                $std3fullname = $rowww["stud3fullname"];
                                                 $std4id = $rowww["stud4id"];
                                                $std4fullname = $rowww["stud4fullname"];
                                                 $std5id = $rowww["stud5id"];
                                                $std5fullname = $rowww["stud5fullname"];
                                                $gremail = $rowww["email"];
                                                $greuserame = $rowww["username"];
                                                $gruid = $rowww["group_uid"];
                                                $dep = $rowww["department"];
                                                

                                            }

                                ?>
                               <center> <h5 class="card-title">Mark Student Performance</h5></center>
                               <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">  
                     
                                <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Student Fullname</label>
                                   <div class="col-lg-7">
                                       <input type="text" name="stud1fullname" class="form-control" value="<?php echo $std5fullname; ?>">
                                       <input type="hidden" name="gggg" class="form-control" value="<?php echo $gruid; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Fifth Student ID</label>
                                   <div class="col-lg-7">
                                       <input type="text" name="stud1id" class="form-control" value="<?php echo $std5id; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Document Update Mark 10</label>
                                   <div class="col-lg-7">
                                       <input type="text" data-parsley-max="10" required="" name="dcupma1" class="form-control" >
                                    </div>
                                </div>
                                 <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Attendance 5</label>
                                   <div class="col-lg-7">
                                       <input type="text" data-parsley-max="5" required="" name="atten1" class="form-control" >
                                    </div>
                                </div>
                                 <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Understanding 15</label>
                                   <div class="col-lg-7">
                                       <input type="text" data-parsley-max="15" required="" name="under1" class="form-control" >
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
                                    if (isset($_POST["advi"])) {
                                    $count = 0;
                                  $sql= mysqli_query($conn, "select * from studgrad where fullname = '$_POST[stud1fullname]'");
                                  $count = mysqli_num_rows($sql);

                                if ($count > 0) {
                                    ?>
                                    <script type="text/javascript">
                                        alert("Student Grade Is Already Given");
                                    </script>
                                    <?php
                                    
                                }else{

     
   $dt = date("Y-m-y");
                                mysqli_query($conn, "insert into studgrad values ('', '$_POST[stud1fullname]', '$_POST[stud1id]', '$_POST[dcupma1]', '$_POST[atten1]',  '$_POST[under1]', '', '', '','','','$coandadvcode', '$excd','$_POST[gggg]')");
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
                            }}
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

                                   $sql= mysqli_query($conn, "select * from studgrad where fullname = '$std5fullname'");
                                         while ($rowww = mysqli_fetch_array($sql)){
                                                 $idd = $rowww["id"];
                                                $fullname = $rowww["fullname"];
                                                $studid = $rowww["stud_id"];
                                                 $documentgrd = $rowww["documentgrd"];
                                                 $attendace = $rowww["attendace"];
                                                 $unders = $rowww["unders"];
                                                 $grpid = $rowww['groupuid'];

?>
                                            <tr>
                                                <td><?php echo  $idd; ?></td>
                                                <td><?php echo $fullname; ?></td>
                                                <td><?php echo $documentgrd; ?></td>
                                                <td><?php echo $attendace; ?></td>
                                                <td><?php echo $unders; ?></td>
                                                
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