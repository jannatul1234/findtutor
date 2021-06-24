  <div class="list-group list-group-flush sidemenu" >
         	<a href="<?php echo e(url('home/')); ?>" class="list-group-item"><i class="fa fa-user"></i> Profile</a>
         	<a href="<?php echo e(url('editfind/')); ?>" class="list-group-item"><i class="fa fa-edit"></i> Edit Info</a>
         	<a href="<?php echo e(url('history/')); ?>" class="list-group-item"><i class="fa fa-edit"></i> History</a>
         	<a href="<?php echo e(url('student_cngpass/')); ?>" class="list-group-item"><i class="fa fa-pencil"></i> Change Password</a>
         	
         	 <a class="dropdown-item text-primary"  href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="  fa fa-power-off"></i> Logout
                                    </a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display:none;">
         		<?php echo csrf_field(); ?>

         	</form>

         </div><?php /**PATH G:\xamp\htdocs\student\resources\views/sidebar.blade.php ENDPATH**/ ?>