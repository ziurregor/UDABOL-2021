<?php

namespace App\Http\Controllers;

use App\Models\paciente;
use Illuminate\Http\Request;

class pacienteController extends Controller
{
    public function index()
    {
        $contacts = paciente::all();

        return view('paciente.index', compact('contacts'));
    }
    public function create()
    {
        return view('paciente.paciente');
    }
    public function store(Request $request)
    {
        $request->validate([]);

        $contact = new paciente([
            'ci_p' => $request->get('ci_p'),
            'nombre_p' => $request->get('nombre_p'),
            'apellidos_p' => $request->get('apellidos_p'),
            'edad_p' => $request->get('edad_p'),
            'telefono_p' => $request->get('telefono_p'),
            'direccion_p' => $request->get('direccion_p'),
            'departamento_p' => $request->get('departamento_p'),
            'sexo_p' => $request->get('sexo_p'),
            'fechanac_p' => $request->get('fechanac_p'),
            'correo_p' => $request->get('correo_p'),
        ]);
        $contact->save();
        return redirect('/paciente')->with('success', 'Paciente saved!');
    }
    public function edit($id)
    {
        $contact = paciente::find($id);
        return view('paciente.edit', compact('contact'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([]);

        $contact = paciente::find($id);
        $contact->ci_p =  $request->get('ci_p');
        $contact->nombre_p = $request->get('nombre_p');
        $contact->apellidos_p =  $request->get('apellidos_p');
        $contact->edad_p =  $request->get('edad_p');
        $contact->telefono_p = $request->get('telefono_p');
        $contact->direccion_p =  $request->get('direccion_p');
        $contact->departamento_p =  $request->get('departamento_p');
        $contact->sexo_p = $request->get('sexo_p');
        $contact->fechanac_p =  $request->get('fechanac_p');
        $contact->correo_p = $request->get('correo_p');
        $contact->save();

        return redirect('/paciente')->with('success', 'Paciente updated!');
    }
    public function destroy($id)
    {
        $contact = paciente::find($id);
        $contact->delete();

        return redirect('/paciente')->with('success', 'Paciente deleted!');
    }
}
