<nav class="xl:grow max-xl:order-last">

    <div data-element="main-menu" id="main-menu" aria-hidden="true" class="bg-neutral-100 xl:bg-transparent flex fixed xl:static left-0 right-0 bottom-0 max-md:top-20 top-24 max-xl:-translate-y-8 max-xl:opacity-0 max-xl:pointer-events-none duration-500 max-xl:will-change-[opacity,transform] transition-all -z-[2]">
        <div class="wrapper xl:px-0 max-w-none min-h-full max-xl:h-[calc(100vh-6rem) max-md:h-[calc(100vh-5rem)]]">
            <div class="flex flex-col h-full gap-y-8">

                <div data-element="main-menu-wrap" class="mt-8 transition-transform duration-500 grow xl:mt-0 max-xl:overflow-y-auto max-xl:-translate-y-8">
                    <?php
                    wp_nav_menu(
                        array(
                            'container'         => false,
                            'menu_class'        => 'flex flex-col xl:flex-row xl:items-center divide-y xl:divide-y-0 divide-neutral-200 text-lg xl:text-base justify-end',
                            'theme_location'    => 'header_main-menu',
                            'submenu_class'     => 'grid xs:grid-cols-2 sm:grid-cols-3 gap-x-4 xl:gap-x-12 gap-y-4 xl:gap-y-8',
                            'li_class_0'        => 'xl:h-5 flex max-xl:relative max-xl:flex-col xl:items-center group',
                            'li_class_1'        => 'col-span group',
                            'link_class_0'      => 'flex gap-x-3 text-helpcompBlack transition-colors duration-300 hover:text-helpcompRed 2xl:uppercase font-semibold leading-tight py-3 xl:py-0 xl:px-2 3xl:px-5 xl:h-24 xl:flex xl:items-center group-[.current-menu-item]:text-helpcompRed',
                            'link_class_1'      => '!flex flex-col gap-y-2 sm:gap-y-4 group items-start group-[.current-menu-item]:text-helpcompRed hover:text-helpcompBlack duration-300 transition-colors hover:text-helpcompRed',
                            'fallback_cb'       => false,
                            "depth"             =>  2,
                            'walker'            => new My_Menu_Walker
                        )
                    );
                    ?>
                </div>

                <div data-element="main-menu-contact" class="transition-transform duration-500 xl:hidden max-xl:translate-y-16 ">

                    <?php if (have_rows('company_phones', 'option') || get_field('company_google-maps', 'option')) : ?>

                        <div class="flex justify-center -mx-4 xxs:-mx-5 xs:-mx-6 sm:-mx-7 md:-mx-8 lg:-mx-12 gap-x-3 bg-helpcompBlueDark">

                            <?php if (have_rows('company_phones', 'option')) : ?>

                                <?php while (have_rows('company_phones', 'option')) : the_row(); ?>

                                    <a class="flex flex-col items-center justify-center w-full py-4 text-white gap-x-3 group" href="tel:<?php echo str_replace(' ', '', get_sub_field('company_phone', 'option')); ?>">
                                        <span class="flex h-5 text-helpcompRed">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="18.485" height="18.518" viewBox="0 0 18.485 18.518">
                                                <path d="M12.583,4.237a4.047,4.047,0,0,1,3.2,3.2M12.583,1a7.284,7.284,0,0,1,6.434,6.426m-.809,6.459v2.428a1.619,1.619,0,0,1-1.764,1.619,16.017,16.017,0,0,1-6.985-2.485A15.782,15.782,0,0,1,4.6,10.591,16.017,16.017,0,0,1,2.118,3.574,1.619,1.619,0,0,1,3.729,1.809H6.157A1.619,1.619,0,0,1,7.776,3.2a10.392,10.392,0,0,0,.567,2.274,1.619,1.619,0,0,1-.364,1.708L6.95,8.211a12.95,12.95,0,0,0,4.856,4.856l1.028-1.028a1.619,1.619,0,0,1,1.708-.364,10.392,10.392,0,0,0,2.274.567,1.619,1.619,0,0,1,1.392,1.643Z" transform="translate(-1.361 -0.172)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" />
                                            </svg>
                                        </span>
                                        <span class="block text-sm font-medium text-white xs:text-base"><?php echo get_sub_field('company_phone', 'option'); ?></span>
                                    </a>

                                <?php endwhile; ?>

                            <?php endif; ?>

                            <?php if (get_field('company_google-maps', 'option')) : ?>

                                <a class="flex flex-col items-center justify-center w-full py-4 text-white gap-x-3 group" href="<?php echo esc_url(get_field('company_google-maps')); ?>" target="_blank">
                                    <span class="flex h-5 text-helpcompRed">
                                        <svg class="w-auto h-full" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </span>
                                    <span class="block text-sm font-medium text-white xs:text-base">Wyznacz trasę</span>
                                </a>

                            <?php endif; ?>

                        </div>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>

    <button data-element="main-menu-toggler" aria-expanded="false" aria-haspopup="true" aria-controls="main-menu" class="flex items-center p-2 -mr-2 transition-colors duration-300 xl:hidden gap-x-3 text-helpcompBlack">
        <span class="text-helpcompRed font-medium text-[0.9375rem] uppercase block">menu</span>
        <span class="block">
            <svg class="h-auto max-w-full w-7" xmlns="http://www.w3.org/2000/svg" width="23.111" height="16" viewBox="0 0 23.111 16">
                <g id="menu" transform="translate(-2.25 -5.25)">
                    <path id="Line_7" data-name="Line 7" d="M21.472.948H.139A.87.87,0,0,1-.75.1.87.87,0,0,1,.139-.75H21.472A.87.87,0,0,1,22.361.1.87.87,0,0,1,21.472.948Z" fill="currentColor" transform="translate(3 13.151)" />
                    <path id="Line_8" data-name="Line 8" d="M21.472.948H.139A.87.87,0,0,1-.75.1.87.87,0,0,1,.139-.75H21.472A.87.87,0,0,1,22.361.1.87.87,0,0,1,21.472.948Z" fill="currentColor" transform="translate(3 6)" />
                    <path id="Line_9" data-name="Line 9" d="M21.472.948H.139A.87.87,0,0,1-.75.1.87.87,0,0,1,.139-.75H21.472A.87.87,0,0,1,22.361.1.87.87,0,0,1,21.472.948Z" fill="currentColor" transform="translate(3 20.302)" />
                </g>
            </svg>
        </span>
    </button>

</nav>