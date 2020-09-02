@php
$menu =App\Menu::all()->toArray();
@endphp

@extends('site.master')

@section('welcome')

<div class="container ">
    <header class=" parallax" style="background-image: url('img/dinco.jpg');">
        <div class="header-content dark text-center">
            @foreach($contents as $content) <p>
                <h1 class="header-title mb-0 text-dark" style="text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white,
                1px 1px 0 white">{{ $page_title }}</h1>
            </p> @endforeach
            <p class="inner-space mb-0 text-dark" style="text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white,
            1px 1px 0 white">Harokrmet Shop</p>
        </div><!-- / header-content -->
    </header>
    @foreach($contents as $content)
    @if((! $content->ctitle1 == NULL) || (! $content->carticle1 == NULL))
    <div class=" row m-4 ">
        <div class="mx-auto col-12 m-2 ">
            <div class="account-info-content">
                @if(! $content->ctitle1 == NULL)
                <h3><span class="mx-auto">{{ $content->ctitle1 }}</span></h3>
                @endif
                @if(! $content->carticle1 == NULL)
                {!! $content->carticle1!!}
                @endif
            </div><!-- / my-orders -->
        </div>
    </div>
    @endif
    @if((! $content->ctitle2 == NULL) || (! $content->carticle2 == NULL) || (! $content->ctitle3 == NULL) || (!
    $content->carticle3 == NULL))
    <div class="row m-4 ">
        @if((! $content->ctitle2 == NULL) || (! $content->carticle2 == NULL))
        <div class="mr-auto col m-2 ">
            <div class=" h-100 account-info-content">
                @if(! $content->ctitle2 == NULL)
                <h4><span class="mx-auto">{{ $content->ctitle2 }}</span></h4>
                @endif
                @if(! $content->carticle2 == NULL)
                {!! $content->carticle2!!}
                @endif
            </div><!-- / my-orders -->


        </div>
        @endif

        @if((! $content->ctitle3 == NULL) || (! $content->carticle3 == NULL))
        <div class="ml-auto col-3 ">
            <div class=" account-info-content h-100">
                @if($content->ctitle3)
                <h6><span class="mx-auto">{{ $content->ctitle3 }}</span></h6>
                @endif
                @if($content->carticle3)
                {!! $content->carticle3!!}
                @endif
            </div><!-- / my-orders -->
        </div>
        @endif
    </div>

    @endif
    @endforeach

</div><!-- / container -->
@endsection