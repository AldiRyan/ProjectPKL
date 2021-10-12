<?php $__env->startSection('title'); ?>
<?php echo e($post->title); ?> - 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('meta'); ?>

<!-- Primary Meta Tags -->
<meta name="title" content="<?php echo e($post->title); ?>">
<meta name="description" content="<?php echo e($post->meta_desc); ?>">
<meta name='keywords' content='<?php echo e($post->keyword); ?>' />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="127.0.0.1:8000/blog/<?php echo e($post->slug); ?>">
<meta property="og:title" content="<?php echo e($post->title); ?>">
<meta property="og:description" content="<?php echo e($post->meta_desc); ?>">
<meta property="og:image" content="<?php echo e(asset('storage/'.$post->cover)); ?>">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="127.0.0.1:8000/blog/<?php echo e($post->slug); ?>">
<meta property="twitter:title" content="<?php echo e($post->title); ?>">
<meta property="twitter:description" content="<?php echo e($post->meta_desc); ?>">
<meta property="twitter:image" content="<?php echo e(asset('storage/'.$post->cover)); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single" data-aos="fade-up">

              <div class="entry-img">
                <img src="<?php echo e(asset('storage/'.$post->cover)); ?>" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="<?php echo e(route('blogshow',$post->slug)); ?>"><?php echo e($post->title); ?></a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="<?php echo e(route('blogshow',$post->slug)); ?>"><?php echo e($post->user->name); ?></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="<?php echo e(route('blogshow',$post->slug)); ?>"><time datetime="2020-01-01"><?php echo e(Carbon\Carbon::parse($post->created_at)->format("d F, Y")); ?></time></a></li>
                  <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="<?php echo e(URL::current()); ?>#disqus_thread">Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <p>
                  <?php echo $post->body; ?>

                </p>
              </div>

              <div class="entry-footer clearfix">
                <div class="float-left">
                  <i class="icofont-folder"></i>
                  <ul class="cats">
                    <li><a href="<?php echo e(route('category',$post->category->slug)); ?>"><?php echo e($post->category->name); ?></a></li>
                  </ul>

                  <i class="icofont-tags"></i>
                  <ul class="tags">
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <li><a href="<?php echo e(route('tag',$tag->slug)); ?>"><?php echo e($tag->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                  </ul>
                </div>

              </div>

            </article><!-- End blog entry -->

            <div class="blog-comments" data-aos="fade-up">

              <div id="disqus_thread"></div>

            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar" data-aos="fade-left">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="<?php echo e(route("search")); ?>" method="GET">
                  <input type="text" name="query">
                  <button type="submit"><i class="icofont-search"></i></button>
                </form>

              </div><!-- End sidebar search formn-->

              <h3 class="sidebar-title">Categories</h3>
              <div class="sidebar-item categories">
                <ul>
                  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li><a href="<?php echo e(route('category',$category->slug)); ?>"><?php echo e($category->name); ?> <span>(<?php echo e($category->count()); ?>)</span></a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>

              </div><!-- End sidebar categories-->

              <h3 class="sidebar-title">Recent Posts</h3>
              <div class="sidebar-item recent-posts">

                <?php $__currentLoopData = $recent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="post-item clearfix">
                  <img src="<?php echo e(asset('storage/'.$recent->cover)); ?>" alt="">
                  <h4><a href="<?php echo e(route('blogshow',$post->slug)); ?>"><?php echo e($recent->title); ?></a></h4>
                  <time datetime="2020-01-01"><?php echo e(Carbon\Carbon::parse($post->created_at)->format("d F, Y")); ?></time>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              
              </div><!-- End sidebar recent posts-->

              <h3 class="sidebar-title">Tags</h3>
              <div class="sidebar-item tags">
                <ul>
                  <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <li><a href="<?php echo e(route('tag',$tag->slug)); ?>"><?php echo e($tag->name); ?></a></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                </ul>

              </div><!-- End sidebar tags-->

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo $general->disqus; ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/front/blogshow.blade.php ENDPATH**/ ?>