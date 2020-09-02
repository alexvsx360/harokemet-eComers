<?php
$menu =App\Menu::all()->toArray();
?>



<?php $__env->startSection('welcome'); ?>

<div class="container">
    <header class="contact-header parallax">
        <div class="header-content dark text-center">
            <h1 class="header-title mb-0 text-dark" style="text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white,
            1px 1px 0 white">CONTACT</h1>
            <p class="inner-space mb-0 text-dark" style="text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white,
            1px 1px 0 white">Get in touch with Us!</p>
        </div><!-- / header-content -->
    </header>
</div><!-- / container -->

<div class="spacer-2x">&nbsp;</div>

<section id="contact-info">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-box inner-space text-center">
                    <i class="fas fa-mobile-alt contact-icon mb-3"></i>
                    <h5 class="box-title">PHONE</h5>
                    <p class="box-description"><a href="tel:+972545393362"> +972
                            54-539-3362</a></p>

                </div><!-- / contact-box -->
            </div><!-- / column -->
            <div class="col-md-4">
                <div class="contact-box inner-space text-center">
                    <i class="fas fa-map-marked-alt contact-icon mb-3"></i>
                    <h5 class="box-title">LOCATION</h5>
                    <p class="box-description">Israel, Ramat Gan</p>
                    <p class="box-description mb-0">Hamatmid 23</p>
                </div><!-- / contact-box -->
            </div><!-- / column -->
            <div class="col-md-4">
                <div class="contact-box inner-space text-center">
                    <i class="far fa-envelope contact-icon mb-3"></i>
                    <h5 class="box-title">EMAIL</h5>
                    <p class="box-description"><a href="mailto:annasokol026@gmail.com">annasokol026@gmail.com</a></p>
                </div><!-- / contact-box -->
            </div><!-- / column -->
        </div><!-- / row -->
    </div><!-- / container -->
</section><!-- / contact-info -->

<div class="spacer-2x">&nbsp;</div>

<section id="contact" class="bg-white">
    <div class="container w50">
        <h2 class="section-title text-center mb-0">GET IN TOUCH</h2>
        <div class="spacer">&nbsp;</div>
        <p class="text-center">Quisque et bibendum purus. In non neque nec nisi laoreet rutrum. Vivamus maximus massa
            sed tellus convallis porta.</p>
        <div class="spacer">&nbsp;</div>

        <form action="" method="POST" novalidate="novalidate" autocomplete="off">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group ">

                        <label for="name">NAME</label>
                        <?php if( Session::has('user_id')): ?>
                        <input value="<?php echo e(Session::get('user_name')); ?>" type="text" name="name" id="name"
                            class="form-control" placeholder="Your Name">
                        <?php else: ?>
                        <input value="<?php echo e(old('name')); ?>" type="text" name="name" id="name" class="form-control">
                        <?php endif; ?>
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">

                    <div class="form-group ">
                        <label for="email">Email</label>
                        <?php if( Session::has('user_email')): ?>
                        <input value="<?php echo e(Session::get('user_email')); ?>" type="email" name="email" id="email"
                            class="form-control" placeholder="you@gmail.com">
                        <?php else: ?>
                        <input value="<?php echo e(old('email')); ?>" type="email" name="email" id="email" class="form-control"
                            placeholder="you@gmail.com">
                        <?php endif; ?>
                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="massage">Massage</label>
                        <textarea cols="30" rows="10" name="massage" id="massage"
                            class="form-control "><?php echo e(old('massage')); ?></textarea>
                        <small class="text-muted">min 2 chars </small>
                        <span class="text-danger"><?php echo e($errors->first('massage')); ?></span>
                    </div>


                </div>
            </div>

            <input type="submit" value="send" class="btn btn-primary">

        </form>

    </div><!-- / container -->
</section><!-- / contact -->
<!-- Contact Form -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/harokemet/resources/views/site/content/contact.blade.php ENDPATH**/ ?>