<?php 
include "header.php";
include "sidebar.php";
?>
<?php
                                           
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
                                 $ch =mysqli_query($conn, "select * from user where username = '$_SESSION[username]'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $depp = $rowww["department"];}

                                ?>
                               <center> <h5 class="card-title">Assign Advisor and Co-Advisor</h5></center>
                               <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
                                <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Advisor</label>
                                   <div class="col-lg-7">
                                        <select name="advstffid" required="" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option value="">Select</option>
                                            <?php
                                            $cha =mysqli_query($conn, "select * from teachers where department = '$depp'");
                                            while ($roowww = mysqli_fetch_array($cha)) {
                                              
                                               ?>
                                                <option value="<?php echo $roowww["staffid"] ?>"><?php echo  $roowww["firstname"]; echo " "; echo  $roowww["middlename"]; echo " "; echo $roowww["lastname"]; ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                               <div class="form-group row">
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">CO-Advisor</label>
                                   <div class="col-lg-7">
                                        <select name="coadid" required="" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option value="">Select</option>
                                            <?php
                                            $cha =mysqli_query($conn, "select * from teachers where department = '$depp'");
                                            while ($roowww = mysqli_fetch_array($cha)) {
                                                 $coaddfirstnm =  $roowww["firstname"];
                                               $coaddmiddlnm =  $roowww["middlename"];
                                               $coaddlastnm =    $roowww["lastname"];
                                               $coaddemail =    $roowww["email"];
                                               $coaddstfid =  $roowww["staffid"];
                                               
                                               ?>
                                                <option value="<?php echo $roowww["staffid"] ?>"><?php echo  $roowww["firstname"]; echo " "; echo  $roowww["middlename"]; echo " "; echo $roowww["lastname"]; ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"></label>
                                        <div class="col-lg-7">
                                            <input type="Submit" name="advi" class="form-control btn-success" value="Assign Co-Advisors">
                                        </div>
                                    </div>
                                </form>
                                <?php
                                $num = "ad".rand(00, 99);
                                if (isset($_POST["advi"])) {
                                    $regdt = date("Y-m-d"); 
                                    $pass =rand(100000, 99999);
                                    $fpass=md5($pass);
                                     $cha =mysqli_query($conn, "select * from teachers where staffid = '$_POST[advstffid]'");
                                            while ($roowww = mysqli_fetch_array($cha)) {
                                                 $addfirstnm =  $roowww["firstname"];
                                               $addmiddlnm =  $roowww["middlename"];
                                               $addlastnm =    $roowww["lastname"];
                                               $addemail =    $roowww["email"];
                                               $addstfid =  $roowww["staffid"];
                                                $usernem = $addfirstnm.rand(000, 999);

                                           }
                                           mysqli_query($conn, "insert into staff_password values ('','$_POST[advstffid]', '$pass')");
                                mysqli_query($conn, "insert into advosorandco values ('','$_POST[advstffid]', '$addfirstnm','$addmiddlnm','$addlastnm','$usernem','$fpass','advisor','$addemail', 'activated', '$depp','$regdt', '$num')");
                                 $coregdt = date("Y-m-d"); 
                                    $copass =rand(100000, 99999);
                                    $cofpass=md5($copass);
                                     $cha =mysqli_query($conn, "select * from teachers where staffid = '$_POST[coadid]'");
                                            while ($roowww = mysqli_fetch_array($cha)) {
                                                 $coaddfirstnm =  $roowww["firstname"];
                                               $coaddmiddlnm =  $roowww["middlename"];
                                               $coaddlastnm =    $roowww["lastname"];
                                               $coaddemail =    $roowww["email"];
                                               $coaddstfid =  $roowww["staffid"];
                                                $cousernem = $coaddfirstnm.rand(000, 999);
                                           }
                                mysqli_query($conn, "insert into advosorandco values ('','$_POST[coadid]', '$coaddfirstnm','$coaddmiddlnm','$coaddlastnm','$cousernem','$cofpass','co-advisor','$coaddemail', 'activated', '$depp','$coregdt', '$num')");
                                  ?>
                                  <div class="form-group row alert alert-success">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"></label>
                                        <div class="col-lg-7">
                                           <strong style="color: red">Advisor And Co-Advisor Successfully Created  <?php echo $addfirstnm; echo " "; echo "And"; echo " "; echo $coaddfirstnm;echo " "; echo "Their Code Is"; echo " "; echo $num; ?></strong>
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