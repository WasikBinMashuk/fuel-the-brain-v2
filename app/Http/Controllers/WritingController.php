<?php

namespace App\Http\Controllers;

use App\Models\WritingAnswer;
use App\Models\WritingQuestion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class WritingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $topic = DB::select('select id, topic_name from writing_questions order by rand() limit 1');
        
        return view('writing',compact('topic'));
    }
    public function insertIndex()
    {
        return view('writing_ques_ins');
    }

    public function store(Request $request){
       
        $request->validate([
            'topic_name' => 'required|unique:writing_questions,topic_name|max:255'
        ]);

        WritingQuestion::create([
            'topic_name' => $request->topic_name
        ]);

        return redirect()->back()->with('msg', 'Question inserted successfuly');
    }

    public function ansSubmit(Request $request){


        WritingAnswer::insert([
            'answers' => $request->answers,
            'user_id' => Auth::user()->id,
            'writing_question_id' => $request->writing_question_id,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->back();
    }
}
