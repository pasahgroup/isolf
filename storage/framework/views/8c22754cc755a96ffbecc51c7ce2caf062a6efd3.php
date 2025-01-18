  
  <?php $__env->startSection('contents'); ?>
  <style type="text/css">
    .red{
      color: red;
    }
  </style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color:#9bbda2;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tailor Made Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tailor Made Page</li>
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
                     <th>Status</th>
                    <th>Nationality</th>

                   <th>Min Budget</th>
                    <th>Max Budget</th>
                    <th>Calculated Cost</th>
                    <th>Adults</th>
                    <th>Children</th>
                    <th>Teens</th>

                    <th>Days</th>
                    <th>Tour Type</th>
                   
                    <th>Destination</th>
                     <th>Accommodation</th>  
                        <th>Email</th>  
                         <th>Phone</th>               
                    <th>Extra Info.</th>
                    <th>Arrival Date</th>
                    <th>End Date</th>
                    <th>PIN Contorl</th>
                    <th>Status</th>
                    <th>Hear_about_us</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                    <td><?php echo e($data->id); ?></td>
                    <td><a href="/editTailor/<?php echo e($data->id); ?>"><?php echo e($data->first_name); ?></a></td>
                     <td><?php echo e($data->last_name); ?></td>

                                        <td>
  
 <select class="status" name="status" id="status" class="form-control">

<option value="<?php echo e($data->id); ?>">Active</option> 
<option value="<?php echo e($data->id); ?>">Inactive</option> 

<?php if($data->status =='Active'): ?>  
<option value="<?php echo e($data->id); ?>">Active</option>         
<?php else: ?>
     <option value="<?php echo e($data->id); ?>">Inactive</option> 
<?php endif; ?>

 </select>  
 </td>
                    <td><?php echo e($data->nationality); ?></td>

                      <td><?php echo e($data->min_budget); ?> <?php echo e($data->currency); ?></td>
                     <td><?php echo e($data->max_budget); ?> <?php echo e($data->currency); ?></td>
                      <td><?php echo e($data->calculated_cost); ?> <?php echo e($data->currency); ?></td>

                   <td><?php echo e($data->adults); ?></td>
                    <td><?php echo e($data->children); ?></td>
                    <td><?php echo e($data->teens); ?></td>
                     <td><a href="/attachmentTailorMade/<?php echo e($data->id); ?>"><?php echo e($data->days); ?></a></td>
                     <td><?php echo e($data->tour_type); ?></td>
                   

                     <td><?php echo e($data->destination); ?></td>
                    <td><?php echo e($data->accommodation); ?></td>
                     
                      <td><?php echo e($data->email); ?></td>
                       <td><?php echo e($data->phone); ?></td>

                    <td><?php echo e($data->additional_information); ?></td>
                    <td><?php echo e($data->arrival_date); ?></td>
                    <td><?php echo e($data->end_date); ?></td>
                    <td><?php echo e($data->pin); ?></td>
                    <td><?php echo e($data->status); ?></td>
                    <td><?php echo e($data->hear_about_us); ?></td>
                    <td><a href="<?php echo e(route('editTailor',$data->id)); ?>"><i class="fa fa-edit"></i></a> 
                      <a href="/tailorDestroy/<?php echo e($data->id); ?> " onclick="return confirm('Are you sure? You want to delete <?php echo e($data->first_name); ?> <?php echo e($data->first_name); ?> Program','Tailor made')"><i class="fa fa-trash red"></i></a></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </tbody>
                  <tfoot>
                  <tr>
                      <th>#</th>
                     <th>First name</th>
                     <th>Last name</th>
                      <th>Status</th>

                    <th>Nationality</th>
                    <th>Min Budget</th>
                    <th>Max Budget</th>
                    <th>Calculated Cost</th>
                    <th>Adults</th>
                    <th>Children</th>
                    <th>Teens</th>

                    <th>Days</th>
                    <th>Tour Type</th>
                    
                    <th>Destination</th>
                     <th>Accommodation</th>                  
                        <th>Email</th>  
                         <th>Phone</th> 

                    <th>Extra Info.</th>
                    <th>Arrival Date</th>
                    <th>End Date</th>
                     <th>PIN Contorl</th>
                    <th>Status</th>
                    <th>Hear_about_us</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>

        </div>
        <!-- /.card-body -->
        <div class="footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <script type="text/javascript"> 

    var APP_URL = <?php echo json_encode(url('/')); ?>

       // var base_url = '<?php echo e(URL::asset('/')); ?>';
          // var base_url = '<?php echo e(URL('/')); ?>';
         //url=window.location.href;

      //alert(res[0]);
    $(".status").change(function(){
       v=$(this).val();
       let url2 = "<?php echo e(route('tailorMade-status',':id')); ?>";
        url2 = url2.replace(':id', v);
      
      // var APP_URL = '<?php echo e(URL::asset('/')); ?>';
       url=window.location.href;
       //pathname=window.location.pathname;
      // url3=window.location.protocol;
       host=window.location.host;
        search=window.location.search;
    
if(search.length ===0)
{
  window.location.href =url2;

}
else
{
  // var res = url2.match("http(.*)");
  // window.location.href =res[0] + "/"+ $(this).val();
  alert("Ops not Okey");
}
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admins.layouts.Apps.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/admins/tailorMade/tailorMade.blade.php ENDPATH**/ ?>