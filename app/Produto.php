<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'name', 'descricao', 'data', 'preco', 'lote', 'avaliacao',
    ];
}