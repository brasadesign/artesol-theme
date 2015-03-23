<?php
function my_register_fields(){
	include_once get_template_directory() . '/inc/acf-repeater/repeater.php';
}
add_action('acf/register_fields', 'my_register_fields');
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_options',
		'title' => 'Options',
		'fields' => array (
			array (
				'key' => 'field_54c38279b37e8',
				'label' => __('Home','odin'),
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_54c38286b37e9',
				'label' => 'Título destaque 1',
				'name' => 'titulo_destaque_1',
				'type' => 'text',
				'instructions' => 'Adicione o título para o primeiro destaque do cabeçalho da Home.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54c386e4b37ea',
				'label' => 'Sub Título destaque 1',
				'name' => 'sub_titulo_destaque_1',
				'type' => 'text',
				'instructions' => 'Adicione o sub título para o primeiro destaque do cabeçalho da Home.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54c3870eb37eb',
				'label' => 'Link destaque 1',
				'name' => 'link_destaque_1',
				'type' => 'text',
				'instructions' => 'Adicione o link (URL) para o primeiro destaque do cabeçalho da Home. Caso deixe em branco ele aparecerá apenas como um banner informativo.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54c3873eb37ec',
				'label' => 'Background destaque 1',
				'name' => 'background_destaque_1',
				'type' => 'image',
				'instructions' => 'Adicione uma imagem para o background do primeiro destaque do cabeçalho da Home.',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array (
				'key' => 'field_54c397bda7029',
				'label' => 'Título destaque 2',
				'name' => 'titulo_destaque_2',
				'type' => 'text',
				'instructions' => 'Adicione o título para o segundo destaque do cabeçalho da Home.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54c397df7d211',
				'label' => 'Sub Título destaque 2',
				'name' => 'sub_titulo_destaque_2',
				'type' => 'text',
				'instructions' => 'Adicione o sub título para o segundo destaque do cabeçalho da Home.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54c397ef7d212',
				'label' => 'Link destaque 2',
				'name' => 'link_destaque_2',
				'type' => 'text',
				'instructions' => 'Adicione o link (URL) para o segundo destaque do cabeçalho da Home. Caso deixe em branco ele aparecerá apenas como um banner informativo.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54c397fc7d213',
				'label' => 'Background destaque 2',
				'name' => 'background_destaque_2',
				'type' => 'image',
				'instructions' => 'Adicione uma imagem para o background do segundo destaque do cabeçalho da Home.',
				'required' => 1,
				'save_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_rodape',
		'title' => 'Rodapé',
		'fields' => array (
			array (
				'key' => 'field_54de093924e7c',
				'label' => 'Endereço',
				'name' => 'endereço',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54de0ecd9c1f7',
				'label' => 'Link Artesol + Iguatemi',
				'name' => 'parceiro-iguatemi',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54de12109b2b9',
				'label' => 'Link Todos os Parceiros',
				'name' => 'todos-parceiros',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54de3d1d58b73',
				'label' => 'Link Imprensa',
				'name' => 'link-imprensa',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54de3dbb58b74',
				'label' => 'Link Download Release',
				'name' => 'link-release',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_54de44fbf4813',
				'label' => 'Social',
				'name' => 'social_repeater',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_54de451cf4814',
						'label' => 'Nome da rede social',
						'name' => 'social_repeater_name',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_54de4535f4815',
						'label' => 'Link',
						'name' => 'social_repeater_link',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 1,
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_slider-home',
		'title' => 'Slider home',
		'fields' => array (
			array (
				'key' => 'field_54d8be6f23184',
				'label' => 'Deseja exibir essa página no slider da página inicial?',
				'name' => 'slider_home',
				'type' => 'radio',
				'choices' => array (
					'true' => 'Sim',
					'false' => 'Não',
				),
				'other_choice' => 0,
				'save_other_choice' => 0,
				'default_value' => 'false',
				'layout' => 'vertical',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '!=',
					'value' => 'brasa_slider_cpt',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_home',
		'title' => __('Home - Widgets','odin'),
		'fields' => array (
			array (
				'key' => 'field_54ff1ac1a6fbe',
				'label' => 'Box de informações',
				'name' => 'box_home_repeater',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_54ff2451a6fbf',
						'label' => 'Titulo',
						'name' => 'box_home_repeater_title',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_54ff251ba6fc1',
						'label' => 'Texto',
						'name' => 'box_home_repeater_text',
						'type' => 'textarea',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'maxlength' => '',
						'rows' => '',
						'formatting' => 'br',
					),
					array (
						'key' => 'field_54ff247ca6fc0',
						'label' => 'Classe do icone',
						'name' => 'box_home_repeater_icon',
						'type' => 'radio',
						'column_width' => '',
						'choices' => array (
							'servicos' => 'Marrom',
							'agenda' => 'Azul',
						),
						'other_choice' => 0,
						'save_other_choice' => 0,
						'default_value' => 'servicos',
						'layout' => 'vertical',
					),
					array (
						'key' => 'field_54ff27a896406',
						'label' => 'Classe do botão',
						'name' => 'box_home_repeater_btn',
						'type' => 'radio',
						'column_width' => '',
						'choices' => array (
							'bg-marrom-artesol' => 'Marrom',
							'bg-azul-artesol' => 'Azul',
						),
						'other_choice' => 0,
						'save_other_choice' => 0,
						'default_value' => 'bg-marrom-artesol',
						'layout' => 'vertical',
					),
					array (
						'key' => 'field_54ff27ec96407',
						'label' => 'Texto do botão',
						'name' => 'box_home_repeater_btn_text',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
					array (
						'key' => 'field_54ff293928f57',
						'label' => 'Link',
						'name' => 'box_home_repeater_link',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'html',
						'maxlength' => '',
					),
				),
				'row_min' => 0,
				'row_limit' => 2,
				'layout' => 'row',
				'button_label' => 'Adicionar novo',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
