
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style>
    div#social-links {
        margin: 0 auto;
        max-width: 500px;
    }
    div#social-links ul li {
        display: inline-block;
    }          
    div#social-links ul li a {
        padding: 20px;
        border: 1px solid #ccc;
        margin: 1px;
        font-size: 30px;
        color: #222;
        background-color: #26a69a;
    }
</style>


<?php $__env->startSection('contents'); ?>

<div class="content-area">

  <div class="pagehead-bg   primary-bg" >
    </div> 

  <div class="container has-pagehead is-pagetitle">
    <div class="section">
      <h5 class="pagetitle">Your Portfolio</h5>
          </div>
  </div>
  
  <?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $port): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




  
  <div class="container">
    <div class="section">

        <?php if(auth()->guard()->check()): ?>
      

        <h5 class="mb-5 text-center">Share A Feedback Form Of Your Ogranisation To Any Of The Following Platforms</h5>
        <center> <?php echo $shareComponent; ?>  </center> 
        <br>
        <br>
        <?php endif; ?>

<div class="row ui-mediabox portfolio portfolio-masonry ">


  <?php if( $portfolio->count()): ?>
    
  <?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $port): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
  <div class="col s6 grid-item">
    <a class="img-wrap round" href="assets/images/masonry-76.jpg" data-fancybox="images"
      data-caption="Fancy looking with this new style">
      <img alt="image" class="z-depth-1" style="width: 100%;" src="<?php echo e(asset('assets/images/masonry-76.jpg')); ?>">
    </a>
      <div class="user-actions">
      
      
      <a href="#!" class='active'><i class="mdi mdi-heart-outline"></i><span>475</span></a><a href="#!" ><i class="mdi mdi-comment-outline"></i><span>330</span></a>
      
  </div>
  </div>

  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php else: ?>
    
  <h3 style="margin-top: 130px;">You haven't uploaded any picture of your clients</h3>

  <?php endif; ?>
  
 
     
    
</div>
    </div>
  </div>



</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tl\resources\views/home/myportfolio.blade.php ENDPATH**/ ?>