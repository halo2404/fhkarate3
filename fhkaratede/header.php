<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
        <?php wp_head(); ?>
        
		<!-- Das neueste kompilierte und minimierte CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">

		<!-- Optionales Theme -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->

		<!-- FH-Karate -->
		<link href="<?php bloginfo('template_url');?>/style.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
      		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
</head>

 <?php
      
      if( is_front_page() ):
          $fhkarate_classes = array( 'fhkarate-class', 'my-class' );
      else:
          $fhkarate_classes = array( 'no-fhkarate-class' );
      endif;
 ?>

<body <?php body_class( $fhkarate_classes ); ?>>

	<div class="container">
    
    	<div class="row">
        
        	<div class="col-xs-12">
            
            	<nav class="navbar navbar-default navbar-fixed-top visible-md-block visible-lg-block visible-md-block visible-sm-block visible-xs-block">
  					<div class="container"><!-- -fluid"> -->
    					<!-- Brand and toggle get grouped for better mobile display -->
    					<div class="navbar-header">
      						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1">
                            	<span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
      						<img alt="Logo" src="<?php bloginfo('template_url');?>/images/android-icon-48x48.png" class="hidden-lg hidden-sm hidden-md">
                            <a class="navbar-brand hidden-xs hidden-md" href="#"><?php bloginfo('name'); ?></a>
                        </div>
    					<!-- Collect the nav links, forms, and other content for toggling -->
    					<div class="collapse navbar-collapse" id="defaultNavbar1">
                        	<?php
							  wp_nav_menu( array(
									  'menu'              => 'primary',
									  'depth'             => 2,
									  'container'         => 'div',
									  'container_class'   => 'navbar-collapse collapse',
									  'menu_class'        => 'nav navbar-nav',
									  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									  'walker'            => new wp_bootstrap_navwalker())
								  );
							  ?>
                         </div>
                     </div><!-- /.container-fluid --> 
                </nav>
                
            </div>
<!--           
            <div class="col-xs-12">
            	<div class="search-form-container">
                	<div class="container">
						<?php get_search_form(); ?>
					</div>
                </div>
            </div>
-->
			<div class="container-fluid">
  				<div class="row">
    				<div class="col-md-2 col-md-offset-2 ">
       					<img alt="Logo" src="<?php bloginfo('template_url');?>/images/fh-karate-logo-final_006699_75_progressive.png" class="img-responsive hidden-xs hidden-sm">
    				</div>
    				<div class="col-md-6">
      					<p><h1 class="text-center">Frankfurt University of Applied Sciences <small>(Fachhochschule Frankfurt am Main)</small></h1></p>
      					<p><h1 class="text-center">- Hochschulsport -</h1></p>
      					<p><h1 class="text-center">KARATE</h1></p>
    				</div>
  				</div>
  				<hr>
			</div>
