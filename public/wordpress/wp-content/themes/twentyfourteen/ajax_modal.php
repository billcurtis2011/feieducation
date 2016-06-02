<?php
/**
 * Template Name: Ajax - ModalBox
 */
 ?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
 <?php
	// posts start
	if( have_posts() ) : 
		while( have_posts() ) : the_post();
		?>
			 <div class="container">
			  <?php the_content(); ?>
			 </div>
		<?php endwhile; // posts end ?>
		<?php endif; ?>

 <?php ?>
 <?php wp_footer(); ?>