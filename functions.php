<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
    'lib/assets.php',                                   // Scripts and stylesheets
    'lib/extras.php',                                   // Custom functions
    'lib/setup.php',                                    // Theme setup
    'lib/titles.php',                                   // Page titles
    'lib/wrapper.php',                                  // Theme wrapper class
    'lib/customizer.php',                               // Theme customizer
    'lib/walkers/wp_bootstrap_navwalker.php',           // Bootstra 3.x Walker Navigation
    'lib/titanframework-checker.php',                   // Titan Framework Checker
    'lib/theme-options.php',                            // Theme Options
    'lib/walkers/class-wp-bootstrap-comment-walker.php' // Comments Walker
];

foreach ($sage_includes as $file) {
    if (!$filepath = locate_template($file)) {
        trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
    }

    require_once $filepath;
}
unset($file, $filepath);
