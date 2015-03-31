<div class="footer">
  <div class="container contaier_footer">
  <div class="row">
      <div class="footer_content">
        <h3 class="footer_title">Regions</h3>
        <ul>
          <li><a href="regions.php?id=central">Central Otago</a></li>
          <li><a href="regions.php?id=dunedin">Dunedin</a></li>
          <li><a href="regions.php?id=north">North Otago</a></li>
          <li><a href="regions.php?id=queens">Queenstown</a></li>
          <li><a href="regions.php?id=catlins">The Catlins</a></li>
        </ul>
      </div>
      <div class="footer_content">
        <h3 class="footer_title">Interest</h3>
        <ul>
          <li><a href="#">Activity</a></li>
          <li><a href="#">Attraction</a></li>
          <li><a href="#">Event</a></li>
         </ul>
      </div>
      <div class="footer_content">
        <h3 class="footer_title">Information</h3>
        <ul>
          <li><a href="#">Accomodation</a></li>
          <li><a href="#">Restaurant</a></li>
          <li><a href="#">Going to Otago</a></li>
         </ul>
      </div>
  </div>
</div>  

	<!-- jQuery CDN -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>

	<!-- Mouser over For Image Gallery -->
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
 	<script src="js/js-image-slider.js" type="text/javascript"></script>

<!-- Scroll to -->
<script type="text/javascript">
  $('a[href^="#"]').on('click', function(event) {

    var target = $( $(this).attr('href') );

    if( target.length ) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 1000);
    }

});
</script>
<script>
    $(function() {
      var pull    = $('#navbar');
        menu    = $('nav ul');
        menuHeight  = menu.height();

      $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
      });

      $(window).resize(function(){
            var w = $(window).width();
            if(w > 320 && menu.is(':hidden')) {
              menu.removeAttr('style');
            }
        });
    });
  </script>


</body>

 </html>