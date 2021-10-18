<?php $__env->startSection('content'); ?>
      <!-- Begin Page Content -->
      <div class="container-fluid">
         <!-- Page Heading -->
         <h1 class="h3 mb-2 text-gray-800">Data Banner</h1>
         <?php if(session('success')): ?>
         <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
        <?php endif; ?>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
           <a href="<?php echo e(route('admin.banner.create')); ?>" class="btn btn-primary btn-md">Tambah Banner</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Cover</th>
                    <th>Title</th>
                    <th>desc</th>
                    <th>link</th>
                    <th>Option</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $no=0;
                    ?>            
                <?php $__currentLoopData = $banner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e(++$no); ?></td>
                    <td>
                        <img src="<?php echo e(asset('storage/'.$banner->cover)); ?>" alt="" height="200px" width="250px">
                    </td>
                    <td><?php echo e($banner->title); ?></td>
                    <td><?php echo e(Str::limit( strip_tags( $banner->desc ), 100 )); ?></td>
                    <td><?php echo e($banner->link); ?></td>
                    <td>
                        <a href="<?php echo e(route('admin.banner.edit', [$banner->id])); ?>" class="btn btn-info btn-sm"> Edit </a>
                
                        <form method="POST" action="<?php echo e(route('admin.banner.destroy', [$banner->id])); ?>" class="d-inline" onsubmit="return confirm('Delete this banner permanently?')">
            
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

      </div>
      <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pt_bosto\resources\views/admin/banner/index.blade.php ENDPATH**/ ?>