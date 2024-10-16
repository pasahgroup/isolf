
@extends('website.layouts.apps')
@section('content')


  <section class="bg-gray">
        <div class="container">
            <div class="package-list-wrap ">
                <img src="{{URL::asset('/storage/uploads/'.$programs->attachment?? '') }}" class="img-fluid" alt="det-img" style="min-height: 20vh !important;max-height: 50vh;background-size: cover;width: 100%;">
                <div class="package-list-content">
                    <p class="package-list-duration">{{$programs->days}} Days, {{$programs->days -1}}  Night(s)<span
                            class="rate">


                    </span>
                    </p>
                     
                     <h3 class="package-list-title">
                        {{ $programs->tour_name }}
                    </h3>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#bookNow">Pay Invoicex</button>

                </div>
        
            </div>

             <!-- Tabs starts here -->
            <div class="row">
                {{-- start of tabs --}}
      
            <div class="col-lg-9 col-md-9 col-sm-12 masonry"  style="background-color:#2e4432">
          
                    <div class="package-detail"> 
                        
            <div class="">
               <strong style="color:#fff;">PIN number: {{$pin}}</strong>
               <br>
            <ul class="nav nav-tabs">
              <li><a href="#tab-H" data-toggle="tab">Highlight</a></li>
              <li class="active"><a href="#tab-I" data-toggle="tab">Itinerary</a></li>
              <li><a href="#tab-A" data-toggle="tab">Accommodations</a></li>
              <li><a href="#tab-E" data-toggle="tab">Extra Information</a></li>
            </ul>
            <div class="tab-content booking-btn">
              <div class="tab-pane row fade" id="tab-H">                
                <div class="col-md-12 col-sm-12">
                <p>
                                {{ $programs->tour_highlight }}</p>
                                    <hr>
                                <p>Maps Come Here</p>
               </div>
              </div>
              <div class="tab-pane row active" id="tab-I">

                   <form method="GET" action="{{ route('safaris.show','print') }}">
                    @csrf
                 <div class="col-md-10 col-sm-10">
                                     </div>
                                       <div class="col-md-2 col-sm-2">
                    <button type="submit" class="btn btn-success float-right" name="print" value="print">Print Itinerary</button>
                                     </div>

                                 </form>

                <div class="col-md-12 col-sm-12">
                <p class="card-text">
                                            {{ $programs->itinerary_summury }}
                                            </p>
                                            @foreach ($datas as $data)
                                            <div class="card card-primary booking-tourPadding">
                                                <div class="card-header  booking-tourPadding"  style="background-color:Gray;">
                                                <span><b> Day {{ $data->day }} - {{ $data->itinerary_title }}</b></span>

                                                </div>
                                                <div class="card-body">
                                                {{-- test --}}

                                                <div class="row masonry-item">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 masonry">
                                       <div class="">

                                <div class="">
                                <div class="col-lg-7">
                                <div class="hotel-diss">
                               <p class="booking-btn-gray">{{ $data->itinerary_description }}</p>   
                                               
                                                     
                               <div class=""> 
                                      <div class="col-md-12 col-lg-12 col-sm-12">
                                        <p><b class="text-success">Distance:</b> {{$data->distance}} KM <b class="text-success">Transport:</b> {{$data->transport}}</p>

                                          <p><b class="text-success">Accommodation:</b> {{$data->accommodation_name}} | <b class="text-success">Meal Plan:</b> {{$data->meal}}</p>
                                      </div>           
                                                                                 
                                                  </div>
                                                 </div>
                                               </div>
                                        <div class="col-lg-5">                           
                                            <div class="hotel-pics-one">                                               <img src="{{URL::asset('/storage/destination/'.$data->photo) }}" alt="" style="height: 32vh !important;width:100%">                                                                              </div> 

                                                 </div>
                                                 </div>
                                                </div>
                                                </div>
                                                </div>

                                        {{-- test --}}
                                            </div>
                                            </div>
                                            <hr>
                                            @endforeach
                </div>
              </div>
              <div class="tab-pane fade" id="tab-A">

               @foreach ($datas as $data)
     
       <div class="card booking-tourPadding">   
      <div class="card-header booking-tourPadding" style="background-color:green">
    <span><b>Day {{ $data->day }} - {{ $data->itinerary_title }}</b></span>
                     </div>          

                        <div class="card-body">
                       <div class="">
                                <div class="col-lg-7">
                                <div class="hotel-diss" style="background-color:#2e4432">                
                               <div class="">                   
                                <div class="col-md-6 col-lg-6 col-sm-12">                                   
                                  <div class="rating">                     
                                    <h4>Location Details</h4>                        
                                  </div>                                                                        

                                  <a class="map-viw" href="#"><i class="fa fa-map-marker"></i> {{ $data->destination_name }}</a> 
                                     <a class="map-viw" href="#"><i class="fa fa-home"></i> {{ $data->location_name }}/{{ $data->region }}/{{ $data->country }}</a>    
                                   </div>                                                                                                                           
                                <div class="col-md-6 col-lg-6 col-sm-12 booking-tour">                             
                                <div class="rating">                                                                       <h4>Accommodation Details</h4>                                                                       </div>  <a class="map-viw" href="#"><i class="fa fa-home"></i><b>{{ $data->accommodation_name }}</b></a>      

                                    <div>                            
                                     <a class="map-viw" href="#"><i class="fa fa-home"></i><b>Standard Category: <br>  
                                        @for($i=0;$i<$data->national_standard;$i++)                                 
                                        <span class="fa fa-star text-warning"></span>
                                        @endfor
                                         @for($i=0;$i<5-$data->national_standard;$i++)   
                                        <span class="fa fa-star-o text-warning"></span>
                                           @endfor
                                         </div></b></a>
 
                                       <a class="map-viw" href="#"><i class="fa fa-home"></i><b>Our Category</b>: {{$data->type }}:</a>
                                       <a href="https://{{$data->url}}" class="btn btn-primary" role="button">View More</a>                                          </div>
                                                  </div>
                                                 </div>
                                               </div>
                                        <div class="col-lg-5">                  
                                            <div class="hotel-pics-one">                                    
                                            <img src="{{URL::asset('/storage/uploads/'.$data->attachment) }}" alt="" style="height: 32vh !important;width:100%">        
                                            </div>                   

                                      </div>
                               </div>                           
                                </div>
                                </div>  
                                <hr>
                            @endforeach  
             
              </div>
          

            <div class="tab-pane fade" id="tab-E">                
       <div class="card booking-btn-gray">   
      <div class="card-header">
                                            <h5 class="m-0">Accommodation List : Inclusive and Not Inclusive</h5>           
                                              </div>                                 
                                                
           

                        <div class="card-body">
                       <div class="row ">
                                <div class="col-lg-7">
                                <div class="hotel-diss">
                
                               <div class="row">                   
                                <div class="col-md-6 col-lg-6 col-sm-12">                                   
                                  <div class="rating">                                                                      <h4>Not Inclusive</h4>                        
                                  </div>                                
   @foreach($inclusives as $inclusive)    
                                  <div class="form-check">
   <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled>
  <label class="form-check-label" for="flexCheckDisabled">
   {{ $inclusive->inclusive}}
  </label>
