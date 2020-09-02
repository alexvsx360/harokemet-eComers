<?php $__env->startSection('welcome'); ?>


<div class="row ">
    <div class="col-12 mt-5 p-2 text-center">
        <h1>Client Massages Managing</h1>
        <!-- / table with default heading -->
    </div><!-- / coulmn -->

    <div class="col-lg-12">
        <!-- table with inverse heading -->
        <div class="card">
            <div class="card-body">
                <p class="lead mt-3 mb-3 ">Client Massages</p>

                <table class="table">
                    <thead class="thead-inverse">
                        <tr>

                            <th>USER</th>
                            <th>NAME</th>
                            <th>MASSAGE</th>
                            <th>TIME</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $massages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><i class="far fa-user"></i> <?php echo e($item->name); ?> </td>
                            <td><i class="fas fa-at"></i> <?php echo e($item->email); ?> </td>
                            <td>
                                <a class=" btn btn-success" data-toggle="modal" data-target=".x<?php echo e($item->id); ?>"
                                    href="#x">Read Massage</a>
                                <a class=" btn btn-danger" data-toggle="modal" data-target=".y<?php echo e($item->id); ?>"
                                    href="#x">Delete Massage</a>

                            </td>
                            <td><i class="far fa-calendar-alt"></i>
                                <?php echo e(date('d/m/y', strtotime($item->created_at))); ?></td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <!-- / table with inverse heading -->
            </div>
        </div>
    </div>
</div>
<?php $__currentLoopData = $massages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- modal -->
<div class="modal fade x<?php echo e($item->id); ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Massage From: <?php echo e($item->name); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- / modal-header -->
            <div class="modal-body">
                <p><?php echo e($item->massage); ?></p>
            </div><!-- / modal-body -->
            <div class="modal-footer ">

                <button type="button" class=" btn btn-danger" data-dismiss="modal">Close</button>

            </div><!-- / modal-footer -->
        </div><!-- / modal-content -->
    </div><!-- / modal-dialog -->
</div><!-- / modal -->
<!-- / default-modal -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $massages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- default-modal -->

<!-- modal -->
<div class="modal fade y<?php echo e($item->id); ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Delete Massage From -> <?php echo e($item->name); ?> ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!-- / modal-header -->
            <div class="modal-body">
                <p>Deleting the massage will be parmenent and no option to reverse!!</p>
            </div><!-- / modal-body -->
            <div class="modal-footer ">

                <form action="<?php echo e(url('cms/massage/' . $item->id)); ?>" method="POST">
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
<?php echo $__env->make('cms.cms_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/cms/massage.blade.php ENDPATH**/ ?>