<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $user = User::find(1);

        $projects = Project::paginate(3);

        return view("pages.portfolio")->with(["user" => $user, "projects" => $projects]);
    }
    public function AdminIndex()
    {
        $projects = Project::all();
        return view("admin.project.index")->with("projects", $projects);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.project.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Project::create([
            "title" => $request->title,
            "description" => $request->description,
            "image" => $request->image->store('projects', "public"),
            "url" => $request->url,
            "user_id" => 1,

        ]);
        return redirect("/admin/projects");
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
    public function destroy(Project $project)
    {
        //
    }
}
