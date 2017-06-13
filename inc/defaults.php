<?php
defined( 'WPINC' ) or die;

if ( ! function_exists( 'generate_get_defaults' ) ) :
/**
 * Set default options
 * 
 * @since 0.1
 *
 * @return array Option defaults.
 */
function generate_get_defaults() {	
	$defaults = array(
		'hide_title' => '',
		'hide_tagline' => '',
		'logo' => '',
		'top_bar_width' => 'full',
		'top_bar_inner_width' => 'contained',
		'top_bar_alignment' => 'right',
		'container_width' => '1100',
		'header_layout_setting' => 'fluid-header',
		'header_inner_width' => 'contained',
		'nav_alignment_setting' => ( is_rtl() ) ? 'right' : 'left',
		'header_alignment_setting' => ( is_rtl() ) ? 'right' : 'left',
		'nav_layout_setting' => 'fluid-nav',
		'nav_inner_width' => 'contained',
		'nav_position_setting' => 'nav-below-header',
		'nav_dropdown_type' => 'hover',
		'nav_search' => 'disable',
		'content_layout_setting' => 'separate-containers',
		'layout_setting' => 'right-sidebar',
		'blog_layout_setting' => 'right-sidebar',
		'single_layout_setting' => 'right-sidebar',
		'post_content' => 'full',
		'footer_layout_setting' => 'fluid-footer',
		'footer_inner_width' => 'contained',
		'footer_widget_setting' => '3',
		'footer_bar_alignment' => 'right',
		'back_to_top' => '',
		'background_color' => '#efefef',
		'text_color' => '#3a3a3a',
		'link_color' => '#1e73be',
		'link_color_hover' => '#000000',
		'link_color_visited' => '',
	);
	
	return apply_filters( 'generate_option_defaults', $defaults );
}
endif;

if ( ! function_exists( 'generate_get_color_defaults' ) ) :
/**
 * Set default options
 * function_exists() required as this was defined in GP Premium
 *
 * @since 0.1
 *
 * @return array Option defaults.
 */
function generate_get_color_defaults() {
	$defaults = array(
		'top_bar_background_color' => '#636363',
		'top_bar_text_color' => '#ffffff',
		'top_bar_link_color' => '#ffffff',
		'top_bar_link_color_hover' => '#303030',
		'header_background_color' => '#ffffff',
		'header_text_color' => '#3a3a3a',
		'header_link_color' => '#3a3a3a',
		'header_link_hover_color' => '',
		'site_title_color' => '#222222',
		'site_tagline_color' => '#999999',
		'navigation_background_color' => '#222222',
		'navigation_text_color' => '#ffffff',
		'navigation_background_hover_color' => '#3f3f3f',
		'navigation_text_hover_color' => '#ffffff',
		'navigation_background_current_color' => '#3f3f3f',
		'navigation_text_current_color' => '#ffffff',
		'subnavigation_background_color' => '#3f3f3f',
		'subnavigation_text_color' => '#ffffff',
		'subnavigation_background_hover_color' => '#4f4f4f',
		'subnavigation_text_hover_color' => '#ffffff',
		'subnavigation_background_current_color' => '#4f4f4f',
		'subnavigation_text_current_color' => '#ffffff',
		'content_background_color' => '#ffffff',
		'content_text_color' => '',
		'content_link_color' => '',
		'content_link_hover_color' => '',
		'content_title_color' => '',
		'blog_post_title_color' => '',
		'blog_post_title_hover_color' => '',
		'entry_meta_text_color' => '#888888',
		'entry_meta_link_color' => '#666666',
		'entry_meta_link_color_hover' => '#1e73be',
		'h1_color' => '',
		'h2_color' => '',
		'h3_color' => '',
		'sidebar_widget_background_color' => '#ffffff',
		'sidebar_widget_text_color' => '',
		'sidebar_widget_link_color' => '',
		'sidebar_widget_link_hover_color' => '',
		'sidebar_widget_title_color' => '#000000',
		'footer_widget_background_color' => '#ffffff',
		'footer_widget_text_color' => '',
		'footer_widget_link_color' => '',
		'footer_widget_link_hover_color' => '',
		'footer_widget_title_color' => '#000000',
		'footer_background_color' => '#222222',
		'footer_text_color' => '#ffffff',
		'footer_link_color' => '#ffffff',
		'footer_link_hover_color' => '#606060',
		'form_background_color' => '#fafafa',
		'form_text_color' => '#666666',
		'form_background_color_focus' => '#ffffff',
		'form_text_color_focus' => '#666666',
		'form_border_color' => '#cccccc',
		'form_border_color_focus' => '#bfbfbf',
		'form_button_background_color' => '#666666',
		'form_button_background_color_hover' => '#3f3f3f',
		'form_button_text_color' => '#ffffff',
		'form_button_text_color_hover' => '#ffffff'
	);
	
	return apply_filters( 'generate_color_option_defaults', $defaults );
}
endif;

