




<?php $__env->startSection('contents'); ?>

<div class="content-area">      
    <div class="ui-profile">
        
      <div class="primg">
      </div>
      <div class="prinfo card-panel">
          <div class="prname">
                            <h4 class="name"><?php echo e(auth()->user()->name); ?></h4>
                <div class="pos">Fashion Designer</div>
                          <p>Joined on <?php echo e(auth()->user()->created_at->isoFormat('dddd, D-MM-Y')); ?>.</p>             
          </div>
                                <div class="count">
                <h6 class="num"><?php echo e($clientCount); ?></h6>
                <div class="tit"><a style="color: white;" href="<?php echo e(route('all-clients')); ?>">Total Clients</a></div>
            </div>
            <div class="count">
                <h6 class="num"><?php echo e($MessageCount); ?></h6>
                <div class="tit"><a style="color: white;" href="<?php echo e(route('reviews')); ?>">Total Feedbacks</a></div>
            </div>
            <div class="count">
                <h6 class="num"><?php echo e($PhotoCount); ?></h6>
                <div class="tit"><a style="text-decoration: none; color:white" href="<?php echo e(route('portfolio')); ?>">All Photo Gallery</a></div>
            </div>
                    
      </div>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tl\resources\views/home/my-profile.blade.php ENDPATH**/ ?>