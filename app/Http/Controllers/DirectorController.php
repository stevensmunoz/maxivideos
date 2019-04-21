<?php

namespace App\Http\Controllers;

use App\Director;
use Illuminate\Http\Request;
use App\Http\Requests\Directors\StoreDirectorRequest;
use App\Http\Requests\Directors\UpdateDirectorRequest;
use Session;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = Director::orderby('id','desc')->paginate(4);
        return view('directors.index',compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('directors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDirectorRequest $request)
    {
        Director::create($request->all());

        Session::flash('message','Director creado correctamente');
        return redirect()->route('directors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function show(Director $director)
    {
        return view('directors.show',compact('director'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function edit(Director $director)
    {
        return view('directors.edit',compact('director'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDirectorRequest $request, Director $director)
    {
       $director->update($request->all());

        Session::flash('message','Director actualizado correctamente');
        return redirect()->route('directors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Director  $director
     * @return \Illuminate\Http\Response
     */
    public function destroy(Director $director)
    {
        $director->delete();
        Session::flash('message','Director ha sido borrado correctamente');
        return redirect()->route('directors.index');

    }
}
