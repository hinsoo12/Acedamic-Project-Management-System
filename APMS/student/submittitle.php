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

                    <div class="col-md-12">
                        <div class="card">
                           <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
                                <center>
                                    <div class="card-body"><h4>Submit Your Title</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Project Title</label>
                                        <div class="col-lg-7">
                                            <input type="text" required="" class="form-control"name="fprottl" placeholder="First Project Title">
                                        </div>

                                    </div>
                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">First Project Language</label>
                                        <div class="col-lg-7">
                                            <select  class="form-control" required="" name="frstlang"> 
                                         <option value=""></option>
                                         <option  value="Web-Based">Web-Based</option>
                                         <option  value="Android">Android</option>
                                         <option  value="DeskTop Application">DeskTop Application</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">First Project Title Discription</label>
                                        <div class="col-lg-7">
                                           <textarea cols="4" rows="4" required="" name="fprottdisc" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">First Project Title Proposal</label>
                                        <div class="col-lg-7">
                                            <input type="file" required="" name="fprojprpsl" class="form-control">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Second Project Title</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control" required="" name="sprottl"  placeholder="Second Project Title">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Second Project Language</label>
                                        <div class="col-lg-7">
                                            <select  class="form-control" required="" name="scndlang"> 
                                         <option value=""></option>
                                         <option  value="Web-Based">Web-Based</option>
                                         <option  value="Android">Android</option>
                                         <option  value="DeskTop Application">DeskTop Application</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Second Project Title Discription</label>
                                        <div class="col-lg-7">
                                           <textarea cols="4" rows="4" required="" name="sprottdisc" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Second Project Title Proposal</label>
                                        <div class="col-lg-7">
                                            <input type="file" required="" name="sprojprpsl" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Third Project Title</label>
                                        <div class="col-lg-7">
                                            <input type="text" required="" class="form-control" name="thprottl"  placeholder="Third Project Title">
                                        </div>
                                    </div>
                                     <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Third Project Language</label>
                                        <div class="col-lg-7">
                                            <select  class="form-control" required="" name="thirdlang"> 
                                         <option value=""></option>
                                         <option  value="Web-Based">Web-Based</option>
                                         <option  value="Android">Android</option>
                                         <option  value="DeskTop Application">DeskTop Application</option>
                                            </select>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Third Project Title Discription</label>
                                        <div class="col-lg-7">
                                           <textarea cols="4" rows="4" required="" name="thprottdisc" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Third Project Title Proposal</label>
                                        <div class="col-lg-7">
                                            <input type="file" required="" name="thprojprpsl" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"></label>
                                        <div class="col-lg-7">
                                            <input type="Submit" name="subttl" class="form-control btn-success">
                                        </div>
                                    </div>
                                </div>
                                
                                </center>
                            </form>

                        </div>
                        <?php
                     $ch =mysqli_query($conn, "select * from groupcrt where username= '$_SESSION[username]'");
                                            while ($roww = mysqli_fetch_array($ch)) {
                                                $uid = $roww["group_uid"];
                                                $depp = $roww["department"];
                                            }
                    if (isset($_POST["subttl"])) {
                        $frstlan = $_POST['frstlang'];
      $tm=md5(time());                 
    $fnm=$_FILES["fprojprpsl"]["name"];
    $dst="./proposal/".$tm.$fnm;
    $dstf="./proposal/".$tm.$fnm;
   move_uploaded_file($_FILES["fprojprpsl"]["tmp_name"], $dstf);
    $tm=md5(time());
    $fnm=$_FILES["sprojprpsl"]["name"];
    $dst="./proposal/".$tm.$fnm;
    $dst2="./proposal/".$tm.$fnm;
   move_uploaded_file($_FILES["sprojprpsl"]["tmp_name"], $dst);
    $tm=md5(time());
    $fnm=$_FILES["thprojprpsl"]["name"];
    $dst="./proposal/".$tm.$fnm;
    $dst3="./proposal/".$tm.$fnm;
   move_uploaded_file($_FILES["thprojprpsl"]["tmp_name"], $dst);
                        mysqli_query($conn, "insert into title values('','$uid','$_SESSION[username]','$depp','$_POST[fprottl]','$_POST[fprottdisc]','$dstf','$frstlan','$_POST[sprottl]','$_POST[sprottdisc]','$dst2','$_POST[scndlang]','$_POST[thprottl]','$_POST[thprottdisc]','$dst3','$_POST[thirdlang]','notapproved')");
                        ?>
                        <script type="text/javascript">
                            alert("Successfully Your Title Is Sent");
                        </script>
                        <?php
                    }
                    ?>

                    </div>
                </div>
            </div>
                    
<?php
include "footer.php";
?>            