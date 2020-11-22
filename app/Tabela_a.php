<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabela_a extends Model
{
    protected $table = 'tabela_a';

    protected $fillable = [
        'desc', 'valor',
    ];
}
