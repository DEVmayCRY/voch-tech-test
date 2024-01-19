<?php

namespace App\Http\Controllers;

use App\Models\Colaboradores;
use App\Models\Unidade;
use Illuminate\Http\Request;

class ColaboradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colaboradores = Colaboradores::all();
        $unidade = Unidade::all();

        return view('colaboradores.index', compact('colaboradores', 'unidade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colaboradores = Colaboradores::all();
        $unidades = Unidade::all();

        return view('colaboradores.create')->with('colaboradores', $colaboradores)->with('unidades', $unidades);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required',
            'unidade_id' => 'required',
            'cpf' => 'required',
            'email' => 'required',
        ]);

        Colaboradores::create($validatedData);

        return redirect()->route('colaboradores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colaboradores  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $colaboradores = Colaboradores::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Colaboradores  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colaboradores = Colaboradores::findOrFail($id);
        return view('colaboradores.edit', compact('colaboradores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Colaboradores  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colaboradores $colaboradores)
    {
        $validatedData = $request->validate([
            'nome' => 'required',
            'cargo_id' => 'required',
            'cpf' => 'required',
            'email' => 'required',
        ]);

        $colaboradores->update($validatedData);

        return redirect()->route('colaboradores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colaboradores  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $colaboradores = Colaboradores::findOrFail($id);
        $colaboradores->delete();

        return redirect()->route('colaboradores.index');
    }
}
