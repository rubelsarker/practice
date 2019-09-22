<?php

namespace App\Http\Controllers;

use App\Photo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;



class ImageController extends Controller
{
    public function create(){
        return view('image.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'image'=>'required|mimes:jpeg,png,jpg,bmp'
        ]);
//        get image
        $image = $request->file('image');
        $slug = Str::slug($request->name);
        if(isset($image)){
//            set image name
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check directory
            if(!Storage::disk('public')->exists('photo')){
                Storage::disk('public')->makeDirectory('photo');
            }
//            resize
            $resizeimage = Image::make($image)->resize(200,200)->save($imagename);
            Storage::disk('public')->put('photo/'.$imagename,$resizeimage);
        }
        else{
            $imagename = 'default.png';
        }
        $data = new Photo();
        $data->name = $request->name;
        $data->image = $imagename;
        $data-> save();
        session()->flash('msg','image upload successfully');
        return redirect()->back();
    }
    public function index(){
        $images = Photo::all();
        return view('image.index',compact('images'));
    }
}
