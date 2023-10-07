<?php get_header(); ?>

<main class="">

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
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
            </div>
    <?php
        }
    }
    ?>
</main>
<?php get_footer(); ?>