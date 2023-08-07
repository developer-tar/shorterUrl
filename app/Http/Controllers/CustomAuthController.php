<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use App\Models\UserUrl;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {
        if (Auth::check())
            return redirect("dashboard");
        return view("auth.login");
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }
        return redirect("login")->with('failed', 'Login details are not valid');
    }



    public function registration()
    {
        if (Auth::check())
            return redirect('dashboard');
        return view('auth.registration');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $check = $this->create($data);

        return redirect("login");
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'status' => $data['status']
        ]);
    }
    public function dashboard()
    {
        if (Auth::check()) {
            $records = UserUrl::withCount('hiturl');
            if (Auth::user()->status == 'User')
                $records = $records->where('user_id',Auth::id());
            $records = $records->orderbyDesc('id')->get();
            // dd($reco)
            return view('dashboard')->with('records', $records);
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}