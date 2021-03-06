<?php $__env->startSection('content'); ?>
              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
              </div>
    
              <!-- Content Row -->
              <div class="row">
    
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Admin</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($admin); ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Team</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($team); ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    
               
                <!-- Earnings (Monthly) Card Example -->
            <!--    <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Post</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($blog); ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-table fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
    
                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Page</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($page); ?></div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-table fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\companyprofile\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>