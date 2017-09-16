<?php

/**
 * Sanitization for textarea field
 */
function indibiz_sanitize_textarea( $input ) {
    global $allowedposttags;
    $output = wp_kses( $input, $allowedposttags );
    return $output;
}

/**
 * Returns a sanitized filepath if it has a valid extension.
 */
function indibiz_sanitize_upload( $upload ) {
    $return = '';
    $fype = wp_check_filetype( $upload );
    if ( $fype["ext"] ) {
        $return = esc_url_raw( $upload );
    }
    return $return;
}

/**
 * vaild int.
 */
function indibiz_sanitize_int( $input ) {
$return = absint($input);
    return $return;
}

/*
 * vaild Color Code.
 */
function indibiz_sanitize_color( $color ) {
    if ( '' === $color )
        return '';
 
    // 3 or 6 hex digits, or the empty string.
    if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) )
        return $color;
}

function indibiz_sanitize_choices( $input, $setting ) {
    global $wp_customize;
 
    $control = $wp_customize->get_control( $setting->id );
 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}


/**
* function to sanitize the html strings
* Allowed only the WordPress allowed html tags and script tag
* @param string $value
* @return string
*/
function indibiz_sanitize_script($value) {
   $array = wp_kses_allowed_html('post');
   $allowedtags = array(
       'script' => array(
           'type' => array(),
           'src' => array(),
       )
   );
   $data = array_merge($allowedtags, $array);
   $value = wp_kses($value, $data);
   return $value;
}

?>