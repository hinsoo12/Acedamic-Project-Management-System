<?php 
include "header.php";
include "sidebar.php";
 $ch =mysqli_query($conn, "select * from user where username= '$_SESSION[username]'");
                                            while ($roww = mysqli_fetch_array($ch)) {
                                                $dep = $roww["department"];
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
                    <div class="col-12">
                        <!-- your code-->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Basic Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Group Username</th>
                                                <th>Group Department</th>
                                                <th>Group UID</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $ch =mysqli_query($conn, "select * from title where department= '$dep' && status = 'notapproved'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $id = $rowww["id"];
                                                $greuserame = $rowww["group_username"];
                                                $gruid = $rowww["group_uid"];
                                                $dep = $rowww["department"];
                                                $fprottl = $rowww["firstprotitl"];
                                                $fprodisc = $rowww["firstprodiscrip"];
                                                $fprojprop = $rowww["firstprojprop"];
                                                $sprottl = $rowww["scndprotitl"];
                                                $sprodisc = $rowww["scndprodiscrip"];
                                                $sprojprop = $rowww["scndprojprop"];
                                                $thprottl = $rowww["thirdprotitl"];
                                                $thprodisc = $rowww["thirdprodiscrip"];
                                                $thprojprop = $rowww["thirdprojprop"];
                                            

                                            ?>
                                            <tr>
                                                <td><?php echo  $id; ?></td>
                                                <td><?php echo  $greuserame; ?></td>
                                                <td><?php echo  $dep; ?></td>
                                                <td><?php echo  $gruid; ?></td>
                                                <td>
                                                    <a href="viewgroupttl.php?ID=<?php echo $gruid; ?>">
                                                        <button class="btn btn-primary">View Title Detail</button>
                                                    </a> 
                                                    

                                                </td>

                                                
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