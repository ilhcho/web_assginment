<?php
require_once("header.php");
?>
<!-- Top Navigation -->
<div class="top_navi">
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
</div><!-- End of top_navi-->




<!-- Main Images -->
<div class="main_images">
	
	<div class="map">		
		<img id="map_img" src="img/map/south5.png" alt="south island map">
		<img id="nz_map" src="img/map/nz_map3.png" alt="New Zealand Map">
	</div>
	
</div>

<?php
require_once("footer.php");
?>
