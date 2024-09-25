<?php $__env->startSection('content'); ?>

  <section class="bg-gray ">
        <div class="container">   
                  
                 <a href="#"></a>
               <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="search_area search_area_two booking-tour">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="center-title ">
                                    <h5 class="title">Agent Restration Form</h5>
                                                       </div>
                            </div>
                           
                        </div>
                        <!--Search Form-->
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
                           <form  method="post"  action="<?php echo e(route('Agents.store')); ?>" enctype="multipart/form-data">
                             <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <label for="">First name:</label>
                                    <div class="form-group">    

                                        <input type="text" name="first_name" class="form-control" placeholder="first name" min="2">
                                    </div>
                                </div>

                                 <div class="col-lg-5 col-md-12 col-sm-12">
                                    <label for="">Last name:</label>
                                    <div class="form-group">    

                                        <input type="text" name="last_name" class="form-control" placeholder="last name" min="2">
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                    <label for="">Nationality:</label>
                                    <div class="form-group">
                                        <input type="text" name="nationality" class="form-control" s placeholder="Nationality" min="2">
                                    </div>
                                </div>
                                  <div class="col-lg-5 col-md-12 col-sm-12">
                                     <label for="">Language(Mother Toung):</label>
                                     <div class="form-group icon_down">
                                        <select class="form-control" name="language">
                                              <option value="0">--Speaking Language--</option>
                                            <option value="English">English</option>
                                            <option value="France">France</option>
                                              <option value="Germany">Germany</option>
                                            <option value="Italian">Italian</option>
                                            <option value="Spain">Spain</option>
                                             <option value="Portguise">Portguise</option>

                                            <option value="Indian">Indian</option>
                                            <option value="Chinise">Chinise</option>
                                              <option value="Other">Other Language</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12">
                                   <label for="">Your Phone:</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" placeholder="phone" >
                                        
                                    </div>
                                </div>
                         
                                <div class="col-lg-5 col-md-6 col-sm-12">
                                   <label for="">Email:</label>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="email" name="email">
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
                            
            <hr>
               <div class="col-md-12">
               <label for="">Additional Information we should know?</label>
                <div class="form-group">                 

         <textarea rows="2" name="additional_information" placeholder="Additional information here..." style="width:  100%" ></textarea>
        </div>
     </div>

      
       <div class="">
      
        <div class="col-lg-12 col-md-12 col-sm-12">
         <span> How did you hear about us.?</span>
           </div>
       <br>
        <?php $__currentLoopData = $socialmedias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="col-lg-4 col-md-4 col-sm-4">
                                   <label for=""><?php echo e($media->social_name); ?>

                                    <div class="form-group">
                                       <input id="facebook" type="checkbox"  name="hear[]" value="<?php echo e($media->social_name); ?>">
                                       </label>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </div> 

                                                        
                                       <div class="col-lg-12 mt-3">
                                         <label for=""> Other Media:</label> 
                                     <textarea rows="2" name="hear_about_us" placeholder="hear about us..." style="width:  100%">
                                </textarea>
                                  </div>                          
                                    <hr>
                                   <div class="col-lg-12 mt-3">
                                <button type="submit" class="btn btn-success float-center">Submit</button>
                                  </div>       
                               </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
         
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/agents/agents.blade.php ENDPATH**/ ?>