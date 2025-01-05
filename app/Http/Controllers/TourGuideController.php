<?php

namespace App\Http\Controllers;

use App\Models\tourGuide;
use App\Models\socialmedia;
use App\Models\tailorMade;
use App\Models\tourEquerySocialMedia;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class TourGuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = tourGuide::get();
        return view('admins.tourGuides.index',compact('datas'));
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

     public function NewTourGuide()
    {
       $socialmedias = socialmedia::get();
       $tailorMades = tailorMade::get();
       return view('website.agents.tourGuide',compact('tailorMades','socialmedias'));
    }

    public function NewBooking()
   {
     //dd('booking');
      $socialmedias = socialmedia::get();
      $tailorMades = tailorMade::get();
      return view('website.agents.tourGuide',compact('tailorMades','socialmedias'));
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $hear_from = request('hear');
      $pin=rand(1111111, 9999999);


 $validator = Validator::make($request->all(), [
        'first_name' => 'required|string|max:255',
         'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'birth' => 'required|Date',
        'occupation' => 'required|string',
        'language' => 'required|string',

        // 'password' => 'required|min:8',
    ]);
    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();

    }else
    {


       if(request('photo')){
                $attach = request('photo');
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
                     $path = $attached->storeAs('public/tourGuides/', $imageToStore);

        $guides = tourGuide::UpdateOrCreate([
        'first_name'=>request('first_name'),
        'last_name'=>request('last_name'),
        'phone'=>request('phone'),
        'email'=>request('email'),
        'birth'=>request('birth'),
        'nationality'=>request('nationality'),
        'language'=>request('language'),
        'other_language'=>request('other_language'),
       'photo'=>$imageToStore,
        'cv'=>$imageToStore,
       'pin'=>$pin,
       'status'=>'Active',
       'driving_license'=>request('driving_license'),
        'education_level'=>request('education_level'),
        'professional'=>request('professional'),
        'work_experience'=>request('work_experience'),
        'hear_about_us'=>request('hear_about_us'),
        ]);
        }

          if($hear_from !=null)
     {
        foreach ($hear_from as $hears) {
        $tourhearfrom = tourEquerySocialMedia::create([
        'tour_equery_id'=>$guides->id,
        'social_name'=>$hears,
        'from_name'=>'tourGuides'
        ]);
        }
     }
              return redirect()->back()->with('success','successfully');
    }
}
return redirect()->back()->with('info','Error on submittion of information');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tourGuide  $tourGuide
     * @return \Illuminate\Http\Response
     */
    public function show(tourGuide $tourGuide)
    {
       // dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tourGuide  $tourGuide
     * @return \Illuminate\Http\Response
     */
    public function edit(tourGuide $tourGuide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tourGuide  $tourGuide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tourGuide $tourGuide)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tourGuide  $tourGuide
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = tourGuide::where('id',$id)->first();
        if($delete->delete()){
         return redirect()->back()->with('success','Tour Guide' .'".$delete->first_name."'. '".$delete->last_name."'.' removed successfully');
        }
        else{
            return redirect()->back()->with('error','Tour Guide' . '".$delete->first_name."'. '".$delete->last_name."'.' not exists');
        }
    }
}
