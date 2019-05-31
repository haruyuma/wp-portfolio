<?php
function my_scripts() {
  wp_enqueue_style( 'style-name', get_template_directory_uri() . 'style.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/plugins.css', array(), '1.0.0', 'all' );

  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery-3.0.0.min.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery-migrate-3.0.0.min.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/animated.headline.js', array(), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/scrollIt.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/jquery.stellar.min.js', array('jquery'), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/particles.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/validator.jss', array(), '1.0.0', true );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/validation_check.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
?>
