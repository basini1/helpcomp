<?php if (have_rows('row_col')) : ?>
    <?php $count = count(get_field('row_col')); ?>

    <section>

        <div class="prose max-w-none">



            <?php if ($count !== 2) : ?>

                <div class="grid grid-cols-<?php echo $count; ?> gap-x-4 gap-y-12">

                    <?php while (have_rows('row_col')) : the_row(); ?>

                        <?php
                        $image_id = get_sub_field('col_image');
                        $slogan = get_sub_field('col_slogan');
                        $text = get_sub_field('col_text');
                        ?>

                        <div class="flex flex-col col-span-1 prose">
                            <?php if ($image_id) {
                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); // Pobierz opis ALT
                                echo wp_get_attachment_image($image_id, 'medium', false, ['alt' => esc_attr($image_alt), 'class' => 'md:mt- duration-500 group-hover:scale-105 will-change-transform']);
                            } ?>
                            <?php echo $slogan ? $slogan : null; ?>
                            <?php echo $text ? $text : null; ?>
                        </div>

                    <?php endwhile; ?>
                </div>

            <?php else : ?>

                <?php
                $is_centered = get_field('row_center');
                $is_reversed = get_field('row_reverse');
                ?>

                <div class="grid lg:grid-cols-12 gap-4 <?php echo $is_centered ? ' lg:items-center' : null; ?>">

                    <?php while (have_rows('row_col')) : the_row(); ?>

                        <?php
                        $image_id = get_sub_field('col_image');
                        $slogan = get_sub_field('col_slogan');
                        $text = get_sub_field('col_text');
                        ?>

                        <?php if (get_row_index() == 1) : ?>

                            <div class="<?php echo $is_reversed ? 'lg:col-start-8 lg:col-span-5 lg:order-last' : 'lg:col-span-5'; ?>">

                                <?php if ($image_id) {
                                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); // Pobierz opis ALT
                                    echo wp_get_attachment_image($image_id, 'medium', false, ['alt' => esc_attr($image_alt), 'class' => 'md:mt- duration-500 group-hover:scale-105 will-change-transform']);
                                } ?>
                                <?php echo $slogan ? $slogan : null; ?>
                                <?php echo $text ? $text : null; ?>

                            </div>

                        <?php else : ?>

                            <div class="<?php echo $is_reversed ? 'lg:col-span-6' : 'lg:col-start-7 lg:col-span-6'; ?>">
                                <div class="p-12 overflow-hidden bg-neutral-100 rounded-xl aspect-square">
                                    <?php if ($image_id) {
                                        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); // Pobierz opis ALT
                                        echo wp_get_attachment_image($image_id, 'medium', false, ['alt' => esc_attr($image_alt), 'class' => 'md:mt- duration-500 group-hover:scale-105 will-change-transform opacity-0']);
                                    } ?>
                                    <?php echo $slogan ? $slogan : null; ?>
                                    <?php echo $text ? $text : null; ?>
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endwhile; ?>

                </div>

            <?php endif; ?>



            <!-- </div> -->

    </section>

<?php endif; ?>