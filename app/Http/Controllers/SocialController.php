<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index()
    {
        $socials = Social::all();

        return view("admin.social.index")->with("socials", $socials);
    }

    public function create()
    {
        return view("admin.social.create");
    }
    public function store(Request $request)

    {   
        $request->validate([
            "url"=>"required",
            "logo"=>"required"
        ]);

        Social::create([
             "url"=>$request->url,
             "logo"=>$request->file("logo")->store("socials",'public'),
             "user_id"=>1
        ]);
        return redirect("/admin/social");
    }

    public function destroy()
    {
    }
}
