<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('admin/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800">Portfolios</h1>     
   
<?php if(session('success')): ?>

<div class="alert alert-success">

    <?php echo e(session('success')); ?>


</div>

<?php endif; ?>

<!-- DataTales Example -->

<div class="card shadow mb-4">

    <div class="card-header py-3">

        <a href="<?php echo e(route('admin.portfolio.create')); ?>" class="btn btn-success">Create Portfolio</a>

    </div>

    <div class="card-body col-md-8">

        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>

                    <tr>

                        <th>No.</th>

                        <th>Cover</th>

                        <th>Client</th>

                        <th>Project Date</th>

                        <th>Option</th>

                    </tr>

                </thead>

                <tbody>

                <?php
                
                $no=0;
                
                ?>
                
                <?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     
                    <tr> 
             
                        <td><?php echo e(++$no); ?></td>  
                
                        <td>
                        
                            <img src="<?php echo e(asset('storage/'.$portfolio->cover)); ?>" alt="" style="height: 100px; width: 200px">
                        
                        </td> 
                        
                        <td><?php echo e($portfolio->client); ?></td> 

                        <td><?php echo e($portfolio->date); ?></td> 
                
                        <td>    
                
                            <a href="<?php echo e(route('admin.portfolio.edit', [$portfolio->id])); ?>" class="btn btn-info btn-sm"> Edit </a>
                
                            <form method="POST" action="<?php echo e(route('admin.portfolio.destroy', [$portfolio->id])); ?>" class="d-inline" onsubmit="return confirm('Delete this portfolio permanently?')">
                
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pt_bosto\resources\views/admin/portfolio/index.blade.php ENDPATH**/ ?>