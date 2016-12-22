<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library Kaira
 */

function customizer_library_kaira_options() {

	// Theme defaults
	$primary_color = '#4965A0';
	$secondary_color = '#3e578b';
    
    $body_font_color = '#7B7D80';
    $heading_font_color = '#5A5A5A';

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Logo
	$section = 'kra-favicon';
    
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Favicon', 'electa' ),
		'priority' => '10',
		'description' => __( 'Add a favicon to your website', 'electa' )
	);
    
	$options['kra-header-favicon'] = array(
		'id' => 'kra-header-favicon',
		'label'   => __( 'Favicon', 'electa' ),
		'section' => $section,
		'type'    => 'image',
		'default' => '',
	);
    
    
    // Header Settings
    $section = 'kra-header';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Header Options', 'electa' ),
        'priority' => '30'
    );
    
    $options['kra-header-slogan'] = array(
        'id' => 'kra-header-slogan',
        'label'   => __( 'Show Slogan', 'electa' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'Enable to a slogan for your site. This uses the Site Tagline', 'electa' ),
        'default' => 1,
    );
    $options['kra-header-search'] = array(
        'id' => 'kra-header-search',
        'label'   => __( 'Show Search', 'electa' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'Enable to show a search box on the site', 'electa' ),
        'default' => 1,
    );
    // Upsell Button One
    $options['kra-upsell-one'] = array(
        'id' => 'kra-upsell-one',
        'label'   => __( 'Stick Header', 'electa' ),
        'section' => $section,
        'type'    => 'upsell',
    );
    
    
    // Homepage Settings
    $section = 'kra-homepage';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Home Layout Options', 'electa' ),
        'priority' => '34'
    );
    
    $options['kra-home-blocks-layout'] = array(
        'id' => 'kra-home-blocks-layout',
        'label'   => __( 'Enable home blocks layout', 'electa' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'Enable this to change the layout of the home page to list posts as blocks. This shows ALL posts', 'electa' ),
        'default' => 0,
    );
    $options['kra-home-cats'] = array(
        'id' => 'kra-home-cats',
        'label'   => __( 'Home Categories', 'electa' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the ID\'s of the post categories you want to display in the home blocks.<br />Eg: "13,17,19"<br />(no spaces and only comma\'s and category ID\'s... NOT post ID\'s)<br /><br />Leaving it blank displays all posts.', 'electa' )
    );
    // Upsell Button Two
    $options['kra-upsell-two'] = array(
        'id' => 'kra-upsell-two',
        'label'   => __( 'Home Blocks Layout', 'electa' ),
        'section' => $section,
        'type'    => 'upsell',
    );


	// Colors
	$section = 'kra-styling';
    $font_choices = customizer_library_get_font_choices();

	$sections[] = array(
		'id' => $section,
		'title' => __( 'Styling Options', 'electa' ),
		'priority' => '40'
	);

	$options['kra-main-color'] = array(
		'id' => 'kra-main-color',
		'label'   => __( 'Main Color', 'electa' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $primary_color,
	);
	$options['kra-main-color-hover'] = array(
		'id' => 'kra-main-color-hover',
		'label'   => __( 'Secondary Color', 'electa' ),
		'section' => $section,
		'type'    => 'color',
		'default' => $secondary_color,
	);
    
    
    $options['kra-body-font'] = array(
        'id' => 'kra-body-font',
        'label'   => __( 'Body Font', 'electa' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_choices,
        'default' => 'Open Sans'
    );
    $options['kra-body-font-color'] = array(
        'id' => 'kra-body-font-color',
        'label'   => __( 'Body Font Color', 'electa' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $body_font_color,
    );
    $options['kra-heading-font'] = array(
        'id' => 'kra-heading-font',
        'label'   => __( 'Headings Font', 'electa' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $font_choices,
        'default' => 'Roboto'
    );
    $options['kra-heading-font-color'] = array(
        'id' => 'kra-heading-font-color',
        'label'   => __( 'Heading Font Color', 'electa' ),
        'section' => $section,
        'type'    => 'color',
        'default' => $heading_font_color,
    );
    
    $options['kra-custom-css'] = array(
        'id' => 'kra-custom-css',
        'label'   => __( 'Custom CSS', 'electa' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( '', 'electa'),
        'description' => __( 'Add custom CSS to your theme. For advanced custom styling we recommend using a <a href="https://wordpress.org/plugins/so-css/" target="_blank">Custom CSS plugin</a>', 'electa' )
    );
    
    
    // Blog Settings
    $section = 'kra-blog';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Blog Layout Options', 'electa' ),
        'priority' => '160'
    );
    
    $options['kra-blog-blocks-layout'] = array(
        'id' => 'kra-blog-blocks-layout',
        'label'   => __( 'Enable blog blocks layout', 'electa' ),
        'section' => $section,
        'type'    => 'checkbox',
        'description' => __( 'Enable this to change the layout of the blog page to list posts as blocks. This shows ALL posts', 'electa' ),
        'default' => 0,
    );
    $options['kra-blog-cats'] = array(
        'id' => 'kra-blog-cats',
        'label'   => __( 'Blog Categories', 'electa' ),
        'section' => $section,
        'type'    => 'text',
        'description' => __( 'Enter the ID\'s of the post categories you want to EXCLUDE from the blog, with a minus(-) before it.<br />Eg: "-13,-17,-19" (no spaces and only comma\'s and category ID\'s... NOT post ID\'s)', 'electa' )
    );
    // Upsell Button Three
    $options['kra-upsell-three'] = array(
        'id' => 'kra-upsell-three',
        'label'   => __( 'Blog Blocks Layout', 'electa' ),
        'section' => $section,
        'type'    => 'upsell',
    );
    $options['kra-blog-title'] = array(
        'id' => 'kra-blog-title',
        'label'   => __( 'Blog Page Title', 'electa' ),
        'section' => $section,
        'type'    => 'text',
        'default' => 'Blog'
    );
    // Upsell Button Three
    $options['kra-upsell-three-two'] = array(
        'id' => 'kra-upsell-three-two',
        'label'   => __( 'Category/Archive Blogs layout', 'electa' ),
        'section' => $section,
        'type'    => 'upsell',
    );
    
    
    // Social Settings
    $section = 'kra-social';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Social Links', 'electa' ),
        'priority' => '160'
    );
    
    // Upsell Button Four
    $options['kra-upsell-four'] = array(
        'id' => 'kra-upsell-four',
        'label'   => __( 'Enable Social Links', 'electa' ),
        'section' => $section,
        'type'    => 'upsell',
    );
    
    
    // Site Text Settings
    $section = 'kra-website';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Website Text', 'electa' ),
        'priority' => '160'
    );
    
    // Upsell Button Five
    $options['kra-upsell-five'] = array(
        'id' => 'kra-upsell-five',
        'label'   => __( 'Site Copy Text', 'electa' ),
        'section' => $section,
        'type'    => 'upsell',
    );
    $options['kra-website-error-head'] = array(
        'id' => 'kra-website-error-head',
        'label'   => __( '404 Error Page Heading', 'electa' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( 'Oops! That page can\'t be found.', 'electa'),
        'description' => __( 'Enter the heading for the 404 Error page', 'electa' )
    );
    $options['kra-website-error-msg'] = array(
        'id' => 'kra-website-error-msg',
        'label'   => __( 'Error 404 Message', 'electa' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'The page you are looking for can\'t be found. Please select one of the options below.', 'electa'),
        'description' => __( 'Enter the default text on the 404 error page (Page not found)', 'electa' )
    );
    $options['kra-website-nosearch-msg'] = array(
        'id' => 'kra-website-nosearch-msg',
        'label'   => __( 'No Search Results', 'electa' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords or return to home.', 'electa'),
        'description' => __( 'Enter the default text for when no search results are found', 'electa' )
    );

	// Adds the sections to the $options array
	$options['sections'] = $sections;

	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'customizer_library_kaira_options' );
