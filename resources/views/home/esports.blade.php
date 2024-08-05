@extends('layout.master')

@section('content')
        <!--==============================
Hero Area
==============================-->
<div class="th-hero-wrapper hero-1" id="hero" data-bg-src="assets/img/hero/hero-bg1-1.png">
    <div class="container">
        <div class="hero-style1 text-center">
            <span class="sub-title custom-anim-top wow animated" data-wow-duration="1.2s" data-wow-delay="0.1s"># World Class eSports & Gaming Site</span>
            <h1 class="hero-title">
                <span class="title1 custom-anim-top wow animated" data-wow-duration="1.1s" data-wow-delay="0.3s" data-bg-src="assets/img/hero/hero-title-bg-shape1.svg">SHAPING THE FUTURE OF</span>
                <span class="title2 custom-anim-top wow animated" data-wow-duration="1.1s" data-wow-delay="0.4s">ESPORTS</span>
            </h1>
            <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.2s" data-wow-delay="0.7s">
                <a href="/aboutUs" class="th-btn">EXPLORE MORE <i class="fa-solid fa-arrow-right ms-2"></i></a>
                <a href="/tournament" class="th-btn style2">BROWSE GAMES <i class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</div>
<!--======== / Hero Section ========-->

<div class="swiper th-slider hero-cta-slider1" id="heroSlider1" data-slider-options='{"effect":"fade"}'>
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="hero-cta-inner">
                <div class="container th-container2">
                    <div class="hero-shape-area">
                        <div class="hero-bg-shape">
                            <div class="hero-bg-border-anime" data-mask-src="assets/img/hero/hero-bg-shape.png"></div>
                            <svg viewBox="0 0 1600 520" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1599 30V490C1599 506.016 1586.02 519 1570 519H1062.43C1054.74 519 1047.36 515.945 1041.92 510.506L1009.49 478.08C1003.68 472.266 995.795 469 987.574 469H612.426C604.205 469 596.32 472.266 590.506 478.08L558.08 510.506C552.641 515.945 545.265 519 537.574 519H30C13.9837 519 1 506.016 1 490V30C1 13.9837 13.9837 1 30 1H400H537.574C545.265 1 552.641 4.05535 558.08 9.4939L590.506 41.9203C596.32 47.7339 604.205 51 612.426 51H987.574C995.795 51 1003.68 47.7339 1009.49 41.9203L1041.92 9.4939C1047.36 4.05535 1054.74 1 1062.43 1H1200H1570C1586.02 1 1599 13.9837 1599 30Z" fill="black" stroke="url(#paint0_linear1_47_22)" stroke-width="2" />
                                <mask id="mask0_47_22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0">
                                    <path d="M1600 490V30C1600 13.4315 1586.57 0 1570 0H1200H1062.43C1054.47 0 1046.84 3.1607 1041.21 8.7868L1008.79 41.2132C1003.16 46.8393 995.53 50 987.574 50H612.426C604.47 50 596.839 46.8393 591.213 41.2132L558.787 8.7868C553.161 3.16071 545.53 0 537.574 0H400H30C13.4315 0 0 13.4314 0 30V490C0 506.569 13.4315 520 30 520H537.574C545.53 520 553.161 516.839 558.787 511.213L591.213 478.787C596.839 473.161 604.47 470 612.426 470H987.574C995.53 470 1003.16 473.161 1008.79 478.787L1041.21 511.213C1046.84 516.839 1054.47 520 1062.43 520H1570C1586.57 520 1600 506.569 1600 490Z" fill="black" />
                                </mask>
                                <g mask="url(#mask0_47_22)">
                                    <g filter="url(#filter0_f_47_22)">
                                        <circle cx="1413" cy="314" r="287" fill="var(--theme-color2)" fill-opacity="0.2" />
                                    </g>
                                    <g filter="url(#filter01_f_47_22)">
                                        <circle cx="231" cy="172" r="229" fill="var(--theme-color)" fill-opacity="0.5" />
                                    </g>
                                </g>
                                <defs>
                                    <filter id="filter0_f_47_22" x="566" y="-533" width="1694" height="1694" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                        <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                    </filter>
                                    <filter id="filter01_f_47_22" x="-558" y="-617" width="1578" height="1578" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                        <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                    </filter>
                                    <linearGradient id="paint0_linear1_47_22" x1="0" y1="0" x2="1600" y2="520" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="var(--theme-color)" />
                                        <stop offset="1" stop-color="var(--theme-color2)" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div class="verses-thumb d-xl-none d-block">
                                <img src="assets/img/tournament/game-vs1.svg" alt="tournament image">
                            </div>
                            <div class="hero-img1 z-index-common" data-ani="slideinleft" data-ani-delay="0.4s">
                                <img src="assets/img/hero/hero-1-1.png" alt="Image">
                            </div>
                            <div class="hero-img2 z-index-common" data-ani="slideinright" data-ani-delay="0.4s">
                                <img src="assets/img/hero/hero-1-2.png" alt="Image">
                            </div>
                        </div>
                        <div class="title-area mb-0">
                            <h2 class="sec-title text-white custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.1s">Join The Big Tournaments</h2>
                            <p class="mt-30 mb-30 custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.2s">Beyond esports tournaments, include a broader calendar of gaming events, conferences, and conventions. and connect with each other.</p>
                            <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                <a href="/aboutUs" class="th-btn style-border">
                                    <span class="btn-border">
                                        JOIN NOW <i class="fa-solid fa-arrow-right ms-2"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="hero-cta-inner">
                <div class="container th-container2">
                    <div class="hero-shape-area">
                        <div class="hero-bg-shape">
                            <div class="hero-bg-border-anime" data-mask-src="assets/img/hero/hero-bg-shape.png"></div>
                            <svg viewBox="0 0 1600 520" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1599 30V490C1599 506.016 1586.02 519 1570 519H1062.43C1054.74 519 1047.36 515.945 1041.92 510.506L1009.49 478.08C1003.68 472.266 995.795 469 987.574 469H612.426C604.205 469 596.32 472.266 590.506 478.08L558.08 510.506C552.641 515.945 545.265 519 537.574 519H30C13.9837 519 1 506.016 1 490V30C1 13.9837 13.9837 1 30 1H400H537.574C545.265 1 552.641 4.05535 558.08 9.4939L590.506 41.9203C596.32 47.7339 604.205 51 612.426 51H987.574C995.795 51 1003.68 47.7339 1009.49 41.9203L1041.92 9.4939C1047.36 4.05535 1054.74 1 1062.43 1H1200H1570C1586.02 1 1599 13.9837 1599 30Z" fill="black" stroke="url(#paint0_linear2_47_22)" stroke-width="2" />
                                <mask id="mask1_47_22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0">
                                    <path d="M1600 490V30C1600 13.4315 1586.57 0 1570 0H1200H1062.43C1054.47 0 1046.84 3.1607 1041.21 8.7868L1008.79 41.2132C1003.16 46.8393 995.53 50 987.574 50H612.426C604.47 50 596.839 46.8393 591.213 41.2132L558.787 8.7868C553.161 3.16071 545.53 0 537.574 0H400H30C13.4315 0 0 13.4314 0 30V490C0 506.569 13.4315 520 30 520H537.574C545.53 520 553.161 516.839 558.787 511.213L591.213 478.787C596.839 473.161 604.47 470 612.426 470H987.574C995.53 470 1003.16 473.161 1008.79 478.787L1041.21 511.213C1046.84 516.839 1054.47 520 1062.43 520H1570C1586.57 520 1600 506.569 1600 490Z" fill="black" />
                                </mask>
                                <g mask="url(#mask1_47_22)">
                                    <g filter="url(#filter1_f_47_22)">
                                        <circle cx="1413" cy="314" r="287" fill="var(--theme-color2)" fill-opacity="0.2" />
                                    </g>
                                    <g filter="url(#filter02_f_47_22)">
                                        <circle cx="231" cy="172" r="229" fill="var(--theme-color)" fill-opacity="0.5" />
                                    </g>
                                </g>
                                <defs>
                                    <filter id="filter1_f_47_22" x="566" y="-533" width="1694" height="1694" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                        <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                    </filter>
                                    <filter id="filter02_f_47_22" x="-558" y="-617" width="1578" height="1578" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                        <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                    </filter>
                                    <linearGradient id="paint0_linear2_47_22" x1="0" y1="0" x2="1600" y2="520" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="var(--theme-color)" />
                                        <stop offset="1" stop-color="var(--theme-color2)" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div class="verses-thumb d-xl-none d-block">
                                <img src="assets/img/tournament/game-vs1.svg" alt="tournament image">
                            </div>
                            <div class="hero-img1 z-index-common" data-ani="slideinleft" data-ani-delay="0.4s">
                                <img src="assets/img/hero/hero-1-3.png" alt="Image">
                            </div>
                            <div class="hero-img2 z-index-common" data-ani="slideinright" data-ani-delay="0.4s">
                                <img src="assets/img/hero/hero-1-4.png" alt="Image">
                            </div>
                        </div>
                        <div class="title-area mb-0">
                            <h2 class="sec-title text-white custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.1s">Join The Big Tournaments</h2>
                            <p class="mt-30 mb-30 custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.2s">Beyond esports tournaments, include a broader calendar of gaming events, conferences, and conventions. and connect with each other.</p>
                            <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                <a href="/aboutUs" class="th-btn style-border">
                                    <span class="btn-border">
                                        JOIN NOW <i class="fa-solid fa-arrow-right ms-2"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="swiper-slide">
            <div class="hero-cta-inner">
                <div class="container th-container2">
                    <div class="hero-shape-area">
                        <div class="hero-bg-shape">
                            <div class="hero-bg-border-anime" data-mask-src="assets/img/hero/hero-bg-shape.png"></div>
                            <svg viewBox="0 0 1600 520" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1599 30V490C1599 506.016 1586.02 519 1570 519H1062.43C1054.74 519 1047.36 515.945 1041.92 510.506L1009.49 478.08C1003.68 472.266 995.795 469 987.574 469H612.426C604.205 469 596.32 472.266 590.506 478.08L558.08 510.506C552.641 515.945 545.265 519 537.574 519H30C13.9837 519 1 506.016 1 490V30C1 13.9837 13.9837 1 30 1H400H537.574C545.265 1 552.641 4.05535 558.08 9.4939L590.506 41.9203C596.32 47.7339 604.205 51 612.426 51H987.574C995.795 51 1003.68 47.7339 1009.49 41.9203L1041.92 9.4939C1047.36 4.05535 1054.74 1 1062.43 1H1200H1570C1586.02 1 1599 13.9837 1599 30Z" fill="black" stroke="url(#paint0_linear3_47_22)" stroke-width="2" />
                                <mask id="mask2_47_22" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0">
                                    <path d="M1600 490V30C1600 13.4315 1586.57 0 1570 0H1200H1062.43C1054.47 0 1046.84 3.1607 1041.21 8.7868L1008.79 41.2132C1003.16 46.8393 995.53 50 987.574 50H612.426C604.47 50 596.839 46.8393 591.213 41.2132L558.787 8.7868C553.161 3.16071 545.53 0 537.574 0H400H30C13.4315 0 0 13.4314 0 30V490C0 506.569 13.4315 520 30 520H537.574C545.53 520 553.161 516.839 558.787 511.213L591.213 478.787C596.839 473.161 604.47 470 612.426 470H987.574C995.53 470 1003.16 473.161 1008.79 478.787L1041.21 511.213C1046.84 516.839 1054.47 520 1062.43 520H1570C1586.57 520 1600 506.569 1600 490Z" fill="black" />
                                </mask>
                                <g mask="url(#mask2_47_22)">
                                    <g filter="url(#filter3_f_47_22)">
                                        <circle cx="1413" cy="314" r="287" fill="var(--theme-color2)" fill-opacity="0.2" />
                                    </g>
                                    <g filter="url(#filter03_f_47_22)">
                                        <circle cx="231" cy="172" r="229" fill="var(--theme-color)" fill-opacity="0.5" />
                                    </g>
                                </g>
                                <defs>
                                    <filter id="filter3_f_47_22" x="566" y="-533" width="1694" height="1694" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                        <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                    </filter>
                                    <filter id="filter03_f_47_22" x="-558" y="-617" width="1578" height="1578" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                        <feGaussianBlur stdDeviation="280" result="effect1_foregroundBlur_47_22" />
                                    </filter>
                                    <linearGradient id="paint0_linear3_47_22" x1="0" y1="0" x2="1600" y2="520" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="var(--theme-color)" />
                                        <stop offset="1" stop-color="var(--theme-color2)" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div class="verses-thumb d-xl-none d-block">
                                <img src="assets/img/tournament/game-vs1.svg" alt="tournament image">
                            </div>
                            <div class="hero-img1 z-index-common" data-ani="slideinleft" data-ani-delay="0.4s">
                                <img src="assets/img/hero/hero-1-5.png" alt="Image">
                            </div>
                            <div class="hero-img2 z-index-common" data-ani="slideinright" data-ani-delay="0.4s">
                                <img src="assets/img/hero/hero-1-6.png" alt="Image">
                            </div>
                        </div>
                        <div class="title-area mb-0">
                            <h2 class="sec-title text-white custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.1s">Join The Big Tournaments</h2>
                            <p class="mt-30 mb-30 custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.2s">Beyond esports tournaments, include a broader calendar of gaming events, conferences, and conventions. and connect with each other.</p>
                            <div class="btn-group custom-anim-top wow animated" data-wow-duration="1.3s" data-wow-delay="0.2s">
                                <a href="/aboutUs" class="th-btn style-border">
                                    <span class="btn-border">
                                        JOIN NOW <i class="fa-solid fa-arrow-right ms-2"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="slider-pagination"></div>
</div><!--==============================
Marquee Area
==============================-->
<div class="marquee-area-1 bg-repeat  overflow-hidden" data-bg-src="assets/img/bg/jiji-bg.png">
    <div class="container-fluid">
        <div class="swiper th-slider" id="marqueeSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":"auto"}},"autoplay":{"delay":1500,"disableOnInteraction":false},"spaceBetween":50}'>
            <div class="swiper-wrapper">
                <!-- Single Item -->
                <div class="marquee-item swiper-slide">
                    <div class="marquee_icon">
                        <img src="assets/img/normal/star.png" alt="Icon">
                    </div>
                    <h3 class="marquee-title"><a href="/home_serviceDetails">GAMING SPANING</a></h3>
                </div>

                <!-- Single Item -->
                <div class="marquee-item swiper-slide">
                    <div class="marquee_icon">
                        <img src="assets/img/normal/star.png" alt="Icon">
                    </div>
                    <h3 class="marquee-title"><a href="/home_serviceDetails">ACTION - PACKED</a></h3>
                </div>

                <!-- Single Item -->
                <div class="marquee-item swiper-slide">
                    <div class="marquee_icon">
                        <img src="assets/img/normal/star.png" alt="Icon">
                    </div>
                    <h3 class="marquee-title"><a href="/home_serviceDetails">MIND - BENDING</a></h3>
                </div>

                <!-- Single Item -->
                <div class="marquee-item swiper-slide">
                    <div class="marquee_icon">
                        <img src="assets/img/normal/star.png" alt="Icon">
                    </div>
                    <h3 class="marquee-title"><a href="/home_serviceDetails">COLLECTION OG GAMES</a></h3>
                </div>

                <!-- Single Item -->
                <div class="marquee-item swiper-slide">
                    <div class="marquee_icon">
                        <img src="assets/img/normal/star.png" alt="Icon">
                    </div>
                    <h3 class="marquee-title"><a href="/home_serviceDetails">GAMING SPANING</a></h3>
                </div>

                <!-- Single Item -->
                <div class="marquee-item swiper-slide">
                    <div class="marquee_icon">
                        <img src="assets/img/normal/star.png" alt="Icon">
                    </div>
                    <h3 class="marquee-title"><a href="/home_serviceDetails">ACTION - PACKED</a></h3>
                </div>

                <!-- Single Item -->
                <div class="marquee-item swiper-slide">
                    <div class="marquee_icon">
                        <img src="assets/img/normal/star.png" alt="Icon">
                    </div>
                    <h3 class="marquee-title"><a href="/home_serviceDetails">MIND - BENDING</a></h3>
                </div>

                <!-- Single Item -->
                <div class="marquee-item swiper-slide">
                    <div class="marquee_icon">
                        <img src="assets/img/normal/star.png" alt="Icon">
                    </div>
                    <h3 class="marquee-title"><a href="/home_serviceDetails">COLLECTION OG GAMES</a></h3>
                </div>

            </div>
        </div>
    </div>
