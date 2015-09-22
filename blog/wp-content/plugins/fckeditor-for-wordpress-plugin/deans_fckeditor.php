<?php
/*
Plugin Name: Dean's FCKEditor For Wordpress
Plugin URI: http://www.deanlee.cn/wordpress/fckeditor-for-wordpress-plugin/
Description: <strong>WARNING: This extension is no longer functional and maintained</strong>
Version: 3.3.2
Author: Dean Lee
Author URI: http://www.deanlee.cn/
*/
require_once('unmaintained.php');
require_once('deans_fckeditor_class.php');
add_action('admin_notices', 'deans_fckeditor_unmaintained');
register_deactivation_hook(basename(dirname(__FILE__)).'/' . basename(__FILE__), array(&$deans_fckeditor, 'deactivate'));
?>