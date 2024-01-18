<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Client;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $action_icons = [
            "icon:pencil | click:redirect('/user/{id}')",
            "icon:trash | color:red | click:deleteProject({id}, '{title}')",
        ];

        $projects = Project::all();
        $types = Type::all();
        $clients = Client::all();

        

        return view('projects.index', compact('action_icons', 'projects', 'types', 'clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //todoo: validate the request before creating the record
        Project::create([
            'title' => $request->title,
            'type_id' => $request->type,
            'client' => $request->client,
            'volume' => $request->volume,
            'word_count' => $request->word_count,
            'deadline' => $request->deadline,
        ]);

        return redirect()->back()->with('success', 'Project added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::find($id)->delete();

        return redirect()->back();
    }
}
