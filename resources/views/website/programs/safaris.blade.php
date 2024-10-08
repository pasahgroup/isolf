@extends('website.layouts.apps')
@section('content')


  <div class="post-single left">
     @isset($PostcategoryImage->attachment)
    <div class="page-img" style="background-image:url({{URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)}});">
      <div class="page-img-txt container">
        <div class="row">
          <div class="col-sm-8">
            <h1 class="main-head" style="text-transform: lowercase;">{{$title?? ''}}</h1>   
            
            <div class="author-img">
              <img src="{{URL::asset('/storage/uploads/'.$PostcategoryImage->attachment)}}" alt="">
            </div>
            <div class="author">
              <span></span><a href="#">{{$title?? ''}}</a>
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
@endisset
  </div>
 

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
        <div class="line-title">    {{$title?? ''}}</div>

    <div class="row">
        @foreach ($safaris as $safari)  
        <div class="col-sm-6 col-md-3">
          <div class="item-grid">
            <div class="item-img" style="background-image: url({{URL::asset('/storage/uploads/'.$safari->attachment)}});" style="background-size:cover; background-position:center">
              <div class="item-overlay">
                <a href="/safaris/{{$safari->id}}"><span class="icon-binocular"></span></a>
              </div>
            </div>
          
            <div class="item-desc" style="background-color:#345742;">

              <div class="">
                <span class=""></span>
                <h4 class="title"><a href="/safaris/{{$safari->id}}">{{$safari->tour_name}}</a></h4>
              </div>

 <hr>
              <div class="sub-title">
                <span class="location">Tour Duration</span>
                <span class="grade">{{ $safari->days }} Days, {{ $safari->days -1 }} Nights</span>
              </div>
              <div class="sub-title">
                <span class="location">Physical rating</span>
                <span class="grade">{{ $safari->physical_rating }}</span>
              </div>
   <div class="sub-title">
                <span class="location">Tour Category</span>
                <span class="grade">{{ $safari->category }}</span>
              </div>

              <div class="item-detail">
                <div class="left">
                  <div class="day"><span class="icon-sunx">Code:</span>{{ $safari->tour_code }}</div>
                  <!-- <div class="night"><span class="icon-moon"></span>2 Nights</div> -->
                </div>
                <div class="right">
                  <div class="price">From ${{number_format($safari->price),2 }}</div>
                  <a href="/safaris/{{$safari->id}}" class="btn btn-primary hvr-sweep-to-right">Book</a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
     @endforeach
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

   @endsection