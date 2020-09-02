<?php $__env->startSection('welcome'); ?>
<div class="container-fluid ">
    <div class="row">
        <div class="col">
            <h1><?php echo e($item['ptitle']); ?></h1>
            <p><img width="700" src="<?php echo e(asset('img/' . $item['pimage'])); ?>" alt="">
        </p>
        <p><?php echo $item['particle']; ?></p>
        <p><b>Price:</b> <?php echo e($item['price']); ?>$</p>
        <p>
        <?php if(! Cart::get($item['id'])): ?>
            <input data-pid="<?php echo e($item['id']); ?>" type="button" class="btn btn-success add-to-cart-btn" value="+ Add To Cart">
            <?php else: ?>
            <input disabled="disabled" data-pid="<?php echo e($item['id']); ?>" type="button" class="btn btn-success add-to-cart-btn" value="In Cart!">
            <?php endif; ?>
            <a href="#" class="btn btn-primary"> To Cart</a>
</p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/item.blade.php ENDPATH**/ ?>