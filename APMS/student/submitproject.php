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
                        <div class="row">
                         <?php
                                             $ch =mysqli_query($conn, "select * from groupcrt where username = '$_SESSION[username]'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $groipid = $rowww["group_uid"];}
                                             $cha =mysqli_query($conn, "select * from approvedttl where group_uid = '$groipid'");
                                            while ($roowww = mysqli_fetch_array($cha)) {
                                                $idd = $roowww["id"];
                                                $procd = $roowww["projectcode"];
                                                $ttl = $roowww["title"];
                                                $advisorscode = $roowww["advisorscode"];

                                                ?>

                    <div class="col-md-12">
                        <div class="table-responsive">
                                    <table  class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Advisor Code</th>
                                                <th>Advisor Firstname</th>
                                                <th>Advisor Lastname</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                         $ch =mysqli_query($conn, "select * from advosorandco where coandadvcode = '$advisorscode' && usertype ='advisor'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $adcode = $rowww["coandadvcode"];
                                                $firstnm = $rowww["firstname"];
                                                $lastnm = $rowww["lastname"];
                                           ?>
                                            <tr>
                                                <td><?php echo  $adcode; ?></td>
                                                <td><?php echo  $firstnm; ?></td>
                                                <td><?php echo $lastnm; ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>

                            </div>
                            <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Advisor Code</th>
                                                <th>Co-Advisor Firstname</th>
                                                <th>Co-Advisor Lastname</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                         $ch =mysqli_query($conn, "select * from advosorandco where coandadvcode = '$advisorscode' && usertype ='co-advisor'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $adcode = $rowww["coandadvcode"];
                                                $firstnm = $rowww["firstname"];
                                                $lastnm = $rowww["lastname"];
                                           ?>
                                            <tr>
                                                <td><?php echo  $adcode; ?></td>
                                                <td><?php echo  $firstnm; ?></td>
                                                <td><?php echo $lastnm; ?></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>

                            </div>
                        <div class="card">
                           <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
                                <center>
                                    <div class="card-body"><h4>Submit Your Project Progress</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Project Title</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control"name="prottl" value="<?php echo $ttl; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Project Code</label>
                                        <div class="col-lg-7">
                                           <input type="text" name="pcode" class="form-control" value="<?php echo $procd; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"> Upload Project</label>
                                        <div class="col-lg-7">
                                            <input type="file" required="" name="projprgrs" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"></label>
                                        <div class="col-lg-7">
                                            <input type="Submit" name="subprog" class="form-control btn-success">
                                        </div>
                                    </div>
                                </div>
                                
                                </center>
                            </form>
<?php
if (isset($_POST["subprog"])) {
 $tm=md5(time());
    $fnm=$_FILES["projprgrs"]["name"];
    $dst="./progress/".$tm.$fnm;
    $dst2="./progress/".$tm.$fnm;
   move_uploaded_file($_FILES["projprgrs"]["tmp_name"], $dst);

   $dt = date("Y-m-y");
   $count =0;
$chee =mysqli_query($conn, "select * from projectprogress where status = 'notseen' && groupid ='$groipid'");
             $count = mysqli_num_rows($chee);
             if ($count==1) {
                ?>
                <script type="text/javascript">
                    alert("You Already sent Wait Until They seen Your Progress");
                </script>
                <?php
                                    # code...
                                }  else{                 
mysqli_query($conn, "insert into projectprogress values('', '$groipid', '$_SESSION[username]', '$adcode', '$procd', '$_POST[prottl]', '$dst2', '$dt', 'notseen')");
?>
<script type="text/javascript">
    alert("Successfully Sent");
</script>
<?php
}}
?>

                        </div>

                            </div>
                        <?php } ?>
                        </div>
                    </div>
<?php
include "footer.php";
?>            