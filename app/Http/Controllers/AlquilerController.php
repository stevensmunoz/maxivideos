<?php

namespace App\Http\Controllers;

use App\Alquiler;
use App\Pelicula;
use App\Cliente;
use Illuminate\Http\Request;
use Session;

class AlquilerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alquilers = Alquiler::orderby('id','desc')->paginate(3);

        return view('alquilers.index', compact('alquilers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peliculas = Pelicula::all();
        $clientes = Cliente::all();

        return view('alquilers.create',compact('peliculas','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($fecha = $request->input('fecha_alq'));

        $request->validate([
            'id_pelicula' => 'required',
            'id_cliente' => 'required',
            'fecha_alq' => 'date',
        ]);


        Alquiler::create($request->all());

        Session::flash('message','se ha alquilado pelicula');
        return redirect()->route('alquilers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function show(Alquiler $alquiler)
    {



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function edit(Alquiler $alquiler)
    {
        $peliculas = Pelicula::all();
        $clientes = Cliente::all();

        return view('alquilers.edit',compact('alquiler','peliculas','clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alquiler $alquiler)
    {

        $request->validate([
            'id_pelicula' => 'required',
            'id_cliente' => 'required',
            'fecha_alquiler' => 'date',

        ]);


        $alquiler->update($request->all());

        Session::flash('message','se ha actualizado informacion de alquiler');
        return redirect()->route('alquilers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alquiler  $alquiler
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alquiler $alquiler)
    {
        $alquiler->delete();
        Session::flash('message','Información de alquiler ha sido borrado correctamente');
        return redirect()->route('alquilers.index');
    }
}
