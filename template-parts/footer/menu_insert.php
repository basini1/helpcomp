<div class="flex flex-col gap-y-6 grow">

    <h2 class="text-white font-medium uppercase"><?php echo wp_get_nav_menu_name('footer_insert-menu'); ?></h2>

    <?php
    wp_nav_menu(
        array(
            'container'         => false,
            'menu_class'        => 'grid grid-cols-2 xl:grid-cols-3 gap-x-4 gap-y-2 place-items-start',
            'theme_location'    => 'footer_insert-menu',
            'li_class'          => false,
            'link_class'        => 'block text-helpcompGray transition-colors duration-300 hover:text-white',
            'fallback_cb'       => false,
        )
    );
    ?>

</div>