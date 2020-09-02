<!DOCTYPE html>
<html lang="en">
@php
$allproducts = App\Product::getAll()->toArray();
$menus = App\Menu::all()->toArray();
$cart = Cart::getContent()->toArray();
@endphp

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bootstrap 4 Template">
    <meta name="author" content="kingstudio.ro">
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/tmpimg/logo.png')}}">
    <!-- Site Title -->
    <title>Harokemet | {{!empty($page_title) ? $page_title : 'site'}} </title>
    <!-- Bootstrap 4 core CSS -->
    <link href="{{ asset('css/tmpcss/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="{{ asset('css/tmpcss/style.css')}}" rel="stylesheet">
    <link href="{{ asset('css/tmpcss/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('css/tmpcss/owl.carousel.min.css')}}" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('css/tmpcss/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css')}}">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
    <script>
        var BASE_URL = "{{ url('')}}/";
    </script>
</head>

<body>

    <div class="top-menu top-menu-primary">
        <div class="container">

            <body>
                <p>


                    <span class="social margin-fix left">
                        <a class="no-margin" href="https://etsy.me/2IjxruE"><i class="fab fa-etsy"></i></a>
                        <a class="no-margin" href="https://www.facebook.com/RichkovEmbroidery/"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/embroidery.anna"><i class="fab fa-instagram"></i></a>
                    </span>

                    <span class="right">
                        @if( ! Session::has('user_id'))
                        <a href="{{ url('user/signin') }}"><i class="fas fa-user mr-1"></i> <span>Login</span></a>

                        <a href="{{ url('user/signup') }}"><i class="fas fa-lock mr-1"></i> <span>Register</span></a>
                        @else

                        <a href="{{ url('user/my') }}"><i class="fas fa-user mr-1"></i>
                            <span>{{ Session::get('user_name')}}</span></a>
                        <a href="{{ url('logout')}}"><i class="fas fa-door-open"></i> <span>Logout</span></a>
                        @endif



        </div>
    </div>
    </div>
    </span>
    </span>
    </p>
    </div><!-- / container -->
    </div><!-- / top-menu -->


    <nav class="navbar navbar-expand-lg navbar-light bg-white custom-menu split-menu">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-toggle-1"
                aria-controls="navbar-toggle-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
                <span class="sr-only">Toggle navigation</span>
            </button><!-- / navbar-toggler -->

            <a class="foo-img2 navbar-brand mobile-brand m-auto" href="{{ url('') }}"><img
                    src="{{ asset('img/tmpimg/logo.png')}}" alt=""></a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-toggle-2"
                aria-controls="navbar-toggle-2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
                <span class="sr-only">Toggle navigation</span>
            </button><!-- / navbar-toggler -->

            <div class="collapse navbar-collapse" id="navbar-toggle-1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="navbar-brand" href="{{ url('') }}"><b>Harokemet</b> </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('shop') }}">Shop</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('contact') }}">Contact us</a>
                    </li>
                    @if( !empty($menus) )

                    @foreach($menus as $menu)
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url($menu['murl']) }}">{{ $menu['link'] }}</a>
                    </li>

                    @endforeach
                    @endif
                    <!-- / dropdown -->
                </ul><!-- / navbar-nav -->
            </div><!-- / navbar-collapse -->

            <a class="navbar-brand m-auto" href="{{ url('') }}"><img src="{{ asset('img/tmpimg/logo.png')}}" alt=""></a>

            <div class="collapse navbar-collapse" id="navbar-toggle-2">
                <ul class="navbar-nav ml-auto">
                    <li> <a href="#x" style="font-size: 2em; " class="text-dark product-popup right" data-toggle="modal"
                            data-target=".my-search">
                            <i class="fas fa-search"></i> </a></li>
                    @if( Session::has('is_admin'))
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('cms/dashboard') }}"><i class="fas fa-tools"></i> Admin
                            Panel</a>
                    </li>
                    @endif

                    <li class="nav-item dropdown extra-dropdowns">
                        <a class="nav-link last-menu-item has-dropdown-toggle dropdown-toggle" href="#x" id="dropdown3"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shopping Cart<span
                                class="count count-primary">{{ Cart::getTotalQuantity()}}</span></a>
                        <div class="dropdown-menu animated fadeIn fast" aria-labelledby="dropdown3">
                            @if($cart)
                            @foreach($cart as $item)
                            <div class="cart-small">
                                <img src="{{asset('img/' . $item['attributes']['image'])}}" alt="">
                                <p><a href="#x" class="text-black">{{ $item['quantity' ]}} x </a> <br>
                                    <span>{{ $item['quantity' ] * $item['price'] }}$</span></p>
                                <a href="{{ url('shop/remove-item/' . $item['id']) }}"> <i
                                        class="md-icon dp14 close-icon"></i></a>
                                {{ $item['name' ]}}
                            </div><!-- / cart-small -->
                            @endforeach

                            <p class="text-left cart-small-total">
                                <p><b>Subtotal:</b>{{ Cart::getTotal() }}$</p>
                                <div class="cart-small-footer text-center">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="{{ url('shop/cart')}}" class="mini-cart-btn"><i
                                                    class="md-icon dp12 mr-1">shopping_cart</i> <span
                                                    class="va-middle"><b>VIEW CART</b></span></a>
                                        </div><!-- / column -->
                                        <div class="col-sm-6">
                                            <a href="{{url('shop/clear-cart')}}" class="mini-cart-btn mb-0"><i
                                                    class="md-icon dp12 mr-1"></i> <span class="va-middle">Clear
                                                    Cart</span></a>
                                        </div><!-- / column -->
                                        @else
                                        <div class="row">
                                            <div class="col">
                                                <p><i>No items in cart...</i></p>
                                            </div>
                                        </div>
                                        @endif

                </ul><!-- / navbar-nav -->
            </div><!-- / navbar-collapse -->
        </div><!-- / container -->
    </nav><!-- / split-navbar -->




    @yield('welcome')
    <section class=" bg-white">

        <div class="spacer-2x">&nbsp;</div>


        <section id="clients">
            <h4 class="text-center">
                <i class="fas fa-arrow-circle-left"></i> MORE PRODUCTS <i class="fas fa-arrow-circle-right"></i>
            </h4>
            <div class="spacer spacer-line border-primary">&nbsp;</div>
            <div class="spacer">&nbsp;</div>
            <div class="container">
                <div id="clients-carousel" class="owl-carousel owl-theme">
                    @foreach ($allproducts as $ap)

                    <div class="rounded-circle h-100 card">
                        <a class=" m-2 text-center" href="{{ url('shop/'.$ap->curl)}}">
                            <img class="rounded-circle w-100 h-100" src="{{ asset('img/' . $ap->pimage)}}"
                                alt="image {{$ap->ptitle }}"></a>

                    </div>
                    @endforeach

                </div><!-- / owl-carousel -->
                <!-- / clients carousel -->

            </div><!-- / container -->
        </section><!-- / clients -->
    </section>
    <div class="footer-widgets">


        <div class="spacer-2x">&nbsp;</div>
        <div class="container ">
            <div class="row">
                <div class="col-lg-4 text-center ">
                    <div class="widget h-100">
                        <h3 class="widget-title">USEFUL LINKS</h3>
                        <ul class="footer-list pl-0 mb-0">
                            <li><a class="no-margin" href="https://etsy.me/2IjxruE"><i class="fab fa-etsy"></i>
                                    Edsy</a>
                            </li>
                            <li><a class="no-margin" href="https://www.facebook.com/RichkovEmbroidery/"><i
                                        class="fab fa-facebook-f"></i> Facebook</a></li>
                            <li><a href="https://www.instagram.com/embroidery.anna"><i class="fab fa-instagram"></i>
                                    Instagram</a>
                            </li>
                        </ul>
                    </div><!-- / widget -->
                </div><!-- / column-->

                <div class="col-lg-4 text-center ">
                    <div class="widget h-100">
                        <img class="foo-img" src="{{ asset('img/tmpimg/logo.png')}}" alt="logo">

                    </div><!-- / widget -->

                </div><!-- / column-->

                <div class="col-lg-4 text-center ">
                    <div class="widget h-100">
                        <h3 class="widget-title">CONTACT US</h3>
                        <ul class="footer-list pl-0 mb-0">
                            <li class="mb-3"><a href="tel:+972545393362"><i class="fas fa-phone mr-2"></i> +972
                                    54-539-3362</a></li>
                            <li class="mb-3"><a href="mailto:annasokol026@gmail.com"><i
                                        class="fas fa-envelope mr-2"></i>
                                    annasokol026@gmail.com</a></li>
                        </ul>
                    </div><!-- / widget -->
                </div><!-- / column-->
            </div><!-- / row -->
        </div><!-- / container -->

    </div><!-- / footer-widgets -->

    <footer class="bg-white">
        <div class="container-fluid text-center">
            <p>&copy {{ date('Y')}} <b>Harokemet</b>. All Rights Reserved.</p>
        </div><!-- / container-fluid -->
    </footer>

    @yield('product')

    <!-- product-modal -->
    <div class="modal fade product-modal my-search" tabindex="-1" role="dialog">
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
                            <div class=" col-md-12">

                                <br>


                                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.."
                                    title="Type in a name">

                                <ul id="myUL">
                                    @foreach ($allproducts as $ap)
                                    <li>
                                        <a href="{{ url('shop/'.$ap->curl)}}">
                                            <img style="height: 50px !important; width: 50px !important"
                                                class="rounded-circle " src="{{ asset('img/' . $ap->pimage)}}"
                                                alt="image {{$ap->ptitle }}">{{$ap->ptitle }}
                                        </a>
                                    </li>

                                    @endforeach
                                </ul>
                            </div>
                        </div>



                    </div><!-- / container-fluid -->
                </div><!-- / modal-body -->
            </div><!-- / modal-content -->
        </div><!-- / modal-dialog -->
    </div><!-- / modal -->
    <!-- / product-modal -->
    <!-- Core JavaScript -->
    <script src="{{asset('js/tmpjs/jquery.min.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous">
    </script>
    <script src="{{asset('js/tmpjs/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/tmpjs/preloader.js')}}"></script>
    <script src="{{asset('js/tmpjs/jquery.shuffle.min.js')}}"></script>
    <script src="{{asset('js/tmpjs/gallery.js')}}"></script>
    <script src="{{asset('js/tmpjs/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/tmpjs/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>