<?php
$menu =App\Menu::all()->toArray();
?>



<?php $__env->startSection('welcome'); ?>

<div class="container">
    <header class="account-header parallax">
        <div class="header-content dark text-center">
            <h1 class="header-title mb-0 text-dark">MY ACCOUNT</h1>
            <p class="inner-space mb-0 text-dark"><?php echo e(Session::get('user_name')); ?></p>
        </div><!-- / header-content -->
    </header>
</div><!-- / container -->

<div class="spacer-2x">&nbsp;</div>

<section id="my-account">
    <div class="container">
        <div class="row">



            <div class="col-sm-12 account-info">
                <div id="personal-info" class="account-info-content">
                    <h4>PERSONAL INFO <span class="pull-right"><a href="<?php echo e(url('user/edit')); ?>"
                                class="btn btn-sm btn-primary rectangle">EDIT</a></span></h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-8 col-md-10">
                            <p>User Name: <span><?php echo e($user_item[0]->name); ?></span></p>
                            <p>Email: <span><?php echo e($user_item[0]->email); ?></span></p>
                            <p>Phone: <span><?php echo e($user_item[0]->phone); ?></span></p>
                            <p>First Name: <span><?php echo e($user_item[0]->first_name); ?></span></p>
                            <p>last Name: <span><?php echo e($user_item[0]->last_name); ?></span></p>
                        </div>

                    </div><!-- / row -->
                </div><!-- / personal-info -->

                <div id="shipping-info" class="account-info-content">
                    <h4>SHIPPING INFO </h4>

                    <p>Address: <span><?php echo e($user_item[0]->address); ?></span></p>
                    <p>Country: <span><?php echo e($user_item[0]->country); ?></span></p>
                    <p>State: <span><?php echo e($user_item[0]->state); ?></span></p>
                    <p>ZIP Code: <span><?php echo e($user_item[0]->zip); ?></span></p>

                </div><!-- / shipping-info -->
            </div>
        </div>
        <div class="row">



            <div class="col-sm-12 account-info">
                <div id="my-orders" class="account-info-content">
                    <h4>MY ORDERS</h4>
                    <div class="row">


                        <?php if(isset($order_item)): ?>
                        <?php $__currentLoopData = $order_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-sm-5 m-4 account-info border border-info">
                            <p class="mt-2"><i class="far fa-star"> Order <?php echo e($item->id); ?> </i></p>
                            <hr>
                            <p>Order status:
                                <?php if(!$item->ship_number == NULL): ?>

                                <i class="text-success far fa-check-circle"> Tracking No:
                                    <span><?php echo e($item->ship_number); ?></span>
                                </i>
                                <?php else: ?>
                                <i class="text-warning far fa-clock"> waiting for shippeeing</i>
                                <?php endif; ?>
                            </p>
                            <p><i class="far m-1 fa-calendar-alt"> Order Date:<span>
                                        <?php echo e(date('d/m/y', strtotime($item->created_at))); ?></i></span></p>
                            <p><i class="far m-1 fa-credit-card"> Order Total:<span> <?php echo e($item->total); ?>$</i></span>
                            </p>
                            <p><i class="fas fa-cart-arrow-down"> Order Contant:</i> <span>
                                    <?php $__currentLoopData = unserialize($item->order_data); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($order['name']); ?>, Quantity: <?php echo e($order['quantity']); ?>, Price:
                                        <?php echo e($order['price']); ?>$
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </span></p>

                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php else: ?>
                        <br>
                        <div class="col-sm-5 m-4 account-info ">
                            <p> No orders...</p>
                            <br>
                        </div>
                        <?php endif; ?>
                        <div class="container-fluid ">
                            <div class="row  justify-content-md-center">
                                <div class=" col-0">
                                    <?php echo e($order_item ->links()); ?>

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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/site/forms/my.blade.php ENDPATH**/ ?>