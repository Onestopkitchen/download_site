	<section class="footer">
		<div class="container py-5">
			<div class="mobile-app">
				<div class="row">
					<div class="col-7">
						<h1 class="super-header">Our Food Super App</h1>
						<p class="short-intro text-justify">We present you our own app which merges all our brands together. Now order everything from this one single app without any hassle and your order will be delivered at your doorstep.</p>
						<div class="row">
							<div class="col">
								<div class="download-links">
									<p class="text-white">CLICK HERE TO</p>
									<div class="google-btn">
										<a href='https://play.google.com/store/apps/details?id=com.oskdev_app&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img alt='Get it on Google Play' src='https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png'/></a>
									</div>
									<p class="text-white text-center">OR</p>
									<p class="text-white">Scan this QR Code</p>
								</div>
							</div>
							<div class="col">
								<div class="QRCode">
									<?php if (dirname(__FILE__) == getcwd()) { ?>
										<img src="image/mobile-app/QR.png">
									<?php } else if (count($selectedNavItem) == 5) { ?>
										<img src="../image/mobile-app/QR.png">
									<?php }  ?>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="mobile-vertical">
							<div class="inner-video">
								<?php if (dirname(__FILE__) == getcwd()) { ?>
									<video src="image/mobile-app/oskapp.m4v" type="video/mp4" autoplay="true" muted="muted" loop="true"></video>
								<?php } else if (count($selectedNavItem) == 5) { ?>
									<video src="../image/mobile-app/oskapp.m4v" type="video/mp4" autoplay="true" muted="muted" loop="true"></video>
								<?php }  ?>
							</div>
							<?php if (dirname(__FILE__) == getcwd()) { ?>
								<img src="image/mobile-app/mobile.png">
							<?php } else if (count($selectedNavItem) == 5) { ?>
								<img src="../image/mobile-app/mobile.png">
							<?php }  ?>
						</div>
					</div>
				</div>
			</div>
			<br/>
			<div class="main-footer" id="contactus">
				<div class="row text-white footer-1 pt-4">
					<div class="col-xl-4 col-12">
						<h4 class="font-weight-bold">Contact Us</h4>
						<div class="context mt-xl-4">
							<p>ONE STOP KITCHEN<br/>( OSK FOOD & TECHNOLOGY PVT. LTD. )</p>
							<p><i class="fas fa-building"></i>&nbsp; Reg. Office - East Side Villa, 3<sup>rd</sup> Floor, Flat No. 3C, M.G. Road Guwahati, Assam - 781005</p>
							<p><i class="fas fa-building"></i>&nbsp; Near Bank of Baroda, BeltolaTiniali, Guwahati, Assam - 781028</p><p><i class="fas fa-phone"></i>&nbsp; +91-8473809256</p>
							<p><i class="fas fa-envelope-square"></i>&nbsp;oskguwahati@gmail.com</p>
						</div>
					</div>
					<div class="col-xl-3 col-4 mt-xl-0 mt-2">
						<h4 class="font-weight-bold text-center">Explore</h4>
						<ul class="quickLinks mt-xl-4 text-center">
			          		<?php if (dirname(__FILE__) == getcwd()) { ?>
			          			<a class="text-white" href="OSK">OSK</a>
			          		<?php } else if (count($selectedNavItem) == 5) { ?>
			          			<a class="text-white" href="../OSK">OSK</a>
		          			<?php } ?>
				          	</li>
				          	<li>
					      	<?php if (dirname(__FILE__) == getcwd()) { ?>
					        	<a class="text-white" href="HEALTHYCO">HealthyCo</a>
					        <?php } else if (count($selectedNavItem) == 5) { ?>
					        	<a class="text-white" href="../HEALTHYCO">HealthyCo</a>
				        	<?php } ?>
					      	</li>
				          	<li>
			          		<?php if (dirname(__FILE__) == getcwd()) { ?>
				          		<a class="text-white" href="HOUSEOFBIRIYANI">House of Biriyani</a>
		          		 	<?php } else if (count($selectedNavItem) == 5) { ?>
			          		 	<a class="text-white" href="../HOUSEOFBIRIYANI">House of Biriyani</a>
		          		 	<?php } ?>
				          	</li>
				          	<li>
				          		<?php if (dirname(__FILE__) == getcwd()) { ?>
				          		<a class="text-white" href="OSKPLUS">OSK Plus</a>
				          	<?php } else if (count($selectedNavItem) == 5) { ?>
				          		<a class="text-white" href="../OSKPLUS">OSK Plus</a>
		          			<?php } ?>
				          	</li>
						</ul>
					</div>
					<div class="col-xl-2 col-4 mt-xl-0 mt-2">
						<h4 class="font-weight-bold text-center">Follow</h4>
						<ul class="socialLinks mt-xl-4">
							<li class="text-white">
								<a class="text-white" href="https://www.facebook.com/1276355019109078/" target="_blank">Facebook</a>
							</li>
							<li class="text-white">
								<a class="text-white" href="https://instagram.com/oskguwahati?igshid=1ota77c9680zq" target="_blank">Instagram</a>
							</li>
							<li class="text-white">
								<a class="text-white" href="javascript:void(0)" target="_blank">Linkin</a>
							</li>
							<li class="text-white">
								<a class="text-white" href="javascript:void(0)" target="_blank">Twitter</a>
							</li>
						</ul>
					</div>
					<div class="col-xl-2 col-4 mt-xl-0 mt-2">
						<h4 class="font-weight-bold text-center">Legal</h4>
						<ul class="legalLinks mt-xl-4">
							<li class="text-white">
								<a class="text-white" href="#">Terms</a>
							</li>
							<li class="text-white">
								<a class="text-white" href="#">Policies</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<br/>
			
		</div>
	</section>
	<section class="end w-100" style="background: black">
		<div class="container-fluid">
			<div class="footer-end">
				<div class="row">
					<div class="col-lg-6">
						<p class="text-small float-left text-white" style="height: 15px; margin-top: 10px">One Stop Kitchen &copy;2020</p>
					</div>
					<div class="col-lg-6 float-right">
						<p class="text-small float-right text-white" style="height: 15px; margin-top: 10px">Developed By DevTeq</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php
	if (dirname(__FILE__) == getcwd())
	{
	?>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<script type="text/javascript" src="js/jquery.arctext.js"></script>
	<script type="text/javascript" src="js/flickity.js"></script>
	<script type="text/javascript" src="js/scroll.js"></script>
	<script type="text/javascript" src="js/anime.min.js"></script>
	<script type="text/javascript" src="js/script.min.js"></script>
	<?php
	} else if (count($selectedNavItem) == 5) {
	?>
	<script type="text/javascript" src="../js/popper.min.js"></script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/mdb.min.js"></script>
	<script type="text/javascript" src="../js/jquery.arctext.js"></script>
	<script type="text/javascript" src="../js/flickity.js"></script>
	<script type="text/javascript" src="../js/scroll.js"></script>
	<script type="text/javascript" src="../js/anime.min.js"></script>
	<script type="text/javascript" src="../js/script.min.js"></script>
	<?php
	}
	?>
</body>
</html>