@php
$menu =App\Menu::all()->toArray();
@endphp

@extends('site.master')

@section('welcome')

@foreach($contents as $content)
<div class="container">
    <header class=" parallax">
        <div class="header-content dark text-center">
            <h1 class="header-title mb-0">ABOUT US</h1>
            <p class="inner-space mb-0">Clean & Elegant Gallery Shop</p>
        </div><!-- / header-content -->
    </header>
</div><!-- / container -->

<div class="spacer-2x">&nbsp;</div>

<section id="about" class="bg-white">
    <div class="container">
        <div class="row vcenter">
            <div class="col-md-6 mb-3">
                <h4 class="section-title mb-0">{{ $content->ctitle }}</h4>
                <div class="spacer spacer-line border-primary ml-0">&nbsp;</div>
                <div class="spacer">&nbsp;</div>
                <p class="mb-3">
                    <p> {!! $content->carticle !!}</p>





            </div><!-- / column -->
            <div class="col-md-6 feature-left">
                <div class="feature block">
                    <div class="feature-icon">
                        <i class="far fa-eye"></i>
                    </div>
                    <h5>CREATIVITY</h5>
                    <p>Vivamus ex odio, cursus vitae dolor ut, imperdiet mattis massa. Morbi orci diam, feugiat quis
                        sapien et, accumsan mollis nisl.</p>
                </div><!-- feature-block -->

                <div class="feature block">
                    <div class="feature-icon">
                        <i class="far fa-lightbulb"></i>
                    </div>
                    <h5>INSPIRATION</h5>
                    <p>Vivamus ex odio, cursus vitae dolor ut, imperdiet mattis massa. Morbi orci diam, feugiat quis
                        sapien et, accumsan mollis nisl.</p>
                </div><!-- feature-block -->

                <div class="feature block">
                    <div class="feature-icon">
                        <i class="far fa-edit"></i>
                    </div>
                    <h5>MOTIVATION</h5>
                    <p>Vivamus ex odio, cursus vitae dolor ut, imperdiet mattis massa. Morbi orci diam, feugiat quis
                        sapien et, accumsan mollis nisl.</p>
                </div><!-- feature-block -->
            </div><!-- / column -->
        </div><!-- / row -->
    </div><!-- / container -->
</section><!-- / about -->

<div class="spacer-2x">&nbsp;</div>

<section id="facts">
    <div class="container">
        <div class="row">
            <!-- fact -->
            <div class="col-md-6 col-lg-3 text-center fact-item">
                <i class="fact-icon fas fa-camera mb-3 text-primary"></i>
                <h3 class="timer" id="photos" data-to="2432" data-speed="3000">2432</h3>
                <h5 class="fact-title">PHOTOS</h5>
            </div>
            <!-- / fact -->

            <!-- fact -->
            <div class="col-md-6 col-lg-3 text-center fact-item">
                <i class="fact-icon fas fa-palette mb-3 text-primary"></i>
                <h3 class="timer" id="paintings" data-to="1547" data-speed="4000">1547</h3>
                <h5 class="fact-title">PAINTINGS</h5>
            </div>
            <!-- / fact -->

            <!-- fact -->
            <div class="col-md-6 col-lg-3 text-center fact-item">
                <i class="fact-icon fas fa-shopping-cart mb-3 text-primary"></i>
                <h3 class="timer" id="art" data-to="3697" data-speed="5000">3697</h3>
                <h5 class="fact-title">ART SOLD</h5>
            </div>
            <!-- / fact -->

            <!-- fact -->
            <div class="col-md-6 col-lg-3 text-center fact-item">
                <i class="fact-icon fas fa-truck mb-3 text-primary"></i>
                <h3 class="timer" id="deliveries" data-to="2754" data-speed="6000">2754</h3>
                <h5 class="fact-title">DELIVERIES</h5>
            </div>
            <!-- / fact -->
        </div><!-- / row -->
    </div><!-- / container -->
</section><!-- / facts -->

<div class="spacer-2x">&nbsp;</div>

<section id="team" class="bg-white">
    <div class="container w50">
        <h4 class="section-title text-center">OUR TEAM</h4>
        <div class="spacer spacer-line border-primary">&nbsp;</div>
        <div class="spacer">&nbsp;</div>
        <p class="text-center">Suspendisse quis arcu interdum erat blandit ultricies. Aenean sit amet arcu sem. In
            rhoncus mi eros, a dapibus elit dignissim</p>
        <div class="spacer-2x">&nbsp;</div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="team block image-block text-center">
                    <img src="images/team1.jpg" alt="">
                    <div class="team-content inner-space bg-white">
                        <h6 class="box-title">JANE DOE</h6>
                        <p class="p-2 mb-0 text-sm"><b>CEO & MANAGER</b></p>
                        <div class="social-icons">
                            <a href="#x" class="btn-social btn-facebook-link p-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#x" class="btn-social btn-twitter-link p-2"><i class="fab fa-twitter"></i></a>
                            <a href="#x" class="btn-social btn-google-link p-2"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#x" class="btn-social btn-instagram-link p-2"><i class="fab fa-instagram"></i></a>
                            <a href="#x" class="btn-social btn-pinterest-link p-2"><i class="fab fa-pinterest"></i></a>
                        </div><!-- / social-icons -->
                    </div><!-- / team-content -->
                </div><!-- / image-block -->
            </div><!-- / column -->
            <div class="col-md-4">
                <div class="team block image-block text-center">
                    <img src="images/team2.jpg" alt="">
                    <div class="team-content inner-space bg-white">
                        <h6 class="box-title">JOHANA DOE</h6>
                        <p class="p-2 mb-0 text-sm"><b>CUSTOMER SUPPORT</b></p>
                        <div class="social-icons">
                            <a href="#x" class="btn-social btn-facebook-link p-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#x" class="btn-social btn-twitter-link p-2"><i class="fab fa-twitter"></i></a>
                            <a href="#x" class="btn-social btn-google-link p-2"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#x" class="btn-social btn-instagram-link p-2"><i class="fab fa-instagram"></i></a>
                            <a href="#x" class="btn-social btn-pinterest-link p-2"><i class="fab fa-pinterest"></i></a>
                        </div><!-- / social-icons -->
                    </div><!-- / team-content -->
                </div><!-- / image-block -->
            </div><!-- / column -->
            <div class="col-md-4">
                <div class="team block image-block text-center">
                    <img src="images/team3.jpg" alt="">
                    <div class="team-content inner-space bg-white">
                        <h6 class="box-title">LUCY DOE</h6>
                        <p class="p-2 mb-0 text-sm"><b>DESIGNER</b></p>
                        <div class="social-icons">
                            <a href="#x" class="btn-social btn-facebook-link p-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#x" class="btn-social btn-twitter-link p-2"><i class="fab fa-twitter"></i></a>
                            <a href="#x" class="btn-social btn-google-link p-2"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#x" class="btn-social btn-instagram-link p-2"><i class="fab fa-instagram"></i></a>
                            <a href="#x" class="btn-social btn-pinterest-link p-2"><i class="fab fa-pinterest"></i></a>
                        </div><!-- / social-icons -->
                    </div><!-- / team-content -->
                </div><!-- / image-block -->
            </div><!-- / column -->
        </div><!-- / row -->
    </div><!-- / container -->
</section><!-- / team -->
@endforeach

@endsection