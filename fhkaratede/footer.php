	<footer>
    <div class="container">
  		<div class="row">
    		<div class="text-center col-md-6 col-md-offset-3">
            
            <?php wp_nav_menu(array('theme_location'=>'secondary')); ?>
		    	
    				<h4>Hochschulsport - Abt. Karate</h4>
      				<p>Copyright &copy; <?php echo date('Y'); ?> &middot; All Rights Reserved &middot; <a href="http://fh-karate.de/" >fh-karate.de</a></p>
        			
    			
     		</div>
  		</div>
 	</div>
    </footer>
 	<hr>
 
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<!-- <script src="<?php bloginfo('template_url');?>/bootstrap/dist/js/jquery-1.11.2.min.js"></script> -->

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<!-- <script src="<?php bloginfo('template_url');?>/bootstrap/dist/js/bootstrap.js"></script> -->

	<!-- Das neueste kompilierte und minimierte JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha256-KXn5puMvxCw+dAYznun+drMdG1IFl3agK0p/pqT9KAo= sha512-2e8qq0ETcfWRI4HJBzQiA3UoyFk6tbNyG+qSaIBZLyW9Xf3sWZHN/lxe9fTh1U45DpPf07yj94KsUHHWe4Yk1A==" crossorigin="anonymous"></script>

	<!-- http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css -->

	<script type="text/javascript">
		$('.nav li a').on('click', function() {
    		$(this).parent().parent().find('.active').removeClass('.active');
    		$(this).parent().addClass('.active');
		});
	</script>

	<?php wp_footer(); ?>
	</body>
</html>
