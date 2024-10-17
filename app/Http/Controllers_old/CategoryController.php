<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use Alert;
use Image;
use File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->type == 1) {
            $categories = Category::with('brand')->get();
            return view('admin.category.index', compact('categories'));
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
            $categories = Brand::select('id','title')->get();
            return view('admin.category.create', compact('categories'));
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
            'parent_id' => 'nullable|integer',
            'position' => 'nullable|integer',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000', // Optional: validate video
            'audio' => 'nullable|mimes:mp3,wav,aac|max:10000',   // Validation for audio
            'image' => 'nullable',
            'banner' => 'nullable',
        ]);
        //dd($request->all());
        $category = new Category;
        $category->title = $request->title;
         // Handle video upload
        if ($request->hasFile('video')) {
            $category->video = $this->getFileUrl($request, 'video');
        }

        // Handle audio upload
        if ($request->hasFile('audio')) {
            $category->audio = $this->getFileUrl($request, 'audio'); // Store audio file URL
        }
        if($request->position != NULL){
            $category->position = $request->position;
        }
        if ($request->has('parent_id')) {
            $category->parent_id = $request->parent_id;
        }
        // image save
        if ($request->image){
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/category/'. $img);
            Image::make($image)->save($location);
            $category->image = $img;
        }

        // banner save
        if ($request->banner){
            $image = $request->file('banner');
            $img = 'banner_'.time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/category/'. $img);
            Image::make($image)->save($location);
            $category->banner = $img;
        }

        $category->save();
        Alert::toast('One category added !', 'success');
        return redirect()->route('category.index');
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
            $category = Category::find($id);
            if (!is_null($category)) {
                $categories = Brand::get();
                return view('admin.category.edit', compact('category', 'categories'));
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
            'title' => 'required',
            'parent_id' => 'nullable|integer',
            'position' => 'nullable|integer',
            'image'=> 'nullable',
            'banner'=> 'nullable',
        ],
            [
                'title.required' => 'Please provide a category name',
            ]);

        $category = Category::find($id);
        
        $category->title = $request->title;
        $category->position = $request->position;
        // Handle video upload
        if ($request->hasFile('video')) {
            $category->video = $this->getFileUrl($request, 'video');
        }

        // Handle audio upload
        if ($request->hasFile('audio')) {
            $category->audio = $this->getFileUrl($request, 'audio'); // Store audio file URL
        }
        if ($request->has('parent_id')) {
            $category->parent_id = $request->parent_id;
        }

        // image save
        if ($request->image){
            if (File::exists('images/category/'.$category->image)){
                File::delete('images/category/'.$category->image);
            }
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/category/'. $img);
            Image::make($image)->save($location);
            $category->image = $img;
        }
        // banner save
        if ($request->banner){
            if (File::exists('images/category/'.$category->banner)){
                File::delete('images/category/'.$category->banner);
            }
            $image = $request->file('banner');
            $img = 'banner_'.time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/category/'. $img);
            Image::make($image)->save($location);
            $category->banner = $img;
        }
        if ($request->has('is_featured')) {
            $category->is_featured = 1;
        }
        else{
            $category->is_featured = 0;
        }

        $category->save();
        Alert::toast('Category has been updated !', 'success');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if (!is_null($category)) {
            if (File::exists('images/category/'.$category->image)){
                File::delete('images/category/'.$category->image);
            }
            $category->delete();
            Alert::toast('Category has been deleted !', 'success');
            return back();
        }
        else {
            session()->flash('error','Something went wrong !');
            return back();
        }
    }
}
