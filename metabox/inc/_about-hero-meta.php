<?php
	$meta_boxes[] = array(
		'id'         => 'a-about_video',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => __( 'Video Interview Hero<br><img src="'.get_template_directory_uri().'/metabox/img/interview.png">', '_rtl' ),
		'post_types' => array( 'page' ),
		'autosave'   => false,
		'show'   => array(
            // With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
            'relation'    => 'OR',
            // List of page templates (used for page only). Array. Optional.
            'template'    => array( 'about-page-template.php' ),
        ),
		'fields'     => array(

    				// SELECT BOX
			array(
				'name'        => esc_html__( 'Select the format for the hero', 'your-prefix' ),
				'id'          => "{$prefix}about_select",
				'type'        => 'select',
				'options'     => array(
					'video' => esc_html__( 'Video', 'your-prefix' ),
					'image' => esc_html__( 'Image', 'your-prefix' ),
				),
				'multiple'    => false,
				'std'         => 'video',
			),

			// URL
			array(
				'name' => esc_html__( 'Video File', '_rtl' ),
				'id'   => "{$prefix}about_video",
				'desc' => esc_html__( 'Upload an MP4 video file', '_rtl' ),
				'type' => 'text',
				 'hidden' => ['_rtl_about_select', 'image'],
			),
			array(
				'type' => 'divider',
				 'hidden' => ['_rtl_about_select', 'image'],
			),
			array(
				'name'             => esc_html__( 'Video placeholder image used inplace of the video for unsupported devices', '_rtl' ),
				'id'               => "{$prefix}about_video_bg",
				'type'             => 'image_advanced',
				// Delete image from Media Library when remove it from post meta?
				// Note: it might affect other posts if you use same image for multiple posts
				'force_delete'     => false,
				// Maximum image uploads
				'max_file_uploads' => 1,
				// Display the "Uploaded 1/2 files" status
				'max_status'       => false,
				 'hidden' => ['_rtl_about_select', 'image'],
			),

			// IMAGE
			array(
				'name'             => esc_html__( 'Interview Image', '_rtl' ),
				'id'               => "{$prefix}video_about_bg",
				'type'             => 'image_advanced',
				'force_delete'     => false,
				'max_file_uploads' => 1,
				'max_status'       => true,
				 'hidden' => ['_rtl_about_select', 'video'],
			),
			// DIVIDER
			array(
				'type' => 'divider',
			),
			// TEXT
			array(
                'name' => 'Text',
                'id' => "{$prefix}about_text",
				'desc' => esc_html__( 'Add hero title / content', '_rtl' ),
				'std' => 'Interview',
                'type' => 'text',
            ),
		),
	);
?>