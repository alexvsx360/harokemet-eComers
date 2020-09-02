
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <script>
    var BASE_URL = "<?php echo e(url('')); ?>/";
  
    </script>
    <title>EShop | <?php echo e(!empty($page_title) ? $page_title : 'site'); ?></title>
  </head>
  <body>
   <header>

   <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="<?php echo e(url('')); ?>">eshop</a>
  <div class="d-inline cart-icon-wrp">
    <a class="text-decoration-none" href="<?php echo e(url('shop/cart')); ?>">
    <?php if(! Cart::isEmpty()): ?>
    <span class="total-quantity"><?php echo e(Cart::getTotalQuantity()); ?></span>
    <?php endif; ?>
    <i class="fas fa-shopping-cart"></i>
    </a>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo e(url('about')); ?>">About</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo e(url('shop')); ?>">Shop</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item ">
        <a class="nav-link" href="<?php echo e(url('user/signin')); ?>">Signin</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo e(url('user/signup')); ?>">Signup</a>
      </li>
    </ul>
  </div>
  
</nav>
 
   </header>
   <main class="main-min-h"><?php echo $__env->yieldContent('welcome'); ?></main>

   <footer class="container-fluid ">
       <div class="row">
           <div class="col p-3 bg-info">
            <p class="text-center">Eshop &copy <?php echo e(date('Y')); ?></p>
           </div>
       </div>
       


   </footer>
   

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="<?php echo e(asset('js/script.js')); ?>"></script>
    <?php if( Session::has('sm')): ?>
   <script> toastr.options.positionClass = 'toast-bottom-full-width';
   toastr.success("<?php echo e(Session::get('sm')); ?>");
</script>
<?php endif; ?>
  </body>
</html>
<?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/master.blade.php ENDPATH**/ ?>