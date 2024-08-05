@extends('layout.master')

@section('content')
<div class="th-hero-wrapper hero-4" data-bg-src="assets/img/hero/hero-bg4-1.png" id="hero">
    <div class="container th-container5">
        <div class="hero-style4 text-center" data-bg-src="assets/img/hero/hero-bg4-2.png" data-mask-src="assets/img/hero/hero-bg4-2.png">
            <h1 class="hero-title custom-anim-top wow" data-wow-duration="1.2s" data-wow-delay="0.2s">
                Skarlet
            </h1>
            <div class="hero-thumb4-1 custom-anim-top wow" data-wow-duration="1.2s" data-wow-delay="0.2s">
                <div class="character">
                    <img src="assets/img/hero/hero-4-1.png" alt="img">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="slider-area hero-game-slider4-1">
                    <div class="swiper th-slider" id="heroGameSlider4-1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"1"}}}'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tournament-card style5">
                                    <div class="tournament-card-shape" data-bg-src="assets/img/hero/hero-slider-bg-shape4-1.png"></div>
                                    <div class="tournament-player-wrap">
                                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                                            <img src="assets/img/tournament/1-2.png" alt="tournament image">
                                        </div>
                                        <div class="card-title-wrap">
                                            <h6 class="tournament-card-subtitle">Online Game</h6>
                                            <h3 class="tournament-card-title"><a href="/tournament_Details">Lions King</a></h3>
                                        </div>
                                    </div>
                                    <div class="tournament-card-versus">
                                        <img src="assets/img/tournament/game-vs2.svg" alt="tournament image">
                                    </div>
                                    <div class="tournament-player-wrap style2">
                                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                                            <img src="assets/img/tournament/1-4.png" alt="tournament image">
                                        </div>
                                        <div class="card-title-wrap">
                                            <h6 class="tournament-card-subtitle">Online Game</h6>
                                            <h3 class="tournament-card-title"><a href="/tournament_Details">Cyberpunk</a></h3>
                                        </div>
                                    </div>
                                    <div class="tournament-card-content">
                                        <div class="tournament-card-details">
                                            <h6 class="tournament-card-time">6:00 PM</h6>
                                            <p class="tournament-card-date">23 February, 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tournament-card style5">
                                    <div class="tournament-card-shape" data-bg-src="assets/img/hero/hero-slider-bg-shape4-1.png"></div>
                                    <div class="tournament-player-wrap">
                                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                                            <img src="assets/img/tournament/1-1.png" alt="tournament image">
                                        </div>
                                        <div class="card-title-wrap">
                                            <h6 class="tournament-card-subtitle">Online Game</h6>
                                            <h3 class="tournament-card-title"><a href="/tournament_Details">Pro Player</a></h3>
                                        </div>
                                    </div>
                                    <div class="tournament-card-versus">
                                        <img src="assets/img/tournament/game-vs2.svg" alt="tournament image">
                                    </div>
                                    <div class="tournament-player-wrap style2">
                                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                                            <img src="assets/img/tournament/1-3.png" alt="tournament image">
                                        </div>
                                        <div class="card-title-wrap">
                                            <h6 class="tournament-card-subtitle">Online Game</h6>
                                            <h3 class="tournament-card-title"><a href="/tournament_Details">Assassin</a></h3>
                                        </div>
                                    </div>
                                    <div class="tournament-card-content">
                                        <div class="tournament-card-details">
                                            <h6 class="tournament-card-time">7:00 PM</h6>
                                            <p class="tournament-card-date">24 February, 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tournament-card style5">
                                    <div class="tournament-card-shape" data-bg-src="assets/img/hero/hero-slider-bg-shape4-1.png"></div>
                                    <div class="tournament-player-wrap">
                                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                                            <img src="assets/img/tournament/1-5.png" alt="tournament image">
                                        </div>
                                        <div class="card-title-wrap">
                                            <h6 class="tournament-card-subtitle">Online Game</h6>
                                            <h3 class="tournament-card-title"><a href="/tournament_Details">The Gorilla</a></h3>
                                        </div>
                                    </div>
                                    <div class="tournament-card-versus">
                                        <img src="assets/img/tournament/game-vs2.svg" alt="tournament image">
                                    </div>
                                    <div class="tournament-player-wrap style2">
                                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                                            <img src="assets/img/tournament/1-6.png" alt="tournament image">
                                        </div>
                                        <div class="card-title-wrap">
                                            <h6 class="tournament-card-subtitle">Online Game</h6>
                                            <h3 class="tournament-card-title"><a href="/tournament_Details">Bad Gamer</a></h3>
                                        </div>
                                    </div>
                                    <div class="tournament-card-content">
                                        <div class="tournament-card-details">
                                            <h6 class="tournament-card-time">8:00 PM</h6>
                                            <p class="tournament-card-date">25 February, 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="tournament-card style5">
                                    <div class="tournament-card-shape" data-bg-src="assets/img/hero/hero-slider-bg-shape4-1.png"></div>
                                    <div class="tournament-player-wrap">
                                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                                            <img src="assets/img/tournament/1-9.png" alt="tournament image">
                                        </div>
                                        <div class="card-title-wrap">
                                            <h6 class="tournament-card-subtitle">Online Game</h6>
                                            <h3 class="tournament-card-title"><a href="/tournament_Details">Hacker King</a></h3>
                                        </div>
                                    </div>
                                    <div class="tournament-card-versus">
                                        <img src="assets/img/tournament/game-vs2.svg" alt="tournament image">
                                    </div>
                                    <div class="tournament-player-wrap style2">
                                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                                            <img src="assets/img/tournament/1-10.png" alt="tournament image">
                                        </div>
                                        <div class="card-title-wrap">
                                            <h6 class="tournament-card-subtitle">Online Game</h6>
                                            <h3 class="tournament-card-title"><a href="/tournament_Details">Holigans</a></h3>
                                        </div>
                                    </div>
                                    <div class="tournament-card-content">
                                        <div class="tournament-card-details">
                                            <h6 class="tournament-card-time">9:00 PM</h6>
                                            <p class="tournament-card-date">26 February, 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <button data-slider-prev="#heroGameSlider4-1" class="slider-arrow style3 slider-prev"><i class="fas fa-angle-left"></i></button>
                    <button data-slider-next="#heroGameSlider4-1" class="slider-arrow style3 slider-next"><i class="fas fa-angle-right"></i></button>
                </div>
                <div class="btn-wrap mt-40 justify-content-center">
                    <a href="/game" class="th-btn">WATCH GAME <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--======== / Hero Section ========-->
