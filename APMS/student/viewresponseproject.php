<?php 
include "header.php";
include "sidebar.php";


                                 $ch =mysqli_query($conn, "select * from groupcrt where username = '$_SESSION[username]'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $grppid = $rowww["group_uid"];}

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
                                <h5 class="card-title">Group Members</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Sender Fullname</th>
                                                <th>Advisor Type</th>
                                                <th>Sent Date</th>
                                                <th>Project Title</th>
                                                <th>Project Code</th>
                                                <th>File Progress</th>
                                                <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $ch =mysqli_query($conn, "select * from returncommetd where groupuid = '$grppid'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $id = $rowww["id"];
                                                $fullnm = $rowww["fullname"];
                                                $advtyp = $rowww["advtype"];
                                                $projcd = $rowww["projcode"];
                                                 $sntdt = $rowww["retdate"];
                                                 $prjtt = $rowww["projecttitle"];
                                                 $prjprog = $rowww["commentedfile"];
                                                  
                                               
                                            

                                            ?>
                                            <tr>
                                                <td><?php echo  $id; ?></td>
                                                <td><?php echo  $fullnm; ?></td>
                                                <td><?php echo $advtyp;  ?></td>
                                                <td><?php echo  $sntdt; ?></td>
                                                 <td><?php echo  $prjtt; ?></td>
                                                <td><?php echo  $projcd; ?></td>
                                                 <td>
                                                    <a href="../advisor/<?php echo $prjprog; ?>">Download</a> 
                                                 </td>
                                                <td>
                                                    <a  href="submitproject.php?>"><button class="btn btn-success">Submit Your Project</button></a>
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