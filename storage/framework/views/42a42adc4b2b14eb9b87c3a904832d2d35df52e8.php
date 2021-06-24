
<?php $__env->startSection('homeContent'); ?>



<div class="row">
  
<div class="col-md-2 " style="margin-top: 100px;">
  
<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>

<div class="col-md-10">
  


<div class="alert alert-info text-center" style="margin-left: px; margin-top: 100px;" role="alert">
<?php if( session()->has('success')): ?>
<?php echo e(session('success')); ?>


<?php endif; ?>
</div>




<div class="card text-center " style="width: 500px; margin-left: 200px; ">
  <div class="card-header">
    Change Password
  </div>
  <div class="card-body">
    <form action="<?php echo e(url('change_password/')); ?>" method="post">
   <?php echo csrf_field(); ?>
  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder=" Confirm Password">
  </div>
 
  <button type="submit" class="btn btn-primary">Change</button>
</form>    
  </div>
  
</div>






</div>

</div>



















<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xamp\htdocs\student\resources\views/student_cngpass.blade.php ENDPATH**/ ?>