<!--==============================
Game Area  
==============================-->
<section class="game-area-3 space overflow-hidden">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-auto">
                <div class="title-area">
                    <span class="sub-title style3">
                        <span class="sub-title-shape icon-masking">
                            <span class="mask-icon" data-mask-src="assets/img/bg/section-title-bg.svg"></span>
                        </span>
                        Our Latest Game
                    </span>
                    <h2 class="sec-title">Best Tournaments</h2>
                    <div class="shadow-title">Tournaments</div>
                </div>
            </div>
            <div class="col-md-auto">
                <div class="sec-btn text-start">
                    <a href="/game" class="th-btn">SEE ALL GAME <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="game-card style4">
                    <div class="game-card-img" data-mask-src="assets/img/game/game_card4_img-shape.jpg">
                        <a href="/game_Details">
                            <img src="assets/img/game/4-1.png" alt="game image">
                        </a>
                    </div>
                    <div class="game-card-details">
                        <h3 class="box-title"><a href="/game_Details">Counter-Strike</a></h3>
                        <p class="game-content">
                            <img src="assets/img/game/game-award-icon.svg" alt="Icon">
                            10 Tournaments
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="game-card style4">
                    <div class="game-card-img" data-mask-src="assets/img/game/game_card4_img-shape.jpg">
                        <a href="/game_Details">
                            <img src="assets/img/game/4-2.png" alt="game image">
                        </a>
                    </div>
                    <div class="game-card-details">
                        <h3 class="box-title"><a href="/game_Details">Valorant Games</a></h3>
                        <p class="game-content">
                            <img src="assets/img/game/game-award-icon.svg" alt="Icon">
                            10 Tournaments
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="game-card style4">
                    <div class="game-card-img" data-mask-src="assets/img/game/game_card4_img-shape.jpg">
                        <a href="/game_Details">
                            <img src="assets/img/game/4-3.png" alt="game image">
                        </a>
                    </div>
                    <div class="game-card-details">
                        <h3 class="box-title"><a href="/game_Details">League of Legends</a></h3>
                        <p class="game-content">
                            <img src="assets/img/game/game-award-icon.svg" alt="Icon">
                            10 Tournaments
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="game-card style4">
                    <div class="game-card-img" data-mask-src="assets/img/game/game_card4_img-shape.jpg">
                        <a href="/game_Details">
                            <img src="assets/img/game/4-4.png" alt="game image">
                        </a>
                    </div>
                    <div class="game-card-details">
                        <h3 class="box-title"><a href="/game_Details">Rocket League</a></h3>
                        <p class="game-content">
                            <img src="assets/img/game/game-award-icon.svg" alt="Icon">
                            10 Tournaments
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section><!--==============================
Video Area  
==============================-->
<div class="video-area-3 space-bottom overflow-hidden">
    <div class="container th-container5">
        <div class="row justify-content-between">
            <div class="col-lg-12">
                <div class="video-box3 mb-50 mb-xl-0 custom-anim-top wow">
                    <div class="filter-active-cat1">
                        <div class="filter-item cat1">
                            <img src="assets/img/video/4-1.png" alt="img">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                        <div class="filter-item cat2">
                            <img src="assets/img/video/4-2.png" alt="img">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                        <div class="filter-item cat3">
                            <img src="assets/img/video/4-3.png" alt="img">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn style4 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                    </div>
                    <div class="video-tab-btn filter-menu-cat-active">
                        <button data-filter=".cat1" class="active" type="button">Twitch</button>
                        <button data-filter=".cat2" type="button">YouTube</button>
                        <button data-filter=".cat3" type="button">Discord</button>
                    </div>
                </div>
                <div class="video-shadow-title shadow-title">
                    Watch Livestream
                </div>
            </div>
        </div>
    </div>
