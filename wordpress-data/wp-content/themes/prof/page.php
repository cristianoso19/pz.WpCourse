<?php get_header();?>
<main class="min-h-screen bg-base-200">
    <?php 
        if (have_posts()){
            while(have_posts()){
                the_post();?>
                <h1 class="text-5xl text-center p-10 font-bold"><?php the_title();?></h1>
                <br>
                <div class="w-96 text-center mx-auto">
                    <?php the_content();?>
                </div>
                <?php
            }
        }
    ?>
</main>
<?php get_footer();?>