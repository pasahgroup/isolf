<!-- <link rel="stylesheet" href="../../../css/bootstrap431.css"> -->
@extends('website.layouts.apps')
@section('content')
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

<style>
.bg-bannerw{
     @isset($PostcategoryImage->attachment)
  background-image:url({{URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)}});
    @endisset
    
   height: 80%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>

@isset($PostcategoryImage->attachment)
   <section class="same-section-spacing bg-bannerw">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10">
                    <div class="banner-box">
                        <h2>Special Offers</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"> 
                                    Home
                                
                                </a></li>
                                <li class="breadcrumb-item active" aria-current="page">Special Offers</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <section class="ws-section-spacing bg-gray">
    <div class="container-fluid">   
    <div class="row"> 
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p><b>
          @isset($PostcategoryImage->body)
          {{$PostcategoryImage->body}}.
          @endisset
        </b>
        </p>
         
    </div>
       </div>
    </div>
</section>
 @endisset
</hr>


<section id="blog_group" class="blog_section">

     <div class="container">

    <div class="container top-header-area" style="background:yellow;padding:2px">
         <div class="align-items-center py-2 px-xl-5 d-lg-flex" style="background-color:#345742;margin-top:0px;margin-bottom:0px;">
              <div class="col-lg-3 col-md-4">
               <i href="" class="text-decoration-none">
                    <marquee>Hello! Welcome Book with us</marquee>
                </i>            
 
            </div>
            <div class="col-lg-5 col-md-8 text-left">
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
        <div class="row">
        <div class="line-title">    {{$title?? ''}}</div>

<!-- <div class="container-fluid"> -->
 
                {{-- start of tabs --}}
                <div class="col-lg-12 col-md-12 col-sm-12 masonry ">
                    <div class="package-detail">
<div class="tab" id="myTabContent">
    <button class="tablink" onclick="openPage('tabP', this, 'orange')" id="defaultOpen" >Private Tour Offers</button>
    <button class="tablink" onclick="openPage('tabG', this, 'orange')">Group Tour Offers</button>
                                    
                    </div>
                    <div id="tabP" class="tabcontent">
                    <hr>
                          
                           @if($offers_private)
       
  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;"> 
    <div class="container-fluid" style="padding-bottom:0px;">  
            
        <h3 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> @if($offers_private !='[]')
                    PRIVATE TOUR OFFERS: 
                    @endif Special Offers</span></h3>

      
      <div class="px-xl-5 pb-3">     
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#4c7149">
  
   
                                @foreach ($offers_private as $special_private)

 <div class="col-lg-3 col-md-3">
    
       <h5><b style="background:">{{$special_private->sales_header}}</b></h5>
            <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#f3f4f4">

<div class="single_blog listing-shot">
                <div class="product-item bg-light mb-4">
                   <div class="listing-shot-img">
              <div class="listing-badge now-open"><strong>{{ round($special_private->save/$special_private->price * 100),0 }}% Off</strong></div>
                                                                   
                                                               

             <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ URL::asset('/storage/uploads/'.$special_private->attachment) }}" alt="" style="height:250px;">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-squarex" href="/safaris"><i class="fa fa-search"> {{ $special_private->tour_name }}</i></a>
                        </div>
                    </div>


 <div class="text-center" style="background-color:#4c7149;">
                        <a class="h6 text-decoration-none text-truncate" href="/safaris" style="font-size:20px;"><strong> {{ $special_private->tour_name }}</strong></a>                      
                    </div>
                </div>
                 </div>

  <b>  <div class="col-md-5 col-sm-5 col-xs-5 header-btn" style="border-right:0px solid rgba(71,85,95,.11);height:0px; ">
    <strong style="background-color:#2e352b;">Dead Line: <b class="text-danger">{{ $special_private->offer_deadline }}</b></strong>
  </div></b>

 <b class="float-right">  
  <div class="header-btn">
 <span class="text-danger" style="font-size:17px"><strong>${{ number_format($special_private->new_price),2 }} </strong> pp
</span><s style=""><sup>$ {{ number_format($special_private->price),2 }} </sup></s><br>
   <span style="font-size:12px;">Save ${{ number_format($special_private->save),2 }}</span>

</div></b>





               </div>

<div>Tour Duration:         
                                                                  <strong class="float-right">{{ $special_private->days }} Days, {{ $special_private->days -1 }} Nights</strong>
                                                                                              
                                                                                              </div>

<div>Physical Rating:          <strong class="float-right">{{$special_private->physical_rating }}</strong></div>
<div>Tour Category:          <strong class="float-right">{{$special_private->category }}</strong></div>
<div>Physical Rating:          <strong class="float-right">{{$special_private->tour_code }}</strong></div>


