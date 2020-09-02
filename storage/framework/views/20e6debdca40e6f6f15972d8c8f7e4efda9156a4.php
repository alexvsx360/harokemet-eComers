<?php 
$menu =App\Menu::all()->toArray();
?>



<?php $__env->startSection('welcome'); ?>

    <div class="container">
        <header class="account-header parallax">
            <div class="header-content dark text-center">
                <h1 class="header-title mb-0">MY ACCOUNT</h1>
                <p class="inner-space mb-0">John Doe</p>
            </div><!-- / header-content -->
        </header>
    </div><!-- / container -->

    <div class="spacer-2x">&nbsp;</div>

    <section id="my-account">
        <div class="container">
            <div class="row">

                

                <div class="col-sm-12 account-info">
                    <div id="personal-info" class="account-info-content">
                        <h4>PERSONAL INFO <span class="pull-right"><a href="#x" class="btn btn-sm btn-primary rectangle">EDIT</a></span></h4>
                        <div class="row">

                            <div class="col-xs-6 col-sm-4 col-md-2">
                                <img src="images/creator.jpg" alt="">
                                <a href="#x" class="btn btn-primary btn-xs rectangle no-margin">CHANGE IMAGE</a>
                            </div>

                            <div class="col-xs-6 col-sm-8 col-md-10">
                                <p>Full Name: <span>John Doe</span></p>
                                <p>Email: <span>me@mysite.com</span></p>
                                <p>Phone: <span>0123 4567 890</span></p>
                                <p>Date of Birth: <span>13 Aug 1991</span></p>
                            </div>

                        </div><!-- / row -->
                    </div><!-- / personal-info -->

                    <div id="shipping-info" class="account-info-content">
                        <h4>SHIPPING INFO <span class="pull-right"><a href="#x" class="btn btn-sm btn-primary rectangle">EDIT</a></span></h4>
                        <p class="space-bottom"><span><strong>John Doe - me@mysite.com</strong></span></p>
                        <p>Country: <span>USA</span></p>
                        <p>State: <span>Florida</span></p>
                        <p>City: <span>Miami</span></p>
                        <p>Address Line: <span>27 King Street, Apt. 33</span></p>
                        <p>ZIP Code: <span>33232</span></p>
                        <div class="account-info-footer"><a href="#x" class="btn btn-sm btn-primary rectangle">Add New Address</a></div>
                    </div><!-- / shipping-info -->

                    <div id="my-orders" class="account-info-content">
                        <h4>MY ORDERS <span class="pull-right"><a href="#x" class="btn btn-sm btn-primary rectangle">EDIT</a></span></h4>
                        <p><a href="#x">Order #1234</a> <span>- Paid & Shipped</span> - Tracking No: <span>#TRCK182736</span></p>
                        <p><a href="#x">Order #5678</a> <span>- Completed on 25.10.2016</span></p>
                        <p><a href="#x">Order #9012</a> <span>- Completed on 16.08.2016</span></p>
                    </div><!-- / my-orders -->


                </div><!-- / account-info -->

            </div><!-- / row -->
        </div><!-- / container -->
    </section>
    <!-- / my-account -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/site/menu/my.blade.php ENDPATH**/ ?>