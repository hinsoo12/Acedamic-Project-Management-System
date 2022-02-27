<?php 
include "header.php";
include "sidebar.php";
?>

<?php
$id = $_GET['id'];

$ros = mysqli_query($conn, "select * from user where user_id = '$id' ");
while ($roww = mysqli_fetch_array($ros)) {
    $id = $roww['user_id'];
    $username = $roww['username'];
    $email = $roww['email_address'];
}
?>
<?php
                            if (isset($_POST["updcord"])) {
                                
                                mysqli_query($conn, "update user set username = '$_POST[username]', email_address = '$_POST[email]' where user_id = '$id'");
                                ?>
                                <script type="text/javascript">
                                    alert("Successfully Edited");
                                </script>
                                <?php
                            }


                            ?>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                         <div class="card">
                            <form class="form-horizontal" method="post" action="">
                                <div class="card-body">
                                    <h4 class="card-title">Personal Info</h4>
                                    <div class="form-group row">
                                        <label for="fname"  class="col-sm-3 text-right control-label col-form-label">Coordinator ID</label>
                                        <div class="col-sm-9">
                                            <h5><?php echo $id; ?></h5>
                                            <input type="hidden" name="id" value="<?php echo $id ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  name="username" value="<?php echo $username; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"  name="email" value="<?php echo $email; ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <input type="submit" name="updcord" class="form-control btn btn-primary">
                                    </div>
                            </form>
                        </div>
                        
<?php
include "footer.php";
?>            