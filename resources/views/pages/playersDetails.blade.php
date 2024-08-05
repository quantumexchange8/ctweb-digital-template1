@extends('layout.master')

@section('content')
<div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">PLAYER DETAILS</h1>
            <ul class="breadcumb-menu">
                <li><a href="/home_Esports">Home</a></li>
                <li>PLAYER DETAILS</li>
            </ul>
        </div>
    </div>
</div><!--==============================
Team Area  
==============================-->
<section class="space">
    <div class="container">
        <div class="row gy-80">
            <div class="col-xl-6">
                <div class="about-card-img">
                    <img src="assets/img/team/team_inner_1.png" alt="team image">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="team-about-card">
                    <div class="title-area mb-0">
                        <span class="sub-title"># Information</span>
                        <h2 class="sec-title">Max Alexis</h2>
                    </div>
                    <p class="about-card_text mt-30 mb-25">Successful esports teams exhibit strong communication, strategic coordination, and individual player skills. Team chemistry, effective coaching, and adaptability to changing meats.</p>
                    <div class="team-info-list">
                        <ul>
                            <li>Founded: <span>2023</span></li>
                            <li>Ownership: <span>Public</span></li>
                            <li>Headquarters: <span>Berlin, Germany</span></li>
                            <li>Address: <span>20/A Neuss Nordrhe-Westia</span></li>
                        </ul>
                    </div>
                    <div class="team-social mt-25">
                        <h5 class="fw-semibold text-white">Follow <span class="text-theme">With Me:</span></h5>
                        <div class="th-social style-mask">
                            <a class="facebook" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="twitter" href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a class="instagram" href="https://www.instagram.com/">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="linkedin" href="https://www.linkedin.com/"><i class="fab fa-linkedin"></i></a>
                            <a class="google-play" href="https://www.google.com/">
                                <img src="assets/img/icon/google-playstore-icon.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-6">
                <h3 class="text-white mt-n2 mb-20">About Me</h3>
                <p class="mb-30">Balancing screen time involves taking regular breaks, practicing the 20-20-20 rule (looking at something 20 feet away for 20 seconds every 20 minutes), and incorporating physical activity into daily routines. Establishing a balance between gaming and other activities is crucial for overall well-being.</p>
                <div class="skill-feature">
                    <h3 class="skill-feature_title">ANGRY POWER <span class="skill-feature_subtitle">17th Rank</span></h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 45%"></div>
                        <div class="progress-bar lose" role="progressbar" style="width: 30%"></div>
                    </div>
                    <div class="progress-value-wrap">
                        <div class="progress-value">WINS <span class="counter-number">45</span>%</div>
                        <div class="progress-value draw">DRAWS <span class="counter-number">25</span>%</div>
                        <div class="progress-value lose">LOSSES <span class="counter-number">30</span>%</div>
                    </div>
                </div>

                <div class="skill-feature">
                    <h3 class="skill-feature_title">DRIVE WORLD <span class="skill-feature_subtitle">22th Rank</span></h3>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 55%"></div>
                        <div class="progress-bar lose" role="progressbar" style="width: 20%"></div>
                    </div>
                    <div class="progress-value-wrap">
                        <div class="progress-value">WINS <span class="counter-number">55</span>%</div>
                        <div class="progress-value draw">DRAWS <span class="counter-number">25</span>%</div>
                        <div class="progress-value lose">LOSSES <span class="counter-number">20</span>%</div>
                    </div>
                </div>

            </div>
            <div class="col-xl-6">
                <div class="team-about-card">
                    <h3 class="text-white mt-n2 mb-20">YouTube / Twitch Video</h3>
                    <div class="video-grid-wrap">
                        <div class="th-video">
                            <img src="assets/img/gallery/gallery_2_1.jpg" alt="Gallery Image">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video style5"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                        <div class="th-video">
                            <img src="assets/img/gallery/gallery_2_2.jpg" alt="Gallery Image">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video style5"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                        <div class="th-video">
                            <img src="assets/img/gallery/gallery_2_3.jpg" alt="Gallery Image">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video style5"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                        <div class="th-video">
                            <img src="assets/img/gallery/gallery_2_4.jpg" alt="Gallery Image">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video style5"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                        <div class="th-video">
                            <img src="assets/img/gallery/gallery_2_5.jpg" alt="Gallery Image">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video style5"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                        <div class="th-video">
                            <img src="assets/img/gallery/gallery_2_6.jpg" alt="Gallery Image">
                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video style5"><i class="fa-sharp fa-solid fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
@endsection