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
         return Redirect::to('registros/asistente')->with('Mensaje','Asistente agregado con éxito!!');   
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
        $this->validate($request, [
            'ci'=>'numeric|required|unique:asistente,ci,'. $id.',ci|min:1000000|max:9999999999',
            'nombre'=>'required|max:50|regex:/^[\pL\s\-]+$/u',
            'apellidos'=>'required|max:200|regex:/^[\pL\s\-]+$/u',
            'correo'=>'required|max:200',
            'celular'=>'numeric|required|min:44000000|max:99999999',    
        ]);  
        $asistente=Asistente::findOrFail($id);
        $asistente->ci=$request->get('ci'); 
        $asistente->nombre=$request->get('nombre');  
        $asistente->apellidos=$request->get('apellidos');  
        $asistente->correo=$request->get('correo');   
        $asistente->celular=$request->get('celular');  
        $asistente->update(); 
        return Redirect::to('registros/asistente')->with('Mensaje','Asistente modificado con éxito!!');
    }
    public function destroy($id)
    {
        $asistente=Asistente::findOrFail($id);
        $asistente->condicion='0'; 
        $asistente->update(); 
        return Redirect::to('registros/asistente')->with('Mensaje','Asistente eliminado con éxito!!');
    }
}
