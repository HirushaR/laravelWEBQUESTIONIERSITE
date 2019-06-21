<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class python_question_controller extends Controller
{

    public function index(){
        return view('welcome');
    }
    public function insert(Request $request)
    {

        $question = $request->input('editordata');

        DB::table('python_question')->insert([
            'question'=>$question

        ]);
        return back();

    }
    public function viewQuestionONAdmin()
    {
        $data = DB::table('python_question')->get()->last();
        return view('admin',compact('data'));
    }
    public function viewQuestionOn(){
        $question = DB::table('python_question')->get()->last();
        return view('welcome',compact('question'));
    }
}
