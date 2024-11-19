<div class="grid md:grid-cols-3 gap-y-12 gap-x-4">
    <div class="flex flex-col md:col-span-2 gap-y-6 grow">

        <h2 class="font-medium text-white uppercase"><?php echo wp_get_nav_menu_name('footer_insert-menu'); ?></h2>

        <?php
        wp_nav_menu(
            array(
                'container'         => false,
                'menu_class'        => 'grid xs:grid-cols-2 grid gap-x-4 gap-y-2 place-items-start',
                'theme_location'    => 'footer_insert-menu',
                'li_class'          => false,
                'link_class'        => 'block text-helpcompGray transition-colors duration-300 hover:text-white',
                'fallback_cb'       => false,
            )
        );
        ?>

    </div>
    <div class="flex flex-col sm:col-span-1 gap-y-6 grow">

        <h2 class="font-medium text-white uppercase"><?php echo wp_get_nav_menu_name('footer_company-menu'); ?></h2>

        <?php
        wp_nav_menu(
            array(
                'container'         => false,
                'menu_class'        => 'flex flex-col gap-y-2 place-items-start',
                'theme_location'    => 'footer_company-menu',
                'li_class'          => false,
                'link_class'        => 'block text-helpcompGray transition-colors duration-300 hover:text-white',
                'fallback_cb'       => false,
            )
        );
        ?>
    </div>
</div>