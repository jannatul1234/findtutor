
<?php $__env->startSection('homeContent'); ?>

<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Student</h4>
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


            <?php if( session()->has('success')): ?>
<?php echo e(session('success')); ?>


<?php endif; ?>

<div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Students Table</h5>
                            </div>
                            <table class="table">
                                  <thead>
                                    <tr>
                                      
                                      <th scope="col">Name</th>
                                      <th scope="col">Class</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Phone</th>
                                      <th scope="col">Address</th>
                                      <th scope="col">City</th>
                                      <th scope="col">Parent Name</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                      
                                      <td><?php echo e($student->name); ?></td>
                                      <td><?php echo e($student->class); ?></td>
                                      <td><?php echo e($student->email); ?></td>
                                      <td><?php echo e($student->phone); ?></td>
                                      <td><?php echo e($student->address); ?></td>
                                      <td><?php echo e($student->city); ?></td>
                                      <td><?php echo e($student->parent_name); ?></td>
                                      <td><a href="<?php echo e(url('student/delete/'.$student->id)); ?>">Delete</a></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </tbody>
                            </table>
                        </div>
                        
                        
                        
                    </div>
                </div>
















<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xamp\htdocs\student\resources\views/admin/student_list.blade.php ENDPATH**/ ?>