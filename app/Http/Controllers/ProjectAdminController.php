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
        dump( $request->all() );
    }

    
    
    public function show(Project $project)
    {
        return 'show functiw';
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
