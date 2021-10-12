<?php $__env->startSection('content'); ?>

<?php if(session('error')): ?>
<div class="alert alert-danger">
    <?php echo e(session('error')); ?>

</div>
<?php endif; ?>

<form action="<?php echo e(route('admin.pcategory.update',$pcategory->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="container">

        <div class="form-group ml-5">

            <label for="name" class="col-sm-2 col-form-label">Name</label>

            <div class="col-sm-7">

                <input type="text" name='name' class="form-control <?php echo e($errors->first('name') ? "is-invalid" : ""); ?> " value="<?php echo e(old('name') ? old('name') : $pcategory->name); ?>" id="name" placeholder="Name">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('name')); ?>    
                </div>   

            </div>

        </div>
   
        <div class="form-group ml-5">
   
            <div class="col-sm-3">
   
                <button type="submit" class="btn btn-primary">Update</button>
   
            </div>
   
        </div>

    </div>      

  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/admin/pcategory/edit.blade.php ENDPATH**/ ?>