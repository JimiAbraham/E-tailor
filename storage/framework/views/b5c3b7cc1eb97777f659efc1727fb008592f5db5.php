



<?php $__env->startSection('contents'); ?>

 
<div class="login-bg access-login"></div>


<div class="container login-area">
  <div class="section">


    <h3 class="bot-20 center white-text">Login</h3>


    <form action="<?php echo e(route('login-action')); ?>" method="POST">
<?php echo csrf_field(); ?>
<?php if(session('success')): ?>
    <div class="alert alert-success" role="alert">
        <h4 style="color:red"><?php echo e(session('success')); ?></h4>
    </div>
<?php endif; ?>

    

<div class="row">
  <div class="input-field col s10 offset-s1">
    <input id="email311" name="email" value="<?php echo e(old('email')); ?>" type="email" class="validate">
    <label for="email311">Email</label>

    <?php if($errors->has('email')): ?>
      <p style="color:red; text-align:center;"><?php echo e($errors->first('email')); ?></p>
  <?php endif; ?>
  </div>
</div>


    <div class="row">

      <div class="input-field col s10 offset-s1">
        <input id="pass311" name="password" type="password" class="validate">
        <label for="pass311">Password</label>

        <?php if($errors->has('password')): ?>
          <p style="color:red; text-align:center;"><?php echo e($errors->first('password')); ?></p>
      <?php endif; ?>
      </div>

    </div>

        
<div class="row center">
  <button type="submit" class="waves-effect waves-light btn-large bg-primary">Login</button>
  <div class="spacer"></div>
  <div class="links">

    <a href="" >Forgot Password</a><span class="sep">|</span><a href="<?php echo e(route('register')); ?>" >Register</a>  </div>

    <div class="spacer"></div>
    <div class="flex items-center justify-end mt-4">
      <a href="<?php echo e(url('auth/google')); ?>">
          <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png" style="margin-left: 3em;">
      </a>
  </div>

</div>



    


  </div>
</div>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tl\resources\views/auth/login.blade.php ENDPATH**/ ?>