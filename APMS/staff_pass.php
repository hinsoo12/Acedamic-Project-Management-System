<?php
session_start();
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Unica - University Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Unica University Template">
	<meta name="keywords" content="event, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/themify-icons.css"/>
	<link rel="stylesheet" href="parsley/stylee.css">
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	 <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
	 <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<nav class="nav-section">
		<div class="container">
			<ul class="main-menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="#">Event</a></li>
				<li><a href="course.html">COURSES</a></li>
				<li><a href="blog.html">blog</a></li>
				<li class="active"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</nav>
	<section >
				<form class="form-horizontal" method="post" action="" enctype="multipart/form-data" id="validationform" data-parsley-validate="" novalidate="">
						<center>
					 <div class="form-group row">
									<label for="fname" class="col-sm-3 text-right control-label col-form-label">Insert Email</label>
									<div class="col-lg-3">
                                      <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                    <div class="form-group row">
									<label for="fname" class="col-sm-3 text-right control-label col-form-label">Insert UserID</label>
									<div class="col-lg-3">
                                      <input type="text" name="grade" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                	<label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
                                	<div class="col-lg-3">
                                	<input type="submit" name="subaaa" class="form-control btn btn-success">
                                </div>
                                </div>
					</center>
					</form>
				</div>
				<?php
				if (isset($_POST["subaaa"])) {
				$end=$_POST["grade"];
				$last=$_POST["name"];
			$ch =mysqli_query($conn, "select * from examiners where staffid = '$_POST[grade]'");
                                            while ($rowww = mysqli_fetch_array($ch)) {

                                                $fullname = $rowww["email_address"];
                                                $id = $rowww["staffid"];
                                                $lg = $rowww["username"];
                                                $jg = $rowww["password"];
                                             }	
                                           if ($end == $id && $last = $fullname) {
                                           $ch =mysqli_query($conn, "select * from staff_password where staff_id = '$_POST[grade]'");
                                            while ($rowww = mysqli_fetch_array($ch)) {
                                                $jgh = $rowww["password"];
                                             }  
                                            
                                          ?> 	<div class="form-group row">
									<label for="fname" class="col-sm-3 text-right control-label col-form-label">Your UserName is</label>
									<div class="col-lg-3">
                                      <input type="text" name="name" class="form-control" value="<?php echo "$lg"; ?>" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Your Password is</label>
                                    <div class="col-lg-3">
                                      <input type="text" name="name" class="form-control" value="<?php echo "$jgh"; ?>" readonly>
                                    </div>
                                </div>
                                <?php
                                           }
                                             ?>
				<?php
				}

				?>
			</div>
		</div>
	</section>
	<!-- Courses section end-->


	<!-- Newsletter section -->
	<!-- Newsletter section end -->	


	<!-- Footer section -->
	
				<div class="col-sm-6 col-lg-3 footer-widget">
					
				</div>
			</div>
		</div>
		
	</footer>
	<!-- Footer section end-->



	<!--====== Javascripts & Jquery ======-->
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
	<script src="parsley/parsley.js"></script>


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>
	 <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>

    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
     <script src="../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.min.js"></script>
     <script src="../assets/libs/quill/dist/quill.min.js"></script>

    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
	
</body>
</html>
	
</body>
</html>