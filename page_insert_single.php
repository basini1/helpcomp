<?php
/* Template name: Insert - program */
?>


<?php get_header(); ?>


<?php
$image_id = get_field('insert_box'); // Pobierz ID obrazka z pola ACF
?>

<section class="bg-right bg-cover" style="background-image: url('https://www.bpxglobal.com/wp-content/themes/bpx/images/bi/bi_outsourcing_bg.png');">
    <div class="bg-gradient-to-b from-helpcompRedDark/70 to-helpcompBlueDark">
        <div class="wrapper">
            <div class="min-h-[66vh] flex items-center py-16 xl:py-24">
                <div class="grid md:grid-cols-12 grow 4xl:w-[calc(100%+7rem)] 4xl:-ml-14">
                    <div class="md:col-span-8 sm:col-span-10 sm:col-start-2 md:col-start-3">
                        <div class="flex flex-col items-center text-center text-neutral-300">
                            <h1 class="mb-8 text-3xl font-bold text-white xxs:text-6xl sm:text-7xl md:text-6xl 2xl:text-7xl 3xl:text-8xl"><?php the_title(); ?></h1>
                            <?php if (get_field('insert_slogan') || get_field('insert_lead')) : ?>
                                <div class="max-w-screen-sm ">
                                    <?php if (get_field('insert_slogan')) : ?>
                                        <span class="block mb-8 text-lg font-normal xl:text-2xl text-helpcompRed"><?php echo get_field('insert_slogan'); ?></span>
                                    <?php endif; ?>
                                    <div class="a">
                                        <?php if (get_field('insert_lead')) : ?><?php echo get_field('insert_lead'); ?><?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <button data-element="single-apartment_related_nextt" class="relative rounded-full -bottom-12 3xl:-bottom-16">
                                <div class="flex items-center justify-center overflow-hidden text-white transition-all duration-300 rounded-full h-14 w-14 hover: hover:bg-white bg-helpcompRedDark hover:text-helpcompBlack">
                                    <svg class="h-auto max-w-full rotate-180" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40">
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
                </div>
            </div>
        </div>
    </div>
</section>

<?php /*

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

*/ ?>

