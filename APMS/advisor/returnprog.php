<?php 
include "header.php";
include "sidebar.php";
$id = $_GET["id"];
                                             $ch =mysqli_query($conn, "select * from projectprogress where id = '$id'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $id = $rowww["id"];
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

                                ?>
                               <center> <h5 class="card-title">Send Commented Document For Group</h5></center>
                               <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">  
                   <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Group Username</label>
                                   <div class="col-lg-7">
                                    <input type="hidden" name="fullname" value="<?php echo $fname; echo " "; echo $mname; echo " "; echo $lname;?>">
                                     <input type="hidden" name="advtyp" value="<?php echo $advtyp; ?>">
                                     <input type="hidden" name="advcod" value="<?php echo $advcd; ?>">
                                       <input type="hidden" name="groupuid" value="<?php echo $grpid; ?>">
                                        <input type="hidden" name="projcd" value="<?php echo $projcd; ?>">
                                        <input type="hidden" name="projtt" value="<?php echo $prjtt; ?>">
                                       <input type="text" name="grpnm" class="form-control" value="<?php echo $grusrnm; ?>" readonly>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Commented Document</label>
                                   <div class="col-lg-7">
                                       <input type="file" required="" name="cmdoc" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                   <div class="col-lg-7">
                                       <textarea cols="4" rows="4" required="" class="form-control" name="comdiscc"></textarea>
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
      $tm=md5(time());
    $fnm=$_FILES["cmdoc"]["name"];
    $dst="./comprog/".$tm.$fnm;
    $dst2="./comprog/".$tm.$fnm;
   move_uploaded_file($_FILES["cmdoc"]["tmp_name"], $dst);

   $dt = date("Y-m-y");
                                mysqli_query($conn, "insert into returncommetd values ('', '$_POST[grpnm]', '$_POST[groupuid]', '$_POST[projtt]', '$_POST[projcd]', '$dst2', '$_POST[comdiscc]', '$_POST[advtyp]', '$_POST[fullname]', '$_POST[advcod]','$dt', 'notseen')");
                                  mysqli_query($conn, "update projectprogress set status = 'seen' where id = '$id'");
                                  ?>
                                  <div class="form-group row alert alert-success">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"></label>
                                        <div class="col-lg-7">
                                            <script type="text/javascript">
                                                alert("Commented Project Is Sented Successfully To  <?php echo $_POST['grpnm']; ?>");
                                            </script>
                                             <script type="text/javascript">
                                                window.location = "viewprojprg.php";
                                            </script>
                                        </div>
                                    </div>
                                  
                                  <?php
                            }
                                ?>
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