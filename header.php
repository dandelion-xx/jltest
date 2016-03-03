<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<title><?php wp_title( ' | ', true, 'right' ); ?></title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="viewport" content="width = device-width, initial-scale = 1.0, minimum-scale = 1.0" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php get_site_url()?>/wp-content/themes/history/img/icon.png">
	<link rel="apple-touch-startup-image" href="<?php get_site_url()?>/wp-content/themes/history/img/startup.png" />

    <script type="text/javascript" src="<?php get_site_url()?>/wp-content/themes/ontariocourts/js/add2home/add2home.js"></script>
<link rel="stylesheet" href="<?php get_site_url()?>/wp-content/themes/ontariocourts/js/add2home/add2home.css">
    <script type="text/javascript">
var addToHomeConfig = {
	touchIcon: true,
};
</script>
		<?php wptouch_head(); ?>
	</head>
	
	<!-- Help speed up display of the page -->
	<?php flush(); ?>
	
	<body <?php body_class( wptouch_get_body_classes() ); ?>>
		
		<?php do_action( 'wptouch_preview' ); ?>
		
		<?php do_action( 'wptouch_body_top' ); ?>
		
		<?php get_template_part( 'header-bottom' ); ?>

		<?php do_action( 'wptouch_body_top_second' ); ?>