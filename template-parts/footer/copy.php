<?php $privacy_policy_url = get_privacy_policy_url(); ?>

<div class="grid mb-12 text-center lg:grid-cols-12 lg:text-left gap-x-4">

    <div class="justify-center text-sm lg:col-span-7 lg:col-start-6 text-helpcompGrayLight">
        <p class="mb-0">Copyright &copy; <?php echo get_field('company_name', 'option') ? get_field('company_name', 'option') : null; ?> <?php echo date("Y"); ?>. <?php if (!empty($privacy_policy_url)) : ?><a class="text-inherit" href="<?php echo esc_url($privacy_policy_url); ?>">Polityka prywatności<a><?php endif; ?></p>
    </div>

</div>