</div>
<!--==============================
About Area  
==============================-->
<div class="overflow-hidden space" id="about-sec">
    <div class="about-bg-img shape-mockup" data-top="0" data-left="0">
        <img src="assets/img/bg/about-bg1.png" alt="img">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-50 mb-xl-0">
                <div class="img-box1">
                    <div class="img1 custom-anim-left wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <img src="assets/img/normal/about1-1.png" alt="About">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-wrap1">
                    <div class="about-title-wrap mb-n1">
                        <div class="about-title-thumb custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.1s">
                            <img src="assets/img/normal/about1-2.png" alt="img">
                        </div>
                        <div class="title-area custom-anim-left wow animated" data-wow-duration="1.5s" data-wow-delay="0.1s">
                            <span class="sub-title"># About Our Gaming Site</span>
                            <h2 class="sec-title mb-0">Forging Legends in the Gaming Universe</h2>
                        </div>
                    </div>
                    <div class="about-grid">
                        <div class="icon custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="assets/img/icon/about_feature_1.svg" alt="img">
                        </div>
                        <div class="about-grid-details custom-anim-left wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <h3 class="about-grid_title h5">Over <span class="text-theme">1k+</span> Affiliate Game Programs</h3>
                            <p class="about-grid_text">Keep users informed about the gaming industry with news articles on releases, updates, and events.</p>
                        </div>
                    </div>
                    <div class="about-grid">
                        <div class="icon custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="assets/img/icon/about_feature_2.svg" alt="img">
                        </div>
                        <div class="about-grid-details custom-anim-left wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <h3 class="about-grid_title h5">Great Tournaments</h3>
                            <p class="about-grid_text">Display a calendar of upcoming tournaments with dates, times, and game titles and provide live updates.</p>
                        </div>
                    </div>
                    <div class="about-grid">
                        <div class="icon custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="assets/img/icon/about_feature_3.svg" alt="img">
                        </div>
                        <div class="about-grid-details custom-anim-left wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <h3 class="about-grid_title h5">Get Online Supports</h3>
                            <p class="about-grid_text">Create profiles for professional esports players, including their bios, achievements, and current teams.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Game Area  
