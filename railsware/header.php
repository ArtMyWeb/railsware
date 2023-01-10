<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package railsware
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="masthead" class="header">
        <a class="logo-wrapper" href="<?php echo get_site_url() ?>">
		<div class="logo-sign">

            <?php echo get_site_logo();  	 ?>
			</div>	

		</a>
<!--         <div class="breadcrumbs"> <a class="breadcrumbs-link" href="/">Railsware</a> <span class="arrow"><svg
                    xmlns="http://www.w3.org/2000/svg" width="12" height="7" viewBox="0.039 -0.992 12 7">
                    <path fill="currentColor" d="M8.132 5.5V3.15H.078V1.917h8.054L8.125-.5l3.525 3.016L8.132 5.5z">
                    </path>
                </svg></span> Services </div> -->
		<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
			<div class="hamburger js-hamburger">
				<div class="cheese"></div>
				<div class="salad"></div>
				<div class="meet"></div>
			</div>
		<?php endif; ?>
        <a href="/contact/" class="hire-button"><?php echo __("Hire Us", 'railsware') ?></a>
    </header><!-- #masthead -->
	<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
    <nav id="site-navigation" class="navigation js-menu">
        <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'items_wrap'        => '<div id="%1$s" data-bond class="navigation-container">%3$s</div>',
					'walker'=> new RS_Walker_Nav_Menu()
				)
			);
			?>
</nav><!-- #site-navigation -->
	<?php endif; ?>
    <div id="page" class="site blog-header">