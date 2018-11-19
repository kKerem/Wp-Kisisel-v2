<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<meta name="msvalidate.01" content="C36141C3C23DDD5A1F87A2BBA9AD2E0B" />
		<link href="//www.google-analytics.com" rel="dns-prefetch">
				<link rel="apple-touch-icon" ref="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
				<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
				<link rel="manifest" href="/manifest.json">
				<meta name="msapplication-TileColor" content="#ffffff">
				<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
				<meta name="theme-color" content="#ffffff">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<?php wp_head(); ?>
		<script>
        </script>

	</head>
	<body <?php body_class(); ?>>

		<nav class="navbar navbar-expand-lg navbar-light bg-transparent small mb-4 py-0">
        	<div class="container py-3">
				<a href="<?php echo home_url(); ?>" class="navbar-brand logo bg-primary d-inline-block pb-2 pl-2 pr-2 rounded">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logov2.png" alt="Logo" class="logo-img">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          		    <span class="navbar-toggler-icon"></span>
          		</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php html5blank_nav(); ?>
					<form class="form-inline m-0 shadow rounded ml-auto" action="<?php esc_url( home_url( '/' ) ); ?>" role="search" method="get" >
						<div class="input-group w-100">
							<input type="search" class="form-control-sm border-0 w-auto" placeholder="Ara...<?php esc_attr_x( 'Search &hellip;', 'placeholder' ); ?>" value="<?php get_search_query(); ?>" name="s" />
							<button type="submit" class="form-control border-0 pr-3 w-auto d-inline-block text-muted"><i class="fas fa-search"></i></button>
						</div>
					</form>
				</div>
			</div>
  	  	</nav>

	<?php custom_breadcrumbs(); ?>
