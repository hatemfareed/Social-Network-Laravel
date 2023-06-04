<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $profile = auth()->user()->profile ;
        return view('Categories.index')->with('profile' , $profile);
    }
}
