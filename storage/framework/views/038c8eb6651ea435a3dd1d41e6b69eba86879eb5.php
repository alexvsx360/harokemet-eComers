<?php $__env->startSection('welcome'); ?>

<div class="continer">

    <div class="row">
        <div class="col text-center mt-5 mb-5 modal-title">
            <h1 class="text-dark">Here Your can Signup whit your account.</h1>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="" method="POST" novalidate="novalidate" autocomplete="off">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="email">* Email</label>
                    <input value="<?php echo e(old('email')); ?>" type="email" name="email" id="semail" class="form-control">
                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                </div>
                <div class="form-group">
                    <label for="password">* Password</label>
                    <input type="password" name="password" id="spassword" class="form-control">
                    <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                </div>
                <input name="submit" type="submit" value="signin" class="btn btn-primary">
                <span class="text-danger"><?php echo e($signin_error ?? ''); ?></span>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/site/forms/signin.blade.php ENDPATH**/ ?>