<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\MusicModel;
use Illuminate\Support\Str;
use Auth;
use Alert;
use Image;
use File;
class MusicController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            $categories = MusicModel::with('brand','category')->get();
            return view('admin.music.index', compact('categories'));
        }
        else {
            session()->flash('error','Access Denied !');
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        if (Auth::user()->type == 1) {
            $brands = Brand::select('id','title')->get();
            return view('admin.music.create', compact('brands'));
        }
        else {
            session()->flash('error','Access Denied !');
            return back();
        }
    }
    public function getCategoriesByBrand($brand_id)
    {
        // Fetch categories that belong to the selected brand
        $categories = Category::where('parent_id', $brand_id)->select('id', 'title')->get();
        return response()->json($categories);
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
             $directory = 'admin/music/audio/'.$slug.'/';
         } else {
             $directory = 'admin/music/video/'.$slug.'/';
         }
         
         $file->move($directory, $fileName);
         $fileUrl = $directory.$fileName;
         return $fileUrl;
     }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'nullable|max:255',
            'brand_id' => 'nullable|integer',
            'category_id' => 'nullable|integer',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000', // Optional: validate video
            'audio' => 'nullable|mimes:mp3,wav,aac|max:10000',   // Validation for audio
        ]);
        //dd($request->all());
        $music = new MusicModel;
        $music->brand_id = $request->brand_id;
        $music->category_id = $request->category_id;
        $music->audio_name = $request->audio_name;
        $music->video_name = $request->video_name;
        $music->video_link = $request->video_link;
        $music->audio_link = $request->audio_link;
         // Handle video upload
        if ($request->hasFile('video')) {
            $music->video = $this->getFileUrl($request, 'video');
        }

        // Handle audio upload
        if ($request->hasFile('audio')) {
            $music->audio = $this->getFileUrl($request, 'audio'); // Store audio file URL
        }
        // image save
        if ($request->image){
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/music/'. $img);
            Image::make($image)->save($location);
            $music->image = $img;
        }

        $music->save();
        Alert::toast('One music added !', 'success');
        return redirect()->route('music.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->type == 1) {
            $music = MusicModel::with('brand','category')->find($id);
            if (!is_null($music)) {

                return view('admin.music.edit', compact('music'));
            }
            else {
                session()->flash('error','Something went wrong !');
                return back();
            }
        }
        else {
            session()->flash('error','Access Denied !');
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
          'image' => 'nullable|max:255',
            'brand_id' => 'nullable|integer',
            'category_id' => 'nullable|integer',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000', // Optional: validate video
            'audio' => 'nullable|mimes:mp3,wav,aac|max:10000',   // Validation for audio
        ]);

        $music = MusicModel::find($id);
        
        $music->brand_id = $request->brand_id;
        $music->category_id = $request->category_id;
        $music->audio_name = $request->audio_name;
        $music->video_name = $request->video_name;
        $music->video_link = $request->video_link;
        $music->audio_link = $request->audio_link;
        // Handle video upload
        if ($request->hasFile('video')) {
            $music->video = $this->getFileUrl($request, 'video');
        }

        // Handle audio upload
        if ($request->hasFile('audio')) {
            $music->audio = $this->getFileUrl($request, 'audio'); // Store audio file URL
        }

        // image save
        if ($request->image){
            if (File::exists('images/music/'.$music->image)){
                File::delete('images/music/'.$music->image);
            }
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/music/'. $img);
            Image::make($image)->save($location);
            $music->image = $img;
        }

        $music->save();
        Alert::toast('music has been updated !', 'success');
        return redirect()->route('music.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = MusicModel::find($id);

        if (!is_null($category)) {
            // Delete the image file
            if (File::exists('images/music/'.$category->image)) {
                File::delete('images/music/'.$category->image);
            }
        
            // Delete the audio file (if applicable)
            if (!empty($category->audio) && File::exists('admin/music/audio/'.$category->audio)) {
                File::delete('admin/music/audio/'.$category->audio);
            }
        
            // Delete the video file (if applicable)
            if (!empty($category->video) && File::exists('admin/music/video/'.$category->video)) {
                File::delete('admin/music/video/'.$category->video);
            }
        
            // Finally, delete the category from the database
            $category->delete();
        
            // Flash success message
            Alert::toast('Category and associated files have been deleted!', 'success');
            return back();
        } else {
            session()->flash('error', 'Something went wrong!');
            return back();
        }
        
    }
}
