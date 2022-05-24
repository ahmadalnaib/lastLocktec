<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use Illuminate\Http\Request;

class MetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metas=Meta::latest()->simplePaginate(8);
        return view('meta.index',compact('metas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('meta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMetaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Meta $meta)
    {

        $request->validate([
            "title" => 'required',

        ]);

              $data['title']=$request->title;
              $data['description']=$request->description;
              $data['keywords']=$request->keywords;
              $meta = Meta::create($data);
              return  redirect()->route('meta.index')
              ->with('success','Meta created succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function show(Meta $meta)
    {




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function edit(Meta $meta)
    {
       return view('meta.edit',compact('meta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMetaRequest  $request
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Meta $meta)
    {



        $data['title']=$request->title;
        $data['description']=$request->description;
        $data['keywords']=$request->keywords;

        $meta->update($data);
        // $meta->update([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'keywords' => $request->keywords,
        // ]);


        return redirect()->route('meta.index')
        ->with('success','Job updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meta $meta)
    {
        //
    }
}
