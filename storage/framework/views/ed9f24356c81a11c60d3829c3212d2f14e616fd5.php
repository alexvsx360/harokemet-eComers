<?php $__env->startSection('welcome'); ?>

<div class="container">
    <header class=" parallax" style="background-image: url('img/catego.jpg');">
        <div class="header-content dark text-center">
            <h1 class="header-title mb-0 text-dark "><?php echo e($page_title); ?></h1>
            <p class="inner-space mb-0 text-dark ">Harokemet Shop</p>
        </div><!-- / header-content -->
    </header>

    <section id="gallery" class="p-0 line-effect">
        <div class="container">
            <!-- gallery filter -->
            <ul class="gallery-filter list-inline text-center">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(url('shop/'.$category['curl'])); ?>"><?php echo e($category['ctitle']); ?></a>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <!-- / gallery filter -->
        </div><!-- / container -->
        <div class="container full-width">
            <h3 class="section-title hidden">GALLERY</h3>
            <ul class="row gallery line-effect list-unstyled mb-0" id="grid">
                <!-- gallery -->

                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="col-md-6 col-lg-4 gallery" data-groups='["framed"]'>
                    <figure class="gallery-item effect-bubba">
                        <img src="<?php echo e(asset('img/' .$category['cimage'])); ?>" alt="">
                        <figcaption>
                            <div class="hover-content text-center">
                                <h2 class="hover-title text-center text-white"><?php echo e($category['ctitle']); ?></h2>
                                <!-- / hover-title -->
                                <p class="gallery-info text-center text-white"> <?php echo $category['carticle']; ?>

                                    <span class="gallery-icons">
                                        <a href="<?php echo e(url('shop/'.$category['curl'])); ?>" class="gallery-button"><i
                                                class="far fa-eye"></i></a>

                                    </span>
                                    <!--/ gallery-icons -->
                                </p><!-- / gallery-info -->
                            </div><!-- / hover-content -->
                        </figcaption>
                    </figure><!-- / gallery-item -->
                </li><!-- / gallery -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </ul><!-- / gallery -->
        </div><!-- / container -->
    </section>

</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/site/content/categories.blade.php ENDPATH**/ ?>