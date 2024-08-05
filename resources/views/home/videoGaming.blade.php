@extends('layout.master')

@section('content')
<div class="th-hero-wrapper hero-3" id="hero">
    <div class="th-hero-bg" data-bg-src="assets/img/hero/hero-bg3-1.png"></div>
    <div class="container">
        <div class="hero-style3">
            <span class="sub-title custom-anim-left wow" data-wow-duration="1.2s" data-wow-delay="0.1s">Play, Improve & Win</span>
            <h1 class="hero-title custom-anim-left wow" data-wow-duration="1.2s" data-wow-delay="0.2s">
                Online Fantasy
            </h1>
            <h1 class="hero-title style2 text-theme custom-anim-left wow" data-wow-duration="1.2s" data-wow-delay="0.3s">
                Video Game
            </h1>
            <div class="btn-group custom-anim-left wow" data-wow-duration="1.2s" data-wow-delay="0.5s">
                <a href="/contact" class="th-btn">
                    EXPLORE MORE <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--======== / Hero Section ========-->
<!--==============================
Feature Game Area 1 
==============================-->
<section class="feature-game-area-1  bg-black">
    <div class="container">
        <div class="slider-area feature-game-slider1">
            <div class="swiper th-slider" id="featureGameSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="feature-game-card">
                            <div class="feature-game-card-img">
                                <a href="/game_Details">
                                    <div class="feature-card-img-shape icon-masking">
                                        <span class="mask-icon" data-mask-src="assets/img/feature/feature-card-bg.png"></span>
                                        <img src="assets/img/feature/feature-card-bg.png" alt="img">
                                    </div>
                                    <img src="assets/img/feature/feature1-1.png" alt="game image">
                                </a>
                                <a href="/contact" class="th-btn">
                                    PLAY NOW <i class="fa-solid fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                            <div class="feature-game-card-details">
                                <h3 class="box-title"><a href="/game_Details">AIR FIGHT</a></h3>
                                <p class="text">Successful esports teams exhibit strong communication, strategic.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="feature-game-card">
                            <div class="feature-game-card-img">
                                <a href="/game_Details">
                                    <div class="feature-card-img-shape icon-masking">
                                        <span class="mask-icon" data-mask-src="assets/img/feature/feature-card-bg.png"></span>
                                        <img src="assets/img/feature/feature-card-bg.png" alt="img">
                                    </div>
                                    <img src="assets/img/feature/feature1-2.png" alt="game image">
                                </a>
                                <a href="/contact" class="th-btn">
                                    PLAY NOW <i class="fa-solid fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                            <div class="feature-game-card-details">
                                <h3 class="box-title"><a href="/game_Details">CAPTURE THE BASE</a></h3>
                                <p class="text">The rise of mobile gaming has significantly expanded the gaming.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="feature-game-card">
                            <div class="feature-game-card-img">
                                <a href="/game_Details">
                                    <div class="feature-card-img-shape icon-masking">
                                        <span class="mask-icon" data-mask-src="assets/img/feature/feature-card-bg.png"></span>
                                        <img src="assets/img/feature/feature-card-bg.png" alt="img">
                                    </div>
                                    <img src="assets/img/feature/feature1-3.png" alt="game image">
                                </a>
                                <a href="/contact" class="th-btn">
                                    PLAY NOW <i class="fa-solid fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                            <div class="feature-game-card-details">
                                <h3 class="box-title"><a href="/game_Details">FLEET GAME</a></h3>
                                <p class="text">It has also influenced game design reaching a broader demographic.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="feature-game-card">
                            <div class="feature-game-card-img">
                                <a href="/game_Details">
                                    <div class="feature-card-img-shape icon-masking">
                                        <span class="mask-icon" data-mask-src="assets/img/feature/feature-card-bg.png"></span>
                                        <img src="assets/img/feature/feature-card-bg.png" alt="img">
                                    </div>
                                    <img src="assets/img/feature/feature1-1.png" alt="game image">
                                </a>
                                <a href="/contact" class="th-btn">
                                    PLAY NOW <i class="fa-solid fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                            <div class="feature-game-card-details">
                                <h3 class="box-title"><a href="/game_Details">AIR FIGHT</a></h3>
                                <p class="text">Successful esports teams exhibit strong communication, strategic.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="feature-game-card">
                            <div class="feature-game-card-img">
                                <a href="/game_Details">
                                    <div class="feature-card-img-shape icon-masking">
                                        <span class="mask-icon" data-mask-src="assets/img/feature/feature-card-bg.png"></span>
                                        <img src="assets/img/feature/feature-card-bg.png" alt="img">
                                    </div>
                                    <img src="assets/img/feature/feature1-2.png" alt="game image">
                                </a>
                                <a href="/contact" class="th-btn">
                                    PLAY NOW <i class="fa-solid fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                            <div class="feature-game-card-details">
                                <h3 class="box-title"><a href="/game_Details">CAPTURE THE BASE</a></h3>
                                <p class="text">The rise of mobile gaming has significantly expanded the gaming.</p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="feature-game-card">
                            <div class="feature-game-card-img">
                                <a href="/game_Details">
                                    <div class="feature-card-img-shape icon-masking">
                                        <span class="mask-icon" data-mask-src="assets/img/feature/feature-card-bg.png"></span>
                                        <img src="assets/img/feature/feature-card-bg.png" alt="img">
                                    </div>
                                    <img src="assets/img/feature/feature1-3.png" alt="game image">
                                </a>
                                <a href="/contact" class="th-btn">
                                    PLAY NOW <i class="fa-solid fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                            <div class="feature-game-card-details">
                                <h3 class="box-title"><a href="/game_Details">FLEET GAME</a></h3>
                                <p class="text">It has also influenced game design reaching a broader demographic.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#featureGameSlider1" class="slider-arrow style3 slider-prev"><i class="fas fa-angle-left"></i></button>
            <button data-slider-next="#featureGameSlider1" class="slider-arrow style3 slider-next"><i class="fas fa-angle-right"></i></button>
        </div>
    </div>
