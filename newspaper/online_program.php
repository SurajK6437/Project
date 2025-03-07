<?php

include('includes/config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- SITE TITLE -->
<title>Online Program | CAT 2 CET MENTORS</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="assets/css/animate.css">	
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- Icon Font CSS -->
<link rel="stylesheet" href="assets/css/ionicons.min.css">
<link rel="stylesheet" href="assets/css/themify-icons.css">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="assets/css/all.min.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.css">
<link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="assets/css/magnific-popup.css">
<!-- Style CSS -->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" id="layoutstyle" href="assets/color/theme.css">


<style>
.event_list .content_desc p {
	font-size: 20px;
	    height: auto;
}
</style>

</head>

<body>

<!-- LOADER -->
<div id="preloader">
    <span class="spinner"></span>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- END LOADER --> 




<!-- START HEADER -->
<?php include('includes/header.php'); ?>
<!-- START SECTION BREADCRUMB -->

<section class="page-title-light breadcrumb_section parallax_bg overlay_bg_50" data-parallax-bg-image="assets/images/about_bg.jpg">
	<div class="container">
    	<div class="row align-items-center">
        	<div class="col-sm-6">
            	<div class="page-title">
            		<h1>ONLINE  PROGRAM </h1>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-sm-end">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">ONLINE  PROGRAM </li>
                  </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER -->




<!-- START SECTION FEATURE -->
<section class="bg_gray">
    <div class="container">
    	<div class="row justify-content-center">
        	<div class="col-md-6">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.01s">
                    <div class="heading_s1 text-center">
                        <h2>ONLINE  PROGRAM </h2>
                        <h6>To purchase any program Call on - 9920553559 / 9022342214</h6>
                    </div>
                  
                </div>
            </div>
        </div>
        <div class="row">
		<?php
											
												
												
						$sql = "SELECT * FROM online_program";
										$statement = $con->prepare($sql);
										$statement->execute();
										$result = $statement->fetchAll();							
										
										
										foreach ($result as $row) {
?>								
            <div class="col-md-4">
                <div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="box_icon bg_danger mb-3">
                		<img src="assets/images/book.png" alt="book" />
                    </div>
                    <div class="intro_desc">
                        <h5>ONLINE COURSE
</h5>
                        <p><?php echo $row['online'];?> </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.03s">
                	<div class="box_icon bg_default mb-3">
                		<img src="assets/images/globe.png" alt="globe" />
                    </div>
                    <div class="intro_desc">
                        <h5>STUDY MATERIAL
</h5>
                         <p><?php echo $row['study'];?> </p>

<br>
<br><br>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
            	<div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.04s">
                	<div class="box_icon bg_light_green mb-3">
                        <img src="assets/images/instructors.png" alt="instructors" />
                    </div>
                    <div class="intro_desc">
                        <h5>MOCK TESTS PROGRAM
</h5>
                         <p><?php echo $row['mock'];?> </p>
                    </div>
                </div>
            </div>
			<?php } ?>
			
			
			
			
			<?php
											
												
												
						$sql = "SELECT * FROM online_course";
										$statement = $con->prepare($sql);
										$statement->execute();
										$result = $statement->fetchAll();							
										
										
										foreach ($result as $row) {
?>								
          
		   <div class="col-md-4">
               <a href="<?php echo $row['link']; ?>" target="_blank">   <div class="icon_box text-center bg-white icon_box_style2 box_shadow2 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.02s">
                	<div class="box_icon bg_danger mb-3">
                		<img src="admin/<?php echo $row['image']; ?>"  alt="book" />
                    </div>
                    <div class="intro_desc">
                        <h5><?php echo $row['title']; ?></h5>
                        <p><?php echo $row['description']; ?> </p>
                    </div>
                </div></a>
            </div>
			
										<?php } ?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
        </div>
    </div>
</section> 
<!-- END SECTION FEATURE -->




<!-- START FOOTER -->
<?php include('includes/footer.php'); ?>
<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="assets/js/jquery-1.12.4.min.js"></script> 
<!-- jquery-ui --> 
<script src="assets/js/jquery-ui.js"></script>
<!-- popper min js --> 
<script src="assets/js/popper.min.js"></script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="assets/bootstrap/js/bootstrap.min.js"></script> 
<!-- owl-carousel min js  --> 
<script src="assets/owlcarousel/js/owl.carousel.min.js"></script> 
<!-- magnific-popup min js  --> 
<script src="assets/js/magnific-popup.min.js"></script> 
<!-- waypoints min js  --> 
<script src="assets/js/waypoints.min.js"></script> 
<!-- parallax js  --> 
<script src="assets/js/parallax.js"></script> 
<!-- countdown js  --> 
<script src="assets/js/jquery.countdown.min.js"></script> 
<!-- jquery.counterup.min js --> 
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- imagesloaded js --> 
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- isotope min js --> 
<script src="assets/js/isotope.min.js"></script>
<!-- scripts js --> 
<script src="assets/js/scripts.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
    
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});
</script>
</body>

</html>