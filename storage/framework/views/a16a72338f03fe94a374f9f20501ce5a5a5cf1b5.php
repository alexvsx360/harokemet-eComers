<!DOCTYPE html>
<html lang="en">
<?php
$allproducts = App\Product::getAll()->toArray();
$menus = App\Menu::all()->toArray();
$cart = Cart::getContent()->toArray();
?>

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bootstrap 4 Template">
    <meta name="author" content="kingstudio.ro">
    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('img/tmpimg/logo.png')); ?>">
    <!-- Site Title -->
    <title>Harokemet | <?php echo e(!empty($page_title) ? $page_title : 'site'); ?> </title>
    <!-- Bootstrap 4 core CSS -->
    <link href="<?php echo e(asset('css/tmpcss/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="<?php echo e(asset('css/tmpcss/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/tmpcss/animate.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/tmpcss/owl.carousel.min.css')); ?>" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo e(asset('css/tmpcss/fontawesome-all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Mansalva&display=swap" rel="stylesheet">
    <script>
        var BASE_URL = "<?php echo e(url('')); ?>/";
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
                        <?php if( ! Session::has('user_id')): ?>
                        <a href="<?php echo e(url('user/signin')); ?>"><i class="fas fa-user mr-1"></i> <span>Login</span></a>

                        <a href="<?php echo e(url('user/signup')); ?>"><i class="fas fa-lock mr-1"></i> <span>Register</span></a>
                        <?php else: ?>

                        <a href="<?php echo e(url('user/my')); ?>"><i class="fas fa-user mr-1"></i>
                            <span><?php echo e(Session::get('user_name')); ?></span></a>
                        <a href="<?php echo e(url('logout')); ?>"><i class="fas fa-door-open"></i> <span>Logout</span></a>
                        <?php endif; ?>



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

            <a class="foo-img2 navbar-brand mobile-brand m-auto" href="<?php echo e(url('')); ?>"><img
                    src="<?php echo e(asset('img/tmpimg/logo.png')); ?>" alt=""></a>

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
                        <a class="navbar-brand" href="<?php echo e(url('')); ?>"><b>Harokemet</b> </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo e(url('shop')); ?>">Shop</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo e(url('contact')); ?>">Contact us</a>
                    </li>
                    <?php if( !empty($menus) ): ?>

                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo e(url($menu['murl'])); ?>"><?php echo e($menu['link']); ?></a>
                    </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <!-- / dropdown -->
                </ul><!-- / navbar-nav -->
            </div><!-- / navbar-collapse -->

            <a class="navbar-brand m-auto" href="<?php echo e(url('')); ?>"><img src="<?php echo e(asset('img/tmpimg/logo.png')); ?>" alt=""></a>

            <div class="collapse navbar-collapse" id="navbar-toggle-2">
                <ul class="navbar-nav ml-auto">
                    <li> <a href="#x" style="font-size: 2em; " class="text-dark product-popup right" data-toggle="modal"
                            data-target=".my-search">
                            <i class="fas fa-search"></i> </a></li>
                    <?php if( Session::has('is_admin')): ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo e(url('cms/dashboard')); ?>"><i class="fas fa-tools"></i> Admin
                            Panel</a>
                    </li>
                    <?php endif; ?>

                    <li class="nav-item dropdown extra-dropdowns">
                        <a class="nav-link last-menu-item has-dropdown-toggle dropdown-toggle" href="#x" id="dropdown3"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shopping Cart<span
                                class="count count-primary"><?php echo e(Cart::getTotalQuantity()); ?></span></a>
                        <div class="dropdown-menu animated fadeIn fast" aria-labelledby="dropdown3">
                            <?php if($cart): ?>
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="cart-small">
                                <img src="<?php echo e(asset('img/' . $item['attributes']['image'])); ?>" alt="">
                                <p><a href="#x" class="text-black"><?php echo e($item['quantity' ]); ?> x </a> <br>
                                    <span><?php echo e($item['quantity' ] * $item['price']); ?>$</span></p>
                                <a href="<?php echo e(url('shop/remove-item/' . $item['id'])); ?>"> <i
                                        class="md-icon dp14 close-icon"></i></a>
                                <?php echo e($item['name' ]); ?>

                            </div><!-- / cart-small -->
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <p class="text-left cart-small-total">
                                <p><b>Subtotal:</b><?php echo e(Cart::getTotal()); ?>$</p>
                                <div class="cart-small-footer text-center">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="<?php echo e(url('shop/cart')); ?>" class="mini-cart-btn"><i
                                                    class="md-icon dp12 mr-1">shopping_cart</i> <span
                                                    class="va-middle"><b>VIEW CART</b></span></a>
                                        </div><!-- / column -->
                                        <div class="col-sm-6">
                                            <a href="<?php echo e(url('shop/clear-cart')); ?>" class="mini-cart-btn mb-0"><i
                                                    class="md-icon dp12 mr-1"></i> <span class="va-middle">Clear
                                                    Cart</span></a>
                                        </div><!-- / column -->
                                        <?php else: ?>
                                        <div class="row">
                                            <div class="col">
                                                <p><i>No items in cart...</i></p>
                                            </div>
                                        </div>
                                        <?php endif; ?>

                </ul><!-- / navbar-nav -->
            </div><!-- / navbar-collapse -->
        </div><!-- / container -->
    </nav><!-- / split-navbar -->




    <?php echo $__env->yieldContent('welcome'); ?>
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
                    <?php $__currentLoopData = $allproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="rounded-circle h-100 card">
                        <a class=" m-2 text-center" href="<?php echo e(url('shop/'.$ap->curl)); ?>">
                            <img class="rounded-circle w-100 h-100" src="<?php echo e(asset('img/' . $ap->pimage)); ?>"
                                alt="image <?php echo e($ap->ptitle); ?>"></a>

                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                        <img class="foo-img" src="<?php echo e(asset('img/tmpimg/logo.png')); ?>" alt="logo">

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
            <p>&copy <?php echo e(date('Y')); ?> <b>Harokemet</b>. All Rights Reserved.</p>
        </div><!-- / container-fluid -->
    </footer>

    <?php echo $__env->yieldContent('product'); ?>

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
                                    <?php $__currentLoopData = $allproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ap): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <a href="<?php echo e(url('shop/'.$ap->curl)); ?>">
                                            <img style="height: 50px !important; width: 50px !important"
                                                class="rounded-circle " src="<?php echo e(asset('img/' . $ap->pimage)); ?>"
                                                alt="image <?php echo e($ap->ptitle); ?>"><?php echo e($ap->ptitle); ?>

                                        </a>
                                    </li>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    <script src="<?php echo e(asset('js/tmpjs/jquery.min.js')); ?>"></script>
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
    <script src="<?php echo e(asset('js/tmpjs/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/tmpjs/preloader.js')); ?>"></script>
    <script src="<?php echo e(asset('js/tmpjs/jquery.shuffle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/tmpjs/gallery.js')); ?>"></script>
    <script src="<?php echo e(asset('js/tmpjs/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/tmpjs/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
</body>

</html><?php /**PATH /Applications/MAMP/htdocs/harokemet/resources/views/site/master.blade.php ENDPATH**/ ?>