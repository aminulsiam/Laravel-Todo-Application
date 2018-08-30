<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // Show User Registration Form
    public function userRegForm(){
    	return view('users.create');
    }

    // Show User Login Form
    public function userLogForm(){
    	return view('users.loginform');
    }

    // Store User Data
    public function store(UserRequest $request){
    	User::create([
    		'name'=>$request->get('name'),
    		'email'=>$request->get('email'),
    		'password'=>bcrypt($request->get('password'))
    	]);

    	return redirect('login')->with('flash_notification.message','user registration successfully')->with('flash_notification.level','success');
    }

    // User Update form
    public function userUpdatedForm(User $user){
    	return view('users.profile_update',compact('user'));
    }

    // User Updated
    public function userUpdated(Request $request){

    	$this->validate($request, [
            'name'      => 'required|',
            'email'     => 'required|email',
            'password'  => 'confirmed'
        ]);

    	// Getting users id 
        $user = User::find($request->id);

        $user->name     = $request->get('name');
        $user->email    = $request->get('email');
  
        if($request->get('password') !== ''){
            $user->password = bcrypt($request->get('password'));
        }

        // Updating this user 
        $user->update();

        return redirect('/todo')
            ->with('flash_notification.message', 'Profile updated successfully')
            ->with('flash_notification.level', 'success');
    
    }





}
