<?php $__env->startSection('content'); ?>
 <div class="container">
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
   <div class="package-list-wrap ">
                <img src="<?php echo e(URL::asset('/storage/uploads/'.$programs->attachment?? '')); ?>" class="img-fluid" alt="det-img" style="min-height: 20vh !important;max-height: 50vh;background-size: cover;width: 100%;">
                <div class="package-list-content">
                    <p class="package-list-duration"><?php echo e($programs->days); ?> Days, <?php echo e($programs->days -1); ?>  Night(s)<span
                            class="rate">

              <!--              <?php if($discounts !=[]): ?>-->
              <!--              $<?php echo e(number_format($discounts->new_price),2); ?>-->
              <!--     <?php else: ?>-->
              <!-- $ <?php echo e(number_format($programs->price),2); ?>-->
              <!--<?php endif; ?>-->

                    </span>
                    </p>

                     <h3 class="package-list-title">
                        <?php echo e($programs->tour_name); ?>

                    </h3>
                    <button href="#bookNow" type="button" class="btn btn-success" data-toggle="modal">Book Now</button>


                </div>
             <?php if($discounts !=[]): ?>
           <span class="off-box">

                 <div class="col-md-12 col-sm-12 col-xs-12">
                                          <span class="text-danger" style="font-size:18px"><strong>$<?php echo e(number_format($discounts->new_price),2); ?> </strong> pp
                                           </span><s style=""><sup>$ <?php echo e(number_format($programs->price),2); ?> </sup></s><br>
                                            <span style="font-size:12px;">Save $<?php echo e(number_format($discounts->save),2); ?></span>
                </div>
              </span>
              <?php else: ?>
               <span class="off-box">FROM  $ <?php echo e(number_format($programs->price),2); ?></span>
              <?php endif; ?>
            </div>
          </div>

  <div class="trip-detail">
    <div class="container">
      <div class="tab-wrap">

        <ul id="trip-tab" class="nav nav-tabs affix-top" data-spy="affix" data-offset-top="1290">
          <li class="active"><a href="#overview" data-toggle="tab">Overview</a>
          </li>
          <li class=""><a href="#itenary" data-toggle="tab">Itenary</a>
          </li>
           <li class=""><a href="#accomodation" data-toggle="tab">Accomodation</a>
          </li>

           <li class=""><a href="#inclusive" data-toggle="tab">Inclusive</a>
          </li>
          <li class=""><a href="#reveiws" data-toggle="tab">Reviews</a>
          </li>
        </ul>

        <div class="tab-content paper-effect">

          <div class="tab-pane active" id="overview">
            <div class="row">
              <div class="col-sm-6">

                <blockquote class="with-icon">
                 <strong><?php echo e($programs->tour_name); ?></strong>
                <p><?php echo e($programs->tour_highlight); ?></p>
                  <footer>Tour Duration: <cite title="Source Title"><?php echo e($programs->days); ?> Days, <?php echo e($programs->days -1); ?>  Night(s)</cite>
                  </footer>
                </blockquote>
              </div>
              <div class="col-sm-6">
                <div class="border-box">
                  <br>
                  <div class="box-title">Safari Overview</div>
                  <ul class="trip-overview">
                    <li>
                      <span class="icon-road-sign"></span>
                      <div class="detail">
                        <div class="title">Trip profile</div>
                        <div class="desc"><?php echo e($programs->days); ?> Days, <?php echo e($programs->days -1); ?>  Night(s)</div>
                      </div>
                    </li>

                    <li>
                      <span class="icon-barcode"></span>
                      <div class="detail">
                        <div class="title">Tour Code</div>
                        <div class="desc"><?php echo e($programs->tour_code); ?></div>
                      </div>
                    </li>
                    <li>
                      <span class="icon-door-tag "></span>
                      <div class="detail">
                       <div class="title">Destinations</div>
                        <div class="desc"> <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destnation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <span class="text-primary " style="font-size: 12px; border-right:solid 1px #ddd; padding-right:2px"> <?php echo e($destnation->destination_name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>
                      </div>
                    </li>
                    <li>
                      <span class="icon-home"></span>
                      <div class="detail">

                                                <div class="title">Accomodations</div>
                        <div class="desc"> <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <span class="text-primary " style="font-size: 12px; border-right:solid 1px #ddd; padding-right:2px"> <?php echo e($accom->accommodation_name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>
                      </div>
                    </li>
                    <li>
                      <span class="icon-bus"></span>
                      <div class="detail">
                        <div class="title">Transportation</div>
                        <div class="desc"><?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <span class="text-primary " style="font-size: 12px; border-right:solid 1px #ddd; padding-right:2px"> <?php echo e($trans->transport); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>


 <div class="tab-pane" id="itenary">
            <div class="row">
             <!--  <div class="col-sm-6">
                <ul class="itenary-steps">
                  <li>
                    <div class="icon-plane"></div>
                    <div class="day-number">Day 1</div>
                    <div class="detail">Arrive (1,330m)
                      <br>In City, sightseeing old City</div>
                  </li>
                  <li>
                    <div class="icon-tent"></div>
                    <div class="day-number">Day 2</div>
                    <div class="detail">Fly to Dhampur from city airport</div>
                  </li>
                  <li>
                    <div class="icon-hiking"></div>
                    <div class="day-number">Day 3</div>
                    <div class="detail">Set up Base(2,140m)</div>
                  </li>
                  <li>
                    <div class="icon-tree"></div>
                    <div class="day-number">Day 4</div>
                    <div class="detail">Trek through the arid hilly landscapes and remote settlements to Kelrap (3,944m)</div>
                  </li>
                  <li>
                    <div class="icon-none"></div>
                    <div class="day-number">Day 5</div>
                    <div class="detail">Cross the difficult Simera (5,238m) and Tognepse (5,214m) and trek through yak pastures to the remote village</div>
                  </li>
                  <li>
                    <div class="icon-camera"></div>
                    <div class="day-number">Day 6</div>
                    <div class="detail">Explore Rinpmo village and turquoise coloured Phikus Lake</div>
                  </li>
                  <li>
                    <div class="icon-tent"></div>
                    <div class="day-number">Day 7</div>
                    <div class="detail">Retrace steps back to base to end trek</div>
                  </li>
                  <li>
                    <div class="icon-none"></div>
                    <div class="day-number">Day 8</div>
                    <div class="detail">Fly back</div>
                  </li>
                  <li>
                    <div class="icon-plane"></div>
                    <div class="day-number">Day 9</div>
                    <div class="detail">At leisure in City</div>
                  </li>
                  <li>
                    <div class="icon-flag"></div>
                    <div class="day-number">Day 10</div>
                    <div class="detail">Trip concludes</div>
                  </li>
                </ul>
              </div> -->
                   <div class="col-md-12 col-sm-12">
                <p class="card-text">
                                            <?php echo e($programs->itinerary_summury); ?>

                                            </p>
                                            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="card card-primary booking-tourPadding">
                                                <div class="card-header  booking-tourPadding"  style="background-color:Gray;">
                                                <span><b> Day <?php echo e($data->day); ?> - <?php echo e($data->itinerary_title); ?>

                                                 <?php if($data->day==1): ?>
                                                 <i class="icon-plane"></i>
                                                  <?php endif; ?>

                                                     <?php if($data->day==$data->day-1): ?>
                                                 <i class="icon-plane"></i>
                                                  <?php endif; ?>
                                                </b></span>

                                                </div>
                                                <div class="card-body">
                                                

                                                <div class="row masonry-item">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 masonry">
                                       <div class="">

                                <div class="">
                                <div class="col-lg-7">
                                <div class="hotel-diss">
                               <p class="booking-btn-gray"><?php echo e($data->itinerary_description); ?></p>


                               <div class="">
                                      <div class="col-md-12 col-lg-12 col-sm-12">
                                        <p><b class="text-success">Distance:</b> <?php echo e($data->distance); ?> KM <b class="text-success">Transport:</b> <?php echo e($data->transport); ?></p>

                                          <p><b class="text-success">Accommodation:</b> <?php echo e($data->accommodation_name); ?> | <b class="text-success">Meal Plan:</b> <?php echo e($data->meal); ?></p>
                                      </div>

                                                  </div>
                                                 </div>
                                               </div>
                                        <div class="col-lg-5">
                                            <div class="hotel-pics-one">                                               <img src="<?php echo e(URL::asset('/storage/destination/'.$data->photo)); ?>" alt="" style="height: 32vh !important;width:100%">                                                                              </div>

                                                 </div>
                                                 </div>
                                                </div>
                                                </div>
                                                </div>

                                        
                                            </div>
                                            </div>
                                            <hr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
          </div>


 <div class="tab-pane" id="accomodation">
            <div class="row">
                            <div class="col-md-12 col-sm-12">

               <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

       <div class="card booking-tourPadding">
      <div class="card-header booking-tourPadding" style="background-color:#37533c;color:#fff">
    <span><b>Day <?php echo e($data->day); ?> - <?php echo e($data->itinerary_title); ?></b></span>
                     </div>

                        <div class="card-body">
                       <div class="">
                                <div class="col-lg-7">
                                <div class="hotel-diss" style="background-color:#2e4432">

                               <div class="">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                  <div class="rating">
                                    <h4>Location Details</h4>
                                  </div>

                                  <a class="map-viw" href="#"><i class="fa fa-map-marker"></i> <?php echo e($data->destination_name); ?></a>
                                     <a class="map-viw" href="#"><i class="fa fa-home"></i> <?php echo e($data->location_name); ?>/<?php echo e($data->region); ?>/<?php echo e($data->country); ?></a>
                                   </div>
                                <div class="col-md-6 col-lg-6 col-sm-12 booking-tour">
                                <div class="rating">                                                                       <h4>Accommodation Details</h4>                                                                       </div>  <a class="map-viw" href="#"><i class="fa fa-home"></i><b><?php echo e($data->accommodation_name); ?></b></a>

                                    <div>
                                     <a class="map-viw" href="#"><i class="fa fa-home"></i><b>Standard Category: <br>
                                        <?php for($i=0;$i<$data->national_standard;$i++): ?>
                                        <span class="fa fa-star text-warning"></span>
                                        <?php endfor; ?>
                                         <?php for($i=0;$i<5-$data->national_standard;$i++): ?>
                                        <span class="fa fa-star-o text-warning"></span>
                                           <?php endfor; ?>
                                         </div></b></a>

                                       <a class="map-viw" href="#"><i class="fa fa-home"></i><b>Our Category</b>: <?php echo e($data->type); ?>:</a>
                                       <a href="https://<?php echo e($data->url); ?>" class="btn btn-primary" role="button">View More</a>                                          </div>
                                                  </div>
                                                 </div>
                                               </div>
                                        <div class="col-lg-5">
                                            <div class="hotel-pics-one">
                                            <img src="<?php echo e(URL::asset('/storage/uploads/'.$data->attachment)); ?>" alt="" style="height: 32vh !important;width:100%">
                                            </div>

                                      </div>
                               </div>
                                </div>
                                </div>
                                <hr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
          </div>









          <div class="tab-pane" id="inclusive">



   <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                  <div class="rating">                                                                      <h4>Not Inclusive</h4>
                                  </div>
   <?php $__currentLoopData = $inclusives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inclusive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <div class="form-check">
   <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
  <label class="form-check-label" for="flexCheckDisabled">
   <?php echo e($inclusive->inclusive); ?>

  </label>
</div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
      <div class="col-lg-5">
                                            <div class="rating">
                                                <h4>Inclusive</h4>

                                            </div>                                        <?php $__currentLoopData = $assignLists; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $assignList): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
   <?php echo e($assignList->inclusive); ?>

  </label>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>



                                                  </div>






            <hr>
          </div>

          <div class="tab-pane" id="reveiws">
            <div class="review-comment">
              <br>
              <div class="row">
                <div class="col-sm-6">
                  <ul class="media-list review-comment">
                    <li class="media">
                      <div class="media-left">
                        <a href="#">
                          <img src="http://placehold.it/70x70" class="media-object" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">Kim L. Burney</h4>
                        <div class="rating">
                          <span class="icon-star"></span>
                          <span class="icon-star"></span>
                          <span class="icon-star"></span>
                          <span class="icon-star"></span>
                          <span class="icon-star-empty"></span>
                        </div>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                      </div>
                    </li>
                    <li class="media">
                      <div class="media-left">
                        <a href="#">
                          <img src="http://placehold.it/70x70" class="media-object" alt="">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading">Shing Ch'in</h4>
                        <div class="rating">
                          <span class="icon-star"></span>
                          <span class="icon-star"></span>
                          <span class="icon-star"></span>
                          <span class="icon-star"></span>
                          <span class="icon-star-empty"></span>
                        </div>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <div class="add-comment">
                    <div class="border-box">
                      <div class="box-title">Leave a Review</div>
                        <form method="post"  action="<?php echo e(route('Testimonies.store')); ?>" class="registration-form">
                    <?php echo csrf_field(); ?>
                      <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="full_name" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control" required>
                      </div>

                       <div class="form-group">
                        <label>Rating</label>
                        <select name="rank" class="form-group">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>

                       <div class="form-group">
                        <label>Comment</label>
                        <textarea class="form-control" rows="6" name="comments" required></textarea>
                        <button class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                    </div>
                  </div>

                </div>
              </div>


            </div>
          </div>
           <div class="row">
               <div class="col-sm-12 col-md-12 float-right">
                <div class="float-right">
   <button type="button" class="btn btn-primary hvr-sweep-to-right" data-toggle="modal" data-target="#bookNow">Book Now</button>

  </div>
  </div>
      </div>
        </div>
      </div>

    </div>
  </div>


    <div class="container">
      <div class="section-title center">
        <h3>Similar Trips</h3>
      </div>
      <div class="row item">

 <?php $__currentLoopData = $same_programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extra_prog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


 <div class="col-sm-4 col-md-4">
     <div class="single_blog listing-shot item-grid">
<div class="listing-shot-img">

                                 <div class="listing-badge now-open" style="transform:rotate(0deg);top:1px;background-color:#345742;color:#fde205"><strong class="icon-dollar"><?php echo e(number_format($extra_prog->price,2)); ?></strong></div>

                           </div>


       <div class="item-img" style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$extra_prog->attachment)); ?>);" style="background-size:cover; background-position:center">
         <div class="item-overlay">
           <a href="/safaris/<?php echo e($extra_prog->id); ?>"><span class="icon-binocular"></span></a>
         </div>
       </div>


         <div class="text-center" style="background-color:#f2fde6;border-radius:100px">
                           <div class="text-center" style="font-size:18px;">
               <a class="Main-Text">
                 <strong class="demo-3">
               <?php echo e($extra_prog->tour_name); ?>

             </strong>
           </a>
               <div class="Extra-Text">
                     <a class="text-center" style="font-size:18px;"><strong><?php echo e($extra_prog->tour_name); ?></strong></a>
               </div>
               </div>
         </div>
               <div class="sub-title">
                 <span style="font-size:14px;color:#fff;padding-left:5%" class="float-left"><strong>Tour Duration</strong></span>
                 <span class="grade" style="font-size:14px;color:#f9be0d" class="float-right"><strong class="float-right" style="font-size:16px;color:#f9be0d;padding-right:5%"><?php echo e($extra_prog->days); ?> Days, <?php echo e($extra_prog->days -1); ?> Nights</strong></span>
               </div>
