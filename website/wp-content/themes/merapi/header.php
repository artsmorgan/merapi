<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/hover.min.css">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<link rel="stylesheet" type="text/css" href="engine1/style.css" />

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>        

	</head>
	<?php 
		$current_page = $_SERVER['REQUEST_URI'];
		/* set global to play around the other pages */
		global $isHomePage;
		$isHomePage = $current_page == '/';
	?>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
					<div class="sub-header">
						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/merapi.min.png" alt="Logo" class="logo-img">
							</a>
						</div>
						<!-- /logo -->
						<div class="header-phone">
							<p><a href="mailto:info@merapicr.com" class="btn"><i class="fa fa-envelope"></i> info@merapicr.com</a></p>
							<p><i class="fa fa-phone-square"></i> +506 - 2222-2222</p>
						</div>
					</div>	
					
					<div class="nav-wrapper">
						<!-- nav -->
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						<div class="banner-main">
							<div id="wowslider-container1">
								<div class="ws_images">
									<ul>
										<li>
												<img src="data1/images/bg1.jpg" alt="wow slider" title="Merapi Soluciones " id="wows1_0"/>
												Merapi todo en soluciones
										</li>
										<li>
											<img src="data1/images/02.jpg" alt="Soluciones Merapi" title="Soluciones Merapi" id="wows1_1"/>
											Tenemos las mejores soluciones
										</li>
									</ul>
								</div>
								<div class="ws_bullets">
									<div>
										<a href="#" title="Merapi Soluciones ">
											<span>
												<img src="data1/tooltips/bg1.jpg" alt="Merapi Soluciones "/>1
											</span>
										</a>
										<a href="#" title="Soluciones Merapi">
											<span>
												<img src="data1/tooltips/02.jpg" alt="Soluciones Merapi"/>2
											</span>
										</a>
								</div>
							</div>
						</div>
						<div class="ws_shadow"></div>
						<script type="text/javascript" src="engine1/wowslider.js"></script>
						<script type="text/javascript" src="engine1/script.js"></script>	
						<!-- /nav -->
					</div>

			</header>
			<!-- /header -->
