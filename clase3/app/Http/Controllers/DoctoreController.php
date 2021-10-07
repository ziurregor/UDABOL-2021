<?php

namespace App\Http\Controllers;

use App\Models\Doctore;
use Illuminate\Http\Request;

/**
 * Class DoctoreController
 * @package App\Http\Controllers
 */
class DoctoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctores = Doctore::paginate();

        return view('doctore.index', compact('doctores'))
            ->with('i', (request()->input('page', 1) - 1) * $doctores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctore = new Doctore();
        return view('doctore.create', compact('doctore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Doctore::$rules);

        $doctore = Doctore::create($request->all());

        return redirect()->route('doctores.index')
            ->with('success', 'Doctor creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctore = Doctore::find($id);

        return view('doctore.show', compact('doctore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doctore = Doctore::find($id);

        return view('doctore.edit', compact('doctore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Doctore $doctore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctore $doctore)
    {
        request()->validate(Doctore::$rules);

        $doctore->update($request->all());

        return redirect()->route('doctores.index')
            ->with('success', 'Doctor actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $doctore = Doctore::find($id)->delete();

        return redirect()->route('doctores.index')
            ->with('success', 'Doctor eliminado correctamente');
    }
}