<div class="item-desc" style="background-color:#345742;">
<hr style="background-color:#fff">
         <div class="sub-title">
           <span class="location">Physical rating</span>
           <span class="grade"><strong><?php echo e($extra_prog->physical_rating); ?></strong></span>
         </div>

         <div class="sub-title">
            <span class="location">Tour Category</span>
           <span class="grade"><strong><?php echo e($extra_prog->category); ?></strong></span>
         </div>

<div class="sub-title">

           <span class="location">Tour Code</span>
           <span class="grade"><strong><?php echo e($extra_prog->tour_code); ?></strong></span>
         </div>
<hr style="background-color:yellow">
         <div class="item-detail">
           <div class="left">
           </div>
           <div class="right">
             <a href="/safaris/<?php echo e($extra_prog->id); ?>" class="btn btn-primary hvr-sweep-to-right">Tour Details</a>
           </div>
         </div>
       </div>
     </div>
   </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <?php echo $same_programs->links(); ?>

    </div>


  <div class="modal fade modal-book-now" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title">Book Now</h4>
        </div>
        <div class="modal-body">

          <div class="preview-wrap">
            <div class="preview-img" style="background-image: url('assets/img/home_img/mountain.jpg')"></div>

            <div class="form-wrap">
              <form id="ajax-book" method="post" action="book_trip.php">
                <div id="form-messages" class="alert" role="alert" style="display: none;"></div>
                <input type="hidden" name="trip" id="trip" value="annapurna">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" value="" required>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" value="" required>
                </div>

                <div class="form-group">
                  <label>Phone</label>
                  <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone Number" value="" required>
                </div>

                <div class="form-group">
                  <label>Duration</label>
                  <div class="row">
                    <div class="col-sm-6">
                      <input type="text" name="from_date" id="from_date" class="form-control datepicker" placeholder="From" value="" required>
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="to_date" id="to_date" class="form-control datepicker" placeholder="To" value="" required>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <label>Number of Person</label>
                  <input type="text" name="number_person" id="number_person" class="form-control" value="2" required>
                </div>
                <button class="btn btn-primary hvr-sweep-to-right">BooK Now</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

     <div id="bookNow" class="modal" tabindex="-1" role="dialog" aria-hidden="true" style="margin-top:60px;">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
  <div class="preview-wrap">

            <div class="form-wrap">
                <h4 id="heading">Booking Form:<span style="color:#fafbfb"><?php echo e($programs->tour_name); ?></span></h4>
                <!-- <form  method="post" id="post_form" action="<?php echo e(route('tourForm.store')); ?>"> -->


                <form id="msform"  method="post"  action="<?php echo e(route('tourForm.store')); ?>" class="registration-form">
                    <?php echo csrf_field(); ?>

               <!-- progressbar -->
                    <ul id="progressbar">
                      <li class="active" id="account"><strong>Step 1:</strong></li>
                        <li id="personal"><strong>Step 2:</strong></li>
                        <li id="payment"><strong>Step 3:</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                      <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="fs-title">Personal Details:| Step 1 - 4</h4>
                                </div>
                            </div>


 <div class="form-group">
            <?php if($discounts !=null): ?>
           <input type="hidden" class="form-control" name="unit_price" value="<?php echo e($discounts->new_price); ?>">
             <?php else: ?>
              <input type="hidden" class="form-control" name="unit_price" value="<?php echo e($programs->price); ?>">
             <?php endif; ?>

             <input type="hidden" class="form-control" name="tour_name" value="<?php echo e($programs->tour_name); ?>">
            <input type="hidden" class="form-control" name="currency" value="<?php echo e($programs->currency); ?>">
        </div>


                        <!--  <input type="text" name="first_name" placeholder="first name" />
                           <input type="text" name="last_name" placeholder="last name" />


 -->

             <div class="form-group">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" placeholder="first name" />

                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                           <input type="text" name="last_name" placeholder="last name" />
                                    </div>
                                </div>
  </div>


                              <!-- <label class="fieldlabels">Phone: *</label> -->
                               <input type="text" name="phone" placeholder="Phone(+00 00 000 000)"/>
                            <input type="email" name="email" placeholder="email"/>

                             <input type="text" name="country" placeholder="Nationality" />

                        </div>
                             <button type="button" class="close float-left" data-dismiss="modal" style="background-color:#b32121;padding: 8px 30px;">Close</button>
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>

                            <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="fs-title">Tour Information:|Step 2 - 4</h4>
                                </div>
                             </div>



                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Travel Date:</label>
                                    <div class="form-group">
                                        <input type="date" name="travel_date" id="travel_date" class="form-control" placeholder="From" value="">

                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Adults (>16 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" name="adults" min="0" value="1">
                                    </div>
                                </div>


                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Teens (12-14 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" name="teens" min="0" value="0">
                                    </div>
                                 </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Children (5-12 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" name="children" min="0" value="0">
                                    </div>
                                 </div>


                                 <input type="hidden" class="form-control" name="tour_id" value="<?php echo e($programs->program_id); ?>" readonly="true">
                          <input type="hidden" class="form-control" placeholder=""  name="tour_type" value="<?php echo e($programs->category); ?>" readonly="true">


                          <div class="col-md-6">

                                             <label for="">Tour Addon:</label>

                                                                    <select class="selectpicker search-fields form-control" name="addon">
                          <option value="0" selected>None</option>
                          <?php $__currentLoopData = $addons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($addon->price); ?>"><?php echo e($addon->addon_name); ?> - <?php echo e($addon->days); ?> days / $<?php echo e($addon->price); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                                            </div>

                           <div class="col-md-6">

                                               <label for="">Accommodation:</label>

                                                   <select class="form-control" name="accomodation">
                                                        <option value="0">--Select Accomodation--</option>
                                                        <option>Basic</option>
                                                         <option>Comfort</option>
                                                          <option>Deluxe</option>
                                                           <option>Mix</option>
                                                            <option>Not Sure</option>

                                                    </select>

                                            </div>

                        </div>

                             <button type="button" class="close float-left" data-dismiss="modal" style="background-color:#b32121;padding: 8px 30px;">Close</button>

                        <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                        <input type="button" name="next" class="next action-button float-right" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                                <div class="col-12">
                                    <h4 class="fs-title">Other Information:|Step 3 - 4</h4>
</div>




    <div class="col-md-12">
                <div class="form-group">
                    <label for="">  Additional Information we should know?</label>

         <textarea class="form-control" id="" cols="2" rows="1" name="additional_information" placeholder="Type your additional information here..."></textarea>
        </div>
     </div>


     <div class="col-md-12">
            <label for=""> How did you hear about us?:</label>
</div>

     <div class="col-md-2">
           <label for="facebook">Facebook  </label>
          <input id="facebook" type="checkbox" class="zt-control"  name="hear[]" value="Facebook">

      </div>

      <div class="col-md-1">
        <label for="instagram">Instagram  </label>
          <input id="instagram" type="checkbox" class="zt-control"  name="hear[]" value="Instagram">
      </div>

<div class="col-md-1">
          <label for="google">Google </label>
          <input id="google" type="checkbox" class="zt-control"  name="hear[]" value="Google">
      </div>

      <div class="col-md-6">
          <label for="mouth">Word of Mouth </label>
          <input  id="mouth" type="checkbox" class="zt-control"  name="hear[]" value="Word of Mouth">
        </div>



  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label for=""> Other Media:</label>
           <input type="text" class="form-control" name="hear_about_us">
        </div>
        </div>
                          </div>


                        <button type="button" class="close float-left" data-dismiss="modal" style="background-color:#b32121;padding: 8px 30px;">Close</button>
                         <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                           <button type="submit" class="btn btn-success float-right btn-submit" style="padding: 8px 30px;">Submit</button>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="fs-title">Finish:| Step 4 - 4</h4>
                                </div>
                            </div> <br>
                            <h2 class="purple-text text-center"><strong>Success!</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully submitted</h5>
                                </div>
                            </div>
                        </div>

                    </fieldset>

                </form>
            </div>
        </div>

                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>









    <div class="modal fade modal-book-now" id="bookNow" tabindex="-1" role="dialog" style="margin-top:50px;">

    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </button>


          <!-- <h4 class="modal-title"><b><?php echo e($programs->tour_name); ?></b></h4> -->
        </div>
        <div class="modal-body">

          <div class="preview-wrap">

            <div class="form-wrap">
                <h4 id="heading">Booking Form:<span style="color:#fafbfb"><?php echo e($programs->tour_name); ?></span></h4>
                <!-- <form  method="post" id="post_form" action="<?php echo e(route('tourForm.store')); ?>"> -->


                <form id="msform"  method="post"  action="<?php echo e(route('tourForm.store')); ?>" class="registration-form">
                    <?php echo csrf_field(); ?>

               <!-- progressbar -->
                    <ul id="progressbar">
                      <li class="active" id="account"><strong>Step 1:</strong></li>
                        <li id="personal"><strong>Step 2:</strong></li>
                        <li id="payment"><strong>Step 3:</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                      <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="fs-title">Personal Details:| Step 1 - 4</h4>
                                </div>
                            </div>


 <div class="form-group">
            <?php if($discounts !=null): ?>
           <input type="hidden" class="form-control" name="unit_price" value="<?php echo e($discounts->new_price); ?>">
             <?php else: ?>
              <input type="hidden" class="form-control" name="unit_price" value="<?php echo e($programs->price); ?>">
             <?php endif; ?>

             <input type="hidden" class="form-control" name="tour_name" value="<?php echo e($programs->tour_name); ?>">
            <input type="hidden" class="form-control" name="currency" value="<?php echo e($programs->currency); ?>">
        </div>


                        <!--  <input type="text" name="first_name" placeholder="first name" />
                           <input type="text" name="last_name" placeholder="last name" />


 -->

             <div class="row form-group">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" placeholder="first name" />

                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                           <input type="text" name="last_name" placeholder="last name" />
                                    </div>
                                </div>
  </div>


                              <!-- <label class="fieldlabels">Phone: *</label> -->
                               <input type="text" name="phone" placeholder="Phone(+00 00 000 000)"/>
                            <input type="email" name="email" placeholder="email"/>

                             <input type="text" name="country" placeholder="Nationality" />

                        </div>
                             <button type="button" class="close float-left" data-dismiss="modal" style="background-color:#b32121;padding: 8px 30px;">Close</button>
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>

                            <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="fs-title">Tour Information:|Step 2 - 4</h4>
                                </div>
                             </div>


             <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Travel Date:</label>
                                    <div class="form-group">
                                        <input type="date" name="travel_date" id="travel_date" class="form-control" placeholder="From" value="">

                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Adults (>16 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" name="adults" min="0" value="1">
                                    </div>
                                </div>
  </div>

                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Teens (12-14 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" name="teens" min="0" value="0">
                                    </div>
                                 </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Children (5-12 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" name="children" min="0" value="0">
                                    </div>
                                 </div>



                                 <div class="col-md-6">                       
                                                    <label for="">Tour Addon:</label>
                                                                           <select class="selectpicker search-fields form-control" name="addon">
                                 <option value="0" selected>None</option>
                                 <?php $__currentLoopData = $addons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <option value="<?php echo e($addon->price); ?>"><?php echo e($addon->addon_name); ?> - <?php echo e($addon->days); ?> days / $<?php echo e($addon->price); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select>
                                                   </div>

                                  <div class="col-md-6">
                                                      <label for="">Accommodation:</label>
                                                          <select class="form-control" name="accomodation">
                                                               <option value="0">--Select Accomodation--</option>
                                                               <option>Basic</option>
                                                                <option>Comfort</option>
                                                                 <option>Deluxe</option>
                                                                  <option>Mix</option>
                                                                   <option>Not Sure</option>

                                                           </select>

                                                   </div>
  </div>


  <input type="hidden" class="form-control" placeholder=""  name="tour_id" value="<?php echo e($programs->program_id); ?>" readonly="true">
<input type="hidden" class="form-control" placeholder=""  name="tour_type" value="<?php echo e($programs->category); ?>" readonly="true">



                        </div>

                             <button type="button" class="close float-left" data-dismiss="modal" style="background-color:#b32121;padding: 8px 30px;">Close</button>

                        <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                        <input type="button" name="next" class="next action-button float-right" value="Next" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="fs-title">Other Information:|Step 3 - 4</h4>
</div>


    <div class="col-md-12">
                <div class="form-group">
                    <label for="">  Additional Information we should know?</label>

         <textarea class="form-control" id="" cols="2" rows="1" name="additional_information" placeholder="Type your additional information here..."></textarea>
        </div>
     </div>


     <div class="col-md-12">
        <div class="form-group">
            <label for=""> How did you hear about us?:</label>

       <div class="form-group">
           <label for="facebook">Facebook
          <input id="facebook" type="checkbox" class="zt-control"  name="hear[]" value="Facebook">
        </label>
        <label for="instagram">Instagram
          <input id="instagram" type="checkbox" class="zt-control"  name="hear[]" value="Instagram">
        </label>
          <label for="google">Google
          <input id="google" type="checkbox" class="zt-control"  name="hear[]" value="Google">
        </label>
          <label for="mouth">Word of Mouth
          <input  id="mouth" type="checkbox" class="zt-control"  name="hear[]" value="Word of Mouth">
        </label>
        </div>
        </div>
  </div>

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label for=""> Other Media:</label>
           <input type="text" class="form-control" name="hear_about_us">
        </div>
        </div>
                                </div>
                          </div>


                        <button type="button" class="close float-left" data-dismiss="modal" style="background-color:#b32121;padding: 8px 30px;">Close</button>
                         <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                           <button type="submit" class="btn btn-success float-right btn-submit" style="padding: 8px 30px;">Submit</button>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="fs-title">Finish:| Step 4 - 4</h4>
                                </div>
                            </div> <br>
                            <h2 class="purple-text text-center"><strong>Success!</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully submitted</h5>
                                </div>
                            </div>
                        </div>

                    </fieldset>

                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


  <script type="text/javascript">
    $('#msform').submit(function(e) {
        e.preventDefault();


        var url = $(this).attr("action");
        let formData = new FormData(this);
        // document.getElementById('waiting').innerText="Please wait ............";
          $(".btn-submit").prepend('<i class="fa fa-spinner fa-spin"></i>');
        $(".btn-submit").attr("disabled", 'disabled');


        $.ajax({
                type:'POST',
                url: url,
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    // alert('Form submitted successfully');
                      $(".btn-submit").find(".fa-spinner").remove();
                     $(".btn-submit").removeAttr("disabled");
                      //alert(base_url);

                    $("#msform").trigger("reset");
                    // url: APP_URL + "/save_favorite",
                    //$('#bookNow form :input').val("");
                        // $(this).find('form').trigger('reset');

                     //location.replace(url + "/login")

                   // window.location = response.url;
                   location.reload();
                   window.location = response.url;
                },
                error: function(response){
                    $('#msform').find(".print-error-msg").find("ul").html('');
                    $('#msform').find(".print-error-msg").css('display','block');
                    $.each( response.responseJSON.errors, function( key, value ) {
                        $('#msform').find(".print-error-msg").find("ul").append('<li>'+value+'</li>');

                    });

                    $(".btn-submit").find(".fa-spinner").remove();
                $(".btn-submit").removeAttr("disabled");
                }
        });
    });
</script>

  <script type="text/javascript" src="../../../js/jquery321.min.js"></script>
<script type="text/javascript" src="../../../js/bootstrap431.bundle.min.js"></script>

  <script type="text/javascript">
$(document).ready(function(){
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);
$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/website/tour/tourSummary.blade.php ENDPATH**/ ?>