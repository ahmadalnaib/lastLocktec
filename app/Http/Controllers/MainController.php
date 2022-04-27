<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Category;
use App\Models\Meta;
use Illuminate\Http\Request;

class MainController extends Controller
{


    public function index()
    {
        $metas=Meta::latest()->take(3)->get();
        $actions=Action::latest()->take(3)->get();
        $categories=Category::with('actions')->get();
        return view('index',compact('categories','actions','metas'));
    }






}
