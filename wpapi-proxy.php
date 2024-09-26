<?php
/*
 * Plugin Name: WPAPI Proxy
 * Description: Proxy WordPress API requests
 * Version: 0.0.1
 */

/*
 * Forces WordPress.org traffic through remote proxy
 * 
 * Checks if the request URL contains 'wordpress.org' and then sends the request through the proxy.
 * 
 * @param bool|null $res Whether to send the request through the proxy. Default null.
 * @param string    $url      URL of the request.
 * @param array     $check    Associative array result of parsing the request URL with `parse_url()`.
 * @param array     $home     Associative array result of parsing the site URL with `parse_url()`.
 * @return bool|null 
 */ 
add_filter('pre_http_send_through_proxy', function($res, $url, $check, $home):null|bool {

    // if WP_BYPASS_HOSTS is set then we should honour that.
    if (defined('WP_BYPASS_HOSTS')) {
        return null;
    }

    if (strpos($url, 'wordpress.org') !== false) {
       return true;
    }

    // This is overriding the default behaviour of sending all traffic through proxy.
    return false;
}, 10, 4);