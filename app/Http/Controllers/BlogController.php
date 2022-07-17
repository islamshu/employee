<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin-dashbord.blogs.index')->with('blogs',Blog::get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-dashbord.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Blog::create([
            'title'=>['ar'=>$request->title_ar,'en'=>$request->title_en],
            'description'=>['ar'=>$request->description_ar,'en'=>$request->description_en],
            'image'=>$request->image->store('blogs'),
            'slug'=>str_replace(' ', '_', $request->title_en).Blog::count()
        ]);
        return redirect()->route('blogs.index')->with(['success'=>'تم الاضافة بنجاح']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin-dashbord.blogs.edit')->With('blog',Blog::find($id));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog =Blog::find($id);
        if($request->image != null){
            $blog->update([
                'title'=>['ar'=>$request->title_ar,'en'=>$request->title_en],
                'description'=>['ar'=>$request->description_ar,'en'=>$request->description_en],
                'image'=>$request->image->store('blogs'),
            ]);
        }else{
            $blog->update([
                'title'=>['ar'=>$request->title_ar,'en'=>$request->title_en],
                'description'=>['ar'=>$request->description_ar,'en'=>$request->description_en],
            ]);
        }
        
        return redirect()->route('blogs.index')->with(['success'=>'تم التعديل بنجاح']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog =Blog::find($id);
        $blog->delete();
        return redirect()->route('blogs.index')->with(['success'=>'تم الحذف بنجاح']);

    }
}
