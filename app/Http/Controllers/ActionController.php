<?php

namespace App\Http\Controllers;

use App\Models\Action;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $actions = Action::with('user', 'category')->paginate(10);
        return view('actions.index', compact('actions'));
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



        // foreach(config('locales.languages') as $key =>$val){
        //     $attr['title.' .$key]= 'required';
        //     $attr['body.' .$key]='required';
        //     $attr['tecnische.' .$key]='required';
        //     $attr['image_path.' .$key]='required';
        //     $attr['category_id.' .$key]='required';
        // }

        // $validation=Validator::make($request->all(),$attr);

        // if($validation->fails()){
        //     return redirect()->back()->withErrors($validation)->withInput();
        // }

        // dd($request->all());
        $data['title']=$request->title;
        $data['body']=$request->body;
        $data['tecnische']=$request->tecnische;
        $data['price']=$request->price;
        $data['image_path']=$request->image_path->store('images','public');
        $data['user_id']= auth()->user()->id;
        $data['category_id'] = $request->category_id;
        $action = Action::create($data);
        return redirect()->route('actions.index');

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

        if ($request->hasFile('image_path')) {
            $image = $request->image_path->store('images', 'public');
            Storage::disk('public')->delete($action->image_path);
            $data['image_path'] = $image;
        }
        $data['title']=$request->title;
        $data['body']=$request->body;
        $data['tecnische']=$request->tecnische;
        $data['price']=$request->price;
        $data['user_id']= auth()->user()->id;
        $data['category_id'] = $request->category_id;
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
        // $action->delete();
        // return redirect()->back();
        // $action = Action::where(app()->getLocale(), $action)->first()->delete();
        return redirect()->route('actions.index');
    }


    // public function getByCategory()
    // {
    //     // $actions = Action::with('category:id,title')->whereCategoryId($id)->whereApproved(true)->get();
    //     // return view('action', compact('actions'));

    //     $categories = Category::with('actions')->get();
    //     return view('action', compact('categories'));

    // }
}
