<?php $__env->startSection('welcome'); ?>
<div class="container-fluid ">
    <div class="row">
        <div class="col">
            <h1>Categories.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, tempore.</p>
        </div>
    </div>
    <div class="row">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-6 col-xl-4">
            <div>
            <h3><?php echo e($category['ctitle']); ?></h3>
            <p>
                <img  src="<?php echo e(asset('img/' .$category['cimage'])); ?>" alt="image of dog" width="300" height="200">
            </p>
            <p>
            <?php echo $category['carticle']; ?>

            </p>
            <p>
                <a href="<?php echo e(url('shop/'.$category['curl'])); ?>" class="btn btn-primary"> View Products</a>
            </p>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/categories.blade.php ENDPATH**/ ?>