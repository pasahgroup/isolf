  
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
            <h1>Departures Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Departures Page</li>
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
                  Add New Departure
                </h3>
              </div>
              <div class="container-fluid x_content">
                <br />
              <form  method="post" id="post_form" action="<?php echo e(route('departures.store')); ?>" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                <?php echo csrf_field(); ?>
            <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
                <div class="card-body">
                    <div class="row">


                      <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group row">
                          <label for="tour_name">Tour name</label>
                          <div class="col-sm-8 col-md-8">

                           <select name="tour_id" id="" class="form-control" onchange="getComboA(this)">
                            <option value="">--Select Tour--</option>
                            <?php $__currentLoopData = $tours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tour->id); ?>"><?php echo e($tour->tour_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>
                            </div>
                        </div>

           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group row">
                          <label for="srs">Price</label>
                          <div class="col-sm-8 col-md-8">
                            <input type="number" class="form-control" name="price"  placeholder="Tour Price">
                          </div>
                            </div>
              </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group row">
                          <label for="srs">Seats</label>
                          <div class="col-sm-8 col-md-8">
                            <input type="number" class="form-control" name="seats" min="1" placeholder="no of seats">
                          </div>
                            </div>
                        </div>

                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group row">
                          <label for="srs" class="col-sm-4 col-md-4col-form-label">SRS Price</label>
                          <div class="col-sm-8 col-md-8">
                            <input type="number" class="form-control" name="srs"  placeholder="srs price">
                          </div>
                            </div>
                        </div>

                          <div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group row">
                          <label for="tour_category" class="col-sm-4 col-md-4 col-form-label">Group Tour Category</label>
                          <div class="col-sm-8 col-md-8">

                            <select name="tour_category" id="" class="form-control" onchange="getComboA(this)">
                              <option value="">--Select tour category--</option>
                                <option value="GS">Group Scheduled Tours</option>
                                <option value="SO">Special Occasions</option>
                                <option value="UN">Utalii Nyumbani</option>

                            </select>
                          </div>
                            </div>
                        </div>


                         <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                          <div class="form-group row">
                            <label for="start_date" class="col-sm-4 col-md-4 col-form-label">Start Date</label>
                            <div class="col-sm-8 col-md-8">
                              <input type="date" class="form-control" name="start_date" >
                            </div>
                              </div>
                          </div>


                  <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
                  <div class="form-group row">

                 <div>
                <button type="submit" class="btn btn-primary float-right">Save</button>
              </div>
             </div>
            </div>
            </div>

            </form>
        </div>
    </section>



    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Departures List</h3>

        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                     <th>Tour  ID</th>
                    <th>Tour Name</th>
                    <th>Tour Category</th>
                    <th>Price</th>
                    <th>SRS Price</th>
                      <th>Days</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Status</th>
                    <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>


                 <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->id); ?></td>
                      <td><?php echo e($data->tour_id); ?></td>
                    <td><a href="<?php echo e(route('sales.show',$data->id)); ?>"> <?php echo e($data->tour_name); ?></a></td>
                     <td><?php echo e($data->group_tour_category); ?></td>
                    <td><?php echo e($data->price); ?></td>
                    <td><?php echo e($data->srs); ?></td>
                    <td><?php echo e($data->days); ?></td>
                    <td><?php echo e($data->start_date); ?> </td>
                    <td><?php echo e($data->end_date); ?> </td>
                    <td><?php echo e($data->status); ?> </td>
                    <td><a href="/edit-departure/<?php echo e($data->id); ?>"><i class="fa fa-edit"></i></a>
                    <a href="/departure-destroy/<?php echo e($data->id); ?>" onclick="return confirm('Are you sure? You want to delete departure: <?php echo e($data->id); ?>','Destroy')"><i class="fa fa-trash red"></i></a></td>

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

<script type="text/javascript">

  function getComboA(selectObject) {
  var value = selectObject.value;
  console.log(value);
}
</script>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/admins/sales/departures/departure.blade.php ENDPATH**/ ?>