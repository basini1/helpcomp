<div class="flex flex-col gap-y-6 grow">

    <h2 class="text-white font-medium uppercase"><?php echo wp_get_nav_menu_name('footer_offer-menu'); ?></h2>

    <?php
    wp_nav_menu(
        array(
            'container'         => false,
            'menu_class'        => 'flex flex-col items-start gap-2',
            'theme_location'    => 'footer_offer-menu',
            'li_class'          => false,
            'link_class'        => 'block text-helpcompGray transition-colors duration-300 hover:text-white',
            'fallback_cb'       => false,
        )
    );
    ?>

</div>