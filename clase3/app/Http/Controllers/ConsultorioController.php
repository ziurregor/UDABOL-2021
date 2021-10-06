<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultorio;

class ConsultorioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
    public function index()
    {
        $consultorios = Consultorio::all();
        return view('consultorio.index')->with('consultorios',$consultorios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('consultorio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consultorios = new Consultorio();
        $consultorios->codigo = $request->get('codigo');
        $consultorios->nombre = $request->get('nombre');
        
        $consultorios->telefono = $request->get('telefono');

        $consultorios->save();

        return redirect('/consultorios');
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
        $consultorio = Consultorio::find($id);
        return view('consultorio.edit')->with('consultorio',$consultorio);
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
        $consultorio = Consultorio::find($id);
        $consultorio->codigo = $request->get('codigo');
        $consultorio->nombre = $request->get('nombre');
        
        $consultorio->telefono = $request->get('telefono');

        $consultorio->save();

        return redirect('/consultorios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $consultorio = consultorio::find($id);        
        $consultorio->delete();

        return redirect('/consultorios');
    }
}
