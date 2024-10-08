<!DOCTYPE html>

<?php $__env->startSection('content'); ?>
<style type="text/css">
  .imgf{
  height:40px;
  width:100%;
  }
</style>

<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <!-- Global styles START -->          
<!--   <link href="../../assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="../../assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <!-- <link href="../../assets/pages/css/components.css" rel="stylesheet"> -->
  <link href="../../assets/corporate/css/style.css" rel="stylesheet">
  <link href="../../assets/pages/css/portfolio.css" rel="stylesheet">
  <link href="../../assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="../../assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="../../assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
    <!-- BEGIN STYLE CUSTOMIZER -->
    <div class="color-panel hidden-sm">
      <div class="color-mode-icons icon-color"></div>
      <div class="color-mode-icons icon-color-close"></div>
      <div class="color-mode">
        <p>THEME COLOR</p>
        <ul class="inline">
          <li class="color-red current color-default" data-style="red"></li>
          <li class="color-blue" data-style="blue"></li>
          <li class="color-green" data-style="green"></li>
          <li class="color-orange" data-style="orange"></li>
          <li class="color-gray" data-style="gray"></li>
          <li class="color-turquoise" data-style="turquoise"></li>
        </ul>
      </div>
    </div>
    <!-- END BEGIN STYLE CUSTOMIZER --> 

  
    <div class="main">
      <div class="container-fluid">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="javascript:;">Galleries</a></li>
            <li class="active">Galleries</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Galleries</h1>
             <div>
    <!-- Content Header (Page header) -->
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
</div> 
            <div class="content-page">
                <div class="filter-v1">
                  <ul class="mix-filter">
                   
                    <li data-filter="category_1" class="filter active"><a href="/safaris-gallery">Wildlife Safaris</a></li>
                    <li data-filter="category_2" class="filter"><a href="/hiking-gallery"><i class="fas fa-hiking"></i> Hiking And Trekking</a></li>
                    <li data-filter="category_3" class="filter"><a href="/beach-gallery">Beach Holidays</a></li>
                    <li data-filter="category_3" class="filter"><a href="/group-gallery">Group Tours</a></li>
                     <li data-filter="category_3" class="filter"><a href="/day-gallery">Day Tours</a></li>
                     <li data-filter="category_3 category_2" class="filter"><a href="/historical-gallery">Historical Site Tours</a></li>
                  </ul>
                                  <div class="row">  
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                      <b><?php echo e($title?? ''); ?></b>
                                    </div> 
                                  </div> 
                                  <hr>
                                  <div class="row mix-grid thumbnails"> 

                                 <?php $__currentLoopData = $safaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $safari): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <div class="col-md-3 col-sm-4 mix category_1" style="display: block; opacity: 1;">
                                    <div class="mix-inner">
                                      <img alt="No Image" src="<?php echo e(URL::asset('/storage/uploads/'.$safari->attachment)); ?>" alt="No Image" style="height:220px;width:100%;" class="img-responsive">
                                      <div class="mix-details">
                                          <h4><?php echo e($safari->tour_name); ?></h4>
                                          <a href="/safaris-slider-packages/<?php echo e($safari->id); ?>" class="mix-link"><i class="fa fa-link"></i></a>
                                          <a data-rel="fancybox-button" title="<?php echo e($safari->tour_highlight); ?>" href="<?php echo e(URL::asset('/storage/uploads/'.$safari->attachment)); ?>" style="height:40px;width:15%;" class="mix-preview fancybox-button imgf"><i class="fa fa-search"></i>
                                                        </a>
                                    </div> 
                                 </div>                                       
                               </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- BEGIN SIDEBAR & CONTENT -->
      </div>
    </div>
<?php $__env->stopSection(); ?>

    <!-- <script src="../../assets/plugins/jquery.min.js" type="text/javascript"></script> -->
    <script src="../../assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
   
    <script src="../../assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="../../assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="../../assets/plugins/jquery-mixitup/jquery.mixitup.min.js" type="text/javascript"></script>
    
    <script src="../../assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <script src="../../assets/pages/scripts/portfolio.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();
            Layout.initTwitter();
            Portfolio.init();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<?php echo $__env->make('website.layouts.apps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\isolf\resources\views/website/galleries/gallery.blade.php ENDPATH**/ ?>