<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from davur.dexignzone.com/frontend/front-support.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 11:36:09 GMT -->
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
        include('./components/header.php');
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
					<h2 class="dashboard-title">Support</h2>
				</div>
				
				<div class="row align-items-center">
					<div class="col-lg-5">
						<img src="images/24x7.png" alt="" class="img-fluid">
					</div>
					<div class="col-lg-7">
						<div class="card">
							<div class="card-body">
								<h2 class="text-black main-title">Write us your query</h2>
								<p>We'l get back to you soon</p>
								<form class="mt-5">
									<div class="form-group mb-3 pb-3">
										<label class="font-w600">Phone Number</label>
										<input type="text" class="form-control solid" placeholder="" required="" value="+1 123 456 7891">
									</div>
									<div class="form-group mb-3 pb-3">
										<label class="font-w600">Your Message</label>
										<textarea rows="5" class="form-control solid py-3" placeholder="Write your message"></textarea>
									</div>
									<a href="javascript:void(0);" class="btn btn-primary btn-rounded">submit</a>
								</form>
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

<!-- Mirrored from davur.dexignzone.com/frontend/front-support.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 11:36:09 GMT -->
</html>