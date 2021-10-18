<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800">Testimonial</h1>     
   
<?php if(session('success')): ?>

<div class="alert alert-success">

    <?php echo e(session('success')); ?>


</div>

<?php endif; ?>

<!-- DataTales Example -->

<div class="card shadow mb-4">

    <div class="card-header py-3">

        <a href="<?php echo e(route('admin.testi.create')); ?>" class="btn btn-success">Create Testi</a>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>

                    <tr>

                        <th>No.</th>

                        <th>Photo</th>

                        <th>Name</th>

                        <th>Profession</th>

                        <th>Testimonial</th>

                        <th>Status</th>

                        <th>Option</th>

                    </tr>

                </thead>

                <tbody>

                <?php
                
                $no=0;
                
                ?>
                
                <?php $__currentLoopData = $testi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     
                    <tr> 
             
                        <td><?php echo e(++$no); ?></td>  
                
                        <td>
                            <?php if(!empty($testi->photo)): ?>
                            <img src="<?php echo e(asset('storage/'.$testi->photo)); ?>" alt="" style="height: 100px; width: 100px">
                            <?php else: ?>
                            <img src="<?php echo e(asset('storage/images/testi/avatar.png')); ?>" alt="" style="height: 100px; width: 100px">
                            <?php endif; ?>       

                        </td> 
                        
                        <td><?php echo e($testi->name); ?></td> 
                        
                        <td><?php echo e($testi->profession); ?></td>   

                        <td><?php echo e(substr($testi->desc,0,50)); ?>...</td>   

                        <td><?php echo e($testi->status); ?></td>

                        <td>    
                
                            <a href="<?php echo e(route('admin.testi.edit', [$testi->id])); ?>" class="btn btn-info btn-sm"> Edit </a>
                
                            <form method="POST" action="<?php echo e(route('admin.testi.destroy', [$testi->id])); ?>" class="d-inline" onsubmit="return confirm('Delete this testi permanently?')">
                
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

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<script src="<?php echo e(asset('admin/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/js/demo/datatables-demo.js')); ?>"></script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pt_bosto\profile-bosto\resources\views/admin/testi/index.blade.php ENDPATH**/ ?>