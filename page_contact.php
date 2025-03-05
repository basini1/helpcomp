<?php
/* Template name: Kontakt */
get_header();
?>

<section class="bg-fixed bg-center bg-cover text-helpcompGrayLight" style="background-image:url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/helpcomp-sklep.jpg')">
    <div class="py-24 bg-helpcompBlueDark/[0.97]">
        <div class="wrapper">
            <div class="grid gap-y-24 gap-x-4 md:grid-cols-12">

                <div data-aos="fade-in" data-aos-duration="800" class="flex flex-col col-span-5 gap-y-12">

                    <?php echo get_field('contact_details_slogan') ? '<h1 data-aos="fade-in" data-aos-duration="800" data-aos-delay="200"  class="text-4xl font-bold text-white lg:text-3xl xl:text-4xl 2xl:text-5xl">' . get_field('contact_details_slogan') . '</h1>' : null; ?>

                    <div class="flex flex-col gap-y-6">

                        <address data-aos="fade-in" data-aos-duration="800" data-aos-delay="300" class="not-italic max-w-96">
                            <?php echo get_field('company_full-name', 'option') ? '<strong class="block mb-12 text-lg font-medium text-white">' . get_field('company_full-name', 'option') . '</strong>' : null; ?>
                            <?php echo get_field('company_address', 'option') ? get_field('company_address', 'option') : null; ?>
                        </address>

                        <div data-aos="fade-in" data-aos-duration="800" data-aos-delay="500">

                            <?php if (have_rows('company_phones', 'option')) : ?>
                                <p class="flex flex-col items-start gap-y-1">
                                    <?php while (have_rows('company_phones', 'option')) : the_row(); ?>
                                        <a class="flex flex-wrap items-center gap-x-3 group" href="tel:<?php echo str_replace(' ', '', get_sub_field('company_phone', 'option')); ?>">
                                            <span class="flex items-center w-5 text-helpcompRed">
                                                <svg class="relative" xmlns="http://www.w3.org/2000/svg" width="18.485" height="18.518" viewBox="0 0 18.485 18.518">
                                                    <path d="M12.583,4.237a4.047,4.047,0,0,1,3.2,3.2M12.583,1a7.284,7.284,0,0,1,6.434,6.426m-.809,6.459v2.428a1.619,1.619,0,0,1-1.764,1.619,16.017,16.017,0,0,1-6.985-2.485A15.782,15.782,0,0,1,4.6,10.591,16.017,16.017,0,0,1,2.118,3.574,1.619,1.619,0,0,1,3.729,1.809H6.157A1.619,1.619,0,0,1,7.776,3.2a10.392,10.392,0,0,0,.567,2.274,1.619,1.619,0,0,1-.364,1.708L6.95,8.211a12.95,12.95,0,0,0,4.856,4.856l1.028-1.028a1.619,1.619,0,0,1,1.708-.364,10.392,10.392,0,0,0,2.274.567,1.619,1.619,0,0,1,1.392,1.643Z" transform="translate(-1.361 -0.172)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                                                </svg>
                                            </span>
                                            <span class="block text-white transition-colors duration-300 group-hover:text-helpcompRed"><?php echo get_sub_field('company_phone', 'option'); ?></span>
                                        </a>
                                    <?php endwhile; ?>
                                </p>
                            <?php endif; ?>

                            <?php echo get_field('company_nip', 'option') ? '<p>NIP: ' . get_field('company_nip', 'option') . '</p>' : null; ?>

                            <?php if (have_rows('company_opening', 'option')) : ?>
                                <p>Godziny otwarcia:</p>
                                <p class="flex flex-wrap -mt-2 gap-x-3">
                                    <span class="block w-5">
                                        <svg class="relative translate-y-1 text-helpcompRed size-4" xmlns="http://www.w3.org/2000/svg" width="17.5" height="17.5" viewBox="0 0 17.5 17.5">
                                            <g transform="translate(0.513 0.944)">
                                                <circle id="Ellipse_3" data-name="Ellipse 3" cx="8" cy="8" r="8" transform="translate(0.237 -0.194)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
                                                <path id="Path_17" data-name="Path 17" d="M12,6v4.856l3.237,1.619" transform="translate(-3.907 -2.763)" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    <span class="block">
                                        <?php
                                        $rowCount = count(get_field('company_opening', 'option'));
                                        $i = 1;
                                        ?>

                                        <?php while (have_rows('company_opening', 'option')): the_row(); ?>
                                            <?php
                                            $open = get_sub_field('company_open', 'option');
                                            echo $open;
                                            if ($i < $rowCount): ?>
                                                <br />
                                            <?php endif; ?>
                                            <?php $i++; ?>
                                        <?php endwhile; ?>
                                    </span>
                                </p>
                            <?php endif; ?>

                        </div>

                        <?php if (get_field('company_info', 'option')) : ?>
                            <div data-aos="fade-in" data-aos-duration="500" data-aos-delay="700">
                                <hr class="my-12 border-t-2 border-dotted border-helpcompGrayLight/20" />
                                <div class="flex -mt-2 gap-x-3">
                                    <span class="block w-5">
                                        <svg class="relative translate-y-0 text-helpcompRed size-6" xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                        </svg>
                                    </span>
                                    <div class="flex flex-col gap-y-5"><?php echo get_field('company_info', 'option'); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>

                </div>

                <div data-aos="fade-in" data-aos-duration="800" data-aos-delay="500" class="flex flex-col col-span md:col-span-6 md:col-start-7 gap-y-12">

                    <?php echo get_field('contact_form_slogan') ? '<h2 class="text-4xl font-bold text-white lg:text-3xl xl:text-4xl 2xl:text-5xl">' . get_field('contact_form_slogan') . '</h2>' : null; ?>

                    <?php echo get_field('contact_form_lead') ? '<h3 class="max-w-sm text-lg text-helpcompGrayLight">' . get_field('contact_form_lead') . '</h3>' : null; ?>

                    <?php if (get_field('contact_form_shortcode')) : ?>
                        <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
                    <?php endif; ?>

                    <?php echo get_field('contact_form_after') ? '<p><small class="block text-base text-helpcompGray">' . get_field('contact_form_after') . '</small></p>' : null; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="flex flex-col gap-y-16">

        <?php echo get_field('contact_map_slogan') ? '<div class="wrapper"><h1 class="text-4xl font-bold text-center text-helpcompBlack lg:text-3xl xl:text-4xl 2xl:text-5xl">' . get_field('contact_map_slogan') . '</div></h1>' : null; ?>

        <div class="relative">
            <div data-aos="fade-in" data-aos-duration="500" id="map" class="w-full h-[66vh]"></div>
            <div data-aos="fade-in" data-aos-duration="500" data-aos-delay="300" class="absolute bottom-0 w-64 px-6 py-4 mb-8 -ml-32 bg-white shadow-lg xs:mb-12 sm:mb-12 rounded-xl left-1/2">
                <div class="flex-col gap-y-6">
                    <h4 class="mb-1 text-sm font-semibold sm:text-base text-helpcompGray">Legenda</h4>
                    <div class="flex justify-between text-base gap-x-4 gap-y-2">
                        <div class="flex items-center gap-x-1">
                            <img class="w-3 h-auto xs:w-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/map-marker.svg" alt=""><span class="font-normal text-helpcompRed">Helpcomp</span>
                        </div>
                        <div class="flex items-center gap-x-1">
                            <img class="w-3 h-auto xs:w-4" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/map-marker--2.svg" alt=""><span class="font-normal text-helpcompBlack">Parkometr</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<aside class="hidden mb-24 overflow-x-hidden">
    <div class="wrapper">
        <div class="grid sm:grid-cols-11 3xl:w-[calc(100%+7rem)] 3xl:-ml-14">
            <div class="relative grid sm:col-span-9 sm:col-start-2 lg:col-span-7 lg:col-start-3">
                <div class="flex flex-col items-center col-span-5 text-center xl:px-10 2xl:px-20 gap-y-6">
                    <h3 class="mb-2 text-3xl font-bold text-helpcompBlack">Ten program i inne produkty firmy InsERT znajdziesz w naszym sklepie internetowym</h3>
                    <p>Zapraszamy do naszego sklepu internetowego, gdzie znajdziesz ten program oraz inne rozwiązania firmy InsERT. Wybierz sprawdzone oprogramowanie, które usprawni Twoją pracę i zaspokoi potrzeby Twojej firmy!</p>
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
</aside>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAubPYcCaQYlI8ZgbFY7lsmtEpSPRvvUhg" defer></script>
<script>
    function initMap() {

        const mapOptions = {
            center: {
                lat: 50.351097,
                lng: 18.921321,

            },
            zoom: 16,
            styles: [{
                    elementType: "geometry",
                    stylers: [{
                        color: "#f5f5f5"
                    }]
                },
                {
                    elementType: "labels.icon",
                    stylers: [{
                        visibility: "off"
                    }]
                },
                {
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#616161"
                    }]
                },
                {
                    elementType: "labels.text.stroke",
                    stylers: [{
                        color: "#f5f5f5"
                    }]
                },
                {
                    featureType: "administrative.land_parcel",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#bdbdbd"
                    }],
                },
                {
                    featureType: "poi",
                    elementType: "geometry",
                    stylers: [{
                        color: "#eeeeee"
                    }],
                },
                {
                    featureType: "poi",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#757575"
                    }],
                },
                {
                    featureType: "poi.park",
                    elementType: "geometry",
                    stylers: [{
                        color: "#e5e5e5"
                    }],
                },
                {
                    featureType: "poi.park",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#9e9e9e"
                    }],
                },
                {
                    featureType: "road",
                    elementType: "geometry",
                    stylers: [{
                        color: "#ffffff"
                    }],
                },
                {
                    featureType: "road.arterial",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#757575"
                    }],
                },
                {
                    featureType: "road.highway",
                    elementType: "geometry",
                    stylers: [{
                        color: "#dadada"
                    }],
                },
                {
                    featureType: "road.highway",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#616161"
                    }],
                },
                {
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [{
                        color: "#c9c9c9"
                    }],
                },
                {
                    featureType: "water",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#9e9e9e"
                    }],
                },
            ],
        };

        const map = new google.maps.Map(document.getElementById("map"), mapOptions);

        const mainMarkerPosition = {
            lat: 50.351097,
            lng: 18.921321
        };
        new google.maps.Marker({
            position: mainMarkerPosition,
            map: map,
            icon: "<?php echo esc_url(get_template_directory_uri()); ?>/assets/map-marker.svg",
        });

        const otherMarkers = [{
                lat: 50.35044082404893,
                lng: 18.922584346079272
            },
            {
                lat: 50.35019766727914,
                lng: 18.92265432841241
            },
            {
                lat: 50.34977065563349,
                lng: 18.921487769522496
            },
            {
                lat: 50.34976058118053,
                lng: 18.921113363173035
            },
            {
                lat: 50.35010795788108,
                lng: 18.92001543033703
            },
        ];

        otherMarkers.forEach((position) => {
            new google.maps.Marker({
                position,
                map: map,
                icon: "<?php echo esc_url(get_template_directory_uri()); ?>/assets/map-marker--2.svg",
            });
        });
    }

    window.onload = initMap;
</script>

<?php get_footer(); ?>