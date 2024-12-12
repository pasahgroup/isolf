  
  <?php $__env->startSection('contents'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Programs Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Programs Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Tour code</th>
                    <th>Tour name</th>
                      <th>Tour type</th>
                    <th>Accommodation</th>
                    <th>Unit Price($)</th>
                    <th>Total Price($)</th>
                    <th>Addon Price($)</th>
                       <th>Total Addon Price($)</th>
                     <th>Total Cost($)</th>
                    <th>Adults</th>
                    <th>Teens</th>
                     <th>Children</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Email</th>
                     <th>Travel date</th>
                     <td>PIN</td>
                         <th>Other info.</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($customer->id); ?></td>
                    <td><a href="<?php echo e(route('programs.show',$customer->id)); ?>"><?php echo e($customer->first_name); ?></a></td>
                    <td><?php echo e($customer->last_name); ?></td>

                     <td><?php echo e($customer->tour_code); ?></td>
                    <td><?php echo e($customer->tour_name); ?></td>
                      <td><?php echo e($customer->tour_type); ?></td>
                    <td><?php echo e($customer->accommodation); ?></td>
                    <td bgcolor="purple" style="font-color: text-white"><?php echo e($customer->unit_price); ?></td>
                    <td bgcolor="purple" style="font-color: text-white"><?php echo e($customer->total_price); ?></td>
                    <td bgcolor="yellow"><?php echo e($customer->addon_price); ?></td>
                     <td bgcolor="yellow"><?php echo e($customer->total_addon_price); ?></td>
                      <td bgcolor="green"><?php echo e($customer->total_cost); ?></td>
                    <td><?php echo e($customer->adults); ?></td>
                    <td><?php echo e($customer->teens); ?></td>
                    <td><?php echo e($customer->children); ?></td>
                    <td><?php echo e($customer->country); ?></td>
                    <td><?php echo e($customer->phone); ?></td>
                    <td><?php echo e($customer->email); ?></td>
                     <td><?php echo e($customer->travel_date); ?></td>
                       <td><?php echo e($customer->pin); ?></td>
                      <td><?php echo e($customer->additional_information); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                  <tr>
                   <th>#</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Tour code</th>
                      <th>Tour name</th>
                        <th>Tour type</th>
                    <th>Accommodation</th>
                    <th>Unit Price($)</th>
                    <th>Total Price($)</th>
                    <th>Addon Price($)</th>
                    <th>Total Addon Price($)</th>
                     <th>Total Cost($)</th>
                    <th>Adults</th>
                    <th>Teens</th>
                     <th>Children</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Email</th>
                     <th>Travel date</th>
                     <td>PIN</td>
                         <th>Other info.</th>
                  </tr>
                  </tfoot>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/admins/customers/customers.blade.php ENDPATH**/ ?>