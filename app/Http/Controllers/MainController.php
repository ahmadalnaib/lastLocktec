<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function index()
    {
        $actions=Action::latest()->take(3)->get();
        $categories=Category::with('actions')->get();
        return view('index',compact('categories','actions'));
    }



    public function show(Action $action)

    {

        return view('show',compact('action'));

    }





}
