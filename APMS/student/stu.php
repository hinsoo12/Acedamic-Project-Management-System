 if(isset($_POST['login']))
 { 
 $username=$_POST["username"];
 $password = $_POST["password"];
 $password= md5($password);

 $sql="SELECT * FROM  user WHERE username='$username' and password='$password' and status = 'activated'";
        $result=mysqli_query($conn,$sql);
 }
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
   $sql="SELECT * FROM  student WHERE username='$username' and password='$password'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)!=1){
        ?>
        <script type="text/javascript">
            alert("Incorrect Username Or Password");
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
                        
        ?>