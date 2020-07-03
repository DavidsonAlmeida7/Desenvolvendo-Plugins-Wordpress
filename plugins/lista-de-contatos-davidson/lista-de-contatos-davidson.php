<?php

/*
 
    Plugin Name: Lista de Contatos - Davidson Almeida
    Author: Davidson Almeida
    Description: Um plugin para uma lista de contatos.
    Version: 2.0
    Author URI: https://github.com/DavidsonAlmeida7

*/

//Segurança

if (!defined('ABSPATH')) {
    exit('Acesso Negado!');
}

//retira do menu o icone campos personalizados

define('ACF_LITE', true);

//Requisição

require_once(plugin_dir_path(__FILE__).'functions.php');
require_once(plugin_dir_path(__FILE__).'dependencias/advanced-custom-fields/acf.php');

?>