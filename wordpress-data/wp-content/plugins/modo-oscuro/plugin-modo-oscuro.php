<?php
//Plugin name: Modo Oscuro
//Description: Activa el modo oscuro en tu theme
//Version: 1.0
//Author: Cristian Sacta
//Author URI: https://github.com/cristianoso19

function estilos_plugin(){
    $actual_url = plugin_dir_url(__FILE__);
    wp_enqueue_script('custom', $actual_url.'/src/dark.js','', '1.0', true);

}
add_action('wp_enqueue_scripts','estilos_plugin');


?>