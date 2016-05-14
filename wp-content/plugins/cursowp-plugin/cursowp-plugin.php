<?php
/**
 * Plugin Name: Plugin CursoWP
 * Description: Plugin para treinamento do CursoWP
 * Version: 1.0
 * Author: AZ Informática | Gaboso
 */


/**
 * Incluindo arquivos post types
 **/

foreach (glob(plugin_dir_path(__FILE__) . 'post-types/*.php') as $filename) {
    require_once $filename;
}

require_once plugin_dir_path(__FILE__) . 'config-admin-page.php';

?>
