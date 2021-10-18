<?php $__env->startSection('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Visi Misi Perusahaan</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Visi Misi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Visi misi Section ======= -->
    <section id="visi-misi" class="visi-misi">
      <div class="container">

        <div class="row">

          <?php $__currentLoopData = $testi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item mt-4 mt-lg-0">
              <img src="<?php echo e(asset('storage/'.$item->photo)); ?>" class="testimonial-img" alt="">
              <h3><?php echo e($item->name); ?></h3>
              <h4><?php echo e($item->profession); ?></h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                <?php echo e($item->desc); ?>

                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          

        </div>

        <div class="mt-4">
            <?php echo e($testi->links()); ?>

        </div>

      </div>
    </section><!-- End Visi misi Section -->

  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\pt_bosto\resources\views/front/testi.blade.php ENDPATH**/ ?>