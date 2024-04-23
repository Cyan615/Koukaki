<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="navBar main-navigation">
            <h3 class="navBar--site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>  
            </h3>
            <div class="navBar__burgerBtn" onclick="menuToggle()" aria-label="toggle curtain navigation">
                    <span class="navBar__burgerBtn--line l1"></span>
                    <span class="navBar__burgerBtn--line l2"></span>
                    <span class="navBar__burgerBtn--line l3"></span>
            </div>
            <article id="burger" class="burger " aria-controls="primary-menu" >
                
                <div class="flowers-right"></div>
                <div class="flowers-left" ></div>
                
                <img class="burger__logo" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">

                <ul class="burger__list">
                    <li class="burger__list--items"></li>
                    <li class="burger__list--items">
                        <a class="item-close-burger" onclick="menuToggle()" href="#story">Histoire</a></li>
                    <li class="burger__list--items">
                        <a class="item-close-burger" onclick="menuToggle()" href="#characters">Personnages</a></li>
                    <li class="burger__list--items">
                        <a class="item-close-burger" onclick="menuToggle()" href="#place">Lieu</a></li>
                    <li class="burger__list--items">
                        <a class="item-close-burger" onclick="menuToggle()" href="#studio">Studio Koukaki</a></li>
                </ul>
                <span>Studio Koukaki</span>
            </article>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
