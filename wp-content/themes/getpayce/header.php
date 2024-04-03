<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="description" content="" />
    <meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">

	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174155526-2"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-174155526-2');
	</script> -->
</head>

<body <?php body_class(); ?>>
	<header class="screen">
        <div class="hamburger">
            <svg width="30" height="20" viewBox="0 0 30 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 20H30V16.6667H0V20ZM0 11.6667H30V8.33333H0V11.6667ZM0 0V3.33333H30V0H0Z" fill="#1C2228"/>
            </svg>
        </div>
        <?php the_custom_logo(); ?>
        <nav id="header-nav">
            <?
            	wp_nav_menu( [
					'theme_location'  => '',
					'menu'            => 'Header Menu', 
					'container'       => '', 
					'container_class' => '', 
					'container_id'    => '',
					'menu_class'      => 'top-menu', 
					'menu_id'         => 'top-menu',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				] );
        	?>
            <a href="https://getpayce.com/#schedule-demo" class="link--btn btn--arrow">
                Schedule a Demo
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                    <path class="cls-1" d="M8,0,6.59,1.41,12.17,7H0V9H12.17L6.59,14.59,8,16l8-8Z"/>
                </svg>
            </a>
        </nav>
    </header>
