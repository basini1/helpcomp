<?php
/* Template name: Insert - lista */
get_header();
?>

<?php

$current_page_id = get_the_ID();
$child_pages = new WP_Query([
    'post_type'      => 'page',
    'post_parent'    => $current_page_id,
    'orderby'        => 'date',
    'order'          => 'ASC',
    'posts_per_page' => -1,
]);

?>

<?php if ($child_pages->have_posts()) : ?>


    <!-- <div ></div> -->

    <section class="relative bg-center bg-cover bg-helpcompBlue before:absolute before:left-1/2 overflow-x-clip before:w-screen before:bottom-0 before:h-24 before:bg-white" style="bbackground-image: url('https://www.bpxglobal.com/wp-content/themes/bpx/images/bi/bi_outsourcing_bg.png');">
        <div class="bg-gradient-to-b from-helpcompRedDark/70 to-helpcompBlueDark">
            <div class="wrapper">
                <div class="grid gap-4 sm:grid-cols-6">
                    <div class="sm:col-span-4 lg:col-span-3 2xl:col-span-2">
                        <div class="py-24 relative min-h-[66vh] flex justify-center flex-col">
                            <h1 class="mb-8 lg:text-xl text-neutral-300"><?php the_title(); ?></h1>
                            <p class="mb-8 text-4xl font-bold text-white xxs:text-5xl 2xl:text-6xl 3xl:text-7xl">Nowoczesne rozwiązania dla Twojej firmy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="wrapper">
            <div class="grid items-center md:grid-cols-12 gap-y-12 gap-x-4">

                <div class="col-span-6 md:order-last md:col-start-7">
                    <div class="flex items-center justify-center">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/programy-insert.png');" alt="Programy InSERT">
                    </div>
                </div>

                <div class="col-span-5 prose">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-neutral-100">
        <div class="wrapper">
            <!-- <div align="center bg-helpcompBlue"><iframe id="insert_aktualna_promocja_rectangle" name="insert_aktualna_promocja_rectangle" src="https://bannery.insert.com.pl/aktualna_promocja_rectangle" width="300" height="250" frameborder="0" scrolling="no">insert_aktualna_promocja_rectangle</iframe></div> -->
            <div class="flex flex-col my-24">

                <h2 class="mb-16 text-4xl font-semibold text-center text-helpcompBlack">Nasza oferta InSERT</h2>

                <ul class="grid gap-0.5 xxs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 overflow-hidden rounded-xl">

                    <?php while ($child_pages->have_posts()) : $child_pages->the_post(); ?>

                        <li class="col-span-1">
                            <a href="<?php echo esc_url(get_permalink()); ?>" class="block w-full px-6 py-10 bg-white group  min-h-full after:absolute after:inset-0 after:shadow-2xl after:rounded-xl after:shadow-[#BFD0E3] hover:after:opacity-100 after:opacity-0 after:transition-opacity after:duration-500 hover:z-10 relative after:hidden">
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

            </div>
        </div>
    </section>

<?php endif; ?>

<aside class="-mt-24 overflow-x-hidden bg-center bg-cover text-helpcompGrayLight" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/sklep-internetowy-helpcomp.jpg');">
    <div class="py-24 bg-helpcompBlueDark/90">
        <div class="wrapper">
            <div class="grid sm:grid-cols-11 3xl:w-[calc(100%+7rem)] 3xl:-ml-14">
                <div class="relative grid sm:col-span-9 sm:col-start-2 lg:col-span-7 lg:col-start-3">
                    <div class="flex flex-col items-center col-span-5 text-center xl:px-10 2xl:px-20 gap-y-6">
                        <h3 class="text-3xl font-bold text-white">Oprogramowanie firmy InsERT znajdziesz w naszym sklepie internetowym</h3>
                        <p>Zapraszamy do naszego sklepu internetowego, gdzie znajdziesz rozwiązania firmy InsERT. Wybierz sprawdzone oprogramowanie, które usprawni Twoją pracę i zaspokoi potrzeby Twojej firmy!</p>
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
    </div>
</aside>

<?php get_footer(); ?>