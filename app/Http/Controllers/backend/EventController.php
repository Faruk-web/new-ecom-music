<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Brand;
use Illuminate\Support\Str;
use Auth;
use Alert;
use Image;
use File;
class EventController extends Controller
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
            $events = Event::with('brand')->get();
            return view('admin.event.index', compact('events'));
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
            $brands  = Brand::select('id','title')->get();
            return view('admin.event.create', compact('brands'));
        }
        else {
            session()->flash('error','Access Denied !');
            return back();
        }
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
             $directory = 'admin/event/audio/'.$slug.'/';
         } else {
             $directory = 'admin/event/video/'.$slug.'/';
         }
         
         $file->move($directory, $fileName);
         $fileUrl = $directory.$fileName;
         return $fileUrl;
     }


    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'parent_id' => 'nullable|integer',
            'position' => 'nullable|integer',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000', // Optional: validate video
            'audio' => 'nullable|mimes:mp3,wav,aac|max:10000',   // Validation for audio
            'image' => 'nullable',
            'banner' => 'nullable',
        ]);
        //dd($request->all());
        $event = new Event;
        $event->title = $request->title;
        $event->video_name = $request->video_name;
        $event->audio_name = $request->audio_name;
        $event->video_link = $request->video_link;
        $event->audio_link = $request->audio_link;
        $event->position = $request->position;
         // Handle video upload
        if ($request->hasFile('video')) {
            $event->video = $this->getFileUrl($request, 'video');
        }

        // Handle audio upload
        if ($request->hasFile('audio')) {
            $event->audio = $this->getFileUrl($request, 'audio'); // Store audio file URL
        }
        if ($request->has('parent_id')) {
            $event->parent_id = $request->parent_id;
        }
        // image save
        if ($request->image){
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/event/'. $img);
            Image::make($image)->save($location);
            $event->image = $img;
        }

        // banner save
        if ($request->banner){
            $image = $request->file('banner');
            $img = 'banner_'.time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/event/'. $img);
            Image::make($image)->save($location);
            $event->banner = $img;
        }

        $event->save();
        Alert::toast('One event added !', 'success');
        return redirect()->route('event.index');
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
            $event= Event::with('brand')->find($id);
            if (!is_null($event)) {
                return view('admin.event.edit', compact('event'));
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
            'title' => 'required|max:255',
            'parent_id' => 'nullable|integer',
            'position' => 'nullable|integer',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000', // Optional: validate video
            'audio' => 'nullable|mimes:mp3,wav,aac|max:10000',   // Validation for audio
            'image' => 'nullable',
            'banner' => 'nullable',
        ]);

        $event = Event::find($id);
        
        $event->title = $request->title;
        $event->video_name = $request->video_name;
        $event->audio_name = $request->audio_name;
        $event->video_link = $request->video_link;
        $event->audio_link = $request->audio_link;
        $event->position = $request->position;
        // Handle video upload
        if ($request->hasFile('video')) {
            $event->video = $this->getFileUrl($request, 'video');
        }

        // Handle audio upload
        if ($request->hasFile('audio')) {
            $event->audio = $this->getFileUrl($request, 'audio'); // Store audio file URL
        }
        if ($request->has('parent_id')) {
            $event->parent_id = $request->parent_id;
        }

        // image save
        if ($request->image){
            if (File::exists('images/event/'.$event->image)){
                File::delete('images/event/'.$event->image);
            }
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/event/'. $img);
            Image::make($image)->save($location);
            $event->image = $img;
        }
        // banner save
        if ($request->banner){
            if (File::exists('images/event/'.$event->banner)){
                File::delete('images/event/'.$event->banner);
            }
            $image = $request->file('banner');
            $img = 'banner_'.time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/event/'. $img);
            Image::make($image)->save($location);
            $event->banner = $img;
        }

        $event->save();
        Alert::toast('event has been updated !', 'success');
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Event::find($id);
        if (!is_null($category)) {
            // Delete the image file
            if (File::exists('images/event/'.$category->image)) {
                File::delete('images/event/'.$category->image);
            }
            if (File::exists('images/event/'.$category->banner)) {
                File::delete('images/event/'.$category->banner);
            }
            // Delete the audio file (if applicable)
            if (!empty($category->audio) && File::exists('admin/event/audio/'.$category->audio)) {
                File::delete('admin/event/audio/'.$category->audio);
            }
        
            // Delete the video file (if applicable)
            if (!empty($category->video) && File::exists('admin/event/video/'.$category->video)) {
                File::delete('admin/event/video/'.$category->video);
            }
        
            // Finally, delete the category from the database
            $category->delete();
        
            // Flash success message
            Alert::toast('Event and associated files have been deleted!', 'success');
            return back();
        } else {
            session()->flash('error', 'Something went wrong!');
            return back();
        }
    }
}
