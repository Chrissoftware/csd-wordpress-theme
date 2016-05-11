<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <a class="btn more-link" href="' . get_permalink() . '">' . __('Read more', 'sage') . '</a>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

function getLogoSRC(){
    $themeOptions = \TitanFramework::getInstance( 'csd' );
    $logoID = $themeOptions->getOption( 'logo' );
    $logoSRC = $logoID;
    if( is_numeric( $logoID ) ){
        $imageAttachment = wp_get_attachment_image_src( $logoID );
        $logoSRC = $imageAttachment[0];
    }
    
    return $logoSRC;
}

function getSiteBrand() {

    $siteBrand = get_bloginfo( 'name' );
    
    if( getLogoSRC() != '' ){
        ob_start();
        ?>
            <img src="<?= getLogoSRC(); ?>" class="brand">
        <?php
        $siteBrand = ob_get_clean();
    }
    
    echo $siteBrand;
}
