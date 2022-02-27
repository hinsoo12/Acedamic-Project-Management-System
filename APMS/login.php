<?php
session_start();
 include "conn.php";
?>
<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>Academic Project Managemnt and Evaluation System</title>
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="parsley/parsley.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"> <h3>Academic Project Managemnt and Evaluation System</h3>
                        </span>
                    </div>
                    <!-- Form -->
                    <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">    <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" placeholder="Username" aria-label="Username" required="" name="username" aria-describedby="basic-addon1" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required="" aria-label="Password" aria-describedby="basic-addon1" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn btn-info" id="to-recover" type="button"><i class="fa fa-lock m-r-5"></i> Forget Password?</button>
                                        <button class="btn btn-success float-right" name="login" type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <?php 
 if(isset($_POST['login']))
 { 
 $username=$_POST["username"];
 $password = $_POST["password"];
 $password= md5($password);

 $sql="SELECT * FROM  user WHERE username='$username' and password='$password' and status = 'activated'";
        $result=mysqli_query($conn,$sql);
        
        while($row = mysqli_fetch_array($result))
        {
                       
                        $usertype=$row["usertype"];
                       
                           $_SESSION['username'] =$username;
                           $_SESSION['password'] =$password;
                           $_SESSION["username"] = $_POST["username"];
                           
                        if($usertype=='admin'){                 
                             ?>
                      <script type="text/javascript">
                    window.location="admin/adminpage.php";
                     </script>
              <?php
                             break; 
                        }
                        else if($usertype=='advisor'){
                            ?>
                      <script type="text/javascript">
                    window.location="advisor/advisorpage.php";
                     </script>
              <?php
                             break; 
                        }
                        else if($usertype=='examiner'){
                           ?>
                      <script type="text/javascript">
                    window.location="examiner/examinerpage.php";
                     </script>
              <?php
                            break;
                        }else if($usertype=='cordinator'){
                           ?>
                      <script type="text/javascript">
                    window.location="cordinator/cordinatorpage.php";
                     </script>
              <?php
                  }  

                        
                }
   $sql="SELECT * FROM  groupcrt WHERE username='$username' and password='$password' and status='Approved'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)!=1){
        ?>
        <script type="text/javascript">
            
        </script>
        <?php
 }
        else {  
        while($row = mysqli_fetch_assoc($result))
        {
                       
                       
                           $_SESSION['username'] =$username;
                           $_SESSION['password'] =$password;
                           $_SESSION["username"] = $_POST["username"];
                                            
                             ?>
                      <script type="text/javascript">
                    window.location="student/studentpage.php";
                     </script>
              <?php
                             break; 
                        } 
                        }
                         $sql="SELECT * FROM  examiners WHERE username='$username' and password='$password' and status='activated'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)!=1){
 }
        else {  
        while($row = mysqli_fetch_assoc($result))
        {
                       
                       
                           $_SESSION['username'] =$username;
                           $_SESSION['password'] =$password;
                           $_SESSION["username"] = $_POST["username"];
                                            
                             ?>
                    
                      <script type="text/javascript">
                    window.location="examiner/examinerpage.php";
                     </script>
              <?php
                             break; 
                        } 
                        }
        $sql="SELECT * FROM  advosorandco WHERE username='$username' and password='$password' and status='activated'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)!=1){
        ?>
        <script type="text/javascript">
          alert("Incorrect Username or Password");
        </script>
        <?php
 }
        else {  
        while($row = mysqli_fetch_assoc($result))
        {
                       
                       
                           $_SESSION['username'] =$username;
                           $_SESSION['password'] =$password;
                           $_SESSION["username"] = $_POST["username"];
                                            
                             ?>
                     <script type="text/javascript">
                    window.location="advisor/advisorpage.php";
                     </script>
              <?php
                             break; 
                        } 
                        }

                    }
                        
        ?>
       
                <div id="recoverform">
                    <div class="text-center">
                        <span class="text-white">Enter your e-mail address below and we will send you instructions how to recover a password.</span>
                    </div>
                    <div class="row m-t-20">
                        <!-- Form -->
                        <form class="col-12" action="index.html">
                            <!-- email -->
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-danger text-white" id="basic-addon1"><i class="ti-email"></i></span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="Email Address" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <!-- pwd -->
                            <div class="row m-t-20 p-t-20 border-top border-secondary">
                                <div class="col-12">
                                    <a class="btn btn-success" href="#" id="to-login" name="action">Back To Login</a>
                                    <button class="btn btn-info float-right" type="button" name="action">Recover</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="parsley/parsley.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){
        
        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
    </script>

</body>

</html>