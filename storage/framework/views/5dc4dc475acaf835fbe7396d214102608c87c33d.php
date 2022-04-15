



<?php $__env->startSection('contents'); ?>
<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <h5 class="pagetitle">Gallery of clients pictures</h5>
            </div>
    </div>
    
  
  
  
  
    
    <div class="container">
      <div class="section">
  
      
  
        <center>
          <a class="red lighten-1 waves-effect waves-light btn-lg btn modal-trigger " href="<?php echo e(route('add-client-gallery', $userId)); ?>">Add New Photos</a>
      </center>
      <br>
      <br>
  
  <div class="row ui-mediabox portfolio portfolio-masonry ">
  
  
    <?php if( $userGallery->count() ): ?>
    <?php $__currentLoopData = $userGallery; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ug): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      
   
    <div class="col s6 grid-item">
      <a class="img-wrap round" href="asset('assets/images/masonry-76.jpg')" data-fancybox="images"
        data-caption="Fancy looking with this new style">
        <img alt="image" class="z-depth-1" style="width: 100%;" src="<?php echo e(url('storage/uploads/'.$ug->media)); ?>">
      </a>
        <div class="user-actions">
        
        
        <a href="#!" class='active'><i class="mdi mdi-heart-outline"></i><span>475</span></a><a href="#!" ><i class="mdi mdi-comment-outline"></i><span>330</span></a>
        
    </div>
    </div>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
    <h3>This client has no pictures yet in the gallery</h3>

    <?php endif; ?>
   
  </div>
      </div>
    </div>
  
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tl\resources\views/home/client-gallery.blade.php ENDPATH**/ ?>