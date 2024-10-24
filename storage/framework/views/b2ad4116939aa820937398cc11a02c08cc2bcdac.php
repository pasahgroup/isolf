<?php $__env->startSection('content'); ?>
 <section class="bg-gray" style="padding-top:40px;">
        <div class="container">
           <div class="col-lg-1 col-md-12 col-sm-12">
           </div>
           <div class="col-lg-10 col-md-12 col-sm-12">
             <div class="card">
                        <div class="card-body">
      <div class="modal-content">
     
        <div class="modal-body">

          <div class="preview-wrap">
           
            <div class="form-wrap">
                <h4 id="heading">Custom Booking Form:<span style="color:green"> Create My Safari</span></h4>
          <div>
            <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
          </div>
                <form id="msform" method="post" action="<?php echo e(route('tailorMade.store')); ?>" class="registration-form">
                    <?php echo csrf_field(); ?>
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active" id="account"><strong>1 Step</strong></li>
                        <li id="personal"><strong>2 Step:</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="fs-title">Personal Details:| Step 1 - 3</h4>
                                </div>                                
                            </div> 
                           

 <div class="form-group">
    <input type="hidden" class="form-control" name="company_name" value="<?php echo e($company_name); ?>">
          

             <input type="hidden" class="form-control" name="tour_name" value="666">
            <input type="hidden" class="form-control" name="currency" value="555">
        </div>


                    
             <div class="form-group">
                              <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" placeholder="first name"/> 
                    
                                    </div>
                                </div>

                              <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                           <input type="text" name="last_name" placeholder="last name" /> 
                                    </div>
                                </div>
  </div>

     <div class="form-group">
                                  <div class="col-lg-6 col-md-6 col-sm-6">                                    
                                    <div class="form-group">
                                           <input type="text" name="phone" placeholder="Phone(+00 00 000 000)"/>                     
                                    </div>
                                </div>

                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                            <input type="email" name="email" id="email" placeholder="email"/> 

                                    </div>
                                </div>
  </div>

  <div class="form-group">
 <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                             <input type="text" name="country" placeholder="Nationality" /> 
                                    </div>
                                </div>
                              </div>
    <div class="form-group">
                                   <div class="col-lg-4 col-md-4 col-sm-4">
                                    <label for="">Adults (>16 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" name="adults" min="1">                   
                                    </div>
                                </div>

                                  <div class="col-lg-4 col-md-4 col-sm-4">
                                     <label for="">Teens(13-14yrs):</label>
                                    <div class="form-group">
                                          <input type="number" class="zt-control" name="teens" min="0">
                                    </div>
                                </div>
                                  <div class="col-lg-4 col-md-4 col-sm-4">
                                 <label for="">Children (5-12 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" name="children" min="0">
                                    </div>
                                </div>
  </div>

    <div class="form-group">
                                   <div class="col-lg-8 col-md-8 col-sm-8">
                                    <label for="">Travel Date:</label>
                                    <div class="form-group">
                                          <input type="date" name="arrival_date" id="arrival_date" class="form-control" placeholder="From" value="">                 
                                    </div>
                                </div>

                                 
                                  <div class="col-lg-4 col-md-4 col-sm-4">
                                 <label for="">Days:</label>
                                    <div class="form-group">
                                           <input type="number" class="zt-control" placeholder="0" name="days" min="0">
                                    </div>
                                </div>
  </div>
   <div class="form-group">
                                      <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Tour Type:</label>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields form-control" name="tour_type">
                                              <option value="0">--Select tour type--</option>
                                            <option value="Safaris">Wildlife Safaris</option>
                                            <option value="Trekking">Mt.Trekking & Hiking</option>
                                              <option value="Holidays">Beach Holidays</option>
                                            <option value="Historical_sites">Historical Sites</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Accommodation:</label>
                                    <div class="form-group">
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
  </div>
                          

                        </div> 
                             <a href="/" class="previous action-button-previous float-left" style="background-color:#d0794e">Close</a>
                              <!-- <a href="/home" role="button" class="btn btn-primary">Close</a> -->
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>

                            <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="fs-title">Tour Information:|Step 2 - 3</h4>
                                </div>
                             </div>


  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label for="">Destinatins:</label>
           <input type="text" class="form-control" name="destination" placeholder="list of Destinatins you should visit"> 
        </div>
        </div> 
              
   <div class="form-group">
                                  <div class="col-lg-6 col-md-6 col-sm-6">
                                    <label for="">Min Budget:</label>
                                    <div class="form-group">
                                             <input type="text" class="form-control"placeholder="0.00" name="min_budget" min="0">                  
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                 <label for="">Max Budget:</label>
                                    <div class="form-group">
                                         <input type="text" class="form-control"placeholder="0.00" name="max_budget" min="0">
                                    </div>
                                </div>
  </div>



 <div class="form-group">
  <div class="col-md-12">
                    <label for="">  Additional Information we should know?</label>

         <textarea class="form-control" id="" cols="2" rows="1" name="additional_information" placeholder="Type your additional information here..."></textarea>
        </div>
     </div>

 <div class="form-group">
     <div class="col-md-12">
       
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

                         <!--     <button type="button" class="previous action-button-previous float-left" data-dismiss="modal" style="background-color:#d0794e">Close</button>                    
                        <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                        <input type="button" name="next" class="next action-button float-right" value="Next" /> 
                                       -->
                        
                        <!-- <input type="submit" name="next" class="next action-button" value="Submit"/> -->
                     
                        <button type="button" class="previous action-button-previous float-left" data-dismiss="modal" style="background-color:#d0794e">Close</button>
                         <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                           <button type="submit" class="btn action-button float-right" onClick="return empty()">Submit</button>
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
</div>

<div class="col-lg-1 col-md-12 col-sm-12">
           </div>
</div>
</section>


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




    // $('.registration-form .next').on('click', function () {
    //     var parent_fieldset = $(this).parents('fieldset');
    //     var next_step = true;
    //     parent_fieldset.find('input[required],input[type="email"]').each(function () {
    //              if ($(this).val() == "" || $(this).val() == "0") {
    //             $(this).addClass('input-error');
    //             alert('g1');
    //             next_step = false;
    //         } else {
    //             $(this).removeClass('input-error');
    //             alert('g2');
    //         }
    //     });

    //     if (next_step) {
    //         parent_fieldset.fadeOut(400, function () {
    //           alert('g3');
    //             $(this).next().fadeIn();
    //         });
    //     }

    // });






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
<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/website/tailorMade/tailorEnquiryForm_new.blade.php ENDPATH**/ ?>