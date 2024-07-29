<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Response;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $questions = Question::with("response")->get();
        return view("admin.faq.index")->with("questions", $questions);
    }
    public function create()
    {
        return view("admin.faq.create");
    }
    public function store(Request $request)
    {
        $q = Question::create([
            "content" => $request->question,
            'user_id' => 1
        ]);

        Response::create([
            "content" => $request->response,
            'question_id' => $q->id
        ]);
        return redirect("/admin/faq");
    }


    public function destroy($id)
    {
        Question::find($id)->delete();
        return redirect()->back();
    }
}
