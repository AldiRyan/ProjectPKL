<?php $__env->startSection('styles'); ?>
<style>
   .picture-container {
  position: relative;
  cursor: pointer;
  text-align: center;
}
 .picture {
  width: 300px;
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

<form action="<?php echo e(route('admin.team.update',$team->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="form-group">

        <div class="picture-container">

            <div class="picture">

                <img src="<?php echo e(asset('storage/' . $team->photo)); ?>" class="picture-src" id="wizardPicturePreview" height="200px" width="400px" title=""/>

                <input type="file" id="wizard-picture" name="photo" class="form-control <?php echo e($errors->first('photo') ? "is-invalid" : ""); ?> ">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('photo')); ?>    
                </div>  

            </div>

            <h6>Choose Photo</h6>

        </div>

    </div>   

    <div class="form-group ml-5">

        <label for="name" class="col-sm-2 col-form-label">Name</label>

        <div class="col-sm-7">

            <input type="text" name='name' class="form-control <?php echo e($errors->first('name') ? "is-invalid" : ""); ?> " value="<?php echo e(old('name') ? old('name') : $team->name); ?>" id="name" placeholder="Example: Susi Similikiti">

            <div class="invalid-feedback">
                <?php echo e($errors->first('name')); ?>    
            </div>   

        </div>

    </div>

    <div class="form-group ml-5">

        <label for="position" class="col-sm-2 col-form-label">Position</label>

        <div class="col-sm-7">

            <input type="text" name='position' class="form-control <?php echo e($errors->first('position') ? "is-invalid" : ""); ?> " value="<?php echo e(old('position') ? old('position') : $team->position); ?>" id="position" placeholder="Example: Product Manager">

            <div class="invalid-feedback">
                <?php echo e($errors->first('position')); ?>    
            </div>   

        </div>

    </div>

    <div class="form-group ml-5">

        <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>

        <div class="col-sm-7">

            <input type="text" name='twitter' class="form-control <?php echo e($errors->first('twitter') ? "is-invalid" : ""); ?> " value="<?php echo e(old('twitter') ? old('twitter') : $team->twitter); ?>" id="twitter" placeholder="Link Twitter">

            <div class="invalid-feedback">
                <?php echo e($errors->first('twitter')); ?>    
            </div>   

        </div>

    </div>

    <div class="form-group ml-5">

        <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>

        <div class="col-sm-7">

            <input type="text" name='facebook' class="form-control <?php echo e($errors->first('facebook') ? "is-invalid" : ""); ?> " value="<?php echo e(old('facebook') ? old('facebook') : $team->facebook); ?>" id="facebook" placeholder="Link Facebook">

            <div class="invalid-feedback">
                <?php echo e($errors->first('facebook')); ?>    
            </div>   

        </div>

    </div>

    <div class="form-group ml-5">

        <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>

        <div class="col-sm-7">

            <input type="text" name='instagram' class="form-control <?php echo e($errors->first('instagram') ? "is-invalid" : ""); ?> " value="<?php echo e(old('instagram') ? old('instagram') : $team->instagram); ?>" id="instagram" placeholder="Link Instagram">

            <div class="invalid-feedback">
                <?php echo e($errors->first('instagram')); ?>    
            </div>   

        </div>

    </div>

    <div class="form-group ml-5">

        <label for="linkedin" class="col-sm-2 col-form-label">Linkedin</label>

        <div class="col-sm-7">

            <input type="text" name='linkedin' class="form-control <?php echo e($errors->first('linkedin') ? "is-invalid" : ""); ?> " value="<?php echo e(old('linkedin') ? old('linkedin') : $team->linkedin); ?>" id="linkedin" placeholder="Link Linkedin">

            <div class="invalid-feedback">
                <?php echo e($errors->first('linkedin')); ?>    
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/admin/team/edit.blade.php ENDPATH**/ ?>