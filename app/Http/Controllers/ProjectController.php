<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('project.index', ['projects' => $projects]);
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        $project =  new Project();
        $project->naziv = $request->input('naziv');
        $project->broj_bodova = $request->input('brojBodova');
        $project->save();

        return redirect('/projects');
    }

    /**
     * Buduci da smo u ruti zahtevali parametar $id,
     * ovde ga mozemo samo zatraziti od Laravela da nam da kao parametar metode
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $project = Project::find($id);

        return view('project.edit', ['project' => $project]);
    }

    public function update(Request $request, $id)
    {
        $project = Project::find($id);
        $project->update([
            'naziv' => $request->input('naziv'),
            'broj_bodova' => $request->input('brojBodova'),
        ]);

        return redirect('/projects');
    }
}
