<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    // use HasFactory;

    protected $table = "alunos";

    protected $fillable = [
        'nome',
        'cpf',
        'telefone'
    ];
}
