<section class="py-0">
    <div class="wrapper">
        <div class="grid gap-12 lg:grid-cols-3">
            <div class="flex flex-col span-col-1 gap-y-8">
                <div class="w-full bg-neutral-100 aspect-video rounded-xl"></div>
                <h3 class="text-2xl font-bold text-helpcompBlack">Podpis elektroniczny</h3>

            </div>
            <div class="flex flex-col span-col-1 gap-y-8">
                <div class="w-full bg-neutral-100 aspect-video rounded-xl"></div>
                <h3 class="text-2xl font-bold text-helpcompBlack">Oprogramowanie Insoft</h3>

            </div>
            <div class="flex flex-col span-col-1 gap-y-8">
                <div class="w-full bg-neutral-100 aspect-video rounded-xl"></div>
                <h3 class="text-2xl font-bold text-helpcompBlack">Oprogramowanie Insert</h3>

            </div>
        </div>
    </div>
</section>

<?php if (have_rows("experience_col")) : ?>
    <?php $count = count(get_field('experience_col')); ?>
    <section class="<?php // echo !is_admin() ? '-mt-24' : null; 
                    ?> pt-24 pb-16 bg-helpcompBlueDark border-b-2 border-helpcompGray/20 border-dotted">
        <div class="wrapper">
            <div class="grid gap-x-4 gap-y-12 sm:grid-cols-2 lg:grid-cols-<?php echo $count; ?> flex">
                <?php while (have_rows("experience_col")) : the_row(); ?>
                    <?php
                    $number = get_sub_field("experience_number");
                    $plus = get_sub_field("experience_plus");
                    $slogan = get_sub_field("experience_slogan");
                    ?>
                    <?php if ($number) : ?>
                        <div class="col-span-1 text-centerr">
                            <h4 class="flex flex-col gap-y-2"><span class="mb-2 text-6xl font-bold text-white xl:text-7xl"><?php echo $number; ?><?php if ($plus) : ?><span class="text-helpcompGray">+</span><?php endif; ?></span><?php if ($slogan) : ?><span class="block max-w-[83%] xl:max-w-[66%] mx-autoo"><?php echo $slogan; ?></span><?php endif; ?></h4>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>