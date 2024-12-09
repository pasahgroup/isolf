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
        <div class="line-title" style="color:#b76b0b;">    {{$title?? ''}} Tours</div>


    <div class="container-fluid" style="padding-bottom:0px;">
      <div class="px-xl-5 pb-3">
<div class="row">



                                            @foreach ($safaris as $safari)

                                            <div class="col-sm-3 col-md-3">
                                              <strong>

                                                           @if($safari->group_tour_category=="GS")
                                       <span>Scheduled Group Tour</span>
                                       @elseif($safari->group_tour_category=="SO")
                                       <span>Special Ocassion Tour</span>
                                       @else
                                       <span>Utalii Nyumbani Tour</span>
                                       @endif
                                     </strong>
                                                <div class="single_blog listing-shot item-grid">
                                        <div class="listing-shot-img">

                                                                            <div class="listing-badge now-open" style="transform:rotate(0deg);top:1px;background-color:#345742;color:#fde205"><strong>${{ number_format($safari->price),2 }}</strong></div>

                                                                      </div>


                                                  <div class="item-img" style="background-image: url({{URL::asset('/storage/uploads/'.$safari->attachment)}});" style="background-size:cover; background-position:center">
                                                    <div class="item-overlay">
                                                      <a href="/safaris/{{$safari->id}}"><span class="icon-binocular"></span></a>
                                                    </div>
                                                  </div>


                                                    <div class="text-center" style="background-color:#f2fde6;border-radius:100px">
                                                                      <div class="text-center" style="font-size:18px;">
                                                          <a class="Main-Text">
                                                            <strong class="demo-3">
                                                          {{ $safari->tour_name }}
                                                        </strong>
                                                      </a>
                                                          <div class="Extra-Text">
                                                                <a class="text-center" style="font-size:18px;"><strong>{{ $safari->tour_name }}</strong></a>
                                                          </div>
                                                          </div>
                                                    </div>
                                                          <div class="sub-title">
                                                            <span style="font-size:14px;color:#fff;padding-left:5%" class="float-left"><strong>Tour Duration</strong></span>
                                                            <span class="grade" style="font-size:14px;color:#f9be0d" class="float-right"><strong class="float-right" style="font-size:16px;color:#f9be0d;padding-right:5%">{{ $safari->days }} Days, {{ $safari->days -1 }} Nights</strong></span>
                                                          </div>
                                        <div class="item-desc" style="background-color:#345742;">
                                        <hr style="background-color:#fff">
                                                    <div class="sub-title">
                                                      <span class="location">Physical rating</span>
                                                      <span class="grade"><strong>{{ $safari->physical_rating }}</strong></span>
                                                    </div>

                                                    <div class="sub-title">
                                                       <span class="location">Tour Category</span>
                                                      <span class="grade"><strong>{{ $safari->category }}</strong></span>
                                                    </div>

                                         <div class="sub-title">

                                                      <span class="location">Tour Code</span>
                                                      <span class="grade"><strong>{{ $safari->tour_code }}</strong></span>
                                                    </div>
                                        <hr style="background-color:yellow">
                                                    <div class="item-detail">
                                                      <div class="left">
                                                      </div>
                                                      <div class="right">
                                                        <a href="/safaris/{{$safari->id}}" class="btn btn-primary hvr-sweep-to-right">Tour Details</a>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                @endforeach

        </div>
  {!! $safaris->links() !!}
    </div>
</div>
</section>



@endsection
