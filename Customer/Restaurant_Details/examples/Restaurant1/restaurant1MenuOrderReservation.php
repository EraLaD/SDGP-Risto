<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Risto</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">Risto</div>
    <div class="address-bar">Team LESA</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Risto</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="restaurant1Home.php">Home</a>
                    </li>

                    <li>
                        <a href="restaurant1MenuOrderReservation.php">Menu & Order/ Reservation/<br>Payement</a>
                    </li>
                    <li>
                        <a href="restaurant1_Reviews.php">Reviews</a>
                    </li>
					
					  <li>
                        <a href="restaurant1Contact.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
		<div class="container">

			<div class="row">
				<div class="box">
					<div class="col-lg-12 text-center">
						<div id="carousel-example-generic" class="carousel slide">
							<!-- Indicators -->
							<ol class="carousel-indicators hidden-xs">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>
								<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">
								<div class="item active">
									<img class="img-responsive img-full" src="img/restaurant1slide1.jpg" alt="">
								</div>
								<div class="item">
									<img class="img-responsive img-full" src="img/restaurant1slide2.jpg" alt="">
								</div>
								<div class="item">
									<img class="img-responsive img-full" src="img/restaurant1slide3.jpg" alt="">
								</div>
							</div>

							<!-- Controls -->
							<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
								<span class="icon-prev"></span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
								<span class="icon-next"></span>
							</a>
						</div>
						
						<h2 class="brand-before">
							Welcome to
						</h2>
						<h1 class="brand-name">Risto</h1>
						<hr class="tagline-divider">
						<h2>
							<small>By
								<strong>Team LESA</strong>
							</small>
						</h2>
						
						
						</div>
					</div>
				</div>
        
            <div class="row">
				<div class="box">
					<div class="col-lg-12  text-center" >
							<hr>
							<h2 class="intro-text text-center">
								<strong>Menus</strong>
							</h2>
							<hr>						
						<div id="wrapper">
						<div class="row">
							
							<h2 class="intro-text text-center">
								<strong>Indian</strong>
							</h2>
							
							  <div class="col-lg-12 col-md-12 col-xs-12" id="tabs">
								<ul >
										<li><a href="#tabs-1" title="">Appertizers/Starters</a></li>
										<li><a href="#tabs-2" title="">Soups & Stews</a></li>
										<li><a href="#tabs-3" title="">Rice</a></li>
										<li><a href="#tabs-3" title="">Noodles</a></li>
									</ul>
									<div id="tabs_container">
										<div id="tabs-1">
											<ol>
												<li><input type="checkbox" value="Crackers" name="Crackers">Crackers</li><br/>
												<li><input type="checkbox" value="Fries">Fries</li><br/>
												<li><input type="checkbox" value="Chicken Fries">Chicken Fries</li><br/>
				
											<!--tab content-->
											</ol>
										</div>
										<div id="tabs-2">
											   <!--tab content-->
											   
										</div>
										<div id="tabs-3">
												<!--tab content-->
												
										</div>
									</div><!--End tabs container--> 
							  </div><!--End tabs-->		 
						  </div>
						<div class="row" >	
							<div class="form-group col-lg-6 col-md-6 col-xs-6" class="restaurant_button"  >
								<input type="hidden" name="save" value="contact">
								<a href="#order_form" class="btn btn-default btn-lg btn-group-justified" id ="order_button">Order</a>
								
							</div>	
							<div class="form-group col-lg-6 col-md-6 col-xs-6" class="restaurant_button"  >
								<input type="hidden" name="reset" value="contact">
								<button id ="resetOrder_button" type="reset" class="btn btn-default btn-lg btn-group-justified" >Reset</button>
														
							</div>								
						</div>
					</div>
				</div>
			</div>			
        
					<div class="row">
						<div class="box">
							<div class="col-lg-12 ">
							<hr>
							<h2 class="intro-text text-center">
								<strong>Fill the Order Details</strong>
							</h2>
							<hr>
			 
								<form role="form" id="order_form">
									<div class="row">
											<div class="form-group col-lg-6 col-md-6 col-xs-12">
												<label>Name</label>
												<input type="text" class="form-control" name="cus_Name">
											</div>
											
	
											<div class="form-group col-lg-6 col-md-6 col-xs-12">
												<label>Phone Number</label>
												<input type="tel" class="form-control" name="cus_PhoneNo">
											</div>
											
											<div class="form-group col-lg-12 col-md-12 col-xs-12">
												<label>Delivery Address</label><br/>
												
												<div class="form-group col-lg-6 col-md-6 col-xs-12">
													<label>Number</label>
													<input type="text" class="form-control" name="cusAddress_Number">
											<!--	<textarea class="form-control" rows="5"></textarea>-->
												</div>
												<div class="form-group col-lg-6 col-md-6 col-xs-12">
													<label>Street </label>
													<input type="text" class="form-control" name="cusAddress_Street">
											
												</div>	
												<div class="form-group col-lg-6 col-md-6 col-xs-12">
													<label>City </label>
													<input type="text" class="form-control" name="cusAddress_City">
											
												</div>	
												
												<div class="form-group col-lg-6 col-md-6 col-xs-12">
													<label>Nearest Town</label>
													<input type="text" class="form-control" name="cusAddress_NearestTown">
											
												</div>										
											</div>

											<div class="form-group col-lg-6 col-md-6 col-xs-12" id="previewOrder">
												<label>Preview<br> Order</label>
												<textarea name="orderedItems" rows="15" class="form-control">
												</textarea>
											</div>

											<div class="clearfix"></div>								
											<br/>
											<div class="row" >	
												<div class="form-group col-lg-6 col-md-6 col-xs-6" class="restaurant_button"  >
													  <input type="hidden" name="save" value="contact">
													  <button id ="submitOrder_button" type="submit" class="btn btn-default btn-lg btn-group-justified" >Submit  Order</button>
														
												</div>
												<div class="form-group col-lg-6 col-md-6 col-xs-6" class="restaurant_button"  >
													 <input type="hidden" name="clear" value="reset">
														<button type="reset" class="btn btn-default restaurant_btn btn-lg btn-group-justified" id="resetOrderDetails "  >Reset</button>   
												</div>	
											</div>
									</div>
								</form>
								
							</div>
						</div>
					</div>	
					<div class="row">
						<div class="box">
							<div class="col-lg-12 ">
							<hr>
							<h2 class="intro-text text-center">
								<strong>Make Reservation</strong>
							</h2>
							<hr>
			 
								<form role="form" id="order_form">
									<div class="row">
											<div class="form-group col-lg-6 col-md-6 col-xs-12">
												<label>Name</label>
												<input type="text" class="form-control" name="cus_Name">
											</div>
											
	
											<div class="form-group col-lg-6 col-md-6 col-xs-12">
												<label>Phone Number</label>
												<input type="tel" class="form-control" name="cus_PhoneNo">
											</div>
											
											<div class="form-group col-lg-4 col-md-4 col-xs-12">
												<label>Table No.</label>
												<input type="text" class="form-control" name="table_no">
											</div>
											<div class="form-group col-lg-4 col-md-4 col-xs-12">
												<label>No. Of Guests</label>
												<input type="text" class="form-control" name="noOfGuests_Name">
											</div>	
											<div class="form-group col-lg-4 col-md-4 col-xs-12">
												<label>Time</label>
												<input type="text" class="form-control" name="reservation_Time">
											</div>											

											<div class="clearfix"></div>								
											<br/>
											<div class="row" >	
												<div class="form-group col-lg-6 col-md-6 col-xs-6" class="restaurant_button"  >
													  <input type="hidden" name="save" value="contact">
													  <button id ="submitReservation_button" type="submit" class="btn btn-default btn-lg btn-group-justified" >Submit  Reservation</button>
														
												</div>
												<div class="form-group col-lg-6 col-md-6 col-xs-6" class="restaurant_button"  >
													 <input type="hidden" name="clear" value="reset">
														<button type="reset" class="btn btn-default restaurant_btn btn-lg btn-group-justified" id="resetReservationDetails "  >Reset</button>   
												</div>	
											</div>
									</div>
								</form>
								
							</div>
						</div>
					</div>			
					
		</div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Risto 2016</p>
					<p>Team LESA</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

	<!--tabolous-->
	<script type="text/javascript" src="js/tabulous.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<script>
		$(document).ready(function ($) {

		$('#tabs').tabulous();  

	});
	</script>
</body>

</html>
