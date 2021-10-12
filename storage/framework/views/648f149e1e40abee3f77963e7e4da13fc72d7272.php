<?php $__env->startSection('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portofolio</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li>Portofolio</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php $__currentLoopData = $pcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li data-filter=".<?php echo e($category->id); ?>"><?php echo e($category->name); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-4 col-md-6 portfolio-item <?php echo e($portfolio->pcategory_id); ?>">
            <img src="<?php echo e(asset('storage/'.$portfolio->cover)); ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?php echo e($portfolio->name); ?></h4>
              <p><?php echo e($portfolio->pcategory->name); ?></p>
              <a href="<?php echo e(asset('storage/'.$portfolio->cover)); ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?php echo e($portfolio->name); ?>"><i class="bx bx-plus"></i></a>
              <a href="<?php echo e(route('portfolioshow',$portfolio->slug)); ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/front/portfolio.blade.php ENDPATH**/ ?>