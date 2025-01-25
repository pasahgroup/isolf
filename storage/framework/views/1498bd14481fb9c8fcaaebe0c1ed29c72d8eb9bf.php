  
  <?php $__env->startSection('contents'); ?>

  <style type="text/css">    
    .red {
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
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tour Cost Summanry Page</li>
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
          <h3 class="card-title"><b>Tour: Summanry Cost</b></h3>

          <div class="card-tools">
            <a href="<?php echo e(route('tourcostsummary.create')); ?>" class="btn btn-primary" >
              <i class="fas fa-plus"></i> Add Cost
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="card-body">
        <table class="table table-bordered data-table"> 
        <colspan>
           <col width="10%">
          <col width="20%">
          <col width="10%">
        </colspan>
        <tr>
          <th class="title" colspan="8" style="background-color:limegreen;">BASIC LEVEL ACCOMODATIONS</th>
        </tr>
        <tr>         
           <th class="title" colspan="2"></th>           
          <th class="title" colspan="7">PRICE PER PERSON IN USD</th>
        </tr>
        <tr>
        <th>#</th>       
          <th>Season</th>  
          <th>Tour name</th>         
          <th>2PAX</th>
           <th>3PAX</th>
            <th>4PAX</th>
             <th>5PAX</th>
              <th>6PAX</th>
              <th>SRS</th>
              <th>Action</th>
        </tr>

 <?php $__currentLoopData = $basic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
                    <td><?php echo e($datab->id); ?></td>
                    <td><a href="<?php echo e(route('tourcostsummary.show',$datab->id)); ?>"> <?php echo e($datab->season); ?></a></td>       
                    <td><?php echo e($datab->program); ?></td>              
                    <td><?php echo e($datab->twopax); ?></td>
                    <td><?php echo e($datab->threepax); ?></td>
                    <td><?php echo e($datab->fourpax); ?></td>
                    <td><?php echo e($datab->fivepax); ?></td>
                    <td><?php echo e($datab->sixpax); ?></td>
                    <td><?php echo e($datab->srs); ?></td>
                      
                      <td><a href="<?php echo e(route('editTourSummary',$datab->id)); ?>"><i class="fa fa-edit"></i></a>
                     <a href="<?php echo e(route('deleteSummary',$datab->id)); ?>" onclick="return confirm('Are you sure? You want to delete <?php echo e($datab->program); ?>','Inclusive')"><i class="fa fa-trash red"></i></a></td>
                  </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </table>

<hr>
<table class="table table-bordered data-table"> 
        <colspan>
           <col width="10%">
          <col width="20%">
          <col width="10%">
        </colspan>
        <tr>
          <th class="title" colspan="8" style="background-color:burlywood;">COMFORT LEVEL ACCOMODATIONS</th>
        </tr>
        <tr>         
           <th class="title" colspan="2"></th>           
          <th class="title" colspan="6">PRICE PER PERSON IN USD</th>
        </tr>
        <tr>
         <th>#</th>       
          <th>Season</th>
          <th>Tour name</th>
          <th>2PAX</th>
           <th>3PAX</th>
            <th>4PAX</th>
             <th>5PAX</th>
              <th>6PAX</th>
              <th>SRS</th>
        </tr>

 <?php $__currentLoopData = $comfort; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
                  <td><?php echo e($datac->id); ?></td>
                    <td><a href="<?php echo e(route('tourcostsummary.show',$datac->id)); ?>"> <?php echo e($datac->season); ?></a></td>      
                    <td><?php echo e($datac->program); ?></td>           
                    <td><?php echo e($datac->twopax); ?></td>
                    <td><?php echo e($datac->threepax); ?></td>
                    <td><?php echo e($datac->fourpax); ?></td>
                    <td><?php echo e($datac->fivepax); ?></td>
                    <td><?php echo e($datac->sixpax); ?></td>
                    <td><?php echo e($datac->srs); ?></td>
                  </tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </table>
         <hr>
         <table class="table table-bordered data-table"> 
        <colspan>
           <col width="10%">
          <col width="20%">
          <col width="10%">
        </colspan>
        <tr>
          <th class="title" colspan="9" style="background-color:violet;">DELUXE LEVEL ACCOMODATIONS</th>
        </tr>
        <tr>         
           <th class="title" colspan="2"></th>           
          <th class="title" colspan="6">PRICE PER PERSON IN USD</th>
        </tr>
        <tr>
             <th>#</th>       
          <th>Season</th>  
          <th>Tour name</th>        
          <th>2PAX</th>
           <th>3PAX</th>
            <th>4PAX</th>
             <th>5PAX</th>
              <th>6PAX</th>
              <th>SRS</th>
              <th> Action</th>
        </tr>

 <?php $__currentLoopData = $luxury; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
                       <td><?php echo e($datal->id); ?></td>
                    <td><a href="<?php echo e(route('tourcostsummary.show',$datal->id)); ?>"> <?php echo e($datal->season); ?></a></td>  
                    <td><?php echo e($datac->program); ?></td>                 
                    <td><?php echo e($datal->twopax); ?></td>
                    <td><?php echo e($datal->threepax); ?></td>
                    <td><?php echo e($datal->fourpax); ?></td>
                    <td><?php echo e($datal->fivepax); ?></td>
                    <td><?php echo e($datal->sixpax); ?></td>
                    <td><?php echo e($datal->srs); ?></td>
                      <td><a href="/editInclusive/<?php echo e($datal->id); ?>"><i class="fa fa-edit"></i></a>
                     <a href="/destroy/<?php echo e($datal->id); ?>" onclick="return confirm('Are you sure? You want to delete <?php echo e($datal->id); ?>','Inclusive')"><i class="fa fa-trash red"></i></a></td>
                    <tr>
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </table>
              </div>
        </div>
         </div>
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/admins/tour/tourcost.blade.php ENDPATH**/ ?>