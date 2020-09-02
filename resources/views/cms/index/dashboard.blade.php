@extends('cms.cms_master')

@section('welcome')
<div class="row">
    <div class="col-12 mt-5 p-2 text-center">
        <h1>Dashboard</h1>
        <p>
            <h4>welcome {{Session::get('user_name')}} this is all the newest informashion we colected!</h4>
        </p>

        <p>
            <div class="col-3 border border-dark rounded text-center m-2 mx-auto bg-light">
                <div class="cleanslate w24tz-current-time w24tz-large "
                    style="display: inline-block !important; visibility: hidden !important; min-width:100% !important; min-height:10% !important;">
                    <p><a href="#x" style="text-decoration: none" class="clock24"
                            id="tz24-1574602018-c213264-eyJob3VydHlwZSI6IjI0Iiwic2hvd2RhdGUiOiIxIiwic2hvd3NlY29uZHMiOiIxIiwiY29udGFpbmVyX2lkIjoiY2xvY2tfYmxvY2tfY2I1ZGRhODUyMjUxODBiIiwidHlwZSI6ImRiIiwibGFuZyI6ImVuIn0="
                            title="Ramat Gan time" rel="nofollow"></a> Ramat Gan</p>
                    <div id="clock_block_cb5dda85225180b"></div>
                </div>

            </div>
        </p>


    </div>
    <br>
    <br>
    <span class="border border-dark rounded m-2 mx-auto bg-light">
        <div class="row m-2">
            <div class="col-12 text-center m-2">
                <h1>USERS</h1>
            </div>

            @foreach($users as $user)
            @php
            $a += 1
            @endphp
            @endforeach
            <div class="col-6 text-center fact-item">

                <h3 class="timer" id="photos" data-to="{{$a}}" data-speed="3000"><i
                        class=" fact-icon mb-3  fas fa-users text-secondary"> </i> {{$a}}</h3>
                <h5 class="fact-title">USERS</h5>
            </div>


            @foreach($massages as $massage)
            @php
            $u += 1
            @endphp
            @endforeach
            <div class="col-6 text-center fact-item">

                <h3 class="timer" id="photos" data-to="{{$u}}" data-speed="3000"><i
                        class="fact-icon mb-3 fas fa-envelope text-primary"></i> {{$u}}</h3>
                <h5 class="fact-title">MASAGES FROM USERS</h5>
            </div>
        </div>
        <!-- / fact -->
    </span>
    <!-- fact -->
    <span class="border border-dark rounded m-2 mx-auto bg-light">
        <div class="row m-2">
            <div class="col-12 text-center m-2">
                <h1>PRODUCTS</h1>
            </div>
            @foreach($products as $product)
            @php
            $z += 1
            @endphp
            @endforeach
            <div class="col-6 text-center fact-item">

                <h3 class="timer" id="paintings" data-to="{{$z}}" data-speed="4000"> <i
                        class="fact-icon fas fa-palette mb-3 text-info "></i> {{$z}}</h3>
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

            <div class="col-6 text-center fact-item">

                <h3 class="timer" id="art" data-to="{{$x}}" data-speed="5000"> <i
                        class="fact-icon fas fa-shopping-cart mb-3 text-success "></i> {{$x}}</h3>
                <h5 class="fact-title">ART SOLD</h5>
            </div>
        </div>
    </span>
    <!-- / fact -->

    <!-- fact -->
    <span class="border border-dark rounded m-2 mx-auto bg-light">
        <div class="row m-2">
            <div class="col-12 text-center m-2">
                <h1>ORDERS</h1>
            </div>
            @foreach($orders as $order)
            @php
            $y += 1
            @endphp
            @endforeach

            <div class="col-4 rounded-circle text-center fact-item">

                <h3 class="timer" id="deliveries" data-to="{{$y}}" data-speed="6000"> <i
                        class="fact-icon fas fa-truck mb-3 text-info"></i> {{$y}}</h3>
                <h5 class="fact-title">ORDERS MADE</h5>
            </div>
            @foreach($orders as $order)

            @if(!$order['ship_number'])
            @php
            $d += 1
            @endphp
            @endif
            @endforeach

            <div class="col-4  text-center fact-item">

                <h3 class="timer" id="deliveries" data-to="{{$d}}" data-speed="6000"> <i
                        class="fact-icon fas fa-truck mb-3 text-danger"></i> {{$d}}</h3>
                <h5 class="fact-title">ORDERS NEEDS TO DELIVER</h5>

            </div>
            @foreach($orders as $order)

            @if($order['ship_number'])
            @php
            $s += 1
            @endphp
            @endif
            @endforeach

            <div class="col-4  text-center fact-item">

                <h3 class="timer" id="deliveries" data-to="{{$s}}" data-speed="6000"> <i
                        class="fact-icon fas fa-truck mb-3 text-success"></i> {{$s}}</h3>
                <h5 class="fact-title">ORDERS DELIVERD</h5>

            </div>

        </div>
    </span>
    <script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
    @endsection