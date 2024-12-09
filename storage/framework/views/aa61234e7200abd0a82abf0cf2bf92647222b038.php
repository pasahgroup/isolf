  
  <?php $__env->startSection('contents'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Special Offer Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Special Offer Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  New Special Offer
                </h3>
              </div>
              <div class="container-fluid x_content">
                <br />
              <form  method="post" id="post_form" action="<?php echo e(route('update-offer',$datas->id)); ?>" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                <?php echo csrf_field(); ?>
            <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
                <div class="card-body">
                    <div class="row">

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Sales Header</label>
                      <div class="col-sm-8 col-md-8">
                        <div class="form-group row">

                              <select name="sales_header" id="" class="form-control">
                                <option value="<?php echo e($datas->sales_header); ?>"><?php echo e($datas->sales_header); ?></option>
                                <option>Early Booking Offer</option>
                                <option>Last Minute Offer</option>
                                <option>Holiday Season Sale</option>
                              </select>

                              </div>
                      </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Tour </label>
                          <div class="col-sm-8 col-md-8">
                            <select name="tour_id" id="tour_id" class="form-control">
                              <option value="<?php echo e($datas->tour_id); ?>"><?php echo e($datas->tour_name); ?></option>
                            <?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tour->id); ?>"><?php echo e($tour->tour_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>
                            </div>
                        </div>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-md-4col-form-label">Discount</label>
                          <div class="col-sm-8 col-md-8">
                            <input type="number" class="form-control" name="discount" value="<?php echo e($datas->discount); ?>">
                          </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Deadline</label>
                            <div class="col-sm-8 col-md-8">
                              <input type="date" class="form-control" name="offer_deadline" value="<?php echo e($datas->offer_deadline); ?>">
                            </div>
                              </div>
                          </div>

                  <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12 col-md-offset-3">
                      <div class="form-group row">

              <div>
                <button type="submit" class="btn btn-primary float-right">Update</button>
              </div>
             </div>
                </div>

                  <div class="col-md-12 col-sm-12 col-xs-12 col-md-offset-3">
                    <div class="form-group row">

              <div>
                <a role="button" href="/sales" class="btn btn-success float-right">Return to List</a>
              </div>
             </div>
                </div>
            </div>

            </form>
          <!-- /.col-->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/admins/sales/special-offer/editOffer.blade.php ENDPATH**/ ?>