==============================-->
<section class="overflow-hidden">
    <div class="container th-container2">
        <div class="game-sec-wrap1 space" data-bg-src="assets/img/bg/game-sec1-bg.png">
            <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.1s">
                <span class="sub-title"># Releases The Latest Game</span>
                <h2 class="sec-title">Game On, Power Up, Win Big <span class="text-theme">!</span></h2>
            </div>
            <div class="slider-area">
                <div class="swiper th-slider game-slider-1" id="gameSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="game-card gradient-border">
                                <div class="game-card-img">
                                    <a href="/game_Details">
                                        <img src="assets/img/game/1-1.png" alt="game image">
                                    </a>
                                    <div class="game-logo">
                                        <img src="assets/img/game/logo1-1.png" alt="game logo">
                                    </div>
                                </div>
                                <div class="game-card-details">
                                    <h3 class="box-title"><a href="/game_Details">The Hunter Killer</a></h3>
                                    <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="game-card gradient-border">
                                <div class="game-card-img">
                                    <a href="/game_Details">
                                        <img src="assets/img/game/1-2.png" alt="game image">
                                    </a>
                                    <div class="game-logo">
                                        <img src="assets/img/game/logo1-2.png" alt="game logo">
                                    </div>
                                </div>
                                <div class="game-card-details">
                                    <h3 class="box-title"><a href="/game_Details">Net Remaining Monies</a></h3>
                                    <p class="game-content">Entry Fee:<span class="text-theme">Free</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="game-card gradient-border">
                                <div class="game-card-img">
                                    <a href="/game_Details">
                                        <img src="assets/img/game/1-3.png" alt="game image">
                                    </a>
                                    <div class="game-logo">
                                        <img src="assets/img/game/logo1-3.png" alt="game logo">
                                    </div>
                                </div>
                                <div class="game-card-details">
                                    <h3 class="box-title"><a href="/game_Details">Duty Balck Ops</a></h3>
                                    <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="game-card gradient-border">
                                <div class="game-card-img">
                                    <a href="/game_Details">
                                        <img src="assets/img/game/1-4.png" alt="game image">
                                    </a>
                                    <div class="game-logo">
                                        <img src="assets/img/game/logo1-4.png" alt="game logo">
                                    </div>
                                </div>
                                <div class="game-card-details">
                                    <h3 class="box-title"><a href="/game_Details">League of Legends</a></h3>
                                    <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="game-card gradient-border">
                                <div class="game-card-img">
                                    <a href="/game_Details">
                                        <img src="assets/img/game/1-1.png" alt="game image">
                                    </a>
                                    <div class="game-logo">
                                        <img src="assets/img/game/logo1-1.png" alt="game logo">
                                    </div>
                                </div>
                                <div class="game-card-details">
                                    <h3 class="box-title"><a href="/game_Details">The Hunter Killer</a></h3>
                                    <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="game-card gradient-border">
                                <div class="game-card-img">
                                    <a href="/game_Details">
                                        <img src="assets/img/game/1-2.png" alt="game image">
                                    </a>
                                    <div class="game-logo">
                                        <img src="assets/img/game/logo1-2.png" alt="game logo">
                                    </div>
                                </div>
                                <div class="game-card-details">
                                    <h3 class="box-title"><a href="/game_Details">Net Remaining Monies</a></h3>
                                    <p class="game-content">Entry Fee:<span class="text-theme">Free</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="game-card gradient-border">
                                <div class="game-card-img">
                                    <a href="/game_Details">
                                        <img src="assets/img/game/1-3.png" alt="game image">
                                    </a>
                                    <div class="game-logo">
                                        <img src="assets/img/game/logo1-3.png" alt="game logo">
                                    </div>
                                </div>
                                <div class="game-card-details">
                                    <h3 class="box-title"><a href="/game_Details">Duty Balck Ops</a></h3>
                                    <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="game-card gradient-border">
                                <div class="game-card-img">
                                    <a href="/game_Details">
                                        <img src="assets/img/game/1-4.png" alt="game image">
                                    </a>
                                    <div class="game-logo">
                                        <img src="assets/img/game/logo1-4.png" alt="game logo">
                                    </div>
                                </div>
                                <div class="game-card-details">
                                    <h3 class="box-title"><a href="/game_Details">League of Legends</a></h3>
                                    <p class="game-content">Entry Fee:<span class="text-theme">$10.00</span></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="slider-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section><!--==============================
