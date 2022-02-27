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
                        
<div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Group ID</th>
                                                <th>UserName</th>
                                                <th>Advisor Code</th>
                                                 <th>Project Code</th>
                                                  <th>Project Title</th>
                                                   <th>Academic Year</th>
                                                   <th>Download Project</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                   $sql= mysqli_query($conn, "select * from project");
                                         while ($rowww = mysqli_fetch_array($sql)){
                                                 $idd = $rowww["groupid"];
                                                $fname = $rowww["goupusername"];
                                                $doc = $rowww["advisorcode"];
                                                 $att = $rowww["projcode"];
                                                 $under = $rowww["projecttitl"];
                                                 $docu = $rowww["sentdate"];
                                                 $project = $rowww["projectprogress"];
                                                 ?>

                                            <tr>
                                                <td><?php echo  $idd; ?></td>
                                                <td><?php echo $fname; ?></td>
                                                <td><?php echo $doc; ?></td>
                                                <td><?php echo $att; ?></td>
                                                <td><?php echo $under; ?></td>
                                                <td><?php echo $docu; ?></td>
<td>
                                                    <a  href="../student/<?php echo $project; ?>"><button class="btn btn-success">Download Final</button></a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
<?php
include "footer.php";
?>            