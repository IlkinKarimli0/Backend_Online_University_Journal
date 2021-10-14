<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class LoginSystem extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view("login");
    }

    //Function That check user input for loging in

    public function check(Request $request){
//        dd($request->email);
        $userInfo = DB::table('users')->where('email',$request->email)->first();
        /*Errors*/
//        dd($userInfo);
        if($userInfo != null){
            if($userInfo->password == $request->password){
                session()->put('user_id',$userInfo->user_id);
                session()->put('role_id',$userInfo->role_id);
                session()->put('avatar',$userInfo->avatar);
                return redirect('/home');}
            else{
                return back()->with('errorp','Incorect password');
            }
        }else{
            return back()->with('errore','Undefined Email');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logout(){
        $data = session()->get('user_id');
        session()->forget('user_id');
        session()->forget('year_id');
        return redirect('login');
    }
    public function destroy($id)
    {
        //
    }
}
