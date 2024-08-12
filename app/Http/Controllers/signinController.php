<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class signinController extends Controller
{
    public function index(Request $request)
    {
        try {

            $request->validate([
                'name' => 'required|string',
                'password' => 'required|string',
            ]);

            $user = DB::table('bookusers')->where('name', $request->name)->first();


            if ($user && Hash::check($request->password, $user->password)) {

                return redirect('/');
            } else {
                return view('signin');
            }
        } catch (\Throwable $th) {  
            echo($th);
        }
    }
    function signup(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:8',
            ]);

            DB::table('bookusers')->insert([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
            ]);

            return redirect('/');
        } catch (\Throwable $th) {
            echo $th;
            return view('signup');
        }
    }
}
