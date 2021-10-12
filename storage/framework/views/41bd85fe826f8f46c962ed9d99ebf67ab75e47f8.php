<?php $__env->startSection('content'); ?>

<?php if(session('error')): ?>
<div class="alert alert-danger">
    <?php echo e(session('error')); ?>

</div>
<?php endif; ?>
<?php if(session('success')): ?>
<div class="alert alert-success">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<form action="<?php echo e(route('about.update',1)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

  <div class="form-group ml-5">
    <label for="title" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-7">
      <input type="text" name='title' class="form-control <?php echo e($errors->first('title') ? "is-invalid" : ""); ?> " value="<?php echo e(old('title') ? old('title') : $about->title); ?>" id="link" placeholder="Title About">
      <div class="invalid-feedback">
        <?php echo e($errors->first('title')); ?>    
    </div> 
    </div>
  </div>

  <div class="form-group ml-5">
    <label for="subject" class="col-sm-2 col-form-label">Slogan</label>
    <div class="col-sm-7">
      <input type="text" name='subject' class="form-control <?php echo e($errors->first('subject') ? "is-invalid" : ""); ?> " value="<?php echo e(old('subject') ? old('subject') : $about->subject); ?>" id="link" placeholder="Slogan">
      <div class="invalid-feedback">
        <?php echo e($errors->first('subject')); ?>    
    </div> 
    </div>
  </div>
    
    <div class="form-group ml-5">
        <label for="desc" class="col-sm-2 col-form-label">Desc</label>
        <div class="col-sm-7">
          <textarea name="desc" cols="30" rows="10" class="form-control <?php echo e($errors->first('desc') ? "is-invalid" : ""); ?> " id="summernote"><?php echo e(old('desc') ? old('desc') : $about->desc); ?></textarea>
          <div class="invalid-feedback">
            <?php echo e($errors->first('desc')); ?>    
        </div> 
        </div>
      
    </div>
      
    <div class="form-group ml-5">
        <div class="col-sm-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/admin/about.blade.php ENDPATH**/ ?>