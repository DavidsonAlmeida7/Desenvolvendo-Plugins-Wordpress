<?php

/**
 * BACK-END
*/

$smid_opcoes = get_option('smid_op_icons');
print_r($smid_opcoes);

?>

<div class="wrap">
    <h1>Opções Plugin Social Media Icons - Davidson Almeida</h1>
    <hr>
    <form action="options.php" method="post">
        <?php settings_fields('smid_opcao'); ?>

        <label>Facebook: </label><br>
        <input type="url" name="smid_op_icons[facebook_perfil]" id="smid_op_icons[facebook_perfil]" value="<?php echo $smid_opcoes['facebook_perfil']?>"><br>
        Esconder: <input type='checkbox' name='smid_op_icons[facebook_esconder]' id='smid_op_icons[facebook_esconder]' value="1" <?php checked(1, $smid_opcoes['facebook_esconder']); ?> ><br>

        <label>Twitter: </label><br>
        <input type="url" name="smid_op_icons[twitter_perfil]" id="smid_op_icons[twitter_perfil]" value="<?php echo $smid_opcoes['twitter_perfil']?>"><br>
        Esconder: <input type='checkbox' name='smid_op_icons[twitter_esconder]' id='smid_op_icons[twitter_esconder]' value="1" <?php checked(1, $smid_opcoes['twitter_esconder']); ?>><br>

        <label>YouTube: </label><br>
        <input type="url" name="smid_op_icons[youtube_perfil]" id="smid_op_icons[youtube_perfil]" value="<?php echo $smid_opcoes['youtube_perfil']?>"><br>
        Esconder: <input type='checkbox' name='smid_op_icons[youtube_esconder]' id='smid_op_icons[youtube_esconder]' value="1" <?php checked(1, $smid_opcoes['youtube_esconder']); ?>><br>

        <input class="btn btn-primary" type="submit" name="submit" value="Salvar">
    </form>
</div>