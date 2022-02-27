<?php
session_start();
include "conn.php";
$res=mysqli_query($conn, "select * from department where id = '$_SESSION[deppnma]'");
							while ($row = mysqli_fetch_array($res)) {
							$id =$row["id"];
							$depname = $row["name"];	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	 <link rel="stylesheet" type="text/css" href="assets/libs/select2/dist/css/select2.min.css">
	 <link rel="stylesheet" type="text/css" href="assets/extra-libs/multicheck/multicheck.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <?php
include "get.php";
    ?>


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


	<!-- header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a href="index.php" class="site-logo"><img src="img/logo.png" alt=""></a>
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
		</div>
	</header>
	<!-- header section end-->


	<!-- Header section  -->
	<nav class="nav-section">
		<div class="container">
			<div class="nav-right">
				<a href=""><i class="fa fa-search"></i></a>
				<a href=""><i class="fa fa-shopping-cart"></i></a>
			</div>
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
	<!-- Header section end -->


	<br>
	<br>
	<!-- Breadcrumb section end -->


	<!-- Courses section -->
	<center>
	<section >
                           
                            <form class="form-horizontal" method="post" action="">
                                <div class="card-body">
                                    <h4 class="card-title" style="color: green"><big><b>Your Group Detail</b></big></h4>  
                                    <?php
                                    $error = 0;
				if (isset($_POST["submitcrt"])) {
					$gremail = $_POST['grpemail'];
					$grusernm = $_POST['grpusername'];
					$checkemail =mysqli_query($conn, "select email from groupcrt where email = '$gremail'");
					if (mysqli_num_rows($checkemail) > 0) {
						?>
						 <div class="alert alert-danger col-lg-7">
                           <strong style="color: black">Your Email <?php echo $gremail; ?> Is Already Used Please Enter New Email!</strong>
                           </div>
						<?php
						$error=1;
					}
					$checkusername =mysqli_query($conn, "select username from groupcrt where username = '$grusernm'");
					if (mysqli_num_rows($checkusername) > 0) {
						?>
						 <div class="alert alert-danger col-lg-7">
                           <strong style="color: black">Your Username <?php echo $grusernm; ?> Is Already Used Please Enter New Username!</strong>
                           </div>
						<?php
						$error=1;
					}
					if ($error == 0) {
					$grpuid = "GRP".rand();
                mysqli_query($conn, "insert into groupcrt values('', '$_POST[stud1id]', '$_POST[stud1fullname]','$_POST[stud2id]','$_POST[stud2fullname]','$_POST[stud3id]','$_POST[stud3fullname]','$_POST[stud4id]','$_POST[stud4fullname]','$_POST[stud5id]','$_POST[stud5fullname]','$grpuid','$_POST[grpemail]','$_POST[grpusername]','$_POST[grppassword]','$_POST[dep]','notapproved')");
                ?>
              <div class="alert alert-success col-lg-7">
                           <strong style="color: black">Your Group Is Successfully Created Your Group UID is <?php echo $grpuid; ?></strong>
                           </div>
                <?php
}
}
				?>
                                    <input type="hidden" name="dep" value="<?php echo $depname; ?>" onChange="getfullname(this.value);">  </div>
                                                            
                                    <div class="form-group row">
									<label for="fname" class="col-sm-3 text-right control-label col-form-label">First Student ID </label>
									<div class="col-lg-7">
									<input type="text" name="stud1id" class="form-control" onChange="getfullname(this.value);">
									
									</div>
									</div>
						    		<div class="form-group row">
						   			<label for="fname" class="col-sm-3 text-right control-label col-form-label">First Student Fullname </label>
									<div class="col-lg-7">
								  	<select name="stud1fullname" class="form-control" id="fullname"  readonly>
                       				</select>
									</div>
									</div>
									<div class="form-group row">
									<label for="fname" class="col-sm-3 text-right control-label col-form-label">Second Student ID </label>
									<div class="col-lg-7">
							        <input type="text" name="stud2id" class="form-control" onChange="getstud2fullname(this.value);">
									</div>
									</div>
									<div class="form-group row">
						   			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Second Student Fullname </label>
									<div class="col-lg-7">
								    <select name="stud2fullname" class="form-control" id="stud2fullname"  readonly>
                        			</select>
							        </div>
							    	</div>
							    	<div class="form-group row">
							    	<label for="fname" class="col-sm-3 text-right control-label col-form-label">Third Student ID </label>
									<div class="col-lg-7">
									<input type="text" name="stud3id" class="form-control" onChange="getstud3fullname(this.value);">
									</div>
									</div>
						            <div class="form-group row">
						   			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Third Student Fullname </label>
									<div class="col-lg-7">
								  	<select name="stud3fullname" class="form-control" id="stud3fullname"  readonly>
                        			</select>
									</div>
									</div>
									<div class="form-group row">
									<label for="fname" class="col-sm-3 text-right control-label col-form-label">Forth Student ID </label>
									<div class="col-lg-7">
									<input type="text" name="stud4id" class="form-control" onChange="getstud4fullname(this.value);">
									</div>
									</div>
						   			<div class="form-group row">
						   			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Forth Student Fullname </label>
									<div class="col-lg-7">
								 	<select name="stud4fullname" class="form-control" id="stud4fullname"  readonly>
                        			</select>
									</div>
									</div>
									<div class="form-group row">
									<label for="fname" class="col-sm-3 text-right control-label col-form-label">Fifth Student ID </label>
									<div class="col-lg-7">
									<input type="text" name="stud5id" class="form-control" onChange="getstud5fullname(this.value);">
									</div>
						     		</div>
						     		<div class="form-group row">
						   			<label for="fname" class="col-sm-3 text-right control-label col-form-label">Fifth Student Fullname </label>
									<div class="col-lg-7">
								  	<select name="stud5fullname" class="form-control" id="stud5fullname"  readonly>
                        		  	</select>
								  	</div>
								  	</div>
								  	<div class="form-group row">
									<label for="fname" class="col-sm-3 text-right control-label col-form-label">Group Username</label>
									<div class="col-lg-7">
									<input type="text" name="grpusername" class="form-control" >
									</div>
						     		</div>
								  	<div class="form-group row">
									<label for="fname" class="col-sm-3 text-right control-label col-form-label">Group Email</label>
									<div class="col-lg-7">
									<input type="email" name="grpemail" class="form-control">
									</div>
						     		</div>
						     		<div class="form-group row">
									<label for="fname" class="col-sm-3 text-right control-label col-form-label">Group Password</label>
									<div class="col-lg-7">
									<input type="Password" name="grppassword" class="form-control" >
									</div>
						     		</div>
								    <div class="form-group row">
								  	
								  		<label for="fname" class="col-sm-3 text-right control-label col-form-label"></label>
								  		<div class="col-lg-7">
                         		  	<input type="submit" name="submitcrt" class="form-control btn btn-success" >
                         			</div>
                         			</div>
									</div>
					</center>
					</form>
				</div>
				
			</div>
		</div>
	</section>

				</div>
				
			</div>
		</div>
	</section>
	<!-- Courses section end-->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-lg-5">
					<form class="newsletter">
						<input type="text" placeholder="Enter your email">
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->	


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container footer-top">
			<div class="row">
			</div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<div class="container">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
			</div>		
		</div>
	</footer>
	<!-- Footer section end-->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countdown.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="js/map.js"></script>
	 <script src="assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="assets/libs/select2/dist/js/select2.min.js"></script>
    <!-- <script src="../assets/libs/jquery/dist/jquery.min.js"></script> -->
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