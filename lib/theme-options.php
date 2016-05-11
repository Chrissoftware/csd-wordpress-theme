<?php

namespace ThemeOptions;

add_action( 'tf_create_options', __NAMESPACE__ . '\\create_theme_options' );
function create_theme_options() {
    $titanFramework = \TitanFramework::getInstance( 'csd' );
    
    $headerCustomizer = $titanFramework->createThemeCustomizerSection([
        'name' => __( 'Header Options','csd' )
    ]);
    
    $headerCustomizer->createOption([
        'name' => __( 'Show Top Bar','csd' ),
        'id' => 'enable_top_bar',
        'type' => 'enable',
        'enable' => 'Show',
        'disable' => 'Hide',
        'default' => true
    ]);
    
    $headerCustomizer->createOption([
        'name' => __( 'Breadcrumbs','csd' ),
        'type' => 'enable',
        'default' => false,
        'desc' => 'Show breadcrumb navigation on the site',
        'id' => 'show_breadcrumbs',
        'enable' => __( 'Show','csd' ),
        'disable' => __( 'Hide', 'csd' )
    ]);
    
    $navigationCustomizer = $titanFramework->createThemeCustomizerSection([
        'name' => __( 'Navigation Options','csd' ),
        'panel' => __( 'Theme Options','csd' )
    ]);
    
    $navigationCustomizer->createOption([
        'name' => __( 'Post Navigation','csd' ),
        'type' => 'enable',
        'default' => false,
        'desc' => 'use numbered post navigation',
        'id' => 'use_numbered_navigation',
        'enable' => __( 'Yes','csd' ),
        'disable' => __( 'No', 'csd' )
    ]);
    
}