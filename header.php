<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<title><?php wp_title(''); ?></title>

		<!-- "WPtricks Starter": The HTML-5 WordPress Template Theme by Aaron Summers -->
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/smart-menu/sm-core-css.css" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/smart-menu/sm-clean.css" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/bxslider/jquery.bxslider.css" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/js/magnific-popup/magnific-popup.css" media="screen">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		


		<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<script src="<?php bloginfo('template_directory') ?>/js/modernizr-custom.js"></script>
        
        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Chonburi&amp;subset=latin-ext" rel="stylesheet">
        
		<?php wp_head(); ?>

	</head>
	<body <?php  $classes[] = ''; body_class($classes); ?> id="top">

    <?php
    
    $header_link_1 = get_field('header_link_1');
    $header_text_1 =  get_field('header_text_1');
    $book_table_1 = get_field('book_table_1');
    $book_table_link_1 =  get_field('book_table_link_1');
    $colour_picker_header =  get_field('colour_picker_header');

    ?>

	<header id="site-header">
    <div class="container-fluid" style="background:<?php the_field('colour_picker_header','option') ?>">
	    
	
		<div class="container header" style="background:<?php the_field('colour_picker_header','option') ?>">
           
           <div class="row">
               <div class="col-md-3">
                    <h2 class="site-logo">
                        <?php
                            // Display the Custom Logo
                            the_custom_logo();
                            if (has_custom_logo()) { echo '<span class="has-logo">' . get_bloginfo('name') . '</span>'; }
                            if (!has_custom_logo()) { bloginfo('name'); }
                        ?>
                    </h2>
               </div>
            
               <div class="col-md-9"> 
                   
                    <div class="menu-s">  
                      
                       
                           <a href="tel:<?php the_field('header_link_1','option') ?>"><?php the_field('header_text_1','option') ?></a>
                        
                           <a href="<?php the_field('book_table_link_1','option') ?>"><?php the_field('book_table_1','option') ?></a>  
                       
                        
                    </div>
                     
                     
                         
                    <nav>
                    <?php 
                    /**
                     *
                     * I use smartmenu.js for all themes as this is the most dynamic and versatile plugin
                     * https://www.smartmenus.org/
                     *
                     */

                    ?>
                        <div class="hamburger">
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                        </div> <!-- /.hamburger -->

                        <?php
                            $args = array(
                                'theme_location'  => 'Header Menu',
                                'menu'            => 'header-menu',
                                'container'       => '',
                                'container_class' => '',
                                'container_id'    => '',
                                'menu_class'      => 'smartmenu list-inline text-right header-nav',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => '',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => ''
                            );
                            wp_nav_menu($args);
                        ?> 
                    </nav>
                </div>
           </div>
		</div><!-- /.container header -->
		</div>
	</header><!-- /#site-header -->

