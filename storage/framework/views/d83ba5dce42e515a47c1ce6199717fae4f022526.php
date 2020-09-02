<?php $__env->startSection('welcome'); ?>


<div class="">
    <h1>Order Edit</h1>
</div>

<div class="row m-4 p-4">
    <div class="col-8">
        <div class="card">
            <h5 class="card-header">Edit Order Number <?php echo e($orders['id']); ?></h5>
            <div class="card-body">
                <form action="<?php echo e(url('cms/orders/' .($id=$orders['id']))); ?>" method="POST" novalidate="novalidate"
                    autocomplete="off">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>

                    <div class="form-group">
                        <label for="title">sheeping number</label>
                        <input value="<?php echo e($orders['ship_number']); ?>" type="text" name="ship" id="ship"
                            class="form-control">

                    </div>

                    <a href="<?php echo e(url('cms/orders')); ?>" class="btn float-right"><span style="font-size: 3em; "><i
                                class="text-danger far fa-times-circle"></i></span></a>
                    <button name="submit" type="submit" class="float-left" style="border:none;"><span
                            style="font-size: 4em; "><i class="text-success far fa-check-circle"></i></span></button>
                </form>

            </div>
        </div>
    </div>
</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('cms.cms_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/cms/edit_orders.blade.php ENDPATH**/ ?>