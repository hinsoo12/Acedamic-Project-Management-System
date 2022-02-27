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
                        <?php 
                       $qq=mysqli_query($conn,"SELECT * FROM post_noticee");

                   
                            while ($tt=mysqli_fetch_array($qq)) {

                            $con=$tt["id"];
                            $tit=$tt["postdate"];
                            $dt=$tt["post_title"];
                            $by=$tt["post_content"];
                            
                            ?>
                        
                               <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title m-b-0" style="color: grey">Recent Post Date  <?php echo $tit; ?>
                                            </h2>
                            </div>
                            <div class="comment-widgets scrollable">
                                <!-- Comment Row -->
                                <div class="d-flex flex-row comment-row m-t-0">
                                   
                                    <div class="comment-text w-100">
                                        <h3 class="font-medium" style="color: grey">
                                          Subject: <br> 
                                        </h3>
                                        <h4 style="color: black"> <?php echo $dt; ?>
                                        </h4>
                                        <span class="m-b-15 d-block">
                                           <h3 style="color: grey">
                                            Contents: <br>
                                            </h3>
                                        <h4 style="color: black">
                                            <?php
                                            echo $by;
                                            ?>
                                        </h4>
                                        </span>
                                       
                                    </div>
                                </div>
                                <!-- Comment Row -->
                               <?php } ?>
                                
                                <!-- Comment Row -->
                                
                                 <!-- Comment Row -->
                                
                            </div>
                        </div>
                        </div>
                    </div>
<?php
include "footer.php";
?>            