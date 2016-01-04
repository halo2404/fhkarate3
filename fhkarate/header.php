<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<!--<a href="images/favicon.ico">favicon.ico</a>-->
<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

<!-- Das neueste kompilierte und minimierte CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">


<!-- FH-Karate -->
<link href="<?php echo esc_url( get_template_directory_uri() );?>/css/fhkarate.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body data-spy="scroll" data-target=".scrollspy">

<nav class="navbar navbar-default  navbar-fixed-top visible-md-block visible-lg-block visible-md-block visible-sm-block visible-xs-block">
  <div class="container"><!-- -fluid"> -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <img alt="Logo" src="http://localhost:8888/fhkarate_wp/wp-content/themes/fhkarate/images/android-icon-48x48.png" class="hidden-lg hidden-sm hidden-md"><a class="navbar-brand hidden-xs hidden-md" href="#">FH-KARATE.DE</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="defaultNavbar1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#trainer">Trainer</a></li>
        <li><a href="#zeiten">Zeiten</a></li>
        <li><a href="#anfahrt">Anfahrt</a></li>
        <li><a href="#kontakt">Kontakt</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Interessantes<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#news">News</a></li>
            <li><a href="#termine">Termine</a></li>
            <li><a href="#karate">Karate</a></li>
            <li><a href="#bilder">Bilder</a></li>
            <li><a href="#literatur">Literatur</a></li>
            <li><a href="#links">Links</a></li>
            <li class="divider"></li>
            <li><a href="#impressum">Impressum</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>