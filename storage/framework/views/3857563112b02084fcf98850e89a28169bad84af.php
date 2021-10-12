<?php $__env->startSection('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php echo e($service->title); ?></h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li><?php echo e($service->title); ?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">
        <div class="row">

          <?php echo $service->desc; ?>        

        </div>
      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/front/serviceshow.blade.php ENDPATH**/ ?>