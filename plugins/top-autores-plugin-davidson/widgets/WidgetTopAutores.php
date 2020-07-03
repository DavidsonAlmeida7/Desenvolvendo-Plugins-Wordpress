<?php

class WidgetTopAutores extends WP_Widget
{
    public function __construct()
    {
        $dado = [
            'classname' => 'WidgetTopAutores', 
            'description' => 'Um Widget que lista em ordem decrescente os autores que mais postam'
        ];

        parent::__construct('widget_top_autores', 'Top Autores', $dado);
    }

    public function form($instance)
    {
        echo "Form teste";
    }

    public function widget($args, $instance)
    {
        require(DIRETORIO_RAIZ_TOP_AUTORES.'widgets/widget_top_autores_front_end.php');
    }
}


?>