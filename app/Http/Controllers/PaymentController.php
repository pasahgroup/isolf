<?php

namespace App\Http\Controllers;

use App\Models\payment;
use App\Models\Tour;
use App\Models\accommodation;
use App\Models\addons;
use App\Models\attachment;
use App\Models\destination;
use App\Models\itinerary;
use App\Models\program;
use App\Models\popularExperience;
use App\Models\specialOffer;
use App\Models\slider;
use App\Models\people_percent;
use App\Models\bank;

use App\Models\Tourcostsummary;
use App\Models\buyaddons;
use App\Models\socialmedia;
use App\Models\departures;
use App\Models\invoice;
use App\Models\tailorMade;
use App\Models\TourEquiryForm;
use App\Models\accommodationInclusive;

use Illuminate\Http\Request;
use DB;
    include_once(app_path().'/pesapal/oauth.php');
       // include_once(app_path().'/pesapal/pesapal-iframe.php');   

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // include(app_path().'/includes/config.php');
      // include_once(app_path().'/pesapal/oauth.php');
      // include(app_path().'/pesapal/pesapal-iframe.php');   

    public function index()
    {
        //
    }

  
 public function pgtm($cust_id)
    {      

//dd($cust_id);
      //Get customer details

        $cust=invoice::join('tailor_mades','tailor_mades.id','invoices.customer_id')
        ->where('invoices.customer_id',$cust_id)
        ->select('invoices.*','tailor_mades.children','tailor_mades.teens','tailor_mades.adults','tailor_mades.pin','tailor_mades.first_name','tailor_mades.last_name','tailor_mades.email','tailor_mades.phone')->first();
     

        $id=$cust_id; 
        //dd($cust);

         $discounts=specialOffer::where('tour_id',$id)->first();
         $tourInvoice=invoice::where('tour_id',$id)->first();
         $tourInvoice=invoice::where('tour_id',$id)->first();


        $tour_addon='Programs';
        // $programs = tailorMade::
        //    join('itineraries','itineraries.program_id','programs.id')
        //  ->join('attachments','programs.id','attachments.destination_id')
        // ->join('invoices','programs.id','invoices.tour_id')
        //  ->where('attachments.type','tailor_made')
        //  ->where('itineraries.tour_addon','tailor_made')
        //  ->where('invoices.customer_id',$cust->customer_id)
        //  ->where('programs.id',$id) ->first();


 $programs = tailorMade::join('itineraries','itineraries.program_id','tailor_mades.id')
        ->where('itineraries.tour_addon','tailor_made')
        ->where('tailor_mades.id',$id)->first();



//dd($programs);

       // $datas_org = itinerary::join('itinerary_days','itineraries.id','itinerary_days.itinerary_id')
       //  ->join('accommodations','accommodations.id','itinerary_days.accommodation_id')
       //  ->join('destinations','destinations.id','itinerary_days.destination_id')
       //  ->join('programs','programs.id','itineraries.program_id')
       //  ->join('attachments','accommodations.id','attachments.destination_id')
        
       //  ->orderby('itinerary_days.id','ASC')
       //  ->where('itineraries.tour_addon','tailor_made')
       //  ->where('itineraries.program_id',$id)
       //  ->where('attachments.type','Accommodation')
       //  ->select('accommodations.accommodation_name','accommodations.accommodation_descriptions','accommodations.category',
       //  'destinations.destination_name','itineraries.*','programs.tour_name','itinerary_days.*','attachments.attachment')
       //  ->get();

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
            $programs = program::where('id',$id)->first();
            $accommodations = accommodation::get();
            $destinations = destination::get();
            return view('admins.itinerary.add',compact('programs','accommodations','destinations','tour_addon'));
        };
       
       $basic = Tourcostsummary::
       where('status','Basic')
       ->get();
        $comfort = Tourcostsummary::
       where('status','Comfort')
       ->get();
        $luxury = Tourcostsummary::
       where('status','Deluxe')
       ->get();

 $peoplePercents=people_percent::get();
 //dd($peoplePercents);

 $inclusives=DB::select("select id,inclusive from inclusives  where id not in(select (inclusive_id)id from accommodation_inclusives where tour_id =$id)");

   $assignLists = accommodationInclusive::join('inclusives','accommodation_inclusives.inclusive_id','inclusives.id')
        ->where('accommodation_inclusives.tour_id',$id)->get();