<section>

    <div class="wrapper">

        <div class="relative grid py-24 gap-x-4 gap-y-12 lg:grid-cols-12">
            <!-- <div class="py-24 lg:col-span-4"> -->
            <?php if ($image_id) : ?>
                <div class="lg:col-span-4">
                    <div class="flex justify-center border-0 lg:justify-end lg:p-8 border-neutral-100 rounded-xl md:sticky top-28">
                        <!-- <div class="relative flex flex-col sm:w-5/6 md:w-3/4"> -->
                        <?php
                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); // Pobierz opis ALT
                        echo wp_get_attachment_image($image_id, 'medium', false, ['alt' => esc_attr($image_alt), 'class' => 'w-2/3 lg:w-3/4 xl:w-2/3 duration-500 group-hover:scale-105 will-change-transform']);
                        ?>
                        <!-- </div> -->
                    </div>
                </div>
            <?php endif; ?>
            <!-- </div> -->
            <div class="gap-4 lg:col-span-8 lg:grid lg:grid-cols-8">
                <div class="gap-4 lg:col-span-7 lg:col-start-2">
                    <div class="flex flex-col">
                        <!-- <h3 class="mb-2 text-4xl font-semibold text-helpcompBlack lg:text-2xl xl:text-3xl 2xl:text-4xl">Masz pytania lub chcesz podjąć współpracę?</h3> -->
                        <?php if (get_field('insert_short')) : ?>
                            <div class="flex flex-col pb-12 mb-12 text-lg prose border-b-2 prose-p:my-0 prose-ul:my-0 border-helpcompBlue gap-y-6"><?php echo (get_field('insert_short')); ?></div>
                        <?php endif; ?>
                        <div class="prose max-w-none">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
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
    $parent_id = $parent->ID;

    $child_pages = new WP_Query([
        'post_type' => 'page',
        'post_parent' => $parent_id,
        'orderby' => 'date',
        'order' => 'ASC',
        'post__not_in'           => [get_the_ID()],
        'posts_per_page' => -1,
    ]);

    ?>

    <?php if ($child_pages->have_posts()) : ?>

        <section data-slider="slider_single-apartment_related" class="pt-24 overflow-x-hidden bg-neutral-100 lg:pt-0">
            <div class="wrapper">

                <div class="relative z-[1] grid gap-x-4 gap-y-16 lg:grid-cols-12 before:bg-white before:absolute before:left-1/2 before:w-screen before:-translate-x-1/2 before:h-1/2 before:top-0 before:-z-[1] before:max-lg:h-full">
                    <div class="lg:col-span-5">
                        <div class="py-12 px-10 bg-[#a61120] rounded-xl flex flex-col gap-y-6 text-white min-h-full">
                            <?php if (get_field('insert-global_slogan', $parent_id)) : ?><h3 class="mb-2 text-3xl font-semibold text-white lg:text-2xl xl:text-3xl"><?php echo get_field('insert-global_slogan', $parent_id); ?></h3><?php endif; ?>
                            <?php if (get_field('insert-global_url', $parent_id)) : ?>
                                <p class="mt-4">
                                    <a target="_blank" href="<?php echo esc_url(get_field('insert-global_url', $parent_id)); ?>" class="group inline-flex items-center border-white border-2 pl-9 pr-6 py-1.5 text-sm font-medium text-center text-white uppercase transition duration-500 rounded-full hover:bg-white hover:text-helpcompBlack hover:border-transparent">
                                        Zobacz sklep
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
                    <?php if (have_rows('insert-global_whyus', $parent_id)) : ?>
                        <div class="gap-4 lg:col-span-7">
                            <div class="py-12 px-10 bg-[hsl(205,66,10)] rounded-xl flex flex-col gap-y-6  text-helpcompGrayLight min-h-full">
                                <h3 class="mb-2 text-3xl font-semibold text-white lg:text-2xl xl:text-3xl">Dlaczego u Nas?</h3>
                                <div class="grid gap-x-4 gap-y-6 md:grid-cols-4 xxs:grid-cols-2">
                                    <?php while (have_rows('insert-global_whyus', $parent_id)) : the_row(); ?>
                                        <?php
                                        $whyus_icon = get_sub_field('whyus_icon');
                                        $whyus_lead = get_sub_field('whyus_lead');
                                        ?>
                                        <div class="col-span-1">
                                            <div class="flex flex-col items-center gap-y-4">
                                                <?php if ($whyus_icon) : ?>
                                                    <div class="flex items-center justify-center w-[6.25rem] h-[6.25rem] bborder-2 bborder-dashed brounded-full bborder-helpcompRed">
                                                        <?php
                                                        echo wp_get_attachment_image($whyus_icon, 'full', false, ['alt' => '', 'class' => '']);
                                                        ?>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if ($whyus_lead) : ?><span class="block text-sm font-medium text-center"><?php echo $whyus_lead; ?></span><?php endif; ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- <div align="center bg-helpcompBlue"><iframe id="insert_aktualna_promocja_rectangle" name="insert_aktualna_promocja_rectangle" src="https://bannery.insert.com.pl/aktualna_promocja_rectangle" width="300" height="250" frameborder="0" scrolling="no">insert_aktualna_promocja_rectangle</iframe></div> -->
                <div class="flex flex-col my-24">

                    <h2 class="mb-16 text-4xl font-semibold text-center text-helpcompBlack">Sprawdź również</h2>

                    <div class="relative">

                        <div data-slider="single-apartment_related_slides" class="relative lg:overflow-hidden lg:rounded-xl">


                            <!-- slider wrapper -->
                            <ul class="swiper-wrapper">

                                <?php while ($child_pages->have_posts()) : $child_pages->the_post(); ?>

                                    <li class="swiper-slide asddsa !transition-[transform,_opacity] !duration-500 !h-auto">
                                        <a href="<?php echo esc_url(get_permalink()); ?>" class="min-h-full block w-full px-6 py-10 bg-white group after:absolute after:inset-0 after:shadow-2xl after:rounded-xl after:shadow-[#BFD0E3] hover:after:opacity-100 after:opacity-0 after:transition-opacity after:duration-500 hover:z-10 relative after:hidden">
                                            <div class="flex flex-col gap-y-4">
                                                <?php
                                                $image_id = get_field('insert_box'); // Pobierz ID obrazka z pola ACF
                                                if ($image_id) : ?>
                                                    <div class="relative px-3 select-none">
                                                        <?php
                                                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); // Pobierz opis ALT
                                                        echo wp_get_attachment_image($image_id, 'medium', false, ['alt' => esc_attr($image_alt), 'class' => 'duration-500 group-hover:scale-105 will-change-transform']);
                                                        ?>
                                                    </div>
                                                <?php endif; ?>
                                                <h3 class="font-semibold leading-tight text-center duration-500 text-md text-helpcompBlack group-hover:text-helpcompRed"><?php the_title(); ?></h3>
                                            </div>
                                        </a>
                                    </li>

                                <?php
                                endwhile;
                                wp_reset_postdata();
                                ?>
                            </ul>
                            <!-- swiper wrapper -->

                        </div>

                        <!-- swiper navigation -->
                        <div class="pointer-events-none absolute -left-20 -rright-7 -right-20 top-1/2 z-[1] -mtt-[1.9375rem] -mt-7 hidden justify-between xl:flex">
                            <button data-element="single-apartment_related_prev" class="transition pointer-events-auto group disabled:opacity-50 disabled:pointer-events-none">
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
                            <button data-element="single-apartment_related_next" class="transition pointer-events-auto group disabled:opacity-50 disabled:pointer-events-none">
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
                        <!-- swiper navigation -->

                    </div>

                    <!-- swiper pagination -->
                    <div data-element="single-apartment_related_pagination" class="mt-16 text-center" style="--swiper-pagination-color: #d92130; --swiper-pagination-bullet-inactive-color: #ffffff; --swiper-pagination-bullet-inactive-opacity: 1; --swiper-pagination-bullet-height: 0.6875rem; --swiper-pagination-bullet-width: 0.6875rem; --swiper-pagination-bullet-horizontal-gap: 0.375rem !important;"></div>
                    <!-- swiper pagination -->




                    <p class="flex justify-center hidden mt-16">
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

<aside class="hidden mb-24 overflow-x-hidden">
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