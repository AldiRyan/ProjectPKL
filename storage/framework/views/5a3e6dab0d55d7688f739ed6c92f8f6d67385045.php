<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800">Posts</h1>     
   
<?php if(session('success')): ?>

<div class="alert alert-success">

    <?php echo e(session('success')); ?>


</div>

<?php endif; ?>

<!-- DataTales Example -->

<div class="card shadow mb-4">

    <div class="card-header py-3">

        <a href="<?php echo e(route('admin.post.create')); ?>" class="btn btn-success">Create Post</a>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>

                    <tr>

                        <th>No.</th>

                        <th>Title</th>

                        <th>Keyword</th>

                        <th>Status</th>

                        <th>Option</th>

                    </tr>

                </thead>

                <tbody>

                <?php
                
                $no=0;
                
                ?>
                
                <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     
                    <tr> 
             
                        <td><?php echo e(++$no); ?></td>  
                
                        <td><?php echo e($post->title); ?></td> 
                        
                        <td><?php echo e($post->category->name); ?></td> 

                        <td><?php echo e($post->status); ?></td> 
                
                        <td>    
                
                            <a href="<?php echo e(route('admin.post.edit', [$post->id])); ?>" class="btn btn-info btn-sm"> Edit </a>
                
                            <form method="POST" class="d-inline" onsubmit="return confirm('Move post to trash ?')" action="<?php echo e(route('admin.post.destroy', $post->id)); ?>">
                                <?php echo csrf_field(); ?>
    
                                <input type="hidden" value="DELETE" name="_method">
    
                                <input type="submit" value="Trash" class="btn btn-danger btn-sm">
    
                            </form>
                
                        </td>
            
                    </tr>
            
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
                </tbody>
    
            </table>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<script src="<?php echo e(asset('admin/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/js/demo/datatables-demo.js')); ?>"></script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/admin/post/index.blade.php ENDPATH**/ ?>