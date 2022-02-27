<?php 
include "header.php";
include "sidebar.php";

$ch =mysqli_query($conn, "select * from examiners where username = '$_SESSION[username]'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $dep = $rowww["department"];
                                                $ex =$rowww['coandadvcode'];

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
                                                <th>Group UID</th>
                                                <th>Student Fullname</th>
                                                <th>Student ID</th>
                                                <th>Download Project</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                   
                                   $sql= mysqli_query($conn, "select * from studgrad where examcode = '$ex'");
                                         while ($rowww = mysqli_fetch_array($sql)){
                                                 $idd = $rowww["id"];
                                                $fullname = $rowww["fullname"];
                                                $studid = $rowww["stud_id"];
                                                 $documentgrd = $rowww["documentgrd"];
                                                 $attendace = $rowww["attendace"];
                                                 $unders = $rowww["unders"];
                                                 $documentation = $rowww["documentation"];
                                                 $answering = $rowww["answering"];
                                                 $confidence = $rowww["confidence"];
                                                 $grpid = $rowww['groupuid'];
                                $sql= mysqli_query($conn, "select * from project where projectprogress = '$grpid'");
                                         while ($rowww = mysqli_fetch_array($sql)){
                                                 $idd = $rowww["id"];
                                                $project = $rowww["projectprogress"];
                                                $studid = $rowww["stud_id"];
?>
                                            <tr>
                                                <td><?php echo  $idd; ?></td>
                                                <td><?php echo $grpid; ?></td>
                                                <td><?php echo $fullname; ?></td>
                                                <td><?php echo $studid; ?></td>
                                                <td>
                                                    <a  href="../student/<?php echo $project; ?>"><button class="btn btn-success">Download Final</button></a>
                                                </td>
                                                
                                                <td>
                                                    <a href="markgroup.php?id=<?php echo $idd; ?>">
                                                        <button class="btn btn-primary">Give Grade</button>
                                                    </a> 
                                                </td>
                                            </tr>
                                            <?php }} ?>
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