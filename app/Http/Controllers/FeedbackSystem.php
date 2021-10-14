<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackSystem extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->content,$request->anom,$request->subject_id);
        if(!$request->anom){$user_id= session()->get('user_id');}
        else{$user_id = 0;}
        $date = now();
        DB::insert('insert into feedbacks (user_id,subject_id,content,created_at) values(?,?,?,?)',[$user_id,$request->subject_id,$request->content,$date]);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if(!session()->get("user_id")){
            return "Undefined Action";
        }
        $userInfo= DB::table('users')->where('user_id',session()->get('user_id'))->first();
        $subjects= DB::table('subjects')->where('year_id',$userInfo->year_id)->where('faculty_id',$userInfo->faculty_id)->get();
        return view('feedback',compact('subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //FEEDBACK SYSTEM FOR ADMIN PAGE
    public function view(){
        $informations = DB::table('feedbacks')->join('users','feedbacks.user_id','=','users.user_id')->
            join('subjects','feedbacks.subject_id','=','subjects.subject_id')->get();


        $null_feedbacks = DB::table('feedbacks')->where('user_id','=',0)->
        join('subjects','feedbacks.subject_id','=','subjects.subject_id')->get();
//        dd($informations);
        return view('feedback_0',compact('informations','null_feedbacks'));
    }
    public function delete($id){
        DB::delete('delete from feedbacks where id = ?',[$id]);
        return redirect('feedback1');
    }
}
