<?php

/*
 
    Plugin Name: Github Api Plugin - Davidson Almeida
    Author: Davidson Almeida
    Description: Um plugin que lista repositórios de um usuário em um widget.
    Version: 1.0
    Author URI: https://github.com/DavidsonAlmeida7

*/

//Segurança

if (!defined('ABSPATH')) {
    exit("Acesso Negado!");
}

//Require

require_once(plugin_dir_path(__FILE__).'GithubWidget.php');

//Widget

function gaps_registrar_widget(){
    register_widget('GithubWidget');
}

add_action('widgets_init','gaps_registrar_widget');

?>