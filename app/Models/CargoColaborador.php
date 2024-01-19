<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoColaborador extends Model
{
    protected $table = 'cargo_colaborador';
    use HasFactory;
    protected $fillable = [
        'cargo_id',
        'colaborador_id',
        'nota_desempenho',
    ];

    public function colaborador()
    {
        return $this->belongsTo('App\Models\Colaboradores');
    }
    public function cargo()
    {
        return $this->belongsTo('App\Models\Cargos');
    }
}