Feature Area  
==============================-->
<section class="space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <span class="sub-title"># World Best Facilities Game </span>
                    <h2 class="sec-title">Bame Comes With Many Facilities Included In Planet <span class="text-theme">!</span></h2>
                </div>
            </div>
        </div>
        <div class="feature-sec-wrap1" data-bg-src="assets/img/bg/feature-sec1-bg.png">
            <div class="feature-card-wrap">
                <div class="feature-card-border">
                    <div class="feature-card">
                        <div class="feature-card-icon custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <span class="feature-card-icon-mask" data-mask-src="assets/img/icon/feature_1.svg"></span>
                            <img src="assets/img/icon/feature_1.svg" alt="img">
                        </div>
                        <div class="feature-card-details custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <h3 class="feature-card-title">Esports Lounge</h3>
                            <p class="feature-card-text">Lounge areas with comfortable seating for relaxation between gaming sessions. Provide snacks, drink, and vending machine for refreshments.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-card-wrap">
                <div class="feature-card-border">
                    <div class="feature-card">
                        <div class="feature-card-icon custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <span class="feature-card-icon-mask" data-mask-src="assets/img/icon/feature_2.svg"></span>
                            <img src="assets/img/icon/feature_2.svg" alt="img">
                        </div>
                        <div class="feature-card-details custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <h3 class="feature-card-title">Training Facilities</h3>
                            <p class="feature-card-text">Lounge areas with comfortable seating for relaxation between gaming sessions. Provide snacks, drink, and vending machine for refreshments.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="feature-card-wrap">
                <div class="feature-card-border">
                    <div class="feature-card">
                        <div class="feature-card-icon custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <span class="feature-card-icon-mask" data-mask-src="assets/img/icon/feature_3.svg"></span>
                            <img src="assets/img/icon/feature_3.svg" alt="img">
                        </div>
                        <div class="feature-card-details custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <h3 class="feature-card-title">Broadcasting Studio</h3>
                            <p class="feature-card-text">Lounge areas with comfortable seating for relaxation between gaming sessions. Provide snacks, drink, and vending machine for refreshments.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!--==============================
