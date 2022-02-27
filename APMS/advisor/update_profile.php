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
                                  $ch =mysqli_query($conn, "select * from advosorandco where username = '$_SESSION[username]'");
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
       
      mysqli_query($conn, "update advosorandco set firstname='$_POST[firstname2]',middlename='$_POST[middlename2]',lastname='$_POST[lastname2]',username='$_POST[username2]',email_address='$_POST[email_address2]',password='$pas' where username = '$_SESSION[username]'");
      $_SESSION['username'] = $_POST['username2'];
       ?>
       <script type="text/javascript">
        alert("successfully updated");
       </script>
        <script type="text/javascript">
        window.location = "advisorpage.php";
       </script>
       <?php
      }

    ?>

            <form id="formID"  name="formID"  method="post" action=""  onsubmit="return validateForm()">
    
            <table>
                <tbody>
                    <h4>
                            <th><label for="user_id">Username</label></th>                          
                            <th><input type="text" name="username2" id="username" class="validate[required,custom[onlyLetterNumber],minSize[4],maxSize[16]] text-input" style="width:350px; height:35px;"value="<?php echo $username; ?>" placeholder="username"/></th>
                    </h4>        
                        </tbody>
                        <tbody>
                            <th><label for="user_id">Password</label></th>                          
                            <th><input type="password" name="password2"  ></th>
                                    <tbody><br>
                            <th><label for="user_id">Email</label></th>                         
                            <th><input type="email" name="email_address2" id="email" class="validate[required,custom[email]] text-input"  style="width:350px; height:35px;" value="<?php echo $email_address; ?>"  placeholder="EmailAddress"/></th>
                            
                        </tbody>
                         <tbody>
                            <th><label for="user_id">First Name</label></th>                          
                            <th><input type="text" name="firstname2" id="username" class="validate[required,custom[onlyLetterNumber],minSize[4],maxSize[16]] text-input" style="width:350px; height:35px;"value="<?php echo $firstname; ?>" placeholder="FirstName"/></th>
                            
                        </tbody>
                        <tbody>
                            <th><label for="user_id">Middele Name</label></th>                          
                            <th><input type="text" name="middlename2" id="password" class="validate[required,custom[onlyLetterNumber],minSize[4],maxSize[16]] text-input" style="width:350px; height:35px;"value="<?php echo $middlename; ?>" placeholder="MiddleName"/></th>
                                    <tbody><br>
                            <th><label for="user_id">Last Name</label></th>                         
                            <th><input type="text" name="lastname2" id="email" class="validate[required,custom[email]] text-input"  style="width:350px; height:35px;" value="<?php echo $lastname; ?>"  placeholder="LastName"/></th>
                            
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
