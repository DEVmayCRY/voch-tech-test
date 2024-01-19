<?php

namespace App\Http\Controllers;

use App\Models\CargoColaborador;
use App\Models\Cargos;
use App\Models\Colaboradores;
use App\Models\Unidade;
use Illuminate\Http\Request;

class CargoColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargoColaborador = CargoColaborador::with('colaborador')->paginate(15);
        $cargos = Cargos::all();
        $colaboradores = Colaboradores::all();
        $unidade = Unidade::all();

        return view('cargoColaborador.index', compact('cargoColaborador', 'cargos', 'colaboradores', 'unidade'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rank()
    {
        $cargoColaborador = CargoColaborador::with('colaborador')->orderByDesc('nota_desempenho')->paginate(15);
        $cargos = Cargos::all();
        $colaboradores = Colaboradores::all();
        $unidade = Unidade::all();

        return view('cargoColaborador.rank', compact('cargoColaborador', 'cargos', 'colaboradores', 'unidade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargos::all();
        $unidades = Unidade::all();

        return view('cargoColaborador.create')
            ->with('cargos', $cargos)
            ->with('unidades', $unidades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Unidade  $unidade
     * @param  \App\Models\Colaboradores  $colaboradores
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Colaboradores $colaboradores)
    {

        $cargo = $request->get('cargo_id');
        $cargo_id_int = filter_var($cargo, FILTER_SANITIZE_NUMBER_INT);
        $unidade_id = $request->get('unidade_id');
        $unidade_id_int = filter_var($unidade_id, FILTER_SANITIZE_NUMBER_INT);

        $colaborador = Colaboradores::create([
            'nome' => $request->nome,
            'unidade_id' => $unidade_id_int,
            'cpf' => $request->cpf,
            'email' => $request->email,
        ]);

        CargoColaborador::create([
            'cargo_id' => $cargo_id_int,
            'colaborador_id' => $colaborador->id,
            'nota_desempenho' => $request->nota_desempenho,
        ]);

        return redirect()->to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CargoColaborador  $cargo_Colaborador
     * @return \Illuminate\Http\Response
     */
    public function show(CargoColaborador $cargo_Colaborador)
    {
        return 'hello';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CargoColaborador  $cargo_Colaborador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cargoColaborador = CargoColaborador::with('colaborador')->findOrFail($id);
        $cargos = Cargos::all();
        $unidades = Unidade::all();

        return view('cargoColaborador.edit', compact('cargoColaborador', 'cargos', 'unidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CargoColaborador  $cargo_Colaborador
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $cargoColaborador = CargoColaborador::findOrFail($id);

        $cargoColaborador->fill($request->all());

        $cargoColaborador->save();

        return redirect()->to('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CargoColaborador  $cargo_Colaborador
     * @return \Illuminate\Http\Response
     */
    public function destroy(CargoColaborador $cargo_Colaborador)
    {
        //
    }
}
