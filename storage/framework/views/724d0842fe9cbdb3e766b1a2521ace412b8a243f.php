<?php $__env->startSection('content'); ?>

<?php if(session('error')): ?>
<div class="alert alert-danger">
    <?php echo e(session('error')); ?>

</div>
<?php endif; ?>

<form action="<?php echo e(route('admin.testi.update',$testi->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="container">

        <div class="form-group ml-5">

            <label for="Photo" class="col-sm-2 col-form-label">Photo</label>

            <div class="col-sm-7">

                <input type="file" name='photo' class="form-control <?php echo e($errors->first('photo') ? "is-invalid" : ""); ?> " value="<?php echo e(old('photo') ? old('photo') : $testi->photo); ?>" id="photo">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('photo')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="name" class="col-sm-2 col-form-label">Name</label>

            <div class="col-sm-7">

                <input type="text" name='name' class="form-control <?php echo e($errors->first('name') ? "is-invalid" : ""); ?> " value="<?php echo e(old('name') ? old('name') : $testi->name); ?>" id="name">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('name')); ?>    
                </div>    

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="profession" class="col-sm-2 col-form-label">Profession</label>

            <div class="col-sm-7">

                <input type="text" name='profession' class="form-control <?php echo e($errors->first('profession') ? "is-invalid" : ""); ?> " value="<?php echo e(old('profession') ? old('profession') : $testi->profession); ?>" id="profession">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('profession')); ?>    
                </div>    

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="desc" class="col-sm-2 col-form-label">Testi</label>

            <div class="col-sm-7">

                <textarea name="desc" class="form-control <?php echo e($errors->first('desc') ? "is-invalid" : ""); ?> "  id="" cols="30" rows="10"><?php echo e(old('desc') ? old('desc') : $testi->desc); ?></textarea>
                <div class="invalid-feedback">
                    <?php echo e($errors->first('desc')); ?>    
                </div>   

            </div>

        </div>


        <div class="form-group ml-5">

            <label for="status" class="col-sm-2 col-form-label">Status</label>

            <div class="col-sm-7">

                <select name='status' class="form-control <?php echo e($errors->first('status') ? "is-invalid" : ""); ?> " id="status">
                    <option <?php echo e($testi->status == 'PUBLISH' ? 'selected' : ''); ?> value="PUBLISH">PUBLISH</option>
 
                    <option <?php echo e($testi->status == 'DRAFT' ? 'selected' : ''); ?> value="DRAFT">DRAFT</option>
                </select>

                <div class="invalid-feedback">
                    <?php echo e($errors->first('status')); ?>    
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

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pt_bosto\resources\views/admin/testi/edit.blade.php ENDPATH**/ ?>