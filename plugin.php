<?php
/*
Plugin Name: Mock Plugin
Description: A simple mock WordPress plugin for testing purposes.
Version: 1.0.0
Author: Your Name
*/

add_action( 'init', function() {
} );

add_action( 'wp_head', function() {
    echo '<script>console.log("hello world");</script>';
} );
/**/
