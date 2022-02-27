<?php 
include "header.php";
include "sidebar.php";
?>
<?php
                                 $ch =mysqli_query($conn, "select * from examiners where username = '$_SESSION[username]'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $advcd = $rowww["coandadvcode"];}
  $ch =mysqli_query($conn, "select * from studgrad where examcode = '$advcd'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                 $grpid = $rowww['groupuid'];
                                }?>
            <div class="container-fluid">
               
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
                                                <th>Student Fullname</th>
                                                <th>Student ID</th>
                                                <th>Document Update Grade</th>
                                                <th>Attendance</th>
                                                <th>Understanding</th>
                                                <th>Documentation</th>
                                                <th>Answering</th>
                                                <th>Confidance</th>
                                                <th>Group UID</th>
                                                <th>Final DOC</th>
                                                <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $qq =mysqli_query($conn, "select * from project where groupid = '$grpid'");
                                            while ($rowwwq = mysqli_fetch_array($qq)) {
                                                $id1 = $rowwwq["id"];
                                                $project = $rowwwq["projectprogress"];
                                            
                                             $ch =mysqli_query($conn, "select * from studgrad where examcode = '$advcd'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $id = $rowww["id"];
                                                $fullname = $rowww["fullname"];
                                                $studid = $rowww["stud_id"];
                                                 $documentgrd = $rowww["documentgrd"];
                                                 $attendace = $rowww["attendace"];
                                                 $unders = $rowww["unders"];
                                                 $documentation = $rowww["documentation"];
                                                 $answering = $rowww["answering"];
                                                 $confidence = $rowww["confidence"];
                                                 $grpid = $rowww['groupuid'];
                                            ?>
                                            <tr>
                                                <td><?php echo  $id; ?></td>
                                                <td><?php echo  $fullname; ?></td>
                                                 <td><?php echo  $studid; ?></td>
                                                <td><?php echo  $documentgrd; ?></td>
                                                 <td><?php echo  $attendace; ?></td>
                                                <td><?php echo  $unders; ?></td>
                                                <td><?php echo  $documentation; ?></td>
                                                <td><?php echo  $answering; ?></td>
                                                <td><?php echo  $confidence; ?></td>
                                                <td><?php echo  $grpid; ?></td>
                                                <td>
                                                    <a  href="../student/<?php echo $project; ?>"><button class="btn btn-success">Download Final</button></a>
                                                </td>
                                                 <td>
                                                    <a  href="markgroup.php?id=<?php echo $id; ?>"><button class="btn btn-success">Mark Students</button></a>
                                                </td>
                                                 
                                            </tr>
                                            <?php } }?>
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