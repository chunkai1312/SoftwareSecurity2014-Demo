<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * default layout
 * Location: application/views/
 */
$config['template_layout'] = 'layouts/master/layout';

/**
 * default css
 */
$config['template_css'] = array(
    // Bootstrap Core CSS
    'assets/css/bootstrap.min.css' => 'screen',
    
    // Fonts
    'assets/font-awesome/css/font-awesome.min.css' => 'screen',
    //'http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' => 'screen',
    //'http://fonts.googleapis.com/css?family=Montserrat:400,700' => 'screen',
);

/**
 * default javascript
 * load javascript on header: FALSE
 * load javascript on footer: TRUE
 */
$config['template_js'] = array(
    // Core JavaScript Files  
    base_url() . '/assets/js/jquery-1.10.2.js' => FALSE,
    base_url() . '/assets/js/jquery.easing-1.3.min.js' => FALSE,
    base_url() . '/assets/js/bootstrap.min.js' => FALSE,
    
    // Google Maps API Key - You will need to use your own API key to use the map feature 
    'https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false' => FALSE, 
);

/**
 * default variable
 */
$config['template_vars'] = array(
    'site_description' => '早回杏福',
    'site_keywords' => '早回杏福'
);

/**
 * default site title
 */
$config['base_title'] = '早回杏福';

/**
 * default title separator
 */
$config['title_separator'] = ' | ';
