    </main>

    <?php
    $template = get_page_template_slug();

    if (!in_array($template, ['page_insert_archive.php', 'page_insert_single.php', 'page_contact.php'])) {
        get_template_part('template-parts/footer/cta');
    }

    ?>

    <footer>
        <div class="text-gray-500 wrapper 2xl:px-20">
            <div class="grid py-16 gap-x-4 gap-y-12 lg:grid-cols-12">
                <div class="border-0 border-gray-200 lg:col-span-4">
                    <?php get_template_part('template-parts/footer/contact'); ?>
                </div>
                <div class="lg:col-span-7 lg:col-start-6">
                    <?php get_template_part('template-parts/footer/menu_footer'); ?>
                </div>
            </div>
            <div class="text-sm text-center">
                <?php get_template_part('template-parts/footer/copy'); ?>
            </div>
        </div>
    </footer>

    </div>


    </div>

    <?php wp_footer(); ?>

    </body>

    </html>