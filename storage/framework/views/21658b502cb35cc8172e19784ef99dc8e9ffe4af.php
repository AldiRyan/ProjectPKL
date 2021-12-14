<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    <?php echo $__env->yieldContent('title'); ?>
    <?php echo e($general->title); ?></title>
  <meta content="<?php echo e($general->meta_desc); ?>" name="description">
  <meta content="<?php echo e($general->keyword); ?>" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('storage/'.$general->favicon)); ?>" rel="icon">
  <link href="<?php echo e(asset('storage/'.$general->favicon)); ?>" rel="apple-touch-icon">

  <?php echo $__env->yieldContent('meta'); ?>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('front/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('front/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('front/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('front/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('front/vendor/venobox/venobox.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('front/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet"> 
  <link href="<?php echo e(asset('front/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('front/vendor/remixicon/remixicon.css')); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo e(asset('front/css/style.css')); ?>" rel="stylesheet">
  
  
  <?php echo $general->sharethis; ?>


  <!-- =======================================================
  * Template Name: Company - v2.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <a href="/" class="logo mr-auto"><img src="<?php echo e(asset('storage/'.$general->logo)); ?>" alt="" class="logo-big" style="min-height: 50px; width: auto;"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li <?php echo e(request()->is('/') ? 'class=active' : ''); ?>><a href="<?php echo e(route('homepage')); ?>">Home</a></li>
          <li <?php echo e(request()->is('about-us') ? 'class=active' : ''); ?>><a href="<?php echo e(route('about')); ?>">Profile</a></li>
          <!-- <li class="drop-down"><a href="">Tentang</a>
            <ul>
              <li <?php echo e(request()->is('testimonials') ? 'class=active' : ''); ?>><a href="<?php echo e(route('testi')); ?>">Feedback</a></li>
            </ul>
          </li> -->
          <li <?php echo e(request()->is('portfolio') ? 'class=active' : ''); ?>><a href="<?php echo e(route('portfolio')); ?>">Product</a></li>
          <li <?php echo e(request()->is('services') ? 'class=active' : ''); ?>><a href="<?php echo e(route('service')); ?>">Contact Us</a></li>
          <!-- <li <?php echo e(request()->is('blog') ? 'class=active' : ''); ?>><a href="<?php echo e(route('blog')); ?>">Blog</a></li> -->
      
        </ul>
      </nav><!-- .nav-menu -->

      <!-- <div class="header-social-links">
        <button type="button" class="btn btn-outline-primary btn-sm"><a  href="<?php echo e(asset('login')); ?>">Admin</a></button>
      </div> -->

    </div>
  </header><!-- End Header -->

  <?php echo $__env->yieldContent('content'); ?>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><strong>Address</strong></h3>
            <p>
              <?php echo e($general->address1); ?> <br>
              
              <a href="<?php echo e($general->gmaps); ?>" target="_blank" rel="noopener noreferrer">(Go to Google Maps)</a>
              <br><br>
              
              <strong>Phone:</strong> <?php echo e($general->phone); ?><br>
              <strong>E-mail:</strong> <?php echo e($general->email); ?><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <?php $__currentLoopData = $link; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo e($link->link); ?>"><?php echo e($link->name); ?></a></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Social Media</h4>
            <ul>
              <li><a href="<?php echo e($general->twitter); ?>" target="_blank" class="twitter"><i class="bx bxl-twitter"></i>Twitter</a></li>
              <li><a href="<?php echo e($general->facebook); ?>" target="_blank" class="facebook"><i class="bx bxl-facebook"></i>Facebook</a></li>
              <li><a href="<?php echo e($general->instagram); ?>" target="_blank" class="instagram"><i class="bx bxl-instagram"></i>Instagram</a></li>
              <li><a href="<?php echo e($general->linkedin); ?>" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i>Linkedin</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Subscribe to the latest article updates via email</p>
            <?php if(session('success')): ?>

            <div class="alert alert-success">

                <?php echo e(session('success')); ?>


            </div>

            <?php endif; ?>

            <form action="<?php echo e(route('subscribe')); ?>" method="post">
              <?php echo csrf_field(); ?>
              <input type="email" name="email" class="form-control <?php echo e($errors->first('email') ? "is-invalid" : ""); ?> " value="<?php echo e(old('email')); ?>" required><input type="submit" value="Subscribe">
              <div class="invalid-feedback">
                <?php echo e($errors->first('email')); ?>    
            </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-2 my-auto">
      <div class="mr-md-auto text-center text-md-left mt-2">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; <strong>PT Bromo Steel Indonesia (BOSTO)</strong> 2021</span>. Developed by <strong>PKL Team</strong>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          <!-- Designed by <a href="">BootstrapMade</a> ・ Developed by <a href="">Codelapan</a> -->
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(asset('front/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('front/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
  <script src="<?php echo e(asset('front/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('front/vendor/jquery-sticky/jquery.sticky.js')); ?>"></script>
  <script src="<?php echo e(asset('front/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('front/vendor/venobox/venobox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('front/vendor/waypoints/jquery.waypoints.min.js')); ?>"></script>
  <script src="<?php echo e(asset('front/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(asset('front/vendor/aos/aos.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('front/js/main.js')); ?>"></script>

  <?php echo $general->tawkto; ?>


  <?php echo $__env->yieldPushContent('scripts'); ?>

</body>

</html>
<?php /**PATH D:\applications\companyprofile\resources\views/layouts/front.blade.php ENDPATH**/ ?>