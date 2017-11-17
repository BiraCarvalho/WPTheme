<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_home-secao-sobre',
		'title' => 'Home - Seção Sobre',
		'fields' => array (
			array (
				'key' => 'field_596d8cf25fd6d',
				'label' => 'Resumo',
				'name' => 'about-home-resumo',
				'type' => 'wysiwyg',
				'instructions' => 'Texto que será exibido na seção sobre da Home.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_596d8df6037ee',
				'label' => 'Imagem',
				'name' => 'about-home-imagem',
				'type' => 'image',
				'instructions' => 'Imagem que será exibida na seção sobre da home',
				'save_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'uploadedTo',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'about.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'format',
				7 => 'featured_image',
				8 => 'categories',
				9 => 'tags',
				10 => 'send-trackbacks',
			),
		),
		'menu_order' => 1,
	));
	register_field_group(array (
		'id' => 'acf_pagina-sobre',
		'title' => 'Página - Sobre',
		'fields' => array (
			array (
				'key' => 'field_5976ab1dfdcce',
				'label' => 'Citação - Texto',
				'name' => 'page-about-quote-text',
				'type' => 'wysiwyg',
				'instructions' => 'Esse é o texto que é exibido no topo da página.',
				'default_value' => '',
				'toolbar' => 'basic',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_5976ac24fdccf',
				'label' => 'Citação - Imagem',
				'name' => 'page-about-quote-image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'large',
				'library' => 'uploadedTo',
			),
			array (
				'key' => 'field_5976ac6efdcd0',
				'label' => 'Introdução - Texto',
				'name' => 'page-about-introduction-text',
				'type' => 'wysiwyg',
				'instructions' => 'Texto exibido a seção do meio da página',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_5976ad0ae5a78',
				'label' => 'Curriculum - Texto',
				'name' => 'page-about-curriculum-text',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_5976acddfdcd1',
				'label' => 'Curriculum- Imagem',
				'name' => 'page-about-curriculum-image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'medium',
				'library' => 'uploadedTo',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'about.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'excerpt',
				2 => 'custom_fields',
				3 => 'discussion',
				4 => 'comments',
				5 => 'revisions',
				6 => 'author',
				7 => 'format',
				8 => 'featured_image',
				9 => 'categories',
				10 => 'tags',
				11 => 'send-trackbacks',
			),
		),
		'menu_order' => 2,
	));
}
