<?php $__env->startSection('welcome'); ?>


<div class="col-12 mt-5 p-2 text-center">
    <h1>Menus</h1>
</div>
<div class=" row">
    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


    <div class="m-2 p-2 col-4">
        <div class="card">
            <h5 class="card-header">Link: <?php echo e($item['link']); ?></h5>
            <div class="card-body">
                <p class="card-text">Url: <?php echo e($item['murl']); ?></p>
                <p class="card-text">Title: <?php echo e($item['mtitle']); ?></p>
                <p class="card-text">Created at: <?php echo e($item['created_at']); ?></p>
                <p class="card-text">Updated at: <?php echo e($item['updated_at']); ?></p>
                <div class="card-body ">



                    <span style="font-size: 4em; ">
                        <a href="#x" class="m-2 p-2 float-right" data-toggle="modal" data-target=".x<?php echo e($item['id']); ?>"><i
                                class="text-danger fas fa-trash-alt"></i></a>
                    </span>
                    <span style="font-size: 4em; ">
                        <a href="<?php echo e(url('cms/menu/' . $item['id'] . '/edit')); ?>"
                            class="m-2 p-2 float-right card-link text-success"><i class="fas fa-edit"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="row ">
    <div class="m-2 p-2 col-9">
        <div class="card">
            <h5 class="card-header">Creat new</h5>
            <div class="card-body">
                <form action="<?php echo e(url('cms/menu')); ?>" method="POST" novalidate="novalidate" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="link">Link</label>
                        <input value="<?php echo e(old('link')); ?>" type="text" name="link" id="link"
                            class="form-control original-text">
                        <small class="text-muted">min 2 chars max 15 chars</small>
                        <span class="text-danger"><?php echo e($errors->first('link')); ?></span>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input value="<?php echo e(old('title')); ?>" type="text" name="title" id="title" class="form-control">
                        <small class="text-muted">min 2 chars max 15 chars</small>
                        <span class="text-danger"><?php echo e($errors->first('link')); ?></span>
                    </div>
                    <div class="form-group">
                        <label for="url">Url</label>
                        <input value="<?php echo e(old('url')); ?>" type="text" name="url" id="url" class="form-control target-text">
                        <small class="text-muted">only small letters and - and numbers</small>
                        <span class="text-danger"><?php echo e($errors->first('link')); ?></span>
                    </div>
                    <a href="<?php echo e(url('cms/menu')); ?>" class="btn float-right"><span style="font-size: 3em; "><i
                                class="text-danger far fa-times-circle"></i></span></a>
                    <button name="submit" type="submit" class="float-left" style="border:none;"><span
                            style="font-size: 4em; "><i class="text-success far fa-check-circle"></i></span></button>
                </form>

            </div>
        </div>
    </div>
</div>

</main>
<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- default-modal -->

<!-- modal -->
<div class="modal fade x<?php echo e($item['id']); ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Delete -> <?php echo e($item['mtitle']); ?> ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- / modal-header -->
            <div class="modal-body">
                <p>Deleting the menu delites all the contant in this menu, are you shure??!!</p>
            </div><!-- / modal-body -->
            <div class="modal-footer ">

                <form action="<?php echo e(url('cms/menu/' . $item['id'])); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button type="button" class=" btn btn-danger" data-dismiss="modal">Close</button>
                    <button name="submit" type="submit" class="   btn btn-success " style="border:none;">Delete</button>
                </form>

            </div><!-- / modal-footer -->
        </div><!-- / modal-content -->
    </div><!-- / modal-dialog -->
</div><!-- / modal -->
<!-- / default-modal -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('cms.cms_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/harokemet/resources/views/cms/menu.blade.php ENDPATH**/ ?>