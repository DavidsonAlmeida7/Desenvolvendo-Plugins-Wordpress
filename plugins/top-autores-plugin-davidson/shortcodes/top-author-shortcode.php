<?php

//ShortCode - Código curto

function shortcode_top_autores_front_end(){

    $dados = get_users(array('orderby' => 'post_count', 'order' => 'DESC'));

    echo '<h1>TOP Autores</h1>';
    echo '<p>Uma lista com os usuários que mais postaram em toda a história desse site.</p>';

    foreach ($dados as $dado) {

        echo '<hr>';

        if (empty($dado->user_url)) {
            $dado->user_url = "Esse Usuário não tem site.";
        }

        $numero_de_posts = count_user_posts($dado->id);
        //esc_html() -> Filtra uma string limpa e com escape para saída em HTML.
        $nome_usuario = esc_html($dado->user_nicename);
        $email_usuario = esc_html($dado->user_email);

        echo "<p>" . get_avatar($dado->id) . "</P>";
        echo "<p><strong>Nome:</strong> $nome_usuario</p>";
        echo "<p><strong>E-mail:</strong> $email_usuario</p>";
        echo "<p><strong>Site:</strong> $dado->user_url</p>";
        echo "<p><strong>Número de posts:</strong> $numero_de_posts</p>";
        $link = get_author_posts_url($dado->id);
        echo "<p><a href='$link'><button class='btn btn-success'>Visualizar Posts</button></a></p>";
    }
}

function shortcode_top_autores_register(){
    add_shortcode('top-autores', 'shortcode_top_autores_front_end');
}

?>