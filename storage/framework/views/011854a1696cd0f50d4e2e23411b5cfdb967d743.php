



<?php $__env->startSection('contents'); ?>

<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <h5 class="pagetitle">Contact Options</h5>
            </div>
    </div>
    
  
  
  
  
    
  
  
  
  <div class="container over z-depth-1">
    <div class="section pt0 pb0">
  
      <?php $__currentLoopData = $reachClient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
  
      <div class="row mb0">
                  <div class="col s12 pad-0"><h5 class="bot-20 sec-tit  ">Reach out to <?php echo e($rc->name); ?></h5>    
  <!--   Icon Section   -->
  <div class="row">
      <div class="col s12 m12 l4">
      <div class="icon-block block-small z-depth-1">
        <div class="icon  primary-text"><i class="mdi mdi-phone"></i></div>
        <div class="title ">Call</div>
        <div class="tagline ">
          <a href="tel:<?php echo e($rc->phone); ?>">
          <?php echo e($rc->phone); ?>

          </a>
        </div>
      </div>
    </div>
  
      <div class="col s12 m12 l4">
      <div class="icon-block block-small z-depth-1">
        <div class="icon  primary-text"><i class="mdi mdi-map-marker"></i></div>
        <div class="title ">Home Address</div>
        <div class="tagline "><?php echo e($rc->address); ?></div>
      </div>
    </div>
  
      <div class="col s12 m12 l4">
      <div class="icon-block block-small z-depth-1">
        <div class="icon  primary-text"><i class="mdi mdi-email"></i></div>
        <div class="title ">Email</div>
        <div class="tagline ">
          <a href="mailto:<?php echo e($rc->email); ?>">
            <?php echo e($rc->email); ?>

          </a>
          </div>

         
      </div>
    </div>
  
      
  
    </div>
  
      </div>
      </div>
      
      
  <!--   Icon Section   -->

  
  

  
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tl\resources\views/home/reach-client.blade.php ENDPATH**/ ?>