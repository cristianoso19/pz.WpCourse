<?php 
    function init_template(){
        add_theme_support('post_thumbnails');
        add_theme_support('title-tag');
        //Registrar un menu
        register_nav_menus(
            array(
                'top_menu' => 'Menú Principal'
            )
        );
    }
    
    add_action('after_setup_theme', 'init_template');

    function assets(){
        wp_register_style('daysiUI','https://cdn.jsdelivr.net/npm/daisyui@3.8.1/dist/full.css','','3.8.1','all');
        wp_register_style('onest','https://fonts.googleapis.com/css2?family=Onest:wght@200;400;700&display=swap','','1.0','all');

        wp_enqueue_style('estilos', get_stylesheet_uri(), array('daysiUI','onest'),'1.0', 'all');
        // Creamos un script cdn (internet) 
        wp_register_script('daysiUIjs','https://cdn.tailwindcss.com','','3.8.1',true); //true para que se ejecute en el footer
        wp_enqueue_script('daysiUIjs');
        // Creamos un script propio 
        // get_template_directory_uri() devuelve el path del tema
        wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js','','1.0',true);

    }
    add_action('wp_enqueue_scripts','assets');