<section>

    <div class="wrapper">
        <div class="flex flex-col-reverse grid-cols-12 md:grid gap-x-4 gap-y-12 md:items-center">

            <div class="col-span-3">

                <div class="4xl:-ml-14 3xl:w-[calc(100%+3.5rem)]">

                    <h1 class="mb-8 text-4xl font-extrabold 3xl:text-5xl text-helpcompBlack"><?php echo get_field('section_title'); ?></h1>
                    <h2 class="text-2xl font-bold text-helpcompBlack"><?php echo get_field('section_slogan'); ?></h2>

                    <?php if (get_field('section_reverse')) {
                        echo "Odwróć";
                    } else {
                        echo "Nie odwracaj";
                    } ?>
                </div>
            </div>

            <div class="col-span-9">

                <div class="4xl:w-[calc(100%+3.5rem)]">

                    <?php if (get_field('section_description')) : ?>
                        <?php // echo get_field('section_description'); 
                        ?>
                        <img class="max-w-full" src="https://placehold.co/1600x900/17181a/17181a/png" alt="">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</section>