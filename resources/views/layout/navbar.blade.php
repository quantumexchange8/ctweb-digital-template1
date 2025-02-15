@if ((Request::is('/')) || (Request::is('home_Esports')))
<header class="th-header header-layout1">
    @endif
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                @if ((Request::is('/')) || (Request::is('home_Esports')))
                <div class="col-auto d-none d-lg-block">
                    <p class="header-notice"></p>
                    <div class="header-links">
                        <ul>
                            <li>
                                <div class="header-notice">Welcome to our <a href="/home_Esports">Current Tech</a> Esports team</div>
                            </li>
                            <li>
                                <div class="dropdown-link">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-globe"></i> English</a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                        <li>
                                            <a href="#">German</a>
                                            <a href="#">French</a>
                                            <a href="#">Italian</a>
                                            <a href="#">Latvian</a>
                                            <a href="#">Spanish</a>
                                            <a href="#">Greek</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="header-links">
                        <ul>
                            <li><a href="https://www.facebook.com/">Facebook</a></li>
                            <li><a href="https://www.twitter.com/">Twitter</a></li>
                            <li><a href="https://www.pinterest.com/">Pinterest</a></li>
                            <li><a href="https://www.instagram.com/">Instagram</a></li>
                        </ul>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    <header class="th-header header-default">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="/home_Esports">
                                <span data-mask-src="assets/img/logo.svg" class="logo-mask"></span>
                                <img src="assets/img/logo.svg" alt="Current Tech">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="/home_Esports">HOME</a>
                                    <ul class="sub-menu">
                                        <li><a href="/home_Esports">Home Esports</a></li>
                                        <li><a href="/home_Streaming">Home Streaming</a></li>
                                        <li><a href="/home_VideoGaming">Home Video Gaming</a></li>
                                        <li><a href="/home_Tournament">Home Tournament</a></li>
                                        <li><a href="/home_Gamer">Home Gamer</a></li>
                                    </ul>
                                </li>
                                <li><a href="/aboutUs">ABOUT US</a></li>
                                <li class="menu-item-has-children">
                                    <a href="#">TOURNAMENT</a>
                                    <ul class="sub-menu">
                                        <li><a href="/tournament">Tournament</a></li>
                                        <li><a href="/tournament_Details">Tournament Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">BLOG</a>
                                    <ul class="sub-menu">
                                        <li><a href="/blog">Blog</a></li>
                                        <li><a href="/blog_Details">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">PAGES</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="/shop">Shop</a></li>
                                                <li><a href="/shop_Details">Shop Details</a></li>
                                                <li><a href="/cart">Cart Page</a></li>
                                                <li><a href="/checkout">Checkout</a></li>
                                                <li><a href="/wishlist">Wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/players">Players</a></li>
                                        <li><a href="/players_Details">Players Details</a></li>
                                        <li><a href="/game">Game</a></li>
                                        <li><a href="/game_Details">Game Details</a></li>
                                        <li><a href="/gallery">Gallery</a></li>
                                        <li><a href="/pointTable">Point Table</a></li>
                                        <li><a href="/errorPage">Error Page</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="/contact">CONTACT</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-button d-flex d-lg-none">
                            <button type="button" class="th-menu-toggle"><span class="btn-border"></span><i class="far fa-bars"></i></button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <button type="button" class="simple-icon searchBoxToggler"><i class="far fa-search"></i></button>
                            <button type="button" class="simple-icon sideMenuInfo">
                                <i class="fa-solid fa-bars"></i>
                            </button>
                            <div class="d-xxl-block d-none">
                                <a href="/contact" class="th-btn"><i class="fa-brands fa-twitch me-1"></i> Live Streaming</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-bg"></div>
        </div>
    </div>
</header>
</header>