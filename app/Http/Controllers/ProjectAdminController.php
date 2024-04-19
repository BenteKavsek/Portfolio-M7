<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectAdminController extends Controller
{
   
    public function index()
    {
        $projects = Project::paginate(2);
        return view('dashboard.projects.index', ['projects'=>$projects]);
    }

  

    public function create()
    {
        $projects = Project::paginate(2);
        return view('dashboard.projects.create', ['projects'=>$projects]);
    }


 
    public function store(Request $request)
    {
        $valid_data = $request->validate([
            'title'       => 'required|unique:projects|max:70',
            'image'       => 'required',
            'description' => 'required|unique:projects|max:350',
        ]);
        
        $item = new Project();
        $item->title=$valid_data['title'];
        $item->image=$valid_data['image'];
        $item->description=$valid_data['description'];
        $item->save();

        return redirect( route('project.show', $item->id ) );
    }

    
    
    public function show(Project $project)
    {
        return view('dashboard.projects.show', ['project'=>$project]);
    }

    
    
    public function edit(Project $project)
    {
        return 'edit functie';
    }

   
    
    public function update(Request $request, Project $project)
    {
        return 'Updatennnn';
    }

   
    
    public function destroy(Project $project)
    {
        return 'kapot maken hehehe';
    }
}
