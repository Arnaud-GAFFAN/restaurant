<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from davur.dexignzone.com/frontend/front-home.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 11:33:45 GMT -->
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
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="vendor/swiper/css/swiper-bundle.css">
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
    <div id="main-wrapper" class="overflow-unset">


        <?php
        require('./components/header.php');
        ?>

        <?php
        require './components/sidebar.php';
        ?>
        <div class="menu-close"></div>
		<div class="menu-close"></div>
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-wrapper">
            <!-- row -->
			<div class="listcontent-area">
				<aside class="cart-area  dz-scroll" id="cart_area">
					<div class="" >
						<div class="h-100" id="home-counter">
							<div class="card">
								<div class="card-body">
									<img src="images/counter.jpg" class="img-fluid mb-5" alt="">
									<h3 class="title mb-4">Your Order in Progress Check Order</h3>
									<p class="mb-sm-5 mb-3">Click on any item or Add Order Button to create order</p>
									<a href="javascript:void(0);" id="add-order" class="btn btn-warning btn-rounded me-3">Add Order</a>
									<a href="front-orders_status.php" class="btn btn-warning light btn-rounded">Order Status</a>
								</div>
							</div>
						</div>
						<div class="h-100" id="add-order-content">
							<div class="card rounded-0">
								<div class="card-body p-0">
									<div class="table-responsive">
										<table class="table text-black">
											<thead>
												<tr>
													<th>ITEM</th>
													<th>PRICE</th>
													<th>QNT.</th>
													<th>TOTAL($)</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><span class="font-w500">Farm Ville Pizza</span></td>
													<td>12.00</td>
													<td>
														<div class="quantity btn-quantity style-1">
															<input id="demo_vertical2" type="text" value="1" name="demo_vertical2"/>
														</div>
													</td>
													<td>12.00</td>
												</tr>
												<tr>
													<td><span class="font-w500">Cheese Burst Sandwich</span></td>
													<td>8.00</td>
													<td>
														<div class="quantity btn-quantity style-1">
															<input id="demo_vertical21" type="text" value="3" name="demo_vertical21"/>
														</div>
													</td>
													<td>8.00</td>
												</tr>
												<tr>
													<td><span class="font-w500">White Source Pasta</span></td>
													<td>10.00</td>
													<td>
														<div class="quantity btn-quantity style-1">
															<input id="demo_vertical22" type="text" value="2" name="demo_vertical22"/>
														</div>
													</td>
													<td>10.00</td>
												</tr>
												<tr>
													<td><span class="font-w500">Veg Cheese Burger</span></td>
													<td>6.50</td>
													<td>
														<div class="quantity btn-quantity style-1">
															<input id="demo_vertical23" type="text" value="1" name="demo_vertical23"/>
														</div>
													</td>
													<td>6.50</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<div class="card-order-footer">
								<div class="amount-details">
									<h5 class="d-flex text-right mb-3">
										<span class="text">Sub total </span>
										<span class="me-0 ms-auto">43.00</span>
									</h5>
									<h5 class="d-flex text-right mb-3">
										<span class="text">Tax</span>
										<span class="me-0 ms-auto"> 3.00</span>
									</h5>
									<h5 class="d-flex text-right mb-3">
										<span class="text">Other Charge</span>
										<span class="me-0 ms-auto">0.00</span>
									</h5>
								</div>
								<div class="amount-payble">
									<h5 class="d-flex text-right mb-0">
										<span class="text">Amount to Pay</span>
										<span class="me-0 ms-auto">46.00</span>
									</h5>
								</div>

								<div class="btn_box">
									<div class="row no-gutter mx-0">
										<a href="javascript:void(0);" id="home-counter-tab" class="btn btn-danger btn-block col-6 m-0 rounded-0">Cancel</a>
										<a href="javascript:void(0);" id="place-order-tab" class="btn btn-primary btn-block col-6 m-0 rounded-0">Place Order</a>
									</div>
								</div>
							</div>
						</div>
						<div class="h-100" id="place-order" >
							<div class="card rounded-0">
								<div class="card-body">
									<form>
										<h4 class="mb-4">Amount to Pay <strong> $46.00 </strong></h4>
										<div class="form-group mb-4 pb-2">
											<label class="font-w600">Select Payment Method</label>
											<div class="row no-gutters align-items-center">
												<div class="col-6 col-sm-6 col-md-6 col-lg-4">
													<div class="custom-control custom-radio">
														<input checked="" type="radio" id="cash" name="PaymentMethod" class="custom-control-input">
														<label class="custom-control-label" for="cash"><span class="ms-2">Cash</span></label>
													</div>
												</div>
												<div class="col-6 col-sm-6 col-md-6 col-lg-4">
													<div class="custom-control custom-radio">
														<input type="radio" id="card" name="PaymentMethod" class="custom-control-input">
														<label class="custom-control-label" for="card"><span class="ms-2">Card</span></label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group mb-4 pb-2">
											<label class="font-w600">Order type</label>
											<div class="row no-gutters align-items-center">
												<div class="col-6 col-sm-6 col-md-6 col-lg-4">
													<div class="custom-control custom-radio">
														<input checked="" type="radio" id="takeaway" name="OrderType" class="custom-control-input">
														<label class="custom-control-label" for="takeaway"><span class="ms-2">Takeaway</span></label>
													</div>
												</div>
												<div class="col-6 col-sm-6 col-md-6 col-lg-4">
													<div class="custom-control custom-radio">
														<input type="radio" id="dine-in" name="OrderType" class="custom-control-input">
														<label class="custom-control-label" for="dine-in"><span class="ms-2">Dine-in</span></label>
													</div>
												</div>

												<div class="col-12 col-sm-12 col-md-6 col-lg-4">
													<div class="select_box style-1 w-100 d-flex">
														<select class="default-select">
															<option>Select Table</option>
															<option>Table No 01</option>
															<option>Table No 02</option>
															<option>Table No 03</option>
															<option>Table No 04</option>
															<option>Table No 05</option>
															<option>Table No 06</option>
															<option>Table No 07</option>
															<option>Table No 08</option>
															<option>Table No 09</option>
															<option>Table No 10</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="font-w600">Customer Info (Optional)</label>
											<input type="text" class="form-control solid" placeholder="Enter Full Name">
										</div>
										<div class="form-group">
											<input type="text" class="form-control solid" placeholder="Enter Phone Number">
										</div>
									</form>
								</div>
							</div>
							<div class="card-order-footer">
								<div class="btn_box">
									<div class="row no-gutter mx-0">
										<a href="javascript:void(0);" id="place-order-cancel" class="btn btn-danger btn-block col-6 m-0 rounded-0">Cancel</a>
										<a href="front-home.html" class="btn btn-primary btn-block col-6 m-0 rounded-0">Submit</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</aside>
                <div class="row">
					<div class="col-xl-12">
						<div class="owl-carousel item-carousel">
							<div class="items">
								<div class="item-box">
									<img src="images/food-icon/1.png" alt="">
									<h5 class="title mb-0">soft drink</h5>
								</div>
							</div>
							<div class="items">
								<div class="item-box active">
									<img src="images/food-icon/2.png" alt="">
									<h5 class="title mb-0">fast food</h5>
								</div>
							</div>
							<div class="items">
								<div class="item-box">
									<img src="images/food-icon/3.png" alt="">
									<h5 class="title mb-0">pastry</h5>
								</div>
							</div>
							<div class="items">
								<div class="item-box">
									<img src="images/food-icon/4.png" alt="">
									<h5 class="title mb-0">burger</h5>
								</div>
							</div>
							<div class="items">
								<div class="item-box">
									<img src="images/food-icon/5.png" alt="">
									<h5 class="title mb-0">chinese</h5>
								</div>
							</div>
							<div class="items">
								<div class="item-box">
									<img src="images/food-icon/6.png" alt="">
									<h5 class="title mb-0">vegetable</h5>
								</div>
							</div>
							<div class="items">
								<div class="item-box">
									<img src="images/food-icon/7.png" alt="">
									<h5 class="title mb-0">watermelon</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="input-group search-area style-1 mb-4">
							<input type="text" class="form-control" placeholder="Search here...">
							<div class="input-group-append">
								<button class=" btn btn-primary btn-rounded">Search<i class="flaticon-381-search-2 scale3 ms-3"></i></button>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">
								<div class="card item-card">
									<div class="card-body p-0">
										<img src="images/dish/1.jpg" class="img-fluid" alt="">
										<div class="info">
											<h5 class="name">Cheese Burger</h5>
											<h6 class="mb-0 price"><img src="images/veg.png" alt="">$6.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">
								<div class="card item-card">
									<div class="card-body p-0">
										<img src="images/dish/2.jpg" class="img-fluid" alt="">
										<div class="info">
											<h5 class="name">French fries</h5>
											<h6 class="mb-0 price"><img src="images/veg.png" alt="">$6.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">
								<div class="card item-card">
									<div class="card-body p-0">
										<img src="images/dish/3.jpg" class="img-fluid" alt="">
										<div class="info">
											<h5 class="name">Veg Pizza</h5>
											<h6 class="mb-0 price"><img src="images/veg.png" alt="">$6.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">
								<div class="card item-card">
									<div class="card-body p-0">
										<img src="images/dish/4.jpg" class="img-fluid" alt="">
										<div class="info">
											<h5 class="name">Cheese Pizza</h5>
											<h6 class="mb-0 price"><img src="images/veg.png" alt="">$6.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">
								<div class="card item-card">
									<div class="card-body p-0">
										<img src="images/dish/5.jpg" class="img-fluid" alt="">
										<div class="info">
											<h5 class="name">Veg Sandwich</h5>
											<h6 class="mb-0 price"><img src="images/veg.png" alt="">$6.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">
								<div class="card item-card">
									<div class="card-body p-0">
										<img src="images/dish/6.jpg" class="img-fluid" alt="">
										<div class="info">
											<h5 class="name">French fries</h5>
											<h6 class="mb-0 price"><img src="images/veg.png" alt="">$6.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">
								<div class="card item-card">
									<div class="card-body p-0">
										<img src="images/dish/7.jpg" class="img-fluid" alt="">
										<div class="info">
											<h5 class="name">French fries</h5>
											<h6 class="mb-0 price"><img src="images/veg.png" alt="">$6.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">
								<div class="card item-card">
									<div class="card-body p-0">
										<img src="images/dish/8.jpg" class="img-fluid" alt="">
										<div class="info">
											<h5 class="name">Veg Sandwich</h5>
											<h6 class="mb-0 price"><img src="images/veg.png" alt="">$6.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">
								<div class="card item-card">
									<div class="card-body p-0">
										<img src="images/dish/1.jpg" class="img-fluid" alt="">
										<div class="info">
											<h5 class="name">French fries</h5>
											<h6 class="mb-0 price"><img src="images/veg.png" alt="">$6.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">
								<div class="card item-card">
									<div class="card-body p-0">
										<img src="images/dish/2.jpg" class="img-fluid" alt="">
										<div class="info">
											<h5 class="name">French fries</h5>
											<h6 class="mb-0 price"><img src="images/veg.png" alt="">$6.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">
								<div class="card item-card">
									<div class="card-body p-0">
										<img src="images/dish/3.jpg" class="img-fluid" alt="">
										<div class="info">
											<h5 class="name">Veg Sandwich</h5>
											<h6 class="mb-0 price"><img src="images/veg.png" alt="">$6.00</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-4 col-lg-6 col-md-12 col-sm-6">
								<div class="card item-card">
									<div class="card-body p-0">
										<img src="images/dish/4.jpg" class="img-fluid" alt="">
										<div class="info">
											<h5 class="name">Veg Sandwich</h5>
											<h6 class="mb-0 price"><img src="images/veg.png" alt="">$6.00</h6>
										</div>
									</div>
								</div>
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
        <!-- <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
            </div>
        </div> -->
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
	
	<!-- Counter Up -->
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>	
	
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
	<script src="vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

    <script src="js/custom.js"></script>
	<script src="js/deznav-init.js"></script>
	<script>

	function ItemsCarousel()
	{

		/*  testimonial one function by = owl.carousel.js */
		jQuery('.item-carousel').owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			center:true,
			autoWidth:true,
			autoplay:true,
			dots: false,
			items:4,
			navText: ['', ''],
			breackpoint:[


			]

		})
	}

	jQuery(window).on('load',function(){
		setTimeout(function(){
			ItemsCarousel();
		}, 1000);
	});

	function handleTabs(){
		$('#add-order-content,#place-order').css("display","none");	
		$('#add-order').on('click',function(){
			$('#add-order-content').css("display","block");	
			$('#home-counter').css("display","none");	
		})
		$('#place-order-tab').on('click',function(){
			$('#place-order').css("display","block");	
			$('#add-order-content').css("display","none");	
		})
		$('#place-order-cancel').on('click',function(){
			$('#place-order').css("display","none");	
			$('#add-order-content').css("display","block");	
		})
		$('#home-counter-tab').on('click',function(){
			$('#home-counter').css("display","block");	
			$('#add-order-content').css("display","none");	
		})
	}
	handleTabs();

	</script>
	
</body>

<!-- Mirrored from davur.dexignzone.com/frontend/front-home.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Mar 2023 11:34:58 GMT -->
</html>