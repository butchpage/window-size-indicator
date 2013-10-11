<?php
	/*
	Plugin Name: Window Size Indicator
	Plugin URI:
	Description: A simple plugin to show the size of the current window in pixiles.
	Version: 0.1.0
	Author: Butch Page
	Author URI:https://github.com/butchpage
	License: GPL2
	*/

	function bpwsi_setup() {
		add_action( 'wp_footer', 'bpwsi_div_setup' );
		add_action( 'wp_enqueue_scripts', 'bpwsi_plugin_scripts_and_styles' );
	}

	add_action( 'plugins_loaded', 'bpwsi_setup' );

	function bpwsi_div_setup() {
		echo '<div id="debug"><span class="screen-width">0</span></div>';
	}

	function bpwsi_plugin_scripts_and_styles() {
		wp_enqueue_style( 'window-size-indicator-styles', plugins_url( '/css/styles.css', __FILE__ ) );
		wp_enqueue_script( 'window-size-indicator-script', plugins_url( '/js/bpwsi-scripts.js', __FILE__ ) );
	}
?>