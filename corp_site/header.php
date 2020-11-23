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
	<link rel="stylesheet" type="text/css" href="css/Animate.min.css">

	<link rel="stylesheet" type="text/css" href="css/flickity.css">

	<link rel="stylesheet" type="text/css" href="css/Animations.min.css">
	<?php
	} else if (count($selectedNavItem) == 6) {
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
	<link rel="stylesheet" type="text/css" href="../css/Animate.min.css">

	<link rel="stylesheet" type="text/css" href="../css/flickity.css">

	<link rel="stylesheet" type="text/css" href="../css/Animations.min.css">
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
	  			<?php } else if (count($selectedNavItem) == 6) { ?>
  				<a class="navbar-brand m-0" href="../">
	  			<?php } ?>
			  		<?php if (dirname(__FILE__) == getcwd()) { ?>
			  			<img class="centerVH logo <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" src="image/logo.png" >
			  		<?php } else if (count($selectedNavItem) == 6) { ?>
			  			<img class="centerVH logo <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" src="../image/logo.png" >
			  		<?php } ?>
			  	</a>
		  	</div>
	        <ul class="navbar-nav w-100 flex-grow-0 text-right">
	            <li class="nav-item ml-auto <?php if (dirname(__FILE__) == getcwd()) { echo 'active'; } ?>">
	            	<?php if (dirname(__FILE__) == getcwd()) { ?>
	                <a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" href=".">HOME</a>
	                <?php } else if (count($selectedNavItem) == 6) { ?>
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
			          	<?php } else if (count($selectedNavItem) == 6) { ?>
			          		<a class="dropdown-item" href="../OSK">OSK</a>
		          		<?php } ?>

		          		<?php if (dirname(__FILE__) == getcwd()) { ?>
		          		 	<a class="dropdown-item" href="HEALTHYCO">HealthyCo</a>
			          	<?php } else if (count($selectedNavItem) == 6) { ?>
		          		 	<a class="dropdown-item" href="../HEALTHYCO">HealthyCo</a>
		          		<?php } ?>

		          		<?php if (dirname(__FILE__) == getcwd()) { ?>
		          		 	<a class="dropdown-item" href="HOUSEOFBIRIYANI">House of Biriyani</a>
			          	<?php } else if (count($selectedNavItem) == 6) { ?>
		          		 	<a class="dropdown-item" href="../HOUSEOFBIRIYANI">House of Biriyani</a>
		          		<?php } ?>

		          		<?php if (dirname(__FILE__) == getcwd()) { ?>
		          		 	<a class="dropdown-item" href="OSKPLUS">OSK Plus</a>
			          	<?php } else if (count($selectedNavItem) == 6) { ?>
		          		 	<a class="dropdown-item" href="../OSKPLUS">OSK Plus</a>
		          		<?php } ?>
			        </div>
		      	</li>
	            <li class="nav-item">
	                <a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'active'; } ?>" href="javascript:void(0)">FRANCHISE</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'active'; } ?>" href="#">BLOG</a>
	            </li>
	            <li class="nav-item <?php if (dirname(__FILE__) != getcwd()) { echo 'active'; } ?>">
	            	<?php if (dirname(__FILE__) == getcwd()) { ?>
	                	<a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" href="AboutUs">ABOUT-US</a>
	                <?php } else if (count($selectedNavItem) == 6) { ?>
                		<a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" href="../AboutUs">ABOUT-US</a>
            		<?php } ?>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'active'; } ?>" href="#contactus">CONTACT-US</a>
	            </li>
	            <li class="nav-item">
	                <a class="nav-link <?php if (dirname(__FILE__) != getcwd()) { echo 'active'; } ?>" href="#">CAREERS</a>
	            </li>
	            <li class="nav-item pl-4" style="margin-right: -10px;">
	                <a class="nav-link user-icon <?php if (dirname(__FILE__) != getcwd()) { echo 'change'; } ?>" href="#"><i class="fas fa-user-tie"></i></a>
	            </li>
	        </ul>
	        <div class="icon-container">
				<div class="nav-icon">
				  <div></div>
				</div>
			</div>
		</div>
	</nav>
	<div class="mobile-menu mobile">
    	<ul>
    		<li class="<?php if (dirname(__FILE__) == getcwd()) { echo 'active'; } ?>">
    			<?php if (dirname(__FILE__) == getcwd()) { ?>
    			<a class="text-white" href=".">HOME</a>
    			<?php } else if (count($selectedNavItem) == 6) { ?>
				<a class="text-white" href="../">HOME</a>
				<?php } ?>
    		</li>
    		<li><a class="text-white" href="javascript:void(0)" id="brands-mini"><i class="fas fa-angle-double-left"></i>&nbsp;BRANDS</a>
				<div class="brands-menu">
		        	<?php if (dirname(__FILE__) == getcwd()) { ?>
		          		<a class="dropdown-item text-white" href="OSK">OSK</a>
		          	<?php } else if (count($selectedNavItem) == 6) { ?>
		          		<a class="dropdown-item text-white" href="../OSK">OSK</a>
	          		<?php } ?>

	          		<?php if (dirname(__FILE__) == getcwd()) { ?>
	          		 	<a class="dropdown-item text-white" href="HEALTHYCO">HealthyCo</a>
		          	<?php } else if (count($selectedNavItem) == 6) { ?>
	          		 	<a class="dropdown-item text-white" href="../HEALTHYCO">HealthyCo</a>
	          		<?php } ?>

	          		<?php if (dirname(__FILE__) == getcwd()) { ?>
	          		 	<a class="dropdown-item text-white" href="HOUSEOFBIRIYANI">House of Biriyani</a>
		          	<?php } else if (count($selectedNavItem) == 6) { ?>
	          		 	<a class="dropdown-item text-white" href="../HOUSEOFBIRIYANI">House of Biriyani</a>
	          		<?php } ?>

	          		<?php if (dirname(__FILE__) == getcwd()) { ?>
	          		 	<a class="dropdown-item text-white" href="OSKPLUS">OSK Plus</a>
		          	<?php } else if (count($selectedNavItem) == 6) { ?>
	          		 	<a class="dropdown-item text-white" href="../OSKPLUS">OSK Plus</a>
	          		<?php } ?>
		        </div>
		    </li>
    		<li>FRANCHISE</li>
    		<li>BLOG</li>
    		<li class="<?php if ((count($selectedNavItem) == 6) && ($selectedNavItem[5] == 'AboutUs')) { echo 'active'; }?>">
    			<?php if (dirname(__FILE__) == getcwd()) { ?>
    				<a class="text-white" href="AboutUs">ABOUT-US</a>
    			<?php } else if (count($selectedNavItem) == 6) { ?>
    				<a class="text-white" href="../AboutUs">ABOUT-US</a>
    			<?php } ?>	
    		</li>
    		<li>CONTACT-US</li>
    		<li>CAREERS</li>
    	</ul>
    </div>