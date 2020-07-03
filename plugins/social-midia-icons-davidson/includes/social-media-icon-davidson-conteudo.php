<?php 

function plugin_registrando_conteudo($post) {
    echo $post;
    require_once(DIRETORIO_ABSOLUTO_DO_PLUGIN_DAVIDSON.'includes/templates/conteudo.php');
}

add_filter('the_content', 'plugin_registrando_conteudo');