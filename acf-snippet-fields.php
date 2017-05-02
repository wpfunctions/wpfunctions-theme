<?php
/*

ACF Snippet Custom Fields

*/
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5908b908bcc09',
	'title' => 'Functions',
	'fields' => array (
		array (
			'key' => 'field_5908bc783b20f',
			'label' => 'Snippet',
			'name' => 'cf_snippet',
			'type' => 'repeater',
			'instructions' => 'A snippet can consist of one or more code blocks. Add code blocks as you see fit and select the code language for each block. Optionally add instructions where to add the snippet code block, e.g. functions.php',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => 'Add code block',
			'sub_fields' => array (
				array (
					'key' => 'field_5908bcac3b210',
					'label' => 'Code Block',
					'name' => 'code_block',
					'type' => 'textarea',
					'instructions' => 'Paste snippet code here.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
				),
				array (
					'key' => 'field_5908bdfe3b211',
					'label' => 'Code language',
					'name' => 'code_language',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'PHP' => 'PHP',
						'Javascript' => 'Javascript',
						'Sass' => 'Sass',
						'CSS' => 'CSS',
						'HTML' => 'HTML',
						'txt' => 'txt',
					),
					'default_value' => array (
						0 => 'PHP',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array (
					'key' => 'field_5908bf6d67e73',
					'label' => 'Code instructions',
					'name' => 'code_instructions',
					'type' => 'text',
					'instructions' => 'Add instructions where to add this block of code.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
			),
		),
		array (
			'key' => 'field_5908bfbbe8803',
			'label' => 'Snippet Rating',
			'name' => 'cf_snippet_rating',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 0,
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'function',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;