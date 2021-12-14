<?php $__env->startSection('content'); ?>
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-start align-items-center text-center mt-1">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Contact Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
        <section id="about-us" class="about-us">
          <div class="container" data-aos="fade-up">
            <div class="row content">
              <div class="col-lg-6" data-aos="fade-right">
                <h2>Contact Us</h2>
              </div>
              <div class="col-lg-6 pt-2 pt-md-0" data-aos="fade-left">                
                  <p>
                    Alamat: Jl. Laks. RE. Martadinata 18-20 Kota Pasuruan
                    <br>
                    <br>Telepon: 0343-421074
                    <br> 
                    <br>Fax.: 0343-421797
                    <br>
                    <br>E-mail: operasional@ptbosto
                    <br> 
                    <br>Website: www.ptbosto.com
                  </p>
              </div>
            </div>
          </div>
        </section><!-- End About Us Section -->
      </div>
    </section><!-- End Services Section -->

    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Partners</h2>
        </div>
        
        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
          <?php $__currentLoopData = $partner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <a href="<?php echo e($partner->link); ?>" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo e(asset('storage/'.$partner->cover)); ?>" class="img-fluid" alt="<?php echo e($partner->name); ?>">
              </a>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      
      </div>
    </section>
  </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/front/service.blade.php ENDPATH**/ ?>