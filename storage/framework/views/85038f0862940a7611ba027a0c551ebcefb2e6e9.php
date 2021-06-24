

<?php $__env->startSection('homeContent'); ?>


<div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
  Your Sarching Result!
</div>
	
<?php if( session()->has('success')): ?>
<?php echo e(session('success')); ?>


<?php endif; ?>




<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Subject</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


<?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div >


  <tr>
      
      <td><?php echo e($result->name); ?></td>
      <td><?php echo e($result->subject); ?></td>
      <td><?php echo e($result->address); ?></td>
      <td>
<form action="<?php echo e(url('book')); ?>" method="post" >
	<?php echo csrf_field(); ?>
	<input type="hidden" name="teacher_id" value="<?php echo e($result->id); ?>">
<input type="hidden" name="student_id" value="<?php echo e(Auth::user()->id); ?>">


<?php
$checkbook=\App\Models\Book::where('teacher_id',$result->id)->where('student_id',Auth::user()->id)->first();
?>
<?php if($checkbook): ?>
<button type="button" class="btn btn-success"> BOOKED</button>
<?php else: ?>
<button type="submit" class="btn btn-info"> BOOK</button>
<?php endif; ?>











</form></td>
    </tr>




	

</div>




<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




  
    
  </tbody>
</table>













<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xamp\htdocs\student\resources\views/fontend/search.blade.php ENDPATH**/ ?>