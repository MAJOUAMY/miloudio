<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index()
    {

        $certifs = Certificate::all();
        return view("admin.certificate.index")->with("certifs", $certifs);
    }

    public function create()
    {

        return view("admin.certificate.create");
    }

    public function store(Request $request)
    {
        Certificate::create([
            "name" => $request->name,
            "description" => $request->description,
            "duration" => $request->duration,
            "logo" => $request->file("logo")->store("certificates", "public"),
            "url" => $request->url,
            "user_id" => 1
        ]);
        return redirect("/admin/certificate");
    }

    public function destroy($id)
    {
        Certificate::find($id)->delete();
        return redirect()->back();
    }
}
