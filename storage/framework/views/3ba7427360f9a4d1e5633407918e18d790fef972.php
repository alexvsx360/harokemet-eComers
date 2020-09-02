<?php $__env->startSection('welcome'); ?>
<div class="row">
    <div class="col-12 mt-5 p-2 text-center">
        <h1>Dashboard</h1>
        <p>
            <h4>welcome <?php echo e(Session::get('user_name')); ?> this is all the newest informashion we colected!</h4>
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

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $a += 1
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6 text-center fact-item">

                <h3 class="timer" id="photos" data-to="<?php echo e($a); ?>" data-speed="3000"><i
                        class=" fact-icon mb-3  fas fa-users text-secondary"> </i> <?php echo e($a); ?></h3>
                <h5 class="fact-title">USERS</h5>
            </div>


            <?php $__currentLoopData = $massages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $massage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $u += 1
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6 text-center fact-item">

                <h3 class="timer" id="photos" data-to="<?php echo e($u); ?>" data-speed="3000"><i
                        class="fact-icon mb-3 fas fa-envelope text-primary"></i> <?php echo e($u); ?></h3>
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
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $z += 1
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6 text-center fact-item">

                <h3 class="timer" id="paintings" data-to="<?php echo e($z); ?>" data-speed="4000"> <i
                        class="fact-icon fas fa-palette mb-3 text-info "></i> <?php echo e($z); ?></h3>
                <h5 class="fact-title">PRODUCTS</h5>
            </div>
            <!-- / fact -->

            <!-- fact -->
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = unserialize($order['order_data']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $x += 1
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="col-6 text-center fact-item">

                <h3 class="timer" id="art" data-to="<?php echo e($x); ?>" data-speed="5000"> <i
                        class="fact-icon fas fa-shopping-cart mb-3 text-success "></i> <?php echo e($x); ?></h3>
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
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $y += 1
            ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="col-4 rounded-circle text-center fact-item">

                <h3 class="timer" id="deliveries" data-to="<?php echo e($y); ?>" data-speed="6000"> <i
                        class="fact-icon fas fa-truck mb-3 text-info"></i> <?php echo e($y); ?></h3>
                <h5 class="fact-title">ORDERS MADE</h5>
            </div>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if(!$order['ship_number']): ?>
            <?php
            $d += 1
            ?>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="col-4  text-center fact-item">

                <h3 class="timer" id="deliveries" data-to="<?php echo e($d); ?>" data-speed="6000"> <i
                        class="fact-icon fas fa-truck mb-3 text-danger"></i> <?php echo e($d); ?></h3>
                <h5 class="fact-title">ORDERS NEEDS TO DELIVER</h5>

            </div>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($order['ship_number']): ?>
            <?php
            $s += 1
            ?>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="col-4  text-center fact-item">

                <h3 class="timer" id="deliveries" data-to="<?php echo e($s); ?>" data-speed="6000"> <i
                        class="fact-icon fas fa-truck mb-3 text-success"></i> <?php echo e($s); ?></h3>
                <h5 class="fact-title">ORDERS DELIVERD</h5>

            </div>

        </div>
    </span>
    <script type="text/javascript" src="//w.24timezones.com/l.js" async></script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('cms.cms_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/harokemet/resources/views/cms/index/dashboard.blade.php ENDPATH**/ ?>