 <?php
	$meta_boxes[] = array(
		'id'         => 'a-page-hero',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => __( 'hero<br><img src="'.get_template_directory_uri().'/metabox/img/hero.png">', '_rtl' ),
		'post_types' => array('page'),
		'autosave'   => false,
		'show'   => array(
            // With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
            'relation'    => 'OR',
            // List of page templates (used for page only). Array. Optional.
            'template'    => array( 'solutions-page-template.php', 'insights-page-template.php' ),
        ),
		'fields'     => array(

			// WYSIWYG/RICH TEXT EDITOR
			array(
				'name'    => esc_html__( 'hero Oversized Text', '_rtl' ),
				'id'      => "{$prefix}inner_hero_oversized",
				'desc' => esc_html__( 'Add the main content, appears below the oversized text', '_rtl' ),
				'type'    => 'wysiwyg',
				'raw'     => false,

				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 3,
					'teeny'         => false,
					'media_buttons' => false,
				),
			),
			// WYSIWYG/RICH TEXT EDITOR
			array(
				'name'    => esc_html__( 'hero Text', '_rtl' ),
				'id'      => "{$prefix}inner_hero_content",
				'desc' => esc_html__( 'Add the main content, appears below the oversized text', '_rtl' ),
				'type'    => 'wysiwyg',
				'raw'     => false,

				// Editor settings, see wp_editor() function: look4wp.com/wp_editor
				'options' => array(
					'textarea_rows' => 3,
					'teeny'         => false,
					'media_buttons' => false,
				),
			),

			array(
				'type'	=>	'divider',
			),
			// CHECKBOX
			array(
				'name' => esc_html__( 'Show Buttons', 'your-prefix' ),
				'id'   => "{$prefix}hero_checkbox",
				'type' => 'checkbox',
				'std'  => 0,
			),
			array(
				'type'	=>	'divider',
                'visible' => ['_rtl_hero_checkbox' ,1],
			),

			// TEXT
			array(
                'name' => 'Hero Large Button',
                'id' => "{$prefix}inner_hero_button_text",
				'desc' => esc_html__( 'Add the button text', '_rtl' ),
                'type' => 'text',
                'visible' => ['_rtl_hero_checkbox' ,1],
            ),
            // POST LINK
			array(
				'name'        => esc_html__( 'Select the page for the link', '_rtl' ),
				'id'          => "{$prefix}inner_hero_link",
				'type'        => 'post',
				// Post type
				'post_type'   => 'page',
                'visible' => ['_rtl_hero_checkbox' ,1],
				// Field type, either 'select' or 'select_advanced' (default)
				'field_type'  => 'select_advanced',
				'placeholder' => esc_html__( 'Select an Item', '_rtl' ),
				// Query arguments (optional). No settings means get all published posts
				'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
		            'orderby'     => 'title',
		            'order'       => 'ASC',
				),
			),
			array(
				'type'	=>	'divider',
                'visible' => ['_rtl_hero_checkbox' ,1],
			),
			// TEXT
			array(
                'name' => 'Add the "Already a member" text',
                'id' => "{$prefix}inner_hero_member_text",
                'type' => 'text',
                'std' => 'Already a member?',
                'visible' => ['_rtl_hero_checkbox' ,1],
            ),
			// TEXT
			array(
                'name' => 'Hero Small Button',
                'id' => "{$prefix}inner_hero_register_button_text",
                'type' => 'text',
                'visible' => ['_rtl_hero_checkbox' ,1],
            ),
            // POST LINK
			array(
				'name'        => esc_html__( 'Select the page for the link', '_rtl' ),
				'id'          => "{$prefix}inner_hero_register_link",
				'type'        => 'post',
                'visible' => ['_rtl_hero_checkbox' ,1],
				// Post type
				'post_type'   => 'page',
				// Field type, either 'select' or 'select_advanced' (default)
				'field_type'  => 'select_advanced',
				'placeholder' => esc_html__( 'Select an Item', '_rtl' ),
				// Query arguments (optional). No settings means get all published posts
				'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
		            'orderby'     => 'title',
		            'order'       => 'ASC',
				),
			),
			array(
				'type'	=>	'divider',
			),

			// IMAGE
			array(
				'name'             => esc_html__( 'Hero parallax images', '_rtl' ),
				'id'               => "{$prefix}inner_hero_bg",
				'desc' => __( '', '_rtl' ),
				'type'             => 'image_advanced',
				'force_delete'     => false,
				'max_file_uploads' => 1,
				'max_status'       => true,
			),

		),
	);
?>