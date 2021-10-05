<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Asistente;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\asistenteFormRequest;
use DB;

class asistenteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if($request)
        {
            $query=trim($request->get('searchText'));
            $asistentes=DB::table('asistente')->where('nombre','LIKE','%'.$query.'%')
            ->where('condicion','=','1')
            ->orderBy('ci','desc')
            ->paginate(5);
            return view('registros.asistente.index',["asistentes"=>$asistentes,"searchText"=>$query]);
        }
    }
    public function create()
    {
         return view("registros.asistente.create");
    }
    public function store(asistenteFormRequest $request)
    {
         $asistente=new Asistente;
         $asistente->ci=$request->get('ci'); 
         $asistente->nombre=$request->get('nombre');  
         $asistente->apellidos=$request->get('apellidos');  
         $asistente->correo=$request->get('correo');  
         $asistente->celular=$request->get('celular');
         $asistente->condicion='1';
         $asistente->save();
         return Redirect::to('registros/asistente');   
    }
    public function show($id)
    {
         return view("registros.asistente.show",["asistente"=>Asistente::findOrFail($id)]);     
    }
    public function edit($id)
    {
        return view("registros.asistente.edit",["asistente"=>Asistente::findOrFail($id)]);        
    }
    public function update(asistenteFormRequest $request,$id)
    {
        $asistente=Asistente::findOrFail($id);
        $asistente->nombre=$request->get('nombre');  
        $asistente->apellidos=$request->get('apellidos');  
        $asistente->correo=$request->get('correo');   
        $asistente->celular=$request->get('celular');  
        $asistente->update(); 
        return Redirect::to('registros/asistente');
    }
    public function destroy($id)
    {
        $asistente=Asistente::findOrFail($id);
        $asistente->condicion='0'; 
        $asistente->update(); 
        return Redirect::to('registros/asistente');
    }
}
