<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {

        $exps = Experience::all();
        return view("admin.experience.index")->with("exps", $exps);
    }
    public function create()
    {

        return view("admin.experience.create");
    }
    public function store(Request $request)
    {
        // if ($request->hasFile("company_logo")) {
        //     $logo = $request->file("company_logo")->store("/experiences", "public");
        //     dd($logo);
        //     $request->merge(["company_logo" => $logo]);
        // }

        Experience::create([
            "company" => $request->company,
            "company_logo" => $request->file("company_logo")->store("/experiences", "public"),
            "function" => $request->function,
            "start_year" => $request->start_year,
            "end_year" => $request->end_year,
            // "description"=>$request->description,
            "user_id" => 1,

        ]);
        return redirect("/admin/experience");
    }
    public function destroy($id)
    {
        Experience::find($id)->delete();
        return redirect()->back();
    }
}
