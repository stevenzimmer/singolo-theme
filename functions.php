<?php

function singolo_scripts() {


	wp_enqueue_style( 'singolo-style', get_template_directory_uri() . '/build/styles/style.min.css' , array(), null );
	wp_enqueue_script( 'singolo_bundle', get_template_directory_uri() . '/build/scripts/scripts.js', array(), '20160816', true );

}

add_action( 'wp_enqueue_scripts', 'singolo_scripts' );

?>