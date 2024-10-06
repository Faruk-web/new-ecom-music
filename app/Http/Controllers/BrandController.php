<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use Alert;
use Image;
use File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            $brands = Brand::orderBy('id', 'DESC')->get();
            return view('admin.brand.index', compact('brands'));
        }
        else{
            Alert::toast('Access Denied !', 'error');
        }
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getFileUrl($request, $fileType = 'video')
{
    $slug = Str::slug($request->type);
    $file = $request->file($fileType);
    $fileName = $slug.'-'.time().'.'.$file->getClientOriginalExtension();
    
    // Set the directory for video/audio uploads
    if ($fileType === 'audio') {
        $directory = 'admin/tutorial/audio/'.$slug.'/';
    } else {
        $directory = 'admin/tutorial/video/'.$slug.'/';
    }
    
    $file->move($directory, $fileName);
    $fileUrl = $directory.$fileName;
    return $fileUrl;
}


public function store(Request $request)
{

    $validatedData = $request->validate([
        'title' => 'required|max:255',
        'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000', // Optional: validate video
        'audio' => 'nullable|mimes:mp3,wav,aac|max:10000',   // Validation for audio
        'image' => 'nullable|image|max:2048',                // Optional: validate image
    ]);

    $brand = new Brand;
    $brand->title = $request->title;
    $brand->is_active = $request->is_active;
    // Handle video upload
    if ($request->hasFile('video')) {
        $brand->video = $this->getFileUrl($request, 'video');
    }

    // Handle audio upload
    if ($request->hasFile('audio')) {
        $brand->audio = $this->getFileUrl($request, 'audio'); // Store audio file URL
    }

    // Image save
    if ($request->image) {
        $image = $request->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('images/brand/' . $img);
        Image::make($image)->save($location);
        $brand->image = $img;
    }

    $brand->save();

    Alert::toast('One Brand Added!', 'success');
    return redirect()->route('brand.index');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'image'=> 'nullable',
        ]);

        $brand = Brand::find($id);

        $brand->title = $request->title;
        $brand->is_active = $request->is_active;
        // Handle video upload
        if ($request->hasFile('video')) {
            $brand->video = $this->getFileUrl($request, 'video');
        }

        // Handle audio upload
        if ($request->hasFile('audio')) {
            $brand->audio = $this->getFileUrl($request, 'audio'); // Store audio file URL
        }
        // image save
        if ($request->image){
            if (File::exists('images/brand/'.$brand->image)){
                File::delete('images/brand/'.$brand->image);
            }
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/brand/'. $img);
            Image::make($image)->save($location);
            $brand->image = $img;
        }

        $brand->save();
        Alert::toast('Brand has been updated !', 'success');
        return redirect()->route('brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        if (!is_null($brand)) {
            if (File::exists('images/brand/'.$brand->image)){
                File::delete('images/brand/'.$brand->image);
            }
            $brand->delete();
            Alert::toast('brand has been deleted !', 'success');
            return back();
        }
        else {
            session()->flash('error','Something went wrong !');
            return back();
        }
    }
}
