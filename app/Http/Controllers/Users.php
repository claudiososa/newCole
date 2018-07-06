<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Profile;
use DB;
//use Hash;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$users = Profile::where('id','>', '0')->with('user')->paginate(2);
      $users = User::with('profile')->paginate(3);
      //dd($users);
      return view('users/users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $name = $request->input('name');
      $password = $request->input('password');
      $email = $request->input('email');
      $dni = $request->input('dni');
      $status = $request->input('status');
      $type = $request->input('type');
      $surname = $request->input('surname');
      $phone = $request->input('phone');
      $address = $request->input('address');

      //$hash_password = Hash::make($password);

      $userAdd = User::create([
          'name' => $name,
          'password' => bcrypt($request->input('dni')),
          'email' => $email,
          'dni'=>$dni,
          'type'=>$type,
          'status'=>$status,
          'remember_token' => str_random(10),
      ]);
      //dd($userId);
      Profile::create([
        'user_id'=>$userAdd->id,
        'surname'=>$surname,
        'phone'=>$phone,
        'address'=>$address
      ]);
      return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      return view('users/profile', ['users' => User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return view('users/edit', ['users' => User::findOrFail($id)]);
    }


    public function editPassword($id)
    {
      return view('users/editPassword', ['users' => User::findOrFail($id)]);
    }

    public function updatePassword(Request $request, $id)
    {
      dd($request);
      if ($request->input('password')=="") {
        return redirect('/users');
      }else{
        User::where('id', $id)->update([
            'password' => bcrypt($request->input('password')),
            'remember_token' => str_random(20),
        ]);
      }
      //return redirect('/users');
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
      $name = $request->input('name');
      $email = $request->input('email');
      $dni = $request->input('dni');
      $status = $request->input('status');
      $type = $request->input('type');

      $surname = $request->input('surname');
      $phone = $request->input('phone');
      $address = $request->input('address');
      $password = $request->input('password');

      if ($password=="") {
        User::where('id', $id)->update([
            'name' => $name,
            'email' => $email,
            'dni' => $dni,
            'type'=>$type,
            'status'=>$status,
        ]);

      }else{

        //$hash_password = Hash::make($password);
        User::where('id', $id)->update([
            'name' => $name,
            'password' => bcrypt($request->input('password')),
            // 'password' => $hash_password,
            'email' => $email,
            'dni' => $dni,

        ]);

      }
      Profile::where('user_id',$id)->update([
        'phone' => $phone,
        'address' => $address,
        'surname'=> $surname
      ]);


      return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $users = User::findOrFail($id);

      $users->delete();

      return redirect('/users/');
    }
}
