<?php $__env->startSection('content'); ?>

<body>

  <!-- Add Class carousel-fade just to fade transition -->
  <div class="carousel slide carousel-fade full-heightx stick-top" id="carousel" style="min-height: 610px;">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item zooming with-overlay active" style="background-image: url('http://placehold.it/1680x1050');"></div>
          
        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slides): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item zooming with-overlay" style="background-image: url('<?php echo e(URL::asset('/storage/uploads/'.$slides->attachment)); ?>');"></div>

      <div class="carousel-caption full-width center-txt">
        <div class="container">
          <span class="main-header">Enjoy Adventure <br> Experience</span>
          <hr>
          <p class="sub-header">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis modi tenetur obcaecati veniam harum ipsa voluptas, incidunt cum.</p>
          <br>
          <div class="search-bar padding-20" style="background-color:rgb(97, 130, 97, 0.8);">
            <div class="col-sm-10 row" style="padding-left:10px;padding-right:10px; ">
              <div class="col-sm-4 form-group">
                <label>From</label>
                <input type="text" class="form-control datepicker" readonly>
              </div>
              <div class="col-sm-4 form-group">
                <label>To</label>
                <input type="text" class="form-control datepicker" readonly>
              </div>
              <div class="col-sm-4 form-group">
                <label>Price</label>
                <select class="form-control">
                  <option value="">1000 - 2000</option>
                </select>
              </div>
            </div>
            <div class="col-sm-2">
              <button class="btn btn-search btn-primary hvr-sweep-to-right">Search</button>
            </div>
          </div>
        </div>
      </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


 <?php $__currentLoopData = $quickLinkSliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quickSliderf): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="item zooming with-overlay" style="background-image: url('<?php echo e(URL::asset('/storage/uploads/'.$quickSliderf->attachment)); ?>');"></div>

      <div class="carousel-caption full-width center-txt">
        <div class="container">
          <span class="main-header">Enjoy Adventure <br> Experience</span>
          <hr>
          <p class="sub-header">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis modi tenetur obcaecati veniam harum ipsa voluptas, incidunt cum.</p>
          <br>
          <div class="search-bar padding-20" style="background-color:rgb(97, 130, 97, 0.8);">
            <div class="col-sm-10 row" style="padding-left:10px;padding-right:10px; ">
              <div class="col-sm-4 form-group">
                <label>From</label>
                <input type="text" class="form-control datepicker" readonly>
              </div>
              <div class="col-sm-4 form-group">
                <label>To</label>
                <input type="text" class="form-control datepicker" readonly>
              </div>
              <div class="col-sm-4 form-group">
                <label>Price</label>
                <select class="form-control">
                  <option value="">1000 - 2000</option>
                </select>
              </div>
            </div>
            <div class="col-sm-2">
              <button class="btn btn-search btn-primary hvr-sweep-to-right">Search</button>
            </div>
          </div>
        </div>
      </div>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <!-- Controls -->
    <!-- Available Variation Class for carousel-control => circle, bottom, bottom-left, bottom-right" -->
    <a class="left carousel-control bottom-right" href="#carousel" role="button" data-slide="prev">
      <span class="icon-arr-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control bottom-right" href="#carousel" role="button" data-slide="next">
      <span class="icon-arr-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>


    <!-- Indicators -->
    <!-- Available Variation Class for carousel-indicators => dashed, circle" -->
    <ol class="carousel-indicators dashed">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
    </ol>
  </div>


  <section class="showcase" style="background: url('assets/img/worldmap.png') no-repeat center; background-size: cover;padding-top: 30px;padding-bottom: 20px;">
    <div class="main-title">
      <h4>Special Offers</h4>
    </div>
    <div class="container">

      <div class="row item">
    
    <?php $__currentLoopData = $offers_private; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special_private): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-sm-6 col-md-4">
 <h4><b style="background:"><?php echo e($special_private->sales_header); ?>-(<?php echo e($special_private->category); ?>)</b></h4>

          <div class="single_blog listing-shot item-grid">
<div class="listing-shot-img">
                                      <div class="listing-badge now-open"><strong><?php echo e(round($special_private->save/$special_private->price * 100),0); ?>% Off</strong></div>
                                   
                                </div>




            <div class="item-img" style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$special_private->attachment)); ?>);" style="background-size:cover; background-position:center">
              <div class="item-overlay">
                <a href="<?php echo e(route('safaris.show',$special_private->tour_id,$offers)); ?>"><span class="icon-binocular"></span></a>
              </div>
            </div>
          
            <div class="item-desc" style="background-color:#345742;">

              <div class="">
                <h4 class="title"><a href="#"><?php echo e($special_private->tour_name); ?></a></h4>
              </div>
                

 <hr>
              <div class="sub-title">
                <span class="location">Tour Duration</span>
                <span class="grade"><?php echo e($special_private->days); ?> Days, <?php echo e($special_private->days -1); ?> Nights</span>
              </div>
              <div class="sub-title">
                <span class="location">Physical rating</span>
                <span class="grade"><?php echo e($special_private->physical_rating); ?></span>
              </div>

              <div class="sub-title">
                 <span class="location">Tour Category</span>
                <span class="grade"><?php echo e($special_private->category); ?></span>
              </div>

   <div class="sub-title">
                <span class="location">Tour Code</span>
                <span class="grade"><?php echo e($special_private->tour_code); ?></span>
              </div>

              <div class="item-detail">
                <div class="left">
                  <div class="day"><span class="icon-sun">Dead Line:</span></div>
                  <div class="night"><span class="icon-moonx"></span><?php echo e($special_private->offer_deadline); ?></div>
                </div>
                <div class="right">
                  
                    <span class="text-danger" style="font-size:17px"><strong>$<?php echo e(number_format($special_private->new_price),2); ?> </strong> pp
                                           </span><sup style="text-decoration: line-through;">$ <?php echo e(number_format($special_private->price),2); ?> </sup></s><br>
                                            <span style="font-size:12px;">Save $<?php echo e(number_format($special_private->save),2); ?></span>


                  <a href="<?php echo e(route('safaris.show',$special_private->tour_id,$offers)); ?>" class="btn btn-primary hvr-sweep-to-right">Tour Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php $__currentLoopData = $offers_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-sm-6 col-md-4">
 <h4><b style="background:"><?php echo e($special_group->sales_header); ?>-(<?php echo e($special_group->category); ?>)</b></h4>

          <div class="single_blog listing-shot item-grid">