$basicCount=DB::select("select * from(select count(d.start_date)date_count,DATE_FORMAT(d.start_date,'%m-%Y')datef from departures d,programs p,attachments a where d.tour_id=p.id and a.destination_id=p.id and d.status='Active' and a.type='Programs' and d.tour_id=$id group by datef)as tmp_table order by DATE_FORMAT(datef,'%m-%Y')");

        return view('website.payments.privatePaySummary',compact('datas','basicCount','inclusives','cust','assignLists','id','programs','basic','comfort','luxury','discounts','tourInvoice','peoplePercents'));
    }



  public function pg($cust_id)
    {      

      //Get customer details

        $cust=invoice::join('tour_equiry_forms','tour_equiry_forms.id','invoices.customer_id')
        ->where('invoices.customer_id',$cust_id)
        ->select('invoices.*','tour_equiry_forms.children','tour_equiry_forms.teens','tour_equiry_forms.adults','tour_equiry_forms.pin','tour_equiry_forms.first_name','tour_equiry_forms.last_name','tour_equiry_forms.email','tour_equiry_forms.phone')->first();
     

        $id=$cust->tour_id; 

         $discounts=specialOffer::where('tour_id',$id)->first();
         $tourInvoice=invoice::where('tour_id',$id)->first();
         $tourInvoice=invoice::where('tour_id',$id)->first();


        $tour_addon='Programs';
        $programs = program::
           join('itineraries','itineraries.program_id','programs.id')
         ->join('attachments','programs.id','attachments.destination_id')
        ->join('invoices','programs.id','invoices.tour_id')
         ->where('attachments.type','Programs')
         ->where('itineraries.tour_addon','programs')
         ->where('invoices.customer_id',$cust->customer_id)
         ->where('programs.id',$id) ->first();
//dd($cust);

       $datas = itinerary::join('itinerary_days','itineraries.id','itinerary_days.itinerary_id')
        ->join('accommodations','accommodations.id','itinerary_days.accommodation_id')
        ->join('destinations','destinations.id','itinerary_days.destination_id')
        ->join('programs','programs.id','itineraries.program_id')
        ->join('attachments','accommodations.id','attachments.destination_id')
        
        ->orderby('itinerary_days.id','ASC')
        ->where('itineraries.tour_addon','programs')
        ->where('itineraries.program_id',$id)
        ->where('attachments.type','Accommodation')
        ->select('accommodations.accommodation_name','accommodations.accommodation_descriptions','accommodations.category',
        'destinations.destination_name','itineraries.*','programs.tour_name','itinerary_days.*','attachments.attachment')
        ->get();

         if($datas == "[]"){
            $programs = program::where('id',$id)->first();
            $accommodations = accommodation::get();
            $destinations = destination::get();
            return view('admins.itinerary.add',compact('programs','accommodations','destinations','tour_addon'));
        };
       
       $basic = Tourcostsummary::
       where('status','Basic')
       ->get();
        $comfort = Tourcostsummary::
       where('status','Comfort')
       ->get();
        $luxury = Tourcostsummary::
       where('status','Deluxe')
       ->get();

 $peoplePercents=people_percent::get();
 //dd($peoplePercents);

 $inclusives=DB::select("select id,inclusive from inclusives  where id not in(select (inclusive_id)id from accommodation_inclusives where tour_id =$id)");

   $assignLists = accommodationInclusive::join('inclusives','accommodation_inclusives.inclusive_id','inclusives.id')
        ->where('accommodation_inclusives.tour_id',$id)->get();

$basicCount=DB::select("select * from(select count(d.start_date)date_count,DATE_FORMAT(d.start_date,'%m-%Y')datef from departures d,programs p,attachments a where d.tour_id=p.id and a.destination_id=p.id and d.status='Active' and a.type='Programs' and d.tour_id=$id group by datef)as tmp_table order by DATE_FORMAT(datef,'%m-%Y')");

        return view('website.payments.privatePaySummary',compact('datas','basicCount','inclusives','cust','assignLists','id','programs','basic','comfort','luxury','discounts','tourInvoice','peoplePercents'));
    }


    public function payConfirm(Request $request,$id)
    {   

$amount = preg_replace("/[^0-9\.]/", "",request('amount'));
$amount_percent=request('percent_downpayment')*request('total_cost');


if($amount<$amount_percent)
{
 return redirect()->back()->with('error','Down Payment must not below 30% of total booking costs.');
}

// Fetching JSON
$req_url = 'https://api.exchangerate-api.com/v4/latest/USD';
$response_json = file_get_contents($req_url);

//dd($response_json);
// Continuing if we got a result
if(false !== $response_json) {


//dd(request('amount'));
    // Try/catch for json_decode operation
    try {
    // Decoding
    $response_object = json_decode($response_json);
$first_name=request('first_name');
$last_name=request('last_name');
$desc=request('desc');
$email=request('email');
$phone=request('phone');

$type=request('type');
$amount=$amount;
$currency=request('currency');
$status=1;

 // dd($amount);

// dd(number_format($amount, 2));
    // YOUR APPLICATION CODE HERE, e.g.
    //$base_price =$amount; // Your price in USD
    $amount = (float)$amount;

$base_price=($response_object->rates->TZS/$response_object->rates->$currency);

 // $defaultCurrency2=($response_object->rates->$currency);
    $to_bepaid = round(($amount * $base_price), 2);
     //dd($to_bepaid);
    
    }
    catch(Exception $e) {
        // Handle JSON parse error...
    }
}
 
 //return response()->json(['url' => redirect('https://payments.pesapal.com/palatialtours',compact(['first_name','status']));
//return redirect('https://payments.pesapal.com/palatialtours',compact('status'));

return view('website.pesapal.pesapal',compact('first_name','last_name','currency','to_bepaid','desc','email','phone','type'));  
    

    }


      public function payInvoice($cust_id)
    {      

      //Get customer details
      //dd('ping');

        $cust=invoice::  join('tour_equiry_forms','tour_equiry_forms.id','invoices.customer_id')
        ->where('invoices.customer_id',$cust_id)
        ->select('invoices.*','tour_equiry_forms.children','tour_equiry_forms.teens','tour_equiry_forms.adults','tour_equiry_forms.pin')->first();
       // dd($cust);
        $id=$cust->tour_id;   

         $discounts=specialOffer::where('tour_id',$id)->first();
         $tourInvoice=invoice::where('tour_id',$id)->first();

        $tour_addon='Programs';
        $programs = program::
           join('itineraries','itineraries.program_id','programs.id')
         ->join('attachments','programs.id','attachments.destination_id')
        ->join('invoices','programs.id','invoices.tour_id')
         ->where('attachments.type','Programs')
         ->where('itineraries.tour_addon','programs')
         ->where('invoices.customer_id',$cust->customer_id)
         ->where('programs.id',$id) ->first();


       $datas = itinerary::join('itinerary_days','itineraries.id','itinerary_days.itinerary_id')
        ->join('accommodations','accommodations.id','itinerary_days.accommodation_id')
        ->join('destinations','destinations.id','itinerary_days.destination_id')
        ->join('programs','programs.id','itineraries.program_id')
        ->join('attachments','accommodations.id','attachments.destination_id')
        
        ->orderby('itinerary_days.id','ASC')
        ->where('itineraries.tour_addon','programs')
        ->where('itineraries.program_id',$id)
        ->where('attachments.type','Accommodation')
        ->select('accommodations.accommodation_name','accommodations.accommodation_descriptions','accommodations.category',
        'destinations.destination_name','itineraries.*','programs.tour_name','itinerary_days.*','attachments.attachment')
        ->get();

         if($datas == "[]"){
            $programs = program::where('id',$id)->first();
            $accommodations = accommodation::get();
            $destinations = destination::get();
            return view('admins.itinerary.add',compact('programs','accommodations','destinations','tour_addon'));
        };
       
       $basic = Tourcostsummary::
       where('status','Basic')
       ->get();
        $comfort = Tourcostsummary::
       where('status','Comfort')
       ->get();
        $luxury = Tourcostsummary::
       where('status','Deluxe')
       ->get();


  $banks = bank::
       where('status','Active')
       ->get();

 $inclusives=DB::select("select id,inclusive from inclusives  where id not in(select (inclusive_id)id from accommodation_inclusives where tour_id =$id)");

   $assignLists = accommodationInclusive::join('inclusives','accommodation_inclusives.inclusive_id','inclusives.id')
        ->where('accommodation_inclusives.tour_id',$id)->get();

$basicCount=DB::select("select * from(select count(d.start_date)date_count,DATE_FORMAT(d.start_date,'%m-%Y')datef from departures d,programs p,attachments a where d.tour_id=p.id and a.destination_id=p.id and d.status='Active' and a.type='Programs' and d.tour_id=$id group by datef)as tmp_table order by DATE_FORMAT(datef,'%m-%Y')");

        return view('website.payments.payInvoice',compact('datas','banks','basicCount','inclusives','cust','assignLists','id','programs','basic','comfort','luxury','discounts','tourInvoice'));
    }


    public function groupTourSumary($id)
    {
       $cust_id=$id;
       $cust=invoice::where('customer_id',$cust_id)->first();
     
        if($cust==null)
        {
            return redirect()->back()->with('info','Tour ID is null ...! Trace 2 Payment controller');

        }
        else{
               $id=$cust->tour_id;  
 if($id==0)
        {
            return redirect()->back()->with('info','Tour ID is 0 ...! Trace  Payment controller');

        }

        }


          $discounts=specialOffer::where('tour_id',$id)->first();
             $tourInvoice=invoice::where('tour_id',$id)->first();

          $tour_addon='Programs';
           $programs = program::
           join('itineraries','itineraries.program_id','programs.id')
           ->join('attachments','attachments.destination_id','programs.id')
         ->join('invoices','programs.id','invoices.tour_id')
            ->where('attachments.type','Programs')
           ->where('itineraries.tour_addon','programs')
           ->where('invoices.customer_id',$cust->customer_id)
          ->where('programs.id',$id)->first();

 //dd($programs);

      
           if($programs ==null){
              $programs = program::
              join('invoices','programs.id','invoices.tour_id')
              ->where('invoices.customer_id',$cust->customer_id)
              ->where('programs.id',$id)->first();
                         }

         $datas = itinerary::join('itinerary_days','itineraries.id','itinerary_days.itinerary_id')

        ->join('accommodations','accommodations.id','itinerary_days.accommodation_id')
        ->join('destinations','destinations.id','itinerary_days.destination_id')
        ->join('programs','programs.id','itineraries.program_id')
        ->join('attachments','attachments.destination_id','accommodations.id')
        ->orderby('itinerary_days.id','ASC')
        ->where('itineraries.tour_addon','programs')
        ->where('itineraries.program_id',$id)
        ->where('attachments.type','Accommodation')
        ->select('accommodations.accommodation_name','attachments.attachment','accommodations.accommodation_descriptions','accommodations.category','destinations.destination_name','itineraries.*','programs.tour_name','itinerary_days.*')
        ->get();
      
         if($datas == "[]"){
            $programs = program::
            join('attachments','attachments.destination_id','programs.id')
           ->where('attachments.type','Programs')
           ->where('programs.id',$id)->first();
          
            $accommodations = accommodation::get();
            $destinations = destination::get();
            
            return redirect()->back()->with('info','Itinerary not specified');

            // return view('admins.itinerary.add',compact('programs','accommodations','destinations','tour_addon'));
             
            };

             //dd($datas);
  
     $inclusives=DB::select("select id,inclusive from inclusives  where id not in(select (inclusive_id)id from accommodation_inclusives where tour_id =$id)");
    $assignLists = accommodationInclusive::join('inclusives','accommodation_inclusives.inclusive_id','inclusives.id')
        ->where('accommodation_inclusives.tour_id',$id)->get();

        $basic = departures::join('programs','programs.id','departures.tour_id')
        ->join('attachments','attachments.destination_id','programs.id')
        ->select('departures.*','programs.*','attachments.attachment')
        ->where('departures.status','Active')
        ->where('attachments.type','Programs')
         ->where('departures.tour_id',$id)
        ->get();

           $peoplePercents=people_percent::get();

  //dd($basic);
        return view('website.payments.privatePaySummary',compact('datas','id','programs','basic','discounts','tourInvoice','assignLists','inclusives','cust','peoplePercents'));
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


 public function privatePay(Request $request,$z)
    {
     
      $tailorCustomer = invoice::
        where('id',$z)->first();

  if($tailorCustomer->payee_status!='Paid')
   {
        $tourcostsummary = payment::create([
        'customer_id'=>$tailorCustomer->id,
        'tour_id'=>$tailorCustomer->tour_id,
        'amount_paid'=>request('amount'),
         'payee_date'=>request('payee_date')

        ]);

      $toupdate = invoice::where('id',$z)->update([
            'total_amount_paid'=>request('amount') +$tailorCustomer->total_amount_paid,
            'amount_remain'=>$tailorCustomer->total_cost -($tailorCustomer->total_amount_paid+request('amount')),
            //'physical_rating'=>request('physical_rating')
        ]);

         $tailorCustomerf = invoice::
        where('id',$z)
        ->first();

           if($tailorCustomerf->amount_remain<=0.0)
           {
      $toupdatef = invoice::where('id',$z)->update([
            'payee_status'=>'Paid'
        ]);

           return redirect()->back()->with('success','Itinerary created successful');
           }
   else
   {
     $toupdatef = invoice::where('id',$z)->update([
            'payee_status'=>'In due'
        ]);  
    return redirect()->back()->with('success','Itinerary created successful');
   }

}
else
{
    return 'The Invoice is alredy paid...!';
}
}



 public function groupPay(Request $request,$z)
    {
     
      $tailorCustomer = invoice::
        where('id',$z)
        ->first();

        //dd($tailorCustomer);
  if($tailorCustomer->payee_status!='Paid')
   {
        $tourcostsummary = payment::create([
        'customer_id'=>$tailorCustomer->id,
        'tour_id'=>$tailorCustomer->tour_id,
        'amount_paid'=>request('amount'),
         'payee_date'=>request('payee_date')

        ]);


      $toupdate = invoice::where('id',$z)->update([
            'total_amount_paid'=>request('amount') +$tailorCustomer->total_amount_paid,
            'amount_remain'=>$tailorCustomer->total_cost -($tailorCustomer->total_amount_paid+request('amount')),
            //'physical_rating'=>request('physical_rating')
        ]);

         $tailorCustomerf = invoice::
        where('id',$z)
        ->first();

           if($tailorCustomerf->amount_remain<=0.0)
           {
      $toupdatef = invoice::where('id',$z)->update([
            'payee_status'=>'Paid'
        ]);

        return redirect()->back()->with('success','Itinerary created successful');
           }
   else
   {
     $toupdatef = invoice::where('id',$z)->update([
            'payee_status'=>'In due'
        ]);  

        return redirect()->back()->with('success','Itinerary created successful');
   }

}
else
{
    return 'The Invoice is alredy paid...!';
}
        
//return redirect()->back()->with('success','Itinerary created successful');
}

  public function tailorPay(Request $request,$z)
    {

      $tailorCustomer = tailorMade::
        where('id',$z)
        ->first();
    //dd($tailorCustomer);
  if($tailorCustomer->payee_status!='Paid')
   {
        $tourcostsummary = payment::create([
            'customer_id'=>$tailorCustomer->id,
            'tour_id'=>$tailorCustomer->id,
        'amount_paid'=>request('amount'),
         'payee_date'=>request('payee_date')

        ]);

      $toupdate = tailorMade::where('id',$z)->update([
            'total_amount_paid'=>request('amount') +$tailorCustomer->total_amount_paid,
            'amount_remain'=>$tailorCustomer->calculated_cost -($tailorCustomer->total_amount_paid+request('amount')),
            //'physical_rating'=>request('physical_rating')
        ]);

         $tailorCustomerf = tailorMade::
        where('id',$z)
        ->first();

           if($tailorCustomerf->amount_remain<=0.0)
           {
     $toupdatef = tailorMade::where('id',$z)->update([
            'payee_status'=>'Paid'
        ]);
          //return redirect()->back()->with('success','Itinerary created successful');
           }
   else
   {
     $toupdatef = tailorMade::where('id',$z)->update([
            'payee_status'=>'In due'
        ]);
          return redirect()->back()->with('success','Itinerary created successful');
   }

}
else
{
    return 'The Invoice is alredy paid...!';
}

}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(payment $payment)
    {
        //
    }
}
