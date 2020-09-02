<?php $__env->startSection('welcome'); ?>
<div class="container ">

    <header class=" parallax" style="background-image: url('<?php echo e(asset('img/'.$products[0]->cimage)); ?>');">
        <div class="header-content dark text-center">
            <h1 class="header-title mb-0 text-dark" style="text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white,
            1px 1px 0 white"> <?php echo e($page_title); ?> </h1>
            <p class="inner-space mb-0 text-dark" style="text-shadow: -1px -1px 0 white, 1px -1px 0 white, -1px 1px 0 white,
            1px 1px 0 white">Harokemet Shop Products</p>
        </div><!-- / header-content -->
    </header>
    <section id="gallery" class="p-0 line-effect">

        <!-- gallery filter -->
        <ul class="gallery-filter list-inline text-center">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(url('shop/'.$category['curl'])); ?>"><?php echo e($category['ctitle']); ?></a>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <!-- / gallery filter -->


        <div class="container  ">
            <h3 class="section-title hidden">GALLERY</h3>
            <ul class="row gallery line-effect list-unstyled mb-0" id="grid">
                <!-- gallery -->
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="col-md-6 col-lg-4 gallery" data-groups='["framed"]'>
                    <figure class="gallery-item effect-bubba">
                        <img src="<?php echo e(asset('img/' . $product->pimage)); ?>" alt="">
                        <figcaption>
                            <div class="hover-content">
                                <h2 class="hover-title text-center text-white"><?php echo e($product->ptitle); ?></h2>
                                <!-- / hover-title -->
                                <p class="gallery-info text-center text-white"> <b>price:</b><?php echo e($product->price); ?>$
                                    <span class="gallery-icons">
                                        <?php if(! Cart::get($product->id)): ?>
                                        <a href="#x" class="gallery-button product-popup" data-pid="<?php echo e($product->id); ?>"
                                            data-toggle="modal" data-target=".x<?php echo e($product->id); ?>"><i
                                                class=" fas fa-plus"></i></a>
                                        <?php else: ?>
                                        <a href="<?php echo e(url('shop/cart')); ?>" class="gallery-button"><i
                                                class="fas fa-shopping-cart"></i></a>
                                        <?php endif; ?>
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

        <div class="container-fluid ">
            <div class="row  justify-content-md-center">
                <div class=" col-0">
                    <?php echo e($products->links()); ?>

                </div>
            </div>
    </section>
    <!-- / gallery -->
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('product'); ?>

<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- product-modal -->
<div class="modal fade product-modal x<?php echo e($product->id); ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class=" close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- / modal-header -->

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row vcenter">
                        <div class=" col-md-6">

                            <img src="<?php echo e(asset('img/' . $product->pimage)); ?>" alt="">

                        </div><!-- / column -->
                        <div class="col-md-6">
                            <h4 class="single-product-title"><?php echo e($product->ptitle); ?></h4>

                            <?php echo $product->particle; ?>

                            <div class="product-info pb-3 pt-3">

                                <p class="mb-3"><i class="far fa-bookmark text-muted mr-1"></i> Price: <span
                                        class="text-black"> <b> <?php echo e($product->price); ?>$</b></span></p>


                                </form>
                            </div><!-- / product-info -->
                        </div><!-- / column -->
                    </div><!-- / row -->
                </div><!-- / container-fluid -->
            </div><!-- / modal-body -->
            <div class="modal-footer">
                <div class="container-fluid">
                    <div class="row vcenter">
                        <div class="col-md-4 ">
                            <p class="mb-0 text-white creator-info "><img src="<?php echo e(asset('img/tmpimg/logo.png')); ?>"
                                    class="creator-image bg-light " alt=""> <span><b>Harokemet</b></span>
                                <span class="text-sm">Poduct Disaine</span></p>
                        </div><!-- / column -->

                        <div class="col-md-4">
                            <h3 class="text-center text-white mb-0 final-price"><b> <?php echo e($product->price); ?>$</b></h3>
                        </div><!-- / column -->

                        <div class="col-md-4 text-right">
                            <p>
                                <?php if(! Cart::get($product->id)): ?>
                                <input data-pid="<?php echo e($product->id); ?>" type="button"
                                    class="btn btn-success add-to-cart-btn" value="+ Add To Cart">
                                <?php else: ?>
                                <input disabled="disabled" data-pid="<?php echo e($product->id); ?>" type="button"
                                    class="btn btn-success" value="In Cart!">
                                <?php endif; ?>

                        </div><!-- / column -->
                    </div><!-- / row -->
                </div><!-- / container -fluid -->
            </div><!-- / modal-footer -->
        </div><!-- / modal-content -->
    </div><!-- / modal-dialog -->
</div><!-- / modal -->
<!-- / product-modal -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/harokemet/resources/views/site/content/products.blade.php ENDPATH**/ ?>