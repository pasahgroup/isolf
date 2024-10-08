<?php $__env->startSection('content'); ?>
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
          <li class=""><a href="#dateprice" data-toggle="tab">Date &amp; Price</a>
          </li>
          <li class=""><a href="#reveiws" data-toggle="tab">Reviews</a>
          </li>
        </ul>

        <div class="tab-content paper-effect">

          <div class="tab-pane active" id="overview">
            <div class="row">
              <div class="col-sm-6">
                <h3>Rediscover lost Sangrila</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id aut similique voluptas! Tenetur aperiam alias, officiis, perferendis accusamus, sint, error possimus quas repellendus facilis asperiores dolorem. Nostrum maiores laudantium possimus
                  consequatur quam. Dolores placeat laudantium similique, beatae animi, vel reprehenderit! Quisquam veniam laudantium ullam eaque! Error ex cumque iure aliquam commodi voluptatibus, animi quam quas maiores, deserunt rerum, provident consequuntur!</p>
                <p>Dolor sit amet, consectetur adipisicing elit. Incidunt consequatur iusto odio quis magnam, aut assumenda ipsa magni ea, veritatis, nostrum rerum necessitatibus excepturi eos et nemo iste? Illo temporibus mollitia ducimus aspernatur numquam,
                  sint sunt consequatur rerum aliquam odio!</p>
                <p>Consectetur adipisicing elit. Debitis natus eum autem nisi cumque optio. Quis, necessitatibus laboriosam, alias, ea aut atque facere fugiat iusto tenetur minima itaque vero aperiam! Veniam exercitationem, distinctio laborum magnam rerum
                  quia et commodi hic quis suscipit! Molestias, eaque. Incidunt, a, molestias! Veniam, nobis, recusandae.</p>
                <blockquote class="with-icon">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis laboriosam repudiandae eligendi illum vero cum corrupti impedit nihil, aliquid. Veniam!
                  <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                  </footer>
                </blockquote>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, deleniti optio similique nobis.
                </p>

              </div>
              <div class="col-sm-6">
                <div class="border-box">
                  <br>
                  <div class="box-title">Trip Overview</div>
                  <ul class="trip-overview">
                    <li>
                      <span class="icon-road-sign"></span>
                      <div class="detail">
                        <div class="title">Trip profile</div>
                        <div class="desc">21 Day Trip 14 days point-to-point trekdiv nights</div>
                      </div>
                    </li>
                    <li>
                      <span class="icon-dollar"></span>
                      <div class="detail">
                        <div class="title">Cost</div>
                        <div class="desc">USD 422</div>
                      </div>
                    </li>
                    <li>
                      <span class="icon-camp-fire"></span>
                      <div class="detail">
                        <div class="title">Type</div>
                        <div class="desc">Camping</div>
                      </div>
                    </li>
                    <li>
                      <span class="icon-barcode"></span>
                      <div class="detail">
                        <div class="title">Trip Code</div>
                        <div class="desc">AD 23</div>
                      </div>
                    </li>
                    <li>
                      <span class="icon-calendar"></span>
                      <div class="detail">
                        <div class="title">Trek Days</div>
                        <div class="desc">18</div>
                      </div>
                    </li>
                    <li>
                      <span class="icon-door-tag "></span>
                      <div class="detail">
                        <div class="title">Accomodation</div>
                        <div class="desc">6 Night hotel, 3 night Tea House</div>
                      </div>
                    </li>
                    <li>
                      <span class="icon-home"></span>
                      <div class="detail">
                        <div class="title">Trek Accomodation</div>
                        <div class="desc">6 Night hotel, 3 night Tea House</div>
                      </div>
                    </li>
                    <li>
                      <span class="icon-bus"></span>
                      <div class="detail">
                        <div class="title">Transportation</div>
                        <div class="desc">Bus, Jeep</div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane" id="itenary">
            <div class="row">
              <div class="col-sm-6">
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
              </div>
              <div class="col-sm-6">
                <br>

                <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading1One">
                      <h4 class="panel-title">

                                                <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1One" aria-expanded="true" aria-controls="collapse1One">

                                                    Included

                                                </a>

                                            </h4>
                    </div>
                    <div id="collapse1One" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1One">
                      <div class="panel-body">
                        <ul class="clean-ul">
                          <li><span class="icon-tick"></span>
                            <div class="desc">All meals except main meals in Kathmandu</div>
                          </li>
                          <li><span class="icon-tick"></span>
                            <div class="desc">All ground transport, airport transfers, and flights</div>
                          </li>
                          <li><span class="icon-tick"></span>
                            <div class="desc">All accommodations</div>
                          </li>
                          <li><span class="icon-tick"></span>
                            <div class="desc">Sightseeing in Kathmandu</div>
                          </li>
                          <li><span class="icon-tick"></span>
                            <div class="desc">All applicable permits and entrance fees</div>
                          </li>
                          <li><span class="icon-tick"></span>
                            <div class="desc">Full trek staff arrangements a Trek Leader and guides</div>
                          </li>
                          <li><span class="icon-tick"></span>
                            <div class="desc">Porters or pack animals to carry equipments</div>
                          </li>
                          <li><span class="icon-tick"></span>
                            <div class="desc">Use of Trek Pack</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading1Two">
                      <h4 class="panel-title">

                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1Two" aria-expanded="false" aria-controls="collapse1Two">

                                                    Not Included

                                                </a>

                                            </h4>
                    </div>
                    <div id="collapse1Two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1Two">
                      <div class="panel-body">
                        <ul class="clean-ul">
                          <li><span class="icon-cross"></span>
                            <div class="desc">Alcohol or Beverage</div>
                          </li>
                          <li><span class="icon-cross"></span>
                            <div class="desc">Use of Trek Pack</div>
                          </li>
                          <li><span class="icon-cross"></span>
                            <div class="desc">Group medical kit</div>
                          </li>
                          <li><span class="icon-cross"></span>
                            <div class="desc">All major group equipments, etc.</div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>

          <div class="tab-pane" id="dateprice">
            <div class="table-responsive-wrap">
              <table class="table table-responsive">
                <thead>
                  <tr>
                    <th>Trip Dates</th>
                    <th>Availability</th>
                    <th>Discount</th>
                    <th>Price</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>12 July to 18 July 2015</td>
                    <td>Yes</td>
                    <td>3%</td>
                    <td><b>USD 239</b>
                    </td>
                    <td><a href="" class="btn btn-primary"> Book Now</a>
                    </td>
                  </tr>
                  <tr>
                    <td>12 July to 18 July 2015</td>
                    <td>No</td>
                    <td>3%</td>
                    <td><b>USD 239</b>
                    </td>
                    <td><a href="" class="btn btn-default"> Book Now</a>
                    </td>
                  </tr>
                  <tr>
                    <td>12 July to 18 July 2015</td>
                    <td>Yes</td>
                    <td><i>with Promotional Code</i>
                    </td>
                    <td><b>USD 239</b>
                    </td>
                    <td><a href="" class="btn btn-primary"> Book Now</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
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
                      <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Add Comment</label>
                        <textarea class="form-control" rows="6">Comment</textarea>
                        <button class="btn btn-primary">Add Comment</button>
                      </div>
                    </div>
                  </div>

                </div>
              </div>


            </div>
          </div>
           <div class="row">
               <div class="col-sm-12 col-md-12 float-right">
                <div class="float-right">
   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookNow">Book Now</button>

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

        <div class="col-sm-6 col-md-4">
          <div class="item-grid">
            <div class="item-img" style="background-image: url('http://placehold.it/370x260');">
              <div class="item-overlay">
                <a href=""><span class="icon-binocular"></span></a>
              </div>
            </div>
            <div class="item-desc">
              <div class="item-info">
                <span class="icon-hard"></span>
                <h4 class="title"><a href="">Routeburn Track</a></h4>
              </div>

              <div class="sub-title">
                <span class="location">New Zealand</span>
                <span class="grade">Difficult</span>
              </div>

              <div class="item-detail">
                <div class="left">
                  <div class="day"><span class="icon-sun"></span>3 Days</div>
                  <div class="night"><span class="icon-moon"></span>2 Nights</div>
                </div>
                <div class="right">
                  <div class="price">USD 121</div>
                  <a href="#" class="btn btn-primary hvr-sweep-to-right">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="item-grid">
            <div class="item-img" style="background-image: url('http://placehold.it/370x260');">
              <div class="item-overlay">
                <a href=""><span class="icon-binocular"></span></a>
              </div>
            </div>
            <div class="item-desc">
              <div class="item-info">
                <span class="icon-hard"></span>
                <h4 class="title"><a href="">Fitz Roy Trek</a></h4>
              </div>

              <div class="sub-title">
                <span class="location">Patagonia, Argentina</span>
                <span class="grade">Difficult</span>
              </div>

              <div class="item-detail">
                <div class="left">
                  <div class="day"><span class="icon-sun"></span>3 Days</div>
                  <div class="night"><span class="icon-moon"></span>2 Nights</div>
                </div>
                <div class="right">
                  <div class="price">USD 121</div>
                  <a href="#" class="btn btn-primary hvr-sweep-to-right">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="item-grid">
            <div class="item-img" style="background-image: url('http://placehold.it/370x260');">
              <div class="item-overlay">
                <a href=""><span class="icon-binocular"></span></a>
              </div>
            </div>
            <div class="item-desc">
              <div class="item-info">
                <span class="icon-hard"></span>
                <h4 class="title"><a href="">Annapurna Circuit</a></h4>
              </div>

              <div class="sub-title">
                <span class="location">Nepal</span>
                <span class="grade">Difficult</span>
              </div>

              <div class="item-detail">
                <div class="left">
                  <div class="day"><span class="icon-sun"></span>3 Days</div>
                  <div class="night"><span class="icon-moon"></span>2 Nights</div>
                </div>
                <div class="right">
                  <div class="price">USD 121</div>
                  <a href="#" class="btn btn-primary hvr-sweep-to-right">Book Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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

     <div id="bookNow" class="modal" tabindex="-1" role="dialog" aria-hidden="true" style="margin-top:120px;">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
  <div class="preview-wrap">
           
            <div class="form-wrap">
                <h4 id="heading">Booking Form:<span style="color:green"><?php echo e($programs->tour_name); ?></span></h4>
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
                <h4 id="heading">Booking Form:<span style="color:green"><?php echo e($programs->tour_name); ?></span></h4>
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