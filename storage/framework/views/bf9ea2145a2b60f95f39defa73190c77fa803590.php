<?php $__env->startSection('content'); ?>

<?php if(session('error')): ?>
<div class="alert alert-danger">
    <?php echo e(session('error')); ?>

</div>
<?php endif; ?>

<form action="<?php echo e(route('admin.user.update',$user->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="container">

        <div class="form-group ml-5">

            <label for="name" class="col-sm-2 col-form-label">Name</label>

            <div class="col-sm-9">

                <input type="text" name='name' class="form-control <?php echo e($errors->first('name') ? "is-invalid" : ""); ?> " value="<?php echo e(old('name') ? old('name') : $user->name); ?>" id="name" placeholder="Ex: Susi Similikiti">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('name')); ?>    
                </div>   

            </div>

        </div>

          <div class="form-group ml-5">

            <label for="email" class="col-sm-2 col-form-label">Email</label>

            <div class="col-sm-9">

                <input type="email" name='email' class="form-control <?php echo e($errors->first('email') ? "is-invalid" : ""); ?> " value="<?php echo e(old('email') ? old('email') : $user->email); ?>" id="email" placeholder="Email">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('email')); ?>    
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pt_bosto\profile-bosto\resources\views/admin/user/edit.blade.php ENDPATH**/ ?>