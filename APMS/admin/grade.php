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
                <!-- ============'================================================== -->
                
                <div class="row">
                    <div class="col-12">
                        <!-- your code-->
                        <button onclick="printContent('div1')">Print</button>
                        <div class="table-responsive" id="div1">
                            <center>
                                <h2>Haramaya University</h2>
                             <h2>Student Grade</h2>
                            </center>
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Student Name</th>
                                                <th>Student ID</th>
                                                <th>Document Update</th>
                                                 <th>Attendance Mark</th>
                                                  <th>Understanding Mark</th>
                                                   <th>Documentation Mark</th>
                                                    <th>Answering Mark</th>
                                                     <th>Confidence Mark</th>
                                                     <th>Totla Mark</th>
                                                     <th>Grade</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                   $sql= mysqli_query($conn, "select * from studgrad");
                                         while ($rowww = mysqli_fetch_array($sql)){
                                                 $idd = $rowww["stud_id"];
                                                $fname = $rowww["fullname"];
                                                $doc = $rowww["documentgrd"];
                                                 $att = $rowww["attendace"];
                                                 $under = $rowww["unders"];
                                                 $docu = $rowww["documentation"];
                                                 $answering = $rowww['answering'];
                                                 $confi = $rowww['confidence'];
                                                 $total = $rowww['total'];
                                                 $grade = $rowww['grade'];

?>
                                            <tr>
                                                <td><?php echo  $idd; ?></td>
                                                <td><?php echo $fname; ?></td>
                                                <td><?php echo $doc; ?></td>
                                                <td><?php echo $att; ?></td>
                                                <td><?php echo $under; ?></td>
                                                <td><?php echo $docu; ?></td>
                                                <td><?php echo $answering; ?></td>
                                                <td><?php echo $confi; ?></td>
                                                <td><?php echo $total; ?></td>
                                                <td><?php echo $grade; ?></td>
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
<script type="text/javascript">
    function printContent(el){
        var restorepage = document.body.innerHTML;
        var printcontent=document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.bosy.innerHTML =restorepage; 
    }
</script>