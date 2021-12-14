<?php $__env->startSection('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        
        <div class="d-flex justify-content-start align-items-center mt-1">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Product</li>
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
              <h3>Project Information</h3>
              <ul>
                <li><strong>Name</strong>: <?php echo e($portfolio->name); ?></li>
                <li><strong>Category</strong>:  <?php echo e($portfolio->pcategory->name); ?></li>
                <li><strong>Client</strong>: <?php echo e($portfolio->client); ?></li>
                <li><strong>Project date</strong>: <?php echo e(Carbon\Carbon::parse($portfolio->date)->format("d F, Y")); ?></li>
              </ul>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/front/portfolio.blade.php ENDPATH**/ ?>