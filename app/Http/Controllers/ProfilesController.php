<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\User;
=======
>>>>>>> 22763169f28dfa3a7264042b2fe9467d899863cd
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
<<<<<<< HEAD
    public function index($user)
    {
        $user = User::findOrFail($user);

        return view('home', [
            'user' => $user,
        ]);
    }
=======
    public function index()
    {
        return view('home');
    }

>>>>>>> 22763169f28dfa3a7264042b2fe9467d899863cd
}
