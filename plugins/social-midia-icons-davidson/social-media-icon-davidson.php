<?php

/*
 
    Plugin Name: Social media Icons - Davidson Almeida
    Author: Davidson Almeida
    Description: Um plugin que exibe os ícones de rede social no footer de artigos.
    Version: 1.0
    Author URI: https://github.com/DavidsonAlmeida7

*/

//Medidas de segurança

if (!defined('ABSPATH')) {
    exit('Acesso negado');
}

//Definição da constante do diretório absoluto

define('DIRETORIO_ABSOLUTO_DO_PLUGIN_DAVIDSON', plugin_dir_path(__FILE__));

//Includes

require_once(DIRETORIO_ABSOLUTO_DO_PLUGIN_DAVIDSON.'includes/social-media-icon-davidson-conteudo.php');
require_once(DIRETORIO_ABSOLUTO_DO_PLUGIN_DAVIDSON.'includes/social-media-icon-davidson-opcoes.php');



?>