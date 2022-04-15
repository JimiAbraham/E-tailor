



<?php $__env->startSection('contents'); ?>


<div class="pagehead-bg   primary-bg" >
</div> 

<div class="container has-pagehead is-pagetitle">
<div class="section">
  <h5 class="pagetitle"><?php echo e(auth()->user()->name); ?>, Welcome to dashboard</h5>
      </div>
</div>







<div class="spacer-large"></div>
<div class="container over mb0 transparent pr0 pl0 relative">
<div class="section pt0 pb0">

<div class="row settings-row " >

<div class="col s6 ">
<div class="setting-box z-depth-1 center ">
            <a href="<?php echo e(route('all-clients')); ?>">
              <i class="mdi mdi-emoticon-cool z-depth-1"></i>
            <h6>My Clients
          </a>
</div>
</div>
<div class="col s6 ">
<div class="setting-box z-depth-1 center ">
          <a href="<?php echo e(route('logout')); ?>">
              <i class="mdi mdi-run z-depth-1"></i>
            <h6>Log out</h6>
          </a>
</div>
</div>
<div class="col s6 ">
<div class="setting-box z-depth-1 center ">
            <a href="<?php echo e(route('profile')); ?>">
              <i class="mdi mdi mdi-settings z-depth-1"></i>
            <h6>Profile</h6>
          </a>
</div>
</div>
<div class="col s6 ">
<div class="setting-box z-depth-1 center ">
            <a href="<?php echo e(route('birthdays')); ?>">
              <i class="mdi mdi-cake z-depth-1"></i>
            <h6>Clients Birthdays</h6>
          </a>
</div>
</div>
<div class="col s6 ">
  
  
<div class="setting-box z-depth-1 center ">
 
            <a href="<?php echo e(route('reviews')); ?>">
           
              <i class="mdi mdi-email-open z-depth-1"></i>
            <h6>Reviews</h6>
          </a>
</div>
</div>
  <div class="col s6 ">
<div class="setting-box z-depth-1 center ">
            <a href="<?php echo e(route('portfolio')); ?>">
              <i class="mdi mdi-hanger z-depth-1"></i>
            <h6>My Portfolio</h6>
          </a>
</div>
</div>
</div>



</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tl\resources\views/home/dashboard.blade.php ENDPATH**/ ?>