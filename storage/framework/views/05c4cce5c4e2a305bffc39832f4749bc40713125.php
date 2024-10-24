<?php $__env->startSection('content'); ?>


  <div class="post-single left">
     <?php if(isset($PostcategoryImage->attachment)): ?>
    <div class="page-img" style="background-image:url(<?php echo e(URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)); ?>);">
      <div class="page-img-txt container">
        <div class="row">
          <div class="col-sm-8">
            <h1 class="main-head" style="text-transform: lowercase;"><?php echo e($title?? ''); ?></h1>   
            
            <div class="author-img">
              <img src="<?php echo e(URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)); ?>" alt="">
            </div>
            <div class="author">
              <span></span><a href="#"><?php echo e($title?? ''); ?></a>
            </div>
            <p class="byline">
             <span><a href="#">Serengeti</a></span>
              <span>|<a href="#">Tarangire</a></span>
             <span>|<a href="#">Ngorongoro</a></span>
              <span>|<a href="#">Mikumi</a></span>
                         </p>
          </div>
          <div class="colsm-4">
          </div>
        </div>
      </div>
    </div>
<?php endif; ?>
  </div>
 





 <div class="container">

    <div class="container top-header-area" style="background:yellow;padding:2px">
         <div class="align-items-center py-2 px-xl-5 d-lg-flex" style="background-color:#345742;margin-top:0px;margin-bottom:0px;">
              <div class="col-lg-3 col-md-4">
               <i href="" class="text-decoration-none">
                    <marquee>Hello! Welcome Book with us</marquee>
                </i>            
 
            </div>

            <!--   <div class="col-lg-6 col-md-7">
                 <div class="email-address_no">
                    <a href="mailto:info@isol.com">
                      <i class="fa fa-envelope" style="color:pink;"></i><b style="color:#FDD43D;">  info@isol.com</b></a>
                       <a href="https://wa.link/z5mmcd" style="padding-left:10px">
                            <img src="../../../images/whatsapp.png" alt="" style="width:20px; height:20px;">
                               <b style="color:#FDD43D;">(+255)753 216 263</b>
                            </a>
                </div>
            </div> -->

            <div class="col-lg-5 col-md-8 text-left">
                     <form  method="POST"  action="<?php echo e(route('all-search')); ?>" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                    <div class="input-group">
                       <select class="form-control selectpicker" name="tour_type" id="tour_type">
            <option selected><?php echo e($title); ?></option>
            <option>Wildlife Safaris</option>
             <option>Hiking & Trekking</option>
             <option>Beach Holidays</option>
             <option>Day Tours</option>
             <option>Historical Sites</option>
             <option>Special Offers</option>
              <option value="group">Group Tours</option>
               <option value="Group-scheduled">Scheduled Group Tours</option>
              <option value="special-occasions">Special Occasions</option>
                <option value="cultural">Cultural Tours</option>

          </select>
                        

                        <div class="input-group-append">                        
                            <button class="btn btn-search btn-primary hvr-sweep-to-right">
                                <i class="fa fa-search"> Search</i>
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>    
  </div>


  <div class="banner base page-img" style="background: url('assets/img/worldmap.jpg') no-repeat center; background-size: cover">
     <div class="container-fluid">

      <div class="line-box">   
        <div class="line-title">    <?php echo e($title?? ''); ?></div>

    <div class="row">
        <?php $__currentLoopData = $safaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safari): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
        <div class="col-sm-6 col-md-3">
          <div class="item-grid">
            <div class="item-img" style="background-image: url(<?php echo e(URL::asset('/storage/uploads/'.$safari->attachment)); ?>);" style="background-size:cover; background-position:center">
              <div class="item-overlay">
                <a href="/safaris/<?php echo e($safari->id); ?>"><span class="icon-binocular"></span></a>
              </div>
            </div>
          
            <div class="item-desc" style="background-color:#345742;">

              <div class="">
                <span class=""></span>
                <h4 class="title"><a href="/safaris/<?php echo e($safari->id); ?>"><?php echo e($safari->tour_name); ?></a></h4>
              </div>

 <hr>
              <div class="sub-title">
                <span class="location">Tour Duration</span>
                <span class="grade"><?php echo e($safari->days); ?> Days, <?php echo e($safari->days -1); ?> Nights</span>
              </div>
              <div class="sub-title">
                <span class="location">Physical rating</span>
                <span class="grade"><?php echo e($safari->physical_rating); ?></span>
              </div>
   <div class="sub-title">
                <span class="location">Tour Category</span>
                <span class="grade"><?php echo e($safari->category); ?></span>
              </div>

              <div class="item-detail">
                <div class="left">
                  <div class="day"><span class="icon-sunx">Code:</span><?php echo e($safari->tour_code); ?></div>
                  <!-- <div class="night"><span class="icon-moon"></span>2 Nights</div> -->
                </div>
                <div class="right">
                  <div class="price">From $<?php echo e(number_format($safari->price),2); ?></div>
                  <a href="/safaris/<?php echo e($safari->id); ?>" class="btn btn-primary hvr-sweep-to-right">Book</a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
      </div>
    </div>
 


<!--   <div class="banner supported-by" style="background: url('assets/img/bg1.jpeg') no-repeat center; background-size: cover">
    <ul class="supported-list">
      <li>
        <a href="#">
          <img src="assets/img/supported_by/logo_2.png" alt="" data-rjs="2">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="assets/img/supported_by/logo_1.png" alt="" data-rjs="2">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="assets/img/supported_by/logo_3.png" alt="" data-rjs="2">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="assets/img/supported_by/logo_4.png" alt="" data-rjs="2">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="assets/img/supported_by/logo_5.png" alt="" data-rjs="2">
        </a>
      </li>
    </ul>
  </div> -->

   <?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/website/programs/safaris.blade.php ENDPATH**/ ?>