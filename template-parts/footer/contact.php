<div class="flex flex-col gap-y-6">
    <address class="not-italic max-w-96">
        <?php echo get_field('company_full-name', 'option') ? '<strong class="block mb-8 text-lg font-medium leading-[32px] text-helpcompBlack">' . get_field('company_full-name', 'option') . '</strong>' : null; ?>
        <?php echo get_field('company_address', 'option') ? get_field('company_address', 'option') : null; ?>
    </address>
    <?php if (have_rows('company_phones', 'option')) : ?>
        <p class="flex flex-col items-start gap-y-1 leading-">
            <?php while (have_rows('company_phones', 'option')) : the_row(); ?>
                <a class="flex flex-wrap gap-x-3 group" href="tel:<?php echo str_replace(' ', '', get_sub_field('company_phone', 'option')); ?>">
                    <span class="flex items-center text-helpcompRed">
                        <svg class="relative" xmlns="http://www.w3.org/2000/svg" width="18.485" height="18.518" viewBox="0 0 18.485 18.518">
                            <path d="M12.583,4.237a4.047,4.047,0,0,1,3.2,3.2M12.583,1a7.284,7.284,0,0,1,6.434,6.426m-.809,6.459v2.428a1.619,1.619,0,0,1-1.764,1.619,16.017,16.017,0,0,1-6.985-2.485A15.782,15.782,0,0,1,4.6,10.591,16.017,16.017,0,0,1,2.118,3.574,1.619,1.619,0,0,1,3.729,1.809H6.157A1.619,1.619,0,0,1,7.776,3.2a10.392,10.392,0,0,0,.567,2.274,1.619,1.619,0,0,1-.364,1.708L6.95,8.211a12.95,12.95,0,0,0,4.856,4.856l1.028-1.028a1.619,1.619,0,0,1,1.708-.364,10.392,10.392,0,0,0,2.274.567,1.619,1.619,0,0,1,1.392,1.643Z" transform="translate(-1.361 -0.172)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                        </svg>
                    </span>
                    <span class="block transition-colors duration-300 text-helpcompGray group-hover:text-helpcompBlack"><?php echo get_sub_field('company_phone', 'option'); ?></span>
                </a>
            <?php endwhile; ?>
        </p>
    <?php endif; ?>
</div>