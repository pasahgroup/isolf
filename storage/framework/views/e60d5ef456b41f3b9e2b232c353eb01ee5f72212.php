<!-- <link rel="stylesheet" href="../../../css/bootstrap431.css"> -->

<?php $__env->startSection('content'); ?>
<style>
.vl {
  border-left: 1px solid green;
  height: 20px;
}
</style>

<style type="text/css">

    .booking-btn {
  border: 0px solid #647545;
  padding: 10px 38px;
  color:#fff;
  display: block;
  /*background-color: #3f403d;*/
  /*background-color: #2e4432;*/
  background-color: #2e4432;
  transition: all ease-in-out 0.5s;
  -webkit-transition: all ease-in-out 0.5s;
  -moz-transition: all ease-in-out 0.5s;
  -ms-transition: all ease-in-out 0.5s;
  -o-transition: all ease-in-out 0.5s;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 30px;
}

 .header-btn {
  border: 0px solid #647545;
  padding: 1px 2px;
  color:#fff;
  display: block;
  /*background-color: #3f403d;*/
  /*background-color: #2e4432;*/
  background-color: #2e4432;
  transition: all ease-in-out 0.5s;
  -webkit-transition: all ease-in-out 0.5s;
  -moz-transition: all ease-in-out 0.5s;
  -ms-transition: all ease-in-out 0.5s;
  -o-transition: all ease-in-out 0.5s;
  border-radius: 10px;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  -ms-border-radius: 10px;
  -o-border-radius: 30px;
}
</style>



<duv>
<div class="container-fluid">
 <div class="row">
                
                <div class="col-lg-12 col-md-12 col-sm-12 masonry ">
                    <div class="package-detail">
<div class="tab" id="myTabContent">
    <button class="tablink" onclick="openPage('tabP', this, 'orange')" id="defaultOpen" >Private Tour Offers</button>
    <button class="tablink" onclick="openPage('tabG', this, 'orange')">Group Tour Offers</button>

                    </div>
                    <div id="tabP" class="tabcontent">
                    <hr>

                           <?php if($offers_private): ?>
  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;">
    <div class="container-fluid" style="padding-bottom:0px;">

        <h3 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> <?php if($offers_private !='[]'): ?>
                    PRIVATE TOUR OFFERS:
                    <?php endif; ?> Special Offers</span></h3>

      <div class="px-xl-5 pb-3">
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#">


                                <?php $__currentLoopData = $offers_private; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special_private): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <div class="col-sm-6 col-md-3">
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


                                        <div class="text-center" style="background-color:#f2fde6;border-radius:100px">
                                          <h4 class="title"><a href="#"><?php echo e($special_private->tour_name); ?></a></h4>
                                        </div>



                            <div class="item-desc" style="background-color:#345742;">
                              <div class="item-detail">
                                <div class="left">

                                                         <br>
                                                          <span style="font-size:12px;"><?php echo e($special_private->offer_deadline); ?> </span>
                                </div>
                                <div class="right">
                                    <span class="text-yellow" style="font-size:17px;color:#f9be0d"><strong>$<?php echo e(number_format($special_private->new_price),2); ?> </strong> pp
                                                           </span><sup style="text-decoration: line-through;">$ <?php echo e(number_format($special_private->price),2); ?> </sup></s><br>
                                                            <span style="font-size:12px;">Save $<?php echo e(number_format($special_private->save),2); ?></span>

                                </div>
                              </div>


                            <hr style="background-color:#fff">
                                        <div class="sub-title">
                                          <span class="location">Tour Duration</span>
                                          <span class="grade"><strong><?php echo e($special_private->days); ?> Days, <?php echo e($special_private->days -1); ?> Nights</strong></span>
                                        </div>
                                        <div class="sub-title">
                                          <span class="location">Physical rating</span>
                                          <span class="grade"><strong><?php echo e($special_private->physical_rating); ?></strong></span>
                                        </div>

                                        <div class="sub-title">
                                           <span class="location">Tour Category</span>
                                          <span class="grade"><strong><?php echo e($special_private->category); ?></strong></span>
                                        </div>

                             <div class="sub-title">

                                          <span class="location">Tour Code</span>
                                          <span class="grade"><strong><?php echo e($special_private->tour_code); ?></strong></span>
                                        </div>
                            <hr style="background-color:yellow">
                                        <div class="item-detail">
                                          <div class="left">
                                          </div>
                                          <div class="right">
                                            <a href="<?php echo e(route('safaris.show',$special_private->tour_id,$offers)); ?>" class="btn btn-primary hvr-sweep-to-right">Read More</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>
