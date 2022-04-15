




<?php $__env->startSection('contents'); ?>

 
<div class="login-bg access-login"></div>


<div class="container login-area">
  <div class="section">


    <h3 class="bot-20 center white-text">Register</h3>
    
    <?php if(session('success')): ?>
    <div class="alert alert-success" role="alert">
        <h4 style="color:red"><?php echo e(session('success')); ?></h4>
    </div>
<?php endif; ?>
<form action="<?php echo e(route('register-action')); ?>" method="POST">
  <?php echo csrf_field(); ?>
    <div class="row">
      <div class="spacer"></div>
      <div class="spacer"></div>
      <div class="input-field col s10 offset-s1">
        <input type="text" name="name" value="<?php echo e(old('name')); ?>" class="validate">
        <label for="pass311">Company Name</label>
        <?php if($errors->has('name')): ?>
          <p style="color:red; text-align:center;"><?php echo e($errors->first('name')); ?></p>
      <?php endif; ?>
      </div>

    </div>



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


    <div class="row">

      <div class="input-field col s10 offset-s1">
        <input  name="password_confirmation" type="password" class="validate">
        <label for="pass311">Confirm Password</label>
      </div>

    </div>

        
<div class="row center">
  <button type="submit" class="waves-effect waves-light btn-large bg-primary">Register</button>
</div>
</form>

<div class="row center">
  <div class="spacer"></div>
  <div class="links">

    <a href="ui-pages-forgotpassword.html" >Forgot Password</a><span class="sep">|</span><a href="<?php echo e(route('login')); ?>" >Login</a>  </div>

    <div class="spacer"></div>
  

</div>



    


  </div>
</div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tl\resources\views/auth/register.blade.php ENDPATH**/ ?>