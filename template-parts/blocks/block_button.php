<?php
$label = get_field('button_label');
$variant = get_field('button_variant');
$internal = get_field('button_link_internal');
$external = get_field('button_link_external');

$variant_red = 'border-helpcompRed text-white bg-helpcompRed hover:bg-helpcompBlueDark hover:text-white hover:border-helpcompBlueDark';
$variant_black = 'border-helpcompBlueDark text-white bg-helpcompBlueDark hover:bg-helpcompRed hover:text-white hover:border-helpcompRed';
$variant_white = 'border-white text-white bg-transparent hover:bg-white hover:text-helpcompBlack hover:bg-white';

$button_variant = null;

if ($variant) {
    switch ($variant) {
        case 'v1':
            $button_variant = $variant_red;
            break;
        case 'v2':
            $button_variant = $variant_black;
            break;
        case 'v3':
            $button_variant = $variant_white;
            break;
    }
}

?>


<p class="mt-8"><a
        href="<?php echo esc_url($internal ? $internal : $external); ?>"
        class="group inline-flex items-center border-2 pl-9 pr-6 py-1.5 text-sm font-medium text-center uppercase transition duration-500 rounded-full no-underline <?php echo $button_variant; ?> ">
        <?php echo $label ? $label : 'Brak tekstu odnośnika'; ?>
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