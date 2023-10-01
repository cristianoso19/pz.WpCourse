<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PzGiftz.com</title>
    <?php wp_head() ?>
</head>

<body class="">
    <header class="p-3">
        <div class="navbar rounded-2xl bg-base-300">
            <div class="flex-1">
                <a class="btn btn-ghost normal-case text-xl">
                    PzGiftz
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" class="w-9" alt="logo">
                </a>
            </div>
            <div class="flex-none">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top_menu',
                        'menu_class' => 'p-2',
                        'container_class' => 'container-menu',
                        )
                    );
                ?>
            </div>
        </div>
    </header>