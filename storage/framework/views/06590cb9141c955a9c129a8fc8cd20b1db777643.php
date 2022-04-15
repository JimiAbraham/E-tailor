



<?php $__env->startSection('contents'); ?>


<div class="content-area">

    <div class="pagehead-bg   primary-bg" >
      </div> 
  
    <div class="container has-pagehead is-pagetitle">
      <div class="section">
        <h5 class="pagetitle">Profile </h5>
            </div>
    </div>
    
  
  
  
  
    
  
  <div class="container over transparent pr0 pl0">
      <div class="section pt0 pb0">
        
    <?php $__currentLoopData = $clientProfile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    
      
      <div class="row ">
                  <div class="col s8 pad-0"><h5 class="bot-20 sec-tit  ">Bio data </h5>    <table class="highlight responsive-table striped center">
          <thead>
            <a href="<?php echo e(route('edit-client-profile', $cp->id)); ?>" class="btn-floating btn-large pulse teal lighten-1"><i class="mdi mdi-menu"></i>Edit </a>


            <a href="<?php echo e(route('client-gallery', $cp->id)); ?>" class="btn-floating btn-large pulse teal lighten-1"><i class="mdi mdi-menu"></i>Gallery </a>
            <tr>
             
                <th>Name</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Address</th>
                <th>DOB</th>
                <th>Profession</th>
            </tr>
          </thead>
  
          <tbody>
            <tr >
              <td><?php echo e($cp->name); ?></td>
              <td><?php echo e($cp->phone); ?></td>
              <td><?php echo e($cp->gender); ?></td>
              <td><?php echo e($cp->email); ?></td>
              <td><?php echo e($cp->address); ?></td>
              <td><?php echo e($cp->DOB); ?></td>
              <td><?php echo e($cp->job); ?></td>
            </tr>
           
          </tbody>
        </table>
      </div>
      </div>


      <div class="row ">
        <div class="col s8 pad-0"><h5 class="bot-20 sec-tit  ">Measurement Profile</h5>    <table class="highlight responsive-table striped center">
<thead>
  <a href="<?php echo e(route('edit-client-profile', $cp->id)); ?>" class="btn-floating btn-large pulse teal lighten-1"><i class="mdi mdi-menu"></i>Edit </a>

  <a href="<?php echo e(route('edit-client-profile', $cp->id)); ?>" class="btn-floating btn-large pulse primary lighten-1"><i class="mdi mdi-menu"></i>Gallery </a>
  <tr>
      <th>Measurement 1</th>
      <th>Measurement 2</th>
      <th>Measurement 3</th>
      <th>Measurement 4</th>
      <th>Measurement 5</th>
  </tr>
</thead>

<tbody>
  <tr>
    <td><?php echo e($cp->m1); ?></td>
    <td><?php echo e($cp->m2); ?></td>
    <td><?php echo e($cp->m3); ?></td>
    <td><?php echo e($cp->m4); ?></td>
    <td><?php echo e($cp->m5); ?></td>
   
  </tr>
 
</tbody>
</table>
</div>
</div>
  
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
  </div>
  
  
  
  
  </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tl\resources\views/home/clients-profile.blade.php ENDPATH**/ ?>