</div>
</section>

            <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center" style="background-color:#ec8224">
                <?php if($offers_private =='[]'): ?>
                    <h4>No any Private Offered at this moment</h4>
                <?php endif; ?>
                </div>
            </div>
        </div>
        </div>
<?php endif; ?>



<div id="tabG" class="tabcontent">
<?php if($offers_group): ?>

  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;">
    <div class="container-fluid" style="padding-bottom:0px;">

       <h3 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> <?php if($offers_private !='[]'): ?>
                    GROUP TOUR OFFERS:
                    <?php endif; ?> Special Offers</span></h3>


      <div class="px-xl-5 pb-3">
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#4c7149">


                    <?php $__currentLoopData = $offers_group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $special_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-sm-6 col-md-3">
                    <h4><b style="background:"><?php echo e($special_group->sales_header); ?>-(<?php echo e($special_group->category); ?>)</b></h4>

                        <div class="single_blog listing-shot item-grid">
                    <div class="listing-shot-img">
                                                    <div class="listing-badge now-open"><strong><?php echo e(round($special_group->save/$special_group->price * 100),0); ?>% Off</strong></div>

                                              </div>




                          <div class="item-img" style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$special_group->attachment)); ?>);" style="background-size:cover; background-position:center">
                            <div class="item-overlay">
                              <a href="<?php echo e(route('grouptour.show',$special_group->tour_id,$offers)); ?>"><span class="icon-binocular"></span></a>
                            </div>
                          </div>


                            <div class="text-center" style="background-color:#f2fde6;border-radius:100px">
                              <h4 class="title"><a href="#"><?php echo e($special_group->tour_name); ?></a></h4>
                            </div>



                    <div class="item-desc" style="background-color:#345742;">
                    <div class="item-detail">
                    <div class="left">

                                             <br>
                                              <span style="font-size:12px;"><?php echo e($special_group->offer_deadline); ?> </span>
                    </div>
                    <div class="right">
                        <span class="text-yellow" style="font-size:17px;color:#f9be0d"><strong>$<?php echo e(number_format($special_group->new_price),2); ?> </strong> pp
                                               </span><sup style="text-decoration: line-through;">$ <?php echo e(number_format($special_group->price),2); ?> </sup></s><br>
                                                <span style="font-size:12px;">Save $<?php echo e(number_format($special_group->save),2); ?></span>

                    </div>
                    </div>


                    <hr style="background-color:#fff">
                            <div class="sub-title">
                              <span class="location">Tour Duration</span>
                              <span class="grade"><strong><?php echo e($special_group->days); ?> Days, <?php echo e($special_group->days -1); ?> Nights</strong></span>
                            </div>
                            <div class="sub-title">
                              <span class="location">Physical rating</span>
                              <span class="grade"><strong><?php echo e($special_group->physical_rating); ?></strong></span>
                            </div>

                            <div class="sub-title">
                               <span class="location">Tour Category</span>
                              <span class="grade"><strong><?php echo e($special_group->category); ?></strong></span>
                            </div>

                    <div class="sub-title">

                              <span class="location">Tour Code</span>
                              <span class="grade"><strong><?php echo e($special_group->tour_code); ?></strong></span>
                            </div>
                    <hr style="background-color:yellow">
                            <div class="item-detail">
                              <div class="left">
                              </div>
                              <div class="right">
                                  <a href="<?php echo e(route('grouptour.show',$special_group->tour_id,$offers)); ?>" class="btn btn-primary hvr-sweep-to-right">Tour Details</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>

    </div>
</div>
</section>




          <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center" style="background-color:#ec8224">
                <?php if($offers_group =='[]'): ?>
                    <h4>No any Group Offered at this moment</h4>
                <?php endif; ?>
                </div>
            </div>
        </div>
            <?php endif; ?>
                            </div>

                        </div>
                    </div>
                </div>
   </div>

</div>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/website/offers/offers.blade.php ENDPATH**/ ?>