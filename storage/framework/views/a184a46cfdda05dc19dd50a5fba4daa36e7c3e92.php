<?php $__env->startSection('welcome'); ?>

<div class="container">
<div class="row ">
<div class="col-12 mt-5 p-2 text-center">
<h1>Categories</h1>
</div>
</div>

<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="card mb-3" style="max-width: 1200px;">
<div class="row no-gutters">
<div class="col-md-4">
  <img src="<?php echo e(asset('img/' .$category['cimage'])); ?>" class="card-img-top" alt="<?php echo e($category['ctitle']); ?> image">
  </div>
    <div class="col-md-8">
  <div class="card-body">
    <h5 class="card-title"><?php echo e($category['ctitle']); ?></h5>
    <p class="card-text"><?php echo $category['carticle']; ?></p>
  
 
  <div class="text-center card-body">
  <span style="font-size: 10em; ">
  <a href="#" class=" card-link text-success"><i class="fas fa-edit"></i></a>
  </span>
<span style="font-size: 10em; ">
  <a href="<?php echo e(url('cms/'.$category['curl'])); ?>" class="m-5 card-link "><i class="fas fa-th"></i></a>
  </span>
<span style="font-size: 10em; ">
<a href="#" class=" card-link text-danger " ><i class="fas fa-trash-alt"></i></a>
</span>
</div>
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
  </span> 
 </div>
    <div class="col-md-8">
  <div class="card-body">
  <div class="form-group">
                <label for="cimg">Category image</label>
                    <input type="file" name="cimg" id="cimg" class="form-control">
                </div>
  <div class="form-group">
                <label for="ctitle">Category name</label>
                    <input type="text" name="ctitle" id="ctitle" class="form-control">
                </div>

    <div class="form-group">
                <label for="carticle">Category article</label>
                    <textarea cols="20" rows="10" type="text" name="carticle" id="carticle" class="form-control"></textarea>
                </div>

  </div>
    </div>
</div>
  </div>
</div>

<?php $__env->stopSection(); ?>


     
<?php echo $__env->make('cms.cms_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/cms/content/categories.blade.php ENDPATH**/ ?>