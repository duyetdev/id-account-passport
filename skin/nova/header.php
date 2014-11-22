<!DOCTYPE  html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title><?= $yplitgroupPageTitle ?></title>
  <link rel="stylesheet" type="text/css" href="./skin/<?= SKINDIR ?>/css/style.css" />
  <link rel="stylesheet" href="./skin/<?= SKINDIR ?>/css/social-icons.css" type="text/css" media="screen" />
  <!--[if IE 8]>
  <link rel="stylesheet" type="text/css" href="./skin/<?= SKINDIR ?>/css/ie8-hacks.css" />
  <![endif]-->
  <!--
    GOOGLE FONTS 
    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
  -->
	<script type="text/javascript" src="skin/<?= SKINDIR ?>/js/jquery-1.5.1.min.js"></script>
	<script type="text/javascript" src="skin/<?= SKINDIR ?>/js/jquery-ui-1.8.13.custom.min.js"></script>
	<script type="text/javascript" src="skin/<?= SKINDIR ?>/js/easing.js"></script>
	<script type="text/javascript" src="skin/<?= SKINDIR ?>/js/jquery.scrollTo-1.4.2-min.js"></script>
	<script type="text/javascript" src="skin/<?= SKINDIR ?>/js/jquery.cycle.all.js"></script>
	<script type="text/javascript" src="skin/<?= SKINDIR ?>/js/custom.js"></script>
	
	<!-- Isotope -->
		<script src="skin/<?= SKINDIR ?>/js/jquery.isotope.min.js"></script>
	<!--[if IE]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="skin/<?= SKINDIR ?>/js/DD_belatedPNG.js"></script>
			<script>
			/* EXAMPLE */
			//DD_belatedPNG.fix('*');
		</script>
	<![endif]-->
	<!-- prettyPhoto -->
		<script type="text/javascript" src="skin/<?= SKINDIR ?>/js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="skin/<?= SKINDIR ?>/js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<!-- ENDS prettyPhoto -->
	<!-- superfish -->
		<link rel="stylesheet" media="screen" href="skin/<?= SKINDIR ?>/css/superfish.css" /> 
		<link rel="stylesheet" media="screen" href="skin/<?= SKINDIR ?>/css/superfish-left.css" /> 
		<script type="text/javascript" src="skin/<?= SKINDIR ?>/js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="skin/<?= SKINDIR ?>/js/superfish-1.4.8/js/superfish.js"></script>
		<script type="text/javascript" src="skin/<?= SKINDIR ?>/js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
	<!-- poshytip -->
		<link rel="stylesheet" href="skin/<?= SKINDIR ?>/js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
		<link rel="stylesheet" href="skin/<?= SKINDIR ?>/js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
		<script type="text/javascript" src="skin/<?= SKINDIR ?>/js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
	<!-- Fancybox -->
		<link rel="stylesheet" href="skin/<?= SKINDIR ?>/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
		<script type="text/javascript" src="skin/<?= SKINDIR ?>/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<!-- ENDS Fancybox -->
  </head>
  <body class="home">
  <div class="wrapper">
  			<!-- HEADER -->
			<div id="header">
				<!-- wrapper-header -->
				<div class="wrapper">
					<a href="index.php">
						<!-- <img id="logo" src="skin/<?= SKINDIR ?>/img/logo.png" alt="Nova" /> --> 
						<h1>ID Account System</h1>
					</a>
					<!-- search -->
					<div class="top-search">
						<?php
							if( isset( $text_top ) AND !empty( $text_top ) )
								echo $text_top;
						?>
					</div>
					<!-- ENDS search -->
				</div>
				<!-- ENDS wrapper-header -->					
			</div>
			<!-- ENDS HEADER -->

			
			<!-- Menu -->
			<div id="menu">
				<!-- ENDS menu-holder -->
				<div id="menu-holder">
					<!-- wrapper-menu -->
					<div class="wrapper">
						<!-- Navigation -->
						<ul id="nav" class="sf-menu">
							<li class="current-menu-item"><a href="index.php">Home<span class="subheader">Welcome</span></a></li>
							<li><a href="index.php?do=manager"><?= $lang['account'] ?><span class="subheader">My Account</span></a>
								<ul>
									
									<li><a href="index.php?do=login"><span> <?= $lang['login'] ?></span></a></li>
									<li><a href="index.php?do=lostpass"><span> <?= $lang['lostpass'] ?></span></a></li>
									<li><a href="index.php?do=register"><span> <?= $lang['register'] ?></span></a></li>
								</ul>
							</li>
							<li><a href="<?= $config['forum_url'] ?>">Forum<span class="subheader">Go to Forum</span></a></li>

							<li><a href="index.php?do=contact">Contact<span class="subheader">Get in touch</span></a></li>
						</ul>
						<!-- Navigation -->
					</div>
					<!-- wrapper-menu -->
				</div>
				<!-- ENDS menu-holder -->
			</div>
			<!-- ENDS Menu -->
			
<div id="main">
	<div class="wrapper">
		<div id="content">
