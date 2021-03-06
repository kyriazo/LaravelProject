<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    
    public function index()
    {

        $projects = Project::all();

        return view('projects.index',compact('projects') );
    }

    public function create()
    {

        $projects = Project::all();

        return view('projects.create');
    }

    public function store() {

        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Project::create(request(['title','description']));

        return redirect('/projects');

    }

    public function edit(Project $project)
    {
        return view('projects.edit',compact('project'));
    }

    public function update(Project $project)    
    {

        $project->update(['title','description']);

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        return  view('projects.show',compact('project'));
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect('/projects');
    }

    
}
