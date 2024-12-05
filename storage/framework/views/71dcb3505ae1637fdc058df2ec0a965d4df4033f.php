<?php $__env->startSection('content'); ?>

      <script src="../js/jquery361.min.js"></script>
     <link rel="stylesheet" href="../css/font621.min.css">

  <section class="bg-gray" style="margin-top: 14px;">
        <div class="container">
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
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookNow">Book Now</button>

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

             <!-- Tabs starts here -->
            <div class="row ">
                
            <div class="col-lg-9 col-md-9 col-sm-12 masonry ">
                    <div class="package-detail"> 
                             
            <div class="">
            <ul class="nav nav-tabs">
              <li><a href="#tab-H" data-toggle="tab">Highlight</a></li>
              <li class="active"><a href="#tab-I" data-toggle="tab">Itinerary</a></li>
              <li><a href="#tab-A" data-toggle="tab">Accommodations</a></li>
              <li><a href="#tab-C" data-toggle="tab">Tour Cost</a></li>
              <li><a href="#tab-E" data-toggle="tab">Extra Information</a></li>
            </ul>
            <div class="tab-content booking-btn">
              <div class="tab-pane row fade" id="tab-H">                
                <div class="col-md-12 col-sm-12">
                <p>
                                <?php echo e($programs->tour_highlight); ?></p>
                                    <hr>
                                <p>Maps Come Here</p>
               </div>
              </div>
              <div class="tab-pane row active" id="tab-I">

                   <form method="GET" action="<?php echo e(route('safaris.show','print')); ?>">
                    @crsf
                 <div class="col-md-10 col-sm-10">
                                     </div>
                                       <div class="col-md-2 col-sm-2">
                    <button type="submit" class="btn btn-success float-right" name="print" value="print">Print Itinerary</button>
                                     </div>

                                 </form>

                <div class="col-md-12 col-sm-12">
                <p class="card-text">
                                            <?php echo e($programs->itinerary_summury); ?>

                                            </p>
                                            <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="card card-primary booking-tourPadding">
                                                <div class="card-header  booking-tourPadding"  style="background-color:Gray;">
                                                <span><b> Day <?php echo e($data->day); ?> - <?php echo e($data->itinerary_title); ?></b></span>

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
              <div class="tab-pane fade" id="tab-A">

               <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     
       <div class="card booking-tourPadding">   
      <div class="card-header booking-tourPadding" style="background-color:#fafbfb">
    <span><b>Day <?php echo e($data->day); ?> - <?php echo e($data->itinerary_title); ?></b></span>
                     </div>          

                        <div class="card-body">
                       <div class="row ">
                                <div class="col-lg-7">
                                <div class="hotel-diss" style="background-color:#2e4432">
                
                               <div class="row">                   
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
              <div class="tab-pane fade" id="tab-C">               
                 <div class="card booking-btn">                    
        <div class="card-body">
            <div class="card-body">               
          <table class="table table-bordered data-table"> 
        <colspan>
           <col width="10%">
          <col width="20%">
          <col width="10%">
        </colspan>
        <tr>
          <th class="title" colspan="8" style="background-color:#fafbfb"><b>Tour Cost Summary Table</b></th>
        </tr>
        
        <tr>
        <th><b>#<b></th>       
          <th><b>Start Date</b></th>
           <th><b>End Date</b></th>
           <th><b>Price</b></th>
          <th><b>SRS</b></th>
           <th><b>Available Seats</b></th> 
                      
                </tr>               
             <?php $__currentLoopData = $basicCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valueCount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <?php                  
                      $myDateTime = DateTime::createFromFormat('m-Y', $valueCount->datef);
                      $yearM = $myDateTime->format('M-Y'); 
                    ?> 

   <th class="title" colspan="8" style="background-color:beige;"><b class ="text-success"><?php echo e($yearM); ?></b></th>
                 <?php $__currentLoopData = $basic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <?php
                    $i=1;
                    $myDateTime = DateTime::createFromFormat('Y-m-d', $value->start_date);
                    $month = $myDateTime->format('M');  
                    $year = $myDateTime->format('Y');
                    $yearM = $myDateTime->format('m-Y');  
                    ?> 
                   
                    <?php if($valueCount->datef==$yearM): ?>                 
                     <tr>
                    <td><?php echo e($i); ?></td>
                    <td> <?php echo e($value->start_date); ?></td>
                     <td><?php echo e($value->end_date); ?></td>
                     <td><?php echo e(number_format( $value->price),2); ?> <?php echo e($value->currency); ?></td>
                     <td><?php echo e($value->srs); ?></td>
                    <td><?php echo e($value->seats); ?></td>  
                    </tr>
                    <?php  
                    $i =1 +$i;
                     ?>                      
                   
                    
                    <?php endif; ?>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                   
                 
          </table>

