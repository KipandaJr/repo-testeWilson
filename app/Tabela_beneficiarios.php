<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabela_beneficiarios extends Model
{
    protected $table = 'tabela_beneficiarios';

    protected $fillable = [
        'name', 'bonus',
    ];
}
