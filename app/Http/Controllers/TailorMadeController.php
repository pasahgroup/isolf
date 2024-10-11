<?php

namespace App\Http\Controllers;

use App\Models\accommodation;
use App\Models\destination;
use App\Models\tailorMade;
use App\Models\attachment;
use App\Models\invoice;
use App\Models\Tourcostsummary;

use App\Models\program;
use App\Models\TourEquiryForm;
use App\Models\tourEquerySocialMedia;
use App\Models\socialmedia;
use App\Models\itinerary;
use App\Models\itinerary_day;
use App\Models\accommodationInclusive;
use App\Models\people_percent;
use App\Models\specialOffer;

use App\Models\departures;
use App\Models\buyaddons;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TailorMadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = tailorMade::where('status','Active')
        ->orderby('id','desc')
        ->get();
        //dd($datas);
        return view('admins.tailorMade.tailorMade',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function statusUpdate(Request $request,$id)
    {

 $status=tailorMade::where('id',$id)
 ->first();

if($status->status=="Active")
{
$status="Inactive";
}
else
{
$status="Active";
}

        $contacts = tailorMade::where('id',$id)
               ->update([
                'status'=>$status
              ]);
         return redirect()->route('tailorMade.index')->with('success','Successful updated!');
  }

      public function editTailor($id)
    {
        $tour_addon='tailor_made';
         $tailorMades = tailorMade::where('id',$id)
         ->first();

        $tourTypes = program::get(); 
       // dd($tourTypes);             
       return view('admins.tailorMade.addEdit',compact('tailorMades','tour_addon','id','tourTypes'));
     }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

 $validator = Validator::make($request->all(), [
        'first_name' => 'required|string|max:255',
         'last_name' => 'required|string|max:255',
        // 'email' => 'required|email|unique:users',
         'email' => 'required|email',
        'arrival_date' => 'required|Date',
        'days' => 'required|integer',

        'min_budget' => 'required|numeric',

        // 'password' => 'required|min:8',
    ]);
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }else
    {

     $hear_from = request('hear');
     
     $pin=rand(11111111, 99999999);

     $days=request('days');  
      $start_date=request('arrival_date');
     $start_datef=date('Y-m-d', strtotime($start_date));
       $end_date=date('Y-m-d', strtotime($start_date. ' + '.$days.' days'));

        $tailorMadeSummary = tailorMade::UpdateOrCreate([
        'first_name'=>request('first_name'),
        'last_name'=>request('last_name'),
        'nationality'=>request('nationality'),
        'email'=>request('email'),
        'phone'=>request('phone'),
        'arrival_date'=>$start_datef,
           'adults'=>request('adults'),
           'teens'=>request('teens'),
            'children'=>request('children'),
        'days'=>request('days'),
        'tour_type'=>request('tour_type'),
        'destination'=>request('destination'),
        'accommodation'=>request('accomodation'),    
       
        'min_budget'=>request('min_budget'),
        'max_budget'=>request('max_budget'),
        'end_date'=>$end_date,

         'pin'=>$pin,
          'status'=>'Active',
       'other_information'=>request('additional_information'),
        'hear_about_us'=>request('hear_about_us'),
        ]);
          
         //dd($hear_from); 
         if($hear_from !=null){
        foreach ($hear_from as $hears) {
        $tourhearfrom = tourEquerySocialMedia::create([
        'tour_equery_id'=>$tailorMadeSummary->id,
        'social_name'=>$hears,
        'from_name'=>'tailor_made'
        
        ]);
         }   
        }

        //Install into invoices
         $tourcostsummary = invoice::UpdateOrCreate([
        'customer_id'=>$tailorMadeSummary->id,
        'tour_id'=>0,
        'unit_price'=>0.00,
        'children_cost'=>0.00,
        'teens_cost'=>0.00,
        'adults_cost'=>0.00,
        'total_price'=>0.00,
        'addon_price'=>0.00,
         'total_addon_price'=>0.00,
         'total_discount'=>0.00,
         'total_cost'=>0.00,
        'currency'=>"USD"
        ]);

}
//Send PIN to customer Email
    return redirect()->back()->with('success','SuccessfulSubmitted');
    }

 public function tailorForm()
    {
      $socialmedia = socialmedia::get();
       $tailorMades = tailorMade::get();
         $programs = program::get();

       //dd($tailorMades);
      
         return view('website.tailorMade.tailorEnquiryForm_new',compact('tailorMades','socialmedia','programs'));
       // return view('website.tailorMade.tailorEnquiryForm',compact('tailorMades','socialmedia'));
    }

     public function tailorClientForm()
    {
       $socialmedia = socialmedia::get();
       $tailorMades = tailorMade::get();
       // tailorEnquiryForm
       return view('website.tailorMade.tailorClientForm',compact('tailorMades','socialmedia'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tailorMade  $tailorMade
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        //dd('eee');

        $tour_addon='tailor_made';
        $programs = tailorMade::join('itineraries','itineraries.program_id','tailor_mades.id')
        ->where('itineraries.tour_addon','tailor_made')
        ->where('tailor_mades.id',$id)->first();
      //dd($programs);

        $datas = itinerary::join('itinerary_days','itineraries.id','itinerary_days.itinerary_id')
        ->join('accommodations','accommodations.id','itinerary_days.accommodation_id')
        ->join('destinations','destinations.id','itinerary_days.destination_id')
        ->join('tailor_mades','tailor_mades.id','itineraries.program_id')
        ->orderby('itinerary_days.id','ASC')
        ->where('itineraries.program_id',$id)
        ->select('accommodations.accommodation_name','destinations.destination_name','itineraries.*','tailor_mades.first_name','tailor_mades.last_name','itinerary_days.*')
        ->get();

         if($datas == "[]"){
            $programs = tailorMade::where('id',$id)->first();
            $accommodations = accommodation::get();
            $destinations = destination::get();
             //dd($id);
            return view('admins.tailorMade.add',compact('programs','accommodations','destinations','tour_addon'));
        };

        return view('admins.itinerary.index',compact('datas','id','tour_addon'));
    }


    public function attachmentTailorMade(Request $request,$id)
    {
        $tour_addon='tailor_made';
        $tailorTours = program::get();
        //dd($id);
  //dd(request('attachment'));

        $programs = tailorMade::join('itineraries','itineraries.program_id','tailor_mades.id')
        ->where('itineraries.tour_addon','tailor_made')
        ->where('tailor_mades.id',$id)->first();

      
        $datas = itinerary::join('itinerary_days','itineraries.id','itinerary_days.itinerary_id')
        ->join('accommodations','accommodations.id','itinerary_days.accommodation_id')
        ->join('destinations','destinations.id','itinerary_days.destination_id')
        ->join('tailor_mades','tailor_mades.id','itineraries.program_id')
        ->orderby('itinerary_days.id','ASC')
         ->where('itineraries.tour_addon','tailor_made')
        ->where('itineraries.program_id',$id)
        ->select('accommodations.accommodation_name','destinations.destination_name','itineraries.*','tailor_mades.first_name','tailor_mades.last_name','itinerary_days.*')
          ->get();
//dd($datas);

         if($datas == "[]"){
        $routes = tailorMade::where('id',$id)->first();
            $accommodations = accommodation::get();
            $destinations = destination::get();
             //dd($id);
            return view('admins.tailorMade.add',compact('routes','accommodations','destinations','tour_addon','tailorTours'));
        };

            return view('admins.itinerary.index',compact('datas','id','tour_addon','programs','tailorTours'));
    }
    


 public function storeTailorMade(Request $request,$id)
    {       
      $toupdate = tailorMade::where('id',$id)->update([
            'calculated_cost'=>request('price'),
            'currency'=>request('currency'),
            'physical_rating'=>request('physical_rating')
        ]);

              $main_itinerary = itinerary::create(            [
                'itinerary_summury'=>request('itinerary_summury'),
                'days'=>request('days'),
                'program_id'=>request('customer_id'),
                 'tour_addon'=>request('tour_addon'),
                'user_id'=>request('user_id')
            ]);

            $title = request('itinerary_title');
            $day = request('day');
            $description = request('itinerary_description');
            $destination = request('destination_id');
            $accommodation = request('accommodation_id');
          
             $distance = request('distance');
              $transport = request('transport');
               $meal = request('meal');

        foreach($day as $key => $day){
                $input['day']=$day;
                $input['itinerary_id']=$main_itinerary->id;
                $input['itinerary_title']=$title[$key];
                $input['itinerary_description']=$description[$key];

                  $input['distance']=$distance[$key];
                  $input['transport']=$transport[$key];
                   $input['meal']=$meal[$key];

                $input['destination_id']=$destination[$key];
                $input['accommodation_id']=$accommodation[$key];

                $day_itinerary = itinerary_day::UpdateOrCreate($input);
    }
    //Update invoice table


$tour_date=request('tour_date'); 
         $yearM =date('Y-m-d', strtotime($tour_date)); 
       
// Travel date
           $travel_date=request('travel_date'); 
         $travel_date =date('Y-m-d', strtotime($travel_date)); 
         
        
          $departurePrice=departures::where('tour_id',request('tour_id'))
          ->where('status','Active')
          ->where('start_date',$yearM)
           ->first();
           if($departurePrice !=null)
           {
           $dapart_id=$departurePrice->id;
           $pricef=$departurePrice->price;
            }
            else{
                 $pricef=request('unit_price');
                 $dapart_id=0;
            } 


    if(request('discount_price')==null)
           {
          
             $discount_pricef=specialOffer::where('tour_id',request('tour_id'))
             ->where('status','Active')
             ->first();

          if($discount_pricef==null)
             {
                $discount_pricef=0;
             }else{

             $discount_pricef=$discount_pricef->discount;
             }
            
           }

$adult=people_percent::where('percent_name','Adults')->first();
$teen=people_percent::where('percent_name','Teens')->first();
$children=people_percent::where('percent_name','children')->first();

$tailorMade=tailorMade::where('id',$id)->first();
//dd($id);

$adult_p=$adult->percent/100;
$teen_p=$teen->percent/100;
$children_p=$children->percent/100;

if($adult_p<=0.00)
{
    $adult_p=1;
}

if($teen_p<=0.00)
{
    $teen_p=0.75;
}

if($children_p<=0.00)
{
    $children_p=0.4;
}


        $tour_name=request('tour_name');
        $acc=request('accomodation');
        $adults=$tailorMade->adults;
         $childrens=$tailorMade->children;
          $teens=$tailorMade->teens;

        $addon_price=request('addon');
        $unit_price=request('price');
        //dd($unit_price);

      $Tourcostsummary = Tourcostsummary::
        where('program',$tour_name)
         ->select('tourcostsummaries.*')
        ->where('status',$acc)
        ->get();



//dd(request('children'));

         if($Tourcostsummary == "[]"){   
         // $unit_price=$pricef;     
            $teens_cost=($unit_price * $teen_p)*$teens;          
            $children_cost=($unit_price * $children_p)*$childrens;  
             //Total discount
           $total_discount=$discount_pricef*$adults + $discount_pricef*$teen_p*$teens + $discount_pricef*$children_p*$teens;
          
       //dd($children_cost);
            $total_price=($unit_price * $adults)+$teens_cost + $children_cost;
         // dd($total_price);
            $total_addon_price=($addon_price*$teen_p)*$teens + ($addon_price * $adults+($addon_price*$children_p)*$childrens);
            
            $total_cost=$total_price + $total_addon_price - $total_discount;
         }
         else
         {
            //Extraction Cost Summary values from Array List
    foreach($Tourcostsummary as $costsummary){
        }

            if($adults==2)
            {
                $unit_price=$costsummary->twopax;                        
             }
            elseif ($adults==3)
            {
              $unit_price=$costsummary->threepax;
            
            }elseif ($adults==4)
             {
              $unit_price=$costsummary->fourpax;
            }elseif ($adults==5) {
             $unit_price=$costsummary->fivepax;
            }elseif ($adults==6) {
            $unit_price=$costsummary->sixpax;
            }
            else
            {
             $unit_price=$costsummary->sixpax;
            }
         

            $teens_cost=($unit_price * $teen_p)*$teens;          
            $children_cost=($unit_price * $children_p)*$childrens;   
            $total_discount=$discount_pricef*$adults + $discount_pricef*$teen_p*request('teens') + $discount_pricef*$children_p*$teens;

            $total_price=($unit_price * $adults)+$teens_cost + $children_cost;
   
            $total_addon_price=($addon_price*$teen_p)*$teens + ($addon_price * $adults+($addon_price*$children_p)*$childrens);
            
            $total_cost=$total_price + $total_addon_price -  $total_discount;
         }
$adults_cost=$unit_price * $adults;

//dd($children_cost);
           
      $toupdate = invoice::where('customer_id',$id)->update([
        //'customer_id'=>$tour_costsummary->id,
        'tour_id'=>request('tour_name'),

'adults_percent'=>$adult->percent,
'teens_percent'=>$teen->percent,
'children_percent'=>$children->percent,

        'unit_price'=> $unit_price,
        'children_cost'=> $children_cost,
        'teens_cost'=> $teens_cost,
        'adults_cost'=> $adults_cost,
        'total_price'=>$total_price,
        'addon_price'=>$addon_price,
         'total_addon_price'=>$total_addon_price,
         'total_discount'=> $total_discount,
         'total_cost'=>$total_cost,
        'currency'=>request('currency')
        ]);

     //End of updating invoice table

        if(request('attachment')){
                $attach = request('attachment');
                foreach($attach as $attached){

                     // Get filename with extension
                     $fileNameWithExt = $attached->getClientOriginalName();
                     // Just Filename
                     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                     // Get just Extension
                     $extension = $attached->getClientOriginalExtension();
                     //Filename to store
                     $imageToStore = $filename.'_'.time().'.'.$extension;
                     //upload the image
                     $path = $attached->storeAs('public/tailorMade/', $imageToStore);

             $toUpdate = tailorMade::where('id',$id)->update([
                'attachment'=>$imageToStore
                ]
                );
        }
    }


        return redirect()->back()->with('success','Itinerary created successful');
    }



     public function clientTailorMade(Request $request)    {

              //Verify if the pin exists
          $pin=request('pin');
         // dd($pin);
          $tailorMades = tailorMade::
            where('tailor_mades.pin',$pin)
          ->where('tailor_mades.status','Active')->first();        
           if($tailorMades==null)
           {
            return 'Enter your PIN No Or Your PIN No is Expired Or Not Exists';
           }
           else
           {
            $id=$tailorMades->id;
           }
           
           $tour_addon='tailor_made';          
           $programs = tailorMade::join('itineraries','itineraries.program_id','tailor_mades.id')
            //->join('attachments','attachments.destination_id','tailor_mades.id')        
          ->where('itineraries.tour_addon','tailor_made')
          // ->where('attachments.type','tailor_made')
          ->where('tailor_mades.id',$id)->first();

      
           if($programs ==null){
              $programs = tailorMade::
              where('tailor_mades.id',$id)->first();
              }

        $datas = itinerary_day::join('itineraries','itineraries.id','itinerary_days.itinerary_id')
        ->join('accommodations','accommodations.id','itinerary_days.accommodation_id')    

        ->join('destinations','destinations.id','itinerary_days.destination_id') 
         ->join('tailor_mades','tailor_mades.id','itineraries.program_id')
                  
         ->join('attachments','attachments.destination_id','accommodations.id') 
          ->where('itineraries.tour_addon','tailor_made')
          ->where('itineraries.program_id',$id)          
          ->where('attachments.type','Accommodation')
          ->where('tailor_mades.id',$id)
       
         ->orderby('itinerary_days.id','ASC')
        
         ->select('accommodations.accommodation_name','accommodations.accommodation_descriptions','attachments.attachment','accommodations.category','destinations.destination_name','itineraries.*','tailor_mades.first_name','tailor_mades.last_name','itinerary_days.*')
           ->get();
    

         if($datas == "[]"){          
            $destinations = destination::get();
            return ($programs->full_name.' Ops your tailor made still on Progess....');
          };

        $basic=tailorMade::join('attachments','attachments.destination_id','tailor_mades.id')
        ->get();
         
         $inclusives=DB::select("select id,inclusive from inclusives  where id not in(select (inclusive_id)id from accommodation_inclusives where tour_id =$id)");
        
           $assignLists = accommodationInclusive::join('inclusives','accommodation_inclusives.inclusive_id','inclusives.id')
        ->where('accommodation_inclusives.tour_id',$id)->get();
//dd($programs);
        return view('website.tailorMade.tailorMadeSummary',compact('datas','id','programs','basic','inclusives','assignLists'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tailorMade  $tailorMade
     * @return \Illuminate\Http\Response
     */
    public function edit(tailorMade $tailorMade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tailorMade  $tailorMade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $id=request('id');
//dd($id);
 $pin=rand(11111111, 99999999);

     $days=request('days');  
      $start_date=request('arrival_date');
     $start_datef=date('Y-m-d', strtotime($start_date));
       $end_date=date('Y-m-d', strtotime($start_date. ' + '.$days.' days'));

     $toupdate = tailorMade::where('id',$id)->update([
        'first_name'=>request('first_name'),
        'last_name'=>request('last_name'),
        'nationality'=>request('nationality'),
        'email'=>request('email'),
        'phone'=>request('phone'),

        'arrival_date'=>$start_datef,
           'adults'=>request('adults'),
           'teens'=>request('teens'),
            'children'=>request('children'),
        'days'=>request('days'),
        'tour_type'=>request('tour_type'),
        'destination'=>request('destination'),
        'accommodation'=>request('accomodation'),    
       
        'min_budget'=>request('min_budget'),
        'max_budget'=>request('max_budget'),
        'end_date'=>$end_date,

         // 'pin'=>$pin,
         'status'=>'Active',
       'other_information'=>request('additional_information')
          ]);

  //Update image
   if(request('attachment')){
    //dd(request('attachment'));

                $attach = request('attachment');
                //dd($attach);
                foreach($attach as $attached){

                     // Get filename with extension
                     $fileNameWithExt = $attached->getClientOriginalName();
                     // Just Filename
                     $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                     // Get just Extension
                     $extension = $attached->getClientOriginalExtension();
                     //Filename to store
                     $imageToStore = $filename.'_'.time().'.'.$extension;
                     //upload the image
                     $path = $attached->storeAs('public/tailorMade/', $imageToStore);
            
             $toUpdate = tailorMade::where('id',$id)->update([
                'attachment'=>$imageToStore
                ]
                );
        }
    }


  //End of Image

                return redirect()->route('tailorMade.index')->with('success','Widget update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tailorMade  $tailorMade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {       
        $delete = tailorMade::where('id',$id)->first();
        if($delete->delete()){           
               DB::statement("delete from attachments where destination_id=$id and type='tailor_made'");
            return redirect()->route('tailorMade.index')->with('success','tailor made removed successfully');
        }    
        else{
            return redirect('/')->route('/tailorMade')->with('error','Widget not exists');
        }
    }
}
