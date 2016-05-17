<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog -Risto</title>

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
    <div class="address-bar">No.57 |Ramakrishna Road  | Colombo 06  | Srilanka</div>

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

					<div class="row">
						<div class="box">
							<div class="col-lg-12 ">
							<hr>
							<h2 class="intro-text text-center">
								<strong>Submit a Review <br/><br/> About Us</strong>
							</h2>
							<hr>
			 
								<form role="form" id="order_form">
									<div class="row">
											<div class="form-group col-lg-12 col-md-12 col-xs-12">
												<label>Name</label>
												<input type="text" class="form-control" name="cusReview_Name">
											</div>

											<div class="form-group col-lg-12 col-md-12 col-xs-12" id="previewOrder">
												<label>Review</label>
												<textarea name="review" rows="15" class="form-control">
												</textarea>
											</div>

											<div class="clearfix"></div>								
											<br/>
											<div class="row" >	
												<div class="form-group col-lg-6 col-md-6 col-xs-6" class="restaurant_button"  >
													  <input type="hidden" name="save" value="contact">
													  <button id ="submitReview_button" type="submit" class="btn btn-default btn-lg btn-group-justified" >Submit  Order</button>
														
												</div>
												<div class="form-group col-lg-6 col-md-6 col-xs-6" class="restaurant_button"  >
													 <input type="hidden" name="clear" value="reset">
														<button type="reset" class="btn btn-default restaurant_btn btn-lg btn-group-justified" id="resetReview "  >Reset</button>   
												</div>	
											</div>
									</div>
								</form>
								
							</div>
						</div>
					</div>	
					</div>	
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
