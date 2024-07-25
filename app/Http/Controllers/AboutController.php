<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{

    public function index()
    {
        $user = User::with(['certificates', 'blogs' ])->withCount('projects')->find(1);

        return view('pages.about')->with('user', $user);
    }

    public function edit()
    {
        $user = User::find(1);

        return view("admin.about")->with("user", $user);
    }
    public function update(Request $request)
    {
        $user = User::find(1);


        if ($request->hasFile('image')) {

            $image = $request->file('image')->store('/profiles', 'public');


            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }
            $user->image = $image;
        }



        $user->name = $request->name;
        $user->email = $request->email;
        $user->work_email = $request->work_email;
        $user->experience_years = $request->experience_years;
        $user->password = Hash::make($request->password);


        $user->save();

        return redirect()->back()->with('success', 'Information updated successfully');
    }
}
