<?php $__env->startSection('welcome'); ?>


<div class="">
  <h1>Edit Category</h1>
</div>

<div class="row m-4 p-4">
  <div class="col-8">
    <div class="card">
      <h5 class="card-header">Edit <?php echo e($categories_item['ctitle']); ?></h5>
      <div class="card-body">

        <form action="<?php echo e(url('cms/categories/' . $categories_item['id'])); ?>" method="POST" novalidate="novalidate"
          autocomplete="off" enctype="multipart/form-data">
          <?php echo method_field('PUT'); ?>
          <?php echo csrf_field(); ?>
          <input type="hidden" name="item_id" value="<?php echo e($categories_item['id']); ?>">
          <div class="card mb-3" style="max-width: 800px;">
            <div class="row no-gutters">

              <div class="col-md-12">
                <div class="card-body">
                  <div class="form-group">
                    <img src="<?php echo e(asset('img/'. $categories_item['cimage'])); ?>" class="mx-auto  w-25" alt="">
                  </div>

                  <div class="form-group">
                    <label for="image">Category image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" id="image" class="form-control">
                      </div>
                    </div>
                    <small class="text-muted">Image format must be: .jpg, .jpeg, .png, .svg, .gif, </small>
                    <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
                  </div>

                  <div class="form-group">
                    <label for="ctitle">Category name</label>
                    <input value="<?php echo e($categories_item['ctitle']); ?>" type="text" name="ctitle" id="ctitle"
                      class="original-text form-control">
                    <small class="text-muted">min 2 chars, max 50 chars</small>
                    <span class="text-danger"><?php echo e($errors->first('ctitle')); ?></span>
                  </div>
                  <div class="form-group">
                    <label for="carticle">Article</label>
                    <input type="text" value="<?php echo e($categories_item['carticle']); ?>" name="carticle" id="carticle"
                      class="form-control ">
                    <small class="text-muted">min 2 chars, max 30 chars </small>
                    <span class="text-danger"><?php echo e($errors->first('carticle')); ?></span>
                    <p>
                  </div>
                  <div class="form-group">
                    <label for="curl">Category Url</label>
                    <input value="<?php echo e($categories_item['curl']); ?>" type="text" name="curl" id="curl"
                      class="target-text form-control">
                    <small class="text-muted">only small letters and - and numbers</small>
                    <span class="text-danger"><?php echo e($errors->first('curl')); ?></span>
                  </div>
                  <a href="<?php echo e(url('cms/categories')); ?>" class="btn float-right"><span style="font-size: 3em; "><i
                        class="text-danger far fa-times-circle"></i></span></a>
                  <button name="submit" type="submit" class="float-left" style="border:none;"><span
                      style="font-size: 3.5em; "><i class="text-success far fa-check-circle"></i></span></button>
                  </p>
        </form>
      </div>






      <?php $__env->stopSection(); ?>
<?php echo $__env->make('cms.cms_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/cms/edit_categories.blade.php ENDPATH**/ ?>