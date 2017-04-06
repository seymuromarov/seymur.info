<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $projects = Project::get()->sortByDesc('id');
//        print_r($projects);
        return view('admin.projects.projects',compact('projects'));
    }


    public function create()
    {
        return view('admin.projects.new-project',compact('projects'));
    }

    public function store(Request $request)
    {
        $project = new Project;

        $project->name = $request['name'];
        $project->header = $request['header'];
        $project->content = $request['content'];
        $project->url = $request['url'];
        if (isset($request['image'])) {
            $extension = $request['image']->getClientOriginalExtension();
            $name = 'images/projects/'.$request['image']->getClientOriginalName();
            $request['image']->move('images/projects', $name);
            $project->image = $name;
        }

        $project->save();

        Session::flash('new_project_message', 'Project successfully added!');

        return redirect()->route('projects.index');

    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $projects = Project::findOrFail($id);

        $projects->delete();

        Session::flash('delete_message', 'Project successfully deleted!');

        return redirect()->route('projects.index');
    }
}