</div><!--==============================
Tournament Area  
==============================-->
<section class="tournament-sec-5 space overflow-hidden" data-bg-src="assets/img/bg/tournament-sec5-bg.png" data-overlay="title">
    <div class="tournament-sec-bg-shape" data-bg-src="assets/img/bg/tournament-sec4-bg-shape.png"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="title-area text-center custom-anim-top wow" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <span class="sub-title style3">
                        <span class="sub-title-shape icon-masking">
                            <span class="mask-icon" data-mask-src="assets/img/bg/section-title-bg.svg"></span>
                        </span>
                        Tournament Game
                    </span>
                    <h2 class="sec-title">Tournament Trending Match</h2>
                </div>
            </div>
            <div class="col-lg-auto custom-anim-top wow">
                <div class="game-filter-btn style2 filter-menu filter-menu-active">
                    <button data-filter=".tour-cat1" class="tab-btn" type="button">
                        Upcoming Games
                    </button>
                    <button data-filter=".tour-all" class="tab-btn active" type="button">
                        All Games
                    </button>
                    <button data-filter=".tour-cat2" class="tab-btn" type="button">
                        Finished Games
                    </button>
                </div>
            </div>
        </div>
        <div class="row gy-4 filter-active">
            <div class="col-lg-6 col-md-12 filter-item tour-cat1 tour-all">
                <div class="tournament-card style5 style5-2">
                    <div class="tournament-card-shape" data-bg-src="assets/img/tournament/tournament-card6-bg.png"></div>
                    <div class="tournament-card-shape2" data-bg-src="assets/img/tournament/tournament-card6-2-bg.png"></div>
                    <div class="tournament-player-wrap">
                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                            <img src="assets/img/tournament/1-2.png" alt="tournament image">
                        </div>
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Online Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Lions King</a></h3>
                        </div>
                    </div>
                    <div class="tournament-card-versus">
                        <img src="assets/img/tournament/game-vs2.svg" alt="tournament image">
                    </div>
                    <div class="tournament-player-wrap style2">
                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                            <img src="assets/img/tournament/1-4.png" alt="tournament image">
                        </div>
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Online Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Cyberpunk</a></h3>
                        </div>
                    </div>
                    <div class="tournament-card-content">
                        <div class="tournament-card-details">
                            <h6 class="tournament-card-time">6:00 PM</h6>
                            <p class="tournament-card-date">23 February, 2024</p>
                        </div>
                        <div class="btn-wrap">
                            <a href="/tournament_Details" class="th-btn style-border3">
                                <span class="btn-border">
                                    WATCH STREAM <i class="fa-solid fa-arrow-right ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 filter-item tour-cat2 tour-all">
                <div class="tournament-card style5 style5-2">
                    <div class="tournament-card-shape" data-bg-src="assets/img/tournament/tournament-card6-bg.png"></div>
                    <div class="tournament-card-shape2" data-bg-src="assets/img/tournament/tournament-card6-2-bg.png"></div>
                    <div class="tournament-player-wrap">
                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                            <img src="assets/img/tournament/1-1.png" alt="tournament image">
                        </div>
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Online Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Pro Player</a></h3>
                        </div>
                    </div>
                    <div class="tournament-card-versus">
                        <img src="assets/img/tournament/game-vs2.svg" alt="tournament image">
                    </div>
                    <div class="tournament-player-wrap style2">
                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                            <img src="assets/img/tournament/1-3.png" alt="tournament image">
                        </div>
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Online Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Assassin</a></h3>
                        </div>
                    </div>
                    <div class="tournament-card-content">
                        <div class="tournament-card-details">
                            <h6 class="tournament-card-time">7:00 PM</h6>
                            <p class="tournament-card-date">24 February, 2024</p>
                        </div>
                        <div class="btn-wrap">
                            <a href="/tournament_Details" class="th-btn style-border3">
                                <span class="btn-border">
                                    WATCH STREAM <i class="fa-solid fa-arrow-right ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 filter-item tour-cat1 tour-all">
                <div class="tournament-card style5 style5-2">
                    <div class="tournament-card-shape" data-bg-src="assets/img/tournament/tournament-card6-bg.png"></div>
                    <div class="tournament-card-shape2" data-bg-src="assets/img/tournament/tournament-card6-2-bg.png"></div>
                    <div class="tournament-player-wrap">
                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                            <img src="assets/img/tournament/1-5.png" alt="tournament image">
                        </div>
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Online Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">The Gorilla</a></h3>
                        </div>
                    </div>
                    <div class="tournament-card-versus">
                        <img src="assets/img/tournament/game-vs2.svg" alt="tournament image">
                    </div>
                    <div class="tournament-player-wrap style2">
                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                            <img src="assets/img/tournament/1-6.png" alt="tournament image">
                        </div>
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Online Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Bad Gamer</a></h3>
                        </div>
                    </div>
                    <div class="tournament-card-content">
                        <div class="tournament-card-details">
                            <h6 class="tournament-card-time">8:00 PM</h6>
                            <p class="tournament-card-date">25 February, 2024</p>
                        </div>
                        <div class="btn-wrap">
                            <a href="/tournament_Details" class="th-btn style-border3">
                                <span class="btn-border">
                                    WATCH STREAM <i class="fa-solid fa-arrow-right ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 filter-item tour-cat2 tour-all">
                <div class="tournament-card style5 style5-2">
                    <div class="tournament-card-shape" data-bg-src="assets/img/tournament/tournament-card6-bg.png"></div>
                    <div class="tournament-card-shape2" data-bg-src="assets/img/tournament/tournament-card6-2-bg.png"></div>
                    <div class="tournament-player-wrap">
                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                            <img src="assets/img/tournament/1-9.png" alt="tournament image">
                        </div>
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Online Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Hacker King</a></h3>
                        </div>
                    </div>
                    <div class="tournament-card-versus">
                        <img src="assets/img/tournament/game-vs2.svg" alt="tournament image">
                    </div>
                    <div class="tournament-player-wrap style2">
                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                            <img src="assets/img/tournament/1-10.png" alt="tournament image">
                        </div>
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Online Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Holigans</a></h3>
                        </div>
                    </div>
                    <div class="tournament-card-content">
                        <div class="tournament-card-details">
                            <h6 class="tournament-card-time">9:00 PM</h6>
                            <p class="tournament-card-date">26 February, 2024</p>
                        </div>
                        <div class="btn-wrap">
                            <a href="/tournament_Details" class="th-btn style-border3">
                                <span class="btn-border">
                                    WATCH STREAM <i class="fa-solid fa-arrow-right ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 filter-item tour-cat1 tour-all">
                <div class="tournament-card style5 style5-2">
                    <div class="tournament-card-shape" data-bg-src="assets/img/tournament/tournament-card6-bg.png"></div>
                    <div class="tournament-card-shape2" data-bg-src="assets/img/tournament/tournament-card6-2-bg.png"></div>
                    <div class="tournament-player-wrap">
                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                            <img src="assets/img/tournament/1-14.png" alt="tournament image">
                        </div>
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Online Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Master Panda</a></h3>
                        </div>
                    </div>
                    <div class="tournament-card-versus">
                        <img src="assets/img/tournament/game-vs2.svg" alt="tournament image">
                    </div>
                    <div class="tournament-player-wrap style2">
                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                            <img src="assets/img/tournament/1-7.png" alt="tournament image">
                        </div>
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Online Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Hinja 2X</a></h3>
                        </div>
                    </div>
                    <div class="tournament-card-content">
                        <div class="tournament-card-details">
                            <h6 class="tournament-card-time">9:30 PM</h6>
                            <p class="tournament-card-date">20 March, 2024</p>
                        </div>
                        <div class="btn-wrap">
                            <a href="/tournament_Details" class="th-btn style-border3">
                                <span class="btn-border">
                                    WATCH STREAM <i class="fa-solid fa-arrow-right ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 filter-item tour-cat2 tour-all">
                <div class="tournament-card style5 style5-2">
                    <div class="tournament-card-shape" data-bg-src="assets/img/tournament/tournament-card6-bg.png"></div>
                    <div class="tournament-card-shape2" data-bg-src="assets/img/tournament/tournament-card6-2-bg.png"></div>
                    <div class="tournament-player-wrap">
                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                            <img src="assets/img/tournament/1-11.png" alt="tournament image">
                        </div>
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Online Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Cools Gamer</a></h3>
                        </div>
                    </div>
                    <div class="tournament-card-versus">
                        <img src="assets/img/tournament/game-vs2.svg" alt="tournament image">
                    </div>
                    <div class="tournament-player-wrap style2">
                        <div class="tournament-card-img" data-bg-src="assets/img/tournament/logo-bg4.png">
                            <img src="assets/img/tournament/1-12.png" alt="tournament image">
                        </div>
                        <div class="card-title-wrap">
                            <h6 class="tournament-card-subtitle">Online Game</h6>
                            <h3 class="tournament-card-title"><a href="/tournament_Details">Casino Star</a></h3>
                        </div>
                    </div>
                    <div class="tournament-card-content">
                        <div class="tournament-card-details">
                            <h6 class="tournament-card-time">10:00 PM</h6>
                            <p class="tournament-card-date">23 March, 2024</p>
                        </div>
                        <div class="btn-wrap">
                            <a href="/tournament_Details" class="th-btn style-border3">
                                <span class="btn-border">
                                    WATCH STREAM <i class="fa-solid fa-arrow-right ms-2"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="btn-wrap mt-60 justify-content-center">
            <a href="/contact" class="th-btn">
                LOAD MORE <i class="fa-solid fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</section>
