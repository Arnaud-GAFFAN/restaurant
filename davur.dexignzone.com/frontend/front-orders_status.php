<?php
session_start();

try {
    $data_base = new PDO('mysql:host=localhost;dbname=restaurant_les_delices;', 'root', '');
} catch (Exception $err) {
    die('Erreur' . $err);
}

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from davur.dexignzone.com/frontend/front-orders_status.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 11:36:03 GMT -->
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
	<link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
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
        require './components/sidebar.php';
        ?>

        <div class="menu-close"></div>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-wrapper">
            <!-- row -->
			<div class="container-fluid bg-gray">
				<div class="row order-row" id="masonry">
                    <?php
                    while ($donnes){
                    ?>
					<div class="card-container">
						<div class="card  shadow-sm">
							<div class="card-header bg-primary text-white">
								<div>
									<h4 class="text-white">Commande</h4>
									<span class="fs-12 op9"> <?php echo $donnes['id_cde'] ?> </span>
								</div>
								<h3 class="text-white">08:49</h3>
							</div>
							<div class="card-body">
								<ul class="order-list">
									<li><del><span>1</span>Chat Masala</del></li>
									<li><span>1</span>Veg Cheese Pizza</li>
									<li><del><span>1</span>Chat Masala</del></li>
									<li><span>1</span>Veg Cheese Pizza</li>
									<li><del><span>2</span>Vanila Ice Cream</del></li>
									<li><span>1</span>Egg Faritta</li>
									<li><del><span>1</span>Rosted Chicken<small class="d-block">Extra Cheese</small></del></li>
									<li><del><span>1</span>Farm Ville Pizz<small class="d-block">Extra Cheese</small></del></li>
								</ul>
							</div>
						</div>
					</div>
                    <?php
                    }
                    ?>
					<div class="card-container">
						<div class="card  shadow-sm">
							<div class="card-header  bg-danger text-white">
								<div>
									<h4 class="text-white">Dine-in</h4>
									<span class="fs-12 op9">AB00121</span>
								</div>
								<h3 class="text-white">08:49</h3>
							</div>
							<div class="card-body">
								<ul class="order-list">
									<li><del><span>1</span>Momos masala</del></li>
									<li><del><span>1</span>Bubble and squeak</del></li>
									<li><del><span>1</span>Pease pudding</del></li>
									<li><span>1</span>Sunday roast</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="card-container">
						<div class="card  shadow-sm">
							<div class="card-header bg-primary text-white">
								<div>
									<h4 class="text-white">Dine-in</h4>
									<span class="fs-12 op9">AB00121</span>
								</div>
								<h3 class="text-white">08:49</h3>
							</div>
							<div class="card-body">
								<ul class="order-list">
									<li><del><span>1</span>Chat Masala</del></li>
									<li><span>1</span>Veg Cheese Pizza</li>
									<li><del><span>1</span>Chat Masala</del></li>
									<li><span>1</span>Veg Cheese Pizza</li>
									<li><del><span>2</span>Vanila Ice Cream</del></li>
									<li><span>1</span>Egg Faritta</li>
									<li><del><span>1</span>Rosted Chicken<small class="d-block">Extra Cheese</small></del></li>
									<li><del><span>1</span>Farm Ville Pizz<small class="d-block">Extra Cheese</small></del></li>
								</ul>
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
	<script src="vendor/imagesloaded/imagesloaded.js"></script><!-- IMAGESLOADED -->
	<script src="vendor/masonry/masonry-4.2.2.js"></script><!-- MASONRY -->
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>

	
</body>

<!-- Mirrored from davur.dexignzone.com/frontend/front-orders_status.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 11:36:05 GMT -->
</html>