<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::with([
            "experiences",
            "services" => function ($query) {
                $query->take(4);
            },
            "projects" => function ($query) {
                $query->take(2);
            },
            "skills" => function ($query) {
                $query->take(6);
            }
        ])
            ->find(1);

        return view("welcome")->with("user", $user);
    }
}
