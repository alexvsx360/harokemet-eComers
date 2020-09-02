<?php $__env->startSection('welcome'); ?>

<div class="container">
  <div class="row ">
    <div class="col-12 mt-5 p-2 text-center">
      <h1>Chose Product Category</h1>
    </div>
  </div>
  <button type="button" class="m-2 p-2 btn btn-outline-secondary" onclick="sAdd()">Add Product</button>

  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <button type="button" class="m-2 p-2 btn btn-outline-secondary"
    onclick="s<?php echo e($category['id']); ?>()"><?php echo e($category['ctitle']); ?></button>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="card mb-3" style="max-width: 800px; max-height: 1200px;">
    <div class="row " id="<?php echo e($category['id']); ?>">

      <div class="col-8">
        <div class="card-body">
          <h1 class="card-title"><?php echo e($category['ctitle']); ?></h1>
          <p class="card-text"><?php echo $category['carticle']; ?></p>

        </div>
      </div>
      <div class="col-4">
        <img src="<?php echo e(asset('img/' .$category['cimage'])); ?>" style="max-width: 90px; max-height: 90px;"
          class="m-2 p-2 float-right card-img-top" alt="<?php echo e($category['ctitle']); ?> image">
      </div>
    </div>
  </div>

  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($product['categorie_id'] == $category['id']): ?>

  <div class="card mb-3" style="max-width: 800px; max-height: 1200px;">
    <div class="row ">
      <div class="col-md-4">
        <img src="<?php echo e(asset('img/' .$product['pimage'])); ?>" class="h-100 card-img-top" alt="<?php echo e($product['ptitle']); ?> image">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($product['ptitle']); ?></h5>
          <p class="card-text"><?php echo $product['particle']; ?></p>
        </div>
        <span style="font-size: 4em; ">
          <a href="#x" class="m-2 p-2 float-right" data-toggle="modal" data-target=".x<?php echo e($product['id']); ?>"><i
              class="text-danger fas fa-trash-alt"></i></a>
        </span>
        <span style="font-size: 4em; ">
          <a href="<?php echo e(url('cms/products/' . $product['id'] . '/edit')); ?>"
            class="m-2 p-2 float-right card-link text-success"><i class="fas fa-edit"></i></a>
        </span>



      </div>
    </div>
  </div>



  <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <script>
    function s<?php echo e($category['id']); ?>() {
    var elmnt = document.getElementById("<?php echo e($category['id']); ?>");
    elmnt.scrollIntoView(true);
  }
  </script>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <form action="<?php echo e(url('cms/products')); ?>" method="POST" novalidate="novalidate" autocomplete="off" id="add_product"
    enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="card mb-3" style="max-width: 800px;">
      <div class="row no-gutters">

        <div class="col-md-12">
          <div class="card-body">
            <div class="form-group">
              <label for="categorie-id">Ctegory link</label>
              <select name="categorie_id" id="categorie-id" class="form-control">
                <option value="">Choose Category Link...</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option <?php if(old('categorie_id')): ?>==$item['id'] selected="selected" <?php endif; ?> value="<?php echo e($item['id']); ?>">
                  <?php echo e($item['ctitle']); ?> Category</option>
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
              <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
            </div>

            <div class="form-group">
              <label for="ptitle">product name</label>
              <input value="<?php echo e(old('ptitle')); ?>" type="text" name="ptitle" id="ptitle"
                class="original-text form-control">
              <small class="text-muted">min 2 chars, max 30 chars</small>
              <span class="text-danger"><?php echo e($errors->first('ptitle')); ?></span>
            </div>

            <div class="form-group">
              <label for="price">Price $</label>
              <input value="<?php echo e(old('price')); ?>" type="text" name="price" id="price" class="form-control ">
              <small class="text-muted">Mast be number only , price is in $</small>
              <span class="text-danger"><?php echo e($errors->first('price')); ?></span>
            </div>
            <div class="form-group">
              <label for="particle">Article</label>
              <textarea cols="30" rows="10" name="particle" id="coarticle"
                class="form-control "><?php echo e(old('particle')); ?></textarea>
              <small class="text-muted">min 2 chars </small>
              <span class="text-danger"><?php echo e($errors->first('particle')); ?></span>
            </div>
            <div class="form-group">
              <label for="purl">product Url</label>
              <input value="<?php echo e(old('purl')); ?>" type="text" name="purl" id="purl" class="target-text form-control">
              <small class="text-muted">only small letters and - and numbers</small>
              <span class="text-danger"><?php echo e($errors->first('url')); ?></span>
            </div>
            <a href="<?php echo e(url('cms/products')); ?>" class="btn float-right"><span style="font-size: 3em; "><i
                  class="text-danger far fa-times-circle"></i></span></a>
            <button name="submit" type="submit" class="float-left" style="border:none;"><span
                style="font-size: 3.5em; "><i class="text-success far fa-check-circle"></i></span></button>
  </form>
</div>

<script>
  function sAdd() {
    var elmnt = document.getElementById("add_product");
    elmnt.scrollIntoView(true);
  }
</script>

<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- default-modal -->

<!-- modal -->
<div class="modal fade x<?php echo e($product['id']); ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title">Delete -> <?php echo e($product['ptitle']); ?> ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><!-- / modal-header -->
      <div class="modal-body">
        <p>Deleting the product will be parmenent with no option to reverse!!</p>
      </div><!-- / modal-body -->
      <div class="modal-footer ">

        <form action="<?php echo e(url('cms/products/' . $product['id'])); ?>" method="POST">
          <?php echo method_field('DELETE'); ?>
          <?php echo csrf_field(); ?>
          <button type="button" class=" btn btn-danger" data-dismiss="modal">Close</button>
          <button name="submit" type="submit" class=" btn btn-success" style="border:none;">Delete</button>
        </form>

      </div><!-- / modal-footer -->
    </div><!-- / modal-content -->
  </div><!-- / modal-dialog -->
</div><!-- / modal -->
<!-- / default-modal -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('cms.cms_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/cms/products.blade.php ENDPATH**/ ?>