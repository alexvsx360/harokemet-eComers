@extends('site.master')

@section('welcome')

<div class="container">
    <header class=" parallax" style="background-image: url('img/catego.jpg');">
        <div class="header-content dark text-center">
            <h1 class="header-title mb-0 text-dark " style="text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white,
            1px 1px 0 white">{{ $page_title }}</h1>
            <p class="inner-space mb-0 text-dark " style="text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white,
            1px 1px 0 white">Harokemet Shop</p>
        </div><!-- / header-content -->
    </header>

    <section id="gallery" class="p-0 line-effect">
        <div class="container">
            <!-- gallery filter -->
            <ul class="gallery-filter list-inline text-center">
                @foreach($categories as $category)
                <a href="{{ url('shop/'.$category['curl'])}}">{{$category['ctitle']}}</a>

                @endforeach
            </ul>
            <!-- / gallery filter -->
        </div><!-- / container -->
        <div class="container full-width">
            <h3 class="section-title hidden">GALLERY</h3>
            <ul class="row gallery line-effect list-unstyled mb-0" id="grid">
                <!-- gallery -->

                @foreach($categories as $category)
                <li class="col-md-6 col-lg-4 gallery" data-groups='["framed"]'>
                    <figure class="gallery-item effect-bubba">
                        <img src="{{asset('img/' .$category['cimage'])}}" alt="">
                        <figcaption>
                            <div class="hover-content text-center">
                                <h2 class="hover-title text-center text-white">{{$category['ctitle']}}</h2>
                                <!-- / hover-title -->
                                <p class="gallery-info text-center text-white"> {!! $category['carticle'] !!}
                                    <span class="gallery-icons">
                                        <a href="{{ url('shop/'.$category['curl'])}}" class="gallery-button"><i
                                                class="far fa-eye"></i></a>

                                    </span>
                                    <!--/ gallery-icons -->
                                </p><!-- / gallery-info -->
                            </div><!-- / hover-content -->
                        </figcaption>
                    </figure><!-- / gallery-item -->
                </li><!-- / gallery -->
                @endforeach



            </ul><!-- / gallery -->
        </div><!-- / container -->
    </section>

</div>
</div>
@endsection