<!--==============================
Cta Area  
==============================-->
<section class="cta-area-4" data-bg-src="assets/img/bg/cta-sec4-bg.png">
    <div class="cta4-sec-thumb shape-mockup" data-bottom="0" data-left="6%"><img src="assets/img/normal/cta-sec4-thumb.png" alt="img"></div>
    <div class="container">
        <div class="row gy-30 justify-content-xl-between justify-content-center align-items-center">
            <div class="col-xl-5">
                <div class="title-area mb-0 text-xl-start text-center">
                    <h2 class="sec-title">Climb Your Ranking to the top of the Rankings</h2>
                </div>
            </div>
            <div class="col-xl-auto">
                <div class="btn-wrap g-0 justify-content-xl-end justify-content-center">
                    <a href="/tournament" class="th-btn">
                        VIEW RANK <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                    <a href="/contact" class="th-btn style7">
                        CONTACT US <i class="fa-solid fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Cta Area  
==============================-->
<section class="commando-area-1 space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <div class="title-area text-center">
                    <span class="sub-title style3">
                        <span class="sub-title-shape icon-masking">
                            <span class="mask-icon" data-mask-src="assets/img/bg/section-title-bg.svg"></span>
                        </span>
                        Our Commander
                    </span>
                    <h2 class="sec-title">Choose Your Favorite Commander</h2>
                    <div class="shadow-title">Commander</div>
                    <p>Gamers can join local gaming meetups, participate in gaming events, or connect with like-minded individuals</p>
                </div>
            </div>
        </div>
        <div class="row gy-30 justify-content-center">
            <div class="col-xl-4 col-lg-6">
                <div class="commando-card">
                    <div class="commando-card-bg-shape" data-bg-src="assets/img/commando/commando-card-bg.png"></div>
                    <div class="commando-card-content">
                        <div class="commando-thumb">
                            <img src="assets/img/commando/1-1.png" alt="img">
                        </div>
                        <div class="commando-card-details">
                            <h4 class="commando-card-title">PAO</h4>
                            <div class="star-ratting">
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="commando-card-text">Baby Dragooned</p>
                        </div>
                    </div>
                    <ul class="commando-list-wrap">
                        <li class="commando-single-list">
                            <div class="icon">
                                <img src="assets/img/commando/commando-icon1-1.svg" alt="icon">
                            </div>
                            <div class="text">30</div>
                        </li>
                        <li class="commando-single-list">
                            <div class="icon">
                                <img src="assets/img/commando/commando-icon1-2.svg" alt="icon">
                            </div>
                            <div class="text">22</div>
                        </li>
                        <li class="commando-single-list">
                            <div class="icon">
                                <img src="assets/img/commando/commando-icon1-3.svg" alt="icon">
                            </div>
                            <div class="text">35</div>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col-xl-4 col-lg-6">
                <div class="commando-card">
                    <div class="commando-card-bg-shape" data-bg-src="assets/img/commando/commando-card-bg.png"></div>
                    <div class="commando-card-content">
                        <div class="commando-thumb">
                            <img src="assets/img/commando/1-2.png" alt="img">
                        </div>
                        <div class="commando-card-details">
                            <h4 class="commando-card-title">YUKI</h4>
                            <div class="star-ratting">
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                            </div>
                            <p class="commando-card-text">Magical Fox</p>
                        </div>
                    </div>
                    <ul class="commando-list-wrap">
                        <li class="commando-single-list">
                            <div class="icon">
                                <img src="assets/img/commando/commando-icon1-1.svg" alt="icon">
                            </div>
                            <div class="text">30</div>
                        </li>
                        <li class="commando-single-list">
                            <div class="icon">
                                <img src="assets/img/commando/commando-icon1-2.svg" alt="icon">
                            </div>
                            <div class="text">22</div>
                        </li>
                        <li class="commando-single-list">
                            <div class="icon">
                                <img src="assets/img/commando/commando-icon1-3.svg" alt="icon">
                            </div>
                            <div class="text">35</div>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="col-xl-4 col-lg-6">
                <div class="commando-card">
                    <div class="commando-card-bg-shape" data-bg-src="assets/img/commando/commando-card-bg.png"></div>
                    <div class="commando-card-content">
                        <div class="commando-thumb">
                            <img src="assets/img/commando/1-1.png" alt="img">
                        </div>
                        <div class="commando-card-details">
                            <h4 class="commando-card-title">ABE</h4>
                            <div class="star-ratting">
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star active"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="commando-card-text">Shaolin Panda</p>
                        </div>
                    </div>
                    <ul class="commando-list-wrap">
                        <li class="commando-single-list">
                            <div class="icon">
                                <img src="assets/img/commando/commando-icon1-1.svg" alt="icon">
                            </div>
                            <div class="text">30</div>
                        </li>
                        <li class="commando-single-list">
                            <div class="icon">
                                <img src="assets/img/commando/commando-icon1-2.svg" alt="icon">
                            </div>
                            <div class="text">22</div>
                        </li>
                        <li class="commando-single-list">
                            <div class="icon">
                                <img src="assets/img/commando/commando-icon1-3.svg" alt="icon">
                            </div>
                            <div class="text">35</div>
                        </li>
                    </ul>
                </div>
            </div>



        </div>
    </div>
