<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_65552ffb8ecbe',
	'title' => 'Sliders',
	'fields' => array(
		array(
			'key' => 'field_65552ffb998a3',
			'label' => 'Slider Image',
			'name' => 'arg_slider_image',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => 'Image must be a JPG and at a 2560x1500 resolution.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'acfe_save_meta' => 0,
			'instruction_placement' => '',
			'hide_field' => '',
			'hide_label' => '',
			'hide_instructions' => '',
			'hide_required' => '',
			'uploader' => 'wp',
			'return_format' => 'url',
			'library' => 'all',
			'upload_folder' => '',
			'acfe_thumbnail' => 0,
			'acfe_settings' => '',
			'acfe_validate' => '',
			'min_width' => 2560,
			'min_height' => 1500,
			'min_size' => '',
			'max_width' => 2560,
			'max_height' => 1500,
			'max_size' => '',
			'mime_types' => 'jpg, jpeg',
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_65552ffb999d1',
			'label' => 'Slider Schedule',
			'name' => 'arg_slider_schedule',
			'aria-label' => '',
			'type' => 'radio',
			'instructions' => 'Does this slide need to be scheduled? Choose "Yes" and set the slide\'s start and end date.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'hide_field' => '',
			'hide_label' => '',
			'hide_instructions' => '',
			'hide_required' => '',
			'acfe_save_meta' => 0,
			'choices' => array(
				'Yes' => 'Yes',
				'No' => 'No',
			),
			'default_value' => 'No',
			'return_format' => 'value',
			'acfe_settings' => '',
			'acfe_validate' => '',
			'allow_null' => 0,
			'other_choice' => 0,
			'instruction_placement' => '',
			'acfe_permissions' => '',
			'layout' => 'horizontal',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_65552ffb99a0a',
			'label' => 'Slider Start Date',
			'name' => 'arg_slider_start_date',
			'aria-label' => '',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_65552ffb999d1',
						'operator' => '==',
						'value' => 'Yes',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'acfe_save_meta' => 0,
			'instruction_placement' => '',
			'hide_field' => '',
			'hide_label' => '',
			'hide_instructions' => '',
			'hide_required' => '',
			'display_format' => 'F j, Y',
			'return_format' => 'F j, Y',
			'first_day' => 0,
			'placeholder' => '',
			'min_date' => '',
			'max_date' => '',
			'no_weekends' => 0,
			'acfe_settings' => '',
			'acfe_validate' => '',
		),
		array(
			'key' => 'field_65552ffb99a42',
			'label' => 'Slider End Date',
			'name' => 'arg_slider_end_date',
			'aria-label' => '',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_65552ffb999d1',
						'operator' => '==',
						'value' => 'Yes',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'acfe_save_meta' => 0,
			'instruction_placement' => '',
			'hide_field' => '',
			'hide_label' => '',
			'hide_instructions' => '',
			'hide_required' => '',
			'display_format' => 'F j, Y',
			'return_format' => 'F j, Y',
			'first_day' => 0,
			'placeholder' => '',
			'min_date' => '',
			'max_date' => '',
			'no_weekends' => 0,
			'acfe_settings' => '',
			'acfe_validate' => '',
		),
		array(
			'key' => 'field_65552ffb998de',
			'label' => 'Slider Heading',
			'name' => 'arg_slider_heading',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'acfe_save_meta' => 0,
			'instruction_placement' => '',
			'hide_field' => '',
			'hide_label' => '',
			'hide_instructions' => '',
			'hide_required' => '',
			'default_value' => '',
			'acfe_settings' => '',
			'acfe_validate' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_65552ffb99916',
			'label' => 'Slider Subheading',
			'name' => 'arg_slider_subheading',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'acfe_save_meta' => 0,
			'instruction_placement' => '',
			'hide_field' => '',
			'hide_label' => '',
			'hide_instructions' => '',
			'hide_required' => '',
			'default_value' => '',
			'acfe_settings' => '',
			'acfe_validate' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_65552ffb9994e',
			'label' => 'Slider Copy',
			'name' => 'arg_slider_copy',
			'aria-label' => '',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'hide_field' => '',
			'hide_label' => '',
			'hide_instructions' => '',
			'hide_required' => '',
			'acfe_save_meta' => 0,
			'default_value' => '',
			'acfe_wysiwyg_height' => 150,
			'acfe_wysiwyg_max_height' => '',
			'acfe_wysiwyg_valid_elements' => '',
			'acfe_wysiwyg_custom_style' => '',
			'acfe_wysiwyg_disable_wp_style' => 0,
			'acfe_wysiwyg_autoresize' => 0,
			'acfe_wysiwyg_disable_resize' => 0,
			'acfe_wysiwyg_remove_path' => 0,
			'acfe_wysiwyg_menubar' => 0,
			'acfe_wysiwyg_transparent' => 0,
			'acfe_wysiwyg_merge_toolbar' => 0,
			'acfe_wysiwyg_custom_toolbar' => 0,
			'acfe_settings' => '',
			'acfe_validate' => '',
			'instruction_placement' => '',
			'acfe_permissions' => '',
			'tabs' => 'visual',
			'toolbar' => 'basic',
			'media_upload' => 0,
			'delay' => 0,
			'acfe_wysiwyg_auto_init' => 0,
			'acfe_wysiwyg_min_height' => 300,
			'acfe_wysiwyg_toolbar_buttons' => array(
			),
		),
		array(
			'key' => 'field_65552ffb99987',
			'label' => 'Slider Button',
			'name' => 'arg_slider_button',
			'aria-label' => '',
			'type' => 'link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_permissions' => '',
			'acfe_save_meta' => 0,
			'instruction_placement' => '',
			'hide_field' => '',
			'hide_label' => '',
			'hide_instructions' => '',
			'hide_required' => '',
			'return_format' => 'array',
			'acfe_settings' => '',
			'acfe_validate' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'slider',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'author',
		1 => 'block_editor',
		2 => 'categories',
		3 => 'comments',
		4 => 'the_content',
		5 => 'discussion',
		6 => 'excerpt',
		7 => 'featured_image',
		8 => 'format',
		9 => 'page_attributes',
		10 => 'revisions',
		11 => 'send-trackbacks',
		12 => 'tags',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 1,
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 1,
	'acfe_display_title' => 'Sliders • Powered by Alliance Retail Group',
	'acfe_permissions' => '',
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1700082616,
));

endif;