if ( ! function_exists( 'generate_get_default_fonts' ) ) :
/**
 * Set default options
 * function_exists() required as this was defined in GP Premium
 *
 * @since 0.1
 *
 * @param bool $filter Whether to return the filtered values or original values.
 * @return array Option defaults.
 */
function generate_get_default_fonts( $filter = true ) {
	$defaults = array(
		'font_body' => 'Open Sans',
		'font_body_category' => 'sans-serif',
		'font_body_variants' => '300,300italic,regular,italic,600,600italic,700,700italic,800,800italic',
		'body_font_weight' => 'normal',
		'body_font_transform' => 'none',
		'body_font_size' => '17',
		'body_line_height' => '1.5', // no unit
		'paragraph_margin' => '1.5', // em
		'font_top_bar' => 'inherit',
		'font_top_bar_category' => '',
		'font_top_bar_variants' => '',
		'top_bar_font_weight' => 'normal',
		'top_bar_font_transform' => 'none',
		'top_bar_font_size' => '13',
		'font_site_title' => 'inherit',
		'font_site_title_category' => '',
		'font_site_title_variants' => '',
		'site_title_font_weight' => 'bold',
		'site_title_font_transform' => 'none',
		'site_title_font_size' => '45',
		'mobile_site_title_font_size' => '30',
		'font_site_tagline' => 'inherit',
		'font_site_tagline_category' => '',
		'font_site_tagline_variants' => '',
		'site_tagline_font_weight' => 'normal',
		'site_tagline_font_transform' => 'none',
		'site_tagline_font_size' => '15',
		'font_navigation' => 'inherit',
		'font_navigation_category' => '',
		'font_navigation_variants' => '',
		'navigation_font_weight' => 'normal',
		'navigation_font_transform' => 'none',
		'navigation_font_size' => '15',
		'font_widget_title' => 'inherit',
		'font_widget_title_category' => '',
		'font_widget_title_variants' => '',
		'widget_title_font_weight' => 'normal',
		'widget_title_font_transform' => 'none',
		'widget_title_font_size' => '20',
		'widget_content_font_size' => '17',
		'font_heading_1' => 'inherit',
		'font_heading_1_category' => '',
		'font_heading_1_variants' => '',
		'heading_1_weight' => '300',
		'heading_1_transform' => 'none',
		'heading_1_font_size' => '40',
		'mobile_heading_1_font_size' => '30',
		'font_heading_2' => 'inherit',
		'font_heading_2_category' => '',
		'font_heading_2_variants' => '',
		'heading_2_weight' => '300',
		'heading_2_transform' => 'none',
		'heading_2_font_size' => '30',
		'mobile_heading_2_font_size' => '25',
		'font_heading_3' => 'inherit',
		'font_heading_3_category' => '',
		'font_heading_3_variants' => '',
		'heading_3_weight' => 'normal',
		'heading_3_transform' => 'none',
		'heading_3_font_size' => '20',
		'footer_font_size' => '15'
	);
	
	if ( $filter ) {
		return apply_filters( 'generate_font_option_defaults', $defaults );
	}
	
	return $defaults;
}
endif;

if ( ! function_exists( 'generate_spacing_get_defaults' ) ) :
/**
 * Set the default options
 * function_exists() required as this was defined in GP Premium
 *
 * @since 0.1
 *
 * @param bool $filter Whether to return the filtered values or original values.
 * @return array Option defaults.
 */
function generate_spacing_get_defaults( $filter = true ) {
	$defaults = array(
		'top_bar_top' => '10',
		'top_bar_right' => '10',
		'top_bar_bottom' => '10',
		'top_bar_left' => '10',
		'header_top' => '40',
		'header_right' => '40',
		'header_bottom' => '40',
		'header_left' => '40',
		'menu_item' => '20',
		'menu_item_height' => '60',
		'sub_menu_item_height' => '10',
		'content_top' => '40',
		'content_right' => '40',
		'content_bottom' => '40',
		'content_left' => '40',
		'mobile_content_top' => '30',
		'mobile_content_right' => '30',
		'mobile_content_bottom' => '30',
		'mobile_content_left' => '30',
		'separator' => '20',
		'left_sidebar_width' => '25',
		'right_sidebar_width' => '25',
		'widget_top' => '40',
		'widget_right' => '40',
		'widget_bottom' => '40',
		'widget_left' => '40',
		'footer_widget_container_top' => '40',
		'footer_widget_container_right' => '40',
		'footer_widget_container_bottom' => '40',
		'footer_widget_container_left' => '40',
		'footer_widget_separator' => '40',
		'footer_top' => '20',
		'footer_right' => '20',
		'footer_bottom' => '20',
		'footer_left' => '20',
	);
	
	if ( $filter ) {
		return apply_filters( 'generate_spacing_option_defaults', $defaults );
	}
	
	return $defaults;
}
endif;