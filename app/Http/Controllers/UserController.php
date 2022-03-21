<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::latest()->get();
        return view('users.index', compact('users'));
    }
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'password' => $request->password,
            'email' => $request->email
        ]);
        return back();
    }
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
