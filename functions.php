<?php

function singolo_scripts() {


	wp_enqueue_style( 'singolo-style', get_template_directory_uri() . '/build/style.css' , array(), null );
	wp_enqueue_script( 'singolo_bundle', get_template_directory_uri() . '/build/bundle.js', array(), '20160816', true );

}

add_action( 'wp_enqueue_scripts', 'singolo_scripts' );

?>