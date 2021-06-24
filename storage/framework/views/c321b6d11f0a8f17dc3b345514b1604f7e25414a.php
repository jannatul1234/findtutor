
<?php $__env->startSection('homeContent'); ?>


<div class="alert alert-info text-center" style="margin-left: 100px; margin-top: 50px;" role="alert">
<?php if( session()->has('success')): ?>
<?php echo e(session('success')); ?>


<?php endif; ?>
</div>




<div class="card text-center " style="width: 500px; margin-left: 500px; margin-top: 50px;">
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










<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xamp\htdocs\student\resources\views/admin/password-change.blade.php ENDPATH**/ ?>