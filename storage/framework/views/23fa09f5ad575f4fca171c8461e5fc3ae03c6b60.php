<?php $__env->startSection('welcome'); ?>

<div class="continer">

    <div class="row">
        <div class="col text-center mt-5 mb-5 modal-title">
            <h1 class="text-dark">Here Your can Signup whit your account.</h1>

        </div>
    </div>

    <div class="col-md-6 mx-auto ">
        <form action="" method="POST" novalidate="novalidate" autocomplete="off">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group ">
                        <label for="name">User name</label>
                        <input value="<?php echo e(old('name')); ?>" type="text" name="name" id="name" class="form-control">
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">

                    <div class="form-group ">
                        <label for="email">Email</label>
                        <input value="<?php echo e(old('email')); ?>" type="email" name="email" id="email" class="form-control"
                            placeholder="you@gmail.com">
                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="password">* Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                    </div>


                    <div class="form-group">
                        <label for="password-confirmation">* Verify Password</label>
                        <input type="password" name="password_confirmation" id="password-confirmation"
                            class="form-control">
                    </div>
                </div>
            </div>

            <input type="submit" value="Signup" class="btn btn-primary">
            <span class="text-danger"><?php echo e($signin_error ?? ''); ?></span>
        </form>

    </div>
</div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/harokemet/resources/views/site/forms/signup.blade.php ENDPATH**/ ?>