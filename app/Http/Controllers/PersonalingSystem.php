<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class PersonalingSystem extends Controller
{
    public function view(){
        $id = session()->get('user_id');
//        dd($id);
        $name = DB::table('users')->where('user_id','=',$id)->first();
//        dd($name);
        return view('personal',(compact('name')));
    }

    public function view_password(){
        return view('password');
    }
    public function change_password(Request $request){
        $user_id = session()->get('user_id');
        $user = DB::table('users')->where('user_id','=',$user_id)->first();

        if($request->new_pass == $request->new_pass_confirm) {
            if ($user->password == $request->old_pass) {
                DB::table('users')->where('user_id', '=', $user_id)->update(['password' => $request->new_pass]);
                return redirect('home')->with('alert','Your password updated successfully!');
            } else {
                return back()->with('errorp', 'Incorrect password');
            }
        }else{
            return back()->with('errorc',"Passwords do not match");
        }

    }
    public function update_avatar(Request $request){

        if ($request->hasFile('avatar')){
            dd($request->avatar);
            $avatar= $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('assets/img/'  .  $filename));
            $id = session()->get('user_id');
            DB::table('users')->find($id)->update(['avatar'=>$filename]);
        }
        return view('login');

    }

}
