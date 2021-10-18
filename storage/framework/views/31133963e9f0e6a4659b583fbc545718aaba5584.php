<?php $__env->startSection('styles'); ?>
<?php $__env->startSection('styles'); ?>
<style>
   .picture-container {
  position: relative;
  cursor: pointer;
  text-align: center;
}
 .picture {
  width: 800px;
  height: 400px;
  background-color: #999999;
  border: 4px solid #CCCCCC;
  color: #FFFFFF;
  /* border-radius: 50%; */
  margin: 5px auto;
  overflow: hidden;
  transition: all 0.2s;
  -webkit-transition: all 0.2s;
}
.picture:hover {
  border-color: #2ca8ff;
}
.picture input[type="file"] {
  cursor: pointer;
  display: block;
  height: 100%;
  left: 0;
  opacity: 0 !important;
  position: absolute;
  top: 0;
  width: 100%;
}
.picture-src {
  width: 100%;
  height: 100%;
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<?php if(session('error')): ?>
<div class="alert alert-danger">
    <?php echo e(session('error')); ?>

</div>
<?php endif; ?>

<form action="<?php echo e(route('admin.portfolio.update',$portfolio->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="container">

        <div class="form-group">

            <div class="picture-container">
    
                <div class="picture">
    
                    <img src="<?php echo e(asset('storage/'.$portfolio->cover)); ?>" class="picture-src" id="wizardPicturePreview" height="200px" width="400px" title=""/>
    
                    <input type="file" id="wizard-picture" name="cover" class="form-control <?php echo e($errors->first('cover') ? "is-invalid" : ""); ?> ">
    
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('cover')); ?>    
                    </div>  
    
                </div>
    
                <h6>Pilih Cover</h6>
    
            </div>
    
        </div>

        <div class="form-group ml-5">

            <label for="category" class="col-sm-2 col-form-label">Category</label>

            <div class="col-sm-9">

                <select name='category' class="form-control <?php echo e($errors->first('category') ? "is-invalid" : ""); ?> " id="category">
                    <option disabled selected>Choose One!</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php echo e($category->id == $portfolio->pcategory_id ? 'selected' : ''); ?> value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <div class="invalid-feedback">
                    <?php echo e($errors->first('category')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="name" class="col-sm-2 col-form-label">Name</label>

            <div class="col-sm-9">

                <input type="text" name='name' class="form-control <?php echo e($errors->first('name') ? "is-invalid" : ""); ?> " value="<?php echo e(old('name') ? old('name') : $portfolio->name); ?>" id="name" placeholder="Project Name">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('name')); ?>    
                </div>   

            </div>

        </div>


        <div class="form-group ml-5">

            <label for="client" class="col-sm-2 col-form-label">Client</label>

            <div class="col-sm-9">

                <input type="text" name='client' class="form-control <?php echo e($errors->first('client') ? "is-invalid" : ""); ?> " value="<?php echo e(old('client') ? old('client') : $portfolio->client); ?>" id="client" placeholder="client">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('client')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="date" class="col-sm-2 col-form-label">Project Date</label>

            <div class="col-sm-9">

                <input type="date" name='date' class="form-control <?php echo e($errors->first('date') ? "is-invalid" : ""); ?> " value="<?php echo e(old('date') ? old('date') : $portfolio->date); ?>" id="date" >

                <div class="invalid-feedback">
                    <?php echo e($errors->first('date')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="desc" class="col-sm-2 col-form-label">Desc</label>

            <div class="col-sm-9">

                <textarea name="desc" class="form-control <?php echo e($errors->first('desc') ? "is-invalid" : ""); ?> "  id="summernote" cols="30" rows="10"><?php echo e(old('desc') ? old('desc') : $portfolio->desc); ?></textarea>
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

    </div>      

  </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>

<script>
    // Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
      readURL(this);
  });
  //Function to show image before upload
function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
      }
      reader.readAsDataURL(input.files[0]);
  }
}
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pt_bosto\profile-bosto\resources\views/admin/portfolio/edit.blade.php ENDPATH**/ ?>