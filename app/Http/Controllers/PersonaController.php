<?php

namespace App\Http\Controllers;

use App\persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $retorno['datos']=Persona::paginate(10);
        return  view('personas.index',$retorno);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('personas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pers=request()->except('_token');
        Persona::insert($pers);
        return redirect('personas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $pers=Persona::findOrFail($id);
        return view('personas.editar', compact('pers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $pers=request()->except(['_token','_method']);
        Persona::where('id','=',$id)->Update($pers);
        return redirect('/personas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Persona::destroy($id);
        return redirect('personas');
    }
}
