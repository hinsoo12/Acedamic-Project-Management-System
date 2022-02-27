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
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Manage Coordinator</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                    <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>User Name</th>
                                                <th>User Type</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $ris = mysqli_query($conn, "select * from user where usertype = 'cordinator'");
                                            while ($row = mysqli_fetch_array($ris)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['user_id']; ?></td>
                                                <td><?php echo $row['username']; ?></td>
                                                <td><?php echo $row['usertype']; ?></td>
                                                <td><?php echo $row['email_address']; ?></td>
                                                <td><?php echo $row['status']; ?></td>
                                                <td>
                                                
                            <a href="editcord.php?id=<?php echo $row['user_id'];?>" class="btn btn-primary btn-sm btn-icon icon-left" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i>Edit</a> |
                           
                            <a href="deactivate.php?id=<?php echo $row['user_id'];?>" class="btn btn-warning btn-sm btn-icon icon-left" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i>Deactivate</a> |
                           
                            <a href="activate.php?id=<?php echo $row['user_id'];?>" class="btn btn-success btn-sm btn-icon icon-left" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i>Activate</a>

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
                    </div>
<?php
include "footer.php";
?>            