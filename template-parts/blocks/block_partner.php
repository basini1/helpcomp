<?php if (have_rows('partner')) : ?>

    <aside data-slider="slider_partners" class="<?php // echo !is_admin() ? '-mt-48' : null; 
                                                ?> overflow-x-hidden bg-neutral-100 -mt-24">
        <div class="wrapper">
            <div class="flex flex-col my-24">

                <?php if (get_field('partners_slogan')) : ?><h2 class="mb-12 text-2xl font-semibold text-center text-helpcompBlack"><?php echo get_field('partners_slogan'); ?></h2><?php endif; ?>



                <?php if (is_admin()) : ?>

                    <div class="overflow-x-auto">

                        <ul class="flex items-center p-0 m-0 list-none gap-x-4">

                            <?php while (have_rows('partner')) : the_row(); ?>

                                <li class="w-56">
                                    <div class="flex items-center justify-center w-full min-h-full p-4 bg-white rounded-md group aspect-video">
                                        <div class="flex flex-col gap-y-4">
                                            <?php
                                            $image_id = get_sub_field('partner_logo');
                                            if ($image_id) : ?>
                                                <div class="relative">
                                                    <?php
                                                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                                    echo wp_get_attachment_image($image_id, 'full', false, ['alt' => esc_attr($image_alt), 'class' => 'duration-500 group-hover:scale-105 will-change-transform w-[200px] h-auto']);
                                                    ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </li>

                            <?php endwhile; ?>

                        </ul>

                    </div>

                <?php else : ?>

                    <div class="relative">

                        <div data-slider="partners_slides" class="relative lg:overflow-hidden lg:rounded-xl">

                            <!-- slider wrapper -->
                            <ul class="p-0 m-0 swiper-wrapper">

                                <?php while (have_rows('partner')) : the_row(); ?>

                                    <li class="swiper-slide !transition-[transform,_opacity] !duration-500 !h-auto max-sm:!w-56">
                                        <div class="flex items-center justify-center w-full min-h-full p-4 bg-white group aspect-video">
                                            <div class="flex flex-col gap-y-4">
                                                <?php
                                                $image_id = get_sub_field('partner_logo');
                                                if ($image_id) : ?>
                                                    <div class="relative">
                                                        <?php
                                                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                                        echo wp_get_attachment_image($image_id, 'full', false, ['alt' => esc_attr($image_alt), 'class' => 'duration-500 group-hover:scale-105 will-change-transform w-[200px] h-auto']);
                                                        ?>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </li>

                                <?php endwhile; ?>

                            </ul>
                            <!-- swiper wrapper -->

                        </div>

                        <!-- swiper navigation -->
                        <div class="pointer-events-none absolute -left-20 -right-20 top-1/2 z-[1] -mt-[1.9375rem] hidden justify-between xl:flex">
                            <button data-element="partners_prev" class="transition pointer-events-auto group disabled:opacity-50">
                                <div class="flex items-center justify-center overflow-hidden transition-all duration-300 bg-white rounded-full h-14 w-14 group-hover:bg-helpcompRed group-hover:text-white text-helpcompBlack">
                                    <svg class="h-auto max-w-full -rotate-90" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect width="16" height="16" fill="none"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="up" transform="translate(-975 -362)">
                                            <g id="Component_50_1" data-name="Component 50 – 1" transform="translate(987 374)" clip-path="url(#clip-path)">
                                                <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(0 16) rotate(-90)" fill="currentColor"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </button>
                            <button data-element="partners_next" class="transition pointer-events-auto group disabled:opacity-50">
                                <div class="flex items-center justify-center overflow-hidden transition-all duration-300 bg-white rounded-full h-14 w-14 group-hover:bg-helpcompRed group-hover:text-white text-helpcompBlack">
                                    <svg class="h-auto max-w-full rotate-90" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40">
                                        <defs>
                                            <clipPath id="clip-path">
                                                <rect width="16" height="16" fill="none"></rect>
                                            </clipPath>
                                        </defs>
                                        <g id="up" transform="translate(-975 -362)">
                                            <g id="Component_50_1" data-name="Component 50 – 1" transform="translate(987 374)" clip-path="url(#clip-path)">
                                                <path id="Path_10" data-name="Path 10" d="M8,0,6.545,1.455l5.506,5.506H0V9.039H12.052L6.545,14.545,8,16l8-8Z" transform="translate(0 16) rotate(-90)" fill="currentColor"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </div>
                            </button>
                        </div>


                    </div>

                    <!-- swiper pagination -->
                    <div data-element="partners_pagination" class="mt-12 text-center" style="--swiper-pagination-color: #d92130; --swiper-pagination-bullet-inactive-color: #ffffff; --swiper-pagination-bullet-inactive-opacity: 1; --swiper-pagination-bullet-height: 0.6875rem; --swiper-pagination-bullet-width: 0.6875rem; --swiper-pagination-bullet-horizontal-gap: 0.375rem !important;"></div>



                <?php endif; ?>



            </div>
        </div>
    </aside>

<?php endif; ?>