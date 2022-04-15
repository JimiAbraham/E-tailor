


<?php $__env->startSection('contents'); ?>


<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <h5 class="pagetitle"> Picture Gallery</h5>
            </div>
    </div>

    <?php if(session()->has('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session()->get('success')); ?>

    </div>
<?php endif; ?>

    <div class="container full">
        <div class="section">
      
          <?php $__currentLoopData = $userId; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        
            <div class="modal-content ">
                <h4 class="bot-20 sec-tit">Upload the mouth-watering pictures of the clothes you have sown for <?php echo e($userr->name); ?>!</h4>
            
                   <form action="<?php echo e(route('save-client-gallery')); ?>" method="post" enctype="multipart/form-data">
             <?php echo csrf_field(); ?> 
          
      <input type="hidden" name="user_id" value="<?php echo e($userr->id); ?>">
      
        <div class="row">
          <div class="input-field col s12">
            <i class="mdi mdi-face prefix"></i>
            <input name="images[]" value="<?php echo e(old('phone')); ?>" type="file">
            <label for="event_title11"></label>

            <?php if($errors->has('files')): ?>
            <?php $__currentLoopData = $errors->get('files'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class="invalid-feedback" role="alert">
                <strong><?php echo e($error); ?></strong>
            </span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
          </div>
        </div>
          
        
        <div class="row">
          <div class="">
            <button type="submit" class="waves-effect waves-light btn bg-primary">Send</button>
          </div>
        </div>
      
      </div>
         
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>

</div>

  

  <!-- Modal Structure -->
  <div id="modal1706851887" class="modal  bottom-sheet default-open">
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tl\resources\views/home/add-clients-photo.blade.php ENDPATH**/ ?>