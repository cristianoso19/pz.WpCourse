<?php get_header(); ?>

<main class="">

    <?php
    if (have_posts()) {
        while (have_posts()) {
<<<<<<< HEAD
            the_post(); 
            
            $thumbnail_id = get_post_thumbnail_id();
            //echo $thumbnail_id;
            // Obtiene la URL de la imagen utilizando el ID de la imagen destacada
            echo get_the_post_thumbnail();
            $image_url = wp_get_attachment_url('hero-image'); 
            echo wp_get_attachment_image_src('hero-image');
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'original'); 
            echo $featured_img_url;
            ?>
                <div class="hero min-h-screen" style="background-image: url(' <?php echo $image_url; ?> ');">
                    <div class="hero-overlay bg-opacity-60"></div>
                    <div class="hero-content text-center text-neutral-content">
                        <div class="max-w-md">
                            <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                            <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                            <button class="btn btn-primary">Get Started</button>
                        </div>
                    </div>
                </div>

                <div class="hero w-full py-8 bg-base-200">


                <div class="hero-content flex-col lg:flex-row">
                    <?php
                        $content = get_the_content();
                        // Agrega la clase de Tailwind a la imagen
                        $content_with_classes = preg_replace('/<img(.*?)class=["\'](.*?)["\'](.*?)>/i', '<img$1class="$2 max-w-sm rounded-lg shadow-2xl"$3>', $content);
                        // Muestra el contenido con la clase de Tailwind agregada a la imagen
                        echo $content_with_classes;
                    ?>
                    <div>
                        <h1 class="text-5xl font-bold"><?php the_title(); ?></h1>
                    </div>
                </div>
=======
            the_post();
            $url = get_the_post_thumbnail_url();
    ?>

    <div class="hero min-h-screen" style="background-image: url(<?php echo $url ?>);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h class="mb-5 text-5xl font-bold"><?php the_title(); ?></h>
>>>>>>> tailwind
            </div>
        </div>
    </div>

    <?php
        }
    }
    ?>
</main>
<?php get_footer(); ?>