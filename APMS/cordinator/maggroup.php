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
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Basic Datatable</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Group Username</th>
                                                <th>Group Email</th>
                                                <th>Group Department</th>
                                                <th>Group UID</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $ch =mysqli_query($conn, "select * from groupcrt where department= '$dep' && status = 'notapproved'");
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
                                            

                                            ?>
                                            <tr>
                                                <td><?php echo  $id; ?></td>
                                                <td><?php echo  $greuserame; ?></td>
                                                <td><?php echo  $gremail; ?></td>
                                                <td><?php echo  $dep; ?></td>
                                                <td><?php echo  $gruid; ?></td>
                                                <td>
                                                    <a href="viewgroup.php?ID=<?php echo $gruid; ?>">
                                                        <button class="btn btn-primary">View Group Members</button>
                                                    </a> |
                                                    <a  href="gractivate.php?uid=<?php echo $gruid; ?>"><button class="btn btn-success">Approve Group</button></a> |
                                                    <a  href="notapprovedgrp.php?uid=<?php echo $gruid; ?>"><button class="btn btn-warning">Not Approve</button></a> |

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
<?php
include "footer.php";
?>            