</section>
<!--==============================
Cta Area  
==============================-->
<section class="cta-area-5" data-bg-src="assets/img/bg/cta-wrap5-bg-shape.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="cta-wrap5 space">
                    <div class="title-area mb-20">
                        <span class="sub-title style3">
                            <span class="sub-title-shape icon-masking">
                                <span class="mask-icon" data-mask-src="assets/img/bg/section-title-bg.svg"></span>
                            </span>
                            Download Game
                        </span>
                        <h2 class="sec-title">10000+ Games Ready To Download For You</h2>
                        <div class="shadow-title">Download</div>
                    </div>
                    <p class="mb-35">Emerging trends in the esports industry include the growth of mobile esports, the integration of virtual reality in gaming experiences, and the increasing involvement of traditional sports organizations in esports partnerships.</p>
                    <div class="btn-wrap">
                        <a href="#"><img src="assets/img/normal/footer-apple-btn2.png" alt="img"></a>
                        <a href="#"><img src="assets/img/normal/footer-playstore-btn2.png" alt="img"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 align-self-end">
                <div class="cta-thumb5">
                    <img src="assets/img/normal/cta5-1.png" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Blog Area  
==============================-->
<section class="overflow-hidden position-relative space-top" id="blog-sec">
    <div class="blog-sec4-bg-shape" data-bg-src="assets/img/bg/blog-sec4-bg-shape.png"></div>
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title style3">
                <span class="sub-title-shape icon-masking">
                    <span class="mask-icon" data-mask-src="assets/img/bg/section-title-bg.svg"></span>
                </span>
                Latest News
            </span>
            <h2 class="sec-title">Stay Updated With Our Blog</h2>
            <div class="shadow-title">Latest News</div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider4" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="blog-card style4" data-bg-src="assets/img/blog/blog_card4_bg.jpg">
                            <div class="blog-thumb-wrap">
                                <div class="blog-img" data-mask-src="assets/img/blog/blog_card4_img-shape.jpg">
                                    <a href="/blog_Details">
                                        <img src="assets/img/blog/blog_4_1.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-date" data-bg-src="assets/img/blog/blog_card4_date-bg.jpg"><span>15</span> FEBRUARY</div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="fas fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="fas fa-tag"></i>Video Game</a>
                                </div>
                                <h3 class="box-title"><a href="/blog_Details">Strategies for Dominating
                                        Your Favorite Game</a></h3>
                                <a href="/blog_Details" class="link-btn style2">READ MORE <i class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card style4" data-bg-src="assets/img/blog/blog_card4_bg.jpg">
                            <div class="blog-thumb-wrap">
                                <div class="blog-img" data-mask-src="assets/img/blog/blog_card4_img-shape.jpg">
                                    <a href="/blog_Details">
                                        <img src="assets/img/blog/blog_4_2.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-date" data-bg-src="assets/img/blog/blog_card4_date-bg.jpg"><span>21</span> FEBRUARY</div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="fas fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="fas fa-tag"></i>Video Game</a>
                                </div>
                                <h3 class="box-title"><a href="/blog_Details">Breaking Barriers and Shaping
                                        the Future Game</a></h3>
                                <a href="/blog_Details" class="link-btn style2">READ MORE <i class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card style4" data-bg-src="assets/img/blog/blog_card4_bg.jpg">
                            <div class="blog-thumb-wrap">
                                <div class="blog-img" data-mask-src="assets/img/blog/blog_card4_img-shape.jpg">
                                    <a href="/blog_Details">
                                        <img src="assets/img/blog/blog_4_1.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-date" data-bg-src="assets/img/blog/blog_card4_date-bg.jpg"><span>26</span> MARCH</div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="fas fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="fas fa-tag"></i>Video Game</a>
                                </div>
                                <h3 class="box-title"><a href="/blog_Details">Strategies for Dominating
                                        Your Favorite Game</a></h3>
                                <a href="/blog_Details" class="link-btn style2">READ MORE <i class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card style4" data-bg-src="assets/img/blog/blog_card4_bg.jpg">
                            <div class="blog-thumb-wrap">
                                <div class="blog-img" data-mask-src="assets/img/blog/blog_card4_img-shape.jpg">
                                    <a href="/blog_Details">
                                        <img src="assets/img/blog/blog_4_2.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-date" data-bg-src="assets/img/blog/blog_card4_date-bg.jpg"><span>05</span> JULY</div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="/blog"><i class="fas fa-user"></i>By Jonson</a>
                                    <a href="/blog"><i class="fas fa-tag"></i>Video Game</a>
                                </div>
                                <h3 class="box-title"><a href="/blog_Details">Breaking Barriers and Shaping
                                        the Future Game</a></h3>
                                <a href="/blog_Details" class="link-btn style2">READ MORE <i class="fa-solid fa-arrow-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Brand Area  
