@extends('website.layouts.apps')
@section('content')

<body>

  <!-- Add Class carousel-fade just to fade transition -->
  <div class="carousel slide carousel-fade full-heightx stick-top" id="carousel" style="min-height: 610px;">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item zooming with-overlay active" style="background-image: url('http://placehold.it/1680x1050');"></div>

        @foreach($sliders as $slides)
        <div class="item zooming with-overlay" style="background-image: url('{{URL::asset('/storage/uploads/'.$slides->attachment)}}');"></div>

      <div class="carousel-caption full-width center-txt">
        <div class="container">
          <span class="main-header">Enjoy Adventure <br> Experience</span>
          <hr>
          <p class="sub-header">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis modi tenetur obcaecati veniam harum ipsa voluptas, incidunt cum.</p>

        </div>
      </div>
 @endforeach


 @foreach ($quickLinkSliders as $quickSliderf)
        <div class="item zooming with-overlay" style="background-image: url('{{URL::asset('/storage/uploads/'.$quickSliderf->attachment)}}');"></div>

      <div class="carousel-caption full-width center-txt">
        <div class="container">
          <span class="main-header">Enjoy Adventure <br> Experience</span>
          <hr>
          <p class="sub-header">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis modi tenetur obcaecati veniam harum ipsa voluptas, incidunt cum.</p>

    <div class="top-header-area" style="background:yellow;padding:1px;margin-top: 135px;">
         <div class="align-items-center py-2 px-xl-5 d-lg-flex" style="background-color:#345742;margin-top:0px;margin-bottom:0px;">
              <div class="col-lg-9 col-md-4">
               <i href="" class="text-decoration-none">
                    <marquee>Hello! Welcome Book with us</marquee>
                </i>

            </div>


            <div class="col-lg-3 col-md-8 text-left">
                     <form  method="POST"  action="{{ route('all-search') }}" enctype="multipart/form-data">
                  @csrf
                    <div class="input-group">
                       <select class="form-control selectpicker" name="tour_type" id="tour_type">
            <option selected>{{$title}}</option>
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




<!--

            <div class="col-sm-10 row" style="padding-left:10px;padding-right:10px; ">
              <div class="col-sm-4 form-group">
                <label>From</label>
                <input type="text" class="form-control datepicker" readonly>
              </div>
              <div class="col-sm-4 form-group">
                <label>To</label>
                <input type="text" class="form-control datepicker" readonly>
              </div>
              <div class="col-sm-4 form-group">
                <label>Price</label>
                <select class="form-control">
                  <option value="">1000 - 2000</option>
                </select>
              </div>
            </div> -->

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
      </div>
 @endforeach

    </div>

    <!-- Controls -->
    <!-- Available Variation Class for carousel-control => circle, bottom, bottom-left, bottom-right" -->
    <a class="left carousel-control bottom-right" href="#carousel" role="button" data-slide="prev">
      <span class="icon-arr-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control bottom-right" href="#carousel" role="button" data-slide="next">
      <span class="icon-arr-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>


    <!-- Indicators -->
    <!-- Available Variation Class for carousel-indicators => dashed, circle" -->
    <ol class="carousel-indicators dashed">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
    </ol>
  </div>



  <section class="showcase" style="background: url('assets/img/worldmap.png') no-repeat center; background-size: cover;padding-top: 30px;padding-bottom: 20px;">

    <div class="main-title">
      <h4>Special Offers</h4>
    </div>
    <div class="container">

      <div class="item">

    @foreach ($offers_private as $special_private)
      <div class="col-sm-6 col-md-4">
 <h4><b style="background:">{{$special_private->sales_header}}-({{ $special_private->category }})</b></h4>

          <div class="single_blog listing-shot item-grid">
