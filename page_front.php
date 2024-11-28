<?php
/* Template Name: Strona główna */
?>

<?php get_header(); ?>

<div class="h-[80vh] bg-helpcompBlueDark"></div>

<?php /*

<section class="pb-24 ">
    <ul class="bg-opticBlack">
        <li>
            <div class="w-full min-h-[calc(90vh-6rem)] max-md:min-h-[calc(90vh-5rem)] bg-gradient-to-t from-black/50 to-black/0 max-h-[65rem] flex">
                <div class="min-h-full wrapper">
                    <div class="flex flex-col justify-center min-h-full -mx-2">
                        <div class="w-full px-2 my-32 md:w-1/2 lg:w-5/12">
                            <h1 class="mb-12 text-6xl font-semibold text-white uppercase">Lorem ipsum dolor sit amet</h1>
                            <div class="flex flex-col w-full text-lg sm:w-3/4 gap-y-6 text-opticGray--light">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p class="flex justify-start mt-3">
                                    <a class="font-semibold text-[0.8125rem] uppercase text-white bg-opticBlack rounded-full flex items-center px-8 py-3.5 border-2 border-transparent text-center justify-between min-h-[1px]" href="#">Dowiedz się więcej</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>

<section class="py-24 -mt-24">
    <div class="wrapper">
        <div class="flex flex-wrap -mx-2 gap-y-12">
            <div class="w-full px-2 md:w-1/2 xl:w-2/3">
                <div class="asd min-h-full w-full bg-opticBlack aspect-[16/9]">foto</div>
            </div>
            <div class="w-full px-2 md:w-1/2 xl:w-1/3">
                <div class="md:pl-4 lg:pl-8 xl:pl-10 2xl:pl-12 3xl:pl-20">
                    <div class="flex flex-col gap-y-8">
                        <h2 class="font-semibold text-4xl 2xl:text-5xl 3xl:text-5.5xl text-opticBlack uppercase">Optic Fit</h2>
                        <span class="font-semibold text-[0.8125rem] uppercase text-opticOrange -mt-4 block"><strong class="font-semibold">Zakład optyczny</strong></span>
                        <div class="flex flex-col gap-y-6">
                            <p>Salon OPTIC FIT to nie tylko miejsce sprzedaży okularów. U nas wykonacie Państwo kompleksowe badanie wzroku, które przeprowadza lekarz okulista.</p>
                            <p>W naszym salonie posiadamy w sprzedaży oklulary korekcyjne i przeciwsłoneczne wiodących marek. Specjalizujemy się w doborze soczewek progresywnych. Oferujemy aplikację i dopasowanie soczewek kontaktowych wraz z kompleksową konsultacją lekarską. Wyróżnia nas szczególnie wysoka jakość i oryginalność oferowanych produktów. Naszym atutem jest różnorodność i niepowtarzalność kolekcji oraz duża ilość markowych opraw w przystępnej cenie.</p>
                            <p>Najwyższa jakość sprzętu okulistycznego i optycznego gwarantuje solidność i trwałość wykonywanych okularów. Wysoki poziom wykwalifikowania personelu oraz przyjazna atmosfera sprawią że każdy poczuje się u nas naprawdę luksusowo.</p>
                            <p class="flex justify-start mt-3">
                                <a class="font-semibold text-[0.8125rem] uppercase text-white bg-opticBlack rounded-full flex items-center px-8 py-3.5 border-2 border-transparent text-center justify-between min-h-[1px]" href="#">Dowiedz się więcej</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 -mt-24">
    <div class="wrapper">
        <div class="flex -mx-2">
            <div class="w-full px-2 mx-auto 2xl:w-5/6">
                <ul class="grid gap-12 xl:gap-x-20 lg:gap-8 xl:gap-y-12 xl:gap-x-18 md:grid-cols-2 lg:grid-cols-3">
                    <li class="col-span-1 ">
                        <div class="flex items-centerr gap-x-4 md:gap-x-5 lg:gap-x-6 xl:gap-x-7">
                            <div class="flex items-center justify-center w-24 h-24 rounded-md bg-opticGray--extralight shrink-0">a</div>
                            <div class="flex flex-col gap-y-2">
                                <h3 class="text-base font-medium leading-tight text-opticBlack">Profesjonalna obsługa wzrokowa</h3>
                                <p class="text-opticGray--lightt text-smm">Badanie wzroku, dobór okularów i soczewek kontaktowych</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-span-1 ">
                        <div class="flex items-centerr gap-x-4 md:gap-x-5 lg:gap-x-6 xl:gap-x-7">
                            <div class="flex items-center justify-center w-24 h-24 rounded-md bg-opticGray--extralight shrink-0">a</div>
                            <div class="flex flex-col gap-y-2">
                                <h3 class="text-base font-medium leading-tight text-opticBlack">Fachowe doradztwo i ekspercka wiedza</h3>
                                <p class="text-opticGray--lightt text-smm">Najlepsze rozwiązania dostosowane do ich oczekiwań</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-span-1 ">
                        <div class="flex items-centerr gap-x-4 md:gap-x-5 lg:gap-x-6 xl:gap-x-7">
                            <div class="flex items-center justify-center w-24 h-24 rounded-md bg-opticGray--extralight shrink-0">a</div>
                            <div class="flex flex-col gap-y-2">
                                <h3 class="text-base font-medium leading-tight text-opticBlack">Bogaty wybór okularów</h3>
                                <p class="text-opticGray--lightt text-smm">Najnowsze modele oraz marki, które spełniają
                                    różnorodne potrzeby i style klientów</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-span-1 ">
                        <div class="flex items-centerr gap-x-4 md:gap-x-5 lg:gap-x-6 xl:gap-x-7">
                            <div class="flex items-center justify-center w-24 h-24 rounded-md bg-opticGray--extralight shrink-0">a</div>
                            <div class="flex flex-col gap-y-2">
                                <h3 class="text-base font-medium leading-tight text-opticBlack">Innowacyjne technologie</h3>
                                <p class="text-opticGray--lightt text-smm">Najnowszy i najbardziej zaawansowany
                                    sprzęt diagnostyczny</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-span-1 ">
                        <div class="flex items-centerr gap-x-4 md:gap-x-5 lg:gap-x-6 xl:gap-x-7">
                            <div class="flex items-center justify-center w-24 h-24 rounded-md bg-opticGray--extralight shrink-0">a</div>
                            <div class="flex flex-col gap-y-2">
                                <h3 class="text-base font-medium leading-tight text-opticBlack">Gwarancja jakości</h3>
                                <p class="text-opticGray--lightt text-smm">Dążymy do pełnej satysfakcji klienta, dajemy
                                    poczucie pewności i zaufania</p>
                            </div>
                        </div>
                    </li>
                    <li class="col-span-1 ">
                        <div class="flex items-centerr gap-x-4 md:gap-x-5 lg:gap-x-6 xl:gap-x-7">
                            <div class="flex items-center justify-center w-24 h-24 rounded-md bg-opticGray--extralight shrink-0">a</div>
                            <div class="flex flex-col gap-y-2">
                                <h3 class="text-base font-medium leading-tight text-opticBlack">Pozytywne doświadczenia</h3>
                                <p class="text-opticGray--lightt text-smm">Stawiamy na komfort oraz swobodę podczas
                                    badań i wyboru okularów</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="py-24 -mt-24 overflow-hidden">
    <div class="mb-12 wrapper">
        <div class="flex flex-col items-center gap-y-8">
            <h2 class="font-semibold text-4xl 2xl:text-5xl 3xl:text-5.5xl text-opticBlack uppercase">Nasza oferta</h2>
            <span class="font-semibold text-[0.8125rem] uppercase text-opticOrange -mt-4 block"><strong class="font-semibold">Optyk Tarnowskie Góry</strong></span>
        </div>
    </div>
    <div class="flex flex-col items-center">
        <div class="relative w-full">

            <?php
            $offer = [
                'Okulary korekcyjne',
                'Okulary słoneczne',
                'Soczewki okularowe',
                'Soczewki kontaktowe',
                'Akcesoria do okularów',
                'Serwis (naprawa)',
                'Badanie wzroku',
            ];
            ?>

            <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ($offer as $item) : ?>
                            <li class="splide__slide">
                                <div class="bg-opticBlack flex flex-col justify-end aspect-[10/14]">
                                    <div class="flex flex-col items-center px-12 py-16 bg-gradient-to-t from-black/50 to-black/0 gap-y-12">
                                        <h3 class="text-2xl font-medium text-center text-white"><?php echo $item; ?></h3>
                                        <a class="font-semibold text-[0.812rem] leading-[1.125rem] uppercase text-white bg-opticBlack rounded-full flex items-center px-8 py-3.5 border-2 border-transparent text-center justify-between min-h-[1px] transition-colors duration-500 hover:border-opticOrange hover:bg-transparent" href="#">Dowiedz się więcej</a>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <!-- <div class="flex flex-wrap justify-center w-full asdasd gap-y-1">
                    <div class="splide__pagination"></div>
                </div> -->
            </div>

            <div data-element="slider_logoset" class="hidden swiper">

                <!-- swiper wrapper -->
                <ul class="swiper-wrapper">
                    <li class="swiper-slide !w-3/4 xxs:w-1/2 sm:!w-1/3 lg:!w-1/4">
                        <div class="bg-opticBlack aspect-[10/14]">
                            Okulary korekcyjne
                        </div>
                    </li>
                    <li class="swiper-slide !w-3/4 xxs:w-1/2 sm:!w-1/3 lg:!w-1/4">
                        <div class="bg-opticBlack aspect-[10/14]">
                            Okulary słoneczne
                        </div>
                    </li>
                    <li class="swiper-slide !w-3/4 xxs:w-1/2 sm:!w-1/3 lg:!w-1/4">
                        <div class="bg-opticBlack aspect-[10/14]">
                            Soczewki okularowe
                        </div>
                    </li>
                    <li class="swiper-slide !w-3/4 xxs:w-1/2 sm:!w-1/3 lg:!w-1/4">
                        <div class="bg-opticBlack aspect-[10/14]">
                            Soczewki kontaktowe
                        </div>
                    </li>
                    <li class="swiper-slide !w-3/4 xxs:w-1/2 sm:!w-1/3 lg:!w-1/4">
                        <div class="bg-opticBlack aspect-[10/14]">
                            Akcesoria do okularów
                        </div>
                    </li>
                    <li class="swiper-slide !w-3/4 xxs:w-1/2 sm:!w-1/3 lg:!w-1/4">
                        <div class="bg-opticBlack aspect-[10/14]">
                            Serwis (naprawa)
                        </div>
                    </li>
                    <li class="swiper-slide !w-3/4 xxs:w-1/2 sm:!w-1/3 lg:!w-1/4">
                        <div class="bg-opticBlack aspect-[10/14]">
                            Badanie wzroku
                        </div>
                    </li>
                </ul>
                <!-- swiper wrapper end -->

                <!-- swiper navigation -->
                <div class="absolute left-0 right-0 z-10 justify-between hidden px-4 -translate-y-1/2 pointer-events-none xl:flex top-1/2">
                    <button data-element="slider_logoset_prev" class="transition duration-300 pointer-events-auto text-bpx-orange hover:text-bpx-orange swiper-button-disabled" disabled="">
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="31.666" height="27.57" viewBox="0 0 31.666 27.57">
                            <path id="Path_3844" data-name="Path 3844" d="M31.079,12.382,19.106.567a1.969,1.969,0,1,0-2.765,2.8L24.9,11.815H1.969a1.969,1.969,0,0,0,0,3.939H24.9L16.341,24.2A1.969,1.969,0,1,0,19.106,27L31.079,15.186a1.968,1.968,0,0,0,0-2.8" transform="translate(31.666 27.569) rotate(180)" fill="currentColor"></path>
                        </svg>
                    </button>
                    <button data-element="slider_logoset_next" class="transition duration-300 pointer-events-auto text-bpx-orange hover:text-bpx-orange">
                        <svg class="w-6 h-6 rotate-180" xmlns="http://www.w3.org/2000/svg" width="31.666" height="27.57" viewBox="0 0 31.666 27.57">
                            <path id="Path_3844" data-name="Path 3844" d="M31.079,12.382,19.106.567a1.969,1.969,0,1,0-2.765,2.8L24.9,11.815H1.969a1.969,1.969,0,0,0,0,3.939H24.9L16.341,24.2A1.969,1.969,0,1,0,19.106,27L31.079,15.186a1.968,1.968,0,0,0,0-2.8" transform="translate(31.666 27.569) rotate(180)" fill="currentColor"></path>
                        </svg>
                    </button>
                </div>
                <!-- swiper navigation end -->

                <!-- swiper pagination -->
                <div data-element="slider_logoset_pagination" class="static mt-5 text-center top-full xl:hidden swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal" style="--swiper-pagination-bullet-inactive-opacity: 1; --swiper-pagination-color: #ef7d17; --swiper-pagination-bullet-inactive-color: #e3e3e3; --swiper-pagination-bullet-width: .625rem; --swiper-pagination-bullet-height: .625rem; --swiper-pagination-bullet-horizontal-gap: 0.5rem"></div>
                <!-- swiper pagination end -->

            </div>

        </div>
    </div>
</section>

<section class="py-24 -mt-44">
    <div class="wrapper">
        <div class="relative">
            <div class="flex -mx-2">
                <div class="absolute top-0 bottom-0 right-0 w-full md:w-2/3 bg-opticBlack"></div>
                <div class="w-full px-2 md:w-7/12 lg:w-1/2 xl:w-5/12 mr-auto xl:ml-[8.333%] relative z-10 my-24">
                    <div class="bg-white">
                        <div class="md:py-20 md:pr-12 lg:pr-16 xl:pr-20 3xl:p-20">
                            <div class="flex flex-col gap-y-8">
                                <h2 class="font-semibold text-4xl 2xl:text-5xl 3xl:text-5.5xl text-opticBlack uppercase">Piotr Zalewski</h2>
                                <span class="font-semibold text-[0.8125rem] uppercase text-opticOrange -mt-4 block"><strong class="font-semibold">Specjalista chorób oczu</strong></span>
                                <div class="flex flex-col gap-y-6">
                                    <p>Lekarz okulista z wieloletnim stażem w zakresie diagnostyki i leczenia zaćmy, jaskry oraz powikłań ocznych cukrzycy i AMD.</p>
                                    <p>Nieustannie wprowadza najnowocześniejsze standardy i procedury refrakcyjne. Prowadząc Pacjentów z wadami wzroku kieruje się rozległą wiedzą merytoryczną oraz dużym doświadczeniem klinicznym.</p>
                                    <p class="flex justify-start mt-3">
                                        <a class="font-semibold text-[0.8125rem] uppercase text-white bg-opticBlack rounded-full flex items-center px-8 py-3.5 border-2 border-transparent text-center justify-between min-h-[1px]" href="#">Dowiedz się więcej</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php */ ?>

<?php the_content(); ?>

<?php get_footer(); ?>