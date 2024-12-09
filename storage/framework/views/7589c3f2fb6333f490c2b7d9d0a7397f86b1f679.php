  
  <?php $__env->startSection('contents'); ?>

  <style type="text/css">
    .red{
      color: red;
    }
  </style>

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
              <form  method="post" id="post_form" action="<?php echo e(route('sales.store')); ?>" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
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
                                <option value="">Select Sales Header</option>
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
                            <select name="tour_id" id="" class="form-control">
                              <option value="">Select Tour</option>
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
                            <input type="number" class="form-control" name="discount"  placeholder="Discount">
                          </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                          <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-md-4 col-form-label">Deadline</label>
                            <div class="col-sm-8 col-md-8">
                              <input type="date" class="form-control" name="offer_deadline" >
                            </div>
                              </div>
                          </div>

                  <div class="col-md-1 col-lg-1 col-sm-12 col-xs-12 col-md-offset-3">
                      <div class="form-group row">

              <div>
                <button type="submit" class="btn btn-primary float-right">Save</button>
              </div>
             </div>
                </div>
            </div>

            </form>
          <!-- /.col-->
        </div>
    </section>



    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Special Offer</h3>

        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Days</th>
                    <th>Category</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>New Price</th>
                    <th>Sales Header</th>
                    <th>Deadline</th>
                    <th>Status</th>
                    <th>Action</th>

                  </tr>
                  </thead>
                  <tbody>
                      <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->id); ?></td>
                    <td><a href="/editOffer/<?php echo e($data->id); ?>"> <?php echo e($data->tour_name); ?></a></td>
                    <td><?php echo e($data->days); ?></td>
                    <td><?php echo e($data->category); ?></td>
                    <td><?php echo e($data->type); ?></td>
                    <td><?php echo e($data->price); ?> <?php echo e($data->currency); ?> </td>
                    <td><?php echo e($data->discount); ?> <?php echo e($data->currency); ?> </td>
                    <td><?php echo e($data->new_price); ?> <?php echo e($data->currency); ?> </td>
                    <td><?php echo e($data->sales_header); ?> </td>
                    <td><?php echo e($data->offer_deadline); ?> </td>
                    <td><?php echo e($data->status); ?> </td>
                    <td><a href="/editOffer/<?php echo e($data->id); ?>"><i class="fa fa-edit"></i></a>
                    <a href="/offer-Destroy/<?php echo e($data->id); ?>" onclick="return confirm('Are you sure? You want to delete Slider: <?php echo e($data->first_name); ?> <?php echo e($data->last_name); ?>','Destroy')"><i class="fa fa-trash red"></i></a></td>

                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>

                </table>
              </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/admins/sales/special-offer/index.blade.php ENDPATH**/ ?>