Tournament Area  
==============================-->
<section class="space bg-top-center" data-bg-src="assets/img/bg/tournament-sec1-bg.png">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-auto">
                <div class="title-area text-lg-start text-center custom-anim-left wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <span class="sub-title"># Game Streaming Battle </span>
                    <h2 class="sec-title">Our Gaming Tournaments <span class="text-theme">!</span></h2>
                </div>
            </div>
            <div class="col-lg-auto">
                <div class="sec-btn custom-anim-right wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <div class="tournament-filter-btn filter-menu filter-menu-active">
                        <button data-filter="*" class="tab-btn active" type="button">ALL MATCH</button>
                        <button data-filter=".cat1" class="tab-btn" type="button">UPCOMING MATCH</button>
                        <button data-filter=".cat2" class="tab-btn" type="button">FINISHED MATCH</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-4 filter-active">
            <div class="col-12 filter-item cat1">
                <div class="tournament-card gradient-border">
                    <div class="tournament-card-img">
                        <img src="assets/img/tournament/1-1.png" alt="tournament image">
                        <img src="assets/img/tournament/game-vs1.svg" alt="tournament image">
                        <img src="assets/img/tournament/1-2.png" alt="tournament image">
                    </div>
                    <div class="tournament-card-content">
                        <div class="tournament-card-details">
                            <div class="tournament-card-meta">
                                <span class="tournament-card-tag">Upcoming</span>
                                <span class="tournament-card-score gradient-border">0 / 0</span>
                            </div>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Pro Player VS Lion King</a></h3>
                            <p class="tournament-card-date">23 December, 2024 <span class="text-theme">6:00 PM</span></p>
                            <div class="th-social">
                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i>Youtube</a>
                                <a href="/tournament_Details"><i class="fa-brands fa-twitch"></i>Twitch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 filter-item cat2">
                <div class="tournament-card gradient-border">
                    <div class="tournament-card-img">
                        <img src="assets/img/tournament/1-3.png" alt="tournament image">
                        <img src="assets/img/tournament/game-vs1.svg" alt="tournament image">
                        <img src="assets/img/tournament/1-4.png" alt="tournament image">
                    </div>
                    <div class="tournament-card-content">
                        <div class="tournament-card-details">
                            <div class="tournament-card-meta">
                                <span class="tournament-card-tag">Finished</span>
                                <span class="tournament-card-score gradient-border">20 / 22</span>
                            </div>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Assassin King VS Cyberpunk</a></h3>
                            <p class="tournament-card-date">20 December, 2024 <span class="text-theme">6:00 PM</span></p>
                            <div class="th-social">
                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i>Youtube</a>
                                <a href="/tournament_Details"><i class="fa-brands fa-twitch"></i>Twitch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 filter-item cat1">
                <div class="tournament-card gradient-border">
                    <div class="tournament-card-img">
                        <img src="assets/img/tournament/1-5.png" alt="tournament image">
                        <img src="assets/img/tournament/game-vs1.svg" alt="tournament image">
                        <img src="assets/img/tournament/1-6.png" alt="tournament image">
                    </div>
                    <div class="tournament-card-content">
                        <div class="tournament-card-details">
                            <div class="tournament-card-meta">
                                <span class="tournament-card-tag">Upcoming</span>
                                <span class="tournament-card-score gradient-border">0 / 0</span>
                            </div>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Team Gorilla VS Badgamer</a></h3>
                            <p class="tournament-card-date">23 December, 2024 <span class="text-theme">6:00 PM</span></p>
                            <div class="th-social">
                                <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i>Youtube</a>
                                <a href="/tournament_Details"><i class="fa-brands fa-twitch"></i>Twitch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> <!--==============================
