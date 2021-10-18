<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800">Users</h1>     
   
<?php if(session('success')): ?>

<div class="alert alert-success">

    <?php echo e(session('success')); ?>


</div>

<?php endif; ?>

<!-- DataTales Example -->

<div class="card shadow mb-4">

    <div class="card-header py-3">

        <a href="<?php echo e(route('admin.user.create')); ?>" class="btn btn-success">Create user</a>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>

                    <tr>

                        <th>No.</th>

                        <th>Name</th>

                        <th>Email</th>

                        <th>Option</th>

                    </tr>

                </thead>

                <tbody>

                <?php
                
                $no=0;
                
                ?>
                
                <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     
                    <tr> 
             
                        <td><?php echo e(++$no); ?></td>  
                
                        <td><?php echo e($user->name); ?></td> 
                        
                        <td><?php echo e($user->email); ?></td> 
                
                        <td>    
                
                            <a href="#" data-toggle="modal" data-target="#changepasswordModal" class="btn btn-primary btn-sm">Change Password</a>
                            <a href="<?php echo e(route('admin.user.edit', [$user->id])); ?>" class="btn btn-info btn-sm"> Edit </a>
                
                            <form method="POST" action="<?php echo e(route('admin.user.destroy', [$user->id])); ?>" class="d-inline" onsubmit="return confirm('Delete this user permanently?')">
                
                                <?php echo csrf_field(); ?>
                
                                <input type="hidden" name="_method" value="DELETE">
                
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                
                            </form>
                
                        </td>
            
                    </tr>
            
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                </tbody>
    
            </table>

        </div>

    </div>

</div>

<!-- Change password Modal-->
<div class="modal fade" id="changepasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="<?php echo e(route('admin.user.changepassword',$user->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
        <div class="modal-body">
            
            <input type="password" name='password' class="form-control <?php echo e($errors->first('password') ? "is-invalid" : ""); ?> " id="password" placeholder="New Password">
            
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          
          <button type="submit" class="btn btn-primary">Update</button>

        </div>
    </form>
      </div>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<script src="<?php echo e(asset('admin/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/js/demo/datatables-demo.js')); ?>"></script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pt_bosto\profile-bosto\resources\views/admin/user/index.blade.php ENDPATH**/ ?>