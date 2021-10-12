<?php $__env->startSection('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="<?php echo e(asset('storage/'.$portfolio->cover)); ?>" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>:  <?php echo e($portfolio->pcategory->name); ?></li>
              <li><strong>Client</strong>: <?php echo e($portfolio->client); ?></li>
              <li><strong>Project date</strong>: <?php echo e(Carbon\Carbon::parse($portfolio->date)->format("d F, Y")); ?></li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2><?php echo e($portfolio->name); ?></h2>
          <p>
            <?php echo $portfolio->desc; ?>

          </p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/front/portfolioshow.blade.php ENDPATH**/ ?>