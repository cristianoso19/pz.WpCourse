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
            <div class="flex-auto">
                <a class="btn btn-ghost normal-case text-xl">
                    PzGiftz
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.svg" class="w-9" alt="logo">
                </a>
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'top_menu',
                        'menu_class' => 'flex justify-end gap-x-6 p-2 w-full',
                        'container_class' => 'flex basis-full ',
                        )
                    );
                ?>
            </div>
        </div>
    </header>