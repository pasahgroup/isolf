@extends('website.layouts.apps')
@section('content')

 <!-- Start-Package-Section -->
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
                        <h2>{{$title??'Popular Experience'}}</h2>
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$title?? 'Popular Experience'}}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
      @endisset


<section class="ws-section-spacing bg-gray">
    <div class="container">   
    <div class="row"> 
      <div class="col-lg-12 col-md-12 col-sm-12">
        <p><b>
          {{$PostcategoryImage->body ?? ''}}.
        </b>
        </p>
         
    </div>
       </div>
    </div>
</section>
</hr>


  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;">

    <div class="container-fluid" style="padding-bottom:0px;">  
            
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3 section-heading wow fadeInUp" style="color:#b76b0b;"> {{$title ?? ''}} Tours</span></h2>

      
      <div class="px-xl-5 pb-3">     
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#4c7149">
  
   
                                
                                            @foreach ($popularExperiences as $safari)

 <div class="col-lg-3 col-md-3">
    
       <h5><b style="background:">{{$safari->sales_header}}</b></h5>
            <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#f3f4f4">

<div class="single_blog listing-shot">
                <div class="product-item bg-light mb-4">
                   <div class="listing-shot-img">
                                                                           
                                                               

                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ URL::asset('/storage/uploads/'.$safari->attachment) }}" alt="" style="height:250px;">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-squarex" href="/safaris"><i class="fa fa-search">  {{ $safari->tour_name }}</i></a>
                        </div>
                    </div>

                    <div class="text-center">
                        <a class="h6 text-decoration-none text-truncate" href="/safaris">{{ $safari->tour_name }}</a>                      
                    </div>
                </div>
                 </div>

  <b>  <div class="col-md-5 col-sm-5 col-xs-5" style="border-right:0px solid rgba(71,85,95,.11);height:0px; ">
                                                                                         <strong style="background-color:;">{{ $safari->days }} Days, {{ $safari->days -1 }} Nights:</strong>
                                                                                 </div></b>

 <b class="float-right">  
  <div class="header-btn">
                                                                                <span class="text-danger" style="font-size:17px"><strong>${{ number_format($safari->price),2 }} </strong>
                                                                                     </span>
                                                                                    

                                                                                 </div></b>





               </div>


<div>Physical Rating:          <strong class="float-right">{{$safari->physical_rating }}</strong></div>
<div>Tour Category:          <strong class="float-right">{{$safari->category }}</strong></div>
<div>Physical Rating:          <strong class="float-right">{{$safari->tour_code }}</strong></div>


<hr>
                                                                        <div class="text-right">
                                                                                 

                                                                                                 @if($safari->category=="Private") 
                            <a href="{{ route('safaris.show',$safari->id) }}" class="booking-btn text-center"><b>View More</b></a>
                               @endif 

                                           @if($safari->category=="Group") 
                            <a href="/safaris/{{$safari->id}}" class="booking-btn text-center"><b>Explore More</b></a>
                               @endif
                                                                        </div>
            </div>

</div>


                                @endforeach





        </div>  

    </div>
</div>
</section>


@endsection