Gallery Area  
==============================-->
<div class="container-fluid p-0">
    <div class="gallery-area-1 overflow-hidden text-center">
        <div class="slider-area gallery-slider1">
            <div class="swiper th-slider" id="gallerySlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}},"effect":"coverflow","coverflowEffect":{"rotate":"0","stretch":"0","depth":"150","modifier":"1"},"centeredSlides":"true"}'>
                <div class="swiper-wrapper">
                    <!--==============================
Gallery Area  
==============================-->
                    <div class="swiper-slide gallery-wrap1">
                        <div class="th-video">
                            <img src="assets/img/video/1-1.png" alt="img">
                            <a href="assets/img/video/1-1.png" class="play-btn popup-image style3"><i class="fa-solid fa-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <div class="swiper-slide gallery-wrap1">
                        <div class="th-video">
                            <img src="assets/img/video/1-2.png" alt="img">
                            <a href="assets/img/video/1-2.png" class="play-btn popup-image style3"><i class="fa-solid fa-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <div class="swiper-slide gallery-wrap1">
                        <div class="th-video">
                            <img src="assets/img/video/1-3.png" alt="img">
                            <a href="assets/img/video/1-3.png" class="play-btn popup-image style3"><i class="fa-solid fa-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <div class="swiper-slide gallery-wrap1">
                        <div class="th-video">
                            <img src="assets/img/video/1-1.png" alt="img">
                            <a href="assets/img/video/1-1.png" class="play-btn popup-image style3"><i class="fa-solid fa-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <div class="swiper-slide gallery-wrap1">
                        <div class="th-video">
                            <img src="assets/img/video/1-2.png" alt="img">
                            <a href="assets/img/video/1-2.png" class="play-btn popup-image style3"><i class="fa-solid fa-arrow-up-right"></i></a>
                        </div>
                    </div>

                    <div class="swiper-slide gallery-wrap1">
                        <div class="th-video">
                            <img src="assets/img/video/1-3.png" alt="img">
                            <a href="assets/img/video/1-3.png" class="play-btn popup-image style3"><i class="fa-solid fa-arrow-up-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#gallerySlider1" class="slider-arrow slider-prev"><i class="fas fa-angle-left"></i></button>
            <button data-slider-next="#gallerySlider1" class="slider-arrow slider-next"><i class="fas fa-angle-right"></i></button>
        </div>
    </div>
