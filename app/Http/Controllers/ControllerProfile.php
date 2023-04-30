<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ControllerProfile extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile')->with('user', $user);
    }
    public function show(User $user)
    {
        return view('profile')->with('user', $user);
    }
}
