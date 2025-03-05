<?php
/* Template name: O nas */
get_header();
?>

<?php if (have_rows('certificate')) : ?>

    <section class="relative overflow-x-hidden bg-fixed bg-center bg-cover bg-neutral-100 before:absolute before:left-0 before:w-screen before:top-0 before:h-48 before:bg-white">
        <div class="flex flex-col py-24 gap-y-24">
            <div class="wrapper">
                <?php
                $i = 0;
                while (have_rows('certificate')) : the_row();
                    $certificate_double = get_sub_field('certificate_double');
                    if ($certificate_double) {
                        $certificate_image2 = get_sub_field('certificate_image2');
                        $col_span = 2;
                        $i += 1;
                    }
                    $i += 1;
                endwhile;
                ?>
                <ul class="relative z-[1] grid grid-cols-2 gap-y-8 gap-x-4 md:grid-cols-<?php echo $i; ?>">
                    <?php while (have_rows('certificate')) : the_row(); ?>

                        <?php
                        $col_span = 1;
                        $certificate_image = get_sub_field('certificate_image');
                        $certificate_image2 = null;
                        $certificate_double = get_sub_field('certificate_double');
                        if ($certificate_double) {
                            $certificate_image2 = get_sub_field('certificate_image2');
                            $col_span = 2;
                        }
                        $certificate_title = get_sub_field('certificate_title');
                        ?>

                        <li class="col-span-<?php echo $col_span; ?>">
                            <div class="flex flex-col min-h-full gap-y-5">
                                <div class="flex gap-x-4">

                                    <?php if ($certificate_image) : ?>

                                        <div class="flex items-center justify-center px-8 py-8 bg-white rounded-md shadow-2xl grow shadow-neutral-200">
                                            <?php
                                            $image_alt = get_post_meta($certificate_image, '_wp_attachment_image_alt', true);
                                            echo wp_get_attachment_image($certificate_image, 'full', false, ['alt' => esc_attr($image_alt), 'class' => 'duration-500 group-hover:scale-105 will-change-transform']);
                                            ?>
                                        </div>


                                    <?php endif; ?>

                                    <?php
                                    if ($certificate_image2) : ?>
                                        <div class="flex items-center justify-center px-8 py-8 bg-white rounded-md shadow-2xl grow shadow-neutral-200">
                                            <?php
                                            $image_alt = get_post_meta($certificate_image2, '_wp_attachment_image_alt', true);
                                            echo wp_get_attachment_image($certificate_image2, 'full', false, ['alt' => esc_attr($image_alt), 'class' => 'duration-500 group-hover:scale-105 will-change-transform']);
                                            ?>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                <?php if ($certificate_title) : ?><div class="px-4 font-bold text-center text-helpcompBlack"><?php echo $certificate_title; ?></div><?php endif; ?>

                            </div>
                        </li>

                    <?php endwhile; ?>
                </ul>
            </div>
            <?php if (have_rows('benefit')) : ?>
                <div class="wrapper">

                    <?php
                    $benefits_slogan = get_field('benefits_slogan');
                    if ($benefits_slogan) :
                    ?>
                        <h2 class="mb-12 text-4xl font-semibold text-center text-helpcompRed lg:text-2xl xl:text-3xl 2xl:text-4xl"><?php echo $benefits_slogan; ?></h2>
                    <?php endif; ?>

                    <ul class="flex justify-center gap-x-4 max-sm:flex-col max-lg:flex-wrap gap-y-12">
                        <?php while (have_rows('benefit')) : the_row(); ?>

                            <li class="max-sm:w-full max-lg:w-[calc(50%-8px)] ">
                                <div class="flex flex-col min-h-full gap-y-5">

                                    <?php
                                    $benefit_image = get_sub_field('benefit_image');
                                    $benefit_text = get_sub_field('benefit_text');
                                    ?>

                                    <?php if ($benefit_image) : ?>
                                        <div class="flex items-center justify-center overflow-hidden bg-white rounded-md">
                                            <?php
                                            $image_alt = get_post_meta($benefit_image, '_wp_attachment_image_alt', true);
                                            echo wp_get_attachment_image($benefit_image, 'full', false, ['alt' => esc_attr($image_alt), 'class' => 'duration-500 group-hover:scale-105 will-change-transform']);
                                            ?>
                                        </div>
                                    <?php endif; ?>


                                    <?php if ($benefit_text) : ?><div class="flex flex-col px-4 text-center "><?php echo $benefit_text; ?></div><?php endif; ?>

                                </div>

                            </li>

                        <?php endwhile; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </div>
    </section>

<?php endif; ?>