</section><!--==============================
About Area  
==============================-->
<div class="overflow-hidden space" id="about-sec">
    <div class="about-bg-img shape-mockup" data-top="0" data-left="0">
        <img src="assets/img/bg/about-bg1.png" alt="img">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 mb-50 mb-xl-0">
                <div class="img-box4">
                    <div class="custom-anim-left wow" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        <img class src="assets/img/normal/about4-1.png" alt="About">
                    </div>
                    <div class="img2">
                        <img src="assets/img/normal/about4-2.png" alt="About">
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-wrap4">
                    <div class="title-area mb-35 custom-anim-left wow" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <span class="sub-title style3">
                            <span class="sub-title-shape icon-masking">
                                <span class="mask-icon" data-mask-src="assets/img/bg/section-title-bg.svg"></span>
                            </span>
                            About Our Gaming Site
                        </span>
                        <h2 class="sec-title mb-0">Beyond Gaming It's an Odyssey.</h2>
                        <p class="mt-20">Emerging trends in the esports industry include the growth of mobile esports, the integration of virtual reality in gaming experiences, and the increasing involvement of traditional sports.</p>
                    </div>
                    <div class="row gy-60">
                        <div class="col-sm-6">
                            <div class="counter-card">
                                <div class="media-body">
                                    <h2 class="box-number"><span class="counter-number">1.6</span>K<span class="text-theme fw-medium">+</span></h2>
                                    <p class="box-text">Our Daily Game Users</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-card">
                                <div class="media-body">
                                    <h2 class="box-number"><span class="counter-number">50</span>M</h2>
                                    <p class="box-text">Game Downloads</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-card">
                                <div class="media-body">
                                    <h2 class="box-number"><span class="counter-number">200</span><span class="text-theme fw-medium">+</span></h2>
                                    <p class="box-text">Game Launched</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-card">
                                <div class="media-body">
                                    <h2 class="box-number"><span class="counter-number">3.6</span>M</h2>
                                    <p class="box-text">Gaming Project Delivered</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrap mt-50">
                        <a href="/contact" class="th-btn">
                            EXPLORE MORE <i class="fa-solid fa-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Game Area  
==============================-->
<section class="game-area-3 space-bottom overflow-hidden">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-auto">
                <div class="title-area custom-anim-top wow" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <span class="sub-title style3">
                        <span class="sub-title-shape icon-masking">
                            <span class="mask-icon" data-mask-src="assets/img/bg/section-title-bg.svg"></span>
                        </span>
                        Our Latest Game
                    </span>
                    <h2 class="sec-title">Best Video Games In <span class="text-theme">2024</span></h2>
                    <p>The rise of mobile gaming has significantly expanded the gaming audience</p>
                </div>
                <div class="game-filter-btn  filter-menu filter-menu-active custom-anim-top wow">
                    <button data-filter="*" class="tab-btn active" type="button">
                        We Recommend
                    </button>
                    <button data-filter=".cat1" class="tab-btn" type="button">
                        Popular Games
                    </button>
                    <button data-filter=".cat2" class="tab-btn" type="button">
                        New Released
                    </button>
                    <button data-filter=".cat3" class="tab-btn" type="button">
                        Best Rating Games
                    </button>
                    <button data-filter=".cat4" class="tab-btn" type="button">
                        Old Released
                    </button>
                </div>
            </div>
        </div>
        <div class="row gy-4 filter-active">
            <div class="col-lg-4 col-md-6 filter-item cat1">
                <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
                    <div class="game-card-img" data-mask-src="assets/img/game/game_card3_img-shape.jpg">
                        <a href="/game_Details">
                            <span class="game-rating"><i class="fas fa-star"></i> 4.5</span>
                            <img src="assets/img/game/3-1.png" alt="game image">
                        </a>
                    </div>
                    <div class="game-card-details">
                        <div class="game-tag">
                            Desktop </div>
                        <h3 class="box-title"><a href="/game_Details">Assassin’s Creed Mirage</a></h3>
                        <p class="game-content">$60.99</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 filter-item cat2">
                <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
                    <div class="game-card-img" data-mask-src="assets/img/game/game_card3_img-shape.jpg">
                        <a href="/game_Details">
                            <span class="game-rating"><i class="fas fa-star"></i> 4.5</span>
                            <img src="assets/img/game/3-2.png" alt="game image">
                        </a>
                    </div>
                    <div class="game-card-details">
                        <div class="game-tag">
                            Mobile </div>
                        <h3 class="box-title"><a href="/game_Details">Valorant Game</a></h3>
                        <p class="game-content">Free to play</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 filter-item cat2 cat3">
                <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
                    <div class="game-card-img" data-mask-src="assets/img/game/game_card3_img-shape.jpg">
                        <a href="/game_Details">
                            <span class="game-rating"><i class="fas fa-star"></i> 4.5</span>
                            <img src="assets/img/game/3-3.png" alt="game image">
                        </a>
                    </div>
                    <div class="game-card-details">
                        <div class="game-tag">
                            PS 5 </div>
                        <h3 class="box-title"><a href="/game_Details">Red Dead Redemption II</a></h3>
                        <p class="game-content">$29.99</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 filter-item cat3 cat4">
                <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
                    <div class="game-card-img" data-mask-src="assets/img/game/game_card3_img-shape.jpg">
                        <a href="/game_Details">
                            <span class="game-rating"><i class="fas fa-star"></i> 4.5</span>
                            <img src="assets/img/game/3-4.png" alt="game image">
                        </a>
                    </div>
                    <div class="game-card-details">
                        <div class="game-tag">
                            Desktop </div>
                        <h3 class="box-title"><a href="/game_Details">Call Of Duty : MW II</a></h3>
                        <p class="game-content">$39.99</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 filter-item cat1 cat4">
                <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
                    <div class="game-card-img" data-mask-src="assets/img/game/game_card3_img-shape.jpg">
                        <a href="/game_Details">
                            <span class="game-rating"><i class="fas fa-star"></i> 4.5</span>
                            <img src="assets/img/game/3-5.png" alt="game image">
                        </a>
                    </div>
                    <div class="game-card-details">
                        <div class="game-tag">
                            Tablet </div>
                        <h3 class="box-title"><a href="/game_Details">Genshin Impact</a></h3>
                        <p class="game-content">Free to play</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 filter-item cat2 cat4">
                <div class="game-card style3" data-mask-src="assets/img/game/game_card3_bg.jpg">
                    <div class="game-card-img" data-mask-src="assets/img/game/game_card3_img-shape.jpg">
                        <a href="/game_Details">
                            <span class="game-rating"><i class="fas fa-star"></i> 4.5</span>
                            <img src="assets/img/game/3-6.png" alt="game image">
                        </a>
                    </div>
                    <div class="game-card-details">
                        <div class="game-tag">
                            XBOX </div>
                        <h3 class="box-title"><a href="/game_Details">Jedi Fallen Order</a></h3>
                        <p class="game-content">$59.99</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!--==============================
