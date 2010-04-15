<?php 
// Use this file to define customized helper functions, filters or 'hacks' defined
// specifically for use in your Omeka theme. Note that helper functions that are
// designed for portability across themes should be grouped into a plugin whenever
// possible.

add_filter(array('Display', 'Item', 'Dublin Core', 'Title'), 'show_untitled_items');

function show_untitled_items($title)
{
    // Remove all whitespace and formatting before checking to see if the title 
    // is empty.
    $prepTitle = trim(strip_formatting($title));
    if (empty($prepTitle)) {
        return '[Untitled]';
    }
    return $title;
}

/**
 * This function checks the Logo theme option, then returns either an
 * image tag with the logo as the src, or returns null.
 *
 **/
function berlin_display_logo()
{
    if(function_exists('get_theme_option')) {
        
        $logo = get_theme_option('Logo');
        
        $logoPath = WEB_THEME_UPLOADS.DIRECTORY_SEPARATOR.$logo;
        
	    $siteTitle = $logo ? '<img src="'.$logoPath.'" title="'.settings('site_title').'" />' : null;
	
	    return $siteTitle;
    }
    
    return null;
}