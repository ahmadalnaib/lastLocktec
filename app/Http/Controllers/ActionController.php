<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return view('actions.index',compact('actions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actions.create');
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
            "image_path" => "required|image|max:2048",
            "price" => "required",
            "tecnische" => "required",

        ]);


        $action = Action::create([
            'title' => $request->title,
            'body' => $request->body,
            'tecnische' => $request->tecnische,
            'image_path'=>$request->image_path->store('images','public'),
            'price' => $request->price,
            'category_id' => $request->category_id,
            'user_id' => auth()->user()->id,
            'slug' => str_slug($request->title),
        ]);

        return redirect()->route('actions.index')
        ->with('success','Actions Create successfully');
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
        return view('actions.edit', compact('action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Action $action)
    {
        $request->validate([
            "title" => 'required',
            "body" => 'required',
            'category_id' => 'required',
            "image_path" => "required|image|max:2048",
            "price" => "required",
            "tecnische" => "required",

        ]);
        $data=$request->only(['title','body','tecnische','price','category_id']);

      if($request->hasFile('image_path')){
          $image=$request->image_path->store('images','public');
          Storage::disk('public')->delete($action->image_path);
          $data['image_path']=$image;
      }
        $action->update($data);


        return redirect()->route('actions.index')
            ->with('success','Job updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Action $action)
    {
        // $this->authorize('delete',$action);
      $action->delete();
        Storage::disk('public')->delete($action->image_path);
        $action->delete();
        return redirect()->back();
    }


    // public function getByCategory()
    // {
    //     // $actions = Action::with('category:id,title')->whereCategoryId($id)->whereApproved(true)->get();
    //     // return view('action', compact('actions'));

    //     $categories = Category::with('actions')->get();
    //     return view('action', compact('categories'));

    // }
}
