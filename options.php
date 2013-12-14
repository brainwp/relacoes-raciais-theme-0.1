<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order,number=-1');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	$options[] = array(
		'name' => 'Home',
		'type' => 'heading');

	$options[] = array(
		'name' => 'Bloco Cole��o',
		'desc' => '',
		'type' => 'info');

	$options[] = array(
		'name' => '',
		'desc' => 'Exibir o Bloco Cole��o?',
		'id' => 'exibir_colecao_checkbox',
		'std' => '1',
		'type' => 'checkbox');

	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);

	$options[] = array(
		'name' => 'Descri��o da Cole��o na Home',
		'desc' => 'Essa descri��o aparece no segundo bloco de informa��es na Home como introdu��o ao texto da Cole��o.',
		'id' => 'colecao_home',
		'type' => 'editor',
		'settings' => $wp_editor_settings );

	$options[] = array(
		'name' => 'Logo da Cole��o Rela��es Raciais',
		'desc' => 'Fa�a o upload do logo da Cole��o Rela��es Raciais',
		'id' => 'logo_colecao_upload',
		'type' => 'upload');

	$options[] = array(
		'name' => 'Link do logo de Educa��o e Rela��es Raciais',
		'desc' => 'Selecione o link para o logo da Educa��o e Educa��es Raciais.',
		'id' => 'link_colecao',
		'type' => 'select',
		'options' => $options_pages);
	
	$options[] = array(
		'name' => 'Capa do Indiques',
		'desc' => 'Fa�a o upload da capa do Indiques. As medidas devem obedecer a seguinte propor��o: 200x270px',
		'id' => 'capa_indiques_upload',
		'type' => 'upload');

	$options[] = array(
		'name' => 'Link da capa do Indiques',
		'desc' => 'Selecione o link para a capa do Indiques.',
		'id' => 'link_cartazes',
		'type' => 'select',
		'options' => $options_pages);

	$options[] = array(
		'name' => 'Bloco Cartazes',
		'desc' => '',
		'type' => 'info');

	$options[] = array(
		'name' => '',
		'desc' => 'Exibir o Bloco Cartazes?',
		'id' => 'exibir_cartazes_checkbox',
		'std' => '1',
		'type' => 'checkbox');

	$options[] = array(
		'name' => 'Link para P�gina dos Cartazes',
		'desc' => 'Selecione o link para a p�gina dos Cartazes.',
		'id' => 'link_cartazes',
		'type' => 'select',
		'options' => $options_pages);
	
	$options[] = array(
		'name' => 'Descri��o dos Cartazes',
		'desc' => 'Essa descri��o aparece no terceiro bloco de informa��es na Home como introdu��o ao slider de Cartazes.',
		'id' => 'cartazes_home',
		'type' => 'editor',
		'settings' => $wp_editor_settings );

	$options[] = array(
		'name' => 'Frase para o Rodap�',
		'desc' => 'Adicione uma frase para ser exibida no rodap� do site',
		'id' => 'frase_rodape',
		'std' => 'Default Value',
		'type' => 'text');

	return $options;
}