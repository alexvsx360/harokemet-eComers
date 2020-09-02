<?php $__env->startSection('welcome'); ?>
<div class="container-fluid ">
    <div class="row">
        <div class="col">
            <h1> <?php echo e($page_title); ?></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, tempore.</p>
        </div>
    </div>
    <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-6">
            <h3><?php echo e($product->ptitle); ?></h3>
                <p><img width="450" src="<?php echo e(asset('img/' . $product->pimage)); ?>" alt=""></p>
                <p> <?php echo $product->particle; ?></p>
        <p><b>price:</b><?php echo e($product->price); ?>$</p>
        <p>
            <?php if(! Cart::get($product->id)): ?>
            <input data-pid="<?php echo e($product->id); ?>" type="button" class="btn btn-success add-to-cart-btn" value="+ Add To Cart">
            <?php else: ?>
            <input disabled="disabled" data-pid="<?php echo e($product->id); ?>" type="button" class="btn btn-success add-to-cart-btn" value="In Cart!">
            <?php endif; ?>
            <a href="<?php echo e(url('shop/' . $product->curl . '/' . $product->purl)); ?>" class="btn btn-primary"> 
            View product details</a>
        </p>
                
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/products.blade.php ENDPATH**/ ?>