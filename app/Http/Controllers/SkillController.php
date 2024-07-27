<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::all();
        return view("admin.skill.index")->with("skills", $skills);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.skill.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Skill::create([
            "name" => $request->name,
            "logo" => $request->file("logo")->store("skills", "public"),
            "user_id" => 1
        ]);
        return redirect("/admin/skill");
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)

    {
        Skill::find($id)->delete();
        return redirect()->back();
    }
}
