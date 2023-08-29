<!-- begin desktop nav -->
<div class="sub-header">
	<div class="row">
		<div class="col mt-1">
			<p class="text-white text-center fw-bold h5"><a class="text-white" href="tel:1+3022000885">302.200.0885</a>
				<span class="float-end me-5">
					<a target="_blank" href="https://www.facebook.com/martinconstruction11"><i class="fab fa-facebook-square text-white fa-lg"></i></a> &nbsp; 
					<a target="_blank" href="https://www.houzz.com/professionals/design-build-firms/martin-construction-services-llc-pfvwus-pf~1259896214"><i class="fab fa-houzz text-white fa-lg"></i></a> &nbsp; 
					<a href="mailto:info@martincsllc.com"><i class="fa fa-envelope text-white fa-lg"></i></a>
				</span>
			</p>
		</div>
	</div>
</div>
<header class="d-none d-lg-block">
	<nav class="navbar navbar-expand-lg fixed-top mt-5">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/Martin-Construction-logo.png" width="220" alt="<?php echo get_bloginfo('name') ?>" class="img-fluid">
			</a>
			<div class="collapse navbar-collapse" id="bkcNav">
				<?php
				wp_nav_menu(array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => '',
					'container_class'   => '',
					'container_id'      => '',
					'menu_class'        => 'navbar-nav ms-auto',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				)); ?>
			</div>
		</div>
	</nav>
</header>
<!-- end desktop nav -->
<!-- begin mobile offcanvas nav -->
<header class="d-block d-lg-none">
	<nav class="navbar fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand mt-5" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_home_url(); ?>/wp-content/uploads/Martin-Construction-logo.png" alt="<?php echo get_bloginfo('name') ?>" width="220" class="img-fluid">
				<span class="text-white bkc-text">&nbsp;</span>
			</a>
			<br>
			<button class="navbar-toggler rounded-0 mt-5" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
				<i class="fa fa-bars fa-2x" aria-hidden="true"></i>
			</button>
			<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title text-uppercase" id="offcanvasNavbarLabel">Navigation</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<div class="text-center mb-4">
						<a href="<?php echo get_home_url(); ?>">
							<img src="<?php echo get_home_url(); ?>/wp-content/uploads/Insignia.png" alt="<?php echo get_bloginfo('name') ?>" width="75" class="img-fluid">
							<br />
						</a>
					</div>
					<?php
					wp_nav_menu(array(
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => '',
						'container_class'   => '',
						'container_id'      => '',
						'menu_class'        => 'navbar-nav',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					)); ?>
				</div>
			</div>
		</div>
	</nav>
</header>
<!-- end mobile offcanvas nav -->
