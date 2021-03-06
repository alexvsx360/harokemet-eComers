<?php $__env->startSection('welcome'); ?>


<div class="">
  <h1>Edit Product</h1>
</div>

<div class="row m-4 p-4">
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Edit <?php echo e($products_item['ptitle']); ?></h5>
      <div class="card-body">

        <form action="<?php echo e(url('cms/products/' . $products_item['id'])); ?>" method="POST" novalidate="novalidate"
          autocomplete="off" enctype="multipart/form-data">
          <?php echo method_field('PUT'); ?>
          <?php echo csrf_field(); ?>
          <input type="hidden" name="item_id" value="<?php echo e($products_item['id']); ?>">
          <div class="card mb-3" style="max-width: 800px;">
            <div class="row no-gutters">

              <div class="col-12">
                <div class="card-body">
                  <div class="form-group">
                    <img src="<?php echo e(asset('img/'. $products_item['pimage'])); ?>" class="mx-auto  w-25" alt="">
                  </div>
                  <div class="col-12">
                    <div class="card-body">
                      <div class="form-group">
                        <label for="categorie-id">Ctegory link</label>
                        <select name="categorie_id" id="categorie-id" class="form-control">
                          <option value="">Choose Category Link...</option>
                          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option <?php if($products_item['categorie_id']==$item['id'] ): ?> selected="selected" <?php endif; ?>
                            value="<?php echo e($item['id']); ?>"><?php echo e($item['ctitle']); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <span class="text-danger"><?php echo e($errors->first('categorie_id')); ?></span>
                      </div>
                      <div class="form-group">
                        <label for="image">product image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" id="image" class="form-control">
                          </div>
                        </div>
                        <small class="text-muted">Image format must be: .jpg, .jpeg, .png, .svg, .gif, </small>
                        <span class="text-danger"><?php echo e($errors->first('pimage')); ?></span>
                      </div>

                      <div class="form-group">
                        <label for="ptitle">product name</label>
                        <input value="<?php echo e($products_item['ptitle']); ?>" type="text" name="ptitle" id="ptitle"
                          class="original-text form-control">
                        <small class="text-muted">min 2 chars, max 50 chars</small>
                        <span class="text-danger"><?php echo e($errors->first('ptitle')); ?></span>
                      </div>
                      <div class="form-group">
                        <label for="price">Price $</label>
                        <input value="<?php echo e($products_item['price']); ?>" type="text" name="price" id="price"
                          class="form-control ">
                        <small class="text-muted">Mast be number only , price is in $</small>
                        <span class="text-danger"><?php echo e($errors->first('price')); ?></span>
                      </div>
                      <div class="form-group">
                        <label for="particle">Article</label>
                        <textarea cols="30" rows="10" name="particle" id="coarticle"
                          class="form-control "><?php echo e($products_item['particle']); ?></textarea>
                        <small class="text-muted">min 2 chars </small>
                        <span class="text-danger"><?php echo e($errors->first('particle')); ?></span>
                      </div>
                      <div class="form-group">
                        <label for="purl">product Url</label>
                        <input value="<?php echo e($products_item['purl']); ?>" type="text" name="purl" id="purl"
                          class="target-text form-control">
                        <small class="text-muted">only small letters and - and numbers</small>
                        <span class="text-danger"><?php echo e($errors->first('url')); ?></span>
                      </div>
                      <a href="<?php echo e(url('cms/products')); ?>" class="btn float-right"><span style="font-size: 3em; "><i
                            class="text-danger far fa-times-circle"></i></span></a>
                      <button name="submit" type="submit" class="float-left" style="border:none;"><span
                          style="font-size: 3.5em; "><i class="text-success far fa-check-circle"></i></span></button>
        </form>
      </div>





      <?php $__env->stopSection(); ?>
<?php echo $__env->make('cms.cms_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/cms/edit_products.blade.php ENDPATH**/ ?>