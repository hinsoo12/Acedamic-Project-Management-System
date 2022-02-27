<?php 
include "header.php";
include "sidebar.php";
$idd = $_GET['id'];
$ch =mysqli_query($conn, "select * from advosorandco where username= '$_SESSION[username]'");
                                            while ($roww = mysqli_fetch_array($ch)) {
                                                $dep = $roww["department"];
                                            }
 $ch =mysqli_query($conn, "select * from project where id = '$idd'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $id = $rowww["id"];
                                                $grusrnm = $rowww["goupusername"];
                                                $projcd = $rowww["projcode"];
                                                 $sntdt = $rowww["sentdate"];
                                                 $grpid = $rowww["groupid"];
                                                 $prjtt = $rowww["projecttitl"];
                                                 $prjprog = $rowww["projectprogress"];
                                                 
                                                
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
                                <h5 class="card-title">Group Members</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>1st Student ID</th>
                                                <th>1st Student Name</th>
                                                <th>Mark</th>
                                                <th>2nd Student ID</th>
                                                <th>2nd Student Name</th>
                                                <th>Mark</th>
                                                <th>3rd Student ID</th>
                                                <th>3rd Student Name</th>
                                                <th>Mark</th>
                                                <th>4th Student ID</th>
                                                <th>4th Student Name</th>
                                                <th>Mark</th>
                                                <th>5th Student ID</th>
                                                <th>5th Student Name</th>
                                                <th>Mark</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $ch =mysqli_query($conn, "select * from groupcrt where group_uid = '$grpid'");
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
                                                <td><?php echo  $std1id; ?></td>
                                                <td><?php echo  $std1fullname; ?></td>
                                                <td> <a  href="markgroup.php?id=<?php echo $gruid; ?>"><button class="btn btn-success">Mark Student 1</button></a></td>
                                                 <td><?php echo  $std2id; ?></td>
                                                <td><?php echo  $std2fullname; ?></td>
                                                <td> <a  href="markgroup2.php?id=<?php echo $gruid; ?>"><button class="btn btn-success">Mark Student 2</button></a></td>
                                                 <td><?php echo  $std3id; ?></td>
                                                <td><?php echo  $std3fullname; ?></td>
                                                <td> <a  href="markgroup3.php?id=<?php echo $gruid; ?>"><button class="btn btn-success">Mark Student 3</button></a></td>
                                                 <td><?php echo  $std4id; ?></td>
                                                <td><?php echo  $std4fullname; ?></td>
                                                <td> <a  href="markgroup4.php?id=<?php echo $gruid; ?>"><button class="btn btn-success">Mark Student 4</button></a></td>
                                                 <td><?php echo  $std5id; ?></td>
                                                <td><?php echo  $std5fullname; ?></td>
                                                <td> <a  href="markgroup5.php?id=<?php echo $gruid; ?>"><button class="btn btn-success">Mark Student 5</button></a></td>
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