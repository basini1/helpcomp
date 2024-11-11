<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-helpcompGray font-light antialiased flex flex-col min-h-screen antialiased'); ?>>


    <header class="bg-white fixed flex items-center h-28 max-lg:h-20 left-0 right-0 top-0 z-20 before:absolute before:inset-0 before:-z-[1] before:bg-white before:shadow-[0px_10px_20px_0_rgba(0,0,0,0.05)] before:opacity-0">

        <div class="wrapper">
            <div class="flex items-center justify-between gap-6">

                <?php get_template_part('template-parts/header/logo'); ?>
                <?php get_template_part('template-parts/header/nav'); ?>

            </div>
        </div>

    </header>

    <main>