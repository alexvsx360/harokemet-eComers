<?php $__env->startSection('welcome'); ?>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="">
        <h1>Add Menu Link</h1>
    </div>
    <div class="row">
        <div class="col-8">
            <form action="" method="POST" novalidate="novalidate" autocomplete="off">
                <div class="form-group">
                    <label for="link"><span class="text-danger">*</span>Link</label>
                    <input type="text" name="link" id="link" placeholder=""class="form-control">
                    <small class="text-muted" >The Menu Link, min 2 chars max 50 chars</small>
                </div>
            </form>
        </div>
    </div>

</main>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('cms.cms_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/cms/content/add_menu.blade.php ENDPATH**/ ?>