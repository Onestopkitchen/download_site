<?php 
	
	$selectedNavItem = explode("/", getcwd());
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<?php
	if (dirname(__FILE__) == getcwd())
	{
	?>
	<link rel="icon" type="image/icon" href="image/logo.png" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="font/fontawsome/css/all.min.css">
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="css/style.min.css" rel="stylesheet">
	<!-- Animate css file -->
	<link rel="stylesheet" type="text/css" href="css/Animate.css">

	<link rel="stylesheet" type="text/css" href="css/flickity.css">

	<link rel="stylesheet" type="text/css" href="css/Animations.css">

	<?php
	} else if (count($selectedNavItem) == 5) {
	?>
	<link rel="icon" type="image/icon" href="../image/logo.png" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="../font/fontawsome/css/all.min.css">
	<!-- Bootstrap core CSS -->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="../css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="../css/style.min.css" rel="stylesheet">
	<!-- Animate css file -->
	<link rel="stylesheet" type="text/css" href="../css/Animate.css">

	<link rel="stylesheet" type="text/css" href="../css/flickity.css">

	<link rel="stylesheet" type="text/css" href="../css/Animations.css">

	<?php
	}
	?>
	<title>One Stop Kitchen | Your Virtual Kitchen</title>
</head>
<body class="disable-selection bg-theme">
	<nav class="navbar navbar-expand-sm fixed-top navbar-dark justify-content-end <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>">
		<div class="container-fluid">
		    <div class="logo-holder <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>">
		    	<?php if (dirname(__FILE__) == getcwd()) { ?>
		  		<a class="navbar-brand m-0" href=".">
	  			<?php } else if (count($selectedNavItem) == 5) { ?>
  				<a class="navbar-brand m-0" href="../">
	  			<?php } ?>
			  		<?php if (dirname(__FILE__) == getcwd()) { ?>
			  			<img class="centerVH logo <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" src="image/logo.png" >
			  		<?php } else if (count($selectedNavItem) == 5) { ?>
			  			<img class="centerVH logo <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" src="../image/logo.png" >
			  		<?php } ?>
			  	</a>
		  	</div>
	        <ul class="navbar-nav w-100 flex-grow-0 text-right">
	            <li class="nav-item ml-auto <?php if (dirname(__FILE__) == getcwd()) { echo 'active'; } ?>">
	            	<?php if (dirname(__FILE__) == getcwd()) { ?>
	                <a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" href=".">HOME</a>
	                <?php } else if (count($selectedNavItem) == 5) { ?>
                	<a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" href="../">HOME</a>
                	<?php } ?>
	            </li>
	             <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle  <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          BRANDS
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			        	<?php if (dirname(__FILE__) == getcwd()) { ?>
			          		<a class="dropdown-item" href="OSK">OSK</a>
			          	<?php } else if (count($selectedNavItem) == 5) { ?>
			          		<a class="dropdown-item" href="../OSK">OSK</a>
		          		<?php } ?>

		          		<?php if (dirname(__FILE__) == getcwd()) { ?>
		          		 	<a class="dropdown-item" href="HEALTHYCO">HealthyCo</a>
			          	<?php } else if (count($selectedNavItem) == 5) { ?>
		          		 	<a class="dropdown-item" href="../HEALTHYCO">HealthyCo</a>
		          		<?php } ?>

		          		<?php if (dirname(__FILE__) == getcwd()) { ?>
		          		 	<a class="dropdown-item" href="HOUSEOFBIRIYANI">House of Biriyani</a>
			          	<?php } else if (count($selectedNavItem) == 5) { ?>
		          		 	<a class="dropdown-item" href="../HOUSEOFBIRIYANI">House of Biriyani</a>
		          		<?php } ?>

		          		<?php if (dirname(__FILE__) == getcwd()) { ?>
		          		 	<a class="dropdown-item" href="OSKPLUS">OSK Plus</a>
			          	<?php } else if (count($selectedNavItem) == 5) { ?>
		          		 	<a class="dropdown-item" href="../OSKPLUS">OSK Plus</a>
		          		<?php } ?>
			         
			          
			          
			        </div>
		      	</li>
	            <li class="nav-item">
	                <a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" href="javascript:void(0)">FRANCHISE</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" href="#">BLOG</a>
	            </li>
	            <li class="nav-item">
	            	<?php if (dirname(__FILE__) == getcwd()) { ?>
	                	<a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" href="AboutUs">ABOUT-US</a>
	                <?php } else if (count($selectedNavItem) == 5) { ?>
                		<a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" href="../AboutUs">ABOUT-US</a>
            		<?php } ?>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" href="#contactus">CONTACT-US</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" href="#">CAREERS</a>
	            </li>
	            <li class="nav-item pl-4" style="margin-right: -10px;">
	                <a class="nav-link user-icon <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" href="#"><i class="fas fa-user-tie"></i></a>
	            </li>
	        </ul>
		</div>
	</nav>