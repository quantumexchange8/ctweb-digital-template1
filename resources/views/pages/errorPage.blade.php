@extends('layout.master')

@section('content')
<section class="space error-page" data-bg-src="assets/img/bg/error-bg.png">
    <div class="container">
        <div class="error-img">
            <img src="assets/img/theme-img/error.svg" alt="404 image">
        </div>
        <div class="error-content">
            <h2 class="error-title text-white">Opp’s that page can’t be found</h2>
            <p class="error-text">It looks like nothing was found at this location. Maybe try one of the
                links below or a search?</p>
            <a href="/home_Esports" class="th-btn"><i class="fas fa-home me-2"></i>Back To Home</a>
        </div>
    </div>
</section>
@endsection