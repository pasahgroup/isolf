<?php $__env->startSection('content'); ?>

 <!-- Start-Package-Section -->
<style>
.bg-bannerw{
  
  <?php if(isset($PostcategoryImage->attachment)): ?>
  background-image:url(<?php echo e(URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)); ?>);
   <?php endif; ?>

   height: 80%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
      <?php if(isset($PostcategoryImage->attachment)): ?>
   <section class="same-section-spacing bg-bannerw">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="banner-box">
                        <h2><?php echo e($title??'Popular Experience'); ?></h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo e($title?? 'Popular Experience'); ?></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <?php endif; ?>


<section class="ws-section-spacing bg-gray">
    <div class="container">   
    <div class="row"> 
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p><b>
          <?php echo e($PostcategoryImage->body ?? ''); ?>.
        </b>
        </p>
         
    </div>
       </div>
    </div>
</section>
</hr>


<section id="popular_experience" class="blog_section">
    <div class="container">      
    
     <div class="row" data-aos="fade-up">    
            <?php $__currentLoopData = $popularExperiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safari): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col-lg-4 col-md-4">
                        <div class="single_blog listing-shot">                         
                               
                                <div class="listing-shot-img">
                                    <div class="blog_image">
                                    <img src="<?php echo e(URL::asset('/storage/uploads/'.$safari->attachment)); ?>" class="img-responsive" alt="<?php echo e($safari->tour_name); ?>" style="height:250px;width:100%;">
                                    </div>
                                </div>
                                   <h3 class="text-center booking-btn booking-tourPadding demo-3">
                                  <b style="color:" title="<?php echo e($safari->tour_name); ?>"><?php echo e($safari->tour_name); ?></b>                                    
                                </h3>  

                                    <div class="">
                                 <h3 class="text-center"> <b style="color:green;"><?php echo e($safari->type); ?></b>
                                    </h3>
                                </div>  
                            <div class="blog-text">       
                            <div class="row">
                                                            
                                     <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style="border-right:1px solid rgba(71,85,95,.11);font-size:18px;">
                                             <strong><b class="text-white"><?php echo e($safari->days); ?> Days, <?php echo e($safari->days -1); ?> Nights</b></strong> 
                                         </div>                                            
                                       
                                        <div class="col-md-6 col-sm-6 col-xs-6 booking-btn" style=";font-size:18px;">
                                        <span class="text-white"><strong>From $<?php echo e($safari->price); ?></b>  </strong>
                                           </span>

                                         </div> 
                                    </div> 
                                                                                                                               
                                       <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">
                                      
                                      <div class="row">
                                           <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5);font-size:17px;">
                                             Tour Duration:
                                            </div>
                      
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                   <strong><?php echo e($safari->days); ?> Days, <?php echo e($safari->days -1); ?> Nights</strong>
                                                </div>
                                             </div>

                                               <div class="row">
                                               <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5);font-size:17px;">
                                               <span> Physical Rating: </span>  
                                             </div>
                                           
                                                          
                                               <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                   <strong><?php echo e($safari->physical_rating); ?></strong>
                                                </div>
                                               </div>
                                                <div class="row">
                                                  <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5);font-size:17px;">
                                               <span> Tour Category: </span>  
                                           </div>
                            
                                           
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                   <strong><?php echo e($safari->category); ?></strong>
                                                </div>  
                                            </div>  
                                                  <div class="row">
                                                  <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5);font-size:17px;">
                                               <span> Tour Code: </span>  
                                           </div>
                          
                                               <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                   <strong><?php echo e($safari->tour_code); ?></strong>
                                                </div>  
                                            </div>                                           
                                             </div>
                               


                                 <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 text-right booking-btn-gray">
                                                                                    <a href="/safaris/<?php echo e($safari->id); ?>" class="booking-btn text-center"><b>Explore More</b></a>
                                                                        </div>
                                                                            </div>
                                                  
                                </div>
                          
                        </div>
                    </div>                   
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
 </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\palatialf\resources\views/website/popularExperiences/popularExperience.blade.php ENDPATH**/ ?>