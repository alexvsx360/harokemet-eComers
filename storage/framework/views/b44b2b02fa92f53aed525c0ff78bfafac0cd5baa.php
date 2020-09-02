<?php $__env->startSection('welcome'); ?>


<div class="container-fluid">
    <div class="row">
        <div class="container">
            <header class="about-header parallax">
                <div class="header-content dark text-center">
                    <p><img class="w-50 h-25" src="<?php echo e(asset('img/404.png')); ?>" alt=""></p>
                    <p><img class="w-100 h-25" src="<?php echo e(asset('img/opps.png')); ?>" alt=""></p>
                </div><!-- / header-content -->
            </header>
        </div><!-- / container -->


    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/errors/404.blade.php ENDPATH**/ ?>