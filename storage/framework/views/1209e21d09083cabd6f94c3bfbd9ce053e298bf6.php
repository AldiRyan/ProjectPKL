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

<?php if(session('success')): ?>
<div class="alert alert-success">
    <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<?php if(session('error')): ?>
<div class="alert alert-danger">
    <?php echo e(session('error')); ?>

</div>
<?php endif; ?>

<form action="<?php echo e(route('admin.general.update')); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="container">

        <div class="form-group">

            <div class="picture-container">
    
                <div class="picture">
    
                    <img src="<?php echo e(asset('storage/' . $general->logo)); ?>" class="picture-src" id="wizardPicturePreview" height="200px" width="400px" title=""/>
    
                    <input type="file" id="wizard-picture" name="logo" class="form-control <?php echo e($errors->first('logo') ? "is-invalid" : ""); ?> ">
    
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('logo')); ?>    
                    </div>  
    
                </div>
    
                <h6>Pilih Logo</h6>
    
            </div>
    
        </div>

        <div class="form-group ml-5">

            <label for="favicon" class="col-sm-2 col-form-label">Favicon</label>

            <div class="col-sm-7">

                <img src="<?php echo e(asset('storage/' . $general->favicon)); ?>" alt="">
                <input type="file" name='favicon' class="form-control <?php echo e($errors->first('favicon') ? "is-invalid" : ""); ?> " value="<?php echo e(old('favicon') ? old('favicon') : $general->favicon); ?>" id="favicon" placeholder="Title">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('favicon')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="title" class="col-sm-2 col-form-label">Title</label>

            <div class="col-sm-7">

                <input type="text" name='title' class="form-control <?php echo e($errors->first('title') ? "is-invalid" : ""); ?> " value="<?php echo e(old('title') ? old('title') : $general->title); ?>" id="title" placeholder="Title">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('title')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="address1" class="col-sm-2 col-form-label">Address 1</label>

            <div class="col-sm-7">

                <input type="text" name='address1' class="form-control <?php echo e($errors->first('address1') ? "is-invalid" : ""); ?> " value="<?php echo e(old('address1') ? old('address1') : $general->address1); ?>" id="address1" placeholder="Address 1">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('address1')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="address2" class="col-sm-2 col-form-label">Address 2</label>

            <div class="col-sm-7">

                <input type="text" name='address2' class="form-control <?php echo e($errors->first('address2') ? "is-invalid" : ""); ?> " value="<?php echo e(old('address2') ? old('address2') : $general->address2); ?>" id="address2" placeholder="Address 2">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('address2')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="email" class="col-sm-2 col-form-label">E-mail</label>

            <div class="col-sm-7">

                <input type="email" name='email' class="form-control <?php echo e($errors->first('email') ? "is-invalid" : ""); ?> " value="<?php echo e(old('email') ? old('email') : $general->email); ?>" id="email" placeholder="Email">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('email')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="phone" class="col-sm-2 col-form-label">Phone</label>

            <div class="col-sm-7">

                <input type="text" name='phone' class="form-control <?php echo e($errors->first('phone') ? "is-invalid" : ""); ?> " value="<?php echo e(old('phone') ? old('phone') : $general->phone); ?>" id="phone" placeholder="098765432">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('phone')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>

            <div class="col-sm-7">

                <input type="text" name='twitter' class="form-control <?php echo e($errors->first('twitter') ? "is-invalid" : ""); ?> " value="<?php echo e(old('twitter') ? old('twitter') : $general->twitter); ?>" id="twitter" placeholder="Twitter">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('twitter')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>

            <div class="col-sm-7">

                <input type="text" name='facebook' class="form-control <?php echo e($errors->first('facebook') ? "is-invalid" : ""); ?> " value="<?php echo e(old('facebook') ? old('facebook') : $general->facebook); ?>" id="facebook" placeholder="Facebook">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('facebook')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>

            <div class="col-sm-7">

                <input type="text" name='instagram' class="form-control <?php echo e($errors->first('instagram') ? "is-invalid" : ""); ?> " value="<?php echo e(old('instagram') ? old('instagram') : $general->instagram); ?>" id="instagram" placeholder="Instagram">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('instagram')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="linkedin" class="col-sm-2 col-form-label">Linkedin</label>

            <div class="col-sm-7">

                <input type="text" name='linkedin' class="form-control <?php echo e($errors->first('linkedin') ? "is-invalid" : ""); ?> " value="<?php echo e(old('linkedin') ? old('linkedin') : $general->linkedin); ?>" id="linkedin" placeholder="Linkedin">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('linkedin')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="gmaps" class="col-sm-2 col-form-label">Link Gmaps</label>

            <div class="col-sm-7">

                <input type="text" name='gmaps' class="form-control <?php echo e($errors->first('gmaps') ? "is-invalid" : ""); ?> " value="<?php echo e(old('gmaps') ? old('gmaps') : $general->gmaps); ?>" id="gmaps" placeholder="Link Gmaps">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('gmaps')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="tawkto" class="col-sm-2 col-form-label">Tawk to</label>

            <div class="col-sm-7">

                <textarea name="tawkto" id="tawkto" cols="30" rows="10" class="form-control <?php echo e($errors->first('tawkto') ? "is-invalid" : ""); ?> "><?php echo e(old('tawkto') ? old('tawkto') : $general->tawkto); ?></textarea>

                <div class="invalid-feedback">
                    <?php echo e($errors->first('tawkto')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="disqus" class="col-sm-2 col-form-label">Disqus</label>

            <div class="col-sm-7">

                <textarea name="disqus" id="disqus" cols="30" rows="10" class="form-control <?php echo e($errors->first('disqus') ? "is-invalid" : ""); ?> "><?php echo e(old('disqus') ? old('disqus') : $general->disqus); ?></textarea>

                <div class="invalid-feedback">
                    <?php echo e($errors->first('disqus')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="sharethis" class="col-sm-2 col-form-label">Sharethis</label>

            <div class="col-sm-7">

                <textarea name="sharethis" id="sharethis" cols="30" rows="10" class="form-control <?php echo e($errors->first('sharethis') ? "is-invalid" : ""); ?> "><?php echo e(old('sharethis') ? old('sharethis') : $general->sharethis); ?></textarea>

                <div class="invalid-feedback">
                    <?php echo e($errors->first('sharethis')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="gverification" class="col-sm-2 col-form-label">Google Verification</label>

            <div class="col-sm-7">

                <input type="text" name='gverification' class="form-control <?php echo e($errors->first('gverification') ? "is-invalid" : ""); ?> " value="<?php echo e(old('gverification') ? old('gverification') : $general->gverification); ?>" id="footer" placeholder="Google Verification">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('gverification')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="footer" class="col-sm-2 col-form-label">Footer</label>

            <div class="col-sm-7">

                <input type="text" name='footer' class="form-control <?php echo e($errors->first('footer') ? "is-invalid" : ""); ?> " value="<?php echo e(old('footer') ? old('footer') : $general->footer); ?>" id="footer" placeholder="Footer">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('footer')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>

            <div class="col-sm-7">

                <input type="text" name='keyword' class="form-control <?php echo e($errors->first('keyword') ? "is-invalid" : ""); ?> " value="<?php echo e(old('keyword') ? old('keyword') : $general->keyword); ?>" id="keyword" placeholder="Keyword">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('keyword')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="meta_desc" class="col-sm-2 col-form-label">Meta Desc</label>

            <div class="col-sm-7">

                <input type="text" name='meta_desc' class="form-control <?php echo e($errors->first('meta_desc') ? "is-invalid" : ""); ?> " value="<?php echo e(old('meta_desc') ? old('meta_desc') : $general->meta_desc); ?>" id="meta_desc" placeholder="Meta Description">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('meta_desc')); ?>    
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/admin/general.blade.php ENDPATH**/ ?>