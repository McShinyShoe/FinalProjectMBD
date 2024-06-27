<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function login() {
        return view('login');
    }
    function loginPost(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $credential = $request->only('email', 'password');
        if(Auth::attempt($credential)) {
            return redirect()->intended(route('home'));
        };
        return redirect(route('login'))->with("error", "invalid login credentials");
    }
    function register() {
        return view("register");
    }
    function registerPost(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);

        $user = User::create($data);
        
        $customerData = [
            'Customers_Name' => $request->name,
            'Customers_EMail' => $request->email,
            'Customers_PhoneNumber' => $request->phone,
            'Customers_Address' => $request->address,
        ];
        $customer = Customers::create($customerData);

        if(!$customer) {
            return redirect(route('register'))->with("error", "registration failed");
        }
        if(!$user) {
            return redirect(route('register'))->with("error", "registration failed");
        }
        return redirect()->intended(route('login'));
    }

    function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->intended(route('home'));
    }
}
