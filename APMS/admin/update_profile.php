<?php 
include "header.php";
include "sidebar.php";
?>
<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
    
            <?php
                                  $ch =mysqli_query($conn, "select * from user where username = '$_SESSION[username]'");
                                             while ($row = mysqli_fetch_array($ch)) {
                         $firstname=$row['firstname'];
                         $middlename=$row['middlename'];
                         $lastname=$row['lastname'];
                         $username=$row['username']; 
                         $email_address=$row['email_address'];
                         $password=$row['password'];
                         }      
                          ?>
                          <?php
   
      if (isset($_POST['update'])) {
        $pas = md5($_POST[password2]);
       
      mysqli_query($conn, "update user set username='$_POST[username2]',email_address='$_POST[email_address2]' where username = '$_SESSION[username]'");
       ?>
       <script type="text/javascript">
        alert("successfully updated");
       </script>
        <script type="text/javascript">
            <?php $_SESSION['username'] = $_POST['username2']; ?>
        window.location = "adminpage.php";
       </script>
       <?php
      }

    ?>

           <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
            <table>
                <tbody>
                    <h4>
                            <th><label for="user_id">Username</label></th>                          
                            <th><input type="text" name="username2" id="username" required="" class="validate[required,custom[onlyLetterNumber],minSize[4],maxSize[16]] text-input" style="width:350px; height:35px;"value="<?php echo $username; ?>" placeholder="username"/></th>
                    </h4>        
                        </tbody>
                       
                            <th><label for="user_id">Email</label></th>                         
                            <th><input type="email" name="email_address2" id="email" required="" class="validate[required,custom[email]] text-input"  style="width:350px; height:35px;" value="<?php echo $email_address; ?>"  placeholder="EmailAddress"/></th>
                            
                        </tbody>
                        </tbody>
                    </tbody>
                    </table>
        <div class="controls_group">
            <input name="update" type="submit" value="Update" class="btn btn-success" Onclick="return Confirmchange();">
            </div>
        </div>
    </form>  
</div>
</div>
</div>
<?php 
include "footer.php";
?>