Countdown Area  
==============================-->
<div class="countdown-sec1 overflow-hidden" data-bg-src="assets/img/bg/countdown-sec1-bg.png" data-overlay="black" data-opacity="8">
    <div class="countdown-thumb1-1 shape-mockup d-xl-block d-none" data-bottom="0" data-left="5%">
        <img src="assets/img/normal/countdown1-1.png" alt="img">
    </div>
    <div class="countdown-thumb1-2 shape-mockup d-xl-block d-none" data-bottom="0" data-right="3%">
        <img src="assets/img/normal/countdown1-2.png" alt="img">
    </div>
    <div class="container">
        <div class="countdown-wrap1 z-index-common text-center space">
            <h3 class="countdown-subtitle custom-anim-top wow">Big Match</h3>
            <h2 class="countdown-title custom-anim-top wow">Valorant Game</h2>
            <h4 class="countdown-time custom-anim-top wow">21 February, 2024 - 6:00 PM</h4>
            <ul class="counter-list custom-anim-top wow" data-offer-date="06/20/2024">
                <li>
                    <div class="day count-number" data-bg-src="assets/img/bg/countdown_item_bg.png">00</div>
                    <span class="count-name">Days</span>
                </li>
                <li>
                    <div class="hour count-number" data-bg-src="assets/img/bg/countdown_item_bg.png">00</div>
                    <span class="count-name">Hour</span>
                </li>
                <li>
                    <div class="minute count-number" data-bg-src="assets/img/bg/countdown_item_bg.png">00</div>
                    <span class="count-name">Minute</span>
                </li>
                <li>
                    <div class="seconds count-number" data-bg-src="assets/img/bg/countdown_item_bg.png">00</div>
                    <span class="count-name">Second</span>
                </li>
            </ul>
            <div class="btn-wrap mt-40 justify-content-center custom-anim-top wow">
                <a href="/contact" class="th-btn">
                    WATCH THE MATCH <i class="fa-solid fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!--==============================
Video Area  
==============================-->
<div class="video-area-3 space overflow-hidden position-relative">
    <div class="radient-border-bottom"></div>
    <div class="container">
        <div class="row justify-content-between align-items-center flex-row-reverse">
            <div class="col-xl-6">
                <div class="text-xl-end video-box1 mb-50 mb-xl-0 custom-anim-right wow">
                    <img src="assets/img/normal/video2-1.png" alt="img">
                    <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style3 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                </div>
            </div>
            <div class="col-xl-6 custom-anim-left wow">
                <div class="title-area">
                    <span class="sub-title style3">
                        <span class="sub-title-shape icon-masking">
                            <span class="mask-icon" data-mask-src="assets/img/bg/section-title-bg.svg"></span>
                        </span>
                        Why so special?
                    </span>
                    <h2 class="sec-title text-white">Our Gaming special features</h2>
                </div>
                <div class="accordion faq-wrap2" id="faqAccordion">


                    <div class="accordion-card style2">
                        <div class="accordion-header" id="collapse-item-1">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true" aria-controls="collapse-1">SURVIVE AT ALL COSTS</button>
                        </div>
                        <div id="collapse-1" class="accordion-collapse collapse show" aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">You have 30 minutes to find a relic, signal for extraction, & grab one of three spots on the rescue chopper. Gamers can join local gaming meetups</p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-card style2">
                        <div class="accordion-header" id="collapse-item-2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">CREATE ALLIES AND ENEMIES</button>
                        </div>
                        <div id="collapse-2" class="accordion-collapse collapse " aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">You have 30 minutes to find a relic, signal for extraction, & grab one of three spots on the rescue chopper. Gamers can join local gaming meetups</p>
                            </div>
                        </div>
                    </div>


                    <div class="accordion-card style2">
                        <div class="accordion-header" id="collapse-item-3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">IMPRESS THE AUDIENCE</button>
                        </div>
                        <div id="collapse-3" class="accordion-collapse collapse " aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p class="faq-text">You have 30 minutes to find a relic, signal for extraction, & grab one of three spots on the rescue chopper. Gamers can join local gaming meetups</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--==============================
