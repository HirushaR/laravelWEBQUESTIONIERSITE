<?php

namespace App\Http\Controllers;
use DB;
use App\Answer;
use Illuminate\Http\Request;

use DateTime;
class AnswerController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function insert(Request $request)
    {
        $now = new DateTime();

        $answer= $request->input('useranswer');
        $uid = \Auth::user()->id;
        $qid = DB::table('question')->get()->last();
        DB::table('answer')->insert([
            'userID'=>$uid,
            'questionID'=>$qid->id,
            'answer'=>$answer,
        ]);
        return back();
    }
    public function getAllAnswers(){
        $data = DB::table('answer')->get()->all();
        return view('questions/Answers' , compact('data'));
    }



}