</div><!--==============================
Team Area  
==============================-->
<section class="team-sec-1 space">
    <div class="team-shape1-1 shape-mockup" data-top="0" data-right="0"><img src="assets/img/bg/team-sec1-bg.png" alt="img"></div>
    <div class="container th-container3">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-8">
                <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <span class="sub-title"># Top World Class Gamer</span>
                    <h2 class="sec-title">Let’s See Our Pro Players</h2>
                </div>
            </div>
        </div>
        <div class="slider-area team-slider1">
            <div class="swiper th-slider has-shadow" id="teamSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"}}}'>
                <div class="swiper-wrapper">
                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="team-card-corner team-card-corner1"></div>
                            <div class="team-card-corner team-card-corner2"></div>
                            <div class="team-card-corner team-card-corner3"></div>
                            <div class="team-card-corner team-card-corner4"></div>
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/1-1.png" alt="Team">
                                </div>
                                <img class="game-logo" src="assets/img/team/game-logo1-1.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="/players_Details">Max Alexis</a></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="team-card-corner team-card-corner1"></div>
                            <div class="team-card-corner team-card-corner2"></div>
                            <div class="team-card-corner team-card-corner3"></div>
                            <div class="team-card-corner team-card-corner4"></div>
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/1-2.png" alt="Team">
                                </div>
                                <img class="game-logo" src="assets/img/team/game-logo1-2.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="/players_Details">Wilium Lili</a></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="team-card-corner team-card-corner1"></div>
                            <div class="team-card-corner team-card-corner2"></div>
                            <div class="team-card-corner team-card-corner3"></div>
                            <div class="team-card-corner team-card-corner4"></div>
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/1-3.png" alt="Team">
                                </div>
                                <img class="game-logo" src="assets/img/team/game-logo1-3.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="/players_Details">Mac Marsh</a></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="team-card-corner team-card-corner1"></div>
                            <div class="team-card-corner team-card-corner2"></div>
                            <div class="team-card-corner team-card-corner3"></div>
                            <div class="team-card-corner team-card-corner4"></div>
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/1-4.png" alt="Team">
                                </div>
                                <img class="game-logo" src="assets/img/team/game-logo1-4.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="/players_Details">Eva Raina</a></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="team-card-corner team-card-corner1"></div>
                            <div class="team-card-corner team-card-corner2"></div>
                            <div class="team-card-corner team-card-corner3"></div>
                            <div class="team-card-corner team-card-corner4"></div>
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/1-5.png" alt="Team">
                                </div>
                                <img class="game-logo" src="assets/img/team/game-logo1-5.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="/players_Details">Robin Cloth</a></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="team-card-corner team-card-corner1"></div>
                            <div class="team-card-corner team-card-corner2"></div>
                            <div class="team-card-corner team-card-corner3"></div>
                            <div class="team-card-corner team-card-corner4"></div>
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/1-1.png" alt="Team">
                                </div>
                                <img class="game-logo" src="assets/img/team/game-logo1-1.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="/players_Details">Max Alexis</a></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="team-card-corner team-card-corner1"></div>
                            <div class="team-card-corner team-card-corner2"></div>
                            <div class="team-card-corner team-card-corner3"></div>
                            <div class="team-card-corner team-card-corner4"></div>
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/1-2.png" alt="Team">
                                </div>
                                <img class="game-logo" src="assets/img/team/game-logo1-2.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="/players_Details">Wilium Lili</a></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="team-card-corner team-card-corner1"></div>
                            <div class="team-card-corner team-card-corner2"></div>
                            <div class="team-card-corner team-card-corner3"></div>
                            <div class="team-card-corner team-card-corner4"></div>
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/1-3.png" alt="Team">
                                </div>
                                <img class="game-logo" src="assets/img/team/game-logo1-3.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="/players_Details">Mac Marsh</a></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="team-card-corner team-card-corner1"></div>
                            <div class="team-card-corner team-card-corner2"></div>
                            <div class="team-card-corner team-card-corner3"></div>
                            <div class="team-card-corner team-card-corner4"></div>
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/1-4.png" alt="Team">
                                </div>
                                <img class="game-logo" src="assets/img/team/game-logo1-4.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="/players_Details">Eva Raina</a></h3>
                            </div>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="swiper-slide">
                        <div class="th-team team-card">
                            <div class="team-card-corner team-card-corner1"></div>
                            <div class="team-card-corner team-card-corner2"></div>
                            <div class="team-card-corner team-card-corner3"></div>
                            <div class="team-card-corner team-card-corner4"></div>
                            <div class="img-wrap">
                                <div class="team-img">
                                    <img src="assets/img/team/1-5.png" alt="Team">
                                </div>
                                <img class="game-logo" src="assets/img/team/game-logo1-5.png" alt="Team">
                            </div>
                            <div class="team-card-content">
                                <h3 class="box-title"><a href="/players_Details">Robin Cloth</a></h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#teamSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#teamSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>
