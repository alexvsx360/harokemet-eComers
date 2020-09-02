@extends('site.master')



@section('item')



<!-- product-modal -->
<div class="modal fade product-modal framed-product" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- / modal-header -->
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row vcenter">
                        <div class="col-md-6">

                            <img src="{{ asset('img/' . $item['pimage']) }}" alt="">
                        </div><!-- / column -->
                        <div class="col-md-6">{{ $item['ptitle'] }}
                            <h4 class="single-product-title"></h4>

                            <p>{!! $item['particle'] !!}</p>
                            <div class="product-info pb-3 pt-3">

                                <p class="mb-3"><i class="far fa-bookmark text-muted mr-1"></i> Price: <span
                                        class="text-black"><b> {{ $item['price'] }}$</b></span></p>
                                </form>
                            </div><!-- / product-info -->
                        </div><!-- / column -->
                    </div><!-- / row -->
                </div><!-- / container-fluid -->
            </div><!-- / modal-body -->
            <div class="modal-footer">
                <div class="container-fluid">
                    <div class="row vcenter">
                        <div class="col-md-4">
                            <p class="mb-0 text-white creator-info"><img src="{{ asset('img/tmpimg/logo-icon.png')}}"
                                    class="creator-image" alt=""> <span><b>Harokemet</b></span> <span
                                    class="text-sm">Product Disainer</span></p>
                        </div><!-- / column -->

                        <div class="col-md-4">
                            <h3 class="text-center text-white mb-0 final-price"><b>Price:</b> {{ $item['price'] }}$</h3>
                        </div><!-- / column -->


                        @if(! Cart::get($item['id']))
                        <a href="#x" class="gallery-button" data-toggle="modal" data-target=".framed-product"><i
                                class="fas fa-plus"></i></a>
                        @else
                        <a href="{{ url('shop/cart')}}" class="gallery-button"><i class="fas fa-shopping-cart"></i></a>
                        @endif


                        <div class="col-md-4 text-right">
                            <a href="shopping-cart.html" class="btn btn-primary m-2">ADD TO CART</a>
                        </div><!-- / column -->
                    </div><!-- / row -->
                </div><!-- / container -fluid -->
            </div><!-- / modal-footer -->
        </div><!-- / modal-content -->
    </div><!-- / modal-dialog -->
</div><!-- / modal -->
<!-- / product-modal -->
@endsection


<!--

<div class="container">
    <div class="row text-center">
        <div class="col align-self-center">
            <h1>{{ $item['ptitle'] }}</h1>
            <p><img class="rounded-pill" height="30%" width="50%" src="{{ asset('img/' . $item['pimage']) }}" alt="">
        </p>
        <div  class="col  align-self-center">

        <p>{!! $item['particle'] !!}</p>
        <p><b>Price:</b> {{ $item['price'] }}$</p>
        </div>
        <p>
        @if(! Cart::get($item['id']))
            <input data-pid="{{ $item['id'] }}" type="button" class="btn btn-success add-to-cart-btn" value="+ Add To Cart">
            @else
            <input disabled="disabled" data-pid="{{ $item['id'] }}" type="button"  class="btn btn-success add-to-cart-btn" value="In Cart!">
            @endif
            <a href="{{ url('shop/cart')}}" class="btn btn-primary"> To Cart</a>
</p>
        </div>
    </div>
</div>
-->