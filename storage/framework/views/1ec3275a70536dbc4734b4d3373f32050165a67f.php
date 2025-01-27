  
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
            <h1>Tour Guide List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tour Guide page</li>
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
                     <th>Photo</th>
                     <th>Phone</th>
                    <th>Email</th>
                   
                    <th>Nationality</th>
                     
                      <th>CV</th>
                      <th>PIN</th>
                    <th>Language</th>
                     <th>Other language</th>
                     <th>Status</th>
                      <th>driving_license</th>
                       <th>education_level</th>
                        <th>professional</th>
                         <th>hear_about_us</th>    
                         <th>Action</th>                   
                   
                  </tr>
                  </thead>
                  <tbody>
                      <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($data->id); ?></td>
                    <td><a href="<?php echo e(route('inclusive.show',$data->id)); ?>"><?php echo e($data->first_name); ?></a></td>
                    <td><?php echo e($data->last_name); ?></td>
                    <td><div class="logo mr-auto"><img src="<?php echo e(URL::asset('/storage/tourGuides/'.$data->photo)); ?>" width="60" height="40"></div></td>
                    <td><?php echo e($data->phone); ?></td>
                    <td><?php echo e($data->email); ?></td>
                     
                    <td><?php echo e($data->nationality); ?></td>
                     <td><?php echo e($data->cv); ?></td>
                    <td><?php echo e($data->pin); ?></td>
                    <td><span class="badge"> <?php echo e($data->language); ?></span></td>
                     <td><span class="badge"> <?php echo e($data->other_language); ?></span></td>
                    
                   
                     <td><?php echo e($data->status); ?></td>
                     <td><?php echo e($data->driving_license); ?></td>
                     <td><?php echo e($data->education_level); ?></td>
                     <td><?php echo e($data->professional); ?></td>
                     <td><?php echo e($data->hear_about_us); ?></td>
                    
                    <td><a href="<?php echo e(route('Tour-Guide.edit',$data->id)); ?>"><i class="fa fa-edit"></i></a> 
                      <a href="<?php echo e(route('Guide-Destroy',$data->id)); ?>" onclick="return confirm('Are you sure? You want to delete Tour-Agent: <?php echo e($data->first_name); ?> <?php echo e($data->last_name); ?>','Destroy')"><i class="fa fa-trash red"></i></a></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                   <tr>
                 <th>#</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Photo</th>
                     <th>Phone</th>
                    <th>Email</th>
                    
                    <th>Nationality</th>
                     
                      <th>CV</th>
                      <th>PIN</th>
                    <th>Language</th>
                     <th>Other language</th>
                     <th>Status</th>
                      <th>driving_license</th>
                       <th>education_level</th>
                        <th>professional</th>
                         <th>hear_about_us</th>    
                         <th>Action</th>  
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
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/admins/tourGuides/index.blade.php ENDPATH**/ ?>