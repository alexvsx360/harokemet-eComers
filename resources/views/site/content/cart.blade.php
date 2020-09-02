@extends('site.master')

@section('welcome')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Cart Page.</h1>
        </div>
    </div>

    @if($cart)
    <div class="row">
        <div class="col">
            <table class="text-center table table-bordered">
                <thead>
                    <tr>
                        <th class="w-25">Products</th>
                        <th>Quantity</th>
                        <th class="w-25">Price</th>
                        <th>Sub Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $item)
                    <tr>
                        <td>
                            <img style="height: 100px;width: 100px" class=" rounded"
                                src="{{asset('img/' . $item['attributes']['image'])}}" alt=""
                                class="img-thumbnail mr-3">
                            {{ $item['name']}}
                        </td>
                        <td>
                            <a href="{{ url('shop/update-cart/minus/' . $item['id'])}}"><i
                                    class="fas fa-minus-circle"></i></a>
                            <input class="text-center" size="5" type="text" value="{{ $item['quantity' ]}}">
                            <a href="{{ url('shop/update-cart/plus/' . $item['id'])}}#"><i
                                    class="fas fa-plus-circle"></i></a>
                        </td>
                        <td>{{ $item['price' ]}}$</td>
                        <td>{{ $item['quantity' ] * $item['price'] }}$</td>
                        <td>
                            <a href="{{ url('shop/remove-item/' . $item['id']) }}" class="text-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p><b>Total:</b>{{ Cart::getTotal() }}$
                <span class="float-right">
                    <a href="{{url('shop/clear-cart')}}" class="btn btn-light">Clear Cart</a>
                </span>
            </p>
            <p>
                <a href="{{ url('shop/order-now') }}" class="btn btn-primary">Order Now!!</a>
            </p>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col">
            <p><i>No items in cart...</i></p>
        </div>
    </div>
    @endif
</div>
@endsection