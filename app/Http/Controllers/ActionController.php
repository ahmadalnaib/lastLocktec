<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Category;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $actions=Action::with('user','category')->paginate(10);
        return view('action',compact('actions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "title" => 'required',
            "body" => 'required',
            'category_id' => 'required',
            "image_path" => "required|image",
            "price" => "required",
            "tecnische" => "required",

        ]);
        $image_path = request('image_path');
        $photo_new_name = time() . $image_path->getClientOriginalName();
        $image_path->move('uploads/actions', $photo_new_name);

        $action = Action::create([
            'title' => $request->title,
            'body' => $request->body,
            'tecnische' => $request->tecnische,
            'image_path' => "uploads/actions/" . $photo_new_name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->id,
            'slug' => str_slug($request->title),
        ]);

        $request->session()->flash('msg', 'Action created');
        return redirect()->route('create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = Action::findOrFail($id);
        return view('edit', compact('action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $action=Action::findOrFail($id);

        $request->validate([
            "title" => 'required',
            "body" => 'required',
            'category_id' => 'required',
            "image_path" => "required|image",
            "price" => "required",
            "tecnische" => "required",

        ]);
        if($request->hasFile('image_path')){
            $image_path=request('image_path');
            $photo_new_name=time().$image_path->getClientOriginalName();
            $image_path->move('uploads/posts/',$photo_new_name);

            $image_path->photo='uploads/actions/'.$photo_new_name;
        }

        $action->update([
            $action->title= request('title') ,
            $action->body= request('body') ,
            $action->price= request('price') ,
            $action->tecnische= request('tecnische') ,
            $action->category_id=>request('category_id'),
            $action->save()
        ]);


        $request->session()->flash('msg', 'Task was successful!');
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    // public function getByCategory()
    // {
    //     // $actions = Action::with('category:id,title')->whereCategoryId($id)->whereApproved(true)->get();
    //     // return view('action', compact('actions'));

    //     $categories = Category::with('actions')->get();
    //     return view('action', compact('categories'));

    // }
}
