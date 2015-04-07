<?php
require_once("header.php");
?>

<!-- Main Frame Start -->
<div class="main_frame">
<!-- Import Navi  -->
<?php
require_once("regions_navi.php");
?>

  <div class="map">
      <?php        
          if($region=='central'){   
            echo'<img class="main_img" src="img/regions/central.jpg" alt="central otago">';
           } 
          elseif ($region=='dunedin') {
            echo'<img class="main_img" src="img/regions/university.jpg" alt="otago university">';
          }
          elseif ($region=='north') {
            echo'<img class="main_img" src="img/regions/North-Otago.jpg" alt="central otago">';
          }
          elseif ($region=='queens') {
            echo'<img class="main_img" src="img/regions/queens.jpg" alt="central otago">';
          }
          elseif ($region=='catlins') {
            echo'<img class="main_img" src="img/regions/nugget.jpg" alt="central otago">';
          }
        ?>    
  
  </div>
</div><!-- End of main_framie -->

<div class="middle middle_box">
  <div class="container container_middle">
   <a id="accomodation"> 
    <div class="infor_box">
      <h3>Accomodation</h3>
      <div class="acco_box">
        <img class="acco_img" src="img/accomodation/central/holiday.jpg" alt="central otago holiday house">
          <div class="aaco_sub">
          <h2>Holiday House</h2>
          <h4>Price Range: $75~$200</h4>
          <h4>Feature:</h4>
          <h4>Web Site:<a href="https://www.holidayhouses.co.nz/Alexandra.asp" target="_Blank"> Holiday Houses</a></h4>
          </div>
      </div>
      <div class="acco_box"> <img class="acco_img" src="img/accomodation/central/hotel.jpg" alt="central otago holiday house">
          <div class="aaco_sub">
          <h2>Luxury Hotel</h2>
          <h4>Price Range: $129 ~ $449</h4>
          <h4>Feature:           
          <h4>Web Site:<a href="http://www.aatravel.co.nz/new-zealand/Central-Otago-District_Hotels.html" target="_Blank"> Hotels</a></h4>
          </div>
      </div>
      <div class="acco_box"> <img class="acco_img" src="img/accomodation/central/backpack.jpg" alt="central otago holiday house">
          <div class="aaco_sub">
          <h2>Backpackers & Holiday Park</h2>
          <h4>Price Range: $13 ~ $120</h4>
          <h4>Feature:</h4>
          <h4>Web Site: <a href="http://www.tourism.net.nz/region/otago/otago---central-otago/accommodation/backpacker-and-budget" target="_Blank">Backpackers</a></h4>
          </div>
      </div>    

    </div></a>
 <a id="activity">
  <div class="infor_box">
    <h3>Activity</h3>
      <div class="act_box">  
        <iframe src="https://www.youtube.com/embed/PYlCFyDzpdU" frameborder="0" allowfullscreen></iframe>
        <div class="act_description"> 
          <h2>Must do!</h2>
          <br />          
          <h4>Otago Central Rail Trail</h4>
            <div class="bicycle_des">
            <table class="ac_table">
              <tr>
                <td>Option:</td>
                <td>1) One day Tour</td>
              </tr>
              <tr>
                <td></td>
                <td>2) Multi-Day Tour(3 - 5 days)</td>
              </tr>
              <tr>
                <td>Prices:</td>
                <td>1) Day Hire: $50</td>
              </tr>
              <tr>
                <td></td>
                <td>2) Half day Hire: $30</td>
              </tr>
              <tr>
                <td></td>
                <td>3) Multi Day Hire  $45 per day</td>
              </tr>
              <tr>
                <td>Details:</td>
                <td>&nbsp;<a href="http://www.bikeitnow.co.nz/" target="_Blank">Bike it Now!<a></td>
              </tr>
            </table>
            <img class="bike" src="img/bg-header.png" alt="bike icon">
           
            </div>
        </div>
      </div>

    </div></a>

    <a id="attraction">
      <div class="infor_box">
       <h3>Attraction</h3>
        <div class="row">
          <div class="span4">
            <div class="att_des_side">
              <div class="header">Heritage</div>
              <div class="sub_header">
              Central Otago’s best kept secret
            </div>
            <div class="details">
             <p class="detail_title">Cromwell Heritage Precinct</p>
              <br />
              <i id="try" class="icon-chevron-right"></i>Whole family
              <br />
              <i id="try" class="icon-chevron-right"></i>History
              <br />
              <i id="try" class="icon-chevron-right"></i>Galleries
              <br />
              <i id="try" class="icon-chevron-right"></i>Cafes
              <br />
              <i id="try" class="icon-chevron-right"></i>Boutique 
            </div>
            <a href="http://cromwellheritageprecinct.co.nz/" class="button" target="_Blank">Visit the website</a>
            </div>
          </div>

          <div class="span4">
            <div class="att_des">
              <div class="header heaer_middle">Wineries</div>
              <div class="sub_header">
              Home to more than 80 wineries
            </div>
            <div class="details">
              <p class="detail_title">Cromwell Heritage Precinct</p>
              <br />
              <i id="try" class="icon-chevron-right"></i>Gourmet food
              <br />
              <i id="try" class="icon-chevron-right"></i>Fresh produce
              <br />
              <i id="try" class="icon-chevron-right"></i>Burgandy-style grapes
              <br />
              <i id="try" class="icon-chevron-right"></i>Pinot-Noir
              <br />
              <i id="try" class="icon-chevron-right"></i>Al-fresco dining
              <br />
              <br />
            </div>
            <a href="http://www.winesofnz.com/Regions.aspx?region=otago&AspxAutoDetectCookieSupport=1" class="button2" target="_Blank">Visit the website</a>
            </div>
              </div>
     
          <div class="span4">
            <div class="att_des_side">
              <div class="header">ROXBURGH</div>
              <div class="sub_header">
              Adrenaline-pumping adventure
            </div>
            <div class="details">
              <p class="detail_title">Cromwell Heritage Precinct</p>
              <br />
              <i id="try" class="icon-chevron-right"></i>Suit all ages
              <br />
              <i id="try" class="icon-chevron-right"></i>Relaxing day out
              <br />
              <i id="try" class="icon-chevron-right"></i>Beautiful Teviot Valley
              <br />
              <i id="try" class="icon-chevron-right"></i>Fishing
              <br />
              <i id="try" class="icon-chevron-right"></i>Cruise ship holiday
              
            </div>
            <a href="http://www.tourism.net.nz/region/otago/otago---central-otago/roxburgh/attractions-and-activities" class="button" target="_Blank">Visit the website</a>
            </div>
          </div>
        </div><!-- End of row-->
    </div><!-- End of infor_box-->
  </a>

    <a id="event"><div class="infor_box">
    <a href="http://www.centralotagonz.com/event-calendar" target="_Blank"><h3>Event</h3></a>
    <div class="event_calender">
    <div class="spring">
      <div class="months border_right months_9"><div class="vertical_center">September</div></div>
      <div class="months border_right months_10"><div class="vertical_center">October</div></div>
      <div class="months months_11"><div class="vertical_center">November</div></div>
    </div>
    <div class="summer">
      <div class="months border_right months_12"><div class="vertical_center">December</div></div>
      <div class="months border_right months_1"><div class="vertical_center">January</div></div>
      <div class="months months_2"><div class="vertical_center">February</div></div>
    </div>
    <div class="autumn">
      <div class="months border_right months_3"><div class="vertical_center">March</div></div>
      <div class="months border_right months_4"><div class="vertical_center">April</div></div>
      <div class="months months_5"><div class="vertical_center">May</div></div>
    </div>
    <div class="winter">
      <div class="months border_right months_6"><div class="vertical_center">June</div></div>
      <div class="months border_right months_7"><div class="vertical_center">July</div></div>
      <div class="months months_8"><div class="vertical_center">August</div></div>
    </div>

    </div><!--End of event_calender-->

    </div></a>

   <a id="restaurant"><div class="infor_box">
    <h3>Restaurant</h3>
    <div class="res_wrapper">
    <div class="img_part">
      <div class="res_img">
        <img class="img_radius" src="img/restaurant/central/cellar.jpg" alt="CELLAR DOORS">
     </div>
    </div>
    <div class="des_part">
    <div class="des_part2">
      <a href="http://www.centralotagonz.com/New-Zealand/Cellar-Door_sbt_arm=0_stm=0_st=126_.html"><h5>Cellar Doors</h5></a>
      <h4 id="res_des">Most Central Otago wineries offer visitors wine tasting and the opportunity to buy their wines.</h4>
      <h4 id="res_des"> It is more personal than going to a store or restaurant.</h4>
      <ul class="a">
       <li><a href="http://www.mtdifficulty.co.nz" target="_Blank">Mt Difficulty Wines</a></li>
       <li><a href="http://www.wooingtree.co.nz" target="_Blank">Wooing Tree Vineyard</a></li>
       <li><a href="http://www.carrick.co.nz" target="_Blank">Carrick Winery Restaurant & Cellar Door</a></li>
       <li><a href="http://www.pinotthymetours.co.nz" target="_Blank">Pinot Thyme Wine Tours</a></li>   
      </ul>
      <h4><a href="http://www.centralotagonz.com/New-Zealand/Cellar-Door_sbt_arm=0_stm=0_st=126_.html" target="_Blank">Read More</a></h4>
    
    </div>
    </div>

    </div>
    <hr class="divider">

