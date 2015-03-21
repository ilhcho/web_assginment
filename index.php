<?php
require_once("header.php");
?>

<!-- Main Frames -->
<div class="main_frame">
	<!-- Top Navigation -->
	<nav class="top_navi">
		<div class="container">
			<div class="logo">
			<a href="#"><img src="img/logo/NZ_logo.png" alt="New Zealnd Flag"></a>
			</div>
			<div class="navigation">				
				<div class="dropdown">
					<li class="menu_nav">
		  			<a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
		    		Regions
		    		<b class="caret"></b>
		  			</a>
		 			</li>
					  	<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
						    <li><a tabindex="-1" href="central_otago.php">Central Otago</a></li>
						    <li><a tabindex="-1" href="#">Dunedin</a></li>
						    <li><a tabindex="-1" href="#">North Otago</a></li>
						    <li><a tabindex="-1" href="#">Queenstown</a></li>
						    <li><a tabindex="-1" href="#">The Catlins</a></li>
					  	</ul>	
				</div>
				
					<li class="menu_nav" id="menu_nav"><a href="#">Information</a></li>
			</div><!-- End of navigation -->
		</div><!-- End of container -->
	</nav>

	<!-- Main content - map -->
	<div class="map">		
		<img id="map_img" src="img/map/south5.png" alt="south island map">
		<img id="nz_map" src="img/map/nz_map3.png" alt="New Zealand Map">
		<div class="description">
		<br />
		<br />
		<br />
		<br />
			<h1>Otago</h1>
			<br />
			<br />
			<table>
				<tr>
					<td>Country:</td>
					<td> New Zealand</td>
				</tr>
				<tr>
					<td>Location:</td>
					<td>South Island</td>
				</tr>
				<tr>
					<td>Area:</td>
					<td>31,241 km2(12% of NZ)</td>
				</tr>
				<tr>
					<td>Population:</td>
					<td>211,700(2014 estimate)</td>
				</tr>
			</table>
			<br />
			
				<img src="img/climate_real.png" alt="climate chart">
			
		</div>
	</div>
</div>	
	<div class="middle">
		<div class="middle_container">
			<div class="middle_box">
			<br />
			<br />
			<br />

				<div class="box">
					<img src="img/icons/accomodation.png" alt="accomodation_icon" />
					<h3>Accomodation</h3>
				</div>
				<div class="box" id="box_activity">
					<img src="img/icons/activity.png" alt="activity_icon" />
					
					<h3>Activity</h3>
				</div>
				<div class="box">
					<img src="img/icons/mountain.png" alt="mountain_icon" />
					<h3>Attraction</h3>
				</div>
				<div class="box">
					<img src="img/icons/restaurant.png" alt="restaurant_icon" />
					<h3>Restaurant</h3>
				</div>
			</div>

		</div>
	</div>

<!-- Image Gallery -->
<?php
require_once("img_gallery.php");
?>




<!-- Footer -->
<?php
require_once("footer.php");
?>
