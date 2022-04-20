<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function index()
    {

        $categories=Category::with('actions')->get();
        return view('index',compact('categories'));
    }


}
