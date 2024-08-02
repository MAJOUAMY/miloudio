<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::with(["services", "certificates", "skills", "reviews", "questions" => function ($query) {
            $query->with("response");
        }])->withCount("reviews")->find(1);
        // dd($user);
        return view("pages.services")->with(["user" => $user]);
    }
    public function adminIndex()
    {
        $services = Service::all();
        return view("admin.services.index")->with(["services" => $services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.services.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Service::create([
            "name" => $request->name,
            "logo" => $request->file("logo")->store("services", "public"),
            "user_id" => 1

        ]);
        return redirect("/admin/service");
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Service::find($id)->delete();
        return redirect()->back();
    }
}
