<?php

/*
 
    Plugin Name: Hello World! Created by: Davidson Almeida
    Author: Davidson Almeida
    Description: Um plugin que vai printar a mensagem Hello World na sua tela de login.
    Version: 1.0.0
    Author URI: https://github.com/DavidsonAlmeida7

*/

function wp_printando_hello_world_na_tela_de_login(){
    echo '<h1>Hello World! Created by: Davidson Almeida</h1>';
    echo 
    '<style>
        body {
            background-color: black !important;
        }
        h1 {
            color: white !important;
        }
    </style>';
}

//Diferença entre action e filter
//add_action('quando', 'funcao');
//add_filter('aonde', 'funcao');

//add_action('init', 'wp_printando_hello_world_na_tela_de_login');
add_action('login_head', 'wp_printando_hello_world_na_tela_de_login');

function wp_modificando_o_texto_do_footer_admin(){
    echo '<h4>Desenvolvendo Plugins para Wordpress</h4>';
    //echo '<img src="https://google.com/google.jpg"/>';
}

add_filter('admin_footer_text', 'wp_modificando_o_texto_do_footer_admin');
add_filter('the_content', 'wp_modificando_o_texto_do_footer_admin');

?>
