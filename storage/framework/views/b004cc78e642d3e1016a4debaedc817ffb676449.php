<?php $__env->startSection('content'); ?>
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Tentang</h2>
            <ol>
              <li><a href="/">Beranda</a></li>
              <li>Tentang</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <!-- ======= About Us Section ======= -->
      <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">
  
          <div class="row content">
            <div class="col-lg-6" data-aos="fade-right">
              <h2><?php echo e($about->title); ?></h2>
              <h3><?php echo e($about->subject); ?></h3>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p>
                <?php echo $about->desc; ?>

              </p>
             
            </div>
          </div>
  
        </div>
      </section><!-- End About Us Section -->
  
      <!-- ======= Our Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Tim <strong>Kami</strong></h2>
            <p>Struktur perusahaan yang ada di PT Bromo Steel Indonesia (BOSTO)</p>
          </div>
  
          <div class="row">
  
           <?php $__currentLoopData = $team; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="<?php echo e(asset('storage/'.$team->photo)); ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href="<?php echo e($team->twitter); ?>"><i class="icofont-twitter"></i></a>
                  <a href="<?php echo e($team->facebook); ?>"><i class="icofont-facebook"></i></a>
                  <a href="<?php echo e($team->instagram); ?>"><i class="icofont-instagram"></i></a>
                  <a href="<?php echo e($team->linkedin); ?>"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo e($team->name); ?></h4>
                <span><?php echo e($team->position); ?></span>
              </div>
            </div>
          </div>
           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
          </div>
  
        </div>
      </section><!-- End Our Team Section -->
  
      <!-- ======= Our Clients Section ======= -->
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
      </section><!-- End Our Clients Section -->

       <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Gambaran Umum Perusahaan</h2>
          </div>
  
          <div class="faq-list">
            <ul>
              <?php $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-<?php echo e($faq->id); ?>"><?php echo e($faq->question); ?> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-<?php echo e($faq->id); ?>" class="collapse <?php echo e($key == 0 ? 'show' : ''); ?>" data-parent=".faq-list">
                  <p>
                    <?php echo e($faq->answer); ?>

                  </p>
                </div>
              </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            </ul>
          </div>
  
        </div>
      </section><!-- End Frequently Asked Questions Section -->
  
    </main><!-- End #main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/front/about.blade.php ENDPATH**/ ?>