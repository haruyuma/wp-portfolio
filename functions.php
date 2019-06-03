<?php
function my_scripts() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array() );
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/plugins.css', array() );
	
  wp_deregister_script('jquery'); 
  wp_enqueue_script( 'jquery-3.0.0.min', get_template_directory_uri() . '/js/jquery-3.0.0.min.js', array() );
  wp_enqueue_script( 'jquery-migrate-3.0.0.min', get_template_directory_uri() . '/js/jquery-migrate-3.0.0.min.js', array() );
  wp_enqueue_script( 'popper.min', get_template_directory_uri() . '/js/popper.min.js', array() );
  wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array() );
  wp_enqueue_script( 'animated.headline', get_template_directory_uri() . '/js/animated.headline.js', array() );
  wp_enqueue_script( 'scrollIt.min', get_template_directory_uri() . '/js/scrollIt.min.js', array() );
  wp_enqueue_script( 'jquery.waypoints.min', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array() );
  wp_enqueue_script( 'jquery.counterup.min', get_template_directory_uri() . '/js/jquery.counterup.min.js', array() );
  wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/js/owl.carousel.min.js', array() );
  wp_enqueue_script( 'jquery.magnific-popup.min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array() );
  wp_enqueue_script( 'jquery.stellar.min', get_template_directory_uri() . '/js/jquery.stellar.min.js', array() );
  wp_enqueue_script( 'particles.min', get_template_directory_uri() . '/js/particles.min.js', array() );
  wp_enqueue_script( 'bubble', get_template_directory_uri() . '/js/bubble.js', array() );
  wp_enqueue_script( 'isotope.pkgd.min', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array() );
  wp_enqueue_script( 'validator', get_template_directory_uri() . '/js/validator.js', array() );
  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array() );
  wp_enqueue_script( 'validation_check', get_template_directory_uri() . '/js/validation_check.js', array() );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

?>
