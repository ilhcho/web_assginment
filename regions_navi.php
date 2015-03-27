<nav class="navbar navbar-fixed-top navbar-default top_navi" role="navigation">
    <div class="container">
  		<div class="logo"><a href="index.php"><img src="img/logo/NZ_logo.png" alt="New Zealnd Flag"></a></div>
        <!-- Navi responsive try -->
       <div class="navbar-header pull-right">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
           
          </div>
  		<div class="collapse navbar-collapse" id="main-gl-nav">
          <ul class="nav pull-right animated navbar-nav">
        <?php
        $region = $_GET['id'];
          if($region=='central'){   
            echo'<li class="active"><a href="#">Central Otago</a></li>';
           } 
          elseif ($region=='dunedin') {
            echo'<li class="active"><a href="#">Dunedin</a></li>';
          }
          elseif ($region=='north') {
            echo'<li class="active"><a href="#">North Otago</a></li>';
          }
          elseif ($region=='queens') {
            echo'<li class="active"><a href="#">Queenstown</a></li>';
          }
          elseif ($region=='catlins') {
            echo'<li class="active"><a href="#">The Catlins</a></li>';
          }
        ?>        
            <li><a href="#accomodation">Accomodation</a></li>
            <li><a href="#activity">Activity</a></li>
            <li><a href="#attraction">Attraction</a></li>
            <li><a href="#event">Event</a></li>
            <li><a href="#restaurant">Restaurant</a></li>
          </ul>
      </div>
    </div>
 </nav>
