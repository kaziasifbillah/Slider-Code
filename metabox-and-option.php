<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.


function asif_meta_box_option( $options  ) {
    $options      = array(); // remove old options
	
	$options[]    = array(
        'id'        => 'asif_page_options',
        'title'     => 'asif_page_options',
        'post_type' => 'page',
        'context'   => 'normal',
        'priority'  => 'high',
        'sections'  => array(
            // begin: a section
            array(
            'name'  => 'asif_page_options_meta',
            'icon'  => 'fa fa-cog',
            // begin: fields
            'fields' => array(
                // begin: a field
                array(
                  'id'    => 'enable_title',
                  'type'  => 'switcher',
                  'default' => true,
                  'title' => 'Enable Title',
                  'desc'  => esc_html__('If you want to enable title, select on', 'stock_aminulhchy')
                ),
                array(
                  'id'    => 'enable_content',
                  'type'  => 'switcher',
                  'default' => false,
                  'title' => 'Enable Content',
                  'desc'  => esc_html__('If you want to enable Content, select on', 'stock_aminulhchy')
                ),
            // end: a field
            ), // end: a section
        ),
    )
);
	
	//------------------------------------
    // Slider Options
    //------------------------------------
    $options[]    = array(
        'id'        => 'asif_slide_options',
        'title'     => 'Slide Options',
        'post_type' => 'slide',
        'context'   => 'normal',
        'priority'  => 'high',
        'sections'  => array(
            // begin: a section
            array(
            'name'  => 'asif_slide_options_meta',
            // begin: fields
            'fields' => array(
            array(
              'id'              => 'buttons',
              'type'            => 'group',
              'title'           => 'Slides Buttons',
              'button_title'    => 'Add New',
              'accordion_title' => 'Add New Button',
              'fields'          => array(
                array(
                  'id'    => 'type',
                  'type'  => 'select',
                  'title' => 'Button Type',
                  'options'  => array(
                    'borderd'  => 'Borderd Button',
                    'filled'   => 'Filled Button',
                    ),
                  ),
                array(
                  'id'    => 'text',
                  'type'  => 'text',
                  'title' => 'Button Text',
                  'default' => 'Get Free Consultation'
                ),
                array(
                  'id'    => 'link_type',
                  'type'  => 'select',
                  'title' => 'Link Type',
                  'options'  => array(
                    '1'  => 'Wordpress page',
                    '2'   => 'External Link',
                    ),
                ),
                array(
                  'id'    => 'link_to_page',
                  'type'  => 'select',
                  'title' => 'Select Page',
                  'options'  => 'page',
                  'dependency' => array( 'link_type', '==', '1' ),
                ),
                array(
                  'id'    => 'link_to_external',
                  'type'  => 'text',
                  'title' => 'Type URL',
                  'dependency' => array( 'link_type', '==', '2' ),
                ),
              ),
            ),
        array(
          'id'    => 'enable_overlay',
          'type'  => 'switcher',
          'title' => 'Enable Overlay?',
          'default' => true,
        ),
        array(
          'id'    => 'overlay_percentage', // this is must be unique
          'type'  => 'text',
          'title' => 'Overlay Percentage',
          'default' => '.7',
          'desc' => 'Type overlay percentage in floating number, max value is 1.',
			'dependency' => array( 'enable_overlay', '==', 'true' )
        ),
        array(
          'id'    => 'overlay_color', // this is must be unique
          'type'  => 'color_picker',
          'title' => 'Overlay Color',
          'default' => '#181a1f',
          'desc' => 'Select Any color for overlay.',
			'dependency' => array( 'enable_overlay', '==', 'true' )
        ),
          ), // end: a section
        ),
    ),
);
return $options;
}
add_filter( 'cs_metabox_options', 'asif_meta_box_option' );