<hr>
                                        <div class="text-right">
                                    <a href="{{route('safaris.show',$special_private->tour_id) }}" class="booking-btn text-center"><b>Read more</b></a>
                                                                        </div>
            </div>

</div>


                                @endforeach

        </div>  

    </div>
</div>
</section>

            <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                                 
                @if($offers_private =='[]')
                    <h4>No any Private Offered at this moment</h4>
                @endif
            </div>
        </div>
        </div>
@endif



<div id="tabG" class="tabcontent">
                              

@if($offers_group)
  
  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;"> 
    <div class="container" style="padding-bottom:0px;">  
            
       <h3 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> @if($offers_private !='[]')
                    GROUP TOUR OFFERS: 
                    @endif Special Offers</span></h3>

      
      <div class="px-xl-5 pb-3">     
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#4c7149">
  
   
                    @foreach ($offers_group as $special_group)
     <div class="col-lg-4 col-md-12">
         <h4><b style="background:">{{$special_group->sales_header}}</b></h4>
                                                <div class="single_blog listing-shot">

                                                                <div class="listing-shot-img">
                                <div class="listing-badge now-open"><strong>{{ round($special_group->save/$special_group->price * 100),0 }}% Off</strong></div>
                                        <div class="blog_image">
                                        <img src="{{URL::asset('/storage/uploads/'.$special_group->attachment) }}" class="img-responsive" alt="{{  $special_group->tour_name }}" style="width:100%;">
                                                                        </div>
                                                                </div>
                          

                        <div class="text-center" style="background-color:#4c7149;">
                        <a class="h6 text-decoration-none text-truncate" href="/safaris" style="font-size:20px;">{{ $special_group->tour_name }}</a>                     
                    </div>
                                                                 
                                                        <div class="blog-text">
                                                        <div class="row">

                                    <div class="col-md-7 col-sm-7 col-xs-7 header-btn" style="border-right:1px solid rgba(71,85,95,.11);height:0px;">
                                <strong style="background-color:#2e352b;">Dead Line: <b class="text-danger">{{ $special_group->offer_deadline }}</b></strong>
                                                            </div>

                <div class="col-md-5 col-sm-5 col-xs-5 header-btn">
                <span class="text-danger" style="font-size:17px"><strong>${{ number_format($special_group->new_price),2 }} </strong> pp
              </span><s style=""><sup>$ {{ number_format($special_group->price),2 }} </sup></s><br>
                                                                                        <span style="font-size:12px;">Save ${{ number_format($special_group->save),2 }}</span>

                                                                                 </div>
                                                                        </div>

                   <div class="col-md-12 col-sm-12 col-xs-12 text-left booking-btn-gray">
                     <div class="row">
             <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                         Tour Duration:
                                                                                        </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $special_group->days }} Days, {{ $special_group->days -1 }} Nights</strong>
                                                                                                </div>
                                                                                         </div>

                                                                                             <div class="row">
                                                                                             <div class="col-md-6 col-sm-6 col-xs-6"  style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Physical Rating: </span>
                                                                                         </div>


                                                                                             <div class="col-md-5 col-sm-5 col-xs-5" style="font-size:14px;">
                                                                                                     <strong>{{ $special_group->physical_rating }}</strong>
                                                                                                </div>
                                                                                             </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Category: </span></div>


                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $special_group->category }}</strong>
                                                                                                </div>
                                                                                        </div>
                                                                                                    <div class="row">
                                                                                                    <div class="col-md-6 col-sm-6 col-xs-6" style="border-right:1px solid rgba(255,255,0,.5)">
                                                                                             <span> Tour Code: </span>
       </div>

                                                                                             <div class="col-md-6 col-sm-6 col-xs-6" style="font-size:14px;">
                                                                                                     <strong>{{ $special_group->tour_code }}</strong>
                                                                                                </div>
                                                                                        </div>
                                                                                         </div>

                                                            <div class="row">
                                                                        <div class="col-md-12 col-sm-12 col-xs-12 text-right booking-btn-gray">
    <a href="{{route('grouptour.show',$special_group->tour_id,$offers) }}" class="booking-btn text-center"><b>View Details</b></a>
                                                                        </div>
                                                                            </div>
                                                                </div>

                                                </div>
                                        </div>
                        @endforeach


        </div>  

    </div>
  </section>




          <div class="row">
            <div class="col-md-12" data-aos="fade-up">                 
                @if($offers_group =='[]')
                    <h4>No any Group Offered at this moment</h4>
                @endif
            </div>
        </div>
            @endif
                            </div>

                        </div>
                    </div>
                </div>
   </div>
 </div>
</div>

</section>

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
@endsection