<?php if (have_rows('additional-service')) : ?>
    <div class="wrapper">

        <?php
        $additional_slogan = get_field('additional_slogan');
        if ($additional_slogan) :
        ?>
            <h2 class="mb-12 text-4xl font-semibold text-center text-helpcompBlack lg:text-2xl xl:text-3xl 2xl:text-4xl"><?php echo $additional_slogan; ?></h2>
        <?php endif; ?>

        <ul class="flex justify-center gap-x-4 max-sm:flex-col max-lg:flex-wrap gap-y-12">
            <?php while (have_rows('additional-service')) : the_row(); ?>

                <li class="flex-1 max-sm:w-full max-lg:w-[calc(50%-8px)] ">
                    <div class="flex flex-col min-h-full gap-y-5">

                        <?php
                        $additional_image = get_sub_field('additional-service_image');
                        $additional_text = get_sub_field('additional-service_text');
                        ?>

                        <?php if ($additional_image) : ?>
                            <div class="flex items-center justify-center overflow-hidden bg-white rounded-md">
                                <?php
                                $image_alt = get_post_meta($additional_image, '_wp_attachment_image_alt', true);
                                echo wp_get_attachment_image($additional_image, 'full', false, ['alt' => esc_attr($image_alt), 'class' => 'duration-500 group-hover:scale-105 will-change-transform']);
                                ?>
                            </div>
                        <?php endif; ?>


                        <?php if ($additional_text) : ?><div class="flex flex-col text-center "><?php echo $additional_text; ?></div><?php endif; ?>

                    </div>

                </li>

            <?php endwhile; ?>
        </ul>
    </div>
<?php endif; ?>

