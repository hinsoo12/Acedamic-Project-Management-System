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
                        <div style="margin-left: 200px;">
            <form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
            <div class="controls">
            <label class="control-label" for="deaddate" >Date:</label>
             </div>
             <div class="controls">
            <input type="date" style="width:400px;" id="post_id" required="" name="startdate"  class="validate[required]" maxlength="40"  placeholder="deadline date">
            </div>
            <div class="control-group">
            <label class="control-label" for="post_title">Subject:</label>
            </div>
            <div class="controls">
            <input type="text" style="width:400px;" id="post_title" required="" name="post_title" class="validate[required,custom[onlyLetterSp],minSize[8],maxSize[40]] text-input" maxlength="40"  placeholder="title of News">
        <div class="control-group">
            <label class="control-label" for="post_content">Contents:</label>
            <div class="controls">
            <textarea style="width:400px;" rows="5" id="post_content" required="" name="post_content" class="validate[required,minSize[30],maxSize[15000]] text-input" ></textarea>
            </div>
            </div>
            <br>
        
            <div class="control" style="margin-left: 140px;">
            <input name="submit" type="submit" class="btn btn-success" value= "POST" Onclick="return Confirmvalid();">
            </div>
        </form> </div>
<?php 
if(isset($_POST['submit'])){
        
         
mysqli_query($conn ,"insert into post_noticee(id,postdate,post_title,post_content,status)
                values('','$_POST[startdate]','$_POST[post_title]','$_POST[post_content]','')");
                ?>
                <script type="text/javascript">
                    alert("Message is posted successfully");
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