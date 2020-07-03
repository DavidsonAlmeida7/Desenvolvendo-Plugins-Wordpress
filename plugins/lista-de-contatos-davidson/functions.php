<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: Contatos.
	 */

	$labels = [
		"name" => __( "Contatos", "twentyseventeen" ),
		"singular_name" => __( "Contato", "twentyseventeen" ),
		"menu_name" => __( "Meus contatos", "twentyseventeen" ),
		"all_items" => __( "Todos os contatos", "twentyseventeen" ),
		"add_new" => __( "Novo Contato", "twentyseventeen" ),
		"add_new_item" => __( "Novo Contato", "twentyseventeen" ),
		"edit_item" => __( "Editar Contato", "twentyseventeen" ),
		"new_item" => __( "Novo Contato", "twentyseventeen" ),
		"view_item" => __( "Ver Contato", "twentyseventeen" ),
		"view_items" => __( "Ver Contatos", "twentyseventeen" ),
		"search_items" => __( "Pesquisar Contatos", "twentyseventeen" ),
		"not_found" => __( "Nenhum Contato encontrado", "twentyseventeen" ),
		"not_found_in_trash" => __( "Nenhum Contato encontrado na lixeira", "twentyseventeen" ),
		"parent" => __( "Contato ascendente", "twentyseventeen" ),
		"parent_item_colon" => __( "Contato ascendente", "twentyseventeen" ),
	];

	$args = [
		"label" => __( "Contatos", "twentyseventeen" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "contatos", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-users",
		"supports" => [ "title" ],
	];

	register_post_type( "contatos", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


?>