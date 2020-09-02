@php
$menu =App\Menu::all()->toArray();
@endphp

@extends('site.master')

@section('welcome')

<div class="container">
    <header class="account-header parallax">
        <div class="header-content dark text-center">
            <h1 class="header-title mb-0 text-dark">MY ACCOUNT</h1>
            <p class="inner-space mb-0 text-dark">{{Session::get('user_name')}}</p>
        </div><!-- / header-content -->
    </header>
</div><!-- / container -->

<div class="spacer-2x">&nbsp;</div>

<section id="my-account">
    <div class="container">
        <div class="row">



            <div class="col-sm-12 account-info">
                <div id="personal-info" class="account-info-content">
                    <h4>PERSONAL INFO <span class="pull-right"><a href="{{ url('user/edit') }}"
                                class="btn btn-sm btn-primary rectangle">EDIT</a></span></h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-8 col-md-10">
                            <p>User Name: <span>{{ $user_item[0]->name}}</span></p>
                            <p>Email: <span>{{ $user_item[0]->email}}</span></p>
                            <p>Phone: <span>{{ $user_item[0]->phone}}</span></p>
                            <p>First Name: <span>{{ $user_item[0]->first_name}}</span></p>
                            <p>last Name: <span>{{ $user_item[0]->last_name}}</span></p>
                        </div>

                    </div><!-- / row -->
                </div><!-- / personal-info -->

                <div id="shipping-info" class="account-info-content">
                    <h4>SHIPPING INFO </h4>

                    <p>Address: <span>{{ $user_item[0]->address}}</span></p>
                    <p>Country: <span>{{ $user_item[0]->country}}</span></p>
                    <p>State: <span>{{ $user_item[0]->state}}</span></p>
                    <p>ZIP Code: <span>{{ $user_item[0]->zip}}</span></p>

                </div><!-- / shipping-info -->
            </div>
        </div>
        <div class="row">



            <div class="col-sm-12 account-info">
                <div id="my-orders" class="account-info-content">
                    <h4>MY ORDERS</h4>
                    <div class="row">


                        @if(isset($order_item))
                        @foreach($order_item as $item)

                        <div class="col-sm-5 m-4 account-info border border-info">
                            <p class="mt-2"><i class="far fa-star"> Order {{$item->id }} </i></p>
                            <hr>
                            <p>Order status:
                                @if(!$item->ship_number == NULL)

                                <i class="text-success far fa-check-circle"> Tracking No:
                                    <span>{{$item->ship_number}}</span>
                                </i>
                                @else
                                <i class="text-warning far fa-clock"> waiting for shippeeing</i>
                                @endif
                            </p>
                            <p><i class="far m-1 fa-calendar-alt"> Order Date:<span>
                                        {{ date('d/m/y', strtotime($item->created_at)) }}</i></span></p>
                            <p><i class="far m-1 fa-credit-card"> Order Total:<span> {{ $item->total }}$</i></span>
                            </p>
                            <p><i class="fas fa-cart-arrow-down"> Order Contant:</i> <span>
                                    @foreach (unserialize($item->order_data) as $order)
                                    <li>{{ $order['name']}}, Quantity: {{ $order['quantity']}}, Price:
                                        {{ $order['price']}}$
                                    </li>
                                    @endforeach

                                </span></p>

                        </div>
                        @endforeach

                        @else
                        <br>
                        <div class="col-sm-5 m-4 account-info ">
                            <p> No orders...</p>
                            <br>
                        </div>
                        @endif
                        <div class="container-fluid ">
                            <div class="row  justify-content-md-center">
                                <div class=" col-0">
                                    {{ $order_item ->links() }}
                                </div>
                            </div>
                        </div>
                        <!-- / gallery -->
                    </div>
                </div>
            </div><!-- / my-orders -->


        </div><!-- / account-info -->

    </div><!-- / row -->
    </div><!-- / container -->
</section>
<!-- / my-account -->
@endsection