<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show (string $id): View
    {
        return view('user.profile', [
            'user' => User::find0rFail($id)
        ]);
    }
}
