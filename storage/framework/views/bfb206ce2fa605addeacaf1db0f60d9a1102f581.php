<?php $__env->startSection('content'); ?>

<?php if(session('error')): ?>
<div class="alert alert-danger">
    <?php echo e(session('error')); ?>

</div>
<?php endif; ?>

<form action="<?php echo e(route('admin.service.store')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="container">

        <div class="form-group ml-5">

            <label for="icon" class="col-sm-2 col-form-label">Icon</label>

            <div class="col-sm-9">

                <input type="text" name='icon' class="form-control <?php echo e($errors->first('icon') ? "is-invalid" : ""); ?> " value="<?php echo e(old('icon')); ?>" id="icon" placeholder="example: icofont-map">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('icon')); ?>    
                </div>   

            </div>
           
            <a href="https://icofont.com/icons" target="_blank" rel="noopener noreferrer">
           
                <span class="col-sm-2 col-form-label" style="color: blue">https://icofont.com/icons</span>
        
            </a>

        </div>

        <div class="form-group ml-5">

            <label for="title" class="col-sm-2 col-form-label">Title</label>

            <div class="col-sm-9">

                <input type="text" name='title' class="form-control <?php echo e($errors->first('title') ? "is-invalid" : ""); ?> " value="<?php echo e(old('title')); ?>" id="title" placeholder="Title">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('title')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="quote" class="col-sm-2 col-form-label">Quote</label>

            <div class="col-sm-9">

                <input type="text" name='quote' class="form-control <?php echo e($errors->first('quote') ? "is-invalid" : ""); ?> " value="<?php echo e(old('quote')); ?>" id="quote" placeholder="Quote">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('quote')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="desc" class="col-sm-2 col-form-label">Desc</label>

            <div class="col-sm-9">

                

                <textarea name="desc" id="summernote" cols="40" rows="10"  class="form-control <?php echo e($errors->first('desc') ? "is-invalid" : ""); ?> "><?php echo e(old('desc')); ?></textarea>

                <div class="invalid-feedback">
                    <?php echo e($errors->first('desc')); ?>    
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/admin/service/create.blade.php ENDPATH**/ ?>