@extends('site.master')

@section('welcome')
<div class="container">
    <header class="home-header parallax">
        <div class="header-content dark text-center">
            <h1 class="header-title mb-0 text-dark">Harokemet</h1>
            <p class="inner-space mb-0 text-dark">Harokrmet Shop</p>
        </div><!-- / header-content -->
    </header>
</div><!-- / container -->

<div class="spacer-2x">&nbsp;</div>

<section id="about" class="bg-white">
    <div class="container">
        <div class="row vcenter">
            <div class="col-md-6 mb-3">
                <h4 class="section-title mb-0">STORY</h4>
                <div class="spacer spacer-line border-primary ml-0">&nbsp;</div>
                <div class="spacer">&nbsp;</div>
                <p class="mb-3 text-left">who are we?
                    <br><br>
                    Welcome! my name is Anna, and I have started the company “Harokemt” in 2019.<br>
                    Harokemt is the hebrew word for “the embroider”- and this is what I do.<br>
                    I have always loved crafts and everything that you can do with your hand and some imagination.<br>
                    the
                    love for embroidery started a few years ago, and never left me since.<br>
                    over time, I learned more and more techniques and ways to make pretty things just with a hoop,
                    fabric and some yarn, and i wish to share the knowledge with you!



            </div><!-- / column -->
            <div class="col-md-6 feature-left">
                <div class="feature block">
                    <div class="feature-icon">
                        <i class="far fa-eye"></i>
                    </div>
                    <h5>CREATIVITY</h5>
                    <p>Embroidery is our way to be creative,join in for the journey!</p>
                </div><!-- feature-block -->

                <div class="feature block">
                    <div class="feature-icon">
                        <i class="far fa-lightbulb"></i>
                    </div>
                    <h5>INSPIRATION</h5>
                    <p>Get inspired by nature, weather and your loved ones.</p>
                </div><!-- feature-block -->

                <div class="feature block">
                    <div class="feature-icon">
                        <i class="far fa-edit"></i>
                    </div>
                    <h5>MOTIVATION</h5>
                    <p>Don't think about the result, enjoy the way to it!</p>
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
            @foreach($users as $user)
            @php
            $a += 1
            @endphp
            @endforeach
            <div class="col-md-6 col-lg-3 text-center fact-item">
                <i class=" fact-icon mb-3 text-primary fas fa-users"></i>
                <h3 class="timer" id="photos" data-to="2432" data-speed="3000">{{$a}}</h3>
                <h5 class="fact-title">USERS</h5>
            </div>
            <!-- / fact -->

            <!-- fact -->
            @foreach($products as $product)
            @php
            $z += 1
            @endphp
            @endforeach
            <div class="col-md-6 col-lg-3 text-center fact-item">
                <i class="fact-icon fas fa-palette mb-3 text-primary"></i>
                <h3 class="timer" id="paintings" data-to="1547" data-speed="4000">{{$z}}</h3>
                <h5 class="fact-title">PRODUCTS</h5>
            </div>
            <!-- / fact -->

            <!-- fact -->
            @foreach($orders as $order)
            @foreach (unserialize($order['order_data']) as $item)
            @php
            $x += 1
            @endphp
            @endforeach
            @endforeach

            <div class="col-md-6 col-lg-3 text-center fact-item">
                <i class="fact-icon fas fa-shopping-cart mb-3 text-primary"></i>
                <h3 class="timer" id="art" data-to="3697" data-speed="5000">{{$x}}</h3>
                <h5 class="fact-title">ART SOLD</h5>
            </div>

            <!-- / fact -->

            <!-- fact -->
            @foreach($orders as $order)
            @php
            $y += 1
            @endphp
            @endforeach

            <div class="col-md-6 col-lg-3 text-center fact-item">
                <i class="fact-icon fas fa-truck mb-3 text-primary"></i>
                <h3 class="timer" id="deliveries" data-to="2754" data-speed="6000">{{$y}}</h3>
                <h5 class="fact-title">ORDERS DELIVERD</h5>
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
        <div class="spacer-2x">&nbsp;</div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="team block image-block text-center">
                    <img style="height: 350px !important" src="{{asset('img/ANNA.jpg')}}" alt="">
                    <div class="team-content inner-space bg-white">
                        <h6 class="box-title">ANNA RICHKOVE</h6>
                        <p class="p-2 mb-0 text-sm"><b>CEO & MANAGER</b></p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/RichkovEmbroidery/"
                                class="btn-social btn-facebook-link p-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/embroidery.anna"
                                class="btn-social btn-instagram-link p-2"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.instagram.com/embroidery.anna"
                                class="btn-social btn-google-link p-2"><i class="fab fa-etsy"></i></a>
                        </div><!-- / social-icons -->
                    </div><!-- / team-content -->
                </div><!-- / image-block -->
            </div><!-- / column -->
            <div class="col-md-4">
                <div class="team block image-block text-center">
                    <img style="height: 350px !important" src="{{asset('img/ALEXANDER.jpg')}}" alt="">
                    <div class="team-content inner-space bg-white">
                        <h6 class="box-title">ALEXANDER RICHKOVE</h6>
                        <p class="p-2 mb-0 text-sm"><b>WEBSITE CREATOR & TEC MANAGER</b></p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/search/top/?q=%D7%90%D7%9C%D7%9B%D7%A1%20%D7%A8%D7%99%D7%A6%27%D7%A7%D7%95%D7%91&epa=SEARCH_BOX"
                                class="btn-social btn-facebook-link p-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/alexander_rich360/"
                                class="btn-social btn-instagram-link p-2"><i class="fab fa-instagram"></i></a>

                        </div><!-- / social-icons -->
                    </div><!-- / team-content -->
                </div><!-- / image-block -->
            </div><!-- / column -->
            <div class="col-md-4">
                <div class="team block image-block text-center">
                    <img style="height: 350px !important" src="{{asset('img/sherlok.jpeg')}}" alt="">
                    <div class="team-content inner-space bg-white">
                        <h6 class="box-title">SHERLOCK </h6>
                        <p class="p-2 mb-0 text-sm"><b>INSPIRATION MANAGER</b></p>
                        <div class="social-icons">
                        </div><!-- / social-icons -->
                    </div><!-- / team-content -->
                </div><!-- / image-block -->
            </div><!-- / column -->
        </div><!-- / row -->
    </div><!-- / container -->
</section><!-- / team -->
@endsection