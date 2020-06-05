<?php
/**
 * Plugin Name: prueba_GEM
  * Plugin URI: https://wordpress.com/block-editor/page/pruebatecnicagem.wordpress.com/6
 * Description: Display content using a shortcode to insert in a page or post
 * Version: 0.1
* Text Domain: printEmailPluginPrueba
 * Author: Manuel Londoño.
 *Author URI: https://wordpress.com/block-editor/page/pruebatecnicagem.wordpress.com/6
 */
 function printEmail($atts) {
	$Content .= '<h1>malondonoc@gmail.com</h1>';

    return $Content;
}
add_shortcode('h1', 'printEmail');
