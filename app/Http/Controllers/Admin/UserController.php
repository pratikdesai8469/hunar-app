<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use App\User;
use App\Traits\FireBaseDB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    use FireBaseDB;

    public function store(Request $request)
    {
        $validatior = Validator::make($request->all(), [
            // 'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($validatior->fails()){
            return redirect()
            ->back()
            ->withErrors($validatior)
            ->withInput();
        }

        // $user->name = 'dhruv';
        $user['email'] = $request->email;
        if($request->has('password')){
            $user['password'] = Hash::make($request->password);
        }
        $db = $this->firebase;
        $db->getReference('users')->push($user);
        return redirect('login');
    }

    public function login(Request $request)
    {
        $db = $this->firebase;
        $users = $db->getReference('users')->getValue();

        foreach ($users as $key => $user) {
            if($user['email']  == $request->email){
                if(Hash::check($request->password,$user['password'])){
                    $user['id'] = $key;
                    $userData = new User();
                    $userData->fill($user);
                    session(['user' => $user]);
                    Auth::login($userData);
                    if (Auth::check()) {
                        return redirect('home');
                    }
                }
            }
        }
        dd('login fail');
    }

    public function loggedOut(Request $request)
    {
        session()->forget('user');
    }

    public function dashboard()
    {
        dd(Auth::user());
        return view('home');
    }
}
