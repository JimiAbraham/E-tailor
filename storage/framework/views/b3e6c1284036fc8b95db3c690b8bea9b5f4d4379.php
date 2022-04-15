
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

    <div class="pagehead-bg  primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <?php $__currentLoopData = $formData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <h5 class="pagetitle"> <?php echo e($fd->name); ?>'s Feedback Mechanism</h5>
            </div>
    </div>

    
    <div class="container full">

     
        <div class="section">
      
          
      <ul class="collection mailbox  z-depth-1">
        <?php if(auth()->guard()->check()): ?>
      

        <h5 class="mb-5 text-center">Share A Feedback Form Of Your Ogranisation To Any Of The Following Platforms</h5>
        <center> <?php echo $shareComponent; ?>  </center> 
        <br>
        <br>
        <?php endif; ?>
          <li class="collection-item avatar">
          <a  class='maillink  waves-effect status away'>
          <span class="from">why feedback?</span>
          <span class="title">Feedbacks helps us deliver better services</span>
          <p>
          </a>    
        </li>
             
      </ul>
        </div>
      </div>

</div>

<?php if(auth()->guard()->guest()): ?>
  

<div class="addbutton">
    <a href="#modal1706851887" class="waves-effect waves-light btn-floating btn primary-bg z-depth-3 modal-trigger ">
      <i class="mdi mdi-message-plus"></i>
    </a>
  </div>
  

  <!-- Modal Structure -->
  <div id="modal1706851887" class="modal  bottom-sheet default-open">
    <div class="modal-content ">
          <h4 class="bot-20 sec-tit">We would love to have a feedback from you!</h4>
      
             <form action="<?php echo e(route('feedback-form')); ?>" method="post">
       <?php echo csrf_field(); ?> 
       <input type="hidden" value="<?php echo e($fd->id); ?>" name='user_id'>
            <div class="row">
    <div class="input-field col s12">
      <i class="mdi mdi-face prefix"></i>
      <input name="name" value="<?php echo e(old('name')); ?>" type="text">
      <label for="event_title11">Your Name: ( Leave blank to stay anonymous)</label>
    </div>
  </div>


  <div class="row">
    <div class="input-field col s12">
      <i class="mdi mdi-face prefix"></i>
      <input name="phone" value="<?php echo e(old('phone')); ?>" type="text">
      <label for="event_title11">Your Phone Or : ( Leave blank to stay anonymous)</label>
    </div>
  </div>

  
  <div class="row">
    <div class="input-field col s12 textarea">
      <i class="mdi mdi-file-outline prefix"></i>
      <textarea name="message" value="<?php echo e(old('message')); ?>" class="materialize-textarea"></textarea>
      <label for="textarea-prefix">Your Message</label>
    </div>
  </div>
  
  
  <div class="row">
    <div class="">
      <button type="submit" class="waves-effect waves-light btn bg-primary">Send</button>
    </div>
  </div>
  <?php endif; ?>
</div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tl\resources\views/home/feedback.blade.php ENDPATH**/ ?>