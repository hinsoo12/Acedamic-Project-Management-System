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
                         <?php
                                             $ch =mysqli_query($conn, "select * from groupcrt where username = '$_SESSION[username]'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $groipid = $rowww["group_uid"];
                                            }
                                            
                                            ?>
                                    
                                     
                                            
                         <div class="card">
                            <div class="card-body"><h5>Approved Title</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Project Code</th>
                                                <th>Project Title</th>
                                                <th>Project Discription</th>
                                                <th>Addeed Scope</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                     $sql = "SELECT * FROM approvedttl WHERE group_uid = '$groipid'";
                                     $res = $conn->query($sql);
                                     if ($res->num_rows > 0) {
                                         while ($roowww = $res->fetch_assoc()) {
                                                $idd = $roowww["id"];
                                                $procd = $roowww["projectcode"];
                                                $ttl = $roowww["title"];
                                                $prodisc = $roowww["discription"];
                                                $sts = $roowww["status"];
                                                $scopec = $roowww["scopec"];


                                           ?>
                                            <tr>
                                                <td><?php echo  $idd; ?></td>
                                                <td><?php echo  $procd; ?></td>
                                                <td><?php echo $ttl; ?></td>
                                                <td><?php echo $prodisc; ?></td>
                                                <td><?php echo $scopec; ?></td>
                                                <td><?php echo  $sts; ?></td>
                                            </tr>
                                        <?php }} ?>
                                        </tbody>

                            </div>
                        </div>
                    </div>
<?php
include "footer.php";
?>            