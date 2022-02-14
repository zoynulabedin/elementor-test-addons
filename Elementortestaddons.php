<?php 
/*
Plugin Name: Elementor Test Addons
Description: Demo plugin for Elementor addon.
Plugin URI: http://wppixelfit.com/
Author: wppixelfit
Author URI:http://wppixelfit.com/
Version:1.0
License:GPL2 or later
Text Domain: elementor-test-addons
Domain Path: /lang
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

final class Elementortestaddons{
    const VERSION = '1.0.0';
    const MINIMUM_ELEMENTOR_VERSION = '2.0.0';
    const MINIMUM_PHP_VERSION = '7.0';
    private static $_instance = null;
    public static function instance() {}

    public function __construct() {}
    public function init() {}
    public function includes() {}
}