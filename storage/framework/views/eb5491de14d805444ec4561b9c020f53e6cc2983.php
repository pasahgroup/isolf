<?php $__env->startSection('content'); ?>

<!-- <style>
.bg-bannerw{
  background-image: url("../img/ava2.jpg");
   height:80%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
 -->

<style>
.bg-bannerw{
     <?php if(isset($PostcategoryImage->attachment)): ?>
  background-image:url(<?php echo e(URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)); ?>);
     <?php endif; ?>
     
   height: 75%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>



  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;">


 <div class="container">

    <div class="container top-header-area" style="background:yellow;padding:2px">
         <div class="align-items-center py-2 px-xl-5 d-lg-flex" style="background-color:#345742;margin-top:0px;margin-bottom:0px;">
              <div class="col-lg-3 col-md-4">
               <i href="" class="text-decoration-none">
                    <marquee>Hello! Welcome Book with us</marquee>
                </i>            
 
            </div>

            <!--   <div class="col-lg-6 col-md-7">
                 <div class="email-address_no">
                    <a href="mailto:info@isol.com">
                      <i class="fa fa-envelope" style="color:pink;"></i><b style="color:#FDD43D;">  info@isol.com</b></a>
                       <a href="https://wa.link/z5mmcd" style="padding-left:10px">
                            <img src="../../../images/whatsapp.png" alt="" style="width:20px; height:20px;">
                               <b style="color:#FDD43D;">(+255)753 216 263</b>
                            </a>
                </div>
            </div> -->

            <div class="col-lg-5 col-md-8 text-left">
                     <form  method="POST"  action="<?php echo e(route('all-search')); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                    <div class="input-group">
                       <select class="form-control selectpicker" name="tour_type" id="tour_type">
            <option selected><?php echo e($title); ?></option>
            <option>Wildlife Safaris</option>
             <option>Hiking & Trekking</option>
             <option>Beach Holidays</option>
             <option>Day Tours</option>
             <option>Historical Sites</option>
             <option>Special Offers</option>
              <option value="group">Group Tours</option>
               <option value="Group-scheduled">Scheduled Group Tours</option>
              <option value="special-occasions">Special Occasions</option>
                <option value="cultural">Cultural Tours</option>

          </select>
                        

                        <div class="input-group-append">                        
                            <button class="btn btn-search btn-primary hvr-sweep-to-right">
                                <i class="fa fa-search"> Search</i>
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>    
  </div>

<div class="banner base page-img" style="background: url('assets/img/worldmap.jpg') no-repeat center; background-size: cover">
     <div class="container-fluid">

      <div class="line-box">   
        <div class="row">
        <div class="line-title" style="color:#b76b0b;">    <?php echo e($title?? ''); ?> Tours</div>




    <div class="container-fluid" style="padding-bottom:0px;">  
            
        
      <div class="px-xl-5 pb-3">     
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#4c7149">
  
   
                                
                                            <?php $__currentLoopData = $safaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


 <div class="col-lg-3 col-md-3">    
       <h5><b style="background:">

                    <?php if($program->group_tour_category=="GS"): ?>
<span>Scheduled Group Tour</span>
<?php elseif($program->group_tour_category=="SO"): ?>
<span>Special Ocassion Tour</span>
<?php else: ?>
<span>Utalii Nyumbani Tour</span>
<?php endif; ?>

    </b>
       </h5>
            <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#f3f4f4">

<div class="single_blog listing-shot">
                <div class="product-item bg-light mb-4">
                   <div class="listing-shot-img">
                                                                           
                                                               

                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo e(URL::asset('/storage/uploads/'.$program->attachment)); ?>" alt="" style="height:250px;">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-squarex" href="/safaris"><i class="fa fa-search">  <?php echo e($program->tour_name); ?></i></a>
                        </div>
                    </div>

                    <div class="text-center">
                        <a class="h6 text-decoration-none text-truncate" href="/safaris"><?php echo e($program->tour_name); ?></a>                      
                    </div>
                </div>
                 </div>

  <b>  <div class="col-md-5 col-sm-5 col-xs-5" style="border-right:0px solid rgba(71,85,95,.11);height:0px; ">
                                                                                         <strong style="background-color:;"><?php echo e($program->days); ?> Days, <?php echo e($program->days -1); ?> Nights:</strong>
                                                                                 </div></b>

 <b class="float-right">  
  <div class="header-btn">
                                                                                <span class="text-danger" style="font-size:17px"><strong>$<?php echo e(number_format($program->price),2); ?> </strong>
                                                                                     </span>
                                                                                    

                                                                                 </div></b>





               </div>


<div>Physical Rating:          <strong class="float-right"><?php echo e($program->physical_rating); ?></strong></div>
<div>Tour Category:          <strong class="float-right"><?php echo e($program->category); ?></strong></div>
<div>Physical Rating:          <strong class="float-right"><?php echo e($program->tour_code); ?></strong></div>


<hr>
                                                                        <div class="text-right">
                                                                             <a href="<?php echo e(route('grouptour.show',$program->id)); ?>" class="booking-btn text-center"><b>Book Now</b></a>
                                                                                 
                                                                        </div>
            </div>

</div>


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





        </div>  

    </div>
</div>
</section>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/website/programs/grouptour.blade.php ENDPATH**/ ?>