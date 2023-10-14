<?php get_header(); ?>

<main class="">

    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            $url = get_the_post_thumbnail_url();
    ?>

    <div class="hero min-h-screen" style="background-image: url(<?php echo $url ?>);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h class="mb-5 text-5xl font-bold"><?php the_title(); ?></h>
            </div>
        </div>
    </div>

    <?php
        }
    }
    ?>

</main>
<?php get_footer(); ?>