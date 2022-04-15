


<?php $__env->startSection('contents'); ?>


<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <h5 class="pagetitle">Reviews from clients</h5>
            </div>
    </div>
    

<div class="container over transparent pr0 pl0">
    <div class="section pt0 pb0">

 
    
    
    <div class="row ">
            <div class="col s12 pad-0">
              <h2 class="bot-20 sec-tit  ">
                
                <a   style="font-size:25px; color:red;"href="<?php echo e(route('share-feedback-form', ['id'=>auth()->user()->id,'name'=>auth()->user()->name]  )); ?>">Share Review Form</a>
              
              </h2>
    <ul class="collapsible expandable">
      
      <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
      
          <li class="">
          <div class="collapsible-header "><i class="mdi mdi-square-edit-outline"></i>
            <?php echo e(!empty($review->name) ?  $review->name  :  'Anonymous'); ?> || Contact:   <?php echo e(!empty($review->phone) ?  $review->phone  :  '-'); ?> || <?php echo e($review->created_at); ?></div>
          <div class="collapsible-body "><span>
              <?php echo e($review->body); ?>


              <hr>
              <div class="spacer"></div>


        <?php if( $review->status == 0): ?>
        
        <?php endif; ?> 



        <?php if( $review->status == 0 ): ?>
            <div class="switch  medium">

        <form action="<?php echo e(route('reviews-status', $review->id)); ?>" method="POST">
          <?php echo csrf_field(); ?>
              <label>
                Off
                <input  type="checkbox" >
                <span class="lever"></span>
                
              </label>
          <button type="submit" class="waves-effect waves-light btn bg-primary">Mark Read</button>
            </form>
            </div>
        <?php else: ?>
        <div class="switch ">
          <label>
            
            <input disabled checked type="checkbox">
            <span class="lever"></span>
            Read
          </label>
        </div>
    

             <?php endif; ?> 
              


                 </span></div>
        </li>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
</ul>

    </div>
    </div>
    

  </div>
</div>

</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tl\resources\views/home/reviews.blade.php ENDPATH**/ ?>