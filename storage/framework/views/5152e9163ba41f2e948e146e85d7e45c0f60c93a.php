<?php $__env->startSection('welcome'); ?>

<div class="container">
<div class="row ">
<div class="col-12 mt-5 p-2 text-center">
<h1>Products</h1>
</div>
</div>

<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="card mb-3" style="max-width: 1200px;">
<div class="row no-gutters">
<div class="col-md-4">
  <img src="<?php echo e(asset('img/' . $product->pimage)); ?>" class="card-img-top" alt="<?php echo e($product->ptitle); ?> image">
  </div>
    <div class="col-md-8">
  <div class="card-body">
    <h5 class="card-title"><?php echo e($product->ptitle); ?></h5>
    <p class="card-text"><?php echo e($product->particle); ?></p>
 
 
  <p><b>price:</b><?php echo e($product->price); ?>$</p>

  <span style="font-size: 5em; ">
  <a href="<?php echo e(url('cms/' . $product->curl . '/' . $product->purl)); ?>" class="m-5 card-link text-success"><i class="fas fa-edit"></i></a>
  </span>

<span style="font-size: 5em; ">
<a href="#" class="m-5 card-link text-danger " ><i class="fas fa-trash-alt"></i></a>
</span>
  </div>
</div>
</div>
</div>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<div class="card mb-3" style="max-width: 1200px;">
<div class="row no-gutters">
<div class="col-md-4">

<span style="font-size: 26em;">
  <a href="#" class=" card-link text-secondary"><i class="far fa-plus-square"></i></a>
  </span>  </div>
    <div class="col-md-8">
  <div class="card-body">
  <div class="form-group">
                <label for="pimg">Product image</label>
                    <input type="file" name="pimg" id="pimg" class="form-control">
                </div>
  <div class="form-group">
                <label for="ptitle">product name</label>
                    <input type="text" name="ptitle" id="ptitle" class="form-control">
                </div>

    <div class="form-group">
                <label for="particle">Product article</label>
                    <textarea cols="30" rows="10" type="text" name="particle" id="particle" class="form-control"></textarea>
                </div>

                <div class="form-group">
                <label for="price">Price</label>
                    <input type="text" name="price" id="price" class="form-control">
                </div>
  </div>
    </div>
</div>
  </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('cms.cms_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/cms/content/products.blade.php ENDPATH**/ ?>