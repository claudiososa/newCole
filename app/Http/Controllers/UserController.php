<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class UserController extends Controller
{

  public function searchUser(Request $request){
    //dd($request);
    $dni = $request->input('dni');
    // $result = User::Wherehas('dni',$dni)->with('profile')->paginate(10);
    $result = User::Wherehas('profile', function ($query) use ($request) {
      if ($request->surname<>"") {
        $query->where('surname','like','%'.$request->surname.'%');
      }
    })->Where(function ($query) use ($request){
      if ($request->dni<>"") {
        $query->where('dni',$request->dni);
      }
    })->where(function ($query) use ($request){
      if ($request->name<>"") {
        $query->where('name','like','%'.$request->name.'%');
      }
    })->with('profile')->paginate(10);

    return view('users.users',[
      'users' => $result
    ]);
  }



  public function editPassword($id)
  {
      return view('users/editPassword', ['users' => User::findOrFail($id)]);
  }

  public function updatePassword(Request $request)
  {
    //dd($request);
    // if ($request->input('password')=="") {
    //   return redirect('/users');
    // }else{
      $id = $request->input('id');
      User::where('id', $id)->update([
          'password' => bcrypt($request->input('password')),
          'remember_token' => str_random(20),
      ]);
    // }
    return redirect('/users');
  }
}
