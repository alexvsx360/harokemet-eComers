<?php
$menu =App\Menu::all()->toArray();
?>



<?php $__env->startSection('welcome'); ?>

<div class="container ">
    <header class=" parallax" style="background-image: url('img/dinco.jpg');">
        <div class="header-content dark text-center">
            <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <p>
                <h1 class="header-title mb-0 text-dark"><?php echo e($page_title); ?></h1>
            </p> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <p class="inner-space mb-0 text-dark">Harokrmet Shop</p>
        </div><!-- / header-content -->
    </header>
    <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if((! $content->ctitle1 == NULL) || (! $content->carticle1 == NULL)): ?>
    <div class=" row m-4 ">
        <div class="mx-auto col-12 m-2 ">
            <div class="account-info-content">
                <?php if(! $content->ctitle1 == NULL): ?>
                <h3><span class="mx-auto"><?php echo e($content->ctitle1); ?></span></h3>
                <?php endif; ?>
                <?php if(! $content->carticle1 == NULL): ?>
                <?php echo $content->carticle1; ?>

                <?php endif; ?>
            </div><!-- / my-orders -->
        </div>
    </div>
    <?php endif; ?>
    <?php if((! $content->ctitle2 == NULL) || (! $content->carticle2 == NULL) || (! $content->ctitle3 == NULL) || (!
    $content->carticle3 == NULL)): ?>
    <div class="row m-4 ">
        <?php if((! $content->ctitle2 == NULL) || (! $content->carticle2 == NULL)): ?>
        <div class="mr-auto col m-2 ">
            <div class=" h-100 account-info-content">
                <?php if(! $content->ctitle2 == NULL): ?>
                <h4><span class="mx-auto"><?php echo e($content->ctitle2); ?></span></h4>
                <?php endif; ?>
                <?php if(! $content->carticle2 == NULL): ?>
                <?php echo $content->carticle2; ?>

                <?php endif; ?>
            </div><!-- / my-orders -->


        </div>
        <?php endif; ?>

        <?php if((! $content->ctitle3 == NULL) || (! $content->carticle3 == NULL)): ?>
        <div class="ml-auto col-3 ">
            <div class=" account-info-content h-100">
                <?php if($content->ctitle3): ?>
                <h6><span class="mx-auto"><?php echo e($content->ctitle3); ?></span></h6>
                <?php endif; ?>
                <?php if($content->carticle3): ?>
                <?php echo $content->carticle3; ?>

                <?php endif; ?>
            </div><!-- / my-orders -->
        </div>
        <?php endif; ?>
    </div>

    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div><!-- / container -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/harokemet/resources/views/site/content/dynamic_content.blade.php ENDPATH**/ ?>