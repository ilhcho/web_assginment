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
		    		Interest
		    		<b class="caret"></b>
		  			</a>
		 			</li>
					  	<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
						    <li><a tabindex="-1" href="#">Central Otago</a></li>
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
			<ul>
				<li>Country: New Zealand</li>
				<li>Climate:</li>
				<li>Location:</li>				
				<li>Population:
					<ul>
						<li>Region 211,700</li>
						<li>Density	6.8/km2 (18/sq mi)</li>
					</ul>					
				</li>
				<li>Event:Weather conditions vary enormously
				 across Otago, but can be broken into two 
				 broad types: the coastal climate of the c
				 oastal regions and the more continental climate of the interior.
				</li>
			</ul>
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

<div class="img_gallery">
	<div id="wrap">
		<div id="window"><img src="img/gallery/central/big_central-otago.jpg" alt="" /></div>
			<ul id="nav_gallery">
				<!-- Central Otago -->
				<li><a href="img/gallery/central/big_central-otago.jpg" class="active"><img src="img/gallery/central/small_central-otago.jpg" alt="" /></a></li>
				<li><a href="img/gallery/central/big_central_wine.jpg"><img src="img/gallery/central/small_central_wine.jpg" alt="" /></a></li>
				<li><a href="img/gallery/central/big_central_ski.jpg"><img src="img/gallery/central/small_central_ski.jpg" alt="" /></a></li>
				<li><a href="img/gallery/central/big_central_southern_edge.jpg"><img src="img/gallery/central/small_central_southern_edge.jpg" alt="" /></a></li>
				<!-- Dunedin -->
				<li><a href="img/gallery/dunedin/big_castle.jpg"><img src="img/gallery/dunedin/small_castle.jpg" alt="" /></a></li>
				<li><a href="img/gallery/dunedin/big_street.jpg"><img src="img/gallery/dunedin/small_street.jpg" alt="" /></a></li>
				<li><a href="img/gallery/dunedin/big_museum.jpg"><img src="img/gallery/dunedin/small_museum.jpg" alt="" /></a></li>
				<li><a href="img/gallery/dunedin/big_garden.jpg"><img src="img/gallery/dunedin/small_garden.jpg" alt="" /></a></li>
				<!-- North Otago -->
				<li><a href="img/gallery/north/big_matanaka.jpg"><img src="img/gallery/north/small_matanaka.jpg" alt="" /></a></li>
				<li><a href="img/gallery/north/big_moeraki.jpg"><img src="img/gallery/north/small_moeraki.jpg" alt="" /></a></li>
				<li><a href="img/gallery/north/big_elephant.jpg"><img src="img/gallery/north/small_elephant.jpg" alt="" /></a></li>
				<li><a href="img/gallery/north/big_fleurs_place.jpg"><img src="img/gallery/north/small_fleurs_place.jpg" alt="" /></a></li>
				<!-- Queenstown -->			
				<li><a href="img/gallery/queens/big_flights.jpg"><img src="img/gallery/queens/small_flights.jpg" alt="" /></a></li>
				<li><a href="img/gallery/queens/big_Lake_Wakatipu.jpg"><img src="img/gallery/queens/small_Lake_Wakatipu.jpg" alt="" /></a></li>
				<li><a href="img/gallery/queens/big_sound.jpg"><img src="img/gallery/queens/small_sound.jpg" alt="" /></a></li>
				<li><a href="img/gallery/queens/big_horses.jpg"><img src="img/gallery/queens/small_horses.jpg" alt="" /></a></li>
				<!-- catlins -->			
				<li><a href="img/gallery/catlins/big_cathedral.jpg"><img src="img/gallery/catlins/small_cathedral.jpg" alt="" /></a></li>
				<li><a href="img/gallery/catlins/big_lake-wilkie.jpg"><img src="img/gallery/catlins/small_lake-wilkie.jpg" alt="" /></a></li>
				<li><a href="img/gallery/catlins/big_nugget.jpg"><img src="img/gallery/catlins/small_nugget.jpg" alt="" /></a></li>
				<li><a href="img/gallery/catlins/big_water.jpg"><img src="img/gallery/catlins/small_water.jpg" alt="" /></a></li>
			</ul>		
	</div>
</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#nav_gallery a').mouseover(function(e){
				e.preventDefault();
				$('#nav_gallery a').removeClass('active');
				$(this).addClass('active');
				img_url = $(this).attr('href');
				$('#window img').attr('src',img_url);
				});
			})
	</script>

<div class="footer"></div>	


<?php
require_once("footer.php");
?>
