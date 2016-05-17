<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link href="assets/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="assets/css/jquery-ui-1.10.2.custom.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="assets/css/stream.css" media="screen" rel="stylesheet" type="text/css">
    <script src="assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui-1.10.2.custom.min.js" type="text/javascript"></script>
    <script src="../dist/filter.js" type="text/javascript"></script>
    <script src="data/movies.js" type="text/javascript"></script>
    <script src="pagination.js" type="text/javascript"></script>
	
	<!--Date picker-->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css">
  </head>
  <body >
     <h1 id="heading">Match <br/>With Your Desire</h1>
    <div class="container">
      <h1 class="title"></h1>
      <div class="sidebar col-md-3">
        <div>
          <h4 class='col-md-6'>Restaurants (<span id="total_resorts">0</span>)</h4>
        <!--  <div class="col-md-6 progress">
            <div class="progress-bar" id="stream_progress" style="width: 0%;">0%</div>
          </div>-->
        </div>
        <div id="searchbox">
          <label class="sr-only" for="name_searchbox">Search</label>
          <input type="text" class="form-control" id="name_searchbox" placeholder="Restaurant name/ Nearest town &hellip;" autocomplete="off">
          <span class="glyphicon glyphicon-search search-icon"></span>
        </div>
		<!--<div id="searchbox">
          <label class="sr-only" for="town_searchbox">Search</label>
          <input type="text" class="form-control" id="town_searchbox" placeholder="Search by nearest town;" autocomplete="off">
          <span class="glyphicon glyphicon-search search-icon"></span>
        </div>-->
        <br>
        <div class="well">
            <fieldset id="rating_criteria">
                <legend>Rating&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-star"></i></legend> <span id="rating_range_label" class="slider-label">1 - 5</span>
                <div id="rating_slider" class="slider">
                </div>
                <input type="hidden" id="rating_filter" value="1-5">
				<h4 id="rating_labels">
					1 = "Unsatisfied"<br>
					2 = "Mildly Satisfied"<br>
					3 = "Average Satisfied"<br>
					4 = "Satisfied"<br>
					5 = "Excellent"<br>
					
				</h4>
            </fieldset>
        </div>
        <div class="well">
            <fieldset id="min_price_criteria">
                <legend>Min. Price</legend> <span id="price_range_label1" class="slider-label">Rs. 100 - Rs. 5000</span>
                <div id="price_slider1" class="slider">
                </div>
                <input type="hidden" id="price_filter1" value="100-1500">
            </fieldset>
        </div>
		
		<div class="well">
            <fieldset id="max_price_criteria">
                <legend>Max. Price</legend> <span id="price_range_label2" class="slider-label">$ 100 - $ 5000</span>
                <div id="price_slider2" class="slider">
                </div>
                <input type="hidden" id="price_filter2" value="100-5000">
            </fieldset>
        </div>
		
		
	
		<!--Services-->
        <div class="well">
            <fieldset id="service_criteria">
                <legend>Services</legend>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="All" id="all_service">
                    <span>All</span>
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="Bar">
                    <span>Bar</span>
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="Credit Card">
                    <span> Credit Card</span>
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="Free Wifi">
                    <span>Free Wifi</span> 
                   </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="Take Away">
                    <span>Take Away</span>
                  </label>
                </div>
                <div class="checkbox">
                    <label>
                    <input type="checkbox" value="Dine In">
                    <span>Dine In</span>
                  </label>
                </div>
                <div class="checkbox">
                    <label>
                    <input type="checkbox" value="Delivery">
                    <span>Delivery </span>
                  </label>
                </div>
                <div class="checkbox">
                    <label>
                    <input type="checkbox" value="Buffet">
                    <span>Buffet</span>
                  </label>
                </div>
                <div class="checkbox">
                    <label>
                    <input type="checkbox" value="Outdoor Dining">
                    <span> Outdoor Dining </span>
                  </label>
                </div>
				<div class="checkbox">
                    <label>
                    <input type="checkbox" value="Live Perfomances">
                    <span>Live Perfomances</span>
                  </label>
                </div>
				<div class="checkbox">
                    <label>
                    <input type="checkbox" value="Vegetarian">
                    <span>Vegetarian</span>
                  </label>
                </div>
				<div class="checkbox">
                    <label>
                    <input type="checkbox" value="Air Conditioned">
                    <span>Air Conditioned</span>
                  </label>
                </div>
				<div class="checkbox">
                    <label>
                    <input type="checkbox" value="Parking Area">
                    <span>Parking Area</span>
                  </label>
                </div>
				<div class="checkbox">
                    <label>
                    <input type="checkbox" value="Family Friendly">
                    <span>Family Friendly</span>
                  </label>
                </div>		
				<div class="checkbox">
                    <label>
                    <input type="checkbox" value="Reservation">
                    <span>Reservation</span>
                  </label>
                </div>
				<div class="checkbox">
                    <label>
                    <input type="checkbox" value="Online Order">
                    <span>Online Order</span>
                  </label>
                </div>				
            </fieldset>
        </div>
		
		<!--Provinces-->
		
		<div class="well">
            <fieldset id="province_criteria">
                <legend>Provinces</legend>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="All" id="all_province">
                    <span>All</span>
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="Eastern">
                    <span>Eastern</span>
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="Uva">
                    <span>Uva</span>
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="Western">
                    <span>Western</span> 
                   </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" value="Southern">
                    <span> Southern </span>
                  </label>
                </div>
                <div class="checkbox">
                    <label>
                    <input type="checkbox" value="Northern">
                    <span> Northern </span>
                  </label>
                </div>

                <div class="checkbox">
                    <label>
                    <input type="checkbox" value="Central">
                    <span>Central </span>
                  </label>
                </div>
                <div class="checkbox">
                    <label>
                    <input type="checkbox" value="Sabaragamuwa">
                    <span> Sabaragamuwa </span>
                  </label>
                </div> 
				<div class="checkbox">
                    <label>
                    <input type="checkbox" value="North Western">
                    <span>North Western </span>
                  </label>
                </div> 
				<div class="checkbox">
                    <label>
                    <input type="checkbox" value="North Central">
                    <span> North Central </span>
                  </label>
                </div> 
            </fieldset>
        </div>
		
    </div>

