<?php
     //  =============================
     //  = Default Theme Customizer Settings  =
     //  @ Indibiz Theme
     //  =============================


function indibiz_th_customize_control_enqueue_scripts() {
    wp_enqueue_script( 'th-customize-controls', get_template_directory_uri(). '/js/customize-script.js', array( 'customize-controls' ) );
    wp_register_style( 'ctypo-customize-controls', get_template_directory_uri(). '/css/customize-control.css');
}
add_action( 'customize_controls_enqueue_scripts', 'indibiz_th_customize_control_enqueue_scripts');

/*theme customizer*/
function indibiz_customize_register( $wp_customize ) {
 
     //  =============================
     //  = Genral Settings     =
   	 //  =============================

  $wp_customize->get_section('title_tagline')->title = esc_html__('General Settings', 'indibiz');
   $wp_customize->get_section('title_tagline')->priority = 3;
	//Logo upload
     $wp_customize->add_setting('logo', array(
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_upload'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo', array(
        'label'    => __('Logo Upload', 'indibiz'),
        'section'  => 'title_tagline',
        'settings' => 'logo',
    )));
	
	$wp_customize->add_setting( 'animation_option', array(
        'default'  => 'on',
      	'sanitize_callback' => 'indibiz_sanitize_choices'
    ) );
     
    $wp_customize->add_control( 'animation_option', array(
        'label'      => __('Theme Animation', 'indibiz'),
        'section'    => 'title_tagline',
        'settings'   => 'animation_option',
        'type'       => 'radio',
        'choices'    => array(
                        'on'  => 'On',
                        'off' => 'Off',
                        ),
    ) );

    $wp_customize->add_setting('meta_data_option', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_script'
    ));
    $wp_customize->add_control('meta_data_option', array(
        'label'    => __('Meta Deta Options', 'indibiz'),
        'settings' => 'meta_data_option',
        'section'  => 'title_tagline',
        'type'     => 'textarea',
    ));

    $wp_customize->add_setting('footer_code_option', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_script'
    ));
    $wp_customize->add_control('footer_code_option', array(
        'label'       => __('Footer Code Options', 'indibiz'),
        'description' => __('Write or paste code(script) here which you want to load in footer.', 'indibiz'),
        'settings'    => 'footer_code_option',
        'section'     => 'title_tagline',
        'type'        => 'textarea',
    ));


    //  =============================
    //  ====  Top Featured Image ====
    //  =============================

    $wp_customize->add_section('top_featured_area', array(
        'title'    => __('Top Featured Area', 'indibiz'),
        'priority' => 6,
    ));
    $wp_customize->add_setting('top_featured_image', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_upload'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'top_featured_image', array(
        'label'    => __('Top Featured Image', 'indibiz'),
        'section'  => 'top_featured_area',
        'settings' => 'top_featured_image',
    )));
    $wp_customize->add_setting('top_featured_title', array(
        'default' => __('IndiBiz - Responsive WordPress theme.','indibiz'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('top_featured_title', array(
        'label'    => __('Top Featured Title', 'indibiz'),
        'settings' => 'top_featured_title',
        'section'  => 'top_featured_area',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('top_featured_description', array(
        'default' => __('Build beautiful and mobile ready WordPress sites with IndiBiz business WordPress theme.','indibiz'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('top_featured_description', array(
        'label'    => __('Top Featured Description', 'indibiz'),
        'settings' => 'top_featured_description',
        'section'  => 'top_featured_area',
        'type'     => 'textarea',
    ));
    $wp_customize->add_setting('top_featured_button_text', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('top_featured_button_text', array(
        'label'    => __('Top Featured Button Text', 'indibiz'),
        'settings' => 'top_featured_button_text',
        'section'  => 'top_featured_area',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('top_featured_button_link', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ));
    $wp_customize->add_control('top_featured_button_link', array(
        'label'    => __('Top Featured Button Link', 'indibiz'),
        'settings' => 'top_featured_button_link',
        'section'  => 'top_featured_area',
        'type'     => 'text',
    ));

     //  =============================
     //  === Three Column Settings ===
     //  =============================
    $wp_customize->add_panel( 'three_column', array(
        'priority'       => 9,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Three Column', 'indibiz'),
        'description'    => '',
    ) );

    /* First Column Settings */
    $wp_customize->add_section('first_column_section', array(
        'title'    => __('First Column', 'indibiz'),
        'priority' => 12,
        'panel'  => 'three_column',
    ));
    $wp_customize->add_setting('first_icon_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('first_icon_threecolumn', array(
        'label'    => __('First Icon', 'indibiz'),
        'settings' => 'first_icon_threecolumn',
      	'description' => __('Enter the CSS class of the FontAwesome icon you want to use here. You can find a list of icon classes <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">here</a>.', 'indibiz'),
        'section'  => 'first_column_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('first_title_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('first_title_threecolumn', array(
        'label'    => __('First Title', 'indibiz'),
        'settings' => 'first_title_threecolumn',
        'section'  => 'first_column_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('first_description_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('first_description_threecolumn', array(
        'label'    => __('First Description', 'indibiz'),
        'settings' => 'first_description_threecolumn',
        'section'  => 'first_column_section',
        'type'     => 'textarea',
    ));
    $wp_customize->add_setting('first_link_text_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('first_link_text_threecolumn', array(
        'label'    => __('First Link Text', 'indibiz'),
        'settings' => 'first_link_text_threecolumn',
        'section'  => 'first_column_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('first_link_anchor_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => '#',
    ));
    $wp_customize->add_control('first_link_anchor_threecolumn', array(
        'label'    => __('First Link URL', 'indibiz'),
        'settings' => 'first_link_anchor_threecolumn',
        'section'  => 'first_column_section',
        'type'     => 'text',
    ));

    /* Second Column Settings */
    $wp_customize->add_section('second_column_section', array(
        'title'    => __('Second Column', 'indibiz'),
        'priority' => 12,
        'panel'  => 'three_column',
    ));
    $wp_customize->add_setting('second_icon_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('second_icon_threecolumn', array(
        'label'    => __('Second Icon', 'indibiz'),
        'settings' => 'second_icon_threecolumn',
      	'description' => __('Enter the CSS class of the FontAwesome icon you want to use here. You can find a list of icon classes <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">here</a>.', 'indibiz'),
        'section'  => 'second_column_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('second_title_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('second_title_threecolumn', array(
        'label'    => __('Second Title', 'indibiz'),
        'settings' => 'second_title_threecolumn',
        'section'  => 'second_column_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('second_description_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('second_description_threecolumn', array(
        'label'    => __('Second Description', 'indibiz'),
        'settings' => 'second_description_threecolumn',
        'section'  => 'second_column_section',
        'type'     => 'textarea',
    ));
    $wp_customize->add_setting('second_link_text_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('second_link_text_threecolumn', array(
        'label'    => __('Second Link Text', 'indibiz'),
        'settings' => 'second_link_text_threecolumn',
        'section'  => 'second_column_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('second_link_anchor_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => '#',
    ));
    $wp_customize->add_control('second_link_anchor_threecolumn', array(
        'label'    => __('Second Link URL', 'indibiz'),
        'settings' => 'second_link_anchor_threecolumn',
        'section'  => 'second_column_section',
        'type'     => 'text',
    ));

    /* Third Column Settings */
    $wp_customize->add_section('third_column_section', array(
        'title'    => __('Third Column', 'indibiz'),
        'priority' => 12,
        'panel'  => 'three_column',
    ));
    $wp_customize->add_setting('third_icon_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('third_icon_threecolumn', array(
        'label'    => __('Third Icon', 'indibiz'),
        'settings' => 'third_icon_threecolumn',
      	'description' => __('Enter the CSS class of the FontAwesome icon you want to use here. You can find a list of icon classes <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">here</a>.', 'indibiz'),
        'section'  => 'third_column_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('third_title_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('third_title_threecolumn', array(
        'label'    => __('Third Title', 'indibiz'),
        'settings' => 'third_title_threecolumn',
        'section'  => 'third_column_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('third_description_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('third_description_threecolumn', array(
        'label'    => __('Third Description', 'indibiz'),
        'settings' => 'third_description_threecolumn',
        'section'  => 'third_column_section',
        'type'     => 'textarea',
    ));
    $wp_customize->add_setting('third_link_text_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('third_link_text_threecolumn', array(
        'label'    => __('Third Link Text', 'indibiz'),
        'settings' => 'third_link_text_threecolumn',
        'section'  => 'third_column_section',
        'type'     => 'text',
    ));
    $wp_customize->add_setting('third_link_anchor_threecolumn', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => '#',
    ));
    $wp_customize->add_control('third_link_anchor_threecolumn', array(
        'label'    => __('Third Link URL', 'indibiz'),
        'settings' => 'third_link_anchor_threecolumn',
        'section'  => 'third_column_section',
        'type'     => 'text',
    ));

    //  =============================
    //  ====  Blogs On HomePage  ====
    //  =============================

    $wp_customize->add_section('blog_area', array(
        'title'    => __('Number of Blogs', 'indibiz'),
        'priority' => 21,
    ));
    $wp_customize->add_setting('no_of_blogs', array(
        'default'  => '3',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_int'
    ));
    $wp_customize->add_control('no_of_blogs', array(
        'label'    => __('Number of Blogs on HomePage', 'indibiz'),
        'section'  => 'blog_area',
        'settings' => 'no_of_blogs',
        'type'     => 'text',
    ));

     //  =============================
     //  === Clients Section Settings ===
     //  =============================
    $wp_customize->add_panel( 'clients_section', array(
        'priority'       => 24,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Clients Section', 'indibiz'),
        'description'    => '',
    ) );

    /* First Column Settings */
    $wp_customize->add_section('our_client_section', array(
        'title'    => __('Our Client Heading', 'indibiz'),
        'priority' => 27,
        'panel'  => 'clients_section',
    ));

    $wp_customize->add_setting('our_client_heading', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea',
        'default'           =>__('Our Client','indibiz')
    ));
    $wp_customize->add_control('our_client_heading', array(
        'label'    => __('Our Client Title', 'indibiz'),
        'settings' => 'our_client_heading',
        'section'  => 'our_client_section',
        'type'     => 'text',
    ));

 $wp_customize->add_section('first_client_section', array(
        'title'    => __('First Client', 'indibiz'),
        'priority' => 27,
        'panel'  => 'clients_section',
    ));
    /* First Client Settings */
    $wp_customize->add_setting('first_client_image', array(
        'default'           => get_template_directory_uri().'/images/DSC_1152.jpg',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_upload'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'first_client_image', array(
        'label'    => __('First Client Image', 'indibiz'),
        'section'  => 'first_client_section',
        'settings' => 'first_client_image',
    )));
    $wp_customize->add_setting('first_client_url', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => '#',
    ));
    $wp_customize->add_control('first_client_url', array(
        'label'    => __('First Client URL', 'indibiz'),
        'settings' => 'first_client_url',
        'section'  => 'first_client_section',
        'type'     => 'text',
    ));

    /* Second Column Settings */
    $wp_customize->add_section('second_client_section', array(
        'title'    => __('Second Client', 'indibiz'),
        'priority' => 30,
        'panel'  => 'clients_section',
    ));

    /* Second Client Settings */
    $wp_customize->add_setting('second_client_image', array(
        'default'           => get_template_directory_uri().'/images/DSC_1152.jpg',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_upload'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'second_client_image', array(
        'label'    => __('Second Client Image', 'indibiz'),
        'section'  => 'second_client_section',
        'settings' => 'second_client_image',
    )));
    $wp_customize->add_setting('second_client_url', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => '#',
    ));
    $wp_customize->add_control('second_client_url', array(
        'label'    => __('Second Client URL', 'indibiz'),
        'settings' => 'second_client_url',
        'section'  => 'second_client_section',
        'type'     => 'text',
    ));


    /* Third Column Settings */
    $wp_customize->add_section('third_client_section', array(
        'title'    => __('Third Client', 'indibiz'),
        'priority' => 33,
        'panel'  => 'clients_section',
    ));

    /* Third Client Settings */
    $wp_customize->add_setting('third_client_image', array(
        'default'           => get_template_directory_uri().'/images/DSC_1152.jpg',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_upload'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'third_client_image', array(
        'label'    => __('Third Client Image', 'indibiz'),
        'section'  => 'third_client_section',
        'settings' => 'third_client_image',
    )));
    $wp_customize->add_setting('third_client_url', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => '#',
    ));
    $wp_customize->add_control('third_client_url', array(
        'label'    => __('Third Client URL', 'indibiz'),
        'settings' => 'third_client_url',
        'section'  => 'third_client_section',
        'type'     => 'text',
    ));


    /* Fourth Column Settings */
    $wp_customize->add_section('fourth_client_section', array(
        'title'    => __('Fourth Client', 'indibiz'),
        'priority' => 36,
        'panel'  => 'clients_section',
    ));

    /* Fourth Client Settings */
    $wp_customize->add_setting('fourth_client_image', array(
        'default'           => get_template_directory_uri().'/images/DSC_1152.jpg',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_upload'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'fourth_client_image', array(
        'label'    => __('Fourth Client Image', 'indibiz'),
        'section'  => 'fourth_client_section',
        'settings' => 'fourth_client_image',
    )));
    $wp_customize->add_setting('fourth_client_url', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => '#',
    ));
    $wp_customize->add_control('fourth_client_url', array(
        'label'    => __('Fourth Clinet URL', 'indibiz'),
        'settings' => 'fourth_client_url',
        'section'  => 'fourth_client_section',
        'type'     => 'text',
    ));


    /* Fifth Column Settings */
    $wp_customize->add_section('fifth_client_section', array(
        'title'    => __('Fifth Client', 'indibiz'),
        'priority' => 39,
        'panel'  => 'clients_section',
    ));
    /* Fifth Client Settings */
    $wp_customize->add_setting('fifth_client_image', array(
        'default'           => get_template_directory_uri().'/images/DSC_1152.jpg',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_upload'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'fifth_client_image', array(
        'label'    => __('Fifth Client Image', 'indibiz'),
        'section'  => 'fifth_client_section',
        'settings' => 'fifth_client_image',
    )));
    $wp_customize->add_setting('fifth_client_url', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => '#',
    ));
    $wp_customize->add_control('fifth_client_url', array(
        'label'    => __('Fifth Client URL', 'indibiz'),
        'settings' => 'fifth_client_url',
        'section'  => 'fifth_client_section',
        'type'     => 'text',
    ));


    /* Sixth Column Settings */
    $wp_customize->add_section('sixth_client_section', array(
        'title'    => __('Sixth Client', 'indibiz'),
        'priority' => 42,
        'panel'  => 'clients_section',
    ));
    /* Sixth Client Settings */
    $wp_customize->add_setting('sixth_client_image', array(
        'default'           => get_template_directory_uri().'/images/DSC_1152.jpg',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_upload'
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'sixth_client_image', array(
        'label'    => __('Sixth Client Image', 'indibiz'),
        'section'  => 'sixth_client_section',
        'settings' => 'sixth_client_image',
    )));
    $wp_customize->add_setting('sixth_client_url', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default'           => '#',
    ));
    $wp_customize->add_control('sixth_client_url', array(
        'label'    => __('Sixth Client URL', 'indibiz'),
        'settings' => 'sixth_client_url',
        'section'  => 'sixth_client_section',
        'type'     => 'text',
    ));

    //  ===========================================
    //  ========== Footer Settings ===========
    //  ===========================================
    $wp_customize->add_panel( 'footer_panel', array(
        'priority'       => 45,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => __('Footer Area', 'indibiz'),
        'description'    => '',
    ) );

    //  =======================================
    //  ==== Footer Widget Display Setting ====
    //  =======================================
    $wp_customize->add_section('footer_widget', array(
        'title'    => __('Footer Widget Setting', 'indibiz'),
        'priority' => 46,
        'panel'    => 'footer_panel'
    ));
    $wp_customize->add_setting('footer_widget_style', array(
        'default'        => '4',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_choices'
    ));
    $wp_customize->add_control('footer_widget_style', array(
        'label'    => __('Footer Widget Style', 'indibiz'),
        'section'    => 'footer_widget',
        'settings'   => 'footer_widget_style',
        'type'       => 'radio',
        'choices'    => array(
                            '4' => 'Four Widget',
                            '3' => 'Three Widget',
                            '2' => 'Two Widget',
                            '1' => 'One Widget',
                        ),
    ));

    //  =============================
    //  ==== Footer Text Setting ====
    //  =============================

    $wp_customize->add_section('footer_text', array(
        'title'    => __('Footer Text', 'indibiz'),
        'priority' => 48,
        'panel'    => 'footer_panel'
    ));
    $wp_customize->add_setting('footer_credits', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('footer_credits', array(
        'label'    => __('Footer Credit Text', 'indibiz'),
        'section'  => 'footer_text',
        'settings' => 'footer_credits',
        'type'     => 'textarea',
    ));

    //  =============================
    //  ==== Social Media URL's ====
    //  =============================
    $wp_customize->add_section('social_section', array(
        'title'    => __('Social Media Options', 'indibiz'),
        'priority' => 51,
        'panel'    => 'footer_panel'
    ));

    $wp_customize->add_setting('social_facebook', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ));
    $wp_customize->add_control('social_facebook', array(
        'label'    => __('Facebook Page URL', 'indibiz'),
        'section'  => 'social_section',
        'settings' => 'social_facebook',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('social_twitter', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ));
    $wp_customize->add_control('social_twitter', array(
        'label'    => __('Twitter Page URL', 'indibiz'),
        'section'  => 'social_section',
        'settings' => 'social_twitter',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('social_google_plus', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ));
    $wp_customize->add_control('social_google_plus', array(
        'label'    => __('Google Plus Page URL', 'indibiz'),
        'section'  => 'social_section',
        'settings' => 'social_google_plus',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('social_youtube', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ));
    $wp_customize->add_control('social_youtube', array(
        'label'    => __('YouTube Page URL', 'indibiz'),
        'section'  => 'social_section',
        'settings' => 'social_youtube',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('social_instagram', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ));
    $wp_customize->add_control('social_instagram', array(
        'label'    => __('Instagram Page URL', 'indibiz'),
        'section'  => 'social_section',
        'settings' => 'social_instagram',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('social_rss', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ));
    $wp_customize->add_control('social_rss', array(
        'label'    => __('RSS Page URL', 'indibiz'),
        'section'  => 'social_section',
        'settings' => 'social_rss',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('social_pinterest', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ));
    $wp_customize->add_control('social_pinterest', array(
        'label'    => __('Pinterest Page URL', 'indibiz'),
        'section'  => 'social_section',
        'settings' => 'social_pinterest',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('social_linkedin', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ));
    $wp_customize->add_control('social_linkedin', array(
        'label'    => __('Linkedin Page URL', 'indibiz'),
        'section'  => 'social_section',
        'settings' => 'social_linkedin',
        'type'     => 'text',
    ));

    $wp_customize->add_setting('social_email', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea',
        'default' => '#'
    ));
    $wp_customize->add_control('social_email', array(
        'label'    => __('Email', 'indibiz'),
        'section'  => 'social_section',
        'settings' => 'social_email',
        'type'     => 'text',
    ));

    /* Custom CSS options */
    $wp_customize->get_section('colors')->title = esc_html__('Custom Style', 'indibiz');
    $wp_customize->add_setting('custom_css', array(
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'indibiz_sanitize_textarea'
    ));
    $wp_customize->add_control('custom_css', array(
        'label'    => __('Custom CSS', 'indibiz'),
        'section'  => 'colors',
        'settings' => 'custom_css',
        'type'     => 'textarea',
    ));
	// theme color
    $wp_customize->add_setting('custom_theme_color', array(
        'default'  => '#40BC69',
        'sanitize_callback' => 'indibiz_sanitize_color'
    ));
    // add color picker control
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'custom_theme_color', array(
        'label' => __('Theme Color', 'indibiz'),
        'section'  => 'colors',
        'settings' => 'custom_theme_color'
    ) ) );
	
}
add_action('customize_register','indibiz_customize_register');