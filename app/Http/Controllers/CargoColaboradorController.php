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
        $cargoColaborador = CargoColaborador::with('colaborador')->get();
        $cargos = Cargos::all();
        $colaboradores = Colaboradores::all();
        $unidade = Unidade::all();

        return view('cargoColaborador.index', compact('cargoColaborador', 'cargos', 'colaboradores', 'unidade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargoColaborador = CargoColaborador::all();
        $cargos = Cargos::all();
        $colaboradores = Colaboradores::all();
        $unidades = Unidade::all();

        return view('cargoColaborador.create')
            ->with('cargoColaborador', $cargoColaborador)
            ->with('cargos', $cargos)
            ->with('colaboradores', $colaboradores)
            ->with('unidades', $unidades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
     * @param  \App\Models\Cargo_Colaborador  $cargo_Colaborador
     * @return \Illuminate\Http\Response
     */
    public function show(Cargo_Colaborador $cargo_Colaborador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cargo_Colaborador  $cargo_Colaborador
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo_Colaborador $cargo_Colaborador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cargo_Colaborador  $cargo_Colaborador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo_Colaborador $cargo_Colaborador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cargo_Colaborador  $cargo_Colaborador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo_Colaborador $cargo_Colaborador)
    {
        //
    }
}
