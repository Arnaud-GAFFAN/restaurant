<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from davur.dexignzone.com/frontend/front-authentication.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 11:36:05 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:title" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:description" content="Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd" />
	<meta property="og:image" content="https://davur.dexignzone.com/xhtml/page-error-404.html" />
	<meta name="format-detection" content="telephone=no">
    <title>Davur - Restaurant Bootstrap Admin Dashboard + FrontEnd </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="../../cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">


        <?php
            require './components/header.php';
        ?>

        <?php
        if (isset($_SESSION['admin']) and $_SESSION['admin']){
            require './components/sidebar.php';
        }
        ?>
		<div class="menu-close"></div>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-wrapper">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head dashboard-head d-md-flex d-block mb-5 align-items-start">
					<h2 class="dashboard-title">Authentication</h2>
					
				</div>
				
				<!-- <div class="row" id="masonry"> -->
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0">
										<h4>KITCHEN APP</h4>
									</div>
									<div class="card-body py-0 loadmore-content" id="authenticationNumContent">
										<div class="form-group">
											<input type="text" class="form-control solid" placeholder="" value="+91 123 874 489">
										</div>
										<div class="form-group">
											<input type="text" class="form-control solid" placeholder="" value="+91 123 874 489">
										</div>
									</div>
									<div class="card-footer border-0">
										<a href="javascript:void(0);" class="btn-link dz-load-more" id="authenticationNum" rel="ajax/front-authentication.html">+Add More</a>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0">
										<h4>eMENU APP</h4>
									</div>
									<div class="card-body py-0 loadmore-content" id="authenticationNum2Content">
										<div class="form-group">
											<input type="text" class="form-control solid" placeholder="" value="+91 123 874 489">
										</div>
										<div class="form-group">
											<input type="text" class="form-control solid" placeholder="" value="+91 123 874 489">
										</div>
										<div class="form-group">
											<input type="text" class="form-control solid" placeholder="" value="+91 123 874 489">
										</div>
									</div>
									<div class="card-footer border-0">
										<a href="javascript:void(0);" class="btn-link dz-load-more" id="authenticationNum2" rel="ajax/front-authentication.html">+Add More</a>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0">
										<h4>DESK APP</h4>
									</div>
									<div class="card-body py-0 loadmore-content" id="authenticationNum4Content">
										<div class="form-group">
											<input type="text" class="form-control solid" placeholder="" value="+91 123 874 489">
										</div>
										<div class="form-group">
											<input type="text" class="form-control solid" placeholder="" value="+91 123 874 489">
										</div>
										<div class="form-group">
											<input type="text" class="form-control solid" placeholder="" value="+91 123 874 489">
										</div>
									</div>
									<div class="card-footer border-0">
										<a href="javascript:void(0);" class="btn-link dz-load-more" id="authenticationNum4" rel="ajax/front-authentication.html">+Add More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0">
										<h4>KIOSK APP</h4>
									</div>
									<div class="card-body py-0 loadmore-content" id="authenticationNum1Content">
										<div class="form-group">
											<input type="text" class="form-control solid" placeholder="" value="+91 123 874 489">
										</div>
										<div class="form-group">
											<input type="text" class="form-control solid" placeholder="" value="+91 123 874 489">
										</div>
										<div class="form-group">
											<input type="text" class="form-control solid" placeholder="" value="+91 123 874 489">
										</div>
									</div>
									<div class="card-footer border-0">
										<a href="javascript:void(0);" class="btn-link dz-load-more" id="authenticationNum1" rel="ajax/front-authentication.html">+Add More</a>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0">
										<h4>REVIEW APP</h4>
									</div>
									<div class="card-body py-0 loadmore-content" id="authenticationNum3Content">
										<div class="form-group">
											<input type="text" class="form-control solid" placeholder="" value="+91 123 874 489">
										</div>
										<div class="form-group">
											<input type="text" class="form-control solid" placeholder="" value="+91 123 874 489">
										</div>
									</div>
									<div class="card-footer border-0">
										<a href="javascript:void(0);" class="btn-link dz-load-more" id="authenticationNum3" rel="ajax/front-authentication.html">+Add More</a>
									</div>
								</div>
							</div>
							<div class="col-xl-12">	
								<a href="javascript:void(0);" class="btn btn-primary">Save Changes</a>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer p-0">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
	
	
</body>

<!-- Mirrored from davur.dexignzone.com/frontend/front-authentication.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 11:36:06 GMT -->
</html>