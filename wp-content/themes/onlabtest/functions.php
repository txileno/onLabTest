<?php


function onlab_test_styles(){
	wp_enqueue_style('onlab_main_min_styles',get_stylesheet_directory_uri().'/style.min.css',NULL,microtime());
	wp_enqueue_style('font_awesome','https://use.fontawesome.com/releases/v5.8.1/css/all.css');
	wp_enqueue_style('bootstrap_css','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
}

function onlab_test_scripts(){
	wp_enqueue_script('onlab_main_scripts', get_template_directory_uri().'/js/scripts.min.js',NULL, microtime(), true);
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js',NULL, microtime(), true);
	wp_enqueue_script('popper_min', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',NULL, microtime(), true);
	wp_enqueue_script('bootstrap_min', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',NULL, microtime(), true);
}

function onlab_test_features(){
	register_nav_menu('headerMenuLocation', 'Header Menu');
    add_theme_support('title-tag');
}


function add_meta_tags(){
	echo '<meta charset="utf-8">';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
}


function onlab_test_widgets() {
	register_sidebar(array(
			'name'          => 'Footer Top',
			'description'   => 'Add widgets here to appear in the top of the footer',
			'before_widget' => '<section id="%1$s" class="widget align-center %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(array(
			'name'          => 'Footer Column 1',
			'description'   => 'Add widgets here to appear in this footer column -disabled-',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(array(
			'name'          => 'Footer Column 2',
			'description'   => 'Add widgets here to appear in this footer column -disabled-',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(array(
			'name'          => 'Footer Column 3',
			'description'   => 'Add widgets here to appear in this footer column',
			'before_widget' => '<section id="%1$s" class="widget nav-list %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar( array(
		'name'          => 'Footer Column 4',
		'id'            => 'footerColumn4',
		'description'   => 'Add widgets here to appear in this footer column -disabled-',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}


add_action( 'widgets_init', 'onlab_test_widgets' );
add_action('wp_enqueue_scripts','onlab_test_styles');
add_action('wp_enqueue_scripts','onlab_test_scripts');
add_action('after_setup_theme','onlab_test_features');
add_action('wp_head','add_meta_tags');



