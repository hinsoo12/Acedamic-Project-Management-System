<?php 
include "header.php";
include "sidebar.php";
?>
<?php
                                 $ch =mysqli_query($conn, "select * from advosorandco where username = '$_SESSION[username]'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $advcd = $rowww["coandadvcode"];}

                                ?>
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
                                                <th>Group Username</th>
                                                <th>Group ID</th>
                                                <th>Sent Date</th>
                                                <th>Project Title</th>
                                                <th>Project Code</th>
                                                <th>File Progress</th>
                                                <th>Tools</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                             $ch =mysqli_query($conn, "select * from project where advisorcode = '$advcd'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $id = $rowww["id"];
                                                $grusrnm = $rowww["goupusername"];
                                                $projcd = $rowww["projcode"];
                                                 $sntdt = $rowww["sentdate"];
                                                 $grpid = $rowww["groupid"];
                                                 $prjtt = $rowww["projecttitl"];
                                                 $prjprog = $rowww["projectprogress"];
                                            

                                            ?>
                                            <tr>
                                                <td><?php echo  $id; ?></td>
                                                <td><?php echo  $grusrnm; ?></td>
                                                 <td><?php echo  $grpid; ?></td>
                                                <td><?php echo  $sntdt; ?></td>
                                                 <td><?php echo  $prjtt; ?></td>
                                                <td><?php echo  $projcd; ?></td>
                                                 <td>
                                                    <a href="../student/<?php echo$prjprog; ?>">Download</a> 
                                                 </td>
                                                <td>
                                                    <a  href="viewgroup.php?id=<?php echo $id; ?>"><button class="btn btn-success">Mark Group</button></a>
                                                </td>
                                                 <td>
                                                    <a  href="approve_final.php?id=<?php echo $id; ?>"><button class="btn btn-success">Approve Project</button></a>
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