<div class="listing-shot-img">
                                      <div class="listing-badge now-open"><strong>{{round($special_private->save/$special_private->price * 100),0 }}% Off</strong></div>

                                </div>




            <div class="item-img" style="background-image: url({{URL::asset('/storage/uploads/'.$special_private->attachment)}});" style="background-size:cover; background-position:center">
              <div class="item-overlay">
                <a href="{{route('safaris.show',$special_private->tour_id,$offers) }}"><span class="icon-binocular"></span></a>
              </div>
            </div>


              <div class="text-center" style="background-color:#f2fde6;border-radius:100px">
                <h4 class="title"><a href="#">{{$special_private->tour_name}}</a></h4>
              </div>



  <div class="item-desc" style="background-color:#345742;">
    <div class="item-detail">
      <div class="left">

                               <br>
                                <span style="font-size:12px;">{{$special_private->offer_deadline }} </span>
      </div>
      <div class="right">
          <span class="text-yellow" style="font-size:17px;color:#f9be0d"><strong>${{ number_format($special_private->new_price),2 }} </strong> pp
                                 </span><sup style="text-decoration: line-through;">$ {{ number_format($special_private->price),2 }} </sup></s><br>
                                  <span style="font-size:12px;">Save ${{ number_format($special_private->save),2 }}</span>

      </div>
    </div>


  <hr style="background-color:#fff">
              <div class="sub-title">
                <span class="location">Tour Duration</span>
                <span class="grade"><strong>{{ $special_private->days }} Days, {{ $special_private->days -1 }} Nights</strong></span>
              </div>
              <div class="sub-title">
                <span class="location">Physical rating</span>
                <span class="grade"><strong>{{ $special_private->physical_rating }}</strong></span>
              </div>

              <div class="sub-title">
                 <span class="location">Tour Category</span>
                <span class="grade"><strong>{{ $special_private->category }}</strong></span>
              </div>

   <div class="sub-title">

                <span class="location">Tour Code</span>
                <span class="grade"><strong>{{ $special_private->tour_code }}</strong></span>
              </div>
<hr style="background-color:yellow">
              <div class="item-detail">
                <div class="left">
                </div>
                <div class="right">
                  <a href="{{route('safaris.show',$special_private->tour_id,$offers) }}" class="btn btn-primary hvr-sweep-to-right">Tour Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
@endforeach



@foreach ($offers_group as $special_group)

<div class="col-sm-6 col-md-4">
<h4><b style="background:">{{$special_group->sales_header}}-({{ $special_group->category }})</b></h4>

    <div class="single_blog listing-shot item-grid">
<div class="listing-shot-img">
                                <div class="listing-badge now-open"><strong>{{round($special_group->save/$special_group->price * 100),0 }}% Off</strong></div>

                          </div>




      <div class="item-img" style="background-image: url({{URL::asset('/storage/uploads/'.$special_group->attachment)}});" style="background-size:cover; background-position:center">
        <div class="item-overlay">
          <a href="{{route('grouptour.show',$special_group->tour_id,$offers) }}"><span class="icon-binocular"></span></a>
        </div>
      </div>


        <div class="text-center" style="background-color:#f2fde6;border-radius:100px">
          <h4 class="title"><a href="#">{{$special_group->tour_name}}</a></h4>
        </div>



<div class="item-desc" style="background-color:#345742;">
<div class="item-detail">
<div class="left">

                         <br>
                          <span style="font-size:12px;">{{$special_group->offer_deadline }} </span>
</div>
<div class="right">
    <span class="text-yellow" style="font-size:17px;color:#f9be0d"><strong>${{ number_format($special_group->new_price),2 }} </strong> pp
                           </span><sup style="text-decoration: line-through;">$ {{ number_format($special_group->price),2 }} </sup></s><br>
                            <span style="font-size:12px;">Save ${{ number_format($special_group->save),2 }}</span>

</div>
</div>


<hr style="background-color:#fff">
        <div class="sub-title">
          <span class="location">Tour Duration</span>
          <span class="grade"><strong>{{ $special_group->days }} Days, {{ $special_group->days -1 }} Nights</strong></span>
        </div>
        <div class="sub-title">
          <span class="location">Physical rating</span>
          <span class="grade"><strong>{{ $special_group->physical_rating }}</strong></span>
        </div>

        <div class="sub-title">
           <span class="location">Tour Category</span>
          <span class="grade"><strong>{{ $special_group->category }}</strong></span>
        </div>

