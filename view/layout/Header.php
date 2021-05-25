<!DOCTYPE html>
<html>
 <head>
   <title><?php echo $bodyParameters['pageTitle'];?></title>
   	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
<!-- SEO metatags !-->    
    <meta name="description" content=<?php echo '"'.$bodyParameters['pageDescription'] .'"';?>/>
	<meta name=”robots” content=”index, follow”>
	<link rel="canonical" href="https://ammb.co.uk/" />   
<!-- OPEN graph tags for facebook !-->
	<meta property="og:type" content="article" />
	<meta property="og:title" content=<?php echo '"'.$bodyParameters['facebookTitle'].'"';?> />
	<meta property="og:description" content=<?php echo '"'.$bodyParameters['facebookDescription'].'"';?> />
	<meta property="og:image" content=<?php echo '"'.$bodyParameters['facebookImageUrl'].'"';?> />
	<meta property="og:url" content=<?php echo '"'.$bodyParameters['facebookUrl'].'"';?> />
	<meta property="og:site_name" content=<?php echo '"'.$bodyParameters['facebookSiteName'].'"';?> /> 
<!-- Website resources !-->
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/site.webmanifest">
	<link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="js/slick/slick.css"/>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet"> 
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/index.js"></script>

 </head>
 <body>
 	<nav class="navbar navbar-inverse navbar-static-top custom-navbar" role="navigation">
    <div class="container-fluid">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       </button>
       <!-- Non-collapsing right-side icons -->
       <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="https://www.facebook.com/AMMB2007/" target="_blank" class="fa_design fa fa-facebook-square"></a>
          </li>
          <li>
            <a href="https://www.instagram.com/ammb.md/" target="_blank" class="fa_design fa fa-instagram"></a>
          </li>
          <li>
            <a href="https://www.youtube.com/channel/UCBlBJEbZfYCO9q-DpTFvVIw" target="_blank" class="fa_design fa fa-youtube"></a>
          </li>
       </ul>
       <div class="navbar-header">
        <a class="navbar-brand" rel="home" href="index.php" title="AMMB">
         <img class="zoomLogo" src="img/newlogo.png" alt="AMMB" width="110%">
       </div>
       <!-- the collapsing menu -->
       <div class="collapse navbar-collapse navbar-left"  id="navbar-collapse-1">
          <ul class="nav navbar-nav" style="padding-left:2vw">
             <li class="left_design"><a href="./home">Acasă</a></li>
             <li class="left_design"><a href="./news">Noutăți</a></li>
             <li class="left_design"><a href="./events">Evenimente</a></li>
          <li>            
                  <div class="dropdown">
                     <button class="dropdown-toggle left_design" data-toggle="dropdown"
                     style="padding-bottom: 15px; padding-top: 13px;background-color: #06273a;">Proiecte
                     <span class="caret"></span></button>
                     <ul class="dropdown-menu">
                        <li><a href="./lifeinuk">Viata in UK</a></li>
                        <li class="divider"></li>
                        <li><a href="./stories">Istorii din diasporă</a></li>
                        <li class="divider"></li>
                        <li><a href="./bussines">Business club</a></li>
                     </ul>
                  </div>
               </li>
             <li class="left_design"><a href="./contact">Contacte</a></li>
          </ul>
       </div>
       <!--/.nav-collapse -->
    </div>
    <!--/.container -->
 </nav>

