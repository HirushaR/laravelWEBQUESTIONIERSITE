<?php

namespace App\Http\Controllers;
use App\Question;
use DB;
use DateTime;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function insert(Request $request)
    {
        $now = new DateTime();
        $question = $request->input('editordata');
        $answer = $request->input('editordata2');
        DB::table('question')->insert([
            'question'=>$question,
            'answer'=>$answer
        ]);
        return back();

    }
    public function viewQuestionONAdmin()
    {
        $data = DB::table('question')->get()->last();
        return view('admin',compact('data'));
    }
    public function viewQuestionOn($lang){

//        $question = Question::where()->get()->last();
//        $question = new Question();
//        $question->ca = 1;
//        $question->save();
        $question = DB::table('question')->get()->last();
        return view('questions/language',compact('question'));
    }
    public function insertAdminAnswer(Request $request)
    {

        $question = $request->input('fieldNameDashboard');
        DB::table('question')->insert([
            'answer'=>$question
        ]);
        return back();
    }
}
