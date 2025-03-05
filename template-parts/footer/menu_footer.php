<div class="flex flex-col gap-y-6">

    <div>
        <?php
        wp_nav_menu(
            array(
                'container'         => false,
                'menu_class'        => 'grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 gap-x-4 gap-y-3 place-items-start',
                'theme_location'    => 'footer_offer-menu',
                'li_class'          => 'group',
                'link_class'        => 'block text-helpcompBlack font-semibold transition-colors duration-300 hover:text-helpcompRed leading-relaxed group-[.current-menu-item]:text-helpcompRed',
                'fallback_cb'       => false,
            )
        );
        ?>
    </div>

    <div>
        <h3 class="mt-2 mb-4 font-semibold text-helpcompRed"><?php echo wp_get_nav_menu_name('footer_insert-menu'); ?></h2>

            <?php
            wp_nav_menu(
                array(
                    'container'         => false,
                    'menu_class'        => 'grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 gap-x-4 gap-y-3 place-items-start',
                    'theme_location'    => 'footer_insert-menu',
                    'li_class'          => 'group',
                    'link_class'        => 'block text-helpcompGray transition-colors duration-300 hover:text-helpcompBlack group-[.current-menu-item]:text-helpcompBlack ',
                    'fallback_cb'       => false,
                )
            );
            ?>
    </div>

</div>

<?php /*

<div class="hidden">
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
                    'link_class'        => 'block text-helpcompGray transition-colors duration-300 hover:text-helpcompBlack',
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
</div>

*/ ?>