<div class="sub-title">

          <span class="location">Tour Code</span>
          <span class="grade"><strong>{{ $special_group->tour_code }}</strong></span>
        </div>
<hr style="background-color:yellow">
        <div class="item-detail">
          <div class="left">
          </div>
          <div class="right">
              <a href="{{route('grouptour.show',$special_group->tour_id,$offers) }}" class="btn btn-primary hvr-sweep-to-right">Tour Details</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach

      </div>
    </div>
      <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-right">
            <a class="btn-transparent" href="/offers" target="_blank"><i class="fas fa-gift"></i> Explore More Offers
            </a>
          </div>
        </div>
  </section>


<section class="showcase" style="background: url('assets/img/worldmap.png') no-repeat center; background-size: cover;padding-top: 30px;padding-bottom: 20px;">
   <div class="main-title line-box">
      <h4>Top Destinations</h4>
    </div>

    <div class="container">
                    <!-- BEGIN CONTENT -->
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                        <div class="">
                         <div data-aos="fade-up">
 <!-- Beach Holidays -->
  <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                     <h6 data-text= "" style="font-size: 20px;color: green;font-weight: 650; text-transform:lowercase;text-align: center;">Wildlife Safaris</h6>

  <div id="myCarousel4p" class="carousel_no slide" data-ride="carousel">
    <!-- Indicators -->
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$popular_safari->attachment)}}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                      <div class="listing-badge now-open" style="transform:rotate(0deg);top:1px;background-color:#345742;color:#fde205;width:150px;margin-right:50px"><strong>{{ $popular_safari->days  }} Days: ${{number_format($popular_safari->price),2 }}/=</strong></div>



        <div class="package-list-content">
      <h3 class="package-list-title">
      <p class="text-white">{{ $popular_safari->tour_name }}</p>
                          </h3>
   <a class="btn btn-primary hvr-sweep-to-right" href="{{ route('safaris-slider-packages',$popular_safari->id) }}" style="background-color:#6c471e;">Explore More</a>
                                          </div>
                                        </div>
      </div>



           @foreach ($popular_safarif as $safaris)                        <div class="item">
                          <div class="package-list-wrap ">
                                        <img src="{{URL::asset('/storage/uploads/'.$safaris->attachment) }}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                             <div class="listing-badge now-open" style="transform:rotate(0deg);top:1px;background-color:#345742;color:#fde205;width:150px;margin-right:50px"><strong>{{ $safaris->days  }} Days: ${{number_format($safaris->price),2 }}/=</strong></div>

        <div class="package-list-content">
      <h3 class="package-list-title">
      <p class="text-white">{{ $safaris->tour_name }}</p>
                          </h3>
   <a class="btn btn-primary hvr-sweep-to-right" href="{{ route('safaris-slider-packages',$safaris->id) }}" style="background-color:#6c471e;">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       @endforeach
    </div>

    <!-- Left and right controls -->
  <a data-slide="prev" href="#myCarousel4p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel4p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>

     <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                  <h6 data-text= "" style="font-size: 20px;color: green;font-weight: 650; text-transform:lowercase;text-align: center;">Hiking And Trekking</h6>

  <div id="myCarousel2p" class="carousel_no slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
     <!--  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="package-list-wrap ">

                                        <img src="{{URL::asset('/storage/uploads/'.$popular_trekking->attachment)}}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
             <div class="listing-badge now-open" style="transform:rotate(0deg);top:1px;background-color:#345742;color:#fde205;width:150px;margin-right:50px"><strong>{{ $popular_trekking->days  }} Days: ${{number_format($popular_trekking->price),2 }}/=</strong></div>

        <div class="package-list-content">
      <h3 class="package-list-title">
      <p class="text-white">{{ $popular_trekking->tour_name }}</p>
                          </h3>
   <a class="btn btn-primary hvr-sweep-to-right" href="{{ route('safaris-slider-packages',$popular_trekking->id) }}" style="background-color:#6c471e;">Explore More</a>
                                          </div>
                                        </div>
      </div>



            @foreach ($popular_trekkingf as $trekking)
                        <div class="item">
                         <div class="package-list-wrap ">


                                        <img src="{{URL::asset('/storage/uploads/'.$trekking->attachment) }}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                                                                       <div class="listing-badge now-open" style="transform:rotate(0deg);top:1px;background-color:#345742;color:#fde205;width:150px;margin-right:50px"><strong>{{ $trekking->days  }} Days: ${{number_format($trekking->price),2 }}/=</strong></div>

        <div class="package-list-content">
      <h3 class="package-list-title">
      <p class="text-white">{{ $trekking->tour_name }}</p>
                          </h3>
   <a class="btn btn-primary hvr-sweep-to-right" href="{{ route('safaris-slider-packages',$trekking->id) }}" style="background-color:#6c471e;">Explore More</a>
                                          </div>
                                        </div>
                      </div>
                       @endforeach
    </div>



    <a data-slide="prev" href="#myCarousel2p" class="carousel-control left">
                      <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel2p" class="carousel-control right">
                      <i class="fa fa-angle-right"></i>
                    </a>
  </div>
   </div>

        <!-- Beach Holidays -->
    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 front-carousel booking-tourPadding">
                                                 <h6 data-text= "" style="font-size: 20px;color: green;font-weight: 650; text-transform:lowercase;text-align: center;">Beach Holiday</h6>

    <div id="myCarousel3p" class="carousel_no slide" data-ride="carousel">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                 <div class="package-list-wrap ">
                                                                                <img src="{{URL::asset('/storage/uploads/'.$popular_holiday->attachment)}}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                                                                <div class="listing-badge now-open" style="transform:rotate(0deg);top:1px;background-color:#345742;color:#fde205;width:150px;margin-right:50px"><strong>{{ $popular_holiday->days  }} Days: ${{number_format($popular_holiday->price),2 }}/=</strong></div>


                <div class="package-list-content">
                        <h3 class="package-list-title">
            <p class="text-white">{{ $popular_holiday->tour_name }}</p>
                                                    </h3>
     <a class="btn btn-primary hvr-sweep-to-right" href="{{ route('safaris-slider-packages',$popular_holiday->id) }}" style="background-color:#6c471e;">Explore More</a>
                                                                                    </div>
                                                                                </div>
            </div>



                         @foreach ($popular_holidayf as $holidays)
                                                <div class="item">
                                                    <div class="package-list-wrap ">
                                                                                <img src="{{URL::asset('/storage/uploads/'.$holidays->attachment) }}" class="img-fluid" alt="No Image" style="height:240px;width:100%;">
                                                                                  <div class="listing-badge now-open" style="transform:rotate(0deg);top:1px;background-color:#345742;color:#fde205;width:150px;margin-right:50px"><strong>{{ $holidays->days  }} Days: ${{number_format($holidays->price),2 }}/=</strong></div>
                <div class="package-list-content">
                    <h3 class="package-list-title">
            <p class="text-white">{{ $holidays->tour_name }}</p>
                                                    </h3>
     <a class="btn btn-primary hvr-sweep-to-right" href="{{ route('safaris-slider-packages',$holidays->id) }}" style="background-color:#6c471e;">Explore More</a>
                                                                                    </div>
                                                                                </div>
                                            </div>
                                             @endforeach
        </div>

        <!-- Left and right controls -->
    <a data-slide="prev" href="#myCarousel3p" class="carousel-control left">
                                            <i class="fa fa-angle-left"></i>
                                        </a>
                                        <a data-slide="next" href="#myCarousel3p" class="carousel-control right">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
    </div>
     </div>


</div>
</div>
</div>
        </div>

</section>
@endsection