<div class="res_wrapper">
    <div class="img_part">
      <div class="res_img">
        <img class="img_radius" src="img/restaurant/central/restaurants.jpg" alt="CENTRAL OTAGO RESTAURANTS">
     </div>
    </div>
    <div class="des_part">
    <div class="des_part2">
      <a href="http://www.centralotagonz.com/New-Zealand/Restaurants_sbt_arm=0_stm=0_st=100_.html"><h5>Central Otago Restaurants</h5></a>
      <h4 id="res_des">Restaurants are most stock award-winning Central Otago wines.</h4>
      <h4 id="res_des">Restaurants offer fine dining in the evenings.</h4>
      <ul class="a">
       <li><a href="http://www.goldengate.co.nz" target="_Blank">Golden Gate Lodge</a></li>
       <li><a href="http://www.lakeroxburghlodge.co.nz" target="_Blank">Lake Roxburgh Lodge</a></li>
       <li><a href="http://www.centralotagonz.com/cromwell-bannockburn/pisa-moorings/restaurants/x,1,5275/the-moorings-restaurant-bar.html" target="_Blank">The Moorings Restaurant & Bar</a></li>
       <li><a href="http://www.mtdifficulty.co.nz" target="_Blank">Mt Difficulty Wines</a></li>   
      </ul>
      <h4><a href="http://www.centralotagonz.com/New-Zealand/Restaurants_sbt_arm=0_stm=0_st=100_.html" target="_Blank">Read More</a></h4>
    
    </div>
    </div>

    </div>
    <hr class="divider">

    <div class="res_wrapper">
    <div class="img_part">
      <div class="res_img">
        <img class="img_radius" src="img/restaurant/central/cafe.jpg" alt="CAFÉS IN CENTRAL OTAGO">
     </div>
    </div>
    <div class="des_part">
    <div class="des_part2">
      <a href="http://www.centralotagonz.com/New-Zealand/Caf%C3%A9_sbt_arm=0_stm=0_st=153_.html"><h5>Cafés in Central Otago</h5></a>
      <h4 id="res_des">Cafés have a relaxed atmosphere and usually offer a casual all-day dining 
      experience. </h4>
      <h4 id="res_des"> Most cafés provide juices, teas, espresso coffee and 
      other hot and cold drinks.</h4>
       <ul class="a">
       <li><a href="http://www.wildearthwines.co.nz" target="_Blank">Wild Earth</a></li>
       <li><a href="http://www.centralotagonz.com/roxburgh/roxburgh/cafes/x,1,5244/rox-cafe.html" target="_Blank">Rox Cafe</a></li>
       <li><a href="http://www.speargrassinn.co.nz" target="_Blank">Speargrass Inn</a></li>
       <li><a href="http://www.centralotagonz.com/cromwell-bannockburn/bannockburn/restaurants/x,1,5283/the-kitchen-bannockburn.html" target="_Blank">The Kitchen Bannockburn</a></li>   
      </ul>
      <h4><a href="http://www.centralotagonz.com/New-Zealand/Caf%C3%A9_sbt_arm=0_stm=0_st=153_.html" target="_Blank">Read More</a></h4>
    
    </div>
    </div>
    </div>


    </div></a>

  </div><!-- End of container -->
</div><!-- End of middle -->


<!-- Footer -->
<?php
require_once("footer.php");
?>




