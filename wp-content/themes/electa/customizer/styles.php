<?php
/**
 * Implements styles set in the theme customizer
 *
 * @package Customizer Library Kaira
 */

if ( ! function_exists( 'customizer_library_kaira_build_styles' ) && class_exists( 'Customizer_Library_Styles' ) ) :
/**
 * Process user options to generate CSS needed to implement the choices.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_kaira_build_styles() {

	// Main Color
	$color = 'kra-main-color';
	$colormod = get_theme_mod( $color, customizer_library_get_default( $color ) );
    
    $bgcolor = 'kra-main-color';
    $bgcolormod = get_theme_mod( $bgcolor, customizer_library_get_default( $bgcolor ) );

	if ( $colormod !== customizer_library_get_default( $color ) ) {

		$sancolor = sanitize_hex_color( $colormod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'a,
                .pc-text a,
                .site-branding a,
                .entry-content a,
                .entry-footer a,
                .search-btn,
                .search-button .fa-search,
                .widget ul li a'
			),
			'declarations' => array(
				'color' => $sancolor
			)
		) );
	}
    
    if ( $bgcolormod !== customizer_library_get_default( $bgcolor ) ) {

        $bgsancolor = sanitize_hex_color( $bgcolormod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.pc-bg,
                .electa-button,
                #comments .form-submit #submit,
                .main-navigation li.current-menu-item > a,
                .main-navigation li.current_page_item > a,
                .main-navigation li.current-menu-parent > a,
                .main-navigation li.current_page_parent > a,
                .main-navigation li.current-menu-ancestor > a,
                .main-navigation li.current_page_ancestor > a,
                .main-navigation button,
                .wpcf7-submit'
            ),
            'declarations' => array(
                'background-color' => $bgsancolor . ' !important'
            )
        ) );
    }

	// Main Color Hover
	$colorh = 'kra-main-color-hover';
	$colorhmod = get_theme_mod( $colorh, customizer_library_get_default( $colorh ) );
    
    $bgcolorh = 'kra-main-color-hover';
    $bgcolorhmod = get_theme_mod( $bgcolorh, customizer_library_get_default( $bgcolorh ) );

	if ( $colorhmod !== customizer_library_get_default( $colorh ) ) {

		$sancolorh = sanitize_hex_color( $colorhmod );

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'a:hover,
                .pc-text a:hover,
                .entry-content a:hover,
                .entry-footer a:hover,
                .search-btn:hover,
                .search-button .fa-search:hover,
                .widget ul li a:hover'
			),
			'declarations' => array(
				'color' => $sancolorh
			)
		) );
	}
    
    if ( $bgcolorhmod !== customizer_library_get_default( $bgcolorh ) ) {

        $bgsancolorh = sanitize_hex_color( $bgcolorhmod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                '.pc-bg:hover,
                .electa-button:hover,
                .main-navigation button:hover,
                #comments .form-submit #submit:hover,
                .wpcf7-submit:hover'
            ),
            'declarations' => array(
                'background-color' => $bgsancolorh . ' !important'
            )
        ) );
    }


	// Body Font
	$font = 'kra-body-font';
	$fontmod = get_theme_mod( $font, customizer_library_get_default( $font ) );
	$fontstack = customizer_library_get_font_stack( $fontmod );
    
    $fontcolor = 'kra-body-font-color';
    $fontcolormod = get_theme_mod( $fontcolor, customizer_library_get_default( $fontcolor ) );

	if ( $fontmod != customizer_library_get_default( $font ) ) {

		Customizer_Library_Styles()->add( array(
			'selectors' => array(
				'body,
                .page-header h1,
                .alba-banner-heading h5,
                .alba-carousel-block,
                .alba-heading-text'
			),
			'declarations' => array(
				'font-family' => $fontstack
			)
		) );

	}
    
    if ( $fontcolormod !== customizer_library_get_default( $fontcolor ) ) {

        $sanfontcolor = sanitize_hex_color( $fontcolormod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'body,
                .page-header h1,
                .alba-banner-heading h5,
                .alba-carousel-block,
                .alba-heading-text'
            ),
            'declarations' => array(
                'color' => $sanfontcolor
            )
        ) );
    }
    
    
    // Heading Font
    $hfont = 'kra-heading-font';
    $hfontmod = get_theme_mod( $hfont, customizer_library_get_default( $hfont ) );
    $hfontstack = customizer_library_get_font_stack( $hfontmod );
    
    $hfontcolor = 'kra-heading-font-color';
    $hfontcolormod = get_theme_mod( $hfontcolor, customizer_library_get_default( $hfontcolor ) );

    if ( $hfontmod != customizer_library_get_default( $hfont ) ) {

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'h1, h2, h3, h4, h5, h6,
                h1 a, h2 a, h3 a, h4 a, h5 a, h6 a'
            ),
            'declarations' => array(
                'font-family' => $hfontstack
            )
        ) );

    }
    
    if ( $hfontcolormod !== customizer_library_get_default( $hfontcolor ) ) {

        $sanhfontcolor = sanitize_hex_color( $hfontcolormod );

        Customizer_Library_Styles()->add( array(
            'selectors' => array(
                'h1, h2, h3, h4, h5, h6,
                h1 a, h2 a, h3 a, h4 a, h5 a, h6 a'
            ),
            'declarations' => array(
                'color' => $sanhfontcolor
            )
        ) );
    }


}
endif;

add_action( 'customizer_library_styles', 'customizer_library_kaira_build_styles' );

if ( ! function_exists( 'customizer_library_kaira_styles' ) ) :
/**
 * Generates the style tag and CSS needed for the theme options.
 *
 * By using the "Customizer_Library_Styles" filter, different components can print CSS in the header.
 * It is organized this way to ensure there is only one "style" tag.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function customizer_library_kaira_styles() {

	do_action( 'customizer_library_styles' );

	// Echo the rules
	$css = Customizer_Library_Styles()->build();

	if ( ! empty( $css ) ) {
		echo "\n<!-- Begin Custom CSS -->\n<style type=\"text/css\" id=\"kaira-custom-css\">\n";
		echo $css;
		echo "\n</style>\n<!-- End Custom CSS -->\n";
	}
}
endif;

add_action( 'wp_head', 'customizer_library_kaira_styles', 11 );