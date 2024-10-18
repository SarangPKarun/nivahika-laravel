<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();

        return view('projects.index', ['projects' => $projects]);
    }

    public function add(){
        return view('projects.add');
    }

    public function store(Request $request){
        // dd($request);
        $data = $request->validate([
            'projectname'=> 'required',
            'department'=> 'required',
            'intender'=> 'required',
            'dateofinitiation'=> 'required',
        ]);

        $newProject = Project::create($data);
        return redirect(route('project.index'));
    }

    public function edit(Project $project){
        // dd($project);
        return view('projects.edit', ['project' => $project]);
    }

    public function update(Project $project, Request $request){
        // dd($request);
        $data = $request->validate([
            'projectname'=> 'required',
            'department'=> 'required',
            'intender'=> 'required',
            'dateofinitiation'=> 'required',
        ]);

        $project->update($data);
        return redirect(route('project.index'))->with('success', 'Project updated successfully');
    }

    public function destroy(Project $project){
        $project->delete();
        return redirect(route('project.index'))->with('success', 'Project deleted successfully');
    }
}