Tournament Area  
==============================-->
<section class="space overflow-hidden" data-bg-src="assets/img/bg/tournament-sec4-bg.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="title-area text-center custom-anim-top wow" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <span class="sub-title style3">
                        <span class="sub-title-shape icon-masking">
                            <span class="mask-icon" data-mask-src="assets/img/bg/section-title-bg.svg"></span>
                        </span>
                        Game Streaming Battle
                    </span>
                    <h2 class="sec-title">Our Video Game Match Schedule <span class="text-theme">!</span></h2>
                </div>
            </div>
            <div class="col-lg-auto custom-anim-top wow">
                <div class="game-filter-btn filter-menu filter-menu-active">
                    <button data-filter=".tour-cat1" class="tab-btn" type="button">
                        Upcoming Games
                    </button>
                    <button data-filter="*" class="tab-btn active" type="button">
                        All Games
                    </button>
                    <button data-filter=".tour-cat2" class="tab-btn" type="button">
                        Finished Games
                    </button>
                </div>
            </div>
        </div>
        <div class="row gy-30 filter-active">
            <div class="col-12 filter-item tour-cat1">
                <div class="tournament-card style4">
                    <div class="tournament-player-wrap">
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Video Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Pro Player</a></h3>
                        </div>
                        <div class="tournament-card-img">
                            <img src="assets/img/tournament/3-1.png" alt="tournament image">
                        </div>
                    </div>
                    <div class="tournament-card-content">
                        <div class="tournament-card-meta">
                            <span class="tournament-card-tag">Upcoming</span>
                        </div>
                        <h6 class="tournament-card-date">23 Dec, 2024 <span class="tournament-card-time">6:00 PM</span></h6>
                        <div class="th-social">
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i>Youtube</a>
                            <a href="https://www.twitch.tv/"><i class="fa-brands fa-twitch"></i>Twitch</a>
                        </div>
                        <a href="/tournament_Details" class="th-btn style-border3">
                            <span class="btn-border">
                                WATCH MATCH <i class="fa-solid fa-arrow-right ms-2"></i>
                            </span>
                        </a>
                    </div>
                    <div class="tournament-player-wrap2">
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Video Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Spiderman-II</a></h3>
                        </div>
                        <div class="tournament-card-img">
                            <img src="assets/img/tournament/3-2.png" alt="tournament image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 filter-item tour-cat2">
                <div class="tournament-card style4">
                    <div class="tournament-player-wrap">
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Video Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Assassin</a></h3>
                        </div>
                        <div class="tournament-card-img">
                            <img src="assets/img/tournament/3-3.png" alt="tournament image">
                        </div>
                    </div>
                    <div class="tournament-card-content">
                        <div class="tournament-card-meta">
                            <span class="tournament-card-tag">Finished</span>
                        </div>
                        <h6 class="tournament-card-date">23 Dec, 2024 <span class="tournament-card-time">6:00 PM</span></h6>
                        <div class="th-social">
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i>Youtube</a>
                            <a href="https://www.twitch.tv/"><i class="fa-brands fa-twitch"></i>Twitch</a>
                        </div>
                        <a href="/tournament_Details" class="th-btn style-border3">
                            <span class="btn-border">
                                WATCH MATCH <i class="fa-solid fa-arrow-right ms-2"></i>
                            </span>
                        </a>
                    </div>
                    <div class="tournament-player-wrap2">
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Video Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Hooligans</a></h3>
                        </div>
                        <div class="tournament-card-img">
                            <img src="assets/img/tournament/3-4.png" alt="tournament image">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 filter-item tour-cat1">
                <div class="tournament-card style4">
                    <div class="tournament-player-wrap">
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Video Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Hacker King</a></h3>
                        </div>
                        <div class="tournament-card-img">
                            <img src="assets/img/tournament/3-5.png" alt="tournament image">
                        </div>
                    </div>
                    <div class="tournament-card-content">
                        <div class="tournament-card-meta">
                            <span class="tournament-card-tag">Upcoming</span>
                        </div>
                        <h6 class="tournament-card-date">23 Dec, 2024 <span class="tournament-card-time">6:00 PM</span></h6>
                        <div class="th-social">
                            <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i>Youtube</a>
                            <a href="https://www.twitch.tv/"><i class="fa-brands fa-twitch"></i>Twitch</a>
                        </div>
                        <a href="/tournament_Details" class="th-btn style-border3">
                            <span class="btn-border">
                                WATCH MATCH <i class="fa-solid fa-arrow-right ms-2"></i>
                            </span>
                        </a>
                    </div>
                    <div class="tournament-player-wrap2">
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Video Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Cyberpunk</a></h3>
                        </div>
                        <div class="tournament-card-img">
                            <img src="assets/img/tournament/3-6.png" alt="tournament image">
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
    <div class="gallery-area-3 space overflow-hidden position-relative">
        <div class="radient-border-top"></div>
        <div class="slider-area gallery-slider3">
            <div class="swiper th-slider" id="gallerySlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}},"centeredSlides":"true"}'>
                <div class="swiper-wrapper">
                    <!--==============================
