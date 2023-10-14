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
    <div class="mx-9">
        <h2 class="my-9 text-4xl text-center">Productos</h2>
        <div class="flex flex-wrap gap-6 justify-center">
            <?php 
            $args = array(
                'post_type' => 'producto',
                'post_per_page' => -1,
                'order' => 'ASC',
                'orderby' => 'title',
            );

            $productos = new WP_Query($args);
            if ($productos->have_posts()){
                while($productos->have_posts()){
                    $productos->the_post();
                    $urlProducto = get_the_post_thumbnail_url();
                    ?>
                    <div class="card w-96 bg-base-100 shadow-xl">
                        <figure class="h-48"><img src="<?php echo $urlProducto; ?>" alt=""></figure>
                        <div class="card-body">
                            <h2 class="card-title"><?php the_title();?></h2>
                            <p>If a dog chews shoes whose shoes does he choose?</p>
                            <div class="card-actions justify-end">
                                <button class="btn btn-primary" onclick="location.href='<?php the_permalink()?>'">Buy Now</button>
                            </div>
                        </div>
                    </div>
                <?php }
            }
            ?>
        </div>
    </div>

</main>
<?php get_footer(); ?>