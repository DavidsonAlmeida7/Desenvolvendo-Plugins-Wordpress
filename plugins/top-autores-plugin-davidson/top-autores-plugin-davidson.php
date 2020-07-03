<?php

/*
 
    Plugin Name: Top Autores!
    Author: Davidson Almeida
    Description: Gera uma lista com autores que mais postam, através de um shortcode.
    Version: 1.0 Beta
    Author URI: https://github.com/DavidsonAlmeida7

*/

define('DIRETORIO_RAIZ_TOP_AUTORES', plugin_dir_path(__FILE__));

require_once(DIRETORIO_RAIZ_TOP_AUTORES.'shortcodes/top-author-shortcode.php');
require_once(DIRETORIO_RAIZ_TOP_AUTORES.'widgets/WidgetTopAutores.php');

function registrar_widgets_do_plugin_top_autores(){
    register_widget('WidgetTopAutores');
}

add_action('init', 'shortcode_top_autores_register');
add_action('widgets_init', 'registrar_widgets_do_plugin_top_autores');

?>