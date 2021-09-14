<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>The Pizza</title>
	<?php wp_head(); ?>
</head>
<body>
	<header class="site-header">
		<div class="container">
			<div class="logo">
				<a href="<?php echo esc_url( home_url('/') );?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="" class="logoimage"/>
				</a>
			</div> <!--- logo ------>
			<div class="header-info">
				<div class="socials">
					<?php
						$args = array(
							'theme_location'		=> 'social-menu',
							'container'				=> 'nav',
							'container_class'		=> 'socials',
							'container_id'			=> 'socials',
							'link_before'			=> '<span class="sr-text">',
							'link_after'			=> '</span>'
						);
						wp_nav_menu($args);
					?>
				</div> <!------socials---->
				<div class="address">
					<p>75/2, Satter biswas road, sonadanga, Khulna</p>
					<p>Phone Number: +880 1521 312761</p>
				</div>
			</div> <!---- Header info ----->
		</div> <!-----Container ----->
	</header>
	
	<div class="main-menu">
		<div class="navigation">
			<?php
				$args = array(
					'theme_location'		=> 'header-menu',
					'container'				=> 'nav',
					'container_class'		=> 'site-nav'
				);
				wp_nav_menu($args);
			?>
		</div>
	</div> 

