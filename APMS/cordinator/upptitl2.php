<?php 
include "header.php";
include "sidebar.php";

                                    $ch =mysqli_query($conn, "select * from groupcrt where username = '$_SESSION[username]'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $idu = $rowww["group_uid"];

}
$did = $_GET["uid"];
                                    $ch =mysqli_query($conn, "select * from title where group_uid = '$did'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $id = $rowww["id"];
                                                $greuserame = $rowww["group_username"];
                                                $gruid = $rowww["group_uid"];
                                                $dep = $rowww["department"];
                                                $fprottl = $rowww["scndprotitl"];
                                                $fprodisc = $rowww["scndprodiscrip"];
                                                $fprojprop = $rowww["scndprojprop"];
                                                $sprojlang = $rowww["sacd_lang"];
}
  $ch =mysqli_query($conn, "select * from groupcrt where group_uid = '$gruid'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $idu = $rowww["group_uid"];

}

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
                        <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                                <center>
                                    <?php
                                    if (isset($_POST["subtstl"])) {
                                    
                                    $procd = "PRJ".rand();
                                    mysqli_query($conn, "insert into approvedttl values ('','$did','$procd','$_POST[fprottl]','$_POST[fprottdisc]','$_POST[scp]','$_POST[fprojprpsl]','$_POST[advstffid]','$_POST[exmcd]','Approved')");
                                    mysqli_query($conn, "update title set status ='approved' where group_uid = '$idu'");
                                    ?>
                                    <div class="alert alert-success col-lg-7">
                           <strong style="color: black">Your Group Title Is Successfully Approved  Project Code is <?php echo $procd; ?></strong>
                           </div>
                                    <?php
                                }
                                    ?>
                                    <div class="card-body"><h4>Submit Your Title</h4>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Second Project Title</label>
                                        <div class="col-lg-7">
                                            <input type="text" class="form-control"name="fprottl" value="<?php echo $fprottl; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Second Project Title Discription</label>
                                        <div class="col-lg-7">
                                           <textarea cols="4" rows="4" name="fprottdisc" class="form-control" readonly=""><?php echo $fprodisc; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Second Project Title Proposal</label>
                                        <div class="col-lg-7">
                                            <input type="text" name="fprojprpsl" class="form-control" value="<?php echo $fprojprop; ?>" readonly>
                                        </div>
                                    </div>
                                     
                                     <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Programming Language</label>
                                        <div class="col-lg-7">
                                            <input type="text" name="lang" class="form-control" value="<?php echo $sprojlang; ?>" readonly>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Add Scope Or Comment</label>
                                        <div class="col-lg-7">
                                            <textarea cols="5" rows="5" name="scp" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Advisor</label>
                                   <div class="col-lg-7">
                                        <select name="advstffid" class="select2 form-control custom-select" style="width: 100%; height:36px;" onChange="getcoadv(this.value);">
                                            <option>Select</option>
                                            <?php
                                            $cha =mysqli_query($conn, "select * from advosorandco where department = '$dep' && usertype ='advisor'");
                                            while ($roowww = mysqli_fetch_array($cha)) {
                                              
                                               ?>
                                                <option value="<?php echo $roowww["coandadvcode"] ?>"><?php echo  $roowww["firstname"]; echo " "; echo  $roowww["middlename"]; echo " "; echo $roowww["lastname"]; ?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                               <div class="form-group row">
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">CO-Advisor</label>
                                   <div class="col-lg-7">
                                        <select id="coad" name="coadid" class="form-control" style="width: 100%; height:36px;" readonly>
                                              
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                  
                                   <label for="fname" class="col-sm-3 text-right control-label col-form-label">Examiner</label>
                                   <div class="col-lg-7">
                                        <select name="exmcd" class="select2 form-control custom-select" style="width: 100%; height:36px;">
                                            <option>Select</option>
                                            <?php
                                            $cha =mysqli_query($conn, "select * from examiners where department = '$dep' && usertype ='coexaminers'");
                                            while ($roowww = mysqli_fetch_array($cha)) {
                                              
                                               ?>
                                                <option value="<?php echo $roowww["coandadvcode"] ?>"><?php echo  $roowww["firstname"]; echo " "; echo  $roowww["middlename"]; echo " "; echo $roowww["lastname"]; echo " "; echo $roowww["coandadvcode"];?></option>
                                        <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label"></label>
                                        <div class="col-lg-7">
                                            <input type="Submit" name="subtstl" class="form-control btn-success" value="Approve Title">
                                        </div>
                                    </div>
                                </div>
                                
                                </center>
                            </form>
                            </div>
                        </div>


                               
                        </div>
                    </div>
<?php
include "footer.php";
?>            
<script type="text/javascript">
    function getcoadv(val) {
    $.ajax({
    type: "POST",
    url: "getcadvisr.php",
    data:'studid2='+val,
    success: function(data){
        $("#coad").html(data);
    }
    });
}
</script>