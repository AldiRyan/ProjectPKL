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

<form action="<?php echo e(route('admin.post.update',$post->id)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="container">

        <div class="form-group">

            <div class="picture-container">
    
                <div class="picture">
    
                    <img src="<?php echo e(asset('storage/' . $post->cover)); ?>" class="picture-src" id="wizardPicturePreview" height="200px" width="400px" title=""/>
    
                    <input type="file" id="wizard-picture" name="cover" class="form-control <?php echo e($errors->first('cover') ? "is-invalid" : ""); ?> ">
    
                    <div class="invalid-feedback">
                        <?php echo e($errors->first('cover')); ?>    
                    </div>  
    
                </div>
    
                <h6>Pilih Cover</h6>
    
            </div>
    
        </div>


        <div class="form-group ml-5">

            <label for="title" class="col-sm-2 col-form-label">Title</label>

            <div class="col-sm-7">

                <input type="text" name='title' class="form-control <?php echo e($errors->first('title') ? "is-invalid" : ""); ?> " value="<?php echo e(old('title') ? old('title') : $post->title); ?>" id="title" placeholder="Title">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('title')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="category" class="col-sm-2 col-form-label">Category</label>

            <div class="col-sm-7">

                <select name='category' class="form-control <?php echo e($errors->first('category') ? "is-invalid" : ""); ?> " id="category">
                    <option disabled selected>Choose One!</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?php echo e($category->id == $post->category_id ? 'selected' : ''); ?> value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <div class="invalid-feedback">
                    <?php echo e($errors->first('category')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="tags" class="col-sm-2 col-form-label">Tags</label>

            <div class="col-sm-7">

                <select name='tags[]' class="form-control <?php echo e($errors->first('tags') ? "is-invalid" : ""); ?> select2" id="tags" multiple>
                    <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option selected value="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tags): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($tags->id); ?>"><?php echo e($tags->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <div class="invalid-feedback">
                    <?php echo e($errors->first('tags')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="body" class="col-sm-2 col-form-label">Desc</label>

            <div class="col-sm-8">

                <textarea name="body" class="form-control <?php echo e($errors->first('body') ? "is-invalid" : ""); ?> "  id="summernote" cols="30" rows="10"><?php echo e(old('body') ? old('body') : $post->body); ?></textarea>
                <div class="invalid-feedback">
                    <?php echo e($errors->first('body')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>

            <div class="col-sm-7">

                <input type="text" name='keyword' class="form-control <?php echo e($errors->first('keyword') ? "is-invalid" : ""); ?> " value="<?php echo e(old('keyword') ? old('keyword') : $post->keyword); ?>" id="keyword" placeholder="Keyword">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('keyword')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="meta_desc" class="col-sm-2 col-form-label">Meta Desc</label>

            <div class="col-sm-7">

                <input type="text" name='meta_desc' class="form-control <?php echo e($errors->first('meta_desc') ? "is-invalid" : ""); ?> " value="<?php echo e(old('meta_desc') ? old('meta_desc') : $post->meta_desc); ?>" id="meta_desc" placeholder="Meta Description">

                <div class="invalid-feedback">
                    <?php echo e($errors->first('meta_desc')); ?>    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="status" class="col-sm-2 col-form-label">Status</label>

            <div class="col-sm-7">

                <select name='status' class="form-control <?php echo e($errors->first('status') ? "is-invalid" : ""); ?> " id="status">
                    <option <?php echo e($post->status == 'PUBLISH' ? 'selected' : ''); ?> value="PUBLISH">PUBLISH</option>
 
                    <option <?php echo e($post->status == 'DRAFT' ? 'selected' : ''); ?> value="DRAFT">DRAFT</option>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pt_bosto\profile-bosto\resources\views/admin/post/edit.blade.php ENDPATH**/ ?>