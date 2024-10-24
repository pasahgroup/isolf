<?php $__env->startSection('content'); ?>

 <!-- Start-Package-Section -->
 <section class="text-center bg-white">
    <div>
        <h2><?php echo e($programs->tour_name); ?></h2>
    </div>
 </section>

</section>
    <section class="ws-section-spacing bg-gray">
    <div class="container-fluid">
          <!-- Start of Image filled from slider -->
             <div class="package-list-wrap ">
                
                 <img src="<?php echo e(URL::asset('/storage/uploads/'.$programs->attachment)); ?>" class="" alt="det-img" style="min-height: 35vh !important;max-height:50vh !important;background-size:100% 100%;width: 100%;">
                 
                <div class="package-list-content">
                    <p class="package-list-duration"> <span
                            class=""><?php echo e($programs->title); ?>

                            </span>
                                
                    </p>
                    <h3 class="package-list-title">
                        <a href="#"></a>
                    </h3>
                    <a role="button" class="btn btn-primary text-center" href="<?php echo e(route('safaris.show',$programs->id)); ?>">Acquire</a>                    
                </div>
                </div>              
                <div  class="col-lg-12 col-md-12 col-sm-12">
                 <p>
                  <?php echo e($programs->description); ?>

                 </p>
                </div>
            
      <!-- End of Image filled from slider -->
      <section class="text-center bg-white">
 
     <!-- Content Header (Page header) -->
         <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Well!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>

 <?php if($message = Session::get('info')): ?>
  <div class="alert alert-warning">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Ops!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>   

 <?php if($message = Session::get('error')): ?>
  <div class="alert alert-danger">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Sorry!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>     
</div>
   
 </section>





  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;">

    <div class="container-fluid" style="padding-bottom:0px;">  
            
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> <?php echo e($title ?? ''); ?> Tours</span></h2>

      
      <div class="px-xl-5 pb-3">     
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#4c7149">
  
   
                                
                                            <?php $__currentLoopData = $safaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safari): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <div class="col-lg-3 col-md-3">
    
       <h5><b style="background:"><?php echo e($safari->sales_header); ?></b></h5>
            <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#f3f4f4">

<div class="single_blog listing-shot">
                <div class="product-item bg-light mb-4">
                   <div class="listing-shot-img">
                                                                           
                                                               

                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="<?php echo e(URL::asset('/storage/uploads/'.$safari->attachment)); ?>" alt="" style="height:250px;">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-squarex" href="/safaris"><i class="fa fa-search">  <?php echo e($safari->tour_name); ?></i></a>
                        </div>
                    </div>

 <div class="text-center" style="background-color:#4c7149;">
                        <a class="h6 text-decoration-none text-truncate" href="/safaris" style="font-size:20px;"><strong> <?php echo e($safari->tour_name); ?></strong></a>                      
                    </div>

                </div>
                 </div>

  <b>  <div class="col-md-5 col-sm-5 col-xs-5" style="border-right:0px solid rgba(71,85,95,.11);height:0px; ">
                                                                                         <strong style="background-color:;"><?php echo e($safari->days); ?> Days, <?php echo e($safari->days -1); ?> Nights:</strong>
                                                                                 </div></b>

 <b class="float-right">  
  <div class="header-btn">
                                                                                <span class="text-danger" style="font-size:17px"><strong>$<?php echo e(number_format($safari->price),2); ?> </strong>
                                                                                     </span>
                                                                                    

                                                                                 </div></b>





               </div>


<div>Physical Rating:          <strong class="float-right"><?php echo e($safari->physical_rating); ?></strong></div>
<div>Tour Category:          <strong class="float-right"><?php echo e($safari->category); ?></strong></div>
<div>Physical Rating:          <strong class="float-right"><?php echo e($safari->tour_code); ?></strong></div>


<hr>
                                                                        <div class="text-right">
                                                                                 

                                                                                                 <?php if($safari->category=="Private"): ?> 
                            <a href="<?php echo e(route('safaris.show',$safari->id)); ?>" class="booking-btn text-center" style="color:#fff"><b>View More</b></a>
                               <?php endif; ?> 

                                           <?php if($safari->category=="Group"): ?> 
                            <a href="<?php echo e(route('grouptour.show',$safari->id)); ?>" class="booking-btn text-center" style="color:#fff"><b>View More</b></a>
                               <?php endif; ?>
                                                                        </div>
            </div>

</div>


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





        </div>  

    </div>
</div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/website/programs/safaris-slider-packages.blade.php ENDPATH**/ ?>