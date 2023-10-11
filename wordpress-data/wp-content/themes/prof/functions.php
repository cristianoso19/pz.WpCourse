<?php 
    function init_template(){
        add_theme_support('post-thumbnails');
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
        wp_register_style('daysiUI',get_template_directory_uri().'/dist/output.css');
        wp_register_style('onest','https://fonts.googleapis.com/css2?family=Onest:wght@200;400;700&display=swap','','1.0','all');

        wp_enqueue_style('estilos', get_stylesheet_uri(), array('daysiUI','onest'),'1.0', 'all');
        // Creamos un script cdn (internet) 
        //wp_register_script('daysiUIjs','https://cdn.tailwindcss.com','','3.8.1',true); //true para que se ejecute en el footer
        //wp_enqueue_script('daysiUIjs');
        // Creamos un script propio 
        // get_template_directory_uri() devuelve el path del tema
        wp_enqueue_script('custom',get_template_directory_uri().'/assets/js/custom.js','','1.0',true);

    }
    add_action('wp_enqueue_scripts','assets');
    
    //widget
    function sidebar(){
        register_sidebar(
            array(
                'name' => 'Pie de página',
                'id' => 'footer',
                'description' => 'Zona de widgets para footer',
                'before_title' => '<p>',
                'after_title' => '</p>',
                'before_widget' => '<div id="%1$s" class="%2$s">',
                'after_widget' => '</div>',
            )
        );
    }

    add_action('widgets_init', 'sidebar');
    function productos_type(){
        $labels = array(
            'name' => __('Productos','textdomain'),
            'singular_name' => __('Producto','textdomain'),
            'menu_name' => 'Productos',
        );
    
        $args = array(
            'label'  => 'Productos', 
            'description' => 'Productos de Platzi',
            'labels'       => $labels,
            'supports'   => array('title','editor','thumbnail', 'revisions'),
            'public'    => true,
            'show_in_menu' => true,
            'menu_position' => 5,
            'menu_icon'     => 'dashicons-cart',
            'can_export' => true,
            'publicly_queryable' => true,
            'rewrite'       => array( 'slug' => 'producto' ),
            'show_in_rest' => true,
            'has_archive' => true,
        );    
        register_post_type('producto', $args);
    }
    
    add_action('init', 'productos_type');
