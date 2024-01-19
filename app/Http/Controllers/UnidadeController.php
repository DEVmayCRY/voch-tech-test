<?php

namespace App\Http\Controllers;

use App\Models\Unidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = Unidade::select('unidades.id','unidades.nome_fantasia','unidades.razao_social', 'unidades.cnpj', DB::raw('COUNT(colaboradores.id) AS `total_colaboradores`'))
        ->leftJoin('colaboradores', 'unidades.id','=','colaboradores.unidade_id')->
        groupBy('unidades.id','unidades.nome_fantasia', 'unidades.razao_social', 'unidades.cnpj')->paginate(10);
        return view('unidade.index', compact('unidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unidade.create');
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
            'nome_fantasia' => 'required',
            'razao_social' => 'required',
            'cnpj' => 'required',
        ]);

        Unidade::create($validatedData);

        return redirect()->to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unidade  $unidade
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $unidade = Unidade::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Unidade  $unidade
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unidade = Unidade::findOrFail($id);
        return view('unidade.edit', compact('unidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unidade  $unidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unidade $unidade)
    {
        $validatedData = $request->validate([
            'nome_fantasia' => 'required',
            'razao_social' => 'required',
            'cnpj' => 'required',
        ]);

        $unidade->update($validatedData);

        return redirect()->route('unidade.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unidade  $unidade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unidade = Unidade::findOrFail($id);
        $unidade->delete();

        return redirect()->route('unidade.index');
    }
}
