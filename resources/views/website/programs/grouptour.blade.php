@extends('website.layouts.apps')
@section('content')

<!-- <style>
.bg-bannerw{
  background-image: url("../img/ava2.jpg");
   height:80%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>
 -->

<style>
.bg-bannerw{
     @isset($PostcategoryImage->attachment)
  background-image:url({{URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)}});
     @endisset
     
   height: 75%;
    position: relative;
    background-repeat: no-repeat;
    background-size:cover;
}
</style>



  <section class="featured-properties-area section-padding-100-50" style="padding-bottom:0px;">





<div class="container">
    <div class="search-bar bottomx" style="background-color:#345742;">
          <form  method="POST"  action="{{ route('all-search') }}" enctype="multipart/form-data">
                             @csrf
           <div class="col-sm-8 form-group">
          <label>Search Tour Category</label>
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
      </div>
      <div class="col-sm-2">
        <button class="btn btn-search btn-primary hvr-sweep-to-right">Search</button>
      </div>
    </form>
    </div>
  </div>

<div class="banner base page-img" style="background: url('assets/img/worldmap.jpg') no-repeat center; background-size: cover">
     <div class="container-fluid">

      <div class="line-box">   
        <div class="row">
        <div class="line-title" style="color:#b76b0b;">    {{$title?? ''}} Tours</div>




    <div class="container-fluid" style="padding-bottom:0px;">  
            
        
      <div class="px-xl-5 pb-3">     
<div class="col-md-12 col-sm-12 pb-1" style="background-color:#4c7149">
  
   
                                
                                            @foreach ($safaris as $program)


 <div class="col-lg-3 col-md-3">    
       <h5><b style="background:">

                    @if($program->group_tour_category=="GS")
<span>Scheduled Group Tour</span>
@elseif($program->group_tour_category=="SO")
<span>Special Ocassion Tour</span>
@else
<span>Utalii Nyumbani Tour</span>
@endif

    </b>
       </h5>
            <div class="col-lg-12 col-md-12 col-sm-12 pb-1" style="background-color:#f3f4f4">

<div class="single_blog listing-shot">
                <div class="product-item bg-light mb-4">
                   <div class="listing-shot-img">
                                                                           
                                                               

                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ URL::asset('/storage/uploads/'.$program->attachment) }}" alt="" style="height:250px;">
                        <div class="product-action">
                            <a class="btn btn-outline-dark btn-squarex" href="/safaris"><i class="fa fa-search">  {{ $program->tour_name }}</i></a>
                        </div>
                    </div>

                    <div class="text-center">
                        <a class="h6 text-decoration-none text-truncate" href="/safaris">{{ $program->tour_name }}</a>                      
                    </div>
                </div>
                 </div>

  <b>  <div class="col-md-5 col-sm-5 col-xs-5" style="border-right:0px solid rgba(71,85,95,.11);height:0px; ">
                                                                                         <strong style="background-color:;">{{ $program->days }} Days, {{ $program->days -1 }} Nights:</strong>
                                                                                 </div></b>

 <b class="float-right">  
  <div class="header-btn">
                                                                                <span class="text-danger" style="font-size:17px"><strong>${{ number_format($program->price),2 }} </strong>
                                                                                     </span>
                                                                                    

                                                                                 </div></b>





               </div>


<div>Physical Rating:          <strong class="float-right">{{$program->physical_rating }}</strong></div>
<div>Tour Category:          <strong class="float-right">{{$program->category }}</strong></div>
<div>Physical Rating:          <strong class="float-right">{{$program->tour_code }}</strong></div>


<hr>
                                                                        <div class="text-right">
                                                                             <a href="{{route('grouptour.show',$program->id)}}" class="booking-btn text-center"><b>Book Now</b></a>
                                                                                 
                                                                        </div>
            </div>

</div>


                                @endforeach





        </div>  

    </div>
</div>
</section>



@endsection

