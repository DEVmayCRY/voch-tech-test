<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaboradores extends Model
{
    use HasFactory;

    protected $fillable = [
        'unidade_id',
        'nome',
        'cpf',
        'email',
    ];

    public function unidade()
    {
        return $this->belongsTo('App\Models\Unidade');
    }
}
