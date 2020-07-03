<?php 

function pagina_de_opcoes_frontend(){
    require_once(DIRETORIO_ABSOLUTO_DO_PLUGIN_DAVIDSON.'includes/templates/opcao.php');
}

function pagina_de_opcoes_registro(){
    add_options_page('SMID Opções', 'SMID Opções', 'manage_options', 'smid', 'pagina_de_opcoes_frontend');
}

add_action('admin_menu', 'pagina_de_opcoes_registro');

function carregando_settings_api(){
    register_setting('smid_opcao', 'smid_op_icons');
}

add_action('admin_init', 'carregando_settings_api');




?>