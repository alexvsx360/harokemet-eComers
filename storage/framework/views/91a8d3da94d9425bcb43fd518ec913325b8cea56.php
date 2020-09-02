<?php $__env->startSection('logout'); ?>


@php
function(){
Session:: flush();
redirect('');
}
endphp
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/site/forms/logout.blade.php ENDPATH**/ ?>