</div>
     @endforeach                              
    </div>                                                                                 
                                                  </div>
                                                 </div>
                                               </div>
                                        <div class="col-lg-5">  
                                            <div class="rating">    
                                                <h4>Inclusive</h4>                                                           

                                            </div>                                        @foreach($assignLists as $assignList)
                                    <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
   {{ $assignList->inclusive}}
  </label>
</div>  
@endforeach                  
                                                    
                                </div>
                               </div>                           
                                </div>
                                </div> 
             </div> 
             
            </div>
          </div>
    

                    </div>
                    </div>
                     {{-- End of tabs --}}
                    {{-- Tour Summury sidebar --}}
                    <div class="col-md-3 col-lg-3 masonry">
                        <div class="card">
                        <div class="card-body">
                            <div class="card booking-btn">
                            <div >
                                <h4 class="text-secondary booking-tourPadding"><b>Tour Summary</b></h4>
                            </div>                           
                            <div>Type: <b>{{ $programs->type }}</b></div>
                            <div>Style: <b>{{ $programs->style }}</b></div>
                            <div>Duration: <b>{{ $programs->days }} Days</b></div>
                            <div>Countries: <b>Tanzania</b> </div>
                            <div>Destinations:
                                @foreach($datas as $destnation)
                               <span class="text-primary " style="font-size: 12px; border-right:solid 1px #ddd; padding-right:2px"> {{ $destnation->destination_name }}</span>
                                @endforeach
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-8 text-center">  




 <form method="GET" action="{{ route('viewTripf',$programs->pin) }}" class="registration-form">
                    @csrf
