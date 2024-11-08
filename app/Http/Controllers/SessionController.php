<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller
{
    public function createaccountView(){
        return view('createaccount');
    }

    public function store(){
        $attributes = request()->validate([
            'name'=> 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:7|max:255',
        ]);

        $user = User::create($attributes);

        // log the user in now
        auth()->login($user);

        session()->flash('success', 'Your account has been created');

        return redirect('/');
    }

    public function destroy(){
        auth()->logout();

        session()->flash('success', 'You have logged out of your account');

        return redirect('/');
    }

    public function loginView(){
        return view('login');
    }

    public function create(){

        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($attributes)) {
            session()->flash('success', 'You have succesfully logged in');
            return redirect('/');
        }

        return back()
            ->withInput()
            ->withErrors(['email' => 'Your provided credentials could not be verified']);
    }

    
}
