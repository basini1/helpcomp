<?php /*

<section class="py-24 bg-neutral-100">

    <div class="wrapper">
        <div class="grid lg:grid-cols-12 gap-x-4 gap-y-16 sm:grid-cols-2">
            <?php if (get_field('fp-about_col2_image') || get_field("fp-about_col2_text")) : ?>
                <div class="px-6 py-12 bg-white xs:px-8 sm:col-span-2 lg:col-span-4 rounded-xl">
                    <div class="flex flex-col gap-y-6">
                        <?php if (get_field("fp-about_col1_slogan")) : ?><h3 class="mb-2 text-xl font-semibold text-helpcompBlack"><?php echo get_field('fp-about_col1_slogan'); ?></h3><?php endif; ?>
                        <p>Specjalizujemy się w KOMPLEKSOWEJ OBSŁUDZE INFORMATYCZNEJ FIRM. Polega ona na świadczeniu dla Firm niezbędnych usług informatycznych oraz na dostarczaniu sprzętu fiskalnego i komputerowego.</p>
                        <p class="mt-4">
                            <a href="#" class="group inline-flex items-center border-helpcompRed border-2 pl-9 pr-6 py-1.5 text-sm font-medium text-center text-helpcompRed uppercase transition duration-500 rounded-full  hover:bg-helpcompBlueDark hover:text-white hover:border-transparent">
                                Więcej o nas
                                <svg class="relative h-auto max-w-full transition-transform duration-300 rotate-90 group-hover:translate-x-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40">
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
                            </a>
                        </p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (get_field('fp-about_col2_image') || get_field("fp-about_col2_text")) : ?>
                <div class="lg:col-span-3 lg:col-start-6 sm:col-span-1">
                    <div class="flex flex-col gap-y-6 text-[15px]">
                        <?php if (get_field("fp-about_col2_image")) : ?>
                            <div class="mb-2">
                                <?php
                                $image_id = get_field("fp-about_col2_image");
                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                echo wp_get_attachment_image($image_id, 'medium', false, ['alt' => esc_attr($image_alt), 'class' => 'rounded-xl']);
                                ?>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field("fp-about_col2_text")) : ?><?php echo get_field('fp-about_col2_text'); ?><?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (get_field('fp-about_col3_image') || get_field("fp-about_col3_text")) : ?>
                <div class="lg:col-span-3 lg:col-start-10 sm:col-span-1">
                    <div class="flex flex-col gap-y-6 text-[15px]">
                        <?php if (get_field("fp-about_col3_image")) : ?><div class="mb-2">
                                <img src="https://placehold.co/1600x900" alt="" class="rounded-xl">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field("fp-about_col3_text")) : ?><?php echo get_field('fp-about_col3_text'); ?><?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

</section>
*/ ?>

<section class="py-24 pb-32 -mt-24 bg-helpcompBlueDark">

    <div class="wrapper">
        <!-- <h2 class="mb-16 text-4xl font-semibold text-center text-white lg:text-2xl xl:text-3xl 2xl:text-4xl">Masz pytania lub chcesz podjąć współpracę?</h2> -->
        <div class="grid lg:grid-cols-12 gap-x-4 xl:gap-x-12 gap-y-16 sm:grid-cols-2">
            <?php if (get_field('fp-about_col2_image') || get_field("fp-about_col2_text")) : ?>
                <div class="px-6 py-12 bg-helpcompRedDark xs:px-8 lg:px-6 xl:px-8 sm:col-span-2 lg:col-span-4 rounded-xl">
                    <div class="flex flex-col text-white gap-y-6">
                        <?php if (get_field("fp-about_col2_image")) : ?>
                            <div class="hidden mb-2">
                                <?php
                                $image_id = get_field("fp-about_col2_image");
                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                echo wp_get_attachment_image($image_id, 'medium', false, ['alt' => esc_attr($image_alt), 'class' => 'rounded-xl w-full max-w-none']);
                                ?>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field("fp-about_col1_slogan")) : ?><h3 class="mb-2 text-xl font-medium text-white"><?php echo get_field('fp-about_col1_slogan'); ?></h3><?php endif; ?>
                        <?php if (get_field("fp-about_col1_text")) : ?><?php echo get_field('fp-about_col1_text'); ?><?php endif; ?>
                        <p class="flex mt-2">
                            <a
                                href="#"
                                class="group inline-flex items-center border-white border-2 pl-9 pr-6 py-1.5 text-sm font-medium text-center text-white uppercase transition duration-500 rounded-full  hover:bg-white hover:text-helpcompBlack hover:border-transparent">
                                Więcej o nas
                                <svg class="relative h-auto max-w-full transition-transform duration-300 rotate-90 group-hover:translate-x-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40">
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
                            </a>
                        </p>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (get_field('fp-about_col2_image') || get_field("fp-about_col2_text")) : ?>
                <div class=" sm:col-span-1 lg:col-span-4 text-helpcompGrayLight">
                    <div class="flex flex-col gap-y-6 ">
                        <?php if (get_field("fp-about_col2_image")) : ?>
                            <div class="mb-2">
                                <?php
                                $image_id = get_field("fp-about_col2_image");
                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                echo wp_get_attachment_image($image_id, 'medium', false, ['alt' => esc_attr($image_alt), 'class' => 'rounded-xl w-full max-w-none opacity-10']);
                                ?>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field("fp-about_col2_text")) : ?><?php echo get_field('fp-about_col2_text'); ?><?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if (get_field('fp-about_col3_image') || get_field("fp-about_col3_text")) : ?>
                <div class=" sm:col-span-1 lg:col-span-4 rounded-r-xl text-helpcompGrayLight">
                    <div class="flex flex-col gap-y-6">
                        <?php if (get_field("fp-about_col3_image")) : ?>
                            <div class="mb-2">
                                <?php
                                $image_id = get_field("fp-about_col3_image");
                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                echo wp_get_attachment_image($image_id, 'medium', false, ['alt' => esc_attr($image_alt), 'class' => 'rounded-xl w-full max-w-none opacity-10']);
                                ?>
                            </div>
                        <?php endif; ?>
                        <?php if (get_field("fp-about_col3_text")) : ?><?php echo get_field('fp-about_col3_text'); ?><?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <p class="flex justify-center hidden mt-16">
            <a
                href="#"
                class="group inline-flex items-center border-helpcompRed border-2 pl-9 pr-6 py-1.5 text-sm font-medium text-center text-white uppercase transition duration-500 rounded-full bg-helpcompRed hover:bg-white hover:text-helpcompBlack hover:border-white">
                Skontaktuj się
                <svg class="relative h-auto max-w-full transition-transform duration-300 rotate-90 group-hover:translate-x-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40">
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
            </a>
        </p>
    </div>

</section>