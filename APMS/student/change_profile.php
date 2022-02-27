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
                                  $ch =mysqli_query($conn, "select * from groupcrt where username = '$_SESSION[username]'");
                                             while ($row = mysqli_fetch_array($ch)) {
                         $email=$row['email'];
                         $username=$row['username'];
                         $password=$row['password'];  
                         }      
                          ?>
                          <?php
   
      if (isset($_POST['update'])) {
        $pas = md5($_POST[password2]);
       
      mysqli_query($conn, "update groupcrt set username='$_POST[username2]',email='$_POST[email2]',password='$pas' where username = '$_SESSION[username]'");
       ?>
       <script type="text/javascript">
        alert("successfully updated");
       </script>
        <script type="text/javascript">
        window.location = "myprofile.php";
       </script>
       <?php
      }

    ?>

            <form id="formID"  name="formID"  method="post" action=""  onsubmit="return validateForm()">
    
            <table>
                <tbody>
                            <th><label for="user_id">username</label></th>                          
                            <th><input type="text" name="username2" id="username" class="validate[required,custom[onlyLetterNumber],minSize[4],maxSize[16]] text-input" style="width:350px; height:35px;"value="<?php echo $username; ?>" placeholder="username"/></th>
                            
                        </tbody>
                        <tbody>
                            <th><label for="user_id">Password</label></th>                          
                            <th><input type="password" name="password2" id="password" class="validate[required,custom[onlyLetterNumber],minSize[4],maxSize[16]] text-input" style="width:350px; height:35px;"value="<?php echo $password; ?>" placeholder="Password"/></th>
                                    <tbody><br>
                            <th><label for="user_id">Email</label></th>                         
                            <th><input type="email" name="email2" id="email" class="validate[required,custom[email]] text-input"  style="width:350px; height:35px;" value="<?php echo $email; ?>"  placeholder="email"/></th>
                            
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
