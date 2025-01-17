<?php

namespace App\Http\Controllers;

use App\Models\slider;
use App\Models\program;
use Illuminate\Http\Request;

class themeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$sliders = slider::get();
         $sliders = slider::join('programs','programs.id','sliders.tour_id')
          ->select('sliders.*','programs.tour_name')
          ->get();

          //dd($sliders);
        //$tours = program::get();
        return view('admins.themes.slider',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function create()
    {
         $sliders = slider::where('status',1)
          ->get();
          $tours = program::get();
        //dd($designations);
          return view('admins.themes.add-slider',compact('sliders','tours'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

// dd('prig');

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
                     $path = $attached->storeAs('public/uploads/', $imageToStore);

            $slider = slider::UpdateOrCreate(
                [ 'tour_id'=>request('tour_id')],
                ['title'=>request('title'),
                'status'=>request('status'),
                    'description'=>request('description'),
                    'attachment'=>$imageToStore
                ]);
                return redirect()->back()->with('success','Slider created succesfully');
       }
     }

       else
       {

             $slider = slider::UpdateOrCreate(
                [ 'tour_id'=>request('tour_id')],
                ['title'=>request('title'),
                'status'=>request('status'),
                    'description'=>request('description')
                    //'attachment'=>$imageToStore
                ]);
                return redirect()->route('themes.index')->with('success','Slider created succesfully');
       }


   // if(request('attachment')){
   //              $attach = request('attachment');
   //              foreach($attach as $attached){

   //                   // Get filename with extension
   //                   $fileNameWithExt = $attached->getClientOriginalName();
   //                   // Just Filename
   //                   $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
   //                   // Get just Extension
   //                   $extension = $attached->getClientOriginalExtension();
   //                   //Filename to store
   //                   $imageToStore = $filename.'_'.time().'.'.$extension;
   //                   //upload the image
   //                   $path = $attached->storeAs('public/uploads/', $imageToStore);


   //          $slider = slider::Create(
   //              [ 'title'=>request('title'),
   //              'section'=>request('section'),
   //              'status'=>request('status'),
   //                  'description'=>request('description'),
   //                  'attachment'=>$imageToStore
   //              ]);
   //              return redirect()->back()->with('success','Slider created succesfully');

   //      }
   //    }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     //dd($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sliders = slider::where('sliders.id',$id)
          ->first();

    $sliderTour = program::where('id',$sliders->tour_id)->first();

 // dd($sliderTour->tour_name);
     $tours = program::get();
        return view('admins.themes.edit',compact('sliders','tours','sliderTour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    // dd('update');

//          if(request('attachment')){
//             //dd('d1');
//             // Get filename with extension
//             $fileNameWithExt = request('attachment')->getClientOriginalName();
//             // Just Filename
//             $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
//               //$filename = strtok($filename, " ");
//             // Get just Extension
//             $extension = request('attachment')->getClientOriginalExtension();
//             //Filename to store
//             $filename = strtok($filename, " ");
//             $imageToStore = $filename.'_'.time().'.'.$extension;
//             //upload the image
//             $path = request('attachment')->storeAs('public/uploads/', $imageToStore);

// // dd('printed1');

//             $slider = slider::UpdateOrCreate(
//                   [ 'id'=>$id],

//                  ['section'=>request('section'),
//                   'title'=>request('title'),
//                 'status'=>request('status'),
//                     'description'=>request('description'),
//                     'attachment'=>$imageToStore
//                 ]);
//                   return redirect()->route('themes.index')->with('success','Slider created succesfully');
//        }
//        else{

// // dd('printed2');

//   $slider = slider::UpdateOrCreate(
//                 [ 'id'=>$id],

//                 ['section'=>request('section'),
//                  'title'=>request('title'),
//                 'status'=>request('status'),
//                     'description'=>request('description')
//                 ]);
//                 return redirect()->route('themes.index')->with('success','Slider created succesfully');

//        }





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
                     $path = $attached->storeAs('public/uploads/', $imageToStore);


 dd($id);

             $slider = slider::UpdateOrCreate(
                [ 'id'=>$id],

                ['section'=>request('section'),
                 'title'=>request('title'),
                  'tour_id'=>request('tour_id'),
                'status'=>request('status'),
                    'description'=>request('description'),
                       'attachment'=>$imageToStore
                ]);
                return redirect()->route('themes.index')->with('success','Slider created succesfully');

        }
      }
      else{
 //dd(request('tour_id'));
  $slider = slider::UpdateOrCreate(
                [ 'id'=>$id],

                ['section'=>request('section'),
                 'title'=>request('title'),
                   'tour_id'=>request('tour_id'),
                'status'=>request('status'),
                    'description'=>request('description')
                ]);
                return redirect()->route('themes.index')->with('success','Slider created succesfully');

       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = slider::where('id',$id)->first();
        if($delete->delete()){
            return redirect()->back()->with('success','Widget removed successfully');
        }
        else{
            return redirect()->back()->with('error','Widget not exists');
        }
    }
}
