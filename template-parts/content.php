<div class="wrapper">


    <div class="relative grid py-24 gap-x-4 gap-y-12 lg:grid-cols-12">


        <div class="gap-4 lg:col-span-8 lg:grid lg:grid-cols-8">
            <div class="gap-4 lg:col-span-7 lg:col-start-2">
                <article id="post-<?php the_ID(); ?>" class="pt-20 prose max-w-none prose-h2:text-4xl prose-h2:font-bold prose-h2:lg:text-2xl prose-h2:xl:text-3xl prose-h2:2xl:text-4xl prose-h3:font-semibold prose-h3:lg:text-xl prose-h3:xl:text-2xl prose-h3:2xl:text-3xl prose-h4:font-bold prose-h4:lg:text-lg prose-h4:xl:text-xl prose-h4:2xl:text-2xl">
                    <!-- <header class="mt-16 mb-8 ">
                    <h2 class=" border-b-2 border-b-helpcompRed font-light text-4xl xl:text-6xl text-helpcompBlack pb-[6px] mt-0 mb-12 font-semibold"> Oczyszczalnie ścieków</h2>
                    </header> -->


                    <?php
                    $blocks = parse_blocks(get_the_content());

                    foreach ($blocks as $block) {
                        // Sprawdź czy blok jest domyślnym blokiem Gutenberg
                        if (strpos($block['blockName'], 'core/') === 0) {
                            // echo '<div class="wrapper">';
                            echo render_block($block);
                            // echo '</div>';
                        } else {
                            // Jeśli to Twój blok, renderuj go pełnoekranowo
                            echo render_block($block);
                        }
                    }
                    ?>
                </article>
            </div>
        </div>

        <div class="lg:col-span-4 lg:order-first">
            <div class="px-8 py-8 bg-neutral-100 lg:px-10 2xl:px-12 lg:py-16 xl:py-20 rounded-xl md:sticky top-40">
                <h2 class="pb-4 mb-8 text-4xl font-semibold border-b-2 text-helpcompBlack font-regular border-b-helpcompRed lg:text-2xl xl:text-3xl">Nasza oferta</h2>
                <?php
                wp_nav_menu(
                    array(
                        'container'         => false,
                        'menu_class'        => 'flex flex-col space-y-4 lg:space-y-6 text-base font-medium sidebar',
                        'theme_location'    => 'footer_offer-menu',
                        'li_class'          => 'group',
                        'link_class'        => 'text-helpcompGray inline-block relative before:border-l-4 before:border-l-transparent before:absolute before:-left-6 lg:before:-left-12 before:top-0 before:bottom-0 transition before:transition before:duration-300 hover:text-helpcompRed hover:before:border-l-helpcompRed before:border-l-helpcompRed text-helpcompGray group-[.current-menu-item]:text-helpcompRed group-[.current-menu-item]:before:border-l-helpcompRed',
                        'fallback_cb'       => false,
                    )
                );
                ?>
            </div>
        </div>

    </div>





</div>