<section class="relative overflow-x-hidden bg-fixed bg-center bg-cover 2xl:-mt-12 bg-helpcompBlueDark before:absolute before:left-0 before:w-screen before:top-0 before:h-48 before:bg-white max-2xl:before:hidden">
    <div class="flex flex-col py-24 gap-y-24">

        <div class="wrapper">
            <div class="flex flex-col gap-y-24">

                <?php $group = get_field('about-us_1'); ?>

                <div class="grid items-center md:grid-cols-12 gap-x-4 gap-y-12">

                    <?php
                    $slogan = $group['about-us_1_slogan'];
                    $image = $group['about-us_1_image'];
                    $editor = $group['about-us_1_editor'];
                    ?>

                    <?php if ($image) : ?>
                        <div class="flex items-center justify-center overflow-hidden bg-white rounded-md md:col-span-6">
                            <?php
                            $image_alt = get_post_meta($image, '_wp_attachment_image_alt', true);
                            echo wp_get_attachment_image($image, 'full', false, ['alt' => esc_attr($image_alt), 'class' => 'duration-500 group-hover:scale-105 will-change-transform']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($editor) : ?>
                        <div class="md:col-span-6 lg:col-span-5 lg:col-start-8">
                            <div class="flex flex-col 2xl:mt-24 gap-y-12 text-helpcompGray">
                                <?php if ($slogan) : ?><h3 class="mb-0 text-2xl font-semibold text-white xl:text-3xl 2xl:text-4xl"><?php echo esc_html($slogan); ?></h3><?php endif; ?>
                                <div class="flex flex-col gap-y-5">
                                    <?php echo ($editor); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>

            </div>
        </div>

        <div class="wrapper">
            <div class="flex flex-col gap-y-24">

                <?php $group = get_field('about-us_2'); ?>

                <div class="grid items-center md:grid-cols-12 gap-x-4 gap-y-12">

                    <?php
                    $slogan = $group['about-us_2_slogan'];
                    $editor = $group['about-us_2_editor'];
                    $youtube_link = $group['about-us_2_youtube_link'];
                    $youtube_slogan = $group['about-us_2_youtube_slogan'];
                    ?>

                    <?php if ($youtube_link) : ?>
                        <div class="flex flex-col gap-y-5 md:col-span-6 lg:col-start-7">
                            <div class="overflow-hidden rounded-md embed-container">
                                <?php echo $youtube_link; ?>
                            </div>
                            <?php if ($youtube_link) : ?><div class="text-sm text-center"><?php echo esc_html($youtube_slogan); ?></div><?php endif; ?>
                        </div>
                        <style>
                            .embed-container {
                                position: relative;
                                padding-bottom: 56.25%;
                                overflow: hidden;
                                max-width: 100%;
                                height: auto;
                                width: 100%;
                            }

                            .embed-container iframe,
                            .embed-container object,
                            .embed-container embed {
                                position: absolute;
                                top: 0;
                                left: 0;
                                width: 100%;
                                height: 100%;
                            }
                        </style>
                    <?php endif; ?>

                    <?php if ($editor) : ?>
                        <div class="md:col-span-6 lg:col-span-5 md:order-first">
                            <div class="flex flex-col gap-y-12 text-helpcompGray">
                                <?php if ($slogan) : ?><h3 class="mb-0 text-2xl font-semibold text-white xl:text-3xl 2xl:text-4xl"><?php echo esc_html($slogan); ?></h3><?php endif; ?>
                                <div class="flex flex-col gap-y-5">
                                    <?php echo ($editor); ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>

            </div>
        </div>

        <?php
        $contact_slogan = get_field('contact_slogan');
        $contact_icon = get_field('contact_icon');
        $contact_zarezerwuj_slogan = get_field('contact_zarezerwuj_slogan');
        $contact_zarezerwuj_link = get_field('contact_zarezerwuj_link');
        ?>
        <div class="wrapper">

            <div class="grid py-12 border border-helpcompGray/10 md:grid-cols-12 gap-y-8">
                <div class="px-8 md:pl-0 md:col-start-2 md:col-span-5 md:border-helpcompGray/10 md:border-r">
                    <div class="flex items-start gap-x-8 lg:gap-x-12 max-md:flex-col gap-y-5">

                        <?php if ($contact_icon) : ?>
                            <div class="flex items-center justify-center w-[6.25rem]">
                                <?php
                                $image_alt = get_post_meta($contact_icon, '_wp_attachment_image_alt', true);
                                echo wp_get_attachment_image($contact_icon, 'full', false, ['alt' => esc_attr($image_alt), 'class' => 'duration-500 group-hover:scale-105 will-change-transform']);
                                ?>
                            </div>
                        <?php endif; ?>

                        <div class="flex flex-col gap-y-3">
                            <?php if ($contact_slogan) : ?><h4 class="mb-5 text-xl font-bold text-white"><?php echo esc_html($contact_slogan); ?></h4><?php endif; ?>
                            <?php if (have_rows('company_phones', 'option')) : ?>
                                <p class="flex flex-wrap items-start gap-x-8 gap-y-4">
                                    <?php while (have_rows('company_phones', 'option')) : the_row(); ?>
                                        <a class="flex flex-wrap items-center gap-x-3 group" href="tel:<?php echo str_replace(' ', '', get_sub_field('company_phone', 'option')); ?>">
                                            <span class="flex items-center justify-center text-white transition-colors group-hover:text-helpcompGray">
                                                <svg class="relative size-5" xmlns="http://www.w3.org/2000/svg" width="18.485" height="18.518" viewBox="0 0 18.485 18.518">
                                                    <path d="M12.583,4.237a4.047,4.047,0,0,1,3.2,3.2M12.583,1a7.284,7.284,0,0,1,6.434,6.426m-.809,6.459v2.428a1.619,1.619,0,0,1-1.764,1.619,16.017,16.017,0,0,1-6.985-2.485A15.782,15.782,0,0,1,4.6,10.591,16.017,16.017,0,0,1,2.118,3.574,1.619,1.619,0,0,1,3.729,1.809H6.157A1.619,1.619,0,0,1,7.776,3.2a10.392,10.392,0,0,0,.567,2.274,1.619,1.619,0,0,1-.364,1.708L6.95,8.211a12.95,12.95,0,0,0,4.856,4.856l1.028-1.028a1.619,1.619,0,0,1,1.708-.364,10.392,10.392,0,0,0,2.274.567,1.619,1.619,0,0,1,1.392,1.643Z" transform="translate(-1.361 -0.172)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                </svg>
                                            </span>
                                            <span class="block text-lg text-white transition-colors duration-300 group-hover:text-helpcompGray"><?php echo get_sub_field('company_phone', 'option'); ?></span>
                                        </a>
                                    <?php endwhile; ?>
                                </p>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
                <div class="md:col-start-7 md:col-span-6">
                    <div class="flex flex-col px-8 md:items-center gap-x-8 lg:gap-x-12 md:text-center">

                        <?php if ($contact_zarezerwuj_slogan) : ?><h4 class="mb-5 text-xl font-bold text-white"><?php echo esc_html($contact_zarezerwuj_slogan); ?></h4><?php endif; ?>
                        <?php if ($contact_zarezerwuj_link) : ?>
                            <p>
                                <a href="<?php echo esc_url($contact_zarezerwuj_link); ?>" class="group inline-flex items-center border-white border-2 pl-9 pr-6 py-1.5 text-sm font-medium text-center text-white uppercase transition duration-500 rounded-full hover:bg-helpcompRed hover:text-white hover:border-helpcompRed">
                                    zarezerwuj.pl
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
                        <?php endif; ?>

                    </div>
                </div>
            </div>

        </div>

</section>

<?php if (have_rows('partner', 'option')) : ?>

    <aside data-slider="slider_partners" class="-mt-24 overflow-x-hidden bg-neutral-100">
        <div class="wrapper">
            <div class="flex flex-col my-24">

                <?php if ($partners_slogan = get_field('partners_slogan', 'option')) : ?><h2 class="mb-12 text-2xl font-semibold text-center text-helpcompBlack"><?php echo esc_html($partners_slogan) ?></h2><?php endif; ?>

                <div class="relative">

                    <div data-slider="partners_slides" class="relative lg:overflow-hidden lg:rounded-xl">

                        <!-- slider wrapper -->
                        <ul class="p-0 m-0 swiper-wrapper">

                            <?php while (have_rows('partner', 'option')) : the_row(); ?>

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
                <div data-element="partners_pagination" class="mt-12 text-center" style="
                    --swiper-pagination-color: #d92130;
                    --swiper-pagination-bullet-inactive-color: #ffffff;
                    --swiper-pagination-bullet-inactive-opacity: 1;
                    --swiper-pagination-bullet-height: 0.6875rem;
                    --swiper-pagination-bullet-width: 0.6875rem;
                    --swiper-pagination-bullet-horizontal-gap: 0.375rem;"></div>

            </div>
        </div>
    </aside>

<?php endif; ?>

<?php get_footer(); ?>