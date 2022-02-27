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
                                  $ch =mysqli_query($conn, "select * from advosorandco where username = '$_SESSION[username]'");
                                             while ($row = mysqli_fetch_array($ch)) {
                         $firstname=$row['firstname'];
                         $middlename=$row['middlename'];
                         $lastname=$row['lastname'];
                         $username=$row['username'];
                         $email=$row['email_address'];
                         $department=$row['department'];
                         }      
                          ?>
                                    </div>
                                    <h2>
                                    <P style="color: black; font-size: 30px;">Your Profile Information</P>
                                    </h2>
                                             <div class="col-md-">
                                         <div>
                                            <h4>
                                           <label>First Name:-</label>
                                               <?php echo $firstname; ?> 
                                               </h4>
                                                </div>
                                                <div>
                                          <h4><label>Middle Name:-</label>
                                              <?php echo $middlename; ?>
                                          </h4>
                                                </div>
                                                <div>
                                                <h4>
                                           <label>Last Name:-</label>
                                             <?php echo $lastname; ?>
                                             </h4>
                                                </div>
                                                 <div>
                                                <h4>
                                           <label>User Name:-</label>
                                              <?php echo $username; ?>
                                                </h4>
                                                </div>
                                                <div>
                                                <h4> 
                                           <label>Email Address:-</label>
                                             <?php echo $email; ?>
                                                </h4>
                                                </div>
                                                 <div>
                                                <h4>
                                           <label>Department:-</label>
                                              <?php echo $department; ?>
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