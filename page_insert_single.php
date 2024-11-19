<?php
/* Template name: Insert - program */
get_header();
?>

<?php
$image_id = get_field('insert_box'); // Pobierz ID obrazka z pola ACF
?>

<section class="bg-helpcompBlue">
    <div class="wrapper">
        <div class="min-h-[50vh] flex items-center py-16">
            <div class="grid md:grid-cols-12 grow 4xl:w-[calc(100%+7rem)] 4xl:-ml-14">
                <div class="md:col-span-8 lg:col-span-6">
                    <div class="flex flex-col text-helpcompBlack">
                        <h1 class="mb-4 font-extrabold text-7xl text-helpcompBlack"><?php the_title(); ?></h1>
                        <?php if (get_field('insert_slogan') || get_field('insert_lead')) : ?>
                            <?php if (get_field('insert_slogan')) : ?>
                                <span class="block mb-8 text-xl font-normal text-helpcompRed"><?php echo get_field('insert_slogan'); ?></span>
                            <?php endif; ?>
                            <div class="text-lg font-medium">
                                <?php if (get_field('insert_lead')) : ?><?php echo get_field('insert_lead'); ?><?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="wrapper">
        <div class="prose max-w-none">

            <div class="relative flex flex-col sm:flex-row-reverse lg:grid lg:grid-cols-12 gap-x-12 lg:gap-x-4 gap-y-12">

                <?php if ($image_id) : ?>
                    <div class="w-full px-8 py-4 border sm:w-1/3 lg:hidden lg:col-span-3 lg:col-start-8 sm:col-start-7 border-helpcompBlue sm:border-none sm:px-0 sm:py-0">

                        <div class="relative">
                            <?php
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); // Pobierz opis ALT
                            echo wp_get_attachment_image($image_id, 'medium', false, ['alt' => esc_attr($image_alt), 'class' => 'md:mt- duration-500 group-hover:scale-105 will-change-transform']);
                            ?>
                        </div>

                    </div>
                <?php endif; ?>

                <div class="w-full sm:w-2/3 lg:col-start-7 sm:col-start-1 lg:col-span-6 lg:w-full">
                    <h3 class="mt-0 text-4xl font-bold">O programie</h3>
                    <div class="text-lg font-medium">
                        <?php if (get_field('insert_short')) : ?><?php echo get_field('insert_short'); ?><?php endif; ?>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section>
    <div class="wrapper">
        <div class="prose max-w-none">

            <div class="relative flex flex-col-reverse lg:grid lg:grid-cols-12 gap-x-4 gap-y-12">

                <div class="p-6 border sm:px-12 col-span lg:col-span-6 border-helpcompBlue">
                    <div class="-mt-[28px]">
                        <?php the_content(); ?></div>
                </div>


                <?php if ($image_id) : ?>
                    <div class="hidden lg:block md:col-span-4 lg:col-span-3 lg:col-start-8">
                        <div class="md:sticky top-28">
                            <div class="relative">
                                <?php
                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); // Pobierz opis ALT
                                echo wp_get_attachment_image($image_id, 'medium', false, ['alt' => esc_attr($image_alt), 'class' => 'md:mt- duration-500 group-hover:scale-105 will-change-transform']);
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>


            </div>

        </div>
    </div>
</section>

<?php
$page_id = get_the_ID();
$parent = get_pages([
    'meta_key'   => '_wp_page_template',
    'meta_value' => 'page_insert_archive.php',
    'number'     => 1,
]);