==============================-->
<div class="space position-relative">
    <div class="brand-sec2-shape" data-bg-src="assets/img/brand/brand_sec2_bg.png"></div>
    <div class="container th-container5">
        <div class="row gy-4 justify-content-center">
            <div class="col-xxl-auto col-xl-3 col-lg-4 col-sm-6">
                <a href="#" class="brand-box">
                    <div class="brand-box-shape" data-bg-src="assets/img/brand/brand_2_bg.png"></div>
                    <div class="brand-box-shape2" data-bg-src="assets/img/brand/brand_2_1_bg.png"></div>
                    <img src="assets/img/brand/brand_2_1.png" alt="Brand Logo">
                </a>
            </div>
            <div class="col-xxl-auto col-xl-3 col-lg-4 col-sm-6">
                <a href="#" class="brand-box">
                    <div class="brand-box-shape" data-bg-src="assets/img/brand/brand_2_bg.png"></div>
                    <div class="brand-box-shape2" data-bg-src="assets/img/brand/brand_2_1_bg.png"></div>
                    <img src="assets/img/brand/brand_2_2.png" alt="Brand Logo">
                </a>
            </div>
            <div class="col-xxl-auto col-xl-3 col-lg-4 col-sm-6">
                <a href="#" class="brand-box">
                    <div class="brand-box-shape" data-bg-src="assets/img/brand/brand_2_bg.png"></div>
                    <div class="brand-box-shape2" data-bg-src="assets/img/brand/brand_2_1_bg.png"></div>
                    <img src="assets/img/brand/brand_2_3.png" alt="Brand Logo">
                </a>
            </div>
            <div class="col-xxl-auto col-xl-3 col-lg-4 col-sm-6">
                <a href="#" class="brand-box">
                    <div class="brand-box-shape" data-bg-src="assets/img/brand/brand_2_bg.png"></div>
                    <div class="brand-box-shape2" data-bg-src="assets/img/brand/brand_2_1_bg.png"></div>
                    <img src="assets/img/brand/brand_2_4.png" alt="Brand Logo">
                </a>
            </div>
            <div class="col-xxl-auto col-xl-3 col-lg-4 col-sm-6">
                <a href="#" class="brand-box">
                    <div class="brand-box-shape" data-bg-src="assets/img/brand/brand_2_bg.png"></div>
                    <div class="brand-box-shape2" data-bg-src="assets/img/brand/brand_2_1_bg.png"></div>
                    <img src="assets/img/brand/brand_2_5.png" alt="Brand Logo">
                </a>
            </div>
            <div class="col-xxl-auto col-xl-3 col-lg-4 col-sm-6">
                <a href="#" class="brand-box">
                    <div class="brand-box-shape" data-bg-src="assets/img/brand/brand_2_bg.png"></div>
                    <div class="brand-box-shape2" data-bg-src="assets/img/brand/brand_2_1_bg.png"></div>
                    <img src="assets/img/brand/brand_2_5.png" alt="Brand Logo">
                </a>
            </div>
            <div class="col-xxl-auto col-xl-3 col-lg-4 col-sm-6">
                <a href="#" class="brand-box">
                    <div class="brand-box-shape" data-bg-src="assets/img/brand/brand_2_bg.png"></div>
                    <div class="brand-box-shape2" data-bg-src="assets/img/brand/brand_2_1_bg.png"></div>
                    <img src="assets/img/brand/brand_2_4.png" alt="Brand Logo">
                </a>
            </div>
            <div class="col-xxl-auto col-xl-3 col-lg-4 col-sm-6">
                <a href="#" class="brand-box">
                    <div class="brand-box-shape" data-bg-src="assets/img/brand/brand_2_bg.png"></div>
                    <div class="brand-box-shape2" data-bg-src="assets/img/brand/brand_2_1_bg.png"></div>
                    <img src="assets/img/brand/brand_2_2.png" alt="Brand Logo">
                </a>
            </div>
            <div class="col-xxl-auto col-xl-3 col-lg-4 col-sm-6">
                <a href="#" class="brand-box">
                    <div class="brand-box-shape" data-bg-src="assets/img/brand/brand_2_bg.png"></div>
                    <div class="brand-box-shape2" data-bg-src="assets/img/brand/brand_2_1_bg.png"></div>
                    <img src="assets/img/brand/brand_2_3.png" alt="Brand Logo">
                </a>
            </div>
            <div class="col-xxl-auto col-xl-3 col-lg-4 col-sm-6">
                <a href="#" class="brand-box">
                    <div class="brand-box-shape" data-bg-src="assets/img/brand/brand_2_bg.png"></div>
                    <div class="brand-box-shape2" data-bg-src="assets/img/brand/brand_2_1_bg.png"></div>
                    <img src="assets/img/brand/brand_2_1.png" alt="Brand Logo">
                </a>
            </div>

        </div>
    </div>
</div>
@endsection