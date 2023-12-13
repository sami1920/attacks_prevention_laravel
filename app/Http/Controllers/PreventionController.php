<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreventionController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function login(Request $request)
    {
        $name = $request->input('name');
        $password = $request->input('password');

        // With ORM
        $user = User::where('name', $name)->where('password', $password)->first();

        // Without ORM
        // $user = DB::select("SELECT * FROM users WHERE name = '$name");


        if ($user) {
            dd('Congrats!');
        }

        return redirect()->route('form')->with('error', 'Invalid credentials');
    }
}
