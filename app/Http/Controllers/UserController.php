<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function getUsers(){
        $users = User::orderBy('created_at', 'desc')->get();

        $data = array(
            'users' => $users
        );

        return view('home', $data);
    }


    public function formUser($id = null) {

        if($id == null){
            //for add new
            $user = null;
            return view('UserForm', ['user' => $user]);
        }
        else{
            //for edit
            $user = User::findOrFail($id);
            return view('UserForm', ['user' => $user]);
        }
        
    }

    public function addUser(Request $request) {

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = new User;

        $user->name = $name;
        $user->email = $email;
        $user->password = $password;

        if($user->save()) {
            return redirect()->action('UserController@getUsers');
        }

    }

    public function deleteUser($id) {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->action('UserController@getUsers');
    }

    public function editUser(Request $request, $id) {

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::findOrFail($id);

        $user->name = $name;
        $user->email = $email;
        $user->password = $password;

        if($user->update()) {
            return redirect()->action('UserController@getUsers');
        }

    }

    
}
