<div class="mb-10 relative overflow-x-hidden before:left-0 before:right-0 before:h-[60px] before:absolute pt-[60px] before:bg-right before:top-0 before:opacity-10 aaa -mt-8">

    <div class="flex flex-wrap justify-center mt-6 text-sm font-light gap-x-8 gap-y-1">
        <p class="mb-0">&copy; <?php echo date("Y"); ?> Wszelkie prawa zastrzeżone <?php echo get_field('company_name', 'option') ? ' - ' . get_field('company_name', 'option') : null; ?></p>
    </div>

</div>

<style>
    .aaa:before {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='2919.258' height='60.436' viewBox='0 0 2919.258 60.436'%3E%3Cpath id='accent.svg' d='M-61995.742,13776.662H-59186.4l11.328-16.49,8.438,11.885q11.25-17.613,22.516-35.232l4.586,7.438,8.172-14.3,24.492,56.707q8.707-21.141,17.4-42.287h12.977v1.451h-12.008l-18.336,44.564-24.7-57.2-7.953,13.9-4.648-7.551-22.43,35.1-8.477-11.943-10.586,15.412h-2810.109l-.008-1.453Z' transform='translate(61995.75 -13729.961)' fill='%23eff6fe'/%3E%3C/svg%3E%0A");
    }
</style>