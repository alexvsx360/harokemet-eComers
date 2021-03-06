<?php $__env->startSection('welcome'); ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="">
        <h1>Edit Content</h1>
    </div>

    <div class="row m-4 p-4">
        <div class="col-8">
            <div class="card">
                <h5 class="card-header">Edit <?php echo e($content_item['ctitle1']); ?></h5>
                <div class="card-body">
                    <form action="<?php echo e(url('cms/content/' . $content_item['id'])); ?>" method="POST" novalidate="novalidate"
                        autocomplete="off">
                        <?php echo method_field('PUT'); ?>
                        <?php echo csrf_field(); ?>

                        <div class="form-group">
                            <label for="menu-id">Manu link</label>
                            <select name="menu_id" id="menu-id" class="form-control">

                                <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php if( $content_item['menu_id']==$item['id']): ?> selected="selected" <?php endif; ?>
                                    value="<?php echo e($item['id']); ?>"><?php echo e($item['link']); ?> Menu</option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <span class="text-danger"><?php echo e($errors->first('menu_id')); ?></span>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="ctitle1">Title 1</label>
                                    <input value="<?php echo e($content_item['ctitle1']); ?>" type="text" name="ctitle1" id="ctitle1"
                                        class="form-control ">
                                    <small class="text-muted">min 2 chars max 50 chars</small>
                                    <span class="text-danger"><?php echo e($errors->first('ctitle1')); ?></span>
                                </div>

                                <div class="form-group">
                                    <label for="carticle1">Article 1</label>
                                    <textarea cols="30" rows="10" name="carticle1" id="coarticle1"
                                        class="form-control "><?php echo e($content_item['carticle1']); ?></textarea>

                                    <span class="text-danger"><?php echo e($errors->first('carticle1')); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="ctitle2">Title 2</label>
                                    <input value="<?php echo e($content_item['ctitle2']); ?>" type="text" name="ctitle2" id="ctitle2"
                                        class="form-control ">
                                    <small class="text-muted"> max 50 chars</small>
                                    <span class="text-danger"><?php echo e($errors->first('ctitle2')); ?></span>
                                </div>

                                <div class="form-group">
                                    <label for="carticle2">Article 2</label>
                                    <textarea cols="30" rows="10" name="carticle2" id="coarticle2"
                                        class="form-control "><?php echo e($content_item['carticle2']); ?></textarea>

                                    <span class="text-danger"><?php echo e($errors->first('carticle2')); ?></span>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="ctitle3">Title 3</label>
                                    <input value="<?php echo e($content_item['ctitle3']); ?>" type="text" name="ctitle3" id="ctitle3"
                                        class="form-control ">
                                    <small class="text-muted"> max 30 chars</small>
                                    <span class="text-danger"><?php echo e($errors->first('ctitle3')); ?></span>
                                </div>

                                <div class="form-group">
                                    <label for="carticle3">Article 3</label>
                                    <textarea cols="30" rows="10" name="carticle3" id="coarticle3"
                                        class="form-control "><?php echo e($content_item['carticle3']); ?></textarea>

                                    <span class="text-danger"><?php echo e($errors->first('carticle3')); ?></span>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo e(url('cms/content')); ?>" class="btn float-right"><span style="font-size: 3em; "><i
                                    class="text-danger far fa-times-circle"></i></span></a>
                        <button name="submit" type="submit" class="float-left" style="border:none;"><span
                                style="font-size: 4em; "><i
                                    class="text-success far fa-check-circle"></i></span></button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</main>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('cms.cms_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/cms/edit_content.blade.php ENDPATH**/ ?>