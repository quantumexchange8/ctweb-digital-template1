<?php

use Illuminate\Support\Facades\Route;

// ---------- Home -------------

Route::get('/', function () {
    return view('home.home');
});

Route::get('/home_Esports', function () {
    return view('home.esports');
});

Route::get('/home_Streaming', function () {
    return view('home.streaming');
});

Route::get('/home_VideoGaming', function () {
    return view('home.videoGaming');
});

Route::get('/home_Tournament', function () {
    return view('home.tournament');
});

Route::get('/home_Gamer', function () {
    return view('home.gamer');
});

Route::get('/home_Service', function () {
    return view('home.service');
});

Route::get('/home_serviceDetails', function () {
    return view('home.service_Details');
});




// ---------- About us -------------

Route::get('/aboutUs', function () {
    return view('aboutUs.aboutUs');
});



// ---------- Tournament -------------

Route::get('/tournament', function () {
    return view('tournament.tournament');
});

Route::get('/tournament_Details', function () {
    return view('tournament.tournamentDetails');
});


// ---------- Blog -------------

Route::get('/blog', function () {
    return view('blog.blog');
});

Route::get('/blog_Details', function () {
    return view('blog.blogDetails');
});


// ---------- Pages (Shop) -------------

Route::get('/shop', function () {
    return view('pages.shop.shop');
});

Route::get('/shop_Details', function () {
    return view('pages.shop.shopDetails');
});

Route::get('/cart', function () {
    return view('pages.shop.cart');
});

Route::get('/checkout', function () {
    return view('pages.shop.checkout');
});

Route::get('/wishlist', function () {
    return view('pages.shop.wishlist');
});


// ---------- Pages -------------

Route::get('/players', function () {
    return view('pages.players');
});

Route::get('/players_Details', function () {
    return view('pages.playersDetails');
});

Route::get('/game', function () {
    return view('pages.game');
});

Route::get('/game_Details', function () {
    return view('pages.gameDetails');
});

Route::get('/gallery', function () {
    return view('pages.gallery');
});

Route::get('/pointTable', function () {
    return view('pages.pointTable');
});

Route::get('/errorPage', function () {
    return view('pages.errorPage');
});



// ---------- Contact -------------

Route::get('/contact', function () {
    return view('contact.contact');
});