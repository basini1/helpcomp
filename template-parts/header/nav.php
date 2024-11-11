<nav class="xl:grow max-xl:order-last">
    <div data-element="main-menu" id="main-menu" aria-hidden="true" class="bg-helpcompBlue xl:bg-transparent flex fixed xl:static left-0 right-0 bottom-0 max-md:top-20 top-24 max-xl:-translate-y-8 max-xl:opacity-0 max-xl:pointer-events-none duration-500 max-xl:will-change-[opacity,transform] transition-all -z-[2]">
        <div class="wrapper xl:px-0 max-w-none min-h-full max-xl:h-[calc(100vh-6rem) max-md:h-[calc(100vh-5rem)]]">
            <div class="flex flex-col h-full gap-y-8">
                <div data-element="main-menu-wrap" class="mt-8 transition-transform duration-500 grow xl:mt-0 max-xl:overflow-y-auto max-xl:-translate-y-8">
                    <?php
                    wp_nav_menu(
                        array(
                            'container'         => false,
                            'menu_class'        => 'flex flex-col xl:flex-row xl:items-center divide-y xl:divide-y-0 xl:divide-x-2 divide-[#e5e5e5] text-lg xl:text-[0.9375rem] justify-end',
                            'theme_location'    => 'header_main-menu',
                            'submenu_class'     => 'flex flex-wrap gap-y-4 xl:gap-y-8 -mx-2 xl:justify-between',
                            'li_class_0'        => 'xl:h-5 flex max-xl:relative max-xl:flex-col xl:items-center',
                            'li_class_1'        => 'xxs:w-1/2 sm:w-1/3 md:w-1/3 xl:w-[30%] xl:max-w-[17.25rem] nav-widget px-2',
                            'link_class_0'      => 'flex gap-x-3 text-helpcompBlack transition-colors duration-300 hover:text-helpcompRed 2xl:uppercase font-semibold leading-tight py-3 xl:py-0 xl:px-2 3xl:px-5 xl:h-24 xl:flex xl:items-center',
                            'link_class_1'      => '!flex flex-col gap-y-2 sm:gap-y-4 group items-start',
                            'fallback_cb'       => false,
                            "depth"             =>  2,
                            'walker'            => new My_Menu_Walker
                        )
                    );
                    ?>
                </div>
                <div data-element="main-menu-contact" class="transition-transform duration-500 xl:hidden max-xl:translate-y-16">
                    <div class="flex -mx-4 bg-helpcompBlack xxs:-mx-5 xs:-mx-6 sm:-mx-7 md:-mx-8 lg:-mx-12 xl:mx-auto">
                        <a class="flex flex-wrap items-center justify-center w-full py-4 text-white gap-x-3 group" href="#">
                            <span class="block text-helpcompRed">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="18.485" height="18.518" viewBox="0 0 18.485 18.518">
                                    <path d="M12.583,4.237a4.047,4.047,0,0,1,3.2,3.2M12.583,1a7.284,7.284,0,0,1,6.434,6.426m-.809,6.459v2.428a1.619,1.619,0,0,1-1.764,1.619,16.017,16.017,0,0,1-6.985-2.485A15.782,15.782,0,0,1,4.6,10.591,16.017,16.017,0,0,1,2.118,3.574,1.619,1.619,0,0,1,3.729,1.809H6.157A1.619,1.619,0,0,1,7.776,3.2a10.392,10.392,0,0,0,.567,2.274,1.619,1.619,0,0,1-.364,1.708L6.95,8.211a12.95,12.95,0,0,0,4.856,4.856l1.028-1.028a1.619,1.619,0,0,1,1.708-.364,10.392,10.392,0,0,0,2.274.567,1.619,1.619,0,0,1,1.392,1.643Z" transform="translate(-1.361 -0.172)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" />
                                </svg>
                            </span>
                            <span class="block text-base font-medium text-white" href="#">32 285 10 04</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button data-element="main-menu-toggler" aria-expanded="false" aria-haspopup="true" aria-controls="main-menu" class="flex items-center p-2 -mr-2 transition-colors duration-300 xl:hidden gap-x-3 text-helpcompBlack">
        <span class="text-helpcompRed font-medium text-[0.9375rem] uppercase block">menu</span>
        <span class="block">
            <svg class="w-7 h-auto max-w-full" xmlns="http://www.w3.org/2000/svg" width="23.111" height="16" viewBox="0 0 23.111 16">
                <g id="menu" transform="translate(-2.25 -5.25)">
                    <path id="Line_7" data-name="Line 7" d="M21.472.948H.139A.87.87,0,0,1-.75.1.87.87,0,0,1,.139-.75H21.472A.87.87,0,0,1,22.361.1.87.87,0,0,1,21.472.948Z" fill="currentColor" transform="translate(3 13.151)" />
                    <path id="Line_8" data-name="Line 8" d="M21.472.948H.139A.87.87,0,0,1-.75.1.87.87,0,0,1,.139-.75H21.472A.87.87,0,0,1,22.361.1.87.87,0,0,1,21.472.948Z" fill="currentColor" transform="translate(3 6)" />
                    <path id="Line_9" data-name="Line 9" d="M21.472.948H.139A.87.87,0,0,1-.75.1.87.87,0,0,1,.139-.75H21.472A.87.87,0,0,1,22.361.1.87.87,0,0,1,21.472.948Z" fill="currentColor" transform="translate(3 20.302)" />
                </g>
            </svg>
        </span>
    </button>
</nav>

<style>
    [data-element="main-menu"] {
        /* background-image: url("data:image/svg+xml,%3Csvg id='Group_6' data-name='Group 6' xmlns='http://www.w3.org/2000/svg' width='33.819' height='26.992' viewBox='0 0 33.819 26.992'%3E%3Cpath id='_376029000' d='M25.821,38.4c3.163,0,5.689,4.365,5.775,9.8l.022-.01c.272-4.175-1.3-12.884-7.08-12.884-3.932,0-7.122,5.21-7.122,11.634,0,3.887,2.19,12.375,7.818,11.585v-.006c-2.841-.526-5.192-4.818-5.192-10.034,0-5.571,2.615-10.089,5.778-10.089Z' transform='translate(-7.716 -32.401)' fill='%23fff' fill-rule='evenodd'/%3E%3Cpath id='_376030152' d='M16.91,30.084c9.337,0,16.91,6.044,16.91,13.5s-7.572,13.5-16.91,13.5S0,51.032,0,43.58s7.572-13.5,16.91-13.5Zm.015,2.429c8.048,0,14.574,4.913,14.574,10.97s-6.526,10.97-14.574,10.97S2.351,49.541,2.351,43.483s6.526-10.97,14.574-10.97Z' transform='translate(0 -30.084)' fill='%23fff' fill-rule='evenodd'/%3E%3Cpath id='_376746400' d='M30.345,45.278c2.152,0,3.9,3.174,3.9,7.09s-1.745,7.09-3.9,7.09-3.9-3.174-3.9-7.09,1.745-7.09,3.9-7.09Z' transform='translate(-11.718 -36.816)' fill='%23fff' fill-rule='evenodd'/%3E%3C/svg%3E%0A"); */
        background-position: center;
        background-repeat: no-repeat;
        background-size: auto 75vmax;
    }
</style>