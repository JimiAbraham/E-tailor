


<?php $__env->startSection('contents'); ?>
<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">

        <?php $__currentLoopData = $clientDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        
        <h5 class="pagetitle"><?php echo e($cl->name); ?> Profile</h5>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
    </div>
    
  
  
  
  
    
          <div class="container full subpage ">
          <div class="section">
  
  
              
  <!-- <div class="container">
    <div class="section"> -->
  
      
      <ul class="subpages collection z-depth-1">
       
        <?php $__currentLoopData = $clientDetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li class="collection-item">
                                <a href="<?php echo e(route('reach-client', $cl->id)); ?>" class="waves-effect"><i class="mdi mdi-details"></i><span>Contact <?php echo e($cl->name); ?> </span><i clavariantss="arrow mdi mdi-chevron-right"></i></a>
                           </li>
                           <li class="collection-item">
                                        <a href="<?php echo e(route('client-profile', $cl->id)); ?>" class="waves-effect"><i class="mdi mdi-eye"></i><span> View profile<span><i class="arrow mdi mdi-chevron-right"></i></a>

                                          
                                    </li>
                                    
                                    <li class="collection-item">
                                        <a href="<?php echo e(route('client-gallery', $cl->id )); ?>" class="waves-effect"><i class="mdi mdi-camera-iris"></i><span>View <?php echo e($cl->name); ?>'s  Gallery</span><i class="arrow mdi mdi-chevron-right"></i></a>
                                    </li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
  
  
    <!-- </div>
  
  </div> -->
      
          </div>
          </div>
  
  
  

  </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tl\resources\views/home/clients-details.blade.php ENDPATH**/ ?>