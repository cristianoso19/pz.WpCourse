<?php get_header(); ?>

<main class="">

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>
            <div class="hero w-full py-8 bg-base-200">
                <div class="hero-content flex-col lg:flex-row">
                    <?php the_content(); ?>
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