<?php $__env->startSection('welcome'); ?>


<div class="col-12 mt-5 p-2 text-center">
    <h1>Content</h1>
</div>
<div class=" row">
    <?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="m-2 p-2 col-4">
        <div class="card">
            <h5 class="card-header">Title: <?php echo e($item['ctitle1']); ?></h5>
            <div class="card-body">


                <p class="card-text">Created at: <?php echo e($item['created_at']); ?></p>
                <p class="card-text">Updated at: <?php echo e($item['updated_at']); ?></p>
                <div class="card-body ">

                    <span style="font-size: 4em; ">
                        <a href="#x" class="m-2 p-2 float-right" data-toggle="modal" data-target=".x<?php echo e($item['id']); ?>"><i
                                class="text-danger fas fa-trash-alt"></i></a>
                    </span>
                    <span style="font-size: 4em; ">
                        <a href="<?php echo e(url('cms/content/' . $item['id'] . '/edit')); ?>"
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
                <form action="<?php echo e(url('cms/content')); ?>" method="POST" novalidate="novalidate" autocomplete="off">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="menu-id">Manu link</label>
                                <select name="menu_id" id="menu-id" class="form-control">
                                    <option value="">Choose Menu Link...</option>
                                    <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option <?php if(old('menu_id')): ?>==$item['id'] selected="selected" <?php endif; ?>
                                        value="<?php echo e($item['id']); ?>"><?php echo e($item['link']); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <span class="text-danger"><?php echo e($errors->first('menu_id')); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="ctitle1">Title 1</label>
                                <input value="<?php echo e(old('ctitle1')); ?>" type="text" name="ctitle1" id="ctitle1"
                                    class="form-control ">
                                <small class="text-muted"> max 50 chars</small>
                                <span class="text-danger"><?php echo e($errors->first('ctitle1')); ?></span>
                            </div>

                            <div class="form-group">
                                <label for="carticle1">Article 1</label>
                                <textarea cols="30" rows="10" name="carticle1" id="coarticle1"
                                    class="form-control "><?php echo e(old('carticle1')); ?></textarea>

                                <span class="text-danger"><?php echo e($errors->first('carticle1')); ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="ctitle2">Title 2</label>
                                <input value="<?php echo e(old('ctitle2')); ?>" type="text" name="ctitle2" id="ctitle2"
                                    class="form-control ">
                                <small class="text-muted"> max 50 chars</small>
                                <span class="text-danger"><?php echo e($errors->first('ctitle2')); ?></span>
                            </div>

                            <div class="form-group">
                                <label for="carticle2">Article 2</label>
                                <textarea cols="30" rows="10" name="carticle2" id="coarticle2"
                                    class="form-control "><?php echo e(old('carticle2')); ?></textarea>

                                <span class="text-danger"><?php echo e($errors->first('carticle2')); ?></span>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="ctitle3">Title 3</label>
                                <input value="<?php echo e(old('ctitle3')); ?>" type="text" name="ctitle3" id="ctitle3"
                                    class="form-control ">
                                <small class="text-muted"> max 30 chars</small>
                                <span class="text-danger"><?php echo e($errors->first('ctitle3')); ?></span>
                            </div>

                            <div class="form-group">
                                <label for="carticle3">Article 3</label>
                                <textarea cols="30" rows="10" name="carticle3" id="coarticle3"
                                    class="form-control "><?php echo e(old('carticle3')); ?></textarea>

                                <span class="text-danger"><?php echo e($errors->first('carticle3')); ?></span>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo e(url('cms/content')); ?>" class="btn float-right"><span style="font-size: 3em; "><i
                                class="text-danger far fa-times-circle"></i></span></a>
                    <button name="submit" type="submit" class="float-left" style="border:none;"><span
                            style="font-size: 4em; "><i class="text-success far fa-check-circle"></i></span></button>
                </form>

            </div>
        </div>
    </div>
</div>



<?php $__currentLoopData = $contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- default-modal -->

<!-- modal -->
<div class="modal fade x<?php echo e($item['id']); ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Delete -> <?php echo e($item['ctitle1']); ?> ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- / modal-header -->
            <div class="modal-body">
                <p>Deleting the content will be parmenent with no option to reverse!!</p>
            </div><!-- / modal-body -->
            <div class="modal-footer ">

                <form action="<?php echo e(url('cms/content/' . $item['id'])); ?>" method="POST">
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
<?php echo $__env->make('cms.cms_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/harokemet/resources/views/cms/content.blade.php ENDPATH**/ ?>