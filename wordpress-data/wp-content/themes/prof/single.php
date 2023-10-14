<?php get_header();?>
<main class="flex-grow bg-base-200 p-3 lg:max-w-screen-lg lg:mx-auto">
    <?php 
        if (have_posts()){
            while(have_posts()){
                the_post();
                $thumbnailUrl = get_the_post_thumbnail_url();
                ?>
                <div class="flex py-10 ">
                    <div class="w-1/2 md:w-full">
                        <figure>
                            <image class="max-w-sm rounded-lg shadow-2xl mx-auto" src="<?php echo $thumbnailUrl?>"></image>
                        </figure>
                    </div>

                    <div class="w-1/2 md:w-full">
                        <h1 class="text-5xl font-bold"><?php the_title();?></h1>
                        <div class="py-6">
                            <?php the_content();?>
                        </div>
                    </div>
                </div>
               <?php
            }
        }
    ?>
</main>
<?php get_footer();?>