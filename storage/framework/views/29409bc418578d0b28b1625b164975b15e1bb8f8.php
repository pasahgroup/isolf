  
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
            <h1>Testimonies Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Testimonies Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <section class=" container-fluid content">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-outline card-info">
              <div class="card-header">
                <h3 class="card-title">
                  Add New Testimony
                </h3>
              </div>
            </div>
          </div>
            <div class="col-md-6">
            <div class="card card-outline card-info">
              <div class="card-header">
                <a href="/Testimony-create" role="button" class="btn btn-primary float-right">Add Testmony</a>
              </div>
            </div>
          </div>
    </section>


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Testimonies List</h3>

        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>                  
                    <th>Comment</th>
                    <th>Rating Level</th>
                     <th>Status</th> 
                      <th>Date</th>
                      <th>Action</th>                      
                     </tr>
                  </thead>
                  <tbody>
                     
                <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->id); ?></td>
                    <td><a href="#"> <?php echo e($data->full_name); ?></a></td>
                    <td><?php echo e($data->comments); ?></td>
                    <td><?php echo e($data->rating); ?></td>
                    <td><?php echo e($data->status); ?></td>
                    <td><?php echo e($data->created_at); ?> </td>
                    <td><a href="<?php echo e(route('TestimoniesEdit',$data->id)); ?>"><i class="fa fa-edit"></i></a> 
                      <a href="<?php echo e(route('TestimoniesDestroy',$data->id)); ?>" onclick="return confirm('Are you sure? You want to delete <?php echo e($data->tour_name); ?>','Inclusive')"><i class="fa fa-trash red"></i></a></td>
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
      </div>

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
<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/admins/Testimonies/testimonies.blade.php ENDPATH**/ ?>