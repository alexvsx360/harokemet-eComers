<?php $__env->startSection('welcome'); ?>

<div class="container">
  <div class="row ">
    <div class="col-12 mt-5 p-2 text-center">
      <h1>Categories</h1>
    </div>
  </div>

  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <div class="card mb-3" style="max-width: 800px; max-height: 400px;">
    <div class="row no-gutters">
      <div class="col-md-4">
        <img src="<?php echo e(asset('img/' .$item['cimage'])); ?>" class="card-img-top" alt="<?php echo e($item['ctitle']); ?> image">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($item['ctitle']); ?></h5>
          <p class="card-text"><?php echo $item['carticle']; ?></p>


          <div class="text-center card-body">
            <span style="font-size: 4em; ">
              <a href="#x" class="m-2 p-2 float-right" data-toggle="modal" data-target=".x<?php echo e($item['id']); ?>"><i
                  class="text-danger fas fa-trash-alt"></i></a>
            </span>
            <span style="font-size: 4em; ">
              <a href="<?php echo e(url('cms/categories/' . $item['id'] . '/edit')); ?>"
                class="m-2 p-2 float-right card-link text-success"><i class="fas fa-edit"></i></a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <form action="<?php echo e(url('cms/categories')); ?>" method="POST" novalidate="novalidate" autocomplete="off"
    enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="card mb-3" style="max-width: 800px;">
      <div class="row no-gutters">

        <div class="col-md-12">
          <div class="card-body">
            <div class="form-group">
              <label for="image">Category image</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="image" id="image" class="form-control">
                </div>
              </div>
              <small class="text-muted">Image format must be: .jpg, .jpeg, .png, .svg, .gif,</small>
              <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
            </div>

            <div class="form-group">
              <label for="ctitle">Category name</label>
              <input value="<?php echo e(old('ctitle')); ?>" type="text" name="ctitle" id="ctitle"
                class="original-text form-control">
              <small class="text-muted">min 2 chars, max 30 chars</small>
              <span class="text-danger"><?php echo e($errors->first('ctitle')); ?></span>
            </div>

            <div class="form-group">
              <label for="carticle">Article</label>
              <input type="text" value="<?php echo e(old('carticle')); ?>" name="carticle" id="carticle" class="form-control ">
              <small class="text-muted">min 2 chars, max 30 chars </small>
              <span class="text-danger"><?php echo e($errors->first('carticle')); ?></span>
            </div>
            <div class="form-group">
              <label for="curl">Category Url</label>
              <input value="<?php echo e(old('curl')); ?>" type="text" name="curl" id="curl" class="target-text form-control">
              <small class="text-muted">only small letters and - and numbers</small>
              <span class="text-danger"><?php echo e($errors->first('url')); ?></span>
            </div>
            <p>
              <a href="<?php echo e(url('cms/categories')); ?>" class="btn float-right"><span style="font-size: 3em; "><i
                    class="text-danger far fa-times-circle"></i></span></a>
              <button name="submit" type="submit" class="float-left" style="border:none;"><span
                  style="font-size: 3.5em; "><i class="text-success far fa-check-circle"></i></span></button>
            </p>
  </form>
</div>

<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- default-modal -->

<!-- modal -->
<div class="modal fade x<?php echo e($item['id']); ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title">Delete -> <?php echo e($item['ctitle']); ?> ?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><!-- / modal-header -->
      <div class="modal-body">
        <p>Deleting the category includs all the products in this category, are you shure??!!</p>
      </div><!-- / modal-body -->
      <div class="modal-footer ">

        <form action="<?php echo e(url('cms/categories/' . $item['id'])); ?>" method="POST">
          <?php echo method_field('DELETE'); ?>
          <?php echo csrf_field(); ?>
          <button type="button" class=" btn btn-danger" data-dismiss="modal">Close</button>
          <button name="submit" type="submit" class=" btn btn-success " style="border:none;">Delete</button>
        </form>

      </div><!-- / modal-footer -->
    </div><!-- / modal-content -->
  </div><!-- / modal-dialog -->
</div><!-- / modal -->
<!-- / default-modal -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('cms.cms_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/cms/categories.blade.php ENDPATH**/ ?>