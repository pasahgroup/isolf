<?php $__env->startSection('content'); ?>


       <div class="container">
    <div class="card-body">
    <div class="row justify-content-center">
         
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        <div class="search_area search_area_two booking-tour"> 
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h4 id="heading">Partiner Registration Form</h4>
                <p>Fill all blank fields</p>
    
       <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

    <?php if($message = Session::get('success')): ?>
  <div class="alert alert-success">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Well!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?>
   <?php if($message = Session::get('info')): ?>
  <div class="alert alert-danger">
    <button aria-label="Close" class="close" data-dismiss="alert" type="button">
    <span aria-hidden="true">&times;</span></button>
    <strong>Ops!: </strong> <?php echo e($message); ?>

  </div>
  <?php endif; ?> 
                    <form  method="post"  action="<?php echo e(route('Partner.store')); ?>" enctype="multipart/form-data">
                             <?php echo csrf_field(); ?>
               
                    <fieldset>
                        <div class="form-card">
                                                    
                                       <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <label class="fieldlabels">First Name: *</label> <input type="text" name="first_name" placeholder="first name" />
                        </div>
                                   <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                       
                             <label class="fieldlabels">Last Name: *</label> <input type="text" name="last_name" placeholder="last name" /> 
                        </div>
                      
                          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                              <label class="fieldlabels">Phone: *</label> <input type="number" name="phone" placeholder="phone" />
                          </div>

                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                              <label class="fieldlabels">Email: *</label> <input type="email" name="email" placeholder="email" />
                          </div>                       


                        </div> 
                   

                    </fieldset>
                    <fieldset>
                            <div class="form-card">
                               <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              <label class="fieldlabels">Nationality: *</label> <input type="text" name="nationality" placeholder="nationality" class="form-control" />                             
                        </div>
 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">  
  <strong>Language(Mother Tongue):</strong>
    <label for="browser" class="form-label">Choose the language from the list:</label>
    <input class="form-control" list="languages" name="language" id="language">
    <datalist id="languages">
         <option value="0">--Speaking Language--</option>
                                            <option value="English">English</option>
                                            <option value="France">France</option>
                                              <option value="Germany">Germany</option>
                                            <option value="Italian">Italian</option>
                                            <option value="Spain">Spain</option>
                                             <option value="Portguise">Portguise</option>

                                            <option value="Indian">Indian</option>
                                            <option value="Chinese">Chinese</option>
                                                <option value="Swahili">Swahili</option>
                                              <option value="Other">Other Language</option>
    </datalist> 
</div>
         

                    </fieldset>
                    <fieldset>

                         
                        <div class="form-card">
             

                <div class="col-md-12">
               <label for="">What Goods,you should offer(Cars,Camps,Hotels etc.)?</label>
                <div class="form-group">                 

         <textarea rows="2" name="offer" placeholder="cars,camps,Hotels etc..." style="width:  100%" ></textarea>
        </div>
     </div>
                                               
  <div class="col-lg-3 col-md-6 col-sm-12">
                                   <label for="">Photo:</label>
                                    <div class="form-group">
                                    <input type="file" name="attachment[]" onChange="displayImage(this)" id="attachment" accept="image/*" class="" style="display:block;"> 
                                   
                                </div>
                                </div>
        <div class="col-lg-6 col-md-6 col-sm-12">

            <span class="img-div">
              <div class="text-center img-placeholder"  onClick="triggerClick()">
                <h4>Update image</h4>
              </div>
              <img src="images/no.png" onClick="triggerClick()" id="profileDisplay">
            </span>
            </div>
       
           <div class="col-md-12">
               <label for="">Additional Information we should know?</label>
                <div class="form-group">                 

         <textarea rows="2" name="additional_information" placeholder="Additional information here..." style="width:  100%" ></textarea>
        </div>
     </div>

      
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <span> How did you hear about us.?</span>
           </div>
       <br>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <?php $__currentLoopData = $socialmedias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                   <label for=""><?php echo e($media->social_name); ?>

                                    <div class="form-group">
                                       <input id="facebook" type="checkbox"  name="hear[]" value="<?php echo e($media->social_name); ?>">
                                    </div></label>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div>


   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <label for="">Other Media:</label>
                <div class="form-group">                 

         <textarea rows="2" name="hear_about_us"  maxlength="240"  placeholder="List here separate by comma as example above..." style="width:  100%" ></textarea>
        </div>
       </div>

        <div class="col-lg-12 mt-3">
                                <button type="submit" class="btn btn-success float-center float-right">Submit</button>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/website/agents/partner.blade.php ENDPATH**/ ?>