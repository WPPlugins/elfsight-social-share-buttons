<?php
/*
Plugin Name: Elfsight Social Share Buttons
Description: Sharing your content and increasing your social media presents now requires no effort.
Plugin URI: https://elfsight.com/social-share-buttons-widget/?utm_source=markets&utm_medium=wordpressorg&utm_campaign=social-share-buttons&utm_content=plugin-site
Version: 1.0.0
Author: Elfsight
Author URI: https://elfsight.com/?utm_source=markets&utm_medium=wordpressorg&utm_campaign=social-share-buttons&utm_content=plugins-list
*/

if (!defined('ABSPATH')) exit;

require_once('elfsight-portal/elfsight-portal.php');

new ElfsightPortal(array(
        'app_slug' => 'elfsight-social-share-buttons',
        'app_name' => 'Social Share Buttons',
        'app_version' => '1.0.0',

        'plugin_slug' => plugin_basename(__FILE__),
        'plugin_menu_icon' => plugins_url('assets/img/menu-icon.png', __FILE__),

        'embed_url' => 'https://apps.elfsight.com/embed/social-share-buttons/?utm_source=portals&utm_medium=wordpress&utm_campaign=social-share-buttons&utm_content=sign-up'
    )
);

?>