<?php
    
/**
 * FRONT-END
*/

$smid_opcoes = get_option('smid_op_icons');
//print_r($smid_opcoes);

?>
<?php if (!$smid_opcoes['facebook_esconder'] || !$smid_opcoes['twitter_esconder'] || !$smid_opcoes['youtube_esconder']): ?>

    <style>
        .conteudo .icones img {
            width: 50px;
            height: 50px;
            padding: 5px;
        }
    </style>

    <div class="conteudo">
        Me encontre nas redes sociais:
        <hr>
        <div class="icones">
        <?php if (!$smid_opcoes['facebook_esconder']): ?>
            <a href="<?php echo $smid_opcoes['facebook_perfil']; ?>"><img src="<?php echo plugin_dir_url(__FILE__).'img/facebook.png';?>"></a>
        <?php endif; ?>

        <?php if (!$smid_opcoes['twitter_esconder']): ?>
            <a href="<?php echo $smid_opcoes['twitter_perfil']; ?>"><img src="<?php echo plugin_dir_url(__FILE__).'img/twitter.png';?>"></a>
        <?php endif; ?>

        <?php if (!$smid_opcoes['youtube_esconder']): ?>
            <a href="<?php echo $smid_opcoes['youtube_perfil']; ?>"><img src="<?php echo plugin_dir_url(__FILE__).'img/youtube.png';?>"></a>
        <?php endif; ?>
        </div>
    </div>

<?php endif; ?>