@extends('site.master')

@section('welcome')
<div class="container ">

    <header class=" parallax" style="background-image: url('{{asset('img/'.$products[0]->cimage)}}');">
        <div class="header-content dark text-center">
            <h1 class="header-title mb-0 text-dark" style="text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white,
            1px 1px 0 white"> {{ $page_title }} </h1>
            <p class="inner-space mb-0 text-dark" style="text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white,
            1px 1px 0 white">Harokemet Shop Products</p>
        </div><!-- / header-content -->
    </header>
    <section id="gallery" class="p-0 line-effect">

        <!-- gallery filter -->
        <ul class="gallery-filter list-inline text-center">
            @foreach($categories as $category)
            <a href="{{ url('shop/'.$category['curl'])}}">{{$category['ctitle']}}</a>

            @endforeach
        </ul>
        <!-- / gallery filter -->


        <div class="container  ">
            <h3 class="section-title hidden">GALLERY</h3>
            <ul class="row gallery line-effect list-unstyled mb-0" id="grid">
                <!-- gallery -->
                @foreach($products as $product)
                <li class="col-md-6 col-lg-4 gallery" data-groups='["framed"]'>
                    <figure class="gallery-item effect-bubba">
                        <img src="{{ asset('img/' . $product->pimage)}}" alt="">
                        <figcaption>
                            <div class="hover-content">
                                <h2 class="hover-title text-center text-white">{{$product->ptitle}}</h2>
                                <!-- / hover-title -->
                                <p class="gallery-info text-center text-white"> <b>price:</b>{{$product->price}}$
                                    <span class="gallery-icons">
                                        @if(! Cart::get($product->id))
                                        <a href="#x" class="gallery-button product-popup" data-pid="{{ $product->id}}"
                                            data-toggle="modal" data-target=".x{{$product->id}}"><i
                                                class=" fas fa-plus"></i></a>
                                        @else
                                        <a href="{{ url('shop/cart')}}" class="gallery-button"><i
                                                class="fas fa-shopping-cart"></i></a>
                                        @endif
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

        <div class="container-fluid ">
            <div class="row  justify-content-md-center">
                <div class=" col-0">
                    {{ $products->links() }}
                </div>
            </div>
    </section>
    <!-- / gallery -->
</div>
@endsection

@section('product')

@foreach($products as $product)
<!-- product-modal -->
<div class="modal fade product-modal x{{$product->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class=" close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- / modal-header -->

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row vcenter">
                        <div class=" col-md-6">

                            <img src="{{ asset('img/' . $product->pimage)}}" alt="">

                        </div><!-- / column -->
                        <div class="col-md-6">
                            <h4 class="single-product-title">{{$product->ptitle}}</h4>

                            {!!$product->particle!!}
                            <div class="product-info pb-3 pt-3">

                                <p class="mb-3"><i class="far fa-bookmark text-muted mr-1"></i> Price: <span
                                        class="text-black"> <b> {{$product->price}}$</b></span></p>


                                </form>
                            </div><!-- / product-info -->
                        </div><!-- / column -->
                    </div><!-- / row -->
                </div><!-- / container-fluid -->
            </div><!-- / modal-body -->
            <div class="modal-footer">
                <div class="container-fluid">
                    <div class="row vcenter">
                        <div class="col-md-4 ">
                            <p class="mb-0 text-white creator-info "><img src="{{ asset('img/tmpimg/logo.png')}}"
                                    class="creator-image bg-light " alt=""> <span><b>Harokemet</b></span>
                                <span class="text-sm">Poduct Disaine</span></p>
                        </div><!-- / column -->

                        <div class="col-md-4">
                            <h3 class="text-center text-white mb-0 final-price"><b> {{$product->price}}$</b></h3>
                        </div><!-- / column -->

                        <div class="col-md-4 text-right">
                            <p>
                                @if(! Cart::get($product->id))
                                <input data-pid="{{ $product->id}}" type="button"
                                    class="btn btn-success add-to-cart-btn" value="+ Add To Cart">
                                @else
                                <input disabled="disabled" data-pid="{{ $product->id}}" type="button"
                                    class="btn btn-success" value="In Cart!">
                                @endif

                        </div><!-- / column -->
                    </div><!-- / row -->
                </div><!-- / container -fluid -->
            </div><!-- / modal-footer -->
        </div><!-- / modal-content -->
    </div><!-- / modal-dialog -->
</div><!-- / modal -->
<!-- / product-modal -->
@endforeach
@endsection