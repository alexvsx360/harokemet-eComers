<?php $__env->startSection('welcome'); ?>


<div class="row ">
  <div class="col-12 mt-5 p-2 text-center">
    <h1>Orders Managing</h1>
    <!-- / table with default heading -->
  </div><!-- / coulmn -->

  <div class="col-lg-12">
    <!-- table with inverse heading -->
    <div class="card">
      <div class="card-body">
        <p class="lead mt-3 mb-3 ">Orders List</p>

        <table class="table">
          <thead class="thead-inverse">
            <tr>

              <th>USER</th>
              <th>ORDER LIST</th>
              <th>TOTAL</th>
              <th>STATUS</th>
              <th>DATA</th>
              <th>MANEG</th>
            </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>

              <td><i class="far m-1 fa-user"></i><?php echo e($item->name); ?> </td>
              <td>
                <ul>
                  <?php $__currentLoopData = unserialize($item->order_data); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><?php echo e($order['name']); ?>, Quantity: <?php echo e($order['quantity']); ?>, Price: <?php echo e($order['price']); ?>$ </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </td>
              <td><i class="far m-1 fa-credit-card"></i><?php echo e($item->total); ?>$</td>
              <td>
                <?php if($item->ship_number === null ): ?>
                <i class="text-warning far fa-clock"> <span class="text-dark">Not Complited</span></i>

                <?php else: ?>
                <i class="text-success far fa-check-circle">
                  <span class="text-dark"> Traking Number:<br><br><?php echo e($item->ship_number); ?></span>
                </i>
                <?php endif; ?>
              </td>
              <td><i class="far m-1 fa-calendar-alt"></i> <?php echo e(date('d/m/y', strtotime($item->created_at))); ?></td>
              <td><a href="<?php echo e(url("cms/orders/$item->id/edit_orders")); ?>" class="btn btn-secondary btn-sm active"
                  role="button" aria-pressed="true">ADD SHIPING</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        <!-- / table with inverse heading -->
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('cms.cms_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/cms/orders.blade.php ENDPATH**/ ?>