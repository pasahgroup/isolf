  
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
            <h1>Titles,Static Images and Mesages</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About us</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">About us</h3>

          <div class="card-tools">
            <a href="<?php echo e(route('coa-About')); ?>" class="btn btn-primary" >
              <i class="fas fa-plus"></i>About us
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Title</th>                 
                    <th>Description</th> 
                    <th>Photo</th> 
                    <th>status</th> 
                    <th>Action</th>              
                  </tr>
                  </thead>
                  <tbody>
                   
                    <?php $__currentLoopData = $aboutus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                    <td><?php echo e($data->id); ?></td>
                     <td><a href="<?php echo e(route('PostBody.edit',$data->id)); ?>"><?php echo e($data->title); ?></a></td>                   
                    <td><?php echo e($data->body); ?></td>
                       <td><div class="logo mr-auto"><img src="<?php echo e(URL::asset('/storage/uploads/'.$data->attachment)); ?>" width="2" height="2"></div></td>
                        <td><?php echo e($data->status); ?></td>
                       <td><a href="<?php echo e(route('PostBody.edit',$data->id)); ?>"><i class="fa fa-edit"></i></a> 
                         <a href="/destroy-Aboutus/<?php echo e($data->id); ?>" onclick="return confirm('Are you sure? You want to delete: <?php echo e($data->title); ?>','Destroy')"><i class="fa fa-trash red"></i></a></td>
                                </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                  <tr>
                     <th>#</th>
                    <th>Title</th>                 
                    <th>Description</th> 
                    <th>Photo</th> 
                    <th>status</th> 
                    <th>Action</th>      
                  </tr>
                  </tfoot>
                </table>
              </div>

        </div>
      </div>
          </section>
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/admins/coa/aboutus.blade.php ENDPATH**/ ?>