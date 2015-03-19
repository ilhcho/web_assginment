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

</body>

 </html>