Gallery Area  
==============================-->
                    <div class="swiper-slide gallery-card style2">
                        <div class="gallery-card-img">
                            <img src="assets/img/gallery/gallery_3_1.jpg" alt="img">
                            <div class="img-overlay icon-masking">
                                <span class="mask-icon" data-mask-src="assets/img/gallery/gallery3_shape.jpg"></span>
                                <img src="assets/img/gallery/gallery3_shape.jpg" alt="img">
                            </div>
                        </div>
                        <div class="gallery-content">
                            <div class="media-body">
                                <span class="gallery-card-subtitle">Video Game</span>
                                <h3 class="gallery-card-title"><a href="/game_Details">Hunter of The Fire Man</a></h3>
                            </div>
                            <a href="assets/img/gallery/gallery_3_1.jpg" class="play-btn popup-image style6"><i class="fa-solid fa-plus"></i>
                                <div class="icon-shape">
                                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_i_935_1589)">
                                            <path d="M8.53554 1.46446C9.47322 0.526783 10.745 0 12.0711 0H43.9289C45.255 0 46.5268 0.526784 47.4645 1.46447L54.5355 8.53554C55.4732 9.47322 56 10.745 56 12.0711V14V28V42V43.9289C56 45.255 55.4732 46.5268 54.5355 47.4645L47.4645 54.5355C46.5268 55.4732 45.255 56 43.9289 56H12.0711C10.745 56 9.47322 55.4732 8.53553 54.5355L1.46446 47.4645C0.526783 46.5268 0 45.255 0 43.9289V42V28V14V12.0711C0 10.745 0.526784 9.47322 1.46447 8.53553L8.53554 1.46446Z" fill="#0F1C23" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_i_935_1589" x="0" y="0" width="56" height="56" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset />
                                                <feGaussianBlur stdDeviation="3.5" />
                                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0.258824 0 0 0 0 0.890196 0 0 0 0 0.47451 0 0 0 0.7 0" />
                                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_935_1589" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide gallery-card style2">
                        <div class="gallery-card-img">
                            <img src="assets/img/gallery/gallery_3_2.jpg" alt="img">
                            <div class="img-overlay icon-masking">
                                <span class="mask-icon" data-mask-src="assets/img/gallery/gallery3_shape.jpg"></span>
                                <img src="assets/img/gallery/gallery3_shape.jpg" alt="img">
                            </div>
                        </div>
                        <div class="gallery-content">
                            <div class="media-body">
                                <span class="gallery-card-subtitle">Video Game</span>
                                <h3 class="gallery-card-title"><a href="/game_Details">Jedi Fallen Order</a></h3>
                            </div>
                            <a href="assets/img/gallery/gallery_3_2.jpg" class="play-btn popup-image style6"><i class="fa-solid fa-plus"></i>
                                <div class="icon-shape">
                                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_i_935_1589)">
                                            <path d="M8.53554 1.46446C9.47322 0.526783 10.745 0 12.0711 0H43.9289C45.255 0 46.5268 0.526784 47.4645 1.46447L54.5355 8.53554C55.4732 9.47322 56 10.745 56 12.0711V14V28V42V43.9289C56 45.255 55.4732 46.5268 54.5355 47.4645L47.4645 54.5355C46.5268 55.4732 45.255 56 43.9289 56H12.0711C10.745 56 9.47322 55.4732 8.53553 54.5355L1.46446 47.4645C0.526783 46.5268 0 45.255 0 43.9289V42V28V14V12.0711C0 10.745 0.526784 9.47322 1.46447 8.53553L8.53554 1.46446Z" fill="#0F1C23" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_i_935_1589" x="0" y="0" width="56" height="56" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset />
                                                <feGaussianBlur stdDeviation="3.5" />
                                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0.258824 0 0 0 0 0.890196 0 0 0 0 0.47451 0 0 0 0.7 0" />
                                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_935_1589" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide gallery-card style2">
                        <div class="gallery-card-img">
                            <img src="assets/img/gallery/gallery_3_3.jpg" alt="img">
                            <div class="img-overlay icon-masking">
                                <span class="mask-icon" data-mask-src="assets/img/gallery/gallery3_shape.jpg"></span>
                                <img src="assets/img/gallery/gallery3_shape.jpg" alt="img">
                            </div>
                        </div>
                        <div class="gallery-content">
                            <div class="media-body">
                                <span class="gallery-card-subtitle">Video Game</span>
                                <h3 class="gallery-card-title"><a href="/game_Details">Genshin Impact Game</a></h3>
                            </div>
                            <a href="assets/img/gallery/gallery_3_3.jpg" class="play-btn popup-image style6"><i class="fa-solid fa-plus"></i>
                                <div class="icon-shape">
                                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_i_935_1589)">
                                            <path d="M8.53554 1.46446C9.47322 0.526783 10.745 0 12.0711 0H43.9289C45.255 0 46.5268 0.526784 47.4645 1.46447L54.5355 8.53554C55.4732 9.47322 56 10.745 56 12.0711V14V28V42V43.9289C56 45.255 55.4732 46.5268 54.5355 47.4645L47.4645 54.5355C46.5268 55.4732 45.255 56 43.9289 56H12.0711C10.745 56 9.47322 55.4732 8.53553 54.5355L1.46446 47.4645C0.526783 46.5268 0 45.255 0 43.9289V42V28V14V12.0711C0 10.745 0.526784 9.47322 1.46447 8.53553L8.53554 1.46446Z" fill="#0F1C23" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_i_935_1589" x="0" y="0" width="56" height="56" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset />
                                                <feGaussianBlur stdDeviation="3.5" />
                                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0.258824 0 0 0 0 0.890196 0 0 0 0 0.47451 0 0 0 0.7 0" />
                                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_935_1589" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide gallery-card style2">
                        <div class="gallery-card-img">
                            <img src="assets/img/gallery/gallery_3_1.jpg" alt="img">
                            <div class="img-overlay icon-masking">
                                <span class="mask-icon" data-mask-src="assets/img/gallery/gallery3_shape.jpg"></span>
                                <img src="assets/img/gallery/gallery3_shape.jpg" alt="img">
                            </div>
                        </div>
                        <div class="gallery-content">
                            <div class="media-body">
                                <span class="gallery-card-subtitle">Video Game</span>
                                <h3 class="gallery-card-title"><a href="/game_Details">Hunter of The Fire Man</a></h3>
                            </div>
                            <a href="assets/img/gallery/gallery_3_1.jpg" class="play-btn popup-image style6"><i class="fa-solid fa-plus"></i>
                                <div class="icon-shape">
                                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_i_935_1589)">
                                            <path d="M8.53554 1.46446C9.47322 0.526783 10.745 0 12.0711 0H43.9289C45.255 0 46.5268 0.526784 47.4645 1.46447L54.5355 8.53554C55.4732 9.47322 56 10.745 56 12.0711V14V28V42V43.9289C56 45.255 55.4732 46.5268 54.5355 47.4645L47.4645 54.5355C46.5268 55.4732 45.255 56 43.9289 56H12.0711C10.745 56 9.47322 55.4732 8.53553 54.5355L1.46446 47.4645C0.526783 46.5268 0 45.255 0 43.9289V42V28V14V12.0711C0 10.745 0.526784 9.47322 1.46447 8.53553L8.53554 1.46446Z" fill="#0F1C23" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_i_935_1589" x="0" y="0" width="56" height="56" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset />
                                                <feGaussianBlur stdDeviation="3.5" />
                                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0.258824 0 0 0 0 0.890196 0 0 0 0 0.47451 0 0 0 0.7 0" />
                                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_935_1589" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide gallery-card style2">
                        <div class="gallery-card-img">
                            <img src="assets/img/gallery/gallery_3_2.jpg" alt="img">
                            <div class="img-overlay icon-masking">
                                <span class="mask-icon" data-mask-src="assets/img/gallery/gallery3_shape.jpg"></span>
                                <img src="assets/img/gallery/gallery3_shape.jpg" alt="img">
                            </div>
                        </div>
                        <div class="gallery-content">
                            <div class="media-body">
                                <span class="gallery-card-subtitle">Video Game</span>
                                <h3 class="gallery-card-title"><a href="/game_Details">Jedi Fallen Order</a></h3>
                            </div>
                            <a href="assets/img/gallery/gallery_3_2.jpg" class="play-btn popup-image style6"><i class="fa-solid fa-plus"></i>
                                <div class="icon-shape">
                                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_i_935_1589)">
                                            <path d="M8.53554 1.46446C9.47322 0.526783 10.745 0 12.0711 0H43.9289C45.255 0 46.5268 0.526784 47.4645 1.46447L54.5355 8.53554C55.4732 9.47322 56 10.745 56 12.0711V14V28V42V43.9289C56 45.255 55.4732 46.5268 54.5355 47.4645L47.4645 54.5355C46.5268 55.4732 45.255 56 43.9289 56H12.0711C10.745 56 9.47322 55.4732 8.53553 54.5355L1.46446 47.4645C0.526783 46.5268 0 45.255 0 43.9289V42V28V14V12.0711C0 10.745 0.526784 9.47322 1.46447 8.53553L8.53554 1.46446Z" fill="#0F1C23" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_i_935_1589" x="0" y="0" width="56" height="56" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset />
                                                <feGaussianBlur stdDeviation="3.5" />
                                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0.258824 0 0 0 0 0.890196 0 0 0 0 0.47451 0 0 0 0.7 0" />
                                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_935_1589" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="swiper-slide gallery-card style2">
                        <div class="gallery-card-img">
                            <img src="assets/img/gallery/gallery_3_3.jpg" alt="img">
                            <div class="img-overlay icon-masking">
                                <span class="mask-icon" data-mask-src="assets/img/gallery/gallery3_shape.jpg"></span>
                                <img src="assets/img/gallery/gallery3_shape.jpg" alt="img">
                            </div>
                        </div>
                        <div class="gallery-content">
                            <div class="media-body">
                                <span class="gallery-card-subtitle">Video Game</span>
                                <h3 class="gallery-card-title"><a href="/game_Details">Genshin Impact Game</a></h3>
                            </div>
                            <a href="assets/img/gallery/gallery_3_3.jpg" class="play-btn popup-image style6"><i class="fa-solid fa-plus"></i>
                                <div class="icon-shape">
                                    <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g filter="url(#filter0_i_935_1589)">
                                            <path d="M8.53554 1.46446C9.47322 0.526783 10.745 0 12.0711 0H43.9289C45.255 0 46.5268 0.526784 47.4645 1.46447L54.5355 8.53554C55.4732 9.47322 56 10.745 56 12.0711V14V28V42V43.9289C56 45.255 55.4732 46.5268 54.5355 47.4645L47.4645 54.5355C46.5268 55.4732 45.255 56 43.9289 56H12.0711C10.745 56 9.47322 55.4732 8.53553 54.5355L1.46446 47.4645C0.526783 46.5268 0 45.255 0 43.9289V42V28V14V12.0711C0 10.745 0.526784 9.47322 1.46447 8.53553L8.53554 1.46446Z" fill="#0F1C23" />
                                        </g>
                                        <defs>
                                            <filter id="filter0_i_935_1589" x="0" y="0" width="56" height="56" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                                <feOffset />
                                                <feGaussianBlur stdDeviation="3.5" />
                                                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0.258824 0 0 0 0 0.890196 0 0 0 0 0.47451 0 0 0 0.7 0" />
                                                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_935_1589" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="slider-pagination"></div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Cta Area  