<input type="hidden" name="_method" value="PUT">

                      <button type="submit" class="btn btn-success float-right" name="print" value="print">Pay Invoice</button>

</form>
                            </div>
                            </div>
                        <hr>
                            
                                <p class="text-center">
                               <h5 > List of Add-ons</h5>
                                </p>

                    </div>
{{-- End of tour summary sidebar --}}

                </div>
                <hr>
                <p class="text-center">
                <a class="btn btn-primary" href="{{ route('addons.index') }}">Print Invoice</a></p>
                </div>
                </div>
            </div>
        </div>
    </div>
    </section>


<div class="modal fade modal-book-now" id="bookNow" tabindex="-1" role="dialog" style="margin-top:50px;">
 
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
          </button>


          <!-- <h4 class="modal-title"><b>{{$programs->tour_name}}</b></h4> -->
        </div>
        <div class="modal-body">

          <div class="preview-wrap">
           
            <div class="form-wrap">
                <h4 id="heading">Booking Form:<span style="color:green">{{$programs->tour_name}}</span></h4>
                <!-- <form  method="post" id="post_form" action="{{ route('tourForm.store') }}"> -->
                

                <form id="msform"  method="post"  action="{{ route('tourForm.store') }}" class="registration-form">
                    @csrf
                   
               <!-- progressbar -->
                    <ul id="progressbar">
                      <li class="active" id="account"><strong>Step 1:</strong></li>
                        <li id="personal"><strong>Step 2:</strong></li>
                        <li id="payment"><strong>Step 3:</strong></li>
                        <li id="confirm"><strong>Finish</strong></li>
                    </ul>
                      <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                    </div> 
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="fs-title">Personal Details:| Step 1 - 4</h4>
                                </div>                                
                            </div> 
                           

 <div class="form-group">
                
                            
             <input type="hidden" class="form-control" name="tour_name" value="{{ $programs->tour_name }}">
            <input type="hidden" class="form-control" name="currency" value="{{ $programs->currency }}">
        </div>


                        <!--  <input type="text" name="first_name" placeholder="first name" /> 
                           <input type="text" name="last_name" placeholder="last name" /> 


 -->
           
             <div class="row form-group">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="first_name" placeholder="first name" /> 
                    
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                           <input type="text" name="last_name" placeholder="last name" /> 
                                    </div>
                                </div>
  </div>


                              <!-- <label class="fieldlabels">Phone: *</label> -->
                               <input type="text" name="phone" placeholder="Phone(+00 00 000 000)"/>                                 
                            <input type="email" name="email" placeholder="email"/> 

                             <input type="text" name="country" placeholder="Nationality" /> 

                        </div> 
                             <button type="button" class="close float-left" data-dismiss="modal" style="background-color:#b32121;padding: 8px 30px;">Close</button>
                        <input type="button" name="next" class="next action-button" value="Next" />
                    </fieldset>
                    <fieldset>

                            <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="fs-title">Tour Information:|Step 2 - 4</h4>
                                </div>
                             </div>

                       
             <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Travel Date:</label>
                                    <div class="form-group">
                                        <input type="date" name="travel_date" id="travel_date" class="form-control" placeholder="From" value="">
                    
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Adults (>16 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" name="adults" min="0" value="1">
                                    </div>
                                </div>
  </div>

                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Teens (12-14 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" name="teens" min="0" value="0">
                                    </div>
                                 </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <label for="">Children (5-12 yrs):</label>
                                    <div class="form-group">
                                        <input type="number" class="zt-control" name="children" min="0" value="0">
                                    </div>
                                 </div>
  </div>

<div class="row">
 <div class="col-md-12">
        <div class="form-group">
            <label for="">Tour type:</label>
                   <input type="hidden" class="form-control" placeholder=""  name="tour_id" value="{{$programs->program_id}}" readonly="true">
          <input type="text" class="form-control" placeholder=""  name="tour_type" value="{{$programs->category}}" readonly="true">
        </div>
    </div>

                                 </div>                    
            

                        </div> 

                             <button type="button" class="close float-left" data-dismiss="modal" style="background-color:#b32121;padding: 8px 30px;">Close</button>

                        <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                        <input type="button" name="next" class="next action-button float-right" value="Next" /> 
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="fs-title">Other Information:|Step 3 - 4</h4>                               
</div>


             
               <div class="col-md-6">
                           
                                   <label for="">Accommodation:</label>                                   
                                       <select class="form-control" name="accomodation">
                                            <option value="0">--Select Accomodation--</option>
                                            <option>Basic</option>
                                             <option>Comfort</option>
                                              <option>Deluxe</option>
                                               <option>Mix</option>
                                                <option>Not Sure</option>
                                           
                                        </select>
                                   
                                </div>                
    <div class="col-md-12">
                <div class="form-group">
                    <label for="">  Additional Information we should know?</label>

         <textarea class="form-control" id="" cols="2" rows="1" name="additional_information" placeholder="Type your additional information here..."></textarea>
        </div>
     </div>


     <div class="col-md-12">
        <div class="form-group">
            <label for=""> How did you hear about us?:</label>

       <div class="form-group">
           <label for="facebook">Facebook
          <input id="facebook" type="checkbox" class="zt-control"  name="hear[]" value="Facebook">
        </label>
        <label for="instagram">Instagram
          <input id="instagram" type="checkbox" class="zt-control"  name="hear[]" value="Instagram">
        </label>
          <label for="google">Google
          <input id="google" type="checkbox" class="zt-control"  name="hear[]" value="Google">
        </label>
          <label for="mouth">Word of Mouth
          <input  id="mouth" type="checkbox" class="zt-control"  name="hear[]" value="Word of Mouth">
        </label>
        </div>
        </div>
  </div>

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <label for=""> Other Media:</label>
           <input type="text" class="form-control" name="hear_about_us">
        </div>
        </div> 
                                </div>
                          </div> 
                             
                                           
                        <button type="button" class="close float-left" data-dismiss="modal" style="background-color:#b32121;padding: 8px 30px;">Close</button>
                         <input type="button" name="previous" class="previous action-button-previous float-left" value="Previous" />
                           <button type="submit" class="btn btn-success float-right btn-submit" style="padding: 8px 30px;">Submit</button>
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="fs-title">Finish:| Step 4 - 4</h4>
                                </div>
                            </div> <br>
                            <h2 class="purple-text text-center"><strong>Success!</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">You Have Successfully submitted</h5>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                        
                </form>
            </div>
        </div>   
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $('#msform').submit(function(e) {
        e.preventDefault();
       
       
        var url = $(this).attr("action");
        let formData = new FormData(this);
        // document.getElementById('waiting').innerText="Please wait ............";
          $(".btn-submit").prepend('<i class="fa fa-spinner fa-spin"></i>');
        $(".btn-submit").attr("disabled", 'disabled');


        $.ajax({
                type:'POST',
                url: url,
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                  //  alert('Form submitted successfully');
                      $(".btn-submit").find(".fa-spinner").remove();
                     $(".btn-submit").removeAttr("disabled");
                      //alert(base_url);
                    
                    $("#msform").trigger("reset");
                    // url: APP_URL + "/save_favorite",
                    //$('#bookNow form :input').val("");
                        // $(this).find('form').trigger('reset');

                     //location.replace(url + "/login")
                   
                   // window.location = response.url;
                   location.reload();
                   window.location = response.url;
                },
                error: function(response){
                    $('#msform').find(".print-error-msg").find("ul").html('');
                    $('#msform').find(".print-error-msg").css('display','block');
                    $.each( response.responseJSON.errors, function( key, value ) {
                        $('#msform').find(".print-error-msg").find("ul").append('<li>'+value+'</li>');

                    });

                    $(".btn-submit").find(".fa-spinner").remove();
                $(".btn-submit").removeAttr("disabled");
                }
        });      
    });
    
</script>

   
    <script type="text/javascript">        
        $(document).ready(function () {
    $('.msform fieldset:first-child').fadeIn('slow');

    $('.registration-form input[type="text"]').on('focus', function () {
        $(this).removeClass('input-error');
    });

    // next step
    $('.registration-form .btn-next').on('click', function () {
        var parent_fieldset = $(this).parents('fieldset');
        var next_step = true;

        parent_fieldset.find('input[type="text"],input[type="emailx"]').each(function () {
            if ($(this).val() == "") {
                $(this).addClass('input-error');
                next_step = false;
            } else {
                $(this).removeClass('input-error');
            }
        });

        if (next_step) {
            parent_fieldset.fadeOut(400, function () {
                $(this).next().fadeIn();
            });
        }

    });

    // previous step
    $('.registration-form .btn-previous').on('click', function () {
        $(this).parents('fieldset').fadeOut(400, function () {
            $(this).prev().fadeIn();
        });
    });

    // submit
    $('.registration-form').on('submit', function (e) {

        $(this).find('input[type="text"],input[type="emailx"]').each(function () {
            if ($(this).val() == "") {
                e.preventDefault();
                $(this).addClass('input-error');
            } else {
                $(this).removeClass('input-error');
            }
        });

    });
   
});
    </script>



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


<script type="text/javascript" src="../../../js/jquery321.min.js"></script>
<script type="text/javascript" src="../../../js/bootstrap431.bundle.min.js"></script>



<script type="text/javascript">    
$(document).ready(function(){
var current_fs, next_fs, previous_fs; //fieldsets
var opacity;
var current = 1;
var steps = $("fieldset").length;

setProgressBar(current);
$(".next").click(function(){

current_fs = $(this).parent();
next_fs = $(this).parent().next();

//Add Class Active
$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

//show the next fieldset
next_fs.show();
//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
next_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(++current);
});

$(".previous").click(function(){

current_fs = $(this).parent();
previous_fs = $(this).parent().prev();

//Remove class active
$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

//show the previous fieldset
previous_fs.show();

//hide the current fieldset with style
current_fs.animate({opacity: 0}, {
step: function(now) {
// for making fielset appear animation
opacity = 1 - now;

current_fs.css({
'display': 'none',
'position': 'relative'
});
previous_fs.css({'opacity': opacity});
},
duration: 500
});
setProgressBar(--current);
});

function setProgressBar(curStep){
var percent = parseFloat(100 / steps) * curStep;
percent = percent.toFixed();
$(".progress-bar")
.css("width",percent+"%")
}

$(".submit").click(function(){
return false;
})

});
</script>
@endsection