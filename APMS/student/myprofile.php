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
                        
<div class="container">
        <div class="margin-top">
            <div class="row">
                    
                <div class="span2">
                    
                </div>
                <div class="span10" style="margin-top:-15px">
                
                        <div class="panel panel-default" style="margin-left:-150px; width: 1400px">
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="margin-top:-15px">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                          
                                <div style="margin: 40px;">
                                    <div class="col-md-3">
                                 <?php
                                  $ch =mysqli_query($conn, "select * from groupcrt where username = '$_SESSION[username]'");
                                             while ($row = mysqli_fetch_array($ch)) {
                         $stud1id=$row['stud1id'];
                         $stud1fullname=$row['stud1fullname'];
                         $stud2id=$row['stud2id'];
                         $stud2fullname=$row['stud2fullname'];
                         $stud3id=$row['stud3id'];
                         $stud3fullname=$row['stud3fullname'];
                         $stud4id=$row['stud4id'];
                         $stud4fullname=$row['stud4fullname'];
                         $stud5id=$row['stud5id'];
                         $stud5fullname=$row['stud5fullname'];
                         $email=$row['email'];
                         $username=$row['username'];
                         $department=$row['department'];  
                        $username=$row['username'];  
                         }      
                          ?>
                                    </div>
                                    <h2>
                                    <P style="color: black; font-size: 30px;">Your Profile Information</P>
                                    </h2>
                                             <div class="col-md-">
                                         <div>
                                            <h4>
                                           <label>Stud1 ID:-</label>
                                               <?php echo $stud1id; ?> 
                                            </h4>
                                        </div>
                                            <div>
                                                <h4>
                                           <label>Student Full Name:-</label>
                                              <?php echo $stud1fullname ?>
                                                </h4>
                                            </div>

                                                <div>
                                            <h4>
                                           <label>Stud2 ID:-</label>
                                             <?php echo $stud2id; ?>
                                            </h4>
                                                </div>
                                                 <div>
                                                    <h4>
                                           <label>Student Full Name:-</label>
                                              <?php echo $stud2fullname ?>
                                                    </h4>
                                                </div>
                                                <div>
                                                    <h4>
                                           <label>Stud3 ID:-</label>
                                             <?php echo $stud3id; ?>
                                                </h4>
                                                </div>
                                                 <div>
                                                    <h4>
                                           <label>Student Full Name:-</label>
                                              <?php echo $stud3fullname ?>
                                                    </h4>
                                                </div>

                                                <div>
                                                <h4> 
                                           <label>Stud4 ID:-</label>
                                             <?php echo $stud4id; ?>
                                                </h4>
                                                </div> 

                                                <div>
                                                    <h4>
                                           <label>Student Full Name:-</label>
                                              <?php echo $stud4fullname ?>
                                                    </h4>
                                                </div>
                                                <div> 
                                                <h4> 
                                           <label>Stud5 ID:-</label>
                                             <?php echo $stud5id; ?>
                                                </h4>
                                                </div>
                                                <div>
                                                <h4>
                                           <label>Student Full Name:-</label>
                                              <?php echo $stud5fullname ?>
                                                </h4>
                                                </div>

                                                <div>
                                                <h4>  
                                            <label>Department:-</label>
                                            <?php echo $department ?>
                                                </h4>
                                            </div>
                                                <div>
                                                <h4>  
                                            <label>Email:-</label>
                                            <?php echo $email ?>
                                                </h4>
                                                </div>
                                                  <div>
                                                  <h4>  
                                            <label>User Name:-</label>
                                            <?php echo $username ?>
                                                </h4>
                                                </div>
                                </div>
                                </li>
                                </ul>
                                </div>
                   </div>
                </div>      
            </div>
        </div>
    </div>
</body>
<?php
include "footer.php";
?>            