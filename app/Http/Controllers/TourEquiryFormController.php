<?php

namespace App\Http\Controllers;
use App\Models\program;
use App\Models\TourEquiryForm;
use App\Models\tourEquerySocialMedia;
use App\Models\socialmedia;
use App\Models\invoice;
use App\Models\Tourcostsummary;
use App\Models\departures;
use App\Models\specialOffer;
use App\Models\tailorMade;

use App\Models\itinerary;
use App\Models\itinerary_day;
use App\Models\destination;

use App\Models\people_percent;

use Mail;
use DB;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use JasperPHP\JasperPHP as JasperPHP;
use PHPJasper\PHPJasper;

 require base_path().'/vendor/autoload.php';
 //require base_path().'/vendor/autoload.php';
include_once(app_path().'/jrf/PHPJasperXML.inc.php');
 include_once(app_path().'/jrf/tcpdf/tcpdf.php');
  //include_once(app_path().'/fpdf184/mysql_table.php');
  //include_once(app_path().'/fpdf184/pdfg.php');
 use PHPJasperXML;

class TourEquiryFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
       {

   $socialmedia = socialmedia::get();
       return view('website.tour.tourEnquiryForm',compact('socialmedia'));
       }


public function email()
{

//dd('dddd');
   
$id=11;
      $tour_addons = program::where('id', $id)->first();       
        $type=$tour_addons->main; 

//dd($tour_addons);

        if($type=='Program')
        {
         $tour_addon='Programs';
        }
        else
        {
        $tour_addon='Addon';
        }


$programs = program::
           join('itineraries','itineraries.program_id','programs.id')
          ->join('attachments','programs.id','attachments.destination_id')
         ->where('attachments.type', $tour_addon)
         ->where('itineraries.tour_addon', $tour_addon)
         ->where('programs.id',$id)
            ->select('programs.*','attachments.attachment','itineraries.*')
          ->get()->first();

      $datas = itinerary::join('itinerary_days','itineraries.id','itinerary_days.itinerary_id')
        ->join('accommodations','accommodations.id','itinerary_days.accommodation_id')
        ->join('destinations','destinations.id','itinerary_days.destination_id')
        ->join('programs','programs.id','itineraries.program_id')
         ->join('locations','destinations.location_id','locations.id')
        ->join('attachments','accommodations.id','attachments.destination_id')
        ->orderby('itinerary_days.id','ASC')
        ->where('itineraries.tour_addon', $tour_addon)
        ->where('itineraries.program_id',$id)
        ->where('attachments.type','Accommodation')
        ->select('accommodations.*','accommodations.type',
        'itineraries.*','destinations.*','locations.*','programs.tour_name','itinerary_days.*','attachments.attachment')
        ->get();


         if($datas == "[]"){
      return redirect()->back()->with('info','The Program has no Itinery Data');
           };
   $socialmedia = socialmedia::get();
       return view('website.emails.email',compact('socialmedia','datas','programs'));

}




