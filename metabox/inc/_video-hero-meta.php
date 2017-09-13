<?php
	$meta_boxes[] = array(
		'id'         => 'a-hero_video',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => __( 'Video Hero<br><img src="'.get_template_directory_uri().'/metabox/img/video-hero.png">', '_rtl' ),
		'post_types' => array( 'post', 'page' ),
		'autosave'   => false,
		'show'   => array(
            // With all conditions below, use this logical operator to combine them. Default is 'OR'. Case insensitive. Optional.
            'relation'    => 'OR',
            // List of page templates (used for page only). Array. Optional.
            'template'    => array( 'home-page-template.php' ),
        ),
		'fields'     => array(

	        // Group
	        array(
	            'name' => 'Video Hero Content',
	            'id' => 'video_hero',
	            'type' => 'group',
				'clone'  => true,
				'sort_clone' => true,
	            'fields' => array(

    				// SELECT BOX
					array(
						'name'        => esc_html__( 'Select the format for this slide', 'your-prefix' ),
						'id'          => "{$prefix}hero_select",
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
						'name' => esc_html__( 'Pre Video File', '_wwt' ),
						'id'   => "{$prefix}hero_prevideo",
						'desc' => esc_html__( 'The video that plays on the loop before the main video is played on click of the play button (Upload an MP4 video file and paste the URL above)', '_wwt' ),
						'type' => 'text',
						 'hidden' => ['_rtl_hero_select', 'image'],
					),

					// URL
					array(
						'name' => esc_html__( 'Video File', '_wwt' ),
						'id'   => "{$prefix}hero_video",
						'desc' => esc_html__( 'Upload an MP4 video file and paste the URL above', '_wwt' ),
						'type' => 'text',
						 'hidden' => ['_rtl_hero_select', 'image'],
					),
					array(
						'type' => 'divider',
						 'hidden' => ['_rtl_hero_select', 'image'],
					),
					array(
						'name'             => esc_html__( 'Video placeholder image used inplace of the video for unsupported devices', '_wwt' ),
						'id'               => "{$prefix}hero_video_bg",
						'type'             => 'image_advanced',
						// Delete image from Media Library when remove it from post meta?
						// Note: it might affect other posts if you use same image for multiple posts
						'force_delete'     => false,
						// Maximum image uploads
						'max_file_uploads' => 1,
						// Display the "Uploaded 1/2 files" status
						'max_status'       => false,
						 'hidden' => ['_rtl_hero_select', 'image'],
					),

					// IMAGE
					array(
						'name'             => esc_html__( 'Hero Image', '_rtl' ),
						'id'               => "{$prefix}video_hero_bg",
						'desc' => __( 'Add a large image for the hero slider', '_rtl' ),
						'type'             => 'image_advanced',
						'force_delete'     => false,
						'max_file_uploads' => 1,
						'max_status'       => true,
						 'hidden' => ['_rtl_hero_select', 'video'],
					),
					// DIVIDER
					array(
						'type' => 'divider',
					),
					// TEXT
					array(
	                    'name' => 'Text',
	                    'id' => "{$prefix}hero_text",
						'desc' => esc_html__( 'Add hero title / content', '_rtl' ),
	                    'type' => 'text',
	                ),
				),
            ),
		),
	);
?>