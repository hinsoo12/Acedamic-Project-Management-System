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
                                                <th>Post Date</th>
                                                <th>Notification Subject</th>
                                                <th>tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                   $sql= mysqli_query($conn, "select * from post_noticee");
                                         while ($rowww = mysqli_fetch_array($sql)){
                                                 $idd = $rowww["postdate"];
                                                $fname = $rowww["post_title"];
                                                $id = $rowww["id"];
                                                 ?>

                                            <tr>
                                                <td><?php echo  $idd; ?></td>
                                                <td><?php echo $fname; ?></td>
                                                <td>
                                                    <a href="delete.php?id=<?php echo $id; ?>"><button class="btn btn-success">Delete</button></a>
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