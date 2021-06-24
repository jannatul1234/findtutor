
<?php $__env->startSection('homeContent'); ?>


<div class="alert alert-info text-center" style="margin-left: 100px; margin-top: 50px;" role="alert">
<?php if( session()->has('success')): ?>
<?php echo e(session('success')); ?>


<?php endif; ?>
</div>
<form  action="<?php echo e('balancesheet'); ?> " method="post" class="" style="margin-left: 300px; margin-top: 70px; width: 500px;" >
	<?php echo csrf_field(); ?>
	<div class="alert alert-primary offset-md-5" role="alert">
 Balnace <h3>BDT.<?php echo e($balance->balance); ?></h3>
</div>
 
<div class="form-group offset-md-5">
    <label for="formGroupExampleInput">Add Balance</label>
    <input type="text" name="balance" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
<a href=""><button type="submit" class="btn btn-primary offset-md-5">Add</button></a>

</form>

 












<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xamp\htdocs\student\resources\views/admin/balance.blade.php ENDPATH**/ ?>