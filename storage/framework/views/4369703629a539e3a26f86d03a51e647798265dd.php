<?php $__env->startSection('content'); ?>
  <!-- <link rel="stylesheet" href="../../css/style.css"> -->
  <section class="bg-gray ">
        <div class="container-fluid">
            <?php if(isset($quickLinks->attachment)): ?>
            <div class="package-list-wrap">            
                         <img src="<?php echo e(URL::asset('/storage/uploads/'.$quickLinks->attachment?? '')); ?>" class="img-fluid" alt="det-img" style="min-height: 20vh !important;max-height: 50vh;background-size: cover;width: 100%; opacity:1">

             
                <div class="package-list-content">
                  <span>Home/Quick-Link </span>
                                     <h3 class="package-list-title">
                        <a href="#"><b style="color: white;"><?php echo e($quickLinks->quick_title); ?></b></a>
                    </h3>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
        <p style="color:#1da625; background-color:#fff; font-style:italic;">
          <?php echo e($quickLinks->quick_description ?? ''); ?>.
       
        </p>         
    </div>
                      </div>
                         <?php endif; ?>

           </div>

        </div>
    </div>
    </section>

<hr>
<!--  <section class="ws-section-spacing booking-btn">
    <div class="container-fluid">   
    <div class=""> 
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p style="color: white;">
          <?php echo e($quickLinks->quick_description ?? ''); ?>.
        </p>         
    </div>
    </div>
    </div>
</section> -->


<section id="popular_experience" class="blog_section">
    <div class="container-fluid">


    <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section text-center">
          <div class="col-md-12 text-center">

<h2 class="" style="color:#c56c1d"><strong>
Tour Packages</strong>
</h2>
                    </div>

            </div>
            </div>
        </div>
        <hr>

          <!-- BEGIN CONTENT -->
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="">
             <div data-aos="fade-up">
                
      <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
            <!-- BEGIN CAROUSEL --> <h4 style="font-size: 20px;color: green;"><strong>Wildlife Safaris</strong></h4>     

  <div id="myCarousel1p" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
<!--     <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">

                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_safari->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                          <p class="booking-btn-gray"><span class="off-box"><?php echo e($popular_safari->days); ?> Days: $<?php echo e(number_format($popular_safari->price),2); ?></p></span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p><?php echo e($popular_safari->tour_name); ?></p>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$popular_safari->id)); ?>">Explore More</a>
                                          </div>
                                        </div>

      </div>



            <?php $__currentLoopData = $popular_safarif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safaris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                                     <div class="package-list-wrap ">
                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$safaris->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                        <span class="off-box"><?php echo e($safaris->days); ?> Days: $<?php echo e(number_format($safaris->price),2); ?></span>
        <div class="package-list-content">
            <h3 class="package-list-title">
      <p><?php echo e($safaris->tour_name); ?></p>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$safaris->id)); ?>">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Left and right controls -->
  <a data-slide="prev" href="#myCarousel1p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel1p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>


  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                <h4 style="font-size: 20px;color: green;"><strong>Hiking And Trekking</strong></h4>

  <div id="myCarousel2p" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
     <!--  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">

                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_trekking->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                        <span class="off-box"><?php echo e($popular_trekking->days); ?> Days: $<?php echo e(number_format($popular_trekking->price),2); ?></span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p><?php echo e($popular_trekking->tour_name); ?></p>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$popular_trekking->id)); ?>">Explore More</a>
                                          </div>
                                        </div>
      </div>



            <?php $__currentLoopData = $popular_trekkingf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trekking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                         <div class="package-list-wrap ">


                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$trekking->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                             <span class="off-box"><?php echo e($trekking->days); ?> Days: $<?php echo e(number_format($trekking->price),2); ?></span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p><?php echo e($trekking->tour_name); ?></p>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$trekking->id)); ?>">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>



    <a data-slide="prev" href="#myCarousel2p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel2p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>
    <!-- Beach Holidays -->
  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                      <h4 style="font-size: 20px;color: green;"><strong>Beach Holiday</strong></h4>

  <div id="myCarousel3p" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel3" data-slide-to="1"></li>
      <li data-target="#myCarousel3" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">
                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_holiday->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                         <span class="off-box"><?php echo e($popular_holiday->days); ?> Days: $<?php echo e(number_format($popular_holiday->price),2); ?></span>
        <div class="package-list-content">
            <h3 class="package-list-title">
      <p><?php echo e($popular_holiday->tour_name); ?></p>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$popular_holiday->id)); ?>">Explore More</a>
                                          </div>
                                        </div>
      </div>



             <?php $__currentLoopData = $popular_holidayf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $holidays): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                          <div class="package-list-wrap ">
                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$holidays->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                         <span class="off-box"><?php echo e($holidays->days); ?> Days: $<?php echo e(number_format($holidays->price),2); ?></span>
        <div class="package-list-content">
          <h3 class="package-list-title">
      <p><?php echo e($holidays->tour_name); ?></p>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$holidays->id)); ?>">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Left and right controls -->
  <a data-slide="prev" href="#myCarousel3p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel3p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>

 <!-- Beach Holidays -->
  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                  <h4 style="font-size: 20px;color: green;"><strong>Historical Sites</strong></h4>

  <div id="myCarousel4p" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
   <!--  <ol class="carousel-indicators">
      <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel3" data-slide-to="1"></li>
      <li data-target="#myCarousel3" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">
                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_historical->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                         <span class="off-box"><?php echo e($popular_historical->days); ?> Days: $<?php echo e(number_format($popular_historical->price),2); ?></span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p><?php echo e($popular_historical->tour_name); ?></p>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$popular_historical->id)); ?>">Explore More</a>
                                          </div>
                                        </div>
      </div>



             <?php $__currentLoopData = $popular_historicalf; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $historicalf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">
                          <div class="package-list-wrap ">
                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$historicalf->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                            <span class="off-box"><?php echo e($historicalf->days); ?> Days: $<?php echo e(number_format($historicalf->price),2); ?></span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p><?php echo e($historicalf->tour_name); ?></p>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$historicalf->id)); ?>">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Left and right controls -->
  <a data-slide="prev" href="#myCarousel4p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel4p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>
</div>
</div>
</div>
    </div>

</section>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/quickLinks/quickLinkSummary.blade.php ENDPATH**/ ?>