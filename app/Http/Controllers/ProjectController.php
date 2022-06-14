<?php

namespace App\Http\Controllers;

use App\ThirdRelation;
use App\Project;
use App\Project_list;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('admin-dashbord.projects.index')->With('projects', Project::get());
    }
    public function create()
    {
        return view('admin-dashbord.projects.create');
    }
    public function store(Request $request)
    {
        $project = Project::create([
            'title' => ['en' => $request->title_en, 'ar' => $request->title_ar],
            'desc' => ['en' => $request->desc_en, 'ar' => $request->desc_ar],
            'image'=>$request->image->store('projects')

        ]);

        if (is_array($request->addmore) || is_object($request->addmore)) {
            if ($project->lists->count() != 0) {
                foreach ($project->lists as $ff) {
                    $ff->delete();
                }
            }
            foreach ($request->addmore as $key => $value) {

                $blog = Project_list::create([
                    'project_id'    => $project->id,
                    'title' => ['en' => $value['title_en'], 'ar' => $value['title_ar']],
                    
                ]);
            }
        }
        // foreach


        return redirect()->route('programs.index')->with(['success' => 'تم الاضافة بنجاح']);
    }
    public function edit($id)
    {
        return view('admin-dashbord.projects.edit')->with('project',Project::find($id));
    }
    public function update(Request $request,$id)
    {   
        $project = Project::find($id);
        if($request->image != null)
        {
            $project->update([
                'title' => ['en' => $request->title_en, 'ar' => $request->title_ar],
                'desc' => ['en' => $request->desc_en, 'ar' => $request->desc_ar],
                'image'=>$request->image->store('projects')
            ]);
        }else{
            $project->update([
                'title' => ['en' => $request->title_en, 'ar' => $request->title_ar],
                'desc' => ['en' => $request->desc_en, 'ar' => $request->desc_ar],
            ]); 
        }
        

        if (is_array($request->addmore) || is_object($request->addmore)) {
            if ($project->lists->count() != 0) {
                foreach ($project->lists as $ff) {
                    $ff->delete();
                }
            }
            foreach ($request->addmore as $key => $value) {
                $blog = Project_list::create([
                    'project_id'    => $project->id,
                    'title' => ['en' => $value['title_en'], 'ar' => $value['title_ar']],
                ]);
            }
        }
        return redirect()->route('programs.index')->with(['success' => 'تم التعديل بنجاح']);

    }
    public function destroy($id){
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('programs.index')->with(['success' => 'تم الحذف بنجاح']);

    }
}
