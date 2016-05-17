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
    <div class="address-bar">No.57 |Ramakrishna Road  | Colombo 06  | Srilanka   </div>

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
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
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
                                <img class="img-responsive img-full" src="img/restaurantParis1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/restaurantParis2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/restaurantParis3.jpg" alt="">
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
					
					<div id="welcome_page_buttons">
						<p>
                            <a href="#customerLogin_form" class="btn btn-default btn-lg">Customer</a>
                            <a href="#restaurantLogin_form" class="btn btn-default btn-lg">Restaurant</a>
						</p>
					</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Application 
                        <strong>for customers & restaurants</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/logo.png" alt="">
                    <hr class="visible-xs">
                    <p>'Risto' is an web & mobile based application which is designed to satisfy the needs of both restaurants & customers of the restaurants.</p>
                    <p>A revolutionary system that puts the restaurant industry at your fingertips
					   Interact with the restaurant and not move a finger.
					   See what people around you have to say about the food in the locality
					   Helps eliminate the frustration of waiting at food outlets.
					   Make our lives easy while enjoying good food
					</p>
                    
                </div>
            </div>
        </div>
		<!--Customer login form-->
		<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Customer LogIn Form</strong>
                    </h2>
                    <hr>
                 <hr class="visible-xs">
					<br>
					<div class="row">
						<div class="box">
							<div class="col-lg-12">
		
								<form role="form" id="customerLogin_form">
									<div class="row">
										<div class="form-group col-lg-12 col-md-12 col-xs-12">
											<label>Username</label>
											<input type="text"  name="cusUsernameLogin" id="cusUsername_Login" class="form-control" />

										</div>
	
					
										<div class=" form-group col-lg-12 col-md-12 col-xs-12">
											<label>Password</label>
											<input type="password" name="cusPasswordLogin" id="cusPasssword_Login"class="form-control">
										</div>
										<br/>
										<div class="clearfix"></div>
											<div class="row" >	
												<div class="form-group col-lg-6 col-md-6 col-xs-12" class="detailsSubmit" id="cusDetails_Submit" >
													  <input type="hidden" name="saveDetails" value="contact">
													  <button id ="cusDetailsSubmit_Button" type="submit" class="btn btn-default details_btn btn-lg btn-group-justified" >Submit</button>
												</div>
										
												<div class="form-group col-lg-6 col-md-6 col-xs-12" class="detailsSubmit" id="cusDetails_Reset" >
													 <input type="hidden" name="clear" value="reset">
													<button type="reset" class="btn btn-default details_btn btn-lg btn-group-justified" id="cusLogInReset_button  "  >Reset</button>   
												</div>	
											</div>
											<br/>
										<h5 class="text-center"><a href="#customerSignup_form" >Sign up with us</a></h5>
									</div>
								</form>
								
							</div>
						</div>
					</div>
					<h5 class="text-center"><a href="#bs-example-navbar-collapse-1" >Top</a></h5>
				</div>
			</div>
		</div>
		
		<!--Restaurant login form-->
		<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Restaurant LogIn Form</strong>
                    </h2>
                    <hr>
                 <hr class="visible-xs">
					<br>
					<div class="row">
						<div class="box">
							<div class="col-lg-12">
		
								<form role="form" id="restaurantLogin_form">
									<div class="row">
										<div class="form-group col-lg-12 col-md-12 col-xs-12">
											<label>Username</label>
											<input type="text"  name="resUsernameLogin" id="resUsername_Login" class="form-control" />

										</div>
	
					
										<div class=" form-group col-lg-12 col-md-12 col-xs-12">
											<label>Password</label>
											<input type="password" name="resPasswordLogin" id="resPasssword_Login"class="form-control">
										</div>
										<br/>
										<div class="clearfix"></div>
											<div class="row" >	
												<div class="form-group col-lg-6 col-md-6 col-xs-12" class="detailsSubmit" id="resDetails_Submit" >
													  <input type="hidden" name="saveDetails" value="contact">
													  <button id ="resDetailsSubmit_Button" type="submit" class="btn btn-default details_btn btn-lg btn-group-justified" >Submit</button>
												</div>
										
												<div class="form-group col-lg-6 col-md-6 col-xs-12" class="detailsSubmit" id="resDetails_Reset" >
													 <input type="hidden" name="clear" value="reset">
													<button type="reset" class="btn btn-default details_btn btn-lg btn-group-justified" id="resLogInReset_button  "  >Reset</button>   
												</div>	
											</div>
											<br/>
										<h5 class="text-center"><a href="#restaurantSignup_form" >Sign up with us</a></h5>
									</div>
								</form>
								
							</div>
						</div>
					</div>
					<h5 class="text-center"><a href="#bs-example-navbar-collapse-1" >Top</a></h5>
				</div>
			</div>
		</div>	

		<!--Customer signup form-->
		<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Customer SignUp Form</strong>
                    </h2>
                    <hr>
                 <hr class="visible-xs">
					<br>
					<div class="row">
						<div class="box">
							<div class="col-lg-12">
		
								<form role="form" id="customerSignup_form">
									<div class="row">
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label>Name</label>
											<input type="text"  name="cusName" id="" class="form-control" />

										</div>
	
					
										<div class=" form-group col-lg-6 col-md-6 col-xs-12">
											<label>Email</label>
											<input type="text" name="cusEmail" id="" class="form-control">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label>Address</label>
											<textarea class="form-control" rows="8" name="cusAddress" ></textarea>
										</div>
										
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label>Username</label>
											<input type="text"  name="cusUsername" id="" class="form-control" />

										</div>
					
										<div class=" form-group col-lg-6 col-md-6  col-xs-12">
											<label>Password</label>
											<input type="password" name="cusPassword" id="" class="form-control">
										</div>										
					
										<div class=" form-group col-lg-6 col-md-6 col-xs-12">
											<label>Confirm Password</label>
											<input type="password" name="cusConfirmPassword" id="" class="form-control">
										</div>
										<br/>
										<div class="clearfix"></div>
										<div class="row" >	
											<div class="form-group col-lg-6 col-md-6 col-xs-12" class="detailsSubmit" id="cusSignUp_Submit" >
												<input type="hidden" name="save" value="contact">
												 <button id ="cusDetailsSubmit_Button" type="submit" class="btn btn-default details_btn btn-lg btn-group-justified" >Submit</button>
											</div>
										
											<div class="form-group col-lg-6 col-md-6 col-xs-12" class="detailsSubmit" id="cusDetails_Reset" >
												<input type="hidden" name="clear" value="reset">
												<button type="reset" class="btn btn-default details_btn btn-lg btn-group-justified" id="cusLDetailsInReset_button  "  >Reset</button>   
											</div>	
										</div>
										<br/>
									</div>
								</form>
								
							</div>
						</div>
					</div>
					<h5 class="text-center"><a href="#bs-example-navbar-collapse-1" >Top</a></h5>
				</div>
			</div>
		</div>	

		<!--Restaurant signup form-->
		<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Restaurant SignUp Form</strong>
                    </h2>
                    <hr>
                 <hr class="visible-xs">
					<br>
					<div class="row">
						<div class="box">
							<div class="col-lg-12">
		
								<form role="form" id="restaurantSignup_form">
									<div class="row">
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label>Restaurant Name</label>
											<input type="text"  name="resName" id="" class="form-control" />

										</div>
	
					
										<div class=" form-group col-lg-6 col-md-6 col-xs-12">
											<label>Email</label>
											<input type="text" name="resEmail" id="" class="form-control">
										</div>
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label>Address</label>
											<textarea class="form-control" rows="9" name="resAddress" ></textarea>
										</div>
										
										<div class="form-group col-lg-6 col-md-6 col-xs-12">
											<label>Username</label>
											<input type="text"  name="resUsername" id="" class="form-control" />

										</div>
					
										<div class=" form-group col-lg-6 col-md-6  col-xs-12">
											<label>Password</label>
											<input type="password" name="resPassword" id="" class="form-control">
										</div>										
					
										<div class=" form-group col-lg-6 col-md-6  col-xs-12">
											<label>Confirm Password</label>
											<input type="password" name="resConfirmPassword" id="" class="form-control">
										</div>
										<br/>
										<div class="clearfix"></div>
										<div class="row" >	
											<div class="form-group col-lg-6 col-md-6 col-xs-12" class="detailsSubmit" id="resSignUpDetails_Submit" >
												<input type="hidden" name="saveDetails" value="contact">
												 <button id ="resSignUpSubmit_Button" type="submit" class="btn btn-default details_btn btn-lg btn-group-justified" >Submit</button>
											</div>
										
											<div class="form-group col-lg-6 col-md-6 col-xs-12" class="detailsSubmit" id="resSignUpDetails_Reset" >
												<input type="hidden" name="clear" value="reset">
												<button type="reset" class="btn btn-default details_btn btn-lg btn-group-justified" id="resSignUpReset_button  "  >Reset</button>   
											</div>	
										</div>
										<br/>
									</div>
								</form>
								
							</div>
						</div>
					</div>
					<h5 class="text-center"><a href="#bs-example-navbar-collapse-1" >Top</a></h5>
				</div>
			</div>
		</div>				
    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Risto 2015</p>
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
	

	

</body>

</html>