<!-- /.col-md-3 -->
    <div class="col-md-9">
      <div class="row">
        <div class="content col-md-12">
          <div id="pagination" class="movies-pagination col-md-9"></div>
		  <div id="home_link">
		  
		  </div>
          <div class="col-md-3 content">

            Per Page: <span id="per_page" class="content"></span><br>
					  <a href="file:///C:/Users/Erandi/Desktop/Correct%20Version%20of%20Akshina/Risto/index.html">Back </a>
          </div>
        </div>
      </div>

      <div class="movies row" id="movies"> </div>
    </div>
<!-- /.col-md-9 -->
</div>
<!-- /.container -->

<!--Resort View Template-->
      <script id="movie-template" type="text/html">
        <div class="col-md-4 movie">
			<div class="thumbnail">
				
				  <div class="caption">
					<h4><a  href="<%= url %>" target="_parent"><%= _fid %>. <%= name %></a></h4>
					<div class="short_description">
					  <%= short_description %>
					</div>
	

					<div class="detail">
						<dl>
						   <dd><img class="img-responsive" src= "<%= picture %> " alt="<%= alt %>" width= "230" height= "200"> </dd>
						   <dd>Address: <br><%= location %> </dd><br>
							<dd>Open hours:<br><%= restaurant_open_time %> am - <%= restaurant_close_time %> pm</dd><br>
							<dd>Lunch hours:<br> <%= lunch_open_time %> pm - <%= lunch_close_time %> pm</dd><br>
							<dd>Dinner hours:<br> <%= dinner_open_time %> pm - <%= restaurant_close_time %> pm</dd><br>
						</dl>
					</div>
				  </div>
			</div>
      </div>
      </script>
	  
	<!--Destination view template-->
      <script id="genre_template" type="text/html">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="<%= destination %>"> <%= destination %>
          </label>
        </div>
      </script>
	  
	 <!--Activities view template-->
	  <script id="activities_template" type="text/html">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="<%= activities %>"> <%= activities %>
          </label>
        </div>
      </script>
	  
	  <!--Calendar-->
	  <script>
		$(function() {
		$( "#datepicker" ).datepicker();
		});
	  </script>
    </body>
  </html>
