<?php 
include "header.php";
include "sidebar.php";
$did = $_GET["ID"];
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
                         <div class="card">
                            <div class="card-body"><h5>Group Title</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>First Project Title</th>
                                                <th>First Project Discription</th>
                                                <th>First Project Proposal</th>
                                                <th>Second Project Title</th>
                                                <th>Second Project Discription</th>
                                                <th>SecondProject Proposal</th>
                                                <th>Third Project Title</th>
                                                <th>Third Project Discription</th>
                                                <th>Third Project Proposal</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $ch =mysqli_query($conn, "select * from title where group_uid = '$did'");
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
                                            
}
                                            ?>
                                            <tr>
                                                <td><?php echo  $id;   ?></td>
                                                <td><?php echo $fprottl ?></td>
                                                <td><?php echo $fprodisc;?></td>
                                                <td><a href="../student/<?php echo $fprojprop; ?>">Download First Proposal</a></td>
                                                <td><?php echo $sprottl ?></td>
                                                <td><?php echo $sprodisc;?></td>
                                                <td><a href="../student/<?php echo $sprojprop; ?>">Download Second Proposal</a></td>
                                                <td><?php echo $thprottl ?></td>
                                                <td><?php echo $thprodisc;?></td>
                                                <td><a href="../student/<?php echo $thprojprop; ?>">Download Third Proposal</a></td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                            </div>
                            <center>
                                <a href="upptitl1.php?uid=<?php echo $gruid; ?>">
                            <input type="submit" class="btn btn-success" name="app1" value="Approve Title 1"></a>
                            <a href="upptitl2.php?uid=<?php echo $gruid; ?>">
                            <input type="submit" class="btn btn-primary" name="app1" value="Approve Title 2"></a>
                            <a href="upptitl3.php">
                            <input type="submit" class="btn btn-success" name="app1" value="Approve Title 3"></a>
                            </center>
                        </div>

<?php
include "footer.php";
?>            