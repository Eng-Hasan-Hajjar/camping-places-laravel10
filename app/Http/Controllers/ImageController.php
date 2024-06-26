<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
// This will work and generate everything properly.
use App\Models\Post;

class ImageController extends Controller
{
    public function index($id){
        return view('website.estategallery.imageview',compact('id'));
    }


    public function  upload(Request  $request){
        $image_code = '';
        $images = $request->file('file');
        $es_id=$request->es_id;
       // dd($request);

        foreach ($images as $image){
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload'), $new_name);
            Image::create([
                'image' => 'upload/'. $new_name,
                'es_id' => $request->es_id,
            ]);
            $image_code.='<div class="col-md-3" style="margin-bottom: 24px;"><img style=" width:400px;height:300px" src="upload/'.$new_name.'"class="img-thumbnail"/></div>';

        }

//        $output = array(
//             'success' => 'Images uploaded successfully',
//            'image'   =>  $image_code );
 //        return response()->json($output);
  return Redirect::back()->withFlashMessage('Gallery has been added successfully');




    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