if (!empty($parent)) : ?>

    <?php
    $parent = $parent[0];

    $child_pages = new WP_Query([
        'post_type' => 'page',
        'post_parent' => $parent->ID,
        'orderby' => 'date',
        'order' => 'ASC',
        'post__not_in'           => [get_the_ID()],
        'posts_per_page' => -1,
    ]);

    ?>

    <?php if ($child_pages->have_posts()) : ?>

        <section data-slider="slider_single-apartment_related" class="overflow-x-hidden bg-helpcompBlue">
            <div class="wrapper">
                <!-- <div align="center bg-helpcompBlue"><iframe id="insert_aktualna_promocja_rectangle" name="insert_aktualna_promocja_rectangle" src="https://bannery.insert.com.pl/aktualna_promocja_rectangle" width="300" height="250" frameborder="0" scrolling="no">insert_aktualna_promocja_rectangle</iframe></div> -->
                <div class="flex flex-col my-24">
                    <h2 class="mb-16 text-4xl font-semibold text-center text-helpcompBlack">Sprawdź również</h2>

                    <div class="relative">

                        <div data-slider="single-apartment_related_slides" class="px-12 -mx-12 2xl:overflow-x-clip">

                            <!-- slider wrapper -->
                            <ul class="swiper-wrapper">

                                <?php while ($child_pages->have_posts()) : $child_pages->the_post(); ?>

                                    <li class="swiper-slide asddsa !transition-[transform,_opacity] !duration-500 !h-auto">
                                        <a href="<?php echo esc_url(get_permalink()); ?>" class="min-h-full block w-full px-8 py-10 bg-white group rounded-xl after:absolute after:inset-0 after:shadow-2xl after:rounded-xl after:shadow-[#BFD0E3] hover:after:opacity-100 after:opacity-0 after:transition-opacity after:duration-500 hover:z-10 relative">
                                            <div class="flex flex-col gap-y-4">
                                                <?php
                                                $image_id = get_field('insert_box'); // Pobierz ID obrazka z pola ACF
                                                if ($image_id) : ?>
                                                    <div class="relative">
                                                        <?php
                                                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); // Pobierz opis ALT
                                                        echo wp_get_attachment_image($image_id, 'medium', false, ['alt' => esc_attr($image_alt), 'class' => 'duration-500 group-hover:scale-105 will-change-transform']);
                                                        ?>
                                                    </div>
                                                <?php endif; ?>
                                                <h3 class="text-lg font-medium leading-tight duration-500 text-helpcompBlack group-hover:text-helpcompRed"><?php the_title(); ?>
                                            </div>
                                        </a>
                                    </li>

                                <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </ul>
                            <!-- swiper wrapper -->

                            <!-- swiper navigation -->
                            <div class="pointer-events-none absolute -left-16 -right-16 top-1/2 z-[1] -mt-[1.9375rem] hidden justify-between xl:flex">
                                <button data-element="single-apartment_related_prev" class="transition pointer-events-auto group disabled:opacity-50">
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
                                <button data-element="single-apartment_related_next" class="transition pointer-events-auto group disabled:opacity-50">
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

                            <!-- swiper pagination -->
                            <div data-element="single-apartment_related_pagination" class="mt-8 text-center xl:hidden" style="--swiper-pagination-color: #e73031; --swiper-pagination-bullet-inactive-color: rgb(191, 208, 227); --swiper-pagination-bullet-inactive-opacity: 1; --swiper-pagination-bullet-height: 0.6875rem; --swiper-pagination-bullet-width: 0.6875rem; --swiper-pagination-bullet-horizontal-gap: 0.375rem !important;"></div>

                        </div>

                    </div>

                    <p class="flex justify-center mt-16">
                        <a href="<?php echo esc_url(get_permalink($parent)); ?>" class="inline-flex items-center px-8 py-2 text-sm font-medium text-center text-white uppercase transition duration-300 rounded-full gap-x-1 bg-helpcompRed hover:bg-helpcompBlack">
                            Zobacz produkty
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
                        </a>
                    </p>

                </div>
            </div>
        </section>

    <?php endif; ?>

<?php endif; ?>

<!-- <aside class="mb-24 overflow-x-hidden">
    <div class="wrapper">
        <div class="grid grid-cols-11 3xl:w-[calc(100%+7rem)] 3xl:-ml-14">
            <div class="relative grid col-span-7 col-start-3 bg-helpcompBlue rounded-3xl">
                <div class="flex flex-col items-center col-span-5 px-20 py-16 text-center gap-y-6">
                    <h3 class="mb-2 text-3xl font-bold text-helpcompBlack">Ten program i inne produkty firmy InsERT znajdziesz w naszym sklepie internetowym</h3>
                    <p>Zapraszamy do naszego sklepu internetowego, gdzie znajdziesz ten program oraz inne rozwiązania firmy InsERT. Wybierz sprawdzone oprogramowanie, które usprawni Twoją pracę i zaspokoi potrzeby Twojej firmy!</p>
                    <p class="mt-3 ">
                        <a href="#" class="inline-flex items-center px-8 py-2 text-sm font-medium text-center text-white uppercase transition duration-300 rounded-full gap-x-1 bg-helpcompRed hover:bg-helpcompBlack">
                            Przejdź do sklepu
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
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</aside> -->

<aside class="mb-24 overflow-x-hidden">
    <div class="wrapper">
        <div class="grid sm:grid-cols-11 3xl:w-[calc(100%+7rem)] 3xl:-ml-14">
            <div class="relative grid sm:col-span-9 sm:col-start-2 lg:col-span-7 lg:col-start-3">
                <div class="flex flex-col items-center col-span-5 text-center xl:px-10 2xl:px-20 gap-y-6">
                    <h3 class="mb-2 text-3xl font-bold text-helpcompBlack">Ten program i inne produkty firmy InsERT znajdziesz w naszym sklepie internetowym</h3>
                    <p>Zapraszamy do naszego sklepu internetowego, gdzie znajdziesz ten program oraz inne rozwiązania firmy InsERT. Wybierz sprawdzone oprogramowanie, które usprawni Twoją pracę i zaspokoi potrzeby Twojej firmy!</p>
                    <p class="mt-3 ">
                        <a href="#" class="inline-flex items-center px-8 py-2 text-sm font-medium text-center text-white uppercase transition duration-300 rounded-full gap-x-1 bg-helpcompRed hover:bg-helpcompBlack">
                            Przejdź do sklepu
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
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</aside>

<?php get_footer(); ?>