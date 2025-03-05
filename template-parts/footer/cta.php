<section class="overflow-x-hidden">
    <div class="wrapper">
        <div class="grid gap-x-4 lg:grid-cols-12">

            <div class="relative lg:col-span-4 py-24 before:absolute before:bottom-0 before:-right-2 before:top-0 before:-z-[1] before:w-screen before:bg-helpcompRedDark text-white before:max-lg:left-1/2 before:max-lg:w-[calc(100vw+2px)] before:max-lg:right-auto before:max-lg:-translate-x-1/2 zxc">
                <div data-aos="fade-in" data-aos-duration="800" data-aos-delay="300" class="flex flex-col sm:w-5/6 md:w-3/4 gap-y-6">
                    <?php if (get_field('footer_cta_store_slogan', 'option')) : ?><h3 class="mb-2 text-4xl font-semibold text-white lg:text-2xl xl:text-3xl 2xl:text-4xl"><?php echo get_field('footer_cta_store_slogan', 'option'); ?></h3><?php endif; ?>
                    <?php if (get_field('footer_cta_store_lead', 'option')) : ?><?php echo get_field('footer_cta_store_lead', 'option'); ?><?php endif; ?>
                    <?php if (get_field('footer_cta_store_link', 'option')) : ?>
                        <p class="mt-4">
                            <a
                                href="<?php echo esc_url(get_field('footer_cta_store_link', 'option')); ?>"
                                class="group inline-flex items-center border-white border-2 pl-9 pr-6 py-1.5 text-sm font-medium text-center text-white uppercase transition duration-500 rounded-full hover:bg-white hover:text-helpcompBlack hover:border-transparent">
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

            <div class="relative text-helpcompGrayLight lg:col-span-8 lg:grid lg:grid-cols-8 gap-4 bg-[hsl(205,66,10)] py-24 before:absolute before:-left-2 before:bottom-0 before:top-0 before:-z-[1] before:w-screen before:bg-[hsl(205,66,10)] before:max-lg:left-1/2 before:max-lg:w-[calc(100vw+2px)] before:max-lg:right-auto before:max-lg:-translate-x-1/2">
                <div data-aos="fade-in" data-aos-duration="800" data-aos-delay="500" class="gap-4 lg:grid lg:grid-cols-3 lg:col-span-7 lg:col-start-2 sm:w-5/6 md:w-3/4 lg:w-full">
                    <div class="flex flex-col lg:col-span-2 lg:pr-8 gap-y-6">

                        <?php if (get_field('footer_cta_contact_slogan', 'option')) : ?><h3 class="mb-2 text-4xl font-semibold text-white lg:text-2xl xl:text-3xl 2xl:text-4xl"><?php echo get_field('footer_cta_contact_slogan', 'option'); ?></h3><?php endif; ?>
                        <?php if (get_field('footer_cta_contact_lead', 'option')) : ?><?php echo get_field('footer_cta_contact_lead', 'option'); ?><?php endif; ?>
                        <?php if (get_field('footer_cta_contact_text', 'option')) : ?><h4 class="font-medium text-white xl:mt-2"><?php echo get_field('footer_cta_contact_text', 'option'); ?></h4><?php endif; ?>

                        <?php if (have_rows('company_phones', 'option')) : ?>
                            <p class="flex flex-wrap items-start gap-x-8 gap-y-4">
                                <?php while (have_rows('company_phones', 'option')) : the_row(); ?>
                                    <a class="flex flex-wrap items-center gap-x-3 group" href="tel:<?php echo str_replace(' ', '', get_sub_field('company_phone', 'option')); ?>">
                                        <span class="flex items-center justify-center text-white transition-colors duration-300 border-2 rounded-full w-14 h-14 border-helpcompRedDark group-hover:text-helpcompGray">
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
                    <div class="col-span-1 max-lg:hidden ">
                        <div class="flex flex-col-reverse gap-y-6">
                            <h4 class="font-medium text-helpcompGrayLight">Zeskanuj kod QR</h4>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/qr-code2.png" alt="" class="max-w-40">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>