==============================-->
<section class="space-bottom">
    <div class="container">
        <div class="cta-wrap3">
            <div class="row gx-0 gy-40 align-items-center flex-row-reverse">
                <div class="col-xl-7">
                    <div class="cta-thumb3-1 custom-anim-left wow" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <img src="assets/img/normal/cta3-1.png" alt="img">
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="title-area mb-0 custom-anim-left wow" data-wow-duration="1.5s" data-wow-delay="0.1s">
                        <span class="sub-title style3">
                            <span class="sub-title-shape icon-masking">
                                <span class="mask-icon" data-mask-src="assets/img/bg/section-title-bg.svg"></span>
                            </span>
                            Explore a New Dimension
                        </span>
                        <h2 class="sec-title mb-0">Ready to unlock your potentials in a world of fun</h2>
                        <p class="mt-20 mb-30">The rise of mobile gaming has significantly expanded the gaming audience, reaching a broader demographic. It has also influenced game design</p>
                        <a href="/contact" class="th-btn">JOIN COMMUNITY <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--==============================
Testimonial Area  
==============================-->
<section class="testi-sec-1 overflow-hidden space-top" id="testi-sec" data-opacity="9" data-overlay="title" data-bg-src="assets/img/bg/testi-sec1-bg.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="title-area text-center">
                    <span class="sub-title style3">
                        <span class="sub-title-shape icon-masking">
                            <span class="mask-icon" data-mask-src="assets/img/bg/section-title-bg.svg"></span>
                        </span>
                        Customer Feedback
                    </span>
                    <h2 class="sec-title mb-0">Loved by our customer worldwide</h2>
                </div>

                <div class="slider-area testi-slider1">
                    <div class="swiper th-slider" id="testiSlide1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}},"effect":"slide","loop":false,"thumbs":{"swiper":".testi-grid-thumb"}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testi-card" data-bg-src="assets/img/bg/testi-card-bg1-1.png">
                                    <p class="testi-card_text">“Successful esport team exhibit strong communication strategic coordination & individual player skill. Team chemist effective coaching, & adaptability to changing meats”</p>
                                    <div class="testi-card_profile">
                                        <div class="testi-card_content">
                                            <div class="testi-card_avater">
                                                <img src="assets/img/testimonial/testi1-1.png" alt="img">
                                            </div>
                                            <h3 class="testi-card_name">Andrew D. Smith</h3>
                                            <span class="testi-card_desig">Video Gamer</span>
                                        </div>
                                        <div class="quote-icon icon-masking">
                                            <span class="mask-icon" data-mask-src="assets/img/icon/quote1-1.svg"></span>
                                            <img src="assets/img/icon/quote1-1.svg" alt="icon">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card" data-bg-src="assets/img/bg/testi-card-bg1-1.png">
                                    <p class="testi-card_text">“Emerging trends in the esports industry include the growth of mobile esports, the integration of virtual reality in gaming experiences, and the increasing involvement.”</p>
                                    <div class="testi-card_profile">
                                        <div class="testi-card_content">
                                            <div class="testi-card_avater">
                                                <img src="assets/img/testimonial/testi1-2.png" alt="img">
                                            </div>
                                            <h3 class="testi-card_name">Alexan Micelito</h3>
                                            <span class="testi-card_desig">Video Gamer</span>
                                        </div>
                                        <div class="quote-icon icon-masking">
                                            <span class="mask-icon" data-mask-src="assets/img/icon/quote1-1.svg"></span>
                                            <img src="assets/img/icon/quote1-1.svg" alt="icon">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card" data-bg-src="assets/img/bg/testi-card-bg1-1.png">
                                    <p class="testi-card_text">“Esports and gaming facilities requires thoughtful consideration of various elements to create an environment that caters to the needs of gamers and enhances the overall.”</p>
                                    <div class="testi-card_profile">
                                        <div class="testi-card_content">
                                            <div class="testi-card_avater">
                                                <img src="assets/img/testimonial/testi1-3.png" alt="img">
                                            </div>
                                            <h3 class="testi-card_name">Brooklyn Simmons</h3>
                                            <span class="testi-card_desig">Video Gamer</span>
                                        </div>
                                        <div class="quote-icon icon-masking">
                                            <span class="mask-icon" data-mask-src="assets/img/icon/quote1-1.svg"></span>
                                            <img src="assets/img/icon/quote1-1.svg" alt="icon">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card" data-bg-src="assets/img/bg/testi-card-bg1-1.png">
                                    <p class="testi-card_text">“Successful esport team exhibit strong communication strategic coordination & individual player skill. Team chemist effective coaching, & adaptability to changing meats”</p>
                                    <div class="testi-card_profile">
                                        <div class="testi-card_content">
                                            <div class="testi-card_avater">
                                                <img src="assets/img/testimonial/testi1-1.png" alt="img">
                                            </div>
                                            <h3 class="testi-card_name">Andrew D. Smith</h3>
                                            <span class="testi-card_desig">Video Gamer</span>
                                        </div>
                                        <div class="quote-icon icon-masking">
                                            <span class="mask-icon" data-mask-src="assets/img/icon/quote1-1.svg"></span>
                                            <img src="assets/img/icon/quote1-1.svg" alt="icon">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card" data-bg-src="assets/img/bg/testi-card-bg1-1.png">
                                    <p class="testi-card_text">“Emerging trends in the esports industry include the growth of mobile esports, the integration of virtual reality in gaming experiences, and the increasing involvement.”</p>
                                    <div class="testi-card_profile">
                                        <div class="testi-card_content">
                                            <div class="testi-card_avater">
                                                <img src="assets/img/testimonial/testi1-2.png" alt="img">
                                            </div>
                                            <h3 class="testi-card_name">Alexan Micelito</h3>
                                            <span class="testi-card_desig">Video Gamer</span>
                                        </div>
                                        <div class="quote-icon icon-masking">
                                            <span class="mask-icon" data-mask-src="assets/img/icon/quote1-1.svg"></span>
                                            <img src="assets/img/icon/quote1-1.svg" alt="icon">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card" data-bg-src="assets/img/bg/testi-card-bg1-1.png">
                                    <p class="testi-card_text">“Esports and gaming facilities requires thoughtful consideration of various elements to create an environment that caters to the needs of gamers and enhances the overall.”</p>
                                    <div class="testi-card_profile">
                                        <div class="testi-card_content">
                                            <div class="testi-card_avater">
                                                <img src="assets/img/testimonial/testi1-3.png" alt="img">
                                            </div>
                                            <h3 class="testi-card_name">Brooklyn Simmons</h3>
                                            <span class="testi-card_desig">Video Gamer</span>
                                        </div>
                                        <div class="quote-icon icon-masking">
                                            <span class="mask-icon" data-mask-src="assets/img/icon/quote1-1.svg"></span>
                                            <img src="assets/img/icon/quote1-1.svg" alt="icon">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testi-card" data-bg-src="assets/img/bg/testi-card-bg1-1.png">
                                    <p class="testi-card_text">“Successful esport team exhibit strong communication strategic coordination & individual player skill. Team chemist effective coaching, & adaptability to changing meats”</p>
                                    <div class="testi-card_profile">
                                        <div class="testi-card_content">
                                            <div class="testi-card_avater">
                                                <img src="assets/img/testimonial/testi1-2.png" alt="img">
                                            </div>
                                            <h3 class="testi-card_name">Jasemin Jui</h3>
                                            <span class="testi-card_desig">Video Gamer</span>
                                        </div>
                                        <div class="quote-icon icon-masking">
                                            <span class="mask-icon" data-mask-src="assets/img/icon/quote1-1.svg"></span>
                                            <img src="assets/img/icon/quote1-1.svg" alt="icon">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="slider-pagination"></div>
                    </div>
                    <button data-slider-prev="#testiSlide1" class="slider-arrow style2 slider-prev"><i class="far fa-arrow-left"></i></button>
                    <button data-slider-next="#testiSlide1" class="slider-arrow style2 slider-next"><i class="far fa-arrow-right"></i></button>
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
<!--==============================
Blog Area  
==============================-->
<section class="overflow-hidden space-bottom" id="blog-sec">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title style3">
                <span class="sub-title-shape icon-masking">
                    <span class="mask-icon" data-mask-src="assets/img/bg/section-title-bg.svg"></span>
                </span>
                Latest News
            </span>
            <h2 class="sec-title mb-0">Stay Updated With Our Blog</h2>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider3" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="blog-card style3" data-mask-src="assets/img/blog/blog_card3_bg.jpg">
                            <div class="blog-img" data-mask-src="assets/img/blog/blog_card3_img-shape.jpg">
                                <a href="/blog_Details">
                                    <img src="assets/img/blog/blog_3_1.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="fal fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="fal fa-calendar"></i>30 Nov, 2024</a>
                                </div>

                                <h3 class="box-title"><a href="/blog_Details">Strategies for Dominating Your Favorite Game</a></h3>
                                <a href="/blog_Details" class="link-btn style2">READ MORE <i class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card style3" data-mask-src="assets/img/blog/blog_card3_bg.jpg">
                            <div class="blog-img" data-mask-src="assets/img/blog/blog_card3_img-shape.jpg">
                                <a href="/blog_Details">
                                    <img src="assets/img/blog/blog_3_2.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="fal fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="fal fa-calendar"></i>16 March, 2024</a>
                                </div>

                                <h3 class="box-title"><a href="/blog_Details">Breaking Barriers and Shaping the Future</a></h3>
                                <a href="/blog_Details" class="link-btn style2">READ MORE <i class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card style3" data-mask-src="assets/img/blog/blog_card3_bg.jpg">
                            <div class="blog-img" data-mask-src="assets/img/blog/blog_card3_img-shape.jpg">
                                <a href="/blog_Details">
                                    <img src="assets/img/blog/blog_3_3.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="fal fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="fal fa-calendar"></i>17 June, 2024</a>
                                </div>

                                <h3 class="box-title"><a href="/blog_Details">Taking Customization to the Next Level</a></h3>
                                <a href="/blog_Details" class="link-btn style2">READ MORE <i class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card style3" data-mask-src="assets/img/blog/blog_card3_bg.jpg">
                            <div class="blog-img" data-mask-src="assets/img/blog/blog_card3_img-shape.jpg">
                                <a href="/blog_Details">
                                    <img src="assets/img/blog/blog_3_1.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="fal fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="fal fa-calendar"></i>30 Nov, 2024</a>
                                </div>

                                <h3 class="box-title"><a href="/blog_Details">Strategies for Dominating Your Favorite Game</a></h3>
                                <a href="/blog_Details" class="link-btn style2">READ MORE <i class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card style3" data-mask-src="assets/img/blog/blog_card3_bg.jpg">
                            <div class="blog-img" data-mask-src="assets/img/blog/blog_card3_img-shape.jpg">
                                <a href="/blog_Details">
                                    <img src="assets/img/blog/blog_3_2.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="fal fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="fal fa-calendar"></i>16 March, 2024</a>
                                </div>

                                <h3 class="box-title"><a href="/blog_Details">Breaking Barriers and Shaping the Future</a></h3>
                                <a href="/blog_Details" class="link-btn style2">READ MORE <i class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card style3" data-mask-src="assets/img/blog/blog_card3_bg.jpg">
                            <div class="blog-img" data-mask-src="assets/img/blog/blog_card3_img-shape.jpg">
                                <a href="/blog_Details">
                                    <img src="assets/img/blog/blog_3_3.jpg" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="fal fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="fal fa-calendar"></i>17 June, 2024</a>
                                </div>

                                <h3 class="box-title"><a href="/blog_Details">Taking Customization to the Next Level</a></h3>
                                <a href="/blog_Details" class="link-btn style2">READ MORE <i class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button data-slider-prev="#blogSlider3" class="slider-arrow style2 slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#blogSlider3" class="slider-arrow style2 slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section><!--==============================
Newsletter Area  
==============================-->
<div class="subscribe-area-1 position-relative z-index-common" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
    <div class="container ">
        <div class="subscribe-wrap1" data-bg-src="assets/img/bg/subscribe1-bg-shape.png">
            <div class="row align-items-center gy-30">
                <div class="col-xl-6">
                    <div class="title-area mb-0 text-xl-start text-center">
                        <h2 class="sec-title">Subscribe For Our Newsletter</h2>
                        <p class="sec-text mt-25">Connect With Us For Gaming Update.</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <form class="newsletter-form">
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Enter Email Address.." required="">
                            <button type="submit" class="th-btn">SUBSCRIBE NOW <i class="far fa-arrow-right ms-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection