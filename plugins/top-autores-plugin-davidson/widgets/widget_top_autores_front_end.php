<div style="border: 1px solid #eee; margin-bottom: 20px; overflow: hidden; padding: 10px;">
    <h4>Top Autores</h4>
    <table class="table">
        <tr>
            <th>Nome: </th>
            <th>Posts: </th>
        </tr>

    <?php $dados = get_users(['orderby' => 'post_count', 'order' => 'DESC']);

    foreach($dados as $dado) : ?>

        <tr>
            <td><a href="<?php  echo get_author_posts_url($dado->id);?>"><?php echo $dado->user_nicename; ?><a></td>
            <td><?php echo count_user_posts($dado->id); ?></td>
        </tr>

    <?php endforeach; ?>

    </table>
</div>