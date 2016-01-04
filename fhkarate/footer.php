  <div class="containerfluid">
  <div id="bfooter" class="row">
  	<div class="col-md-8 col-md-offset-2">
  	<div class="col-md-2">
    	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
	</div>
    <div class="col-md-2 col-md-offset-1">
<p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
	</div>
    <div class="col-md-2 col-md-offset-1">
<p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
    </div>
    <div id= "social" class="col-md-3 col-md-offset-1">
    <a href="http://facebook.com" alt="Facebook"><img src="<?php echo esc_url( get_template_directory_uri() );?>/images/1449161735_facebook-square-social-media.png"></a>
    <a href="http://youtube.com" alt="YouTube"><img src="<?php echo esc_url( get_template_directory_uri() );?>/images/1449161743_youtube-square-social-media.png"></a>
    <a href="http://mail.com" alt="Mail"><img src="<?php echo esc_url( get_template_directory_uri() );?>/images/1449161745_mail-square-social-media.png"></a>
    <a href="http://wordpress.org" alt="Wordpress"><img src="<?php echo esc_url( get_template_directory_uri() );?>/images/1449161747_wordpress-square-social-media.png"></a>
    </div>
  </div>
  
  </div>
  <div id="footer" class="container-fluid">
  <div class="row">
    <div class="text-center col-md-6 col-md-offset-3">
      <h4>Hochschulsport - Abt. Karate</h4>
      <p>Copyright &copy; 2015 &middot; All Rights Reserved &middot; <a href="http://fh-karate.de/" >fh-karate.de</a></p>
    </div>
  </div>

  </div>
<!--</div>-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="http://localhost:8888/fhkarate_wp/wp-content/themes/fhkarate/js/bootstrap.js"></script>
<!-- http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css -->

<script type="text/javascript">
$('#nav').affix({
    offset: {     
      top: $('#nav').offset().top,
      bottom: ($('footer').outerHeight(true) + $('.application').outerHeight(true)) + 40
    }
});


//$('body').scrollspy({ target: '#nav' });

//$('#nav').affix('checkPosition');

//$('#nav').affix({
//  offset: 15
//});

//$('[data-spy="scroll"]').each(function () {
//  var $spy = $(this).scrollspy('refresh')
//});

$('.nav li a').on('click', function() {
    $(this).parent().parent().find('.active').removeClass('.active');
    $(this).parent().addClass('.active');
});
</script>

</body>
</html>