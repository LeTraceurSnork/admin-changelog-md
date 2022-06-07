<?php
/**
 * @package SpectrumData
 * @version 1.0.0
 *
 * Plugin Name: Admin CHANGELOG.md
 * Description: Используется когда возникает необходимость показать изменения в последнем CHANGELOG.md внутри админ-панели WP
 * Author: LeTraceurSnork
 * Version: 1.0.0
 */

require_once ABSPATH . "vendor/autoload.php";

use SpectrumData\Plugin\Changelog\ChangelogPage;

add_action('admin_menu', function () {
    add_menu_page('CHANGELOG', 'CHANGELOG', 'manage_options', 'changelog', array(new ChangelogPage(), 'showChangelogPage'));
});

add_action('admin_enqueue_scripts', function () {
    wp_enqueue_style('wp-admin-menu-changelog-styles', plugin_dir_url(__FILE__) . 'style.css');
});
