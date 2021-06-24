
<?php $__env->startSection('homeContent'); ?>

<div class="page-wrapper">

<div class="row">

  <div class="col-md-2" style="margin-top: 100px;">
    

<?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </div>
   <div class="col-md-10">
     




            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tables</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">History</h5>
                            </div>

<?php if( session()->has('success')): ?>
<?php echo e(session('success')); ?>


<?php endif; ?>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      
      <th scope="col">Student Name</th>
      <th scope="col">Class</th>
      <th scope="col">Address</th>
      <th scope="col">Phone number</th>
      <th scope="col">Teacher Name</th>
      <th scope="col">Subject</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Status</th>
                                 </tr>
                                  </thead>
                                  <tbody>

                                    <?php $__currentLoopData = $book; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
$student=\App\Models\User::where('id',$book->student_id)->get();
?>
<?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $st): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
$teacher=\App\Models\User::where('id',$book->teacher_id)->first();
?>

                                    <tr>

                                      
                                      <td><?php echo e($st->name); ?></td>
                                      <td><?php echo e($st->class); ?></td>
                                      <td><?php echo e($st->address); ?></td>
                                      <td><?php echo e($st->phone); ?></td>
                                      <td><?php echo e($teacher->name); ?></td>
                                      <td><?php echo e($teacher->subject); ?></td>
                                      <td><?php echo e($teacher->phone); ?></td>
                                      <td><?php if($book->status==0): ?>
panding
<?php else: ?>
approved

<?php endif; ?></td>

                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </tbody>
                            </table>
                        </div>
                        
                        
                        
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>


   </div>





</div>











            <!-- ===========

<?php $__env->stopSection(); ?>
<?php echo $__env->make('fontend.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xamp\htdocs\student\resources\views/admin/history.blade.php ENDPATH**/ ?>