<?php
require_once("lib/header.php");
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


<!-- Main body of each area -->
<?php
  if($region=='central'){
?>
<?php
require_once("each_region/central_otago.php");
?>
<?php
}
elseif($region=='dunedin'){
?>
<?php
require_once("each_region/dunedin.php");
?>
<?php
}
elseif($region=='north'){
?>
<?php
require_once("each_region/north_otago.php");
?>
<?php
}
elseif($region=='queens'){
?>
<?php
require_once("each_region/queenstown.php");
?>
<?php
}
elseif($region=='catlins'){
?>
<?php
require_once("each_region/catlins.php");
?>
<?php
}
?>

<!-- Footer -->
<?php
require_once("lib/footer.php");
?>