<!--==============================
Cta Area  
==============================-->
<div class="container th-container4">
    <div class="cta-area-1">
        <div class="cta-bg-shape-border">
            <svg width="1464" height="564" viewBox="0 0 1464 564" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1463.5 30V534C1463.5 550.292 1450.29 563.5 1434 563.5H1098H927.426C919.603 563.5 912.099 560.392 906.567 554.86L884.14 532.433C878.42 526.713 870.663 523.5 862.574 523.5H601.426C593.337 523.5 585.58 526.713 579.86 532.433L557.433 554.86C551.901 560.392 544.397 563.5 536.574 563.5H366H30C13.7076 563.5 0.5 550.292 0.5 534V30C0.5 13.7076 13.7076 0.5 30 0.5H366H536.574C544.397 0.5 551.901 3.60802 557.433 9.14034L579.86 31.5668C585.58 37.2866 593.337 40.5 601.426 40.5H862.574C870.663 40.5 878.42 37.2866 884.14 31.5668L906.567 9.14035C912.099 3.60803 919.603 0.5 927.426 0.5H1098H1434C1450.29 0.5 1463.5 13.7076 1463.5 30Z" stroke="url(#paint0_linear_202_547)" />
                <defs>
                    <linearGradient id="paint0_linear_202_547" x1="0" y1="0" x2="1505.47" y2="412.762" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="var(--theme-color)" />
                        <stop offset="1" stop-color="var(--theme-color2)" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="cta-wrap-bg bg-repeat" data-bg-src="assets/img/bg/jiji-bg.png" data-mask-src="assets/img/shape/cta-bg-shape1.svg">
            <div class="cta-bg-img">
                <img src="assets/img/bg/cta-sec1-bg.png" alt="img">
            </div>
            <div class="cta-thumb">
                <img src="assets/img/normal/cta1-1.png" alt="img">
            </div>
        </div>
        <div class="cta-wrap">
            <div class="row">
                <div class="col-xl-5">
                    <div class="title-area mb-0 custom-anim-left wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <span class="sub-title"># World Best Gaming Site</span>
                        <h2 class="sec-title">Join Bame Esports to Become Next <span class="text-theme fw-medium">PRO Gamer Today !</span></h2>
                        <p class="mt-30 mb-30">Esports and gaming facilities requires thoughtful consideration of various elements to create an environment that caters to the needs of gamers and enhances the overall gaming experience.</p>
                        <a href="/contact" class="th-btn">JOIN COMMUNITY <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Product Area
==============================-->
<section class="space">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-auto">
                <div class="title-area custom-anim-left wow animated text-md-start text-center" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <span class="sub-title"># Gamer Shop</span>
                    <h2 class="sec-title">Our Latest Gaming Products <span class="text-theme">!</span></h2>
                </div>
            </div>
            <div class="col-md-auto d-none d-md-block">
                <div class="sec-btn">
                    <div class="icon-box">
                        <button data-slider-prev="#productSlider1" class="slider-arrow style2 default"><i class="far fa-arrow-left"></i></button>
                        <button data-slider-next="#productSlider1" class="slider-arrow style2 default"><i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper th-slider has-shadow" id="productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="assets/img/product/product_1_1.png" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions">
                                <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                                <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="/shop_Details">Gaming Headphone</a></h3>
                            <span class="price">$177.85</span>
                            <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="assets/img/product/product_1_2.png" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions">
                                <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                                <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="/shop_Details">Gaming Mouse</a></h3>
                            <span class="price">$120.00</span>
                            <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="assets/img/product/product_1_3.png" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions">
                                <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                                <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="/shop_Details">Gaming Keyboard</a></h3>
                            <span class="price">$96.85</span>
                            <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="assets/img/product/product_1_4.png" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions">
                                <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                                <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="/shop_Details">Gaming Chair</a></h3>
                            <span class="price">$08.85<del>$06.99</del></span>
                            <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="assets/img/product/product_1_5.png" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions">
                                <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                                <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="/shop_Details">Microphone G9000</a></h3>
                            <span class="price">$32.85</span>
                            <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="assets/img/product/product_1_6.png" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions">
                                <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                                <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="/shop_Details">Play Station Controller</a></h3>
                            <span class="price">$30.85</span>
                            <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="assets/img/product/product_1_7.png" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions">
                                <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                                <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="/shop_Details">PlayStation VR</a></h3>
                            <span class="price">$232.85</span>
                            <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="assets/img/product/product_1_8.png" alt="Product Image">
                            <div class="overlay gradient-border"></div>
                            <div class="actions">
                                <a href="/cart" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="/wishlist" class="icon-btn"><i class="fas fa-heart"></i></a>
                                <a href="#QuickView" class="icon-btn popup-content"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3 class="product-title"><a href="/shop_Details">Wireless speaker</a></h3>
                            <span class="price">$30.85</span>
                            <!-- <div class="woocommerce-product-rating">
                    <span class="count">(120 Reviews)</span>
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                    </div>
                </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="d-block d-md-none mt-40 text-center">
            <div class="icon-box">
                <button data-slider-prev="#productSlider1" class="slider-arrow style2 default"><i class="far fa-arrow-left"></i></button>
                <button data-slider-next="#productSlider1" class="slider-arrow style2 default"><i class="far fa-arrow-right"></i></button>
            </div>
        </div>
    </div>
</section>
<!--==============================
Blog Area  
==============================-->
<section class="" id="blog-sec">
    <div class="container">
        <div class="title-area text-center custom-anim-top wow animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
            <span class="sub-title"># Latest News</span>
            <h2 class="sec-title">Stay Updated With Our Blog <span class="text-theme">!</span></h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="/blog_Details">
                                    <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="far fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="far fa-calendar"></i>30 Nov, 2024</a>
                                </div>
                                <h3 class="blog-title"><a href="/blog_Details">Strategies for Dominating Your Favorite Game</a></h3>
                                <a href="/blog_Details" class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="/blog_Details">
                                    <img src="assets/img/blog/blog_1_2.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="far fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="far fa-calendar"></i>25 Dec, 2024</a>
                                </div>
                                <h3 class="blog-title"><a href="/blog_Details">Breaking Barriers and Shaping the Future</a></h3>
                                <a href="/blog_Details" class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="/blog_Details">
                                    <img src="assets/img/blog/blog_1_3.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="far fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="far fa-calendar"></i>23 Jun, 2024</a>
                                </div>
                                <h3 class="blog-title"><a href="/blog_Details">Taking Customization to the Next Level</a></h3>
                                <a href="/blog_Details" class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="/blog_Details">
                                    <img src="assets/img/blog/blog_1_1.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="far fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="far fa-calendar"></i>30 Nov, 2024</a>
                                </div>
                                <h3 class="blog-title"><a href="/blog_Details">Strategies for Dominating Your Favorite Game</a></h3>
                                <a href="/blog_Details" class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="/blog_Details">
                                    <img src="assets/img/blog/blog_1_2.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="far fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="far fa-calendar"></i>25 Dec, 2024</a>
                                </div>
                                <h3 class="blog-title"><a href="/blog_Details">Breaking Barriers and Shaping the Future</a></h3>
                                <a href="/blog_Details" class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <a href="/blog_Details">
                                    <img src="assets/img/blog/blog_1_3.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="far fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="far fa-calendar"></i>23 Jun, 2024</a>
                                </div>
                                <h3 class="blog-title"><a href="/blog_Details">Taking Customization to the Next Level</a></h3>
                                <a href="/blog_Details" class="link-btn style2">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Client Area  
==============================-->
<div class="client-area-1 overflow-hidden space">
    <div class="container-fluid p-0">
        <div class="swiper th-slider client-slider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"400":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"7"},"1300":{"slidesPerView":"9"}}, "spaceBetween": "0", "loop": "true"}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-1.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-2.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-3.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-4.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-5.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-6.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-7.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-8.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-9.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-1.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-2.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-3.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-4.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-5.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-6.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-7.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-8.png" alt="Image">
                    </a>
                </div>

                <div class="swiper-slide">
                    <a href="#" class="client-card">
                        <img src="assets/img/client/1-9.png" alt="Image">
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection