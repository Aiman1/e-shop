<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test_primeur
 */
  
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'primeur' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$primeur_description = get_bloginfo( 'description', 'display' );
			if ( $primeur_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $primeur_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
		<!--
		<nav id="site-navigation" class="main-navigation margin-constraint main-navigation" role='navigation'>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //esc_html_e( 'Primary Menu', 'primeur' ); ?></button>
			<?php/*
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'nav navbar-nav',
					'walker' => new Primeur_Walker_Nav_Menu(),
				)
			);*/
			?>
		</nav>
		-->

		<nav id="site-navigation" class="margin-constraint main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'primeur' ); ?></button>
			<div class="useful-width f-container-grow">
				<div class="f-item" style="margin: 0px 10px">
					<div class="nav-vertical-menu nav-categories" style="position:relative">
						<span href="#" class="active">Categories</span>
						<?php	
						wp_nav_menu(
							array(
							'theme_location' => 'menu-cat',
							'menu_id'        => 'categories-menu',
							'menu_class' => 'nav-categories-menu',
							'walker' => new Primeur_Walker_Nav_Menu(),
							)
						);
						?>
						<!--
						<ul class="nav-categories-menu" style="">
							<li><a href="#">Link 0</a></li>
							<li class="nav-has-sub-menu nav-has-sub-menu-left"><a href="#">Link 1<span
										class="rotate-left"></span></a>
								<ul class="sub-menu_menu sub-menu_menu-left">
									<li><a href="#">CSS<span class="available">12 Available</span></a></li>
								</ul>
							</li>
							<li><a href="#">Link 2</a></li>
							<li class="nav-has-sub-menu nav-has-sub-menu-left"><a href="#">Link 3<span
										class="rotate-left"></span></a>
								<div class="sub-menu_menu sub-menu_menu-left m-menu">
									<div class="sub-el">
										<div class="sub-el">
											<a href="#">
												<img src="../OneTech/images/blog_4.jpg" />
												<h3>Toast</h3>
												<p> this a descriptpion</p>
											</a>
										</div>
									</div>
								</div>
							</li>
							<li><a href="#">Link 4</a></li>
						</ul>
						-->
					</div>
				</div>
				<div class="f-item f-grow">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class' => 'nav navbar-nav',
							'walker' => new Primeur_Walker_Nav_Menu(),
						)
					);
					?>
					<!--
					<ul class="nav-top-menu">
						<li class="nav-has-sub-menu"><a href="#">Home</a></li>
						<li class="nav-has-sub-menu"><a href="#">Services</a> <i class="rotate"></i>
							<div class="sub-menu_menu">
								<div class="sub-el">
									<div class="sub-el">
										<a href="#">
											<img src="../OneTech/images/blog_4.jpg" />
											<h3>Toast</h3>
											<p> this a descriptpion</p>
										</a>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-has-sub-menu"><a href="#">Tutorials</a><i class="rotate"></i>
							<ul class="sub-menu_menu">
								<li><a href="#">CSS <span class="available">12 Available</span></a></li>
							</ul>
						</li>
					</ul>
					-->
				</div>
			</div>
		</nav><!-- #site-navigation -->


	</header><!-- #masthead -->
