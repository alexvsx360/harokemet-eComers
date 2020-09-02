<?php 
$menu =App\Menu::all()->toArray();
?>



<?php $__env->startSection('welcome'); ?>

  
    <div class="container">
        <header class="about-header parallax">
            <div class="header-content dark text-center">
                <h1 class="header-title mb-0">BLOG</h1>
                <p class="inner-space mb-0">Read about what really matters!</p>
            </div><!-- / header-content -->
        </header>
    </div><!-- / container -->

    <div class="spacer-2x">&nbsp;</div>

    <section id="posts">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mx-auto blog-content">
                    <div class="blog block">
                        
                        <div class="post-content">
                            <div class="post-meta">
                            
                                <p class="text-sm"><i class="far fa-user text-primary mr-1"></i> JOHN <i class="far fa-bookmark text-primary ml-3 mr-1"></i> TRAVEL <i class="far fa-clock text-primary ml-3 mr-1"></i> 01 SEP 2018</p>
                            </div><!-- / post-meta -->
                            <h4 class="post-title"><a href="single-post.html">TRAVELING</a></h4>
                            <p class="mb-3">ellentesque aliquet odio ut nunc tempor imperdiet. Integer non magna maximus, egestas arcu at, tristique metus. Nullam nec lacus vitae libero viverra accumsan non nec felis. Morbi dapibus rhoncus fermentum. Phasellus iaculis rutrum enim quis lacinia cras congue velit ac neque...</p>
                            <p class="comments-info text-sm mt-1 mb-2"><i class="far fa-comment text-primary mr-1"></i> (3) COMMENTS</p>
                        </div><!-- / post-content -->
                    </div><!-- / blog-block -->

                    <div class="spacer">&nbsp;</div>

             

  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/eShop/resources/views/site/menu/blog.blade.php ENDPATH**/ ?>