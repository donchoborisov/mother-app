<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AdvertController extends Controller
{
    public function create() {
     
        return view('addadvert');
     
    }

    public function store(Request $request) {

        $this->validate($request,
        [
            'name'  => 'required|max:30',
            'size'  => 'required|max:10',
            'dimensions' => 'required|max:10',
            'image' => 'required|max:2048|dimensions:min_width=1080,min_height=720|mimes:jpeg,jpg,png',
       
        
       ]);

       if($request->hasFile('image')) {
           
        
 
        $imgFile = Image::make($request->file('image'));

           

        if($imgFile->width() > 1920 || $imgFile->height() > 1080 ) {

        $imgFile->fit(1920, 1080, function ($constraint) {
		    $constraint->aspectRatio();
		});

       } elseif($imgFile->width() < 1920 || $imgFile->height() < 1080 ) {

        $imgFile->fit(1080, 720, function ($constraint) {
		    $constraint->aspectRatio();
		}); 

       }


       $path = 'adverts/' . time() . '.' . $request->file('image')->getClientOriginalExtension();
       $imgFile->save(storage_path('app/public/' . $path));

       Advert::create([
           'name' => $request->name,
           'size' => $request->size,
           'dimensions' => $request->dimensions,
           'image' => $path
       ]);

       session()->flash('success', 'Advert Posted');

        return redirect()->back();
 
       
    }

 }


  public function show($id) {

    $advert = Advert::find($id);

    return view('advertshow',compact('advert'));
  }


  public function edit($id) {

    $advert = Advert::find($id);

    return view('advertedit',compact('advert'));
  }


  public function update(Request $request, $id) {
    
    $this->validate($request,
    [
        'name'  => 'required|max:30',
        'size'  => 'required|max:10',
        'dimensions' => 'required|max:10',
        'image' => 'max:2048|dimensions:min_width=1080,min_height=720|mimes:jpeg,jpg,png',
   
    
   ]);

   $advert = Advert::find($id);


   if($request->hasFile('image')) {

   
    $oldimage = storage_path('app/public/' . $advert->image);
    unlink($oldimage);

           
        
 
    $imgFile = Image::make($request->file('image'));

       

    if($imgFile->width() > 1920 || $imgFile->height() > 1080 ) {

    $imgFile->fit(1920, 1080, function ($constraint) {
    $constraint->aspectRatio();
});

   } elseif($imgFile->width() < 1920 || $imgFile->height() < 1080 ) {

    $imgFile->fit(1080, 720, function ($constraint) {
    $constraint->aspectRatio();
}); 

   }


   $path = 'adverts/' . time() . '.' . $request->file('image')->getClientOriginalExtension();
   $imgFile->save(storage_path('app/public/' . $path));

    $data = array();

      $data['name'] = $request->name;
      $data['size'] = $request->size;
      $data['dimensions'] = $request->dimensions;
      $data['image'] = $path;

      $update = DB::table('adverts')->where('id',$id)->update($data);
  

   session()->flash('success', 'Advert Updated');

    return redirect()->back();

   
} else {

   $advert->update($request->only('name','size','dimensions'));

   session()->flash('success', 'Advert Updated');

   return redirect()->back();

}
   


   





  }








}
