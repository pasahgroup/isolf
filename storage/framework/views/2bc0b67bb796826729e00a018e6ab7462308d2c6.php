  
  <?php $__env->startSection('contents'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Itinerary Page nn</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Itinerary</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <?php if($programs!=null): ?>
    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  Add Itinerary
                </h3>
              </div>
              <div class="container-fluid x_content">
                <br />
               
              <form  method="post" id="post_form" action="<?php echo e(route('itineraries.store')); ?>" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    </div>
                    <input type="hidden" name="tour_addon" value="<?php echo e($tour_addon); ?>">
                    <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
                    <input type="hidden" name="days" value="<?php echo e($programs->days?? ''); ?>">
                    <input type="hidden" name="program_id" value="<?php echo e($programs->id?? ''); ?>">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-md-2 col-form-label">Itinerary Summury </label>
                          <div class="col-sm-10 col-md-10">
                            <textarea  class="form-control" name="itinerary_summury"  cols="30" rows="5" maxlength="490"></textarea>
                          </div>
                            </div>
                        </div>
                        </div>

                        <?php for($i = 1; $i <= $programs->days; $i++): ?>
                        
                        <div class="col-12" id="accordion">
                            <div class="card">
                                <a class="d-block w-100" data-toggle="collapse" href="#collapse<?php echo e($i); ?>">
                                    <div class="card-header bg-primary">
                                        <h4 class="card-title w-100">
                                           Day <?php echo e($i); ?>

                                        </h4>
                                    </div>
                                </a>
                                <div id="collapse<?php echo e($i); ?>" class="collapse <?php if($i==1): ?>show <?php endif; ?>" data-parent="#accordion">
                                    <div class="color-palette-set">
                                        <div class="bg-primary disabled color-palette">
                                    <div class="card-body">
                                      

            <div class="row" style="padding:10px">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Days <?php echo e($i); ?> Title </label>
                      <div class="col-sm-10">
                        <input type="hidden" name="day[]" value="<?php echo e($i); ?>">
                        <input type="text" name="itinerary_title[]" class="form-control" placeholder="Day <?php echo e($i); ?> title">
                      </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-2 col-md-2 col-form-label">Day <?php echo e($i); ?> Description</label>
                          <div class="col-sm-10 col-md-10">
                            <textarea name="itinerary_description[]" class="form-control" cols="30" rows="2"></textarea>
                          </div>
                            </div>
                        </div>
  

       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group row">
                              <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Destination</label>
                              <div class="col-sm-8 col-md-8">
                                <select name="destination_id[]" id="" class="form-control"  required="">
                                    <option value="">--Select Destination--</option>
                                    <?php $__currentLoopData = $destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destination): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($destination->id); ?>"><?php echo e($destination->destination_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                              </div>
                                </div>
                            </div>                  


   <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Distance(KM)</label>
                        <div class="col-sm-6 col-md-8">
                         <input type="text" name="distance[]" class="form-control">
                        </div>
                          </div>
                      </div>


 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Trans.</label>
                        <div class="col-sm-8 col-md-8">
                          <select name="transport[]" id="" class="form-control"  required="">
                             
                             <option value="">--Transport--</option>
                            <option>Bike riding</option>
                              <option>Camel</option>
                             <option>Canoeing</option>
                             <option>Walking Safaris</option>

                             <option>Horse Riding</option>
                             <option>Boat</option>
                              <option>Bus</option>
                             <option>Ballon</option>
                             <option>Flight</option>

                            <option>Safari Land Cruiser</option>
                             <option>Mini-Bus/Min-Van</option>
                              <option>Min-Van</option>
                              <option>Overland Truck</option>
                          </select>
                        </div>
                          </div>
                      </div>

                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Accommodation</label>
                        <div class="col-sm-8 col-md-8">
                          <select name="accommodation_id[]" id="" class="form-control"  required="">
                              <option value="">--Select Accommodation--</option>
                              <?php $__currentLoopData = $accommodations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accommodation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($accommodation->id); ?>"><?php echo e($accommodation->accommodation_name); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>
                          </div>
                      </div>

                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group row">
                        <label for="mealplan" class="col-sm-4 col-md-4 col-form-label">Meal Plan</label>
                        <div class="col-sm-8 col-md-8">
                          <select name="meal[]" id="" class="form-control"  required="">
                              <option value="">--Meal Plan--</option>
                             <option>Breakfast</option>
                            <option>Lunch</option>
                            <option>Dinner</option>
                            <option>Breakfast,Lunch</option>
                            <option>Breakfast,Lunch,Dinner</option>
                          </select>
                        </div>
                        </div>
                      </div>
                  

                        </div>
                        </div>
                          </div>
                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>

                         </div>

                <div class="form-group row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
              <div>
                <button type="submit" class="btn btn-primary float-right">Save</button>
              </div>
                  </div>
                </div>
            </form>


          <!-- /.col-->
        </div>
    </section>
    <?php endif; ?>
  </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/admins/Itinerary/add.blade.php ENDPATH**/ ?>