public function emailSendF()
{

       include_once(app_path().'/jrf/sample/setting.php');
       $jasper = new PHPJasperXML();
           // $jasper = new PHPJasper;
       
//dd('bvncx');
$input =app_path().'/reports/pieChart.jrxml';
 //$input =app_path().'/reports/department.jrxml';
$output =app_path().'/reports';

$options = [
    'format' => ['pdf'],
    'locale' => 'en',
    'params' => [
 'property_id'=>1,
    ],
    'db_connection' => [
         'driver' => 'mysql', //mysql, ....
         'username' => 'root',
        //'password' => '',
        'host' => '127.0.0.1',
        'database' => 'horesydb',
        'port' => '3306'
    ]

    // \Config::get('database.connections.mysql')

];

// Get Itininery

//dd('print tyru');

$id=11;


      $tour_addons = program::where('id', $id)->first();       
        $type=$tour_addons->main; 

//dd($tour_addons);

        if($type=='Program')
        {
         $tour_addon='Programs';
        }
        else
        {
        $tour_addon='Addon';
        }

      $datas = itinerary::join('itinerary_days','itineraries.id','itinerary_days.itinerary_id')
        ->join('accommodations','accommodations.id','itinerary_days.accommodation_id')
        ->join('destinations','destinations.id','itinerary_days.destination_id')
        ->join('programs','programs.id','itineraries.program_id')
         ->join('locations','destinations.location_id','locations.id')
        ->join('attachments','accommodations.id','attachments.destination_id')
        ->orderby('itinerary_days.id','ASC')
        ->where('itineraries.tour_addon', $tour_addon)
        ->where('itineraries.program_id',$id)
        ->where('attachments.type','Accommodation')
        ->select('accommodations.*','accommodations.type',
        'itineraries.*','destinations.*','locations.*','programs.tour_name','itinerary_days.*','attachments.attachment')
        ->get();


         if($datas == "[]"){
      return redirect()->back()->with('info','The Program has no Itinery Data');
           };

//dd('zz');
//dd('zzkx');
// $jasper = new PHPJasper;
//dd($jasper);

// $jasper->process(
//         $input,
//         $output,
//         $options
// )->execute();

//dd('zzkx back');
//Send report




 $socialmedia = socialmedia::get();

$date=date('d-M-Y');
// $data["email"] = "palatialtours@gmail.com";
$data["email"] = "info@palatialtours.com";

$data["title"] = "ITINERARY";
$data["body"] = "Manyara Best View Hotel: Daily General Inspection Report held on $date";
$data["date"] = "Date: $date";

// $arrayName =$socialmedia;
$data['socialmedia'] =$socialmedia;
$data['datas'] =$datas; 
$data['programs'] =$tour_addons; 
//dd($data);

$files = [
//app_path('reports/pieChart.pdf'),

// app_path().'/reports/itinerayReportf.pdf',
// public_path('files/reports.png'),
];
  //SendMailJobf::dispatch($data);
 //dd('try34');
Mail::send('website.emails.email_send',$data, function($message)use($data, $files) {
$message->to($data["email"], $data["email"])
        ->subject($data["title"]);
foreach ($files as $file){
    $message->attach($file);
}
});

dd('Mail sent successfully');
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

      public function bookingTrip()
    {
        return view('website.payments.bookingTrip');
    }



     public function viewTrip(Request $request)    {

              //Verify if the pin exists
          $pin=request('pin');
         // dd($pin);
          
          $trip = TourEquiryForm::
            where('tour_equiry_forms.pin',$pin)->first();

           if($trip==null)
           {
            // return 'Enter your PIN No Or Your PIN No is Expired Or Not Exists';
            return redirect()->back()->with('error','Your PIN Number does not Exists');
           }
           else
           {
        
         if($trip->status=="Inactive")
           {
             return redirect()->back()->with('error','Your PIN Number has been already Expired');
           }else
           {
              $id=$trip->id;  
           }
           
           $tour_addon='Programs';          
           $programs = program::join('itineraries','itineraries.program_id','programs.id')
            ->join('attachments','attachments.destination_id','programs.id')        
          ->where('itineraries.tour_addon','Programs')
          ->where('attachments.type','Programs')
          ->where('programs.id',$id)->first();      
dd($programs);


           if($programs ==null){
            // tour_equiry_forms
              $programs = tailorMade::
              where('programs.id',$id)->first();
              }

        $datas = itinerary_day::join('itineraries','itineraries.id','itinerary_days.itinerary_id')
        ->join('accommodations','accommodations.id','itinerary_days.accommodation_id')   

         ->join('destinations','destinations.id','itinerary_days.destination_id') 
         ->join('programs','programs.id','itineraries.program_id')
                  
         ->join('attachments','attachments.destination_id','accommodations.id') 
          ->where('itineraries.tour_addon','Programs')
          ->where('itineraries.program_id',$id)          
          ->where('attachments.type','Accommodation')
          ->where('programs.id',$id)
       
         ->orderby('itinerary_days.id','ASC')
        
         ->select('accommodations.accommodation_name','accommodations.accommodation_descriptions','attachments.attachment','accommodations.category','destinations.destination_name','itineraries.*','programs.first_name','programs.last_name','itinerary_days.*')
           ->get();
    
//dd($datas);


         if($datas == "[]"){          
            $destinations = destination::get();
              return redirect()->back()->with('info',$programs->full_name.' Ops your tailor made still on Progess....');
            // return ($programs->full_name.' Ops your tailor made still on Progess....');
          };

        $basic=tailorMade::join('attachments','attachments.destination_id','programs.id')
        ->get();
         
         $inclusives=DB::select("select id,inclusive from inclusives  where id not in(select (inclusive_id)id from accommodation_inclusives where tour_id =$id)");
        
           $assignLists = accommodationInclusive::join('inclusives','accommodation_inclusives.inclusive_id','inclusives.id')
        ->where('accommodation_inclusives.tour_id',$id)->get();
//dd($programs);
  $invoice_amount = invoice::where('customer_id',$id)->first(); 
//dd($invoice_amount);

        return view('website.tailorMade.tailorMadeSummary',compact('datas','id','programs','basic','inclusives','assignLists','pin','invoice_amount'));
    }
}
      

    


     public function viewTrip_org(Request $request)    {

              //Verify if the pin exists
           $pin=request('pin');        

            $trip = TourEquiryForm::
            where('tour_equiry_forms.pin',$pin)->first();

           // ->where('tour_equiry_forms.status','Active')->first();        
            //dd($trip);

           if($trip==null)
           {
            // return 'Enter your PIN No Or Your PIN No is Expired Or Not Exists';
            return redirect()->back()->with('error','Your PIN Number does not Exists');
           }
           else
           {
        
         if($trip->status=="Inactive")
           {
             return redirect()->back()->with('error','Your PIN Number has been already Expired');
           }else
           {
              $id=$trip->id;  
           }


//dd('print');


        if($trip->tour_type=='Private')
        {
          //dd($trip->tour_type);  
        // return redirect()->route('privateTourSumary',$id)->with('success','Tour Summary Cost created successful');

              return redirect()->route('groupTourSumary',$id)->with('success','Tour Summary Cost created successful');  
        }
        elseif ($trip->tour_type=='Group') {
            //dd($trip->tour_type);
            # code... 
              return redirect()->route('groupTourSumary',$id)->with('success','Tour Summary Cost created successful');  
        }else
        {
         // return 'Tour category was not specified...!'; 
           return redirect()->back()->with('info','Tour category was not specified...!');     
        }       
     }
    
    }



public function viewTripf(Request $request,$pin)  {

$tourType="";
              //Verify if the pin exists
          // $pin=request('pin');  
          // dd($pin);      
//dd(request('print'));
if(request('print')=="print")
{
  $trip = tailorMade::
            where('tailor_mades.pin',$pin)
           ->where('tailor_mades.status','Active')->first();
         $tourType="Private";
          
           }
           else{
  $trip = TourEquiryForm::
            where('tour_equiry_forms.pin',$pin)
           ->where('tour_equiry_forms.status','Active')->first();
           $tourType=$trip->tour_type;
           }        
            //dd($trip);

           if($trip==null)
           {
            return 'Enter your PIN Number Or Your PIN No is Expired Or Not Exists';
           }
           else
           {
           // $id=$trip->tour_id;
             $id=$trip->id;         
            // dd($id);
        if($tourType=='Private' || $tourType=='Group')
        {

        if(request('print')=="print")
{    
        return redirect()->route('pgtm',$id)->with('success','Tour Summary Cost created successful');
    }
    else
    {
     return redirect()->route('pg',$id)->with('success','Tour Summary Cost created successful');   
    }
        }
        // else if ($trip->tour_type=='Group') {
        //     # code... 
        //       return redirect()->route('groupTourSumary',$id)->with('success','Tour Summary Cost created successful');  
        // }
        else
        {
         return 'Tour category was not specified...!';      
        }       
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
       $validatedData = $request->validate([
            'first_name' => 'required',
               'last_name' => 'required',
                'phone' => 'required',
                 'travel_date' => 'required',            
            'email' => 'required',    
               // 'email' => 'required|email|unique:users',          
        ], [
            'first_name.required' => 'First name field is required.',
              'last_name.required' => 'Last name field is required.',    
               'phone.required' => 'Phone number field is required.',  
                'travel_date.required' => 'Travel date field is required.',

            'email.required' => 'Email field is required. test 2',
            'email.email' => 'Email field must be email address.',            
        ]);

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
            
$pin = rand(111111, 99999999);
        $hear_from = request('hear');        
    
        $tour_name=request('tour_name');
        $acc=request('accomodation');
        $adults=request('adults');
        $addon_price=request('addon');

      $Tourcostsummary = Tourcostsummary::
        where('program',$tour_name)
         ->select('tourcostsummaries.*')
        ->where('status',$acc)
        ->get();  


//Get percent rate

$adult=people_percent::where('percent_name','Adults')->first();
$teen=people_percent::where('percent_name','Teens')->first();
$children=people_percent::where('percent_name','children')->first();

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



         if($Tourcostsummary == "[]"){
            $unit_price=$pricef;         
            $teens_cost=($unit_price * $teen_p)*request('teens');          
            $children_cost=($unit_price * $children_p)*request('children');  
             //Total discount
           $total_discount=$discount_pricef*request('adults') + $discount_pricef*$teen_p*request('teens') + $discount_pricef*$children_p*request('teens');
          
       //dd($total_discount);

            $total_price=($unit_price * $adults)+$teens_cost + $children_cost;
         // dd($total_price);
            $total_addon_price=($addon_price*$teen_p)*request('teens') + ($addon_price * $adults+($addon_price*$children_p)*request('children'));
            
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
         

            $teens_cost=($unit_price * $teen_p)*request('teens');          
            $children_cost=($unit_price * $children_p)*request('children');   
            $total_discount=$discount_pricef*request('adults') + $discount_pricef*$teen_p*request('teens') + $discount_pricef*$children_p*request('teens');

            $total_price=($unit_price * $adults)+$teens_cost + $children_cost;
   
            $total_addon_price=($addon_price*$teen_p)*request('teens') + ($addon_price * $adults+($addon_price*$children_p)*request('children'));
            
            $total_cost=$total_price + $total_addon_price -  $total_discount;
         }

$adults_cost=$unit_price * $adults;

        $tour_costsummary = TourEquiryForm::create([
        'first_name'=>request('first_name'),
        'last_name'=>request('last_name'),
        'email'=>request('email'),
        'phone'=>request('phone'),
        'country'=>request('country'),
        'tour_id'=>request('tour_id'),
        'depart_id'=>$dapart_id,

        'tour_type'=>request('tour_type'),
        'accommodation'=>request('accomodation'),

          'adults'=>request('adults'),
           'teens'=>request('teens'),
            'children'=>request('children'),
             'tour_date'=>$yearM,
              'travel_date'=>$travel_date,

              'pin'=> $pin,
               'status'=>'Active',
             'additional_information'=>request('additional_information'),
              'hear_about_us'=>request('hear_about_us'),

        'user_id'=>auth()->id()
        ]);
     
        $tourcostsummary = invoice::create([
        'customer_id'=>$tour_costsummary->id,
        'tour_id'=>request('tour_id'),
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


//HEAR FROM
        if($hear_from!=null)
        {
        foreach ($hear_from as $hears) {
        $tourhearfrom = tourEquerySocialMedia::create([
        'tour_equery_id'=>$tour_costsummary->id,
        'social_name'=>$hears
        ]);
        }
      }

//Send Email
    //  dd('print TourForm');
 include_once(app_path().'/jrf/sample/setting.php');
       $jasper = new PHPJasperXML();
           // $jasper = new PHPJasper;

//dd('bvncx');
$input =app_path().'/reports/pieChart.jrxml';
 //$input =app_path().'/reports/department.jrxml';
$output =app_path().'/reports';

$options = [
    'format' => ['pdf'],
    'locale' => 'en',
    'params' => [
 'property_id'=>1,
    ],
    'db_connection' => [
         'driver' => 'mysql', //mysql, ....
         'username' => 'root',
        //'password' => '',
        'host' => '127.0.0.1',
        'database' => 'horesydb',
        'port' => '3306'
    ]

    // \Config::get('database.connections.mysql')

];


// Get Itininery
$id=request('tour_id');
      $tour_addons = program::where('id', $id)->first();       
        $type=$tour_addons->main; 

//dd($tour_addons);

        if($type=='Program')
        {
         $tour_addon='Programs';
        }
        else
        {
        $tour_addon='Addon';
        }

      $datas = itinerary::join('itinerary_days','itineraries.id','itinerary_days.itinerary_id')
        ->join('accommodations','accommodations.id','itinerary_days.accommodation_id')
        ->join('destinations','destinations.id','itinerary_days.destination_id')
        ->join('programs','programs.id','itineraries.program_id')
         ->join('locations','destinations.location_id','locations.id')
        ->join('attachments','accommodations.id','attachments.destination_id')
        ->orderby('itinerary_days.id','ASC')
        ->where('itineraries.tour_addon', $tour_addon)
        ->where('itineraries.program_id',$id)
        ->where('attachments.type','Accommodation')
        ->select('accommodations.*','accommodations.type',
        'itineraries.*','destinations.*','locations.*','programs.tour_name','itinerary_days.*','attachments.attachment')
        ->get();


         if($datas == "[]"){
      return redirect()->back()->with('info','The Program has no Itinery Data');
  };





 $socialmedia = socialmedia::get();

// $date=date('d-M-Y');
// // $data["email"] = "palatialtours@gmail.com";
// $data["email"] = request('email');

// $data["title"] = "ITINERARY ".$tour_addon;
// $data["body"] = "Manyara Best View Hotel: Daily General Inspection Report held on $date";
// $data["date"] = "Date: $date";

// // $arrayName =$socialmedia;
// $data['socialmedia'] =$socialmedia;
// $data['datas'] =$datas; 
// $data['programs'] =$tour_addons; 
// //dd($data);

// $files = [
// //app_path('reports/pieChart.pdf'),

// // app_path().'/reports/itinerayReportf.pdf',
// // public_path('files/reports.png'),
// ];
//   //SendMailJobf::dispatch($data);
//  //dd('try34');
// Mail::send('website.emails.email_send',$data, function($message)use($data, $files) {
// $message->to($data["email"], $data["email"])
//         ->subject($data["title"]);
// foreach ($files as $file){
//     $message->attach($file);
// }
// });

//dd('email sent');
  return response()->json(['url' => route('viewTripf', [$pin])]);
  
  //return redirect()->route('viewTripf', [$pin]);
 //return redirect()->back()->with('success','Tour Summary Cost created successful');

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TourEquiryFrom  $tourEquiryFrom
     * @return \Illuminate\Http\Response
     */




      public function customers()
    {
      $customers = TourEquiryForm::join('invoices','invoices.customer_id','tour_equiry_forms.id')
        ->join('programs','programs.id','invoices.tour_id')
      ->where('tour_equiry_forms.status','Active')
      ->orderby('invoices.id','desc')
      ->get();
     // dd($customers);
       return view('admins.customers.customers',compact('customers'));
    }

    public function activeGroupTrip()
    {
      $groupTrip2 = TourEquiryForm::join('invoices','invoices.customer_id','tour_equiry_forms.id')
      ->where('tour_equiry_forms.tour_type','Group')
      ->where('tour_equiry_forms.status','Active')
      ->orderby('invoices.id','desc')
      ->get();
  

$groupTrip=  DB::select("select sum(t1.adults)adults,sum(t1.teens)teens,sum(t1.children)children,tour_type,format(sum(i.total_price),2)tour_cost,format(sum(i.total_addon_price),2)total_Addon_cost,format(sum(i.total_cost),2)total_cost,format(sum(i.total_amount_paid),2)amount_paid,format(sum(i.amount_remain),2)amount_remain from tour_equiry_forms t1,invoices i where t1.id=i.customer_id and t1.status='Active' and t1.tour_type='Group' group by t1.tour_id");
//dd($groupTrip);
    return view('admins.activeGroupTrip.activeGroupTrip',compact('groupTrip'));
    }


    public function show($id)
    {

        $programc = program::
           join('itineraries','itineraries.program_id','programs.id')
       // ->join('attachments','programs.id','attachments.destination_id')
         ->where('programs.id',$id)->first();

      $socialmedia = socialmedia::get();
       


       //return view('website.tour.tourEnquiryForm',compact('socialmedia','programc'));
    return redirect()->back()->with('success','Tour Summary Cost created successful');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TourEquiryFrom  $tourEquiryFrom
     * @return \Illuminate\Http\Response
     */
    public function edit(TourEquiryFrom $tourEquiryFrom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TourEquiryFrom  $tourEquiryFrom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TourEquiryFrom $tourEquiryFrom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TourEquiryFrom  $tourEquiryFrom
     * @return \Illuminate\Http\Response
     */
    public function destroy(TourEquiryFrom $tourEquiryFrom)
    {
        //
    }
}