<div class="listing-shot-img">
                                      <div class="listing-badge now-open"><strong><?php echo e(round($special_group->save/$special_group->price * 100),0); ?>% Off</strong></div>
                                   
                                </div>




            <div class="item-img" style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$special_group->attachment)); ?>);" style="background-size:cover; background-position:center">
              <div class="item-overlay">
                <a href="<?php echo e(route('safaris.show',$special_group->tour_id,$offers)); ?>"><span class="icon-binocular"></span></a>
              </div>
            </div>
          
            <div class="item-desc" style="background-color:#345742;">

              <div class="">
                <span class=""></span>
                <h4 class="title"><a href="<?php echo e(route('safaris.show',$special_group->tour_id,$offers)); ?>"><?php echo e($special_group->tour_name); ?></a></h4>
              </div>

 <hr>
              <div class="sub-title">
                <span class="location">Tour Duration</span>
                <span class="grade"><?php echo e($special_group->days); ?> Days, <?php echo e($special_group->days -1); ?> Nights</span>
              </div>
              <div class="sub-title">
                <span class="location">Physical rating</span>
                <span class="grade"><?php echo e($special_group->physical_rating); ?></span>
              </div>

              <div class="sub-title">
                 <span class="location">Tour Category</span>
                <span class="grade"><?php echo e($special_group->category); ?></span>
              </div>

   <div class="sub-title">
                <span class="location">Tour Code</span>
                <span class="grade"><?php echo e($special_group->tour_code); ?></span>
              </div>

              <div class="item-detail">
                <div class="left">
                  <div class="day"><span class="icon-sun">Dead Line:</span></div>
                  <div class="night"><span class="icon-moonx"></span><?php echo e($special_group->offer_deadline); ?></div>
                </div>
                <div class="right">
                  
                    <span class="text-danger" style="font-size:17px"><strong>$<?php echo e(number_format($special_group->new_price),2); ?> </strong> pp
                                           </span><sup style="text-decoration: line-through;">$ <?php echo e(number_format($special_group->price),2); ?> </sup></s><br>
                                            <span style="font-size:12px;">Save $<?php echo e(number_format($special_group->save),2); ?></span>


                  <a href="<?php echo e(route('safaris.show',$special_group->tour_id,$offers)); ?>" class="btn btn-primary hvr-sweep-to-right">Tour Details</a>

                  <!-- <a href="<?php echo e(route('grouptour.show',$special_group->tour_id,$offers)); ?>" class="btn btn-primary hvr-sweep-to-right">Tour Details</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
    </div>
      <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
            <a class="btn-transparent" href="/offers" target="_blank"><i class="fas fa-gift"></i> Explore More Offers
            </a>
          </div>
        </div>
  </section>


<section class="showcase" style="background: url('assets/img/worldmap.png') no-repeat center; background-size: cover;padding-top: 30px;padding-bottom: 20px;">
   <div class="main-title">
      <h4>Top Destinations</h4>     
    </div>
    
        
    <div class="container">

                    <!-- BEGIN CONTENT -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="">
                         <div data-aos="fade-up">
        
 <!-- Beach Holidays -->
  <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                     <h6 data-text= "" style="font-size: 20px;color: green;font-weight: 650; text-transform:lowercase;text-align: center;">Wildlife Safaris</h6>

  <div id="myCarousel4p" class="carousel_no slide" data-ride="carousel">
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
                                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$popular_safari->attachment)); ?>" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                         <span class="off-box"><?php echo e($popular_safari->days); ?> Days: $<?php echo e(number_format($popular_safari->price),2); ?></span>
        <div class="package-list-content">
      <h3 class="package-list-title">
      <p><?php echo e($popular_safari->tour_name); ?></p>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('safaris-slider-packages',$popular_safari->id)); ?>">Explore More</a>
                                          </div>
                                        </div>
      </div>



           <?php $__currentLoopData = $popular_safarif; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safaris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                        <div class="item">
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
  <a data-slide="prev" href="#myCarousel4p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel4p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>

     <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                  <h6 data-text= "" style="font-size: 20px;color: green;font-weight: 650; text-transform:lowercase;text-align: center;">Hiking And Trekking</h6>

  <div id="myCarousel2p" class="carousel_no slide" data-ride="carousel">
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
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                                                 <h6 data-text= "" style="font-size: 20px;color: green;font-weight: 650; text-transform:lowercase;text-align: center;">Beach Holiday</h6>

    <div id="myCarousel3p" class="carousel_no slide" data-ride="carousel">
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


</div>
</div>
</div>
        </div>

</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/website/home/index.blade.php ENDPATH**/ ?>