<hr>

                        </div>
                        </div>
                     </div>

              </div>

            <div class="tab-pane fade" id="tab-E">                
       <div class="card booking-btn-gray">   
      <div class="card-header">
                                            <h5 class="m-0">Accommodation List : Inclusive and Not Inclusive</h5>           
                                              </div>                                 
                                                
           

                        <div class="card-body">
                       <div class="row ">
                                <div class="col-lg-7">
                                <div class="hotel-diss">
                
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
                                                  </div>
                                                 </div>
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
                                </div>
                                </div> 
             </div> 
             
            </div>
          </div>
    

                    </div>
                    </div>
                     
                    
                    <div class="col-md-3 col-lg-3 masonry">
                        <div class="card">
                        <div class="card-body">
                            <div class="card booking-btn">
                            
                         <h4>TOUR SUMMARY</h4>
                                 <hr>                                  
                                     <div>Tour Type: <b><?php echo e($programs->type); ?></b></div>
                            <div>Tour Style: <b><?php echo e($programs->category); ?></b></div>
                            <div>Tour Duration: <b><?php echo e($programs->days); ?> Days</b></div>
                            <div>Group Size: <b><?php echo e($value->seats??''); ?></b></div>
                            <div>Starts: <b><?php echo e($value->start_date??''); ?></b></div>
                            <div>Ends: <b><?php echo e($value->end_date??''); ?></b></div>
                             <div>Countries: <b>Tanzania</b> </div>
                            <hr>
                            <div>Destinations:
                                <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $destnation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <span class="text-primary " style="font-size: 12px; border-right:solid 1px #ddd; padding-right:2px"> <?php echo e($destnation->destination_name); ?></span>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>


                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-lg-12 text-center">                         
                            
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookNow">Book Now</button>

                    <a href="/enquiry/<?php echo e($id); ?>" role="button" class="btn btn-primary float-right">Enquiry</a>
                            </div>
                            </div>
                        <hr>
                            
                                <p class="text-center">
                               <h5 > List of Add-ons</h5>
                                </p>
                                                 <!-- Button trigger modal -->
 <?php $__currentLoopData = $addons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <!-- Modal -->
        <div class="package-list-wrap "><img src="<?php echo e(URL::asset('/storage/uploads/'.$addon->attachment)); ?>" class="img-fluid" alt="No Image" style="min-height: 20vh !important;max-height: 80vh !important;width:100%">
        <div class="package-list-content">
       <p class="package-list-duration"><?php echo e($addon->days); ?> Days From $<?php echo e($addon->price); ?></p>
      <h3 class="package-list-title">
      <a href="#"><?php echo e($addon->addon_name); ?></a>
                          </h3>
   <a class="package-list-button" href="<?php echo e(route('addons.show',$addon->id)); ?>">View More</a>
                                          </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>


                </div>
                <hr>
                <p class="text-center">
                <a class="btn btn-primary" href="<?php echo e(route('addons.index')); ?>">View More Addons</a></p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>


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
  </div>

<div class="row">
 <div class="col-md-12">
        <div class="form-group">
            <label for="">Tour type:</label>
                   <input type="hidden" class="form-control" placeholder=""  name="tour_id" value="<?php echo e($programs->program_id); ?>" readonly="true">
          <input type="text" class="form-control" placeholder=""  name="tour_type" value="<?php echo e($programs->category); ?>" readonly="true">
        </div>
    </div>

                                 </div>                    
            

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


<script>
function openPage(pageName, elmnt, color) {
  // Hide all elements with class="tabcontent" by default */
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Remove the background color of all tablinks/buttons
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }

  // Show the specific tab content
  document.getElementById(pageName).style.display = "block";

  // Add the specific color to the button used to open the tab content
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


$('#myTab a').on('click', function (event) {
  event.preventDefault()
  $(this).tab('show')
})
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
<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/website/grouptour/grouptourSummary.blade.php ENDPATH**/ ?>