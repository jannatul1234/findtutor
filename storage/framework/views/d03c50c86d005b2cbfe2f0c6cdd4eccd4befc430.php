<?php $__env->startSection('homeContent'); ?>



<div >
    

<div class="row mt-2" >

    <div class="col-md-3 " style="margin-top: 70px;">
        <?php echo $__env->make('teacher_sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
    
<div class="col-md-8" style="margin-top: 70px;">
    <div class="container " >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Profile')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

<span >Name:  <?php echo e(Auth::user()->name); ?></span>
<br>
<br>
 <span >Subject:  <?php echo e(Auth::user()->subject); ?></span>
<br>  
<br>     
<span >Email:  <?php echo e(Auth::user()->email); ?></span>
<br>     
<br>  
<span >Phone:  <?php echo e(Auth::user()->phone); ?></span>
<br>    
<br>   
<span >Address:  <?php echo e(Auth::user()->address); ?></span>
<br>   
<br>    
<span >City:  <?php echo e(Auth::user()->city); ?></span>
<br>  

                    
                </div>
            </div>
        </div>
    </div>
</div>







</div>




</div>




</div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('fontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xamp\htdocs\student\resources\views/teacher.blade.php ENDPATH**/ ?>