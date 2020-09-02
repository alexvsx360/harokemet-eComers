<?php $__env->startSection('welcome'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Cart Page.</h1>
        </div>
    </div>

    <?php if($cart): ?>
    <div class="row">
        <div class="col">
            <table class="text-center table table-bordered">
                <thead>
                    <tr>
                        <th class="w-25">Products</th>
                        <th>Quantity</th>
                        <th class="w-25">Price</th>
                        <th>Sub Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                            <img style="height: 100px;width: 100px" class=" rounded"
                                src="<?php echo e(asset('img/' . $item['attributes']['image'])); ?>" alt=""
                                class="img-thumbnail mr-3">
                            <?php echo e($item['name']); ?>

                        </td>
                        <td>
                            <a href="<?php echo e(url('shop/update-cart/minus/' . $item['id'])); ?>"><i
                                    class="fas fa-minus-circle"></i></a>
                            <input class="text-center" size="5" type="text" value="<?php echo e($item['quantity' ]); ?>">
                            <a href="<?php echo e(url('shop/update-cart/plus/' . $item['id'])); ?>#"><i
                                    class="fas fa-plus-circle"></i></a>
                        </td>
                        <td><?php echo e($item['price' ]); ?>$</td>
                        <td><?php echo e($item['quantity' ] * $item['price']); ?>$</td>
                        <td>
                            <a href="<?php echo e(url('shop/remove-item/' . $item['id'])); ?>" class="text-danger">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <p><b>Total:</b><?php echo e(Cart::getTotal()); ?>$
                <span class="float-right">
                    <a href="<?php echo e(url('shop/clear-cart')); ?>" class="btn btn-light">Clear Cart</a>
                </span>
            </p>
            <p>
                <a href="<?php echo e(url('shop/order-now')); ?>" class="btn btn-primary">Order Now!!</a>
            </p>
        </div>
    </div>
    <?php else: ?>
    <div class="row">
        <div class="col">
            <p><i>No items in cart...</i></p>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/site/content/cart.blade.php ENDPATH**/ ?>