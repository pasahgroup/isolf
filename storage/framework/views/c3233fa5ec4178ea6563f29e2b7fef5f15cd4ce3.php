<?php $__env->startSection('content'); ?>
<!--   <link rel="stylesheet" href="css/style.css">

 -->
<style type="text/css">
    .wrapper {
  padding: 5px;
   background-color: rgba(0,0,0,0.00001);
  max-width: 400px;
  margin: 2px auto;
}

.demo-1 {
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
}

.demo-2 {
  overflow: hidden;
  white-space: nowrap;
  text-overflow: ellipsis;
  max-width: 140px;
}
</style>
<style type="text/css">
      
    .bg-banner-front {

    background: url('../img/ava2.jpg');
  
     height: 60%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
.bg-banner-front::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.75);
}
</style>

<style>
.bg-bannerw{
   <?php if(isset($PostcategoryImage->attachment)): ?>
  background-image:url(<?php echo e(URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)); ?>);
   <?php endif; ?>

    position: relative;
    background-repeat: no-repeat;
     background-size:100% 100%;
}
</style>


 <?php if(isset($PostcategoryImage->attachment)): ?>
   <section class="same-section-spacing bg-bannerw" style="width:100% !important; height:72vh; !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="banner-box">
                        <h2>What We Offer</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">What We Offer</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <hr>
 <section class="booking-btn">
    <div class="container">   
    <div class="row"> 
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p style="color: white;" class="demo-1">
          <?php echo e($PostcategoryImage->body ?? ''); ?>.
        </p>         
    </div>
    </div>
    </div>
</section>
 <?php endif; ?>
<hr>
<section class="bg-gray">
    <div class="container">   
    <div class="row"> 
      <?php $__currentLoopData = $Postcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safaris): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-lg-4 col-md-6 col-sm-12">
          <div class="package-one blog-box">                    
                    <div class="img-wapper">
                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$safaris->attachment)); ?>" alt="<?php echo e($safaris->tour_name); ?>" style="width:100% !important; height:50vh; !important">
                              </div>
                                <div class="package-content wrapper">
                                    <h3><?php echo e($safaris->title); ?></h3>
                                   <hr>
                                    <p class="text-primary demo-1"><?php echo e($safaris->body); ?>.
                                    </p>
                                </div>
                                <p class="text-center">
                                <a href="#" class="read-btn" data-toggle="modal" data-target="#view_<?php echo e($safaris->id); ?>" data-id="myModal2">Read More<i class="fas fa-angle-double-right"></i></a>
                             </p>
                            </div>
                            </div> 

  <!-- Modal -->  
 <div class="modal fade" id="view_<?php echo e($safaris->id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
           <h4 class="modal-title"> <?php echo e($safaris->title); ?></h4> 
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

        <div class="modal-body">
                    <div class="img-wapper">
                        <img src="<?php echo e(URL::asset('/storage/uploads/'.$safaris->attachment)); ?>" alt="<?php echo e($safaris->tour_name); ?>" style="widht:100% !important; height:200px; !important">
                              </div>
                              <hr>
          <p class="text-primary"><?php echo e($safaris->body); ?>.
                                    </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>      
    </div>
  </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     
       </div>
    </div>
</section>
<!-- End-Package-Section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/website/whatWeOffer/whatWeOfferClient.blade.php ENDPATH**/ ?>