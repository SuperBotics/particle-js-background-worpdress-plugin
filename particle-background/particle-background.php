<?php
/*
Plugin Name: Particle JS Background
Plugin URI: https://superbotics.com/
Description: helps to insert particle js background in the site
Version: 1.0.0
Author: SuperBotics
Author URI: https://superbotics.com/
License: GPLv2 or later
Text Domain: particle-js
*/

define( 'PARTICLE_BACKGROUND_PLUGIN_DIRECTORY', plugin_dir_path( __FILE__ ) );
define( 'PARTICLE_BACKGROUND_PLUGIN_URL', plugins_url( '', __FILE__) );

function particle_background_enqueue_scripts() {
    wp_enqueue_style( 'particle-background-css',  PARTICLE_BACKGROUND_PLUGIN_URL . '/particle-background.css', array(), filemtime(PARTICLE_BACKGROUND_PLUGIN_DIRECTORY . '/particle-background.css') );
    wp_enqueue_script( 'particle-js', PARTICLE_BACKGROUND_PLUGIN_URL . '/particle.min.js', array('jquery'), filemtime(PARTICLE_BACKGROUND_PLUGIN_DIRECTORY . '/particle.min.js'), true );
    wp_enqueue_script( 'particle-background-js', PARTICLE_BACKGROUND_PLUGIN_URL . '/particle-background.js', array('particle-js'), filemtime(PARTICLE_BACKGROUND_PLUGIN_DIRECTORY . '/particle-background.js'), true );
    
}
add_action( 'wp_enqueue_scripts', 'particle_background_enqueue_scripts' );