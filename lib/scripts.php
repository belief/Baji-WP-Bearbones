<?php
/**
 * Scripts and stylesheets
**/

function application_scripts() {
   
  wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/stylesheets/vendor/normalize.css', false, null);
  wp_enqueue_style('foundation', get_template_directory_uri() . '/assets/stylesheets/vendor/foundation.min.css', false, null);
  wp_enqueue_style('stylesheet', get_template_directory_uri() . '/assets/stylesheets/application.css', false, null);

  // jQuery is loaded in header.php using the same method from HTML5 Boilerplate:
  // Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline
  // It's kept in the header instead of footer to avoid conflicts with plugins.
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '', '', '1.8.2', false);
  }

  wp_register_script('modernizr', get_template_directory_uri() . '/assets/javascripts/vendor/custom.modernizr.js', false, null, true);
  wp_register_script('jquery_local', get_template_directory_uri() . '/assets/javascripts/vendor/jquery.js', false, null, false);
  wp_register_script('foundation', get_template_directory_uri() . '/assets/javascripts/vendor/foundation/foundation.min.js', false, null, true);
  wp_register_script('tooltip', get_template_directory_uri() . '/assets/javascripts/vendor/jquery.tooltipster.min.js', false, null, true);
  wp_register_script('svgeezy', get_template_directory_uri() . '/assets/javascripts/vendor/svgeezy.js', false, null, true);
  wp_register_script('javascript', get_template_directory_uri() . '/assets/javascripts/main.js', false, null, true);
  
  wp_enqueue_script('modernizr');
  wp_enqueue_script('jquery_local');
  wp_enqueue_script('foundation');
  wp_enqueue_script('tooltip');
  wp_enqueue_script('svgeezy');
  wp_enqueue_script('javascript');
}

add_action('wp_enqueue_scripts', 'application_scripts');