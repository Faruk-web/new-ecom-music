<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Album;
use App\Models\Media;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use Auth;
use Alert;
use Image;
use File;
class AlbumController extends Controller
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
            $categories = Album::with('brand','category')->get();
      
            return view('admin.album.index', compact('categories'));
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
            return view('admin.album.create', compact('brands'));
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

    public function store(Request $request)
    {
        // Create the album first
    $album = new Album();
    $album->brand_id = $request->brand_id;
    $album->category_id = $request->category_id;
    $album->title = $request->title;  // This must be a string
    $album->short_descp = $request->short_descp;
    $album->long_descp = $request->long_descp;
    // Handle image (thumbnail) and banner upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/album'), $imageName);
        $album->image = $imageName;
    }

    if ($request->hasFile('banner')) {
        $banner = $request->file('banner');
        $bannerName = time() . '_banner.' . $banner->getClientOriginalExtension();
        $banner->move(public_path('images/album'), $bannerName);
        $album->banner = $bannerName;
    }

    $album->save(); // Save the album first

    // Loop through video uploads and links
    if ($request->has('video') || $request->has('video_link')) {
        foreach ($request->video as $index => $video) {
            $videoFilePath = null;
            $videoLink = null;

            if ($request->hasFile('video') && isset($request->video[$index])) {
                // Save the video file
                $videoFile = $request->file('video')[$index];
                $videoFileName = time() . '_video_' . uniqid() . '.' . $videoFile->getClientOriginalExtension();
                $videoFilePath = 'admin/album/videos/' . $videoFileName;
                $videoFile->move(public_path('admin/album/videos'), $videoFileName);
            }

            if (isset($request->video_link[$index])) {
                // Save the video link
                $videoLink = $request->video_link[$index];
            }

            Media::create([
                'album_id' => $album->id,
                'video_file' => $videoFilePath,
                'video_link' => $videoLink,
            ]);
        }
    }

    // Loop through audio uploads and links
    if ($request->has('audio') || $request->has('audio_link')) {
        foreach ($request->audio as $index => $audio) {
            $audioFilePath = null;
            $audioLink = null;

            if ($request->hasFile('audio') && isset($request->audio[$index])) {
                // Save the audio file
                $audioFile = $request->file('audio')[$index];
                $audioFileName = time() . '_audio_' . uniqid() . '.' . $audioFile->getClientOriginalExtension();
                $audioFilePath = 'admin/album/audios/' . $audioFileName;
                $audioFile->move(public_path('admin/album/audios'), $audioFileName);
            }

            if (isset($request->audio_link[$index])) {
                // Save the audio link
                $audioLink = $request->audio_link[$index];
            }

            Media::create([
                'album_id' => $album->id,
                'audio_file' => $audioFilePath,
                'audio_link' => $audioLink,
            ]);
        }
    }

    Alert::toast('Album successfully created with media!', 'success');
    return redirect()->route('album.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->type == 1) {
            $album = Album::findOrFail($id);
            if (!is_null($album)) {
                $media = Media::where('album_id', $id)->get();
                // Get all brands and categories for the select dropdowns
                $brands = Brand::all();
                $categories = Category::all();
                return view('admin.album.edit', compact('album', 'media', 'brands', 'categories'));
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
        $album = Album::findOrFail($id);
    
        // Validate album data
        $request->validate([
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Update album details
        $album->brand_id = $request->brand_id;
        $album->category_id = $request->category_id;
        $album->title = $request->title;
        $album->short_descp = $request->short_descp;
        $album->long_descp = $request->long_descp;
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($album->image) {
                Storage::delete('images/album/' . $album->image); // Delete old image
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/album'), $imageName);
            $album->image = $imageName; // Set new image name
        }
    
        // Handle banner upload
        if ($request->hasFile('banner')) {
            // Delete old banner if it exists
            if ($album->banner) {
                Storage::delete('images/album/' . $album->banner); // Delete old banner
            }
            $banner = $request->file('banner');
            $bannerName = time() . '_banner.' . $banner->getClientOriginalExtension();
            $banner->move(public_path('images/album'), $bannerName);
            $album->banner = $bannerName; // Set new banner name
        }
    
        $album->save(); // Save the updated album
    
        return redirect()->back()->with('success', 'Album updated successfully!');
    }
    public function uploadMedia(Request $request, $id)
{
    // Fetch existing media entries associated with the album
    $mediaEntries = Media::where('album_id', $id)->get();

    // Validate media data
    $request->validate([
        'video.*' => 'nullable|file|mimes:mp4,mov,avi,wmv|max:20480',
        'audio.*' => 'nullable|file|mimes:mp3,wav|max:10240',
        'video_link.*' => 'nullable|url',
        'audio_link.*' => 'nullable|url',
    ]);

    // Update existing media entries
    foreach ($mediaEntries as $index => $entry) {
        // Update video files
        if ($request->hasFile("video.$index")) {
            $videoFile = $request->file("video.$index");
            $videoPath = $videoFile->store('admin/album/videos', 'public');
            $entry->video_file = $videoPath;
        }

        // Update video links
        if ($request->input("video_link.$index")) {
            $entry->video_link = $request->input("video_link.$index");
        }

        // Update audio files
        if ($request->hasFile("audio.$index")) {
            $audioFile = $request->file("audio.$index");
            $audioPath = $audioFile->store('admin/album/audios', 'public');
            $entry->audio_file = $audioPath;
        }

        // Update audio links
        if ($request->input("audio_link.$index")) {
            $entry->audio_link = $request->input("audio_link.$index");
        }

        // Save updated media entry
        $entry->save();
    }

    // Handle new media entries if any (i.e., video or audio files/links that don't belong to an existing media entry)
    if ($request->hasFile('video') || $request->hasFile('audio') || $request->input('video_link') || $request->input('audio_link')) {
        foreach ($request->file('video', []) as $newVideoFile) {
            if ($newVideoFile) {
                $newMedia = new Media();
                $newMedia->album_id = $id;
                $newMedia->video_file = $newVideoFile->store('admin/album/videos', 'public');
                $newMedia->save();
            }
        }

        foreach ($request->input('video_link', []) as $newVideoLink) {
            if ($newVideoLink) {
                $newMedia = new Media();
                $newMedia->album_id = $id;
                $newMedia->video_link = $newVideoLink;
                $newMedia->save();
            }
        }

        foreach ($request->file('audio', []) as $newAudioFile) {
            if ($newAudioFile) {
                $newMedia = new Media();
                $newMedia->album_id = $id;
                $newMedia->audio_file = $newAudioFile->store('admin/album/audios', 'public');
                $newMedia->save();
            }
        }

        foreach ($request->input('audio_link', []) as $newAudioLink) {
            if ($newAudioLink) {
                $newMedia = new Media();
                $newMedia->album_id = $id;
                $newMedia->audio_link = $newAudioLink;
                $newMedia->save();
            }
        }
    }

    return redirect()->route('album.edit', $id)->with('success', 'Media updated successfully!');
}

 
    
    
    // Helper function to store files
    private function storeFile($file, $folder)
    {
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/' . $folder, $fileName); // Save to 'public/album/images', 'public/album/videos', etc.
        return $fileName;
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the album by ID
        $album = Album::find($id);
    
        // Check if the album exists
        if (!is_null($album)) {
    
            // Find all media entries associated with the album
            $mediaEntries = Media::where('album_id', $id)->get();
    
            // Loop through media entries and delete associated files
            foreach ($mediaEntries as $entry) {
                // Delete video file if it exists
                if (!is_null($entry->video_file) && File::exists('admin/album/videos/' . basename($entry->video_file))) {
                    File::delete('storage/admin/album/videos/' . basename($entry->video_file));
                }
    
                // Delete audio file if it exists
                if (!is_null($entry->audio_file) && File::exists('admin/album/audios/' . basename($entry->audio_file))) {
                    File::delete('admin/album/audios/' . basename($entry->audio_file));
                }
    
                // Delete the media entry from the database
                $entry->delete();
            }
    
            // Delete album image if it exists
            if (!is_null($album->image) && File::exists('images/album/' . $album->image)) {
                File::delete('images/album/' . $album->image);
            }
    
            // Delete album banner if it exists
            if (!is_null($album->banner) && File::exists('images/album/' . $album->banner)) {
                File::delete('images/album/' . $album->banner);
            }
    
            // Delete the album from the database
            $album->delete();
    
            // Set success message and return back
            Alert::toast('Album and associated media have been deleted!', 'success');
            return back();
    
        } else {
            // If album does not exist, return an error
            session()->flash('error', 'Something went wrong!');
            return back();
        }
    }
    
    
}
