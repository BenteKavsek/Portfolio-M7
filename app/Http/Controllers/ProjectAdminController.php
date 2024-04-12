<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::paginate(2);
        return view('dashboard.projects.index', ['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return 'hier kan je iets create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'store functie';
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return 'show functiw';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return 'edit functie';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        return 'Updatennnn';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        return 'kapot maken hehehe';
    }
}
