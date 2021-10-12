<?php $__env->startSection('content'); ?>

<?php if(session('error')): ?>
<div class="alert alert-danger">
    <?php echo e(session('error')); ?>

</div>
<?php endif; ?>

<form action="<?php echo e(route('admin.faq.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="container">

        <div class="form-group ml-5">

            <label for="question" class="col-sm-2 col-form-label">Question</label>

            <div class="col-sm-7">

                <input type="text" name='question' class="form-control <?php echo e($errors->first('question') ? "is-invalid" : ""); ?> " value="<?php echo e(old('question')); ?>" id="question" placeholder="Question">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('question')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="answer" class="col-sm-2 col-form-label">Answer</label>

            <div class="col-sm-7">

                <textarea name="answer" class="form-control <?php echo e($errors->first('answer') ? "is-invalid" : ""); ?> "  id="" cols="30" rows="10"><?php echo e(old('answer')); ?></textarea>
                <div class="invalid-feedback">
                    <?php echo e($errors->first('answer')); ?>    
                </div>   

            </div>

        </div>
   
        <div class="form-group ml-5">
   
            <div class="col-sm-3">
   
                <button type="submit" class="btn btn-primary">Create</button>
   
            </div>
   
        </div>

    </div>      

  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/admin/faq/create.blade.php ENDPATH**/ ?>