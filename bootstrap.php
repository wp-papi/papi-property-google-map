<?php

/*
 * Plugin Name: Papi: Property Google Map
 * Description: Google map property where you can point out address
 * Version: 1.0.0
 * Author: Fredrik Forsmo
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Include Property Google Map.
 *
 * @since 1.0.0
 */

function include_property_googlemap() {
	include_once( 'class-property-googlemap.php' );
}

add_action( 'papi/include_properties', 'include_property_googlemap' );
