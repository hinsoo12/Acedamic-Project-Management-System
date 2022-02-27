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
                        
</head>		
							
  <link rel="stylesheet" type="text/css" media="all" href="css/contactstyle.css">
  <link href="css/timeline.css" rel="stylesheet">



    <div class="container">
		<div class="margin-top">
			<div class="row">
				
				<div class="span2">
				
				</div>
				<div class="span10" style="margin-top:-15px">
				
						<div class="panel panel-default" style="margin-left:-150px; height: 330px  ">
                        <!-- /.panel-heading -->
                       	  	

<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body style="">
<?php

			if (isset($_POST['submit_form'])){	
                                
						$password=$_POST['opass'];
						$encpass = md5($password);
						$new_pass=$_POST['npass'];
					    $confirm_pass=$_POST['cpass'];
                        $run = mysqli_query($conn,"select * from examiners where username='$_SESSION[username]'");
						$row = mysqli_fetch_array($run);	
						$tpass=$row['password'];
						//$tpwrd=base64_decode($dec);
						if($encpass != $tpass){
							echo '<div class="alert alert-dismissable alert-danger">';
								echo '<strong>'.'<center>'."You have inserted incorrect password! ".'</center>'.'<strong>';
							echo '</div>';
						}else if($new_pass != $confirm_pass){
							echo '<div class="alert alert-dismissable alert-danger">';
								echo '<strong>'.'<center>'."Passwords not matching!!!!".'</center>'.'<strong>';
							echo '</div>';
						}
						else if(strlen($new_pass) <4 || strlen($new_pass) >10) {
							 echo '<div class="alert alert-dismissable alert-danger">';
							 echo '<strong>'."Weak password. please make it strong!".'</strong>';
							 echo '</div>';
							
							}
						else
						{
							mysqli_query($conn, "update examiners set password = '$encpass' where username='$_SESSION[username]'");
							echo '<div class="alert alert-dismissable alert-success">';
								echo '<strong>'.'<center>'."You have changed your password successfully!!!".'</center>'.'<strong>';
							echo '</div>';
							
					}	
				}
		?>

	<form id="formID"  name="formID"  method="post" action="<?php $_PHP_SELF?>"  onsubmit="return validateForm()">
			
			    <div class="modal-header">
					
					<div class="modal-title" style="font-size: 25px; color: #890fe1">Change Password </div>
					
				</div>
				
				<div class="modal-body">	
						<div class="form-group row">
                                  
                                   <div>
                                   	<label for="fname" class="col-sm-3 text-right control-label col-form-label">Old Password</label>
                                   </div>

                                   <div class="col-lg-7">
                                       <input type="password" required="" name="opass" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                  
                                   <div>
                                   	<label for="fname" class="col-sm-3 text-right control-label col-form-label">New Password</label>
                                   </div>
                                   <div class="col-lg-7">
                                       <input type="password" required="" name="npass" class="form-control" >
                                    </div>
                                </div>
                                 <div class="form-group row">
                                  
                                   <div>
                                   	<label for="fname" class="col-sm-3 text-right control-label col-form-label">Confirm Passw</label>
                                   </div>
                                   <div class="col-lg-7">
                                       <input type="password" required="" name="cpass" class="form-control" >
                                    </div>
                                </div>	
				</div>
				<div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"></label>
                                        <div class="col-lg-7">
                                            <input type="Submit" name="submit_form" class="form-control btn-success" value="Change">
                                        </div>
                                    </div>
		</form>
		</div>
			
								</div>
			</div>

				</div>		
			</div>
		</div>
    </body>
                            </div>
                        </div>
                    </div>
<?php
include "footer.php";
?>            