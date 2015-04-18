<?php
require_once("lib/header.php");
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
						    <li><a tabindex="-1" href="regions.php?id=central">Central Otago</a></li>
						    <li><a tabindex="-1" href="regions.php?id=dunedin">Dunedin</a></li>
						    <li><a tabindex="-1" href="regions.php?id=north">North Otago</a></li>
						    <li><a tabindex="-1" href="regions.php?id=queens">Queenstown</a></li>
						    <li><a tabindex="-1" href="regions.php?id=catlins">The Catlins</a></li>
					  	</ul>	
				</div>
					<li class="menu_nav my_popup_open"><a href="#">SIGN UP</a></li>
					<li class="menu_nav"><a href="index.php?id=version1">Version1</a></li>
					<li class="menu_nav"><a href="index.php?id=version2">Version2</a></li>
	
  <!-- Sign up Content -->
  <div id="my_popup">

  <div class="sign_up">
      <a class="my_popup_close" id="close_button">x</a>
    <header>   
    <h3 id="sign_up_title">Sign Up</h3>    
    </header>
    <form action="#" onSubmit="MM_validateForm('uemail','','RisEmail','ufname','','R','ulname','','R','upass','','R');return document.MM_returnValue">
    <table class="sign_table">
      <tr>
        <td><label for="uemail">Email:</label></td>
        <td><input name="uemail" type="text" placeholder="userID@email.com*"  id="uemail" size="35" maxlength="50"><br /></td>
      </tr>
      <tr>
        <td><label for="ufname">First Name:</label></td>
        <td><input name="ufname" type="text" placeholder="Required*"  id="ufname" size="35" maxlength="50"></td>
      </tr>
      <tr>
        <td><label for="ulname">Last Name:</td>
        <td> </label><input name="ulname" type="text" placeholder="Required*"  id="ulname" size="35" maxlength="50"></td>
      </tr>
      <tr>
        <td><label for="upass">Password:</td>
        <td> </label><input name="upass" type="password" placeholder="At least 7 Character*"  id="upass" size="35" maxlength="50"></td>
      </tr>
      <tr>
        <td></td>
        <td><button class="btn" name="Submit">SUBMIT</button></td>
      </tr>      
    </table> 
    
    </form>
  </div>    
  </div><!-- End of my_popup-->
			</div><!-- End of navigation -->
		</div><!-- End of container -->
	</nav>
	<!-- Main content - map -->
	<div class="map">		
		<img id="map_img" src="img/map/south6.png" alt="south island map">
		<img id="nz_map" src="img/map/nz_map4.png" alt="New Zealand Map">
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
					<h3>Accommodation</h3>
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
require_once("lib/footer.php");
?>
